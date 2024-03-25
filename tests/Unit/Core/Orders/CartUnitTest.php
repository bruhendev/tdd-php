<?php

namespace Tests\Core\Orders;

use Core\Orders\Cart;
use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class CartUnitTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();
        $cart->add(new Product(
            id: '1',
            name: "teste",
            price: 12,
            total: 1
        ));

        $cart->add(new Product(
            id: '2',
            name: "teste2",
            price: 20,
            total: 1
        ));

        $this->assertCount(2,  $cart->getItems());
        $this->assertEquals(32,  $cart->total());
       
    }

    public function testCartTotal()
    {
        $cart = new Cart();
        $product1 = new Product(
            id: '1',
            name: "teste",
            price: 12,
            total: 1
        );

        $cart->add($product1);
        $cart->add($product1);

        $cart->add(new Product(
            id: '2',
            name: "teste2",
            price: 20,
            total: 1
        ));

        $cart->add(new Product(
            id: '2',
            name: "teste2",
            price: 20,
            total: 1
        ));

        $this->assertCount(2,  $cart->getItems());
        $this->assertEquals(64,  $cart->total());
       
    }

    public function testCartEmpty()
    {
        $cart = new Cart();

        $this->assertCount(0,  $cart->getItems());
        $this->assertEquals(0,  $cart->total());
       
    }
}
