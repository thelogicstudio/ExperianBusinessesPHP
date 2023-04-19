# RiskDashboardsResponseResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commercial_score** | **float** | Commercial score predicts the likelihood that a business will pay in seriously delinquent manner (91+ days) in the next 12 months. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business. | [optional] 
**commercial_score_risk_class** | **string** | Commercial score risk class default values \&quot;High Risk\&quot;, \&quot;Medium to High Risk\&quot;, \&quot;Medium Risk\&quot;, \&quot;Low to Medium Risk\&quot;, \&quot;Low Risk\&quot;, \&quot;Recent Bankruptcy on file\&quot;, \&quot;Insufficient data to score\&quot; | [optional] 
**fsr_score** | **float** | FSR score predicts the likelihood of severe delinquency or bankruptcy within the next 12 months. 100 is the lowest risk, 1 is the highest risk. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business | [optional] 
**fsr_score_risk_class** | **string** | FSR score risk class default values: \&quot;High Risk\&quot;, \&quot;Medium to High Risk\&quot;, \&quot;Medium Risk\&quot;, \&quot;Low to Medium Risk\&quot;, \&quot;Low Risk\&quot;, \&quot;Recent Bankruptcy on file\&quot;, \&quot;Insufficient data to score\&quot; | [optional] 
**recommended_credit_limit_amount** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\RecommendedCreditLimit**](RecommendedCreditLimit.md) | Experian recommended credit limit amount that is based on trade information, industry, age of the business and the commercial score | [optional] 
**current_dbt** | **float** | Current Days-Beyond-Terms (DBT). The dollar-weighted average number of days beyond the invoice due date a business pays its bills | [optional] 
**derogatory_legal_count** | **float** | Total count of derogatory public records including bankruptcies, liens, and judgments | [optional] 
**commercial_fraud_risk_indicator_count** | **float** | Provides count of a number of checks done for indicators of potential fraudulent activity, including OFAC, business activity, business fraud victim indicator, and if there are potential inconsistencies with the business name, address, phone, and Tax ID number. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


