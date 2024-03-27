<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class ApplicationTemplates extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}
