<?php

class RegisterTest
{
    private $data;
    private $errors = [];
    private static $fields = ['firstname','lastname','email','password'];

    public function __construct($post_data)
    {
        $this-> data = $post_data;
    }

    public function validateRegisterForm()
    {
        foreach (self::$fields as $field)
        {
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateName();
        $this->validateSurname();
        $this->validateEmail();
        $this->validatePassword();
        return $this->errors;
    }
    private function validateName()
    {
        $val = trim($this->data['firstname']);

        if(empty($val))
        {
            $this->addError('firstname','Name cannot be empty');
        }
        else {
            if(!preg_match('/^[a-zA-Z]{4,10}$/', $val)){
                $this->addError('firstname', 'Name must be only letters and be at least 4 chars long');
            }
        }
    }
    private function validateSurname()
    {
        $val = trim($this->data['lastname']);

        if(empty($val))
        {
            $this->addError('lastname','Last Name cannot be empty');
        }
        else {
            if(!preg_match('/^[a-zA-Z]{4,20}$/', $val)){
                $this->addError('lastname', 'Last Name must be only letters and at least 4 chars long');
            }
        }
    }
    private function validatePassword()
    {
        $val = trim($this->data['password']);

        if(empty($val))
        {
            $this->addError('password','password cannot be empty');
        }
        else {
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                $this->addError('password', 'password must be 6-12 chars and alphanumeric');
            }
        }
    }
    private function validateEmail()
    {
        $val = trim($this->data['email']);

        if(empty($val))
        {
            $this->addError('email','email cannot be empty');
        }
        else {
            if(!filter_var($val,FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'email must be a valid email');
            }
        }
    }
    private function addError($key,$val)
    {
        $this->errors[$key] = $val;
    }
}
