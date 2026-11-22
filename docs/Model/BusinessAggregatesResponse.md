# # BusinessAggregatesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | Experian auto-generated ID for your request | [optional]
**success** | **bool** | Response status | [optional]
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional]
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional]
**results** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates**](BizAggregates.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
