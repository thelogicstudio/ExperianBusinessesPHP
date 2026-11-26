# # BusinessCorporateLinkageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) |
**subcode** | **string** | Your Experian account subcode for billing purposes |
**model_code** | **string** | Optional field used only when your subcode is configured for a custom or legacy risk model | [optional]
**corporate_linkage_partial** | **bool** | If true receive a partial corporate family tree. When linkage is present, corporateLinkagePartial will return the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true | [optional]
**corporate_linkage_full** | **bool** | If true receive the full corporate family tree. When linkage is present, corporateLinkageFull will return the full family tree, limited to 300 records. When there are more than 300 records, branches will not be returned (this occurs less than 1% of the time) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
