<?php

namespace JumpFinance\Builder;

class Passport implements \ArrayAccess
{
    private $data = [];


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
