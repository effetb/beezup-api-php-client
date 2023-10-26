# ImportationReporting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**step_name** | **string** | The last step name of the importation process | [optional] 
**user_id** | [**\EffetB\BeezupApi\Model\BeezUPCommonUserId**](BeezUPCommonUserId.md) |  | [optional] 
**success** | **bool** | Indicate if the importation succeed or not. | [optional] 
**total_product_count** | **int** | Indicate the total product count detected in the catalog during the importation. | [optional] 
**total_product_error_count** | **int** | Indicate the total product count in error detected in the catalog during the importation. | [optional] 
**total_product_success_count** | **int** | Indicate the total product count in success in the catalog during the importation. | [optional] 
**errors** | [**\EffetB\BeezupApi\Model\BeezUPCommonUserErrorMessage[]**](BeezUPCommonUserErrorMessage.md) | Indicate the error message list related to this importation. | [optional] 
**last_update_utc_date** | [**\DateTime**](\DateTime.md) | Indicate the last update UTC date of the reporting. | 
**auto_imported** | **bool** | Indicate if this importation is an auto import or not. | [optional] 
**begin_utc_date** | [**\DateTime**](\DateTime.md) | Indicate the begin UTC date of this importation. | 
**end_utc_date** | [**\DateTime**](\DateTime.md) | Indicate the end UTC date of this importation. | [optional] 
**input_configuration_url** | **string** | Indicate the input url of this importation. | [optional] 
**steps** | **map[string,bool]** | Indicate the steps that have been passed during the importation process | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


