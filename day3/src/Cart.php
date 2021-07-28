<?php

namespace App;

class Cart
{
    public array $cart;
    
    public function add($item){
        
        $n=0;
        if(!isset($this->cart)){
            $this->cart[] = $item;
        }

        else{
            foreach($this->cart as $key => $value){
                if($value->id == $item->id){
                    $this->cart[$key]->qty += 1;
                    $n=1;
                }
            }
            if($n == 0)$this->cart[] = $item;
        }
        
    }

    public function increase($id){
        foreach($this->cart as $key => $value){
            if($value->id == $id){
                $this->cart[$key]->qty += 1;
            }
        }
    }

    public function decrease($id){
        foreach($this->cart as $key => $value){
            if($value->id == $id){
                $this->cart[$key]->qty -= 1;
                if($this->cart[$key]->qty == 0){
                    unset($this->cart[$key]);
                }
            }
        }
    }

    public function remove($id){
        foreach($this->cart as $key => $value){
            if($value->id == $id){
                unset($this->cart[$key]);
            }
        }
    }

    public function total(){
        $total=0;
        foreach($this->cart as $value){
            $total+=($value->price*$value->qty);
        }
        return $total;
    }

    public function count(){
        $total=0;
        foreach($this->cart as $value){
            $total+=$value->qty;
        }
        return $total;
    }

    public function clear(){
        $this->cart = array();
    }

    public function list(){
        return $this->cart;
    }
}