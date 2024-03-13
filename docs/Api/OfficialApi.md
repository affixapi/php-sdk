# OpenAPI\Client\OfficialApi

All URIs are relative to https://api.affixapi.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**officialCompanies20230301()**](OfficialApi.md#officialCompanies20230301) | **GET** /2023-03-01/official/company | Company
[**officialCreateEmployee20230301()**](OfficialApi.md#officialCreateEmployee20230301) | **POST** /2023-03-01/official/employee | Create Employee
[**officialEmployees20230301()**](OfficialApi.md#officialEmployees20230301) | **GET** /2023-03-01/official/employees | Employees
[**officialGroups20230301()**](OfficialApi.md#officialGroups20230301) | **GET** /2023-03-01/official/groups | Groups
[**officialTimeOffBalances20230301()**](OfficialApi.md#officialTimeOffBalances20230301) | **GET** /2023-03-01/official/time-off-balances | Time off balances
[**officialTimeOffEntries20230301()**](OfficialApi.md#officialTimeOffEntries20230301) | **GET** /2023-03-01/official/time-off-entries | Time off entries
[**officialTimesheets20230301()**](OfficialApi.md#officialTimesheets20230301) | **GET** /2023-03-01/official/timesheets | Timesheets
[**officialWorkLocations20230301()**](OfficialApi.md#officialWorkLocations20230301) | **GET** /2023-03-01/official/work-locations | Work locations
[**officialdentity20230301()**](OfficialApi.md#officialdentity20230301) | **GET** /2023-03-01/official/identity | Identity


## `officialCompanies20230301()`

```php
officialCompanies20230301(): \OpenAPI\Client\Model\CompanyResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialCompanies20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialCompanies20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialCreateEmployee20230301()`

```php
officialCreateEmployee20230301($create_employee_request): \OpenAPI\Client\Model\EmployeeResponse
```

Create Employee

Creates a new Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_employee_request = new \OpenAPI\Client\Model\CreateEmployeeRequest(); // \OpenAPI\Client\Model\CreateEmployeeRequest

try {
    $result = $apiInstance->officialCreateEmployee20230301($create_employee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialCreateEmployee20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialEmployees20230301()`

```php
officialEmployees20230301(): \OpenAPI\Client\Model\EmployeeResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialEmployees20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialEmployees20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialGroups20230301()`

```php
officialGroups20230301(): \OpenAPI\Client\Model\GroupResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialGroups20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialGroups20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialTimeOffBalances20230301()`

```php
officialTimeOffBalances20230301(): \OpenAPI\Client\Model\TimeOffBalanceResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialTimeOffBalances20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialTimeOffBalances20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialTimeOffEntries20230301()`

```php
officialTimeOffEntries20230301(): \OpenAPI\Client\Model\TimeOffEntryResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialTimeOffEntries20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialTimeOffEntries20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialTimesheets20230301()`

```php
officialTimesheets20230301(): \OpenAPI\Client\Model\TimesheetResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialTimesheets20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialTimesheets20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialWorkLocations20230301()`

```php
officialWorkLocations20230301(): \OpenAPI\Client\Model\LocationResponse[]
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialWorkLocations20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialWorkLocations20230301: ', $e->getMessage(), PHP_EOL;
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

## `officialdentity20230301()`

```php
officialdentity20230301(): \OpenAPI\Client\Model\IdentityResponse
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


$apiInstance = new OpenAPI\Client\Api\OfficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialdentity20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficialApi->officialdentity20230301: ', $e->getMessage(), PHP_EOL;
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
