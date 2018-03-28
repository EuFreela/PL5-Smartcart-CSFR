<?php

namespace Lameck\Smartcart\Storage;

Class Cart
{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0,'price' => $item->outunitaryprice,'item' => $item];
        if($this->items)
        {
            if(array_key_exists($id,$this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->outunitaryprice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->outunitaryprice;
    }

    public function reduceByOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']->outunitaryprice;
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']->outunitaryprice;
        if($this->items[$id]['qty'] <= 0)
            unset($this->items[$id]);
    }

    public function removeAll($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function eraseCart()
    {
        unset($this->items);
    }


}