# Secuconnect PHP SDK

For more information please visit: [https://developer.secuconnect.com/](https://developer.secuconnect.com)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- SDK version: 0.5.2

## Requirements

PHP 7.1.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "secuconnect/secuconnect-php-sdk": "~0.5",
  }
}
```

Then run `composer install`

## Tests

To run the unit tests:

```
composer run test
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \Secuconnect\Client\Authentication\Authenticator;

// Configure authorization (use one of these)
Authenticator::authenticateByClientCredentials(...array_values([
    'clientId' => '...',
    'clientSecret' => '...'
]));
Authenticator::authenticateByDevice(...array_values([
    'clientId' => '...',
    'clientSecret' => '...',
    'uuid' => '...'
]));
Authenticator::authenticateByApplicationUser(...array_values([
    'clientId' => '...',
    'clientSecret' => '...',
    'username' => '...',
    'password' => '...',
    'device' => '...',
    'deviceName' => '...'
]));
Authenticator::authenticateByRefreshToken(...array_values([
    'clientId' => '...',
    'clientSecret' => '...',
    'refreshToken' => '...'
]));

$api_instance = new Secuconnect\Client\Api\GeneralMerchantsApi();
$count = 1; // int | The number of items to return.

try {
    $result = $api_instance->getAll($count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralMerchantsApi->getAll: ', $e->getMessage(), PHP_EOL;
}

?>
```
