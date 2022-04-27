<?php
//this is a class Payment
class Payment
{
    private int $paymentID;
    private float $amount;
    //this is a constructor
    public function __construct($amount,$paymentID)
    {
        $this->amount = $amount;
        $this->paymentID = $paymentID;
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
    //get/set for ID
    public function getPaymentID(): float
    {
        return $this->paymentID;
    }
    public function setPaymentID(int $paymentID): void
    {
        $this->paymentID = $paymentID;
    }
    //this function states how much has to be paid
    public function toBePayed()
    {
        echo "The amount to be paid is £$this->amount for PaymentID($this->paymentID).";
    }
}