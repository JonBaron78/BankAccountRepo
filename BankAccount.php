<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jem
 * Date: 24.09.13
 * Time: 11:28
 * To change this template use File | Settings | File Templates.
 */

class BankAccount {
    protected $_balance;

    function _construct() {
        $this->_balance=0;
    }

    public function getBalance() {
        return $this->_balance;
    }

    public function deposit($amount) {
        if($amount<=0) {
            throw new Exception("Amount has to be >0");
        }
        if($amount>100000) {
            throw new Exception("Amounts over 100.000 has to verified");
        }
        $this->_balance+=$amount;
    }

    public function withdraw($amount) {
        if($amount<=0) {
            throw new Exception("Amount has to be >0");
        }
        if($amount>$this->_balance) {
            throw new Exception("Withdrawal cannot be greater than balance");
        }
        $this->_balance-=$amount;
    }
}