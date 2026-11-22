# # LinkageLocationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional]
**business_name** | **string** | Name of the business, headquarters, subsidiary, or owner/partner name based on the Business Association type | [optional]
**address_type** | **string** | US Address, Canadian Address, Japan Address, Standard Foreign Address (No Province) | [optional]
**us_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetailsUsAddress**](LinkageLocationDetailsUsAddress.md) |  | [optional]
**canada_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetailsCanadaAddress**](LinkageLocationDetailsCanadaAddress.md) |  | [optional]
**japan_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetailsJapanAddress**](LinkageLocationDetailsJapanAddress.md) |  | [optional]
**foreign_address1** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetailsForeignAddress1**](LinkageLocationDetailsForeignAddress1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
