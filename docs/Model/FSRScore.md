# FSRScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model_code** | **string** | FSR score model code | [optional] 
**model_title** | **string** | FSR score model title | [optional] 
**score** | **float** | FSR score predicts the likelihood of severe delinquency or bankruptcy within the next 12 months. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business | [optional] 
**percentile_ranking** | **float** | Percentage of businesses that would score lower than this business. 998 displays when there is a recent bankruptcy; 999 displays when there is insufficient data to score | [optional] 
**recommended_credit_limit_amount** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\RecommendedCreditLimit**](RecommendedCreditLimit.md) |  | [optional] 
**risk_class** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\FSRRiskClass**](FSRRiskClass.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


