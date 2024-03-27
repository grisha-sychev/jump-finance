<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class TypesDocuments extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}