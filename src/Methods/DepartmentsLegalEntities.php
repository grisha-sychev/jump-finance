<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class DepartmentsLegalEntities extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }
}