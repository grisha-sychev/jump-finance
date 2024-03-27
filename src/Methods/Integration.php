<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Integration extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}