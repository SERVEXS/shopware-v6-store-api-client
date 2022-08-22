# ServeXS\Shopware\v6\Store\ContentApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**readCms()**](ContentApi.md#readCms) | **POST** /cms/{id} | Fetch and resolve a CMS page
[**readLandingPage()**](ContentApi.md#readLandingPage) | **POST** /landing-page/{landingPageId} | Fetch a landing page with the resolved CMS page
[**sendContactMail()**](ContentApi.md#sendContactMail) | **POST** /contact-form | Submit a contact form message


## `readCms()`

```php
readCms($id, $content_type, $accept, $unknown_base_type): \ServeXS\Shopware\v6\Store\Model\CmsPage
```

Fetch and resolve a CMS page

Loads a content management page by its identifier and resolve the slot data. This could be media files, product listing and so on.  **Important notice**  The criteria passed with this route also affects the listing, if there is one within the cms page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the CMS page to be resolved
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->readCms($id, $content_type, $accept, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->readCms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the CMS page to be resolved |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\CmsPage**](../Model/CmsPage.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readLandingPage()`

```php
readLandingPage($landing_page_id, $content_type, $accept, $unknown_base_type): \ServeXS\Shopware\v6\Store\Model\LandingPage
```

Fetch a landing page with the resolved CMS page

Loads a landing page by its identifier and resolves the CMS page.  **Important notice**  The criteria passed with this route also affects the listing, if there is one within the cms page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$landing_page_id = 'landing_page_id_example'; // string | Identifier of the landing page.
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->readLandingPage($landing_page_id, $content_type, $accept, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->readLandingPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **landing_page_id** | **string**| Identifier of the landing page. |
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\LandingPage**](../Model/LandingPage.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendContactMail()`

```php
sendContactMail($content_type, $accept, $inline_object13)
```

Submit a contact form message

Used for submitting contact forms. Be aware that there can be more required fields, depending on the system settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$inline_object13 = new \ServeXS\Shopware\v6\Store\Model\InlineObject13(); // \ServeXS\Shopware\v6\Store\Model\InlineObject13

try {
    $apiInstance->sendContactMail($content_type, $accept, $inline_object13);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sendContactMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **inline_object13** | [**\ServeXS\Shopware\v6\Store\Model\InlineObject13**](../Model/InlineObject13.md)|  |

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
