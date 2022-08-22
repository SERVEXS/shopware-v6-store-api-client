# ServeXS\Shopware\v6\Store\SitemapRoutesApi

All URIs are relative to http://localhost/store-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**readSeoUrl()**](SitemapRoutesApi.md#readSeoUrl) | **POST** /seo-url | Fetch SEO routes
[**readSitemap()**](SitemapRoutesApi.md#readSitemap) | **GET** /sitemap | Fetch sitemaps


## `readSeoUrl()`

```php
readSeoUrl($content_type, $accept, $unknown_base_type): EntitySearchResult
```

Fetch SEO routes

Perform a filtered search for seo urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\SitemapRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$unknown_base_type = new \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE(); // \ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->readSeoUrl($content_type, $accept, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitemapRoutesApi->readSeoUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]
 **unknown_base_type** | [**\ServeXS\Shopware\v6\Store\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**EntitySearchResult**](../Model/EntitySearchResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSitemap()`

```php
readSitemap($content_type, $accept): \ServeXS\Shopware\v6\Store\Model\Sitemap[]
```

Fetch sitemaps

Fetches a list of compressed sitemap files, which are often used by search engines.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\SitemapRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types

try {
    $result = $apiInstance->readSitemap($content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitemapRoutesApi->readSitemap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to &#39;application/json&#39;]
 **accept** | **string**| Accepted response content types | [default to &#39;application/json&#39;]

### Return type

[**\ServeXS\Shopware\v6\Store\Model\Sitemap[]**](../Model/Sitemap.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
