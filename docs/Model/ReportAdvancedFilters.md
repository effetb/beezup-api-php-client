# ReportAdvancedFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**margin_type** | [**\EffetB\BeezupApi\Model\MarginType**](MarginType.md) |  | 
**global_margin_percent** | **int** | If the margin type is &#39;Global&#39;, indicate the percentage of sale price. | [optional] 
**link_click_to_order_type** | [**\EffetB\BeezupApi\Model\LinkClickToOrderType**](LinkClickToOrderType.md) |  | 
**link_click_to_order_max_day** | **int** | If the linkOrderType is OnClickDate, indicate the max day to search the click from the order | [optional] 
**only_payment_validated_orders** | **bool** | If true, you will get the only the orders with payment validated. Otherwise, you will get all orders validated or not. | [default to false]
**only_direct_sales** | **bool** | If true, you will get only direct sales. Otherwise the indirect sales will be included. | [default to false]
**performance_indicator_formula** | [**\EffetB\BeezupApi\Model\PerformanceIndicatorFormula**](PerformanceIndicatorFormula.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


