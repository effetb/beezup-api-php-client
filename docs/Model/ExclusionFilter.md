# ExclusionFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | [**\EffetB\BeezupApi\Model\ExclusionFilterName**](ExclusionFilterName.md) |  | 
**position** | **int** | The position of the exclusion filter | 
**group_id** | **string** | Indicate the filter&#39;s group. All filters in the same group means an \&quot;AND\&quot; operation in the filter group | 
**position_in_group** | **int** | Indicate the filter group position. This information is used for the UI purpose and must be unique in the filter group. | 
**channel_column_id** | [**\EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId**](BeezUPCommonChannelColumnId.md) |  | 
**operator_name** | [**\EffetB\BeezupApi\Model\ExclusionFilterOperatorName**](ExclusionFilterOperatorName.md) |  | 
**value** | **string** | The value indicate by the user when the filter operation requires it. | [optional] 
**enabled** | **bool** | indicates if the filter is currently enable. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


