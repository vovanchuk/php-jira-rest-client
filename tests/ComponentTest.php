<?php

use JiraRestApi\Component\Component;
use JiraRestApi\Component\ComponentService;

use JiraRestApi\Issue\IssueField;
use JiraRestApi\Issue\IssueService;

class ComponentTest extends PHPUnit_Framework_TestCase
{
    public function test_create_component()
    {
        $componentService = new ComponentService();

        $component = new Component();
        $component->setName('my component')
            ->setDescription('Generated by script')
            ->setProjectKey('TEST');

        $res = $componentService->create($component);

        var_dump($res);

        return $res;
    }

    /**
     * @depends test_create_component
     * @param Component $component
     * @throws JsonMapper_Exception
     * @throws \JiraRestApi\JiraException
     */
    public function test_update_component(Component $component)
    {
        $componentService = new ComponentService();

        $component->setName('my component updated')
            ->setDescription('Updated by script')
            ->setProjectKey('TEST');

        $res = $componentService->update($component);

        var_dump($res);

        return $res;
    }

    /**
     * @depends test_update_component
     *
     * @param Component $component
     * @throws \JiraRestApi\JiraException
     */
    public function test_delete_component(Component $component)
    {
        $componentService = new ComponentService();

        $res = $componentService->delete($component);

        var_dump($res);
    }
}
