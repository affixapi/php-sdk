# # TimeOffEntryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Affix-assigned id of the time off entry |
**remote_id** | **string** | the remote system-assigned id of the time off entry |
**employee_id** | **string** | the Affix-assigned id of the individual |
**employee_remote_id** | **string** | the remote system-assigned id of the individual |
**start_date** | [**\DateTime**](\DateTime.md) |  |
**end_date** | [**\DateTime**](\DateTime.md) |  |
**amount** | **float** |  |
**unit** | **string** |  |
**status** | **string** |  |
**employee_note** | **string** |  |
**policy_id** | **string** | The Affix-assigned id of the policy |
**policy_remote_id** | **string** | The remote system-assigned id of the policy |
**policy_name** | **string** | The name of the policy, as assigned by the remote system |
**policy_type** | [**\OpenAPI\Client\Model\PolicyTypeResponse**](PolicyTypeResponse.md) |  |
**remote_created_at** | [**\DateTime**](\DateTime.md) |  |
**remote_modified_at** | [**\DateTime**](\DateTime.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
