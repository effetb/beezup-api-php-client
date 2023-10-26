# EffetB\BeezupApi\ChannelCatalogsExportationsApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearChannelCatalogExportationCache**](ChannelCatalogsExportationsApi.md#clearChannelCatalogExportationCache) | **POST** /user/channelCatalogs/{channelCatalogId}/exportations/cache/clear | Clear the exportation cache
[**getChannelCatalogExportationCacheInfo**](ChannelCatalogsExportationsApi.md#getChannelCatalogExportationCacheInfo) | **GET** /user/channelCatalogs/{channelCatalogId}/exportations/cache | Get the exportation cache information
[**getChannelCatalogExportationHistory**](ChannelCatalogsExportationsApi.md#getChannelCatalogExportationHistory) | **GET** /user/channelCatalogs/{channelCatalogId}/exportations/history | Get the exportation history


# **clearChannelCatalogExportationCache**
> clearChannelCatalogExportationCache($channel_catalog_id)

Clear the exportation cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsExportationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier

try {
    $apiInstance->clearChannelCatalogExportationCache($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsExportationsApi->clearChannelCatalogExportationCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogExportationCacheInfo**
> \EffetB\BeezupApi\Model\ChannelCatalogExportCacheInfoResponse getChannelCatalogExportationCacheInfo($channel_catalog_id)

Get the exportation cache information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsExportationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier

try {
    $result = $apiInstance->getChannelCatalogExportationCacheInfo($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsExportationsApi->getChannelCatalogExportationCacheInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\EffetB\BeezupApi\Model\ChannelCatalogExportCacheInfoResponse**](../Model/ChannelCatalogExportCacheInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogExportationHistory**
> \EffetB\BeezupApi\Model\ChannelCatalogExportationHistory getChannelCatalogExportationHistory($channel_catalog_id, $page_number, $page_size)

Get the exportation history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsExportationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$page_number = 1; // int | The page number you want to get
$page_size = 25; // int | The entry count you want to get

try {
    $result = $apiInstance->getChannelCatalogExportationHistory($channel_catalog_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsExportationsApi->getChannelCatalogExportationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **page_number** | **int**| The page number you want to get |
 **page_size** | **int**| The entry count you want to get |

### Return type

[**\EffetB\BeezupApi\Model\ChannelCatalogExportationHistory**](../Model/ChannelCatalogExportationHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

