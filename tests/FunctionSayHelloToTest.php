<?php
declare(strict_types=1);

namespace KEINOS\Tests;

final class FunctionSayHelloToTest extends \PHPUnit\Framework\TestCase
{
    public function testStringValue()
    {
        $value = 'World';

        $result_actual  = \KEINOS\Sample\sayHelloTo($value);
        $result_expect = 'Hello, World!';
        $this->assertSame($result_expect, $result_actual);
    }

    public function testIntegerValue()
    {
        $value = 1234;

        // https://stackoverflow.com/a/44279632/12102603
        //$this->expectError(\TypeError::class);
        $this->expectException(\TypeError::class);
        $result_actual  = \KEINOS\Sample\sayHelloTo($value);
    }
}
