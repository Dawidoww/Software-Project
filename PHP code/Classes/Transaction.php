<?php
//this class is the transaction class
class Transaction
{
    private int $transactionID;
    private float $amount;
// this is a constructor for this class
    public function __construct($transactionID,$amount)
    {
        $this->transactionID = $transactionID;
        $this->amount = $amount;
    }
    //get/set for amount payed
    public function getAmount(): float
    {
        return $this->amount;
    }
    public function setAmountPayed(float $amount): void
    {
        $this->amount = $amount;
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
        echo "TransactionID($this->transactionID) of price £$this->amount will be stored in our System.\n";
    }
}