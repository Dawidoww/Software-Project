<?php


use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{

    public function testMakePayment()
    {
        require '../PHP code/Classes/Customer.php';

        $paymentID = new PaymentID;

        $paymentID -> payID = "amount";

        $this->assertEquals('amount', $paymentID->total());
    }

    public function testAddToCart()
    {
        require '../PHP code/Classes/Customer.php';

        $cart = new Cart;

        $cart -> payID = "added";

        $this->assertEquals('added', $cart->getItemName());
    }

    public function testSetSurname()
    {
        require '../PHP code/Classes/Customer.php';

        $surname = new Surname;

        $surname -> surnameID = "bobby";

        $this->assertEquals('bobby', $surname->surnameIDName());
    }

    public function testGetName()
    {
        require '../PHP code/Classes/Customer.php';

        $getName = new GetName;

        $getName -> nameD = "sam";

        $this->assertEquals('sam', $getName->getFirstName());
    }

    public function testFullName()
    {
        require '../PHP code/Classes/Customer.php';

        $getFullName = new GetFullName;

        $getFullName -> fullNameID = "sam bobby";

        $this->assertEquals('sam bobby', $getFullName->getFullName());
    }

    public function testEditBasket()
    {
        require '../PHP code/Classes/Customer.php';

        $edit = new Edit;

        $edit -> basket = "item";

        $this->assertEquals('item', $edit->getItemName());
    }
}
