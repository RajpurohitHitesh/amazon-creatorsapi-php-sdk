<?php

namespace Amazon\CreatorsAPI\v1\Test;

use PHPUnit\Framework\TestCase;

/**
 * Basic test to ensure the SDK structure is valid
 */
class BasicTest extends TestCase
{
    public function testComposerAutoloadExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../vendor/autoload.php');
    }

    public function testSrcDirectoryExists(): void
    {
        $this->assertDirectoryExists(__DIR__ . '/../src');
    }

    public function testDefaultApiClassExists(): void
    {
        $this->assertTrue(
            class_exists('Amazon\CreatorsAPI\v1\com\amazon\creators\api\DefaultApi')
        );
    }
}
