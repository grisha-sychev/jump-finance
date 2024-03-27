<?php

namespace JumpFinance\Builder;
use JumpFinance\Builder\Passport;

class IdentificationPerformer implements \ArrayAccess
{
    private $data = [];

    public function country(string $country): self
    {
        $this->data['country'] = $country;
        return $this;
    }

    public function isVerified(bool $isVerified): self
    {
        $this->data['is_verified'] = $isVerified;
        return $this;
    }

    public function snils(int $snils): self
    {
        $this->data['snils'] = $snils;
        return $this;
    }

    public function inn(int $inn): self
    {
        $this->data['inn'] = $inn;
        return $this;
    }

    public function passport(Passport $passport): self
    {
        $this->data['passport'] = $passport->build();
        return $this;
    }

    public function build(): array
    {
        return $this->data;
    }

    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
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
