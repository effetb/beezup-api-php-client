# ChannelCatalogMarketplaceProperty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | [**\EffetB\BeezupApi\Model\ChannelCatalogMarketplacePropertyName**](ChannelCatalogMarketplacePropertyName.md) |  | 
**info** | [**\EffetB\BeezupApi\Model\BeezUPCommonInfoSummaries**](BeezUPCommonInfoSummaries.md) |  | [optional] 
**description** | **string** | Indicate the description of the property | [optional] 
**position** | **int** | Indicate the position of the property in the display group | 
**read_only** | **bool** | Indicate if the value cannot be changed. This is used for example for ebay token that should not be changed. | [default to false]
**min_length** | **int** | Indicates the minimum size of the property value | [optional] [default to 0]
**max_length** | **int** | Indicates the maximum size of the property value | [optional] 
**min_items** | **int** | Indicates the minimum item count of the property value. | [optional] [default to 1]
**max_items** | **int** | Indicates the maximum item count of the property value | [optional] [default to 1]
**lov_link** | [**\EffetB\BeezupApi\Model\BeezUPCommonLOVLink3**](BeezUPCommonLOVLink3.md) |  | [optional] 
**lov_required** | **bool** | Indicates if the property value must be in the list of value. | [optional] [default to false]
**required** | **bool** | Indicate if the property is required or not | [default to false]
**offer_id_required** | **int** | Indicates the offer identifier required to configure this property. | [optional] 
**visible** | **bool** | Indicates if this property should be displayed in the configuration page. | [default to true]
**type** | [**\EffetB\BeezupApi\Model\Type**](Type.md) |  | 
**discriminator_type** | [**\EffetB\BeezupApi\Model\ChannelCatalogMarketplacePropertyDiscriminatorType**](ChannelCatalogMarketplacePropertyDiscriminatorType.md) |  | 
**pattern** | **string** | Channel catalog marketplace setting value format validation regular expression | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


