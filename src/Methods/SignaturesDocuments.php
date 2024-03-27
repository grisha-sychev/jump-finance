<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class SignaturesDocuments extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}