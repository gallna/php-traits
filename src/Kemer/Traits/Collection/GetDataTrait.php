<?php
namespace Kemer\Traits\Collection;

trait GetDataTrait
{
    protected $data = [];

    protected function & getData()
    {
        return $this->data;
    }
}
