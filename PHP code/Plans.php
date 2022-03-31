<?php
//this is class plans
class Plans
{
    Private String $planName;
    Private String $type;
    Private String $description;
    Private float  $price;
    //this is constructor for this class
    public function __construct($planName,$type,$description,$price)
    {
        $this->planName = $planName;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
    }
    //get/set of plan name
    public function getPlanName(): string
    {
        return $this->planName;
    }
    public function setPlanName(string $planName): void
    {
        $this->planName = $planName;
    }
    //get/set for type
    public function getType(): string
    {
        return $this->type;
    }
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    //get/set for description
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    //get/set for price
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    //this function keeps the plan details
    public function planDetail ()
    {
        echo "$this->planName is a $this->type plan. ";
    }
    //this function keeps the description of plan
    public function planDesc()
    {
        echo "$this->description.\n";
    }
    //this function keeps the cost of plans
    public function planCost()
    {
        echo "The cost of $this->planName plan is £$this->price.\n";
    }
}