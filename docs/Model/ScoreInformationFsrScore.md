# ScoreInformationFsrScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**publicly_held_company** | **bool** | If true indicates the business is a publicly held company | [optional] 
**limited_profile** | **bool** | If true indicates a limited profile | [optional] 
**score** | **float** | FSR score predicts the likelihood of severe delinquency or bankruptcy within the next 12 months. | [optional] 
**profile_number** | **string** | Profile number | [optional] 
**model_code** | **string** | FSR score model code | [optional] 
**model_title** | **string** | FSR score model title | [optional] 
**percentile_ranking** | **float** | Percentage of businesses that would score lower than this business. 998 displays when there is a recent bankruptcy; 999 displays when there is insufficient data to score | [optional] 
**probability** | **float** | Probability percentage that the business will go bad | [optional] 
**risk_class** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformationFsrScoreRiskClass**](ScoreInformationFsrScoreRiskClass.md) |  | [optional] 
**customer_dispute_indicator** | **bool** | If true, indicates that there is a customer dispute on file | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


