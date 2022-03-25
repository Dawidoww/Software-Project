<?php

class Order
{
    private int $orderId;
    private String $date;
    private String $shipEmail;

    public function __construct($date,$shipEmail,$orderId)
    {
        $this->shipEmail = $shipEmail;
        $this->date = $date;
        $this->orderId = $orderId;
    }

    public function getDate(): String
    {
        return $this->date;
    }
    public function setDate(String $date): void
    {
        $this->date = $date;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getShipEmail(): string
    {
        return $this->shipEmail;
    }
    public function setShipEmail(string $shipEmail): void
    {
        $this->shipEmail = $shipEmail;
    }
    public function placeOrder()
    {
        echo "Order ($this->orderId) has been placed.\nThe date of purchase was $this->date.\nOrder ($this->orderId) will be sent to $this->shipEmail.\n";
    }
    public function calcTotal()
    {
        echo "Calculations of the total price will happen here.\n";
    }
    public function promoApplied()
    {
        echo "Promotion has been applied.\n";
    }
}