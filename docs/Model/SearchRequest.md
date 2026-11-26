# # SearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Business name (required) |
**city** | **string** | Business city |
**state** | **string** | Business state code (e.g. CA) |
**subcode** | **string** | Your Experian account subcode for billing purposes |
**street** | **string** | Current street address of the business, include suite number if applicable | [optional]
**zip** | **string** | 5-digit zip code | [optional]
**phone** | **string** | 10-digit phone number | [optional]
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional]
**geo** | **bool** | If true, businessGeocode data will be returned. If geo is omitted or false, the response will not include geo data | [optional]
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
