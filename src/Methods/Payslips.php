<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Payslips extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}