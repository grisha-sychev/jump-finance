<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class SignatureProviders extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}