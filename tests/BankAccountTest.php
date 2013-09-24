<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jem
 * Date: 24.09.13
 * Time: 11:40
 * To change this template use File | Settings | File Templates.
 */

require_once(__DIR__.'/../src/BankAccount.php');

class BankAccountTest extends PHPUnit_Framework_TestCase {

    protected $_account;

    protected function setUp() {
        $this->_account=new BankAccount();
    }

    public function testBalanceIsZeroWhenOpeningAccount()
    {
        $this->assertEquals(0,$this->_account->getBalance());
    }

    public function testDepositIncreasesBalance() {
        $this->_account->deposit(123);
        $this->assertEquals(123,$this->_account->getBalance());
    }

    public function testWithdrawDecreasesBalance() {
        $this->_account->deposit(123);
        $this->_account->withdraw(100);
        $this->assertEquals(23,$this->_account->getBalance());
    }
}
