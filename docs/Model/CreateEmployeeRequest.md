# # CreateEmployeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_number** | **string** |  | [optional]
**first_name** | **string** | the first name of the individual |
**last_name** | **string** | the last name of the individual |
**display_full_name** | **string** |  | [optional]
**nationality** | **string** |  | [optional]
**job_title** | **string** |  | [optional]
**work_email** | **string** | the work email of the individual | [optional]
**personal_email** | **string** | the personal email of the individual | [optional]
**mobile_phone_number** | **string** | +1234567890 | [optional]
**tax_id** | **string** |  | [optional]
**gender** | **string** |  | [optional]
**ethnicity** | **string** |  | [optional]
**marital_status** | **string** |  | [optional]
**date_of_birth** | [**\DateTime**](\DateTime.md) |  | [optional]
**employment_status** | **string** |  | [optional]
**employment_type** | **string** |  | [optional]
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**termination_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**avatar** | **string** |  | [optional]
**home_location** | [**\OpenAPI\Client\Model\AddressNoNonNullRequest**](AddressNoNonNullRequest.md) |  | [optional]
**work_location** | [**\OpenAPI\Client\Model\LocationNoNonNullRequest**](LocationNoNonNullRequest.md) |  | [optional]
**manager** | [**\OpenAPI\Client\Model\CreateEmployeeRequestManager**](CreateEmployeeRequestManager.md) |  | [optional]
**bank_account** | [**\OpenAPI\Client\Model\CreateEmployeeRequestBankAccount**](CreateEmployeeRequestBankAccount.md) |  | [optional]
**employments** | [**\OpenAPI\Client\Model\EmploymentNoNullEnumRequest[]**](EmploymentNoNullEnumRequest.md) |  | [optional]
**custom_fields** | **object** |  | [optional]
**groups** | [**\OpenAPI\Client\Model\GroupNoNullEnumRequest[]**](GroupNoNullEnumRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
