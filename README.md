# Experian Businesses PHP SDK

<p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> <li><strong>Cyber Risk Score and Attributes</strong> – Identifies employee cyber risk behaviors that indicate risk for a business</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/TheLogicStudio/ExperianBusinessesPHP.git"
    }
  ],
  "require": {
    "TheLogicStudio/ExperianBusinessesPHP": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Experian Businesses PHP SDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest | Business Aggregates Request

try {
    $result = $apiInstance->aggregates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->aggregates: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sandbox-us-api.experian.com/businessinformation/businesses*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BusinessInformationServicesApi* | [**aggregates**](docs/Api/BusinessInformationServicesApi.md#aggregates) | **POST** /v1/aggregates | BizAggs
*BusinessInformationServicesApi* | [**bankruptcies**](docs/Api/BusinessInformationServicesApi.md#bankruptcies) | **POST** /v1/bankruptcies | Business Bankruptcies
*BusinessInformationServicesApi* | [**bci**](docs/Api/BusinessInformationServicesApi.md#bci) | **POST** /v1/bci | Business Compliance Insight JSON
*BusinessInformationServicesApi* | [**bcihtml**](docs/Api/BusinessInformationServicesApi.md#bcihtml) | **POST** /v1/bci/html | Business Compliance Insight HTML
*BusinessInformationServicesApi* | [**bcipdf**](docs/Api/BusinessInformationServicesApi.md#bcipdf) | **POST** /v1/bci/pdf | Business Compliance Insight PDF
*BusinessInformationServicesApi* | [**businesscontacts**](docs/Api/BusinessInformationServicesApi.md#businesscontacts) | **POST** /v1/businesscontacts | Business Contacts
*BusinessInformationServicesApi* | [**collections**](docs/Api/BusinessInformationServicesApi.md#collections) | **POST** /v1/collections | Commercial Collections
*BusinessInformationServicesApi* | [**corporateLinkage**](docs/Api/BusinessInformationServicesApi.md#corporatelinkage) | **POST** /v1/corporatelinkage | Corporate Linkage
*BusinessInformationServicesApi* | [**corporateRegistration**](docs/Api/BusinessInformationServicesApi.md#corporateregistration) | **POST** /v1/corporateregistrations | Corporate Registrations
*BusinessInformationServicesApi* | [**creditstatus**](docs/Api/BusinessInformationServicesApi.md#creditstatus) | **POST** /v1/creditstatus | Commercial Credit Status
*BusinessInformationServicesApi* | [**cyberscore**](docs/Api/BusinessInformationServicesApi.md#cyberscore) | **POST** /v1/cyberscore | Cyber Risk Score and Attributes
*BusinessInformationServicesApi* | [**facts**](docs/Api/BusinessInformationServicesApi.md#facts) | **POST** /v1/facts | Business Facts
*BusinessInformationServicesApi* | [**fraudShields**](docs/Api/BusinessInformationServicesApi.md#fraudshields) | **POST** /v1/fraudshields | Commercial Fraud Shields
*BusinessInformationServicesApi* | [**governmentdetails**](docs/Api/BusinessInformationServicesApi.md#governmentdetails) | **POST** /v1/governmentdetails | Government Details
*BusinessInformationServicesApi* | [**headers**](docs/Api/BusinessInformationServicesApi.md#headers) | **POST** /v1/headers | Business Headers
*BusinessInformationServicesApi* | [**intelliscoreplus**](docs/Api/BusinessInformationServicesApi.md#intelliscoreplus) | **POST** /v1/reports/intelliscoreplus | Intelliscore Plus JSON
*BusinessInformationServicesApi* | [**intelliscoreplushtml**](docs/Api/BusinessInformationServicesApi.md#intelliscoreplushtml) | **POST** /v1/reports/intelliscoreplus/html | Intelliscore Plus HTML
*BusinessInformationServicesApi* | [**intelliscorepluspdf**](docs/Api/BusinessInformationServicesApi.md#intelliscorepluspdf) | **POST** /v1/reports/intelliscoreplus/pdf | Intelliscore Plus PDF
*BusinessInformationServicesApi* | [**istwatch**](docs/Api/BusinessInformationServicesApi.md#istwatch) | **POST** /v1/istwatch | IST Watch
*BusinessInformationServicesApi* | [**judgments**](docs/Api/BusinessInformationServicesApi.md#judgments) | **POST** /v1/judgments | Business Judgments
*BusinessInformationServicesApi* | [**legalCollectionSummaries**](docs/Api/BusinessInformationServicesApi.md#legalcollectionsummaries) | **POST** /v1/legalcollectionsummaries | Legal Filings and Collections Summaries
*BusinessInformationServicesApi* | [**liens**](docs/Api/BusinessInformationServicesApi.md#liens) | **POST** /v1/liens | Business Liens
*BusinessInformationServicesApi* | [**multisegments**](docs/Api/BusinessInformationServicesApi.md#multisegments) | **POST** /v1/multisegments | MultiSegments. Request a la carte segments in a single call
*BusinessInformationServicesApi* | [**premierprofiles**](docs/Api/BusinessInformationServicesApi.md#premierprofiles) | **POST** /v1/reports/premierprofiles | Premier Profiles JSON
*BusinessInformationServicesApi* | [**premierprofileshtml**](docs/Api/BusinessInformationServicesApi.md#premierprofileshtml) | **POST** /v1/reports/premierprofiles/html | Premier Profiles HTML
*BusinessInformationServicesApi* | [**premierprofilespdf**](docs/Api/BusinessInformationServicesApi.md#premierprofilespdf) | **POST** /v1/reports/premierprofiles/pdf | Premier Profiles PDF
*BusinessInformationServicesApi* | [**quicksearch**](docs/Api/BusinessInformationServicesApi.md#quicksearch) | **POST** /v1/quicksearch | Quick Search.  Our secondary search method
*BusinessInformationServicesApi* | [**reverseaddresses**](docs/Api/BusinessInformationServicesApi.md#reverseaddresses) | **POST** /v1/reverseaddresses | Reverse Addresses
*BusinessInformationServicesApi* | [**reversephones**](docs/Api/BusinessInformationServicesApi.md#reversephones) | **POST** /v1/reversephones | Reverse Phones
*BusinessInformationServicesApi* | [**reversetaxids**](docs/Api/BusinessInformationServicesApi.md#reversetaxids) | **POST** /v1/reversetaxids | Reverse TaxIDs
*BusinessInformationServicesApi* | [**riskdashboards**](docs/Api/BusinessInformationServicesApi.md#riskdashboards) | **POST** /v1/riskdashboards | Commercial Risk Dashboards
*BusinessInformationServicesApi* | [**scores**](docs/Api/BusinessInformationServicesApi.md#scores) | **POST** /v1/scores | Commercial Scores
*BusinessInformationServicesApi* | [**scoressearch**](docs/Api/BusinessInformationServicesApi.md#scoressearch) | **POST** /v1/scores/search | Scores Auto Search
*BusinessInformationServicesApi* | [**search**](docs/Api/BusinessInformationServicesApi.md#search) | **POST** /v1/search | Advanced Business Search.  The primary search method
*BusinessInformationServicesApi* | [**trades**](docs/Api/BusinessInformationServicesApi.md#trades) | **POST** /v1/trades | Commercial Trades
*BusinessInformationServicesApi* | [**uccfilings**](docs/Api/BusinessInformationServicesApi.md#uccfilings) | **POST** /v1/uccfilings | UCC Filings

## Models

- [Address](docs/Model/Address.md)
- [AddressResult](docs/Model/AddressResult.md)
- [AgentAddressResult](docs/Model/AgentAddressResult.md)
- [AmountModifier](docs/Model/AmountModifier.md)
- [BCIRequest](docs/Model/BCIRequest.md)
- [BCIResponse](docs/Model/BCIResponse.md)
- [BCIResponseHTML](docs/Model/BCIResponseHTML.md)
- [BCIResponsePDF](docs/Model/BCIResponsePDF.md)
- [BCIResponseResults](docs/Model/BCIResponseResults.md)
- [BCIResponseResultsCorporateLinkageFull](docs/Model/BCIResponseResultsCorporateLinkageFull.md)
- [BCIResponseResultsDepartmentOfJusticeSearch](docs/Model/BCIResponseResultsDepartmentOfJusticeSearch.md)
- [BCIResponseResultsDepartmentOfJusticeSearchResults](docs/Model/BCIResponseResultsDepartmentOfJusticeSearchResults.md)
- [BCIResponseResultsDepartmentOfJusticeSearchResultsItemList](docs/Model/BCIResponseResultsDepartmentOfJusticeSearchResultsItemList.md)
- [BCIResponseResultsDepartmentOfJusticeSearchResultsItemListItemInner](docs/Model/BCIResponseResultsDepartmentOfJusticeSearchResultsItemListItemInner.md)
- [BankruptcyDetail](docs/Model/BankruptcyDetail.md)
- [BankruptcySummary](docs/Model/BankruptcySummary.md)
- [BetterBusinessBureauRatingResult](docs/Model/BetterBusinessBureauRatingResult.md)
- [BetterBusinessBureauRatingResultSearchResults](docs/Model/BetterBusinessBureauRatingResultSearchResults.md)
- [BetterBusinessBureauRatingResultSearchResultsItemList](docs/Model/BetterBusinessBureauRatingResultSearchResultsItemList.md)
- [BetterBusinessBureauRatingResultSearchResultsItemListItem](docs/Model/BetterBusinessBureauRatingResultSearchResultsItemListItem.md)
- [BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons](docs/Model/BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons.md)
- [BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIconsItemList](docs/Model/BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIconsItemList.md)
- [BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIconsItemListItemInner](docs/Model/BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIconsItemListItemInner.md)
- [BizAggregates](docs/Model/BizAggregates.md)
- [BusinessAggregatesRequest](docs/Model/BusinessAggregatesRequest.md)
- [BusinessAggregatesResponse](docs/Model/BusinessAggregatesResponse.md)
- [BusinessBankruptcyDataRequest](docs/Model/BusinessBankruptcyDataRequest.md)
- [BusinessBankruptcyResponse](docs/Model/BusinessBankruptcyResponse.md)
- [BusinessBankruptcyResponseAllOfResults](docs/Model/BusinessBankruptcyResponseAllOfResults.md)
- [BusinessCollectionsDetailResult](docs/Model/BusinessCollectionsDetailResult.md)
- [BusinessCollectionsRequest](docs/Model/BusinessCollectionsRequest.md)
- [BusinessCollectionsResponse](docs/Model/BusinessCollectionsResponse.md)
- [BusinessCollectionsResponseAllOfResults](docs/Model/BusinessCollectionsResponseAllOfResults.md)
- [BusinessCollectionsSummaryResult](docs/Model/BusinessCollectionsSummaryResult.md)
- [BusinessContactsRequest](docs/Model/BusinessContactsRequest.md)
- [BusinessContactsResponse](docs/Model/BusinessContactsResponse.md)
- [BusinessContactsResult](docs/Model/BusinessContactsResult.md)
- [BusinessCorporateLinkageRequest](docs/Model/BusinessCorporateLinkageRequest.md)
- [BusinessCorporateRegistrationResponse](docs/Model/BusinessCorporateRegistrationResponse.md)
- [BusinessCorporateRegistrationResult](docs/Model/BusinessCorporateRegistrationResult.md)
- [BusinessCorporateRegistrationResultStatusFlag](docs/Model/BusinessCorporateRegistrationResultStatusFlag.md)
- [BusinessCorporateRegistrationsRequest](docs/Model/BusinessCorporateRegistrationsRequest.md)
- [BusinessDataRequest](docs/Model/BusinessDataRequest.md)
- [BusinessDataRequestWithModel](docs/Model/BusinessDataRequestWithModel.md)
- [BusinessDataResponse](docs/Model/BusinessDataResponse.md)
- [BusinessDataResponseResults](docs/Model/BusinessDataResponseResults.md)
- [BusinessDataResponseTest](docs/Model/BusinessDataResponseTest.md)
- [BusinessFacts](docs/Model/BusinessFacts.md)
- [BusinessFactsFileEstablishedFlag](docs/Model/BusinessFactsFileEstablishedFlag.md)
- [BusinessFactsResponse](docs/Model/BusinessFactsResponse.md)
- [BusinessFactsResult](docs/Model/BusinessFactsResult.md)
- [BusinessFactsResultFortune1000](docs/Model/BusinessFactsResultFortune1000.md)
- [BusinessFactsYearsInBusinessIndicator](docs/Model/BusinessFactsYearsInBusinessIndicator.md)
- [BusinessFraudShieldResponse](docs/Model/BusinessFraudShieldResponse.md)
- [BusinessFraudShieldResult](docs/Model/BusinessFraudShieldResult.md)
- [BusinessHeaderResponse](docs/Model/BusinessHeaderResponse.md)
- [BusinessHeaderResult](docs/Model/BusinessHeaderResult.md)
- [BusinessHeaderResultBranchLocation](docs/Model/BusinessHeaderResultBranchLocation.md)
- [BusinessHeaderResultMatchingBranchAddress](docs/Model/BusinessHeaderResultMatchingBranchAddress.md)
- [BusinessJudgmentRequest](docs/Model/BusinessJudgmentRequest.md)
- [BusinessJudgmentResponse](docs/Model/BusinessJudgmentResponse.md)
- [BusinessJudgmentResponseAllOfResults](docs/Model/BusinessJudgmentResponseAllOfResults.md)
- [BusinessLegalCollectionSummariesRequest](docs/Model/BusinessLegalCollectionSummariesRequest.md)
- [BusinessLegalCollectionSummariesResponse](docs/Model/BusinessLegalCollectionSummariesResponse.md)
- [BusinessLegalCollectionSummariesResponseAllOfResults](docs/Model/BusinessLegalCollectionSummariesResponseAllOfResults.md)
- [BusinessLegalFilingsCollectionsSummariesResult](docs/Model/BusinessLegalFilingsCollectionsSummariesResult.md)
- [BusinessLegalFilingsResult](docs/Model/BusinessLegalFilingsResult.md)
- [BusinessLiensRequest](docs/Model/BusinessLiensRequest.md)
- [BusinessLiensResponse](docs/Model/BusinessLiensResponse.md)
- [BusinessLiensResult](docs/Model/BusinessLiensResult.md)
- [BusinessPremierProfileRequest](docs/Model/BusinessPremierProfileRequest.md)
- [BusinessReverseAddressesRequest](docs/Model/BusinessReverseAddressesRequest.md)
- [BusinessReversePhonesRequest](docs/Model/BusinessReversePhonesRequest.md)
- [BusinessReverseTaxIDsRequest](docs/Model/BusinessReverseTaxIDsRequest.md)
- [BusinessScoresRequest](docs/Model/BusinessScoresRequest.md)
- [BusinessTradesRequest](docs/Model/BusinessTradesRequest.md)
- [BusinessTradesResponse](docs/Model/BusinessTradesResponse.md)
- [BusinessTradesResponseAllOfResults](docs/Model/BusinessTradesResponseAllOfResults.md)
- [BusinessUCCFilingsRequest](docs/Model/BusinessUCCFilingsRequest.md)
- [BusinessUCCFilingsResponse](docs/Model/BusinessUCCFilingsResponse.md)
- [BusinessUCCFilingsResponseAllOfResults](docs/Model/BusinessUCCFilingsResponseAllOfResults.md)
- [ClientOfCollectionAgency](docs/Model/ClientOfCollectionAgency.md)
- [CollateralCode](docs/Model/CollateralCode.md)
- [CollectionAgencyInfoResult](docs/Model/CollectionAgencyInfoResult.md)
- [CollectionScore](docs/Model/CollectionScore.md)
- [CollectionScoreRiskClass](docs/Model/CollectionScoreRiskClass.md)
- [CommercialFraudShieldSummary](docs/Model/CommercialFraudShieldSummary.md)
- [CommercialGovernmentEntityCode](docs/Model/CommercialGovernmentEntityCode.md)
- [CommercialRiskClass](docs/Model/CommercialRiskClass.md)
- [CommercialScore](docs/Model/CommercialScore.md)
- [CommercialScoreFactor](docs/Model/CommercialScoreFactor.md)
- [CommercialScoreTrends](docs/Model/CommercialScoreTrends.md)
- [CompanyOwnersAndPrincipalsResult](docs/Model/CompanyOwnersAndPrincipalsResult.md)
- [Competitors](docs/Model/Competitors.md)
- [ConsumerStatement](docs/Model/ConsumerStatement.md)
- [ConsumerStatementType](docs/Model/ConsumerStatementType.md)
- [ContactsAndTitlesResult](docs/Model/ContactsAndTitlesResult.md)
- [ContactsBusinessAffiliationsResult](docs/Model/ContactsBusinessAffiliationsResult.md)
- [ContractSpendingDetail](docs/Model/ContractSpendingDetail.md)
- [ContractSpendingSummary](docs/Model/ContractSpendingSummary.md)
- [ContractSpendingSummarySpendByFiscalYearInner](docs/Model/ContractSpendingSummarySpendByFiscalYearInner.md)
- [CorporateFinancialInformation](docs/Model/CorporateFinancialInformation.md)
- [CorporateFinancialInformationBalanceSheetsInner](docs/Model/CorporateFinancialInformationBalanceSheetsInner.md)
- [CorporateFinancialInformationCriticalDataAndFinancialRatiosInner](docs/Model/CorporateFinancialInformationCriticalDataAndFinancialRatiosInner.md)
- [CorporateFinancialInformationOperatingStatementsInner](docs/Model/CorporateFinancialInformationOperatingStatementsInner.md)
- [CorporateLinkage](docs/Model/CorporateLinkage.md)
- [CorporateLinkageFull](docs/Model/CorporateLinkageFull.md)
- [CorporateLinkagePartial](docs/Model/CorporateLinkagePartial.md)
- [CorporateLinkageResponse](docs/Model/CorporateLinkageResponse.md)
- [CorporateLinkageResponseAllOfResults](docs/Model/CorporateLinkageResponseAllOfResults.md)
- [CorporateRegistration](docs/Model/CorporateRegistration.md)
- [CreditStatusResponse](docs/Model/CreditStatusResponse.md)
- [CyberScoreRequest](docs/Model/CyberScoreRequest.md)
- [CyberScoreResponse](docs/Model/CyberScoreResponse.md)
- [CyberScoreResponseResults](docs/Model/CyberScoreResponseResults.md)
- [CyberScoreResponseResultsCyberScore](docs/Model/CyberScoreResponseResultsCyberScore.md)
- [CyberScoreResponseResultsCyberScoreScoreDetailsInner](docs/Model/CyberScoreResponseResultsCyberScoreScoreDetailsInner.md)
- [CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreAttributes](docs/Model/CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreAttributes.md)
- [CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreFactorsInner](docs/Model/CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreFactorsInner.md)
- [EVAddress](docs/Model/EVAddress.md)
- [EconomicDiversity](docs/Model/EconomicDiversity.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponse400](docs/Model/ErrorResponse400.md)
- [ErrorResponse401](docs/Model/ErrorResponse401.md)
- [ErrorResponse401ErrorsInner](docs/Model/ErrorResponse401ErrorsInner.md)
- [ErrorResponse404](docs/Model/ErrorResponse404.md)
- [ErrorResponse404ErrorsInner](docs/Model/ErrorResponse404ErrorsInner.md)
- [ErrorResponse500](docs/Model/ErrorResponse500.md)
- [ErrorResponse502](docs/Model/ErrorResponse502.md)
- [ErrorResponse502ErrorsInner](docs/Model/ErrorResponse502ErrorsInner.md)
- [ErrorResponse502ErrorsInnerFault](docs/Model/ErrorResponse502ErrorsInnerFault.md)
- [ErrorResponse502ErrorsInnerFaultDetail](docs/Model/ErrorResponse502ErrorsInnerFaultDetail.md)
- [ErrorResponse503](docs/Model/ErrorResponse503.md)
- [ErrorResponse503ErrorsInner](docs/Model/ErrorResponse503ErrorsInner.md)
- [ErrorResponse503ErrorsInnerFault](docs/Model/ErrorResponse503ErrorsInnerFault.md)
- [ErrorResponse503ErrorsInnerFaultDetail](docs/Model/ErrorResponse503ErrorsInnerFaultDetail.md)
- [EvLinkageRequest](docs/Model/EvLinkageRequest.md)
- [EvLinkageRequestLinkageRecordKey](docs/Model/EvLinkageRequestLinkageRecordKey.md)
- [EvLinkageResponse](docs/Model/EvLinkageResponse.md)
- [EvLinkageResult](docs/Model/EvLinkageResult.md)
- [EvLinkageResultLinkageNodeDetails](docs/Model/EvLinkageResultLinkageNodeDetails.md)
- [EvLinkageResultLinkageTreeRange](docs/Model/EvLinkageResultLinkageTreeRange.md)
- [EvLinkageResultLinkageTreeRangeDataRecordListInner](docs/Model/EvLinkageResultLinkageTreeRangeDataRecordListInner.md)
- [EvLinkageResultLinkageTreeRangeRangeSummary](docs/Model/EvLinkageResultLinkageTreeRangeRangeSummary.md)
- [EvLinkageResultLinkageTreeSnapshot](docs/Model/EvLinkageResultLinkageTreeSnapshot.md)
- [EvLinkageResultLinkageTreeSnapshotLinkageSnapshotRecord](docs/Model/EvLinkageResultLinkageTreeSnapshotLinkageSnapshotRecord.md)
- [EvSearchRequest](docs/Model/EvSearchRequest.md)
- [EvSearchResponse](docs/Model/EvSearchResponse.md)
- [EvSearchResult](docs/Model/EvSearchResult.md)
- [EvSearchResultBusinessType](docs/Model/EvSearchResultBusinessType.md)
- [EvSearchResultCorporateRegistration](docs/Model/EvSearchResultCorporateRegistration.md)
- [EvSearchResultCorporateRegistrationStatusCode](docs/Model/EvSearchResultCorporateRegistrationStatusCode.md)
- [EvSearchResultDomesticUltimateParent](docs/Model/EvSearchResultDomesticUltimateParent.md)
- [EvSearchResultGlobalUltimateParent](docs/Model/EvSearchResultGlobalUltimateParent.md)
- [EvSearchResultImmediateParent](docs/Model/EvSearchResultImmediateParent.md)
- [EvSearchResultMatchingNameAndAddress](docs/Model/EvSearchResultMatchingNameAndAddress.md)
- [ExecutiveInformation](docs/Model/ExecutiveInformation.md)
- [ExecutiveSummary](docs/Model/ExecutiveSummary.md)
- [ExecutiveSummaryBusinessDbt](docs/Model/ExecutiveSummaryBusinessDbt.md)
- [ExecutiveSummaryCommonTerms](docs/Model/ExecutiveSummaryCommonTerms.md)
- [ExecutiveSummaryCurrentTotalAccountBalance](docs/Model/ExecutiveSummaryCurrentTotalAccountBalance.md)
- [ExecutiveSummaryHighestTotalAccountBalance](docs/Model/ExecutiveSummaryHighestTotalAccountBalance.md)
- [ExecutiveSummaryIndustryPaymentComparison](docs/Model/ExecutiveSummaryIndustryPaymentComparison.md)
- [ExecutiveSummaryLowestTotalAccountBalance](docs/Model/ExecutiveSummaryLowestTotalAccountBalance.md)
- [ExecutiveSummaryPaymentTrendIndicator](docs/Model/ExecutiveSummaryPaymentTrendIndicator.md)
- [ExpandedCreditSummary](docs/Model/ExpandedCreditSummary.md)
- [ExpandedCreditSummaryOfacMatchWarning](docs/Model/ExpandedCreditSummaryOfacMatchWarning.md)
- [FSRRiskClass](docs/Model/FSRRiskClass.md)
- [FSRScore](docs/Model/FSRScore.md)
- [Fortune1000](docs/Model/Fortune1000.md)
- [FsrScoreFactor](docs/Model/FsrScoreFactor.md)
- [FsrScoreTrend](docs/Model/FsrScoreTrend.md)
- [GeoCode](docs/Model/GeoCode.md)
- [GovernmentActivity](docs/Model/GovernmentActivity.md)
- [GovernmentDetailsRequest](docs/Model/GovernmentDetailsRequest.md)
- [GovernmentDetailsResponse](docs/Model/GovernmentDetailsResponse.md)
- [GovernmentDetailsResult](docs/Model/GovernmentDetailsResult.md)
- [GovernmentDetailsResultCommercialGovernmentEntityCode](docs/Model/GovernmentDetailsResultCommercialGovernmentEntityCode.md)
- [GovernmentDetailsResultContractAdditionalDescriptionInner](docs/Model/GovernmentDetailsResultContractAdditionalDescriptionInner.md)
- [GovernmentDetailsResultContractSpendingDetailInner](docs/Model/GovernmentDetailsResultContractSpendingDetailInner.md)
- [GovernmentDetailsResultContractSpendingSummary](docs/Model/GovernmentDetailsResultContractSpendingSummary.md)
- [GovernmentDetailsResultContractSpendingSummaryCurrentFiscalYear](docs/Model/GovernmentDetailsResultContractSpendingSummaryCurrentFiscalYear.md)
- [GovernmentDetailsResultContractSpendingSummaryPriorFiscalYearInner](docs/Model/GovernmentDetailsResultContractSpendingSummaryPriorFiscalYearInner.md)
- [GovernmentDetailsResultEconomicDiversity](docs/Model/GovernmentDetailsResultEconomicDiversity.md)
- [GovernmentDetailsResultGovernmentActivity](docs/Model/GovernmentDetailsResultGovernmentActivity.md)
- [GovernmentDetailsResultGovernmentActivityAgency](docs/Model/GovernmentDetailsResultGovernmentActivityAgency.md)
- [ISTWatchRequest](docs/Model/ISTWatchRequest.md)
- [ISTWatchResponse](docs/Model/ISTWatchResponse.md)
- [ISTWatchResponseResults](docs/Model/ISTWatchResponseResults.md)
- [ISTWatchResponseResultsIstWatchInner](docs/Model/ISTWatchResponseResultsIstWatchInner.md)
- [ISTWatchlistResult](docs/Model/ISTWatchlistResult.md)
- [IndividualOwnersAndPrincipalsResult](docs/Model/IndividualOwnersAndPrincipalsResult.md)
- [Inquiries](docs/Model/Inquiries.md)
- [InquiriesInquiryCountInner](docs/Model/InquiriesInquiryCountInner.md)
- [IntelliscorePlusHTMLResponse](docs/Model/IntelliscorePlusHTMLResponse.md)
- [IntelliscorePlusPDFResponse](docs/Model/IntelliscorePlusPDFResponse.md)
- [IntelliscorePlusRequest](docs/Model/IntelliscorePlusRequest.md)
- [IntelliscorePlusResponse](docs/Model/IntelliscorePlusResponse.md)
- [IntelliscorePlusResponseResults](docs/Model/IntelliscorePlusResponseResults.md)
- [IntelliscorePlusResponseResultsBusinessNameAndAddressInner](docs/Model/IntelliscorePlusResponseResultsBusinessNameAndAddressInner.md)
- [IntelliscorePlusResponseResultsBusinessNameAndAddressInnerMatchingNameAndAddress](docs/Model/IntelliscorePlusResponseResultsBusinessNameAndAddressInnerMatchingNameAndAddress.md)
- [IntelliscorePlusResponseResultsBusinessNameAndAddressInnerSic](docs/Model/IntelliscorePlusResponseResultsBusinessNameAndAddressInnerSic.md)
- [IntelliscorePlusResponseResultsConsumerStatement](docs/Model/IntelliscorePlusResponseResultsConsumerStatement.md)
- [IntelliscorePlusResponseResultsCustomFooter](docs/Model/IntelliscorePlusResponseResultsCustomFooter.md)
- [IntelliscorePlusResponseResultsCustomHeader](docs/Model/IntelliscorePlusResponseResultsCustomHeader.md)
- [IntelliscorePlusResponseResultsExecutiveElements](docs/Model/IntelliscorePlusResponseResultsExecutiveElements.md)
- [IntelliscorePlusResponseResultsIntelliscoreFactorsInner](docs/Model/IntelliscorePlusResponseResultsIntelliscoreFactorsInner.md)
- [IntelliscorePlusResponseResultsIntelliscoreFactorsInnerScoreFactor](docs/Model/IntelliscorePlusResponseResultsIntelliscoreFactorsInnerScoreFactor.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerCustomerDisputeStatement](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerCustomerDisputeStatement.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerLimitedProfile](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerLimitedProfile.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerModelInformation](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerModelInformation.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerProbability](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerProbability.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerPubliclyHeldCompany](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerPubliclyHeldCompany.md)
- [IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerScoreInfo](docs/Model/IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerScoreInfo.md)
- [JudgmentDetail](docs/Model/JudgmentDetail.md)
- [LeasingInformationResult](docs/Model/LeasingInformationResult.md)
- [LeasingInformationResultAddress](docs/Model/LeasingInformationResultAddress.md)
- [LicenseDetailsResult](docs/Model/LicenseDetailsResult.md)
- [LienDetail](docs/Model/LienDetail.md)
- [LienSummary](docs/Model/LienSummary.md)
- [LinkageBusinessAddress](docs/Model/LinkageBusinessAddress.md)
- [LinkageBusinessDetails](docs/Model/LinkageBusinessDetails.md)
- [LinkageBusinessDetailsBusinessType](docs/Model/LinkageBusinessDetailsBusinessType.md)
- [LinkageCorporateFinancialData](docs/Model/LinkageCorporateFinancialData.md)
- [LinkageCorporateRegistration](docs/Model/LinkageCorporateRegistration.md)
- [LinkageCorporateRegistrationStatusCode](docs/Model/LinkageCorporateRegistrationStatusCode.md)
- [LinkageDetails](docs/Model/LinkageDetails.md)
- [LinkageGDNDetails](docs/Model/LinkageGDNDetails.md)
- [LinkageGDNDetailsItemsInner](docs/Model/LinkageGDNDetailsItemsInner.md)
- [LinkageGDNDetailsItemsInnerRegionalBureau](docs/Model/LinkageGDNDetailsItemsInnerRegionalBureau.md)
- [LinkageKeys](docs/Model/LinkageKeys.md)
- [LinkageLocationDetails](docs/Model/LinkageLocationDetails.md)
- [LinkageLocationDetailsCanadaAddress](docs/Model/LinkageLocationDetailsCanadaAddress.md)
- [LinkageLocationDetailsForeignAddress1](docs/Model/LinkageLocationDetailsForeignAddress1.md)
- [LinkageLocationDetailsJapanAddress](docs/Model/LinkageLocationDetailsJapanAddress.md)
- [LinkageLocationDetailsUsAddress](docs/Model/LinkageLocationDetailsUsAddress.md)
- [LinkageModelScoreList](docs/Model/LinkageModelScoreList.md)
- [LinkageModelScoreListDataRecordListInner](docs/Model/LinkageModelScoreListDataRecordListInner.md)
- [LinkageModelScoreListDataRecordListInnerRiskBand](docs/Model/LinkageModelScoreListDataRecordListInnerRiskBand.md)
- [LinkageNAICSList](docs/Model/LinkageNAICSList.md)
- [LinkageNAICSListItemsInner](docs/Model/LinkageNAICSListItemsInner.md)
- [LinkageSICList](docs/Model/LinkageSICList.md)
- [LinkageSICListItemsInner](docs/Model/LinkageSICListItemsInner.md)
- [MatchingNameAndAddress](docs/Model/MatchingNameAndAddress.md)
- [MultiSegmentsRequest](docs/Model/MultiSegmentsRequest.md)
- [MultiSegmentsResponse](docs/Model/MultiSegmentsResponse.md)
- [MultiSegmentsResult](docs/Model/MultiSegmentsResult.md)
- [MultiSegmentsResultCommercialScore](docs/Model/MultiSegmentsResultCommercialScore.md)
- [MultiSegmentsResultCommercialScoreRiskClass](docs/Model/MultiSegmentsResultCommercialScoreRiskClass.md)
- [MultiSegmentsResultCreditStatus](docs/Model/MultiSegmentsResultCreditStatus.md)
- [MultiSegmentsResultFsrScore](docs/Model/MultiSegmentsResultFsrScore.md)
- [MultiSegmentsResultIstWatchInner](docs/Model/MultiSegmentsResultIstWatchInner.md)
- [MultiSegmentsResultJudgmentSummary](docs/Model/MultiSegmentsResultJudgmentSummary.md)
- [MultiSegmentsResultRiskDashboard](docs/Model/MultiSegmentsResultRiskDashboard.md)
- [MultiSegmentsResultTradePaymentTrends](docs/Model/MultiSegmentsResultTradePaymentTrends.md)
- [MultiSegmentsResultUccFilingsSummary](docs/Model/MultiSegmentsResultUccFilingsSummary.md)
- [NAICSCode](docs/Model/NAICSCode.md)
- [OFACMatchWarning](docs/Model/OFACMatchWarning.md)
- [PaymentTotalsResult](docs/Model/PaymentTotalsResult.md)
- [PremierProfilesHTMLResponse](docs/Model/PremierProfilesHTMLResponse.md)
- [PremierProfilesPDFResponse](docs/Model/PremierProfilesPDFResponse.md)
- [PremierProfilesResponse](docs/Model/PremierProfilesResponse.md)
- [PremierProfilesResponseAllOfResults](docs/Model/PremierProfilesResponseAllOfResults.md)
- [PremierProfilesResponseAllOfResultsBondDetails](docs/Model/PremierProfilesResponseAllOfResultsBondDetails.md)
- [PremierProfilesResponseAllOfResultsCommercialBankInformation](docs/Model/PremierProfilesResponseAllOfResultsCommercialBankInformation.md)
- [PremierProfilesResponseAllOfResultsIndustryPaymentTrends](docs/Model/PremierProfilesResponseAllOfResultsIndustryPaymentTrends.md)
- [PremierProfilesResponseAllOfResultsInsuranceDetails](docs/Model/PremierProfilesResponseAllOfResultsInsuranceDetails.md)
- [PremierProfilesResponseAllOfResultsStocks](docs/Model/PremierProfilesResponseAllOfResultsStocks.md)
- [PremierProfilesResponseAllOfResultsUccFilingsSummary](docs/Model/PremierProfilesResponseAllOfResultsUccFilingsSummary.md)
- [ProprietorNameAndAddress](docs/Model/ProprietorNameAndAddress.md)
- [QuickSearchRequest](docs/Model/QuickSearchRequest.md)
- [QuickSearchResponse](docs/Model/QuickSearchResponse.md)
- [QuickSearchResponseResultsInner](docs/Model/QuickSearchResponseResultsInner.md)
- [ReverseAddresses](docs/Model/ReverseAddresses.md)
- [ReverseAddressesResponse](docs/Model/ReverseAddressesResponse.md)
- [ReversePhones](docs/Model/ReversePhones.md)
- [ReversePhonesResponse](docs/Model/ReversePhonesResponse.md)
- [ReverseTaxIDsResponse](docs/Model/ReverseTaxIDsResponse.md)
- [ReverseTaxIds](docs/Model/ReverseTaxIds.md)
- [RiskDashboardsResponse](docs/Model/RiskDashboardsResponse.md)
- [RiskDashboardsResponseAllOfResults](docs/Model/RiskDashboardsResponseAllOfResults.md)
- [SICCode](docs/Model/SICCode.md)
- [ScoreFactors](docs/Model/ScoreFactors.md)
- [ScoreInformation](docs/Model/ScoreInformation.md)
- [ScoreInformationCommercialScore](docs/Model/ScoreInformationCommercialScore.md)
- [ScoreInformationCommercialScoreRiskClass](docs/Model/ScoreInformationCommercialScoreRiskClass.md)
- [ScoreInformationFsrScore](docs/Model/ScoreInformationFsrScore.md)
- [ScoreInformationFsrScoreRiskClass](docs/Model/ScoreInformationFsrScoreRiskClass.md)
- [ScoreTrends](docs/Model/ScoreTrends.md)
- [ScoresResponse](docs/Model/ScoresResponse.md)
- [ScoresResponseAllOfResults](docs/Model/ScoresResponseAllOfResults.md)
- [ScoresSearchRequest](docs/Model/ScoresSearchRequest.md)
- [ScoresSearchRequestCollectionScore](docs/Model/ScoresSearchRequestCollectionScore.md)
- [ScoresSearchResponse](docs/Model/ScoresSearchResponse.md)
- [ScoresSearchResponseAllOfResults](docs/Model/ScoresSearchResponseAllOfResults.md)
- [SearchRequest](docs/Model/SearchRequest.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [SearchResult](docs/Model/SearchResult.md)
- [TaxIdType](docs/Model/TaxIdType.md)
- [TradeLine](docs/Model/TradeLine.md)
- [TradePaymentExperiences](docs/Model/TradePaymentExperiences.md)
- [TradePaymentExperiencesObject](docs/Model/TradePaymentExperiencesObject.md)
- [TradePaymentExperiencesResult](docs/Model/TradePaymentExperiencesResult.md)
- [TradePaymentExperiencesResultAccountBalance](docs/Model/TradePaymentExperiencesResultAccountBalance.md)
- [TradePaymentExperiencesResultNewlyReportedIndicator](docs/Model/TradePaymentExperiencesResultNewlyReportedIndicator.md)
- [TradePaymentExperiencesResultPaymentIndicator](docs/Model/TradePaymentExperiencesResultPaymentIndicator.md)
- [TradePaymentExperiencesResultRecentHighCredit](docs/Model/TradePaymentExperiencesResultRecentHighCredit.md)
- [TradePaymentExperiencesResultTradelineFlag](docs/Model/TradePaymentExperiencesResultTradelineFlag.md)
- [TradePaymentSummary](docs/Model/TradePaymentSummary.md)
- [TradePaymentTotals](docs/Model/TradePaymentTotals.md)
- [TradePaymentTrend](docs/Model/TradePaymentTrend.md)
- [UCCFilingsDetail](docs/Model/UCCFilingsDetail.md)
- [UCCFilingsDetailOriginalUCCFilingsInfo](docs/Model/UCCFilingsDetailOriginalUCCFilingsInfo.md)
- [UCCFilingsSummary](docs/Model/UCCFilingsSummary.md)
- [UCCFilingsTrends](docs/Model/UCCFilingsTrends.md)
- [UccCoDebtors](docs/Model/UccCoDebtors.md)

## Authorization

Authentication schemes defined for the API:
### OauthSecurity

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: 
    - **admin**: admin scope

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.3`
    - Generator version: `7.17.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
