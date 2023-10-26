# GetProductsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_number** | [**\EffetB\BeezupApi\Model\BeezUPCommonPageNumber**](BeezUPCommonPageNumber.md) |  | 
**page_size** | [**\EffetB\BeezupApi\Model\BeezUPCommonPageSize**](BeezUPCommonPageSize.md) |  | 
**column_id_list** | [**\EffetB\BeezupApi\Model\BeezUPCommonCatalogColumnId[]**](BeezUPCommonCatalogColumnId.md) |  | 
**exists** | **bool** | Search for existing products or not. If null you will received both. | [optional] 
**product_id_list** | [**\EffetB\BeezupApi\Model\BeezUPCommonProductId[]**](BeezUPCommonProductId.md) | Filter with a list of product identifier | [optional] 
**sku** | **string** | Search for products containing this SKU (merchant product dentifier). | [optional] 
**title** | **string** | Search for products containing this title | [optional] 
**category_path** | [**\EffetB\BeezupApi\Model\BeezUPCommonCatalogCategoryPath**](BeezUPCommonCatalogCategoryPath.md) |  | [optional] 
**orderby_catalog_column_id** | [**\EffetB\BeezupApi\Model\BeezUPCommonCatalogColumnId**](BeezUPCommonCatalogColumnId.md) |  | [optional] 
**without_sub_categories** | **bool** | Do not retrieve sub categories. By default, this value is set to false | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


