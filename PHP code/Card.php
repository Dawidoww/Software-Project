<?php
//this is the card class
class Card extends Payment
{
    private int $number;
    private String $type;
    private int $cvv;
    //This conctructor takes parent constructor of class payment
    public function __construct($cvv, $type, $number,$amount)
    {
        parent::__construct($amount);
        $this->cvv = $cvv;
        $this->type = $type;
        $this->number = $number;
    }
    //get/set of number
    public function getNumber(): int
    {
        return $this->number;
    }
    public function setNumber(int $number): void
    {
        $this->number = $number;
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
        echo "The $this->type card of number $this->number has been Authorized \n";
    }
}