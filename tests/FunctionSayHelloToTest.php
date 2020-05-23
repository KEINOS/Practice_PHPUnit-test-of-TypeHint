<?php
declare(strict_types=1);

namespace KEINOS\Tests;

final class FunctionSayHelloToTest extends \PHPUnit\Framework\TestCase
{
    public function testStringValue()
    {
        $value = 'World';

        $result_expect = 'Hello, World!';
        $result_actual = \KEINOS\Sample\sayHelloTo($value);
        $this->assertSame($result_expect, $result_actual);
    }

    public function testIntegerValue()
    {
        $value = 1234;

        // https://stackoverflow.com/a/44279632/12102603
        $this->expectException(\TypeError::class);
        $result_actual = \KEINOS\Sample\sayHelloTo($value);

        // The below test won't work depending on PHPUnit version
        //$this->expectError(\TypeError::class);
        //$result_actual = \KEINOS\Sample\sayHelloTo($value);
 
    }
}
