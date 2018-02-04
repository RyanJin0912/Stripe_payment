<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2018/1/29
 * Time: 下午 10:45
 */

namespace App;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice=0;


            public function __construct($oldcart)
            {
                if($oldcart)
                {
                    $this->items = $oldcart->items;//☆
                    $this->totalQty = $oldcart->totalQty;
                    $this->totalPrice = $oldcart->totalPrice;
                }

            }
            //__construct($oldcart)
            //$this->items = $oldcart->items;//☆
//            $this->totalQty = $oldcart->totalQty;
//            $this->totalPrice = $oldcart->totalPrice;



            public function add($item,$id)
            {
                    $storedItems =[
                        'qty'=>0,
                        'price'=>$item->price,
                        'item'=>$item
                    ];
                    //products databases


                        if($this->items)
                        {
                            if(array_key_exists($id,$this->items))
                            {
                                $storedItems = $this->items[$id];
                            }
                        }//$this->items


                    $storedItems['qty']++;
                    $storedItems['price'] = $item->price * $storedItems['qty'];

                        $this->items[$id] = $storedItems;
                        $this->totalQty++;
                        $this->totalPrice += $item->price;


            }//add($item,$id)

}