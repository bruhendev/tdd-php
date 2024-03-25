<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentControllerUnitTest extends TestCase
{
    public function testCategory()
    {
        $mockPayment = Mockery::mock(PaymentInterface::class);
        $mockPayment->shouldReceive('makePayment')->andReturn(true);

        $payment = new PaymentController($mockPayment);

        $response = $payment->execute();

        $this->assertTrue($response);
    }

    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }
}
