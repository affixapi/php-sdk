# OpenAPI\Client\DeveloperApi

All URIs are relative to https://api.affixapi.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**developerCompanies20230301()**](DeveloperApi.md#developerCompanies20230301) | **GET** /2023-03-01/developer/company | Company
[**developerCreateEmployee20230301()**](DeveloperApi.md#developerCreateEmployee20230301) | **POST** /2023-03-01/developer/employee | Create employee
[**developerEmployees20230301()**](DeveloperApi.md#developerEmployees20230301) | **GET** /2023-03-01/developer/employees | Employees
[**developerGroups20230301()**](DeveloperApi.md#developerGroups20230301) | **GET** /2023-03-01/developer/groups | Groups
[**developerIdentity20230301()**](DeveloperApi.md#developerIdentity20230301) | **GET** /2023-03-01/developer/identity | Identity
[**developerPayruns20230301()**](DeveloperApi.md#developerPayruns20230301) | **GET** /2023-03-01/developer/payruns | Payruns
[**developerPayslips20230301()**](DeveloperApi.md#developerPayslips20230301) | **GET** /2023-03-01/developer/payruns/{payrun_id} | Payslips
[**developerTimeOffBalances20230301()**](DeveloperApi.md#developerTimeOffBalances20230301) | **GET** /2023-03-01/developer/time-off-balances | Time off balances
[**developerTimeOffEntries20230301()**](DeveloperApi.md#developerTimeOffEntries20230301) | **GET** /2023-03-01/developer/time-off-entries | Time off entries
[**developerTimesheets20230301()**](DeveloperApi.md#developerTimesheets20230301) | **GET** /2023-03-01/developer/timesheets | Timesheets
[**developerWorkLocations20230301()**](DeveloperApi.md#developerWorkLocations20230301) | **GET** /2023-03-01/developer/work-locations | Work locations


## `developerCompanies20230301()`

```php
developerCompanies20230301(): \OpenAPI\Client\Model\CompanyResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerCompanies20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerCompanies20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerCreateEmployee20230301()`

```php
developerCreateEmployee20230301($create_employee_request): \OpenAPI\Client\Model\EmployeeResponse
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_employee_request = new \OpenAPI\Client\Model\CreateEmployeeRequest(); // \OpenAPI\Client\Model\CreateEmployeeRequest

try {
    $result = $apiInstance->developerCreateEmployee20230301($create_employee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerCreateEmployee20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerEmployees20230301()`

```php
developerEmployees20230301(): \OpenAPI\Client\Model\EmployeeResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerEmployees20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerEmployees20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerGroups20230301()`

```php
developerGroups20230301(): \OpenAPI\Client\Model\GroupResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerGroups20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerGroups20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerIdentity20230301()`

```php
developerIdentity20230301(): \OpenAPI\Client\Model\IdentityResponse
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerIdentity20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerIdentity20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerPayruns20230301()`

```php
developerPayruns20230301($start_date, $end_date): \OpenAPI\Client\Model\PayrunResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the search period
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the search period

try {
    $result = $apiInstance->developerPayruns20230301($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerPayruns20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerPayslips20230301()`

```php
developerPayslips20230301($payrun_id): \OpenAPI\Client\Model\PayslipResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payrun_id = 'payrun_id_example'; // string | The id of the payrun.

try {
    $result = $apiInstance->developerPayslips20230301($payrun_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerPayslips20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerTimeOffBalances20230301()`

```php
developerTimeOffBalances20230301(): \OpenAPI\Client\Model\TimeOffBalanceResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerTimeOffBalances20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerTimeOffBalances20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerTimeOffEntries20230301()`

```php
developerTimeOffEntries20230301(): \OpenAPI\Client\Model\TimeOffEntryResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerTimeOffEntries20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerTimeOffEntries20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerTimesheets20230301()`

```php
developerTimesheets20230301(): \OpenAPI\Client\Model\TimesheetResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerTimesheets20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerTimesheets20230301: ', $e->getMessage(), PHP_EOL;
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

## `developerWorkLocations20230301()`

```php
developerWorkLocations20230301(): \OpenAPI\Client\Model\LocationResponse[]
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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->developerWorkLocations20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->developerWorkLocations20230301: ', $e->getMessage(), PHP_EOL;
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
