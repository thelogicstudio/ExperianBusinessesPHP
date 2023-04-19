# BusinessScoresRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) | [default to '700000001']
**subcode** | **string** | Your Experian account subcode for billing purposes | [default to '0586548']
**model_code** | **string** | Optional field used only when your subcode is configured for a custom or legacy risk model | [optional] [default to '000254']
**fsr_score** | **bool** | If true, receive the commercial score that has been configured for your subcode | [optional] [default to true]
**commercial_score** | **bool** | If true, receive the Financial Stability Risk score | [optional] [default to true]
**collection_score** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequestCollectionScore**](ScoresSearchRequestCollectionScore.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


