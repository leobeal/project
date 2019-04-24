<?php

namespace LeoBeal\Project\Services;


use LeoBeal\Project\Contracts\OfferCollectionInterface;
use LeoBeal\Project\Models\Offer;
use LeoBeal\Project\Repositories\Adapters\JsonAdapter;
use LeoBeal\Project\Repositories\OfferRepository;

class FilterService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new OfferRepository(new JsonAdapter());
    }

    public function filter(float $price): OfferCollectionInterface
    {
        $offers = $this->repository->fetch('http://www.mocky.io/v2/5c6abed9330000cc2e7f4ceb');

        return $offers->filter(function (Offer $offer) use ($price) {
            return $price === $offer->getPrice();
        });
    }
}