<?php
/**
 * TradesResponseExample
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
 * TradesResponseExample Class Doc Comment
 *
 * @category Class
 * @description &lt;div&gt;   &lt;p&gt;Example Business Trades Response&lt;/p&gt;   &lt;pre&gt;   {       {         \&quot;requestId\&quot;: \&quot;ec55cca0-9342-11e7-bddf-ebd4476c3102\&quot;,         \&quot;success\&quot;: true,         \&quot;results\&quot;: {           \&quot;businessHeader\&quot;: {             \&quot;bin\&quot;: \&quot;700000001\&quot;,             \&quot;businessName\&quot;: \&quot;POCUMTUCK VALLEY MEMORIAL ASSOCIATION\&quot;,             \&quot;address\&quot;: {               \&quot;street\&quot;: \&quot;7 MEMORIAL ST\&quot;,               \&quot;city\&quot;: \&quot;DEERFIELD\&quot;,               \&quot;state\&quot;: \&quot;MA\&quot;,               \&quot;zip\&quot;: \&quot;01342\&quot;,               \&quot;zipExtension\&quot;: \&quot;5004\&quot;             },             \&quot;phone\&quot;: \&quot;+14137747476\&quot;,             \&quot;taxId\&quot;: null,             \&quot;websiteUrl\&quot;: \&quot;deerfield-ma.org\&quot;,             \&quot;legalBusinessName\&quot;: \&quot;POCUMTUCK VALLEY MEMORIAL ASSOCIATION\&quot;,             \&quot;dbaNames\&quot;: null,             \&quot;customerDisputeIndicator\&quot;: false           },           \&quot;tradePaymentSummary\&quot;: {             \&quot;currentDbt\&quot;: 1,             \&quot;monthlyAverageDbt\&quot;: 0,             \&quot;highestDbt6Months\&quot;: 1,             \&quot;highestDbt5Quarters\&quot;: 0,             \&quot;allTradelineCount\&quot;: 11,             \&quot;allTradelineBalance\&quot;: 4000,             \&quot;currentTradelineCount\&quot;: 10,             \&quot;currentAccountBalance\&quot;: 1200,             \&quot;medianCreditAmountExtended\&quot;: 300,             \&quot;singleHighCredit\&quot;: 6600           },           \&quot;tradePaymentTotals\&quot;: {             \&quot;tradelines\&quot;: {               \&quot;tradelineCount\&quot;: 11,               \&quot;currentDbt\&quot;: null,               \&quot;totalHighCreditAmount\&quot;: {                 \&quot;amount\&quot;: 17300               },               \&quot;totalAccountBalance\&quot;: {                 \&quot;amount\&quot;: 4000               },               \&quot;currentPercentage\&quot;: 99,               \&quot;dbt30\&quot;: 1,               \&quot;dbt60\&quot;: 0,               \&quot;dbt90\&quot;: 0,               \&quot;dbt91Plus\&quot;: 0             },             \&quot;newlyReportedTradelines\&quot;: {               \&quot;tradelineCount\&quot;: 0,               \&quot;currentDbt\&quot;: 0,               \&quot;totalHighCreditAmount\&quot;: {                 \&quot;amount\&quot;: 0               },               \&quot;totalAccountBalance\&quot;: {                 \&quot;amount\&quot;: 0               },               \&quot;currentPercentage\&quot;: 0,               \&quot;dbt30\&quot;: 0,               \&quot;dbt60\&quot;: 0,               \&quot;dbt90\&quot;: 0,               \&quot;dbt91Plus\&quot;: 0             },             \&quot;continuouslyReportedTradelines\&quot;: {               \&quot;tradelineCount\&quot;: 1,               \&quot;currentDbt\&quot;: 1,               \&quot;totalHighCreditAmount\&quot;: {                 \&quot;amount\&quot;: 11500               },               \&quot;totalAccountBalance\&quot;: {                 \&quot;amount\&quot;: 1200               },               \&quot;currentPercentage\&quot;: 94,               \&quot;dbt30\&quot;: 6,               \&quot;dbt60\&quot;: 0,               \&quot;dbt90\&quot;: 0,               \&quot;dbt91Plus\&quot;: 0             },             \&quot;combinedTradelines\&quot;: {               \&quot;tradelineCount\&quot;: 10,               \&quot;currentDbt\&quot;: 1,               \&quot;totalHighCreditAmount\&quot;: {                 \&quot;amount\&quot;: 11500               },               \&quot;totalAccountBalance\&quot;: {                 \&quot;amount\&quot;: 1200               },               \&quot;currentPercentage\&quot;: 94,               \&quot;dbt30\&quot;: 6,               \&quot;dbt60\&quot;: 0,               \&quot;dbt90\&quot;: 0,               \&quot;dbt91Plus\&quot;: 0             },             \&quot;additionalTradelines\&quot;: {               \&quot;tradelineCount\&quot;: 1,               \&quot;currentDbt\&quot;: null,               \&quot;totalHighCreditAmount\&quot;: {                 \&quot;amount\&quot;: 5800               },               \&quot;totalAccountBalance\&quot;: {                 \&quot;amount\&quot;: 2800               },               \&quot;currentPercentage\&quot;: 100,               \&quot;dbt30\&quot;: 0,               \&quot;dbt60\&quot;: 0,               \&quot;dbt90\&quot;: 0,               \&quot;dbt91Plus\&quot;: 0             }           },           \&quot;tradePaymentExperiences\&quot;: {             \&quot;tradeNewAndContinuous\&quot;: [               {                 \&quot;businessCategory\&quot;: \&quot;ACCT SVCS\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-06-01\&quot;,                 \&quot;dateLastActivity\&quot;: null,                 \&quot;terms\&quot;: \&quot;VARIED\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 200                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 100                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;CERAMICS\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;dateLastActivity\&quot;: null,                 \&quot;terms\&quot;: \&quot;NET 30\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;currentPercentage\&quot;: 0,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;COMMUNICTN\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;dateLastActivity\&quot;: null,                 \&quot;terms\&quot;: \&quot;VARIED\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 200                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 100                 },                 \&quot;currentPercentage\&quot;: 49,                 \&quot;dbt30\&quot;: 51,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;COMPUTERS\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-06-01\&quot;,                 \&quot;dateLastActivity\&quot;: null,                 \&quot;terms\&quot;: \&quot;CONTRCT\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 6600                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;currentPercentage\&quot;: 0,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;COMPUTERS\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-06-01\&quot;,                 \&quot;dateLastActivity\&quot;: \&quot;2009-03-01\&quot;,                 \&quot;terms\&quot;: \&quot;CREDIT\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;currentPercentage\&quot;: 0,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;comments\&quot;: \&quot;ACCTCLOSED\&quot;,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;FINCL SVCS\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-06-01\&quot;,                 \&quot;dateLastActivity\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;terms\&quot;: \&quot;NET 30\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 2100                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 700                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;FINCL SVCS\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;dateLastActivity\&quot;: \&quot;2015-04-01\&quot;,                 \&quot;terms\&quot;: \&quot;VARIED\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 300                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 100                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;comments\&quot;: \&quot;SATSFTRY\&quot;,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;LUMBR&amp;WOOD\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-04-01\&quot;,                 \&quot;dateLastActivity\&quot;: null,                 \&quot;terms\&quot;: \&quot;NET 30\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 200                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;currentPercentage\&quot;: 0,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;OFFC SUPPL\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;dateLastActivity\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;terms\&quot;: \&quot;CREDIT\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 1900                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 200                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               },               {                 \&quot;businessCategory\&quot;: \&quot;PLBG SUPLR\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-04-01\&quot;,                 \&quot;dateLastActivity\&quot;: \&quot;2013-12-01\&quot;,                 \&quot;terms\&quot;: \&quot;2/10N30\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 0                 },                 \&quot;currentPercentage\&quot;: 0,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               }             ],             \&quot;tradeAdditional\&quot;: [               {                 \&quot;businessCategory\&quot;: \&quot;LEASING\&quot;,                 \&quot;dateReported\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;dateLastActivity\&quot;: null,                 \&quot;terms\&quot;: \&quot;CONTRCT\&quot;,                 \&quot;recentHighCredit\&quot;: {                   \&quot;amount\&quot;: 5800                 },                 \&quot;accountBalance\&quot;: {                   \&quot;amount\&quot;: 2800                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0,                 \&quot;newlyReportedIndicator\&quot;: false,                 \&quot;customerDisputeIndicator\&quot;: false               }             ]           },           \&quot;tradePaymentTrends\&quot;: {             \&quot;monthlyTrends\&quot;: [               {                 \&quot;date\&quot;: \&quot;2017-08-01\&quot;,                 \&quot;dbt\&quot;: 1,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 1200                 },                 \&quot;currentPercentage\&quot;: 94,                 \&quot;dbt30\&quot;: 6,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2015-06-01\&quot;,                 \&quot;dbt\&quot;: 1,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 1800                 },                 \&quot;currentPercentage\&quot;: 96,                 \&quot;dbt30\&quot;: 4,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2015-05-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 2300                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2015-04-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 2800                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2015-03-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 900                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2015-02-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 2200                 },                 \&quot;currentPercentage\&quot;: 99,                 \&quot;dbt30\&quot;: 1,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2015-01-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 1800                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               }             ],             \&quot;quarterlyTrends\&quot;: [               {                 \&quot;date\&quot;: \&quot;2015-01-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 2000                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2014-10-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 1900                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2014-07-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 1500                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2014-04-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 4500                 },                 \&quot;currentPercentage\&quot;: 100,                 \&quot;dbt30\&quot;: 0,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               },               {                 \&quot;date\&quot;: \&quot;2014-01-01\&quot;,                 \&quot;dbt\&quot;: 0,                 \&quot;totalAccountBalance\&quot;: {                   \&quot;amount\&quot;: 5400                 },                 \&quot;currentPercentage\&quot;: 99,                 \&quot;dbt30\&quot;: 1,                 \&quot;dbt60\&quot;: 0,                 \&quot;dbt90\&quot;: 0,                 \&quot;dbt91Plus\&quot;: 0               }             ]           }         }       }   }   &lt;/pre&gt; &lt;/div&gt;
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradesResponseExample implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'trades_response_example';

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


