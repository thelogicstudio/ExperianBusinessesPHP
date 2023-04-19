# MultiSegmentsResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_header** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult**](BusinessHeaderResult.md) |  | [optional] 
**bankruptcy_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]**](BankruptcyDetail.md) | Array containing details of bankruptcies filed by the business | [optional] 
**bankruptcy_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary**](BankruptcySummary.md) |  | [optional] 
**collections_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]**](BusinessCollectionsDetailResult.md) | If true receive object containing details of collections accounts on file for the business | [optional] 
**collections_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsSummaryResult**](BusinessCollectionsSummaryResult.md) | If true receive object containing collection count and collection balance | [optional] 
**business_contacts** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult**](BusinessContactsResult.md) | Business Contacts | [optional] 
**corporate_linkage_full** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageFull[]**](CorporateLinkageFull.md) | When linkage is present, corporateLinkageFull will return the full family tree, limited to 300 records. When there are more than 300 records, branches will not be returned (this occurs less than 1% of the time) | [optional] 
**corporate_linkage_partial** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]**](CorporateLinkagePartial.md) | When linkage is present, corporateLinkagePartial will return the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true | [optional] 
**corporate_registration** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult**](BusinessCorporateRegistrationResult.md) |  | [optional] 
**credit_status** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCreditStatus**](MultiSegmentsResultCreditStatus.md) |  | [optional] 
**business_facts** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts**](BusinessFacts.md) | An in-depth look at the business, including how long the business has been in operation, other legal names under which the business operates, firmographics, and more information | [optional] 
**fraud_shield** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult**](BusinessFraudShieldResult.md) |  | [optional] 
**header** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult**](BusinessHeaderResult.md) |  | [optional] 
**judgment_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]**](JudgmentDetail.md) | Array containing details of judgments filed by the business | [optional] 
**judgment_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary**](MultiSegmentsResultJudgmentSummary.md) |  | [optional] 
**legal_filings_collections_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsCollectionsSummariesResult**](BusinessLegalFilingsCollectionsSummariesResult.md) | Object containing summary information on legal filings and collections | [optional] 
**legal_filings_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsResult**](BusinessLegalFilingsResult.md) | Object containing legal count and legal balance | [optional] 
**lien_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]**](LienDetail.md) | Object containing lien detail information | [optional] 
**lien_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary**](LienSummary.md) |  | [optional] 
**reverse_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]**](ReverseAddresses.md) | Array containing businesses that match the address input on the request | [optional] 
**reverse_phone** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]**](ReversePhones.md) | Array containing businesses that match the phone input on the request | [optional] 
**reverse_tax_id** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]**](ReverseTaxIds.md) | Array containing businesses that match the tax ID input on the request | [optional] 
**risk_dashboard** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultRiskDashboard**](MultiSegmentsResultRiskDashboard.md) |  | [optional] 
**commercial_score** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCommercialScore**](MultiSegmentsResultCommercialScore.md) |  | [optional] 
**fsr_score** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultFsrScore**](MultiSegmentsResultFsrScore.md) |  | [optional] 
**trade_payment_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentSummary**](TradePaymentSummary.md) |  | [optional] 
**trade_payment_totals** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTotals**](TradePaymentTotals.md) |  | [optional] 
**trade_payment_trends** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultTradePaymentTrends**](MultiSegmentsResultTradePaymentTrends.md) |  | [optional] 
**trade_payment_experiences** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesObject**](TradePaymentExperiencesObject.md) |  | [optional] 
**ucc_filings_detail** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]**](UCCFilingsDetail.md) | Object containing judgment summary information | [optional] 
**ucc_filings_summary** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultUccFilingsSummary**](MultiSegmentsResultUccFilingsSummary.md) |  | [optional] 
**ist_watch** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatch[]**](MultiSegmentsResultIstWatch.md) | IST Watch | [optional] 
**government_details** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult**](GovernmentDetailsResult.md) |  | [optional] 
**commercial_score_factors** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreFactor[]**](CommercialScoreFactor.md) | Indicates the factors most influential in lowering the commercial score | [optional] 
**commercial_score_trends** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreTrends[]**](CommercialScoreTrends.md) | JSON array of object containing the four most recent quarters of commercial score information | [optional] 
**fsr_score_factors** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]**](FsrScoreFactor.md) | Indicates the factors most influential in lowering the FSR score | [optional] 
**fsr_score_trends** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]**](FsrScoreTrend.md) | JSON array of objects containing the four most recent quarters of FSR score information | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


