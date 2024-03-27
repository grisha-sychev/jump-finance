<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Statements extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}