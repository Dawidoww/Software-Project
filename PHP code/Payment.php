<?php
//this is a class Payment
class Payment
{
    private float $amount;
    //this is a constructor
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    //get/set for amount
    public function getAmount(): float
    {
        return $this->amount;
    }
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
    //this function states how much has to be paid
    public function toBePayed()
    {
        echo "The amount to be paid is £$this->amount.";
    }
}