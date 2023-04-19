# CorporateLinkagePartial

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**corporate_linkage_type** | **string** | \&quot;Ultimate Parent\&quot;, \&quot;Headquarters/Parent\&quot;, \&quot;Subsidiary\&quot;, or \&quot;Branch\&quot;. The Ultimate Parent is the topmost responsible member of the family tree. Parent refers to a business with a subsidiary; the immediate parent is the parent company for the business that is the subject of your request. Subsidiary listings are those which the business in your request has at least a 50% ownership stake. Branch refers to additional locations or alternate addresses for the business in your request. | [optional] 
**bin** | **string** | 9-digit Business Identification Number (BIN). If this field is blank, this business is a non-US business and only the Name, City, and State may be available | [optional] 
**business_name** | **string** | Name of the business | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessAddress**](LinkageBusinessAddress.md) |  | [optional] 
**matching_business_indicator** | **bool** | If true the linkage business matches the business in your request | [optional] 
**return_limit_exceeded** | **bool** | If true additional records are available to request using corporateLinkageFull | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


