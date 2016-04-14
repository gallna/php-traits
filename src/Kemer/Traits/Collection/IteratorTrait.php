<?php
namespace Kemer\Traits\Collection;

trait IteratorTrait
{
    use HasDataTrait;

    protected $position = 0;

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        return $this->getData()[$this->position];
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        return $this->position++;
    }

    /**
     * {@inheritDoc}
     */
    public function prev()
    {
        return $this->position--;
    }

    /**
     * {@inheritDoc}
     */
    public function rewind()
    {
        return $this->position = 0;
    }

    /**
     * {@inheritDoc}
     */
    public function valid()
    {
        return array_key_exists($this->position, $this->getData());
    }

    /**
     * {@inheritDoc}
     */
    public function seek($position)
    {
        $this->position = $position;

        if (!$this->valid()) {
            throw new \OutOfBoundsException("The key [{$position}] does not exist.");
        }
    }
}
