<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class LegalEntity extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}