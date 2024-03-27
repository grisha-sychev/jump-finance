<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class InternalBalances extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}