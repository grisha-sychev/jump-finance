<?php

namespace JumpFinance\Builder;

class Performer implements \ArrayAccess
{
    private $data = [];

    public function setPhone($phone): self
    {
        $this->data['phone'] = $phone;
        return $this;
    }

    public function setEmail($email): self
    {
        $this->data['email'] = $email;
        return $this;
    }

    public function setLastName($lastName): self
    {
        $this->data['last_name'] = $lastName;
        return $this;
    }

    public function setFirstName($firstName): self
    {
        $this->data['first_name'] = $firstName;
        return $this;
    }

    public function setMiddleName($middleName): self
    {
        $this->data['middle_name'] = $middleName;
        return $this;
    }

    public function setLegalFormId($legalFormId): self
    {
        $this->data['legal_form_id'] = $legalFormId;
        return $this;
    }

    public function setINN($inn): self
    {
        $this->data['inn'] = $inn;
        return $this;
    }

    public function setAgentId($agentId): self
    {
        $this->data['agent_id'] = $agentId;
        return $this;
    }

    public function setGroupId($groupId): self
    {
        $this->data['group_id'] = $groupId;
        return $this;
    }

    public function setCompanyAgreesPayTaxes($companyAgreesPayTaxes): self
    {
        $this->data['company_agrees_pay_taxes'] = $companyAgreesPayTaxes;
        return $this;
    }

    public function build(): array
    {
        return $this->data;
    }

    public function offsetExists($offset): bool
    {
        return isset ($this->data[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }
}
