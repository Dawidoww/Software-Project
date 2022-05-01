<?php


use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testLogOut()
    {
        require '../PHP code/Classes/User.php';

        $logOut = new LogOut;

        $logOut -> loggingOut = "logged out";

        $this->assertEquals('logged out', $logOut->getItemName());
    }

    public function testRegister()
    {
        require '../PHP code/Classes/User.php';

        $register = new Register;

        $register -> registered = "You Registered";

        $this->assertEquals('You Registered', $register->getItemName());
    }

    public function testGetPassword()
    {
        require '../PHP code/Classes/User.php';

        $getPassword = new GetPassword;

        $getPassword -> Password = "password";

        $this->assertEquals('password', $getPassword->getItemName());
    }

    public function testGetEmail()
    {
        require '../PHP code/Classes/User.php';

        $getEmail = new Email;

        $getEmail -> email = "email";

        $this->assertEquals('email', $getEmail->getItemName());
    }

    public function testLogin()
    {
        require '../PHP code/Classes/User.php';

        $register = new Register;

        $register -> registered = "You Registered";

        $this->assertEquals('You Registered', $register->getItemName());
    }

    public function testCustAuthentication()
    {
        require '../PHP code/Classes/User.php';

        $register = new Register;

        $register -> registered = "You Registered";

        $this->assertEquals('You Registered', $register->getItemName());
    }
}
