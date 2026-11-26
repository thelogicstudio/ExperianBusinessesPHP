# # EvSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subcode** | **string** | Your Experian account subcode for billing purposes |
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional]
**bin** | **string** | Experian Business Identification Number | [optional]
**current_company_name** | **string** | Business name (required) |
**current_addr** | **string** | Current street address of the business, include suite number if applicable | [optional]
**current_city** | **string** | Business city | [optional]
**current_state** | **string** | Business state code (e.g. CA) | [optional]
**current_zip5** | **string** | 5-digit zip code | [optional]
**current_zip_extension** | **string** | 4-digit zip code extension | [optional]
**current_phone** | **string** | 10-digit phone number | [optional]
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional]
**alternate_company_name** | **string** | Business name (required) | [optional]
**alternate_addr** | **string** | Current street address of the business, include suite number if applicable | [optional]
**alternate_city** | **string** | Business city | [optional]
**alternate_state** | **string** | Business state code (e.g. CA) | [optional]
**alternate_zip5** | **string** | 5-digit zip code | [optional]
**alternate_zip_extension** | **string** | 4-digit zip code extension | [optional]
**alternate_phone** | **string** | 10-digit phone number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
