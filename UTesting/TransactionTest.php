<?php


use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{

    public function testSetAmountPayed()
    {
        require '../PHP code/Classes/Transaction.php';

        $setAmount = new SetAmount;

        $setAmount -> amount = "amount";

        $this->assertEquals('amount', $setAmount->getAmount());
    }

    public function testGetTransactionID()
    {
        require '../PHP code/Classes/Transaction.php';

        $transactionID = new TransactionID;

        $transactionID -> transaction = "ID";

        $this->assertEquals('ID', $transactionID->getAmount());
    }

    public function testStoreTransaction()
    {
        require '../PHP code/Classes/Transaction.php';

        $storeTransactionID = new StoreTransactionID;

        $storeTransactionID -> Storetransaction = "store";

        $this->assertEquals('store', $storeTransactionID->getAmount());
    }

    public function testGetAmount()
    {
        require '../PHP code/Classes/Transaction.php';

        $transactionID = new TransactionID;

        $transactionID -> transaction = 'ID';

        $this->assertEquals('ID', $transactionID->getAmount());
    }
}
