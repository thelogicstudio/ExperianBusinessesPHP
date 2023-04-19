# ReverseAddresses

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence_number** | **float** | Reverse address matches are ordered by BINs that were updated most recently (binDateLastReported) | [optional] 
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional] 
**business_name** | **string** | Business name | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult**](AddressResult.md) |  | [optional] 
**bin_establish_date** | **string** | Date the BIN was established by Experian. Format &#x3D; YYYY-MM-DD | [optional] 
**bin_activity_code** | **string** | TBD | [optional] 
**bin_date_last_reported** | **string** | Date the BIN trade file was last updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


