# BCIResponseResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_header** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult**](BusinessHeaderResult.md) |  | [optional] 
**business_facts** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResult**](BusinessFactsResult.md) |  | [optional] 
**business_contacts** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult**](BusinessContactsResult.md) |  | [optional] 
**corporate_registration** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult**](BusinessCorporateRegistrationResult.md) |  | [optional] 
**bankruptcy_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary**](BankruptcySummary.md) |  | [optional] 
**bankruptcy_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]**](BankruptcyDetail.md) | Array containing details of bankruptcies filed by the business | [optional] 
**corporate_linkage_partial** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]**](CorporateLinkagePartial.md) | When linkage is present, corporateLinkagePartial will return the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true | [optional] 
**corporate_linkage_full** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsCorporateLinkageFull**](BCIResponseResultsCorporateLinkageFull.md) |  | [optional] 
**fsr_score** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\FSRScore**](FSRScore.md) |  | [optional] 
**judgment_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary**](MultiSegmentsResultJudgmentSummary.md) |  | [optional] 
**judgment_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]**](JudgmentDetail.md) | Array containing details of judgments filed by the business | [optional] 
**lien_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary**](LienSummary.md) |  | [optional] 
**lien_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]**](LienDetail.md) | Object containing lien detail information | [optional] 
**commercial_fraud_shield_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary**](CommercialFraudShieldSummary.md) | Object containing Commercial Fraud Shield Summary information | [optional] 
**government_details** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult**](GovernmentDetailsResult.md) |  | [optional] 
**fsr_score_factors** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]**](FsrScoreFactor.md) | Indicates the factors most influential in lowering the FSR score | [optional] 
**fsr_score_trends** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]**](FsrScoreTrend.md) | JSON array of objects containing the four most recent quarters of FSR score information | [optional] 
**department_of_justice_search** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsDepartmentOfJusticeSearch**](BCIResponseResultsDepartmentOfJusticeSearch.md) |  | [optional] 
**reverse_tax_id** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]**](ReverseTaxIds.md) | Array containing businesses that match the tax ID input on the request | [optional] 
**reverse_phone** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]**](ReversePhones.md) | Array containing businesses that match the phone input on the request | [optional] 
**reverse_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]**](ReverseAddresses.md) | Array containing businesses that match the address input on the request | [optional] 
**better_business_bureau_rating** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResult**](BetterBusinessBureauRatingResult.md) |  | [optional] 
**fraud_shield** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult**](BusinessFraudShieldResult.md) |  | [optional] 
**ist_watch** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatch[]**](MultiSegmentsResultIstWatch.md) | IST Watch | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


