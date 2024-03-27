<?php

namespace JumpFinance\Methods;

use JumpFinance\Connect\Authorization;
use JumpFinance\Builder\Performer;

class Performers extends Authorization
{
    function __construct()
    {
        $this->checkClientKey();
    }

    public function setPerformer(Performer $data)
    {
        return $this->post("contractors", $data->build());
    }

    public function getAll($page = 1, $per_page = 20)
    {
        return $this->get(
            "contractors",
            [
                'page' => $page,
                'per_page' => $per_page
            ]
        );
    }

    public function getPerformer($contractor_id)
    {
        return $this->get("contractors/" . $contractor_id);
    }

    public function deletePerformer($contractor_id)
    {
        return $this->delete("contractors/" . $contractor_id);
    }

    public function putPerformer(Performer $data)
    {
        return $this->put("contractors", $data->build());
    }

    public function getRequisites($contractor_id)
    {
        return $this->get("contractors/" . $contractor_id . "/requisites");
    }

    public function getPerformerBalances($contractor_id, $include = 'agent', $page = 1, $per_page = 20)
    {
        return $this->get(
            "contractors/" . $contractor_id . "/requisites",
            [
                'include' => $include,
                'page' => $page,
                'per_page' => $per_page
            ]
        );
    }

    public function getPerformerBalance($contractor_id, $balance_id, $include = 'agent')
    {
        return $this->get(
            "contractors/" . $contractor_id . "/balances/" . $balance_id,
            [
                'include' => $include
            ]
        );

    }

    public function getInformationAboutSelfEmployed($contractor_id)
    {
        return $this->get("contractors/" . $contractor_id . "/selfemployer");
    }

    public function checkStatusSelfEmployed($contractor_id)
    {
        return $this->post("contractors/" . $contractor_id . "/selfemployer/sync");
    }

    // public function forciblyIdentifyPerformer($contractor_id, )
    // {
    //     return $this->post("contractors/" . $contractor_id . "/identification-requests", );
    // }

    public function getInfoLastApprovedIdentificationRequest($contractor_id)
    {
        return $this->get("contractors/" . $contractor_id . "/identification-requests/last-approved");
    }

}