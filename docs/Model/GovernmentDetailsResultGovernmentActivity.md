# GovernmentDetailsResultGovernmentActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**congressional_district** | **string** | The Congressional District wherein the business is located (within the state) | [optional] 
**contractor_indicator** | **bool** | If true, indicates the business is registered with Central Contractor Registration (CCR) | [optional] 
**debarred_indicator** | **bool** | If true, indicates that the business is excluded from receiving Federal contracts, certain subcontracts, and certain types of Federal financial and non-financial assistance and benefits | [optional] 
**agency** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResultGovernmentActivityAgency**](GovernmentDetailsResultGovernmentActivityAgency.md) |  | [optional] 
**exclusion_type** | **string** | Type of Exclusions: Preliminarily Ineligible (Proceedings Pending), Ineligible (Proceedings Completed), Prohibition/Restriction, Voluntary Exclusion, or Null if not available | [optional] 
**active_date** | **string** | The date that the exclusion became active, when the entity is no longer able to do business with the Federal Government. Format YYYY-MM-DD | [optional] 
**termination_date** | **string** | The date that the exclusion will be removed from the current list of active exclusions and placed in the inactive list. Format YYYY-MM-DD | [optional] 
**import_export_code** | **string** | Identifies if a business is an Importer, Exporter, or Both. Future Field | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


