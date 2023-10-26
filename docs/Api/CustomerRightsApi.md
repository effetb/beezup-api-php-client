# EffetB\BeezupApi\CustomerRightsApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRights**](CustomerRightsApi.md#getRights) | **GET** /user/customer/stores/{storeId}/rights | Get store&#39;s rights


# **getRights**
> \EffetB\BeezupApi\Model\FunctionalityRightInfo[] getRights($store_id)

Get store's rights

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CustomerRightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $apiInstance->getRights($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerRightsApi->getRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\EffetB\BeezupApi\Model\FunctionalityRightInfo[]**](../Model/FunctionalityRightInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

