# IndividualOwnersAndPrincipalsResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_reported** | **string** | Date the owner was reported to Experian. Format &#x3D; \&quot;YYYY-MM-DD\&quot; | [optional] 
**current_owner_indicator** | **bool** | If true indicates the individual is a current owner of the business | [optional] 
**first_name** | **string** | First name | [optional] 
**middle_name** | **string** | Middle name | [optional] 
**last_name** | **string** | Last name | [optional] 
**generation_code** | **string** | Generation code, Sr., Jr., etc. | [optional] 
**email_address** | **string** | Email address of the individual owner, if available | [optional] 
**owner_is_guarantor_indicator** | **bool** | If true indicates that the owner is also a guarantor of the business | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult**](AddressResult.md) |  | [optional] 
**percent_of_financial_obligation** | **float** | Returns the owners financial obligation, or percentage stake in the business. Null if not available | [optional] 
**name_address_change_indicator** | **bool** | Identifies any known company owners of the business | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


