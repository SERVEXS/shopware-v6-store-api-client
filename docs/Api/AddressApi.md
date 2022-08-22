# ServeXS\Shopware\v6\Store\AddressApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerAddress()**](AddressApi.md#createCustomerAddress) | **POST** /account/address | Create a new address for a customer
[**defaultBillingAddress()**](AddressApi.md#defaultBillingAddress) | **PATCH** /account/address/default-billing/{addressId} | Change a customer&#39;s default billing address
[**defaultShippingAddress()**](AddressApi.md#defaultShippingAddress) | **PATCH** /account/address/default-shipping/{addressId} | Change a customer&#39;s default shipping address
[**deleteCustomerAddress()**](AddressApi.md#deleteCustomerAddress) | **DELETE** /account/address/{addressId} | Delete an address of a customer
[**listAddress()**](AddressApi.md#listAddress) | **POST** /account/list-address | Fetch addresses of a customer
[**updateCustomerAddress()**](AddressApi.md#updateCustomerAddress) | **PATCH** /account/address/{addressId} | Modify an address of a customer


## `createCustomerAddress()`

```php
createCustomerAddress($content_type, $accept, $customer_address): \ServeXS\Shopware\v6\Store\Model\CustomerAddress
```

Create a new address for a customer

Creates a new address for a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$customer_address = new \ServeXS\Shopware\v6\Store\Model\CustomerAddress(); // \ServeXS\Shopware\v6\Store\Model\CustomerAddress

try {
    $result = $apiInstance->createCustomerAddress($content_type, $accept, $customer_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->createCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **customer_address** | [**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](../Model/CustomerAddress.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `defaultBillingAddress()`

```php
defaultBillingAddress($address_id, $content_type, $accept)
```

Change a customer's default billing address

Updates the default (preselected) billing addresses of a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address ID
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $apiInstance->defaultBillingAddress($address_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->defaultBillingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| Address ID |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `defaultShippingAddress()`

```php
defaultShippingAddress($address_id, $content_type, $accept)
```

Change a customer's default shipping address

Updates the default (preselected) shipping addresses of a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address ID
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $apiInstance->defaultShippingAddress($address_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->defaultShippingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| Address ID |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomerAddress()`

```php
deleteCustomerAddress($address_id, $content_type, $accept)
```

Delete an address of a customer

Delete an address of customer.  Only addresses which are not set as default addresses for shipping or billing can be deleted. You can check the current default addresses of your customer using the profile information endpoint and change them using the default address endpoint.       **A customer must have at least one address (which can be used for shipping and billing).**  An automatic fallback is not applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | ID of the address to be deleted.
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $apiInstance->deleteCustomerAddress($address_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->deleteCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| ID of the address to be deleted. |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddress()`

```php
listAddress($content_type, $accept, $unknown_base_type): \ServeXS\Shopware\v6\Store\Model\CustomerAddress[]
```

Fetch addresses of a customer

Lists all addresses of the current customer and allows filtering them based on a criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->listAddress($content_type, $accept, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->listAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\CustomerAddress[]**](../Model/CustomerAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerAddress()`

```php
updateCustomerAddress($address_id, $content_type, $accept, $customer_address): \ServeXS\Shopware\v6\Store\Model\CustomerAddress
```

Modify an address of a customer

Modifies an existing address of a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address ID
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$customer_address = new \ServeXS\Shopware\v6\Store\Model\CustomerAddress(); // \ServeXS\Shopware\v6\Store\Model\CustomerAddress

try {
    $result = $apiInstance->updateCustomerAddress($address_id, $content_type, $accept, $customer_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->updateCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| Address ID |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **customer_address** | [**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](../Model/CustomerAddress.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
