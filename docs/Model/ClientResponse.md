# # ClientResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | The client ID you received when you first created the application | [readonly]
**client_secret** | **string[]** | The client secret(s). It is an array datatype to allow for rotation of secrets without downtime for your customers |
**redirect_uris** | **string[]** | Indicates the URI to return the user to after authorization is complete, which is the endpoint on your server to receive the authorization_code.  Must be identical to the redirect URI provided in the original link.  Please email me after signup and I will set both your client secret and redirect_uri (required) when you reach out. |
**name** | **string** | Name of your app that shows up in the Affix Connect application |
**webhook_uri** | **string** | If enabled, webhooks will be sent to this endpoint | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
