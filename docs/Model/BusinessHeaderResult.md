# BusinessHeaderResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional] 
**business_name** | **string** | Name of the business, headquarters, subsidiary, or owner/partner name based on the Business Association type | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult**](AddressResult.md) |  | [optional] 
**phone** | **string** | 10-digit business phone number | [optional] 
**tax_id** | **string** | 9-digit federal tax ID or Employer Identification Number | [optional] 
**website_url** | **string** | Web address of the business | [optional] 
**legal_business_name** | **string** | Verified legal name of the business | [optional] 
**dba_names** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\DBAName[]**](DBAName.md) | Doing-business-as (DBA) names for the business | [optional] 
**customer_dispute_indicator** | **bool** | If true the business has disputed information in their profile | [optional] 
**foreign_country** | **bool** | Foreign Country | [optional] 
**corporate_linkage_indicator** | **bool** | Corporate Linkage Indicator | [optional] 
**matching_branch_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultMatchingBranchAddress**](BusinessHeaderResultMatchingBranchAddress.md) |  | [optional] 
**branch_location** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultBranchLocation**](BusinessHeaderResultBranchLocation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


