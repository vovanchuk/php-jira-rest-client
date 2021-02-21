<?php

namespace JiraRestApi\Board;

class Location implements \JsonSerializable
{
    /** @var int * */
    public $projectId;

    /** @var string * */
    public $displayName;

    /** @var string * */
    public $projectName;

    /** @var string * */
    public $projectKey;

    /** @var string * */
    public $projectTypeKey;

    /** @var string * */
    public $avatarUri;

    /** @var string * */
    public $name;

    /** @var string * */
    public $type;

    /** @var string * */
    public $projectKeyOrId;
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Location
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectKeyOrId(): string
    {
        return $this->projectKeyOrId;
    }

    /**
     * @param string $projectKeyOrId
     * @return Location
     */
    public function setProjectKeyOrId(string $projectKeyOrId): self
    {
        $this->projectKeyOrId = $projectKeyOrId;
        return $this;
    }

    /**
     * Get project id.
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Get project id.
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Get project name.
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Get project key.
     */
    public function getProjectKey()
    {
        return $this->projectKey;
    }

    /**
     * Get project type key.
     */
    public function getProjectTypeKey()
    {
        return $this->projectTypeKey;
    }

    /**
     * Get avatar uri.
     */
    public function getAvatarUri()
    {
        return $this->avatarUri;
    }

    /**
     * Get name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this), function ($var) {
            return !is_null($var);
        });
    }
}
