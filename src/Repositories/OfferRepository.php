<?php

namespace LeoBeal\Project\Repositories;


use LeoBeal\Project\Contracts\OfferCollectionInterface;
use LeoBeal\Project\Contracts\ReaderInterface;

class OfferRepository
{
    /** @var ReaderInterface */
    private $reader;

    public function __construct(ReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function fetch(string $input): OfferCollectionInterface
    {
        return $this->reader->read($input);
    }

}