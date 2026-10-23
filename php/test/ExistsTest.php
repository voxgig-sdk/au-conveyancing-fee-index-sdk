<?php
declare(strict_types=1);

// AuConveyancingFeeIndex SDK exists test

require_once __DIR__ . '/../auconveyancingfeeindex_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = AuConveyancingFeeIndexSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
