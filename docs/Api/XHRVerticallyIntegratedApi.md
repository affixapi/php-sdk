# OpenAPI\Client\XHRVerticallyIntegratedApi

All URIs are relative to https://api.affixapi.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**xhrCompanies20230301()**](XHRVerticallyIntegratedApi.md#xhrCompanies20230301) | **GET** /2023-03-01/xhr/company | Company
[**xhrCreateEmployee20230301()**](XHRVerticallyIntegratedApi.md#xhrCreateEmployee20230301) | **POST** /2023-03-01/xhr/employee | Create employee
[**xhrEmployees20230301()**](XHRVerticallyIntegratedApi.md#xhrEmployees20230301) | **GET** /2023-03-01/xhr/employees | Employees
[**xhrGroups20230301()**](XHRVerticallyIntegratedApi.md#xhrGroups20230301) | **GET** /2023-03-01/xhr/groups | Groups
[**xhrIdentity20230301()**](XHRVerticallyIntegratedApi.md#xhrIdentity20230301) | **GET** /2023-03-01/xhr/identity | Identity
[**xhrPayruns20230301()**](XHRVerticallyIntegratedApi.md#xhrPayruns20230301) | **GET** /2023-03-01/xhr/payruns | Payruns
[**xhrPayslips20230301()**](XHRVerticallyIntegratedApi.md#xhrPayslips20230301) | **GET** /2023-03-01/xhr/payruns/{payrun_id} | Payslips
[**xhrTimeOffBalances20230301()**](XHRVerticallyIntegratedApi.md#xhrTimeOffBalances20230301) | **GET** /2023-03-01/xhr/time-off-balances | Time off balances
[**xhrTimeOffEntries20230301()**](XHRVerticallyIntegratedApi.md#xhrTimeOffEntries20230301) | **GET** /2023-03-01/xhr/time-off-entries | Time off entries
[**xhrTimesheets20230301()**](XHRVerticallyIntegratedApi.md#xhrTimesheets20230301) | **GET** /2023-03-01/xhr/timesheets | Timesheets
[**xhrWorkLocations20230301()**](XHRVerticallyIntegratedApi.md#xhrWorkLocations20230301) | **GET** /2023-03-01/xhr/work-locations | Work locations


## `xhrCompanies20230301()`

```php
xhrCompanies20230301(): \OpenAPI\Client\Model\CompanyResponse[]
```

Company

Retrieve company information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrCompanies20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrCompanies20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CompanyResponse[]**](../Model/CompanyResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrCreateEmployee20230301()`

```php
xhrCreateEmployee20230301($create_employee_request): \OpenAPI\Client\Model\EmployeeResponse
```

Create employee

Creates a new Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_employee_request = new \OpenAPI\Client\Model\CreateEmployeeRequest(); // \OpenAPI\Client\Model\CreateEmployeeRequest

try {
    $result = $apiInstance->xhrCreateEmployee20230301($create_employee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrCreateEmployee20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_employee_request** | [**\OpenAPI\Client\Model\CreateEmployeeRequest**](../Model/CreateEmployeeRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrEmployees20230301()`

```php
xhrEmployees20230301(): \OpenAPI\Client\Model\EmployeeResponse[]
```

Employees

List the individuals (employees, contractors, accountants, and others) listed in the HRIS/Payroll software

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrEmployees20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrEmployees20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EmployeeResponse[]**](../Model/EmployeeResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrGroups20230301()`

```php
xhrGroups20230301(): \OpenAPI\Client\Model\GroupResponse[]
```

Groups

The Group object is used to represent any subset of employees, such as PayGroup, Team, or Department. Employees can be in multiple Groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrGroups20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrGroups20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GroupResponse[]**](../Model/GroupResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrIdentity20230301()`

```php
xhrIdentity20230301(): \OpenAPI\Client\Model\IdentityResponse
```

Identity

List information of the user for the respective account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrIdentity20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrIdentity20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrPayruns20230301()`

```php
xhrPayruns20230301($start_date, $end_date): \OpenAPI\Client\Model\PayrunResponse[]
```

Payruns

List all the pay runs that occurred during the respective period.  Supported integrations:   - sageone   - simplepay.ie   - brightpay connect

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the search period
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the search period

try {
    $result = $apiInstance->xhrPayruns20230301($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrPayruns20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| The start date of the search period |
 **end_date** | **\DateTime**| The end date of the search period |

### Return type

[**\OpenAPI\Client\Model\PayrunResponse[]**](../Model/PayrunResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrPayslips20230301()`

```php
xhrPayslips20230301($payrun_id): \OpenAPI\Client\Model\PayslipResponse[]
```

Payslips

Retrieves payslips from a specific payrun.  Supported integrations:   - sageone   - simplepay.ie   - brightpay connect

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payrun_id = 'payrun_id_example'; // string | The id of the payrun.

try {
    $result = $apiInstance->xhrPayslips20230301($payrun_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrPayslips20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payrun_id** | **string**| The id of the payrun. |

### Return type

[**\OpenAPI\Client\Model\PayslipResponse[]**](../Model/PayslipResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrTimeOffBalances20230301()`

```php
xhrTimeOffBalances20230301(): \OpenAPI\Client\Model\TimeOffBalanceResponse[]
```

Time off balances

Retrieve all time off balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrTimeOffBalances20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrTimeOffBalances20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeOffBalanceResponse[]**](../Model/TimeOffBalanceResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrTimeOffEntries20230301()`

```php
xhrTimeOffEntries20230301(): \OpenAPI\Client\Model\TimeOffEntryResponse[]
```

Time off entries

Retrieve time off / absence entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrTimeOffEntries20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrTimeOffEntries20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeOffEntryResponse[]**](../Model/TimeOffEntryResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrTimesheets20230301()`

```php
xhrTimesheets20230301(): \OpenAPI\Client\Model\TimesheetResponse[]
```

Timesheets

Retrieve Timesheets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrTimesheets20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrTimesheets20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimesheetResponse[]**](../Model/TimesheetResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xhrWorkLocations20230301()`

```php
xhrWorkLocations20230301(): \OpenAPI\Client\Model\LocationResponse[]
```

Work locations

The Location object is used to represent an address that can be associated with an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\XHRVerticallyIntegratedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xhrWorkLocations20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XHRVerticallyIntegratedApi->xhrWorkLocations20230301: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LocationResponse[]**](../Model/LocationResponse.md)

### Authorization

[access-token](../../README.md#access-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
