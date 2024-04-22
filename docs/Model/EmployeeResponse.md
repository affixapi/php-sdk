# # EmployeeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Affix-assigned id of the individual | [readonly]
**remote_id** | **string** | the remote system-assigned id of the individual | [readonly]
**employee_number** | **string** |  |
**first_name** | **string** | the first name of the individual |
**last_name** | **string** | the last name of the individual |
**display_full_name** | **string** |  |
**nationality** | **string** |  |
**job_title** | **string** |  |
**work_email** | **string** | the work email of the individual |
**personal_email** | **string** | the personal email of the individual |
**mobile_phone_number** | **string** | +1234567890 |
**tax_id** | **string** |  |
**gender** | **string** |  |
**ethnicity** | **string** |  |
**marital_status** | **string** | &#x60;other&#x60; option can include co-habitating, civil partnership, separated, divorced, widowed, etc |
**date_of_birth** | [**\DateTime**](\DateTime.md) |  |
**employment_status** | [**\OpenAPI\Client\Model\EmploymentStatusResponse**](EmploymentStatusResponse.md) |  |
**employment_type** | **string** |  |
**start_date** | [**\DateTime**](\DateTime.md) |  |
**remote_created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**termination_date** | [**\DateTime**](\DateTime.md) |  |
**avatar** | **string** |  |
**home_location** | [**\OpenAPI\Client\Model\AddressResponse**](AddressResponse.md) |  |
**work_location** | [**\OpenAPI\Client\Model\LocationResponse**](LocationResponse.md) |  |
**manager** | [**\OpenAPI\Client\Model\EmployeeResponseManager**](EmployeeResponseManager.md) |  |
**bank_account** | [**\OpenAPI\Client\Model\CreateEmployeeRequestBankAccount**](CreateEmployeeRequestBankAccount.md) |  |
**employments** | [**\OpenAPI\Client\Model\EmploymentResponse[]**](EmploymentResponse.md) |  |
**custom_fields** | **object** |  |
**groups** | [**\OpenAPI\Client\Model\GroupResponse[]**](GroupResponse.md) |  |
**dependents** | [**\OpenAPI\Client\Model\CreateEmployeeRequestDependents[]**](CreateEmployeeRequestDependents.md) |  |
**emergency_contacts** | [**\OpenAPI\Client\Model\CreateEmployeeRequestEmergencyContacts[]**](CreateEmployeeRequestEmergencyContacts.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
