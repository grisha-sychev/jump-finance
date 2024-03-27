<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class CandidateProfiles extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}