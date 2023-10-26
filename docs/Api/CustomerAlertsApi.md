# EffetB\BeezupApi\CustomerAlertsApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStoreAlerts**](CustomerAlertsApi.md#getStoreAlerts) | **GET** /user/customer/stores/{storeId}/alerts | Get store&#39;s alerts
[**saveStoreAlerts**](CustomerAlertsApi.md#saveStoreAlerts) | **POST** /user/customer/stores/{storeId}/alerts | Save store alerts


# **getStoreAlerts**
> \EffetB\BeezupApi\Model\StoreAlerts getStoreAlerts($store_id, $if_none_match)

Get store's alerts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CustomerAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getStoreAlerts($store_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAlertsApi->getStoreAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\EffetB\BeezupApi\Model\StoreAlerts**](../Model/StoreAlerts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveStoreAlerts**
> saveStoreAlerts($store_id, $request)

Save store alerts

You just have to send the alert you want to update, does not need all alerts. (PARTIAL UPDATE ACCEPTED)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CustomerAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$request = new \EffetB\BeezupApi\Model\SaveStoreAlertsRequest(); // \EffetB\BeezupApi\Model\SaveStoreAlertsRequest | 

try {
    $apiInstance->saveStoreAlerts($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAlertsApi->saveStoreAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\EffetB\BeezupApi\Model\SaveStoreAlertsRequest**](../Model/SaveStoreAlertsRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

