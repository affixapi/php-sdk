# # TokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The issued access_token | [readonly]
**mode** | [**\OpenAPI\Client\Model\ModeResponse**](ModeResponse.md) |  |
**provider** | [**\OpenAPI\Client\Model\ProviderResponse**](ProviderResponse.md) |  |
**scopes** | [**\OpenAPI\Client\Model\ScopesResponse[]**](ScopesResponse.md) | One or more scope values indicating which parts of the user&#39;s account you wish to access.  Note, slight deviation from the OAuth 2.1 spec in that the param is scopes (plural) is used vs scope (singular) | [readonly]
**token_type** | **string** | The token type to pass in the &#x60;Authorization&#x60; header | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
