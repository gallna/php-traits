<?php
namespace Kemer\Traits\Collection;

trait JsonSerializableTrait
{
    use HasDataTrait;

    public function jsonSerialize()
    {
        return $this->getData();
    }
}
