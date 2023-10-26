# TrackedOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**utc_date** | [**\DateTime**](\DateTime.md) | The utc date of the order | 
**channel** | [**\EffetB\BeezupApi\Model\BeezUPCommonChannelBasicInfo**](BeezUPCommonChannelBasicInfo.md) |  | 
**merchant_order_id** | **string** | The merchant order identifier | 
**total_amount** | **float** | The total amount of the order | 
**currency_code** | [**\EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode**](BeezUPCommonCurrencyCode.md) |  | 
**payment_validated** | **bool** | Indicate if the payment of this order has been validated or not | 
**products** | [**\EffetB\BeezupApi\Model\TrackedOrderProduct[]**](TrackedOrderProduct.md) | The product list of this order | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


