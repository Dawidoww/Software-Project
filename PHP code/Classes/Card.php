<?php
//this is the card class
class Card extends Payment
{
    private int $cardNumber;
    private String $type;
    private int $cvv;
    //This conctructor takes parent constructor of class payment
    public function __construct($cvv, $type, $cardNumber,$amount,$paymentID)
    {
        parent::__construct($amount,$paymentID);
        $this->cvv = $cvv;
        $this->type = $type;
        $this->cardNumber = $cardNumber;
    }
    //get/set of number
    public function getCardNumber(): int
    {
        return $this->cardNumber;
    }
    public function setCardNumber(int $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }
    //get/set of cvv
    public function getCvv(): int
    {
        return $this->cvv;
    }
    public function setCvv(int $cvv): void
    {
        $this->cvv = $cvv;
    }
    //get/set of type
    public function getType(): string
    {
        return $this->type;
    }
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    //this function authorizes the card if its valid
    public function Authorize()
    {
        echo "The $this->type card of number $this->cardNumber has been Authorized \n";
    }
}