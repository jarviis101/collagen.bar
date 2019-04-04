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
        public function add($item, $slug)
        {
            $storedItem = ['counts'=> 0, 'price'=>$item->price, 'item'=>$item];

            if ($this->items)
            {
                if(array_key_exists($slug, $this->items))
                {
                    $storedItem = $this->items[$slug];
                }
            }

            $storedItem['counts']++;
            $storedItem['price'] = $item->price * $storedItem['counts'];
                
            $this->items[$slug] = $storedItem;
            $this->totalCounts++;
        }
    
        public function delete($item, $slug)
        {
            $storedItem = ['counts'=> 0, 'price'=>$item->price, 'item'=>$item];
            if ($this->items)
            {
                if(array_key_exists($slug, $this->items))
                {
                    $storedItem = $this->items[$slug];
                }
            }

            $storedItem['counts']--;
            $storedItem['price'] = $item->price * $storedItem['counts'];

            $this->items[$slug] = $storedItem;
            $this->totalCounts--;

            if($this->items[$slug]['counts'] <= 0)
            {
                unset($this->items[$slug]);
            }
        }
        
        public function reduceByOne($slug)
        {
            $this->items[$slug]['counts']--;
            $this->totalCounts--;
            
            $storedItem['price'] = $this->items[$slug]['price'] * $this->items[$slug]['counts'];

            if($this->items[$slug]['counts'] <= 0)
            {
                unset($this->items[$slug]);
            }
        }
    
        public function removeItem($slug)
        {
            $this->totalCounts -= $this->items[$slug]['counts'];
            unset($this->items[$slug]);
        }
    }