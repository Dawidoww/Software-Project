<?php
//this is class Customer
class Customer extends User
{
    private String $name;
    private String $surname;

    //get/set for name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    //get/set for surname
    public function getSurname(): string
    {
        return $this->surname;
    }
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }
    //this constructor takes the parent constructor of class user and add the variable name and surname from this class
    public function __construct( $password, $email,$name,$surname)
    {
        parent::__construct( $password, $email);
       $this->name = $name;
       $this->surname = $surname;
    }
    //this class says the full name of customer
    public function fullName()
    {
        echo "Users name is $this->name $this->surname.\n";
    }
    //this class allows customer to edit the basket
    public function editBasket()
    {
        echo "$this->name $this->surname edited the basket.\n";
    }
    //this function allows the customer to add to basket
    public function addToCart()
    {
        echo "$this->name $this->surname added item to basket.\n";
    }
    //this function allows customer to make a payment
    public function makePayment()
    {
        echo "$this->name $this->surname has made a payment.\n";
    }
}