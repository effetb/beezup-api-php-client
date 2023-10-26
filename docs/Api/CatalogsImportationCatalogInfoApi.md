# EffetB\BeezupApi\CatalogsImportationCatalogInfoApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importationConfigureCatalogColumn**](CatalogsImportationCatalogInfoApi.md#importationConfigureCatalogColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId} | Configure catalog column
[**importationDeleteCustomColumn**](CatalogsImportationCatalogInfoApi.md#importationDeleteCustomColumn) | **DELETE** /user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Delete Custom Column
[**importationGetCustomColumnExpression**](CatalogsImportationCatalogInfoApi.md#importationGetCustomColumnExpression) | **GET** /user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/expression | Get the encrypted custom column expression in this importation
[**importationGetCustomColumns**](CatalogsImportationCatalogInfoApi.md#importationGetCustomColumns) | **GET** /user/catalogs/{storeId}/importations/{executionId}/customColumns | Get custom columns currently place in this importation
[**importationGetDetectedCatalogColumns**](CatalogsImportationCatalogInfoApi.md#importationGetDetectedCatalogColumns) | **GET** /user/catalogs/{storeId}/importations/{executionId}/catalogColumns | Get detected catalog columns during this importation.
[**importationGetProductSample**](CatalogsImportationCatalogInfoApi.md#importationGetProductSample) | **GET** /user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex} | Get the product sample related to this importation with all columns (catalog and custom)
[**importationGetProductSampleCustomColumnValue**](CatalogsImportationCatalogInfoApi.md#importationGetProductSampleCustomColumnValue) | **GET** /user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex}/customColumns/{columnId} | Get product sample custom column value related to this importation.
[**importationIgnoreColumn**](CatalogsImportationCatalogInfoApi.md#importationIgnoreColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/ignore | Ignore Column
[**importationMapCatalogColumn**](CatalogsImportationCatalogInfoApi.md#importationMapCatalogColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/map | Map catalog column to a BeezUP column
[**importationMapCustomColumn**](CatalogsImportationCatalogInfoApi.md#importationMapCustomColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/map | Map custom column to a BeezUP column
[**importationReattendColumn**](CatalogsImportationCatalogInfoApi.md#importationReattendColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/reattend | Reattend Column
[**importationSaveCustomColumn**](CatalogsImportationCatalogInfoApi.md#importationSaveCustomColumn) | **PUT** /user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Create or replace a custom column
[**importationUnmapCatalogColumn**](CatalogsImportationCatalogInfoApi.md#importationUnmapCatalogColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/unmap | Unmap catalog column
[**importationUnmapCustomColumn**](CatalogsImportationCatalogInfoApi.md#importationUnmapCustomColumn) | **POST** /user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/unmap | Unmap custom column


# **importationConfigureCatalogColumn**
> importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request)

Configure catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \EffetB\BeezupApi\Model\ConfigureCatalogColumnCatalogRequest(); // \EffetB\BeezupApi\Model\ConfigureCatalogColumnCatalogRequest | 

try {
    $apiInstance->importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationConfigureCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\EffetB\BeezupApi\Model\ConfigureCatalogColumnCatalogRequest**](../Model/ConfigureCatalogColumnCatalogRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationDeleteCustomColumn**
> importationDeleteCustomColumn($store_id, $execution_id, $column_id)

Delete Custom Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $apiInstance->importationDeleteCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumnExpression**
> string importationGetCustomColumnExpression($store_id, $execution_id, $column_id)

Get the encrypted custom column expression in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $apiInstance->importationGetCustomColumnExpression($store_id, $execution_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumns**
> \EffetB\BeezupApi\Model\ImportationCustomColumnList importationGetCustomColumns($store_id, $execution_id)

Get custom columns currently place in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $apiInstance->importationGetCustomColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\EffetB\BeezupApi\Model\ImportationCustomColumnList**](../Model/ImportationCustomColumnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetDetectedCatalogColumns**
> \EffetB\BeezupApi\Model\DetectedCatalogColumnList importationGetDetectedCatalogColumns($store_id, $execution_id)

Get detected catalog columns during this importation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $apiInstance->importationGetDetectedCatalogColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationGetDetectedCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\EffetB\BeezupApi\Model\DetectedCatalogColumnList**](../Model/DetectedCatalogColumnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSample**
> \EffetB\BeezupApi\Model\ProductSample importationGetProductSample($store_id, $execution_id, $product_sample_index)

Get the product sample related to this importation with all columns (catalog and custom)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.

try {
    $result = $apiInstance->importationGetProductSample($store_id, $execution_id, $product_sample_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationGetProductSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |

### Return type

[**\EffetB\BeezupApi\Model\ProductSample**](../Model/ProductSample.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSampleCustomColumnValue**
> string importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id)

Get product sample custom column value related to this importation.

/!\\ Use this operation only when you just changed the custom column expression and you want to get a precise the property value. Otherwise use the operation Importation_GetProductSample which will give you all property values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $apiInstance->importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationGetProductSampleCustomColumnValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationIgnoreColumn**
> importationIgnoreColumn($store_id, $execution_id, $column_id)

Ignore Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $apiInstance->importationIgnoreColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationIgnoreColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCatalogColumn**
> importationMapCatalogColumn($store_id, $execution_id, $column_id, $request)

Map catalog column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \EffetB\BeezupApi\Model\MapBeezUPColumnRequest(); // \EffetB\BeezupApi\Model\MapBeezUPColumnRequest | 

try {
    $apiInstance->importationMapCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationMapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\EffetB\BeezupApi\Model\MapBeezUPColumnRequest**](../Model/MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCustomColumn**
> importationMapCustomColumn($store_id, $execution_id, $column_id, $request)

Map custom column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \EffetB\BeezupApi\Model\MapBeezUPColumnRequest(); // \EffetB\BeezupApi\Model\MapBeezUPColumnRequest | 

try {
    $apiInstance->importationMapCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationMapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\EffetB\BeezupApi\Model\MapBeezUPColumnRequest**](../Model/MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationReattendColumn**
> importationReattendColumn($store_id, $execution_id, $column_id)

Reattend Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $apiInstance->importationReattendColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationReattendColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationSaveCustomColumn**
> importationSaveCustomColumn($store_id, $execution_id, $column_id, $request)

Create or replace a custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \EffetB\BeezupApi\Model\ChangeCustomColumnRequest(); // \EffetB\BeezupApi\Model\ChangeCustomColumnRequest | 

try {
    $apiInstance->importationSaveCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\EffetB\BeezupApi\Model\ChangeCustomColumnRequest**](../Model/ChangeCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCatalogColumn**
> importationUnmapCatalogColumn($store_id, $execution_id, $column_id)

Unmap catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier

try {
    $apiInstance->importationUnmapCatalogColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationUnmapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCustomColumn**
> importationUnmapCustomColumn($store_id, $execution_id, $column_id)

Unmap custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EffetB\BeezupApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new EffetB\BeezupApi\Api\CatalogsImportationCatalogInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $apiInstance->importationUnmapCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsImportationCatalogInfoApi->importationUnmapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

