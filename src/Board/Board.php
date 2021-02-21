<?php

namespace JiraRestApi\Board;

use JiraRestApi\ClassSerialize;

class Board implements \JsonSerializable
{
    use ClassSerialize;

    /** @var int */
    public $id;

    /** @var string */
    public $self;

    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var int */
    public $filterId;

    /**
     * Location [\JiraRestApi\Board\Location].
     *
     * @var \JiraRestApi\Board\Location
     */
    public $location;


    /**
     * @return int
     */
    public function getFilterId(): int
    {
        return $this->filterId;
    }

    /**
     * @param int $filterId
     */
    public function setFilterId(int $filterId): self
    {
        $this->filterId = $filterId;
        
        return $this;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
    
    /**
     * Get board id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get board url.
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * Get board name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get board type.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get location.
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set location.
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;

        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this), function ($var) {
            return !is_null($var);
        });
    }
}
