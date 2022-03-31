<?php
//this class is the transaction class
class Transaction
{
    private int $transactionID;
    private float $amountPayed;
// this is a constructor for this class
    public function __construct($transactionID,$amountPayed)
    {
        $this->transactionID = $transactionID;
        $this->amountPayed = $amountPayed;
    }
    //get/set for amount payed
    public function getAmountPayed(): float
    {
        return $this->amountPayed;
    }
    public function setAmountPayed(float $amountPayed): void
    {
        $this->amountPayed = $amountPayed;
    }
    //get/set for transaction id
    public function getTransactionID(): int
    {
        return $this->transactionID;
    }
    public function setTransactionID(int $transactionID): void
    {
        $this->transactionID = $transactionID;
    }
    //this function stores all the transaction
    public function storeTransaction()
    {
        echo "The Transaction of order ($this->transactionID) of price £$this->amountPayed will be stored in our System.\n";
    }
}