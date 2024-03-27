<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class FullTimeEmployees extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}