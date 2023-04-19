# BusinessCollectionsDetailResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_status** | **string** | Open status includes \&quot;Open Account\&quot;, \&quot;Disputed\&quot;, or \&quot;Payment Plan\&quot;. Closed status includes, but is not limited to, \&quot;Paid in Full\&quot;, \&quot;Settlement Paid in Full\&quot;, \&quot;Partial Payment, Balance Uncollected\&quot;, \&quot;Uncollected\&quot;, etc. | [optional] 
**date_placed_for_collection** | **string** | Date the account was placed for collection. ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**date_closed** | **string** | Date the account was closed. Format &#x3D; YYYY-MM-DD. Null if not available | [optional] 
**amount_placed_for_collection** | **float** | The original amount that was placed for collection | [optional] 
**amount_paid** | **float** | The amount that was paid of the total amount placed | [optional] 
**collection_agency_info** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CollectionAgencyInfoResult**](CollectionAgencyInfoResult.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


