<?php

namespace Tests;

use App\Cart;
use App\Item;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public $cart;
    private $itemMie;
    private $itemWater;

    public function setUp(): void
    {
        parent::setUp();

        $this->cart = new Cart();

        $this->itemMie = new Item('SKU-001', 'Mie', 2400);
        $this->itemWater = new Item('SKU-002', 'Water', 6000);
    }

    public function test_add_item_to_cart()
    {
        $this->cart->add($this->itemMie);

        $item = $this->cart->list()[0];

        $this->assertInstanceOf(Item::class, $item);
        $this->assertEquals('SKU-001', $item->id);
        $this->assertEquals('Mie', $item->name);
        $this->assertEquals(2400, $item->price);
        $this->assertEquals(1, $item->qty);
    }

    public function test_increase_qty()
    {
        $this->cart->add($this->itemMie);

        $this->cart->increase('SKU-001');
        $this->cart->increase('SKU-001');

        $item = $this->cart->list()[0];

        $this->assertEquals(3, $item->qty);
    }

    public function test_decrease_qty()
    {
        $this->cart->add($this->itemMie);

        $this->cart->increase('SKU-001');
        $this->cart->increase('SKU-001');
        $this->cart->decrease('SKU-001');

        $item = $this->cart->list()[0];

        $this->assertEquals(2, $item->qty);
    }

    public function test_decrease_qty_to_zero()
    {
        $this->cart->add($this->itemMie);     // 1

        $this->cart->increase('SKU-001'); // 2
        $this->cart->decrease('SKU-001'); // 1
        $this->cart->decrease('SKU-001'); // 0

        $count = count($this->cart->list());

        $this->assertEquals(0, $count);
    }

    public function test_remove_item()
    {
        $this->cart->add($this->itemMie);

        $this->cart->remove('SKU-001');

        $count = count($this->cart->list());

        $this->assertEquals(0, $count);
    }

    public function test_total()
    {
        $this->cart->add($this->itemMie);
        $this->cart->add($this->itemWater);

        $this->cart->increase('SKU-001');
        $this->cart->increase('SKU-002');

        $total = $this->cart->total();

        $this->assertEquals(16800, $total);
    }

    public function test_clear()
    {
        $this->cart->add($this->itemMie);
        $this->cart->add($this->itemWater);

        $this->cart->clear();

        $count = $this->cart->count();

        $this->assertEquals(0, $count);
    }

    public function test_add_more_same_item_to_cart()
    {
        $this->cart->add($this->itemMie);
        $this->cart->add($this->itemMie);
        $this->cart->add($this->itemMie);

        $item = $this->cart->list()[0];

        $this->assertInstanceOf(Item::class, $item);
        $this->assertEquals('SKU-001', $item->id);
        $this->assertEquals('Mie', $item->name);
        $this->assertEquals(2400, $item->price);
        $this->assertEquals(3, $item->qty);
    }

}
