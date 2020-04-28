<?php
declare(strict_types=1);

namespace KEINOS\Sample;

function sayHelloTo(string $name): string
{
    return "Hello, ${name}!";
}
