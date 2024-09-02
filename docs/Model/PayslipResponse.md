# # PayslipResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Affix-assigned id of the payslip |
**remote_id** | **string** | the remote system-assigned id of the payrun |
**employee_id** | **string** |  |
**employee_remote_id** | **string** |  |
**payrun_id** | **string** |  |
**payrun_remote_id** | **string** |  |
**payrun_type** | [**\OpenAPI\Client\Model\PayrunTypeResponse**](PayrunTypeResponse.md) |  |
**currency** | [**\OpenAPI\Client\Model\CurrencyNotNullResponse**](CurrencyNotNullResponse.md) |  |
**gross_pay** | **float** | if USD/EUR/GBP, in cent |
**net_pay** | **float** | if USD/EUR/GBP, in cent |
**start_date** | [**\DateTime**](\DateTime.md) |  |
**end_date** | [**\DateTime**](\DateTime.md) |  |
**payment_date** | [**\DateTime**](\DateTime.md) |  |
**earnings** | [**\OpenAPI\Client\Model\PayslipResponseEarnings[]**](PayslipResponseEarnings.md) |  |
**contributions** | [**\OpenAPI\Client\Model\PayslipResponseContributions[]**](PayslipResponseContributions.md) | Items paid by the employer that are not included in gross pay, such as employer-paid portion of private health insurance |
**deductions** | [**\OpenAPI\Client\Model\PayslipResponseDeductions[]**](PayslipResponseDeductions.md) |  |
**taxes** | [**\OpenAPI\Client\Model\PayslipResponseTaxes[]**](PayslipResponseTaxes.md) |  |
**reimbursements** | [**\OpenAPI\Client\Model\PayslipResponseReimbursements[]**](PayslipResponseReimbursements.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
