# EffetB\BeezupApi\ChannelCatalogsColumnMappingsApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannelCatalogColumnMappings**](ChannelCatalogsColumnMappingsApi.md#configureChannelCatalogColumnMappings) | **PUT** /user/channelCatalogs/{channelCatalogId}/columnMappings | Configure channel catalog column mappings


# **configureChannelCatalogColumnMappings**
> configureChannelCatalogColumnMappings($channel_catalog_id, $request)

Configure channel catalog column mappings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsColumnMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$request = new \EffetB\BeezupApi\Model\ChannelCatalogColumnMappingList(); // \EffetB\BeezupApi\Model\ChannelCatalogColumnMappingList | 

try {
    $apiInstance->configureChannelCatalogColumnMappings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsColumnMappingsApi->configureChannelCatalogColumnMappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\EffetB\BeezupApi\Model\ChannelCatalogColumnMappingList**](../Model/ChannelCatalogColumnMappingList.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

