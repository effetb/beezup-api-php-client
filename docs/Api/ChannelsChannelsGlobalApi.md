# EffetB\BeezupApi\ChannelsChannelsGlobalApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableChannels**](ChannelsChannelsGlobalApi.md#getAvailableChannels) | **GET** /user/channels/ | List all available channel for this store
[**getChannelCategories**](ChannelsChannelsGlobalApi.md#getChannelCategories) | **GET** /user/channels/{channelId}/categories | Get channel categories
[**getChannelColumns**](ChannelsChannelsGlobalApi.md#getChannelColumns) | **POST** /user/channels/{channelId}/columns | Get channel columns
[**getChannelInfo**](ChannelsChannelsGlobalApi.md#getChannelInfo) | **GET** /user/channels/{channelId} | Get channel information


# **getAvailableChannels**
> \EffetB\BeezupApi\Model\ChannelHeader[] getAvailableChannels($store_id)

List all available channel for this store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelsChannelsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "\"04730364-9826-4ff3-92e4-51fccd02bf10\""; // string | The store identifier

try {
    $result = $apiInstance->getAvailableChannels($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsChannelsGlobalApi->getAvailableChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store identifier |

### Return type

[**\EffetB\BeezupApi\Model\ChannelHeader[]**](../Model/ChannelHeader.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCategories**
> \EffetB\BeezupApi\Model\ChannelRootCategory getChannelCategories($channel_id, $accept_encoding)

Get channel categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelsChannelsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "\"2dc136a7-0d3d-4cc9-a825-a28a42c53e28\""; // string | The channel identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.

try {
    $result = $apiInstance->getChannelCategories($channel_id, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsChannelsGlobalApi->getChannelCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |

### Return type

[**\EffetB\BeezupApi\Model\ChannelRootCategory**](../Model/ChannelRootCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelColumns**
> \EffetB\BeezupApi\Model\ChannelColumn[] getChannelColumns($channel_id, $accept_encoding, $request)

Get channel columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelsChannelsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "\"2dc136a7-0d3d-4cc9-a825-a28a42c53e28\""; // string | The channel identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.
$request = array(new \EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId()); // \EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId[] | Allow you to filter the channel column identifier list your want to get

try {
    $result = $apiInstance->getChannelColumns($channel_id, $accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsChannelsGlobalApi->getChannelColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |
 **request** | [**\EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId[]**](../Model/BeezUPCommonChannelColumnId.md)| Allow you to filter the channel column identifier list your want to get | [optional]

### Return type

[**\EffetB\BeezupApi\Model\ChannelColumn[]**](../Model/ChannelColumn.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelInfo**
> \EffetB\BeezupApi\Model\ChannelInfo getChannelInfo($channel_id)

Get channel information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\ChannelsChannelsGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "\"2dc136a7-0d3d-4cc9-a825-a28a42c53e28\""; // string | The channel identifier

try {
    $result = $apiInstance->getChannelInfo($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsChannelsGlobalApi->getChannelInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |

### Return type

[**\EffetB\BeezupApi\Model\ChannelInfo**](../Model/ChannelInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

