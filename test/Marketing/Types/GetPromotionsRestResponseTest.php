<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\GetPromotionsRestResponse;

class GetPromotionsRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetPromotionsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetPromotionsRestResponse', $this->obj);
    }

    public function testExtendsPromotionsPagedCollection()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\PromotionsPagedCollection', $this->obj);
    }
}
