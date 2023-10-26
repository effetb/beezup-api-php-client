# EffetB\BeezupApi\PublicSecuritySecurityApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](PublicSecuritySecurityApi.md#login) | **POST** /public/security/login | Login
[**lostPassword**](PublicSecuritySecurityApi.md#lostPassword) | **POST** /public/security/lostpassword | Lost password
[**register**](PublicSecuritySecurityApi.md#register) | **POST** /public/security/register | User Registration


# **login**
> \EffetB\BeezupApi\Model\ApiCredentials login($request)

Login

User Login - The login will give your tokens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EffetB\BeezupApi\Api\PublicSecuritySecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \EffetB\BeezupApi\Model\LoginRequest(); // \EffetB\BeezupApi\Model\LoginRequest | 

try {
    $result = $apiInstance->login($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicSecuritySecurityApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\EffetB\BeezupApi\Model\LoginRequest**](../Model/LoginRequest.md)|  |

### Return type

[**\EffetB\BeezupApi\Model\ApiCredentials**](../Model/ApiCredentials.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lostPassword**
> lostPassword($email)

Lost password

Lost password - Your password will be regenerated and sent to your email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EffetB\BeezupApi\Api\PublicSecuritySecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = new \EffetB\BeezupApi\Model\BeezUPCommonEmail(); // \EffetB\BeezupApi\Model\BeezUPCommonEmail | Your email

try {
    $apiInstance->lostPassword($email);
} catch (Exception $e) {
    echo 'Exception when calling PublicSecuritySecurityApi->lostPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**\EffetB\BeezupApi\Model\BeezUPCommonEmail**](../Model/BeezUPCommonEmail.md)| Your email |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> register($request)

User Registration

User Registration - Create a new user on BeezUP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EffetB\BeezupApi\Api\PublicSecuritySecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \EffetB\BeezupApi\Model\RegisterRequest(); // \EffetB\BeezupApi\Model\RegisterRequest | 

try {
    $apiInstance->register($request);
} catch (Exception $e) {
    echo 'Exception when calling PublicSecuritySecurityApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\EffetB\BeezupApi\Model\RegisterRequest**](../Model/RegisterRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

