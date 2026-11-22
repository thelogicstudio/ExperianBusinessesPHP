# # LinkageBusinessDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin** | **string** | 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity | [optional]
**business_name** | **string** | Name of the business, headquarters, subsidiary, or owner/partner name based on the Business Association type | [optional]
**website_url** | **string** | Web address of the business | [optional]
**tax_id** | **string** | Federal Employer Identification Number (FEIN) of the business | [optional]
**file_establish_date** | **string** | The date the business was added to Experian&#39;s database. YYYY-MM-DD format | [optional]
**activity_indicator** | **bool** | To determine active status, Experian looks at bankruptcies, corporate registrations, trades,  collections, and recent credit inquiry activity.  The activity indicator will return True (Active)  when there is activity seen from the business in the last 9 months.  If no activity is seen in the  last 9 months the activity indicator will be False (Inactive). | [optional]
**customer_dispute_indicator** | **bool** | If true the business has disputed information in their profile | [optional]
**phone** | **string** | 10-digit business phone number | [optional]
**business_type** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessDetailsBusinessType**](LinkageBusinessDetailsBusinessType.md) |  | [optional]
**dba_names** | **string[]** | Doing-business-as (DBA) names for the business | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
