# # ProductListingResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_alias** | **string** | Alias which can be used to restrict response fields. For more information see [includes](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#includes-apialias). | [optional]
**entity** | **string** |  | [optional]
**total** | **int** | The total number of found entities | [optional]
**aggregations** | **object[]** | Contains aggregated data. A simple example is the determination of the average price from a product search query. | [optional]
**page** | **int** | The actual page. This can be used for pagination. | [optional]
**limit** | **int** | The actual limit. This is used for pagination and goes together with the page. | [optional]
**current_filters** | [**\ServeXS\Shopware\v6\Store\Model\ProductListingResultAllOfCurrentFilters**](ProductListingResultAllOfCurrentFilters.md) |  | [optional]
**available_sortings** | **object[]** | Contains the available sorting. These can be used to show a sorting select-box in the product listing. | [optional]
**sorting** | **string** |  | [optional]
**elements** | [**\ServeXS\Shopware\v6\Store\Model\Product[]**](Product.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
