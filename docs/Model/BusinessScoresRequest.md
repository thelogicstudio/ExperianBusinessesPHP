# # BusinessScoresRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) |
**subcode** | **string** | Your Experian account subcode for billing purposes |
**model_code** | **string** | Optional field used only when your subcode is configured for a custom or legacy risk model | [optional]
**fsr_score** | **bool** | If true, receive the commercial score that has been configured for your subcode | [optional]
**commercial_score** | **bool** | If true, receive the Financial Stability Risk score | [optional]
**collection_score** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequestCollectionScore**](ScoresSearchRequestCollectionScore.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
