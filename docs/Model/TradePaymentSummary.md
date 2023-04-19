# TradePaymentSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_dbt** | **int** | Current Days-Beyond-Terms (DBT). The dollar-weighted average number of days beyond the invoice due date a business pays its bills | [optional] 
**monthly_average_dbt** | **int** | Average of the past 6 months balances and past due amounts to derive Days-Beyond-Terms (DBT) | [optional] 
**highest_dbt6_months** | **int** | The highest Days-Beyond-Terms (DBT) the business has experienced in the current month and the last 6 months | [optional] 
**highest_dbt5_quarters** | **int** | The highest Days-Beyond-Terms (DBT) the business has experience in the current month and the last 5 quarters | [optional] 
**all_tradeline_count** | **int** | Number of all newly reported, continuously reported, and additional trade payment experiences | [optional] 
**all_tradeline_balance** | **int** | Balance of all new, continuous, and additional trade payment experiences | [optional] 
**current_tradeline_count** | **int** | Total count of new and continuous tradelines | [optional] 
**current_account_balance** | **int** | Total account balance of continuous trades | [optional] 
**median_credit_amount_extended** | **int** | The median credit amount extended | [optional] 
**single_high_credit** | **int** | The single highest credit amount extended based on non-financial, new, or continuous tradelines | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


