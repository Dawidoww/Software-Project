<?php
//this is class Order
class Order
{
    private int $orderId;
    private String $date;
    private String $shipEmail;
    //this is a constructor
    public function __construct($date,$shipEmail,$orderId)
    {
        $this->shipEmail = $shipEmail;
        $this->date = $date;
        $this->orderId = $orderId;
    }
    //get/set for date
    public function getDate(): String
    {
        return $this->date;
    }
    public function setDate(String $date): void
    {
        $this->date = $date;
    }
    //get/set for orderId
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }
    //get/set for shipEmail
    public function getShipEmail(): string
    {
        return $this->shipEmail;
    }
    public function setShipEmail(string $shipEmail): void
    {
        $this->shipEmail = $shipEmail;
    }
    //this function places the order
    public function placeOrder()
    {
        echo "Order ($this->orderId) has been placed.\nThe date of purchase was $this->date.\nOrder ($this->orderId) will be sent to $this->shipEmail.\n";
    }
    //this function calculates total of order
    public function calcTotal()
    {
        echo "Calculations of the total price will happen here.\n";
    }
    //this function sees if promo is applied
    public function promoApplied()
    {
        echo "Promotion has been applied.\n";
    }
}