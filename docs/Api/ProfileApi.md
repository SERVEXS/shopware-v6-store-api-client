# ServeXS\Shopware\v6\Store\ProfileApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeEmail()**](ProfileApi.md#changeEmail) | **POST** /account/change-email | Change the customer&#39;s email address
[**changePassword()**](ProfileApi.md#changePassword) | **POST** /account/change-password | Change the customer&#39;s password
[**changePaymentMethod()**](ProfileApi.md#changePaymentMethod) | **POST** /account/change-payment-method/{paymentMethodId} | Change the customer&#39;s default payment method
[**changeProfile()**](ProfileApi.md#changeProfile) | **POST** /account/change-profile | Change the customer&#39;s information
[**deleteCustomer()**](ProfileApi.md#deleteCustomer) | **DELETE** /account/customer | Delete the customer&#39;s profile
[**readCustomer()**](ProfileApi.md#readCustomer) | **POST** /account/customer | Get information about current customer
[**recoveryPassword()**](ProfileApi.md#recoveryPassword) | **POST** /account/recovery-password-confirm | Reset a password with recovery credentials
[**sendRecoveryMail()**](ProfileApi.md#sendRecoveryMail) | **POST** /account/recovery-password | Send a password recovery mail


## `changeEmail()`

```php
changeEmail($content_type, $accept, $inline_object2): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Change the customer's email address

Changes a customer's email address to a new email address, using their current password as a validation.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object2 = new \ServeXS\Shopware\v6\Store\Model\InlineObject2(); // \ServeXS\Shopware\v6\Store\Model\InlineObject2

try {
    $result = $apiInstance->changeEmail($content_type, $accept, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->changeEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object2** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changePassword()`

```php
changePassword($content_type, $accept, $inline_object3): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Change the customer's password

Changes a customer's password using their current password as a validation.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object3 = new \ServeXS\Shopware\v6\Store\Model\InlineObject3(); // \ServeXS\Shopware\v6\Store\Model\InlineObject3

try {
    $result = $apiInstance->changePassword($content_type, $accept, $inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object3** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changePaymentMethod()`

```php
changePaymentMethod($payment_method_id, $content_type, $accept): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Change the customer's default payment method

Changes a customer's default (preselected) payment method.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 'payment_method_id_example'; // string | Identifier of the desired default payment method
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $result = $apiInstance->changePaymentMethod($payment_method_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->changePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| Identifier of the desired default payment method |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeProfile()`

```php
changeProfile($content_type, $accept, $inline_object1): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Change the customer's information

Make changes to a customer's account, like changing their name, salutation or title.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object1 = new \ServeXS\Shopware\v6\Store\Model\InlineObject1(); // \ServeXS\Shopware\v6\Store\Model\InlineObject1

try {
    $result = $apiInstance->changeProfile($content_type, $accept, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->changeProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object1** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($content_type, $accept)
```

Delete the customer's profile

Deletes a customer profile along with their addresses, wishlists and associated data. Created orders and their payment/shipping information (addresses) and reviews are not deleted.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $apiInstance->deleteCustomer($content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `readCustomer()`

```php
readCustomer($content_type, $accept, $unknown_base_type): \ServeXS\Shopware\v6\Store\Model\Customer
```

Get information about current customer

Returns information about the current customer.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->readCustomer($content_type, $accept, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->readCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPassword()`

```php
recoveryPassword($content_type, $accept, $inline_object8): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Reset a password with recovery credentials

This operation is Step 2 of the password reset flow. It is required to conduct Step 1 \"Send a password recovery mail\" in order to obtain the required credentials for this step.  Resets a customer's password using credentials from a password recovery mail as a validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object8 = new \ServeXS\Shopware\v6\Store\Model\InlineObject8(); // \ServeXS\Shopware\v6\Store\Model\InlineObject8

try {
    $result = $apiInstance->recoveryPassword($content_type, $accept, $inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->recoveryPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object8** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject8**](../Model/InlineObject8.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendRecoveryMail()`

```php
sendRecoveryMail($content_type, $accept, $inline_object9): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Send a password recovery mail

This operation is Step 1 of the password reset flow. Make sure to implement Step 2 \"Reset password with recovery credentials\" in order to allow for the complete flow in your application  Sends a recovery mail containing a link with credentials that allows a customer to reset their password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object9 = new \ServeXS\Shopware\v6\Store\Model\InlineObject9(); // \ServeXS\Shopware\v6\Store\Model\InlineObject9

try {
    $result = $apiInstance->sendRecoveryMail($content_type, $accept, $inline_object9);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->sendRecoveryMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object9** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject9**](../Model/InlineObject9.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
