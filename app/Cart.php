<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    //
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
      if ($oldCart){
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
      }
    }
    public function add($item, $pro_id){
      $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
      if ($this->items) {
        if (array_key_exists($pro_id, $this->item)) {
          $storedItem = $this->items[$pro_id];
        }
      }
      $storedItem['qty']++;
      $storedItem['price'] = $item->price * $storedItem['qty'];
      $this->items[$pro_id] = $storedItem;
      $this->totalQty++;
      $this->totalPrice +=$item->price;
    }
}
