# CompanyOwnersAndPrincipalsResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_reported** | **string** | Date the company owner was reported to Experian. Format &#x3D; \&quot;YYYY-MM-DD\&quot; | [optional] 
**current_owner_indicator** | **bool** | If true indicates the company is a current owner of the business | [optional] 
**business_name** | **string** | Business name | [optional] 
**tax_id** | **string** | Tax ID of the business | [optional] 
**tax_id_type** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType**](TaxIdType.md) | Type of Tax ID, whether Federal or State | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult**](AddressResult.md) |  | [optional] 
**phone** | **string** | Phone number | [optional] 
**percent_of_financial_obligation** | **float** | Returns the owners financial obligation, or percentage stake in the business. Null if not available | [optional] 
**name_address_change_indicator** | **bool** | If true indicates that there was an address or name change | [optional] 
**owner_is_guarantor_indicator** | **bool** | If true indicates that the owner is also a guarantor of the business | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


