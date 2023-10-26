# EffetB\BeezupApi\ChannelCatalogsGlobalApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addChannelCatalog**](ChannelCatalogsGlobalApi.md#addChannelCatalog) | **POST** /user/channelCatalogs/ | Add a new channel catalog
[**deleteChannelCatalog**](ChannelCatalogsGlobalApi.md#deleteChannelCatalog) | **DELETE** /user/channelCatalogs/{channelCatalogId} | Delete the channel catalog
[**getChannelCatalog**](ChannelCatalogsGlobalApi.md#getChannelCatalog) | **GET** /user/channelCatalogs/{channelCatalogId} | Get the channel catalog information
[**getChannelCatalogs**](ChannelCatalogsGlobalApi.md#getChannelCatalogs) | **GET** /user/channelCatalogs/ | List all your current channel catalogs


# **addChannelCatalog**
> \EffetB\BeezupApi\Model\LinksGetChannelCatalogLink addChannelCatalog($request)

Add a new channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \EffetB\BeezupApi\Model\AddChannelCatalogRequest(); // \EffetB\BeezupApi\Model\AddChannelCatalogRequest | 

try {
    $result = $apiInstance->addChannelCatalog($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->addChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\EffetB\BeezupApi\Model\AddChannelCatalogRequest**](../Model/AddChannelCatalogRequest.md)|  |

### Return type

[**\EffetB\BeezupApi\Model\LinksGetChannelCatalogLink**](../Model/LinksGetChannelCatalogLink.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelCatalog**
> deleteChannelCatalog($channel_catalog_id)

Delete the channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier

try {
    $apiInstance->deleteChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->deleteChannelCatalog: ', $e->getMessage(), PHP_EOL;
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

# **getChannelCatalog**
> \EffetB\BeezupApi\Model\ChannelCatalog getChannelCatalog($channel_catalog_id)

Get the channel catalog information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier

try {
    $result = $apiInstance->getChannelCatalog($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->getChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\EffetB\BeezupApi\Model\ChannelCatalog**](../Model/ChannelCatalog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogs**
> \EffetB\BeezupApi\Model\ChannelCatalogList getChannelCatalogs($store_id)

List all your current channel catalogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelCatalogsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "\"04730364-9826-4ff3-92e4-51fccd02bf10\""; // string | The store identifier

try {
    $result = $apiInstance->getChannelCatalogs($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->getChannelCatalogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store identifier | [optional]

### Return type

[**\EffetB\BeezupApi\Model\ChannelCatalogList**](../Model/ChannelCatalogList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

