<?php
/**
 * BizAggregatesTest
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
 * BizAggregatesTest Class Doc Comment
 *
 * @category    Class
 * @description Object containing business aggregates (BizAggs)
 * @package     TheLogicStudio\ExperianBusinessesPHP
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BizAggregatesTest extends \PHPUnit_Framework_TestCase
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
     * Test "BizAggregates"
     */
    public function testBizAggregates()
    {
    }

    /**
     * Test attribute "atc039"
     */
    public function testPropertyAtc039()
    {
    }

    /**
     * Test attribute "ctb019"
     */
    public function testPropertyCtb019()
    {
    }

    /**
     * Test attribute "jdc008"
     */
    public function testPropertyJdc008()
    {
    }

    /**
     * Test attribute "ntb019"
     */
    public function testPropertyNtb019()
    {
    }

    /**
     * Test attribute "ntc032"
     */
    public function testPropertyNtc032()
    {
    }

    /**
     * Test attribute "otb001"
     */
    public function testPropertyOtb001()
    {
    }

    /**
     * Test attribute "otc006"
     */
    public function testPropertyOtc006()
    {
    }

    /**
     * Test attribute "rtb019"
     */
    public function testPropertyRtb019()
    {
    }

    /**
     * Test attribute "rtc048"
     */
    public function testPropertyRtc048()
    {
    }

    /**
     * Test attribute "ttb021"
     */
    public function testPropertyTtb021()
    {
    }

    /**
     * Test attribute "ttb022"
     */
    public function testPropertyTtb022()
    {
    }

    /**
     * Test attribute "ttb028"
     */
    public function testPropertyTtb028()
    {
    }

    /**
     * Test attribute "ttb029"
     */
    public function testPropertyTtb029()
    {
    }

    /**
     * Test attribute "ttb030"
     */
    public function testPropertyTtb030()
    {
    }

    /**
     * Test attribute "ttb031"
     */
    public function testPropertyTtb031()
    {
    }

    /**
     * Test attribute "ttb032"
     */
    public function testPropertyTtb032()
    {
    }

    /**
     * Test attribute "ttc050"
     */
    public function testPropertyTtc050()
    {
    }

    /**
     * Test attribute "ttp085"
     */
    public function testPropertyTtp085()
    {
    }

    /**
     * Test attribute "ttp086"
     */
    public function testPropertyTtp086()
    {
    }

    /**
     * Test attribute "txb005"
     */
    public function testPropertyTxb005()
    {
    }

    /**
     * Test attribute "txc008"
     */
    public function testPropertyTxc008()
    {
    }

    /**
     * Test attribute "acc001"
     */
    public function testPropertyAcc001()
    {
    }

    /**
     * Test attribute "acc002"
     */
    public function testPropertyAcc002()
    {
    }

    /**
     * Test attribute "acc003"
     */
    public function testPropertyAcc003()
    {
    }

    /**
     * Test attribute "acc004"
     */
    public function testPropertyAcc004()
    {
    }

    /**
     * Test attribute "acc005"
     */
    public function testPropertyAcc005()
    {
    }

    /**
     * Test attribute "acc006"
     */
    public function testPropertyAcc006()
    {
    }

    /**
     * Test attribute "acc007"
     */
    public function testPropertyAcc007()
    {
    }

    /**
     * Test attribute "acc008"
     */
    public function testPropertyAcc008()
    {
    }

    /**
     * Test attribute "atb001"
     */
    public function testPropertyAtb001()
    {
    }

    /**
     * Test attribute "atb002"
     */
    public function testPropertyAtb002()
    {
    }

    /**
     * Test attribute "atb003"
     */
    public function testPropertyAtb003()
    {
    }

    /**
     * Test attribute "atb004"
     */
    public function testPropertyAtb004()
    {
    }

    /**
     * Test attribute "atb005"
     */
    public function testPropertyAtb005()
    {
    }

    /**
     * Test attribute "atb006"
     */
    public function testPropertyAtb006()
    {
    }

    /**
     * Test attribute "atb007"
     */
    public function testPropertyAtb007()
    {
    }

    /**
     * Test attribute "atb008"
     */
    public function testPropertyAtb008()
    {
    }

    /**
     * Test attribute "atb009"
     */
    public function testPropertyAtb009()
    {
    }

    /**
     * Test attribute "atb010"
     */
    public function testPropertyAtb010()
    {
    }

    /**
     * Test attribute "atb011"
     */
    public function testPropertyAtb011()
    {
    }

    /**
     * Test attribute "atb012"
     */
    public function testPropertyAtb012()
    {
    }

    /**
     * Test attribute "atb013"
     */
    public function testPropertyAtb013()
    {
    }

    /**
     * Test attribute "atb014"
     */
    public function testPropertyAtb014()
    {
    }

    /**
     * Test attribute "atb015"
     */
    public function testPropertyAtb015()
    {
    }

    /**
     * Test attribute "atb016"
     */
    public function testPropertyAtb016()
    {
    }

    /**
     * Test attribute "atb017"
     */
    public function testPropertyAtb017()
    {
    }

    /**
     * Test attribute "atb018"
     */
    public function testPropertyAtb018()
    {
    }

    /**
     * Test attribute "atb019"
     */
    public function testPropertyAtb019()
    {
    }

    /**
     * Test attribute "atc020"
     */
    public function testPropertyAtc020()
    {
    }

    /**
     * Test attribute "atc021"
     */
    public function testPropertyAtc021()
    {
    }

    /**
     * Test attribute "atc022"
     */
    public function testPropertyAtc022()
    {
    }

    /**
     * Test attribute "atc023"
     */
    public function testPropertyAtc023()
    {
    }

    /**
     * Test attribute "atc024"
     */
    public function testPropertyAtc024()
    {
    }

    /**
     * Test attribute "atc025"
     */
    public function testPropertyAtc025()
    {
    }

    /**
     * Test attribute "atc026"
     */
    public function testPropertyAtc026()
    {
    }

    /**
     * Test attribute "atc027"
     */
    public function testPropertyAtc027()
    {
    }

    /**
     * Test attribute "atc028"
     */
    public function testPropertyAtc028()
    {
    }

    /**
     * Test attribute "atc029"
     */
    public function testPropertyAtc029()
    {
    }

    /**
     * Test attribute "atc030"
     */
    public function testPropertyAtc030()
    {
    }

    /**
     * Test attribute "atc031"
     */
    public function testPropertyAtc031()
    {
    }

    /**
     * Test attribute "atc032"
     */
    public function testPropertyAtc032()
    {
    }

    /**
     * Test attribute "atd034"
     */
    public function testPropertyAtd034()
    {
    }

    /**
     * Test attribute "atd035"
     */
    public function testPropertyAtd035()
    {
    }

    /**
     * Test attribute "atp036"
     */
    public function testPropertyAtp036()
    {
    }

    /**
     * Test attribute "atp037"
     */
    public function testPropertyAtp037()
    {
    }

    /**
     * Test attribute "atp038"
     */
    public function testPropertyAtp038()
    {
    }

    /**
     * Test attribute "bkb001"
     */
    public function testPropertyBkb001()
    {
    }

    /**
     * Test attribute "bkb002"
     */
    public function testPropertyBkb002()
    {
    }

    /**
     * Test attribute "bkb003"
     */
    public function testPropertyBkb003()
    {
    }

    /**
     * Test attribute "bkc004"
     */
    public function testPropertyBkc004()
    {
    }

    /**
     * Test attribute "bkc005"
     */
    public function testPropertyBkc005()
    {
    }

    /**
     * Test attribute "bkc006"
     */
    public function testPropertyBkc006()
    {
    }

    /**
     * Test attribute "bkc007"
     */
    public function testPropertyBkc007()
    {
    }

    /**
     * Test attribute "bkc008"
     */
    public function testPropertyBkc008()
    {
    }

    /**
     * Test attribute "bko009"
     */
    public function testPropertyBko009()
    {
    }

    /**
     * Test attribute "bko010"
     */
    public function testPropertyBko010()
    {
    }

    /**
     * Test attribute "bko011"
     */
    public function testPropertyBko011()
    {
    }

    /**
     * Test attribute "brb001"
     */
    public function testPropertyBrb001()
    {
    }

    /**
     * Test attribute "brb002"
     */
    public function testPropertyBrb002()
    {
    }

    /**
     * Test attribute "brb003"
     */
    public function testPropertyBrb003()
    {
    }

    /**
     * Test attribute "brb004"
     */
    public function testPropertyBrb004()
    {
    }

    /**
     * Test attribute "brb005"
     */
    public function testPropertyBrb005()
    {
    }

    /**
     * Test attribute "brb006"
     */
    public function testPropertyBrb006()
    {
    }

    /**
     * Test attribute "brb007"
     */
    public function testPropertyBrb007()
    {
    }

    /**
     * Test attribute "brc008"
     */
    public function testPropertyBrc008()
    {
    }

    /**
     * Test attribute "brc009"
     */
    public function testPropertyBrc009()
    {
    }

    /**
     * Test attribute "brc010"
     */
    public function testPropertyBrc010()
    {
    }

    /**
     * Test attribute "brc011"
     */
    public function testPropertyBrc011()
    {
    }

    /**
     * Test attribute "brc012"
     */
    public function testPropertyBrc012()
    {
    }

    /**
     * Test attribute "brc013"
     */
    public function testPropertyBrc013()
    {
    }

    /**
     * Test attribute "brc014"
     */
    public function testPropertyBrc014()
    {
    }

    /**
     * Test attribute "bro015"
     */
    public function testPropertyBro015()
    {
    }

    /**
     * Test attribute "bro016"
     */
    public function testPropertyBro016()
    {
    }

    /**
     * Test attribute "bro017"
     */
    public function testPropertyBro017()
    {
    }

    /**
     * Test attribute "brp018"
     */
    public function testPropertyBrp018()
    {
    }

    /**
     * Test attribute "brp019"
     */
    public function testPropertyBrp019()
    {
    }

    /**
     * Test attribute "brp020"
     */
    public function testPropertyBrp020()
    {
    }

    /**
     * Test attribute "brp021"
     */
    public function testPropertyBrp021()
    {
    }

    /**
     * Test attribute "brp022"
     */
    public function testPropertyBrp022()
    {
    }

    /**
     * Test attribute "brp023"
     */
    public function testPropertyBrp023()
    {
    }

    /**
     * Test attribute "clb001"
     */
    public function testPropertyClb001()
    {
    }

    /**
     * Test attribute "clb002"
     */
    public function testPropertyClb002()
    {
    }

    /**
     * Test attribute "clb003"
     */
    public function testPropertyClb003()
    {
    }

    /**
     * Test attribute "clb004"
     */
    public function testPropertyClb004()
    {
    }

    /**
     * Test attribute "clb005"
     */
    public function testPropertyClb005()
    {
    }

    /**
     * Test attribute "clc006"
     */
    public function testPropertyClc006()
    {
    }

    /**
     * Test attribute "clc007"
     */
    public function testPropertyClc007()
    {
    }

    /**
     * Test attribute "clc008"
     */
    public function testPropertyClc008()
    {
    }

    /**
     * Test attribute "clc009"
     */
    public function testPropertyClc009()
    {
    }

    /**
     * Test attribute "clc010"
     */
    public function testPropertyClc010()
    {
    }

    /**
     * Test attribute "clc011"
     */
    public function testPropertyClc011()
    {
    }

    /**
     * Test attribute "clc012"
     */
    public function testPropertyClc012()
    {
    }

    /**
     * Test attribute "clc013"
     */
    public function testPropertyClc013()
    {
    }

    /**
     * Test attribute "clo014"
     */
    public function testPropertyClo014()
    {
    }

    /**
     * Test attribute "clo015"
     */
    public function testPropertyClo015()
    {
    }

    /**
     * Test attribute "clp016"
     */
    public function testPropertyClp016()
    {
    }

    /**
     * Test attribute "clp017"
     */
    public function testPropertyClp017()
    {
    }

    /**
     * Test attribute "clp018"
     */
    public function testPropertyClp018()
    {
    }

    /**
     * Test attribute "clp019"
     */
    public function testPropertyClp019()
    {
    }

    /**
     * Test attribute "ctb001"
     */
    public function testPropertyCtb001()
    {
    }

    /**
     * Test attribute "ctb002"
     */
    public function testPropertyCtb002()
    {
    }

    /**
     * Test attribute "ctb003"
     */
    public function testPropertyCtb003()
    {
    }

    /**
     * Test attribute "ctb004"
     */
    public function testPropertyCtb004()
    {
    }

    /**
     * Test attribute "ctb005"
     */
    public function testPropertyCtb005()
    {
    }

    /**
     * Test attribute "ctb006"
     */
    public function testPropertyCtb006()
    {
    }

    /**
     * Test attribute "ctb007"
     */
    public function testPropertyCtb007()
    {
    }

    /**
     * Test attribute "ctb008"
     */
    public function testPropertyCtb008()
    {
    }

    /**
     * Test attribute "ctb009"
     */
    public function testPropertyCtb009()
    {
    }

    /**
     * Test attribute "ctb010"
     */
    public function testPropertyCtb010()
    {
    }

    /**
     * Test attribute "ctb011"
     */
    public function testPropertyCtb011()
    {
    }

    /**
     * Test attribute "ctb012"
     */
    public function testPropertyCtb012()
    {
    }

    /**
     * Test attribute "ctb013"
     */
    public function testPropertyCtb013()
    {
    }

    /**
     * Test attribute "ctb014"
     */
    public function testPropertyCtb014()
    {
    }

    /**
     * Test attribute "ctb015"
     */
    public function testPropertyCtb015()
    {
    }

    /**
     * Test attribute "ctb016"
     */
    public function testPropertyCtb016()
    {
    }

    /**
     * Test attribute "ctb017"
     */
    public function testPropertyCtb017()
    {
    }

    /**
     * Test attribute "ctb018"
     */
    public function testPropertyCtb018()
    {
    }

    /**
     * Test attribute "ctc021"
     */
    public function testPropertyCtc021()
    {
    }

    /**
     * Test attribute "ctc022"
     */
    public function testPropertyCtc022()
    {
    }

    /**
     * Test attribute "ctc023"
     */
    public function testPropertyCtc023()
    {
    }

    /**
     * Test attribute "ctc024"
     */
    public function testPropertyCtc024()
    {
    }

    /**
     * Test attribute "ctc025"
     */
    public function testPropertyCtc025()
    {
    }

    /**
     * Test attribute "ctc026"
     */
    public function testPropertyCtc026()
    {
    }

    /**
     * Test attribute "ctc027"
     */
    public function testPropertyCtc027()
    {
    }

    /**
     * Test attribute "ctc028"
     */
    public function testPropertyCtc028()
    {
    }

    /**
     * Test attribute "ctc029"
     */
    public function testPropertyCtc029()
    {
    }

    /**
     * Test attribute "ctc030"
     */
    public function testPropertyCtc030()
    {
    }

    /**
     * Test attribute "ctc031"
     */
    public function testPropertyCtc031()
    {
    }

    /**
     * Test attribute "ctc032"
     */
    public function testPropertyCtc032()
    {
    }

    /**
     * Test attribute "ctc033"
     */
    public function testPropertyCtc033()
    {
    }

    /**
     * Test attribute "ctc034"
     */
    public function testPropertyCtc034()
    {
    }

    /**
     * Test attribute "ctc035"
     */
    public function testPropertyCtc035()
    {
    }

    /**
     * Test attribute "ctc036"
     */
    public function testPropertyCtc036()
    {
    }

    /**
     * Test attribute "ctd038"
     */
    public function testPropertyCtd038()
    {
    }

    /**
     * Test attribute "ctp039"
     */
    public function testPropertyCtp039()
    {
    }

    /**
     * Test attribute "ctp040"
     */
    public function testPropertyCtp040()
    {
    }

    /**
     * Test attribute "ctp041"
     */
    public function testPropertyCtp041()
    {
    }

    /**
     * Test attribute "dmo003"
     */
    public function testPropertyDmo003()
    {
    }

    /**
     * Test attribute "dmo009"
     */
    public function testPropertyDmo009()
    {
    }

    /**
     * Test attribute "dmo013"
     */
    public function testPropertyDmo013()
    {
    }

    /**
     * Test attribute "iqc001"
     */
    public function testPropertyIqc001()
    {
    }

    /**
     * Test attribute "iqc002"
     */
    public function testPropertyIqc002()
    {
    }

    /**
     * Test attribute "iqc003"
     */
    public function testPropertyIqc003()
    {
    }

    /**
     * Test attribute "jdb001"
     */
    public function testPropertyJdb001()
    {
    }

    /**
     * Test attribute "jdb002"
     */
    public function testPropertyJdb002()
    {
    }

    /**
     * Test attribute "jdb003"
     */
    public function testPropertyJdb003()
    {
    }

    /**
     * Test attribute "jdb004"
     */
    public function testPropertyJdb004()
    {
    }

    /**
     * Test attribute "jdb005"
     */
    public function testPropertyJdb005()
    {
    }

    /**
     * Test attribute "jdb006"
     */
    public function testPropertyJdb006()
    {
    }

    /**
     * Test attribute "jdc007"
     */
    public function testPropertyJdc007()
    {
    }

    /**
     * Test attribute "jdc009"
     */
    public function testPropertyJdc009()
    {
    }

    /**
     * Test attribute "jdc010"
     */
    public function testPropertyJdc010()
    {
    }

    /**
     * Test attribute "jdc011"
     */
    public function testPropertyJdc011()
    {
    }

    /**
     * Test attribute "jdc012"
     */
    public function testPropertyJdc012()
    {
    }

    /**
     * Test attribute "jdo013"
     */
    public function testPropertyJdo013()
    {
    }

    /**
     * Test attribute "jdo014"
     */
    public function testPropertyJdo014()
    {
    }

    /**
     * Test attribute "jdp015"
     */
    public function testPropertyJdp015()
    {
    }

    /**
     * Test attribute "jdp016"
     */
    public function testPropertyJdp016()
    {
    }

    /**
     * Test attribute "jdp017"
     */
    public function testPropertyJdp017()
    {
    }

    /**
     * Test attribute "lgc002"
     */
    public function testPropertyLgc002()
    {
    }

    /**
     * Test attribute "lgc003"
     */
    public function testPropertyLgc003()
    {
    }

    /**
     * Test attribute "lgc004"
     */
    public function testPropertyLgc004()
    {
    }

    /**
     * Test attribute "lsb001"
     */
    public function testPropertyLsb001()
    {
    }

    /**
     * Test attribute "lsb002"
     */
    public function testPropertyLsb002()
    {
    }

    /**
     * Test attribute "lsb003"
     */
    public function testPropertyLsb003()
    {
    }

    /**
     * Test attribute "lsb004"
     */
    public function testPropertyLsb004()
    {
    }

    /**
     * Test attribute "lsb005"
     */
    public function testPropertyLsb005()
    {
    }

    /**
     * Test attribute "lsb006"
     */
    public function testPropertyLsb006()
    {
    }

    /**
     * Test attribute "lsb007"
     */
    public function testPropertyLsb007()
    {
    }

    /**
     * Test attribute "lsb008"
     */
    public function testPropertyLsb008()
    {
    }

    /**
     * Test attribute "lsb009"
     */
    public function testPropertyLsb009()
    {
    }

    /**
     * Test attribute "lsc010"
     */
    public function testPropertyLsc010()
    {
    }

    /**
     * Test attribute "lsc011"
     */
    public function testPropertyLsc011()
    {
    }

    /**
     * Test attribute "lsc012"
     */
    public function testPropertyLsc012()
    {
    }

    /**
     * Test attribute "lsc013"
     */
    public function testPropertyLsc013()
    {
    }

    /**
     * Test attribute "lsc014"
     */
    public function testPropertyLsc014()
    {
    }

    /**
     * Test attribute "lsc015"
     */
    public function testPropertyLsc015()
    {
    }

    /**
     * Test attribute "lsc016"
     */
    public function testPropertyLsc016()
    {
    }

    /**
     * Test attribute "lsc017"
     */
    public function testPropertyLsc017()
    {
    }

    /**
     * Test attribute "lsc018"
     */
    public function testPropertyLsc018()
    {
    }

    /**
     * Test attribute "lsc019"
     */
    public function testPropertyLsc019()
    {
    }

    /**
     * Test attribute "lsc020"
     */
    public function testPropertyLsc020()
    {
    }

    /**
     * Test attribute "lsc021"
     */
    public function testPropertyLsc021()
    {
    }

    /**
     * Test attribute "lsc022"
     */
    public function testPropertyLsc022()
    {
    }

    /**
     * Test attribute "lsc023"
     */
    public function testPropertyLsc023()
    {
    }

    /**
     * Test attribute "lsc024"
     */
    public function testPropertyLsc024()
    {
    }

    /**
     * Test attribute "lsc025"
     */
    public function testPropertyLsc025()
    {
    }

    /**
     * Test attribute "lsc026"
     */
    public function testPropertyLsc026()
    {
    }

    /**
     * Test attribute "lsc027"
     */
    public function testPropertyLsc027()
    {
    }

    /**
     * Test attribute "lsc028"
     */
    public function testPropertyLsc028()
    {
    }

    /**
     * Test attribute "lsc029"
     */
    public function testPropertyLsc029()
    {
    }

    /**
     * Test attribute "lsc030"
     */
    public function testPropertyLsc030()
    {
    }

    /**
     * Test attribute "lsc031"
     */
    public function testPropertyLsc031()
    {
    }

    /**
     * Test attribute "lsc032"
     */
    public function testPropertyLsc032()
    {
    }

    /**
     * Test attribute "lsc033"
     */
    public function testPropertyLsc033()
    {
    }

    /**
     * Test attribute "lsp034"
     */
    public function testPropertyLsp034()
    {
    }

    /**
     * Test attribute "lsp035"
     */
    public function testPropertyLsp035()
    {
    }

    /**
     * Test attribute "ntb001"
     */
    public function testPropertyNtb001()
    {
    }

    /**
     * Test attribute "ntb002"
     */
    public function testPropertyNtb002()
    {
    }

    /**
     * Test attribute "ntb003"
     */
    public function testPropertyNtb003()
    {
    }

    /**
     * Test attribute "ntb004"
     */
    public function testPropertyNtb004()
    {
    }

    /**
     * Test attribute "ntb005"
     */
    public function testPropertyNtb005()
    {
    }

    /**
     * Test attribute "ntb006"
     */
    public function testPropertyNtb006()
    {
    }

    /**
     * Test attribute "ntb007"
     */
    public function testPropertyNtb007()
    {
    }

    /**
     * Test attribute "ntb008"
     */
    public function testPropertyNtb008()
    {
    }

    /**
     * Test attribute "ntb009"
     */
    public function testPropertyNtb009()
    {
    }

    /**
     * Test attribute "ntb010"
     */
    public function testPropertyNtb010()
    {
    }

    /**
     * Test attribute "ntb011"
     */
    public function testPropertyNtb011()
    {
    }

    /**
     * Test attribute "ntb012"
     */
    public function testPropertyNtb012()
    {
    }

    /**
     * Test attribute "ntb013"
     */
    public function testPropertyNtb013()
    {
    }

    /**
     * Test attribute "ntb014"
     */
    public function testPropertyNtb014()
    {
    }

    /**
     * Test attribute "ntb015"
     */
    public function testPropertyNtb015()
    {
    }

    /**
     * Test attribute "ntb016"
     */
    public function testPropertyNtb016()
    {
    }

    /**
     * Test attribute "ntb017"
     */
    public function testPropertyNtb017()
    {
    }

    /**
     * Test attribute "ntb018"
     */
    public function testPropertyNtb018()
    {
    }

    /**
     * Test attribute "ntc020"
     */
    public function testPropertyNtc020()
    {
    }

    /**
     * Test attribute "ntc021"
     */
    public function testPropertyNtc021()
    {
    }

    /**
     * Test attribute "ntc022"
     */
    public function testPropertyNtc022()
    {
    }

    /**
     * Test attribute "ntc023"
     */
    public function testPropertyNtc023()
    {
    }

    /**
     * Test attribute "ntc024"
     */
    public function testPropertyNtc024()
    {
    }

    /**
     * Test attribute "ntc025"
     */
    public function testPropertyNtc025()
    {
    }

    /**
     * Test attribute "ntc026"
     */
    public function testPropertyNtc026()
    {
    }

    /**
     * Test attribute "ntc027"
     */
    public function testPropertyNtc027()
    {
    }

    /**
     * Test attribute "ntc028"
     */
    public function testPropertyNtc028()
    {
    }

    /**
     * Test attribute "ntc029"
     */
    public function testPropertyNtc029()
    {
    }

    /**
     * Test attribute "ntc030"
     */
    public function testPropertyNtc030()
    {
    }

    /**
     * Test attribute "ntc031"
     */
    public function testPropertyNtc031()
    {
    }

    /**
     * Test attribute "ntd034"
     */
    public function testPropertyNtd034()
    {
    }

    /**
     * Test attribute "ntd035"
     */
    public function testPropertyNtd035()
    {
    }

    /**
     * Test attribute "ntp036"
     */
    public function testPropertyNtp036()
    {
    }

    /**
     * Test attribute "ntp037"
     */
    public function testPropertyNtp037()
    {
    }

    /**
     * Test attribute "ntp038"
     */
    public function testPropertyNtp038()
    {
    }

    /**
     * Test attribute "ntp039"
     */
    public function testPropertyNtp039()
    {
    }

    /**
     * Test attribute "otb002"
     */
    public function testPropertyOtb002()
    {
    }

    /**
     * Test attribute "otb003"
     */
    public function testPropertyOtb003()
    {
    }

    /**
     * Test attribute "otb004"
     */
    public function testPropertyOtb004()
    {
    }

    /**
     * Test attribute "otb005"
     */
    public function testPropertyOtb005()
    {
    }

    /**
     * Test attribute "otc007"
     */
    public function testPropertyOtc007()
    {
    }

    /**
     * Test attribute "otc008"
     */
    public function testPropertyOtc008()
    {
    }

    /**
     * Test attribute "otc009"
     */
    public function testPropertyOtc009()
    {
    }

    /**
     * Test attribute "otc010"
     */
    public function testPropertyOtc010()
    {
    }

    /**
     * Test attribute "otc011"
     */
    public function testPropertyOtc011()
    {
    }

    /**
     * Test attribute "otd012"
     */
    public function testPropertyOtd012()
    {
    }

    /**
     * Test attribute "otd013"
     */
    public function testPropertyOtd013()
    {
    }

    /**
     * Test attribute "otp014"
     */
    public function testPropertyOtp014()
    {
    }

    /**
     * Test attribute "otp015"
     */
    public function testPropertyOtp015()
    {
    }

    /**
     * Test attribute "otp016"
     */
    public function testPropertyOtp016()
    {
    }

    /**
     * Test attribute "otp017"
     */
    public function testPropertyOtp017()
    {
    }

    /**
     * Test attribute "otp018"
     */
    public function testPropertyOtp018()
    {
    }

    /**
     * Test attribute "otp019"
     */
    public function testPropertyOtp019()
    {
    }

    /**
     * Test attribute "otp020"
     */
    public function testPropertyOtp020()
    {
    }

    /**
     * Test attribute "otp021"
     */
    public function testPropertyOtp021()
    {
    }

    /**
     * Test attribute "pro001"
     */
    public function testPropertyPro001()
    {
    }

    /**
     * Test attribute "pro002"
     */
    public function testPropertyPro002()
    {
    }

    /**
     * Test attribute "pro003"
     */
    public function testPropertyPro003()
    {
    }

    /**
     * Test attribute "rtb001"
     */
    public function testPropertyRtb001()
    {
    }

    /**
     * Test attribute "rtb002"
     */
    public function testPropertyRtb002()
    {
    }

    /**
     * Test attribute "rtb003"
     */
    public function testPropertyRtb003()
    {
    }

    /**
     * Test attribute "rtb004"
     */
    public function testPropertyRtb004()
    {
    }

    /**
     * Test attribute "rtb005"
     */
    public function testPropertyRtb005()
    {
    }

    /**
     * Test attribute "rtb006"
     */
    public function testPropertyRtb006()
    {
    }

    /**
     * Test attribute "rtb007"
     */
    public function testPropertyRtb007()
    {
    }

    /**
     * Test attribute "rtb008"
     */
    public function testPropertyRtb008()
    {
    }

    /**
     * Test attribute "rtb009"
     */
    public function testPropertyRtb009()
    {
    }

    /**
     * Test attribute "rtb010"
     */
    public function testPropertyRtb010()
    {
    }

    /**
     * Test attribute "rtb011"
     */
    public function testPropertyRtb011()
    {
    }

    /**
     * Test attribute "rtb012"
     */
    public function testPropertyRtb012()
    {
    }

    /**
     * Test attribute "rtb013"
     */
    public function testPropertyRtb013()
    {
    }

    /**
     * Test attribute "rtb014"
     */
    public function testPropertyRtb014()
    {
    }

    /**
     * Test attribute "rtb015"
     */
    public function testPropertyRtb015()
    {
    }

    /**
     * Test attribute "rtb016"
     */
    public function testPropertyRtb016()
    {
    }

    /**
     * Test attribute "rtb017"
     */
    public function testPropertyRtb017()
    {
    }

    /**
     * Test attribute "rtb018"
     */
    public function testPropertyRtb018()
    {
    }

    /**
     * Test attribute "rtb020"
     */
    public function testPropertyRtb020()
    {
    }

    /**
     * Test attribute "rtb021"
     */
    public function testPropertyRtb021()
    {
    }

    /**
     * Test attribute "rtb022"
     */
    public function testPropertyRtb022()
    {
    }

    /**
     * Test attribute "rtb023"
     */
    public function testPropertyRtb023()
    {
    }

    /**
     * Test attribute "rtb024"
     */
    public function testPropertyRtb024()
    {
    }

    /**
     * Test attribute "rtb025"
     */
    public function testPropertyRtb025()
    {
    }

    /**
     * Test attribute "rtb026"
     */
    public function testPropertyRtb026()
    {
    }

    /**
     * Test attribute "rtb027"
     */
    public function testPropertyRtb027()
    {
    }

    /**
     * Test attribute "rtb028"
     */
    public function testPropertyRtb028()
    {
    }

    /**
     * Test attribute "rtb029"
     */
    public function testPropertyRtb029()
    {
    }

    /**
     * Test attribute "rtb030"
     */
    public function testPropertyRtb030()
    {
    }

    /**
     * Test attribute "rtb031"
     */
    public function testPropertyRtb031()
    {
    }

    /**
     * Test attribute "rtb032"
     */
    public function testPropertyRtb032()
    {
    }

    /**
     * Test attribute "rtb033"
     */
    public function testPropertyRtb033()
    {
    }

    /**
     * Test attribute "rtb034"
     */
    public function testPropertyRtb034()
    {
    }

    /**
     * Test attribute "rtb035"
     */
    public function testPropertyRtb035()
    {
    }

    /**
     * Test attribute "rtc036"
     */
    public function testPropertyRtc036()
    {
    }

    /**
     * Test attribute "rtc037"
     */
    public function testPropertyRtc037()
    {
    }

    /**
     * Test attribute "rtc038"
     */
    public function testPropertyRtc038()
    {
    }

    /**
     * Test attribute "rtc039"
     */
    public function testPropertyRtc039()
    {
    }

    /**
     * Test attribute "rtc040"
     */
    public function testPropertyRtc040()
    {
    }

    /**
     * Test attribute "rtc041"
     */
    public function testPropertyRtc041()
    {
    }

    /**
     * Test attribute "rtc042"
     */
    public function testPropertyRtc042()
    {
    }

    /**
     * Test attribute "rtc043"
     */
    public function testPropertyRtc043()
    {
    }

    /**
     * Test attribute "rtc044"
     */
    public function testPropertyRtc044()
    {
    }

    /**
     * Test attribute "rtc045"
     */
    public function testPropertyRtc045()
    {
    }

    /**
     * Test attribute "rtc046"
     */
    public function testPropertyRtc046()
    {
    }

    /**
     * Test attribute "rtc047"
     */
    public function testPropertyRtc047()
    {
    }

    /**
     * Test attribute "rtc049"
     */
    public function testPropertyRtc049()
    {
    }

    /**
     * Test attribute "rtc050"
     */
    public function testPropertyRtc050()
    {
    }

    /**
     * Test attribute "rtc051"
     */
    public function testPropertyRtc051()
    {
    }

    /**
     * Test attribute "rtc052"
     */
    public function testPropertyRtc052()
    {
    }

    /**
     * Test attribute "rtc053"
     */
    public function testPropertyRtc053()
    {
    }

    /**
     * Test attribute "rtc054"
     */
    public function testPropertyRtc054()
    {
    }

    /**
     * Test attribute "rtd059"
     */
    public function testPropertyRtd059()
    {
    }

    /**
     * Test attribute "rtd060"
     */
    public function testPropertyRtd060()
    {
    }

    /**
     * Test attribute "rtd061"
     */
    public function testPropertyRtd061()
    {
    }

    /**
     * Test attribute "rtd062"
     */
    public function testPropertyRtd062()
    {
    }

    /**
     * Test attribute "rtd063"
     */
    public function testPropertyRtd063()
    {
    }

    /**
     * Test attribute "rtd064"
     */
    public function testPropertyRtd064()
    {
    }

    /**
     * Test attribute "rtd065"
     */
    public function testPropertyRtd065()
    {
    }

    /**
     * Test attribute "rtd067"
     */
    public function testPropertyRtd067()
    {
    }

    /**
     * Test attribute "rtd068"
     */
    public function testPropertyRtd068()
    {
    }

    /**
     * Test attribute "rtd069"
     */
    public function testPropertyRtd069()
    {
    }

    /**
     * Test attribute "rtd070"
     */
    public function testPropertyRtd070()
    {
    }

    /**
     * Test attribute "rtd071"
     */
    public function testPropertyRtd071()
    {
    }

    /**
     * Test attribute "rtd072"
     */
    public function testPropertyRtd072()
    {
    }

    /**
     * Test attribute "rto077"
     */
    public function testPropertyRto077()
    {
    }

    /**
     * Test attribute "rto079"
     */
    public function testPropertyRto079()
    {
    }

    /**
     * Test attribute "rtp081"
     */
    public function testPropertyRtp081()
    {
    }

    /**
     * Test attribute "rtp082"
     */
    public function testPropertyRtp082()
    {
    }

    /**
     * Test attribute "rtp083"
     */
    public function testPropertyRtp083()
    {
    }

    /**
     * Test attribute "rtp086"
     */
    public function testPropertyRtp086()
    {
    }

    /**
     * Test attribute "ttb001"
     */
    public function testPropertyTtb001()
    {
    }

    /**
     * Test attribute "ttb002"
     */
    public function testPropertyTtb002()
    {
    }

    /**
     * Test attribute "ttb003"
     */
    public function testPropertyTtb003()
    {
    }

    /**
     * Test attribute "ttb004"
     */
    public function testPropertyTtb004()
    {
    }

    /**
     * Test attribute "ttb005"
     */
    public function testPropertyTtb005()
    {
    }

    /**
     * Test attribute "ttb006"
     */
    public function testPropertyTtb006()
    {
    }

    /**
     * Test attribute "ttb007"
     */
    public function testPropertyTtb007()
    {
    }

    /**
     * Test attribute "ttb008"
     */
    public function testPropertyTtb008()
    {
    }

    /**
     * Test attribute "ttb009"
     */
    public function testPropertyTtb009()
    {
    }

    /**
     * Test attribute "ttb010"
     */
    public function testPropertyTtb010()
    {
    }

    /**
     * Test attribute "ttb011"
     */
    public function testPropertyTtb011()
    {
    }

    /**
     * Test attribute "ttb012"
     */
    public function testPropertyTtb012()
    {
    }

    /**
     * Test attribute "ttb013"
     */
    public function testPropertyTtb013()
    {
    }

    /**
     * Test attribute "ttb014"
     */
    public function testPropertyTtb014()
    {
    }

    /**
     * Test attribute "ttb015"
     */
    public function testPropertyTtb015()
    {
    }

    /**
     * Test attribute "ttb016"
     */
    public function testPropertyTtb016()
    {
    }

    /**
     * Test attribute "ttb017"
     */
    public function testPropertyTtb017()
    {
    }

    /**
     * Test attribute "ttb018"
     */
    public function testPropertyTtb018()
    {
    }

    /**
     * Test attribute "ttb019"
     */
    public function testPropertyTtb019()
    {
    }

    /**
     * Test attribute "ttb020"
     */
    public function testPropertyTtb020()
    {
    }

    /**
     * Test attribute "ttb023"
     */
    public function testPropertyTtb023()
    {
    }

    /**
     * Test attribute "ttb024"
     */
    public function testPropertyTtb024()
    {
    }

    /**
     * Test attribute "ttb025"
     */
    public function testPropertyTtb025()
    {
    }

    /**
     * Test attribute "ttb026"
     */
    public function testPropertyTtb026()
    {
    }

    /**
     * Test attribute "ttb027"
     */
    public function testPropertyTtb027()
    {
    }

    /**
     * Test attribute "ttb033"
     */
    public function testPropertyTtb033()
    {
    }

    /**
     * Test attribute "ttc035"
     */
    public function testPropertyTtc035()
    {
    }

    /**
     * Test attribute "ttc036"
     */
    public function testPropertyTtc036()
    {
    }

    /**
     * Test attribute "ttc037"
     */
    public function testPropertyTtc037()
    {
    }

    /**
     * Test attribute "ttc038"
     */
    public function testPropertyTtc038()
    {
    }

    /**
     * Test attribute "ttc039"
     */
    public function testPropertyTtc039()
    {
    }

    /**
     * Test attribute "ttc040"
     */
    public function testPropertyTtc040()
    {
    }

    /**
     * Test attribute "ttc041"
     */
    public function testPropertyTtc041()
    {
    }

    /**
     * Test attribute "ttc042"
     */
    public function testPropertyTtc042()
    {
    }

    /**
     * Test attribute "ttc043"
     */
    public function testPropertyTtc043()
    {
    }

    /**
     * Test attribute "ttc044"
     */
    public function testPropertyTtc044()
    {
    }

    /**
     * Test attribute "ttc045"
     */
    public function testPropertyTtc045()
    {
    }

    /**
     * Test attribute "ttc046"
     */
    public function testPropertyTtc046()
    {
    }

    /**
     * Test attribute "ttc047"
     */
    public function testPropertyTtc047()
    {
    }

    /**
     * Test attribute "ttc048"
     */
    public function testPropertyTtc048()
    {
    }

    /**
     * Test attribute "ttc049"
     */
    public function testPropertyTtc049()
    {
    }

    /**
     * Test attribute "ttc051"
     */
    public function testPropertyTtc051()
    {
    }

    /**
     * Test attribute "ttc052"
     */
    public function testPropertyTtc052()
    {
    }

    /**
     * Test attribute "ttc053"
     */
    public function testPropertyTtc053()
    {
    }

    /**
     * Test attribute "ttc054"
     */
    public function testPropertyTtc054()
    {
    }

    /**
     * Test attribute "ttc055"
     */
    public function testPropertyTtc055()
    {
    }

    /**
     * Test attribute "ttc056"
     */
    public function testPropertyTtc056()
    {
    }

    /**
     * Test attribute "ttc057"
     */
    public function testPropertyTtc057()
    {
    }

    /**
     * Test attribute "ttc058"
     */
    public function testPropertyTtc058()
    {
    }

    /**
     * Test attribute "ttc059"
     */
    public function testPropertyTtc059()
    {
    }

    /**
     * Test attribute "ttc060"
     */
    public function testPropertyTtc060()
    {
    }

    /**
     * Test attribute "ttc061"
     */
    public function testPropertyTtc061()
    {
    }

    /**
     * Test attribute "ttc063"
     */
    public function testPropertyTtc063()
    {
    }

    /**
     * Test attribute "ttc064"
     */
    public function testPropertyTtc064()
    {
    }

    /**
     * Test attribute "ttc065"
     */
    public function testPropertyTtc065()
    {
    }

    /**
     * Test attribute "ttc066"
     */
    public function testPropertyTtc066()
    {
    }

    /**
     * Test attribute "ttc067"
     */
    public function testPropertyTtc067()
    {
    }

    /**
     * Test attribute "ttc068"
     */
    public function testPropertyTtc068()
    {
    }

    /**
     * Test attribute "ttc069"
     */
    public function testPropertyTtc069()
    {
    }

    /**
     * Test attribute "ttc070"
     */
    public function testPropertyTtc070()
    {
    }

    /**
     * Test attribute "tto074"
     */
    public function testPropertyTto074()
    {
    }

    /**
     * Test attribute "tto075"
     */
    public function testPropertyTto075()
    {
    }

    /**
     * Test attribute "tto076"
     */
    public function testPropertyTto076()
    {
    }

    /**
     * Test attribute "tto077"
     */
    public function testPropertyTto077()
    {
    }

    /**
     * Test attribute "ttp079"
     */
    public function testPropertyTtp079()
    {
    }

    /**
     * Test attribute "ttp080"
     */
    public function testPropertyTtp080()
    {
    }

    /**
     * Test attribute "ttp084"
     */
    public function testPropertyTtp084()
    {
    }

    /**
     * Test attribute "txb001"
     */
    public function testPropertyTxb001()
    {
    }

    /**
     * Test attribute "txb002"
     */
    public function testPropertyTxb002()
    {
    }

    /**
     * Test attribute "txb003"
     */
    public function testPropertyTxb003()
    {
    }

    /**
     * Test attribute "txb004"
     */
    public function testPropertyTxb004()
    {
    }

    /**
     * Test attribute "txb006"
     */
    public function testPropertyTxb006()
    {
    }

    /**
     * Test attribute "txc007"
     */
    public function testPropertyTxc007()
    {
    }

    /**
     * Test attribute "txc009"
     */
    public function testPropertyTxc009()
    {
    }

    /**
     * Test attribute "txc010"
     */
    public function testPropertyTxc010()
    {
    }

    /**
     * Test attribute "txc011"
     */
    public function testPropertyTxc011()
    {
    }

    /**
     * Test attribute "txc012"
     */
    public function testPropertyTxc012()
    {
    }

    /**
     * Test attribute "txo013"
     */
    public function testPropertyTxo013()
    {
    }

    /**
     * Test attribute "txo014"
     */
    public function testPropertyTxo014()
    {
    }

    /**
     * Test attribute "txp015"
     */
    public function testPropertyTxp015()
    {
    }

    /**
     * Test attribute "txp016"
     */
    public function testPropertyTxp016()
    {
    }

    /**
     * Test attribute "txp017"
     */
    public function testPropertyTxp017()
    {
    }

    /**
     * Test attribute "ucc001"
     */
    public function testPropertyUcc001()
    {
    }

    /**
     * Test attribute "ucc002"
     */
    public function testPropertyUcc002()
    {
    }

    /**
     * Test attribute "ucc003"
     */
    public function testPropertyUcc003()
    {
    }

    /**
     * Test attribute "ucc004"
     */
    public function testPropertyUcc004()
    {
    }

    /**
     * Test attribute "ucc005"
     */
    public function testPropertyUcc005()
    {
    }

    /**
     * Test attribute "ucc006"
     */
    public function testPropertyUcc006()
    {
    }

    /**
     * Test attribute "ucc007"
     */
    public function testPropertyUcc007()
    {
    }

    /**
     * Test attribute "ucc008"
     */
    public function testPropertyUcc008()
    {
    }

    /**
     * Test attribute "ucc009"
     */
    public function testPropertyUcc009()
    {
    }

    /**
     * Test attribute "ucc010"
     */
    public function testPropertyUcc010()
    {
    }

    /**
     * Test attribute "ucc011"
     */
    public function testPropertyUcc011()
    {
    }

    /**
     * Test attribute "ucc012"
     */
    public function testPropertyUcc012()
    {
    }

    /**
     * Test attribute "ucc013"
     */
    public function testPropertyUcc013()
    {
    }

    /**
     * Test attribute "ucc014"
     */
    public function testPropertyUcc014()
    {
    }

    /**
     * Test attribute "ucc015"
     */
    public function testPropertyUcc015()
    {
    }

    /**
     * Test attribute "ucc016"
     */
    public function testPropertyUcc016()
    {
    }

    /**
     * Test attribute "dmo004"
     */
    public function testPropertyDmo004()
    {
    }

    /**
     * Test attribute "dmo014"
     */
    public function testPropertyDmo014()
    {
    }
}
