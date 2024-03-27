<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class TypesVacations extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}