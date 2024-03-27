<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Branches extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}