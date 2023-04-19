# TradePaymentTrend

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**dbt** | **int** | Days-Beyond-Terms (DBT). The dollar-weighted average number of days beyond the invoice due date a business pays its bills | [optional] 
**total_account_balance** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier**](AmountModifier.md) |  | [optional] 
**current_percentage** | **int** | Percentage of the account balance considered current relative to payment terms. \&quot;999\&quot; indicates that the creditor has not supplied account aging | [optional] 
**dbt30** | **int** | Percentage of the account balance that is beyond terms (late) in the 1-30 day range | [optional] 
**dbt60** | **int** | Percentage of the account balance that is beyond terms (late) in the 61-90 day range | [optional] 
**dbt90** | **int** | Percentage of the account balance that is beyond terms (late) in the 61-90 day range | [optional] 
**dbt91_plus** | **int** | Percentage of the account balance that is beyond terms (late) in the 91+ day range | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


