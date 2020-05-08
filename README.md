[![](https://api.travis-ci.org/KEINOS/Practice_PHPUnit-test-of-TypeHint.svg?branch=master)](https://travis-ci.org/KEINOS/Practice_PHPUnit-test-of-TypeHint "Build Status")

# PHPUnit Test Sample Of Type Hinting

This repo is a PHPUnit test sample to validate the below `TypeError` which specifies the type of the argument:

> TypeError: Argument 1 passed to xxxxx must be of the type string, integer given, called in xxxxx on line xx

```php
function sayHelloTo(string $name): string
{
    return "Hello, ${name}!";
}
```

## Note

As Sebastian mentions as below, **it is superfluous to test type mismatch**.

> Yes, you can test for `TypeError` the same way you would use for [any other exception](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions).
>
> However, I would not test that PHP emits a type error in case of a type mismatch. This is the kind of test that becomes superfluous with PHP 7 code.
> (From: [Comment](https://stackoverflow.com/a/34351099/12102603) | Make phpunit catch php7 TypeError @ StackOverflow)

But since my bigotry client requires to comply with their requirements and to test so, I needed to be clear if `$this->expectException(\TypeError::class);` can detect the `TypeError`.

## Tested PHP/PHPUnit versions

- PHP 7.0.33 / PHPUnit 6.5.14
- PHP 7.1.23 / PHPUnit 7.5.20
- PHP 7.1.33 / PHPUnit 7.5.20
- PHP 7.2.30 / PHPUnit 8.5.4
- PHP 7.3.17 / PHPUnit 9.1.3
- PHP 7.4.5   / PHPUnit 9.1.3
- PHP nightly (PHP 8.0-dev)
  - Note: Tests in PHP "`nightly`" build **will fail** since PHPUnit doesn't support PHP 8.0 yet.
