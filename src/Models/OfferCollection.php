<?php

namespace LeoBeal\Project\Models;


use ArrayIterator;
use Iterator;
use LeoBeal\Project\Contracts\OfferCollectionInterface;
use LeoBeal\Project\Contracts\OfferInterface;

class OfferCollection implements OfferCollectionInterface
{
    public function __construct(array $data = null)
    {
        $this->items = $data ?? [];
    }

    private $items = [];

    public function add(OfferInterface $offer): void
    {
        array_push($this->items, $offer);
    }

    public function get(int $index): ?OfferInterface
    {
        if (!isset($this->items[$index])) {
            return null;
        }

        return $this->items[$index];
    }

    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->items);
    }

    public function filter(callable $callback): OfferCollectionInterface
    {
        return new OfferCollection(array_filter($this->items, $callback));
    }
}