<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class BankAccounts extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}