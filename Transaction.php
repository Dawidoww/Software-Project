<?php

class Transaction
{
    private int $orderID;
    private float $amountPayed;

    public function __construct($orderID,$amountPayed)
    {
        $this->orderID = $orderID;
        $this->amountPayed = $amountPayed;
    }
    public function getAmountPayed(): float
    {
        return $this->amountPayed;
    }
    public function setAmountPayed(float $amountPayed): void
    {
        $this->amountPayed = $amountPayed;
    }

    public function getOrderID(): int
    {
        return $this->orderID;
    }
    public function setOrderID(int $orderID): void
    {
        $this->orderID = $orderID;
    }
    public function storeTransaction()
    {
        echo "The Transaction of order ($this->orderID) of price £$this->amountPayed will be stored in our System.\n";
    }
}