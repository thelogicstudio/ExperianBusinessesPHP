# CommercialFraudShieldSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**matching_business_indicator** | **string** | \&quot;Primary Business\&quot; is returned when the address inquired upon matches the businesses primary address. \&quot;Branch Business\&quot; is returned when the address matches a branch location. Null if not available | [optional] 
**active_business_indicator** | **bool** | Indicates if Experian shows activity for this business within the BizSource database To determine active status, Experian looks at bankruptcies, corporate registrations, trades, collections, and recent credit inquiry activity | [optional] 
**ofac_match_warning** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\OFACMatchWarning**](OFACMatchWarning.md) |  | [optional] 
**business_victim_statement_indicator** | **bool** | If true the business has filed a statement with Experian indicating they were a victim of fraud or identity theft | [optional] 
**business_risk_triggers_indicator** | **bool** | If yes, indicates high risk conditions associated with the business address | [optional] 
**name_address_verification_indicator** | **bool** | If yes there are potential inconsistencies with the business name, address, phone and Tax ID Number | [optional] 
**business_risk_triggers_statement** | **string[]** | Only returned if businessRiskTriggersIndicator is true. Provides a description of the high risk conditions identified with the business address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


