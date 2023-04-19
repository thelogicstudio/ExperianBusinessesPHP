<?php
/**
 * PremierprofilesResponseExample
 *
 * PHP version 5
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Businesses
 *
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
 *
 * OpenAPI spec version: 1.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.31
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExperianBusinessesPHP\Model;

use \ArrayAccess;
use \TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * PremierprofilesResponseExample Class Doc Comment
 *
 * @category Class
 * @description &lt;div&gt;   &lt;p&gt;Example Premier Profile Response&lt;/p&gt;   &lt;pre&gt;     {         \&quot;requestId\&quot;: \&quot;rrt-0dd909dec35632e95-b-ea-4319-49428491-1\&quot;,         \&quot;success\&quot;: true,         \&quot;comments\&quot;: \&quot;API TEST\&quot;,         \&quot;results\&quot;: {             \&quot;businessHeader\&quot;: {                 \&quot;bin\&quot;: \&quot;800914632\&quot;,                 \&quot;businessName\&quot;: \&quot;CROCKER INDUSTRIES\&quot;,                 \&quot;address\&quot;: {                     \&quot;street\&quot;: \&quot;100 MAIN\&quot;,                     \&quot;city\&quot;: \&quot;PHOENIX\&quot;,                     \&quot;state\&quot;: \&quot;AZ\&quot;,                     \&quot;zip\&quot;: \&quot;85032\&quot;,                     \&quot;zipExtension\&quot;: null                 },                 \&quot;foreignCountry\&quot;: false,                 \&quot;phone\&quot;: \&quot;+18887859790\&quot;,                 \&quot;taxId\&quot;: null,                 \&quot;websiteUrl\&quot;: null,                 \&quot;legalBusinessName\&quot;: null,                 \&quot;dbaNames\&quot;: [],                 \&quot;corporateLinkageIndicator\&quot;: false,                 \&quot;matchingBranchAddress\&quot;: {},                 \&quot;branchLocation\&quot;: {},                 \&quot;customerDisputeIndicator\&quot;: true             },             \&quot;corporateRegistration\&quot;: {                 \&quot;originalFilingDate\&quot;: null,                 \&quot;recentFilingDate\&quot;: null,                 \&quot;incorporatedDate\&quot;: null,                 \&quot;existenceTermYears\&quot;: null,                 \&quot;existenceTermDate\&quot;: null,                 \&quot;federalTaxID\&quot;: null,                 \&quot;statusFlag\&quot;: {},                 \&quot;statusDescription\&quot;: null,                 \&quot;agentAddress\&quot;: {                     \&quot;zip\&quot;: null                 }             },             \&quot;businessFacts\&quot;: {                 \&quot;fileEstablishedFlag\&quot;: {                     \&quot;code\&quot;: \&quot;P\&quot;,                     \&quot;definition\&quot;: \&quot;Business was added prior to Jan 1977\&quot;                 },                 \&quot;fileEstablishedDate\&quot;: \&quot;1977-01-01\&quot;,                 \&quot;dateOfIncorporation\&quot;: null,                 \&quot;businessType\&quot;: \&quot;Corporation\&quot;,                 \&quot;nonProfitIndicator\&quot;: false,                 \&quot;publicIndicator\&quot;: false,                 \&quot;locationEmployeeSizeCode\&quot;: null,                 \&quot;yearsInBusinessIndicator\&quot;: {                     \&quot;code\&quot;: \&quot;A\&quot;,                     \&quot;definition\&quot;: \&quot;Under 1 Year\&quot;                 },                 \&quot;yearsInBusiness\&quot;: null,                 \&quot;locationEmployeeSize\&quot;: null,                 \&quot;salesSizeCode\&quot;: null,                 \&quot;locationSalesRevenue\&quot;: null,                 \&quot;employeeSizeCode\&quot;: null,                 \&quot;salesRevenue\&quot;: null,                 \&quot;employeeSize\&quot;: null             },             \&quot;expandedCreditSummary\&quot;: {                 \&quot;tradeCollectionCount\&quot;: 0,                 \&quot;commercialFraudRiskIndicatorCount\&quot;: 1,                 \&quot;oldestBankruptcyDate\&quot;: null,                 \&quot;mostRecentBankruptcyDate\&quot;: null,                 \&quot;oldestTaxLienDate\&quot;: null,                 \&quot;mostRecentTaxLienDate\&quot;: null,                 \&quot;oldestJudgmentDate\&quot;: null,                 \&quot;mostRecentJudgmentDate\&quot;: null,                 \&quot;oldestCollectionDate\&quot;: null,                 \&quot;mostRecentCollectionDate\&quot;: null,                 \&quot;monthlyAverageDbt\&quot;: 0,                 \&quot;taxLienCount\&quot;: null,                 \&quot;judgmentCount\&quot;: null,                 \&quot;collectionCount\&quot;: null,                 \&quot;collectionCountPast24Months\&quot;: null,                 \&quot;collectionBalance\&quot;: null,                 \&quot;legalBalance\&quot;: null,                 \&quot;currentAccountBalance\&quot;: null,                 \&quot;currentTradelineCount\&quot;: null,                 \&quot;activeTradelineCount\&quot;: null,                 \&quot;currentDbt\&quot;: null,                 \&quot;uccFilings\&quot;: null,                 \&quot;uccDerogatoryCount\&quot;: null,                 \&quot;highestDbt6Months\&quot;: 0,                 \&quot;highestDbt5Quarters\&quot;: 0,                 \&quot;oldestUccDate\&quot;: null,                 \&quot;mostRecentUccDate\&quot;: null,                 \&quot;bankruptcyIndicator\&quot;: false,                 \&quot;allTradelineBalance\&quot;: null,                 \&quot;allTradelineCount\&quot;: null,                 \&quot;bankruptcyCount\&quot;: null,                 \&quot;averageBalance5Quarters\&quot;: null,                 \&quot;highBalance6Months\&quot;: null,                 \&quot;lowBalance6Months\&quot;: null,                 \&quot;openCollectionBalance\&quot;: null,                 \&quot;openCollectionCount\&quot;: null,                 \&quot;singleHighCredit\&quot;: null,                 \&quot;tradeCollectionBalance\&quot;: null,                 \&quot;judgmentIndicator\&quot;: false,                 \&quot;taxLienIndicator\&quot;: false,                 \&quot;ofacMatchWarning\&quot;: {                     \&quot;code\&quot;: \&quot;N\&quot;,                     \&quot;definition\&quot;: \&quot;This business did not match to OFAC\&quot;                 },                 \&quot;victimStatementIndicator\&quot;: true,                 \&quot;unsummarizedTradelineCount\&quot;: null             },             \&quot;executiveSummary\&quot;: {                 \&quot;businessDbt\&quot;: {},                 \&quot;predictedDbtDate\&quot;: null,                 \&quot;industryDbt\&quot;: null,                 \&quot;allIndustryDbt\&quot;: null,                 \&quot;industryPaymentComparison\&quot;: {},                 \&quot;paymentTrendIndicator\&quot;: {},                 \&quot;commonTerms\&quot;: {},                 \&quot;lowestTotalAccountBalance\&quot;: null,                 \&quot;highestTotalAccountBalance\&quot;: null,                 \&quot;currentTotalAccountBalance\&quot;: null             },             \&quot;economicDiversity\&quot;: {                 \&quot;minorityOwnedIndicator\&quot;: false,                 \&quot;womenOwnedIndicator\&quot;: false,                 \&quot;disadvantagedIndicator\&quot;: false,                 \&quot;sba8aIndicator\&quot;: false,                 \&quot;hubZoneIndicator\&quot;: false,                 \&quot;veteranOwnedIndicator\&quot;: false,                 \&quot;disabledVeteranOwnedIndicator\&quot;: false,                 \&quot;historicalBlackCollegeAndUniversitiesIndicator\&quot;: false,                 \&quot;sbaCertifiedIndicator\&quot;: false             },             \&quot;governmentActivity\&quot;: {                 \&quot;activeDate\&quot;: null,                 \&quot;terminationDate\&quot;: null             },             \&quot;tradePaymentExperiences\&quot;: null,             \&quot;additionalPaymentExperiences\&quot;: null,             \&quot;paymentTotals\&quot;: null,             \&quot;monthlyPaymentTrends\&quot;: null,             \&quot;industryPaymentTrends\&quot;: null,             \&quot;quarterlyPaymentTrends\&quot;: null,             \&quot;collectionsDetail\&quot;: [],             \&quot;bankruptcyDetail\&quot;: [],             \&quot;taxLienDetail\&quot;: [],             \&quot;uccFilingsSummary\&quot;: {                 \&quot;uccFilingsTrends\&quot;: []             },             \&quot;uccFilingsDetail\&quot;: [                 null             ],             \&quot;judgmentDetail\&quot;: [],             \&quot;uccCoDebtors\&quot;: [],             \&quot;executiveInformation\&quot;: [],             \&quot;commercialFraudShieldSummary\&quot;: {                 \&quot;matchingBusinessIndicator\&quot;: \&quot;Primary Business\&quot;,                 \&quot;activeBusinessIndicator\&quot;: false,                 \&quot;businessVictimStatementIndicator\&quot;: true,                 \&quot;businessRiskTriggersIndicator\&quot;: false,                 \&quot;nameAddressVerificationIndicator\&quot;: true,                 \&quot;ofacMatchWarning\&quot;: {                     \&quot;code\&quot;: 1,                     \&quot;definition\&quot;: \&quot;No Match Found\&quot;                 },                 \&quot;businessRiskTriggersStatement\&quot;: []             },             \&quot;corporateLinkage\&quot;: [],             \&quot;inquiries\&quot;: [                 {                     \&quot;inquiryBusinessCategory\&quot;: \&quot;BUREAU\&quot;,                     \&quot;inquiryCount\&quot;: [                         {                             \&quot;month\&quot;: 5,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 4,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 3,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 2,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 1,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 12,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 11,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 10,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 9,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 0                         }                     ]                 },                 {                     \&quot;inquiryBusinessCategory\&quot;: \&quot;EQUIP LEAS\&quot;,                     \&quot;inquiryCount\&quot;: [                         {                             \&quot;month\&quot;: 5,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 4,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 3,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 2,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 1,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 12,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 11,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 10,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 9,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 0                         }                     ]                 },                 {                     \&quot;inquiryBusinessCategory\&quot;: \&quot;FINCL SVCS\&quot;,                     \&quot;inquiryCount\&quot;: [                         {                             \&quot;month\&quot;: 5,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 4,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 3,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 2                         },                         {                             \&quot;month\&quot;: 2,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 1,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 0                         },                         {                             \&quot;month\&quot;: 12,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 2                         },                         {                             \&quot;month\&quot;: 11,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 1                         },                         {                             \&quot;month\&quot;: 10,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 2                         },                         {                             \&quot;month\&quot;: 9,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 2                         }                     ]                 },                 {                     \&quot;inquiryBusinessCategory\&quot;: \&quot;GENERAL\&quot;,                     \&quot;inquiryCount\&quot;: [                         {                             \&quot;month\&quot;: 5,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 3                         },                         {                             \&quot;month\&quot;: 4,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 7                         },                         {                             \&quot;month\&quot;: 3,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 16                         },                         {                             \&quot;month\&quot;: 2,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 7                         },                         {                             \&quot;month\&quot;: 1,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 5                         },                         {                             \&quot;month\&quot;: 12,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 9                         },                         {                             \&quot;month\&quot;: 11,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 6                         },                         {                             \&quot;month\&quot;: 10,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 9                         },                         {                             \&quot;month\&quot;: 9,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 7                         }                     ]                 },                 {                     \&quot;inquiryBusinessCategory\&quot;: \&quot;TOTALS\&quot;,                     \&quot;inquiryCount\&quot;: [                         {                             \&quot;month\&quot;: 5,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 4                         },                         {                             \&quot;month\&quot;: 4,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 9                         },                         {                             \&quot;month\&quot;: 3,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 19                         },                         {                             \&quot;month\&quot;: 2,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 8                         },                         {                             \&quot;month\&quot;: 1,                             \&quot;year\&quot;: 2021,                             \&quot;count\&quot;: 6                         },                         {                             \&quot;month\&quot;: 12,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 12                         },                         {                             \&quot;month\&quot;: 11,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 8                         },                         {                             \&quot;month\&quot;: 10,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 12                         },                         {                             \&quot;month\&quot;: 9,                             \&quot;year\&quot;: 2020,                             \&quot;count\&quot;: 9                         }                     ]                 }             ],             \&quot;proprietorNameAndAddress\&quot;: [],             \&quot;competitors\&quot;: [],             \&quot;commercialBankInformation\&quot;: [],             \&quot;leasingInformation\&quot;: [],             \&quot;licenseDetails\&quot;: [],             \&quot;bondDetails\&quot;: [],             \&quot;insuranceDetails\&quot;: [],             \&quot;scoreInformation\&quot;: {                 \&quot;fsrScore\&quot;: {                     \&quot;publiclyHeldCompany\&quot;: false,                     \&quot;limitedProfile\&quot;: false,                     \&quot;score\&quot;: 628,                     \&quot;profileNumber\&quot;: \&quot;I800687541\&quot;,                     \&quot;modelCode\&quot;: \&quot;000253\&quot;,                     \&quot;modelTitle\&quot;: \&quot;FINANCIAL STABILITY RISK SCORE V2 ML\&quot;,                     \&quot;percentileRanking\&quot;: 6,                     \&quot;probability\&quot;: null,                     \&quot;riskClass\&quot;: {                         \&quot;code\&quot;: null,                         \&quot;definition\&quot;: \&quot;MEDIUM TO HIGH RISK\&quot;                     },                     \&quot;customerDisputeIndicator\&quot;: false                 },                 \&quot;commercialScore\&quot;: {                     \&quot;publiclyHeldCompany\&quot;: false,                     \&quot;limitedProfile\&quot;: false,                     \&quot;score\&quot;: 611,                     \&quot;profileNumber\&quot;: \&quot;I800687541\&quot;,                     \&quot;modelCode\&quot;: \&quot;000254\&quot;,                     \&quot;modelTitle\&quot;: \&quot;INTELLISCORE PLUS V3 ML\&quot;,                     \&quot;percentileRanking\&quot;: 11,                     \&quot;probability\&quot;: null,                     \&quot;riskClass\&quot;: {                         \&quot;code\&quot;: null,                         \&quot;definition\&quot;: \&quot;MEDIUM TO HIGH RISK\&quot;                     },                     \&quot;customerDisputeIndicator\&quot;: false,                     \&quot;customModelCode\&quot;: \&quot;01\&quot;,                     \&quot;recommendedCreditLimitAmount\&quot;: 1200,                     \&quot;highCreditLimitAmount\&quot;: null                 },                 \&quot;fsrScoreFactors\&quot;: [                     {                         \&quot;code\&quot;: \&quot;000074\&quot;,                         \&quot;definition\&quot;: \&quot;RISK ASSOCIATED WITH INDUSTRY IS HIGH\&quot;                     },                     {                         \&quot;code\&quot;: \&quot;000050\&quot;,                         \&quot;definition\&quot;: \&quot;NUMBER OF COMMERCIAL TRADES WITH CASH PAYMENT TERM IS LOW\&quot;                     },                     {                         \&quot;code\&quot;: \&quot;000066\&quot;,                         \&quot;definition\&quot;: \&quot;PERCENT OF COMMERCIAL TRADES THAT ARE ACTIVE IS TOO LOW\&quot;                     },                     {                         \&quot;code\&quot;: \&quot;000051\&quot;,                         \&quot;definition\&quot;: \&quot;NUMBER OF COMMERCIAL TRADES WITH CONTRACT TERM IS TOO LOW\&quot;                     }                 ],                 \&quot;commercialScoreFactors\&quot;: [                     {                         \&quot;code\&quot;: \&quot;000067\&quot;,                         \&quot;definition\&quot;: \&quot;NUMBER OF COMMERCIAL INQUIRES IS HIGH\&quot;                     },                     {                         \&quot;code\&quot;: \&quot;000089\&quot;,                         \&quot;definition\&quot;: \&quot;PERCENTAGE OF COMMERCIAL TRADES THAT ARE ACTIVE IS TOO LOW\&quot;                     },                     {                         \&quot;code\&quot;: \&quot;001005\&quot;,                         \&quot;definition\&quot;: \&quot;NO REPORTED COMMERCIAL TRADES\&quot;                     },                     {                         \&quot;code\&quot;: \&quot;000104\&quot;,                         \&quot;definition\&quot;: \&quot;RISK ASSOCIATED WITH INDUSTRY IS HIGH\&quot;                     }                 ],                 \&quot;commercialScoreTrends\&quot;: [                     {                         \&quot;quarter\&quot;: \&quot;Jun-Aug\&quot;,                         \&quot;score\&quot;: 611,                         \&quot;industryScore\&quot;: null                     },                     {                         \&quot;quarter\&quot;: \&quot;Mar-May\&quot;,                         \&quot;score\&quot;: 611,                         \&quot;industryScore\&quot;: null                     },                     {                         \&quot;quarter\&quot;: \&quot;Dec-Feb\&quot;,                         \&quot;score\&quot;: 611,                         \&quot;industryScore\&quot;: null                     },                     {                         \&quot;quarter\&quot;: \&quot;Sep-Nov\&quot;,                         \&quot;score\&quot;: 999,                         \&quot;industryScore\&quot;: null                     }                 ],                 \&quot;fsrScoreTrends\&quot;: [                     {                         \&quot;quarter\&quot;: \&quot;Jun-Aug\&quot;,                         \&quot;score\&quot;: 628,                         \&quot;industryScore\&quot;: null                     },                     {                         \&quot;quarter\&quot;: \&quot;Mar-May\&quot;,                         \&quot;score\&quot;: 628,                         \&quot;industryScore\&quot;: null                     },                     {                         \&quot;quarter\&quot;: \&quot;Dec-Feb\&quot;,                         \&quot;score\&quot;: 628,                         \&quot;industryScore\&quot;: null                     },                     {                         \&quot;quarter\&quot;: \&quot;Sep-Nov\&quot;,                         \&quot;score\&quot;: 999,                         \&quot;industryScore\&quot;: null                     }                 ]             },             \&quot;sicCodes\&quot;: [                 {                     \&quot;code\&quot;: \&quot;7374\&quot;,                     \&quot;definition\&quot;: \&quot;COMPUTER PROCESSING &amp; DATA PREP SVCS\&quot;                 },                 {                     \&quot;code\&quot;: \&quot;7372\&quot;,                     \&quot;definition\&quot;: \&quot;COMPUTER SOFTWARE, PREPACKAGED\&quot;                 }             ],             \&quot;naicsCodes\&quot;: [                 {                     \&quot;code\&quot;: \&quot;518210\&quot;,                     \&quot;definition\&quot;: \&quot;Dat.    essing,Hosting, and Related Servic\&quot;                 },                 {                     \&quot;code\&quot;: \&quot;511210\&quot;,                     \&quot;definition\&quot;: \&quot;Software Publishers\&quot;                 }             ],             \&quot;fortune1000\&quot;: null,             \&quot;corporateFinancialInformation\&quot;: {                 \&quot;currentDate\&quot;: null,                 \&quot;fiscalYearEndDate\&quot;: null,                 \&quot;balanceSheets\&quot;: [],                 \&quot;operatingStatements\&quot;: [],                 \&quot;criticalDataAndFinancialRatios\&quot;: []             },             \&quot;contractSpendingSummary\&quot;: null,             \&quot;contractSpendingDetail\&quot;: [],             \&quot;consumerStatement\&quot;: [                 {                     \&quot;type\&quot;: {                         \&quot;code\&quot;: \&quot;  \&quot;,                         \&quot;definition\&quot;: \&quot;Not Available\&quot;                     },                     \&quot;dateReported\&quot;: \&quot;2010-02-28\&quot;,                     \&quot;text\&quot;: \&quot;BUSINESS REQUESTS CONTACT PRIOR TO GRANTING CREDIT\&quot;                 }             ],             \&quot;stocks\&quot;: {},             \&quot;commercialGovernmentEntityCode\&quot;: null         }     }            &lt;/pre&gt; &lt;/div&gt;
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PremierprofilesResponseExample implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'premierprofiles_response_example';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


