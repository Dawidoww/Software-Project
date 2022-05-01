<?php


use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{

    public function testGetAmount()
    {
        require '../PHP code/Classes/Payment.php';

        $getAmount = new GetAmount;

        $getAmount -> Amount = "amount";

        $this->assertEquals('amount', $getAmount->getItemName());
    }

    public function testToBePayed()
    {
        require '../PHP code/Classes/Payment.php';

        $toPay = new ToPay;

        $toPay -> pay = "To Be Payed";

        $this->assertEquals('To Be Payed', $toPay ->getItemName());
    }

    public function testGetPaymentID()
    {
        require '../PHP code/Classes/Payment.php';

        $paymentID = new PaymentID;

        $paymentID -> payID = "amount";

        $this->assertEquals('amount', $paymentID->getItemName());
    }
}
