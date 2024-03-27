<?php

namespace JumpFinance;

use JumpFinance\Connect\Authorization;

use JumpFinance\Methods\Acts;
use JumpFinance\Methods\ApplicationTemplates;
use JumpFinance\Methods\BankAccounts;
use JumpFinance\Methods\Branches;
use JumpFinance\Methods\CandidateProfiles;
use JumpFinance\Methods\Candidates;
use JumpFinance\Methods\DepartmentsLegalEntities;
use JumpFinance\Methods\Dictionaries;
use JumpFinance\Methods\Documents;
use JumpFinance\Methods\FullTimeEmployees;
use JumpFinance\Methods\Groups;
use JumpFinance\Methods\Integration;
use JumpFinance\Methods\InternalBalances;
use JumpFinance\Methods\LegalEntity;
use JumpFinance\Methods\Payments;
use JumpFinance\Methods\Payslips;
use JumpFinance\Methods\Performers;
use JumpFinance\Methods\Positions;
use JumpFinance\Methods\ProductionCalendars;
use JumpFinance\Methods\SelfEmployed;
use JumpFinance\Methods\SignatureProviders;
use JumpFinance\Methods\SignaturesDocuments;
use JumpFinance\Methods\Statements;
use JumpFinance\Methods\TypesDocuments;
use JumpFinance\Methods\TypesVacations;
use JumpFinance\Methods\Vacations;

class Client
{
    /**
     *  Авторизация по СlientKey
     */
    public function __construct($clientKey)
    {
        Authorization::boot($clientKey);
    }

    /**
     * Данные методы предназначены для получения и создания актов
     */
    public function acts(): Acts
    {
        return new Acts();
    }

    /**
     * 
     */
    public function applicationTemplates(): ApplicationTemplates
    {
        return new ApplicationTemplates();
    }

    /**
     * Данные методы предназначены для получения банковских счетов компании
     */
    public function bankAccounts(): BankAccounts
    {
        return new BankAccounts();
    }

    /**
     * 
     */
    public function branches(): Branches
    {
        return new Branches();
    }

    /**
     * 
     */
    public function candidateProfiles(): CandidateProfiles
    {
        return new CandidateProfiles();
    }

    /**
     * 
     */
    public function candidates(): Candidates
    {
        return new Candidates();
    }

    /**
     * 
     */
    public function departmentsLegalEntities(): DepartmentsLegalEntities
    {
        return new DepartmentsLegalEntities();
    }

    /**
     * 
     */
    public function dictionaries(): Dictionaries
    {
        return new Dictionaries();
    }

    /**
     * 
     */
    public function documents(): Documents
    {
        return new Documents();
    }

    /**
     * 
     */
    public function fullTimeEmployees(): FullTimeEmployees
    {
        return new FullTimeEmployees();
    }

    /**
     * 
     */
    public function groups(): Groups
    {
        return new Groups();
    }

    /**
     * 
     */
    public function integration(): Integration
    {
        return new Integration();
    }

    /**
     * 
     */
    public function internalBalances(): InternalBalances
    {
        return new InternalBalances();
    }

    /**
     * 
     */
    public function legalEntity(): LegalEntity
    {
        return new LegalEntity();
    }

    /**
     * 
     */
    public function payments(): Payments
    {
        return new Payments();
    }

    /**
     * 
     */
    public function payslips(): Payslips
    {
        return new Payslips();
    }

    /**
     * 
     */
    public function performers(): Performers
    {
        return new Performers();
    }

    /**
     * 
     */
    public function positions(): Positions
    {
        return new Positions();
    }

    /**
     * 
     */
    public function productionCalendars(): ProductionCalendars
    {
        return new ProductionCalendars();
    }

    /**
     * 
     */
    public function selfEmployed(): SelfEmployed
    {
        return new SelfEmployed();
    }

    /**
     * 
     */
    public function signatureProviders(): SignatureProviders
    {
        return new SignatureProviders();
    }

    /**
     * 
     */
    public function signaturesDocuments(): SignaturesDocuments
    {
        return new SignaturesDocuments();
    }

    /**
     * 
     */
    public function statements(): Statements
    {
        return new Statements();
    }

    /**
     * 
     */
    public function typesDocuments(): TypesDocuments
    {
        return new TypesDocuments();
    }

    /**
     * 
     */
    public function typesVacations(): TypesVacations
    {
        return new TypesVacations();
    }

    /**
     * 
     */
    public function vacations(): Vacations
    {
        return new Vacations();
    }
}
