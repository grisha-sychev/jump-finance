<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Payments extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}