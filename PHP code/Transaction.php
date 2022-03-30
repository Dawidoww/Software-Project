<?php

class Transaction
{
    private int $transactionID;
    private float $amountPayed;

    public function __construct($transactionID,$amountPayed)
    {
        $this->transactionID = $transactionID;
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

    public function getTransactionID(): int
    {
        return $this->transactionID;
    }
    public function setTransactionID(int $transactionID): void
    {
        $this->transactionID = $transactionID;
    }
    public function storeTransaction()
    {
        echo "The Transaction of order ($this->transactionID) of price £$this->amountPayed will be stored in our System.\n";
    }
}