<?php
abstract class User
{
    private string $password;
    private string $email;

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function __construct( $password, $email)
    {
        $this->password = $password;
        $this->email = $email;
    }

    public function custAuthentication()
    {
        echo "User $this->email is trying to log in as Customer with password $this->password. \n";
    }
    public function adminAuthentication()
    {
        echo "User $this->email is trying to log in as Admin with password $this->password. \n";
    }
    public function login()
    {
        echo "$this->email has successfully logged in.\n";
    }
    public function logOut()
    {
        echo "$this->email has successfully logged out.\n";
    }
    public function register()
    {
        echo "$this->email has successfully registered out.\n";
    }
}

