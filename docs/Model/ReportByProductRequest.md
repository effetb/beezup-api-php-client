# ReportByProductRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | [**\EffetB\BeezupApi\Model\BeezUPCommonChannelId**](BeezUPCommonChannelId.md) |  | [optional] 
**period_type** | [**\EffetB\BeezupApi\Model\ReportFilterPeriodType**](ReportFilterPeriodType.md) |  | 
**begin_period_utc_date** | [**\DateTime**](\DateTime.md) | The begin date period you want to get the report. It&#39;s required only in case of custom period type ! | [optional] 
**end_period_utc_date** | [**\DateTime**](\DateTime.md) | The end date period you want to get the report. It&#39;s required only in case of custom period type ! | [optional] 
**category_filter** | [**\EffetB\BeezupApi\Model\BeezUPCommonCatalogCategoryFilter**](BeezUPCommonCatalogCategoryFilter.md) |  | [optional] 
**performance_indicator_filters** | [**\EffetB\BeezupApi\Model\PerformanceIndicatorFilter[]**](PerformanceIndicatorFilter.md) |  | [optional] 
**advanced_filters** | [**\EffetB\BeezupApi\Model\ReportAdvancedFilters**](ReportAdvancedFilters.md) |  | 
**order_by** | [**\EffetB\BeezupApi\Model\PerformanceIndicatorType**](PerformanceIndicatorType.md) |  | [optional] 
**order_by_direction** | [**\EffetB\BeezupApi\Model\OrderByDirection**](OrderByDirection.md) |  | [optional] 
**page_size** | [**\EffetB\BeezupApi\Model\BeezUPCommonPageSize**](BeezUPCommonPageSize.md) |  | [optional] 
**page_number** | [**\EffetB\BeezupApi\Model\BeezUPCommonPageNumber**](BeezUPCommonPageNumber.md) |  | [optional] 
**product_columns_to_display** | [**\EffetB\BeezupApi\Model\ProductColumnsToDisplay**](ProductColumnsToDisplay.md) |  | [optional] 
**product_state** | [**\EffetB\BeezupApi\Model\ProductStateFilter**](ProductStateFilter.md) |  | 
**analytics_product_column_filters** | [**\EffetB\BeezupApi\Model\AnalyticsProductColumnFilters**](AnalyticsProductColumnFilters.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


