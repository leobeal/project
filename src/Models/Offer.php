<?php

namespace LeoBeal\Project\Models;

use DateTimeInterface;
use LeoBeal\Project\Contracts\OfferInterface;

class Offer implements OfferInterface
{
    /** @var int */
    private $id;

    /** @var DateTimeInterface */
    private $start_time;

    /** @var DateTimeInterface */
    private $end_time;

    /** @var float */
    private $price;

    /** @var int */
    private $quantity;

    /** @var Vendor */
    private $vendor;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Offer
    {
        $this->id = $id;
        return $this;
    }

    public function getStartTime(): DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(DateTimeInterface $start_time): Offer
    {
        $this->start_time = $start_time;
        return $this;
    }

    public function getEndTime(): DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(DateTimeInterface $end_time): Offer
    {
        $this->end_time = $end_time;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): Offer
    {
        $this->price = $price;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): Offer
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getVendor(): Vendor
    {
        return $this->vendor;
    }

    public function setVendor(Vendor $vendor): Offer
    {
        $this->vendor = $vendor;
        return $this;
    }
}