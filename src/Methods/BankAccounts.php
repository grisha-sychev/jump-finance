<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;

class BankAccounts extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }

    public function getAll(string $view = 'simple')
    {
        return $this->get(
            "banks_accounts",
            [
                'view' => $view
            ]
        );
    }

    public function getBankAccount(string $bank_account_id)
    {
        return $this->get("banks_accounts/" . $bank_account_id);
    }

    public function updateBalancesAllBankAccounts()
    {
        return $this->post("banks_accounts/sync_balances");
    }

    public function getInfoRequestUpdateBankAccounts(string $sync_balances_status_id)
    {
        return $this->get("banks_accounts/sync_balances_status/" . $sync_balances_status_id);
    }
}
