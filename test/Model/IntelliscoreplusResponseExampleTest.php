<?php
/**
 * IntelliscoreplusResponseExampleTest
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
 * Please update the test case below to test the model.
 */

namespace TheLogicStudio\ExperianBusinessesPHP;

/**
 * IntelliscoreplusResponseExampleTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div&gt;   &lt;p&gt;Intelliscore Plus Response&lt;/p&gt;   &lt;pre&gt;     {         \&quot;requestId\&quot;: \&quot;rrt-0c249783ab725ba4a-c-ea-851-39158372-3\&quot;,         \&quot;success\&quot;: true,         \&quot;comments\&quot;: \&quot;asd\&quot;,         \&quot;results\&quot;: {             \&quot;businessNameAndAddress\&quot;: [                 {                     \&quot;bin\&quot;: \&quot;800914632\&quot;,                     \&quot;businessName\&quot;: \&quot;CROCKER INDUSTRIES\&quot;,                     \&quot;address\&quot;: {                         \&quot;city\&quot;: \&quot;PHOENIX\&quot;,                         \&quot;street\&quot;: \&quot;100 MAIN\&quot;,                         \&quot;state\&quot;: \&quot;AZ\&quot;,                         \&quot;zip\&quot;: \&quot;85032\&quot;,                         \&quot;zipExtension\&quot;: \&quot;\&quot;                     },                     \&quot;phone\&quot;: \&quot;888-785-9790\&quot;,                     \&quot;sic\&quot;: {                         \&quot;code\&quot;: \&quot;7374\&quot;,                         \&quot;definition\&quot;: \&quot;COMPUTER PROCESSING &amp; DATA PREP SVCS\&quot;                     },                     \&quot;matchingNameAndAddress\&quot;: null,                     \&quot;profileDate\&quot;: \&quot;2021-08-31\&quot;,                     \&quot;profileTime\&quot;: \&quot;05:00:35\&quot;,                     \&quot;fileEstablishDate\&quot;: \&quot;1977-01-01\&quot;                 }             ],             \&quot;executiveElements\&quot;: {                 \&quot;bankruptcyCount\&quot;: 0,                 \&quot;earliestBankruptcyDate\&quot;: null,                 \&quot;mostRecentBankruptcyDate\&quot;: null,                 \&quot;taxLienCount\&quot;: 0,                 \&quot;earliestTaxLienDate\&quot;: null,                 \&quot;mostRecentTaxLienDate\&quot;: null,                 \&quot;judgmentCount\&quot;: 0,                 \&quot;earliestJudgmentDate\&quot;: null,                 \&quot;mostRecentJudgmentDate\&quot;: null,                 \&quot;collectionCount\&quot;: 0,                 \&quot;legalBalance\&quot;: 0,                 \&quot;uccFilings\&quot;: 0,                 \&quot;uccDerogatoryCount\&quot;: 0,                 \&quot;currentAccountBalance\&quot;: 0,                 \&quot;currentTradelineCount\&quot;: 0,                 \&quot;monthlyAverageDbt\&quot;: 0,                 \&quot;highestDbt6Months\&quot;: 0,                 \&quot;highestDbt5Quarters\&quot;: null,                 \&quot;activeTradelineCount\&quot;: 0,                 \&quot;allTradelineBalance\&quot;: 0,                 \&quot;allTradelineCount\&quot;: 0,                 \&quot;averageBalance5Quarters\&quot;: 0,                 \&quot;singleLineHighCredit\&quot;: 0,                 \&quot;lowBalance6Months\&quot;: 0,                 \&quot;highBalance6Months\&quot;: 0,                 \&quot;earliestCollectionDate\&quot;: null,                 \&quot;mostRecentCollectionDate\&quot;: null,                 \&quot;currentDbt\&quot;: null,                 \&quot;yearOfIncorporation\&quot;: null,                 \&quot;taxId\&quot;: \&quot;\&quot;,                 \&quot;earliestUccDate\&quot;: null,                 \&quot;mostRecentUccDate\&quot;: null,                 \&quot;bankruptcyIndicator\&quot;: false,                 \&quot;judgmentIndicator\&quot;: false,                 \&quot;taxLienIndicator\&quot;: false,                 \&quot;inquiriesPrevious9Months\&quot;: 87,                 \&quot;lienBalance\&quot;: 0,                 \&quot;judgmentBalance\&quot;: 0             },             \&quot;intelliscoreScoreInformation\&quot;: [                 {                     \&quot;publiclyHeldCompany\&quot;: {                         \&quot;code\&quot;: \&quot;N\&quot;,                         \&quot;definition\&quot;: \&quot;\&quot;                     },                     \&quot;limitedProfile\&quot;: {                         \&quot;code\&quot;: \&quot;N\&quot;,                         \&quot;definition\&quot;: \&quot;\&quot;                     },                     \&quot;scoreInfo\&quot;: {                         \&quot;score\&quot;: 611,                         \&quot;scoreSign\&quot;: \&quot; \&quot;                     },                     \&quot;profileNumber\&quot;: \&quot;I800687549\&quot;,                     \&quot;modelInformation\&quot;: {                         \&quot;modelCode\&quot;: \&quot;000254\&quot;,                         \&quot;modelTitle\&quot;: \&quot;INTELLISCORE PLUS V3 ML\&quot;,                         \&quot;customModelCode\&quot;: \&quot;01\&quot;                     },                     \&quot;percentileRanking\&quot;: 11,                     \&quot;probability\&quot;: {                         \&quot;amount\&quot;: null,                         \&quot;text\&quot;: \&quot;\&quot;                     },                     \&quot;action\&quot;: \&quot;MEDIUM TO HIGH RISK\&quot;,                     \&quot;riskClass\&quot;: \&quot;4\&quot;                 }             ],             \&quot;intelliscoreFactors\&quot;: [                 {                     \&quot;scoreFactor\&quot;: {                         \&quot;code\&quot;: \&quot;000067\&quot;,                         \&quot;definition\&quot;: \&quot;NUMBER OF COMMERCIAL INQUIRES IS HIGH\&quot;                     },                     \&quot;modelCode\&quot;: \&quot;000254\&quot;                 },                 {                     \&quot;scoreFactor\&quot;: {                         \&quot;code\&quot;: \&quot;000089\&quot;,                         \&quot;definition\&quot;: \&quot;PERCENTAGE OF COMMERCIAL TRADES THAT ARE ACTIVE IS TOO LOW\&quot;                     },                     \&quot;modelCode\&quot;: \&quot;000254\&quot;                 },                 {                     \&quot;scoreFactor\&quot;: {                         \&quot;code\&quot;: \&quot;001005\&quot;,                         \&quot;definition\&quot;: \&quot;NO REPORTED COMMERCIAL TRADES\&quot;                     },                     \&quot;modelCode\&quot;: \&quot;000254\&quot;                 },                 {                     \&quot;scoreFactor\&quot;: {                         \&quot;code\&quot;: \&quot;000104\&quot;,                         \&quot;definition\&quot;: \&quot;RISK ASSOCIATED WITH INDUSTRY IS HIGH\&quot;                     },                     \&quot;modelCode\&quot;: \&quot;000254\&quot;                 }             ]         }     }             &lt;/pre&gt; &lt;/div&gt;
 * @package     TheLogicStudio\ExperianBusinessesPHP
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IntelliscoreplusResponseExampleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "IntelliscoreplusResponseExample"
     */
    public function testIntelliscoreplusResponseExample()
    {
    }
}
