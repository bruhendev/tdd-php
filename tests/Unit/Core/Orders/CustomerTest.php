<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $customer = new Customer(
            name: "Bruno"
        );
        $this->assertEquals("Bruno", $customer->getName());

        $customer->changeName(name: "new Name");
        $this->assertEquals("new Name", $customer->getName());

        $this->assertTrue(\true);
    }
}