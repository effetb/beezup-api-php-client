# EffetB\BeezupApi\ChannelCatalogsProductsOverridesApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannelCatalogProductValueOverrideCopy**](ChannelCatalogsProductsOverridesApi.md#configureChannelCatalogProductValueOverrideCopy) | **POST** /user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides/copy | Copy channel catalog product value override
[**deleteChannelCatalogProductValueOverride**](ChannelCatalogsProductsOverridesApi.md#deleteChannelCatalogProductValueOverride) | **DELETE** /user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides/{channelColumnId} | Delete a specific channel catalog product value override
[**getChannelCatalogProductValueOverrideCopy**](ChannelCatalogsProductsOverridesApi.md#getChannelCatalogProductValueOverrideCopy) | **GET** /user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides/copy | Get channel catalog product value override compatibilities status
[**overrideChannelCatalogProductValues**](ChannelCatalogsProductsOverridesApi.md#overrideChannelCatalogProductValues) | **PUT** /user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides | Override channel catalog product values


# **configureChannelCatalogProductValueOverrideCopy**
> configureChannelCatalogProductValueOverrideCopy($channel_catalog_id, $product_id)

Copy channel catalog product value override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsProductsOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$product_id = "\"578419df-1bbf-41a6-96fa-862e42182b67\""; // string | The product identifier

try {
    $apiInstance->configureChannelCatalogProductValueOverrideCopy($channel_catalog_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsOverridesApi->configureChannelCatalogProductValueOverrideCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelCatalogProductValueOverride**
> deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id)

Delete a specific channel catalog product value override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsProductsOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$product_id = "\"578419df-1bbf-41a6-96fa-862e42182b67\""; // string | The product identifier
$channel_column_id = "\"8a76f06a-fefc-4c0d-bcfe-b210f1482977\""; // string | The channel column identifier

try {
    $apiInstance->deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsOverridesApi->deleteChannelCatalogProductValueOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **channel_column_id** | **string**| The channel column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductValueOverrideCopy**
> getChannelCatalogProductValueOverrideCopy($channel_catalog_id, $product_id)

Get channel catalog product value override compatibilities status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsProductsOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$product_id = "\"578419df-1bbf-41a6-96fa-862e42182b67\""; // string | The product identifier

try {
    $apiInstance->getChannelCatalogProductValueOverrideCopy($channel_catalog_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsOverridesApi->getChannelCatalogProductValueOverrideCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **overrideChannelCatalogProductValues**
> overrideChannelCatalogProductValues($channel_catalog_id, $product_id, $request)

Override channel catalog product values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsProductsOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$product_id = "\"578419df-1bbf-41a6-96fa-862e42182b67\""; // string | The product identifier
$request = new \EffetB\BeezupApi\Model\ProductOverrides(); // \EffetB\BeezupApi\Model\ProductOverrides | 

try {
    $apiInstance->overrideChannelCatalogProductValues($channel_catalog_id, $product_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsOverridesApi->overrideChannelCatalogProductValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **request** | [**\EffetB\BeezupApi\Model\ProductOverrides**](../Model/ProductOverrides.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

