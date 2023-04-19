# SearchResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional] 
**reliability_code** | **float** | Experian Match Reliability Code. 90.75-100.40 high confidence match; 79.00-90.74 medium confidence match; 75.00 - 78.99 low confidence match | [optional] 
**business_name** | **string** | Name of the business, headquarters, subsidiary, or owner/partner name based on the Business Association type | [optional] 
**phone** | **string** | 10-digit business phone number | [optional] 
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\Address**](Address.md) |  | [optional] 
**number_of_tradelines** | **float** | Total number of accounts reported by contributors, including trade payments, collections, and public record filings | [optional] 
**financial_statement_indicator** | **bool** | Indicates presence of financial statements | [optional] 
**key_facts_indicator** | **bool** | Indicates presence of business firmographic information | [optional] 
**inquiry_indicator** | **bool** | Indicates presence of recent credit inquiries on the business | [optional] 
**bank_data_indicator** | **bool** | Indicates presence of commercial bank, leasing data, or insurance bonding data | [optional] 
**government_data_indicator** | **bool** | Indicates presence of government contract and/or debarred data | [optional] 
**executive_summary_indicator** | **bool** | Indicates presence of an executive summary on the business | [optional] 
**ucc_indicator** | **bool** | Indicates presence of UCC Filings on the business | [optional] 
**matching_name_and_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MatchingNameAndAddress**](MatchingNameAndAddress.md) |  | [optional] 
**business_geocode** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\GeoCode**](GeoCode.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


