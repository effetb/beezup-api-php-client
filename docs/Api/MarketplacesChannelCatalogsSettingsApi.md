# EffetB\BeezupApi\MarketplacesChannelCatalogsSettingsApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelCatalogMarketplaceProperties**](MarketplacesChannelCatalogsSettingsApi.md#getChannelCatalogMarketplaceProperties) | **GET** /user/marketplaces/channelcatalogs/{channelCatalogId}/properties | Get the marketplace properties for a channel catalog
[**getChannelCatalogMarketplaceSettings**](MarketplacesChannelCatalogsSettingsApi.md#getChannelCatalogMarketplaceSettings) | **GET** /user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Get the marketplace settings for a channel catalog
[**setChannelCatalogMarketplaceSettings**](MarketplacesChannelCatalogsSettingsApi.md#setChannelCatalogMarketplaceSettings) | **POST** /user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Save new marketplace settings for a channel catalog


# **getChannelCatalogMarketplaceProperties**
> \EffetB\BeezupApi\Model\ChannelCatalogMarketplaceProperties getChannelCatalogMarketplaceProperties($channel_catalog_id, $redirection_page_url, $accept_language)

Get the marketplace properties for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesChannelCatalogsSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "channel_catalog_id_example"; // string | 
$redirection_page_url = "redirection_page_url_example"; // string | 
$accept_language = array("accept_language_example"); // string[] | Indicates that the client accepts the following languages.

try {
    $result = $apiInstance->getChannelCatalogMarketplaceProperties($channel_catalog_id, $redirection_page_url, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsSettingsApi->getChannelCatalogMarketplaceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**|  |
 **redirection_page_url** | **string**|  |
 **accept_language** | [**string[]**](../Model/string.md)| Indicates that the client accepts the following languages. | [optional]

### Return type

[**\EffetB\BeezupApi\Model\ChannelCatalogMarketplaceProperties**](../Model/ChannelCatalogMarketplaceProperties.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogMarketplaceSettings**
> \EffetB\BeezupApi\Model\ChannelCatalogMarketplaceSettings getChannelCatalogMarketplaceSettings($channel_catalog_id)

Get the marketplace settings for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesChannelCatalogsSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query (required)

try {
    $result = $apiInstance->getChannelCatalogMarketplaceSettings($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsSettingsApi->getChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query (required) |

### Return type

[**\EffetB\BeezupApi\Model\ChannelCatalogMarketplaceSettings**](../Model/ChannelCatalogMarketplaceSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setChannelCatalogMarketplaceSettings**
> setChannelCatalogMarketplaceSettings($channel_catalog_id, $model)

Save new marketplace settings for a channel catalog

Allow you to configure your marketplace settings. Partial update accepted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesChannelCatalogsSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query
$model = new \EffetB\BeezupApi\Model\SetChannelCatalogMarketplaceSettingsRequest(); // \EffetB\BeezupApi\Model\SetChannelCatalogMarketplaceSettingsRequest | Settings to save

try {
    $apiInstance->setChannelCatalogMarketplaceSettings($channel_catalog_id, $model);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsSettingsApi->setChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query |
 **model** | [**\EffetB\BeezupApi\Model\SetChannelCatalogMarketplaceSettingsRequest**](../Model/SetChannelCatalogMarketplaceSettingsRequest.md)| Settings to save |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

