<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class Candidates extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}