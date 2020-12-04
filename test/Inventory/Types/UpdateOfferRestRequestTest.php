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

use DTS\eBaySDK\Inventory\Types\UpdateOfferRestRequest;

class UpdateOfferRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateOfferRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\UpdateOfferRestRequest', $this->obj);
    }

    public function testExtendsEbayOfferDetailsWithId()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\EbayOfferDetailsWithId', $this->obj);
    }
}
