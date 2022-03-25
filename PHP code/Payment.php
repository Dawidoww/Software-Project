<?php

class Payment
{
    private float $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount(): float
    {
        return $this->amount;
    }
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function toBePayed()
    {
        echo "The amount to be paid is £$this->amount.";
    }
}