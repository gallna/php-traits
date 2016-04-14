<?php
namespace Kemer\Traits\Collection;

trait CountableTrait
{
    use HasDataTrait;

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count($this->getData());
    }
}
