<?php
/**
 * BizAggregates
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Businesses
 *
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> <li><strong>Cyber Risk Score and Attributes</strong> – Identifies employee cyber risk behaviors that indicate risk for a business</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
 *
 * The version of the OpenAPI document: 1.0.3
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.17.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExperianBusinessesPHP\Model;

use \ArrayAccess;
use \TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * BizAggregates Class Doc Comment
 *
 * @category Class
 * @description Object containing business aggregates (BizAggs)
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BizAggregates implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BizAggregates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'atc039' => 'float',
        'ctb019' => 'float',
        'jdc008' => 'float',
        'ntb019' => 'float',
        'ntc032' => 'float',
        'otb001' => 'float',
        'otc006' => 'float',
        'rtb019' => 'float',
        'rtc048' => 'float',
        'ttb021' => 'float',
        'ttb022' => 'float',
        'ttb028' => 'float',
        'ttb029' => 'float',
        'ttb030' => 'float',
        'ttb031' => 'float',
        'ttb032' => 'float',
        'ttc050' => 'float',
        'ttp085' => 'float',
        'ttp086' => 'float',
        'txb005' => 'float',
        'txc008' => 'float',
        'acc001' => 'float',
        'acc002' => 'float',
        'acc003' => 'float',
        'acc004' => 'float',
        'acc005' => 'float',
        'acc006' => 'float',
        'acc007' => 'float',
        'acc008' => 'float',
        'atb001' => 'float',
        'atb002' => 'float',
        'atb003' => 'float',
        'atb004' => 'float',
        'atb005' => 'float',
        'atb006' => 'float',
        'atb007' => 'float',
        'atb008' => 'float',
        'atb009' => 'float',
        'atb010' => 'float',
        'atb011' => 'float',
        'atb012' => 'float',
        'atb013' => 'float',
        'atb014' => 'float',
        'atb015' => 'float',
        'atb016' => 'float',
        'atb017' => 'float',
        'atb018' => 'float',
        'atb019' => 'float',
        'atc020' => 'float',
        'atc021' => 'float',
        'atc022' => 'float',
        'atc023' => 'float',
        'atc024' => 'float',
        'atc025' => 'float',
        'atc026' => 'float',
        'atc027' => 'float',
        'atc028' => 'float',
        'atc029' => 'float',
        'atc030' => 'float',
        'atc031' => 'float',
        'atc032' => 'float',
        'atd034' => 'float',
        'atd035' => 'float',
        'atp036' => 'float',
        'atp037' => 'float',
        'atp038' => 'float',
        'bkb001' => 'float',
        'bkb002' => 'float',
        'bkb003' => 'float',
        'bkc004' => 'float',
        'bkc005' => 'float',
        'bkc006' => 'float',
        'bkc007' => 'float',
        'bkc008' => 'float',
        'bko009' => 'float',
        'bko010' => 'float',
        'bko011' => 'float',
        'brb001' => 'float',
        'brb002' => 'float',
        'brb003' => 'float',
        'brb004' => 'float',
        'brb005' => 'float',
        'brb006' => 'float',
        'brb007' => 'float',
        'brc008' => 'float',
        'brc009' => 'float',
        'brc010' => 'float',
        'brc011' => 'float',
        'brc012' => 'float',
        'brc013' => 'float',
        'brc014' => 'float',
        'bro015' => 'float',
        'bro016' => 'float',
        'bro017' => 'float',
        'brp018' => 'float',
        'brp019' => 'float',
        'brp020' => 'float',
        'brp021' => 'float',
        'brp022' => 'float',
        'brp023' => 'float',
        'clb001' => 'float',
        'clb002' => 'float',
        'clb003' => 'float',
        'clb004' => 'float',
        'clb005' => 'float',
        'clc006' => 'float',
        'clc007' => 'float',
        'clc008' => 'float',
        'clc009' => 'float',
        'clc010' => 'float',
        'clc011' => 'float',
        'clc012' => 'float',
        'clc013' => 'float',
        'clo014' => 'float',
        'clo015' => 'float',
        'clp016' => 'float',
        'clp017' => 'float',
        'clp018' => 'float',
        'clp019' => 'float',
        'ctb001' => 'float',
        'ctb002' => 'float',
        'ctb003' => 'float',
        'ctb004' => 'float',
        'ctb005' => 'float',
        'ctb006' => 'float',
        'ctb007' => 'float',
        'ctb008' => 'float',
        'ctb009' => 'float',
        'ctb010' => 'float',
        'ctb011' => 'float',
        'ctb012' => 'float',
        'ctb013' => 'float',
        'ctb014' => 'float',
        'ctb015' => 'float',
        'ctb016' => 'float',
        'ctb017' => 'float',
        'ctb018' => 'float',
        'ctc021' => 'float',
        'ctc022' => 'float',
        'ctc023' => 'float',
        'ctc024' => 'float',
        'ctc025' => 'float',
        'ctc026' => 'float',
        'ctc027' => 'float',
        'ctc028' => 'float',
        'ctc029' => 'float',
        'ctc030' => 'float',
        'ctc031' => 'float',
        'ctc032' => 'float',
        'ctc033' => 'float',
        'ctc034' => 'float',
        'ctc035' => 'float',
        'ctc036' => 'float',
        'ctd038' => 'float',
        'ctp039' => 'float',
        'ctp040' => 'float',
        'ctp041' => 'float',
        'dmo003' => 'string',
        'dmo009' => 'string',
        'dmo013' => 'string',
        'iqc001' => 'float',
        'iqc002' => 'float',
        'iqc003' => 'float',
        'jdb001' => 'float',
        'jdb002' => 'float',
        'jdb003' => 'float',
        'jdb004' => 'float',
        'jdb005' => 'float',
        'jdb006' => 'float',
        'jdc007' => 'float',
        'jdc009' => 'float',
        'jdc010' => 'float',
        'jdc011' => 'float',
        'jdc012' => 'float',
        'jdo013' => 'float',
        'jdo014' => 'float',
        'jdp015' => 'float',
        'jdp016' => 'float',
        'jdp017' => 'float',
        'lgc002' => 'float',
        'lgc003' => 'float',
        'lgc004' => 'float',
        'lsb001' => 'float',
        'lsb002' => 'float',
        'lsb003' => 'float',
        'lsb004' => 'float',
        'lsb005' => 'float',
        'lsb006' => 'float',
        'lsb007' => 'float',
        'lsb008' => 'float',
        'lsb009' => 'float',
        'lsc010' => 'float',
        'lsc011' => 'float',
        'lsc012' => 'float',
        'lsc013' => 'float',
        'lsc014' => 'float',
        'lsc015' => 'float',
        'lsc016' => 'float',
        'lsc017' => 'float',
        'lsc018' => 'float',
        'lsc019' => 'float',
        'lsc020' => 'float',
        'lsc021' => 'float',
        'lsc022' => 'float',
        'lsc023' => 'float',
        'lsc024' => 'float',
        'lsc025' => 'float',
        'lsc026' => 'float',
        'lsc027' => 'float',
        'lsc028' => 'float',
        'lsc029' => 'float',
        'lsc030' => 'float',
        'lsc031' => 'float',
        'lsc032' => 'float',
        'lsc033' => 'float',
        'lsp034' => 'float',
        'lsp035' => 'float',
        'ntb001' => 'float',
        'ntb002' => 'float',
        'ntb003' => 'float',
        'ntb004' => 'float',
        'ntb005' => 'float',
        'ntb006' => 'float',
        'ntb007' => 'float',
        'ntb008' => 'float',
        'ntb009' => 'float',
        'ntb010' => 'float',
        'ntb011' => 'float',
        'ntb012' => 'float',
        'ntb013' => 'float',
        'ntb014' => 'float',
        'ntb015' => 'float',
        'ntb016' => 'float',
        'ntb017' => 'float',
        'ntb018' => 'float',
        'ntc020' => 'float',
        'ntc021' => 'float',
        'ntc022' => 'float',
        'ntc023' => 'float',
        'ntc024' => 'float',
        'ntc025' => 'float',
        'ntc026' => 'float',
        'ntc027' => 'float',
        'ntc028' => 'float',
        'ntc029' => 'float',
        'ntc030' => 'float',
        'ntc031' => 'float',
        'ntd034' => 'float',
        'ntd035' => 'float',
        'ntp036' => 'float',
        'ntp037' => 'float',
        'ntp038' => 'float',
        'ntp039' => 'float',
        'otb002' => 'float',
        'otb003' => 'float',
        'otb004' => 'float',
        'otb005' => 'float',
        'otc007' => 'float',
        'otc008' => 'float',
        'otc009' => 'float',
        'otc010' => 'float',
        'otc011' => 'float',
        'otd012' => 'float',
        'otd013' => 'float',
        'otp014' => 'float',
        'otp015' => 'float',
        'otp016' => 'float',
        'otp017' => 'float',
        'otp018' => 'float',
        'otp019' => 'float',
        'otp020' => 'float',
        'otp021' => 'float',
        'pro001' => 'float',
        'pro002' => 'float',
        'pro003' => 'float',
        'rtb001' => 'float',
        'rtb002' => 'float',
        'rtb003' => 'float',
        'rtb004' => 'float',
        'rtb005' => 'float',
        'rtb006' => 'float',
        'rtb007' => 'float',
        'rtb008' => 'float',
        'rtb009' => 'float',
        'rtb010' => 'float',
        'rtb011' => 'float',
        'rtb012' => 'float',
        'rtb013' => 'float',
        'rtb014' => 'float',
        'rtb015' => 'float',
        'rtb016' => 'float',
        'rtb017' => 'float',
        'rtb018' => 'float',
        'rtb020' => 'float',
        'rtb021' => 'float',
        'rtb022' => 'float',
        'rtb023' => 'float',
        'rtb024' => 'float',
        'rtb025' => 'float',
        'rtb026' => 'float',
        'rtb027' => 'float',
        'rtb028' => 'float',
        'rtb029' => 'float',
        'rtb030' => 'float',
        'rtb031' => 'float',
        'rtb032' => 'float',
        'rtb033' => 'float',
        'rtb034' => 'float',
        'rtb035' => 'float',
        'rtc036' => 'float',
        'rtc037' => 'float',
        'rtc038' => 'float',
        'rtc039' => 'float',
        'rtc040' => 'float',
        'rtc041' => 'float',
        'rtc042' => 'float',
        'rtc043' => 'float',
        'rtc044' => 'float',
        'rtc045' => 'float',
        'rtc046' => 'float',
        'rtc047' => 'float',
        'rtc049' => 'float',
        'rtc050' => 'float',
        'rtc051' => 'float',
        'rtc052' => 'float',
        'rtc053' => 'float',
        'rtc054' => 'float',
        'rtd059' => 'float',
        'rtd060' => 'float',
        'rtd061' => 'float',
        'rtd062' => 'float',
        'rtd063' => 'float',
        'rtd064' => 'float',
        'rtd065' => 'float',
        'rtd067' => 'float',
        'rtd068' => 'float',
        'rtd069' => 'float',
        'rtd070' => 'float',
        'rtd071' => 'float',
        'rtd072' => 'float',
        'rto077' => 'float',
        'rto079' => 'float',
        'rtp081' => 'float',
        'rtp082' => 'float',
        'rtp083' => 'float',
        'rtp086' => 'float',
        'ttb001' => 'float',
        'ttb002' => 'float',
        'ttb003' => 'float',
        'ttb004' => 'float',
        'ttb005' => 'float',
        'ttb006' => 'float',
        'ttb007' => 'float',
        'ttb008' => 'float',
        'ttb009' => 'float',
        'ttb010' => 'float',
        'ttb011' => 'float',
        'ttb012' => 'float',
        'ttb013' => 'float',
        'ttb014' => 'float',
        'ttb015' => 'float',
        'ttb016' => 'float',
        'ttb017' => 'float',
        'ttb018' => 'float',
        'ttb019' => 'float',
        'ttb020' => 'float',
        'ttb023' => 'float',
        'ttb024' => 'float',
        'ttb025' => 'float',
        'ttb026' => 'float',
        'ttb027' => 'float',
        'ttb033' => 'float',
        'ttc035' => 'float',
        'ttc036' => 'float',
        'ttc037' => 'float',
        'ttc038' => 'float',
        'ttc039' => 'float',
        'ttc040' => 'float',
        'ttc041' => 'float',
        'ttc042' => 'float',
        'ttc043' => 'float',
        'ttc044' => 'float',
        'ttc045' => 'float',
        'ttc046' => 'float',
        'ttc047' => 'float',
        'ttc048' => 'float',
        'ttc049' => 'float',
        'ttc051' => 'float',
        'ttc052' => 'float',
        'ttc053' => 'float',
        'ttc054' => 'float',
        'ttc055' => 'float',
        'ttc056' => 'float',
        'ttc057' => 'float',
        'ttc058' => 'float',
        'ttc059' => 'float',
        'ttc060' => 'float',
        'ttc061' => 'float',
        'ttc063' => 'float',
        'ttc064' => 'float',
        'ttc065' => 'float',
        'ttc066' => 'float',
        'ttc067' => 'float',
        'ttc068' => 'float',
        'ttc069' => 'float',
        'ttc070' => 'float',
        'tto074' => 'float',
        'tto075' => 'float',
        'tto076' => 'float',
        'tto077' => 'float',
        'ttp079' => 'float',
        'ttp080' => 'float',
        'ttp084' => 'float',
        'txb001' => 'float',
        'txb002' => 'float',
        'txb003' => 'float',
        'txb004' => 'float',
        'txb006' => 'float',
        'txc007' => 'float',
        'txc009' => 'float',
        'txc010' => 'float',
        'txc011' => 'float',
        'txc012' => 'float',
        'txo013' => 'float',
        'txo014' => 'float',
        'txp015' => 'float',
        'txp016' => 'float',
        'txp017' => 'float',
        'ucc001' => 'float',
        'ucc002' => 'float',
        'ucc003' => 'float',
        'ucc004' => 'float',
        'ucc005' => 'float',
        'ucc006' => 'float',
        'ucc007' => 'float',
        'ucc008' => 'float',
        'ucc009' => 'float',
        'ucc010' => 'float',
        'ucc011' => 'float',
        'ucc012' => 'float',
        'ucc013' => 'float',
        'ucc014' => 'float',
        'ucc015' => 'float',
        'ucc016' => 'float',
        'dmo004' => 'string',
        'dmo014' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'atc039' => null,
        'ctb019' => null,
        'jdc008' => null,
        'ntb019' => null,
        'ntc032' => null,
        'otb001' => null,
        'otc006' => null,
        'rtb019' => null,
        'rtc048' => null,
        'ttb021' => null,
        'ttb022' => null,
        'ttb028' => null,
        'ttb029' => null,
        'ttb030' => null,
        'ttb031' => null,
        'ttb032' => null,
        'ttc050' => null,
        'ttp085' => null,
        'ttp086' => null,
        'txb005' => null,
        'txc008' => null,
        'acc001' => null,
        'acc002' => null,
        'acc003' => null,
        'acc004' => null,
        'acc005' => null,
        'acc006' => null,
        'acc007' => null,
        'acc008' => null,
        'atb001' => null,
        'atb002' => null,
        'atb003' => null,
        'atb004' => null,
        'atb005' => null,
        'atb006' => null,
        'atb007' => null,
        'atb008' => null,
        'atb009' => null,
        'atb010' => null,
        'atb011' => null,
        'atb012' => null,
        'atb013' => null,
        'atb014' => null,
        'atb015' => null,
        'atb016' => null,
        'atb017' => null,
        'atb018' => null,
        'atb019' => null,
        'atc020' => null,
        'atc021' => null,
        'atc022' => null,
        'atc023' => null,
        'atc024' => null,
        'atc025' => null,
        'atc026' => null,
        'atc027' => null,
        'atc028' => null,
        'atc029' => null,
        'atc030' => null,
        'atc031' => null,
        'atc032' => null,
        'atd034' => null,
        'atd035' => null,
        'atp036' => null,
        'atp037' => null,
        'atp038' => null,
        'bkb001' => null,
        'bkb002' => null,
        'bkb003' => null,
        'bkc004' => null,
        'bkc005' => null,
        'bkc006' => null,
        'bkc007' => null,
        'bkc008' => null,
        'bko009' => null,
        'bko010' => null,
        'bko011' => null,
        'brb001' => null,
        'brb002' => null,
        'brb003' => null,
        'brb004' => null,
        'brb005' => null,
        'brb006' => null,
        'brb007' => null,
        'brc008' => null,
        'brc009' => null,
        'brc010' => null,
        'brc011' => null,
        'brc012' => null,
        'brc013' => null,
        'brc014' => null,
        'bro015' => null,
        'bro016' => null,
        'bro017' => null,
        'brp018' => null,
        'brp019' => null,
        'brp020' => null,
        'brp021' => null,
        'brp022' => null,
        'brp023' => null,
        'clb001' => null,
        'clb002' => null,
        'clb003' => null,
        'clb004' => null,
        'clb005' => null,
        'clc006' => null,
        'clc007' => null,
        'clc008' => null,
        'clc009' => null,
        'clc010' => null,
        'clc011' => null,
        'clc012' => null,
        'clc013' => null,
        'clo014' => null,
        'clo015' => null,
        'clp016' => null,
        'clp017' => null,
        'clp018' => null,
        'clp019' => null,
        'ctb001' => null,
        'ctb002' => null,
        'ctb003' => null,
        'ctb004' => null,
        'ctb005' => null,
        'ctb006' => null,
        'ctb007' => null,
        'ctb008' => null,
        'ctb009' => null,
        'ctb010' => null,
        'ctb011' => null,
        'ctb012' => null,
        'ctb013' => null,
        'ctb014' => null,
        'ctb015' => null,
        'ctb016' => null,
        'ctb017' => null,
        'ctb018' => null,
        'ctc021' => null,
        'ctc022' => null,
        'ctc023' => null,
        'ctc024' => null,
        'ctc025' => null,
        'ctc026' => null,
        'ctc027' => null,
        'ctc028' => null,
        'ctc029' => null,
        'ctc030' => null,
        'ctc031' => null,
        'ctc032' => null,
        'ctc033' => null,
        'ctc034' => null,
        'ctc035' => null,
        'ctc036' => null,
        'ctd038' => null,
        'ctp039' => null,
        'ctp040' => null,
        'ctp041' => null,
        'dmo003' => null,
        'dmo009' => null,
        'dmo013' => null,
        'iqc001' => null,
        'iqc002' => null,
        'iqc003' => null,
        'jdb001' => null,
        'jdb002' => null,
        'jdb003' => null,
        'jdb004' => null,
        'jdb005' => null,
        'jdb006' => null,
        'jdc007' => null,
        'jdc009' => null,
        'jdc010' => null,
        'jdc011' => null,
        'jdc012' => null,
        'jdo013' => null,
        'jdo014' => null,
        'jdp015' => null,
        'jdp016' => null,
        'jdp017' => null,
        'lgc002' => null,
        'lgc003' => null,
        'lgc004' => null,
        'lsb001' => null,
        'lsb002' => null,
        'lsb003' => null,
        'lsb004' => null,
        'lsb005' => null,
        'lsb006' => null,
        'lsb007' => null,
        'lsb008' => null,
        'lsb009' => null,
        'lsc010' => null,
        'lsc011' => null,
        'lsc012' => null,
        'lsc013' => null,
        'lsc014' => null,
        'lsc015' => null,
        'lsc016' => null,
        'lsc017' => null,
        'lsc018' => null,
        'lsc019' => null,
        'lsc020' => null,
        'lsc021' => null,
        'lsc022' => null,
        'lsc023' => null,
        'lsc024' => null,
        'lsc025' => null,
        'lsc026' => null,
        'lsc027' => null,
        'lsc028' => null,
        'lsc029' => null,
        'lsc030' => null,
        'lsc031' => null,
        'lsc032' => null,
        'lsc033' => null,
        'lsp034' => null,
        'lsp035' => null,
        'ntb001' => null,
        'ntb002' => null,
        'ntb003' => null,
        'ntb004' => null,
        'ntb005' => null,
        'ntb006' => null,
        'ntb007' => null,
        'ntb008' => null,
        'ntb009' => null,
        'ntb010' => null,
        'ntb011' => null,
        'ntb012' => null,
        'ntb013' => null,
        'ntb014' => null,
        'ntb015' => null,
        'ntb016' => null,
        'ntb017' => null,
        'ntb018' => null,
        'ntc020' => null,
        'ntc021' => null,
        'ntc022' => null,
        'ntc023' => null,
        'ntc024' => null,
        'ntc025' => null,
        'ntc026' => null,
        'ntc027' => null,
        'ntc028' => null,
        'ntc029' => null,
        'ntc030' => null,
        'ntc031' => null,
        'ntd034' => null,
        'ntd035' => null,
        'ntp036' => null,
        'ntp037' => null,
        'ntp038' => null,
        'ntp039' => null,
        'otb002' => null,
        'otb003' => null,
        'otb004' => null,
        'otb005' => null,
        'otc007' => null,
        'otc008' => null,
        'otc009' => null,
        'otc010' => null,
        'otc011' => null,
        'otd012' => null,
        'otd013' => null,
        'otp014' => null,
        'otp015' => null,
        'otp016' => null,
        'otp017' => null,
        'otp018' => null,
        'otp019' => null,
        'otp020' => null,
        'otp021' => null,
        'pro001' => null,
        'pro002' => null,
        'pro003' => null,
        'rtb001' => null,
        'rtb002' => null,
        'rtb003' => null,
        'rtb004' => null,
        'rtb005' => null,
        'rtb006' => null,
        'rtb007' => null,
        'rtb008' => null,
        'rtb009' => null,
        'rtb010' => null,
        'rtb011' => null,
        'rtb012' => null,
        'rtb013' => null,
        'rtb014' => null,
        'rtb015' => null,
        'rtb016' => null,
        'rtb017' => null,
        'rtb018' => null,
        'rtb020' => null,
        'rtb021' => null,
        'rtb022' => null,
        'rtb023' => null,
        'rtb024' => null,
        'rtb025' => null,
        'rtb026' => null,
        'rtb027' => null,
        'rtb028' => null,
        'rtb029' => null,
        'rtb030' => null,
        'rtb031' => null,
        'rtb032' => null,
        'rtb033' => null,
        'rtb034' => null,
        'rtb035' => null,
        'rtc036' => null,
        'rtc037' => null,
        'rtc038' => null,
        'rtc039' => null,
        'rtc040' => null,
        'rtc041' => null,
        'rtc042' => null,
        'rtc043' => null,
        'rtc044' => null,
        'rtc045' => null,
        'rtc046' => null,
        'rtc047' => null,
        'rtc049' => null,
        'rtc050' => null,
        'rtc051' => null,
        'rtc052' => null,
        'rtc053' => null,
        'rtc054' => null,
        'rtd059' => null,
        'rtd060' => null,
        'rtd061' => null,
        'rtd062' => null,
        'rtd063' => null,
        'rtd064' => null,
        'rtd065' => null,
        'rtd067' => null,
        'rtd068' => null,
        'rtd069' => null,
        'rtd070' => null,
        'rtd071' => null,
        'rtd072' => null,
        'rto077' => null,
        'rto079' => null,
        'rtp081' => null,
        'rtp082' => null,
        'rtp083' => null,
        'rtp086' => null,
        'ttb001' => null,
        'ttb002' => null,
        'ttb003' => null,
        'ttb004' => null,
        'ttb005' => null,
        'ttb006' => null,
        'ttb007' => null,
        'ttb008' => null,
        'ttb009' => null,
        'ttb010' => null,
        'ttb011' => null,
        'ttb012' => null,
        'ttb013' => null,
        'ttb014' => null,
        'ttb015' => null,
        'ttb016' => null,
        'ttb017' => null,
        'ttb018' => null,
        'ttb019' => null,
        'ttb020' => null,
        'ttb023' => null,
        'ttb024' => null,
        'ttb025' => null,
        'ttb026' => null,
        'ttb027' => null,
        'ttb033' => null,
        'ttc035' => null,
        'ttc036' => null,
        'ttc037' => null,
        'ttc038' => null,
        'ttc039' => null,
        'ttc040' => null,
        'ttc041' => null,
        'ttc042' => null,
        'ttc043' => null,
        'ttc044' => null,
        'ttc045' => null,
        'ttc046' => null,
        'ttc047' => null,
        'ttc048' => null,
        'ttc049' => null,
        'ttc051' => null,
        'ttc052' => null,
        'ttc053' => null,
        'ttc054' => null,
        'ttc055' => null,
        'ttc056' => null,
        'ttc057' => null,
        'ttc058' => null,
        'ttc059' => null,
        'ttc060' => null,
        'ttc061' => null,
        'ttc063' => null,
        'ttc064' => null,
        'ttc065' => null,
        'ttc066' => null,
        'ttc067' => null,
        'ttc068' => null,
        'ttc069' => null,
        'ttc070' => null,
        'tto074' => null,
        'tto075' => null,
        'tto076' => null,
        'tto077' => null,
        'ttp079' => null,
        'ttp080' => null,
        'ttp084' => null,
        'txb001' => null,
        'txb002' => null,
        'txb003' => null,
        'txb004' => null,
        'txb006' => null,
        'txc007' => null,
        'txc009' => null,
        'txc010' => null,
        'txc011' => null,
        'txc012' => null,
        'txo013' => null,
        'txo014' => null,
        'txp015' => null,
        'txp016' => null,
        'txp017' => null,
        'ucc001' => null,
        'ucc002' => null,
        'ucc003' => null,
        'ucc004' => null,
        'ucc005' => null,
        'ucc006' => null,
        'ucc007' => null,
        'ucc008' => null,
        'ucc009' => null,
        'ucc010' => null,
        'ucc011' => null,
        'ucc012' => null,
        'ucc013' => null,
        'ucc014' => null,
        'ucc015' => null,
        'ucc016' => null,
        'dmo004' => null,
        'dmo014' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'atc039' => false,
        'ctb019' => false,
        'jdc008' => false,
        'ntb019' => false,
        'ntc032' => false,
        'otb001' => false,
        'otc006' => false,
        'rtb019' => false,
        'rtc048' => false,
        'ttb021' => false,
        'ttb022' => false,
        'ttb028' => false,
        'ttb029' => false,
        'ttb030' => false,
        'ttb031' => false,
        'ttb032' => false,
        'ttc050' => false,
        'ttp085' => false,
        'ttp086' => false,
        'txb005' => false,
        'txc008' => false,
        'acc001' => false,
        'acc002' => false,
        'acc003' => false,
        'acc004' => false,
        'acc005' => false,
        'acc006' => false,
        'acc007' => false,
        'acc008' => false,
        'atb001' => false,
        'atb002' => false,
        'atb003' => false,
        'atb004' => false,
        'atb005' => false,
        'atb006' => false,
        'atb007' => false,
        'atb008' => false,
        'atb009' => false,
        'atb010' => false,
        'atb011' => false,
        'atb012' => false,
        'atb013' => false,
        'atb014' => false,
        'atb015' => false,
        'atb016' => false,
        'atb017' => false,
        'atb018' => false,
        'atb019' => false,
        'atc020' => false,
        'atc021' => false,
        'atc022' => false,
        'atc023' => false,
        'atc024' => false,
        'atc025' => false,
        'atc026' => false,
        'atc027' => false,
        'atc028' => false,
        'atc029' => false,
        'atc030' => false,
        'atc031' => false,
        'atc032' => false,
        'atd034' => false,
        'atd035' => false,
        'atp036' => false,
        'atp037' => false,
        'atp038' => false,
        'bkb001' => false,
        'bkb002' => false,
        'bkb003' => false,
        'bkc004' => false,
        'bkc005' => false,
        'bkc006' => false,
        'bkc007' => false,
        'bkc008' => false,
        'bko009' => false,
        'bko010' => false,
        'bko011' => false,
        'brb001' => false,
        'brb002' => false,
        'brb003' => false,
        'brb004' => false,
        'brb005' => false,
        'brb006' => false,
        'brb007' => false,
        'brc008' => false,
        'brc009' => false,
        'brc010' => false,
        'brc011' => false,
        'brc012' => false,
        'brc013' => false,
        'brc014' => false,
        'bro015' => false,
        'bro016' => false,
        'bro017' => false,
        'brp018' => false,
        'brp019' => false,
        'brp020' => false,
        'brp021' => false,
        'brp022' => false,
        'brp023' => false,
        'clb001' => false,
        'clb002' => false,
        'clb003' => false,
        'clb004' => false,
        'clb005' => false,
        'clc006' => false,
        'clc007' => false,
        'clc008' => false,
        'clc009' => false,
        'clc010' => false,
        'clc011' => false,
        'clc012' => false,
        'clc013' => false,
        'clo014' => false,
        'clo015' => false,
        'clp016' => false,
        'clp017' => false,
        'clp018' => false,
        'clp019' => false,
        'ctb001' => false,
        'ctb002' => false,
        'ctb003' => false,
        'ctb004' => false,
        'ctb005' => false,
        'ctb006' => false,
        'ctb007' => false,
        'ctb008' => false,
        'ctb009' => false,
        'ctb010' => false,
        'ctb011' => false,
        'ctb012' => false,
        'ctb013' => false,
        'ctb014' => false,
        'ctb015' => false,
        'ctb016' => false,
        'ctb017' => false,
        'ctb018' => false,
        'ctc021' => false,
        'ctc022' => false,
        'ctc023' => false,
        'ctc024' => false,
        'ctc025' => false,
        'ctc026' => false,
        'ctc027' => false,
        'ctc028' => false,
        'ctc029' => false,
        'ctc030' => false,
        'ctc031' => false,
        'ctc032' => false,
        'ctc033' => false,
        'ctc034' => false,
        'ctc035' => false,
        'ctc036' => false,
        'ctd038' => false,
        'ctp039' => false,
        'ctp040' => false,
        'ctp041' => false,
        'dmo003' => false,
        'dmo009' => false,
        'dmo013' => false,
        'iqc001' => false,
        'iqc002' => false,
        'iqc003' => false,
        'jdb001' => false,
        'jdb002' => false,
        'jdb003' => false,
        'jdb004' => false,
        'jdb005' => false,
        'jdb006' => false,
        'jdc007' => false,
        'jdc009' => false,
        'jdc010' => false,
        'jdc011' => false,
        'jdc012' => false,
        'jdo013' => false,
        'jdo014' => false,
        'jdp015' => false,
        'jdp016' => false,
        'jdp017' => false,
        'lgc002' => false,
        'lgc003' => false,
        'lgc004' => false,
        'lsb001' => false,
        'lsb002' => false,
        'lsb003' => false,
        'lsb004' => false,
        'lsb005' => false,
        'lsb006' => false,
        'lsb007' => false,
        'lsb008' => false,
        'lsb009' => false,
        'lsc010' => false,
        'lsc011' => false,
        'lsc012' => false,
        'lsc013' => false,
        'lsc014' => false,
        'lsc015' => false,
        'lsc016' => false,
        'lsc017' => false,
        'lsc018' => false,
        'lsc019' => false,
        'lsc020' => false,
        'lsc021' => false,
        'lsc022' => false,
        'lsc023' => false,
        'lsc024' => false,
        'lsc025' => false,
        'lsc026' => false,
        'lsc027' => false,
        'lsc028' => false,
        'lsc029' => false,
        'lsc030' => false,
        'lsc031' => false,
        'lsc032' => false,
        'lsc033' => false,
        'lsp034' => false,
        'lsp035' => false,
        'ntb001' => false,
        'ntb002' => false,
        'ntb003' => false,
        'ntb004' => false,
        'ntb005' => false,
        'ntb006' => false,
        'ntb007' => false,
        'ntb008' => false,
        'ntb009' => false,
        'ntb010' => false,
        'ntb011' => false,
        'ntb012' => false,
        'ntb013' => false,
        'ntb014' => false,
        'ntb015' => false,
        'ntb016' => false,
        'ntb017' => false,
        'ntb018' => false,
        'ntc020' => false,
        'ntc021' => false,
        'ntc022' => false,
        'ntc023' => false,
        'ntc024' => false,
        'ntc025' => false,
        'ntc026' => false,
        'ntc027' => false,
        'ntc028' => false,
        'ntc029' => false,
        'ntc030' => false,
        'ntc031' => false,
        'ntd034' => false,
        'ntd035' => false,
        'ntp036' => false,
        'ntp037' => false,
        'ntp038' => false,
        'ntp039' => false,
        'otb002' => false,
        'otb003' => false,
        'otb004' => false,
        'otb005' => false,
        'otc007' => false,
        'otc008' => false,
        'otc009' => false,
        'otc010' => false,
        'otc011' => false,
        'otd012' => false,
        'otd013' => false,
        'otp014' => false,
        'otp015' => false,
        'otp016' => false,
        'otp017' => false,
        'otp018' => false,
        'otp019' => false,
        'otp020' => false,
        'otp021' => false,
        'pro001' => false,
        'pro002' => false,
        'pro003' => false,
        'rtb001' => false,
        'rtb002' => false,
        'rtb003' => false,
        'rtb004' => false,
        'rtb005' => false,
        'rtb006' => false,
        'rtb007' => false,
        'rtb008' => false,
        'rtb009' => false,
        'rtb010' => false,
        'rtb011' => false,
        'rtb012' => false,
        'rtb013' => false,
        'rtb014' => false,
        'rtb015' => false,
        'rtb016' => false,
        'rtb017' => false,
        'rtb018' => false,
        'rtb020' => false,
        'rtb021' => false,
        'rtb022' => false,
        'rtb023' => false,
        'rtb024' => false,
        'rtb025' => false,
        'rtb026' => false,
        'rtb027' => false,
        'rtb028' => false,
        'rtb029' => false,
        'rtb030' => false,
        'rtb031' => false,
        'rtb032' => false,
        'rtb033' => false,
        'rtb034' => false,
        'rtb035' => false,
        'rtc036' => false,
        'rtc037' => false,
        'rtc038' => false,
        'rtc039' => false,
        'rtc040' => false,
        'rtc041' => false,
        'rtc042' => false,
        'rtc043' => false,
        'rtc044' => false,
        'rtc045' => false,
        'rtc046' => false,
        'rtc047' => false,
        'rtc049' => false,
        'rtc050' => false,
        'rtc051' => false,
        'rtc052' => false,
        'rtc053' => false,
        'rtc054' => false,
        'rtd059' => false,
        'rtd060' => false,
        'rtd061' => false,
        'rtd062' => false,
        'rtd063' => false,
        'rtd064' => false,
        'rtd065' => false,
        'rtd067' => false,
        'rtd068' => false,
        'rtd069' => false,
        'rtd070' => false,
        'rtd071' => false,
        'rtd072' => false,
        'rto077' => false,
        'rto079' => false,
        'rtp081' => false,
        'rtp082' => false,
        'rtp083' => false,
        'rtp086' => false,
        'ttb001' => false,
        'ttb002' => false,
        'ttb003' => false,
        'ttb004' => false,
        'ttb005' => false,
        'ttb006' => false,
        'ttb007' => false,
        'ttb008' => false,
        'ttb009' => false,
        'ttb010' => false,
        'ttb011' => false,
        'ttb012' => false,
        'ttb013' => false,
        'ttb014' => false,
        'ttb015' => false,
        'ttb016' => false,
        'ttb017' => false,
        'ttb018' => false,
        'ttb019' => false,
        'ttb020' => false,
        'ttb023' => false,
        'ttb024' => false,
        'ttb025' => false,
        'ttb026' => false,
        'ttb027' => false,
        'ttb033' => false,
        'ttc035' => false,
        'ttc036' => false,
        'ttc037' => false,
        'ttc038' => false,
        'ttc039' => false,
        'ttc040' => false,
        'ttc041' => false,
        'ttc042' => false,
        'ttc043' => false,
        'ttc044' => false,
        'ttc045' => false,
        'ttc046' => false,
        'ttc047' => false,
        'ttc048' => false,
        'ttc049' => false,
        'ttc051' => false,
        'ttc052' => false,
        'ttc053' => false,
        'ttc054' => false,
        'ttc055' => false,
        'ttc056' => false,
        'ttc057' => false,
        'ttc058' => false,
        'ttc059' => false,
        'ttc060' => false,
        'ttc061' => false,
        'ttc063' => false,
        'ttc064' => false,
        'ttc065' => false,
        'ttc066' => false,
        'ttc067' => false,
        'ttc068' => false,
        'ttc069' => false,
        'ttc070' => false,
        'tto074' => false,
        'tto075' => false,
        'tto076' => false,
        'tto077' => false,
        'ttp079' => false,
        'ttp080' => false,
        'ttp084' => false,
        'txb001' => false,
        'txb002' => false,
        'txb003' => false,
        'txb004' => false,
        'txb006' => false,
        'txc007' => false,
        'txc009' => false,
        'txc010' => false,
        'txc011' => false,
        'txc012' => false,
        'txo013' => false,
        'txo014' => false,
        'txp015' => false,
        'txp016' => false,
        'txp017' => false,
        'ucc001' => false,
        'ucc002' => false,
        'ucc003' => false,
        'ucc004' => false,
        'ucc005' => false,
        'ucc006' => false,
        'ucc007' => false,
        'ucc008' => false,
        'ucc009' => false,
        'ucc010' => false,
        'ucc011' => false,
        'ucc012' => false,
        'ucc013' => false,
        'ucc014' => false,
        'ucc015' => false,
        'ucc016' => false,
        'dmo004' => false,
        'dmo014' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'atc039' => 'ATC039',
        'ctb019' => 'CTB019',
        'jdc008' => 'JDC008',
        'ntb019' => 'NTB019',
        'ntc032' => 'NTC032',
        'otb001' => 'OTB001',
        'otc006' => 'OTC006',
        'rtb019' => 'RTB019',
        'rtc048' => 'RTC048',
        'ttb021' => 'TTB021',
        'ttb022' => 'TTB022',
        'ttb028' => 'TTB028',
        'ttb029' => 'TTB029',
        'ttb030' => 'TTB030',
        'ttb031' => 'TTB031',
        'ttb032' => 'TTB032',
        'ttc050' => 'TTC050',
        'ttp085' => 'TTP085',
        'ttp086' => 'TTP086',
        'txb005' => 'TXB005',
        'txc008' => 'TXC008',
        'acc001' => 'ACC001',
        'acc002' => 'ACC002',
        'acc003' => 'ACC003',
        'acc004' => 'ACC004',
        'acc005' => 'ACC005',
        'acc006' => 'ACC006',
        'acc007' => 'ACC007',
        'acc008' => 'ACC008',
        'atb001' => 'ATB001',
        'atb002' => 'ATB002',
        'atb003' => 'ATB003',
        'atb004' => 'ATB004',
        'atb005' => 'ATB005',
        'atb006' => 'ATB006',
        'atb007' => 'ATB007',
        'atb008' => 'ATB008',
        'atb009' => 'ATB009',
        'atb010' => 'ATB010',
        'atb011' => 'ATB011',
        'atb012' => 'ATB012',
        'atb013' => 'ATB013',
        'atb014' => 'ATB014',
        'atb015' => 'ATB015',
        'atb016' => 'ATB016',
        'atb017' => 'ATB017',
        'atb018' => 'ATB018',
        'atb019' => 'ATB019',
        'atc020' => 'ATC020',
        'atc021' => 'ATC021',
        'atc022' => 'ATC022',
        'atc023' => 'ATC023',
        'atc024' => 'ATC024',
        'atc025' => 'ATC025',
        'atc026' => 'ATC026',
        'atc027' => 'ATC027',
        'atc028' => 'ATC028',
        'atc029' => 'ATC029',
        'atc030' => 'ATC030',
        'atc031' => 'ATC031',
        'atc032' => 'ATC032',
        'atd034' => 'ATD034',
        'atd035' => 'ATD035',
        'atp036' => 'ATP036',
        'atp037' => 'ATP037',
        'atp038' => 'ATP038',
        'bkb001' => 'BKB001',
        'bkb002' => 'BKB002',
        'bkb003' => 'BKB003',
        'bkc004' => 'BKC004',
        'bkc005' => 'BKC005',
        'bkc006' => 'BKC006',
        'bkc007' => 'BKC007',
        'bkc008' => 'BKC008',
        'bko009' => 'BKO009',
        'bko010' => 'BKO010',
        'bko011' => 'BKO011',
        'brb001' => 'BRB001',
        'brb002' => 'BRB002',
        'brb003' => 'BRB003',
        'brb004' => 'BRB004',
        'brb005' => 'BRB005',
        'brb006' => 'BRB006',
        'brb007' => 'BRB007',
        'brc008' => 'BRC008',
        'brc009' => 'BRC009',
        'brc010' => 'BRC010',
        'brc011' => 'BRC011',
        'brc012' => 'BRC012',
        'brc013' => 'BRC013',
        'brc014' => 'BRC014',
        'bro015' => 'BRO015',
        'bro016' => 'BRO016',
        'bro017' => 'BRO017',
        'brp018' => 'BRP018',
        'brp019' => 'BRP019',
        'brp020' => 'BRP020',
        'brp021' => 'BRP021',
        'brp022' => 'BRP022',
        'brp023' => 'BRP023',
        'clb001' => 'CLB001',
        'clb002' => 'CLB002',
        'clb003' => 'CLB003',
        'clb004' => 'CLB004',
        'clb005' => 'CLB005',
        'clc006' => 'CLC006',
        'clc007' => 'CLC007',
        'clc008' => 'CLC008',
        'clc009' => 'CLC009',
        'clc010' => 'CLC010',
        'clc011' => 'CLC011',
        'clc012' => 'CLC012',
        'clc013' => 'CLC013',
        'clo014' => 'CLO014',
        'clo015' => 'CLO015',
        'clp016' => 'CLP016',
        'clp017' => 'CLP017',
        'clp018' => 'CLP018',
        'clp019' => 'CLP019',
        'ctb001' => 'CTB001',
        'ctb002' => 'CTB002',
        'ctb003' => 'CTB003',
        'ctb004' => 'CTB004',
        'ctb005' => 'CTB005',
        'ctb006' => 'CTB006',
        'ctb007' => 'CTB007',
        'ctb008' => 'CTB008',
        'ctb009' => 'CTB009',
        'ctb010' => 'CTB010',
        'ctb011' => 'CTB011',
        'ctb012' => 'CTB012',
        'ctb013' => 'CTB013',
        'ctb014' => 'CTB014',
        'ctb015' => 'CTB015',
        'ctb016' => 'CTB016',
        'ctb017' => 'CTB017',
        'ctb018' => 'CTB018',
        'ctc021' => 'CTC021',
        'ctc022' => 'CTC022',
        'ctc023' => 'CTC023',
        'ctc024' => 'CTC024',
        'ctc025' => 'CTC025',
        'ctc026' => 'CTC026',
        'ctc027' => 'CTC027',
        'ctc028' => 'CTC028',
        'ctc029' => 'CTC029',
        'ctc030' => 'CTC030',
        'ctc031' => 'CTC031',
        'ctc032' => 'CTC032',
        'ctc033' => 'CTC033',
        'ctc034' => 'CTC034',
        'ctc035' => 'CTC035',
        'ctc036' => 'CTC036',
        'ctd038' => 'CTD038',
        'ctp039' => 'CTP039',
        'ctp040' => 'CTP040',
        'ctp041' => 'CTP041',
        'dmo003' => 'DMO003',
        'dmo009' => 'DMO009',
        'dmo013' => 'DMO013',
        'iqc001' => 'IQC001',
        'iqc002' => 'IQC002',
        'iqc003' => 'IQC003',
        'jdb001' => 'JDB001',
        'jdb002' => 'JDB002',
        'jdb003' => 'JDB003',
        'jdb004' => 'JDB004',
        'jdb005' => 'JDB005',
        'jdb006' => 'JDB006',
        'jdc007' => 'JDC007',
        'jdc009' => 'JDC009',
        'jdc010' => 'JDC010',
        'jdc011' => 'JDC011',
        'jdc012' => 'JDC012',
        'jdo013' => 'JDO013',
        'jdo014' => 'JDO014',
        'jdp015' => 'JDP015',
        'jdp016' => 'JDP016',
        'jdp017' => 'JDP017',
        'lgc002' => 'LGC002',
        'lgc003' => 'LGC003',
        'lgc004' => 'LGC004',
        'lsb001' => 'LSB001',
        'lsb002' => 'LSB002',
        'lsb003' => 'LSB003',
        'lsb004' => 'LSB004',
        'lsb005' => 'LSB005',
        'lsb006' => 'LSB006',
        'lsb007' => 'LSB007',
        'lsb008' => 'LSB008',
        'lsb009' => 'LSB009',
        'lsc010' => 'LSC010',
        'lsc011' => 'LSC011',
        'lsc012' => 'LSC012',
        'lsc013' => 'LSC013',
        'lsc014' => 'LSC014',
        'lsc015' => 'LSC015',
        'lsc016' => 'LSC016',
        'lsc017' => 'LSC017',
        'lsc018' => 'LSC018',
        'lsc019' => 'LSC019',
        'lsc020' => 'LSC020',
        'lsc021' => 'LSC021',
        'lsc022' => 'LSC022',
        'lsc023' => 'LSC023',
        'lsc024' => 'LSC024',
        'lsc025' => 'LSC025',
        'lsc026' => 'LSC026',
        'lsc027' => 'LSC027',
        'lsc028' => 'LSC028',
        'lsc029' => 'LSC029',
        'lsc030' => 'LSC030',
        'lsc031' => 'LSC031',
        'lsc032' => 'LSC032',
        'lsc033' => 'LSC033',
        'lsp034' => 'LSP034',
        'lsp035' => 'LSP035',
        'ntb001' => 'NTB001',
        'ntb002' => 'NTB002',
        'ntb003' => 'NTB003',
        'ntb004' => 'NTB004',
        'ntb005' => 'NTB005',
        'ntb006' => 'NTB006',
        'ntb007' => 'NTB007',
        'ntb008' => 'NTB008',
        'ntb009' => 'NTB009',
        'ntb010' => 'NTB010',
        'ntb011' => 'NTB011',
        'ntb012' => 'NTB012',
        'ntb013' => 'NTB013',
        'ntb014' => 'NTB014',
        'ntb015' => 'NTB015',
        'ntb016' => 'NTB016',
        'ntb017' => 'NTB017',
        'ntb018' => 'NTB018',
        'ntc020' => 'NTC020',
        'ntc021' => 'NTC021',
        'ntc022' => 'NTC022',
        'ntc023' => 'NTC023',
        'ntc024' => 'NTC024',
        'ntc025' => 'NTC025',
        'ntc026' => 'NTC026',
        'ntc027' => 'NTC027',
        'ntc028' => 'NTC028',
        'ntc029' => 'NTC029',
        'ntc030' => 'NTC030',
        'ntc031' => 'NTC031',
        'ntd034' => 'NTD034',
        'ntd035' => 'NTD035',
        'ntp036' => 'NTP036',
        'ntp037' => 'NTP037',
        'ntp038' => 'NTP038',
        'ntp039' => 'NTP039',
        'otb002' => 'OTB002',
        'otb003' => 'OTB003',
        'otb004' => 'OTB004',
        'otb005' => 'OTB005',
        'otc007' => 'OTC007',
        'otc008' => 'OTC008',
        'otc009' => 'OTC009',
        'otc010' => 'OTC010',
        'otc011' => 'OTC011',
        'otd012' => 'OTD012',
        'otd013' => 'OTD013',
        'otp014' => 'OTP014',
        'otp015' => 'OTP015',
        'otp016' => 'OTP016',
        'otp017' => 'OTP017',
        'otp018' => 'OTP018',
        'otp019' => 'OTP019',
        'otp020' => 'OTP020',
        'otp021' => 'OTP021',
        'pro001' => 'PRO001',
        'pro002' => 'PRO002',
        'pro003' => 'PRO003',
        'rtb001' => 'RTB001',
        'rtb002' => 'RTB002',
        'rtb003' => 'RTB003',
        'rtb004' => 'RTB004',
        'rtb005' => 'RTB005',
        'rtb006' => 'RTB006',
        'rtb007' => 'RTB007',
        'rtb008' => 'RTB008',
        'rtb009' => 'RTB009',
        'rtb010' => 'RTB010',
        'rtb011' => 'RTB011',
        'rtb012' => 'RTB012',
        'rtb013' => 'RTB013',
        'rtb014' => 'RTB014',
        'rtb015' => 'RTB015',
        'rtb016' => 'RTB016',
        'rtb017' => 'RTB017',
        'rtb018' => 'RTB018',
        'rtb020' => 'RTB020',
        'rtb021' => 'RTB021',
        'rtb022' => 'RTB022',
        'rtb023' => 'RTB023',
        'rtb024' => 'RTB024',
        'rtb025' => 'RTB025',
        'rtb026' => 'RTB026',
        'rtb027' => 'RTB027',
        'rtb028' => 'RTB028',
        'rtb029' => 'RTB029',
        'rtb030' => 'RTB030',
        'rtb031' => 'RTB031',
        'rtb032' => 'RTB032',
        'rtb033' => 'RTB033',
        'rtb034' => 'RTB034',
        'rtb035' => 'RTB035',
        'rtc036' => 'RTC036',
        'rtc037' => 'RTC037',
        'rtc038' => 'RTC038',
        'rtc039' => 'RTC039',
        'rtc040' => 'RTC040',
        'rtc041' => 'RTC041',
        'rtc042' => 'RTC042',
        'rtc043' => 'RTC043',
        'rtc044' => 'RTC044',
        'rtc045' => 'RTC045',
        'rtc046' => 'RTC046',
        'rtc047' => 'RTC047',
        'rtc049' => 'RTC049',
        'rtc050' => 'RTC050',
        'rtc051' => 'RTC051',
        'rtc052' => 'RTC052',
        'rtc053' => 'RTC053',
        'rtc054' => 'RTC054',
        'rtd059' => 'RTD059',
        'rtd060' => 'RTD060',
        'rtd061' => 'RTD061',
        'rtd062' => 'RTD062',
        'rtd063' => 'RTD063',
        'rtd064' => 'RTD064',
        'rtd065' => 'RTD065',
        'rtd067' => 'RTD067',
        'rtd068' => 'RTD068',
        'rtd069' => 'RTD069',
        'rtd070' => 'RTD070',
        'rtd071' => 'RTD071',
        'rtd072' => 'RTD072',
        'rto077' => 'RTO077',
        'rto079' => 'RTO079',
        'rtp081' => 'RTP081',
        'rtp082' => 'RTP082',
        'rtp083' => 'RTP083',
        'rtp086' => 'RTP086',
        'ttb001' => 'TTB001',
        'ttb002' => 'TTB002',
        'ttb003' => 'TTB003',
        'ttb004' => 'TTB004',
        'ttb005' => 'TTB005',
        'ttb006' => 'TTB006',
        'ttb007' => 'TTB007',
        'ttb008' => 'TTB008',
        'ttb009' => 'TTB009',
        'ttb010' => 'TTB010',
        'ttb011' => 'TTB011',
        'ttb012' => 'TTB012',
        'ttb013' => 'TTB013',
        'ttb014' => 'TTB014',
        'ttb015' => 'TTB015',
        'ttb016' => 'TTB016',
        'ttb017' => 'TTB017',
        'ttb018' => 'TTB018',
        'ttb019' => 'TTB019',
        'ttb020' => 'TTB020',
        'ttb023' => 'TTB023',
        'ttb024' => 'TTB024',
        'ttb025' => 'TTB025',
        'ttb026' => 'TTB026',
        'ttb027' => 'TTB027',
        'ttb033' => 'TTB033',
        'ttc035' => 'TTC035',
        'ttc036' => 'TTC036',
        'ttc037' => 'TTC037',
        'ttc038' => 'TTC038',
        'ttc039' => 'TTC039',
        'ttc040' => 'TTC040',
        'ttc041' => 'TTC041',
        'ttc042' => 'TTC042',
        'ttc043' => 'TTC043',
        'ttc044' => 'TTC044',
        'ttc045' => 'TTC045',
        'ttc046' => 'TTC046',
        'ttc047' => 'TTC047',
        'ttc048' => 'TTC048',
        'ttc049' => 'TTC049',
        'ttc051' => 'TTC051',
        'ttc052' => 'TTC052',
        'ttc053' => 'TTC053',
        'ttc054' => 'TTC054',
        'ttc055' => 'TTC055',
        'ttc056' => 'TTC056',
        'ttc057' => 'TTC057',
        'ttc058' => 'TTC058',
        'ttc059' => 'TTC059',
        'ttc060' => 'TTC060',
        'ttc061' => 'TTC061',
        'ttc063' => 'TTC063',
        'ttc064' => 'TTC064',
        'ttc065' => 'TTC065',
        'ttc066' => 'TTC066',
        'ttc067' => 'TTC067',
        'ttc068' => 'TTC068',
        'ttc069' => 'TTC069',
        'ttc070' => 'TTC070',
        'tto074' => 'TTO074',
        'tto075' => 'TTO075',
        'tto076' => 'TTO076',
        'tto077' => 'TTO077',
        'ttp079' => 'TTP079',
        'ttp080' => 'TTP080',
        'ttp084' => 'TTP084',
        'txb001' => 'TXB001',
        'txb002' => 'TXB002',
        'txb003' => 'TXB003',
        'txb004' => 'TXB004',
        'txb006' => 'TXB006',
        'txc007' => 'TXC007',
        'txc009' => 'TXC009',
        'txc010' => 'TXC010',
        'txc011' => 'TXC011',
        'txc012' => 'TXC012',
        'txo013' => 'TXO013',
        'txo014' => 'TXO014',
        'txp015' => 'TXP015',
        'txp016' => 'TXP016',
        'txp017' => 'TXP017',
        'ucc001' => 'UCC001',
        'ucc002' => 'UCC002',
        'ucc003' => 'UCC003',
        'ucc004' => 'UCC004',
        'ucc005' => 'UCC005',
        'ucc006' => 'UCC006',
        'ucc007' => 'UCC007',
        'ucc008' => 'UCC008',
        'ucc009' => 'UCC009',
        'ucc010' => 'UCC010',
        'ucc011' => 'UCC011',
        'ucc012' => 'UCC012',
        'ucc013' => 'UCC013',
        'ucc014' => 'UCC014',
        'ucc015' => 'UCC015',
        'ucc016' => 'UCC016',
        'dmo004' => 'DMO004',
        'dmo014' => 'DMO014'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'atc039' => 'setAtc039',
        'ctb019' => 'setCtb019',
        'jdc008' => 'setJdc008',
        'ntb019' => 'setNtb019',
        'ntc032' => 'setNtc032',
        'otb001' => 'setOtb001',
        'otc006' => 'setOtc006',
        'rtb019' => 'setRtb019',
        'rtc048' => 'setRtc048',
        'ttb021' => 'setTtb021',
        'ttb022' => 'setTtb022',
        'ttb028' => 'setTtb028',
        'ttb029' => 'setTtb029',
        'ttb030' => 'setTtb030',
        'ttb031' => 'setTtb031',
        'ttb032' => 'setTtb032',
        'ttc050' => 'setTtc050',
        'ttp085' => 'setTtp085',
        'ttp086' => 'setTtp086',
        'txb005' => 'setTxb005',
        'txc008' => 'setTxc008',
        'acc001' => 'setAcc001',
        'acc002' => 'setAcc002',
        'acc003' => 'setAcc003',
        'acc004' => 'setAcc004',
        'acc005' => 'setAcc005',
        'acc006' => 'setAcc006',
        'acc007' => 'setAcc007',
        'acc008' => 'setAcc008',
        'atb001' => 'setAtb001',
        'atb002' => 'setAtb002',
        'atb003' => 'setAtb003',
        'atb004' => 'setAtb004',
        'atb005' => 'setAtb005',
        'atb006' => 'setAtb006',
        'atb007' => 'setAtb007',
        'atb008' => 'setAtb008',
        'atb009' => 'setAtb009',
        'atb010' => 'setAtb010',
        'atb011' => 'setAtb011',
        'atb012' => 'setAtb012',
        'atb013' => 'setAtb013',
        'atb014' => 'setAtb014',
        'atb015' => 'setAtb015',
        'atb016' => 'setAtb016',
        'atb017' => 'setAtb017',
        'atb018' => 'setAtb018',
        'atb019' => 'setAtb019',
        'atc020' => 'setAtc020',
        'atc021' => 'setAtc021',
        'atc022' => 'setAtc022',
        'atc023' => 'setAtc023',
        'atc024' => 'setAtc024',
        'atc025' => 'setAtc025',
        'atc026' => 'setAtc026',
        'atc027' => 'setAtc027',
        'atc028' => 'setAtc028',
        'atc029' => 'setAtc029',
        'atc030' => 'setAtc030',
        'atc031' => 'setAtc031',
        'atc032' => 'setAtc032',
        'atd034' => 'setAtd034',
        'atd035' => 'setAtd035',
        'atp036' => 'setAtp036',
        'atp037' => 'setAtp037',
        'atp038' => 'setAtp038',
        'bkb001' => 'setBkb001',
        'bkb002' => 'setBkb002',
        'bkb003' => 'setBkb003',
        'bkc004' => 'setBkc004',
        'bkc005' => 'setBkc005',
        'bkc006' => 'setBkc006',
        'bkc007' => 'setBkc007',
        'bkc008' => 'setBkc008',
        'bko009' => 'setBko009',
        'bko010' => 'setBko010',
        'bko011' => 'setBko011',
        'brb001' => 'setBrb001',
        'brb002' => 'setBrb002',
        'brb003' => 'setBrb003',
        'brb004' => 'setBrb004',
        'brb005' => 'setBrb005',
        'brb006' => 'setBrb006',
        'brb007' => 'setBrb007',
        'brc008' => 'setBrc008',
        'brc009' => 'setBrc009',
        'brc010' => 'setBrc010',
        'brc011' => 'setBrc011',
        'brc012' => 'setBrc012',
        'brc013' => 'setBrc013',
        'brc014' => 'setBrc014',
        'bro015' => 'setBro015',
        'bro016' => 'setBro016',
        'bro017' => 'setBro017',
        'brp018' => 'setBrp018',
        'brp019' => 'setBrp019',
        'brp020' => 'setBrp020',
        'brp021' => 'setBrp021',
        'brp022' => 'setBrp022',
        'brp023' => 'setBrp023',
        'clb001' => 'setClb001',
        'clb002' => 'setClb002',
        'clb003' => 'setClb003',
        'clb004' => 'setClb004',
        'clb005' => 'setClb005',
        'clc006' => 'setClc006',
        'clc007' => 'setClc007',
        'clc008' => 'setClc008',
        'clc009' => 'setClc009',
        'clc010' => 'setClc010',
        'clc011' => 'setClc011',
        'clc012' => 'setClc012',
        'clc013' => 'setClc013',
        'clo014' => 'setClo014',
        'clo015' => 'setClo015',
        'clp016' => 'setClp016',
        'clp017' => 'setClp017',
        'clp018' => 'setClp018',
        'clp019' => 'setClp019',
        'ctb001' => 'setCtb001',
        'ctb002' => 'setCtb002',
        'ctb003' => 'setCtb003',
        'ctb004' => 'setCtb004',
        'ctb005' => 'setCtb005',
        'ctb006' => 'setCtb006',
        'ctb007' => 'setCtb007',
        'ctb008' => 'setCtb008',
        'ctb009' => 'setCtb009',
        'ctb010' => 'setCtb010',
        'ctb011' => 'setCtb011',
        'ctb012' => 'setCtb012',
        'ctb013' => 'setCtb013',
        'ctb014' => 'setCtb014',
        'ctb015' => 'setCtb015',
        'ctb016' => 'setCtb016',
        'ctb017' => 'setCtb017',
        'ctb018' => 'setCtb018',
        'ctc021' => 'setCtc021',
        'ctc022' => 'setCtc022',
        'ctc023' => 'setCtc023',
        'ctc024' => 'setCtc024',
        'ctc025' => 'setCtc025',
        'ctc026' => 'setCtc026',
        'ctc027' => 'setCtc027',
        'ctc028' => 'setCtc028',
        'ctc029' => 'setCtc029',
        'ctc030' => 'setCtc030',
        'ctc031' => 'setCtc031',
        'ctc032' => 'setCtc032',
        'ctc033' => 'setCtc033',
        'ctc034' => 'setCtc034',
        'ctc035' => 'setCtc035',
        'ctc036' => 'setCtc036',
        'ctd038' => 'setCtd038',
        'ctp039' => 'setCtp039',
        'ctp040' => 'setCtp040',
        'ctp041' => 'setCtp041',
        'dmo003' => 'setDmo003',
        'dmo009' => 'setDmo009',
        'dmo013' => 'setDmo013',
        'iqc001' => 'setIqc001',
        'iqc002' => 'setIqc002',
        'iqc003' => 'setIqc003',
        'jdb001' => 'setJdb001',
        'jdb002' => 'setJdb002',
        'jdb003' => 'setJdb003',
        'jdb004' => 'setJdb004',
        'jdb005' => 'setJdb005',
        'jdb006' => 'setJdb006',
        'jdc007' => 'setJdc007',
        'jdc009' => 'setJdc009',
        'jdc010' => 'setJdc010',
        'jdc011' => 'setJdc011',
        'jdc012' => 'setJdc012',
        'jdo013' => 'setJdo013',
        'jdo014' => 'setJdo014',
        'jdp015' => 'setJdp015',
        'jdp016' => 'setJdp016',
        'jdp017' => 'setJdp017',
        'lgc002' => 'setLgc002',
        'lgc003' => 'setLgc003',
        'lgc004' => 'setLgc004',
        'lsb001' => 'setLsb001',
        'lsb002' => 'setLsb002',
        'lsb003' => 'setLsb003',
        'lsb004' => 'setLsb004',
        'lsb005' => 'setLsb005',
        'lsb006' => 'setLsb006',
        'lsb007' => 'setLsb007',
        'lsb008' => 'setLsb008',
        'lsb009' => 'setLsb009',
        'lsc010' => 'setLsc010',
        'lsc011' => 'setLsc011',
        'lsc012' => 'setLsc012',
        'lsc013' => 'setLsc013',
        'lsc014' => 'setLsc014',
        'lsc015' => 'setLsc015',
        'lsc016' => 'setLsc016',
        'lsc017' => 'setLsc017',
        'lsc018' => 'setLsc018',
        'lsc019' => 'setLsc019',
        'lsc020' => 'setLsc020',
        'lsc021' => 'setLsc021',
        'lsc022' => 'setLsc022',
        'lsc023' => 'setLsc023',
        'lsc024' => 'setLsc024',
        'lsc025' => 'setLsc025',
        'lsc026' => 'setLsc026',
        'lsc027' => 'setLsc027',
        'lsc028' => 'setLsc028',
        'lsc029' => 'setLsc029',
        'lsc030' => 'setLsc030',
        'lsc031' => 'setLsc031',
        'lsc032' => 'setLsc032',
        'lsc033' => 'setLsc033',
        'lsp034' => 'setLsp034',
        'lsp035' => 'setLsp035',
        'ntb001' => 'setNtb001',
        'ntb002' => 'setNtb002',
        'ntb003' => 'setNtb003',
        'ntb004' => 'setNtb004',
        'ntb005' => 'setNtb005',
        'ntb006' => 'setNtb006',
        'ntb007' => 'setNtb007',
        'ntb008' => 'setNtb008',
        'ntb009' => 'setNtb009',
        'ntb010' => 'setNtb010',
        'ntb011' => 'setNtb011',
        'ntb012' => 'setNtb012',
        'ntb013' => 'setNtb013',
        'ntb014' => 'setNtb014',
        'ntb015' => 'setNtb015',
        'ntb016' => 'setNtb016',
        'ntb017' => 'setNtb017',
        'ntb018' => 'setNtb018',
        'ntc020' => 'setNtc020',
        'ntc021' => 'setNtc021',
        'ntc022' => 'setNtc022',
        'ntc023' => 'setNtc023',
        'ntc024' => 'setNtc024',
        'ntc025' => 'setNtc025',
        'ntc026' => 'setNtc026',
        'ntc027' => 'setNtc027',
        'ntc028' => 'setNtc028',
        'ntc029' => 'setNtc029',
        'ntc030' => 'setNtc030',
        'ntc031' => 'setNtc031',
        'ntd034' => 'setNtd034',
        'ntd035' => 'setNtd035',
        'ntp036' => 'setNtp036',
        'ntp037' => 'setNtp037',
        'ntp038' => 'setNtp038',
        'ntp039' => 'setNtp039',
        'otb002' => 'setOtb002',
        'otb003' => 'setOtb003',
        'otb004' => 'setOtb004',
        'otb005' => 'setOtb005',
        'otc007' => 'setOtc007',
        'otc008' => 'setOtc008',
        'otc009' => 'setOtc009',
        'otc010' => 'setOtc010',
        'otc011' => 'setOtc011',
        'otd012' => 'setOtd012',
        'otd013' => 'setOtd013',
        'otp014' => 'setOtp014',
        'otp015' => 'setOtp015',
        'otp016' => 'setOtp016',
        'otp017' => 'setOtp017',
        'otp018' => 'setOtp018',
        'otp019' => 'setOtp019',
        'otp020' => 'setOtp020',
        'otp021' => 'setOtp021',
        'pro001' => 'setPro001',
        'pro002' => 'setPro002',
        'pro003' => 'setPro003',
        'rtb001' => 'setRtb001',
        'rtb002' => 'setRtb002',
        'rtb003' => 'setRtb003',
        'rtb004' => 'setRtb004',
        'rtb005' => 'setRtb005',
        'rtb006' => 'setRtb006',
        'rtb007' => 'setRtb007',
        'rtb008' => 'setRtb008',
        'rtb009' => 'setRtb009',
        'rtb010' => 'setRtb010',
        'rtb011' => 'setRtb011',
        'rtb012' => 'setRtb012',
        'rtb013' => 'setRtb013',
        'rtb014' => 'setRtb014',
        'rtb015' => 'setRtb015',
        'rtb016' => 'setRtb016',
        'rtb017' => 'setRtb017',
        'rtb018' => 'setRtb018',
        'rtb020' => 'setRtb020',
        'rtb021' => 'setRtb021',
        'rtb022' => 'setRtb022',
        'rtb023' => 'setRtb023',
        'rtb024' => 'setRtb024',
        'rtb025' => 'setRtb025',
        'rtb026' => 'setRtb026',
        'rtb027' => 'setRtb027',
        'rtb028' => 'setRtb028',
        'rtb029' => 'setRtb029',
        'rtb030' => 'setRtb030',
        'rtb031' => 'setRtb031',
        'rtb032' => 'setRtb032',
        'rtb033' => 'setRtb033',
        'rtb034' => 'setRtb034',
        'rtb035' => 'setRtb035',
        'rtc036' => 'setRtc036',
        'rtc037' => 'setRtc037',
        'rtc038' => 'setRtc038',
        'rtc039' => 'setRtc039',
        'rtc040' => 'setRtc040',
        'rtc041' => 'setRtc041',
        'rtc042' => 'setRtc042',
        'rtc043' => 'setRtc043',
        'rtc044' => 'setRtc044',
        'rtc045' => 'setRtc045',
        'rtc046' => 'setRtc046',
        'rtc047' => 'setRtc047',
        'rtc049' => 'setRtc049',
        'rtc050' => 'setRtc050',
        'rtc051' => 'setRtc051',
        'rtc052' => 'setRtc052',
        'rtc053' => 'setRtc053',
        'rtc054' => 'setRtc054',
        'rtd059' => 'setRtd059',
        'rtd060' => 'setRtd060',
        'rtd061' => 'setRtd061',
        'rtd062' => 'setRtd062',
        'rtd063' => 'setRtd063',
        'rtd064' => 'setRtd064',
        'rtd065' => 'setRtd065',
        'rtd067' => 'setRtd067',
        'rtd068' => 'setRtd068',
        'rtd069' => 'setRtd069',
        'rtd070' => 'setRtd070',
        'rtd071' => 'setRtd071',
        'rtd072' => 'setRtd072',
        'rto077' => 'setRto077',
        'rto079' => 'setRto079',
        'rtp081' => 'setRtp081',
        'rtp082' => 'setRtp082',
        'rtp083' => 'setRtp083',
        'rtp086' => 'setRtp086',
        'ttb001' => 'setTtb001',
        'ttb002' => 'setTtb002',
        'ttb003' => 'setTtb003',
        'ttb004' => 'setTtb004',
        'ttb005' => 'setTtb005',
        'ttb006' => 'setTtb006',
        'ttb007' => 'setTtb007',
        'ttb008' => 'setTtb008',
        'ttb009' => 'setTtb009',
        'ttb010' => 'setTtb010',
        'ttb011' => 'setTtb011',
        'ttb012' => 'setTtb012',
        'ttb013' => 'setTtb013',
        'ttb014' => 'setTtb014',
        'ttb015' => 'setTtb015',
        'ttb016' => 'setTtb016',
        'ttb017' => 'setTtb017',
        'ttb018' => 'setTtb018',
        'ttb019' => 'setTtb019',
        'ttb020' => 'setTtb020',
        'ttb023' => 'setTtb023',
        'ttb024' => 'setTtb024',
        'ttb025' => 'setTtb025',
        'ttb026' => 'setTtb026',
        'ttb027' => 'setTtb027',
        'ttb033' => 'setTtb033',
        'ttc035' => 'setTtc035',
        'ttc036' => 'setTtc036',
        'ttc037' => 'setTtc037',
        'ttc038' => 'setTtc038',
        'ttc039' => 'setTtc039',
        'ttc040' => 'setTtc040',
        'ttc041' => 'setTtc041',
        'ttc042' => 'setTtc042',
        'ttc043' => 'setTtc043',
        'ttc044' => 'setTtc044',
        'ttc045' => 'setTtc045',
        'ttc046' => 'setTtc046',
        'ttc047' => 'setTtc047',
        'ttc048' => 'setTtc048',
        'ttc049' => 'setTtc049',
        'ttc051' => 'setTtc051',
        'ttc052' => 'setTtc052',
        'ttc053' => 'setTtc053',
        'ttc054' => 'setTtc054',
        'ttc055' => 'setTtc055',
        'ttc056' => 'setTtc056',
        'ttc057' => 'setTtc057',
        'ttc058' => 'setTtc058',
        'ttc059' => 'setTtc059',
        'ttc060' => 'setTtc060',
        'ttc061' => 'setTtc061',
        'ttc063' => 'setTtc063',
        'ttc064' => 'setTtc064',
        'ttc065' => 'setTtc065',
        'ttc066' => 'setTtc066',
        'ttc067' => 'setTtc067',
        'ttc068' => 'setTtc068',
        'ttc069' => 'setTtc069',
        'ttc070' => 'setTtc070',
        'tto074' => 'setTto074',
        'tto075' => 'setTto075',
        'tto076' => 'setTto076',
        'tto077' => 'setTto077',
        'ttp079' => 'setTtp079',
        'ttp080' => 'setTtp080',
        'ttp084' => 'setTtp084',
        'txb001' => 'setTxb001',
        'txb002' => 'setTxb002',
        'txb003' => 'setTxb003',
        'txb004' => 'setTxb004',
        'txb006' => 'setTxb006',
        'txc007' => 'setTxc007',
        'txc009' => 'setTxc009',
        'txc010' => 'setTxc010',
        'txc011' => 'setTxc011',
        'txc012' => 'setTxc012',
        'txo013' => 'setTxo013',
        'txo014' => 'setTxo014',
        'txp015' => 'setTxp015',
        'txp016' => 'setTxp016',
        'txp017' => 'setTxp017',
        'ucc001' => 'setUcc001',
        'ucc002' => 'setUcc002',
        'ucc003' => 'setUcc003',
        'ucc004' => 'setUcc004',
        'ucc005' => 'setUcc005',
        'ucc006' => 'setUcc006',
        'ucc007' => 'setUcc007',
        'ucc008' => 'setUcc008',
        'ucc009' => 'setUcc009',
        'ucc010' => 'setUcc010',
        'ucc011' => 'setUcc011',
        'ucc012' => 'setUcc012',
        'ucc013' => 'setUcc013',
        'ucc014' => 'setUcc014',
        'ucc015' => 'setUcc015',
        'ucc016' => 'setUcc016',
        'dmo004' => 'setDmo004',
        'dmo014' => 'setDmo014'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'atc039' => 'getAtc039',
        'ctb019' => 'getCtb019',
        'jdc008' => 'getJdc008',
        'ntb019' => 'getNtb019',
        'ntc032' => 'getNtc032',
        'otb001' => 'getOtb001',
        'otc006' => 'getOtc006',
        'rtb019' => 'getRtb019',
        'rtc048' => 'getRtc048',
        'ttb021' => 'getTtb021',
        'ttb022' => 'getTtb022',
        'ttb028' => 'getTtb028',
        'ttb029' => 'getTtb029',
        'ttb030' => 'getTtb030',
        'ttb031' => 'getTtb031',
        'ttb032' => 'getTtb032',
        'ttc050' => 'getTtc050',
        'ttp085' => 'getTtp085',
        'ttp086' => 'getTtp086',
        'txb005' => 'getTxb005',
        'txc008' => 'getTxc008',
        'acc001' => 'getAcc001',
        'acc002' => 'getAcc002',
        'acc003' => 'getAcc003',
        'acc004' => 'getAcc004',
        'acc005' => 'getAcc005',
        'acc006' => 'getAcc006',
        'acc007' => 'getAcc007',
        'acc008' => 'getAcc008',
        'atb001' => 'getAtb001',
        'atb002' => 'getAtb002',
        'atb003' => 'getAtb003',
        'atb004' => 'getAtb004',
        'atb005' => 'getAtb005',
        'atb006' => 'getAtb006',
        'atb007' => 'getAtb007',
        'atb008' => 'getAtb008',
        'atb009' => 'getAtb009',
        'atb010' => 'getAtb010',
        'atb011' => 'getAtb011',
        'atb012' => 'getAtb012',
        'atb013' => 'getAtb013',
        'atb014' => 'getAtb014',
        'atb015' => 'getAtb015',
        'atb016' => 'getAtb016',
        'atb017' => 'getAtb017',
        'atb018' => 'getAtb018',
        'atb019' => 'getAtb019',
        'atc020' => 'getAtc020',
        'atc021' => 'getAtc021',
        'atc022' => 'getAtc022',
        'atc023' => 'getAtc023',
        'atc024' => 'getAtc024',
        'atc025' => 'getAtc025',
        'atc026' => 'getAtc026',
        'atc027' => 'getAtc027',
        'atc028' => 'getAtc028',
        'atc029' => 'getAtc029',
        'atc030' => 'getAtc030',
        'atc031' => 'getAtc031',
        'atc032' => 'getAtc032',
        'atd034' => 'getAtd034',
        'atd035' => 'getAtd035',
        'atp036' => 'getAtp036',
        'atp037' => 'getAtp037',
        'atp038' => 'getAtp038',
        'bkb001' => 'getBkb001',
        'bkb002' => 'getBkb002',
        'bkb003' => 'getBkb003',
        'bkc004' => 'getBkc004',
        'bkc005' => 'getBkc005',
        'bkc006' => 'getBkc006',
        'bkc007' => 'getBkc007',
        'bkc008' => 'getBkc008',
        'bko009' => 'getBko009',
        'bko010' => 'getBko010',
        'bko011' => 'getBko011',
        'brb001' => 'getBrb001',
        'brb002' => 'getBrb002',
        'brb003' => 'getBrb003',
        'brb004' => 'getBrb004',
        'brb005' => 'getBrb005',
        'brb006' => 'getBrb006',
        'brb007' => 'getBrb007',
        'brc008' => 'getBrc008',
        'brc009' => 'getBrc009',
        'brc010' => 'getBrc010',
        'brc011' => 'getBrc011',
        'brc012' => 'getBrc012',
        'brc013' => 'getBrc013',
        'brc014' => 'getBrc014',
        'bro015' => 'getBro015',
        'bro016' => 'getBro016',
        'bro017' => 'getBro017',
        'brp018' => 'getBrp018',
        'brp019' => 'getBrp019',
        'brp020' => 'getBrp020',
        'brp021' => 'getBrp021',
        'brp022' => 'getBrp022',
        'brp023' => 'getBrp023',
        'clb001' => 'getClb001',
        'clb002' => 'getClb002',
        'clb003' => 'getClb003',
        'clb004' => 'getClb004',
        'clb005' => 'getClb005',
        'clc006' => 'getClc006',
        'clc007' => 'getClc007',
        'clc008' => 'getClc008',
        'clc009' => 'getClc009',
        'clc010' => 'getClc010',
        'clc011' => 'getClc011',
        'clc012' => 'getClc012',
        'clc013' => 'getClc013',
        'clo014' => 'getClo014',
        'clo015' => 'getClo015',
        'clp016' => 'getClp016',
        'clp017' => 'getClp017',
        'clp018' => 'getClp018',
        'clp019' => 'getClp019',
        'ctb001' => 'getCtb001',
        'ctb002' => 'getCtb002',
        'ctb003' => 'getCtb003',
        'ctb004' => 'getCtb004',
        'ctb005' => 'getCtb005',
        'ctb006' => 'getCtb006',
        'ctb007' => 'getCtb007',
        'ctb008' => 'getCtb008',
        'ctb009' => 'getCtb009',
        'ctb010' => 'getCtb010',
        'ctb011' => 'getCtb011',
        'ctb012' => 'getCtb012',
        'ctb013' => 'getCtb013',
        'ctb014' => 'getCtb014',
        'ctb015' => 'getCtb015',
        'ctb016' => 'getCtb016',
        'ctb017' => 'getCtb017',
        'ctb018' => 'getCtb018',
        'ctc021' => 'getCtc021',
        'ctc022' => 'getCtc022',
        'ctc023' => 'getCtc023',
        'ctc024' => 'getCtc024',
        'ctc025' => 'getCtc025',
        'ctc026' => 'getCtc026',
        'ctc027' => 'getCtc027',
        'ctc028' => 'getCtc028',
        'ctc029' => 'getCtc029',
        'ctc030' => 'getCtc030',
        'ctc031' => 'getCtc031',
        'ctc032' => 'getCtc032',
        'ctc033' => 'getCtc033',
        'ctc034' => 'getCtc034',
        'ctc035' => 'getCtc035',
        'ctc036' => 'getCtc036',
        'ctd038' => 'getCtd038',
        'ctp039' => 'getCtp039',
        'ctp040' => 'getCtp040',
        'ctp041' => 'getCtp041',
        'dmo003' => 'getDmo003',
        'dmo009' => 'getDmo009',
        'dmo013' => 'getDmo013',
        'iqc001' => 'getIqc001',
        'iqc002' => 'getIqc002',
        'iqc003' => 'getIqc003',
        'jdb001' => 'getJdb001',
        'jdb002' => 'getJdb002',
        'jdb003' => 'getJdb003',
        'jdb004' => 'getJdb004',
        'jdb005' => 'getJdb005',
        'jdb006' => 'getJdb006',
        'jdc007' => 'getJdc007',
        'jdc009' => 'getJdc009',
        'jdc010' => 'getJdc010',
        'jdc011' => 'getJdc011',
        'jdc012' => 'getJdc012',
        'jdo013' => 'getJdo013',
        'jdo014' => 'getJdo014',
        'jdp015' => 'getJdp015',
        'jdp016' => 'getJdp016',
        'jdp017' => 'getJdp017',
        'lgc002' => 'getLgc002',
        'lgc003' => 'getLgc003',
        'lgc004' => 'getLgc004',
        'lsb001' => 'getLsb001',
        'lsb002' => 'getLsb002',
        'lsb003' => 'getLsb003',
        'lsb004' => 'getLsb004',
        'lsb005' => 'getLsb005',
        'lsb006' => 'getLsb006',
        'lsb007' => 'getLsb007',
        'lsb008' => 'getLsb008',
        'lsb009' => 'getLsb009',
        'lsc010' => 'getLsc010',
        'lsc011' => 'getLsc011',
        'lsc012' => 'getLsc012',
        'lsc013' => 'getLsc013',
        'lsc014' => 'getLsc014',
        'lsc015' => 'getLsc015',
        'lsc016' => 'getLsc016',
        'lsc017' => 'getLsc017',
        'lsc018' => 'getLsc018',
        'lsc019' => 'getLsc019',
        'lsc020' => 'getLsc020',
        'lsc021' => 'getLsc021',
        'lsc022' => 'getLsc022',
        'lsc023' => 'getLsc023',
        'lsc024' => 'getLsc024',
        'lsc025' => 'getLsc025',
        'lsc026' => 'getLsc026',
        'lsc027' => 'getLsc027',
        'lsc028' => 'getLsc028',
        'lsc029' => 'getLsc029',
        'lsc030' => 'getLsc030',
        'lsc031' => 'getLsc031',
        'lsc032' => 'getLsc032',
        'lsc033' => 'getLsc033',
        'lsp034' => 'getLsp034',
        'lsp035' => 'getLsp035',
        'ntb001' => 'getNtb001',
        'ntb002' => 'getNtb002',
        'ntb003' => 'getNtb003',
        'ntb004' => 'getNtb004',
        'ntb005' => 'getNtb005',
        'ntb006' => 'getNtb006',
        'ntb007' => 'getNtb007',
        'ntb008' => 'getNtb008',
        'ntb009' => 'getNtb009',
        'ntb010' => 'getNtb010',
        'ntb011' => 'getNtb011',
        'ntb012' => 'getNtb012',
        'ntb013' => 'getNtb013',
        'ntb014' => 'getNtb014',
        'ntb015' => 'getNtb015',
        'ntb016' => 'getNtb016',
        'ntb017' => 'getNtb017',
        'ntb018' => 'getNtb018',
        'ntc020' => 'getNtc020',
        'ntc021' => 'getNtc021',
        'ntc022' => 'getNtc022',
        'ntc023' => 'getNtc023',
        'ntc024' => 'getNtc024',
        'ntc025' => 'getNtc025',
        'ntc026' => 'getNtc026',
        'ntc027' => 'getNtc027',
        'ntc028' => 'getNtc028',
        'ntc029' => 'getNtc029',
        'ntc030' => 'getNtc030',
        'ntc031' => 'getNtc031',
        'ntd034' => 'getNtd034',
        'ntd035' => 'getNtd035',
        'ntp036' => 'getNtp036',
        'ntp037' => 'getNtp037',
        'ntp038' => 'getNtp038',
        'ntp039' => 'getNtp039',
        'otb002' => 'getOtb002',
        'otb003' => 'getOtb003',
        'otb004' => 'getOtb004',
        'otb005' => 'getOtb005',
        'otc007' => 'getOtc007',
        'otc008' => 'getOtc008',
        'otc009' => 'getOtc009',
        'otc010' => 'getOtc010',
        'otc011' => 'getOtc011',
        'otd012' => 'getOtd012',
        'otd013' => 'getOtd013',
        'otp014' => 'getOtp014',
        'otp015' => 'getOtp015',
        'otp016' => 'getOtp016',
        'otp017' => 'getOtp017',
        'otp018' => 'getOtp018',
        'otp019' => 'getOtp019',
        'otp020' => 'getOtp020',
        'otp021' => 'getOtp021',
        'pro001' => 'getPro001',
        'pro002' => 'getPro002',
        'pro003' => 'getPro003',
        'rtb001' => 'getRtb001',
        'rtb002' => 'getRtb002',
        'rtb003' => 'getRtb003',
        'rtb004' => 'getRtb004',
        'rtb005' => 'getRtb005',
        'rtb006' => 'getRtb006',
        'rtb007' => 'getRtb007',
        'rtb008' => 'getRtb008',
        'rtb009' => 'getRtb009',
        'rtb010' => 'getRtb010',
        'rtb011' => 'getRtb011',
        'rtb012' => 'getRtb012',
        'rtb013' => 'getRtb013',
        'rtb014' => 'getRtb014',
        'rtb015' => 'getRtb015',
        'rtb016' => 'getRtb016',
        'rtb017' => 'getRtb017',
        'rtb018' => 'getRtb018',
        'rtb020' => 'getRtb020',
        'rtb021' => 'getRtb021',
        'rtb022' => 'getRtb022',
        'rtb023' => 'getRtb023',
        'rtb024' => 'getRtb024',
        'rtb025' => 'getRtb025',
        'rtb026' => 'getRtb026',
        'rtb027' => 'getRtb027',
        'rtb028' => 'getRtb028',
        'rtb029' => 'getRtb029',
        'rtb030' => 'getRtb030',
        'rtb031' => 'getRtb031',
        'rtb032' => 'getRtb032',
        'rtb033' => 'getRtb033',
        'rtb034' => 'getRtb034',
        'rtb035' => 'getRtb035',
        'rtc036' => 'getRtc036',
        'rtc037' => 'getRtc037',
        'rtc038' => 'getRtc038',
        'rtc039' => 'getRtc039',
        'rtc040' => 'getRtc040',
        'rtc041' => 'getRtc041',
        'rtc042' => 'getRtc042',
        'rtc043' => 'getRtc043',
        'rtc044' => 'getRtc044',
        'rtc045' => 'getRtc045',
        'rtc046' => 'getRtc046',
        'rtc047' => 'getRtc047',
        'rtc049' => 'getRtc049',
        'rtc050' => 'getRtc050',
        'rtc051' => 'getRtc051',
        'rtc052' => 'getRtc052',
        'rtc053' => 'getRtc053',
        'rtc054' => 'getRtc054',
        'rtd059' => 'getRtd059',
        'rtd060' => 'getRtd060',
        'rtd061' => 'getRtd061',
        'rtd062' => 'getRtd062',
        'rtd063' => 'getRtd063',
        'rtd064' => 'getRtd064',
        'rtd065' => 'getRtd065',
        'rtd067' => 'getRtd067',
        'rtd068' => 'getRtd068',
        'rtd069' => 'getRtd069',
        'rtd070' => 'getRtd070',
        'rtd071' => 'getRtd071',
        'rtd072' => 'getRtd072',
        'rto077' => 'getRto077',
        'rto079' => 'getRto079',
        'rtp081' => 'getRtp081',
        'rtp082' => 'getRtp082',
        'rtp083' => 'getRtp083',
        'rtp086' => 'getRtp086',
        'ttb001' => 'getTtb001',
        'ttb002' => 'getTtb002',
        'ttb003' => 'getTtb003',
        'ttb004' => 'getTtb004',
        'ttb005' => 'getTtb005',
        'ttb006' => 'getTtb006',
        'ttb007' => 'getTtb007',
        'ttb008' => 'getTtb008',
        'ttb009' => 'getTtb009',
        'ttb010' => 'getTtb010',
        'ttb011' => 'getTtb011',
        'ttb012' => 'getTtb012',
        'ttb013' => 'getTtb013',
        'ttb014' => 'getTtb014',
        'ttb015' => 'getTtb015',
        'ttb016' => 'getTtb016',
        'ttb017' => 'getTtb017',
        'ttb018' => 'getTtb018',
        'ttb019' => 'getTtb019',
        'ttb020' => 'getTtb020',
        'ttb023' => 'getTtb023',
        'ttb024' => 'getTtb024',
        'ttb025' => 'getTtb025',
        'ttb026' => 'getTtb026',
        'ttb027' => 'getTtb027',
        'ttb033' => 'getTtb033',
        'ttc035' => 'getTtc035',
        'ttc036' => 'getTtc036',
        'ttc037' => 'getTtc037',
        'ttc038' => 'getTtc038',
        'ttc039' => 'getTtc039',
        'ttc040' => 'getTtc040',
        'ttc041' => 'getTtc041',
        'ttc042' => 'getTtc042',
        'ttc043' => 'getTtc043',
        'ttc044' => 'getTtc044',
        'ttc045' => 'getTtc045',
        'ttc046' => 'getTtc046',
        'ttc047' => 'getTtc047',
        'ttc048' => 'getTtc048',
        'ttc049' => 'getTtc049',
        'ttc051' => 'getTtc051',
        'ttc052' => 'getTtc052',
        'ttc053' => 'getTtc053',
        'ttc054' => 'getTtc054',
        'ttc055' => 'getTtc055',
        'ttc056' => 'getTtc056',
        'ttc057' => 'getTtc057',
        'ttc058' => 'getTtc058',
        'ttc059' => 'getTtc059',
        'ttc060' => 'getTtc060',
        'ttc061' => 'getTtc061',
        'ttc063' => 'getTtc063',
        'ttc064' => 'getTtc064',
        'ttc065' => 'getTtc065',
        'ttc066' => 'getTtc066',
        'ttc067' => 'getTtc067',
        'ttc068' => 'getTtc068',
        'ttc069' => 'getTtc069',
        'ttc070' => 'getTtc070',
        'tto074' => 'getTto074',
        'tto075' => 'getTto075',
        'tto076' => 'getTto076',
        'tto077' => 'getTto077',
        'ttp079' => 'getTtp079',
        'ttp080' => 'getTtp080',
        'ttp084' => 'getTtp084',
        'txb001' => 'getTxb001',
        'txb002' => 'getTxb002',
        'txb003' => 'getTxb003',
        'txb004' => 'getTxb004',
        'txb006' => 'getTxb006',
        'txc007' => 'getTxc007',
        'txc009' => 'getTxc009',
        'txc010' => 'getTxc010',
        'txc011' => 'getTxc011',
        'txc012' => 'getTxc012',
        'txo013' => 'getTxo013',
        'txo014' => 'getTxo014',
        'txp015' => 'getTxp015',
        'txp016' => 'getTxp016',
        'txp017' => 'getTxp017',
        'ucc001' => 'getUcc001',
        'ucc002' => 'getUcc002',
        'ucc003' => 'getUcc003',
        'ucc004' => 'getUcc004',
        'ucc005' => 'getUcc005',
        'ucc006' => 'getUcc006',
        'ucc007' => 'getUcc007',
        'ucc008' => 'getUcc008',
        'ucc009' => 'getUcc009',
        'ucc010' => 'getUcc010',
        'ucc011' => 'getUcc011',
        'ucc012' => 'getUcc012',
        'ucc013' => 'getUcc013',
        'ucc014' => 'getUcc014',
        'ucc015' => 'getUcc015',
        'ucc016' => 'getUcc016',
        'dmo004' => 'getDmo004',
        'dmo014' => 'getDmo014'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('atc039', $data ?? [], null);
        $this->setIfExists('ctb019', $data ?? [], null);
        $this->setIfExists('jdc008', $data ?? [], null);
        $this->setIfExists('ntb019', $data ?? [], null);
        $this->setIfExists('ntc032', $data ?? [], null);
        $this->setIfExists('otb001', $data ?? [], null);
        $this->setIfExists('otc006', $data ?? [], null);
        $this->setIfExists('rtb019', $data ?? [], null);
        $this->setIfExists('rtc048', $data ?? [], null);
        $this->setIfExists('ttb021', $data ?? [], null);
        $this->setIfExists('ttb022', $data ?? [], null);
        $this->setIfExists('ttb028', $data ?? [], null);
        $this->setIfExists('ttb029', $data ?? [], null);
        $this->setIfExists('ttb030', $data ?? [], null);
        $this->setIfExists('ttb031', $data ?? [], null);
        $this->setIfExists('ttb032', $data ?? [], null);
        $this->setIfExists('ttc050', $data ?? [], null);
        $this->setIfExists('ttp085', $data ?? [], null);
        $this->setIfExists('ttp086', $data ?? [], null);
        $this->setIfExists('txb005', $data ?? [], null);
        $this->setIfExists('txc008', $data ?? [], null);
        $this->setIfExists('acc001', $data ?? [], null);
        $this->setIfExists('acc002', $data ?? [], null);
        $this->setIfExists('acc003', $data ?? [], null);
        $this->setIfExists('acc004', $data ?? [], null);
        $this->setIfExists('acc005', $data ?? [], null);
        $this->setIfExists('acc006', $data ?? [], null);
        $this->setIfExists('acc007', $data ?? [], null);
        $this->setIfExists('acc008', $data ?? [], null);
        $this->setIfExists('atb001', $data ?? [], null);
        $this->setIfExists('atb002', $data ?? [], null);
        $this->setIfExists('atb003', $data ?? [], null);
        $this->setIfExists('atb004', $data ?? [], null);
        $this->setIfExists('atb005', $data ?? [], null);
        $this->setIfExists('atb006', $data ?? [], null);
        $this->setIfExists('atb007', $data ?? [], null);
        $this->setIfExists('atb008', $data ?? [], null);
        $this->setIfExists('atb009', $data ?? [], null);
        $this->setIfExists('atb010', $data ?? [], null);
        $this->setIfExists('atb011', $data ?? [], null);
        $this->setIfExists('atb012', $data ?? [], null);
        $this->setIfExists('atb013', $data ?? [], null);
        $this->setIfExists('atb014', $data ?? [], null);
        $this->setIfExists('atb015', $data ?? [], null);
        $this->setIfExists('atb016', $data ?? [], null);
        $this->setIfExists('atb017', $data ?? [], null);
        $this->setIfExists('atb018', $data ?? [], null);
        $this->setIfExists('atb019', $data ?? [], null);
        $this->setIfExists('atc020', $data ?? [], null);
        $this->setIfExists('atc021', $data ?? [], null);
        $this->setIfExists('atc022', $data ?? [], null);
        $this->setIfExists('atc023', $data ?? [], null);
        $this->setIfExists('atc024', $data ?? [], null);
        $this->setIfExists('atc025', $data ?? [], null);
        $this->setIfExists('atc026', $data ?? [], null);
        $this->setIfExists('atc027', $data ?? [], null);
        $this->setIfExists('atc028', $data ?? [], null);
        $this->setIfExists('atc029', $data ?? [], null);
        $this->setIfExists('atc030', $data ?? [], null);
        $this->setIfExists('atc031', $data ?? [], null);
        $this->setIfExists('atc032', $data ?? [], null);
        $this->setIfExists('atd034', $data ?? [], null);
        $this->setIfExists('atd035', $data ?? [], null);
        $this->setIfExists('atp036', $data ?? [], null);
        $this->setIfExists('atp037', $data ?? [], null);
        $this->setIfExists('atp038', $data ?? [], null);
        $this->setIfExists('bkb001', $data ?? [], null);
        $this->setIfExists('bkb002', $data ?? [], null);
        $this->setIfExists('bkb003', $data ?? [], null);
        $this->setIfExists('bkc004', $data ?? [], null);
        $this->setIfExists('bkc005', $data ?? [], null);
        $this->setIfExists('bkc006', $data ?? [], null);
        $this->setIfExists('bkc007', $data ?? [], null);
        $this->setIfExists('bkc008', $data ?? [], null);
        $this->setIfExists('bko009', $data ?? [], null);
        $this->setIfExists('bko010', $data ?? [], null);
        $this->setIfExists('bko011', $data ?? [], null);
        $this->setIfExists('brb001', $data ?? [], null);
        $this->setIfExists('brb002', $data ?? [], null);
        $this->setIfExists('brb003', $data ?? [], null);
        $this->setIfExists('brb004', $data ?? [], null);
        $this->setIfExists('brb005', $data ?? [], null);
        $this->setIfExists('brb006', $data ?? [], null);
        $this->setIfExists('brb007', $data ?? [], null);
        $this->setIfExists('brc008', $data ?? [], null);
        $this->setIfExists('brc009', $data ?? [], null);
        $this->setIfExists('brc010', $data ?? [], null);
        $this->setIfExists('brc011', $data ?? [], null);
        $this->setIfExists('brc012', $data ?? [], null);
        $this->setIfExists('brc013', $data ?? [], null);
        $this->setIfExists('brc014', $data ?? [], null);
        $this->setIfExists('bro015', $data ?? [], null);
        $this->setIfExists('bro016', $data ?? [], null);
        $this->setIfExists('bro017', $data ?? [], null);
        $this->setIfExists('brp018', $data ?? [], null);
        $this->setIfExists('brp019', $data ?? [], null);
        $this->setIfExists('brp020', $data ?? [], null);
        $this->setIfExists('brp021', $data ?? [], null);
        $this->setIfExists('brp022', $data ?? [], null);
        $this->setIfExists('brp023', $data ?? [], null);
        $this->setIfExists('clb001', $data ?? [], null);
        $this->setIfExists('clb002', $data ?? [], null);
        $this->setIfExists('clb003', $data ?? [], null);
        $this->setIfExists('clb004', $data ?? [], null);
        $this->setIfExists('clb005', $data ?? [], null);
        $this->setIfExists('clc006', $data ?? [], null);
        $this->setIfExists('clc007', $data ?? [], null);
        $this->setIfExists('clc008', $data ?? [], null);
        $this->setIfExists('clc009', $data ?? [], null);
        $this->setIfExists('clc010', $data ?? [], null);
        $this->setIfExists('clc011', $data ?? [], null);
        $this->setIfExists('clc012', $data ?? [], null);
        $this->setIfExists('clc013', $data ?? [], null);
        $this->setIfExists('clo014', $data ?? [], null);
        $this->setIfExists('clo015', $data ?? [], null);
        $this->setIfExists('clp016', $data ?? [], null);
        $this->setIfExists('clp017', $data ?? [], null);
        $this->setIfExists('clp018', $data ?? [], null);
        $this->setIfExists('clp019', $data ?? [], null);
        $this->setIfExists('ctb001', $data ?? [], null);
        $this->setIfExists('ctb002', $data ?? [], null);
        $this->setIfExists('ctb003', $data ?? [], null);
        $this->setIfExists('ctb004', $data ?? [], null);
        $this->setIfExists('ctb005', $data ?? [], null);
        $this->setIfExists('ctb006', $data ?? [], null);
        $this->setIfExists('ctb007', $data ?? [], null);
        $this->setIfExists('ctb008', $data ?? [], null);
        $this->setIfExists('ctb009', $data ?? [], null);
        $this->setIfExists('ctb010', $data ?? [], null);
        $this->setIfExists('ctb011', $data ?? [], null);
        $this->setIfExists('ctb012', $data ?? [], null);
        $this->setIfExists('ctb013', $data ?? [], null);
        $this->setIfExists('ctb014', $data ?? [], null);
        $this->setIfExists('ctb015', $data ?? [], null);
        $this->setIfExists('ctb016', $data ?? [], null);
        $this->setIfExists('ctb017', $data ?? [], null);
        $this->setIfExists('ctb018', $data ?? [], null);
        $this->setIfExists('ctc021', $data ?? [], null);
        $this->setIfExists('ctc022', $data ?? [], null);
        $this->setIfExists('ctc023', $data ?? [], null);
        $this->setIfExists('ctc024', $data ?? [], null);
        $this->setIfExists('ctc025', $data ?? [], null);
        $this->setIfExists('ctc026', $data ?? [], null);
        $this->setIfExists('ctc027', $data ?? [], null);
        $this->setIfExists('ctc028', $data ?? [], null);
        $this->setIfExists('ctc029', $data ?? [], null);
        $this->setIfExists('ctc030', $data ?? [], null);
        $this->setIfExists('ctc031', $data ?? [], null);
        $this->setIfExists('ctc032', $data ?? [], null);
        $this->setIfExists('ctc033', $data ?? [], null);
        $this->setIfExists('ctc034', $data ?? [], null);
        $this->setIfExists('ctc035', $data ?? [], null);
        $this->setIfExists('ctc036', $data ?? [], null);
        $this->setIfExists('ctd038', $data ?? [], null);
        $this->setIfExists('ctp039', $data ?? [], null);
        $this->setIfExists('ctp040', $data ?? [], null);
        $this->setIfExists('ctp041', $data ?? [], null);
        $this->setIfExists('dmo003', $data ?? [], null);
        $this->setIfExists('dmo009', $data ?? [], null);
        $this->setIfExists('dmo013', $data ?? [], null);
        $this->setIfExists('iqc001', $data ?? [], null);
        $this->setIfExists('iqc002', $data ?? [], null);
        $this->setIfExists('iqc003', $data ?? [], null);
        $this->setIfExists('jdb001', $data ?? [], null);
        $this->setIfExists('jdb002', $data ?? [], null);
        $this->setIfExists('jdb003', $data ?? [], null);
        $this->setIfExists('jdb004', $data ?? [], null);
        $this->setIfExists('jdb005', $data ?? [], null);
        $this->setIfExists('jdb006', $data ?? [], null);
        $this->setIfExists('jdc007', $data ?? [], null);
        $this->setIfExists('jdc009', $data ?? [], null);
        $this->setIfExists('jdc010', $data ?? [], null);
        $this->setIfExists('jdc011', $data ?? [], null);
        $this->setIfExists('jdc012', $data ?? [], null);
        $this->setIfExists('jdo013', $data ?? [], null);
        $this->setIfExists('jdo014', $data ?? [], null);
        $this->setIfExists('jdp015', $data ?? [], null);
        $this->setIfExists('jdp016', $data ?? [], null);
        $this->setIfExists('jdp017', $data ?? [], null);
        $this->setIfExists('lgc002', $data ?? [], null);
        $this->setIfExists('lgc003', $data ?? [], null);
        $this->setIfExists('lgc004', $data ?? [], null);
        $this->setIfExists('lsb001', $data ?? [], null);
        $this->setIfExists('lsb002', $data ?? [], null);
        $this->setIfExists('lsb003', $data ?? [], null);
        $this->setIfExists('lsb004', $data ?? [], null);
        $this->setIfExists('lsb005', $data ?? [], null);
        $this->setIfExists('lsb006', $data ?? [], null);
        $this->setIfExists('lsb007', $data ?? [], null);
        $this->setIfExists('lsb008', $data ?? [], null);
        $this->setIfExists('lsb009', $data ?? [], null);
        $this->setIfExists('lsc010', $data ?? [], null);
        $this->setIfExists('lsc011', $data ?? [], null);
        $this->setIfExists('lsc012', $data ?? [], null);
        $this->setIfExists('lsc013', $data ?? [], null);
        $this->setIfExists('lsc014', $data ?? [], null);
        $this->setIfExists('lsc015', $data ?? [], null);
        $this->setIfExists('lsc016', $data ?? [], null);
        $this->setIfExists('lsc017', $data ?? [], null);
        $this->setIfExists('lsc018', $data ?? [], null);
        $this->setIfExists('lsc019', $data ?? [], null);
        $this->setIfExists('lsc020', $data ?? [], null);
        $this->setIfExists('lsc021', $data ?? [], null);
        $this->setIfExists('lsc022', $data ?? [], null);
        $this->setIfExists('lsc023', $data ?? [], null);
        $this->setIfExists('lsc024', $data ?? [], null);
        $this->setIfExists('lsc025', $data ?? [], null);
        $this->setIfExists('lsc026', $data ?? [], null);
        $this->setIfExists('lsc027', $data ?? [], null);
        $this->setIfExists('lsc028', $data ?? [], null);
        $this->setIfExists('lsc029', $data ?? [], null);
        $this->setIfExists('lsc030', $data ?? [], null);
        $this->setIfExists('lsc031', $data ?? [], null);
        $this->setIfExists('lsc032', $data ?? [], null);
        $this->setIfExists('lsc033', $data ?? [], null);
        $this->setIfExists('lsp034', $data ?? [], null);
        $this->setIfExists('lsp035', $data ?? [], null);
        $this->setIfExists('ntb001', $data ?? [], null);
        $this->setIfExists('ntb002', $data ?? [], null);
        $this->setIfExists('ntb003', $data ?? [], null);
        $this->setIfExists('ntb004', $data ?? [], null);
        $this->setIfExists('ntb005', $data ?? [], null);
        $this->setIfExists('ntb006', $data ?? [], null);
        $this->setIfExists('ntb007', $data ?? [], null);
        $this->setIfExists('ntb008', $data ?? [], null);
        $this->setIfExists('ntb009', $data ?? [], null);
        $this->setIfExists('ntb010', $data ?? [], null);
        $this->setIfExists('ntb011', $data ?? [], null);
        $this->setIfExists('ntb012', $data ?? [], null);
        $this->setIfExists('ntb013', $data ?? [], null);
        $this->setIfExists('ntb014', $data ?? [], null);
        $this->setIfExists('ntb015', $data ?? [], null);
        $this->setIfExists('ntb016', $data ?? [], null);
        $this->setIfExists('ntb017', $data ?? [], null);
        $this->setIfExists('ntb018', $data ?? [], null);
        $this->setIfExists('ntc020', $data ?? [], null);
        $this->setIfExists('ntc021', $data ?? [], null);
        $this->setIfExists('ntc022', $data ?? [], null);
        $this->setIfExists('ntc023', $data ?? [], null);
        $this->setIfExists('ntc024', $data ?? [], null);
        $this->setIfExists('ntc025', $data ?? [], null);
        $this->setIfExists('ntc026', $data ?? [], null);
        $this->setIfExists('ntc027', $data ?? [], null);
        $this->setIfExists('ntc028', $data ?? [], null);
        $this->setIfExists('ntc029', $data ?? [], null);
        $this->setIfExists('ntc030', $data ?? [], null);
        $this->setIfExists('ntc031', $data ?? [], null);
        $this->setIfExists('ntd034', $data ?? [], null);
        $this->setIfExists('ntd035', $data ?? [], null);
        $this->setIfExists('ntp036', $data ?? [], null);
        $this->setIfExists('ntp037', $data ?? [], null);
        $this->setIfExists('ntp038', $data ?? [], null);
        $this->setIfExists('ntp039', $data ?? [], null);
        $this->setIfExists('otb002', $data ?? [], null);
        $this->setIfExists('otb003', $data ?? [], null);
        $this->setIfExists('otb004', $data ?? [], null);
        $this->setIfExists('otb005', $data ?? [], null);
        $this->setIfExists('otc007', $data ?? [], null);
        $this->setIfExists('otc008', $data ?? [], null);
        $this->setIfExists('otc009', $data ?? [], null);
        $this->setIfExists('otc010', $data ?? [], null);
        $this->setIfExists('otc011', $data ?? [], null);
        $this->setIfExists('otd012', $data ?? [], null);
        $this->setIfExists('otd013', $data ?? [], null);
        $this->setIfExists('otp014', $data ?? [], null);
        $this->setIfExists('otp015', $data ?? [], null);
        $this->setIfExists('otp016', $data ?? [], null);
        $this->setIfExists('otp017', $data ?? [], null);
        $this->setIfExists('otp018', $data ?? [], null);
        $this->setIfExists('otp019', $data ?? [], null);
        $this->setIfExists('otp020', $data ?? [], null);
        $this->setIfExists('otp021', $data ?? [], null);
        $this->setIfExists('pro001', $data ?? [], null);
        $this->setIfExists('pro002', $data ?? [], null);
        $this->setIfExists('pro003', $data ?? [], null);
        $this->setIfExists('rtb001', $data ?? [], null);
        $this->setIfExists('rtb002', $data ?? [], null);
        $this->setIfExists('rtb003', $data ?? [], null);
        $this->setIfExists('rtb004', $data ?? [], null);
        $this->setIfExists('rtb005', $data ?? [], null);
        $this->setIfExists('rtb006', $data ?? [], null);
        $this->setIfExists('rtb007', $data ?? [], null);
        $this->setIfExists('rtb008', $data ?? [], null);
        $this->setIfExists('rtb009', $data ?? [], null);
        $this->setIfExists('rtb010', $data ?? [], null);
        $this->setIfExists('rtb011', $data ?? [], null);
        $this->setIfExists('rtb012', $data ?? [], null);
        $this->setIfExists('rtb013', $data ?? [], null);
        $this->setIfExists('rtb014', $data ?? [], null);
        $this->setIfExists('rtb015', $data ?? [], null);
        $this->setIfExists('rtb016', $data ?? [], null);
        $this->setIfExists('rtb017', $data ?? [], null);
        $this->setIfExists('rtb018', $data ?? [], null);
        $this->setIfExists('rtb020', $data ?? [], null);
        $this->setIfExists('rtb021', $data ?? [], null);
        $this->setIfExists('rtb022', $data ?? [], null);
        $this->setIfExists('rtb023', $data ?? [], null);
        $this->setIfExists('rtb024', $data ?? [], null);
        $this->setIfExists('rtb025', $data ?? [], null);
        $this->setIfExists('rtb026', $data ?? [], null);
        $this->setIfExists('rtb027', $data ?? [], null);
        $this->setIfExists('rtb028', $data ?? [], null);
        $this->setIfExists('rtb029', $data ?? [], null);
        $this->setIfExists('rtb030', $data ?? [], null);
        $this->setIfExists('rtb031', $data ?? [], null);
        $this->setIfExists('rtb032', $data ?? [], null);
        $this->setIfExists('rtb033', $data ?? [], null);
        $this->setIfExists('rtb034', $data ?? [], null);
        $this->setIfExists('rtb035', $data ?? [], null);
        $this->setIfExists('rtc036', $data ?? [], null);
        $this->setIfExists('rtc037', $data ?? [], null);
        $this->setIfExists('rtc038', $data ?? [], null);
        $this->setIfExists('rtc039', $data ?? [], null);
        $this->setIfExists('rtc040', $data ?? [], null);
        $this->setIfExists('rtc041', $data ?? [], null);
        $this->setIfExists('rtc042', $data ?? [], null);
        $this->setIfExists('rtc043', $data ?? [], null);
        $this->setIfExists('rtc044', $data ?? [], null);
        $this->setIfExists('rtc045', $data ?? [], null);
        $this->setIfExists('rtc046', $data ?? [], null);
        $this->setIfExists('rtc047', $data ?? [], null);
        $this->setIfExists('rtc049', $data ?? [], null);
        $this->setIfExists('rtc050', $data ?? [], null);
        $this->setIfExists('rtc051', $data ?? [], null);
        $this->setIfExists('rtc052', $data ?? [], null);
        $this->setIfExists('rtc053', $data ?? [], null);
        $this->setIfExists('rtc054', $data ?? [], null);
        $this->setIfExists('rtd059', $data ?? [], null);
        $this->setIfExists('rtd060', $data ?? [], null);
        $this->setIfExists('rtd061', $data ?? [], null);
        $this->setIfExists('rtd062', $data ?? [], null);
        $this->setIfExists('rtd063', $data ?? [], null);
        $this->setIfExists('rtd064', $data ?? [], null);
        $this->setIfExists('rtd065', $data ?? [], null);
        $this->setIfExists('rtd067', $data ?? [], null);
        $this->setIfExists('rtd068', $data ?? [], null);
        $this->setIfExists('rtd069', $data ?? [], null);
        $this->setIfExists('rtd070', $data ?? [], null);
        $this->setIfExists('rtd071', $data ?? [], null);
        $this->setIfExists('rtd072', $data ?? [], null);
        $this->setIfExists('rto077', $data ?? [], null);
        $this->setIfExists('rto079', $data ?? [], null);
        $this->setIfExists('rtp081', $data ?? [], null);
        $this->setIfExists('rtp082', $data ?? [], null);
        $this->setIfExists('rtp083', $data ?? [], null);
        $this->setIfExists('rtp086', $data ?? [], null);
        $this->setIfExists('ttb001', $data ?? [], null);
        $this->setIfExists('ttb002', $data ?? [], null);
        $this->setIfExists('ttb003', $data ?? [], null);
        $this->setIfExists('ttb004', $data ?? [], null);
        $this->setIfExists('ttb005', $data ?? [], null);
        $this->setIfExists('ttb006', $data ?? [], null);
        $this->setIfExists('ttb007', $data ?? [], null);
        $this->setIfExists('ttb008', $data ?? [], null);
        $this->setIfExists('ttb009', $data ?? [], null);
        $this->setIfExists('ttb010', $data ?? [], null);
        $this->setIfExists('ttb011', $data ?? [], null);
        $this->setIfExists('ttb012', $data ?? [], null);
        $this->setIfExists('ttb013', $data ?? [], null);
        $this->setIfExists('ttb014', $data ?? [], null);
        $this->setIfExists('ttb015', $data ?? [], null);
        $this->setIfExists('ttb016', $data ?? [], null);
        $this->setIfExists('ttb017', $data ?? [], null);
        $this->setIfExists('ttb018', $data ?? [], null);
        $this->setIfExists('ttb019', $data ?? [], null);
        $this->setIfExists('ttb020', $data ?? [], null);
        $this->setIfExists('ttb023', $data ?? [], null);
        $this->setIfExists('ttb024', $data ?? [], null);
        $this->setIfExists('ttb025', $data ?? [], null);
        $this->setIfExists('ttb026', $data ?? [], null);
        $this->setIfExists('ttb027', $data ?? [], null);
        $this->setIfExists('ttb033', $data ?? [], null);
        $this->setIfExists('ttc035', $data ?? [], null);
        $this->setIfExists('ttc036', $data ?? [], null);
        $this->setIfExists('ttc037', $data ?? [], null);
        $this->setIfExists('ttc038', $data ?? [], null);
        $this->setIfExists('ttc039', $data ?? [], null);
        $this->setIfExists('ttc040', $data ?? [], null);
        $this->setIfExists('ttc041', $data ?? [], null);
        $this->setIfExists('ttc042', $data ?? [], null);
        $this->setIfExists('ttc043', $data ?? [], null);
        $this->setIfExists('ttc044', $data ?? [], null);
        $this->setIfExists('ttc045', $data ?? [], null);
        $this->setIfExists('ttc046', $data ?? [], null);
        $this->setIfExists('ttc047', $data ?? [], null);
        $this->setIfExists('ttc048', $data ?? [], null);
        $this->setIfExists('ttc049', $data ?? [], null);
        $this->setIfExists('ttc051', $data ?? [], null);
        $this->setIfExists('ttc052', $data ?? [], null);
        $this->setIfExists('ttc053', $data ?? [], null);
        $this->setIfExists('ttc054', $data ?? [], null);
        $this->setIfExists('ttc055', $data ?? [], null);
        $this->setIfExists('ttc056', $data ?? [], null);
        $this->setIfExists('ttc057', $data ?? [], null);
        $this->setIfExists('ttc058', $data ?? [], null);
        $this->setIfExists('ttc059', $data ?? [], null);
        $this->setIfExists('ttc060', $data ?? [], null);
        $this->setIfExists('ttc061', $data ?? [], null);
        $this->setIfExists('ttc063', $data ?? [], null);
        $this->setIfExists('ttc064', $data ?? [], null);
        $this->setIfExists('ttc065', $data ?? [], null);
        $this->setIfExists('ttc066', $data ?? [], null);
        $this->setIfExists('ttc067', $data ?? [], null);
        $this->setIfExists('ttc068', $data ?? [], null);
        $this->setIfExists('ttc069', $data ?? [], null);
        $this->setIfExists('ttc070', $data ?? [], null);
        $this->setIfExists('tto074', $data ?? [], null);
        $this->setIfExists('tto075', $data ?? [], null);
        $this->setIfExists('tto076', $data ?? [], null);
        $this->setIfExists('tto077', $data ?? [], null);
        $this->setIfExists('ttp079', $data ?? [], null);
        $this->setIfExists('ttp080', $data ?? [], null);
        $this->setIfExists('ttp084', $data ?? [], null);
        $this->setIfExists('txb001', $data ?? [], null);
        $this->setIfExists('txb002', $data ?? [], null);
        $this->setIfExists('txb003', $data ?? [], null);
        $this->setIfExists('txb004', $data ?? [], null);
        $this->setIfExists('txb006', $data ?? [], null);
        $this->setIfExists('txc007', $data ?? [], null);
        $this->setIfExists('txc009', $data ?? [], null);
        $this->setIfExists('txc010', $data ?? [], null);
        $this->setIfExists('txc011', $data ?? [], null);
        $this->setIfExists('txc012', $data ?? [], null);
        $this->setIfExists('txo013', $data ?? [], null);
        $this->setIfExists('txo014', $data ?? [], null);
        $this->setIfExists('txp015', $data ?? [], null);
        $this->setIfExists('txp016', $data ?? [], null);
        $this->setIfExists('txp017', $data ?? [], null);
        $this->setIfExists('ucc001', $data ?? [], null);
        $this->setIfExists('ucc002', $data ?? [], null);
        $this->setIfExists('ucc003', $data ?? [], null);
        $this->setIfExists('ucc004', $data ?? [], null);
        $this->setIfExists('ucc005', $data ?? [], null);
        $this->setIfExists('ucc006', $data ?? [], null);
        $this->setIfExists('ucc007', $data ?? [], null);
        $this->setIfExists('ucc008', $data ?? [], null);
        $this->setIfExists('ucc009', $data ?? [], null);
        $this->setIfExists('ucc010', $data ?? [], null);
        $this->setIfExists('ucc011', $data ?? [], null);
        $this->setIfExists('ucc012', $data ?? [], null);
        $this->setIfExists('ucc013', $data ?? [], null);
        $this->setIfExists('ucc014', $data ?? [], null);
        $this->setIfExists('ucc015', $data ?? [], null);
        $this->setIfExists('ucc016', $data ?? [], null);
        $this->setIfExists('dmo004', $data ?? [], null);
        $this->setIfExists('dmo014', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['dmo003']) && (mb_strlen($this->container['dmo003']) > 1)) {
            $invalidProperties[] = "invalid value for 'dmo003', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['dmo009']) && (mb_strlen($this->container['dmo009']) > 10)) {
            $invalidProperties[] = "invalid value for 'dmo009', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['dmo013']) && (mb_strlen($this->container['dmo013']) > 4)) {
            $invalidProperties[] = "invalid value for 'dmo013', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['dmo004']) && (mb_strlen($this->container['dmo004']) > 1)) {
            $invalidProperties[] = "invalid value for 'dmo004', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['dmo014']) && (mb_strlen($this->container['dmo014']) > 1)) {
            $invalidProperties[] = "invalid value for 'dmo014', the character length must be smaller than or equal to 1.";
        }

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
     * Gets atc039
     *
     * @return float|null
     */
    public function getAtc039()
    {
        return $this->container['atc039'];
    }

    /**
     * Sets atc039
     *
     * @param float|null $atc039 Total number of aged trades
     *
     * @return self
     */
    public function setAtc039($atc039)
    {
        if (is_null($atc039)) {
            throw new \InvalidArgumentException('non-nullable atc039 cannot be null');
        }
        $this->container['atc039'] = $atc039;

        return $this;
    }

    /**
     * Gets ctb019
     *
     * @return float|null
     */
    public function getCtb019()
    {
        return $this->container['ctb019'];
    }

    /**
     * Sets ctb019
     *
     * @param float|null $ctb019 Total account balance for combined (newly and continuously reported) trades
     *
     * @return self
     */
    public function setCtb019($ctb019)
    {
        if (is_null($ctb019)) {
            throw new \InvalidArgumentException('non-nullable ctb019 cannot be null');
        }
        $this->container['ctb019'] = $ctb019;

        return $this;
    }

    /**
     * Gets jdc008
     *
     * @return float|null
     */
    public function getJdc008()
    {
        return $this->container['jdc008'];
    }

    /**
     * Sets jdc008
     *
     * @param float|null $jdc008 Total number of judgments filed within 24 months of profile date (excluding Released, Satisfied, Abstract, or Vacated)
     *
     * @return self
     */
    public function setJdc008($jdc008)
    {
        if (is_null($jdc008)) {
            throw new \InvalidArgumentException('non-nullable jdc008 cannot be null');
        }
        $this->container['jdc008'] = $jdc008;

        return $this;
    }

    /**
     * Gets ntb019
     *
     * @return float|null
     */
    public function getNtb019()
    {
        return $this->container['ntb019'];
    }

    /**
     * Sets ntb019
     *
     * @param float|null $ntb019 Total account balance for newly reported trades
     *
     * @return self
     */
    public function setNtb019($ntb019)
    {
        if (is_null($ntb019)) {
            throw new \InvalidArgumentException('non-nullable ntb019 cannot be null');
        }
        $this->container['ntb019'] = $ntb019;

        return $this;
    }

    /**
     * Gets ntc032
     *
     * @return float|null
     */
    public function getNtc032()
    {
        return $this->container['ntc032'];
    }

    /**
     * Sets ntc032
     *
     * @param float|null $ntc032 Total number of newly reported trades
     *
     * @return self
     */
    public function setNtc032($ntc032)
    {
        if (is_null($ntc032)) {
            throw new \InvalidArgumentException('non-nullable ntc032 cannot be null');
        }
        $this->container['ntc032'] = $ntc032;

        return $this;
    }

    /**
     * Gets otb001
     *
     * @return float|null
     */
    public function getOtb001()
    {
        return $this->container['otb001'];
    }

    /**
     * Sets otb001
     *
     * @param float|null $otb001 Total balance of other trades classified as Finance
     *
     * @return self
     */
    public function setOtb001($otb001)
    {
        if (is_null($otb001)) {
            throw new \InvalidArgumentException('non-nullable otb001 cannot be null');
        }
        $this->container['otb001'] = $otb001;

        return $this;
    }

    /**
     * Gets otc006
     *
     * @return float|null
     */
    public function getOtc006()
    {
        return $this->container['otc006'];
    }

    /**
     * Sets otc006
     *
     * @param float|null $otc006 Total number of other trades classified as Finance
     *
     * @return self
     */
    public function setOtc006($otc006)
    {
        if (is_null($otc006)) {
            throw new \InvalidArgumentException('non-nullable otc006 cannot be null');
        }
        $this->container['otc006'] = $otc006;

        return $this;
    }

    /**
     * Gets rtb019
     *
     * @return float|null
     */
    public function getRtb019()
    {
        return $this->container['rtb019'];
    }

    /**
     * Sets rtb019
     *
     * @param float|null $rtb019 Total sum of account balance for regular trades
     *
     * @return self
     */
    public function setRtb019($rtb019)
    {
        if (is_null($rtb019)) {
            throw new \InvalidArgumentException('non-nullable rtb019 cannot be null');
        }
        $this->container['rtb019'] = $rtb019;

        return $this;
    }

    /**
     * Gets rtc048
     *
     * @return float|null
     */
    public function getRtc048()
    {
        return $this->container['rtc048'];
    }

    /**
     * Sets rtc048
     *
     * @param float|null $rtc048 Total number of regular trades
     *
     * @return self
     */
    public function setRtc048($rtc048)
    {
        if (is_null($rtc048)) {
            throw new \InvalidArgumentException('non-nullable rtc048 cannot be null');
        }
        $this->container['rtc048'] = $rtc048;

        return $this;
    }

    /**
     * Gets ttb021
     *
     * @return float|null
     */
    public function getTtb021()
    {
        return $this->container['ttb021'];
    }

    /**
     * Sets ttb021
     *
     * @param float|null $ttb021 Total sum of account balance
     *
     * @return self
     */
    public function setTtb021($ttb021)
    {
        if (is_null($ttb021)) {
            throw new \InvalidArgumentException('non-nullable ttb021 cannot be null');
        }
        $this->container['ttb021'] = $ttb021;

        return $this;
    }

    /**
     * Gets ttb022
     *
     * @return float|null
     */
    public function getTtb022()
    {
        return $this->container['ttb022'];
    }

    /**
     * Sets ttb022
     *
     * @param float|null $ttb022 Total sum of high credit balance
     *
     * @return self
     */
    public function setTtb022($ttb022)
    {
        if (is_null($ttb022)) {
            throw new \InvalidArgumentException('non-nullable ttb022 cannot be null');
        }
        $this->container['ttb022'] = $ttb022;

        return $this;
    }

    /**
     * Gets ttb028
     *
     * @return float|null
     */
    public function getTtb028()
    {
        return $this->container['ttb028'];
    }

    /**
     * Sets ttb028
     *
     * @param float|null $ttb028 Total account balance that is current across all trades
     *
     * @return self
     */
    public function setTtb028($ttb028)
    {
        if (is_null($ttb028)) {
            throw new \InvalidArgumentException('non-nullable ttb028 cannot be null');
        }
        $this->container['ttb028'] = $ttb028;

        return $this;
    }

    /**
     * Gets ttb029
     *
     * @return float|null
     */
    public function getTtb029()
    {
        return $this->container['ttb029'];
    }

    /**
     * Sets ttb029
     *
     * @param float|null $ttb029 Total account balance that is 1-30 DBT across all trades
     *
     * @return self
     */
    public function setTtb029($ttb029)
    {
        if (is_null($ttb029)) {
            throw new \InvalidArgumentException('non-nullable ttb029 cannot be null');
        }
        $this->container['ttb029'] = $ttb029;

        return $this;
    }

    /**
     * Gets ttb030
     *
     * @return float|null
     */
    public function getTtb030()
    {
        return $this->container['ttb030'];
    }

    /**
     * Sets ttb030
     *
     * @param float|null $ttb030 Total Sum of account balance that is 31-60 across all trades
     *
     * @return self
     */
    public function setTtb030($ttb030)
    {
        if (is_null($ttb030)) {
            throw new \InvalidArgumentException('non-nullable ttb030 cannot be null');
        }
        $this->container['ttb030'] = $ttb030;

        return $this;
    }

    /**
     * Gets ttb031
     *
     * @return float|null
     */
    public function getTtb031()
    {
        return $this->container['ttb031'];
    }

    /**
     * Sets ttb031
     *
     * @param float|null $ttb031 Total Sum of account balance that is 61-90 across all trades
     *
     * @return self
     */
    public function setTtb031($ttb031)
    {
        if (is_null($ttb031)) {
            throw new \InvalidArgumentException('non-nullable ttb031 cannot be null');
        }
        $this->container['ttb031'] = $ttb031;

        return $this;
    }

    /**
     * Gets ttb032
     *
     * @return float|null
     */
    public function getTtb032()
    {
        return $this->container['ttb032'];
    }

    /**
     * Sets ttb032
     *
     * @param float|null $ttb032 Total Sum of account balance that is 91+ across all trades
     *
     * @return self
     */
    public function setTtb032($ttb032)
    {
        if (is_null($ttb032)) {
            throw new \InvalidArgumentException('non-nullable ttb032 cannot be null');
        }
        $this->container['ttb032'] = $ttb032;

        return $this;
    }

    /**
     * Gets ttc050
     *
     * @return float|null
     */
    public function getTtc050()
    {
        return $this->container['ttc050'];
    }

    /**
     * Sets ttc050
     *
     * @param float|null $ttc050 Total number of trades
     *
     * @return self
     */
    public function setTtc050($ttc050)
    {
        if (is_null($ttc050)) {
            throw new \InvalidArgumentException('non-nullable ttc050 cannot be null');
        }
        $this->container['ttc050'] = $ttc050;

        return $this;
    }

    /**
     * Gets ttp085
     *
     * @return float|null
     */
    public function getTtp085()
    {
        return $this->container['ttp085'];
    }

    /**
     * Sets ttp085
     *
     * @param float|null $ttp085 Percent of Total trades balance to Total Balance
     *
     * @return self
     */
    public function setTtp085($ttp085)
    {
        if (is_null($ttp085)) {
            throw new \InvalidArgumentException('non-nullable ttp085 cannot be null');
        }
        $this->container['ttp085'] = $ttp085;

        return $this;
    }

    /**
     * Gets ttp086
     *
     * @return float|null
     */
    public function getTtp086()
    {
        return $this->container['ttp086'];
    }

    /**
     * Sets ttp086
     *
     * @param float|null $ttp086 Percent of Total number of trades to Total number of trades
     *
     * @return self
     */
    public function setTtp086($ttp086)
    {
        if (is_null($ttp086)) {
            throw new \InvalidArgumentException('non-nullable ttp086 cannot be null');
        }
        $this->container['ttp086'] = $ttp086;

        return $this;
    }

    /**
     * Gets txb005
     *
     * @return float|null
     */
    public function getTxb005()
    {
        return $this->container['txb005'];
    }

    /**
     * Sets txb005
     *
     * @param float|null $txb005 Total liability amount for tax liens filed within t 24 months of profile date
     *
     * @return self
     */
    public function setTxb005($txb005)
    {
        if (is_null($txb005)) {
            throw new \InvalidArgumentException('non-nullable txb005 cannot be null');
        }
        $this->container['txb005'] = $txb005;

        return $this;
    }

    /**
     * Gets txc008
     *
     * @return float|null
     */
    public function getTxc008()
    {
        return $this->container['txc008'];
    }

    /**
     * Sets txc008
     *
     * @param float|null $txc008 Total number of tax liens filed within 24 months of profile date
     *
     * @return self
     */
    public function setTxc008($txc008)
    {
        if (is_null($txc008)) {
            throw new \InvalidArgumentException('non-nullable txc008 cannot be null');
        }
        $this->container['txc008'] = $txc008;

        return $this;
    }

    /**
     * Gets acc001
     *
     * @return float|null
     */
    public function getAcc001()
    {
        return $this->container['acc001'];
    }

    /**
     * Sets acc001
     *
     * @param float|null $acc001 Total number of active Trades within the last 12 months
     *
     * @return self
     */
    public function setAcc001($acc001)
    {
        if (is_null($acc001)) {
            throw new \InvalidArgumentException('non-nullable acc001 cannot be null');
        }
        $this->container['acc001'] = $acc001;

        return $this;
    }

    /**
     * Gets acc002
     *
     * @return float|null
     */
    public function getAcc002()
    {
        return $this->container['acc002'];
    }

    /**
     * Sets acc002
     *
     * @param float|null $acc002 Total number of active Trades within the last 6 months
     *
     * @return self
     */
    public function setAcc002($acc002)
    {
        if (is_null($acc002)) {
            throw new \InvalidArgumentException('non-nullable acc002 cannot be null');
        }
        $this->container['acc002'] = $acc002;

        return $this;
    }

    /**
     * Gets acc003
     *
     * @return float|null
     */
    public function getAcc003()
    {
        return $this->container['acc003'];
    }

    /**
     * Sets acc003
     *
     * @param float|null $acc003 Total number of active trades with a payment indicator equal to 1 (the DBT is unknown, compared to the average DBT for that business category)
     *
     * @return self
     */
    public function setAcc003($acc003)
    {
        if (is_null($acc003)) {
            throw new \InvalidArgumentException('non-nullable acc003 cannot be null');
        }
        $this->container['acc003'] = $acc003;

        return $this;
    }

    /**
     * Gets acc004
     *
     * @return float|null
     */
    public function getAcc004()
    {
        return $this->container['acc004'];
    }

    /**
     * Sets acc004
     *
     * @param float|null $acc004 Total number of active trades with a payment indicator equal to (the DBT is five days lower than the average DBT for that business category), excluding inactive trades
     *
     * @return self
     */
    public function setAcc004($acc004)
    {
        if (is_null($acc004)) {
            throw new \InvalidArgumentException('non-nullable acc004 cannot be null');
        }
        $this->container['acc004'] = $acc004;

        return $this;
    }

    /**
     * Gets acc005
     *
     * @return float|null
     */
    public function getAcc005()
    {
        return $this->container['acc005'];
    }

    /**
     * Sets acc005
     *
     * @param float|null $acc005 Total number of active trades with a payment indicator equal to (the DBT is higher than the average DBT for that business category)
     *
     * @return self
     */
    public function setAcc005($acc005)
    {
        if (is_null($acc005)) {
            throw new \InvalidArgumentException('non-nullable acc005 cannot be null');
        }
        $this->container['acc005'] = $acc005;

        return $this;
    }

    /**
     * Gets acc006
     *
     * @return float|null
     */
    public function getAcc006()
    {
        return $this->container['acc006'];
    }

    /**
     * Sets acc006
     *
     * @param float|null $acc006 Total number of active trades with a payment indicator equal to (the DBT is about the same as the average DBT for that business category)
     *
     * @return self
     */
    public function setAcc006($acc006)
    {
        if (is_null($acc006)) {
            throw new \InvalidArgumentException('non-nullable acc006 cannot be null');
        }
        $this->container['acc006'] = $acc006;

        return $this;
    }

    /**
     * Gets acc007
     *
     * @return float|null
     */
    public function getAcc007()
    {
        return $this->container['acc007'];
    }

    /**
     * Sets acc007
     *
     * @param float|null $acc007 Total number of active trades with zero balance
     *
     * @return self
     */
    public function setAcc007($acc007)
    {
        if (is_null($acc007)) {
            throw new \InvalidArgumentException('non-nullable acc007 cannot be null');
        }
        $this->container['acc007'] = $acc007;

        return $this;
    }

    /**
     * Gets acc008
     *
     * @return float|null
     */
    public function getAcc008()
    {
        return $this->container['acc008'];
    }

    /**
     * Sets acc008
     *
     * @param float|null $acc008 Total number of Total trades with zero balance
     *
     * @return self
     */
    public function setAcc008($acc008)
    {
        if (is_null($acc008)) {
            throw new \InvalidArgumentException('non-nullable acc008 cannot be null');
        }
        $this->container['acc008'] = $acc008;

        return $this;
    }

    /**
     * Gets atb001
     *
     * @return float|null
     */
    public function getAtb001()
    {
        return $this->container['atb001'];
    }

    /**
     * Sets atb001
     *
     * @param float|null $atb001 Total balance of aged trades
     *
     * @return self
     */
    public function setAtb001($atb001)
    {
        if (is_null($atb001)) {
            throw new \InvalidArgumentException('non-nullable atb001 cannot be null');
        }
        $this->container['atb001'] = $atb001;

        return $this;
    }

    /**
     * Gets atb002
     *
     * @return float|null
     */
    public function getAtb002()
    {
        return $this->container['atb002'];
    }

    /**
     * Sets atb002
     *
     * @param float|null $atb002 Total balance of aged trades that is 1-30 days delinquent
     *
     * @return self
     */
    public function setAtb002($atb002)
    {
        if (is_null($atb002)) {
            throw new \InvalidArgumentException('non-nullable atb002 cannot be null');
        }
        $this->container['atb002'] = $atb002;

        return $this;
    }

    /**
     * Gets atb003
     *
     * @return float|null
     */
    public function getAtb003()
    {
        return $this->container['atb003'];
    }

    /**
     * Sets atb003
     *
     * @param float|null $atb003 Total balance of aged trades that is 31-60 days delinquent
     *
     * @return self
     */
    public function setAtb003($atb003)
    {
        if (is_null($atb003)) {
            throw new \InvalidArgumentException('non-nullable atb003 cannot be null');
        }
        $this->container['atb003'] = $atb003;

        return $this;
    }

    /**
     * Gets atb004
     *
     * @return float|null
     */
    public function getAtb004()
    {
        return $this->container['atb004'];
    }

    /**
     * Sets atb004
     *
     * @param float|null $atb004 Total balance of aged trades that is 61-90 days delinquent
     *
     * @return self
     */
    public function setAtb004($atb004)
    {
        if (is_null($atb004)) {
            throw new \InvalidArgumentException('non-nullable atb004 cannot be null');
        }
        $this->container['atb004'] = $atb004;

        return $this;
    }

    /**
     * Gets atb005
     *
     * @return float|null
     */
    public function getAtb005()
    {
        return $this->container['atb005'];
    }

    /**
     * Sets atb005
     *
     * @param float|null $atb005 Total balance of aged trades that is 91+ days delinquent
     *
     * @return self
     */
    public function setAtb005($atb005)
    {
        if (is_null($atb005)) {
            throw new \InvalidArgumentException('non-nullable atb005 cannot be null');
        }
        $this->container['atb005'] = $atb005;

        return $this;
    }

    /**
     * Gets atb006
     *
     * @return float|null
     */
    public function getAtb006()
    {
        return $this->container['atb006'];
    }

    /**
     * Sets atb006
     *
     * @param float|null $atb006 Total balance of aged trades that is current
     *
     * @return self
     */
    public function setAtb006($atb006)
    {
        if (is_null($atb006)) {
            throw new \InvalidArgumentException('non-nullable atb006 cannot be null');
        }
        $this->container['atb006'] = $atb006;

        return $this;
    }

    /**
     * Gets atb007
     *
     * @return float|null
     */
    public function getAtb007()
    {
        return $this->container['atb007'];
    }

    /**
     * Sets atb007
     *
     * @param float|null $atb007 Total balance across all aged trades with trade's worst delinquency status = current
     *
     * @return self
     */
    public function setAtb007($atb007)
    {
        if (is_null($atb007)) {
            throw new \InvalidArgumentException('non-nullable atb007 cannot be null');
        }
        $this->container['atb007'] = $atb007;

        return $this;
    }

    /**
     * Gets atb008
     *
     * @return float|null
     */
    public function getAtb008()
    {
        return $this->container['atb008'];
    }

    /**
     * Sets atb008
     *
     * @param float|null $atb008 Total balance across all aged trades with trade's worst delinquency status = 1-30 days past due
     *
     * @return self
     */
    public function setAtb008($atb008)
    {
        if (is_null($atb008)) {
            throw new \InvalidArgumentException('non-nullable atb008 cannot be null');
        }
        $this->container['atb008'] = $atb008;

        return $this;
    }

    /**
     * Gets atb009
     *
     * @return float|null
     */
    public function getAtb009()
    {
        return $this->container['atb009'];
    }

    /**
     * Sets atb009
     *
     * @param float|null $atb009 Total balance across all aged trades with trade's worst delinquency status = 31-60 days past due
     *
     * @return self
     */
    public function setAtb009($atb009)
    {
        if (is_null($atb009)) {
            throw new \InvalidArgumentException('non-nullable atb009 cannot be null');
        }
        $this->container['atb009'] = $atb009;

        return $this;
    }

    /**
     * Gets atb010
     *
     * @return float|null
     */
    public function getAtb010()
    {
        return $this->container['atb010'];
    }

    /**
     * Sets atb010
     *
     * @param float|null $atb010 Total balance across all aged trades with trade's worst delinquency status = 61-90 days past due
     *
     * @return self
     */
    public function setAtb010($atb010)
    {
        if (is_null($atb010)) {
            throw new \InvalidArgumentException('non-nullable atb010 cannot be null');
        }
        $this->container['atb010'] = $atb010;

        return $this;
    }

    /**
     * Gets atb011
     *
     * @return float|null
     */
    public function getAtb011()
    {
        return $this->container['atb011'];
    }

    /**
     * Sets atb011
     *
     * @param float|null $atb011 Total balance across all aged trades with trade's worst delinquency status = 91+ days past due
     *
     * @return self
     */
    public function setAtb011($atb011)
    {
        if (is_null($atb011)) {
            throw new \InvalidArgumentException('non-nullable atb011 cannot be null');
        }
        $this->container['atb011'] = $atb011;

        return $this;
    }

    /**
     * Gets atb012
     *
     * @return float|null
     */
    public function getAtb012()
    {
        return $this->container['atb012'];
    }

    /**
     * Sets atb012
     *
     * @param float|null $atb012 Total balance across all aged trades with trade worst status = current
     *
     * @return self
     */
    public function setAtb012($atb012)
    {
        if (is_null($atb012)) {
            throw new \InvalidArgumentException('non-nullable atb012 cannot be null');
        }
        $this->container['atb012'] = $atb012;

        return $this;
    }

    /**
     * Gets atb013
     *
     * @return float|null
     */
    public function getAtb013()
    {
        return $this->container['atb013'];
    }

    /**
     * Sets atb013
     *
     * @param float|null $atb013 Total balance across all aged trades with trade worst status = 1-30 days past due
     *
     * @return self
     */
    public function setAtb013($atb013)
    {
        if (is_null($atb013)) {
            throw new \InvalidArgumentException('non-nullable atb013 cannot be null');
        }
        $this->container['atb013'] = $atb013;

        return $this;
    }

    /**
     * Gets atb014
     *
     * @return float|null
     */
    public function getAtb014()
    {
        return $this->container['atb014'];
    }

    /**
     * Sets atb014
     *
     * @param float|null $atb014 Total balance across all aged trades with trade's worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setAtb014($atb014)
    {
        if (is_null($atb014)) {
            throw new \InvalidArgumentException('non-nullable atb014 cannot be null');
        }
        $this->container['atb014'] = $atb014;

        return $this;
    }

    /**
     * Gets atb015
     *
     * @return float|null
     */
    public function getAtb015()
    {
        return $this->container['atb015'];
    }

    /**
     * Sets atb015
     *
     * @param float|null $atb015 Total balance across all aged trades with trade's worst status = 31-60 days past due
     *
     * @return self
     */
    public function setAtb015($atb015)
    {
        if (is_null($atb015)) {
            throw new \InvalidArgumentException('non-nullable atb015 cannot be null');
        }
        $this->container['atb015'] = $atb015;

        return $this;
    }

    /**
     * Gets atb016
     *
     * @return float|null
     */
    public function getAtb016()
    {
        return $this->container['atb016'];
    }

    /**
     * Sets atb016
     *
     * @param float|null $atb016 Total balance across all aged trades with trade's worst status = 61-90 days past due
     *
     * @return self
     */
    public function setAtb016($atb016)
    {
        if (is_null($atb016)) {
            throw new \InvalidArgumentException('non-nullable atb016 cannot be null');
        }
        $this->container['atb016'] = $atb016;

        return $this;
    }

    /**
     * Gets atb017
     *
     * @return float|null
     */
    public function getAtb017()
    {
        return $this->container['atb017'];
    }

    /**
     * Sets atb017
     *
     * @param float|null $atb017 Total balance across all aged trades with trade's worst status = 91+ days past due
     *
     * @return self
     */
    public function setAtb017($atb017)
    {
        if (is_null($atb017)) {
            throw new \InvalidArgumentException('non-nullable atb017 cannot be null');
        }
        $this->container['atb017'] = $atb017;

        return $this;
    }

    /**
     * Gets atb018
     *
     * @return float|null
     */
    public function getAtb018()
    {
        return $this->container['atb018'];
    }

    /**
     * Sets atb018
     *
     * @param float|null $atb018 Total highest balance in past 12 months across all aged trades
     *
     * @return self
     */
    public function setAtb018($atb018)
    {
        if (is_null($atb018)) {
            throw new \InvalidArgumentException('non-nullable atb018 cannot be null');
        }
        $this->container['atb018'] = $atb018;

        return $this;
    }

    /**
     * Gets atb019
     *
     * @return float|null
     */
    public function getAtb019()
    {
        return $this->container['atb019'];
    }

    /**
     * Sets atb019
     *
     * @param float|null $atb019 Total balance for aged trades with no reported information within 4 months of the profile date
     *
     * @return self
     */
    public function setAtb019($atb019)
    {
        if (is_null($atb019)) {
            throw new \InvalidArgumentException('non-nullable atb019 cannot be null');
        }
        $this->container['atb019'] = $atb019;

        return $this;
    }

    /**
     * Gets atc020
     *
     * @return float|null
     */
    public function getAtc020()
    {
        return $this->container['atc020'];
    }

    /**
     * Sets atc020
     *
     * @param float|null $atc020 Total number of aged trades
     *
     * @return self
     */
    public function setAtc020($atc020)
    {
        if (is_null($atc020)) {
            throw new \InvalidArgumentException('non-nullable atc020 cannot be null');
        }
        $this->container['atc020'] = $atc020;

        return $this;
    }

    /**
     * Gets atc021
     *
     * @return float|null
     */
    public function getAtc021()
    {
        return $this->container['atc021'];
    }

    /**
     * Sets atc021
     *
     * @param float|null $atc021 Total number of aged trades with trade's worst delinquency status = current
     *
     * @return self
     */
    public function setAtc021($atc021)
    {
        if (is_null($atc021)) {
            throw new \InvalidArgumentException('non-nullable atc021 cannot be null');
        }
        $this->container['atc021'] = $atc021;

        return $this;
    }

    /**
     * Gets atc022
     *
     * @return float|null
     */
    public function getAtc022()
    {
        return $this->container['atc022'];
    }

    /**
     * Sets atc022
     *
     * @param float|null $atc022 Total number of aged trades with trade's worst delinquency status = 1-30 days past due
     *
     * @return self
     */
    public function setAtc022($atc022)
    {
        if (is_null($atc022)) {
            throw new \InvalidArgumentException('non-nullable atc022 cannot be null');
        }
        $this->container['atc022'] = $atc022;

        return $this;
    }

    /**
     * Gets atc023
     *
     * @return float|null
     */
    public function getAtc023()
    {
        return $this->container['atc023'];
    }

    /**
     * Sets atc023
     *
     * @param float|null $atc023 Total number of aged trades with trade's worst delinquency status = 31-60 days past due
     *
     * @return self
     */
    public function setAtc023($atc023)
    {
        if (is_null($atc023)) {
            throw new \InvalidArgumentException('non-nullable atc023 cannot be null');
        }
        $this->container['atc023'] = $atc023;

        return $this;
    }

    /**
     * Gets atc024
     *
     * @return float|null
     */
    public function getAtc024()
    {
        return $this->container['atc024'];
    }

    /**
     * Sets atc024
     *
     * @param float|null $atc024 Total number of aged trades with trade's worst delinquency status = 61-90 days past due
     *
     * @return self
     */
    public function setAtc024($atc024)
    {
        if (is_null($atc024)) {
            throw new \InvalidArgumentException('non-nullable atc024 cannot be null');
        }
        $this->container['atc024'] = $atc024;

        return $this;
    }

    /**
     * Gets atc025
     *
     * @return float|null
     */
    public function getAtc025()
    {
        return $this->container['atc025'];
    }

    /**
     * Sets atc025
     *
     * @param float|null $atc025 Total number of aged trades with trade's worst delinquency status = 91+ days past due
     *
     * @return self
     */
    public function setAtc025($atc025)
    {
        if (is_null($atc025)) {
            throw new \InvalidArgumentException('non-nullable atc025 cannot be null');
        }
        $this->container['atc025'] = $atc025;

        return $this;
    }

    /**
     * Gets atc026
     *
     * @return float|null
     */
    public function getAtc026()
    {
        return $this->container['atc026'];
    }

    /**
     * Sets atc026
     *
     * @param float|null $atc026 Total number of aged trades across all aged trades with trade's worst status = current
     *
     * @return self
     */
    public function setAtc026($atc026)
    {
        if (is_null($atc026)) {
            throw new \InvalidArgumentException('non-nullable atc026 cannot be null');
        }
        $this->container['atc026'] = $atc026;

        return $this;
    }

    /**
     * Gets atc027
     *
     * @return float|null
     */
    public function getAtc027()
    {
        return $this->container['atc027'];
    }

    /**
     * Sets atc027
     *
     * @param float|null $atc027 Total number of aged trades across all aged trades with trade's worst status = 1-30 days past due
     *
     * @return self
     */
    public function setAtc027($atc027)
    {
        if (is_null($atc027)) {
            throw new \InvalidArgumentException('non-nullable atc027 cannot be null');
        }
        $this->container['atc027'] = $atc027;

        return $this;
    }

    /**
     * Gets atc028
     *
     * @return float|null
     */
    public function getAtc028()
    {
        return $this->container['atc028'];
    }

    /**
     * Sets atc028
     *
     * @param float|null $atc028 Total number of aged trades across all aged trades with trade's worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setAtc028($atc028)
    {
        if (is_null($atc028)) {
            throw new \InvalidArgumentException('non-nullable atc028 cannot be null');
        }
        $this->container['atc028'] = $atc028;

        return $this;
    }

    /**
     * Gets atc029
     *
     * @return float|null
     */
    public function getAtc029()
    {
        return $this->container['atc029'];
    }

    /**
     * Sets atc029
     *
     * @param float|null $atc029 Total number of aged trades across all aged trades with trade's worst status = 31-60 days past due
     *
     * @return self
     */
    public function setAtc029($atc029)
    {
        if (is_null($atc029)) {
            throw new \InvalidArgumentException('non-nullable atc029 cannot be null');
        }
        $this->container['atc029'] = $atc029;

        return $this;
    }

    /**
     * Gets atc030
     *
     * @return float|null
     */
    public function getAtc030()
    {
        return $this->container['atc030'];
    }

    /**
     * Sets atc030
     *
     * @param float|null $atc030 Total number of aged trades across all aged trades with trade's worst status = 61-90 days past due
     *
     * @return self
     */
    public function setAtc030($atc030)
    {
        if (is_null($atc030)) {
            throw new \InvalidArgumentException('non-nullable atc030 cannot be null');
        }
        $this->container['atc030'] = $atc030;

        return $this;
    }

    /**
     * Gets atc031
     *
     * @return float|null
     */
    public function getAtc031()
    {
        return $this->container['atc031'];
    }

    /**
     * Sets atc031
     *
     * @param float|null $atc031 Total number of aged trades across all aged trades with trade's worst status = 91+ days past due
     *
     * @return self
     */
    public function setAtc031($atc031)
    {
        if (is_null($atc031)) {
            throw new \InvalidArgumentException('non-nullable atc031 cannot be null');
        }
        $this->container['atc031'] = $atc031;

        return $this;
    }

    /**
     * Gets atc032
     *
     * @return float|null
     */
    public function getAtc032()
    {
        return $this->container['atc032'];
    }

    /**
     * Sets atc032
     *
     * @param float|null $atc032 Total number of aged trades with no reported information within 4 months of the profile date
     *
     * @return self
     */
    public function setAtc032($atc032)
    {
        if (is_null($atc032)) {
            throw new \InvalidArgumentException('non-nullable atc032 cannot be null');
        }
        $this->container['atc032'] = $atc032;

        return $this;
    }

    /**
     * Gets atd034
     *
     * @return float|null
     */
    public function getAtd034()
    {
        return $this->container['atd034'];
    }

    /**
     * Sets atd034
     *
     * @param float|null $atd034 Weighted average DBT of aged trades with no reported information within 4 months of the profile date
     *
     * @return self
     */
    public function setAtd034($atd034)
    {
        if (is_null($atd034)) {
            throw new \InvalidArgumentException('non-nullable atd034 cannot be null');
        }
        $this->container['atd034'] = $atd034;

        return $this;
    }

    /**
     * Gets atd035
     *
     * @return float|null
     */
    public function getAtd035()
    {
        return $this->container['atd035'];
    }

    /**
     * Sets atd035
     *
     * @param float|null $atd035 Maximum DBT of aged trades with no reported information within 4 months of the profile date
     *
     * @return self
     */
    public function setAtd035($atd035)
    {
        if (is_null($atd035)) {
            throw new \InvalidArgumentException('non-nullable atd035 cannot be null');
        }
        $this->container['atd035'] = $atd035;

        return $this;
    }

    /**
     * Gets atp036
     *
     * @return float|null
     */
    public function getAtp036()
    {
        return $this->container['atp036'];
    }

    /**
     * Sets atp036
     *
     * @param float|null $atp036 Percent of Total trade balance to Total highest balance in past 12 months across all aged trades
     *
     * @return self
     */
    public function setAtp036($atp036)
    {
        if (is_null($atp036)) {
            throw new \InvalidArgumentException('non-nullable atp036 cannot be null');
        }
        $this->container['atp036'] = $atp036;

        return $this;
    }

    /**
     * Gets atp037
     *
     * @return float|null
     */
    public function getAtp037()
    {
        return $this->container['atp037'];
    }

    /**
     * Sets atp037
     *
     * @param float|null $atp037 Percent of Total balance of all aged trades to Total balance of Total Trades
     *
     * @return self
     */
    public function setAtp037($atp037)
    {
        if (is_null($atp037)) {
            throw new \InvalidArgumentException('non-nullable atp037 cannot be null');
        }
        $this->container['atp037'] = $atp037;

        return $this;
    }

    /**
     * Gets atp038
     *
     * @return float|null
     */
    public function getAtp038()
    {
        return $this->container['atp038'];
    }

    /**
     * Sets atp038
     *
     * @param float|null $atp038 Percent of Total number of aged trades to Total number of Total Trades
     *
     * @return self
     */
    public function setAtp038($atp038)
    {
        if (is_null($atp038)) {
            throw new \InvalidArgumentException('non-nullable atp038 cannot be null');
        }
        $this->container['atp038'] = $atp038;

        return $this;
    }

    /**
     * Gets bkb001
     *
     * @return float|null
     */
    public function getBkb001()
    {
        return $this->container['bkb001'];
    }

    /**
     * Sets bkb001
     *
     * @param float|null $bkb001 Total liability balance for bankruptcy filings
     *
     * @return self
     */
    public function setBkb001($bkb001)
    {
        if (is_null($bkb001)) {
            throw new \InvalidArgumentException('non-nullable bkb001 cannot be null');
        }
        $this->container['bkb001'] = $bkb001;

        return $this;
    }

    /**
     * Gets bkb002
     *
     * @return float|null
     */
    public function getBkb002()
    {
        return $this->container['bkb002'];
    }

    /**
     * Sets bkb002
     *
     * @param float|null $bkb002 Total liability balance for bankruptcies filed within 24 months of the profile date
     *
     * @return self
     */
    public function setBkb002($bkb002)
    {
        if (is_null($bkb002)) {
            throw new \InvalidArgumentException('non-nullable bkb002 cannot be null');
        }
        $this->container['bkb002'] = $bkb002;

        return $this;
    }

    /**
     * Gets bkb003
     *
     * @return float|null
     */
    public function getBkb003()
    {
        return $this->container['bkb003'];
    }

    /**
     * Sets bkb003
     *
     * @param float|null $bkb003 Total liability balance for non-filed bankruptcy actions
     *
     * @return self
     */
    public function setBkb003($bkb003)
    {
        if (is_null($bkb003)) {
            throw new \InvalidArgumentException('non-nullable bkb003 cannot be null');
        }
        $this->container['bkb003'] = $bkb003;

        return $this;
    }

    /**
     * Gets bkc004
     *
     * @return float|null
     */
    public function getBkc004()
    {
        return $this->container['bkc004'];
    }

    /**
     * Sets bkc004
     *
     * @param float|null $bkc004 Total number of bankruptcies filed within 12 months of the profile date
     *
     * @return self
     */
    public function setBkc004($bkc004)
    {
        if (is_null($bkc004)) {
            throw new \InvalidArgumentException('non-nullable bkc004 cannot be null');
        }
        $this->container['bkc004'] = $bkc004;

        return $this;
    }

    /**
     * Gets bkc005
     *
     * @return float|null
     */
    public function getBkc005()
    {
        return $this->container['bkc005'];
    }

    /**
     * Sets bkc005
     *
     * @param float|null $bkc005 Total number of bankruptcies filed within 6 months of the profile date
     *
     * @return self
     */
    public function setBkc005($bkc005)
    {
        if (is_null($bkc005)) {
            throw new \InvalidArgumentException('non-nullable bkc005 cannot be null');
        }
        $this->container['bkc005'] = $bkc005;

        return $this;
    }

    /**
     * Gets bkc006
     *
     * @return float|null
     */
    public function getBkc006()
    {
        return $this->container['bkc006'];
    }

    /**
     * Sets bkc006
     *
     * @param float|null $bkc006 Total number of bankruptcy filings
     *
     * @return self
     */
    public function setBkc006($bkc006)
    {
        if (is_null($bkc006)) {
            throw new \InvalidArgumentException('non-nullable bkc006 cannot be null');
        }
        $this->container['bkc006'] = $bkc006;

        return $this;
    }

    /**
     * Gets bkc007
     *
     * @return float|null
     */
    public function getBkc007()
    {
        return $this->container['bkc007'];
    }

    /**
     * Sets bkc007
     *
     * @param float|null $bkc007 Total number of bankruptcies filed within 24 months of the profile date
     *
     * @return self
     */
    public function setBkc007($bkc007)
    {
        if (is_null($bkc007)) {
            throw new \InvalidArgumentException('non-nullable bkc007 cannot be null');
        }
        $this->container['bkc007'] = $bkc007;

        return $this;
    }

    /**
     * Gets bkc008
     *
     * @return float|null
     */
    public function getBkc008()
    {
        return $this->container['bkc008'];
    }

    /**
     * Sets bkc008
     *
     * @param float|null $bkc008 Total number of non-filed bankruptcy actions
     *
     * @return self
     */
    public function setBkc008($bkc008)
    {
        if (is_null($bkc008)) {
            throw new \InvalidArgumentException('non-nullable bkc008 cannot be null');
        }
        $this->container['bkc008'] = $bkc008;

        return $this;
    }

    /**
     * Gets bko009
     *
     * @return float|null
     */
    public function getBko009()
    {
        return $this->container['bko009'];
    }

    /**
     * Sets bko009
     *
     * @param float|null $bko009 Presence of bankruptcies not satisfied, terminated nor released within 24 months of the profile date
     *
     * @return self
     */
    public function setBko009($bko009)
    {
        if (is_null($bko009)) {
            throw new \InvalidArgumentException('non-nullable bko009 cannot be null');
        }
        $this->container['bko009'] = $bko009;

        return $this;
    }

    /**
     * Gets bko010
     *
     * @return float|null
     */
    public function getBko010()
    {
        return $this->container['bko010'];
    }

    /**
     * Sets bko010
     *
     * @param float|null $bko010 Age in months of most recent bankruptcy filing
     *
     * @return self
     */
    public function setBko010($bko010)
    {
        if (is_null($bko010)) {
            throw new \InvalidArgumentException('non-nullable bko010 cannot be null');
        }
        $this->container['bko010'] = $bko010;

        return $this;
    }

    /**
     * Gets bko011
     *
     * @return float|null
     */
    public function getBko011()
    {
        return $this->container['bko011'];
    }

    /**
     * Sets bko011
     *
     * @param float|null $bko011 Age in months of most recent non-filed bankruptcy action
     *
     * @return self
     */
    public function setBko011($bko011)
    {
        if (is_null($bko011)) {
            throw new \InvalidArgumentException('non-nullable bko011 cannot be null');
        }
        $this->container['bko011'] = $bko011;

        return $this;
    }

    /**
     * Gets brb001
     *
     * @return float|null
     */
    public function getBrb001()
    {
        return $this->container['brb001'];
    }

    /**
     * Sets brb001
     *
     * @param float|null $brb001 Total asset balance of commercial banking relationships
     *
     * @return self
     */
    public function setBrb001($brb001)
    {
        if (is_null($brb001)) {
            throw new \InvalidArgumentException('non-nullable brb001 cannot be null');
        }
        $this->container['brb001'] = $brb001;

        return $this;
    }

    /**
     * Gets brb002
     *
     * @return float|null
     */
    public function getBrb002()
    {
        return $this->container['brb002'];
    }

    /**
     * Sets brb002
     *
     * @param float|null $brb002 Maximum balance of bank asset relationship within last 6 months
     *
     * @return self
     */
    public function setBrb002($brb002)
    {
        if (is_null($brb002)) {
            throw new \InvalidArgumentException('non-nullable brb002 cannot be null');
        }
        $this->container['brb002'] = $brb002;

        return $this;
    }

    /**
     * Gets brb003
     *
     * @return float|null
     */
    public function getBrb003()
    {
        return $this->container['brb003'];
    }

    /**
     * Sets brb003
     *
     * @param float|null $brb003 Total liability balance of commercial banking relationships
     *
     * @return self
     */
    public function setBrb003($brb003)
    {
        if (is_null($brb003)) {
            throw new \InvalidArgumentException('non-nullable brb003 cannot be null');
        }
        $this->container['brb003'] = $brb003;

        return $this;
    }

    /**
     * Gets brb004
     *
     * @return float|null
     */
    public function getBrb004()
    {
        return $this->container['brb004'];
    }

    /**
     * Sets brb004
     *
     * @param float|null $brb004 Maximum balance of bank liability relationship within last 6 months
     *
     * @return self
     */
    public function setBrb004($brb004)
    {
        if (is_null($brb004)) {
            throw new \InvalidArgumentException('non-nullable brb004 cannot be null');
        }
        $this->container['brb004'] = $brb004;

        return $this;
    }

    /**
     * Gets brb005
     *
     * @return float|null
     */
    public function getBrb005()
    {
        return $this->container['brb005'];
    }

    /**
     * Sets brb005
     *
     * @param float|null $brb005 Total account balance for commercial banking relationships
     *
     * @return self
     */
    public function setBrb005($brb005)
    {
        if (is_null($brb005)) {
            throw new \InvalidArgumentException('non-nullable brb005 cannot be null');
        }
        $this->container['brb005'] = $brb005;

        return $this;
    }

    /**
     * Gets brb006
     *
     * @return float|null
     */
    public function getBrb006()
    {
        return $this->container['brb006'];
    }

    /**
     * Sets brb006
     *
     * @param float|null $brb006 Total account balance for commercial banking relationships reported in the past six months
     *
     * @return self
     */
    public function setBrb006($brb006)
    {
        if (is_null($brb006)) {
            throw new \InvalidArgumentException('non-nullable brb006 cannot be null');
        }
        $this->container['brb006'] = $brb006;

        return $this;
    }

    /**
     * Gets brb007
     *
     * @return float|null
     */
    public function getBrb007()
    {
        return $this->container['brb007'];
    }

    /**
     * Sets brb007
     *
     * @param float|null $brb007 Total account balance for commercial banking relationships reported in the past twelve months
     *
     * @return self
     */
    public function setBrb007($brb007)
    {
        if (is_null($brb007)) {
            throw new \InvalidArgumentException('non-nullable brb007 cannot be null');
        }
        $this->container['brb007'] = $brb007;

        return $this;
    }

    /**
     * Gets brc008
     *
     * @return float|null
     */
    public function getBrc008()
    {
        return $this->container['brc008'];
    }

    /**
     * Sets brc008
     *
     * @param float|null $brc008 Total number of banking asset relationship (checking/saving/currency exchange)
     *
     * @return self
     */
    public function setBrc008($brc008)
    {
        if (is_null($brc008)) {
            throw new \InvalidArgumentException('non-nullable brc008 cannot be null');
        }
        $this->container['brc008'] = $brc008;

        return $this;
    }

    /**
     * Gets brc009
     *
     * @return float|null
     */
    public function getBrc009()
    {
        return $this->container['brc009'];
    }

    /**
     * Sets brc009
     *
     * @param float|null $brc009 Total number of banking liability relationship
     *
     * @return self
     */
    public function setBrc009($brc009)
    {
        if (is_null($brc009)) {
            throw new \InvalidArgumentException('non-nullable brc009 cannot be null');
        }
        $this->container['brc009'] = $brc009;

        return $this;
    }

    /**
     * Gets brc010
     *
     * @return float|null
     */
    public function getBrc010()
    {
        return $this->container['brc010'];
    }

    /**
     * Sets brc010
     *
     * @param float|null $brc010 Total number of commercial banking relationships
     *
     * @return self
     */
    public function setBrc010($brc010)
    {
        if (is_null($brc010)) {
            throw new \InvalidArgumentException('non-nullable brc010 cannot be null');
        }
        $this->container['brc010'] = $brc010;

        return $this;
    }

    /**
     * Gets brc011
     *
     * @return float|null
     */
    public function getBrc011()
    {
        return $this->container['brc011'];
    }

    /**
     * Sets brc011
     *
     * @param float|null $brc011 Total number of commercial banking relationships reported in the past six months
     *
     * @return self
     */
    public function setBrc011($brc011)
    {
        if (is_null($brc011)) {
            throw new \InvalidArgumentException('non-nullable brc011 cannot be null');
        }
        $this->container['brc011'] = $brc011;

        return $this;
    }

    /**
     * Gets brc012
     *
     * @return float|null
     */
    public function getBrc012()
    {
        return $this->container['brc012'];
    }

    /**
     * Sets brc012
     *
     * @param float|null $brc012 Total number of commercial banking relationships reported in the past twelve months
     *
     * @return self
     */
    public function setBrc012($brc012)
    {
        if (is_null($brc012)) {
            throw new \InvalidArgumentException('non-nullable brc012 cannot be null');
        }
        $this->container['brc012'] = $brc012;

        return $this;
    }

    /**
     * Gets brc013
     *
     * @return float|null
     */
    public function getBrc013()
    {
        return $this->container['brc013'];
    }

    /**
     * Sets brc013
     *
     * @param float|null $brc013 Total number of asset-based commercial banking relationships Includes checking accounts, savings accounts, merchant bank cards, and currency exchange
     *
     * @return self
     */
    public function setBrc013($brc013)
    {
        if (is_null($brc013)) {
            throw new \InvalidArgumentException('non-nullable brc013 cannot be null');
        }
        $this->container['brc013'] = $brc013;

        return $this;
    }

    /**
     * Gets brc014
     *
     * @return float|null
     */
    public function getBrc014()
    {
        return $this->container['brc014'];
    }

    /**
     * Sets brc014
     *
     * @param float|null $brc014 Total number of bank loan relationships Includes borrower, line of credit, SBA loan, asset based loan, private loan, retail loan, receivables financing
     *
     * @return self
     */
    public function setBrc014($brc014)
    {
        if (is_null($brc014)) {
            throw new \InvalidArgumentException('non-nullable brc014 cannot be null');
        }
        $this->container['brc014'] = $brc014;

        return $this;
    }

    /**
     * Gets bro015
     *
     * @return float|null
     */
    public function getBro015()
    {
        return $this->container['bro015'];
    }

    /**
     * Sets bro015
     *
     * @param float|null $bro015 Age in months of newest commercial banking relationship
     *
     * @return self
     */
    public function setBro015($bro015)
    {
        if (is_null($bro015)) {
            throw new \InvalidArgumentException('non-nullable bro015 cannot be null');
        }
        $this->container['bro015'] = $bro015;

        return $this;
    }

    /**
     * Gets bro016
     *
     * @return float|null
     */
    public function getBro016()
    {
        return $this->container['bro016'];
    }

    /**
     * Sets bro016
     *
     * @param float|null $bro016 Age in months of oldest commercial banking relationship
     *
     * @return self
     */
    public function setBro016($bro016)
    {
        if (is_null($bro016)) {
            throw new \InvalidArgumentException('non-nullable bro016 cannot be null');
        }
        $this->container['bro016'] = $bro016;

        return $this;
    }

    /**
     * Gets bro017
     *
     * @return float|null
     */
    public function getBro017()
    {
        return $this->container['bro017'];
    }

    /**
     * Sets bro017
     *
     * @param float|null $bro017 Average age in months of commercial banking relationships
     *
     * @return self
     */
    public function setBro017($bro017)
    {
        if (is_null($bro017)) {
            throw new \InvalidArgumentException('non-nullable bro017 cannot be null');
        }
        $this->container['bro017'] = $bro017;

        return $this;
    }

    /**
     * Gets brp018
     *
     * @return float|null
     */
    public function getBrp018()
    {
        return $this->container['brp018'];
    }

    /**
     * Sets brp018
     *
     * @param float|null $brp018 Percentage of Total asset balance of commercial banking relationships to Total trade balance
     *
     * @return self
     */
    public function setBrp018($brp018)
    {
        if (is_null($brp018)) {
            throw new \InvalidArgumentException('non-nullable brp018 cannot be null');
        }
        $this->container['brp018'] = $brp018;

        return $this;
    }

    /**
     * Gets brp019
     *
     * @return float|null
     */
    public function getBrp019()
    {
        return $this->container['brp019'];
    }

    /**
     * Sets brp019
     *
     * @param float|null $brp019 Percentage of Total liability balance of commercial banking relationships to Total trade balance
     *
     * @return self
     */
    public function setBrp019($brp019)
    {
        if (is_null($brp019)) {
            throw new \InvalidArgumentException('non-nullable brp019 cannot be null');
        }
        $this->container['brp019'] = $brp019;

        return $this;
    }

    /**
     * Gets brp020
     *
     * @return float|null
     */
    public function getBrp020()
    {
        return $this->container['brp020'];
    }

    /**
     * Sets brp020
     *
     * @param float|null $brp020 Percentage of Total balance of commercial banking relationships to Total balance of trades
     *
     * @return self
     */
    public function setBrp020($brp020)
    {
        if (is_null($brp020)) {
            throw new \InvalidArgumentException('non-nullable brp020 cannot be null');
        }
        $this->container['brp020'] = $brp020;

        return $this;
    }

    /**
     * Gets brp021
     *
     * @return float|null
     */
    public function getBrp021()
    {
        return $this->container['brp021'];
    }

    /**
     * Sets brp021
     *
     * @param float|null $brp021 Percentage of Total number of commercial banking asset relationships to Total number of trades
     *
     * @return self
     */
    public function setBrp021($brp021)
    {
        if (is_null($brp021)) {
            throw new \InvalidArgumentException('non-nullable brp021 cannot be null');
        }
        $this->container['brp021'] = $brp021;

        return $this;
    }

    /**
     * Gets brp022
     *
     * @return float|null
     */
    public function getBrp022()
    {
        return $this->container['brp022'];
    }

    /**
     * Sets brp022
     *
     * @param float|null $brp022 Percentage of Total number of commercial banking liability relationships to Total number of trades
     *
     * @return self
     */
    public function setBrp022($brp022)
    {
        if (is_null($brp022)) {
            throw new \InvalidArgumentException('non-nullable brp022 cannot be null');
        }
        $this->container['brp022'] = $brp022;

        return $this;
    }

    /**
     * Gets brp023
     *
     * @return float|null
     */
    public function getBrp023()
    {
        return $this->container['brp023'];
    }

    /**
     * Sets brp023
     *
     * @param float|null $brp023 Percentage of Total number of commercial banking relationships to Total number of trades
     *
     * @return self
     */
    public function setBrp023($brp023)
    {
        if (is_null($brp023)) {
            throw new \InvalidArgumentException('non-nullable brp023 cannot be null');
        }
        $this->container['brp023'] = $brp023;

        return $this;
    }

    /**
     * Gets clb001
     *
     * @return float|null
     */
    public function getClb001()
    {
        return $this->container['clb001'];
    }

    /**
     * Sets clb001
     *
     * @param float|null $clb001 Total amount placed for open and closed unpaid collections
     *
     * @return self
     */
    public function setClb001($clb001)
    {
        if (is_null($clb001)) {
            throw new \InvalidArgumentException('non-nullable clb001 cannot be null');
        }
        $this->container['clb001'] = $clb001;

        return $this;
    }

    /**
     * Gets clb002
     *
     * @return float|null
     */
    public function getClb002()
    {
        return $this->container['clb002'];
    }

    /**
     * Sets clb002
     *
     * @param float|null $clb002 Total amount placed for open and closed collection trades
     *
     * @return self
     */
    public function setClb002($clb002)
    {
        if (is_null($clb002)) {
            throw new \InvalidArgumentException('non-nullable clb002 cannot be null');
        }
        $this->container['clb002'] = $clb002;

        return $this;
    }

    /**
     * Gets clb003
     *
     * @return float|null
     */
    public function getClb003()
    {
        return $this->container['clb003'];
    }

    /**
     * Sets clb003
     *
     * @param float|null $clb003 Total amount collected for open and closed collection trades
     *
     * @return self
     */
    public function setClb003($clb003)
    {
        if (is_null($clb003)) {
            throw new \InvalidArgumentException('non-nullable clb003 cannot be null');
        }
        $this->container['clb003'] = $clb003;

        return $this;
    }

    /**
     * Gets clb004
     *
     * @return float|null
     */
    public function getClb004()
    {
        return $this->container['clb004'];
    }

    /**
     * Sets clb004
     *
     * @param float|null $clb004 Total amount collected for open collection trades
     *
     * @return self
     */
    public function setClb004($clb004)
    {
        if (is_null($clb004)) {
            throw new \InvalidArgumentException('non-nullable clb004 cannot be null');
        }
        $this->container['clb004'] = $clb004;

        return $this;
    }

    /**
     * Gets clb005
     *
     * @return float|null
     */
    public function getClb005()
    {
        return $this->container['clb005'];
    }

    /**
     * Sets clb005
     *
     * @param float|null $clb005 Maximum amount collected on any collection trade
     *
     * @return self
     */
    public function setClb005($clb005)
    {
        if (is_null($clb005)) {
            throw new \InvalidArgumentException('non-nullable clb005 cannot be null');
        }
        $this->container['clb005'] = $clb005;

        return $this;
    }

    /**
     * Gets clc006
     *
     * @return float|null
     */
    public function getClc006()
    {
        return $this->container['clc006'];
    }

    /**
     * Sets clc006
     *
     * @param float|null $clc006 Total number of open or closed unpaid collection trades
     *
     * @return self
     */
    public function setClc006($clc006)
    {
        if (is_null($clc006)) {
            throw new \InvalidArgumentException('non-nullable clc006 cannot be null');
        }
        $this->container['clc006'] = $clc006;

        return $this;
    }

    /**
     * Gets clc007
     *
     * @return float|null
     */
    public function getClc007()
    {
        return $this->container['clc007'];
    }

    /**
     * Sets clc007
     *
     * @param float|null $clc007 Total number of open collections placed within 12 months of profile date
     *
     * @return self
     */
    public function setClc007($clc007)
    {
        if (is_null($clc007)) {
            throw new \InvalidArgumentException('non-nullable clc007 cannot be null');
        }
        $this->container['clc007'] = $clc007;

        return $this;
    }

    /**
     * Gets clc008
     *
     * @return float|null
     */
    public function getClc008()
    {
        return $this->container['clc008'];
    }

    /**
     * Sets clc008
     *
     * @param float|null $clc008 Total number of open collections placed within 6 months of profile date
     *
     * @return self
     */
    public function setClc008($clc008)
    {
        if (is_null($clc008)) {
            throw new \InvalidArgumentException('non-nullable clc008 cannot be null');
        }
        $this->container['clc008'] = $clc008;

        return $this;
    }

    /**
     * Gets clc009
     *
     * @return float|null
     */
    public function getClc009()
    {
        return $this->container['clc009'];
    }

    /**
     * Sets clc009
     *
     * @param float|null $clc009 Total number of open and closed collections placed within 6 months of profile date
     *
     * @return self
     */
    public function setClc009($clc009)
    {
        if (is_null($clc009)) {
            throw new \InvalidArgumentException('non-nullable clc009 cannot be null');
        }
        $this->container['clc009'] = $clc009;

        return $this;
    }

    /**
     * Gets clc010
     *
     * @return float|null
     */
    public function getClc010()
    {
        return $this->container['clc010'];
    }

    /**
     * Sets clc010
     *
     * @param float|null $clc010 Total number of open and closed collection trades
     *
     * @return self
     */
    public function setClc010($clc010)
    {
        if (is_null($clc010)) {
            throw new \InvalidArgumentException('non-nullable clc010 cannot be null');
        }
        $this->container['clc010'] = $clc010;

        return $this;
    }

    /**
     * Gets clc011
     *
     * @return float|null
     */
    public function getClc011()
    {
        return $this->container['clc011'];
    }

    /**
     * Sets clc011
     *
     * @param float|null $clc011 Total number of open and closed collection trades placed within 12 months of the profile date
     *
     * @return self
     */
    public function setClc011($clc011)
    {
        if (is_null($clc011)) {
            throw new \InvalidArgumentException('non-nullable clc011 cannot be null');
        }
        $this->container['clc011'] = $clc011;

        return $this;
    }

    /**
     * Gets clc012
     *
     * @return float|null
     */
    public function getClc012()
    {
        return $this->container['clc012'];
    }

    /**
     * Sets clc012
     *
     * @param float|null $clc012 Total number of open and closed collection trades placed within the last 24 months of the profile date
     *
     * @return self
     */
    public function setClc012($clc012)
    {
        if (is_null($clc012)) {
            throw new \InvalidArgumentException('non-nullable clc012 cannot be null');
        }
        $this->container['clc012'] = $clc012;

        return $this;
    }

    /**
     * Gets clc013
     *
     * @return float|null
     */
    public function getClc013()
    {
        return $this->container['clc013'];
    }

    /**
     * Sets clc013
     *
     * @param float|null $clc013 Total number of open collection trades
     *
     * @return self
     */
    public function setClc013($clc013)
    {
        if (is_null($clc013)) {
            throw new \InvalidArgumentException('non-nullable clc013 cannot be null');
        }
        $this->container['clc013'] = $clc013;

        return $this;
    }

    /**
     * Gets clo014
     *
     * @return float|null
     */
    public function getClo014()
    {
        return $this->container['clo014'];
    }

    /**
     * Sets clo014
     *
     * @param float|null $clo014 Age in months of most recent collection trade
     *
     * @return self
     */
    public function setClo014($clo014)
    {
        if (is_null($clo014)) {
            throw new \InvalidArgumentException('non-nullable clo014 cannot be null');
        }
        $this->container['clo014'] = $clo014;

        return $this;
    }

    /**
     * Gets clo015
     *
     * @return float|null
     */
    public function getClo015()
    {
        return $this->container['clo015'];
    }

    /**
     * Sets clo015
     *
     * @param float|null $clo015 Age in months of most recent open collection trade
     *
     * @return self
     */
    public function setClo015($clo015)
    {
        if (is_null($clo015)) {
            throw new \InvalidArgumentException('non-nullable clo015 cannot be null');
        }
        $this->container['clo015'] = $clo015;

        return $this;
    }

    /**
     * Gets clp016
     *
     * @return float|null
     */
    public function getClp016()
    {
        return $this->container['clp016'];
    }

    /**
     * Sets clp016
     *
     * @param float|null $clp016 Ratio of Total amount placed for unpaid collections to Total trade balance
     *
     * @return self
     */
    public function setClp016($clp016)
    {
        if (is_null($clp016)) {
            throw new \InvalidArgumentException('non-nullable clp016 cannot be null');
        }
        $this->container['clp016'] = $clp016;

        return $this;
    }

    /**
     * Gets clp017
     *
     * @return float|null
     */
    public function getClp017()
    {
        return $this->container['clp017'];
    }

    /**
     * Sets clp017
     *
     * @param float|null $clp017 Percentage of Total number of open collections to Total number of collections
     *
     * @return self
     */
    public function setClp017($clp017)
    {
        if (is_null($clp017)) {
            throw new \InvalidArgumentException('non-nullable clp017 cannot be null');
        }
        $this->container['clp017'] = $clp017;

        return $this;
    }

    /**
     * Gets clp018
     *
     * @return float|null
     */
    public function getClp018()
    {
        return $this->container['clp018'];
    }

    /**
     * Sets clp018
     *
     * @param float|null $clp018 Ratio of Total number of open collections to Total number of trades
     *
     * @return self
     */
    public function setClp018($clp018)
    {
        if (is_null($clp018)) {
            throw new \InvalidArgumentException('non-nullable clp018 cannot be null');
        }
        $this->container['clp018'] = $clp018;

        return $this;
    }

    /**
     * Gets clp019
     *
     * @return float|null
     */
    public function getClp019()
    {
        return $this->container['clp019'];
    }

    /**
     * Sets clp019
     *
     * @param float|null $clp019 Percentage of Total number of open or closed unpaid collections to Total number of collections
     *
     * @return self
     */
    public function setClp019($clp019)
    {
        if (is_null($clp019)) {
            throw new \InvalidArgumentException('non-nullable clp019 cannot be null');
        }
        $this->container['clp019'] = $clp019;

        return $this;
    }

    /**
     * Gets ctb001
     *
     * @return float|null
     */
    public function getCtb001()
    {
        return $this->container['ctb001'];
    }

    /**
     * Sets ctb001
     *
     * @param float|null $ctb001 Total balance of combined trades
     *
     * @return self
     */
    public function setCtb001($ctb001)
    {
        if (is_null($ctb001)) {
            throw new \InvalidArgumentException('non-nullable ctb001 cannot be null');
        }
        $this->container['ctb001'] = $ctb001;

        return $this;
    }

    /**
     * Gets ctb002
     *
     * @return float|null
     */
    public function getCtb002()
    {
        return $this->container['ctb002'];
    }

    /**
     * Sets ctb002
     *
     * @param float|null $ctb002 Total balance of combined trades that is 1-30 days delinquent
     *
     * @return self
     */
    public function setCtb002($ctb002)
    {
        if (is_null($ctb002)) {
            throw new \InvalidArgumentException('non-nullable ctb002 cannot be null');
        }
        $this->container['ctb002'] = $ctb002;

        return $this;
    }

    /**
     * Gets ctb003
     *
     * @return float|null
     */
    public function getCtb003()
    {
        return $this->container['ctb003'];
    }

    /**
     * Sets ctb003
     *
     * @param float|null $ctb003 Total balance of combined trades that is 31-60 days delinquent
     *
     * @return self
     */
    public function setCtb003($ctb003)
    {
        if (is_null($ctb003)) {
            throw new \InvalidArgumentException('non-nullable ctb003 cannot be null');
        }
        $this->container['ctb003'] = $ctb003;

        return $this;
    }

    /**
     * Gets ctb004
     *
     * @return float|null
     */
    public function getCtb004()
    {
        return $this->container['ctb004'];
    }

    /**
     * Sets ctb004
     *
     * @param float|null $ctb004 Total balance of combined trades that is 61-90 days delinquent
     *
     * @return self
     */
    public function setCtb004($ctb004)
    {
        if (is_null($ctb004)) {
            throw new \InvalidArgumentException('non-nullable ctb004 cannot be null');
        }
        $this->container['ctb004'] = $ctb004;

        return $this;
    }

    /**
     * Gets ctb005
     *
     * @return float|null
     */
    public function getCtb005()
    {
        return $this->container['ctb005'];
    }

    /**
     * Sets ctb005
     *
     * @param float|null $ctb005 Total balance of combined trades that is 91+ days delinquent
     *
     * @return self
     */
    public function setCtb005($ctb005)
    {
        if (is_null($ctb005)) {
            throw new \InvalidArgumentException('non-nullable ctb005 cannot be null');
        }
        $this->container['ctb005'] = $ctb005;

        return $this;
    }

    /**
     * Gets ctb006
     *
     * @return float|null
     */
    public function getCtb006()
    {
        return $this->container['ctb006'];
    }

    /**
     * Sets ctb006
     *
     * @param float|null $ctb006 Total balance of combined trades that is current
     *
     * @return self
     */
    public function setCtb006($ctb006)
    {
        if (is_null($ctb006)) {
            throw new \InvalidArgumentException('non-nullable ctb006 cannot be null');
        }
        $this->container['ctb006'] = $ctb006;

        return $this;
    }

    /**
     * Gets ctb007
     *
     * @return float|null
     */
    public function getCtb007()
    {
        return $this->container['ctb007'];
    }

    /**
     * Sets ctb007
     *
     * @param float|null $ctb007 Total balance of combined trades where worst delinquency = current
     *
     * @return self
     */
    public function setCtb007($ctb007)
    {
        if (is_null($ctb007)) {
            throw new \InvalidArgumentException('non-nullable ctb007 cannot be null');
        }
        $this->container['ctb007'] = $ctb007;

        return $this;
    }

    /**
     * Gets ctb008
     *
     * @return float|null
     */
    public function getCtb008()
    {
        return $this->container['ctb008'];
    }

    /**
     * Sets ctb008
     *
     * @param float|null $ctb008 Total balance of combined trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setCtb008($ctb008)
    {
        if (is_null($ctb008)) {
            throw new \InvalidArgumentException('non-nullable ctb008 cannot be null');
        }
        $this->container['ctb008'] = $ctb008;

        return $this;
    }

    /**
     * Gets ctb009
     *
     * @return float|null
     */
    public function getCtb009()
    {
        return $this->container['ctb009'];
    }

    /**
     * Sets ctb009
     *
     * @param float|null $ctb009 Total balance of combined trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setCtb009($ctb009)
    {
        if (is_null($ctb009)) {
            throw new \InvalidArgumentException('non-nullable ctb009 cannot be null');
        }
        $this->container['ctb009'] = $ctb009;

        return $this;
    }

    /**
     * Gets ctb010
     *
     * @return float|null
     */
    public function getCtb010()
    {
        return $this->container['ctb010'];
    }

    /**
     * Sets ctb010
     *
     * @param float|null $ctb010 Total balance of combined trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setCtb010($ctb010)
    {
        if (is_null($ctb010)) {
            throw new \InvalidArgumentException('non-nullable ctb010 cannot be null');
        }
        $this->container['ctb010'] = $ctb010;

        return $this;
    }

    /**
     * Gets ctb011
     *
     * @return float|null
     */
    public function getCtb011()
    {
        return $this->container['ctb011'];
    }

    /**
     * Sets ctb011
     *
     * @param float|null $ctb011 Total balance of combined trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setCtb011($ctb011)
    {
        if (is_null($ctb011)) {
            throw new \InvalidArgumentException('non-nullable ctb011 cannot be null');
        }
        $this->container['ctb011'] = $ctb011;

        return $this;
    }

    /**
     * Gets ctb012
     *
     * @return float|null
     */
    public function getCtb012()
    {
        return $this->container['ctb012'];
    }

    /**
     * Sets ctb012
     *
     * @param float|null $ctb012 Total balance of combined trades where worst status = current
     *
     * @return self
     */
    public function setCtb012($ctb012)
    {
        if (is_null($ctb012)) {
            throw new \InvalidArgumentException('non-nullable ctb012 cannot be null');
        }
        $this->container['ctb012'] = $ctb012;

        return $this;
    }

    /**
     * Gets ctb013
     *
     * @return float|null
     */
    public function getCtb013()
    {
        return $this->container['ctb013'];
    }

    /**
     * Sets ctb013
     *
     * @param float|null $ctb013 Total balance of combined trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setCtb013($ctb013)
    {
        if (is_null($ctb013)) {
            throw new \InvalidArgumentException('non-nullable ctb013 cannot be null');
        }
        $this->container['ctb013'] = $ctb013;

        return $this;
    }

    /**
     * Gets ctb014
     *
     * @return float|null
     */
    public function getCtb014()
    {
        return $this->container['ctb014'];
    }

    /**
     * Sets ctb014
     *
     * @param float|null $ctb014 Total balance of combined trades where worst status is a derogatory comment (bankrupcy, judgment, lien, etc)
     *
     * @return self
     */
    public function setCtb014($ctb014)
    {
        if (is_null($ctb014)) {
            throw new \InvalidArgumentException('non-nullable ctb014 cannot be null');
        }
        $this->container['ctb014'] = $ctb014;

        return $this;
    }

    /**
     * Gets ctb015
     *
     * @return float|null
     */
    public function getCtb015()
    {
        return $this->container['ctb015'];
    }

    /**
     * Sets ctb015
     *
     * @param float|null $ctb015 Total balance of combined trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setCtb015($ctb015)
    {
        if (is_null($ctb015)) {
            throw new \InvalidArgumentException('non-nullable ctb015 cannot be null');
        }
        $this->container['ctb015'] = $ctb015;

        return $this;
    }

    /**
     * Gets ctb016
     *
     * @return float|null
     */
    public function getCtb016()
    {
        return $this->container['ctb016'];
    }

    /**
     * Sets ctb016
     *
     * @param float|null $ctb016 Total balance of combined trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setCtb016($ctb016)
    {
        if (is_null($ctb016)) {
            throw new \InvalidArgumentException('non-nullable ctb016 cannot be null');
        }
        $this->container['ctb016'] = $ctb016;

        return $this;
    }

    /**
     * Gets ctb017
     *
     * @return float|null
     */
    public function getCtb017()
    {
        return $this->container['ctb017'];
    }

    /**
     * Sets ctb017
     *
     * @param float|null $ctb017 Total balance of combined trades where worst status = 91+ days
     *
     * @return self
     */
    public function setCtb017($ctb017)
    {
        if (is_null($ctb017)) {
            throw new \InvalidArgumentException('non-nullable ctb017 cannot be null');
        }
        $this->container['ctb017'] = $ctb017;

        return $this;
    }

    /**
     * Gets ctb018
     *
     * @return float|null
     */
    public function getCtb018()
    {
        return $this->container['ctb018'];
    }

    /**
     * Sets ctb018
     *
     * @param float|null $ctb018 Total highest balance in past 12 months across all combined trades
     *
     * @return self
     */
    public function setCtb018($ctb018)
    {
        if (is_null($ctb018)) {
            throw new \InvalidArgumentException('non-nullable ctb018 cannot be null');
        }
        $this->container['ctb018'] = $ctb018;

        return $this;
    }

    /**
     * Gets ctc021
     *
     * @return float|null
     */
    public function getCtc021()
    {
        return $this->container['ctc021'];
    }

    /**
     * Sets ctc021
     *
     * @param float|null $ctc021 Total number of combined trades
     *
     * @return self
     */
    public function setCtc021($ctc021)
    {
        if (is_null($ctc021)) {
            throw new \InvalidArgumentException('non-nullable ctc021 cannot be null');
        }
        $this->container['ctc021'] = $ctc021;

        return $this;
    }

    /**
     * Gets ctc022
     *
     * @return float|null
     */
    public function getCtc022()
    {
        return $this->container['ctc022'];
    }

    /**
     * Sets ctc022
     *
     * @param float|null $ctc022 Total number of combined trades where worst delinquency = current
     *
     * @return self
     */
    public function setCtc022($ctc022)
    {
        if (is_null($ctc022)) {
            throw new \InvalidArgumentException('non-nullable ctc022 cannot be null');
        }
        $this->container['ctc022'] = $ctc022;

        return $this;
    }

    /**
     * Gets ctc023
     *
     * @return float|null
     */
    public function getCtc023()
    {
        return $this->container['ctc023'];
    }

    /**
     * Sets ctc023
     *
     * @param float|null $ctc023 Total number of combined trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setCtc023($ctc023)
    {
        if (is_null($ctc023)) {
            throw new \InvalidArgumentException('non-nullable ctc023 cannot be null');
        }
        $this->container['ctc023'] = $ctc023;

        return $this;
    }

    /**
     * Gets ctc024
     *
     * @return float|null
     */
    public function getCtc024()
    {
        return $this->container['ctc024'];
    }

    /**
     * Sets ctc024
     *
     * @param float|null $ctc024 Total number of combined trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setCtc024($ctc024)
    {
        if (is_null($ctc024)) {
            throw new \InvalidArgumentException('non-nullable ctc024 cannot be null');
        }
        $this->container['ctc024'] = $ctc024;

        return $this;
    }

    /**
     * Gets ctc025
     *
     * @return float|null
     */
    public function getCtc025()
    {
        return $this->container['ctc025'];
    }

    /**
     * Sets ctc025
     *
     * @param float|null $ctc025 Total number of combined trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setCtc025($ctc025)
    {
        if (is_null($ctc025)) {
            throw new \InvalidArgumentException('non-nullable ctc025 cannot be null');
        }
        $this->container['ctc025'] = $ctc025;

        return $this;
    }

    /**
     * Gets ctc026
     *
     * @return float|null
     */
    public function getCtc026()
    {
        return $this->container['ctc026'];
    }

    /**
     * Sets ctc026
     *
     * @param float|null $ctc026 Total number of combined trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setCtc026($ctc026)
    {
        if (is_null($ctc026)) {
            throw new \InvalidArgumentException('non-nullable ctc026 cannot be null');
        }
        $this->container['ctc026'] = $ctc026;

        return $this;
    }

    /**
     * Gets ctc027
     *
     * @return float|null
     */
    public function getCtc027()
    {
        return $this->container['ctc027'];
    }

    /**
     * Sets ctc027
     *
     * @param float|null $ctc027 Total number of combined trades where worst status = current
     *
     * @return self
     */
    public function setCtc027($ctc027)
    {
        if (is_null($ctc027)) {
            throw new \InvalidArgumentException('non-nullable ctc027 cannot be null');
        }
        $this->container['ctc027'] = $ctc027;

        return $this;
    }

    /**
     * Gets ctc028
     *
     * @return float|null
     */
    public function getCtc028()
    {
        return $this->container['ctc028'];
    }

    /**
     * Sets ctc028
     *
     * @param float|null $ctc028 Total number of combined trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setCtc028($ctc028)
    {
        if (is_null($ctc028)) {
            throw new \InvalidArgumentException('non-nullable ctc028 cannot be null');
        }
        $this->container['ctc028'] = $ctc028;

        return $this;
    }

    /**
     * Gets ctc029
     *
     * @return float|null
     */
    public function getCtc029()
    {
        return $this->container['ctc029'];
    }

    /**
     * Sets ctc029
     *
     * @param float|null $ctc029 Total number of combined trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setCtc029($ctc029)
    {
        if (is_null($ctc029)) {
            throw new \InvalidArgumentException('non-nullable ctc029 cannot be null');
        }
        $this->container['ctc029'] = $ctc029;

        return $this;
    }

    /**
     * Gets ctc030
     *
     * @return float|null
     */
    public function getCtc030()
    {
        return $this->container['ctc030'];
    }

    /**
     * Sets ctc030
     *
     * @param float|null $ctc030 Total number of combined trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setCtc030($ctc030)
    {
        if (is_null($ctc030)) {
            throw new \InvalidArgumentException('non-nullable ctc030 cannot be null');
        }
        $this->container['ctc030'] = $ctc030;

        return $this;
    }

    /**
     * Gets ctc031
     *
     * @return float|null
     */
    public function getCtc031()
    {
        return $this->container['ctc031'];
    }

    /**
     * Sets ctc031
     *
     * @param float|null $ctc031 Total number of combined trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setCtc031($ctc031)
    {
        if (is_null($ctc031)) {
            throw new \InvalidArgumentException('non-nullable ctc031 cannot be null');
        }
        $this->container['ctc031'] = $ctc031;

        return $this;
    }

    /**
     * Gets ctc032
     *
     * @return float|null
     */
    public function getCtc032()
    {
        return $this->container['ctc032'];
    }

    /**
     * Sets ctc032
     *
     * @param float|null $ctc032 Total number of combined trades where worst status = 91+ days
     *
     * @return self
     */
    public function setCtc032($ctc032)
    {
        if (is_null($ctc032)) {
            throw new \InvalidArgumentException('non-nullable ctc032 cannot be null');
        }
        $this->container['ctc032'] = $ctc032;

        return $this;
    }

    /**
     * Gets ctc033
     *
     * @return float|null
     */
    public function getCtc033()
    {
        return $this->container['ctc033'];
    }

    /**
     * Sets ctc033
     *
     * @param float|null $ctc033 Total number of combined trades with DBT greater than 0
     *
     * @return self
     */
    public function setCtc033($ctc033)
    {
        if (is_null($ctc033)) {
            throw new \InvalidArgumentException('non-nullable ctc033 cannot be null');
        }
        $this->container['ctc033'] = $ctc033;

        return $this;
    }

    /**
     * Gets ctc034
     *
     * @return float|null
     */
    public function getCtc034()
    {
        return $this->container['ctc034'];
    }

    /**
     * Sets ctc034
     *
     * @param float|null $ctc034 Total number of combined trades with DBT greater than 30
     *
     * @return self
     */
    public function setCtc034($ctc034)
    {
        if (is_null($ctc034)) {
            throw new \InvalidArgumentException('non-nullable ctc034 cannot be null');
        }
        $this->container['ctc034'] = $ctc034;

        return $this;
    }

    /**
     * Gets ctc035
     *
     * @return float|null
     */
    public function getCtc035()
    {
        return $this->container['ctc035'];
    }

    /**
     * Sets ctc035
     *
     * @param float|null $ctc035 Total number of combined trades with DBT greater than 60
     *
     * @return self
     */
    public function setCtc035($ctc035)
    {
        if (is_null($ctc035)) {
            throw new \InvalidArgumentException('non-nullable ctc035 cannot be null');
        }
        $this->container['ctc035'] = $ctc035;

        return $this;
    }

    /**
     * Gets ctc036
     *
     * @return float|null
     */
    public function getCtc036()
    {
        return $this->container['ctc036'];
    }

    /**
     * Sets ctc036
     *
     * @param float|null $ctc036 Total number of combined trades with DBT greater than 90
     *
     * @return self
     */
    public function setCtc036($ctc036)
    {
        if (is_null($ctc036)) {
            throw new \InvalidArgumentException('non-nullable ctc036 cannot be null');
        }
        $this->container['ctc036'] = $ctc036;

        return $this;
    }

    /**
     * Gets ctd038
     *
     * @return float|null
     */
    public function getCtd038()
    {
        return $this->container['ctd038'];
    }

    /**
     * Sets ctd038
     *
     * @param float|null $ctd038 DBT of combined trades
     *
     * @return self
     */
    public function setCtd038($ctd038)
    {
        if (is_null($ctd038)) {
            throw new \InvalidArgumentException('non-nullable ctd038 cannot be null');
        }
        $this->container['ctd038'] = $ctd038;

        return $this;
    }

    /**
     * Gets ctp039
     *
     * @return float|null
     */
    public function getCtp039()
    {
        return $this->container['ctp039'];
    }

    /**
     * Sets ctp039
     *
     * @param float|null $ctp039 Percentage of Total combined balance to combined trades Total highest balance in past 12 months
     *
     * @return self
     */
    public function setCtp039($ctp039)
    {
        if (is_null($ctp039)) {
            throw new \InvalidArgumentException('non-nullable ctp039 cannot be null');
        }
        $this->container['ctp039'] = $ctp039;

        return $this;
    }

    /**
     * Gets ctp040
     *
     * @return float|null
     */
    public function getCtp040()
    {
        return $this->container['ctp040'];
    }

    /**
     * Sets ctp040
     *
     * @param float|null $ctp040 Percentage of Total balance of combined trades to Total trade balance
     *
     * @return self
     */
    public function setCtp040($ctp040)
    {
        if (is_null($ctp040)) {
            throw new \InvalidArgumentException('non-nullable ctp040 cannot be null');
        }
        $this->container['ctp040'] = $ctp040;

        return $this;
    }

    /**
     * Gets ctp041
     *
     * @return float|null
     */
    public function getCtp041()
    {
        return $this->container['ctp041'];
    }

    /**
     * Sets ctp041
     *
     * @param float|null $ctp041 Percentage of Total number of combined trades to Total number of trades
     *
     * @return self
     */
    public function setCtp041($ctp041)
    {
        if (is_null($ctp041)) {
            throw new \InvalidArgumentException('non-nullable ctp041 cannot be null');
        }
        $this->container['ctp041'] = $ctp041;

        return $this;
    }

    /**
     * Gets dmo003
     *
     * @return string|null
     */
    public function getDmo003()
    {
        return $this->container['dmo003'];
    }

    /**
     * Sets dmo003
     *
     * @param string|null $dmo003 Business type code: C = Corporation, F = Fortune 1000, H = Chain Store, I = Institutions, N = Non-Profit, P = Partnership, R = Residential (Cottage), S = Sole Proprietor, X = S Corporation, Y = Corporation, Blank = Not Available
     *
     * @return self
     */
    public function setDmo003($dmo003)
    {
        if (is_null($dmo003)) {
            throw new \InvalidArgumentException('non-nullable dmo003 cannot be null');
        }
        if ((mb_strlen($dmo003) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dmo003 when calling BizAggregates., must be smaller than or equal to 1.');
        }

        $this->container['dmo003'] = $dmo003;

        return $this;
    }

    /**
     * Gets dmo009
     *
     * @return string|null
     */
    public function getDmo009()
    {
        return $this->container['dmo009'];
    }

    /**
     * Sets dmo009
     *
     * @param string|null $dmo009 Date the first trade lines were contributed and the file was created within Experian's database
     *
     * @return self
     */
    public function setDmo009($dmo009)
    {
        if (is_null($dmo009)) {
            throw new \InvalidArgumentException('non-nullable dmo009 cannot be null');
        }
        if ((mb_strlen($dmo009) > 10)) {
            throw new \InvalidArgumentException('invalid length for $dmo009 when calling BizAggregates., must be smaller than or equal to 10.');
        }

        $this->container['dmo009'] = $dmo009;

        return $this;
    }

    /**
     * Gets dmo013
     *
     * @return string|null
     */
    public function getDmo013()
    {
        return $this->container['dmo013'];
    }

    /**
     * Sets dmo013
     *
     * @param string|null $dmo013 SIC (Standard industrial classification) code assigned by the government for a company's primary business activity
     *
     * @return self
     */
    public function setDmo013($dmo013)
    {
        if (is_null($dmo013)) {
            throw new \InvalidArgumentException('non-nullable dmo013 cannot be null');
        }
        if ((mb_strlen($dmo013) > 4)) {
            throw new \InvalidArgumentException('invalid length for $dmo013 when calling BizAggregates., must be smaller than or equal to 4.');
        }

        $this->container['dmo013'] = $dmo013;

        return $this;
    }

    /**
     * Gets iqc001
     *
     * @return float|null
     */
    public function getIqc001()
    {
        return $this->container['iqc001'];
    }

    /**
     * Sets iqc001
     *
     * @param float|null $iqc001 Total number of inquiries in the last nine full months
     *
     * @return self
     */
    public function setIqc001($iqc001)
    {
        if (is_null($iqc001)) {
            throw new \InvalidArgumentException('non-nullable iqc001 cannot be null');
        }
        $this->container['iqc001'] = $iqc001;

        return $this;
    }

    /**
     * Gets iqc002
     *
     * @return float|null
     */
    public function getIqc002()
    {
        return $this->container['iqc002'];
    }

    /**
     * Sets iqc002
     *
     * @param float|null $iqc002 Total number of inquiries in the last six full months
     *
     * @return self
     */
    public function setIqc002($iqc002)
    {
        if (is_null($iqc002)) {
            throw new \InvalidArgumentException('non-nullable iqc002 cannot be null');
        }
        $this->container['iqc002'] = $iqc002;

        return $this;
    }

    /**
     * Gets iqc003
     *
     * @return float|null
     */
    public function getIqc003()
    {
        return $this->container['iqc003'];
    }

    /**
     * Sets iqc003
     *
     * @param float|null $iqc003 Total number of inquiries in the last three full months
     *
     * @return self
     */
    public function setIqc003($iqc003)
    {
        if (is_null($iqc003)) {
            throw new \InvalidArgumentException('non-nullable iqc003 cannot be null');
        }
        $this->container['iqc003'] = $iqc003;

        return $this;
    }

    /**
     * Gets jdb001
     *
     * @return float|null
     */
    public function getJdb001()
    {
        return $this->container['jdb001'];
    }

    /**
     * Sets jdb001
     *
     * @param float|null $jdb001 Total amount of judgments filed within 12 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return self
     */
    public function setJdb001($jdb001)
    {
        if (is_null($jdb001)) {
            throw new \InvalidArgumentException('non-nullable jdb001 cannot be null');
        }
        $this->container['jdb001'] = $jdb001;

        return $this;
    }

    /**
     * Gets jdb002
     *
     * @return float|null
     */
    public function getJdb002()
    {
        return $this->container['jdb002'];
    }

    /**
     * Sets jdb002
     *
     * @param float|null $jdb002 Total amount of judgments filed within 24 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return self
     */
    public function setJdb002($jdb002)
    {
        if (is_null($jdb002)) {
            throw new \InvalidArgumentException('non-nullable jdb002 cannot be null');
        }
        $this->container['jdb002'] = $jdb002;

        return $this;
    }

    /**
     * Gets jdb003
     *
     * @return float|null
     */
    public function getJdb003()
    {
        return $this->container['jdb003'];
    }

    /**
     * Sets jdb003
     *
     * @param float|null $jdb003 Total amount of judgments filed within 6 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return self
     */
    public function setJdb003($jdb003)
    {
        if (is_null($jdb003)) {
            throw new \InvalidArgumentException('non-nullable jdb003 cannot be null');
        }
        $this->container['jdb003'] = $jdb003;

        return $this;
    }

    /**
     * Gets jdb004
     *
     * @return float|null
     */
    public function getJdb004()
    {
        return $this->container['jdb004'];
    }

    /**
     * Sets jdb004
     *
     * @param float|null $jdb004 Total liability amount for original judgments filed
     *
     * @return self
     */
    public function setJdb004($jdb004)
    {
        if (is_null($jdb004)) {
            throw new \InvalidArgumentException('non-nullable jdb004 cannot be null');
        }
        $this->container['jdb004'] = $jdb004;

        return $this;
    }

    /**
     * Gets jdb005
     *
     * @return float|null
     */
    public function getJdb005()
    {
        return $this->container['jdb005'];
    }

    /**
     * Sets jdb005
     *
     * @param float|null $jdb005 Total liability amount for judgments (including satisfied, released, etc) filed within the last 24 months of profile date
     *
     * @return self
     */
    public function setJdb005($jdb005)
    {
        if (is_null($jdb005)) {
            throw new \InvalidArgumentException('non-nullable jdb005 cannot be null');
        }
        $this->container['jdb005'] = $jdb005;

        return $this;
    }

    /**
     * Gets jdb006
     *
     * @return float|null
     */
    public function getJdb006()
    {
        return $this->container['jdb006'];
    }

    /**
     * Sets jdb006
     *
     * @param float|null $jdb006 Total liability amount for non-filed judgment actions
     *
     * @return self
     */
    public function setJdb006($jdb006)
    {
        if (is_null($jdb006)) {
            throw new \InvalidArgumentException('non-nullable jdb006 cannot be null');
        }
        $this->container['jdb006'] = $jdb006;

        return $this;
    }

    /**
     * Gets jdc007
     *
     * @return float|null
     */
    public function getJdc007()
    {
        return $this->container['jdc007'];
    }

    /**
     * Sets jdc007
     *
     * @param float|null $jdc007 Total number of judgment filed within 12 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return self
     */
    public function setJdc007($jdc007)
    {
        if (is_null($jdc007)) {
            throw new \InvalidArgumentException('non-nullable jdc007 cannot be null');
        }
        $this->container['jdc007'] = $jdc007;

        return $this;
    }

    /**
     * Gets jdc009
     *
     * @return float|null
     */
    public function getJdc009()
    {
        return $this->container['jdc009'];
    }

    /**
     * Sets jdc009
     *
     * @param float|null $jdc009 Total number of judgment filed within 6 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return self
     */
    public function setJdc009($jdc009)
    {
        if (is_null($jdc009)) {
            throw new \InvalidArgumentException('non-nullable jdc009 cannot be null');
        }
        $this->container['jdc009'] = $jdc009;

        return $this;
    }

    /**
     * Gets jdc010
     *
     * @return float|null
     */
    public function getJdc010()
    {
        return $this->container['jdc010'];
    }

    /**
     * Sets jdc010
     *
     * @param float|null $jdc010 Total number of original judgments filed
     *
     * @return self
     */
    public function setJdc010($jdc010)
    {
        if (is_null($jdc010)) {
            throw new \InvalidArgumentException('non-nullable jdc010 cannot be null');
        }
        $this->container['jdc010'] = $jdc010;

        return $this;
    }

    /**
     * Gets jdc011
     *
     * @return float|null
     */
    public function getJdc011()
    {
        return $this->container['jdc011'];
    }

    /**
     * Sets jdc011
     *
     * @param float|null $jdc011 Total number of judgments (including satisfied, released, etc) filed within 24 months of profile date
     *
     * @return self
     */
    public function setJdc011($jdc011)
    {
        if (is_null($jdc011)) {
            throw new \InvalidArgumentException('non-nullable jdc011 cannot be null');
        }
        $this->container['jdc011'] = $jdc011;

        return $this;
    }

    /**
     * Gets jdc012
     *
     * @return float|null
     */
    public function getJdc012()
    {
        return $this->container['jdc012'];
    }

    /**
     * Sets jdc012
     *
     * @param float|null $jdc012 Total number of non-filed judgment actions
     *
     * @return self
     */
    public function setJdc012($jdc012)
    {
        if (is_null($jdc012)) {
            throw new \InvalidArgumentException('non-nullable jdc012 cannot be null');
        }
        $this->container['jdc012'] = $jdc012;

        return $this;
    }

    /**
     * Gets jdo013
     *
     * @return float|null
     */
    public function getJdo013()
    {
        return $this->container['jdo013'];
    }

    /**
     * Sets jdo013
     *
     * @param float|null $jdo013 Age in months of most recent filed judgment
     *
     * @return self
     */
    public function setJdo013($jdo013)
    {
        if (is_null($jdo013)) {
            throw new \InvalidArgumentException('non-nullable jdo013 cannot be null');
        }
        $this->container['jdo013'] = $jdo013;

        return $this;
    }

    /**
     * Gets jdo014
     *
     * @return float|null
     */
    public function getJdo014()
    {
        return $this->container['jdo014'];
    }

    /**
     * Sets jdo014
     *
     * @param float|null $jdo014 Age in months of most recent non-filed judgment action
     *
     * @return self
     */
    public function setJdo014($jdo014)
    {
        if (is_null($jdo014)) {
            throw new \InvalidArgumentException('non-nullable jdo014 cannot be null');
        }
        $this->container['jdo014'] = $jdo014;

        return $this;
    }

    /**
     * Gets jdp015
     *
     * @return float|null
     */
    public function getJdp015()
    {
        return $this->container['jdp015'];
    }

    /**
     * Sets jdp015
     *
     * @param float|null $jdp015 Percentage of Total judgment amount filed with 12 months to Total balance
     *
     * @return self
     */
    public function setJdp015($jdp015)
    {
        if (is_null($jdp015)) {
            throw new \InvalidArgumentException('non-nullable jdp015 cannot be null');
        }
        $this->container['jdp015'] = $jdp015;

        return $this;
    }

    /**
     * Gets jdp016
     *
     * @return float|null
     */
    public function getJdp016()
    {
        return $this->container['jdp016'];
    }

    /**
     * Sets jdp016
     *
     * @param float|null $jdp016 Percentage of Total judgment amount filed with 24 months to Total balance
     *
     * @return self
     */
    public function setJdp016($jdp016)
    {
        if (is_null($jdp016)) {
            throw new \InvalidArgumentException('non-nullable jdp016 cannot be null');
        }
        $this->container['jdp016'] = $jdp016;

        return $this;
    }

    /**
     * Gets jdp017
     *
     * @return float|null
     */
    public function getJdp017()
    {
        return $this->container['jdp017'];
    }

    /**
     * Sets jdp017
     *
     * @param float|null $jdp017 Percentage of Total judgment amount filed with 6 months to Total balance
     *
     * @return self
     */
    public function setJdp017($jdp017)
    {
        if (is_null($jdp017)) {
            throw new \InvalidArgumentException('non-nullable jdp017 cannot be null');
        }
        $this->container['jdp017'] = $jdp017;

        return $this;
    }

    /**
     * Gets lgc002
     *
     * @return float|null
     */
    public function getLgc002()
    {
        return $this->container['lgc002'];
    }

    /**
     * Sets lgc002
     *
     * @param float|null $lgc002 Total number of legal filings (bankruptcies, tax liens, and judgments) in past 12 months
     *
     * @return self
     */
    public function setLgc002($lgc002)
    {
        if (is_null($lgc002)) {
            throw new \InvalidArgumentException('non-nullable lgc002 cannot be null');
        }
        $this->container['lgc002'] = $lgc002;

        return $this;
    }

    /**
     * Gets lgc003
     *
     * @return float|null
     */
    public function getLgc003()
    {
        return $this->container['lgc003'];
    }

    /**
     * Sets lgc003
     *
     * @param float|null $lgc003 Total number of legal filings (bankruptcies, tax liens, and judgments) in past 6 months
     *
     * @return self
     */
    public function setLgc003($lgc003)
    {
        if (is_null($lgc003)) {
            throw new \InvalidArgumentException('non-nullable lgc003 cannot be null');
        }
        $this->container['lgc003'] = $lgc003;

        return $this;
    }

    /**
     * Gets lgc004
     *
     * @return float|null
     */
    public function getLgc004()
    {
        return $this->container['lgc004'];
    }

    /**
     * Sets lgc004
     *
     * @param float|null $lgc004 Total number of legal filings Includes bankruptcies, tax liens, and judgments
     *
     * @return self
     */
    public function setLgc004($lgc004)
    {
        if (is_null($lgc004)) {
            throw new \InvalidArgumentException('non-nullable lgc004 cannot be null');
        }
        $this->container['lgc004'] = $lgc004;

        return $this;
    }

    /**
     * Gets lsb001
     *
     * @return float|null
     */
    public function getLsb001()
    {
        return $this->container['lsb001'];
    }

    /**
     * Sets lsb001
     *
     * @param float|null $lsb001 Total original amount for all leasing trades
     *
     * @return self
     */
    public function setLsb001($lsb001)
    {
        if (is_null($lsb001)) {
            throw new \InvalidArgumentException('non-nullable lsb001 cannot be null');
        }
        $this->container['lsb001'] = $lsb001;

        return $this;
    }

    /**
     * Gets lsb002
     *
     * @return float|null
     */
    public function getLsb002()
    {
        return $this->container['lsb002'];
    }

    /**
     * Sets lsb002
     *
     * @param float|null $lsb002 Total amount due on next scheduled payment (excluding late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return self
     */
    public function setLsb002($lsb002)
    {
        if (is_null($lsb002)) {
            throw new \InvalidArgumentException('non-nullable lsb002 cannot be null');
        }
        $this->container['lsb002'] = $lsb002;

        return $this;
    }

    /**
     * Gets lsb003
     *
     * @return float|null
     */
    public function getLsb003()
    {
        return $this->container['lsb003'];
    }

    /**
     * Sets lsb003
     *
     * @param float|null $lsb003 Total amount due on next scheduled payment (including late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return self
     */
    public function setLsb003($lsb003)
    {
        if (is_null($lsb003)) {
            throw new \InvalidArgumentException('non-nullable lsb003 cannot be null');
        }
        $this->container['lsb003'] = $lsb003;

        return $this;
    }

    /**
     * Gets lsb004
     *
     * @return float|null
     */
    public function getLsb004()
    {
        return $this->container['lsb004'];
    }

    /**
     * Sets lsb004
     *
     * @param float|null $lsb004 Total amount past due for leasing trades that have an amount outstanding which has exceeded the final due date by at least 1 day
     *
     * @return self
     */
    public function setLsb004($lsb004)
    {
        if (is_null($lsb004)) {
            throw new \InvalidArgumentException('non-nullable lsb004 cannot be null');
        }
        $this->container['lsb004'] = $lsb004;

        return $this;
    }

    /**
     * Gets lsb005
     *
     * @return float|null
     */
    public function getLsb005()
    {
        return $this->container['lsb005'];
    }

    /**
     * Sets lsb005
     *
     * @param float|null $lsb005 Total remaining balance due for leasing trades with a remaining balance due (including interest)
     *
     * @return self
     */
    public function setLsb005($lsb005)
    {
        if (is_null($lsb005)) {
            throw new \InvalidArgumentException('non-nullable lsb005 cannot be null');
        }
        $this->container['lsb005'] = $lsb005;

        return $this;
    }

    /**
     * Gets lsb006
     *
     * @return float|null
     */
    public function getLsb006()
    {
        return $this->container['lsb006'];
    }

    /**
     * Sets lsb006
     *
     * @param float|null $lsb006 Maximum original amount for a leasing trade
     *
     * @return self
     */
    public function setLsb006($lsb006)
    {
        if (is_null($lsb006)) {
            throw new \InvalidArgumentException('non-nullable lsb006 cannot be null');
        }
        $this->container['lsb006'] = $lsb006;

        return $this;
    }

    /**
     * Gets lsb007
     *
     * @return float|null
     */
    public function getLsb007()
    {
        return $this->container['lsb007'];
    }

    /**
     * Sets lsb007
     *
     * @param float|null $lsb007 Maximum amount due on next scheduled payment (excluding late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return self
     */
    public function setLsb007($lsb007)
    {
        if (is_null($lsb007)) {
            throw new \InvalidArgumentException('non-nullable lsb007 cannot be null');
        }
        $this->container['lsb007'] = $lsb007;

        return $this;
    }

    /**
     * Gets lsb008
     *
     * @return float|null
     */
    public function getLsb008()
    {
        return $this->container['lsb008'];
    }

    /**
     * Sets lsb008
     *
     * @param float|null $lsb008 Maximum amount due on next scheduled payment (including late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return self
     */
    public function setLsb008($lsb008)
    {
        if (is_null($lsb008)) {
            throw new \InvalidArgumentException('non-nullable lsb008 cannot be null');
        }
        $this->container['lsb008'] = $lsb008;

        return $this;
    }

    /**
     * Gets lsb009
     *
     * @return float|null
     */
    public function getLsb009()
    {
        return $this->container['lsb009'];
    }

    /**
     * Sets lsb009
     *
     * @param float|null $lsb009 Maximum remaining balance due for leasing trades with a remaining balance due (including interest)
     *
     * @return self
     */
    public function setLsb009($lsb009)
    {
        if (is_null($lsb009)) {
            throw new \InvalidArgumentException('non-nullable lsb009 cannot be null');
        }
        $this->container['lsb009'] = $lsb009;

        return $this;
    }

    /**
     * Gets lsc010
     *
     * @return float|null
     */
    public function getLsc010()
    {
        return $this->container['lsc010'];
    }

    /**
     * Sets lsc010
     *
     * @param float|null $lsc010 Total number of leasing trades
     *
     * @return self
     */
    public function setLsc010($lsc010)
    {
        if (is_null($lsc010)) {
            throw new \InvalidArgumentException('non-nullable lsc010 cannot be null');
        }
        $this->container['lsc010'] = $lsc010;

        return $this;
    }

    /**
     * Gets lsc011
     *
     * @return float|null
     */
    public function getLsc011()
    {
        return $this->container['lsc011'];
    }

    /**
     * Sets lsc011
     *
     * @param float|null $lsc011 Total number of leasing trades with variable terms
     *
     * @return self
     */
    public function setLsc011($lsc011)
    {
        if (is_null($lsc011)) {
            throw new \InvalidArgumentException('non-nullable lsc011 cannot be null');
        }
        $this->container['lsc011'] = $lsc011;

        return $this;
    }

    /**
     * Gets lsc012
     *
     * @return float|null
     */
    public function getLsc012()
    {
        return $this->container['lsc012'];
    }

    /**
     * Sets lsc012
     *
     * @param float|null $lsc012 Total number of leasing trades with quarterly, semi-annual, or annual payments
     *
     * @return self
     */
    public function setLsc012($lsc012)
    {
        if (is_null($lsc012)) {
            throw new \InvalidArgumentException('non-nullable lsc012 cannot be null');
        }
        $this->container['lsc012'] = $lsc012;

        return $this;
    }

    /**
     * Gets lsc013
     *
     * @return float|null
     */
    public function getLsc013()
    {
        return $this->container['lsc013'];
    }

    /**
     * Sets lsc013
     *
     * @param float|null $lsc013 Total number of leasing trades with satisfactory payment
     *
     * @return self
     */
    public function setLsc013($lsc013)
    {
        if (is_null($lsc013)) {
            throw new \InvalidArgumentException('non-nullable lsc013 cannot be null');
        }
        $this->container['lsc013'] = $lsc013;

        return $this;
    }

    /**
     * Gets lsc014
     *
     * @return float|null
     */
    public function getLsc014()
    {
        return $this->container['lsc014'];
    }

    /**
     * Sets lsc014
     *
     * @param float|null $lsc014 Total number of leasing trades with slow pay or derogatory comment codes
     *
     * @return self
     */
    public function setLsc014($lsc014)
    {
        if (is_null($lsc014)) {
            throw new \InvalidArgumentException('non-nullable lsc014 cannot be null');
        }
        $this->container['lsc014'] = $lsc014;

        return $this;
    }

    /**
     * Gets lsc015
     *
     * @return float|null
     */
    public function getLsc015()
    {
        return $this->container['lsc015'];
    }

    /**
     * Sets lsc015
     *
     * @param float|null $lsc015 Total number of vehicle leasing trades
     *
     * @return self
     */
    public function setLsc015($lsc015)
    {
        if (is_null($lsc015)) {
            throw new \InvalidArgumentException('non-nullable lsc015 cannot be null');
        }
        $this->container['lsc015'] = $lsc015;

        return $this;
    }

    /**
     * Gets lsc016
     *
     * @return float|null
     */
    public function getLsc016()
    {
        return $this->container['lsc016'];
    }

    /**
     * Sets lsc016
     *
     * @param float|null $lsc016 Total number of office equipment leasing trades
     *
     * @return self
     */
    public function setLsc016($lsc016)
    {
        if (is_null($lsc016)) {
            throw new \InvalidArgumentException('non-nullable lsc016 cannot be null');
        }
        $this->container['lsc016'] = $lsc016;

        return $this;
    }

    /**
     * Gets lsc017
     *
     * @return float|null
     */
    public function getLsc017()
    {
        return $this->container['lsc017'];
    }

    /**
     * Sets lsc017
     *
     * @param float|null $lsc017 Total number of capital, operating, or finance leasing trades
     *
     * @return self
     */
    public function setLsc017($lsc017)
    {
        if (is_null($lsc017)) {
            throw new \InvalidArgumentException('non-nullable lsc017 cannot be null');
        }
        $this->container['lsc017'] = $lsc017;

        return $this;
    }

    /**
     * Gets lsc018
     *
     * @return float|null
     */
    public function getLsc018()
    {
        return $this->container['lsc018'];
    }

    /**
     * Sets lsc018
     *
     * @param float|null $lsc018 Total number of leasing trades with a term between 1 and 12 months
     *
     * @return self
     */
    public function setLsc018($lsc018)
    {
        if (is_null($lsc018)) {
            throw new \InvalidArgumentException('non-nullable lsc018 cannot be null');
        }
        $this->container['lsc018'] = $lsc018;

        return $this;
    }

    /**
     * Gets lsc019
     *
     * @return float|null
     */
    public function getLsc019()
    {
        return $this->container['lsc019'];
    }

    /**
     * Sets lsc019
     *
     * @param float|null $lsc019 Total number of leasing trades with a term between 13 and 24 months
     *
     * @return self
     */
    public function setLsc019($lsc019)
    {
        if (is_null($lsc019)) {
            throw new \InvalidArgumentException('non-nullable lsc019 cannot be null');
        }
        $this->container['lsc019'] = $lsc019;

        return $this;
    }

    /**
     * Gets lsc020
     *
     * @return float|null
     */
    public function getLsc020()
    {
        return $this->container['lsc020'];
    }

    /**
     * Sets lsc020
     *
     * @param float|null $lsc020 Total number of leasing trades with a term between 15 and 60 months
     *
     * @return self
     */
    public function setLsc020($lsc020)
    {
        if (is_null($lsc020)) {
            throw new \InvalidArgumentException('non-nullable lsc020 cannot be null');
        }
        $this->container['lsc020'] = $lsc020;

        return $this;
    }

    /**
     * Gets lsc021
     *
     * @return float|null
     */
    public function getLsc021()
    {
        return $this->container['lsc021'];
    }

    /**
     * Sets lsc021
     *
     * @param float|null $lsc021 Total number of leasing trades with a term greater than 60 months
     *
     * @return self
     */
    public function setLsc021($lsc021)
    {
        if (is_null($lsc021)) {
            throw new \InvalidArgumentException('non-nullable lsc021 cannot be null');
        }
        $this->container['lsc021'] = $lsc021;

        return $this;
    }

    /**
     * Gets lsc022
     *
     * @return float|null
     */
    public function getLsc022()
    {
        return $this->container['lsc022'];
    }

    /**
     * Sets lsc022
     *
     * @param float|null $lsc022 Total number of leasing trades with a current scheduled amount due (excluding late payments & charges)
     *
     * @return self
     */
    public function setLsc022($lsc022)
    {
        if (is_null($lsc022)) {
            throw new \InvalidArgumentException('non-nullable lsc022 cannot be null');
        }
        $this->container['lsc022'] = $lsc022;

        return $this;
    }

    /**
     * Gets lsc023
     *
     * @return float|null
     */
    public function getLsc023()
    {
        return $this->container['lsc023'];
    }

    /**
     * Sets lsc023
     *
     * @param float|null $lsc023 Total number of leasing trades with a current scheduled amount due (including late payments & charges)
     *
     * @return self
     */
    public function setLsc023($lsc023)
    {
        if (is_null($lsc023)) {
            throw new \InvalidArgumentException('non-nullable lsc023 cannot be null');
        }
        $this->container['lsc023'] = $lsc023;

        return $this;
    }

    /**
     * Gets lsc024
     *
     * @return float|null
     */
    public function getLsc024()
    {
        return $this->container['lsc024'];
    }

    /**
     * Sets lsc024
     *
     * @param float|null $lsc024 Total number of leasing trades that have an amount outstanding which has exceeded the final due date by at least 1 day
     *
     * @return self
     */
    public function setLsc024($lsc024)
    {
        if (is_null($lsc024)) {
            throw new \InvalidArgumentException('non-nullable lsc024 cannot be null');
        }
        $this->container['lsc024'] = $lsc024;

        return $this;
    }

    /**
     * Gets lsc025
     *
     * @return float|null
     */
    public function getLsc025()
    {
        return $this->container['lsc025'];
    }

    /**
     * Sets lsc025
     *
     * @param float|null $lsc025 Total number of leasing trades with a remaining balance due (including interest)
     *
     * @return self
     */
    public function setLsc025($lsc025)
    {
        if (is_null($lsc025)) {
            throw new \InvalidArgumentException('non-nullable lsc025 cannot be null');
        }
        $this->container['lsc025'] = $lsc025;

        return $this;
    }

    /**
     * Gets lsc026
     *
     * @return float|null
     */
    public function getLsc026()
    {
        return $this->container['lsc026'];
    }

    /**
     * Sets lsc026
     *
     * @param float|null $lsc026 Total number of leasing trades with one or more payments that are current during the lease term to date
     *
     * @return self
     */
    public function setLsc026($lsc026)
    {
        if (is_null($lsc026)) {
            throw new \InvalidArgumentException('non-nullable lsc026 cannot be null');
        }
        $this->container['lsc026'] = $lsc026;

        return $this;
    }

    /**
     * Gets lsc027
     *
     * @return float|null
     */
    public function getLsc027()
    {
        return $this->container['lsc027'];
    }

    /**
     * Sets lsc027
     *
     * @param float|null $lsc027 Total number of leasing trades with one or more payments made 1-30 days late during the lease term to date
     *
     * @return self
     */
    public function setLsc027($lsc027)
    {
        if (is_null($lsc027)) {
            throw new \InvalidArgumentException('non-nullable lsc027 cannot be null');
        }
        $this->container['lsc027'] = $lsc027;

        return $this;
    }

    /**
     * Gets lsc028
     *
     * @return float|null
     */
    public function getLsc028()
    {
        return $this->container['lsc028'];
    }

    /**
     * Sets lsc028
     *
     * @param float|null $lsc028 Total number of leasing trades with one or more payments made 31-60 days late during the lease term to date
     *
     * @return self
     */
    public function setLsc028($lsc028)
    {
        if (is_null($lsc028)) {
            throw new \InvalidArgumentException('non-nullable lsc028 cannot be null');
        }
        $this->container['lsc028'] = $lsc028;

        return $this;
    }

    /**
     * Gets lsc029
     *
     * @return float|null
     */
    public function getLsc029()
    {
        return $this->container['lsc029'];
    }

    /**
     * Sets lsc029
     *
     * @param float|null $lsc029 Total number of leasing trades with one or more payments made 61-90 days late during the lease term to date
     *
     * @return self
     */
    public function setLsc029($lsc029)
    {
        if (is_null($lsc029)) {
            throw new \InvalidArgumentException('non-nullable lsc029 cannot be null');
        }
        $this->container['lsc029'] = $lsc029;

        return $this;
    }

    /**
     * Gets lsc030
     *
     * @return float|null
     */
    public function getLsc030()
    {
        return $this->container['lsc030'];
    }

    /**
     * Sets lsc030
     *
     * @param float|null $lsc030 Total number of leasing trades with one or more payments 91+ days late during the lease term to date
     *
     * @return self
     */
    public function setLsc030($lsc030)
    {
        if (is_null($lsc030)) {
            throw new \InvalidArgumentException('non-nullable lsc030 cannot be null');
        }
        $this->container['lsc030'] = $lsc030;

        return $this;
    }

    /**
     * Gets lsc031
     *
     * @return float|null
     */
    public function getLsc031()
    {
        return $this->container['lsc031'];
    }

    /**
     * Sets lsc031
     *
     * @param float|null $lsc031 Total number of late payments for leasing trades extracted within the last 6 months of the profile date
     *
     * @return self
     */
    public function setLsc031($lsc031)
    {
        if (is_null($lsc031)) {
            throw new \InvalidArgumentException('non-nullable lsc031 cannot be null');
        }
        $this->container['lsc031'] = $lsc031;

        return $this;
    }

    /**
     * Gets lsc032
     *
     * @return float|null
     */
    public function getLsc032()
    {
        return $this->container['lsc032'];
    }

    /**
     * Sets lsc032
     *
     * @param float|null $lsc032 Total number of current payments for leasing trades extracted within the last 6 months of the profile date
     *
     * @return self
     */
    public function setLsc032($lsc032)
    {
        if (is_null($lsc032)) {
            throw new \InvalidArgumentException('non-nullable lsc032 cannot be null');
        }
        $this->container['lsc032'] = $lsc032;

        return $this;
    }

    /**
     * Gets lsc033
     *
     * @return float|null
     */
    public function getLsc033()
    {
        return $this->container['lsc033'];
    }

    /**
     * Sets lsc033
     *
     * @param float|null $lsc033 Total number of outstanding payments, overdue by at least one day, for leasing trades extracted within the last 6 months of the profile date
     *
     * @return self
     */
    public function setLsc033($lsc033)
    {
        if (is_null($lsc033)) {
            throw new \InvalidArgumentException('non-nullable lsc033 cannot be null');
        }
        $this->container['lsc033'] = $lsc033;

        return $this;
    }

    /**
     * Gets lsp034
     *
     * @return float|null
     */
    public function getLsp034()
    {
        return $this->container['lsp034'];
    }

    /**
     * Sets lsp034
     *
     * @param float|null $lsp034 Percentage of Total Amount of Leasing trades to Total balance of trades
     *
     * @return self
     */
    public function setLsp034($lsp034)
    {
        if (is_null($lsp034)) {
            throw new \InvalidArgumentException('non-nullable lsp034 cannot be null');
        }
        $this->container['lsp034'] = $lsp034;

        return $this;
    }

    /**
     * Gets lsp035
     *
     * @return float|null
     */
    public function getLsp035()
    {
        return $this->container['lsp035'];
    }

    /**
     * Sets lsp035
     *
     * @param float|null $lsp035 Percentage of Total number of Leasing trades to Total number of trades
     *
     * @return self
     */
    public function setLsp035($lsp035)
    {
        if (is_null($lsp035)) {
            throw new \InvalidArgumentException('non-nullable lsp035 cannot be null');
        }
        $this->container['lsp035'] = $lsp035;

        return $this;
    }

    /**
     * Gets ntb001
     *
     * @return float|null
     */
    public function getNtb001()
    {
        return $this->container['ntb001'];
    }

    /**
     * Sets ntb001
     *
     * @param float|null $ntb001 Total balance of new trades
     *
     * @return self
     */
    public function setNtb001($ntb001)
    {
        if (is_null($ntb001)) {
            throw new \InvalidArgumentException('non-nullable ntb001 cannot be null');
        }
        $this->container['ntb001'] = $ntb001;

        return $this;
    }

    /**
     * Gets ntb002
     *
     * @return float|null
     */
    public function getNtb002()
    {
        return $this->container['ntb002'];
    }

    /**
     * Sets ntb002
     *
     * @param float|null $ntb002 Total balance of new trades that is 1-30 days delinquent
     *
     * @return self
     */
    public function setNtb002($ntb002)
    {
        if (is_null($ntb002)) {
            throw new \InvalidArgumentException('non-nullable ntb002 cannot be null');
        }
        $this->container['ntb002'] = $ntb002;

        return $this;
    }

    /**
     * Gets ntb003
     *
     * @return float|null
     */
    public function getNtb003()
    {
        return $this->container['ntb003'];
    }

    /**
     * Sets ntb003
     *
     * @param float|null $ntb003 Total balance of new trades that is 31-60 days delinquent
     *
     * @return self
     */
    public function setNtb003($ntb003)
    {
        if (is_null($ntb003)) {
            throw new \InvalidArgumentException('non-nullable ntb003 cannot be null');
        }
        $this->container['ntb003'] = $ntb003;

        return $this;
    }

    /**
     * Gets ntb004
     *
     * @return float|null
     */
    public function getNtb004()
    {
        return $this->container['ntb004'];
    }

    /**
     * Sets ntb004
     *
     * @param float|null $ntb004 Total balance of new trades that is 61-90 days delinquent
     *
     * @return self
     */
    public function setNtb004($ntb004)
    {
        if (is_null($ntb004)) {
            throw new \InvalidArgumentException('non-nullable ntb004 cannot be null');
        }
        $this->container['ntb004'] = $ntb004;

        return $this;
    }

    /**
     * Gets ntb005
     *
     * @return float|null
     */
    public function getNtb005()
    {
        return $this->container['ntb005'];
    }

    /**
     * Sets ntb005
     *
     * @param float|null $ntb005 Total balance of new trades that is 91+ days delinquent
     *
     * @return self
     */
    public function setNtb005($ntb005)
    {
        if (is_null($ntb005)) {
            throw new \InvalidArgumentException('non-nullable ntb005 cannot be null');
        }
        $this->container['ntb005'] = $ntb005;

        return $this;
    }

    /**
     * Gets ntb006
     *
     * @return float|null
     */
    public function getNtb006()
    {
        return $this->container['ntb006'];
    }

    /**
     * Sets ntb006
     *
     * @param float|null $ntb006 Total balance of new trades that is current
     *
     * @return self
     */
    public function setNtb006($ntb006)
    {
        if (is_null($ntb006)) {
            throw new \InvalidArgumentException('non-nullable ntb006 cannot be null');
        }
        $this->container['ntb006'] = $ntb006;

        return $this;
    }

    /**
     * Gets ntb007
     *
     * @return float|null
     */
    public function getNtb007()
    {
        return $this->container['ntb007'];
    }

    /**
     * Sets ntb007
     *
     * @param float|null $ntb007 Total balance of new trades where worst delinquency = current
     *
     * @return self
     */
    public function setNtb007($ntb007)
    {
        if (is_null($ntb007)) {
            throw new \InvalidArgumentException('non-nullable ntb007 cannot be null');
        }
        $this->container['ntb007'] = $ntb007;

        return $this;
    }

    /**
     * Gets ntb008
     *
     * @return float|null
     */
    public function getNtb008()
    {
        return $this->container['ntb008'];
    }

    /**
     * Sets ntb008
     *
     * @param float|null $ntb008 Total balance of new trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setNtb008($ntb008)
    {
        if (is_null($ntb008)) {
            throw new \InvalidArgumentException('non-nullable ntb008 cannot be null');
        }
        $this->container['ntb008'] = $ntb008;

        return $this;
    }

    /**
     * Gets ntb009
     *
     * @return float|null
     */
    public function getNtb009()
    {
        return $this->container['ntb009'];
    }

    /**
     * Sets ntb009
     *
     * @param float|null $ntb009 Total balance of new trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setNtb009($ntb009)
    {
        if (is_null($ntb009)) {
            throw new \InvalidArgumentException('non-nullable ntb009 cannot be null');
        }
        $this->container['ntb009'] = $ntb009;

        return $this;
    }

    /**
     * Gets ntb010
     *
     * @return float|null
     */
    public function getNtb010()
    {
        return $this->container['ntb010'];
    }

    /**
     * Sets ntb010
     *
     * @param float|null $ntb010 Total balance of new trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setNtb010($ntb010)
    {
        if (is_null($ntb010)) {
            throw new \InvalidArgumentException('non-nullable ntb010 cannot be null');
        }
        $this->container['ntb010'] = $ntb010;

        return $this;
    }

    /**
     * Gets ntb011
     *
     * @return float|null
     */
    public function getNtb011()
    {
        return $this->container['ntb011'];
    }

    /**
     * Sets ntb011
     *
     * @param float|null $ntb011 Total balance of new trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setNtb011($ntb011)
    {
        if (is_null($ntb011)) {
            throw new \InvalidArgumentException('non-nullable ntb011 cannot be null');
        }
        $this->container['ntb011'] = $ntb011;

        return $this;
    }

    /**
     * Gets ntb012
     *
     * @return float|null
     */
    public function getNtb012()
    {
        return $this->container['ntb012'];
    }

    /**
     * Sets ntb012
     *
     * @param float|null $ntb012 Total balance of new trades where worst status = current
     *
     * @return self
     */
    public function setNtb012($ntb012)
    {
        if (is_null($ntb012)) {
            throw new \InvalidArgumentException('non-nullable ntb012 cannot be null');
        }
        $this->container['ntb012'] = $ntb012;

        return $this;
    }

    /**
     * Gets ntb013
     *
     * @return float|null
     */
    public function getNtb013()
    {
        return $this->container['ntb013'];
    }

    /**
     * Sets ntb013
     *
     * @param float|null $ntb013 Total balance of new trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setNtb013($ntb013)
    {
        if (is_null($ntb013)) {
            throw new \InvalidArgumentException('non-nullable ntb013 cannot be null');
        }
        $this->container['ntb013'] = $ntb013;

        return $this;
    }

    /**
     * Gets ntb014
     *
     * @return float|null
     */
    public function getNtb014()
    {
        return $this->container['ntb014'];
    }

    /**
     * Sets ntb014
     *
     * @param float|null $ntb014 Total balance of new trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setNtb014($ntb014)
    {
        if (is_null($ntb014)) {
            throw new \InvalidArgumentException('non-nullable ntb014 cannot be null');
        }
        $this->container['ntb014'] = $ntb014;

        return $this;
    }

    /**
     * Gets ntb015
     *
     * @return float|null
     */
    public function getNtb015()
    {
        return $this->container['ntb015'];
    }

    /**
     * Sets ntb015
     *
     * @param float|null $ntb015 Total balance of new trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setNtb015($ntb015)
    {
        if (is_null($ntb015)) {
            throw new \InvalidArgumentException('non-nullable ntb015 cannot be null');
        }
        $this->container['ntb015'] = $ntb015;

        return $this;
    }

    /**
     * Gets ntb016
     *
     * @return float|null
     */
    public function getNtb016()
    {
        return $this->container['ntb016'];
    }

    /**
     * Sets ntb016
     *
     * @param float|null $ntb016 Total balance of new trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setNtb016($ntb016)
    {
        if (is_null($ntb016)) {
            throw new \InvalidArgumentException('non-nullable ntb016 cannot be null');
        }
        $this->container['ntb016'] = $ntb016;

        return $this;
    }

    /**
     * Gets ntb017
     *
     * @return float|null
     */
    public function getNtb017()
    {
        return $this->container['ntb017'];
    }

    /**
     * Sets ntb017
     *
     * @param float|null $ntb017 Total balance of new trades where worst status = 91+ days
     *
     * @return self
     */
    public function setNtb017($ntb017)
    {
        if (is_null($ntb017)) {
            throw new \InvalidArgumentException('non-nullable ntb017 cannot be null');
        }
        $this->container['ntb017'] = $ntb017;

        return $this;
    }

    /**
     * Gets ntb018
     *
     * @return float|null
     */
    public function getNtb018()
    {
        return $this->container['ntb018'];
    }

    /**
     * Sets ntb018
     *
     * @param float|null $ntb018 Total highest balance in past 12 months across all new trades (Note: for trades reported by new contributors, highest balance reported by contributor may go back 12 months)
     *
     * @return self
     */
    public function setNtb018($ntb018)
    {
        if (is_null($ntb018)) {
            throw new \InvalidArgumentException('non-nullable ntb018 cannot be null');
        }
        $this->container['ntb018'] = $ntb018;

        return $this;
    }

    /**
     * Gets ntc020
     *
     * @return float|null
     */
    public function getNtc020()
    {
        return $this->container['ntc020'];
    }

    /**
     * Sets ntc020
     *
     * @param float|null $ntc020 Total number of new trades
     *
     * @return self
     */
    public function setNtc020($ntc020)
    {
        if (is_null($ntc020)) {
            throw new \InvalidArgumentException('non-nullable ntc020 cannot be null');
        }
        $this->container['ntc020'] = $ntc020;

        return $this;
    }

    /**
     * Gets ntc021
     *
     * @return float|null
     */
    public function getNtc021()
    {
        return $this->container['ntc021'];
    }

    /**
     * Sets ntc021
     *
     * @param float|null $ntc021 Total number of new trades where worst delinquency = current
     *
     * @return self
     */
    public function setNtc021($ntc021)
    {
        if (is_null($ntc021)) {
            throw new \InvalidArgumentException('non-nullable ntc021 cannot be null');
        }
        $this->container['ntc021'] = $ntc021;

        return $this;
    }

    /**
     * Gets ntc022
     *
     * @return float|null
     */
    public function getNtc022()
    {
        return $this->container['ntc022'];
    }

    /**
     * Sets ntc022
     *
     * @param float|null $ntc022 Total number of new trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setNtc022($ntc022)
    {
        if (is_null($ntc022)) {
            throw new \InvalidArgumentException('non-nullable ntc022 cannot be null');
        }
        $this->container['ntc022'] = $ntc022;

        return $this;
    }

    /**
     * Gets ntc023
     *
     * @return float|null
     */
    public function getNtc023()
    {
        return $this->container['ntc023'];
    }

    /**
     * Sets ntc023
     *
     * @param float|null $ntc023 Total number of new trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setNtc023($ntc023)
    {
        if (is_null($ntc023)) {
            throw new \InvalidArgumentException('non-nullable ntc023 cannot be null');
        }
        $this->container['ntc023'] = $ntc023;

        return $this;
    }

    /**
     * Gets ntc024
     *
     * @return float|null
     */
    public function getNtc024()
    {
        return $this->container['ntc024'];
    }

    /**
     * Sets ntc024
     *
     * @param float|null $ntc024 Total number of new trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setNtc024($ntc024)
    {
        if (is_null($ntc024)) {
            throw new \InvalidArgumentException('non-nullable ntc024 cannot be null');
        }
        $this->container['ntc024'] = $ntc024;

        return $this;
    }

    /**
     * Gets ntc025
     *
     * @return float|null
     */
    public function getNtc025()
    {
        return $this->container['ntc025'];
    }

    /**
     * Sets ntc025
     *
     * @param float|null $ntc025 Total number of new trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setNtc025($ntc025)
    {
        if (is_null($ntc025)) {
            throw new \InvalidArgumentException('non-nullable ntc025 cannot be null');
        }
        $this->container['ntc025'] = $ntc025;

        return $this;
    }

    /**
     * Gets ntc026
     *
     * @return float|null
     */
    public function getNtc026()
    {
        return $this->container['ntc026'];
    }

    /**
     * Sets ntc026
     *
     * @param float|null $ntc026 Total number of new trades where worst status = current
     *
     * @return self
     */
    public function setNtc026($ntc026)
    {
        if (is_null($ntc026)) {
            throw new \InvalidArgumentException('non-nullable ntc026 cannot be null');
        }
        $this->container['ntc026'] = $ntc026;

        return $this;
    }

    /**
     * Gets ntc027
     *
     * @return float|null
     */
    public function getNtc027()
    {
        return $this->container['ntc027'];
    }

    /**
     * Sets ntc027
     *
     * @param float|null $ntc027 Total number of new trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setNtc027($ntc027)
    {
        if (is_null($ntc027)) {
            throw new \InvalidArgumentException('non-nullable ntc027 cannot be null');
        }
        $this->container['ntc027'] = $ntc027;

        return $this;
    }

    /**
     * Gets ntc028
     *
     * @return float|null
     */
    public function getNtc028()
    {
        return $this->container['ntc028'];
    }

    /**
     * Sets ntc028
     *
     * @param float|null $ntc028 Total number of new trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setNtc028($ntc028)
    {
        if (is_null($ntc028)) {
            throw new \InvalidArgumentException('non-nullable ntc028 cannot be null');
        }
        $this->container['ntc028'] = $ntc028;

        return $this;
    }

    /**
     * Gets ntc029
     *
     * @return float|null
     */
    public function getNtc029()
    {
        return $this->container['ntc029'];
    }

    /**
     * Sets ntc029
     *
     * @param float|null $ntc029 Total number of new trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setNtc029($ntc029)
    {
        if (is_null($ntc029)) {
            throw new \InvalidArgumentException('non-nullable ntc029 cannot be null');
        }
        $this->container['ntc029'] = $ntc029;

        return $this;
    }

    /**
     * Gets ntc030
     *
     * @return float|null
     */
    public function getNtc030()
    {
        return $this->container['ntc030'];
    }

    /**
     * Sets ntc030
     *
     * @param float|null $ntc030 Total number of new trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setNtc030($ntc030)
    {
        if (is_null($ntc030)) {
            throw new \InvalidArgumentException('non-nullable ntc030 cannot be null');
        }
        $this->container['ntc030'] = $ntc030;

        return $this;
    }

    /**
     * Gets ntc031
     *
     * @return float|null
     */
    public function getNtc031()
    {
        return $this->container['ntc031'];
    }

    /**
     * Sets ntc031
     *
     * @param float|null $ntc031 Total number of new trades where worst status = 91+ days
     *
     * @return self
     */
    public function setNtc031($ntc031)
    {
        if (is_null($ntc031)) {
            throw new \InvalidArgumentException('non-nullable ntc031 cannot be null');
        }
        $this->container['ntc031'] = $ntc031;

        return $this;
    }

    /**
     * Gets ntd034
     *
     * @return float|null
     */
    public function getNtd034()
    {
        return $this->container['ntd034'];
    }

    /**
     * Sets ntd034
     *
     * @param float|null $ntd034 DBT of new trades
     *
     * @return self
     */
    public function setNtd034($ntd034)
    {
        if (is_null($ntd034)) {
            throw new \InvalidArgumentException('non-nullable ntd034 cannot be null');
        }
        $this->container['ntd034'] = $ntd034;

        return $this;
    }

    /**
     * Gets ntd035
     *
     * @return float|null
     */
    public function getNtd035()
    {
        return $this->container['ntd035'];
    }

    /**
     * Sets ntd035
     *
     * @param float|null $ntd035 Maximum DBT of any new trade
     *
     * @return self
     */
    public function setNtd035($ntd035)
    {
        if (is_null($ntd035)) {
            throw new \InvalidArgumentException('non-nullable ntd035 cannot be null');
        }
        $this->container['ntd035'] = $ntd035;

        return $this;
    }

    /**
     * Gets ntp036
     *
     * @return float|null
     */
    public function getNtp036()
    {
        return $this->container['ntp036'];
    }

    /**
     * Sets ntp036
     *
     * @param float|null $ntp036 Percentage of the Total balance of new trades to the Total highest balance of new trades in the past 12 months  (Note: for trades reported by new contributors, highest balance reported by contributor may go back 12 months)
     *
     * @return self
     */
    public function setNtp036($ntp036)
    {
        if (is_null($ntp036)) {
            throw new \InvalidArgumentException('non-nullable ntp036 cannot be null');
        }
        $this->container['ntp036'] = $ntp036;

        return $this;
    }

    /**
     * Gets ntp037
     *
     * @return float|null
     */
    public function getNtp037()
    {
        return $this->container['ntp037'];
    }

    /**
     * Sets ntp037
     *
     * @param float|null $ntp037 Percentage of Total balance of new trades to Total trade balance
     *
     * @return self
     */
    public function setNtp037($ntp037)
    {
        if (is_null($ntp037)) {
            throw new \InvalidArgumentException('non-nullable ntp037 cannot be null');
        }
        $this->container['ntp037'] = $ntp037;

        return $this;
    }

    /**
     * Gets ntp038
     *
     * @return float|null
     */
    public function getNtp038()
    {
        return $this->container['ntp038'];
    }

    /**
     * Sets ntp038
     *
     * @param float|null $ntp038 Percentage of Total number of new trades to Total number of trades
     *
     * @return self
     */
    public function setNtp038($ntp038)
    {
        if (is_null($ntp038)) {
            throw new \InvalidArgumentException('non-nullable ntp038 cannot be null');
        }
        $this->container['ntp038'] = $ntp038;

        return $this;
    }

    /**
     * Gets ntp039
     *
     * @return float|null
     */
    public function getNtp039()
    {
        return $this->container['ntp039'];
    }

    /**
     * Sets ntp039
     *
     * @param float|null $ntp039 Ratio of Total acct bal to Total highest acct bal prior 12 mos, new trades rptd within 6 mos of profile date
     *
     * @return self
     */
    public function setNtp039($ntp039)
    {
        if (is_null($ntp039)) {
            throw new \InvalidArgumentException('non-nullable ntp039 cannot be null');
        }
        $this->container['ntp039'] = $ntp039;

        return $this;
    }

    /**
     * Gets otb002
     *
     * @return float|null
     */
    public function getOtb002()
    {
        return $this->container['otb002'];
    }

    /**
     * Sets otb002
     *
     * @param float|null $otb002 Total balance of other trades classified as Leasing
     *
     * @return self
     */
    public function setOtb002($otb002)
    {
        if (is_null($otb002)) {
            throw new \InvalidArgumentException('non-nullable otb002 cannot be null');
        }
        $this->container['otb002'] = $otb002;

        return $this;
    }

    /**
     * Gets otb003
     *
     * @return float|null
     */
    public function getOtb003()
    {
        return $this->container['otb003'];
    }

    /**
     * Sets otb003
     *
     * @param float|null $otb003 Total balance of other trades classified as Supplemental
     *
     * @return self
     */
    public function setOtb003($otb003)
    {
        if (is_null($otb003)) {
            throw new \InvalidArgumentException('non-nullable otb003 cannot be null');
        }
        $this->container['otb003'] = $otb003;

        return $this;
    }

    /**
     * Gets otb004
     *
     * @return float|null
     */
    public function getOtb004()
    {
        return $this->container['otb004'];
    }

    /**
     * Sets otb004
     *
     * @param float|null $otb004 Total balance of other trades classified as Telecom
     *
     * @return self
     */
    public function setOtb004($otb004)
    {
        if (is_null($otb004)) {
            throw new \InvalidArgumentException('non-nullable otb004 cannot be null');
        }
        $this->container['otb004'] = $otb004;

        return $this;
    }

    /**
     * Gets otb005
     *
     * @return float|null
     */
    public function getOtb005()
    {
        return $this->container['otb005'];
    }

    /**
     * Sets otb005
     *
     * @param float|null $otb005 Total balance for additional trades (leasing, supplemental, telecomm and unknown, etc) reported within the last 4 months of the profile date
     *
     * @return self
     */
    public function setOtb005($otb005)
    {
        if (is_null($otb005)) {
            throw new \InvalidArgumentException('non-nullable otb005 cannot be null');
        }
        $this->container['otb005'] = $otb005;

        return $this;
    }

    /**
     * Gets otc007
     *
     * @return float|null
     */
    public function getOtc007()
    {
        return $this->container['otc007'];
    }

    /**
     * Sets otc007
     *
     * @param float|null $otc007 Total number of other trades classified as Leasing
     *
     * @return self
     */
    public function setOtc007($otc007)
    {
        if (is_null($otc007)) {
            throw new \InvalidArgumentException('non-nullable otc007 cannot be null');
        }
        $this->container['otc007'] = $otc007;

        return $this;
    }

    /**
     * Gets otc008
     *
     * @return float|null
     */
    public function getOtc008()
    {
        return $this->container['otc008'];
    }

    /**
     * Sets otc008
     *
     * @param float|null $otc008 Total number of other trades classified as Supplemental
     *
     * @return self
     */
    public function setOtc008($otc008)
    {
        if (is_null($otc008)) {
            throw new \InvalidArgumentException('non-nullable otc008 cannot be null');
        }
        $this->container['otc008'] = $otc008;

        return $this;
    }

    /**
     * Gets otc009
     *
     * @return float|null
     */
    public function getOtc009()
    {
        return $this->container['otc009'];
    }

    /**
     * Sets otc009
     *
     * @param float|null $otc009 Total number of other trades classified as Telecom
     *
     * @return self
     */
    public function setOtc009($otc009)
    {
        if (is_null($otc009)) {
            throw new \InvalidArgumentException('non-nullable otc009 cannot be null');
        }
        $this->container['otc009'] = $otc009;

        return $this;
    }

    /**
     * Gets otc010
     *
     * @return float|null
     */
    public function getOtc010()
    {
        return $this->container['otc010'];
    }

    /**
     * Sets otc010
     *
     * @param float|null $otc010 Total number of other trades (leasing, supplemental, telecomm and unknown)
     *
     * @return self
     */
    public function setOtc010($otc010)
    {
        if (is_null($otc010)) {
            throw new \InvalidArgumentException('non-nullable otc010 cannot be null');
        }
        $this->container['otc010'] = $otc010;

        return $this;
    }

    /**
     * Gets otc011
     *
     * @return float|null
     */
    public function getOtc011()
    {
        return $this->container['otc011'];
    }

    /**
     * Sets otc011
     *
     * @param float|null $otc011 Total number of additional trades (leasing, supplemental, telecomm and unknown, etc) reported within 4 months of the profile date
     *
     * @return self
     */
    public function setOtc011($otc011)
    {
        if (is_null($otc011)) {
            throw new \InvalidArgumentException('non-nullable otc011 cannot be null');
        }
        $this->container['otc011'] = $otc011;

        return $this;
    }

    /**
     * Gets otd012
     *
     * @return float|null
     */
    public function getOtd012()
    {
        return $this->container['otd012'];
    }

    /**
     * Sets otd012
     *
     * @param float|null $otd012 Weighted average DBT of additional trades (leasing, supplemental, telecomm and unknown, etc) reported within the last 4 months of the profile date
     *
     * @return self
     */
    public function setOtd012($otd012)
    {
        if (is_null($otd012)) {
            throw new \InvalidArgumentException('non-nullable otd012 cannot be null');
        }
        $this->container['otd012'] = $otd012;

        return $this;
    }

    /**
     * Gets otd013
     *
     * @return float|null
     */
    public function getOtd013()
    {
        return $this->container['otd013'];
    }

    /**
     * Sets otd013
     *
     * @param float|null $otd013 Maximum DBT of additional trades (leasing, supplemental, telecomm and unknown, etc) reported within the last 4 months of the profile date
     *
     * @return self
     */
    public function setOtd013($otd013)
    {
        if (is_null($otd013)) {
            throw new \InvalidArgumentException('non-nullable otd013 cannot be null');
        }
        $this->container['otd013'] = $otd013;

        return $this;
    }

    /**
     * Gets otp014
     *
     * @return float|null
     */
    public function getOtp014()
    {
        return $this->container['otp014'];
    }

    /**
     * Sets otp014
     *
     * @param float|null $otp014 Percentage of Total balance of other trades classified as Finance to Total balance of Total Trades
     *
     * @return self
     */
    public function setOtp014($otp014)
    {
        if (is_null($otp014)) {
            throw new \InvalidArgumentException('non-nullable otp014 cannot be null');
        }
        $this->container['otp014'] = $otp014;

        return $this;
    }

    /**
     * Gets otp015
     *
     * @return float|null
     */
    public function getOtp015()
    {
        return $this->container['otp015'];
    }

    /**
     * Sets otp015
     *
     * @param float|null $otp015 Percentage of Total number of other trades classified as Finance to Total number of trades
     *
     * @return self
     */
    public function setOtp015($otp015)
    {
        if (is_null($otp015)) {
            throw new \InvalidArgumentException('non-nullable otp015 cannot be null');
        }
        $this->container['otp015'] = $otp015;

        return $this;
    }

    /**
     * Gets otp016
     *
     * @return float|null
     */
    public function getOtp016()
    {
        return $this->container['otp016'];
    }

    /**
     * Sets otp016
     *
     * @param float|null $otp016 Percentage of Total balance of other trades classified as Leasing to Total balance of Total Trades
     *
     * @return self
     */
    public function setOtp016($otp016)
    {
        if (is_null($otp016)) {
            throw new \InvalidArgumentException('non-nullable otp016 cannot be null');
        }
        $this->container['otp016'] = $otp016;

        return $this;
    }

    /**
     * Gets otp017
     *
     * @return float|null
     */
    public function getOtp017()
    {
        return $this->container['otp017'];
    }

    /**
     * Sets otp017
     *
     * @param float|null $otp017 Percentage of Total number of other trades classified as Leasing to Total number of trades
     *
     * @return self
     */
    public function setOtp017($otp017)
    {
        if (is_null($otp017)) {
            throw new \InvalidArgumentException('non-nullable otp017 cannot be null');
        }
        $this->container['otp017'] = $otp017;

        return $this;
    }

    /**
     * Gets otp018
     *
     * @return float|null
     */
    public function getOtp018()
    {
        return $this->container['otp018'];
    }

    /**
     * Sets otp018
     *
     * @param float|null $otp018 Percentage of Total balance of other trades classified as Supplemental to Total balance of Total Trades
     *
     * @return self
     */
    public function setOtp018($otp018)
    {
        if (is_null($otp018)) {
            throw new \InvalidArgumentException('non-nullable otp018 cannot be null');
        }
        $this->container['otp018'] = $otp018;

        return $this;
    }

    /**
     * Gets otp019
     *
     * @return float|null
     */
    public function getOtp019()
    {
        return $this->container['otp019'];
    }

    /**
     * Sets otp019
     *
     * @param float|null $otp019 Percentage of Total number of other trades classified as Supplemental to Total number of trades
     *
     * @return self
     */
    public function setOtp019($otp019)
    {
        if (is_null($otp019)) {
            throw new \InvalidArgumentException('non-nullable otp019 cannot be null');
        }
        $this->container['otp019'] = $otp019;

        return $this;
    }

    /**
     * Gets otp020
     *
     * @return float|null
     */
    public function getOtp020()
    {
        return $this->container['otp020'];
    }

    /**
     * Sets otp020
     *
     * @param float|null $otp020 Percentage of Total balance of other trades classified as Telecom to Total balance of Total Trades
     *
     * @return self
     */
    public function setOtp020($otp020)
    {
        if (is_null($otp020)) {
            throw new \InvalidArgumentException('non-nullable otp020 cannot be null');
        }
        $this->container['otp020'] = $otp020;

        return $this;
    }

    /**
     * Gets otp021
     *
     * @return float|null
     */
    public function getOtp021()
    {
        return $this->container['otp021'];
    }

    /**
     * Sets otp021
     *
     * @param float|null $otp021 Percentage of Total number of other trades classified as Telecom to Total number of trades
     *
     * @return self
     */
    public function setOtp021($otp021)
    {
        if (is_null($otp021)) {
            throw new \InvalidArgumentException('non-nullable otp021 cannot be null');
        }
        $this->container['otp021'] = $otp021;

        return $this;
    }

    /**
     * Gets pro001
     *
     * @return float|null
     */
    public function getPro001()
    {
        return $this->container['pro001'];
    }

    /**
     * Sets pro001
     *
     * @param float|null $pro001 Age in months of most recent public record filed within the last 24 months of profile date
     *
     * @return self
     */
    public function setPro001($pro001)
    {
        if (is_null($pro001)) {
            throw new \InvalidArgumentException('non-nullable pro001 cannot be null');
        }
        $this->container['pro001'] = $pro001;

        return $this;
    }

    /**
     * Gets pro002
     *
     * @return float|null
     */
    public function getPro002()
    {
        return $this->container['pro002'];
    }

    /**
     * Sets pro002
     *
     * @param float|null $pro002 Age in months of oldest public record filed with the last 24 months of profile date
     *
     * @return self
     */
    public function setPro002($pro002)
    {
        if (is_null($pro002)) {
            throw new \InvalidArgumentException('non-nullable pro002 cannot be null');
        }
        $this->container['pro002'] = $pro002;

        return $this;
    }

    /**
     * Gets pro003
     *
     * @return float|null
     */
    public function getPro003()
    {
        return $this->container['pro003'];
    }

    /**
     * Sets pro003
     *
     * @param float|null $pro003 Average age in months of public records filed within the last 24 months of profile date
     *
     * @return self
     */
    public function setPro003($pro003)
    {
        if (is_null($pro003)) {
            throw new \InvalidArgumentException('non-nullable pro003 cannot be null');
        }
        $this->container['pro003'] = $pro003;

        return $this;
    }

    /**
     * Gets rtb001
     *
     * @return float|null
     */
    public function getRtb001()
    {
        return $this->container['rtb001'];
    }

    /**
     * Sets rtb001
     *
     * @param float|null $rtb001 Total balance of continuous trades
     *
     * @return self
     */
    public function setRtb001($rtb001)
    {
        if (is_null($rtb001)) {
            throw new \InvalidArgumentException('non-nullable rtb001 cannot be null');
        }
        $this->container['rtb001'] = $rtb001;

        return $this;
    }

    /**
     * Gets rtb002
     *
     * @return float|null
     */
    public function getRtb002()
    {
        return $this->container['rtb002'];
    }

    /**
     * Sets rtb002
     *
     * @param float|null $rtb002 Total balance of continuous trades that is 1-30 days delinquent
     *
     * @return self
     */
    public function setRtb002($rtb002)
    {
        if (is_null($rtb002)) {
            throw new \InvalidArgumentException('non-nullable rtb002 cannot be null');
        }
        $this->container['rtb002'] = $rtb002;

        return $this;
    }

    /**
     * Gets rtb003
     *
     * @return float|null
     */
    public function getRtb003()
    {
        return $this->container['rtb003'];
    }

    /**
     * Sets rtb003
     *
     * @param float|null $rtb003 Total balance of continuous trades that is 31-60 days delinquent
     *
     * @return self
     */
    public function setRtb003($rtb003)
    {
        if (is_null($rtb003)) {
            throw new \InvalidArgumentException('non-nullable rtb003 cannot be null');
        }
        $this->container['rtb003'] = $rtb003;

        return $this;
    }

    /**
     * Gets rtb004
     *
     * @return float|null
     */
    public function getRtb004()
    {
        return $this->container['rtb004'];
    }

    /**
     * Sets rtb004
     *
     * @param float|null $rtb004 Total balance of continuous trades that is 61-90 days delinquent
     *
     * @return self
     */
    public function setRtb004($rtb004)
    {
        if (is_null($rtb004)) {
            throw new \InvalidArgumentException('non-nullable rtb004 cannot be null');
        }
        $this->container['rtb004'] = $rtb004;

        return $this;
    }

    /**
     * Gets rtb005
     *
     * @return float|null
     */
    public function getRtb005()
    {
        return $this->container['rtb005'];
    }

    /**
     * Sets rtb005
     *
     * @param float|null $rtb005 Total balance of continuous trades that is 91+ days delinquent
     *
     * @return self
     */
    public function setRtb005($rtb005)
    {
        if (is_null($rtb005)) {
            throw new \InvalidArgumentException('non-nullable rtb005 cannot be null');
        }
        $this->container['rtb005'] = $rtb005;

        return $this;
    }

    /**
     * Gets rtb006
     *
     * @return float|null
     */
    public function getRtb006()
    {
        return $this->container['rtb006'];
    }

    /**
     * Sets rtb006
     *
     * @param float|null $rtb006 Total balance of continuous trades that is current
     *
     * @return self
     */
    public function setRtb006($rtb006)
    {
        if (is_null($rtb006)) {
            throw new \InvalidArgumentException('non-nullable rtb006 cannot be null');
        }
        $this->container['rtb006'] = $rtb006;

        return $this;
    }

    /**
     * Gets rtb007
     *
     * @return float|null
     */
    public function getRtb007()
    {
        return $this->container['rtb007'];
    }

    /**
     * Sets rtb007
     *
     * @param float|null $rtb007 Total balance of continuous trades where worst delinquency = current
     *
     * @return self
     */
    public function setRtb007($rtb007)
    {
        if (is_null($rtb007)) {
            throw new \InvalidArgumentException('non-nullable rtb007 cannot be null');
        }
        $this->container['rtb007'] = $rtb007;

        return $this;
    }

    /**
     * Gets rtb008
     *
     * @return float|null
     */
    public function getRtb008()
    {
        return $this->container['rtb008'];
    }

    /**
     * Sets rtb008
     *
     * @param float|null $rtb008 Total balance of continuous trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setRtb008($rtb008)
    {
        if (is_null($rtb008)) {
            throw new \InvalidArgumentException('non-nullable rtb008 cannot be null');
        }
        $this->container['rtb008'] = $rtb008;

        return $this;
    }

    /**
     * Gets rtb009
     *
     * @return float|null
     */
    public function getRtb009()
    {
        return $this->container['rtb009'];
    }

    /**
     * Sets rtb009
     *
     * @param float|null $rtb009 Total balance of continuous trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setRtb009($rtb009)
    {
        if (is_null($rtb009)) {
            throw new \InvalidArgumentException('non-nullable rtb009 cannot be null');
        }
        $this->container['rtb009'] = $rtb009;

        return $this;
    }

    /**
     * Gets rtb010
     *
     * @return float|null
     */
    public function getRtb010()
    {
        return $this->container['rtb010'];
    }

    /**
     * Sets rtb010
     *
     * @param float|null $rtb010 Total balance of continuous trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setRtb010($rtb010)
    {
        if (is_null($rtb010)) {
            throw new \InvalidArgumentException('non-nullable rtb010 cannot be null');
        }
        $this->container['rtb010'] = $rtb010;

        return $this;
    }

    /**
     * Gets rtb011
     *
     * @return float|null
     */
    public function getRtb011()
    {
        return $this->container['rtb011'];
    }

    /**
     * Sets rtb011
     *
     * @param float|null $rtb011 Total balance of continuous trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setRtb011($rtb011)
    {
        if (is_null($rtb011)) {
            throw new \InvalidArgumentException('non-nullable rtb011 cannot be null');
        }
        $this->container['rtb011'] = $rtb011;

        return $this;
    }

    /**
     * Gets rtb012
     *
     * @return float|null
     */
    public function getRtb012()
    {
        return $this->container['rtb012'];
    }

    /**
     * Sets rtb012
     *
     * @param float|null $rtb012 Total balance of continuous trades where worst status = current
     *
     * @return self
     */
    public function setRtb012($rtb012)
    {
        if (is_null($rtb012)) {
            throw new \InvalidArgumentException('non-nullable rtb012 cannot be null');
        }
        $this->container['rtb012'] = $rtb012;

        return $this;
    }

    /**
     * Gets rtb013
     *
     * @return float|null
     */
    public function getRtb013()
    {
        return $this->container['rtb013'];
    }

    /**
     * Sets rtb013
     *
     * @param float|null $rtb013 Total balance of continuous trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setRtb013($rtb013)
    {
        if (is_null($rtb013)) {
            throw new \InvalidArgumentException('non-nullable rtb013 cannot be null');
        }
        $this->container['rtb013'] = $rtb013;

        return $this;
    }

    /**
     * Gets rtb014
     *
     * @return float|null
     */
    public function getRtb014()
    {
        return $this->container['rtb014'];
    }

    /**
     * Sets rtb014
     *
     * @param float|null $rtb014 Total balance of continuous trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setRtb014($rtb014)
    {
        if (is_null($rtb014)) {
            throw new \InvalidArgumentException('non-nullable rtb014 cannot be null');
        }
        $this->container['rtb014'] = $rtb014;

        return $this;
    }

    /**
     * Gets rtb015
     *
     * @return float|null
     */
    public function getRtb015()
    {
        return $this->container['rtb015'];
    }

    /**
     * Sets rtb015
     *
     * @param float|null $rtb015 Total balance of continuous trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setRtb015($rtb015)
    {
        if (is_null($rtb015)) {
            throw new \InvalidArgumentException('non-nullable rtb015 cannot be null');
        }
        $this->container['rtb015'] = $rtb015;

        return $this;
    }

    /**
     * Gets rtb016
     *
     * @return float|null
     */
    public function getRtb016()
    {
        return $this->container['rtb016'];
    }

    /**
     * Sets rtb016
     *
     * @param float|null $rtb016 Total balance of continuous trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setRtb016($rtb016)
    {
        if (is_null($rtb016)) {
            throw new \InvalidArgumentException('non-nullable rtb016 cannot be null');
        }
        $this->container['rtb016'] = $rtb016;

        return $this;
    }

    /**
     * Gets rtb017
     *
     * @return float|null
     */
    public function getRtb017()
    {
        return $this->container['rtb017'];
    }

    /**
     * Sets rtb017
     *
     * @param float|null $rtb017 Total balance of continuous trades where worst status = 91+ days
     *
     * @return self
     */
    public function setRtb017($rtb017)
    {
        if (is_null($rtb017)) {
            throw new \InvalidArgumentException('non-nullable rtb017 cannot be null');
        }
        $this->container['rtb017'] = $rtb017;

        return $this;
    }

    /**
     * Gets rtb018
     *
     * @return float|null
     */
    public function getRtb018()
    {
        return $this->container['rtb018'];
    }

    /**
     * Sets rtb018
     *
     * @param float|null $rtb018 Total highest balance in past 12 months across all continuous trades
     *
     * @return self
     */
    public function setRtb018($rtb018)
    {
        if (is_null($rtb018)) {
            throw new \InvalidArgumentException('non-nullable rtb018 cannot be null');
        }
        $this->container['rtb018'] = $rtb018;

        return $this;
    }

    /**
     * Gets rtb020
     *
     * @return float|null
     */
    public function getRtb020()
    {
        return $this->container['rtb020'];
    }

    /**
     * Sets rtb020
     *
     * @param float|null $rtb020 Total balance for continuous trades, current month
     *
     * @return self
     */
    public function setRtb020($rtb020)
    {
        if (is_null($rtb020)) {
            throw new \InvalidArgumentException('non-nullable rtb020 cannot be null');
        }
        $this->container['rtb020'] = $rtb020;

        return $this;
    }

    /**
     * Gets rtb021
     *
     * @return float|null
     */
    public function getRtb021()
    {
        return $this->container['rtb021'];
    }

    /**
     * Sets rtb021
     *
     * @param float|null $rtb021 Total balance for trades that were continuous 1 month prior to profile date
     *
     * @return self
     */
    public function setRtb021($rtb021)
    {
        if (is_null($rtb021)) {
            throw new \InvalidArgumentException('non-nullable rtb021 cannot be null');
        }
        $this->container['rtb021'] = $rtb021;

        return $this;
    }

    /**
     * Gets rtb022
     *
     * @return float|null
     */
    public function getRtb022()
    {
        return $this->container['rtb022'];
    }

    /**
     * Sets rtb022
     *
     * @param float|null $rtb022 Total balance for trades that were continuous 2 months prior to profile date
     *
     * @return self
     */
    public function setRtb022($rtb022)
    {
        if (is_null($rtb022)) {
            throw new \InvalidArgumentException('non-nullable rtb022 cannot be null');
        }
        $this->container['rtb022'] = $rtb022;

        return $this;
    }

    /**
     * Gets rtb023
     *
     * @return float|null
     */
    public function getRtb023()
    {
        return $this->container['rtb023'];
    }

    /**
     * Sets rtb023
     *
     * @param float|null $rtb023 Total balance for trades that were continuous 3 months prior to profile date
     *
     * @return self
     */
    public function setRtb023($rtb023)
    {
        if (is_null($rtb023)) {
            throw new \InvalidArgumentException('non-nullable rtb023 cannot be null');
        }
        $this->container['rtb023'] = $rtb023;

        return $this;
    }

    /**
     * Gets rtb024
     *
     * @return float|null
     */
    public function getRtb024()
    {
        return $this->container['rtb024'];
    }

    /**
     * Sets rtb024
     *
     * @param float|null $rtb024 Total balance for trades that were continuous 4 months prior to profile date
     *
     * @return self
     */
    public function setRtb024($rtb024)
    {
        if (is_null($rtb024)) {
            throw new \InvalidArgumentException('non-nullable rtb024 cannot be null');
        }
        $this->container['rtb024'] = $rtb024;

        return $this;
    }

    /**
     * Gets rtb025
     *
     * @return float|null
     */
    public function getRtb025()
    {
        return $this->container['rtb025'];
    }

    /**
     * Sets rtb025
     *
     * @param float|null $rtb025 Total balance for trades that were continuous 5 months prior to profile date
     *
     * @return self
     */
    public function setRtb025($rtb025)
    {
        if (is_null($rtb025)) {
            throw new \InvalidArgumentException('non-nullable rtb025 cannot be null');
        }
        $this->container['rtb025'] = $rtb025;

        return $this;
    }

    /**
     * Gets rtb026
     *
     * @return float|null
     */
    public function getRtb026()
    {
        return $this->container['rtb026'];
    }

    /**
     * Sets rtb026
     *
     * @param float|null $rtb026 Average balance that is current over the past 6 months for continuous trades
     *
     * @return self
     */
    public function setRtb026($rtb026)
    {
        if (is_null($rtb026)) {
            throw new \InvalidArgumentException('non-nullable rtb026 cannot be null');
        }
        $this->container['rtb026'] = $rtb026;

        return $this;
    }

    /**
     * Gets rtb027
     *
     * @return float|null
     */
    public function getRtb027()
    {
        return $this->container['rtb027'];
    }

    /**
     * Sets rtb027
     *
     * @param float|null $rtb027 Average balance that is 1-30 days delinquent over the past 6 months for continuous trades
     *
     * @return self
     */
    public function setRtb027($rtb027)
    {
        if (is_null($rtb027)) {
            throw new \InvalidArgumentException('non-nullable rtb027 cannot be null');
        }
        $this->container['rtb027'] = $rtb027;

        return $this;
    }

    /**
     * Gets rtb028
     *
     * @return float|null
     */
    public function getRtb028()
    {
        return $this->container['rtb028'];
    }

    /**
     * Sets rtb028
     *
     * @param float|null $rtb028 Average balance that is 31-60 days delinquent over the past 6 months for continuous trades
     *
     * @return self
     */
    public function setRtb028($rtb028)
    {
        if (is_null($rtb028)) {
            throw new \InvalidArgumentException('non-nullable rtb028 cannot be null');
        }
        $this->container['rtb028'] = $rtb028;

        return $this;
    }

    /**
     * Gets rtb029
     *
     * @return float|null
     */
    public function getRtb029()
    {
        return $this->container['rtb029'];
    }

    /**
     * Sets rtb029
     *
     * @param float|null $rtb029 Average balance that is 61-90 days delinquent over the past 6 months for continuous trades
     *
     * @return self
     */
    public function setRtb029($rtb029)
    {
        if (is_null($rtb029)) {
            throw new \InvalidArgumentException('non-nullable rtb029 cannot be null');
        }
        $this->container['rtb029'] = $rtb029;

        return $this;
    }

    /**
     * Gets rtb030
     *
     * @return float|null
     */
    public function getRtb030()
    {
        return $this->container['rtb030'];
    }

    /**
     * Sets rtb030
     *
     * @param float|null $rtb030 Average balance that is 91+ days delinquent over the past 6 months for continuous trades
     *
     * @return self
     */
    public function setRtb030($rtb030)
    {
        if (is_null($rtb030)) {
            throw new \InvalidArgumentException('non-nullable rtb030 cannot be null');
        }
        $this->container['rtb030'] = $rtb030;

        return $this;
    }

    /**
     * Gets rtb031
     *
     * @return float|null
     */
    public function getRtb031()
    {
        return $this->container['rtb031'];
    }

    /**
     * Sets rtb031
     *
     * @param float|null $rtb031 Total balance for continuous trades for current quarter
     *
     * @return self
     */
    public function setRtb031($rtb031)
    {
        if (is_null($rtb031)) {
            throw new \InvalidArgumentException('non-nullable rtb031 cannot be null');
        }
        $this->container['rtb031'] = $rtb031;

        return $this;
    }

    /**
     * Gets rtb032
     *
     * @return float|null
     */
    public function getRtb032()
    {
        return $this->container['rtb032'];
    }

    /**
     * Sets rtb032
     *
     * @param float|null $rtb032 Total balance for trades that were continuous 1 quarter prior to profile date
     *
     * @return self
     */
    public function setRtb032($rtb032)
    {
        if (is_null($rtb032)) {
            throw new \InvalidArgumentException('non-nullable rtb032 cannot be null');
        }
        $this->container['rtb032'] = $rtb032;

        return $this;
    }

    /**
     * Gets rtb033
     *
     * @return float|null
     */
    public function getRtb033()
    {
        return $this->container['rtb033'];
    }

    /**
     * Sets rtb033
     *
     * @param float|null $rtb033 Total balance for trades that were continuous 2 quarters prior to profile date
     *
     * @return self
     */
    public function setRtb033($rtb033)
    {
        if (is_null($rtb033)) {
            throw new \InvalidArgumentException('non-nullable rtb033 cannot be null');
        }
        $this->container['rtb033'] = $rtb033;

        return $this;
    }

    /**
     * Gets rtb034
     *
     * @return float|null
     */
    public function getRtb034()
    {
        return $this->container['rtb034'];
    }

    /**
     * Sets rtb034
     *
     * @param float|null $rtb034 Total balance for trades that were continuous 3 quarters prior to profile date
     *
     * @return self
     */
    public function setRtb034($rtb034)
    {
        if (is_null($rtb034)) {
            throw new \InvalidArgumentException('non-nullable rtb034 cannot be null');
        }
        $this->container['rtb034'] = $rtb034;

        return $this;
    }

    /**
     * Gets rtb035
     *
     * @return float|null
     */
    public function getRtb035()
    {
        return $this->container['rtb035'];
    }

    /**
     * Sets rtb035
     *
     * @param float|null $rtb035 Total balance for trades that were continuous 4 quarters prior to profile date
     *
     * @return self
     */
    public function setRtb035($rtb035)
    {
        if (is_null($rtb035)) {
            throw new \InvalidArgumentException('non-nullable rtb035 cannot be null');
        }
        $this->container['rtb035'] = $rtb035;

        return $this;
    }

    /**
     * Gets rtc036
     *
     * @return float|null
     */
    public function getRtc036()
    {
        return $this->container['rtc036'];
    }

    /**
     * Sets rtc036
     *
     * @param float|null $rtc036 Total number of continuous trades
     *
     * @return self
     */
    public function setRtc036($rtc036)
    {
        if (is_null($rtc036)) {
            throw new \InvalidArgumentException('non-nullable rtc036 cannot be null');
        }
        $this->container['rtc036'] = $rtc036;

        return $this;
    }

    /**
     * Gets rtc037
     *
     * @return float|null
     */
    public function getRtc037()
    {
        return $this->container['rtc037'];
    }

    /**
     * Sets rtc037
     *
     * @param float|null $rtc037 Total number of continuous trades where worst delinquency = current
     *
     * @return self
     */
    public function setRtc037($rtc037)
    {
        if (is_null($rtc037)) {
            throw new \InvalidArgumentException('non-nullable rtc037 cannot be null');
        }
        $this->container['rtc037'] = $rtc037;

        return $this;
    }

    /**
     * Gets rtc038
     *
     * @return float|null
     */
    public function getRtc038()
    {
        return $this->container['rtc038'];
    }

    /**
     * Sets rtc038
     *
     * @param float|null $rtc038 Total number of continuous trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setRtc038($rtc038)
    {
        if (is_null($rtc038)) {
            throw new \InvalidArgumentException('non-nullable rtc038 cannot be null');
        }
        $this->container['rtc038'] = $rtc038;

        return $this;
    }

    /**
     * Gets rtc039
     *
     * @return float|null
     */
    public function getRtc039()
    {
        return $this->container['rtc039'];
    }

    /**
     * Sets rtc039
     *
     * @param float|null $rtc039 Total number of continuous trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setRtc039($rtc039)
    {
        if (is_null($rtc039)) {
            throw new \InvalidArgumentException('non-nullable rtc039 cannot be null');
        }
        $this->container['rtc039'] = $rtc039;

        return $this;
    }

    /**
     * Gets rtc040
     *
     * @return float|null
     */
    public function getRtc040()
    {
        return $this->container['rtc040'];
    }

    /**
     * Sets rtc040
     *
     * @param float|null $rtc040 Total number of continuous trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setRtc040($rtc040)
    {
        if (is_null($rtc040)) {
            throw new \InvalidArgumentException('non-nullable rtc040 cannot be null');
        }
        $this->container['rtc040'] = $rtc040;

        return $this;
    }

    /**
     * Gets rtc041
     *
     * @return float|null
     */
    public function getRtc041()
    {
        return $this->container['rtc041'];
    }

    /**
     * Sets rtc041
     *
     * @param float|null $rtc041 Total number of continuous trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setRtc041($rtc041)
    {
        if (is_null($rtc041)) {
            throw new \InvalidArgumentException('non-nullable rtc041 cannot be null');
        }
        $this->container['rtc041'] = $rtc041;

        return $this;
    }

    /**
     * Gets rtc042
     *
     * @return float|null
     */
    public function getRtc042()
    {
        return $this->container['rtc042'];
    }

    /**
     * Sets rtc042
     *
     * @param float|null $rtc042 Total number of continuous trades where worst status = current
     *
     * @return self
     */
    public function setRtc042($rtc042)
    {
        if (is_null($rtc042)) {
            throw new \InvalidArgumentException('non-nullable rtc042 cannot be null');
        }
        $this->container['rtc042'] = $rtc042;

        return $this;
    }

    /**
     * Gets rtc043
     *
     * @return float|null
     */
    public function getRtc043()
    {
        return $this->container['rtc043'];
    }

    /**
     * Sets rtc043
     *
     * @param float|null $rtc043 Total number of continuous trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setRtc043($rtc043)
    {
        if (is_null($rtc043)) {
            throw new \InvalidArgumentException('non-nullable rtc043 cannot be null');
        }
        $this->container['rtc043'] = $rtc043;

        return $this;
    }

    /**
     * Gets rtc044
     *
     * @return float|null
     */
    public function getRtc044()
    {
        return $this->container['rtc044'];
    }

    /**
     * Sets rtc044
     *
     * @param float|null $rtc044 Total number of continuous trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setRtc044($rtc044)
    {
        if (is_null($rtc044)) {
            throw new \InvalidArgumentException('non-nullable rtc044 cannot be null');
        }
        $this->container['rtc044'] = $rtc044;

        return $this;
    }

    /**
     * Gets rtc045
     *
     * @return float|null
     */
    public function getRtc045()
    {
        return $this->container['rtc045'];
    }

    /**
     * Sets rtc045
     *
     * @param float|null $rtc045 Total number of continuous trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setRtc045($rtc045)
    {
        if (is_null($rtc045)) {
            throw new \InvalidArgumentException('non-nullable rtc045 cannot be null');
        }
        $this->container['rtc045'] = $rtc045;

        return $this;
    }

    /**
     * Gets rtc046
     *
     * @return float|null
     */
    public function getRtc046()
    {
        return $this->container['rtc046'];
    }

    /**
     * Sets rtc046
     *
     * @param float|null $rtc046 Total number of continuous trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setRtc046($rtc046)
    {
        if (is_null($rtc046)) {
            throw new \InvalidArgumentException('non-nullable rtc046 cannot be null');
        }
        $this->container['rtc046'] = $rtc046;

        return $this;
    }

    /**
     * Gets rtc047
     *
     * @return float|null
     */
    public function getRtc047()
    {
        return $this->container['rtc047'];
    }

    /**
     * Sets rtc047
     *
     * @param float|null $rtc047 Total number of continuous trades where worst status = 91+ days
     *
     * @return self
     */
    public function setRtc047($rtc047)
    {
        if (is_null($rtc047)) {
            throw new \InvalidArgumentException('non-nullable rtc047 cannot be null');
        }
        $this->container['rtc047'] = $rtc047;

        return $this;
    }

    /**
     * Gets rtc049
     *
     * @return float|null
     */
    public function getRtc049()
    {
        return $this->container['rtc049'];
    }

    /**
     * Sets rtc049
     *
     * @param float|null $rtc049 Total number of continuous trades with current DBT's
     *
     * @return self
     */
    public function setRtc049($rtc049)
    {
        if (is_null($rtc049)) {
            throw new \InvalidArgumentException('non-nullable rtc049 cannot be null');
        }
        $this->container['rtc049'] = $rtc049;

        return $this;
    }

    /**
     * Gets rtc050
     *
     * @return float|null
     */
    public function getRtc050()
    {
        return $this->container['rtc050'];
    }

    /**
     * Sets rtc050
     *
     * @param float|null $rtc050 Total number of continuous trades with DBT's 1-30 days
     *
     * @return self
     */
    public function setRtc050($rtc050)
    {
        if (is_null($rtc050)) {
            throw new \InvalidArgumentException('non-nullable rtc050 cannot be null');
        }
        $this->container['rtc050'] = $rtc050;

        return $this;
    }

    /**
     * Gets rtc051
     *
     * @return float|null
     */
    public function getRtc051()
    {
        return $this->container['rtc051'];
    }

    /**
     * Sets rtc051
     *
     * @param float|null $rtc051 Total number of continuous trades with DBT's 31-60 days
     *
     * @return self
     */
    public function setRtc051($rtc051)
    {
        if (is_null($rtc051)) {
            throw new \InvalidArgumentException('non-nullable rtc051 cannot be null');
        }
        $this->container['rtc051'] = $rtc051;

        return $this;
    }

    /**
     * Gets rtc052
     *
     * @return float|null
     */
    public function getRtc052()
    {
        return $this->container['rtc052'];
    }

    /**
     * Sets rtc052
     *
     * @param float|null $rtc052 Total number of continuous trades with DBT's 61-90 days
     *
     * @return self
     */
    public function setRtc052($rtc052)
    {
        if (is_null($rtc052)) {
            throw new \InvalidArgumentException('non-nullable rtc052 cannot be null');
        }
        $this->container['rtc052'] = $rtc052;

        return $this;
    }

    /**
     * Gets rtc053
     *
     * @return float|null
     */
    public function getRtc053()
    {
        return $this->container['rtc053'];
    }

    /**
     * Sets rtc053
     *
     * @param float|null $rtc053 Total number of continuous trades with DBT's 91+ days
     *
     * @return self
     */
    public function setRtc053($rtc053)
    {
        if (is_null($rtc053)) {
            throw new \InvalidArgumentException('non-nullable rtc053 cannot be null');
        }
        $this->container['rtc053'] = $rtc053;

        return $this;
    }

    /**
     * Gets rtc054
     *
     * @return float|null
     */
    public function getRtc054()
    {
        return $this->container['rtc054'];
    }

    /**
     * Sets rtc054
     *
     * @param float|null $rtc054 Total number of continuous trades with derogatory comments
     *
     * @return self
     */
    public function setRtc054($rtc054)
    {
        if (is_null($rtc054)) {
            throw new \InvalidArgumentException('non-nullable rtc054 cannot be null');
        }
        $this->container['rtc054'] = $rtc054;

        return $this;
    }

    /**
     * Gets rtd059
     *
     * @return float|null
     */
    public function getRtd059()
    {
        return $this->container['rtd059'];
    }

    /**
     * Sets rtd059
     *
     * @param float|null $rtd059 DBT of continuous trades
     *
     * @return self
     */
    public function setRtd059($rtd059)
    {
        if (is_null($rtd059)) {
            throw new \InvalidArgumentException('non-nullable rtd059 cannot be null');
        }
        $this->container['rtd059'] = $rtd059;

        return $this;
    }

    /**
     * Gets rtd060
     *
     * @return float|null
     */
    public function getRtd060()
    {
        return $this->container['rtd060'];
    }

    /**
     * Sets rtd060
     *
     * @param float|null $rtd060 DBT of continuous trades, current month
     *
     * @return self
     */
    public function setRtd060($rtd060)
    {
        if (is_null($rtd060)) {
            throw new \InvalidArgumentException('non-nullable rtd060 cannot be null');
        }
        $this->container['rtd060'] = $rtd060;

        return $this;
    }

    /**
     * Gets rtd061
     *
     * @return float|null
     */
    public function getRtd061()
    {
        return $this->container['rtd061'];
    }

    /**
     * Sets rtd061
     *
     * @param float|null $rtd061 DBT of trades that were continuous 1 month prior to profile date
     *
     * @return self
     */
    public function setRtd061($rtd061)
    {
        if (is_null($rtd061)) {
            throw new \InvalidArgumentException('non-nullable rtd061 cannot be null');
        }
        $this->container['rtd061'] = $rtd061;

        return $this;
    }

    /**
     * Gets rtd062
     *
     * @return float|null
     */
    public function getRtd062()
    {
        return $this->container['rtd062'];
    }

    /**
     * Sets rtd062
     *
     * @param float|null $rtd062 DBT of trades that were continuous 2 months prior to profile date
     *
     * @return self
     */
    public function setRtd062($rtd062)
    {
        if (is_null($rtd062)) {
            throw new \InvalidArgumentException('non-nullable rtd062 cannot be null');
        }
        $this->container['rtd062'] = $rtd062;

        return $this;
    }

    /**
     * Gets rtd063
     *
     * @return float|null
     */
    public function getRtd063()
    {
        return $this->container['rtd063'];
    }

    /**
     * Sets rtd063
     *
     * @param float|null $rtd063 DBT of trades that were continuous 3 months prior to profile date
     *
     * @return self
     */
    public function setRtd063($rtd063)
    {
        if (is_null($rtd063)) {
            throw new \InvalidArgumentException('non-nullable rtd063 cannot be null');
        }
        $this->container['rtd063'] = $rtd063;

        return $this;
    }

    /**
     * Gets rtd064
     *
     * @return float|null
     */
    public function getRtd064()
    {
        return $this->container['rtd064'];
    }

    /**
     * Sets rtd064
     *
     * @param float|null $rtd064 DBT of trades that were continuous 4 months prior to profile date
     *
     * @return self
     */
    public function setRtd064($rtd064)
    {
        if (is_null($rtd064)) {
            throw new \InvalidArgumentException('non-nullable rtd064 cannot be null');
        }
        $this->container['rtd064'] = $rtd064;

        return $this;
    }

    /**
     * Gets rtd065
     *
     * @return float|null
     */
    public function getRtd065()
    {
        return $this->container['rtd065'];
    }

    /**
     * Sets rtd065
     *
     * @param float|null $rtd065 DBT of trades that were continuous 5 months prior to profile date
     *
     * @return self
     */
    public function setRtd065($rtd065)
    {
        if (is_null($rtd065)) {
            throw new \InvalidArgumentException('non-nullable rtd065 cannot be null');
        }
        $this->container['rtd065'] = $rtd065;

        return $this;
    }

    /**
     * Gets rtd067
     *
     * @return float|null
     */
    public function getRtd067()
    {
        return $this->container['rtd067'];
    }

    /**
     * Sets rtd067
     *
     * @param float|null $rtd067 Maximum DBT of any continuous trade
     *
     * @return self
     */
    public function setRtd067($rtd067)
    {
        if (is_null($rtd067)) {
            throw new \InvalidArgumentException('non-nullable rtd067 cannot be null');
        }
        $this->container['rtd067'] = $rtd067;

        return $this;
    }

    /**
     * Gets rtd068
     *
     * @return float|null
     */
    public function getRtd068()
    {
        return $this->container['rtd068'];
    }

    /**
     * Sets rtd068
     *
     * @param float|null $rtd068 DBT of continuous trades, current quarter
     *
     * @return self
     */
    public function setRtd068($rtd068)
    {
        if (is_null($rtd068)) {
            throw new \InvalidArgumentException('non-nullable rtd068 cannot be null');
        }
        $this->container['rtd068'] = $rtd068;

        return $this;
    }

    /**
     * Gets rtd069
     *
     * @return float|null
     */
    public function getRtd069()
    {
        return $this->container['rtd069'];
    }

    /**
     * Sets rtd069
     *
     * @param float|null $rtd069 DBT of trades that were continuous 1 quarter prior to profile date
     *
     * @return self
     */
    public function setRtd069($rtd069)
    {
        if (is_null($rtd069)) {
            throw new \InvalidArgumentException('non-nullable rtd069 cannot be null');
        }
        $this->container['rtd069'] = $rtd069;

        return $this;
    }

    /**
     * Gets rtd070
     *
     * @return float|null
     */
    public function getRtd070()
    {
        return $this->container['rtd070'];
    }

    /**
     * Sets rtd070
     *
     * @param float|null $rtd070 DBT of trades that were continuous 2 quarters prior to profile date
     *
     * @return self
     */
    public function setRtd070($rtd070)
    {
        if (is_null($rtd070)) {
            throw new \InvalidArgumentException('non-nullable rtd070 cannot be null');
        }
        $this->container['rtd070'] = $rtd070;

        return $this;
    }

    /**
     * Gets rtd071
     *
     * @return float|null
     */
    public function getRtd071()
    {
        return $this->container['rtd071'];
    }

    /**
     * Sets rtd071
     *
     * @param float|null $rtd071 DBT of trades that were continuous 3 quarters prior to profile date
     *
     * @return self
     */
    public function setRtd071($rtd071)
    {
        if (is_null($rtd071)) {
            throw new \InvalidArgumentException('non-nullable rtd071 cannot be null');
        }
        $this->container['rtd071'] = $rtd071;

        return $this;
    }

    /**
     * Gets rtd072
     *
     * @return float|null
     */
    public function getRtd072()
    {
        return $this->container['rtd072'];
    }

    /**
     * Sets rtd072
     *
     * @param float|null $rtd072 DBT of trades that were continuous 4 quarters prior to profile date
     *
     * @return self
     */
    public function setRtd072($rtd072)
    {
        if (is_null($rtd072)) {
            throw new \InvalidArgumentException('non-nullable rtd072 cannot be null');
        }
        $this->container['rtd072'] = $rtd072;

        return $this;
    }

    /**
     * Gets rto077
     *
     * @return float|null
     */
    public function getRto077()
    {
        return $this->container['rto077'];
    }

    /**
     * Sets rto077
     *
     * @param float|null $rto077 Average monthly change in DBT for continuous trades over the six months prior to the profile date
     *
     * @return self
     */
    public function setRto077($rto077)
    {
        if (is_null($rto077)) {
            throw new \InvalidArgumentException('non-nullable rto077 cannot be null');
        }
        $this->container['rto077'] = $rto077;

        return $this;
    }

    /**
     * Gets rto079
     *
     * @return float|null
     */
    public function getRto079()
    {
        return $this->container['rto079'];
    }

    /**
     * Sets rto079
     *
     * @param float|null $rto079 Average quarterly change in DBT for continuous trades over the five quarters prior to the profile date
     *
     * @return self
     */
    public function setRto079($rto079)
    {
        if (is_null($rto079)) {
            throw new \InvalidArgumentException('non-nullable rto079 cannot be null');
        }
        $this->container['rto079'] = $rto079;

        return $this;
    }

    /**
     * Gets rtp081
     *
     * @return float|null
     */
    public function getRtp081()
    {
        return $this->container['rtp081'];
    }

    /**
     * Sets rtp081
     *
     * @param float|null $rtp081 Percentage of Total continuous trades balance to continuous trades Total highest balance in past 12 months
     *
     * @return self
     */
    public function setRtp081($rtp081)
    {
        if (is_null($rtp081)) {
            throw new \InvalidArgumentException('non-nullable rtp081 cannot be null');
        }
        $this->container['rtp081'] = $rtp081;

        return $this;
    }

    /**
     * Gets rtp082
     *
     * @return float|null
     */
    public function getRtp082()
    {
        return $this->container['rtp082'];
    }

    /**
     * Sets rtp082
     *
     * @param float|null $rtp082 Percentage of Total balance of continuous trades to Total trade balance
     *
     * @return self
     */
    public function setRtp082($rtp082)
    {
        if (is_null($rtp082)) {
            throw new \InvalidArgumentException('non-nullable rtp082 cannot be null');
        }
        $this->container['rtp082'] = $rtp082;

        return $this;
    }

    /**
     * Gets rtp083
     *
     * @return float|null
     */
    public function getRtp083()
    {
        return $this->container['rtp083'];
    }

    /**
     * Sets rtp083
     *
     * @param float|null $rtp083 Percentage of Total number of continuous trades to Total number of trades
     *
     * @return self
     */
    public function setRtp083($rtp083)
    {
        if (is_null($rtp083)) {
            throw new \InvalidArgumentException('non-nullable rtp083 cannot be null');
        }
        $this->container['rtp083'] = $rtp083;

        return $this;
    }

    /**
     * Gets rtp086
     *
     * @return float|null
     */
    public function getRtp086()
    {
        return $this->container['rtp086'];
    }

    /**
     * Sets rtp086
     *
     * @param float|null $rtp086 Ratio of Total account balance to Total highest account balance ever, for continuous trades that are newly reported within six months of the profile date
     *
     * @return self
     */
    public function setRtp086($rtp086)
    {
        if (is_null($rtp086)) {
            throw new \InvalidArgumentException('non-nullable rtp086 cannot be null');
        }
        $this->container['rtp086'] = $rtp086;

        return $this;
    }

    /**
     * Gets ttb001
     *
     * @return float|null
     */
    public function getTtb001()
    {
        return $this->container['ttb001'];
    }

    /**
     * Sets ttb001
     *
     * @param float|null $ttb001 Total balance for bad trades
     *
     * @return self
     */
    public function setTtb001($ttb001)
    {
        if (is_null($ttb001)) {
            throw new \InvalidArgumentException('non-nullable ttb001 cannot be null');
        }
        $this->container['ttb001'] = $ttb001;

        return $this;
    }

    /**
     * Gets ttb002
     *
     * @return float|null
     */
    public function getTtb002()
    {
        return $this->container['ttb002'];
    }

    /**
     * Sets ttb002
     *
     * @param float|null $ttb002 Total balance for good trades
     *
     * @return self
     */
    public function setTtb002($ttb002)
    {
        if (is_null($ttb002)) {
            throw new \InvalidArgumentException('non-nullable ttb002 cannot be null');
        }
        $this->container['ttb002'] = $ttb002;

        return $this;
    }

    /**
     * Gets ttb003
     *
     * @return float|null
     */
    public function getTtb003()
    {
        return $this->container['ttb003'];
    }

    /**
     * Sets ttb003
     *
     * @param float|null $ttb003 Total balance of Total trades
     *
     * @return self
     */
    public function setTtb003($ttb003)
    {
        if (is_null($ttb003)) {
            throw new \InvalidArgumentException('non-nullable ttb003 cannot be null');
        }
        $this->container['ttb003'] = $ttb003;

        return $this;
    }

    /**
     * Gets ttb004
     *
     * @return float|null
     */
    public function getTtb004()
    {
        return $this->container['ttb004'];
    }

    /**
     * Sets ttb004
     *
     * @param float|null $ttb004 Total balance of Total trades that is 1-30 days delinquent
     *
     * @return self
     */
    public function setTtb004($ttb004)
    {
        if (is_null($ttb004)) {
            throw new \InvalidArgumentException('non-nullable ttb004 cannot be null');
        }
        $this->container['ttb004'] = $ttb004;

        return $this;
    }

    /**
     * Gets ttb005
     *
     * @return float|null
     */
    public function getTtb005()
    {
        return $this->container['ttb005'];
    }

    /**
     * Sets ttb005
     *
     * @param float|null $ttb005 Total balance of Total trades that is 31-60 days delinquent
     *
     * @return self
     */
    public function setTtb005($ttb005)
    {
        if (is_null($ttb005)) {
            throw new \InvalidArgumentException('non-nullable ttb005 cannot be null');
        }
        $this->container['ttb005'] = $ttb005;

        return $this;
    }

    /**
     * Gets ttb006
     *
     * @return float|null
     */
    public function getTtb006()
    {
        return $this->container['ttb006'];
    }

    /**
     * Sets ttb006
     *
     * @param float|null $ttb006 Total balance of Total trades that is 61-90 days delinquent
     *
     * @return self
     */
    public function setTtb006($ttb006)
    {
        if (is_null($ttb006)) {
            throw new \InvalidArgumentException('non-nullable ttb006 cannot be null');
        }
        $this->container['ttb006'] = $ttb006;

        return $this;
    }

    /**
     * Gets ttb007
     *
     * @return float|null
     */
    public function getTtb007()
    {
        return $this->container['ttb007'];
    }

    /**
     * Sets ttb007
     *
     * @param float|null $ttb007 Total balance of Total trades that is 91+ days delinquent
     *
     * @return self
     */
    public function setTtb007($ttb007)
    {
        if (is_null($ttb007)) {
            throw new \InvalidArgumentException('non-nullable ttb007 cannot be null');
        }
        $this->container['ttb007'] = $ttb007;

        return $this;
    }

    /**
     * Gets ttb008
     *
     * @return float|null
     */
    public function getTtb008()
    {
        return $this->container['ttb008'];
    }

    /**
     * Sets ttb008
     *
     * @param float|null $ttb008 Total balance of Total trades that is current
     *
     * @return self
     */
    public function setTtb008($ttb008)
    {
        if (is_null($ttb008)) {
            throw new \InvalidArgumentException('non-nullable ttb008 cannot be null');
        }
        $this->container['ttb008'] = $ttb008;

        return $this;
    }

    /**
     * Gets ttb009
     *
     * @return float|null
     */
    public function getTtb009()
    {
        return $this->container['ttb009'];
    }

    /**
     * Sets ttb009
     *
     * @param float|null $ttb009 Total balance of Total trades where worst delinquency = current
     *
     * @return self
     */
    public function setTtb009($ttb009)
    {
        if (is_null($ttb009)) {
            throw new \InvalidArgumentException('non-nullable ttb009 cannot be null');
        }
        $this->container['ttb009'] = $ttb009;

        return $this;
    }

    /**
     * Gets ttb010
     *
     * @return float|null
     */
    public function getTtb010()
    {
        return $this->container['ttb010'];
    }

    /**
     * Sets ttb010
     *
     * @param float|null $ttb010 Total balance of Total trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setTtb010($ttb010)
    {
        if (is_null($ttb010)) {
            throw new \InvalidArgumentException('non-nullable ttb010 cannot be null');
        }
        $this->container['ttb010'] = $ttb010;

        return $this;
    }

    /**
     * Gets ttb011
     *
     * @return float|null
     */
    public function getTtb011()
    {
        return $this->container['ttb011'];
    }

    /**
     * Sets ttb011
     *
     * @param float|null $ttb011 Total balance of Total trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setTtb011($ttb011)
    {
        if (is_null($ttb011)) {
            throw new \InvalidArgumentException('non-nullable ttb011 cannot be null');
        }
        $this->container['ttb011'] = $ttb011;

        return $this;
    }

    /**
     * Gets ttb012
     *
     * @return float|null
     */
    public function getTtb012()
    {
        return $this->container['ttb012'];
    }

    /**
     * Sets ttb012
     *
     * @param float|null $ttb012 Total balance of Total trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setTtb012($ttb012)
    {
        if (is_null($ttb012)) {
            throw new \InvalidArgumentException('non-nullable ttb012 cannot be null');
        }
        $this->container['ttb012'] = $ttb012;

        return $this;
    }

    /**
     * Gets ttb013
     *
     * @return float|null
     */
    public function getTtb013()
    {
        return $this->container['ttb013'];
    }

    /**
     * Sets ttb013
     *
     * @param float|null $ttb013 Total balance of Total trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setTtb013($ttb013)
    {
        if (is_null($ttb013)) {
            throw new \InvalidArgumentException('non-nullable ttb013 cannot be null');
        }
        $this->container['ttb013'] = $ttb013;

        return $this;
    }

    /**
     * Gets ttb014
     *
     * @return float|null
     */
    public function getTtb014()
    {
        return $this->container['ttb014'];
    }

    /**
     * Sets ttb014
     *
     * @param float|null $ttb014 Total balance of Total trades where worst status = current
     *
     * @return self
     */
    public function setTtb014($ttb014)
    {
        if (is_null($ttb014)) {
            throw new \InvalidArgumentException('non-nullable ttb014 cannot be null');
        }
        $this->container['ttb014'] = $ttb014;

        return $this;
    }

    /**
     * Gets ttb015
     *
     * @return float|null
     */
    public function getTtb015()
    {
        return $this->container['ttb015'];
    }

    /**
     * Sets ttb015
     *
     * @param float|null $ttb015 Total balance of Total trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setTtb015($ttb015)
    {
        if (is_null($ttb015)) {
            throw new \InvalidArgumentException('non-nullable ttb015 cannot be null');
        }
        $this->container['ttb015'] = $ttb015;

        return $this;
    }

    /**
     * Gets ttb016
     *
     * @return float|null
     */
    public function getTtb016()
    {
        return $this->container['ttb016'];
    }

    /**
     * Sets ttb016
     *
     * @param float|null $ttb016 Total balance of Total trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setTtb016($ttb016)
    {
        if (is_null($ttb016)) {
            throw new \InvalidArgumentException('non-nullable ttb016 cannot be null');
        }
        $this->container['ttb016'] = $ttb016;

        return $this;
    }

    /**
     * Gets ttb017
     *
     * @return float|null
     */
    public function getTtb017()
    {
        return $this->container['ttb017'];
    }

    /**
     * Sets ttb017
     *
     * @param float|null $ttb017 Total balance of Total trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setTtb017($ttb017)
    {
        if (is_null($ttb017)) {
            throw new \InvalidArgumentException('non-nullable ttb017 cannot be null');
        }
        $this->container['ttb017'] = $ttb017;

        return $this;
    }

    /**
     * Gets ttb018
     *
     * @return float|null
     */
    public function getTtb018()
    {
        return $this->container['ttb018'];
    }

    /**
     * Sets ttb018
     *
     * @param float|null $ttb018 Total balance of Total trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setTtb018($ttb018)
    {
        if (is_null($ttb018)) {
            throw new \InvalidArgumentException('non-nullable ttb018 cannot be null');
        }
        $this->container['ttb018'] = $ttb018;

        return $this;
    }

    /**
     * Gets ttb019
     *
     * @return float|null
     */
    public function getTtb019()
    {
        return $this->container['ttb019'];
    }

    /**
     * Sets ttb019
     *
     * @param float|null $ttb019 Total balance of Total trades where worst status = 91+ days
     *
     * @return self
     */
    public function setTtb019($ttb019)
    {
        if (is_null($ttb019)) {
            throw new \InvalidArgumentException('non-nullable ttb019 cannot be null');
        }
        $this->container['ttb019'] = $ttb019;

        return $this;
    }

    /**
     * Gets ttb020
     *
     * @return float|null
     */
    public function getTtb020()
    {
        return $this->container['ttb020'];
    }

    /**
     * Sets ttb020
     *
     * @param float|null $ttb020 Total highest balance in past 12 months across all Total Trades
     *
     * @return self
     */
    public function setTtb020($ttb020)
    {
        if (is_null($ttb020)) {
            throw new \InvalidArgumentException('non-nullable ttb020 cannot be null');
        }
        $this->container['ttb020'] = $ttb020;

        return $this;
    }

    /**
     * Gets ttb023
     *
     * @return float|null
     */
    public function getTtb023()
    {
        return $this->container['ttb023'];
    }

    /**
     * Sets ttb023
     *
     * @param float|null $ttb023 Maximum account balance that is current across all trades
     *
     * @return self
     */
    public function setTtb023($ttb023)
    {
        if (is_null($ttb023)) {
            throw new \InvalidArgumentException('non-nullable ttb023 cannot be null');
        }
        $this->container['ttb023'] = $ttb023;

        return $this;
    }

    /**
     * Gets ttb024
     *
     * @return float|null
     */
    public function getTtb024()
    {
        return $this->container['ttb024'];
    }

    /**
     * Sets ttb024
     *
     * @param float|null $ttb024 Maximum account balance that is 1-30 days delinquent across all trades
     *
     * @return self
     */
    public function setTtb024($ttb024)
    {
        if (is_null($ttb024)) {
            throw new \InvalidArgumentException('non-nullable ttb024 cannot be null');
        }
        $this->container['ttb024'] = $ttb024;

        return $this;
    }

    /**
     * Gets ttb025
     *
     * @return float|null
     */
    public function getTtb025()
    {
        return $this->container['ttb025'];
    }

    /**
     * Sets ttb025
     *
     * @param float|null $ttb025 Maximum account balance that is 31-60 days delinquent across all trades
     *
     * @return self
     */
    public function setTtb025($ttb025)
    {
        if (is_null($ttb025)) {
            throw new \InvalidArgumentException('non-nullable ttb025 cannot be null');
        }
        $this->container['ttb025'] = $ttb025;

        return $this;
    }

    /**
     * Gets ttb026
     *
     * @return float|null
     */
    public function getTtb026()
    {
        return $this->container['ttb026'];
    }

    /**
     * Sets ttb026
     *
     * @param float|null $ttb026 Maximum account balance that is 61-90 days delinquent across all trades
     *
     * @return self
     */
    public function setTtb026($ttb026)
    {
        if (is_null($ttb026)) {
            throw new \InvalidArgumentException('non-nullable ttb026 cannot be null');
        }
        $this->container['ttb026'] = $ttb026;

        return $this;
    }

    /**
     * Gets ttb027
     *
     * @return float|null
     */
    public function getTtb027()
    {
        return $this->container['ttb027'];
    }

    /**
     * Sets ttb027
     *
     * @param float|null $ttb027 Maximum account balance that is 91+ days delinquent across all trades
     *
     * @return self
     */
    public function setTtb027($ttb027)
    {
        if (is_null($ttb027)) {
            throw new \InvalidArgumentException('non-nullable ttb027 cannot be null');
        }
        $this->container['ttb027'] = $ttb027;

        return $this;
    }

    /**
     * Gets ttb033
     *
     * @return float|null
     */
    public function getTtb033()
    {
        return $this->container['ttb033'];
    }

    /**
     * Sets ttb033
     *
     * @param float|null $ttb033 Maximum balance of any account in the past 12 months
     *
     * @return self
     */
    public function setTtb033($ttb033)
    {
        if (is_null($ttb033)) {
            throw new \InvalidArgumentException('non-nullable ttb033 cannot be null');
        }
        $this->container['ttb033'] = $ttb033;

        return $this;
    }

    /**
     * Gets ttc035
     *
     * @return float|null
     */
    public function getTtc035()
    {
        return $this->container['ttc035'];
    }

    /**
     * Sets ttc035
     *
     * @param float|null $ttc035 Total number of bad trades
     *
     * @return self
     */
    public function setTtc035($ttc035)
    {
        if (is_null($ttc035)) {
            throw new \InvalidArgumentException('non-nullable ttc035 cannot be null');
        }
        $this->container['ttc035'] = $ttc035;

        return $this;
    }

    /**
     * Gets ttc036
     *
     * @return float|null
     */
    public function getTtc036()
    {
        return $this->container['ttc036'];
    }

    /**
     * Sets ttc036
     *
     * @param float|null $ttc036 Total number of good trades
     *
     * @return self
     */
    public function setTtc036($ttc036)
    {
        if (is_null($ttc036)) {
            throw new \InvalidArgumentException('non-nullable ttc036 cannot be null');
        }
        $this->container['ttc036'] = $ttc036;

        return $this;
    }

    /**
     * Gets ttc037
     *
     * @return float|null
     */
    public function getTtc037()
    {
        return $this->container['ttc037'];
    }

    /**
     * Sets ttc037
     *
     * @param float|null $ttc037 Total number of indeterminate trades
     *
     * @return self
     */
    public function setTtc037($ttc037)
    {
        if (is_null($ttc037)) {
            throw new \InvalidArgumentException('non-nullable ttc037 cannot be null');
        }
        $this->container['ttc037'] = $ttc037;

        return $this;
    }

    /**
     * Gets ttc038
     *
     * @return float|null
     */
    public function getTtc038()
    {
        return $this->container['ttc038'];
    }

    /**
     * Sets ttc038
     *
     * @param float|null $ttc038 Total number of Total Trades
     *
     * @return self
     */
    public function setTtc038($ttc038)
    {
        if (is_null($ttc038)) {
            throw new \InvalidArgumentException('non-nullable ttc038 cannot be null');
        }
        $this->container['ttc038'] = $ttc038;

        return $this;
    }

    /**
     * Gets ttc039
     *
     * @return float|null
     */
    public function getTtc039()
    {
        return $this->container['ttc039'];
    }

    /**
     * Sets ttc039
     *
     * @param float|null $ttc039 Total number of Total trades where worst delinquency = current
     *
     * @return self
     */
    public function setTtc039($ttc039)
    {
        if (is_null($ttc039)) {
            throw new \InvalidArgumentException('non-nullable ttc039 cannot be null');
        }
        $this->container['ttc039'] = $ttc039;

        return $this;
    }

    /**
     * Gets ttc040
     *
     * @return float|null
     */
    public function getTtc040()
    {
        return $this->container['ttc040'];
    }

    /**
     * Sets ttc040
     *
     * @param float|null $ttc040 Total number of Total trades where worst delinquency = 1-30 days
     *
     * @return self
     */
    public function setTtc040($ttc040)
    {
        if (is_null($ttc040)) {
            throw new \InvalidArgumentException('non-nullable ttc040 cannot be null');
        }
        $this->container['ttc040'] = $ttc040;

        return $this;
    }

    /**
     * Gets ttc041
     *
     * @return float|null
     */
    public function getTtc041()
    {
        return $this->container['ttc041'];
    }

    /**
     * Sets ttc041
     *
     * @param float|null $ttc041 Total number of Total trades where worst delinquency = 31-60 days
     *
     * @return self
     */
    public function setTtc041($ttc041)
    {
        if (is_null($ttc041)) {
            throw new \InvalidArgumentException('non-nullable ttc041 cannot be null');
        }
        $this->container['ttc041'] = $ttc041;

        return $this;
    }

    /**
     * Gets ttc042
     *
     * @return float|null
     */
    public function getTtc042()
    {
        return $this->container['ttc042'];
    }

    /**
     * Sets ttc042
     *
     * @param float|null $ttc042 Total number of Total trades where worst delinquency = 61-90 days
     *
     * @return self
     */
    public function setTtc042($ttc042)
    {
        if (is_null($ttc042)) {
            throw new \InvalidArgumentException('non-nullable ttc042 cannot be null');
        }
        $this->container['ttc042'] = $ttc042;

        return $this;
    }

    /**
     * Gets ttc043
     *
     * @return float|null
     */
    public function getTtc043()
    {
        return $this->container['ttc043'];
    }

    /**
     * Sets ttc043
     *
     * @param float|null $ttc043 Total number of Total trades where worst delinquency = 91+ days
     *
     * @return self
     */
    public function setTtc043($ttc043)
    {
        if (is_null($ttc043)) {
            throw new \InvalidArgumentException('non-nullable ttc043 cannot be null');
        }
        $this->container['ttc043'] = $ttc043;

        return $this;
    }

    /**
     * Gets ttc044
     *
     * @return float|null
     */
    public function getTtc044()
    {
        return $this->container['ttc044'];
    }

    /**
     * Sets ttc044
     *
     * @param float|null $ttc044 Total number of Total trades where worst status = current
     *
     * @return self
     */
    public function setTtc044($ttc044)
    {
        if (is_null($ttc044)) {
            throw new \InvalidArgumentException('non-nullable ttc044 cannot be null');
        }
        $this->container['ttc044'] = $ttc044;

        return $this;
    }

    /**
     * Gets ttc045
     *
     * @return float|null
     */
    public function getTtc045()
    {
        return $this->container['ttc045'];
    }

    /**
     * Sets ttc045
     *
     * @param float|null $ttc045 Total number of Total trades where worst status = 1-30 days
     *
     * @return self
     */
    public function setTtc045($ttc045)
    {
        if (is_null($ttc045)) {
            throw new \InvalidArgumentException('non-nullable ttc045 cannot be null');
        }
        $this->container['ttc045'] = $ttc045;

        return $this;
    }

    /**
     * Gets ttc046
     *
     * @return float|null
     */
    public function getTtc046()
    {
        return $this->container['ttc046'];
    }

    /**
     * Sets ttc046
     *
     * @param float|null $ttc046 Total number of Total trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return self
     */
    public function setTtc046($ttc046)
    {
        if (is_null($ttc046)) {
            throw new \InvalidArgumentException('non-nullable ttc046 cannot be null');
        }
        $this->container['ttc046'] = $ttc046;

        return $this;
    }

    /**
     * Gets ttc047
     *
     * @return float|null
     */
    public function getTtc047()
    {
        return $this->container['ttc047'];
    }

    /**
     * Sets ttc047
     *
     * @param float|null $ttc047 Total number of Total trades where worst status = 31-60 days
     *
     * @return self
     */
    public function setTtc047($ttc047)
    {
        if (is_null($ttc047)) {
            throw new \InvalidArgumentException('non-nullable ttc047 cannot be null');
        }
        $this->container['ttc047'] = $ttc047;

        return $this;
    }

    /**
     * Gets ttc048
     *
     * @return float|null
     */
    public function getTtc048()
    {
        return $this->container['ttc048'];
    }

    /**
     * Sets ttc048
     *
     * @param float|null $ttc048 Total number of Total trades where worst status = 61-90 days
     *
     * @return self
     */
    public function setTtc048($ttc048)
    {
        if (is_null($ttc048)) {
            throw new \InvalidArgumentException('non-nullable ttc048 cannot be null');
        }
        $this->container['ttc048'] = $ttc048;

        return $this;
    }

    /**
     * Gets ttc049
     *
     * @return float|null
     */
    public function getTtc049()
    {
        return $this->container['ttc049'];
    }

    /**
     * Sets ttc049
     *
     * @param float|null $ttc049 Total number of Total trades where worst status = 91+ days
     *
     * @return self
     */
    public function setTtc049($ttc049)
    {
        if (is_null($ttc049)) {
            throw new \InvalidArgumentException('non-nullable ttc049 cannot be null');
        }
        $this->container['ttc049'] = $ttc049;

        return $this;
    }

    /**
     * Gets ttc051
     *
     * @return float|null
     */
    public function getTtc051()
    {
        return $this->container['ttc051'];
    }

    /**
     * Sets ttc051
     *
     * @param float|null $ttc051 Total number of active trades
     *
     * @return self
     */
    public function setTtc051($ttc051)
    {
        if (is_null($ttc051)) {
            throw new \InvalidArgumentException('non-nullable ttc051 cannot be null');
        }
        $this->container['ttc051'] = $ttc051;

        return $this;
    }

    /**
     * Gets ttc052
     *
     * @return float|null
     */
    public function getTtc052()
    {
        return $this->container['ttc052'];
    }

    /**
     * Sets ttc052
     *
     * @param float|null $ttc052 Total number of trades reported within 6 months of profile date with balance >=70 percent of highest balance in past 12 months
     *
     * @return self
     */
    public function setTtc052($ttc052)
    {
        if (is_null($ttc052)) {
            throw new \InvalidArgumentException('non-nullable ttc052 cannot be null');
        }
        $this->container['ttc052'] = $ttc052;

        return $this;
    }

    /**
     * Gets ttc053
     *
     * @return float|null
     */
    public function getTtc053()
    {
        return $this->container['ttc053'];
    }

    /**
     * Sets ttc053
     *
     * @param float|null $ttc053 Total number of trades reported within 6 months of the profile date
     *
     * @return self
     */
    public function setTtc053($ttc053)
    {
        if (is_null($ttc053)) {
            throw new \InvalidArgumentException('non-nullable ttc053 cannot be null');
        }
        $this->container['ttc053'] = $ttc053;

        return $this;
    }

    /**
     * Gets ttc054
     *
     * @return float|null
     */
    public function getTtc054()
    {
        return $this->container['ttc054'];
    }

    /**
     * Sets ttc054
     *
     * @param float|null $ttc054 Total number of trades reported within 12 months of the profile date
     *
     * @return self
     */
    public function setTtc054($ttc054)
    {
        if (is_null($ttc054)) {
            throw new \InvalidArgumentException('non-nullable ttc054 cannot be null');
        }
        $this->container['ttc054'] = $ttc054;

        return $this;
    }

    /**
     * Gets ttc055
     *
     * @return float|null
     */
    public function getTtc055()
    {
        return $this->container['ttc055'];
    }

    /**
     * Sets ttc055
     *
     * @param float|null $ttc055 Total number of trades with last activity within 6 months of profile date
     *
     * @return self
     */
    public function setTtc055($ttc055)
    {
        if (is_null($ttc055)) {
            throw new \InvalidArgumentException('non-nullable ttc055 cannot be null');
        }
        $this->container['ttc055'] = $ttc055;

        return $this;
    }

    /**
     * Gets ttc056
     *
     * @return float|null
     */
    public function getTtc056()
    {
        return $this->container['ttc056'];
    }

    /**
     * Sets ttc056
     *
     * @param float|null $ttc056 Total number of trades with last activity within 12 months of profile date
     *
     * @return self
     */
    public function setTtc056($ttc056)
    {
        if (is_null($ttc056)) {
            throw new \InvalidArgumentException('non-nullable ttc056 cannot be null');
        }
        $this->container['ttc056'] = $ttc056;

        return $this;
    }

    /**
     * Gets ttc057
     *
     * @return float|null
     */
    public function getTtc057()
    {
        return $this->container['ttc057'];
    }

    /**
     * Sets ttc057
     *
     * @param float|null $ttc057 Total number of trades with DBT greater than 0
     *
     * @return self
     */
    public function setTtc057($ttc057)
    {
        if (is_null($ttc057)) {
            throw new \InvalidArgumentException('non-nullable ttc057 cannot be null');
        }
        $this->container['ttc057'] = $ttc057;

        return $this;
    }

    /**
     * Gets ttc058
     *
     * @return float|null
     */
    public function getTtc058()
    {
        return $this->container['ttc058'];
    }

    /**
     * Sets ttc058
     *
     * @param float|null $ttc058 Total number of trades with DBT greater than 30
     *
     * @return self
     */
    public function setTtc058($ttc058)
    {
        if (is_null($ttc058)) {
            throw new \InvalidArgumentException('non-nullable ttc058 cannot be null');
        }
        $this->container['ttc058'] = $ttc058;

        return $this;
    }

    /**
     * Gets ttc059
     *
     * @return float|null
     */
    public function getTtc059()
    {
        return $this->container['ttc059'];
    }

    /**
     * Sets ttc059
     *
     * @param float|null $ttc059 Total number of trades with DBT greater than 60
     *
     * @return self
     */
    public function setTtc059($ttc059)
    {
        if (is_null($ttc059)) {
            throw new \InvalidArgumentException('non-nullable ttc059 cannot be null');
        }
        $this->container['ttc059'] = $ttc059;

        return $this;
    }

    /**
     * Gets ttc060
     *
     * @return float|null
     */
    public function getTtc060()
    {
        return $this->container['ttc060'];
    }

    /**
     * Sets ttc060
     *
     * @param float|null $ttc060 Total number of trades with DBT greater than 90
     *
     * @return self
     */
    public function setTtc060($ttc060)
    {
        if (is_null($ttc060)) {
            throw new \InvalidArgumentException('non-nullable ttc060 cannot be null');
        }
        $this->container['ttc060'] = $ttc060;

        return $this;
    }

    /**
     * Gets ttc061
     *
     * @return float|null
     */
    public function getTtc061()
    {
        return $this->container['ttc061'];
    }

    /**
     * Sets ttc061
     *
     * @param float|null $ttc061 Total number of trades with trade balance equal to or greater than highest balance in past 12 months
     *
     * @return self
     */
    public function setTtc061($ttc061)
    {
        if (is_null($ttc061)) {
            throw new \InvalidArgumentException('non-nullable ttc061 cannot be null');
        }
        $this->container['ttc061'] = $ttc061;

        return $this;
    }

    /**
     * Gets ttc063
     *
     * @return float|null
     */
    public function getTtc063()
    {
        return $this->container['ttc063'];
    }

    /**
     * Sets ttc063
     *
     * @param float|null $ttc063 Total number of trades with net 30 terms
     *
     * @return self
     */
    public function setTtc063($ttc063)
    {
        if (is_null($ttc063)) {
            throw new \InvalidArgumentException('non-nullable ttc063 cannot be null');
        }
        $this->container['ttc063'] = $ttc063;

        return $this;
    }

    /**
     * Gets ttc064
     *
     * @return float|null
     */
    public function getTtc064()
    {
        return $this->container['ttc064'];
    }

    /**
     * Sets ttc064
     *
     * @param float|null $ttc064 Total number of trades with net 60 terms
     *
     * @return self
     */
    public function setTtc064($ttc064)
    {
        if (is_null($ttc064)) {
            throw new \InvalidArgumentException('non-nullable ttc064 cannot be null');
        }
        $this->container['ttc064'] = $ttc064;

        return $this;
    }

    /**
     * Gets ttc065
     *
     * @return float|null
     */
    public function getTtc065()
    {
        return $this->container['ttc065'];
    }

    /**
     * Sets ttc065
     *
     * @param float|null $ttc065 Total number of trades with net 61+ terms
     *
     * @return self
     */
    public function setTtc065($ttc065)
    {
        if (is_null($ttc065)) {
            throw new \InvalidArgumentException('non-nullable ttc065 cannot be null');
        }
        $this->container['ttc065'] = $ttc065;

        return $this;
    }

    /**
     * Gets ttc066
     *
     * @return float|null
     */
    public function getTtc066()
    {
        return $this->container['ttc066'];
    }

    /**
     * Sets ttc066
     *
     * @param float|null $ttc066 Total number of trades with cash terms
     *
     * @return self
     */
    public function setTtc066($ttc066)
    {
        if (is_null($ttc066)) {
            throw new \InvalidArgumentException('non-nullable ttc066 cannot be null');
        }
        $this->container['ttc066'] = $ttc066;

        return $this;
    }

    /**
     * Gets ttc067
     *
     * @return float|null
     */
    public function getTtc067()
    {
        return $this->container['ttc067'];
    }

    /**
     * Sets ttc067
     *
     * @param float|null $ttc067 Total number of trades with contract terms
     *
     * @return self
     */
    public function setTtc067($ttc067)
    {
        if (is_null($ttc067)) {
            throw new \InvalidArgumentException('non-nullable ttc067 cannot be null');
        }
        $this->container['ttc067'] = $ttc067;

        return $this;
    }

    /**
     * Gets ttc068
     *
     * @return float|null
     */
    public function getTtc068()
    {
        return $this->container['ttc068'];
    }

    /**
     * Sets ttc068
     *
     * @param float|null $ttc068 Total number of trades with revolving credit terms
     *
     * @return self
     */
    public function setTtc068($ttc068)
    {
        if (is_null($ttc068)) {
            throw new \InvalidArgumentException('non-nullable ttc068 cannot be null');
        }
        $this->container['ttc068'] = $ttc068;

        return $this;
    }

    /**
     * Gets ttc069
     *
     * @return float|null
     */
    public function getTtc069()
    {
        return $this->container['ttc069'];
    }

    /**
     * Sets ttc069
     *
     * @param float|null $ttc069 Total number of trades with varied terms
     *
     * @return self
     */
    public function setTtc069($ttc069)
    {
        if (is_null($ttc069)) {
            throw new \InvalidArgumentException('non-nullable ttc069 cannot be null');
        }
        $this->container['ttc069'] = $ttc069;

        return $this;
    }

    /**
     * Gets ttc070
     *
     * @return float|null
     */
    public function getTtc070()
    {
        return $this->container['ttc070'];
    }

    /**
     * Sets ttc070
     *
     * @param float|null $ttc070 Total number of trades with other terms
     *
     * @return self
     */
    public function setTtc070($ttc070)
    {
        if (is_null($ttc070)) {
            throw new \InvalidArgumentException('non-nullable ttc070 cannot be null');
        }
        $this->container['ttc070'] = $ttc070;

        return $this;
    }

    /**
     * Gets tto074
     *
     * @return float|null
     */
    public function getTto074()
    {
        return $this->container['tto074'];
    }

    /**
     * Sets tto074
     *
     * @param float|null $tto074 Age in months of the most recently reported trade
     *
     * @return self
     */
    public function setTto074($tto074)
    {
        if (is_null($tto074)) {
            throw new \InvalidArgumentException('non-nullable tto074 cannot be null');
        }
        $this->container['tto074'] = $tto074;

        return $this;
    }

    /**
     * Gets tto075
     *
     * @return float|null
     */
    public function getTto075()
    {
        return $this->container['tto075'];
    }

    /**
     * Sets tto075
     *
     * @param float|null $tto075 Age in months of oldest reported trade
     *
     * @return self
     */
    public function setTto075($tto075)
    {
        if (is_null($tto075)) {
            throw new \InvalidArgumentException('non-nullable tto075 cannot be null');
        }
        $this->container['tto075'] = $tto075;

        return $this;
    }

    /**
     * Gets tto076
     *
     * @return float|null
     */
    public function getTto076()
    {
        return $this->container['tto076'];
    }

    /**
     * Sets tto076
     *
     * @param float|null $tto076 Average age in months of trades
     *
     * @return self
     */
    public function setTto076($tto076)
    {
        if (is_null($tto076)) {
            throw new \InvalidArgumentException('non-nullable tto076 cannot be null');
        }
        $this->container['tto076'] = $tto076;

        return $this;
    }

    /**
     * Gets tto077
     *
     * @return float|null
     */
    public function getTto077()
    {
        return $this->container['tto077'];
    }

    /**
     * Sets tto077
     *
     * @param float|null $tto077 Age in months since business first added to Experian file
     *
     * @return self
     */
    public function setTto077($tto077)
    {
        if (is_null($tto077)) {
            throw new \InvalidArgumentException('non-nullable tto077 cannot be null');
        }
        $this->container['tto077'] = $tto077;

        return $this;
    }

    /**
     * Gets ttp079
     *
     * @return float|null
     */
    public function getTtp079()
    {
        return $this->container['ttp079'];
    }

    /**
     * Sets ttp079
     *
     * @param float|null $ttp079 Ratio of Total account balance to Total highest account balance in prior 12 months, for additional trades (leasing, supplemental, telecomm and unknown, etc) reported with 4 months of the profile date
     *
     * @return self
     */
    public function setTtp079($ttp079)
    {
        if (is_null($ttp079)) {
            throw new \InvalidArgumentException('non-nullable ttp079 cannot be null');
        }
        $this->container['ttp079'] = $ttp079;

        return $this;
    }

    /**
     * Gets ttp080
     *
     * @return float|null
     */
    public function getTtp080()
    {
        return $this->container['ttp080'];
    }

    /**
     * Sets ttp080
     *
     * @param float|null $ttp080 Ratio of Total account balance to Total highest account balance in prior 12 months, for continuous, new, and additional trades that are newly reported within six months of the profile date
     *
     * @return self
     */
    public function setTtp080($ttp080)
    {
        if (is_null($ttp080)) {
            throw new \InvalidArgumentException('non-nullable ttp080 cannot be null');
        }
        $this->container['ttp080'] = $ttp080;

        return $this;
    }

    /**
     * Gets ttp084
     *
     * @return float|null
     */
    public function getTtp084()
    {
        return $this->container['ttp084'];
    }

    /**
     * Sets ttp084
     *
     * @param float|null $ttp084 Percentage of Total trades balance to Total trades Total highest balance in past 12 months
     *
     * @return self
     */
    public function setTtp084($ttp084)
    {
        if (is_null($ttp084)) {
            throw new \InvalidArgumentException('non-nullable ttp084 cannot be null');
        }
        $this->container['ttp084'] = $ttp084;

        return $this;
    }

    /**
     * Gets txb001
     *
     * @return float|null
     */
    public function getTxb001()
    {
        return $this->container['txb001'];
    }

    /**
     * Sets txb001
     *
     * @param float|null $txb001 Total amount of tax lien filed within 12 months of profile date
     *
     * @return self
     */
    public function setTxb001($txb001)
    {
        if (is_null($txb001)) {
            throw new \InvalidArgumentException('non-nullable txb001 cannot be null');
        }
        $this->container['txb001'] = $txb001;

        return $this;
    }

    /**
     * Gets txb002
     *
     * @return float|null
     */
    public function getTxb002()
    {
        return $this->container['txb002'];
    }

    /**
     * Sets txb002
     *
     * @param float|null $txb002 Total amount of tax lien filed within 24 months of profile date
     *
     * @return self
     */
    public function setTxb002($txb002)
    {
        if (is_null($txb002)) {
            throw new \InvalidArgumentException('non-nullable txb002 cannot be null');
        }
        $this->container['txb002'] = $txb002;

        return $this;
    }

    /**
     * Gets txb003
     *
     * @return float|null
     */
    public function getTxb003()
    {
        return $this->container['txb003'];
    }

    /**
     * Sets txb003
     *
     * @param float|null $txb003 Total amount of tax lien filed within 6 months of profile date
     *
     * @return self
     */
    public function setTxb003($txb003)
    {
        if (is_null($txb003)) {
            throw new \InvalidArgumentException('non-nullable txb003 cannot be null');
        }
        $this->container['txb003'] = $txb003;

        return $this;
    }

    /**
     * Gets txb004
     *
     * @return float|null
     */
    public function getTxb004()
    {
        return $this->container['txb004'];
    }

    /**
     * Sets txb004
     *
     * @param float|null $txb004 Total liability amount for original tax liens filed
     *
     * @return self
     */
    public function setTxb004($txb004)
    {
        if (is_null($txb004)) {
            throw new \InvalidArgumentException('non-nullable txb004 cannot be null');
        }
        $this->container['txb004'] = $txb004;

        return $this;
    }

    /**
     * Gets txb006
     *
     * @return float|null
     */
    public function getTxb006()
    {
        return $this->container['txb006'];
    }

    /**
     * Sets txb006
     *
     * @param float|null $txb006 Total liability amount for original tax liens non-filed
     *
     * @return self
     */
    public function setTxb006($txb006)
    {
        if (is_null($txb006)) {
            throw new \InvalidArgumentException('non-nullable txb006 cannot be null');
        }
        $this->container['txb006'] = $txb006;

        return $this;
    }

    /**
     * Gets txc007
     *
     * @return float|null
     */
    public function getTxc007()
    {
        return $this->container['txc007'];
    }

    /**
     * Sets txc007
     *
     * @param float|null $txc007 Total number of tax lien filed within 12 months of profile date
     *
     * @return self
     */
    public function setTxc007($txc007)
    {
        if (is_null($txc007)) {
            throw new \InvalidArgumentException('non-nullable txc007 cannot be null');
        }
        $this->container['txc007'] = $txc007;

        return $this;
    }

    /**
     * Gets txc009
     *
     * @return float|null
     */
    public function getTxc009()
    {
        return $this->container['txc009'];
    }

    /**
     * Sets txc009
     *
     * @param float|null $txc009 Total number of tax lien filed within 6 months of profile date
     *
     * @return self
     */
    public function setTxc009($txc009)
    {
        if (is_null($txc009)) {
            throw new \InvalidArgumentException('non-nullable txc009 cannot be null');
        }
        $this->container['txc009'] = $txc009;

        return $this;
    }

    /**
     * Gets txc010
     *
     * @return float|null
     */
    public function getTxc010()
    {
        return $this->container['txc010'];
    }

    /**
     * Sets txc010
     *
     * @param float|null $txc010 Total number of original tax liens filed
     *
     * @return self
     */
    public function setTxc010($txc010)
    {
        if (is_null($txc010)) {
            throw new \InvalidArgumentException('non-nullable txc010 cannot be null');
        }
        $this->container['txc010'] = $txc010;

        return $this;
    }

    /**
     * Gets txc011
     *
     * @return float|null
     */
    public function getTxc011()
    {
        return $this->container['txc011'];
    }

    /**
     * Sets txc011
     *
     * @param float|null $txc011 Total number of tax liens filed within the last 24 months of profile date
     *
     * @return self
     */
    public function setTxc011($txc011)
    {
        if (is_null($txc011)) {
            throw new \InvalidArgumentException('non-nullable txc011 cannot be null');
        }
        $this->container['txc011'] = $txc011;

        return $this;
    }

    /**
     * Gets txc012
     *
     * @return float|null
     */
    public function getTxc012()
    {
        return $this->container['txc012'];
    }

    /**
     * Sets txc012
     *
     * @param float|null $txc012 Total number of tax liens non-filed
     *
     * @return self
     */
    public function setTxc012($txc012)
    {
        if (is_null($txc012)) {
            throw new \InvalidArgumentException('non-nullable txc012 cannot be null');
        }
        $this->container['txc012'] = $txc012;

        return $this;
    }

    /**
     * Gets txo013
     *
     * @return float|null
     */
    public function getTxo013()
    {
        return $this->container['txo013'];
    }

    /**
     * Sets txo013
     *
     * @param float|null $txo013 Age in months of most recent tax lien filed
     *
     * @return self
     */
    public function setTxo013($txo013)
    {
        if (is_null($txo013)) {
            throw new \InvalidArgumentException('non-nullable txo013 cannot be null');
        }
        $this->container['txo013'] = $txo013;

        return $this;
    }

    /**
     * Gets txo014
     *
     * @return float|null
     */
    public function getTxo014()
    {
        return $this->container['txo014'];
    }

    /**
     * Sets txo014
     *
     * @param float|null $txo014 Age in months of most recent tax lien non-filed
     *
     * @return self
     */
    public function setTxo014($txo014)
    {
        if (is_null($txo014)) {
            throw new \InvalidArgumentException('non-nullable txo014 cannot be null');
        }
        $this->container['txo014'] = $txo014;

        return $this;
    }

    /**
     * Gets txp015
     *
     * @return float|null
     */
    public function getTxp015()
    {
        return $this->container['txp015'];
    }

    /**
     * Sets txp015
     *
     * @param float|null $txp015 Percentage of Total tax lien amount filed with 12 months to Total balance
     *
     * @return self
     */
    public function setTxp015($txp015)
    {
        if (is_null($txp015)) {
            throw new \InvalidArgumentException('non-nullable txp015 cannot be null');
        }
        $this->container['txp015'] = $txp015;

        return $this;
    }

    /**
     * Gets txp016
     *
     * @return float|null
     */
    public function getTxp016()
    {
        return $this->container['txp016'];
    }

    /**
     * Sets txp016
     *
     * @param float|null $txp016 Percentage of Total tax lien amount filed with 24 months to Total balance
     *
     * @return self
     */
    public function setTxp016($txp016)
    {
        if (is_null($txp016)) {
            throw new \InvalidArgumentException('non-nullable txp016 cannot be null');
        }
        $this->container['txp016'] = $txp016;

        return $this;
    }

    /**
     * Gets txp017
     *
     * @return float|null
     */
    public function getTxp017()
    {
        return $this->container['txp017'];
    }

    /**
     * Sets txp017
     *
     * @param float|null $txp017 Percentage of Total tax lien amount filed with 6 months to Total balance
     *
     * @return self
     */
    public function setTxp017($txp017)
    {
        if (is_null($txp017)) {
            throw new \InvalidArgumentException('non-nullable txp017 cannot be null');
        }
        $this->container['txp017'] = $txp017;

        return $this;
    }

    /**
     * Gets ucc001
     *
     * @return float|null
     */
    public function getUcc001()
    {
        return $this->container['ucc001'];
    }

    /**
     * Sets ucc001
     *
     * @param float|null $ucc001 Total number of UCC filings - detail
     *
     * @return self
     */
    public function setUcc001($ucc001)
    {
        if (is_null($ucc001)) {
            throw new \InvalidArgumentException('non-nullable ucc001 cannot be null');
        }
        $this->container['ucc001'] = $ucc001;

        return $this;
    }

    /**
     * Gets ucc002
     *
     * @return float|null
     */
    public function getUcc002()
    {
        return $this->container['ucc002'];
    }

    /**
     * Sets ucc002
     *
     * @param float|null $ucc002 Total number of UCC filings - summary
     *
     * @return self
     */
    public function setUcc002($ucc002)
    {
        if (is_null($ucc002)) {
            throw new \InvalidArgumentException('non-nullable ucc002 cannot be null');
        }
        $this->container['ucc002'] = $ucc002;

        return $this;
    }

    /**
     * Gets ucc003
     *
     * @return float|null
     */
    public function getUcc003()
    {
        return $this->container['ucc003'];
    }

    /**
     * Sets ucc003
     *
     * @param float|null $ucc003 Total number of unsatisfied UCC filings within the last 24 months of profile date
     *
     * @return self
     */
    public function setUcc003($ucc003)
    {
        if (is_null($ucc003)) {
            throw new \InvalidArgumentException('non-nullable ucc003 cannot be null');
        }
        $this->container['ucc003'] = $ucc003;

        return $this;
    }

    /**
     * Gets ucc004
     *
     * @return float|null
     */
    public function getUcc004()
    {
        return $this->container['ucc004'];
    }

    /**
     * Sets ucc004
     *
     * @param float|null $ucc004 Total number of UCC original five-year filings within the last 24 months of profile date
     *
     * @return self
     */
    public function setUcc004($ucc004)
    {
        if (is_null($ucc004)) {
            throw new \InvalidArgumentException('non-nullable ucc004 cannot be null');
        }
        $this->container['ucc004'] = $ucc004;

        return $this;
    }

    /**
     * Gets ucc005
     *
     * @return float|null
     */
    public function getUcc005()
    {
        return $this->container['ucc005'];
    }

    /**
     * Sets ucc005
     *
     * @param float|null $ucc005 Total number of UCC original filings
     *
     * @return self
     */
    public function setUcc005($ucc005)
    {
        if (is_null($ucc005)) {
            throw new \InvalidArgumentException('non-nullable ucc005 cannot be null');
        }
        $this->container['ucc005'] = $ucc005;

        return $this;
    }

    /**
     * Gets ucc006
     *
     * @return float|null
     */
    public function getUcc006()
    {
        return $this->container['ucc006'];
    }

    /**
     * Sets ucc006
     *
     * @param float|null $ucc006 Total number of UCC original five-year filings
     *
     * @return self
     */
    public function setUcc006($ucc006)
    {
        if (is_null($ucc006)) {
            throw new \InvalidArgumentException('non-nullable ucc006 cannot be null');
        }
        $this->container['ucc006'] = $ucc006;

        return $this;
    }

    /**
     * Gets ucc007
     *
     * @return float|null
     */
    public function getUcc007()
    {
        return $this->container['ucc007'];
    }

    /**
     * Sets ucc007
     *
     * @param float|null $ucc007 Total number of UCC amended filings
     *
     * @return self
     */
    public function setUcc007($ucc007)
    {
        if (is_null($ucc007)) {
            throw new \InvalidArgumentException('non-nullable ucc007 cannot be null');
        }
        $this->container['ucc007'] = $ucc007;

        return $this;
    }

    /**
     * Gets ucc008
     *
     * @return float|null
     */
    public function getUcc008()
    {
        return $this->container['ucc008'];
    }

    /**
     * Sets ucc008
     *
     * @param float|null $ucc008 Total number of UCC assigned filings
     *
     * @return self
     */
    public function setUcc008($ucc008)
    {
        if (is_null($ucc008)) {
            throw new \InvalidArgumentException('non-nullable ucc008 cannot be null');
        }
        $this->container['ucc008'] = $ucc008;

        return $this;
    }

    /**
     * Gets ucc009
     *
     * @return float|null
     */
    public function getUcc009()
    {
        return $this->container['ucc009'];
    }

    /**
     * Sets ucc009
     *
     * @param float|null $ucc009 Total number of UCC partial release filings
     *
     * @return self
     */
    public function setUcc009($ucc009)
    {
        if (is_null($ucc009)) {
            throw new \InvalidArgumentException('non-nullable ucc009 cannot be null');
        }
        $this->container['ucc009'] = $ucc009;

        return $this;
    }

    /**
     * Gets ucc010
     *
     * @return float|null
     */
    public function getUcc010()
    {
        return $this->container['ucc010'];
    }

    /**
     * Sets ucc010
     *
     * @param float|null $ucc010 Total number of UCC full release filings
     *
     * @return self
     */
    public function setUcc010($ucc010)
    {
        if (is_null($ucc010)) {
            throw new \InvalidArgumentException('non-nullable ucc010 cannot be null');
        }
        $this->container['ucc010'] = $ucc010;

        return $this;
    }

    /**
     * Gets ucc011
     *
     * @return float|null
     */
    public function getUcc011()
    {
        return $this->container['ucc011'];
    }

    /**
     * Sets ucc011
     *
     * @param float|null $ucc011 Total number of UCC released filings
     *
     * @return self
     */
    public function setUcc011($ucc011)
    {
        if (is_null($ucc011)) {
            throw new \InvalidArgumentException('non-nullable ucc011 cannot be null');
        }
        $this->container['ucc011'] = $ucc011;

        return $this;
    }

    /**
     * Gets ucc012
     *
     * @return float|null
     */
    public function getUcc012()
    {
        return $this->container['ucc012'];
    }

    /**
     * Sets ucc012
     *
     * @param float|null $ucc012 Total number of UCC terminated filings
     *
     * @return self
     */
    public function setUcc012($ucc012)
    {
        if (is_null($ucc012)) {
            throw new \InvalidArgumentException('non-nullable ucc012 cannot be null');
        }
        $this->container['ucc012'] = $ucc012;

        return $this;
    }

    /**
     * Gets ucc013
     *
     * @return float|null
     */
    public function getUcc013()
    {
        return $this->container['ucc013'];
    }

    /**
     * Sets ucc013
     *
     * @param float|null $ucc013 Total number of UCC continued filings
     *
     * @return self
     */
    public function setUcc013($ucc013)
    {
        if (is_null($ucc013)) {
            throw new \InvalidArgumentException('non-nullable ucc013 cannot be null');
        }
        $this->container['ucc013'] = $ucc013;

        return $this;
    }

    /**
     * Gets ucc014
     *
     * @return float|null
     */
    public function getUcc014()
    {
        return $this->container['ucc014'];
    }

    /**
     * Sets ucc014
     *
     * @param float|null $ucc014 Total number of UCC original ten-year filings
     *
     * @return self
     */
    public function setUcc014($ucc014)
    {
        if (is_null($ucc014)) {
            throw new \InvalidArgumentException('non-nullable ucc014 cannot be null');
        }
        $this->container['ucc014'] = $ucc014;

        return $this;
    }

    /**
     * Gets ucc015
     *
     * @return float|null
     */
    public function getUcc015()
    {
        return $this->container['ucc015'];
    }

    /**
     * Sets ucc015
     *
     * @param float|null $ucc015 Total number of original UCC filings pledging derogatory collateral
     *
     * @return self
     */
    public function setUcc015($ucc015)
    {
        if (is_null($ucc015)) {
            throw new \InvalidArgumentException('non-nullable ucc015 cannot be null');
        }
        $this->container['ucc015'] = $ucc015;

        return $this;
    }

    /**
     * Gets ucc016
     *
     * @return float|null
     */
    public function getUcc016()
    {
        return $this->container['ucc016'];
    }

    /**
     * Sets ucc016
     *
     * @param float|null $ucc016 Total number of original UCC filings pledging derogatory collateral within 24 months of the profile date
     *
     * @return self
     */
    public function setUcc016($ucc016)
    {
        if (is_null($ucc016)) {
            throw new \InvalidArgumentException('non-nullable ucc016 cannot be null');
        }
        $this->container['ucc016'] = $ucc016;

        return $this;
    }

    /**
     * Gets dmo004
     *
     * @return string|null
     */
    public function getDmo004()
    {
        return $this->container['dmo004'];
    }

    /**
     * Sets dmo004
     *
     * @param string|null $dmo004 Employee size code: A= 1-4, B = 5-9, C = 10-19, D = 20-49, E = 50- 99, F = 100-249, G = 250-499, H = 500-999, I = Over 1000
     *
     * @return self
     */
    public function setDmo004($dmo004)
    {
        if (is_null($dmo004)) {
            throw new \InvalidArgumentException('non-nullable dmo004 cannot be null');
        }
        if ((mb_strlen($dmo004) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dmo004 when calling BizAggregates., must be smaller than or equal to 1.');
        }

        $this->container['dmo004'] = $dmo004;

        return $this;
    }

    /**
     * Gets dmo014
     *
     * @return string|null
     */
    public function getDmo014()
    {
        return $this->container['dmo014'];
    }

    /**
     * Sets dmo014
     *
     * @param string|null $dmo014 The type of ownership under which the business is operating. O = Unknown, 1 = Public, 2 = Private, 3 = Foreign, 4 = Non-Profit, 5 = Public Minority, 6 = Private Minority, 7 = Foreign Minority
     *
     * @return self
     */
    public function setDmo014($dmo014)
    {
        if (is_null($dmo014)) {
            throw new \InvalidArgumentException('non-nullable dmo014 cannot be null');
        }
        if ((mb_strlen($dmo014) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dmo014 when calling BizAggregates., must be smaller than or equal to 1.');
        }

        $this->container['dmo014'] = $dmo014;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer|string $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer|string $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer|string $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


