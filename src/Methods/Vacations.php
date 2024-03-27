<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Vacations extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}