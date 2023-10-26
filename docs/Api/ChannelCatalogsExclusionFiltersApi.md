# EffetB\BeezupApi\ChannelCatalogsExclusionFiltersApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannelCatalogExclusionFilters**](ChannelCatalogsExclusionFiltersApi.md#configureChannelCatalogExclusionFilters) | **PUT** /user/channelCatalogs/{channelCatalogId}/exclusionFilters | Configure channel catalog exclusion filters
[**getChannelCatalogExclusionFilterOperators**](ChannelCatalogsExclusionFiltersApi.md#getChannelCatalogExclusionFilterOperators) | **GET** /user/channelCatalogs/exclusionFilterOperators | Get channel catalog exclusion filter operators
[**getChannelCatalogExclusionFilters**](ChannelCatalogsExclusionFiltersApi.md#getChannelCatalogExclusionFilters) | **GET** /user/channelCatalogs/{channelCatalogId}/exclusionFilters | Get channel catalog exclusion filters


# **configureChannelCatalogExclusionFilters**
> configureChannelCatalogExclusionFilters($channel_catalog_id, $request)

Configure channel catalog exclusion filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsExclusionFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$request = new \EffetB\BeezupApi\Model\ExclusionFilters(); // \EffetB\BeezupApi\Model\ExclusionFilters | 

try {
    $apiInstance->configureChannelCatalogExclusionFilters($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsExclusionFiltersApi->configureChannelCatalogExclusionFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\EffetB\BeezupApi\Model\ExclusionFilters**](../Model/ExclusionFilters.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogExclusionFilterOperators**
> \EffetB\BeezupApi\Model\ExclusionFilterOperator[] getChannelCatalogExclusionFilterOperators()

Get channel catalog exclusion filter operators

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsExclusionFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChannelCatalogExclusionFilterOperators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsExclusionFiltersApi->getChannelCatalogExclusionFilterOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\EffetB\BeezupApi\Model\ExclusionFilterOperator[]**](../Model/ExclusionFilterOperator.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogExclusionFilters**
> \EffetB\BeezupApi\Model\ExclusionFiltersResponse getChannelCatalogExclusionFilters($channel_catalog_id)

Get channel catalog exclusion filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsExclusionFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier

try {
    $result = $apiInstance->getChannelCatalogExclusionFilters($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsExclusionFiltersApi->getChannelCatalogExclusionFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\EffetB\BeezupApi\Model\ExclusionFiltersResponse**](../Model/ExclusionFiltersResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

