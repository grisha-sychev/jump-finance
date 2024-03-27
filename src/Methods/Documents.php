<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Documents extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}