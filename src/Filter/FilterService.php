<?php


namespace JiraRestApi\Filter;


use JiraRestApi\JiraClient;
use JiraRestApi\JiraException;

class FilterService extends JiraClient
{
    private $uri = '/filter';

    /**
     * Creates a new project.
     *
     * @param Filter $filter
     *
     * @throws JiraException
     *
     * @return Filter filter
     */
    public function createFilter(Filter $filter)
    {
        $data = json_encode($filter);

        $ret = $this->exec($this->uri, $data, 'POST');

        $this->log->info('createFilter Result='.$ret);

        return $this->json_mapper->map(
            json_decode($ret),
            new Filter()
        );
    }
}