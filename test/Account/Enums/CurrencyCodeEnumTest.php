<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Enums;

use DTS\eBaySDK\Account\Enums\CurrencyCodeEnum;

class CurrencyCodeEnumTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CurrencyCodeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Enums\CurrencyCodeEnum', $this->obj);
    }
}
