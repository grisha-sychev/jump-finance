<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class ProductionCalendars extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}