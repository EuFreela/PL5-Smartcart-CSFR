@extends('Lameck\Smartcart::layouts.app')

@section('title', 'Carrinho')

@section('styles')
<style type="text/css">
    a:link{text-decoration:none;}
</style>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        @if( Session::has('flash_msg_erasecart') )
        <div class="alert alert-danger">            
            <strong>{{ Session::get('flash_msg_erasecart') }}</strong>
            <a href="{{route('shop.getEraseCart')}}" class="btn btn-danger">Sim</a>
            <a href="{{route('shop.index')}}" class="btn btn-primary">Cancelar</a>
        </div>
        @endif
        </div>
    </div>


    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $prd)
                    <li class="list-group-item">                  
                                              
                        <span class="badge">{{$prd['qty']}}</span>
                        <strong>{{$prd['item']->nameproduct}}</strong>
                        <span class="label label-success">R${{$prd['price']}}</span>
                        <a href="{{route('shop.getReduceByOne',['id'=>$prd['item']->idproduct])}}"><span class="label label-danger">-1</span></a>
                        <a href="{{route('shop.getRemoveAll',['id'=>$prd['item']->idproduct])}}"><span class="label label-danger"><i class="fas fa-trash-alt"></i></span></a>
                        
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('shop.getcheckout')}}" type="button" class="btn btn-success">Checkout</a>
                <a href="{{route('shop.getDoingEraseCart')}}" class="btn btn-danger pull-right">Esvaziar carrinho</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Não há items no carrinho!</h2>
            </div>
        </div>
    @endif

@endsection