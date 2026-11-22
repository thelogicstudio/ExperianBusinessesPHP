# # EvSearchResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional]
**reliability_code** | **float** | Experian Match Reliability Code. 90.75-100.40 high confidence match; 79.00-90.74 medium confidence match; 75.00 - 78.99 low confidence match | [optional]
**business_name** | **string** | Name of the business, headquarters, subsidiary, or owner/partner name based on the Business Association type | [optional]
**legal_business_name** | **string** | Verified legal name of the business | [optional]
**address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EVAddress**](EVAddress.md) |  | [optional]
**matching_name_and_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvSearchResultMatchingNameAndAddress**](EvSearchResultMatchingNameAndAddress.md) |  | [optional]
**phone** | **string** | 10-digit business phone number | [optional]
**tax_id** | **string** | Federal Employer Identification Number (FEIN) of the business | [optional]
**website_url** | **string** | Web address of the business | [optional]
**business_type** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvSearchResultBusinessType**](EvSearchResultBusinessType.md) |  | [optional]
**file_establish_date** | **string** | The date the business was added to Experian&#39;s database.  YYYY-MM-DD format | [optional]
**fiscal_year_end_date** | **string** | Fiscal Year End Date.  YYYY-MM-DD  format | [optional]
**activity_indicator** | **bool** | To determine active status, Experian looks at bankruptcies, corporate registrations, trades, collections, and recent credit inquiry activity.  The activity indicator will return True (Active) when there is activity seen from the business in the last 9 months.  If no activity is seen in the last 9 months the activity indicator will be False (Inactive). | [optional]
**corporate_linkage_indicator** | **bool** | If true indicates corporate family tree is available for the business | [optional]
**dba_names** | **string[]** | Doing-business-as (DBA) names for the business | [optional]
**corporate_registration** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvSearchResultCorporateRegistration**](EvSearchResultCorporateRegistration.md) |  | [optional]
**sic_codes** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]**](SICCode.md) | Array of objects representing SIC codes for the business each with a code and description | [optional]
**naics_codes** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]**](NAICSCode.md) | Array of objects representing NAICS codes for the business each with a code and description | [optional]
**global_ultimate_parent** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvSearchResultGlobalUltimateParent**](EvSearchResultGlobalUltimateParent.md) |  | [optional]
**domestic_ultimate_parent** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvSearchResultDomesticUltimateParent**](EvSearchResultDomesticUltimateParent.md) |  | [optional]
**immediate_parent** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvSearchResultImmediateParent**](EvSearchResultImmediateParent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
