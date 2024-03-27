<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Dictionaries extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}