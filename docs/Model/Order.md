# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_number** | **string** |  | [optional]
**billing_address_id** | **string** |  |
**billing_address_version_id** | **string** |  | [optional]
**currency_id** | **string** |  |
**language_id** | **string** |  |
**sales_channel_id** | **string** |  |
**order_date_time** | [**\DateTime**](\DateTime.md) |  |
**order_date** | **string** |  | [optional] [readonly]
**price** | [**\ServeXS\Shopware\v6\Store\Model\OrderPrice**](OrderPrice.md) |  | [optional]
**amount_total** | **float** |  | [optional] [readonly]
**amount_net** | **float** |  | [optional] [readonly]
**position_price** | **float** |  | [optional] [readonly]
**tax_status** | **string** |  | [optional] [readonly]
**shipping_costs** | [**\ServeXS\Shopware\v6\Store\Model\OrderShippingCosts**](OrderShippingCosts.md) |  | [optional]
**shipping_total** | **float** |  | [optional] [readonly]
**currency_factor** | **float** |  |
**deep_link_code** | **string** |  | [optional]
**affiliate_code** | **string** |  | [optional]
**campaign_code** | **string** |  | [optional]
**customer_comment** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_by_id** | **string** |  | [optional]
**updated_by_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**state_machine_state** | [**\ServeXS\Shopware\v6\Store\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order_customer** | [**\ServeXS\Shopware\v6\Store\Model\OrderCustomer**](OrderCustomer.md) |  | [optional]
**currency** | [**\ServeXS\Shopware\v6\Store\Model\Currency**](Currency.md) |  | [optional]
**language** | [**\ServeXS\Shopware\v6\Store\Model\Language**](Language.md) |  | [optional]
**addresses** | [**\ServeXS\Shopware\v6\Store\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**billing_address** | [**\ServeXS\Shopware\v6\Store\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**deliveries** | [**\ServeXS\Shopware\v6\Store\Model\OrderDelivery**](OrderDelivery.md) |  | [optional]
**line_items** | [**\ServeXS\Shopware\v6\Store\Model\OrderLineItem**](OrderLineItem.md) |  | [optional]
**transactions** | [**\ServeXS\Shopware\v6\Store\Model\OrderTransaction**](OrderTransaction.md) |  | [optional]
**documents** | [**\ServeXS\Shopware\v6\Store\Model\Document**](Document.md) |  | [optional]
**tags** | [**\ServeXS\Shopware\v6\Store\Model\Tag**](Tag.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
