<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;

class Acts extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}
