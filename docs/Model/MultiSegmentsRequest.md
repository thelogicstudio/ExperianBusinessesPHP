# MultiSegmentsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subcode** | **string** | Your Experian account subcode for billing purposes (required) | [default to '0563736']
**bin** | **string** | 9-digit Business Identification Number (BIN) | [default to '700000001']
**street** | **string** | Agent street | [optional] 
**city** | **string** | Agent city | [optional] 
**state** | **string** | Agent state | [optional] 
**zip** | **string** | Agent zip | [optional] 
**phone** | **string** | 10-digit phone number | [optional] [default to '9495673800']
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional] [default to '123456789']
**comments** | **string** | Optionally, you can send a comment along with your request;  and the comment will be returned with your response.  Useful for your internal ID tracking | [optional] [default to 'test12345']
**data_points** | **string[]** | Array containing parameters for commit orders | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


