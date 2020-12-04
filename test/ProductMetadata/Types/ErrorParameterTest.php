<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ProductMetadata\Types;

use DTS\eBaySDK\ProductMetadata\Types\ErrorParameter;

class ErrorParameterTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ErrorParameter();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\ErrorParameter', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}
