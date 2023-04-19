# CommercialScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model_code** | **string** | Commercial score model code. Default model code 000254, Intelliscore Plus v3 Machine Learning | [optional] 
**model_title** | **string** | Commercial score model title. Default model code 000254, Intelliscore Plus v3 Machine Learning | [optional] 
**custom_model_code** | **string** | Only returned if you are using a custom model | [optional] 
**score** | **float** | Commercial score predicts the likelihood that a business will pay in seriously delinquent manner (91+ days) in the next 12 months. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business | [optional] 
**percentile_ranking** | **float** | Percentage of businesses that would score lower than this business. 998 displays when there is a recent bankruptcy; 999 displays when there is insufficient data to score | [optional] 
**recommended_credit_limit_amount** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\RecommendedCreditLimit**](RecommendedCreditLimit.md) |  | [optional] 
**risk_class** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialRiskClass**](CommercialRiskClass.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


