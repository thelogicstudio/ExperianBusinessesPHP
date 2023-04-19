# TradePaymentExperiencesResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_indicator** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResultPaymentIndicator**](TradePaymentExperiencesResultPaymentIndicator.md) |  | [optional] 
**business_category** | **string** | Industry of the business | [optional] 
**date_reported** | **string** | Date reported to Experian. ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**date_last_activity** | **string** | Last activity date. ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**terms** | **string** | Payment terms. Example: NET30, NET45, etc. | [optional] 
**recent_high_credit** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResultRecentHighCredit**](TradePaymentExperiencesResultRecentHighCredit.md) |  | [optional] 
**account_balance** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResultAccountBalance**](TradePaymentExperiencesResultAccountBalance.md) |  | [optional] 
**current_percentage** | **float** | Percentage of the account balance considered current relative to payment terms. \&quot;999\&quot; indicates that the creditor has not supplied account aging | [optional] 
**dbt30** | **float** | Percentage of the account balance that is beyond terms (late) in the 1-30 day range | [optional] 
**dbt60** | **float** | Percentage of the account balance that is beyond terms (late) in the 31-60 day range | [optional] 
**dbt90** | **float** | Percentage of the account balance that is beyond terms (late) in the 61-90 day range | [optional] 
**dbt91_plus** | **float** | Percentage of the account balance that is beyond terms (late) in the 91+ day range | [optional] 
**comments** | **string** | Supplied by the creditor/data contributor | [optional] 
**tradeline_flag** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResultTradelineFlag**](TradePaymentExperiencesResultTradelineFlag.md) |  | [optional] 
**newly_reported_indicator** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResultNewlyReportedIndicator**](TradePaymentExperiencesResultNewlyReportedIndicator.md) |  | [optional] 
**customer_dispute_indicator** | **string** | If true the business has disputed information in their profile | [optional] 
**itip_consolidated_number** | **float** | Supplied by the creditor/data contributor | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


