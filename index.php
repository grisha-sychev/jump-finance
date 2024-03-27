<?php


require 'vendor/autoload.php';

use JumpFinance\Builder\Performer;
use JumpFinance\Client;

$client = new Client('ff7d75a3-f989-48e3-a597-89b2f4e130bc');

$performers = $client->performers();

$performer = (new Performer)
    ->setPhone("+79407853314")
    ->setEmail('grisha_sychev@internet.ru')
    ->setLastName("Константинопольский")
    ->setFirstName("Константин")
    ->setMiddleName("Константинович")
    ->setLegalFormId(2)
    ->setINN("723404785380")
    ->setAgentId(12680)
    ->setGroupId(43924)
    ->setCompanyAgreesPayTaxes(true);

echo $performers->setPerformer($performer);