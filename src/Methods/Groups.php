<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Groups extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}