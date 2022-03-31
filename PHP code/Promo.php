<?php
//this is class Promo
class Promo
{
    private String $promoCode;
    private float $discount;
    //constructor for this class
    public function __construct($promoCode,$discount)
    {
        $this->promoCode = $promoCode;
        $this->discount = $discount;
    }
    //get/set for promo code
    public function getPromoCode(): string
    {
        return $this->promoCode;
    }
    public function setPromoCode(string $promoCode): void
    {
        $this->promoCode = $promoCode;
    }
    //get/set for discount
    public function getDiscount(): float
    {
        return $this->discount;
    }
    public function setDiscount(float $discount): void
    {
        $this->discount= $discount;
    }
    //this function gets the promotion code and discount
    public function Promotion()
    {
        echo "The promo code is $this->promoCode and it has a discount of $this->discount%.\n";
    }
}