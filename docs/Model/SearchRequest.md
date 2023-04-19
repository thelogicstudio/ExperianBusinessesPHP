# SearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Business name (required) | [default to 'Experian']
**city** | **string** | Business city | [default to 'Costa Mesa']
**state** | **string** | Business state code (e.g. CA) | [default to 'CA']
**subcode** | **string** | Your Experian account subcode for billing purposes | [default to '0586548']
**street** | **string** | Current street address of the business, include suite number if applicable | [optional] [default to '475 ANTON BLVD']
**zip** | **string** | 5-digit zip code | [optional] [default to '92626']
**phone** | **string** | 10-digit phone number | [optional] [default to '9495673800']
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional] [default to '176970333']
**geo** | **bool** | If true, businessGeocode data will be returned. If geo is omitted or false, the response will not include geo data | [optional] [default to true]
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional] [default to 'testing']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


