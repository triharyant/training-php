<?php

namespace App;

class Item
{
    public $id;
    public $name;
    public $price;
    public $qty;

    public function __construct($nmr,$nama,$harga){
        $this->id=$nmr;
        $this->name=$nama;
        $this->price=$harga;
        $this->qty=1;
    }

}