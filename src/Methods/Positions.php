<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Positions extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}