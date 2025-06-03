# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased] - YYYY-MM-DD

### Security

### Deprecated

### Added

### Changed

### Fixed

### Removed

## [0.3.0] - 2025-06-03
[0.3.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.2.0...0.3.0

- *new endpoint*: `PaymentContainersApi->Archive()`
- *new endpoint*: `PaymentContainersApi->ValidateSingleIban()`
- *new endpoint*: `PaymentTransactionsApi->AssignPayment()`
- *new element*: `token_status` in `SmartTransactionsContainer`
- *new element*: `token_status` in `PaymentContainersProductModel`
- *new element*: `request_token` and `notification_url` in `PaymentContainersDTO`
- *changed element type*: `bank_account` changed from `array` to `object` in `PaymentTransactionsGetRefundBankAccount`

### Added
- `Model.PaymentContainerTokenStatus`
- `Model.SmartTransactionsPrepareDynamicDescriptor`

### Changed
- `Model.PaymentContainersDTO`
- `Model.PaymentContainersProductModel`
- `Model.SmartTransactionPaymentContainerDTO`
- `Model.SmartTransactionsContainer`
- `Model.SmartTransactionsPrepare`


## [0.2.0] - 2025-05-08
[0.2.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.1.1...0.2.0

### Changed
- `Model.SmartTransactionsDTO`
- `Model.SmartTransactionsProductModel`

### Removed
- `Model.SmartTemplatesElementModel`


## [0.1.0] - 2025-02-27
[0.1.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/...0.1.0

### Changed
- `.gitattributes`
- `lib/Authentication/AuthenticationCredentials.php`
- `lib/Authentication/Authenticator.php`
- `lib/Authentication/OAuthApplicationUserCredentials.php`
- `lib/Authentication/OAuthClientCredentials.php`
- `lib/Authentication/OAuthDeviceCredentials.php`
- `lib/Authentication/OAuthRefreshCredentials.php`
- `lib/Cache/CacheItem.php`
- `lib/Cache/FileCache.php`
- `lib/HeaderSelector.php`
- `lib/Logger/LocalFileLogger.php`
- `lib/ObjectSerializer.php`
- `lib/Printer/ImitationDevicePrinter.php`
- `lib/Printer/Printer.php`


