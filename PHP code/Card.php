<?php

class Card extends Payment
{
    private int $number;
    private String $type;
    private int $cvv;

    public function __construct($cvv, $type, $number,$amount)
    {
        parent::__construct($amount);
        $this->cvv = $cvv;
        $this->type = $type;
        $this->number = $number;
    }
    public function getNumber(): int
    {
        return $this->number;
    }
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }
    public function getCvv(): int
    {
        return $this->cvv;
    }
    public function setCvv(int $cvv): void
    {
        $this->cvv = $cvv;
    }

    public function getType(): string
    {
        return $this->type;
    }
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    public function Authorize()
    {
        echo "The $this->type card of number $this->number has been Authorized \n";
    }
}