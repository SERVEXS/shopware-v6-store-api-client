# # OrderTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**payment_method_id** | **string** |  |
**amount** | [**\ServeXS\Shopware\v6\Store\Model\OrderShippingCosts**](OrderShippingCosts.md) |  |
**state_id** | **string** |  |
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**state_machine_state** | [**\ServeXS\Shopware\v6\Store\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**payment_method** | [**\ServeXS\Shopware\v6\Store\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
