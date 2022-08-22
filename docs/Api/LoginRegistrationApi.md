# ServeXS\Shopware\v6\Store\LoginRegistrationApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerGroupRegistrationInfo()**](LoginRegistrationApi.md#getCustomerGroupRegistrationInfo) | **GET** /customer-group-registration/config/{customerGroupId} | Fetch registration settings for customer group
[**loginCustomer()**](LoginRegistrationApi.md#loginCustomer) | **POST** /account/login | Log in a customer
[**logoutCustomer()**](LoginRegistrationApi.md#logoutCustomer) | **POST** /account/logout | Log out a customer
[**register()**](LoginRegistrationApi.md#register) | **POST** /account/register | Register a customer
[**registerConfirm()**](LoginRegistrationApi.md#registerConfirm) | **POST** /account/register-confirm | Confirm a customer registration


## `getCustomerGroupRegistrationInfo()`

```php
getCustomerGroupRegistrationInfo($customer_group_id, $content_type, $accept): \ServeXS\Shopware\v6\Store\Model\CustomerGroup
```

Fetch registration settings for customer group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_group_id = 'customer_group_id_example'; // string | Customer group id
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $result = $apiInstance->getCustomerGroupRegistrationInfo($customer_group_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->getCustomerGroupRegistrationInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_group_id** | **string**| Customer group id |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginCustomer()`

```php
loginCustomer($content_type, $accept, $inline_object4): \ServeXS\Shopware\v6\Store\Model\ContextTokenResponse
```

Log in a customer

Logs in customers given their credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object4 = new \ServeXS\Shopware\v6\Store\Model\InlineObject4(); // \ServeXS\Shopware\v6\Store\Model\InlineObject4

try {
    $result = $apiInstance->loginCustomer($content_type, $accept, $inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->loginCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object4** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\ContextTokenResponse**](../Model/ContextTokenResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutCustomer()`

```php
logoutCustomer($content_type, $accept): \ServeXS\Shopware\v6\Store\Model\ContextTokenResponse
```

Log out a customer

Logs out a customer.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $result = $apiInstance->logoutCustomer($content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->logoutCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\ContextTokenResponse**](../Model/ContextTokenResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($content_type, $accept, $inline_object7): \ServeXS\Shopware\v6\Store\Model\Customer
```

Register a customer

Registers a customer. Used both for normal customers and guest customers.  See the Guide \"Register a customer\" for more information on customer registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object7 = new \ServeXS\Shopware\v6\Store\Model\InlineObject7(); // \ServeXS\Shopware\v6\Store\Model\InlineObject7

try {
    $result = $apiInstance->register($content_type, $accept, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object7** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerConfirm()`

```php
registerConfirm($content_type, $accept, $inline_object6)
```

Confirm a customer registration

Confirms a customer registration when double opt-in is activated.  Learn more about double opt-in registration in our guide \"Register a customer\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object6 = new \ServeXS\Shopware\v6\Store\Model\InlineObject6(); // \ServeXS\Shopware\v6\Store\Model\InlineObject6

try {
    $apiInstance->registerConfirm($content_type, $accept, $inline_object6);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->registerConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object6** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
