# # ProductJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **array<string,object>** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | **object** |  | [optional]
**links** | [**array<string,\ServeXS\Shopware\v6\Store\Model\Link>**](Link.md) |  | [optional]
**meta** | **array<string,object>** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**version_id** | **string** |  | [optional]
**parent_id** | **string** |  | [optional]
**parent_version_id** | **string** |  | [optional]
**manufacturer_id** | **string** |  | [optional]
**product_manufacturer_version_id** | **string** |  | [optional]
**unit_id** | **string** |  | [optional]
**tax_id** | **string** |  |
**cover_id** | **string** |  | [optional]
**product_media_version_id** | **string** |  | [optional]
**delivery_time_id** | **string** |  | [optional]
**canonical_product_id** | **string** |  | [optional]
**cms_page_id** | **string** |  | [optional]
**cms_page_version_id** | **string** |  | [optional]
**product_number** | **string** |  |
**stock** | **int** |  |
**restock_time** | **int** |  | [optional]
**active** | **bool** |  | [optional]
**available_stock** | **int** |  | [optional] [readonly]
**available** | **bool** |  | [optional] [readonly]
**is_closeout** | **bool** |  | [optional]
**display_group** | **string** |  | [optional] [readonly]
**main_variant_id** | **string** |  | [optional]
**manufacturer_number** | **string** |  | [optional]
**ean** | **string** |  | [optional]
**purchase_steps** | **int** |  | [optional]
**max_purchase** | **int** |  | [optional]
**min_purchase** | **int** |  | [optional]
**purchase_unit** | **float** |  | [optional]
**reference_unit** | **float** |  | [optional]
**shipping_free** | **bool** |  | [optional]
**mark_as_topseller** | **bool** |  | [optional]
**weight** | **float** |  | [optional]
**width** | **float** |  | [optional]
**height** | **float** |  | [optional]
**length** | **float** |  | [optional]
**release_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**rating_average** | **float** |  | [optional] [readonly]
**category_tree** | **string[]** |  | [optional] [readonly]
**property_ids** | **string[]** |  | [optional] [readonly]
**option_ids** | **string[]** |  | [optional] [readonly]
**category_ids** | **string[]** |  | [optional] [readonly]
**child_count** | **int** |  | [optional] [readonly]
**sales** | **int** |  | [optional] [readonly]
**meta_description** | **string** |  | [optional]
**name** | **string** |  |
**keywords** | **string** |  | [optional]
**description** | **string** |  | [optional]
**meta_title** | **string** |  | [optional]
**pack_unit** | **string** |  | [optional]
**pack_unit_plural** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**calculated_price** | **object** |  | [optional]
**calculated_prices** | **object[]** |  | [optional]
**calculated_max_purchase** | **int** |  | [optional]
**calculated_cheapest_price** | **object** |  | [optional]
**is_new** | **bool** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)