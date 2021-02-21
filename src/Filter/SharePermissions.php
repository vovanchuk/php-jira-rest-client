<?php


namespace JiraRestApi\Filter;


use JiraRestApi\JsonSerializableTrait;
use JiraRestApi\Project\Project;

class SharePermissions implements \JsonSerializable
{
    use JsonSerializableTrait;

    /** @var string */
    public $type;

    /** @var Project */
    public $project;

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * @param Project $project
     * @return SharePermissions
     */
    public function setProject(Project $project): self
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return SharePermissions
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

}