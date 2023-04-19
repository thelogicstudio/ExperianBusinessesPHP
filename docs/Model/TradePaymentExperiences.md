# TradePaymentExperiences

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_category** | **string** | Industry of the business | [optional] 
**date_reported** | [**\DateTime**](\DateTime.md) | Date reported to Experian. ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**date_last_activity** | [**\DateTime**](\DateTime.md) | Last activity date. ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**terms** | **string** | Payment terms. Example NET30, NET45, etc. | [optional] 
**recent_high_credit** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier**](AmountModifier.md) |  | [optional] 
**account_balance** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier**](AmountModifier.md) |  | [optional] 
**current_percentage** | **int** | Percentage of the account balance considered current relative to payment terms. \&quot;999\&quot; indicates that the creditor has not supplied account aging | [optional] 
**dbt30** | **float** | Percentage of the account balance that is beyond terms (late) in the 1-30 day range | [optional] 
**dbt60** | **float** | Percentage of the account balance that is beyond terms (late) in the 31-60 day range | [optional] 
**dbt90** | **int** | Percentage of the account balance that is beyond terms (late) in the 61-90 day range | [optional] 
**dbt91_plus** | **int** | Percentage of the account balance that is beyond terms (late) in the 91+ day range | [optional] 
**comments** | **string** | Supplied by the creditor/data contributor | [optional] 
**newly_reported_indicator** | **bool** | If true indicates this is a newly reported tradeline that has been added in the last 6 months but has not been updated. If false the tradeline is a continuously reported trade | [optional] 
**customer_dispute_indicator** | **bool** | If true the business has disputed information in their profile | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


