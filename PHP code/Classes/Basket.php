<?php
//This is a basket class
class Basket
{
    private int $quantity;
    private String $planName;

    public function __construct($quantity ,$planName)
    {
        $this->quantity = $quantity;
        $this->planName = $planName;
    }
    //get/set quantity
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
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
    public function CheckOut(){echo "There is $this->quantity items in your basket. If you are happy to proceed please checkout.\n";}
    //this function add an item to the basket
    public function AddItem(){echo "Item $this->planName has been added to the basket.\n";}
    //this function removes an item from basket
    public function RemoveItem(){echo "Item $this->planName has been removed from the basket.\n";}
    //this function calculates the total of the basket
    public function calcTotal(){echo "This calculates the total of basket.\n";
    }
}