# # EvSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subcode** | **string** | Your Experian account subcode for billing purposes | [default to '0517614']
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional] [default to 'testing']
**bin** | **string** | Experian Business Identification Number | [optional]
**current_company_name** | **string** | Business name (required) | [default to 'Experian']
**current_addr** | **string** | Current street address of the business, include suite number if applicable | [optional] [default to '475 ANTON BLVD']
**current_city** | **string** | Business city | [optional] [default to 'Costa Mesa']
**current_state** | **string** | Business state code (e.g. CA) | [optional] [default to 'CA']
**current_zip5** | **string** | 5-digit zip code | [optional] [default to '92626']
**current_zip_extension** | **string** | 4-digit zip code extension | [optional] [default to '1111']
**current_phone** | **string** | 10-digit phone number | [optional] [default to '9495673800']
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional] [default to '176970333']
**alternate_company_name** | **string** | Business name (required) | [optional] [default to 'Experian']
**alternate_addr** | **string** | Current street address of the business, include suite number if applicable | [optional] [default to '475 ANTON BLVD']
**alternate_city** | **string** | Business city | [optional] [default to 'Costa Mesa']
**alternate_state** | **string** | Business state code (e.g. CA) | [optional] [default to 'CA']
**alternate_zip5** | **string** | 5-digit zip code | [optional] [default to '92626']
**alternate_zip_extension** | **string** | 4-digit zip code extension | [optional] [default to '1111']
**alternate_phone** | **string** | 10-digit phone number | [optional] [default to '9495673800']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
