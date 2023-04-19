# CorporateLinkageFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**corporate_linkage_type** | **string** | \&quot;Ultimate Parent\&quot;, \&quot;Headquarters/Parent\&quot;, \&quot;Subsidiary\&quot;, or \&quot;Branch\&quot;. The Ultimate Parent is the topmost responsible member of the family tree. Parent refers to a business with a subsidiary; the immediate parent is the parent company for the business that is the subject of your request. Subsidiary listings are those which the business in your request has at least a 50% ownership stake. Branch refers to additional locations or alternate addresses for the business in your request. | [optional] 
**bin** | **string** | 9-digit Business Identification Number (BIN). If this field is blank, this business is a non-US business and only the Name, City, and State may be available | [optional] 
**business_name** | **string** | Name of the business | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessAddress**](LinkageBusinessAddress.md) |  | [optional] 
**ultimate_bin** | **string** | 9-digit Business Identification Number (BIN) for the Ultimate Parent of the business | [optional] 
**parent_bin** | **string** | 9-digit Business Identification Number (BIN) for the immediate Parent of the business | [optional] 
**ultimate_parent_indicator** | **bool** | If true this business is the Ultimate Parent | [optional] 
**parent_indicator** | **bool** | If true this business is the Parent of another business | [optional] 
**subsidiary_indicator** | **bool** | If true this business is a subsidiary of another business | [optional] 
**linkage_level** | **int** | Indicates how many parent companies are above the business in the family tree. For example, an Ultimate Parent will return linkageLevel &#x3D; 0. An Ultimate Parent&#39;s immediate subsidiaries will return linkageLevel &#x3D; 1 | [optional] 
**branch_indicator** | **bool** | If true this indicates that branches were returned in the family tree. If false branches were not returned since the number of records in the full family tree exceeded 300. Only returned for an Ultimate Parent record, when linkageLevel &#x3D; 0 | [optional] 
**activity_indicator** | **bool** | If false the business may be inactive. To determine active status, Experian looks at bankruptcies, corporate registrations, trades, collections, and recent credit inquiry activity | [optional] 
**commercial_risk_class** | **string** | Commercial score risk class default values: \&quot;High Risk\&quot;, \&quot;Medium to High Risk\&quot;, \&quot;Medium Risk\&quot;, \&quot;Low to Medium Risk\&quot;, \&quot;Low Risk\&quot;, \&quot;Recent Bankruptcy on file\&quot;, \&quot;Insufficient data to score\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


