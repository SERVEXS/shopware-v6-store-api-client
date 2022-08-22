# ServeXS\Shopware\v6\Store\PaymentShippingApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**handlePaymentMethod()**](PaymentShippingApi.md#handlePaymentMethod) | **POST** /handle-payment | Initiate a payment for an order
[**readShippingMethod()**](PaymentShippingApi.md#readShippingMethod) | **POST** /shipping-method | Fetch shipping methods


## `handlePaymentMethod()`

```php
handlePaymentMethod($content_type, $accept, $inline_object12)
```

Initiate a payment for an order

This generic endpoint is should be called to initiate a payment flow after an order has been created. The details of the payment flow can differ depending on the payment integration and might require calling additional operations or the setup of webhooks.  The endpoint internally calls the payment handler of the payment method currently set for the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\PaymentShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object12 = new \ServeXS\Shopware\v6\Store\Model\InlineObject12(); // \ServeXS\Shopware\v6\Store\Model\InlineObject12

try {
    $apiInstance->handlePaymentMethod($content_type, $accept, $inline_object12);
} catch (Exception $e) {
    echo 'Exception when calling PaymentShippingApi->handlePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object12** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject12**](../Model/InlineObject12.md)|  |

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

## `readShippingMethod()`

```php
readShippingMethod($content_type, $accept, $only_available, $unknown_base_type): \ServeXS\Shopware\v6\Store\Model\InlineResponse2001
```

Fetch shipping methods

Perform a filtered search for shipping methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\PaymentShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$only_available = True; // bool | List only available shipping methods. This filters shipping methods methods which can not be used in the actual context because of their availability rule.
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->readShippingMethod($content_type, $accept, $only_available, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentShippingApi->readShippingMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **only_available** | **bool**| List only available shipping methods. This filters shipping methods methods which can not be used in the actual context because of their availability rule. | [optional]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
