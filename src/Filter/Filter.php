<?php

namespace JiraRestApi\Filter;

use JiraRestApi\JsonSerializableTrait;

class Filter implements \JsonSerializable
{
    use JsonSerializableTrait;

    /** @var int */
    public $id;

    /** @var string */
    public $description;

    /** @var string */
    public $self;

    /** @var string */
    public $name;

    /** @var string */
    public $jql;

    /** @var bool */
    public $favourite;

    /** @var SharePermissions[] */
    public $sharePermissions;

    /**
     * @return SharePermissions
     */
    public function getSharePermission(): SharePermissions
    {
        return $this->sharePermissions;
    }

    /**
     * @param SharePermissions[] $sharePermissions
     * @return Filter
     */
    public function setSharePermissions($sharePermissions): self
    {
        $this->sharePermissions = $sharePermissions;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * @param string $self
     */
    public function setSelf(string $self): self
    {
        $this->self = $self;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
     * @return string
     */
    public function getJql(): string
    {
        return $this->jql;
    }

    /**
     * @param string $jql
     */
    public function setJql(string $jql): self
    {
        $this->jql = $jql;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFavourite(): bool
    {
        return $this->favourite;
    }

    /**
     * @param bool $favourite
     */
    public function setFavourite(bool $favourite): self
    {
        $this->favourite = $favourite;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
