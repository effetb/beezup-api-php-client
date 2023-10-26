# ProductSetVisibilityCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**logic** | [**\EffetB\BeezupApi\Model\ProductSetVisibilityCriteriaLogicType**](ProductSetVisibilityCriteriaLogicType.md) |  | 
**exist** | **bool** | If false, search for products absent from the current catalog. If true, search for products currently in the catalog. If null the filter will not be taken in account. | [optional] 
**uncategorized** | **bool** | Search product WITHOUT category mapped with the channel. If null the filter will not be taken in account. | [optional] 
**excluded** | **bool** | Search excluded products by at least an exclusion filter. If null the filter will not be taken in account. | [optional] 
**disabled** | **bool** | Search disabled products. If null the filter will not be taken in account. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


