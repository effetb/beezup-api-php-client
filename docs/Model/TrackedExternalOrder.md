# TrackedExternalOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**utc_date** | [**\DateTime**](\DateTime.md) | The utc date of the external order | 
**merchant_order_id** | **string** | The merchant order identifier | 
**visitor_id** | **string** | Can be null. The visitor identifier of the external order | [optional] 
**total_amount** | **float** | The total amount of the external order | 
**currency_code** | [**\EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode**](BeezUPCommonCurrencyCode.md) |  | 
**payment_validated** | **bool** | Indicate if the payment of this external order has been validated or not | 
**products** | [**\EffetB\BeezupApi\Model\TrackedExternalOrderProduct[]**](TrackedExternalOrderProduct.md) | Can be null. The product list included in the external order | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


