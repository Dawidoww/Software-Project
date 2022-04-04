<?php
//this is an abstract class user
abstract class User
{
    private string $password;
    private string $email;
    //get/set for password
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    //get/set for email
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    //constructor for this class
    public function __construct( $password, $email)
    {
        $this->password = $password;
        $this->email = $email;
    }
    //this function authenticates the customer login
    public function custAuthentication()
    {
        echo "User $this->email is trying to log in as Customer with password $this->password. \n";
    }
    //this function authenticates the admin login
    public function adminAuthentication()
    {
        echo "User $this->email is trying to log in as Admin with password $this->password. \n";
    }
    //this function logs the user in
    public function login()
    {
        echo "$this->email has successfully logged in.\n";
    }
    //this function logs the user out
    public function logOut()
    {
        echo "$this->email has successfully logged out.\n";
    }
    //this function registers a new user
    public function register()
    {
        echo "$this->email has successfully registered out.\n";
    }
}

