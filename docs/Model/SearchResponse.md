# SearchResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | Experian auto-generated ID for your request | [optional] 
**response_message** | **string** | A message describing the response and providing suggestions for search improvement. | [optional] 
**comments** | **string** | A free form reference field to send a comment along with your request; the comment will be returned with your response. Useful for ID tracking. | [optional] 
**success** | **bool** | Response success (e.g. false) | [optional] 
**results** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResult[]**](SearchResult.md) | An array(list) of businesses that match the search request | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


