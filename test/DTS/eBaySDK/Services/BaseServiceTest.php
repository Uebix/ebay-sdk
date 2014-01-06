<?php
require_once __DIR__ . '/../../../fixtures/TestService.php';

use DTS\eBaySDK\Services\BaseService;

class BaseServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        // BaseService is abstract so use class that is derived from it for testing.
        $this->obj = new TestService();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->obj);
    }
}