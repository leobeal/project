<?php

namespace LeoBeal\Project\Repositories\Adapters;


use LeoBeal\Project\Contracts\OfferCollectionInterface;
use LeoBeal\Project\Contracts\ReaderInterface;
use LeoBeal\Project\Models\Offer;
use LeoBeal\Project\Models\OfferCollection;

class JsonAdapter implements ReaderInterface
{
    public function read(string $input): OfferCollectionInterface
    {
        $content = file_get_contents($input);

        $items = json_decode($content, true);

        $collection = new OfferCollection();
        foreach ($items['special_offers'] as $item) {
            $offer = new Offer();
            $offer->setPrice($item['price']);

            $collection->add($offer);
        }

        return $collection;
    }

}