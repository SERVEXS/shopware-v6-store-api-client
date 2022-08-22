# ServeXS\Shopware\v6\Store\OrderApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder()**](OrderApi.md#cancelOrder) | **POST** /order/state/cancel | Cancel an order
[**createOrder()**](OrderApi.md#createOrder) | **POST** /checkout/order | Create an order from a cart
[**orderSetPayment()**](OrderApi.md#orderSetPayment) | **POST** /order/payment | Update the payment method of an order
[**readOrder()**](OrderApi.md#readOrder) | **POST** /order | Fetch a list of orders


## `cancelOrder()`

```php
cancelOrder($content_type, $accept, $inline_object10): \ServeXS\Shopware\v6\Store\Model\StateMachineState
```

Cancel an order

Cancels an order. The order state will be set to 'cancelled'.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object10 = new \ServeXS\Shopware\v6\Store\Model\InlineObject10(); // \ServeXS\Shopware\v6\Store\Model\InlineObject10

try {
    $result = $apiInstance->cancelOrder($content_type, $accept, $inline_object10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object10** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject10**](../Model/InlineObject10.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\StateMachineState**](../Model/StateMachineState.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($content_type, $accept, $inline_object): \ServeXS\Shopware\v6\Store\Model\Order
```

Create an order from a cart

Creates a new order from the current cart and deletes the cart.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object = new \ServeXS\Shopware\v6\Store\Model\InlineObject(); // \ServeXS\Shopware\v6\Store\Model\InlineObject

try {
    $result = $apiInstance->createOrder($content_type, $accept, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\Order**](../Model/Order.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderSetPayment()`

```php
orderSetPayment($content_type, $accept, $inline_object11): \ServeXS\Shopware\v6\Store\Model\SuccessResponse
```

Update the payment method of an order

Changes the payment method of a specific order. You can use the /order route to find out if the payment method of an order can be changed - take a look at the `paymentChangeable`- array in the response.

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


$apiInstance = new ServeXS\Shopware\v6\Store\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object11 = new \ServeXS\Shopware\v6\Store\Model\InlineObject11(); // \ServeXS\Shopware\v6\Store\Model\InlineObject11

try {
    $result = $apiInstance->orderSetPayment($content_type, $accept, $inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSetPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object11** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject11**](../Model/InlineObject11.md)|  |

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

## `readOrder()`

```php
readOrder($content_type, $accept, $unknown_base_type): \ServeXS\Shopware\v6\Store\Model\OrderRouteResponse
```

Fetch a list of orders

List orders of a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->readOrder($content_type, $accept, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->readOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\ServeXS\Shopware\v6\Store\Model\OrderRouteResponse**](../Model/OrderRouteResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
