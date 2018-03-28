<?php

namespace Lameck\Smartcart\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Lameck\Smartcart\Models\Product;
use Lameck\Smartcart\Storage\Cart;
use Session;

use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $product = DB::table('product')
                    ->join('inventory', 'product.codeproduct','=','inventory.product_codeproduct')
                    ->get();       
        return view('Lameck\Smartcart::shop.index')->with(['product' => $product]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = DB::table('product')
                    ->join('inventory', 'product.codeproduct','=','inventory.product_codeproduct')
                    ->where('product.idproduct','=',$id)
                    ->get(); 

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        
        $cart = new Cart($oldCart);
        $cart->add($product[0], $product[0]->idproduct);

        $request->session()->put('cart',$cart);
        return redirect()->route('shop.index');

    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        
        if(count($cart->items) > 0)
            Session::put('cart',$cart);
        else
            Session::forget('cart');

        return redirect()->route('shop.Cart');
    }

    public function getRemoveAll($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);        
        $cart->removeAll($id);

        if(count($cart->items) > 0)
            Session::put('cart',$cart);
        else
            Session::forget('cart');

        return redirect()->route('shop.Cart');
    }

    public function getDoingEraseCart()
    {
        return redirect()->back()->with('flash_msg_erasecart','Gostaria realmente de apagar todos os itens do carrinho?');
    }

    public function getEraseCart()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);        
        $cart->eraseCart();
        Session::put('cart',0);
        Session::forget('cart');
        return redirect()->route('shop.Cart');
    }


    public function getCart()
    {
        if(!Session::has('cart'))        
            return view('Lameck\Smartcart::shop.cart');
        
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('Lameck\Smartcart::shop.cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }

    public function getCheckout()
    {
        if(!Session::has('cart'))        
            return view('Lameck\Smartcart::shop.cart');
        
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $total = $oldcart->totalPrice;
        return view('Lameck\Smartcart::shop.checkout',['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        print_r($request->input());
    }


}
