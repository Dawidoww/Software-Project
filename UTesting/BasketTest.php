<?php

use PHPUnit\Framework\TestCase;

class BasketTest extends TestCase
{

    public function testReturnGetPlanName()
    {
        require '../PHP code/Classes/Basket.php';

        $plan = new Plan;

        $plan -> planName = "Powerlifting";

        $this->assertEquals('Powerlifting', $plan->getPlanName());
    }

    public function testAddItem()
    {
        require '../PHP code/Classes/Basket.php';

        $itemAdd = new ItemAdd;

        $itemAdd -> productName = "Item was added";

        $this->assertEquals('Item was added', $itemAdd->getItemName());
    }

    public function testSetPlanName()
    {
        require '../PHP code/Classes/Basket.php';

        $planName = new PlanName;

        $planName -> planTypeName = "Plan was added";

        $this->assertEquals('Plan was added', $planName->getPlanName());
    }

    public function testRemoveItem()
    {
        require '../PHP code/Classes/Basket.php';

        $removeItem = new RemoveItem;

        $removeItem -> itemName = "Item was removed";

        $this->assertEquals('Item was removed', $removeItem->getRemoveItem());
    }

    public function testCalcTotal()
    {
        require '../PHP code/Classes/Basket.php';

        $calcTotal = new CalcTotal;

        $calcTotal -> basketTotal = "Total Price";

        $this->assertEquals('Total Price', $calcTotal->getTotal());
    }

    public function test__construct()
    {
        require '../PHP code/Classes/Basket.php';

        $test = new Test;

        $test -> testingConstruct = "";

        $this->assertEquals('', $test->getConstructer());
    }

    public function testGetAmount()
    {
        require '../PHP code/Classes/Basket.php';

        $getAmount = new GetAmount;

        $getAmount -> totalGottenAmount = 'Amount';

        $this->assertEquals('Amount', $getAmount->getGetAmount());
    }

    public function testSetAmount()
    {
        require '../PHP code/Classes/Basket.php';

        $setAmount = new SetAmonut;

        $setAmount -> Amount = "Amount";

        $this->assertEquals('Amount', $setAmount->getSetAmount());
    }

    public function testCheckOut()
    {
        require '../PHP code/Classes/Basket.php';

        $checkOut = new CheckOut;

        $checkOut -> goodbye = "checkout";

        $this->assertEquals('checkout', $checkOut->getItemName());
    }
}
