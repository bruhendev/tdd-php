<?php

namespace Core\Payment;

class PagarMe implements PaymentInterface
{
    public function createPlan(array $data): bool
    {
        return true;
    }
    
    public function findClientById(string $id): ?object
    {
        return null;
    }

    public function makePayment(array $data): bool
    {
        return \true;
    }
}
