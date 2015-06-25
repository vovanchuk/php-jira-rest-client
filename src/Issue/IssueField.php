<?php

namespace JiraRestApi\Issue;

class IssueField implements \JsonSerializable
{
    public function __construct($updateIssue = false)
    {
        if ($updateIssue != true) {
            $this->project = new \JiraRestApi\Project\Project();

            $this->assignee = new \JiraRestApi\Issue\Reporter();
            $this->priority = new \JiraRestApi\Issue\Priority();
            $this->versions = array();

            $this->issuetype = new \JiraRestApi\Issue\IssueType();
        }
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    public function getProjectKey()
    {
        return $this->project->key;
    }

    public function getProjectId()
    {
        return $this->project->id;
    }

    public function setProjectKey($key)
    {
        $this->project->key = $key;

        return $this;
    }
    public function setProjectId($id)
    {
        $this->project->id = $id;

        return $this;
    }

    public function setIssueType($name)
    {
        if (is_null($this->issuetype)) {
            $this->issuetype = new \JiraRestApi\Issue\IssueType();
        }

        $this->issuetype->name = $name;

        return $this;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    public function setReporterName($name)
    {
        if (is_null($this->reporter)) {
            $this->reporter = new \JiraRestApi\Issue\Reporter();
        }

        $this->reporter->name = $name;

        return $this;
    }

    public function setAssigneeName($name)
    {
        if (is_null($this->assignee)) {
            $this->assignee = new \JiraRestApi\Issue\Reporter();
        }

        $this->assignee->name = $name;

        return $this;
    }

    public function setPriorityName($name)
    {
        if (is_null($this->priority)) {
            $this->priority = new \JiraRestApi\Issue\Priority();
        }

        $this->priority->name = $name;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function addVersion($name)
    {
        if (is_null($this->versions)) {
            $this->versions = array();
        }

        $v = new Version();
        $v->name = $name;
        array_push($this->versions, $v);

        return $this;
    }

    public function addComment($comment)
    {
        if (is_null($this->comments)) {
            $this->comments = new \JiraRestApi\Issue\Comments();
        }

        array_push($this->versions, $v);

        return $this;
    }

    public function addLabel($label)
    {
        if (is_null($this->labels)) {
            $this->labels = array();
        }

        array_push($this->labels, $label);

        return $this;
    }

    /** @var string */
    public $summary;

    /** @var string */
    //public $progress;

    /** @var string */
    public $timetracking;

    /** @var IssueType */
    public $issuetype;

    /** @var string */
    public $timespent;

    /** @var Reporter */
    public $reporter;

    /** @var DateTime */
    public $created;

    /** @var DateTime */
    public $updated;

    /** @var string */
    public $description;

    /** @var Priority */
    public $priority;

    /** @var IssueStatus */
    public $status;

    /** @var string */
    public $labels;

    /** @var JiraRestApi\Project\Project */
    public $project;

    /** @var string */
    public $environment;

    /** @var string */
    public $components;

    /** @var Comments */
    public $comments;

    /** @var string */
    public $votes;

    /** @var string */
    public $resolution;

    /** @var string */
    public $fixVersions;

    /** @var Reporter */
    public $creator;

    /** @var string */
    public $watches;

    /** @var string */
    public $worklog;

    /** @var Reporter */
    public $assignee;

    /* @var VersionList[\JiraRestApi\Issue\Version] */
    public $versions;

    /** @var AttachmentList[\JiraRestApi\Issue\Attachment] */
    public $attachments;
}