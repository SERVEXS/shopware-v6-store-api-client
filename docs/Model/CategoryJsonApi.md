# # CategoryJsonApi

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
**after_category_id** | **string** |  | [optional]
**after_category_version_id** | **string** |  | [optional]
**media_id** | **string** |  | [optional]
**display_nested_products** | **bool** |  |
**breadcrumb** | **string[]** |  | [optional] [readonly]
**level** | **int** |  | [optional] [readonly]
**path** | **string** |  | [optional] [readonly]
**child_count** | **int** |  | [optional] [readonly]
**product_assignment_type** | **string** |  |
**visible** | **bool** |  | [optional]
**active** | **bool** |  | [optional]
**name** | **string** |  |
**custom_fields** | **object** |  | [optional]
**link_type** | **string** |  | [optional]
**internal_link** | **string** |  | [optional]
**external_link** | **string** |  | [optional]
**link_new_tab** | **bool** |  | [optional]
**description** | **string** |  | [optional]
**meta_title** | **string** |  | [optional]
**meta_description** | **string** |  | [optional]
**keywords** | **string** |  | [optional]
**cms_page_id** | **string** |  | [optional]
**cms_page_version_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
