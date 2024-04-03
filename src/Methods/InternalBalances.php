<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
class InternalBalances extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }

    public function getAll($page = 1, $per_page = 20)
    {
        return $this->get(
            "balances",
            [
                'page' => $page,
                'per_page' => $per_page
            ]
        );
    }
}