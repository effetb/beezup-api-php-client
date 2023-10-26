# PublicationFeedReporting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_type** | [**\EffetB\BeezupApi\Model\FeedType**](FeedType.md) |  | 
**start_utc_date** | [**\DateTime**](\DateTime.md) | The feed publication start time (UTC timezone) | 
**end_utc_date** | [**\DateTime**](\DateTime.md) | The feed publication end time (UTC timezone) | [optional] 
**processing_status** | **string** | The processing status | 
**exported_products** | **int** | The product count downloaded from BeezUP Export | [optional] 
**transmitted_items** | **int** | The item count (products or offers) sent to the marketplace | [optional] 
**published_items** | **int** | The item count (products or offers) the marketplace flagged as successful | [optional] 
**published_items_with_warning** | **int** | The item count (products or offers) the marketplace flagged as successful with warnings | [optional] 
**failed_items** | **int** | The item count (products or offers) the marketplace flagged as failed | [optional] 
**error_message** | **string** | The error message | [optional] 
**html_report_url** | **string** | The Url for the Html Report generated | [optional] 
**html_report_generation_error_message** | **string** | The error message if the Html Report generation failed | [optional] 
**completed** | **bool** | Indicates if the publication is completed or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


