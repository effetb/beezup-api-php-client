# HarvestOrderReporting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execution_uuid** | [**\EffetB\BeezupApi\Model\ExecutionUUID**](ExecutionUUID.md) |  | [optional] 
**creation_utc_date** | [**\DateTime**](\DateTime.md) | The creation UTC date of the execution | [optional] 
**processing_status** | **string** | The processing status of the execution | [optional] 
**last_update_utc_date** | [**\DateTime**](\DateTime.md) | The last update UTC date of the execution | [optional] 
**error_message** | **string** | The warning message during the execution | [optional] 
**warning_message** | **string** | The warning message during the execution | [optional] 
**beez_up_status** | [**\EffetB\BeezupApi\Model\BeezUPOrderStatus**](BeezUPOrderStatus.md) |  | [optional] 
**marketplace_status** | **string** | The order marketplace status | [optional] 
**beez_up_forced_status** | **string** | The marketplace order status forced by BeezUP during the order change oepration. This could happend when there is no status on the marketplace side. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


