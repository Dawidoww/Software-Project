<?php

class PaymentTest
{
    private $data;
    private $errors = [];
    private static $fields = ['cardNumber','type','cvv'];

    public function __construct($post_data)
    {
        $this-> data = $post_data;
    }

    public function validatePaymentForm()
    {
        foreach (self::$fields as $field)
        {
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateCard();
        $this->validateType();
        $this->validateCVV();
        return $this->errors;
    }
    private function validateCard()
    {
        $val = trim($this->data['cardNumber']);

        if(empty($val))
        {
            $this->addError('cardNumber','Card Number cannot be empty');
        }
        else {
            if(!preg_match('/^[0-9]{16}$/', $val)){
                $this->addError('cardNumber', 'Card Number must be 16 numbers long');
            }
        }
    }
    private function validateType()
    {
        $val = trim($this->data['type']);

        if(empty($val))
        {
            $this->addError('type','Type of card cannot be empty');
        }
        else {
            if($val != "VISA" || "MASTERCARD"){
                $this->addError('type', 'Type of card must be a Valid type and capital letters');
            }
        }
    }
    private function validateCVV()
    {
        $val = trim($this->data['cvv']);

        if(empty($val))
        {
            $this->addError('cvv','CVV Number cannot be empty');
        }
        else {
            if(!preg_match('/^[0-9]{3}$/', $val)){
                $this->addError('cvv', 'CVV Number must be 3 numbers long');
            }
        }
    }
    private function addError($key,$val)
    {
        $this->errors[$key] = $val;
    }
}
?>