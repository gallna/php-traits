<?php
namespace Kemer\Traits\Collection;

trait ArrayAccessTrait
{
    use HasDataTrait;

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new \OutOfBoundsException("The offset \"{$offset}\" does not exist.");
        }
        return $this->getData()[$offset];
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {
        $data =& $this->getData();
        if ($offset) {
            $data[$offset] = $value;
        } else {
            $data[] = $value;
        }

    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->getData());
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {
        $data =& $this->getData();
        unset($data[$offset]);
    }
}
