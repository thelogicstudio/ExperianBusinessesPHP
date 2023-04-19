# ScoreInformationCommercialScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**publicly_held_company** | **bool** | If true indicates the business is a publicly held company | [optional] 
**limited_profile** | **bool** | If true indicates the profile response is limited and therefore not scored | [optional] 
**score** | **float** | Commercial score predicts the likelihood that a business will pay in seriously delinquent manner (91+ days) in the next 12 months. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business | [optional] 
**profile_number** | **string** | Number required to request a supporting Business Profile | [optional] 
**model_code** | **string** | Commercial score model code. Default model code 000254, Intelliscore Plus v3 Machine Learning | [optional] 
**model_title** | **string** | Commercial score model title. Default model code 000254, Intelliscore Plus v3 Machine Learning | [optional] 
**percentile_ranking** | **float** | \&quot;Percentage of businesses that would score lower than this business. 998 displays when there is a recent bankruptcy; 999 displays when there is insufficient data to score\&quot; | [optional] 
**probability** | **float** | Probability percentage that the business will go bad | [optional] 
**risk_class** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformationCommercialScoreRiskClass**](ScoreInformationCommercialScoreRiskClass.md) |  | [optional] 
**customer_dispute_indicator** | **bool** | If true indicates that a customer dispute is on file | [optional] 
**custom_model_code** | **string** | Only returned if you are using a custom model | [optional] 
**recommended_credit_limit_amount** | **float** | Compares the business against similar businesses. The credit line is based on trade information, industry, age of business and the Intelliscore Plus score. A proprietary calculation using these data elements generates the credit line recommendation for a business | [optional] 
**high_credit_limit_amount** | **float** | Highest account balance the business has carried | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


