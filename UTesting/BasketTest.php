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

    }

    public function testSetPlanName()
    {

    }

    public function testRemoveItem()
    {

    }

    public function testCalcTotal()
    {

    }

    public function test__construct()
    {

    }

    public function testGetAmount()
    {

    }

    public function testSetAmount()
    {

    }

    public function testCheckOut()
    {

    }
}
