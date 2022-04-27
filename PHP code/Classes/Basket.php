<?php
//This is a basket class
class Basket
{
    private int $amount;
    private String $planName;

    public function __construct($amount ,$planName)
    {
        $this->amount = $amount;
        $this->planName = $planName;
    }
    //get/set quantity
    public function getAmount(): int
    {
        return $this->amount;
    }
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
    //get/set planName
    public function getPlanName(): string
    {
        return $this->planName;
    }
    public function setPlanName(string $planName): void
    {
        $this->planName = $planName;
    }
    //this function checks for the amount of quantity in a basket and proceeds to check out
    public function CheckOut(){echo "Please check out and finalise your order.\n";}
    //this function add an item to the basket
    public function AddItem(){echo "Item $this->planName has been added to the basket.\n";}
    //this function removes an item from basket
    public function RemoveItem(){echo "Item $this->planName has been removed from the basket.\n";}
    //this function calculates the total of the basket
    public function calcTotal(){echo "The total of the basket is $this->amount\n";
    }
}