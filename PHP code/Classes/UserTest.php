<?php
class UserTest
{
    private $data;
    private $errors = [];
    private static $fields = ['email','password'];

    public function __construct($post_data)
    {
        $this-> data = $post_data;
    }
    public function validateLoginForm()
    {
        foreach (self::$fields as $field)
        {
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateEmail();
        $this->validatePassword();
        return $this->errors;
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
?>