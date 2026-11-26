# # BusinessPremierProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) |
**name** | **string** | Business name | [optional]
**street** | **string** | Current street address of the business, include suite number if applicable | [optional]
**city** | **string** | Business city | [optional]
**state** | **string** | Business state code (e.g. CA) | [optional]
**zip** | **string** | 5-digit zip code | [optional]
**phone** | **string** | 10-digit phone number | [optional]
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional]
**subcode** | **string** | Your Experian account subcode for billing purposes |
**model_code** | **string** | Experian Risk Model Code. Default is \&quot;000254\&quot; |
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional]
**business_aggregates** | **bool** | An optional boolean flag that indicates whether to deliver BizAggs with the Premier Profile | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
