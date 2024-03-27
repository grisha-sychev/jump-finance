<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class SelfEmployed extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}