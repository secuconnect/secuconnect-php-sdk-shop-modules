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

## [0.9.0] - 2026-03-24
[0.9.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.8.0...0.9.0

- *new element*: `load_date` and `basket` in `PaymentTransactionsProductModel`
- *fix bug*: Wrong mapping in `ObjectSerializer` and wrong extends in model classes

### Added
- `Model.PaymentTransactionsProductModelBasket`
- `Model.PaymentTransactionsProductModelSubBasket`

### Changed
- `Model.PaymentTransactionsProductModel`
- `lib/ObjectSerializer.php`


## [0.8.0] - 2026-03-10
[0.8.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.0...0.8.0

- *new element*: `GeneralContractsProductModel->event_details`
- Update phpunit versions to solve vulnerability warning
- FIX missing path params replacement

### Added
- `Model.GeneralContractsEventDetails`

### Changed
- `Api.GeneralContractsApi`
- `Api.PaymentContainersApi`
- `Api.PaymentTransactionsApi`
- `Api.SmartTransactionsApi`
- `Model.ContainerInstructions`
- `Model.DynamicDescriptor`
- `Model.GeneralContractsProductModel`
- `Model.MITInstructions`
- `Model.PaymentContainerTokenStatus`
- `Model.PaymentContext`
- `Model.SmartTransactionsDTO`
- `Model.SmartTransactionsPrepareDynamicDescriptor`
- `Model.SmartTransactionsProductModel`


## [0.7.0] - 2026-03-10
[0.7.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.0...0.7.0

### Changed
- `.gitignore`
- `Api.GeneralContractsApi`
- `Api.PaymentContainersApi`
- `Api.PaymentTransactionsApi`
- `Api.SmartTransactionsApi`
- `lib/Authentication/Authenticator.php`
- `lib/Cache/CacheItem.php`
- `lib/Cache/FileCache.php`
- `Model.Address`
- `Model.AddressComponents`
- `Model.Aggregate`
- `Model.AggregationResult`
- `Model.AggregationTimeResult`
- `Model.ApplePayDescriptor`
- `Model.ApplePayDescriptorHeader`
- `Model.ApplepayPaymentConfig`
- `Model.AssignedBy`
- `Model.BackgroundImageOption`
- `Model.BankAccountDescriptor`
- `Model.BaseProductModel`
- `Model.CheckoutConfiguration`
- `Model.CheckoutConfigurationNotifications`
- `Model.ClientIdValue`
- `Model.Contact`
- `Model.ContainerInstructions`
- `Model.CreatedField`
- `Model.CreditCardDescriptor`
- `Model.Currency`
- `Model.DayTime`
- `Model.DynamicDescriptor`
- `Model.EanOrGtin`
- `Model.GeneralContractsProductModel`
- `Model.GeneralMerchantsLegalDetails`
- `Model.GeneralMerchantsProductModel`
- `Model.GeneralMerchantsUrls`
- `Model.GeneralMerchantsUser`
- `Model.GeneralMerchantsUserEmail`
- `Model.GeneralStoresProductModel`
- `Model.GeoAddress`
- `Model.GeoAddressGeometry`
- `Model.GetAvailablePaymentMethodsDTO`
- `Model.GooglePayDescriptor`
- `Model.GooglePayDescriptorIntermediateSigningKey`
- `Model.GooglepayPaymentConfig`
- `Model.IframeOptions`
- `Model.IframeOptionsPaymentConfig`
- `Model.InvitedBy`
- `Model.IsoCountryCode`
- `Model.IsoDateTime`
- `Model.LoyaltyCardgroupsProductModel`
- `Model.LoyaltyCardsDTOAccount`
- `Model.LoyaltyCardsProductModel`
- `Model.LoyaltyCustomersPaymentContainerModel`
- `Model.LoyaltyCustomersProductModel`
- `Model.LoyaltyMerchantcardsDTOPaymentContainer`
- `Model.LoyaltyMerchantcardsProductModel`
- `Model.MITInstructions`
- `Model.ModelInterface`
- `Model.MoneyAmount`
- `Model.ObjectId`
- `Model.ObjectType`
- `Model.OpenHours`
- `Model.ParentModel`
- `Model.ParentObj`
- `Model.PayPalDescriptor`
- `Model.PaymentContainerMandate`
- `Model.PaymentContainerTokenStatus`
- `Model.PaymentContainersDTO`
- `Model.PaymentContainersDTOCustomer`
- `Model.PaymentContainersProductModel`
- `Model.PaymentContext`
- `Model.PaymentContractsProductModel`
- `Model.PaymentCustomersDTO`
- `Model.PaymentCustomersProductModel`
- `Model.PaymentInformation`
- `Model.PaymentInstructions`
- `Model.PaymentLinkOptions`
- `Model.PaymentTransactionCancelDTO`
- `Model.PaymentTransactionsCaptureDTO`
- `Model.PaymentTransactionsCheckStatus`
- `Model.PaymentTransactionsInstructionsModel`
- `Model.PaymentTransactionsProductModel`
- `Model.PaymentTransactionsProductModelCustomer`
- `Model.PaymentTransactionsProductModelDetails`
- `Model.PaymentTransactionsProductModelDocuments`
- `Model.ProductExceptionPayload`
- `Model.ProductInstanceID`
- `Model.ProductInstanceUID`
- `Model.ResultBoolean`
- `Model.SecupayBaseBasketItem`
- `Model.SecupayBasketItem`
- `Model.SecupayRedirectUrl`
- `Model.SecupaySubTransactionProductModel`
- `Model.SecupayTransactionProductDTOSubscription`
- `Model.SecupayTransactionProductModel`
- `Model.SecupayTransactionProductModelUsedPaymentInstrument`
- `Model.SecupayTransactionSetShippingInformationDTO`
- `Model.SmartTransactionPaymentContainerDTO`
- `Model.SmartTransactionPaymentCustomerDTO`
- `Model.SmartTransactionsApplicationContext`
- `Model.SmartTransactionsApplicationContextIframeOpts`
- `Model.SmartTransactionsApplicationContextLocks`
- `Model.SmartTransactionsApplicationContextReturnUrls`
- `Model.SmartTransactionsApplicationContextShopDetails`
- `Model.SmartTransactionsBasket`
- `Model.SmartTransactionsBasketInfo`
- `Model.SmartTransactionsBasketProduct`
- `Model.SmartTransactionsBasketProductGroup`
- `Model.SmartTransactionsCheckin`
- `Model.SmartTransactionsCheckoutLinks`
- `Model.SmartTransactionsCollectionModel`
- `Model.SmartTransactionsCommunication`
- `Model.SmartTransactionsContainer`
- `Model.SmartTransactionsDTO`
- `Model.SmartTransactionsIdent`
- `Model.SmartTransactionsList`
- `Model.SmartTransactionsMerchant`
- `Model.SmartTransactionsPaymentLinks`
- `Model.SmartTransactionsPrepaidSalesDetails`
- `Model.SmartTransactionsPrepare`
- `Model.SmartTransactionsPrepareCallbackUrls`
- `Model.SmartTransactionsPrepareDynamicDescriptor`
- `Model.SmartTransactionsProductModel`
- `Model.SmartTransactionsReceipt`
- `Model.SmartTransactionsReceiptValue`
- `Model.SmartTransactionsShippingModel`
- `Model.SmartTransactionsSubBasketProduct`
- `Model.SmartTransactionsTimeSlot`
- `Model.TaxRate`
- `Model.ThirdPartyEnvironment`
- `Model.ThirdPartyEnvironmentSettings`
- `Model.UpdatedField`
- `lib/ObjectSerializer.php`
- `lib/Printer/ImitationDevicePrinter.php`
- `phpunit.xml.dist`


## [0.6.0] - 2025-11-13
[0.6.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.0...0.6.0

- *rename element*: from `standing_instructions` to `standing_instruction` in `MITInstructions`

### Changed
- `Model.MITInstructions`


## [0.5.0] - 2025-11-07
[0.5.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.4.0...0.5.0

- *changed element pattern*: `purpose` changed from `*` to `regex` in `SecupayPayoutDTO`
- *changed element pattern*: `purpose` changed from `*` to `regex` in `SecupayPayoutWithoutCustomerDTO`
- *changed element*: Response changed from `LoyaltyMerchantcardsProductModel` to `CreateLoyaltyMerchantcardsProductModel` in `LoyaltyMerchantcardsApi->createMerchantcards()`
- *new element*: `csc` in `CreateLoyaltyMerchantcardsProductModel`
- *new element*: `dynamic_descriptor`, in `PaymentContext`
- *new element*: `container_instructions`, in `PaymentContext`
- *new element*: `mit_instructions`, in `PaymentContext`

### Added
- `Model.ContainerInstructions`
- `Model.DynamicDescriptor`
- `Model.MITInstructions`

### Changed
- `Model.PaymentContext`


## [0.4.0] - 2025-09-25
[0.4.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.3.0...0.4.0

### Changed
- `Model.LoyaltyMerchantcardsProductModel`
- `Model.PaymentContainersDTO`
- `Model.SmartTransactionPaymentContainerDTO`


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


