# OrderListRequestWithoutPagination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_technical_codes** | [**\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceTechnicalCode[]**](BeezUPCommonMarketplaceTechnicalCode.md) |  | [optional] 
**marketplace_business_codes** | [**\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceBusinessCode[]**](BeezUPCommonMarketplaceBusinessCode.md) |  | [optional] 
**account_ids** | [**\EffetB\BeezupApi\Model\AccountId[]**](AccountId.md) | Account Id list | [optional] 
**store_ids** | [**\EffetB\BeezupApi\Model\BeezUPCommonStoreId[]**](BeezUPCommonStoreId.md) | Store Id list | [optional] 
**beez_up_order_statuses** | [**\EffetB\BeezupApi\Model\BeezUPOrderStatus[]**](BeezUPOrderStatus.md) |  | [optional] 
**date_search_type** | [**\EffetB\BeezupApi\Model\DateSearchType**](DateSearchType.md) |  | 
**begin_period_utc_date** | [**\DateTime**](\DateTime.md) | The begin period you want to make the search. \\ The period MUST not be greater than 30 days. The begin period MUST be lower than the end period. | 
**end_period_utc_date** | [**\DateTime**](\DateTime.md) | The end period of you search. \\ The period MUST not be greater than 30 days. \\ The end period MUST be greater than the begin period. The end period MUST be lower to the current date. | 
**order_buyer_name** | [**\EffetB\BeezupApi\Model\OrderBuyerName**](OrderBuyerName.md) |  | [optional] 
**marketplace_order_ids** | [**\EffetB\BeezupApi\Model\MarketplaceOrderId[]**](MarketplaceOrderId.md) |  | [optional] 
**order_merchant_order_ids** | [**\EffetB\BeezupApi\Model\OrderMerchantOrderId[]**](OrderMerchantOrderId.md) | Merchant order id list | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


