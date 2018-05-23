# leadingedgehealth/test

This repo is already set up for unit testing so you should be able to verify
it is working immediately like so:

```
git clone git@github.com:leadingedgehealth/test.git
cd test
composer install
./vendor/bin/phpunit
```

If things are working correctly, then the above will fail in a controlled
PHPUnit manner.

## Task

Please provide a class called `SimpleCalculator` in the `Test` namespace.

It should provide object methods `add` and `sub` which add or
subtract a value from the current balance. It must also provide a method
`total` to return the current balance as well as a static method `factory`
which returns an instantiated SimpleCalculator object.

The calculator will only be given and should only return `int` values.

Please submit code that adheres to the PSR-2 standard 
(https://www.php-fig.org/psr/).

Of course all PHPUnit tests must pass for the solution.

## Requirements
```
php7
composer (http://getcomposer.org)
```
