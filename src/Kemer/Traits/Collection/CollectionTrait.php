<?php
namespace Kemer\Traits\Collection;

trait CollectionTrait
{
    use HasDataTrait;

    /**
     * Get an object/value out of the Registry
     *
     * @param string $key     The key of the object/value to retrieve
     * @param mixed  $default The value to return if the key is missing
     *
     * @return mixed The object/value from the Registry
     */
    public function get($key, $default = null)
    {
        return $this->has($key) ? $this->getData()[$key] : $default;
    }

    /**
     * Store an object/value in the Registry
     *
     * @param string $key   The key of the object/value being set
     * @param mixed  $value The object/value to store
     *
     * @return self The instance of the Registry for chaining
     */
    public function set($key, $value)
    {
        $data =& $this->getData();
        $data[$key] = $value;

        return $this;
    }

    /**
     * Check to see if a key exists in the Registry
     *
     * @param string $key The key of the object/value to check
     *
     * @return bool Whether or not the key exists
     */
    public function has($key)
    {
        return array_key_exists($key, $this->getData());
    }

    /**
     * Remove an object/value from the Registry
     *
     * @param string $key The key of the object/value to remove
     *
     * @return self The instance of the object for chaining
     */
    public function remove($key)
    {
        $data =& $this->getData();
        unset($data[$key]);

        return $this;
    }

    /**
     * Removes all objects/values from the Registry
     *
     * @return self The instance of the object for chaining
     */
    public function clear()
    {
        $data =& $this->getData();
        $data = [];

        return $this;
    }

    /**
     * Returns all objects/values in the Registry as an associative array
     *
     * @return array All of the objects/data
     */
    public function all()
    {
        return $this->getData();
    }

    /**
     * Checks if the Registry is empty
     *
     * @return bool Whether or not its empty
     */
    public function isEmpty()
    {
        return (0 === count($this->getData()));
    }
}
