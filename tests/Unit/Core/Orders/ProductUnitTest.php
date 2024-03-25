<?php

namespace Tests\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testCalc()
    {
        $product = new Product(
            id: '1',
            name: "prodx",
            price: 12.50,
            total: 12
        );

        $this->assertEquals('prodx', $product->getName());
        $this->assertEquals(12.50, $product->getPrice());
        $this->assertEquals(150,  $product->total());
        $this->assertEquals(165,  $product->totalWithTax10());
      
    }
}