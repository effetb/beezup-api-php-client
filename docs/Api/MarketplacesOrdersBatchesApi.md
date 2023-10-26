# EffetB\BeezupApi\MarketplacesOrdersBatchesApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrderList**](MarketplacesOrdersBatchesApi.md#changeOrderList) | **POST** /user/marketplaces/orders/batches/changeOrders/{changeOrderType} | Send a batch of operations to change your marketplace Order information (accept, ship, etc.)
[**clearMerchantOrderInfoList**](MarketplacesOrdersBatchesApi.md#clearMerchantOrderInfoList) | **POST** /user/marketplaces/orders/batches/clearMerchantOrderInfos | Send a batch of operations to clear an Order&#39;s merchant information (max 100 items per call)
[**setMerchantOrderInfoList**](MarketplacesOrdersBatchesApi.md#setMerchantOrderInfoList) | **POST** /user/marketplaces/orders/batches/setMerchantOrderInfos | Send a batch of operations to set an Order&#39;s merchant information  (max 100 items per call)


# **changeOrderList**
> \EffetB\BeezupApi\Model\BatchOrderOperationResponse changeOrderList($change_order_type, $user_name, $request, $test_mode)

Send a batch of operations to change your marketplace Order information (accept, ship, etc.)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \EffetB\BeezupApi\Model\ChangeOrderListRequest(); // \EffetB\BeezupApi\Model\ChangeOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->changeOrderList($change_order_type, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersBatchesApi->changeOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_order_type** | **string**| The Order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\EffetB\BeezupApi\Model\ChangeOrderListRequest**](../Model/ChangeOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\EffetB\BeezupApi\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfoList**
> \EffetB\BeezupApi\Model\BatchOrderOperationResponse clearMerchantOrderInfoList($request)

Send a batch of operations to clear an Order's merchant information (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \EffetB\BeezupApi\Model\ClearMerchantOrderInfoListRequest(); // \EffetB\BeezupApi\Model\ClearMerchantOrderInfoListRequest | 

try {
    $result = $apiInstance->clearMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersBatchesApi->clearMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\EffetB\BeezupApi\Model\ClearMerchantOrderInfoListRequest**](../Model/ClearMerchantOrderInfoListRequest.md)|  |

### Return type

[**\EffetB\BeezupApi\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfoList**
> \EffetB\BeezupApi\Model\BatchOrderOperationResponse setMerchantOrderInfoList($request)

Send a batch of operations to set an Order's merchant information  (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \EffetB\BeezupApi\Model\SetMerchantOrderInfoListRequest(); // \EffetB\BeezupApi\Model\SetMerchantOrderInfoListRequest | 

try {
    $result = $apiInstance->setMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersBatchesApi->setMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\EffetB\BeezupApi\Model\SetMerchantOrderInfoListRequest**](../Model/SetMerchantOrderInfoListRequest.md)|  |

### Return type

[**\EffetB\BeezupApi\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

