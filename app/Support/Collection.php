<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/10/2018
 * Time: 10:01 AM
 */

namespace App\Support;
use ArrayIterator;

class Collection implements \IteratorAggregate
{
    protected $items = [];

    public function __construct(array $items=[])
    {
        $this->items = $items;
    }

    public function get()
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}