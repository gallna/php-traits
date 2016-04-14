<?php
namespace Kemer\Traits\Collection;

trait IteratorAggregateTrait
{
    use HasDataTrait;

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->getData());
    }
}
