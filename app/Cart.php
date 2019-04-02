<?php

    namespace App;

    class Cart
    {
        public $items = null;
        public $totalCounts = 0;
        public $totalPrice = 0;

        public function __construct($oldCart)
        {
            if($oldCart)
            {
                $this->items = $oldCart->items;
                $this->totalCounts = $oldCart->totalCounts;
                $this->totalPrice = $oldCart->totalPrice;
            }
        }
        public function add($item, $id)
        {
            $storedItem = ['counts'=> 0, 'price'=>$item->price, 'item'=>$item];

            if ($this->items)
            {
                if(array_key_exists($id, $this->items))
                {
                    $storedItem = $this->items[$id];
                }
            }

            $storedItem['counts']++;
            $storedItem['price'] = $item->price * $storedItem['counts'];
                
            $this->items[$id] = $storedItem;
            $this->totalCounts++;
        }
    
        public function delete($item, $id)
        {
            $storedItem = ['counts'=> 0, 'price'=>$item->price, 'item'=>$item];
            if ($this->items)
            {
                if(array_key_exists($id, $this->items))
                {
                    $storedItem = $this->items[$id];
                }
            }

            $storedItem['counts']--;
            $storedItem['price'] = $item->price * $storedItem['counts'];

            $this->items[$id] = $storedItem;
            $this->totalCounts--;

            if($this->items[$id]['counts'] <= 0)
            {
                unset($this->items[$id]);
            }
        }
        
        public function reduceByOne($id)
        {
            $this->items[$id]['counts']--;
            $this->totalCounts--;
            
            $storedItem['price'] = $this->items[$id]['price'] * $this->items[$id]['counts'];

            if($this->items[$id]['counts'] <= 0)
            {
                unset($this->items[$id]);
            }
        }
    
        public function removeItem($id)
        {
            $this->totalCounts -= $this->items[$id]['counts'];
            unset($this->items[$id]);
        }
    }