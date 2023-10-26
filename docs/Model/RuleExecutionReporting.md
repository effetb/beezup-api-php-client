# RuleExecutionReporting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_id** | **string** | The rule identifier | 
**rule_name** | **string** | The name of the rule | 
**started_utc_date** | [**\DateTime**](\DateTime.md) | The start utc date of the execution of the rule | [optional] 
**completed_utc_date** | [**\DateTime**](\DateTime.md) | The completed utc date of the execution of the rule | [optional] 
**status** | [**\EffetB\BeezupApi\Model\RuleExecutionReportingStatus**](RuleExecutionReportingStatus.md) |  | 
**error_type** | [**\EffetB\BeezupApi\Model\RuleExecutionReportingErrorType**](RuleExecutionReportingErrorType.md) |  | [optional] 
**affected_product_count** | **int** | The count of affected products, active or not | [optional] 
**active_affected_product_count** | **int** | The count of affected active products | [optional] 
**affected_channel_count** | **int** | The count of affected Channels across all products | [optional] 
**optimisation_action_name** | [**\EffetB\BeezupApi\Model\OptimisationActionName**](OptimisationActionName.md) |  | [optional] 
**user_id** | **string** | The userId that executed the rule if any | [optional] 
**execution_source** | [**\EffetB\BeezupApi\Model\RuleExecutionReportingExecutionSource**](RuleExecutionReportingExecutionSource.md) |  | 
**report_url** | **string** | The url for the excel report for this execution | [optional] 
**links** | [**\EffetB\BeezupApi\Model\RuleExecutionReportingLinks**](RuleExecutionReportingLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


