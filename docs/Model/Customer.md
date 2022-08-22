# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**group_id** | **string** |  |
**default_payment_method_id** | **string** |  |
**sales_channel_id** | **string** |  |
**language_id** | **string** |  |
**last_payment_method_id** | **string** |  | [optional]
**default_billing_address_id** | **string** |  |
**default_shipping_address_id** | **string** |  |
**customer_number** | **string** |  |
**salutation_id** | **string** |  |
**first_name** | **string** |  |
**last_name** | **string** |  |
**company** | **string** |  | [optional]
**email** | **string** |  |
**title** | **string** |  | [optional]
**vat_ids** | **string[]** |  | [optional]
**affiliate_code** | **string** |  | [optional]
**campaign_code** | **string** |  | [optional]
**active** | **bool** |  | [optional]
**double_opt_in_registration** | **bool** |  | [optional]
**double_opt_in_email_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**double_opt_in_confirm_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**hash** | **string** |  | [optional]
**guest** | **bool** |  | [optional]
**first_login** | [**\DateTime**](\DateTime.md) |  | [optional]
**last_login** | [**\DateTime**](\DateTime.md) |  | [optional]
**newsletter** | **bool** |  | [optional]
**birthday** | **string** |  | [optional]
**last_order_date** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**order_count** | **int** |  | [optional] [readonly]
**custom_fields** | **object** |  | [optional]
**tag_ids** | **string[]** |  | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**group** | [**\ServeXS\Shopware\v6\Store\Model\CustomerGroup**](CustomerGroup.md) |  | [optional]
**default_payment_method** | [**\ServeXS\Shopware\v6\Store\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**language** | [**\ServeXS\Shopware\v6\Store\Model\Language**](Language.md) |  | [optional]
**last_payment_method** | [**\ServeXS\Shopware\v6\Store\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**default_billing_address** | [**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**default_shipping_address** | [**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**salutation** | [**\ServeXS\Shopware\v6\Store\Model\Salutation**](Salutation.md) |  | [optional]
**addresses** | [**\ServeXS\Shopware\v6\Store\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
