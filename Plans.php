<?php

class Plans
{
    Private String $planName;
    Private String $type;
    Private String $description;
    Private float  $price;

    public function __construct($planName,$type,$description,$price)
    {
        $this->planName = $planName;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
    }
    public function getPlanName(): string
    {
        return $this->planName;
    }
    public function setPlanName(string $planName): void
    {
        $this->planName = $planName;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function planDetail ()
    {
        echo "$this->planName is a $this->type plan. ";
    }
    public function planDesc()
    {
        echo "$this->description.\n";
    }
    public function planCost()
    {
        echo "The cost of $this->planName plan is £$this->price.\n";
    }
}