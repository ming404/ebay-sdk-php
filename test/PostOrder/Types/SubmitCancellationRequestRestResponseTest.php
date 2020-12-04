<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\SubmitCancellationRequestRestResponse;

class SubmitCancellationRequestRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new SubmitCancellationRequestRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitCancellationRequestRestResponse', $this->obj);
    }

    public function testExtendsCreateCancelResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateCancelResponse', $this->obj);
    }
}
