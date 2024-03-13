# OpenAPI\Client\CoreApi

All URIs are relative to https://api.affixapi.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**providers()**](CoreApi.md#providers) | **GET** /providers | Providers


## `providers()`

```php
providers(): object[]
```

Providers

Retrieve the api modes (official, developer) and providers for the respective modes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->providers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->providers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
