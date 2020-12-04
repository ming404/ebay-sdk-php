<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest;

class BulkUpdatePriceAndQuantityRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new BulkUpdatePriceAndQuantityRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest', $this->obj);
    }

    public function testExtendsBulkPriceQuantity()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\BulkPriceQuantity', $this->obj);
    }
}
