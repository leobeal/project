<?php

namespace LeoBeal\Project\Models;


class Vendor
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Vendor
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Vendor
    {
        $this->name = $name;
        return $this;
    }
}