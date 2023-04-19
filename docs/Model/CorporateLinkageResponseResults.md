# CorporateLinkageResponseResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**corporate_linkage_partial** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]**](CorporateLinkagePartial.md) | When linkage is present, corporateLinkagePartial will return the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true | [optional] 
**corporate_linkage_full** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageFull[]**](CorporateLinkageFull.md) | When linkage is present, corporateLinkageFull will return the full family tree, limited to 300 records. When there are more than 300 records, branches will not be returned (this occurs less than 1% of the time) | [optional] 
**corporate_linkage_indicator** | **bool** | If true indicates that corporate linkage is available for the business, if false indicates that corporate linkage is not available | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


