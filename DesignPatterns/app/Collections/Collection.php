<?php


namespace App\Collections;


use App\Collections\Contracts\Countable;

class Collection implements Countable
{
    protected $collect;

    public function __construct(array $collect)
    {
        $this->collect = $collect;
    }

    public static function make(array $collect): Collection
    {
        return new static($collect);
    }

    public function filter(callable $callback): Collection
    {
        $collection = [];
        foreach ($this->collect as $key => $value) {
            if ($callback($value, $key)) {
                $collection [] = $value;
            }
        }
        $this->collect = $collection;
        return $this;
    }

    public function map(callable $callback): Collection
    {
        $collection = [];
        foreach ($this->collect as $key => $value) {
            $collection [] = $callback($value, $key);
        }
        $this->collect = $collection;
        return $this;
    }

    public function pluck($value, $key = null): Collection
    {
        $collection = [];
        foreach ($this->collect as $map_key => $map_value) {
            if ($key) {
                $collection [$map_value[$key]] = $map_value[$value];
            } else {
                $collection[] = $map_value[$value];
            }

        }
        $this->collect = $collection;
        return $this;
    }

    public function first()
    {
        return current($this->collect);
    }

    public function last()
    {
        return end($this->collect);
    }


    public function toArray(): array
    {
        return $this->collect;
    }

    public function toJson()
    {
        return json_encode($this->collect);
    }

    public function count(): int
    {
        return count($this->collect);
    }
}