# EffetB\BeezupApi\MarketplacesChannelCatalogsGlobalApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceChannelCatalogs**](MarketplacesChannelCatalogsGlobalApi.md#getMarketplaceChannelCatalogs) | **GET** /user/marketplaces/channelcatalogs/ | Get your marketplace channel catalog list


# **getMarketplaceChannelCatalogs**
> \EffetB\BeezupApi\Model\MarketplaceChannelCatalogList getMarketplaceChannelCatalogs($store_id)

Get your marketplace channel catalog list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesChannelCatalogsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "\"04730364-9826-4ff3-92e4-51fccd02bf10\""; // string | The StoreId to filter by

try {
    $result = $apiInstance->getMarketplaceChannelCatalogs($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsGlobalApi->getMarketplaceChannelCatalogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The StoreId to filter by | [optional]

### Return type

[**\EffetB\BeezupApi\Model\MarketplaceChannelCatalogList**](../Model/MarketplaceChannelCatalogList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

