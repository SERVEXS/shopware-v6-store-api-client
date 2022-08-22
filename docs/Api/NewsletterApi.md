# ServeXS\Shopware\v6\Store\NewsletterApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmNewsletter()**](NewsletterApi.md#confirmNewsletter) | **POST** /newsletter/confirm | Confirm a newsletter registration
[**subscribeToNewsletter()**](NewsletterApi.md#subscribeToNewsletter) | **POST** /newsletter/subscribe | Create or remove a newsletter subscription
[**unsubscribeToNewsletter()**](NewsletterApi.md#unsubscribeToNewsletter) | **POST** /newsletter/unsubscribe | Remove a newsletter subscription


## `confirmNewsletter()`

```php
confirmNewsletter($content_type, $accept, $inline_object14)
```

Confirm a newsletter registration

You have to use the hash from the link sent out via email to confirm the user registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object14 = new \ServeXS\Shopware\v6\Store\Model\InlineObject14(); // \ServeXS\Shopware\v6\Store\Model\InlineObject14

try {
    $apiInstance->confirmNewsletter($content_type, $accept, $inline_object14);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->confirmNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object14** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject14**](../Model/InlineObject14.md)|  |

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

## `subscribeToNewsletter()`

```php
subscribeToNewsletter($content_type, $accept, $inline_object15)
```

Create or remove a newsletter subscription

This route is used to create/remove/confirm a newsletter subscription.  The `option` property controls what should happen: * `direct`: The subscription is directly active and does not need a confirmation. * `subscribe`: An email will be send to the provided email addrees containing a link to the /newsletter/confirm route. The subscription is only successful, if the /newsletter/confirm route is called with the generated hashes. * `unsubscribe`: The email address will be removed from the newsletter subscriptions. * `confirmSubscribe`: Confirmes the newsletter subscription for the provided email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object15 = new \ServeXS\Shopware\v6\Store\Model\InlineObject15(); // \ServeXS\Shopware\v6\Store\Model\InlineObject15

try {
    $apiInstance->subscribeToNewsletter($content_type, $accept, $inline_object15);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->subscribeToNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object15** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject15**](../Model/InlineObject15.md)|  |

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

## `unsubscribeToNewsletter()`

```php
unsubscribeToNewsletter($content_type, $accept, $inline_object16)
```

Remove a newsletter subscription

Removes a newsletter recipient from the mailing lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object16 = new \ServeXS\Shopware\v6\Store\Model\InlineObject16(); // \ServeXS\Shopware\v6\Store\Model\InlineObject16

try {
    $apiInstance->unsubscribeToNewsletter($content_type, $accept, $inline_object16);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->unsubscribeToNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object16** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject16**](../Model/InlineObject16.md)|  |

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
