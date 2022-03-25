<?php

class Promo
{
    private String $promoCode;
    private float $discount;

    public function __construct($promoCode,$discount)
    {
        $this->promoCode = $promoCode;
        $this->discount = $discount;
    }
    public function getPromoCode(): string
    {
        return $this->promoCode;
    }
    public function setPromoCode(string $promoCode): void
    {
        $this->promoCode = $promoCode;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }
    public function setDiscount(float $discount): void
    {
        $this->discount= $discount;
    }
    public function Promotion()
    {
        echo "The promo code is $this->promoCode and it has a discount of $this->discount%.\n";
    }
}