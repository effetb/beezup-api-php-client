# ChannelCatalogProductInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | The product identifier | 
**product_sku** | **string** | The product SKU | 
**product_title** | **string** | The product tile | 
**product_image_url** | **string** | The product image Url | [optional] 
**product_exists** | **bool** | Indicates if the product still exists in your catalog | 
**overrides** | [**\EffetB\BeezupApi\Model\ProductOverridesWithCatalogValues**](ProductOverridesWithCatalogValues.md) |  | 
**disabled** | **bool** | Indicates if the product has been disabled or not | [default to false]
**uncategorized** | **bool** | Indicates if the product&#39;s category has been NOT mapped to a channel category | 
**excluded** | **bool** | Indicates if the product has been excluded by a exclusion filter | [default to false]
**excluded_by** | [**\EffetB\BeezupApi\Model\ExclusionFilterName[]**](ExclusionFilterName.md) |  | [optional] 
**links** | [**\EffetB\BeezupApi\Model\ChannelCatalogProductInfoLinks**](ChannelCatalogProductInfoLinks.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


