# EffetB\BeezupApi\MarketplacesOrdersOrderApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrder**](MarketplacesOrdersOrderApi.md#changeOrder) | **POST** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType} | Change your marketplace Order Information (accept, ship, etc.)
[**clearMerchantOrderInfo**](MarketplacesOrdersOrderApi.md#clearMerchantOrderInfo) | **POST** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo | Clear an Order&#39;s merchant information
[**getOrder**](MarketplacesOrdersOrderApi.md#getOrder) | **GET** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get full Order and Order Item(s) properties
[**getOrderHistory**](MarketplacesOrdersOrderApi.md#getOrderHistory) | **GET** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history | Get an Order&#39;s harvest and change history
[**harvestOrder**](MarketplacesOrdersOrderApi.md#harvestOrder) | **POST** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest | Send harvest request for a single Order
[**headOrder**](MarketplacesOrdersOrderApi.md#headOrder) | **HEAD** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get the meta information about the order (ETag, Last-Modified)
[**setMerchantOrderInfo**](MarketplacesOrdersOrderApi.md#setMerchantOrderInfo) | **POST** /user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo | Set an Order&#39;s merchant information


# **changeOrder**
> changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $if_match, $test_mode, $request)

Change your marketplace Order Information (accept, ship, etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.
$request = new \EffetB\BeezupApi\Model\ChangeOrderRequest(); // \EffetB\BeezupApi\Model\ChangeOrderRequest | 

try {
    $apiInstance->changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $if_match, $test_mode, $request);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->changeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |
 **change_order_type** | **string**| The Order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]
 **request** | [**\EffetB\BeezupApi\Model\ChangeOrderRequest**](../Model/ChangeOrderRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfo**
> clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id)

Clear an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier

try {
    $apiInstance->clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->clearMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \EffetB\BeezupApi\Model\Order getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match)

Get full Order and Order Item(s) properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\EffetB\BeezupApi\Model\Order**](../Model/Order.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderHistory**
> \EffetB\BeezupApi\Model\OrderHistory getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match)

Get an Order's harvest and change history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->getOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\EffetB\BeezupApi\Model\OrderHistory**](../Model/OrderHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **harvestOrder**
> harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id)

Send harvest request for a single Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier

try {
    $apiInstance->harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->harvestOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **headOrder**
> headOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match)

Get the meta information about the order (ETag, Last-Modified)

The purpose of this operation is to reduce the bandwith usage by getting just the meta information about the order (ETag, Last-Modified) with the body. This could be useful

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $apiInstance->headOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->headOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfo**
> setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request)

Set an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\MarketplacesOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_technical_code = "\"Amazon\""; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "\"00000000000000000000000000000000000000000000000\""; // string | The BeezUP Order identifier
$request = new \EffetB\BeezupApi\Model\SetMerchantOrderInfoRequest(); // \EffetB\BeezupApi\Model\SetMerchantOrderInfoRequest | 

try {
    $apiInstance->setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesOrdersOrderApi->setMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | [**string**](../Model/.md)| The BeezUP Order identifier |
 **request** | [**\EffetB\BeezupApi\Model\SetMerchantOrderInfoRequest**](../Model/SetMerchantOrderInfoRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

