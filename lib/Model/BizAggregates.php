<?php
/**
 * BizAggregates
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
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code. A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the List of Similars product option to search for a business, or a Name/Address request for automated matching.</p> <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
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
 * BizAggregates Class Doc Comment
 *
 * @category Class
 * @description Object containing business aggregates (BizAggs)
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BizAggregates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BizAggregates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['atc039'] = isset($data['atc039']) ? $data['atc039'] : null;
        $this->container['ctb019'] = isset($data['ctb019']) ? $data['ctb019'] : null;
        $this->container['jdc008'] = isset($data['jdc008']) ? $data['jdc008'] : null;
        $this->container['ntb019'] = isset($data['ntb019']) ? $data['ntb019'] : null;
        $this->container['ntc032'] = isset($data['ntc032']) ? $data['ntc032'] : null;
        $this->container['otb001'] = isset($data['otb001']) ? $data['otb001'] : null;
        $this->container['otc006'] = isset($data['otc006']) ? $data['otc006'] : null;
        $this->container['rtb019'] = isset($data['rtb019']) ? $data['rtb019'] : null;
        $this->container['rtc048'] = isset($data['rtc048']) ? $data['rtc048'] : null;
        $this->container['ttb021'] = isset($data['ttb021']) ? $data['ttb021'] : null;
        $this->container['ttb022'] = isset($data['ttb022']) ? $data['ttb022'] : null;
        $this->container['ttb028'] = isset($data['ttb028']) ? $data['ttb028'] : null;
        $this->container['ttb029'] = isset($data['ttb029']) ? $data['ttb029'] : null;
        $this->container['ttb030'] = isset($data['ttb030']) ? $data['ttb030'] : null;
        $this->container['ttb031'] = isset($data['ttb031']) ? $data['ttb031'] : null;
        $this->container['ttb032'] = isset($data['ttb032']) ? $data['ttb032'] : null;
        $this->container['ttc050'] = isset($data['ttc050']) ? $data['ttc050'] : null;
        $this->container['ttp085'] = isset($data['ttp085']) ? $data['ttp085'] : null;
        $this->container['ttp086'] = isset($data['ttp086']) ? $data['ttp086'] : null;
        $this->container['txb005'] = isset($data['txb005']) ? $data['txb005'] : null;
        $this->container['txc008'] = isset($data['txc008']) ? $data['txc008'] : null;
        $this->container['acc001'] = isset($data['acc001']) ? $data['acc001'] : null;
        $this->container['acc002'] = isset($data['acc002']) ? $data['acc002'] : null;
        $this->container['acc003'] = isset($data['acc003']) ? $data['acc003'] : null;
        $this->container['acc004'] = isset($data['acc004']) ? $data['acc004'] : null;
        $this->container['acc005'] = isset($data['acc005']) ? $data['acc005'] : null;
        $this->container['acc006'] = isset($data['acc006']) ? $data['acc006'] : null;
        $this->container['acc007'] = isset($data['acc007']) ? $data['acc007'] : null;
        $this->container['acc008'] = isset($data['acc008']) ? $data['acc008'] : null;
        $this->container['atb001'] = isset($data['atb001']) ? $data['atb001'] : null;
        $this->container['atb002'] = isset($data['atb002']) ? $data['atb002'] : null;
        $this->container['atb003'] = isset($data['atb003']) ? $data['atb003'] : null;
        $this->container['atb004'] = isset($data['atb004']) ? $data['atb004'] : null;
        $this->container['atb005'] = isset($data['atb005']) ? $data['atb005'] : null;
        $this->container['atb006'] = isset($data['atb006']) ? $data['atb006'] : null;
        $this->container['atb007'] = isset($data['atb007']) ? $data['atb007'] : null;
        $this->container['atb008'] = isset($data['atb008']) ? $data['atb008'] : null;
        $this->container['atb009'] = isset($data['atb009']) ? $data['atb009'] : null;
        $this->container['atb010'] = isset($data['atb010']) ? $data['atb010'] : null;
        $this->container['atb011'] = isset($data['atb011']) ? $data['atb011'] : null;
        $this->container['atb012'] = isset($data['atb012']) ? $data['atb012'] : null;
        $this->container['atb013'] = isset($data['atb013']) ? $data['atb013'] : null;
        $this->container['atb014'] = isset($data['atb014']) ? $data['atb014'] : null;
        $this->container['atb015'] = isset($data['atb015']) ? $data['atb015'] : null;
        $this->container['atb016'] = isset($data['atb016']) ? $data['atb016'] : null;
        $this->container['atb017'] = isset($data['atb017']) ? $data['atb017'] : null;
        $this->container['atb018'] = isset($data['atb018']) ? $data['atb018'] : null;
        $this->container['atb019'] = isset($data['atb019']) ? $data['atb019'] : null;
        $this->container['atc020'] = isset($data['atc020']) ? $data['atc020'] : null;
        $this->container['atc021'] = isset($data['atc021']) ? $data['atc021'] : null;
        $this->container['atc022'] = isset($data['atc022']) ? $data['atc022'] : null;
        $this->container['atc023'] = isset($data['atc023']) ? $data['atc023'] : null;
        $this->container['atc024'] = isset($data['atc024']) ? $data['atc024'] : null;
        $this->container['atc025'] = isset($data['atc025']) ? $data['atc025'] : null;
        $this->container['atc026'] = isset($data['atc026']) ? $data['atc026'] : null;
        $this->container['atc027'] = isset($data['atc027']) ? $data['atc027'] : null;
        $this->container['atc028'] = isset($data['atc028']) ? $data['atc028'] : null;
        $this->container['atc029'] = isset($data['atc029']) ? $data['atc029'] : null;
        $this->container['atc030'] = isset($data['atc030']) ? $data['atc030'] : null;
        $this->container['atc031'] = isset($data['atc031']) ? $data['atc031'] : null;
        $this->container['atc032'] = isset($data['atc032']) ? $data['atc032'] : null;
        $this->container['atd034'] = isset($data['atd034']) ? $data['atd034'] : null;
        $this->container['atd035'] = isset($data['atd035']) ? $data['atd035'] : null;
        $this->container['atp036'] = isset($data['atp036']) ? $data['atp036'] : null;
        $this->container['atp037'] = isset($data['atp037']) ? $data['atp037'] : null;
        $this->container['atp038'] = isset($data['atp038']) ? $data['atp038'] : null;
        $this->container['bkb001'] = isset($data['bkb001']) ? $data['bkb001'] : null;
        $this->container['bkb002'] = isset($data['bkb002']) ? $data['bkb002'] : null;
        $this->container['bkb003'] = isset($data['bkb003']) ? $data['bkb003'] : null;
        $this->container['bkc004'] = isset($data['bkc004']) ? $data['bkc004'] : null;
        $this->container['bkc005'] = isset($data['bkc005']) ? $data['bkc005'] : null;
        $this->container['bkc006'] = isset($data['bkc006']) ? $data['bkc006'] : null;
        $this->container['bkc007'] = isset($data['bkc007']) ? $data['bkc007'] : null;
        $this->container['bkc008'] = isset($data['bkc008']) ? $data['bkc008'] : null;
        $this->container['bko009'] = isset($data['bko009']) ? $data['bko009'] : null;
        $this->container['bko010'] = isset($data['bko010']) ? $data['bko010'] : null;
        $this->container['bko011'] = isset($data['bko011']) ? $data['bko011'] : null;
        $this->container['brb001'] = isset($data['brb001']) ? $data['brb001'] : null;
        $this->container['brb002'] = isset($data['brb002']) ? $data['brb002'] : null;
        $this->container['brb003'] = isset($data['brb003']) ? $data['brb003'] : null;
        $this->container['brb004'] = isset($data['brb004']) ? $data['brb004'] : null;
        $this->container['brb005'] = isset($data['brb005']) ? $data['brb005'] : null;
        $this->container['brb006'] = isset($data['brb006']) ? $data['brb006'] : null;
        $this->container['brb007'] = isset($data['brb007']) ? $data['brb007'] : null;
        $this->container['brc008'] = isset($data['brc008']) ? $data['brc008'] : null;
        $this->container['brc009'] = isset($data['brc009']) ? $data['brc009'] : null;
        $this->container['brc010'] = isset($data['brc010']) ? $data['brc010'] : null;
        $this->container['brc011'] = isset($data['brc011']) ? $data['brc011'] : null;
        $this->container['brc012'] = isset($data['brc012']) ? $data['brc012'] : null;
        $this->container['brc013'] = isset($data['brc013']) ? $data['brc013'] : null;
        $this->container['brc014'] = isset($data['brc014']) ? $data['brc014'] : null;
        $this->container['bro015'] = isset($data['bro015']) ? $data['bro015'] : null;
        $this->container['bro016'] = isset($data['bro016']) ? $data['bro016'] : null;
        $this->container['bro017'] = isset($data['bro017']) ? $data['bro017'] : null;
        $this->container['brp018'] = isset($data['brp018']) ? $data['brp018'] : null;
        $this->container['brp019'] = isset($data['brp019']) ? $data['brp019'] : null;
        $this->container['brp020'] = isset($data['brp020']) ? $data['brp020'] : null;
        $this->container['brp021'] = isset($data['brp021']) ? $data['brp021'] : null;
        $this->container['brp022'] = isset($data['brp022']) ? $data['brp022'] : null;
        $this->container['brp023'] = isset($data['brp023']) ? $data['brp023'] : null;
        $this->container['clb001'] = isset($data['clb001']) ? $data['clb001'] : null;
        $this->container['clb002'] = isset($data['clb002']) ? $data['clb002'] : null;
        $this->container['clb003'] = isset($data['clb003']) ? $data['clb003'] : null;
        $this->container['clb004'] = isset($data['clb004']) ? $data['clb004'] : null;
        $this->container['clb005'] = isset($data['clb005']) ? $data['clb005'] : null;
        $this->container['clc006'] = isset($data['clc006']) ? $data['clc006'] : null;
        $this->container['clc007'] = isset($data['clc007']) ? $data['clc007'] : null;
        $this->container['clc008'] = isset($data['clc008']) ? $data['clc008'] : null;
        $this->container['clc009'] = isset($data['clc009']) ? $data['clc009'] : null;
        $this->container['clc010'] = isset($data['clc010']) ? $data['clc010'] : null;
        $this->container['clc011'] = isset($data['clc011']) ? $data['clc011'] : null;
        $this->container['clc012'] = isset($data['clc012']) ? $data['clc012'] : null;
        $this->container['clc013'] = isset($data['clc013']) ? $data['clc013'] : null;
        $this->container['clo014'] = isset($data['clo014']) ? $data['clo014'] : null;
        $this->container['clo015'] = isset($data['clo015']) ? $data['clo015'] : null;
        $this->container['clp016'] = isset($data['clp016']) ? $data['clp016'] : null;
        $this->container['clp017'] = isset($data['clp017']) ? $data['clp017'] : null;
        $this->container['clp018'] = isset($data['clp018']) ? $data['clp018'] : null;
        $this->container['clp019'] = isset($data['clp019']) ? $data['clp019'] : null;
        $this->container['ctb001'] = isset($data['ctb001']) ? $data['ctb001'] : null;
        $this->container['ctb002'] = isset($data['ctb002']) ? $data['ctb002'] : null;
        $this->container['ctb003'] = isset($data['ctb003']) ? $data['ctb003'] : null;
        $this->container['ctb004'] = isset($data['ctb004']) ? $data['ctb004'] : null;
        $this->container['ctb005'] = isset($data['ctb005']) ? $data['ctb005'] : null;
        $this->container['ctb006'] = isset($data['ctb006']) ? $data['ctb006'] : null;
        $this->container['ctb007'] = isset($data['ctb007']) ? $data['ctb007'] : null;
        $this->container['ctb008'] = isset($data['ctb008']) ? $data['ctb008'] : null;
        $this->container['ctb009'] = isset($data['ctb009']) ? $data['ctb009'] : null;
        $this->container['ctb010'] = isset($data['ctb010']) ? $data['ctb010'] : null;
        $this->container['ctb011'] = isset($data['ctb011']) ? $data['ctb011'] : null;
        $this->container['ctb012'] = isset($data['ctb012']) ? $data['ctb012'] : null;
        $this->container['ctb013'] = isset($data['ctb013']) ? $data['ctb013'] : null;
        $this->container['ctb014'] = isset($data['ctb014']) ? $data['ctb014'] : null;
        $this->container['ctb015'] = isset($data['ctb015']) ? $data['ctb015'] : null;
        $this->container['ctb016'] = isset($data['ctb016']) ? $data['ctb016'] : null;
        $this->container['ctb017'] = isset($data['ctb017']) ? $data['ctb017'] : null;
        $this->container['ctb018'] = isset($data['ctb018']) ? $data['ctb018'] : null;
        $this->container['ctc021'] = isset($data['ctc021']) ? $data['ctc021'] : null;
        $this->container['ctc022'] = isset($data['ctc022']) ? $data['ctc022'] : null;
        $this->container['ctc023'] = isset($data['ctc023']) ? $data['ctc023'] : null;
        $this->container['ctc024'] = isset($data['ctc024']) ? $data['ctc024'] : null;
        $this->container['ctc025'] = isset($data['ctc025']) ? $data['ctc025'] : null;
        $this->container['ctc026'] = isset($data['ctc026']) ? $data['ctc026'] : null;
        $this->container['ctc027'] = isset($data['ctc027']) ? $data['ctc027'] : null;
        $this->container['ctc028'] = isset($data['ctc028']) ? $data['ctc028'] : null;
        $this->container['ctc029'] = isset($data['ctc029']) ? $data['ctc029'] : null;
        $this->container['ctc030'] = isset($data['ctc030']) ? $data['ctc030'] : null;
        $this->container['ctc031'] = isset($data['ctc031']) ? $data['ctc031'] : null;
        $this->container['ctc032'] = isset($data['ctc032']) ? $data['ctc032'] : null;
        $this->container['ctc033'] = isset($data['ctc033']) ? $data['ctc033'] : null;
        $this->container['ctc034'] = isset($data['ctc034']) ? $data['ctc034'] : null;
        $this->container['ctc035'] = isset($data['ctc035']) ? $data['ctc035'] : null;
        $this->container['ctc036'] = isset($data['ctc036']) ? $data['ctc036'] : null;
        $this->container['ctd038'] = isset($data['ctd038']) ? $data['ctd038'] : null;
        $this->container['ctp039'] = isset($data['ctp039']) ? $data['ctp039'] : null;
        $this->container['ctp040'] = isset($data['ctp040']) ? $data['ctp040'] : null;
        $this->container['ctp041'] = isset($data['ctp041']) ? $data['ctp041'] : null;
        $this->container['dmo003'] = isset($data['dmo003']) ? $data['dmo003'] : null;
        $this->container['dmo009'] = isset($data['dmo009']) ? $data['dmo009'] : null;
        $this->container['dmo013'] = isset($data['dmo013']) ? $data['dmo013'] : null;
        $this->container['iqc001'] = isset($data['iqc001']) ? $data['iqc001'] : null;
        $this->container['iqc002'] = isset($data['iqc002']) ? $data['iqc002'] : null;
        $this->container['iqc003'] = isset($data['iqc003']) ? $data['iqc003'] : null;
        $this->container['jdb001'] = isset($data['jdb001']) ? $data['jdb001'] : null;
        $this->container['jdb002'] = isset($data['jdb002']) ? $data['jdb002'] : null;
        $this->container['jdb003'] = isset($data['jdb003']) ? $data['jdb003'] : null;
        $this->container['jdb004'] = isset($data['jdb004']) ? $data['jdb004'] : null;
        $this->container['jdb005'] = isset($data['jdb005']) ? $data['jdb005'] : null;
        $this->container['jdb006'] = isset($data['jdb006']) ? $data['jdb006'] : null;
        $this->container['jdc007'] = isset($data['jdc007']) ? $data['jdc007'] : null;
        $this->container['jdc009'] = isset($data['jdc009']) ? $data['jdc009'] : null;
        $this->container['jdc010'] = isset($data['jdc010']) ? $data['jdc010'] : null;
        $this->container['jdc011'] = isset($data['jdc011']) ? $data['jdc011'] : null;
        $this->container['jdc012'] = isset($data['jdc012']) ? $data['jdc012'] : null;
        $this->container['jdo013'] = isset($data['jdo013']) ? $data['jdo013'] : null;
        $this->container['jdo014'] = isset($data['jdo014']) ? $data['jdo014'] : null;
        $this->container['jdp015'] = isset($data['jdp015']) ? $data['jdp015'] : null;
        $this->container['jdp016'] = isset($data['jdp016']) ? $data['jdp016'] : null;
        $this->container['jdp017'] = isset($data['jdp017']) ? $data['jdp017'] : null;
        $this->container['lgc002'] = isset($data['lgc002']) ? $data['lgc002'] : null;
        $this->container['lgc003'] = isset($data['lgc003']) ? $data['lgc003'] : null;
        $this->container['lgc004'] = isset($data['lgc004']) ? $data['lgc004'] : null;
        $this->container['lsb001'] = isset($data['lsb001']) ? $data['lsb001'] : null;
        $this->container['lsb002'] = isset($data['lsb002']) ? $data['lsb002'] : null;
        $this->container['lsb003'] = isset($data['lsb003']) ? $data['lsb003'] : null;
        $this->container['lsb004'] = isset($data['lsb004']) ? $data['lsb004'] : null;
        $this->container['lsb005'] = isset($data['lsb005']) ? $data['lsb005'] : null;
        $this->container['lsb006'] = isset($data['lsb006']) ? $data['lsb006'] : null;
        $this->container['lsb007'] = isset($data['lsb007']) ? $data['lsb007'] : null;
        $this->container['lsb008'] = isset($data['lsb008']) ? $data['lsb008'] : null;
        $this->container['lsb009'] = isset($data['lsb009']) ? $data['lsb009'] : null;
        $this->container['lsc010'] = isset($data['lsc010']) ? $data['lsc010'] : null;
        $this->container['lsc011'] = isset($data['lsc011']) ? $data['lsc011'] : null;
        $this->container['lsc012'] = isset($data['lsc012']) ? $data['lsc012'] : null;
        $this->container['lsc013'] = isset($data['lsc013']) ? $data['lsc013'] : null;
        $this->container['lsc014'] = isset($data['lsc014']) ? $data['lsc014'] : null;
        $this->container['lsc015'] = isset($data['lsc015']) ? $data['lsc015'] : null;
        $this->container['lsc016'] = isset($data['lsc016']) ? $data['lsc016'] : null;
        $this->container['lsc017'] = isset($data['lsc017']) ? $data['lsc017'] : null;
        $this->container['lsc018'] = isset($data['lsc018']) ? $data['lsc018'] : null;
        $this->container['lsc019'] = isset($data['lsc019']) ? $data['lsc019'] : null;
        $this->container['lsc020'] = isset($data['lsc020']) ? $data['lsc020'] : null;
        $this->container['lsc021'] = isset($data['lsc021']) ? $data['lsc021'] : null;
        $this->container['lsc022'] = isset($data['lsc022']) ? $data['lsc022'] : null;
        $this->container['lsc023'] = isset($data['lsc023']) ? $data['lsc023'] : null;
        $this->container['lsc024'] = isset($data['lsc024']) ? $data['lsc024'] : null;
        $this->container['lsc025'] = isset($data['lsc025']) ? $data['lsc025'] : null;
        $this->container['lsc026'] = isset($data['lsc026']) ? $data['lsc026'] : null;
        $this->container['lsc027'] = isset($data['lsc027']) ? $data['lsc027'] : null;
        $this->container['lsc028'] = isset($data['lsc028']) ? $data['lsc028'] : null;
        $this->container['lsc029'] = isset($data['lsc029']) ? $data['lsc029'] : null;
        $this->container['lsc030'] = isset($data['lsc030']) ? $data['lsc030'] : null;
        $this->container['lsc031'] = isset($data['lsc031']) ? $data['lsc031'] : null;
        $this->container['lsc032'] = isset($data['lsc032']) ? $data['lsc032'] : null;
        $this->container['lsc033'] = isset($data['lsc033']) ? $data['lsc033'] : null;
        $this->container['lsp034'] = isset($data['lsp034']) ? $data['lsp034'] : null;
        $this->container['lsp035'] = isset($data['lsp035']) ? $data['lsp035'] : null;
        $this->container['ntb001'] = isset($data['ntb001']) ? $data['ntb001'] : null;
        $this->container['ntb002'] = isset($data['ntb002']) ? $data['ntb002'] : null;
        $this->container['ntb003'] = isset($data['ntb003']) ? $data['ntb003'] : null;
        $this->container['ntb004'] = isset($data['ntb004']) ? $data['ntb004'] : null;
        $this->container['ntb005'] = isset($data['ntb005']) ? $data['ntb005'] : null;
        $this->container['ntb006'] = isset($data['ntb006']) ? $data['ntb006'] : null;
        $this->container['ntb007'] = isset($data['ntb007']) ? $data['ntb007'] : null;
        $this->container['ntb008'] = isset($data['ntb008']) ? $data['ntb008'] : null;
        $this->container['ntb009'] = isset($data['ntb009']) ? $data['ntb009'] : null;
        $this->container['ntb010'] = isset($data['ntb010']) ? $data['ntb010'] : null;
        $this->container['ntb011'] = isset($data['ntb011']) ? $data['ntb011'] : null;
        $this->container['ntb012'] = isset($data['ntb012']) ? $data['ntb012'] : null;
        $this->container['ntb013'] = isset($data['ntb013']) ? $data['ntb013'] : null;
        $this->container['ntb014'] = isset($data['ntb014']) ? $data['ntb014'] : null;
        $this->container['ntb015'] = isset($data['ntb015']) ? $data['ntb015'] : null;
        $this->container['ntb016'] = isset($data['ntb016']) ? $data['ntb016'] : null;
        $this->container['ntb017'] = isset($data['ntb017']) ? $data['ntb017'] : null;
        $this->container['ntb018'] = isset($data['ntb018']) ? $data['ntb018'] : null;
        $this->container['ntc020'] = isset($data['ntc020']) ? $data['ntc020'] : null;
        $this->container['ntc021'] = isset($data['ntc021']) ? $data['ntc021'] : null;
        $this->container['ntc022'] = isset($data['ntc022']) ? $data['ntc022'] : null;
        $this->container['ntc023'] = isset($data['ntc023']) ? $data['ntc023'] : null;
        $this->container['ntc024'] = isset($data['ntc024']) ? $data['ntc024'] : null;
        $this->container['ntc025'] = isset($data['ntc025']) ? $data['ntc025'] : null;
        $this->container['ntc026'] = isset($data['ntc026']) ? $data['ntc026'] : null;
        $this->container['ntc027'] = isset($data['ntc027']) ? $data['ntc027'] : null;
        $this->container['ntc028'] = isset($data['ntc028']) ? $data['ntc028'] : null;
        $this->container['ntc029'] = isset($data['ntc029']) ? $data['ntc029'] : null;
        $this->container['ntc030'] = isset($data['ntc030']) ? $data['ntc030'] : null;
        $this->container['ntc031'] = isset($data['ntc031']) ? $data['ntc031'] : null;
        $this->container['ntd034'] = isset($data['ntd034']) ? $data['ntd034'] : null;
        $this->container['ntd035'] = isset($data['ntd035']) ? $data['ntd035'] : null;
        $this->container['ntp036'] = isset($data['ntp036']) ? $data['ntp036'] : null;
        $this->container['ntp037'] = isset($data['ntp037']) ? $data['ntp037'] : null;
        $this->container['ntp038'] = isset($data['ntp038']) ? $data['ntp038'] : null;
        $this->container['ntp039'] = isset($data['ntp039']) ? $data['ntp039'] : null;
        $this->container['otb002'] = isset($data['otb002']) ? $data['otb002'] : null;
        $this->container['otb003'] = isset($data['otb003']) ? $data['otb003'] : null;
        $this->container['otb004'] = isset($data['otb004']) ? $data['otb004'] : null;
        $this->container['otb005'] = isset($data['otb005']) ? $data['otb005'] : null;
        $this->container['otc007'] = isset($data['otc007']) ? $data['otc007'] : null;
        $this->container['otc008'] = isset($data['otc008']) ? $data['otc008'] : null;
        $this->container['otc009'] = isset($data['otc009']) ? $data['otc009'] : null;
        $this->container['otc010'] = isset($data['otc010']) ? $data['otc010'] : null;
        $this->container['otc011'] = isset($data['otc011']) ? $data['otc011'] : null;
        $this->container['otd012'] = isset($data['otd012']) ? $data['otd012'] : null;
        $this->container['otd013'] = isset($data['otd013']) ? $data['otd013'] : null;
        $this->container['otp014'] = isset($data['otp014']) ? $data['otp014'] : null;
        $this->container['otp015'] = isset($data['otp015']) ? $data['otp015'] : null;
        $this->container['otp016'] = isset($data['otp016']) ? $data['otp016'] : null;
        $this->container['otp017'] = isset($data['otp017']) ? $data['otp017'] : null;
        $this->container['otp018'] = isset($data['otp018']) ? $data['otp018'] : null;
        $this->container['otp019'] = isset($data['otp019']) ? $data['otp019'] : null;
        $this->container['otp020'] = isset($data['otp020']) ? $data['otp020'] : null;
        $this->container['otp021'] = isset($data['otp021']) ? $data['otp021'] : null;
        $this->container['pro001'] = isset($data['pro001']) ? $data['pro001'] : null;
        $this->container['pro002'] = isset($data['pro002']) ? $data['pro002'] : null;
        $this->container['pro003'] = isset($data['pro003']) ? $data['pro003'] : null;
        $this->container['rtb001'] = isset($data['rtb001']) ? $data['rtb001'] : null;
        $this->container['rtb002'] = isset($data['rtb002']) ? $data['rtb002'] : null;
        $this->container['rtb003'] = isset($data['rtb003']) ? $data['rtb003'] : null;
        $this->container['rtb004'] = isset($data['rtb004']) ? $data['rtb004'] : null;
        $this->container['rtb005'] = isset($data['rtb005']) ? $data['rtb005'] : null;
        $this->container['rtb006'] = isset($data['rtb006']) ? $data['rtb006'] : null;
        $this->container['rtb007'] = isset($data['rtb007']) ? $data['rtb007'] : null;
        $this->container['rtb008'] = isset($data['rtb008']) ? $data['rtb008'] : null;
        $this->container['rtb009'] = isset($data['rtb009']) ? $data['rtb009'] : null;
        $this->container['rtb010'] = isset($data['rtb010']) ? $data['rtb010'] : null;
        $this->container['rtb011'] = isset($data['rtb011']) ? $data['rtb011'] : null;
        $this->container['rtb012'] = isset($data['rtb012']) ? $data['rtb012'] : null;
        $this->container['rtb013'] = isset($data['rtb013']) ? $data['rtb013'] : null;
        $this->container['rtb014'] = isset($data['rtb014']) ? $data['rtb014'] : null;
        $this->container['rtb015'] = isset($data['rtb015']) ? $data['rtb015'] : null;
        $this->container['rtb016'] = isset($data['rtb016']) ? $data['rtb016'] : null;
        $this->container['rtb017'] = isset($data['rtb017']) ? $data['rtb017'] : null;
        $this->container['rtb018'] = isset($data['rtb018']) ? $data['rtb018'] : null;
        $this->container['rtb020'] = isset($data['rtb020']) ? $data['rtb020'] : null;
        $this->container['rtb021'] = isset($data['rtb021']) ? $data['rtb021'] : null;
        $this->container['rtb022'] = isset($data['rtb022']) ? $data['rtb022'] : null;
        $this->container['rtb023'] = isset($data['rtb023']) ? $data['rtb023'] : null;
        $this->container['rtb024'] = isset($data['rtb024']) ? $data['rtb024'] : null;
        $this->container['rtb025'] = isset($data['rtb025']) ? $data['rtb025'] : null;
        $this->container['rtb026'] = isset($data['rtb026']) ? $data['rtb026'] : null;
        $this->container['rtb027'] = isset($data['rtb027']) ? $data['rtb027'] : null;
        $this->container['rtb028'] = isset($data['rtb028']) ? $data['rtb028'] : null;
        $this->container['rtb029'] = isset($data['rtb029']) ? $data['rtb029'] : null;
        $this->container['rtb030'] = isset($data['rtb030']) ? $data['rtb030'] : null;
        $this->container['rtb031'] = isset($data['rtb031']) ? $data['rtb031'] : null;
        $this->container['rtb032'] = isset($data['rtb032']) ? $data['rtb032'] : null;
        $this->container['rtb033'] = isset($data['rtb033']) ? $data['rtb033'] : null;
        $this->container['rtb034'] = isset($data['rtb034']) ? $data['rtb034'] : null;
        $this->container['rtb035'] = isset($data['rtb035']) ? $data['rtb035'] : null;
        $this->container['rtc036'] = isset($data['rtc036']) ? $data['rtc036'] : null;
        $this->container['rtc037'] = isset($data['rtc037']) ? $data['rtc037'] : null;
        $this->container['rtc038'] = isset($data['rtc038']) ? $data['rtc038'] : null;
        $this->container['rtc039'] = isset($data['rtc039']) ? $data['rtc039'] : null;
        $this->container['rtc040'] = isset($data['rtc040']) ? $data['rtc040'] : null;
        $this->container['rtc041'] = isset($data['rtc041']) ? $data['rtc041'] : null;
        $this->container['rtc042'] = isset($data['rtc042']) ? $data['rtc042'] : null;
        $this->container['rtc043'] = isset($data['rtc043']) ? $data['rtc043'] : null;
        $this->container['rtc044'] = isset($data['rtc044']) ? $data['rtc044'] : null;
        $this->container['rtc045'] = isset($data['rtc045']) ? $data['rtc045'] : null;
        $this->container['rtc046'] = isset($data['rtc046']) ? $data['rtc046'] : null;
        $this->container['rtc047'] = isset($data['rtc047']) ? $data['rtc047'] : null;
        $this->container['rtc049'] = isset($data['rtc049']) ? $data['rtc049'] : null;
        $this->container['rtc050'] = isset($data['rtc050']) ? $data['rtc050'] : null;
        $this->container['rtc051'] = isset($data['rtc051']) ? $data['rtc051'] : null;
        $this->container['rtc052'] = isset($data['rtc052']) ? $data['rtc052'] : null;
        $this->container['rtc053'] = isset($data['rtc053']) ? $data['rtc053'] : null;
        $this->container['rtc054'] = isset($data['rtc054']) ? $data['rtc054'] : null;
        $this->container['rtd059'] = isset($data['rtd059']) ? $data['rtd059'] : null;
        $this->container['rtd060'] = isset($data['rtd060']) ? $data['rtd060'] : null;
        $this->container['rtd061'] = isset($data['rtd061']) ? $data['rtd061'] : null;
        $this->container['rtd062'] = isset($data['rtd062']) ? $data['rtd062'] : null;
        $this->container['rtd063'] = isset($data['rtd063']) ? $data['rtd063'] : null;
        $this->container['rtd064'] = isset($data['rtd064']) ? $data['rtd064'] : null;
        $this->container['rtd065'] = isset($data['rtd065']) ? $data['rtd065'] : null;
        $this->container['rtd067'] = isset($data['rtd067']) ? $data['rtd067'] : null;
        $this->container['rtd068'] = isset($data['rtd068']) ? $data['rtd068'] : null;
        $this->container['rtd069'] = isset($data['rtd069']) ? $data['rtd069'] : null;
        $this->container['rtd070'] = isset($data['rtd070']) ? $data['rtd070'] : null;
        $this->container['rtd071'] = isset($data['rtd071']) ? $data['rtd071'] : null;
        $this->container['rtd072'] = isset($data['rtd072']) ? $data['rtd072'] : null;
        $this->container['rto077'] = isset($data['rto077']) ? $data['rto077'] : null;
        $this->container['rto079'] = isset($data['rto079']) ? $data['rto079'] : null;
        $this->container['rtp081'] = isset($data['rtp081']) ? $data['rtp081'] : null;
        $this->container['rtp082'] = isset($data['rtp082']) ? $data['rtp082'] : null;
        $this->container['rtp083'] = isset($data['rtp083']) ? $data['rtp083'] : null;
        $this->container['rtp086'] = isset($data['rtp086']) ? $data['rtp086'] : null;
        $this->container['ttb001'] = isset($data['ttb001']) ? $data['ttb001'] : null;
        $this->container['ttb002'] = isset($data['ttb002']) ? $data['ttb002'] : null;
        $this->container['ttb003'] = isset($data['ttb003']) ? $data['ttb003'] : null;
        $this->container['ttb004'] = isset($data['ttb004']) ? $data['ttb004'] : null;
        $this->container['ttb005'] = isset($data['ttb005']) ? $data['ttb005'] : null;
        $this->container['ttb006'] = isset($data['ttb006']) ? $data['ttb006'] : null;
        $this->container['ttb007'] = isset($data['ttb007']) ? $data['ttb007'] : null;
        $this->container['ttb008'] = isset($data['ttb008']) ? $data['ttb008'] : null;
        $this->container['ttb009'] = isset($data['ttb009']) ? $data['ttb009'] : null;
        $this->container['ttb010'] = isset($data['ttb010']) ? $data['ttb010'] : null;
        $this->container['ttb011'] = isset($data['ttb011']) ? $data['ttb011'] : null;
        $this->container['ttb012'] = isset($data['ttb012']) ? $data['ttb012'] : null;
        $this->container['ttb013'] = isset($data['ttb013']) ? $data['ttb013'] : null;
        $this->container['ttb014'] = isset($data['ttb014']) ? $data['ttb014'] : null;
        $this->container['ttb015'] = isset($data['ttb015']) ? $data['ttb015'] : null;
        $this->container['ttb016'] = isset($data['ttb016']) ? $data['ttb016'] : null;
        $this->container['ttb017'] = isset($data['ttb017']) ? $data['ttb017'] : null;
        $this->container['ttb018'] = isset($data['ttb018']) ? $data['ttb018'] : null;
        $this->container['ttb019'] = isset($data['ttb019']) ? $data['ttb019'] : null;
        $this->container['ttb020'] = isset($data['ttb020']) ? $data['ttb020'] : null;
        $this->container['ttb023'] = isset($data['ttb023']) ? $data['ttb023'] : null;
        $this->container['ttb024'] = isset($data['ttb024']) ? $data['ttb024'] : null;
        $this->container['ttb025'] = isset($data['ttb025']) ? $data['ttb025'] : null;
        $this->container['ttb026'] = isset($data['ttb026']) ? $data['ttb026'] : null;
        $this->container['ttb027'] = isset($data['ttb027']) ? $data['ttb027'] : null;
        $this->container['ttb033'] = isset($data['ttb033']) ? $data['ttb033'] : null;
        $this->container['ttc035'] = isset($data['ttc035']) ? $data['ttc035'] : null;
        $this->container['ttc036'] = isset($data['ttc036']) ? $data['ttc036'] : null;
        $this->container['ttc037'] = isset($data['ttc037']) ? $data['ttc037'] : null;
        $this->container['ttc038'] = isset($data['ttc038']) ? $data['ttc038'] : null;
        $this->container['ttc039'] = isset($data['ttc039']) ? $data['ttc039'] : null;
        $this->container['ttc040'] = isset($data['ttc040']) ? $data['ttc040'] : null;
        $this->container['ttc041'] = isset($data['ttc041']) ? $data['ttc041'] : null;
        $this->container['ttc042'] = isset($data['ttc042']) ? $data['ttc042'] : null;
        $this->container['ttc043'] = isset($data['ttc043']) ? $data['ttc043'] : null;
        $this->container['ttc044'] = isset($data['ttc044']) ? $data['ttc044'] : null;
        $this->container['ttc045'] = isset($data['ttc045']) ? $data['ttc045'] : null;
        $this->container['ttc046'] = isset($data['ttc046']) ? $data['ttc046'] : null;
        $this->container['ttc047'] = isset($data['ttc047']) ? $data['ttc047'] : null;
        $this->container['ttc048'] = isset($data['ttc048']) ? $data['ttc048'] : null;
        $this->container['ttc049'] = isset($data['ttc049']) ? $data['ttc049'] : null;
        $this->container['ttc051'] = isset($data['ttc051']) ? $data['ttc051'] : null;
        $this->container['ttc052'] = isset($data['ttc052']) ? $data['ttc052'] : null;
        $this->container['ttc053'] = isset($data['ttc053']) ? $data['ttc053'] : null;
        $this->container['ttc054'] = isset($data['ttc054']) ? $data['ttc054'] : null;
        $this->container['ttc055'] = isset($data['ttc055']) ? $data['ttc055'] : null;
        $this->container['ttc056'] = isset($data['ttc056']) ? $data['ttc056'] : null;
        $this->container['ttc057'] = isset($data['ttc057']) ? $data['ttc057'] : null;
        $this->container['ttc058'] = isset($data['ttc058']) ? $data['ttc058'] : null;
        $this->container['ttc059'] = isset($data['ttc059']) ? $data['ttc059'] : null;
        $this->container['ttc060'] = isset($data['ttc060']) ? $data['ttc060'] : null;
        $this->container['ttc061'] = isset($data['ttc061']) ? $data['ttc061'] : null;
        $this->container['ttc063'] = isset($data['ttc063']) ? $data['ttc063'] : null;
        $this->container['ttc064'] = isset($data['ttc064']) ? $data['ttc064'] : null;
        $this->container['ttc065'] = isset($data['ttc065']) ? $data['ttc065'] : null;
        $this->container['ttc066'] = isset($data['ttc066']) ? $data['ttc066'] : null;
        $this->container['ttc067'] = isset($data['ttc067']) ? $data['ttc067'] : null;
        $this->container['ttc068'] = isset($data['ttc068']) ? $data['ttc068'] : null;
        $this->container['ttc069'] = isset($data['ttc069']) ? $data['ttc069'] : null;
        $this->container['ttc070'] = isset($data['ttc070']) ? $data['ttc070'] : null;
        $this->container['tto074'] = isset($data['tto074']) ? $data['tto074'] : null;
        $this->container['tto075'] = isset($data['tto075']) ? $data['tto075'] : null;
        $this->container['tto076'] = isset($data['tto076']) ? $data['tto076'] : null;
        $this->container['tto077'] = isset($data['tto077']) ? $data['tto077'] : null;
        $this->container['ttp079'] = isset($data['ttp079']) ? $data['ttp079'] : null;
        $this->container['ttp080'] = isset($data['ttp080']) ? $data['ttp080'] : null;
        $this->container['ttp084'] = isset($data['ttp084']) ? $data['ttp084'] : null;
        $this->container['txb001'] = isset($data['txb001']) ? $data['txb001'] : null;
        $this->container['txb002'] = isset($data['txb002']) ? $data['txb002'] : null;
        $this->container['txb003'] = isset($data['txb003']) ? $data['txb003'] : null;
        $this->container['txb004'] = isset($data['txb004']) ? $data['txb004'] : null;
        $this->container['txb006'] = isset($data['txb006']) ? $data['txb006'] : null;
        $this->container['txc007'] = isset($data['txc007']) ? $data['txc007'] : null;
        $this->container['txc009'] = isset($data['txc009']) ? $data['txc009'] : null;
        $this->container['txc010'] = isset($data['txc010']) ? $data['txc010'] : null;
        $this->container['txc011'] = isset($data['txc011']) ? $data['txc011'] : null;
        $this->container['txc012'] = isset($data['txc012']) ? $data['txc012'] : null;
        $this->container['txo013'] = isset($data['txo013']) ? $data['txo013'] : null;
        $this->container['txo014'] = isset($data['txo014']) ? $data['txo014'] : null;
        $this->container['txp015'] = isset($data['txp015']) ? $data['txp015'] : null;
        $this->container['txp016'] = isset($data['txp016']) ? $data['txp016'] : null;
        $this->container['txp017'] = isset($data['txp017']) ? $data['txp017'] : null;
        $this->container['ucc001'] = isset($data['ucc001']) ? $data['ucc001'] : null;
        $this->container['ucc002'] = isset($data['ucc002']) ? $data['ucc002'] : null;
        $this->container['ucc003'] = isset($data['ucc003']) ? $data['ucc003'] : null;
        $this->container['ucc004'] = isset($data['ucc004']) ? $data['ucc004'] : null;
        $this->container['ucc005'] = isset($data['ucc005']) ? $data['ucc005'] : null;
        $this->container['ucc006'] = isset($data['ucc006']) ? $data['ucc006'] : null;
        $this->container['ucc007'] = isset($data['ucc007']) ? $data['ucc007'] : null;
        $this->container['ucc008'] = isset($data['ucc008']) ? $data['ucc008'] : null;
        $this->container['ucc009'] = isset($data['ucc009']) ? $data['ucc009'] : null;
        $this->container['ucc010'] = isset($data['ucc010']) ? $data['ucc010'] : null;
        $this->container['ucc011'] = isset($data['ucc011']) ? $data['ucc011'] : null;
        $this->container['ucc012'] = isset($data['ucc012']) ? $data['ucc012'] : null;
        $this->container['ucc013'] = isset($data['ucc013']) ? $data['ucc013'] : null;
        $this->container['ucc014'] = isset($data['ucc014']) ? $data['ucc014'] : null;
        $this->container['ucc015'] = isset($data['ucc015']) ? $data['ucc015'] : null;
        $this->container['ucc016'] = isset($data['ucc016']) ? $data['ucc016'] : null;
        $this->container['dmo004'] = isset($data['dmo004']) ? $data['dmo004'] : null;
        $this->container['dmo014'] = isset($data['dmo014']) ? $data['dmo014'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return float
     */
    public function getAtc039()
    {
        return $this->container['atc039'];
    }

    /**
     * Sets atc039
     *
     * @param float $atc039 Total number of aged trades
     *
     * @return $this
     */
    public function setAtc039($atc039)
    {
        $this->container['atc039'] = $atc039;

        return $this;
    }

    /**
     * Gets ctb019
     *
     * @return float
     */
    public function getCtb019()
    {
        return $this->container['ctb019'];
    }

    /**
     * Sets ctb019
     *
     * @param float $ctb019 Total account balance for combined (newly and continuously reported) trades
     *
     * @return $this
     */
    public function setCtb019($ctb019)
    {
        $this->container['ctb019'] = $ctb019;

        return $this;
    }

    /**
     * Gets jdc008
     *
     * @return float
     */
    public function getJdc008()
    {
        return $this->container['jdc008'];
    }

    /**
     * Sets jdc008
     *
     * @param float $jdc008 Total number of judgments filed within 24 months of profile date (excluding Released, Satisfied, Abstract, or Vacated)
     *
     * @return $this
     */
    public function setJdc008($jdc008)
    {
        $this->container['jdc008'] = $jdc008;

        return $this;
    }

    /**
     * Gets ntb019
     *
     * @return float
     */
    public function getNtb019()
    {
        return $this->container['ntb019'];
    }

    /**
     * Sets ntb019
     *
     * @param float $ntb019 Total account balance for newly reported trades
     *
     * @return $this
     */
    public function setNtb019($ntb019)
    {
        $this->container['ntb019'] = $ntb019;

        return $this;
    }

    /**
     * Gets ntc032
     *
     * @return float
     */
    public function getNtc032()
    {
        return $this->container['ntc032'];
    }

    /**
     * Sets ntc032
     *
     * @param float $ntc032 Total number of newly reported trades
     *
     * @return $this
     */
    public function setNtc032($ntc032)
    {
        $this->container['ntc032'] = $ntc032;

        return $this;
    }

    /**
     * Gets otb001
     *
     * @return float
     */
    public function getOtb001()
    {
        return $this->container['otb001'];
    }

    /**
     * Sets otb001
     *
     * @param float $otb001 Total balance of other trades classified as Finance
     *
     * @return $this
     */
    public function setOtb001($otb001)
    {
        $this->container['otb001'] = $otb001;

        return $this;
    }

    /**
     * Gets otc006
     *
     * @return float
     */
    public function getOtc006()
    {
        return $this->container['otc006'];
    }

    /**
     * Sets otc006
     *
     * @param float $otc006 Total number of other trades classified as Finance
     *
     * @return $this
     */
    public function setOtc006($otc006)
    {
        $this->container['otc006'] = $otc006;

        return $this;
    }

    /**
     * Gets rtb019
     *
     * @return float
     */
    public function getRtb019()
    {
        return $this->container['rtb019'];
    }

    /**
     * Sets rtb019
     *
     * @param float $rtb019 Total sum of account balance for regular trades
     *
     * @return $this
     */
    public function setRtb019($rtb019)
    {
        $this->container['rtb019'] = $rtb019;

        return $this;
    }

    /**
     * Gets rtc048
     *
     * @return float
     */
    public function getRtc048()
    {
        return $this->container['rtc048'];
    }

    /**
     * Sets rtc048
     *
     * @param float $rtc048 Total number of regular trades
     *
     * @return $this
     */
    public function setRtc048($rtc048)
    {
        $this->container['rtc048'] = $rtc048;

        return $this;
    }

    /**
     * Gets ttb021
     *
     * @return float
     */
    public function getTtb021()
    {
        return $this->container['ttb021'];
    }

    /**
     * Sets ttb021
     *
     * @param float $ttb021 Total sum of account balance
     *
     * @return $this
     */
    public function setTtb021($ttb021)
    {
        $this->container['ttb021'] = $ttb021;

        return $this;
    }

    /**
     * Gets ttb022
     *
     * @return float
     */
    public function getTtb022()
    {
        return $this->container['ttb022'];
    }

    /**
     * Sets ttb022
     *
     * @param float $ttb022 Total sum of high credit balance
     *
     * @return $this
     */
    public function setTtb022($ttb022)
    {
        $this->container['ttb022'] = $ttb022;

        return $this;
    }

    /**
     * Gets ttb028
     *
     * @return float
     */
    public function getTtb028()
    {
        return $this->container['ttb028'];
    }

    /**
     * Sets ttb028
     *
     * @param float $ttb028 Total account balance that is current across all trades
     *
     * @return $this
     */
    public function setTtb028($ttb028)
    {
        $this->container['ttb028'] = $ttb028;

        return $this;
    }

    /**
     * Gets ttb029
     *
     * @return float
     */
    public function getTtb029()
    {
        return $this->container['ttb029'];
    }

    /**
     * Sets ttb029
     *
     * @param float $ttb029 Total account balance that is 1-30 DBT across all trades
     *
     * @return $this
     */
    public function setTtb029($ttb029)
    {
        $this->container['ttb029'] = $ttb029;

        return $this;
    }

    /**
     * Gets ttb030
     *
     * @return float
     */
    public function getTtb030()
    {
        return $this->container['ttb030'];
    }

    /**
     * Sets ttb030
     *
     * @param float $ttb030 Total Sum of account balance that is 31-60 across all trades
     *
     * @return $this
     */
    public function setTtb030($ttb030)
    {
        $this->container['ttb030'] = $ttb030;

        return $this;
    }

    /**
     * Gets ttb031
     *
     * @return float
     */
    public function getTtb031()
    {
        return $this->container['ttb031'];
    }

    /**
     * Sets ttb031
     *
     * @param float $ttb031 Total Sum of account balance that is 61-90 across all trades
     *
     * @return $this
     */
    public function setTtb031($ttb031)
    {
        $this->container['ttb031'] = $ttb031;

        return $this;
    }

    /**
     * Gets ttb032
     *
     * @return float
     */
    public function getTtb032()
    {
        return $this->container['ttb032'];
    }

    /**
     * Sets ttb032
     *
     * @param float $ttb032 Total Sum of account balance that is 91+ across all trades
     *
     * @return $this
     */
    public function setTtb032($ttb032)
    {
        $this->container['ttb032'] = $ttb032;

        return $this;
    }

    /**
     * Gets ttc050
     *
     * @return float
     */
    public function getTtc050()
    {
        return $this->container['ttc050'];
    }

    /**
     * Sets ttc050
     *
     * @param float $ttc050 Total number of trades
     *
     * @return $this
     */
    public function setTtc050($ttc050)
    {
        $this->container['ttc050'] = $ttc050;

        return $this;
    }

    /**
     * Gets ttp085
     *
     * @return float
     */
    public function getTtp085()
    {
        return $this->container['ttp085'];
    }

    /**
     * Sets ttp085
     *
     * @param float $ttp085 Percent of Total trades balance to Total Balance
     *
     * @return $this
     */
    public function setTtp085($ttp085)
    {
        $this->container['ttp085'] = $ttp085;

        return $this;
    }

    /**
     * Gets ttp086
     *
     * @return float
     */
    public function getTtp086()
    {
        return $this->container['ttp086'];
    }

    /**
     * Sets ttp086
     *
     * @param float $ttp086 Percent of Total number of trades to Total number of trades
     *
     * @return $this
     */
    public function setTtp086($ttp086)
    {
        $this->container['ttp086'] = $ttp086;

        return $this;
    }

    /**
     * Gets txb005
     *
     * @return float
     */
    public function getTxb005()
    {
        return $this->container['txb005'];
    }

    /**
     * Sets txb005
     *
     * @param float $txb005 Total liability amount for tax liens filed within t 24 months of profile date
     *
     * @return $this
     */
    public function setTxb005($txb005)
    {
        $this->container['txb005'] = $txb005;

        return $this;
    }

    /**
     * Gets txc008
     *
     * @return float
     */
    public function getTxc008()
    {
        return $this->container['txc008'];
    }

    /**
     * Sets txc008
     *
     * @param float $txc008 Total number of tax liens filed within 24 months of profile date
     *
     * @return $this
     */
    public function setTxc008($txc008)
    {
        $this->container['txc008'] = $txc008;

        return $this;
    }

    /**
     * Gets acc001
     *
     * @return float
     */
    public function getAcc001()
    {
        return $this->container['acc001'];
    }

    /**
     * Sets acc001
     *
     * @param float $acc001 Total number of active Trades within the last 12 months
     *
     * @return $this
     */
    public function setAcc001($acc001)
    {
        $this->container['acc001'] = $acc001;

        return $this;
    }

    /**
     * Gets acc002
     *
     * @return float
     */
    public function getAcc002()
    {
        return $this->container['acc002'];
    }

    /**
     * Sets acc002
     *
     * @param float $acc002 Total number of active Trades within the last 6 months
     *
     * @return $this
     */
    public function setAcc002($acc002)
    {
        $this->container['acc002'] = $acc002;

        return $this;
    }

    /**
     * Gets acc003
     *
     * @return float
     */
    public function getAcc003()
    {
        return $this->container['acc003'];
    }

    /**
     * Sets acc003
     *
     * @param float $acc003 Total number of active trades with a payment indicator equal to 1 (the DBT is unknown, compared to the average DBT for that business category)
     *
     * @return $this
     */
    public function setAcc003($acc003)
    {
        $this->container['acc003'] = $acc003;

        return $this;
    }

    /**
     * Gets acc004
     *
     * @return float
     */
    public function getAcc004()
    {
        return $this->container['acc004'];
    }

    /**
     * Sets acc004
     *
     * @param float $acc004 Total number of active trades with a payment indicator equal to (the DBT is five days lower than the average DBT for that business category), excluding inactive trades
     *
     * @return $this
     */
    public function setAcc004($acc004)
    {
        $this->container['acc004'] = $acc004;

        return $this;
    }

    /**
     * Gets acc005
     *
     * @return float
     */
    public function getAcc005()
    {
        return $this->container['acc005'];
    }

    /**
     * Sets acc005
     *
     * @param float $acc005 Total number of active trades with a payment indicator equal to (the DBT is higher than the average DBT for that business category)
     *
     * @return $this
     */
    public function setAcc005($acc005)
    {
        $this->container['acc005'] = $acc005;

        return $this;
    }

    /**
     * Gets acc006
     *
     * @return float
     */
    public function getAcc006()
    {
        return $this->container['acc006'];
    }

    /**
     * Sets acc006
     *
     * @param float $acc006 Total number of active trades with a payment indicator equal to (the DBT is about the same as the average DBT for that business category)
     *
     * @return $this
     */
    public function setAcc006($acc006)
    {
        $this->container['acc006'] = $acc006;

        return $this;
    }

    /**
     * Gets acc007
     *
     * @return float
     */
    public function getAcc007()
    {
        return $this->container['acc007'];
    }

    /**
     * Sets acc007
     *
     * @param float $acc007 Total number of active trades with zero balance
     *
     * @return $this
     */
    public function setAcc007($acc007)
    {
        $this->container['acc007'] = $acc007;

        return $this;
    }

    /**
     * Gets acc008
     *
     * @return float
     */
    public function getAcc008()
    {
        return $this->container['acc008'];
    }

    /**
     * Sets acc008
     *
     * @param float $acc008 Total number of Total trades with zero balance
     *
     * @return $this
     */
    public function setAcc008($acc008)
    {
        $this->container['acc008'] = $acc008;

        return $this;
    }

    /**
     * Gets atb001
     *
     * @return float
     */
    public function getAtb001()
    {
        return $this->container['atb001'];
    }

    /**
     * Sets atb001
     *
     * @param float $atb001 Total balance of aged trades
     *
     * @return $this
     */
    public function setAtb001($atb001)
    {
        $this->container['atb001'] = $atb001;

        return $this;
    }

    /**
     * Gets atb002
     *
     * @return float
     */
    public function getAtb002()
    {
        return $this->container['atb002'];
    }

    /**
     * Sets atb002
     *
     * @param float $atb002 Total balance of aged trades that is 1-30 days delinquent
     *
     * @return $this
     */
    public function setAtb002($atb002)
    {
        $this->container['atb002'] = $atb002;

        return $this;
    }

    /**
     * Gets atb003
     *
     * @return float
     */
    public function getAtb003()
    {
        return $this->container['atb003'];
    }

    /**
     * Sets atb003
     *
     * @param float $atb003 Total balance of aged trades that is 31-60 days delinquent
     *
     * @return $this
     */
    public function setAtb003($atb003)
    {
        $this->container['atb003'] = $atb003;

        return $this;
    }

    /**
     * Gets atb004
     *
     * @return float
     */
    public function getAtb004()
    {
        return $this->container['atb004'];
    }

    /**
     * Sets atb004
     *
     * @param float $atb004 Total balance of aged trades that is 61-90 days delinquent
     *
     * @return $this
     */
    public function setAtb004($atb004)
    {
        $this->container['atb004'] = $atb004;

        return $this;
    }

    /**
     * Gets atb005
     *
     * @return float
     */
    public function getAtb005()
    {
        return $this->container['atb005'];
    }

    /**
     * Sets atb005
     *
     * @param float $atb005 Total balance of aged trades that is 91+ days delinquent
     *
     * @return $this
     */
    public function setAtb005($atb005)
    {
        $this->container['atb005'] = $atb005;

        return $this;
    }

    /**
     * Gets atb006
     *
     * @return float
     */
    public function getAtb006()
    {
        return $this->container['atb006'];
    }

    /**
     * Sets atb006
     *
     * @param float $atb006 Total balance of aged trades that is current
     *
     * @return $this
     */
    public function setAtb006($atb006)
    {
        $this->container['atb006'] = $atb006;

        return $this;
    }

    /**
     * Gets atb007
     *
     * @return float
     */
    public function getAtb007()
    {
        return $this->container['atb007'];
    }

    /**
     * Sets atb007
     *
     * @param float $atb007 Total balance across all aged trades with trade's worst delinquency status = current
     *
     * @return $this
     */
    public function setAtb007($atb007)
    {
        $this->container['atb007'] = $atb007;

        return $this;
    }

    /**
     * Gets atb008
     *
     * @return float
     */
    public function getAtb008()
    {
        return $this->container['atb008'];
    }

    /**
     * Sets atb008
     *
     * @param float $atb008 Total balance across all aged trades with trade's worst delinquency status = 1-30 days past due
     *
     * @return $this
     */
    public function setAtb008($atb008)
    {
        $this->container['atb008'] = $atb008;

        return $this;
    }

    /**
     * Gets atb009
     *
     * @return float
     */
    public function getAtb009()
    {
        return $this->container['atb009'];
    }

    /**
     * Sets atb009
     *
     * @param float $atb009 Total balance across all aged trades with trade's worst delinquency status = 31-60 days past due
     *
     * @return $this
     */
    public function setAtb009($atb009)
    {
        $this->container['atb009'] = $atb009;

        return $this;
    }

    /**
     * Gets atb010
     *
     * @return float
     */
    public function getAtb010()
    {
        return $this->container['atb010'];
    }

    /**
     * Sets atb010
     *
     * @param float $atb010 Total balance across all aged trades with trade's worst delinquency status = 61-90 days past due
     *
     * @return $this
     */
    public function setAtb010($atb010)
    {
        $this->container['atb010'] = $atb010;

        return $this;
    }

    /**
     * Gets atb011
     *
     * @return float
     */
    public function getAtb011()
    {
        return $this->container['atb011'];
    }

    /**
     * Sets atb011
     *
     * @param float $atb011 Total balance across all aged trades with trade's worst delinquency status = 91+ days past due
     *
     * @return $this
     */
    public function setAtb011($atb011)
    {
        $this->container['atb011'] = $atb011;

        return $this;
    }

    /**
     * Gets atb012
     *
     * @return float
     */
    public function getAtb012()
    {
        return $this->container['atb012'];
    }

    /**
     * Sets atb012
     *
     * @param float $atb012 Total balance across all aged trades with trade worst status = current
     *
     * @return $this
     */
    public function setAtb012($atb012)
    {
        $this->container['atb012'] = $atb012;

        return $this;
    }

    /**
     * Gets atb013
     *
     * @return float
     */
    public function getAtb013()
    {
        return $this->container['atb013'];
    }

    /**
     * Sets atb013
     *
     * @param float $atb013 Total balance across all aged trades with trade worst status = 1-30 days past due
     *
     * @return $this
     */
    public function setAtb013($atb013)
    {
        $this->container['atb013'] = $atb013;

        return $this;
    }

    /**
     * Gets atb014
     *
     * @return float
     */
    public function getAtb014()
    {
        return $this->container['atb014'];
    }

    /**
     * Sets atb014
     *
     * @param float $atb014 Total balance across all aged trades with trade's worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setAtb014($atb014)
    {
        $this->container['atb014'] = $atb014;

        return $this;
    }

    /**
     * Gets atb015
     *
     * @return float
     */
    public function getAtb015()
    {
        return $this->container['atb015'];
    }

    /**
     * Sets atb015
     *
     * @param float $atb015 Total balance across all aged trades with trade's worst status = 31-60 days past due
     *
     * @return $this
     */
    public function setAtb015($atb015)
    {
        $this->container['atb015'] = $atb015;

        return $this;
    }

    /**
     * Gets atb016
     *
     * @return float
     */
    public function getAtb016()
    {
        return $this->container['atb016'];
    }

    /**
     * Sets atb016
     *
     * @param float $atb016 Total balance across all aged trades with trade's worst status = 61-90 days past due
     *
     * @return $this
     */
    public function setAtb016($atb016)
    {
        $this->container['atb016'] = $atb016;

        return $this;
    }

    /**
     * Gets atb017
     *
     * @return float
     */
    public function getAtb017()
    {
        return $this->container['atb017'];
    }

    /**
     * Sets atb017
     *
     * @param float $atb017 Total balance across all aged trades with trade's worst status = 91+ days past due
     *
     * @return $this
     */
    public function setAtb017($atb017)
    {
        $this->container['atb017'] = $atb017;

        return $this;
    }

    /**
     * Gets atb018
     *
     * @return float
     */
    public function getAtb018()
    {
        return $this->container['atb018'];
    }

    /**
     * Sets atb018
     *
     * @param float $atb018 Total highest balance in past 12 months across all aged trades
     *
     * @return $this
     */
    public function setAtb018($atb018)
    {
        $this->container['atb018'] = $atb018;

        return $this;
    }

    /**
     * Gets atb019
     *
     * @return float
     */
    public function getAtb019()
    {
        return $this->container['atb019'];
    }

    /**
     * Sets atb019
     *
     * @param float $atb019 Total balance for aged trades with no reported information within 4 months of the profile date
     *
     * @return $this
     */
    public function setAtb019($atb019)
    {
        $this->container['atb019'] = $atb019;

        return $this;
    }

    /**
     * Gets atc020
     *
     * @return float
     */
    public function getAtc020()
    {
        return $this->container['atc020'];
    }

    /**
     * Sets atc020
     *
     * @param float $atc020 Total number of aged trades
     *
     * @return $this
     */
    public function setAtc020($atc020)
    {
        $this->container['atc020'] = $atc020;

        return $this;
    }

    /**
     * Gets atc021
     *
     * @return float
     */
    public function getAtc021()
    {
        return $this->container['atc021'];
    }

    /**
     * Sets atc021
     *
     * @param float $atc021 Total number of aged trades with trade's worst delinquency status = current
     *
     * @return $this
     */
    public function setAtc021($atc021)
    {
        $this->container['atc021'] = $atc021;

        return $this;
    }

    /**
     * Gets atc022
     *
     * @return float
     */
    public function getAtc022()
    {
        return $this->container['atc022'];
    }

    /**
     * Sets atc022
     *
     * @param float $atc022 Total number of aged trades with trade's worst delinquency status = 1-30 days past due
     *
     * @return $this
     */
    public function setAtc022($atc022)
    {
        $this->container['atc022'] = $atc022;

        return $this;
    }

    /**
     * Gets atc023
     *
     * @return float
     */
    public function getAtc023()
    {
        return $this->container['atc023'];
    }

    /**
     * Sets atc023
     *
     * @param float $atc023 Total number of aged trades with trade's worst delinquency status = 31-60 days past due
     *
     * @return $this
     */
    public function setAtc023($atc023)
    {
        $this->container['atc023'] = $atc023;

        return $this;
    }

    /**
     * Gets atc024
     *
     * @return float
     */
    public function getAtc024()
    {
        return $this->container['atc024'];
    }

    /**
     * Sets atc024
     *
     * @param float $atc024 Total number of aged trades with trade's worst delinquency status = 61-90 days past due
     *
     * @return $this
     */
    public function setAtc024($atc024)
    {
        $this->container['atc024'] = $atc024;

        return $this;
    }

    /**
     * Gets atc025
     *
     * @return float
     */
    public function getAtc025()
    {
        return $this->container['atc025'];
    }

    /**
     * Sets atc025
     *
     * @param float $atc025 Total number of aged trades with trade's worst delinquency status = 91+ days past due
     *
     * @return $this
     */
    public function setAtc025($atc025)
    {
        $this->container['atc025'] = $atc025;

        return $this;
    }

    /**
     * Gets atc026
     *
     * @return float
     */
    public function getAtc026()
    {
        return $this->container['atc026'];
    }

    /**
     * Sets atc026
     *
     * @param float $atc026 Total number of aged trades across all aged trades with trade's worst status = current
     *
     * @return $this
     */
    public function setAtc026($atc026)
    {
        $this->container['atc026'] = $atc026;

        return $this;
    }

    /**
     * Gets atc027
     *
     * @return float
     */
    public function getAtc027()
    {
        return $this->container['atc027'];
    }

    /**
     * Sets atc027
     *
     * @param float $atc027 Total number of aged trades across all aged trades with trade's worst status = 1-30 days past due
     *
     * @return $this
     */
    public function setAtc027($atc027)
    {
        $this->container['atc027'] = $atc027;

        return $this;
    }

    /**
     * Gets atc028
     *
     * @return float
     */
    public function getAtc028()
    {
        return $this->container['atc028'];
    }

    /**
     * Sets atc028
     *
     * @param float $atc028 Total number of aged trades across all aged trades with trade's worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setAtc028($atc028)
    {
        $this->container['atc028'] = $atc028;

        return $this;
    }

    /**
     * Gets atc029
     *
     * @return float
     */
    public function getAtc029()
    {
        return $this->container['atc029'];
    }

    /**
     * Sets atc029
     *
     * @param float $atc029 Total number of aged trades across all aged trades with trade's worst status = 31-60 days past due
     *
     * @return $this
     */
    public function setAtc029($atc029)
    {
        $this->container['atc029'] = $atc029;

        return $this;
    }

    /**
     * Gets atc030
     *
     * @return float
     */
    public function getAtc030()
    {
        return $this->container['atc030'];
    }

    /**
     * Sets atc030
     *
     * @param float $atc030 Total number of aged trades across all aged trades with trade's worst status = 61-90 days past due
     *
     * @return $this
     */
    public function setAtc030($atc030)
    {
        $this->container['atc030'] = $atc030;

        return $this;
    }

    /**
     * Gets atc031
     *
     * @return float
     */
    public function getAtc031()
    {
        return $this->container['atc031'];
    }

    /**
     * Sets atc031
     *
     * @param float $atc031 Total number of aged trades across all aged trades with trade's worst status = 91+ days past due
     *
     * @return $this
     */
    public function setAtc031($atc031)
    {
        $this->container['atc031'] = $atc031;

        return $this;
    }

    /**
     * Gets atc032
     *
     * @return float
     */
    public function getAtc032()
    {
        return $this->container['atc032'];
    }

    /**
     * Sets atc032
     *
     * @param float $atc032 Total number of aged trades with no reported information within 4 months of the profile date
     *
     * @return $this
     */
    public function setAtc032($atc032)
    {
        $this->container['atc032'] = $atc032;

        return $this;
    }

    /**
     * Gets atd034
     *
     * @return float
     */
    public function getAtd034()
    {
        return $this->container['atd034'];
    }

    /**
     * Sets atd034
     *
     * @param float $atd034 Weighted average DBT of aged trades with no reported information within 4 months of the profile date
     *
     * @return $this
     */
    public function setAtd034($atd034)
    {
        $this->container['atd034'] = $atd034;

        return $this;
    }

    /**
     * Gets atd035
     *
     * @return float
     */
    public function getAtd035()
    {
        return $this->container['atd035'];
    }

    /**
     * Sets atd035
     *
     * @param float $atd035 Maximum DBT of aged trades with no reported information within 4 months of the profile date
     *
     * @return $this
     */
    public function setAtd035($atd035)
    {
        $this->container['atd035'] = $atd035;

        return $this;
    }

    /**
     * Gets atp036
     *
     * @return float
     */
    public function getAtp036()
    {
        return $this->container['atp036'];
    }

    /**
     * Sets atp036
     *
     * @param float $atp036 Percent of Total trade balance to Total highest balance in past 12 months across all aged trades
     *
     * @return $this
     */
    public function setAtp036($atp036)
    {
        $this->container['atp036'] = $atp036;

        return $this;
    }

    /**
     * Gets atp037
     *
     * @return float
     */
    public function getAtp037()
    {
        return $this->container['atp037'];
    }

    /**
     * Sets atp037
     *
     * @param float $atp037 Percent of Total balance of all aged trades to Total balance of Total Trades
     *
     * @return $this
     */
    public function setAtp037($atp037)
    {
        $this->container['atp037'] = $atp037;

        return $this;
    }

    /**
     * Gets atp038
     *
     * @return float
     */
    public function getAtp038()
    {
        return $this->container['atp038'];
    }

    /**
     * Sets atp038
     *
     * @param float $atp038 Percent of Total number of aged trades to Total number of Total Trades
     *
     * @return $this
     */
    public function setAtp038($atp038)
    {
        $this->container['atp038'] = $atp038;

        return $this;
    }

    /**
     * Gets bkb001
     *
     * @return float
     */
    public function getBkb001()
    {
        return $this->container['bkb001'];
    }

    /**
     * Sets bkb001
     *
     * @param float $bkb001 Total liability balance for bankruptcy filings
     *
     * @return $this
     */
    public function setBkb001($bkb001)
    {
        $this->container['bkb001'] = $bkb001;

        return $this;
    }

    /**
     * Gets bkb002
     *
     * @return float
     */
    public function getBkb002()
    {
        return $this->container['bkb002'];
    }

    /**
     * Sets bkb002
     *
     * @param float $bkb002 Total liability balance for bankruptcies filed within 24 months of the profile date
     *
     * @return $this
     */
    public function setBkb002($bkb002)
    {
        $this->container['bkb002'] = $bkb002;

        return $this;
    }

    /**
     * Gets bkb003
     *
     * @return float
     */
    public function getBkb003()
    {
        return $this->container['bkb003'];
    }

    /**
     * Sets bkb003
     *
     * @param float $bkb003 Total liability balance for non-filed bankruptcy actions
     *
     * @return $this
     */
    public function setBkb003($bkb003)
    {
        $this->container['bkb003'] = $bkb003;

        return $this;
    }

    /**
     * Gets bkc004
     *
     * @return float
     */
    public function getBkc004()
    {
        return $this->container['bkc004'];
    }

    /**
     * Sets bkc004
     *
     * @param float $bkc004 Total number of bankruptcies filed within 12 months of the profile date
     *
     * @return $this
     */
    public function setBkc004($bkc004)
    {
        $this->container['bkc004'] = $bkc004;

        return $this;
    }

    /**
     * Gets bkc005
     *
     * @return float
     */
    public function getBkc005()
    {
        return $this->container['bkc005'];
    }

    /**
     * Sets bkc005
     *
     * @param float $bkc005 Total number of bankruptcies filed within 6 months of the profile date
     *
     * @return $this
     */
    public function setBkc005($bkc005)
    {
        $this->container['bkc005'] = $bkc005;

        return $this;
    }

    /**
     * Gets bkc006
     *
     * @return float
     */
    public function getBkc006()
    {
        return $this->container['bkc006'];
    }

    /**
     * Sets bkc006
     *
     * @param float $bkc006 Total number of bankruptcy filings
     *
     * @return $this
     */
    public function setBkc006($bkc006)
    {
        $this->container['bkc006'] = $bkc006;

        return $this;
    }

    /**
     * Gets bkc007
     *
     * @return float
     */
    public function getBkc007()
    {
        return $this->container['bkc007'];
    }

    /**
     * Sets bkc007
     *
     * @param float $bkc007 Total number of bankruptcies filed within 24 months of the profile date
     *
     * @return $this
     */
    public function setBkc007($bkc007)
    {
        $this->container['bkc007'] = $bkc007;

        return $this;
    }

    /**
     * Gets bkc008
     *
     * @return float
     */
    public function getBkc008()
    {
        return $this->container['bkc008'];
    }

    /**
     * Sets bkc008
     *
     * @param float $bkc008 Total number of non-filed bankruptcy actions
     *
     * @return $this
     */
    public function setBkc008($bkc008)
    {
        $this->container['bkc008'] = $bkc008;

        return $this;
    }

    /**
     * Gets bko009
     *
     * @return float
     */
    public function getBko009()
    {
        return $this->container['bko009'];
    }

    /**
     * Sets bko009
     *
     * @param float $bko009 Presence of bankruptcies not satisfied, terminated nor released within 24 months of the profile date
     *
     * @return $this
     */
    public function setBko009($bko009)
    {
        $this->container['bko009'] = $bko009;

        return $this;
    }

    /**
     * Gets bko010
     *
     * @return float
     */
    public function getBko010()
    {
        return $this->container['bko010'];
    }

    /**
     * Sets bko010
     *
     * @param float $bko010 Age in months of most recent bankruptcy filing
     *
     * @return $this
     */
    public function setBko010($bko010)
    {
        $this->container['bko010'] = $bko010;

        return $this;
    }

    /**
     * Gets bko011
     *
     * @return float
     */
    public function getBko011()
    {
        return $this->container['bko011'];
    }

    /**
     * Sets bko011
     *
     * @param float $bko011 Age in months of most recent non-filed bankruptcy action
     *
     * @return $this
     */
    public function setBko011($bko011)
    {
        $this->container['bko011'] = $bko011;

        return $this;
    }

    /**
     * Gets brb001
     *
     * @return float
     */
    public function getBrb001()
    {
        return $this->container['brb001'];
    }

    /**
     * Sets brb001
     *
     * @param float $brb001 Total asset balance of commercial banking relationships
     *
     * @return $this
     */
    public function setBrb001($brb001)
    {
        $this->container['brb001'] = $brb001;

        return $this;
    }

    /**
     * Gets brb002
     *
     * @return float
     */
    public function getBrb002()
    {
        return $this->container['brb002'];
    }

    /**
     * Sets brb002
     *
     * @param float $brb002 Maximum balance of bank asset relationship within last 6 months
     *
     * @return $this
     */
    public function setBrb002($brb002)
    {
        $this->container['brb002'] = $brb002;

        return $this;
    }

    /**
     * Gets brb003
     *
     * @return float
     */
    public function getBrb003()
    {
        return $this->container['brb003'];
    }

    /**
     * Sets brb003
     *
     * @param float $brb003 Total liability balance of commercial banking relationships
     *
     * @return $this
     */
    public function setBrb003($brb003)
    {
        $this->container['brb003'] = $brb003;

        return $this;
    }

    /**
     * Gets brb004
     *
     * @return float
     */
    public function getBrb004()
    {
        return $this->container['brb004'];
    }

    /**
     * Sets brb004
     *
     * @param float $brb004 Maximum balance of bank liability relationship within last 6 months
     *
     * @return $this
     */
    public function setBrb004($brb004)
    {
        $this->container['brb004'] = $brb004;

        return $this;
    }

    /**
     * Gets brb005
     *
     * @return float
     */
    public function getBrb005()
    {
        return $this->container['brb005'];
    }

    /**
     * Sets brb005
     *
     * @param float $brb005 Total account balance for commercial banking relationships
     *
     * @return $this
     */
    public function setBrb005($brb005)
    {
        $this->container['brb005'] = $brb005;

        return $this;
    }

    /**
     * Gets brb006
     *
     * @return float
     */
    public function getBrb006()
    {
        return $this->container['brb006'];
    }

    /**
     * Sets brb006
     *
     * @param float $brb006 Total account balance for commercial banking relationships reported in the past six months
     *
     * @return $this
     */
    public function setBrb006($brb006)
    {
        $this->container['brb006'] = $brb006;

        return $this;
    }

    /**
     * Gets brb007
     *
     * @return float
     */
    public function getBrb007()
    {
        return $this->container['brb007'];
    }

    /**
     * Sets brb007
     *
     * @param float $brb007 Total account balance for commercial banking relationships reported in the past twelve months
     *
     * @return $this
     */
    public function setBrb007($brb007)
    {
        $this->container['brb007'] = $brb007;

        return $this;
    }

    /**
     * Gets brc008
     *
     * @return float
     */
    public function getBrc008()
    {
        return $this->container['brc008'];
    }

    /**
     * Sets brc008
     *
     * @param float $brc008 Total number of banking asset relationship (checking/saving/currency exchange)
     *
     * @return $this
     */
    public function setBrc008($brc008)
    {
        $this->container['brc008'] = $brc008;

        return $this;
    }

    /**
     * Gets brc009
     *
     * @return float
     */
    public function getBrc009()
    {
        return $this->container['brc009'];
    }

    /**
     * Sets brc009
     *
     * @param float $brc009 Total number of banking liability relationship
     *
     * @return $this
     */
    public function setBrc009($brc009)
    {
        $this->container['brc009'] = $brc009;

        return $this;
    }

    /**
     * Gets brc010
     *
     * @return float
     */
    public function getBrc010()
    {
        return $this->container['brc010'];
    }

    /**
     * Sets brc010
     *
     * @param float $brc010 Total number of commercial banking relationships
     *
     * @return $this
     */
    public function setBrc010($brc010)
    {
        $this->container['brc010'] = $brc010;

        return $this;
    }

    /**
     * Gets brc011
     *
     * @return float
     */
    public function getBrc011()
    {
        return $this->container['brc011'];
    }

    /**
     * Sets brc011
     *
     * @param float $brc011 Total number of commercial banking relationships reported in the past six months
     *
     * @return $this
     */
    public function setBrc011($brc011)
    {
        $this->container['brc011'] = $brc011;

        return $this;
    }

    /**
     * Gets brc012
     *
     * @return float
     */
    public function getBrc012()
    {
        return $this->container['brc012'];
    }

    /**
     * Sets brc012
     *
     * @param float $brc012 Total number of commercial banking relationships reported in the past twelve months
     *
     * @return $this
     */
    public function setBrc012($brc012)
    {
        $this->container['brc012'] = $brc012;

        return $this;
    }

    /**
     * Gets brc013
     *
     * @return float
     */
    public function getBrc013()
    {
        return $this->container['brc013'];
    }

    /**
     * Sets brc013
     *
     * @param float $brc013 Total number of asset-based commercial banking relationships Includes checking accounts, savings accounts, merchant bank cards, and currency exchange
     *
     * @return $this
     */
    public function setBrc013($brc013)
    {
        $this->container['brc013'] = $brc013;

        return $this;
    }

    /**
     * Gets brc014
     *
     * @return float
     */
    public function getBrc014()
    {
        return $this->container['brc014'];
    }

    /**
     * Sets brc014
     *
     * @param float $brc014 Total number of bank loan relationships Includes borrower, line of credit, SBA loan, asset based loan, private loan, retail loan, receivables financing
     *
     * @return $this
     */
    public function setBrc014($brc014)
    {
        $this->container['brc014'] = $brc014;

        return $this;
    }

    /**
     * Gets bro015
     *
     * @return float
     */
    public function getBro015()
    {
        return $this->container['bro015'];
    }

    /**
     * Sets bro015
     *
     * @param float $bro015 Age in months of newest commercial banking relationship
     *
     * @return $this
     */
    public function setBro015($bro015)
    {
        $this->container['bro015'] = $bro015;

        return $this;
    }

    /**
     * Gets bro016
     *
     * @return float
     */
    public function getBro016()
    {
        return $this->container['bro016'];
    }

    /**
     * Sets bro016
     *
     * @param float $bro016 Age in months of oldest commercial banking relationship
     *
     * @return $this
     */
    public function setBro016($bro016)
    {
        $this->container['bro016'] = $bro016;

        return $this;
    }

    /**
     * Gets bro017
     *
     * @return float
     */
    public function getBro017()
    {
        return $this->container['bro017'];
    }

    /**
     * Sets bro017
     *
     * @param float $bro017 Average age in months of commercial banking relationships
     *
     * @return $this
     */
    public function setBro017($bro017)
    {
        $this->container['bro017'] = $bro017;

        return $this;
    }

    /**
     * Gets brp018
     *
     * @return float
     */
    public function getBrp018()
    {
        return $this->container['brp018'];
    }

    /**
     * Sets brp018
     *
     * @param float $brp018 Percentage of Total asset balance of commercial banking relationships to Total trade balance
     *
     * @return $this
     */
    public function setBrp018($brp018)
    {
        $this->container['brp018'] = $brp018;

        return $this;
    }

    /**
     * Gets brp019
     *
     * @return float
     */
    public function getBrp019()
    {
        return $this->container['brp019'];
    }

    /**
     * Sets brp019
     *
     * @param float $brp019 Percentage of Total liability balance of commercial banking relationships to Total trade balance
     *
     * @return $this
     */
    public function setBrp019($brp019)
    {
        $this->container['brp019'] = $brp019;

        return $this;
    }

    /**
     * Gets brp020
     *
     * @return float
     */
    public function getBrp020()
    {
        return $this->container['brp020'];
    }

    /**
     * Sets brp020
     *
     * @param float $brp020 Percentage of Total balance of commercial banking relationships to Total balance of trades
     *
     * @return $this
     */
    public function setBrp020($brp020)
    {
        $this->container['brp020'] = $brp020;

        return $this;
    }

    /**
     * Gets brp021
     *
     * @return float
     */
    public function getBrp021()
    {
        return $this->container['brp021'];
    }

    /**
     * Sets brp021
     *
     * @param float $brp021 Percentage of Total number of commercial banking asset relationships to Total number of trades
     *
     * @return $this
     */
    public function setBrp021($brp021)
    {
        $this->container['brp021'] = $brp021;

        return $this;
    }

    /**
     * Gets brp022
     *
     * @return float
     */
    public function getBrp022()
    {
        return $this->container['brp022'];
    }

    /**
     * Sets brp022
     *
     * @param float $brp022 Percentage of Total number of commercial banking liability relationships to Total number of trades
     *
     * @return $this
     */
    public function setBrp022($brp022)
    {
        $this->container['brp022'] = $brp022;

        return $this;
    }

    /**
     * Gets brp023
     *
     * @return float
     */
    public function getBrp023()
    {
        return $this->container['brp023'];
    }

    /**
     * Sets brp023
     *
     * @param float $brp023 Percentage of Total number of commercial banking relationships to Total number of trades
     *
     * @return $this
     */
    public function setBrp023($brp023)
    {
        $this->container['brp023'] = $brp023;

        return $this;
    }

    /**
     * Gets clb001
     *
     * @return float
     */
    public function getClb001()
    {
        return $this->container['clb001'];
    }

    /**
     * Sets clb001
     *
     * @param float $clb001 Total amount placed for open and closed unpaid collections
     *
     * @return $this
     */
    public function setClb001($clb001)
    {
        $this->container['clb001'] = $clb001;

        return $this;
    }

    /**
     * Gets clb002
     *
     * @return float
     */
    public function getClb002()
    {
        return $this->container['clb002'];
    }

    /**
     * Sets clb002
     *
     * @param float $clb002 Total amount placed for open and closed collection trades
     *
     * @return $this
     */
    public function setClb002($clb002)
    {
        $this->container['clb002'] = $clb002;

        return $this;
    }

    /**
     * Gets clb003
     *
     * @return float
     */
    public function getClb003()
    {
        return $this->container['clb003'];
    }

    /**
     * Sets clb003
     *
     * @param float $clb003 Total amount collected for open and closed collection trades
     *
     * @return $this
     */
    public function setClb003($clb003)
    {
        $this->container['clb003'] = $clb003;

        return $this;
    }

    /**
     * Gets clb004
     *
     * @return float
     */
    public function getClb004()
    {
        return $this->container['clb004'];
    }

    /**
     * Sets clb004
     *
     * @param float $clb004 Total amount collected for open collection trades
     *
     * @return $this
     */
    public function setClb004($clb004)
    {
        $this->container['clb004'] = $clb004;

        return $this;
    }

    /**
     * Gets clb005
     *
     * @return float
     */
    public function getClb005()
    {
        return $this->container['clb005'];
    }

    /**
     * Sets clb005
     *
     * @param float $clb005 Maximum amount collected on any collection trade
     *
     * @return $this
     */
    public function setClb005($clb005)
    {
        $this->container['clb005'] = $clb005;

        return $this;
    }

    /**
     * Gets clc006
     *
     * @return float
     */
    public function getClc006()
    {
        return $this->container['clc006'];
    }

    /**
     * Sets clc006
     *
     * @param float $clc006 Total number of open or closed unpaid collection trades
     *
     * @return $this
     */
    public function setClc006($clc006)
    {
        $this->container['clc006'] = $clc006;

        return $this;
    }

    /**
     * Gets clc007
     *
     * @return float
     */
    public function getClc007()
    {
        return $this->container['clc007'];
    }

    /**
     * Sets clc007
     *
     * @param float $clc007 Total number of open collections placed within 12 months of profile date
     *
     * @return $this
     */
    public function setClc007($clc007)
    {
        $this->container['clc007'] = $clc007;

        return $this;
    }

    /**
     * Gets clc008
     *
     * @return float
     */
    public function getClc008()
    {
        return $this->container['clc008'];
    }

    /**
     * Sets clc008
     *
     * @param float $clc008 Total number of open collections placed within 6 months of profile date
     *
     * @return $this
     */
    public function setClc008($clc008)
    {
        $this->container['clc008'] = $clc008;

        return $this;
    }

    /**
     * Gets clc009
     *
     * @return float
     */
    public function getClc009()
    {
        return $this->container['clc009'];
    }

    /**
     * Sets clc009
     *
     * @param float $clc009 Total number of open and closed collections placed within 6 months of profile date
     *
     * @return $this
     */
    public function setClc009($clc009)
    {
        $this->container['clc009'] = $clc009;

        return $this;
    }

    /**
     * Gets clc010
     *
     * @return float
     */
    public function getClc010()
    {
        return $this->container['clc010'];
    }

    /**
     * Sets clc010
     *
     * @param float $clc010 Total number of open and closed collection trades
     *
     * @return $this
     */
    public function setClc010($clc010)
    {
        $this->container['clc010'] = $clc010;

        return $this;
    }

    /**
     * Gets clc011
     *
     * @return float
     */
    public function getClc011()
    {
        return $this->container['clc011'];
    }

    /**
     * Sets clc011
     *
     * @param float $clc011 Total number of open and closed collection trades placed within 12 months of the profile date
     *
     * @return $this
     */
    public function setClc011($clc011)
    {
        $this->container['clc011'] = $clc011;

        return $this;
    }

    /**
     * Gets clc012
     *
     * @return float
     */
    public function getClc012()
    {
        return $this->container['clc012'];
    }

    /**
     * Sets clc012
     *
     * @param float $clc012 Total number of open and closed collection trades placed within the last 24 months of the profile date
     *
     * @return $this
     */
    public function setClc012($clc012)
    {
        $this->container['clc012'] = $clc012;

        return $this;
    }

    /**
     * Gets clc013
     *
     * @return float
     */
    public function getClc013()
    {
        return $this->container['clc013'];
    }

    /**
     * Sets clc013
     *
     * @param float $clc013 Total number of open collection trades
     *
     * @return $this
     */
    public function setClc013($clc013)
    {
        $this->container['clc013'] = $clc013;

        return $this;
    }

    /**
     * Gets clo014
     *
     * @return float
     */
    public function getClo014()
    {
        return $this->container['clo014'];
    }

    /**
     * Sets clo014
     *
     * @param float $clo014 Age in months of most recent collection trade
     *
     * @return $this
     */
    public function setClo014($clo014)
    {
        $this->container['clo014'] = $clo014;

        return $this;
    }

    /**
     * Gets clo015
     *
     * @return float
     */
    public function getClo015()
    {
        return $this->container['clo015'];
    }

    /**
     * Sets clo015
     *
     * @param float $clo015 Age in months of most recent open collection trade
     *
     * @return $this
     */
    public function setClo015($clo015)
    {
        $this->container['clo015'] = $clo015;

        return $this;
    }

    /**
     * Gets clp016
     *
     * @return float
     */
    public function getClp016()
    {
        return $this->container['clp016'];
    }

    /**
     * Sets clp016
     *
     * @param float $clp016 Ratio of Total amount placed for unpaid collections to Total trade balance
     *
     * @return $this
     */
    public function setClp016($clp016)
    {
        $this->container['clp016'] = $clp016;

        return $this;
    }

    /**
     * Gets clp017
     *
     * @return float
     */
    public function getClp017()
    {
        return $this->container['clp017'];
    }

    /**
     * Sets clp017
     *
     * @param float $clp017 Percentage of Total number of open collections to Total number of collections
     *
     * @return $this
     */
    public function setClp017($clp017)
    {
        $this->container['clp017'] = $clp017;

        return $this;
    }

    /**
     * Gets clp018
     *
     * @return float
     */
    public function getClp018()
    {
        return $this->container['clp018'];
    }

    /**
     * Sets clp018
     *
     * @param float $clp018 Ratio of Total number of open collections to Total number of trades
     *
     * @return $this
     */
    public function setClp018($clp018)
    {
        $this->container['clp018'] = $clp018;

        return $this;
    }

    /**
     * Gets clp019
     *
     * @return float
     */
    public function getClp019()
    {
        return $this->container['clp019'];
    }

    /**
     * Sets clp019
     *
     * @param float $clp019 Percentage of Total number of open or closed unpaid collections to Total number of collections
     *
     * @return $this
     */
    public function setClp019($clp019)
    {
        $this->container['clp019'] = $clp019;

        return $this;
    }

    /**
     * Gets ctb001
     *
     * @return float
     */
    public function getCtb001()
    {
        return $this->container['ctb001'];
    }

    /**
     * Sets ctb001
     *
     * @param float $ctb001 Total balance of combined trades
     *
     * @return $this
     */
    public function setCtb001($ctb001)
    {
        $this->container['ctb001'] = $ctb001;

        return $this;
    }

    /**
     * Gets ctb002
     *
     * @return float
     */
    public function getCtb002()
    {
        return $this->container['ctb002'];
    }

    /**
     * Sets ctb002
     *
     * @param float $ctb002 Total balance of combined trades that is 1-30 days delinquent
     *
     * @return $this
     */
    public function setCtb002($ctb002)
    {
        $this->container['ctb002'] = $ctb002;

        return $this;
    }

    /**
     * Gets ctb003
     *
     * @return float
     */
    public function getCtb003()
    {
        return $this->container['ctb003'];
    }

    /**
     * Sets ctb003
     *
     * @param float $ctb003 Total balance of combined trades that is 31-60 days delinquent
     *
     * @return $this
     */
    public function setCtb003($ctb003)
    {
        $this->container['ctb003'] = $ctb003;

        return $this;
    }

    /**
     * Gets ctb004
     *
     * @return float
     */
    public function getCtb004()
    {
        return $this->container['ctb004'];
    }

    /**
     * Sets ctb004
     *
     * @param float $ctb004 Total balance of combined trades that is 61-90 days delinquent
     *
     * @return $this
     */
    public function setCtb004($ctb004)
    {
        $this->container['ctb004'] = $ctb004;

        return $this;
    }

    /**
     * Gets ctb005
     *
     * @return float
     */
    public function getCtb005()
    {
        return $this->container['ctb005'];
    }

    /**
     * Sets ctb005
     *
     * @param float $ctb005 Total balance of combined trades that is 91+ days delinquent
     *
     * @return $this
     */
    public function setCtb005($ctb005)
    {
        $this->container['ctb005'] = $ctb005;

        return $this;
    }

    /**
     * Gets ctb006
     *
     * @return float
     */
    public function getCtb006()
    {
        return $this->container['ctb006'];
    }

    /**
     * Sets ctb006
     *
     * @param float $ctb006 Total balance of combined trades that is current
     *
     * @return $this
     */
    public function setCtb006($ctb006)
    {
        $this->container['ctb006'] = $ctb006;

        return $this;
    }

    /**
     * Gets ctb007
     *
     * @return float
     */
    public function getCtb007()
    {
        return $this->container['ctb007'];
    }

    /**
     * Sets ctb007
     *
     * @param float $ctb007 Total balance of combined trades where worst delinquency = current
     *
     * @return $this
     */
    public function setCtb007($ctb007)
    {
        $this->container['ctb007'] = $ctb007;

        return $this;
    }

    /**
     * Gets ctb008
     *
     * @return float
     */
    public function getCtb008()
    {
        return $this->container['ctb008'];
    }

    /**
     * Sets ctb008
     *
     * @param float $ctb008 Total balance of combined trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setCtb008($ctb008)
    {
        $this->container['ctb008'] = $ctb008;

        return $this;
    }

    /**
     * Gets ctb009
     *
     * @return float
     */
    public function getCtb009()
    {
        return $this->container['ctb009'];
    }

    /**
     * Sets ctb009
     *
     * @param float $ctb009 Total balance of combined trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setCtb009($ctb009)
    {
        $this->container['ctb009'] = $ctb009;

        return $this;
    }

    /**
     * Gets ctb010
     *
     * @return float
     */
    public function getCtb010()
    {
        return $this->container['ctb010'];
    }

    /**
     * Sets ctb010
     *
     * @param float $ctb010 Total balance of combined trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setCtb010($ctb010)
    {
        $this->container['ctb010'] = $ctb010;

        return $this;
    }

    /**
     * Gets ctb011
     *
     * @return float
     */
    public function getCtb011()
    {
        return $this->container['ctb011'];
    }

    /**
     * Sets ctb011
     *
     * @param float $ctb011 Total balance of combined trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setCtb011($ctb011)
    {
        $this->container['ctb011'] = $ctb011;

        return $this;
    }

    /**
     * Gets ctb012
     *
     * @return float
     */
    public function getCtb012()
    {
        return $this->container['ctb012'];
    }

    /**
     * Sets ctb012
     *
     * @param float $ctb012 Total balance of combined trades where worst status = current
     *
     * @return $this
     */
    public function setCtb012($ctb012)
    {
        $this->container['ctb012'] = $ctb012;

        return $this;
    }

    /**
     * Gets ctb013
     *
     * @return float
     */
    public function getCtb013()
    {
        return $this->container['ctb013'];
    }

    /**
     * Sets ctb013
     *
     * @param float $ctb013 Total balance of combined trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setCtb013($ctb013)
    {
        $this->container['ctb013'] = $ctb013;

        return $this;
    }

    /**
     * Gets ctb014
     *
     * @return float
     */
    public function getCtb014()
    {
        return $this->container['ctb014'];
    }

    /**
     * Sets ctb014
     *
     * @param float $ctb014 Total balance of combined trades where worst status is a derogatory comment (bankrupcy, judgment, lien, etc)
     *
     * @return $this
     */
    public function setCtb014($ctb014)
    {
        $this->container['ctb014'] = $ctb014;

        return $this;
    }

    /**
     * Gets ctb015
     *
     * @return float
     */
    public function getCtb015()
    {
        return $this->container['ctb015'];
    }

    /**
     * Sets ctb015
     *
     * @param float $ctb015 Total balance of combined trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setCtb015($ctb015)
    {
        $this->container['ctb015'] = $ctb015;

        return $this;
    }

    /**
     * Gets ctb016
     *
     * @return float
     */
    public function getCtb016()
    {
        return $this->container['ctb016'];
    }

    /**
     * Sets ctb016
     *
     * @param float $ctb016 Total balance of combined trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setCtb016($ctb016)
    {
        $this->container['ctb016'] = $ctb016;

        return $this;
    }

    /**
     * Gets ctb017
     *
     * @return float
     */
    public function getCtb017()
    {
        return $this->container['ctb017'];
    }

    /**
     * Sets ctb017
     *
     * @param float $ctb017 Total balance of combined trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setCtb017($ctb017)
    {
        $this->container['ctb017'] = $ctb017;

        return $this;
    }

    /**
     * Gets ctb018
     *
     * @return float
     */
    public function getCtb018()
    {
        return $this->container['ctb018'];
    }

    /**
     * Sets ctb018
     *
     * @param float $ctb018 Total highest balance in past 12 months across all combined trades
     *
     * @return $this
     */
    public function setCtb018($ctb018)
    {
        $this->container['ctb018'] = $ctb018;

        return $this;
    }

    /**
     * Gets ctc021
     *
     * @return float
     */
    public function getCtc021()
    {
        return $this->container['ctc021'];
    }

    /**
     * Sets ctc021
     *
     * @param float $ctc021 Total number of combined trades
     *
     * @return $this
     */
    public function setCtc021($ctc021)
    {
        $this->container['ctc021'] = $ctc021;

        return $this;
    }

    /**
     * Gets ctc022
     *
     * @return float
     */
    public function getCtc022()
    {
        return $this->container['ctc022'];
    }

    /**
     * Sets ctc022
     *
     * @param float $ctc022 Total number of combined trades where worst delinquency = current
     *
     * @return $this
     */
    public function setCtc022($ctc022)
    {
        $this->container['ctc022'] = $ctc022;

        return $this;
    }

    /**
     * Gets ctc023
     *
     * @return float
     */
    public function getCtc023()
    {
        return $this->container['ctc023'];
    }

    /**
     * Sets ctc023
     *
     * @param float $ctc023 Total number of combined trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setCtc023($ctc023)
    {
        $this->container['ctc023'] = $ctc023;

        return $this;
    }

    /**
     * Gets ctc024
     *
     * @return float
     */
    public function getCtc024()
    {
        return $this->container['ctc024'];
    }

    /**
     * Sets ctc024
     *
     * @param float $ctc024 Total number of combined trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setCtc024($ctc024)
    {
        $this->container['ctc024'] = $ctc024;

        return $this;
    }

    /**
     * Gets ctc025
     *
     * @return float
     */
    public function getCtc025()
    {
        return $this->container['ctc025'];
    }

    /**
     * Sets ctc025
     *
     * @param float $ctc025 Total number of combined trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setCtc025($ctc025)
    {
        $this->container['ctc025'] = $ctc025;

        return $this;
    }

    /**
     * Gets ctc026
     *
     * @return float
     */
    public function getCtc026()
    {
        return $this->container['ctc026'];
    }

    /**
     * Sets ctc026
     *
     * @param float $ctc026 Total number of combined trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setCtc026($ctc026)
    {
        $this->container['ctc026'] = $ctc026;

        return $this;
    }

    /**
     * Gets ctc027
     *
     * @return float
     */
    public function getCtc027()
    {
        return $this->container['ctc027'];
    }

    /**
     * Sets ctc027
     *
     * @param float $ctc027 Total number of combined trades where worst status = current
     *
     * @return $this
     */
    public function setCtc027($ctc027)
    {
        $this->container['ctc027'] = $ctc027;

        return $this;
    }

    /**
     * Gets ctc028
     *
     * @return float
     */
    public function getCtc028()
    {
        return $this->container['ctc028'];
    }

    /**
     * Sets ctc028
     *
     * @param float $ctc028 Total number of combined trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setCtc028($ctc028)
    {
        $this->container['ctc028'] = $ctc028;

        return $this;
    }

    /**
     * Gets ctc029
     *
     * @return float
     */
    public function getCtc029()
    {
        return $this->container['ctc029'];
    }

    /**
     * Sets ctc029
     *
     * @param float $ctc029 Total number of combined trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setCtc029($ctc029)
    {
        $this->container['ctc029'] = $ctc029;

        return $this;
    }

    /**
     * Gets ctc030
     *
     * @return float
     */
    public function getCtc030()
    {
        return $this->container['ctc030'];
    }

    /**
     * Sets ctc030
     *
     * @param float $ctc030 Total number of combined trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setCtc030($ctc030)
    {
        $this->container['ctc030'] = $ctc030;

        return $this;
    }

    /**
     * Gets ctc031
     *
     * @return float
     */
    public function getCtc031()
    {
        return $this->container['ctc031'];
    }

    /**
     * Sets ctc031
     *
     * @param float $ctc031 Total number of combined trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setCtc031($ctc031)
    {
        $this->container['ctc031'] = $ctc031;

        return $this;
    }

    /**
     * Gets ctc032
     *
     * @return float
     */
    public function getCtc032()
    {
        return $this->container['ctc032'];
    }

    /**
     * Sets ctc032
     *
     * @param float $ctc032 Total number of combined trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setCtc032($ctc032)
    {
        $this->container['ctc032'] = $ctc032;

        return $this;
    }

    /**
     * Gets ctc033
     *
     * @return float
     */
    public function getCtc033()
    {
        return $this->container['ctc033'];
    }

    /**
     * Sets ctc033
     *
     * @param float $ctc033 Total number of combined trades with DBT greater than 0
     *
     * @return $this
     */
    public function setCtc033($ctc033)
    {
        $this->container['ctc033'] = $ctc033;

        return $this;
    }

    /**
     * Gets ctc034
     *
     * @return float
     */
    public function getCtc034()
    {
        return $this->container['ctc034'];
    }

    /**
     * Sets ctc034
     *
     * @param float $ctc034 Total number of combined trades with DBT greater than 30
     *
     * @return $this
     */
    public function setCtc034($ctc034)
    {
        $this->container['ctc034'] = $ctc034;

        return $this;
    }

    /**
     * Gets ctc035
     *
     * @return float
     */
    public function getCtc035()
    {
        return $this->container['ctc035'];
    }

    /**
     * Sets ctc035
     *
     * @param float $ctc035 Total number of combined trades with DBT greater than 60
     *
     * @return $this
     */
    public function setCtc035($ctc035)
    {
        $this->container['ctc035'] = $ctc035;

        return $this;
    }

    /**
     * Gets ctc036
     *
     * @return float
     */
    public function getCtc036()
    {
        return $this->container['ctc036'];
    }

    /**
     * Sets ctc036
     *
     * @param float $ctc036 Total number of combined trades with DBT greater than 90
     *
     * @return $this
     */
    public function setCtc036($ctc036)
    {
        $this->container['ctc036'] = $ctc036;

        return $this;
    }

    /**
     * Gets ctd038
     *
     * @return float
     */
    public function getCtd038()
    {
        return $this->container['ctd038'];
    }

    /**
     * Sets ctd038
     *
     * @param float $ctd038 DBT of combined trades
     *
     * @return $this
     */
    public function setCtd038($ctd038)
    {
        $this->container['ctd038'] = $ctd038;

        return $this;
    }

    /**
     * Gets ctp039
     *
     * @return float
     */
    public function getCtp039()
    {
        return $this->container['ctp039'];
    }

    /**
     * Sets ctp039
     *
     * @param float $ctp039 Percentage of Total combined balance to combined trades Total highest balance in past 12 months
     *
     * @return $this
     */
    public function setCtp039($ctp039)
    {
        $this->container['ctp039'] = $ctp039;

        return $this;
    }

    /**
     * Gets ctp040
     *
     * @return float
     */
    public function getCtp040()
    {
        return $this->container['ctp040'];
    }

    /**
     * Sets ctp040
     *
     * @param float $ctp040 Percentage of Total balance of combined trades to Total trade balance
     *
     * @return $this
     */
    public function setCtp040($ctp040)
    {
        $this->container['ctp040'] = $ctp040;

        return $this;
    }

    /**
     * Gets ctp041
     *
     * @return float
     */
    public function getCtp041()
    {
        return $this->container['ctp041'];
    }

    /**
     * Sets ctp041
     *
     * @param float $ctp041 Percentage of Total number of combined trades to Total number of trades
     *
     * @return $this
     */
    public function setCtp041($ctp041)
    {
        $this->container['ctp041'] = $ctp041;

        return $this;
    }

    /**
     * Gets dmo003
     *
     * @return string
     */
    public function getDmo003()
    {
        return $this->container['dmo003'];
    }

    /**
     * Sets dmo003
     *
     * @param string $dmo003 Business type code: C = Corporation, F = Fortune 1000, H = Chain Store, I = Institutions, N = Non-Profit, P = Partnership, R = Residential (Cottage), S = Sole Proprietor, X = S Corporation, Y = Corporation, Blank = Not Available
     *
     * @return $this
     */
    public function setDmo003($dmo003)
    {
        $this->container['dmo003'] = $dmo003;

        return $this;
    }

    /**
     * Gets dmo009
     *
     * @return string
     */
    public function getDmo009()
    {
        return $this->container['dmo009'];
    }

    /**
     * Sets dmo009
     *
     * @param string $dmo009 Date the first trade lines were contributed and the file was created within Experian's database
     *
     * @return $this
     */
    public function setDmo009($dmo009)
    {
        $this->container['dmo009'] = $dmo009;

        return $this;
    }

    /**
     * Gets dmo013
     *
     * @return string
     */
    public function getDmo013()
    {
        return $this->container['dmo013'];
    }

    /**
     * Sets dmo013
     *
     * @param string $dmo013 SIC (Standard industrial classification) code assigned by the government for a company's primary business activity
     *
     * @return $this
     */
    public function setDmo013($dmo013)
    {
        $this->container['dmo013'] = $dmo013;

        return $this;
    }

    /**
     * Gets iqc001
     *
     * @return float
     */
    public function getIqc001()
    {
        return $this->container['iqc001'];
    }

    /**
     * Sets iqc001
     *
     * @param float $iqc001 Total number of inquiries in the last nine full months
     *
     * @return $this
     */
    public function setIqc001($iqc001)
    {
        $this->container['iqc001'] = $iqc001;

        return $this;
    }

    /**
     * Gets iqc002
     *
     * @return float
     */
    public function getIqc002()
    {
        return $this->container['iqc002'];
    }

    /**
     * Sets iqc002
     *
     * @param float $iqc002 Total number of inquiries in the last six full months
     *
     * @return $this
     */
    public function setIqc002($iqc002)
    {
        $this->container['iqc002'] = $iqc002;

        return $this;
    }

    /**
     * Gets iqc003
     *
     * @return float
     */
    public function getIqc003()
    {
        return $this->container['iqc003'];
    }

    /**
     * Sets iqc003
     *
     * @param float $iqc003 Total number of inquiries in the last three full months
     *
     * @return $this
     */
    public function setIqc003($iqc003)
    {
        $this->container['iqc003'] = $iqc003;

        return $this;
    }

    /**
     * Gets jdb001
     *
     * @return float
     */
    public function getJdb001()
    {
        return $this->container['jdb001'];
    }

    /**
     * Sets jdb001
     *
     * @param float $jdb001 Total amount of judgments filed within 12 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return $this
     */
    public function setJdb001($jdb001)
    {
        $this->container['jdb001'] = $jdb001;

        return $this;
    }

    /**
     * Gets jdb002
     *
     * @return float
     */
    public function getJdb002()
    {
        return $this->container['jdb002'];
    }

    /**
     * Sets jdb002
     *
     * @param float $jdb002 Total amount of judgments filed within 24 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return $this
     */
    public function setJdb002($jdb002)
    {
        $this->container['jdb002'] = $jdb002;

        return $this;
    }

    /**
     * Gets jdb003
     *
     * @return float
     */
    public function getJdb003()
    {
        return $this->container['jdb003'];
    }

    /**
     * Sets jdb003
     *
     * @param float $jdb003 Total amount of judgments filed within 6 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return $this
     */
    public function setJdb003($jdb003)
    {
        $this->container['jdb003'] = $jdb003;

        return $this;
    }

    /**
     * Gets jdb004
     *
     * @return float
     */
    public function getJdb004()
    {
        return $this->container['jdb004'];
    }

    /**
     * Sets jdb004
     *
     * @param float $jdb004 Total liability amount for original judgments filed
     *
     * @return $this
     */
    public function setJdb004($jdb004)
    {
        $this->container['jdb004'] = $jdb004;

        return $this;
    }

    /**
     * Gets jdb005
     *
     * @return float
     */
    public function getJdb005()
    {
        return $this->container['jdb005'];
    }

    /**
     * Sets jdb005
     *
     * @param float $jdb005 Total liability amount for judgments (including satisfied, released, etc) filed within the last 24 months of profile date
     *
     * @return $this
     */
    public function setJdb005($jdb005)
    {
        $this->container['jdb005'] = $jdb005;

        return $this;
    }

    /**
     * Gets jdb006
     *
     * @return float
     */
    public function getJdb006()
    {
        return $this->container['jdb006'];
    }

    /**
     * Sets jdb006
     *
     * @param float $jdb006 Total liability amount for non-filed judgment actions
     *
     * @return $this
     */
    public function setJdb006($jdb006)
    {
        $this->container['jdb006'] = $jdb006;

        return $this;
    }

    /**
     * Gets jdc007
     *
     * @return float
     */
    public function getJdc007()
    {
        return $this->container['jdc007'];
    }

    /**
     * Sets jdc007
     *
     * @param float $jdc007 Total number of judgment filed within 12 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return $this
     */
    public function setJdc007($jdc007)
    {
        $this->container['jdc007'] = $jdc007;

        return $this;
    }

    /**
     * Gets jdc009
     *
     * @return float
     */
    public function getJdc009()
    {
        return $this->container['jdc009'];
    }

    /**
     * Sets jdc009
     *
     * @param float $jdc009 Total number of judgment filed within 6 months of profile date (Excluding Release, Satisfied, Abstract, or Vacate)
     *
     * @return $this
     */
    public function setJdc009($jdc009)
    {
        $this->container['jdc009'] = $jdc009;

        return $this;
    }

    /**
     * Gets jdc010
     *
     * @return float
     */
    public function getJdc010()
    {
        return $this->container['jdc010'];
    }

    /**
     * Sets jdc010
     *
     * @param float $jdc010 Total number of original judgments filed
     *
     * @return $this
     */
    public function setJdc010($jdc010)
    {
        $this->container['jdc010'] = $jdc010;

        return $this;
    }

    /**
     * Gets jdc011
     *
     * @return float
     */
    public function getJdc011()
    {
        return $this->container['jdc011'];
    }

    /**
     * Sets jdc011
     *
     * @param float $jdc011 Total number of judgments (including satisfied, released, etc) filed within 24 months of profile date
     *
     * @return $this
     */
    public function setJdc011($jdc011)
    {
        $this->container['jdc011'] = $jdc011;

        return $this;
    }

    /**
     * Gets jdc012
     *
     * @return float
     */
    public function getJdc012()
    {
        return $this->container['jdc012'];
    }

    /**
     * Sets jdc012
     *
     * @param float $jdc012 Total number of non-filed judgment actions
     *
     * @return $this
     */
    public function setJdc012($jdc012)
    {
        $this->container['jdc012'] = $jdc012;

        return $this;
    }

    /**
     * Gets jdo013
     *
     * @return float
     */
    public function getJdo013()
    {
        return $this->container['jdo013'];
    }

    /**
     * Sets jdo013
     *
     * @param float $jdo013 Age in months of most recent filed judgment
     *
     * @return $this
     */
    public function setJdo013($jdo013)
    {
        $this->container['jdo013'] = $jdo013;

        return $this;
    }

    /**
     * Gets jdo014
     *
     * @return float
     */
    public function getJdo014()
    {
        return $this->container['jdo014'];
    }

    /**
     * Sets jdo014
     *
     * @param float $jdo014 Age in months of most recent non-filed judgment action
     *
     * @return $this
     */
    public function setJdo014($jdo014)
    {
        $this->container['jdo014'] = $jdo014;

        return $this;
    }

    /**
     * Gets jdp015
     *
     * @return float
     */
    public function getJdp015()
    {
        return $this->container['jdp015'];
    }

    /**
     * Sets jdp015
     *
     * @param float $jdp015 Percentage of Total judgment amount filed with 12 months to Total balance
     *
     * @return $this
     */
    public function setJdp015($jdp015)
    {
        $this->container['jdp015'] = $jdp015;

        return $this;
    }

    /**
     * Gets jdp016
     *
     * @return float
     */
    public function getJdp016()
    {
        return $this->container['jdp016'];
    }

    /**
     * Sets jdp016
     *
     * @param float $jdp016 Percentage of Total judgment amount filed with 24 months to Total balance
     *
     * @return $this
     */
    public function setJdp016($jdp016)
    {
        $this->container['jdp016'] = $jdp016;

        return $this;
    }

    /**
     * Gets jdp017
     *
     * @return float
     */
    public function getJdp017()
    {
        return $this->container['jdp017'];
    }

    /**
     * Sets jdp017
     *
     * @param float $jdp017 Percentage of Total judgment amount filed with 6 months to Total balance
     *
     * @return $this
     */
    public function setJdp017($jdp017)
    {
        $this->container['jdp017'] = $jdp017;

        return $this;
    }

    /**
     * Gets lgc002
     *
     * @return float
     */
    public function getLgc002()
    {
        return $this->container['lgc002'];
    }

    /**
     * Sets lgc002
     *
     * @param float $lgc002 Total number of legal filings (bankruptcies, tax liens, and judgments) in past 12 months
     *
     * @return $this
     */
    public function setLgc002($lgc002)
    {
        $this->container['lgc002'] = $lgc002;

        return $this;
    }

    /**
     * Gets lgc003
     *
     * @return float
     */
    public function getLgc003()
    {
        return $this->container['lgc003'];
    }

    /**
     * Sets lgc003
     *
     * @param float $lgc003 Total number of legal filings (bankruptcies, tax liens, and judgments) in past 6 months
     *
     * @return $this
     */
    public function setLgc003($lgc003)
    {
        $this->container['lgc003'] = $lgc003;

        return $this;
    }

    /**
     * Gets lgc004
     *
     * @return float
     */
    public function getLgc004()
    {
        return $this->container['lgc004'];
    }

    /**
     * Sets lgc004
     *
     * @param float $lgc004 Total number of legal filings Includes bankruptcies, tax liens, and judgments
     *
     * @return $this
     */
    public function setLgc004($lgc004)
    {
        $this->container['lgc004'] = $lgc004;

        return $this;
    }

    /**
     * Gets lsb001
     *
     * @return float
     */
    public function getLsb001()
    {
        return $this->container['lsb001'];
    }

    /**
     * Sets lsb001
     *
     * @param float $lsb001 Total original amount for all leasing trades
     *
     * @return $this
     */
    public function setLsb001($lsb001)
    {
        $this->container['lsb001'] = $lsb001;

        return $this;
    }

    /**
     * Gets lsb002
     *
     * @return float
     */
    public function getLsb002()
    {
        return $this->container['lsb002'];
    }

    /**
     * Sets lsb002
     *
     * @param float $lsb002 Total amount due on next scheduled payment (excluding late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return $this
     */
    public function setLsb002($lsb002)
    {
        $this->container['lsb002'] = $lsb002;

        return $this;
    }

    /**
     * Gets lsb003
     *
     * @return float
     */
    public function getLsb003()
    {
        return $this->container['lsb003'];
    }

    /**
     * Sets lsb003
     *
     * @param float $lsb003 Total amount due on next scheduled payment (including late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return $this
     */
    public function setLsb003($lsb003)
    {
        $this->container['lsb003'] = $lsb003;

        return $this;
    }

    /**
     * Gets lsb004
     *
     * @return float
     */
    public function getLsb004()
    {
        return $this->container['lsb004'];
    }

    /**
     * Sets lsb004
     *
     * @param float $lsb004 Total amount past due for leasing trades that have an amount outstanding which has exceeded the final due date by at least 1 day
     *
     * @return $this
     */
    public function setLsb004($lsb004)
    {
        $this->container['lsb004'] = $lsb004;

        return $this;
    }

    /**
     * Gets lsb005
     *
     * @return float
     */
    public function getLsb005()
    {
        return $this->container['lsb005'];
    }

    /**
     * Sets lsb005
     *
     * @param float $lsb005 Total remaining balance due for leasing trades with a remaining balance due (including interest)
     *
     * @return $this
     */
    public function setLsb005($lsb005)
    {
        $this->container['lsb005'] = $lsb005;

        return $this;
    }

    /**
     * Gets lsb006
     *
     * @return float
     */
    public function getLsb006()
    {
        return $this->container['lsb006'];
    }

    /**
     * Sets lsb006
     *
     * @param float $lsb006 Maximum original amount for a leasing trade
     *
     * @return $this
     */
    public function setLsb006($lsb006)
    {
        $this->container['lsb006'] = $lsb006;

        return $this;
    }

    /**
     * Gets lsb007
     *
     * @return float
     */
    public function getLsb007()
    {
        return $this->container['lsb007'];
    }

    /**
     * Sets lsb007
     *
     * @param float $lsb007 Maximum amount due on next scheduled payment (excluding late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return $this
     */
    public function setLsb007($lsb007)
    {
        $this->container['lsb007'] = $lsb007;

        return $this;
    }

    /**
     * Gets lsb008
     *
     * @return float
     */
    public function getLsb008()
    {
        return $this->container['lsb008'];
    }

    /**
     * Sets lsb008
     *
     * @param float $lsb008 Maximum amount due on next scheduled payment (including late payments & charges) for leasing trades with a scheduled amount due
     *
     * @return $this
     */
    public function setLsb008($lsb008)
    {
        $this->container['lsb008'] = $lsb008;

        return $this;
    }

    /**
     * Gets lsb009
     *
     * @return float
     */
    public function getLsb009()
    {
        return $this->container['lsb009'];
    }

    /**
     * Sets lsb009
     *
     * @param float $lsb009 Maximum remaining balance due for leasing trades with a remaining balance due (including interest)
     *
     * @return $this
     */
    public function setLsb009($lsb009)
    {
        $this->container['lsb009'] = $lsb009;

        return $this;
    }

    /**
     * Gets lsc010
     *
     * @return float
     */
    public function getLsc010()
    {
        return $this->container['lsc010'];
    }

    /**
     * Sets lsc010
     *
     * @param float $lsc010 Total number of leasing trades
     *
     * @return $this
     */
    public function setLsc010($lsc010)
    {
        $this->container['lsc010'] = $lsc010;

        return $this;
    }

    /**
     * Gets lsc011
     *
     * @return float
     */
    public function getLsc011()
    {
        return $this->container['lsc011'];
    }

    /**
     * Sets lsc011
     *
     * @param float $lsc011 Total number of leasing trades with variable terms
     *
     * @return $this
     */
    public function setLsc011($lsc011)
    {
        $this->container['lsc011'] = $lsc011;

        return $this;
    }

    /**
     * Gets lsc012
     *
     * @return float
     */
    public function getLsc012()
    {
        return $this->container['lsc012'];
    }

    /**
     * Sets lsc012
     *
     * @param float $lsc012 Total number of leasing trades with quarterly, semi-annual, or annual payments
     *
     * @return $this
     */
    public function setLsc012($lsc012)
    {
        $this->container['lsc012'] = $lsc012;

        return $this;
    }

    /**
     * Gets lsc013
     *
     * @return float
     */
    public function getLsc013()
    {
        return $this->container['lsc013'];
    }

    /**
     * Sets lsc013
     *
     * @param float $lsc013 Total number of leasing trades with satisfactory payment
     *
     * @return $this
     */
    public function setLsc013($lsc013)
    {
        $this->container['lsc013'] = $lsc013;

        return $this;
    }

    /**
     * Gets lsc014
     *
     * @return float
     */
    public function getLsc014()
    {
        return $this->container['lsc014'];
    }

    /**
     * Sets lsc014
     *
     * @param float $lsc014 Total number of leasing trades with slow pay or derogatory comment codes
     *
     * @return $this
     */
    public function setLsc014($lsc014)
    {
        $this->container['lsc014'] = $lsc014;

        return $this;
    }

    /**
     * Gets lsc015
     *
     * @return float
     */
    public function getLsc015()
    {
        return $this->container['lsc015'];
    }

    /**
     * Sets lsc015
     *
     * @param float $lsc015 Total number of vehicle leasing trades
     *
     * @return $this
     */
    public function setLsc015($lsc015)
    {
        $this->container['lsc015'] = $lsc015;

        return $this;
    }

    /**
     * Gets lsc016
     *
     * @return float
     */
    public function getLsc016()
    {
        return $this->container['lsc016'];
    }

    /**
     * Sets lsc016
     *
     * @param float $lsc016 Total number of office equipment leasing trades
     *
     * @return $this
     */
    public function setLsc016($lsc016)
    {
        $this->container['lsc016'] = $lsc016;

        return $this;
    }

    /**
     * Gets lsc017
     *
     * @return float
     */
    public function getLsc017()
    {
        return $this->container['lsc017'];
    }

    /**
     * Sets lsc017
     *
     * @param float $lsc017 Total number of capital, operating, or finance leasing trades
     *
     * @return $this
     */
    public function setLsc017($lsc017)
    {
        $this->container['lsc017'] = $lsc017;

        return $this;
    }

    /**
     * Gets lsc018
     *
     * @return float
     */
    public function getLsc018()
    {
        return $this->container['lsc018'];
    }

    /**
     * Sets lsc018
     *
     * @param float $lsc018 Total number of leasing trades with a term between 1 and 12 months
     *
     * @return $this
     */
    public function setLsc018($lsc018)
    {
        $this->container['lsc018'] = $lsc018;

        return $this;
    }

    /**
     * Gets lsc019
     *
     * @return float
     */
    public function getLsc019()
    {
        return $this->container['lsc019'];
    }

    /**
     * Sets lsc019
     *
     * @param float $lsc019 Total number of leasing trades with a term between 13 and 24 months
     *
     * @return $this
     */
    public function setLsc019($lsc019)
    {
        $this->container['lsc019'] = $lsc019;

        return $this;
    }

    /**
     * Gets lsc020
     *
     * @return float
     */
    public function getLsc020()
    {
        return $this->container['lsc020'];
    }

    /**
     * Sets lsc020
     *
     * @param float $lsc020 Total number of leasing trades with a term between 15 and 60 months
     *
     * @return $this
     */
    public function setLsc020($lsc020)
    {
        $this->container['lsc020'] = $lsc020;

        return $this;
    }

    /**
     * Gets lsc021
     *
     * @return float
     */
    public function getLsc021()
    {
        return $this->container['lsc021'];
    }

    /**
     * Sets lsc021
     *
     * @param float $lsc021 Total number of leasing trades with a term greater than 60 months
     *
     * @return $this
     */
    public function setLsc021($lsc021)
    {
        $this->container['lsc021'] = $lsc021;

        return $this;
    }

    /**
     * Gets lsc022
     *
     * @return float
     */
    public function getLsc022()
    {
        return $this->container['lsc022'];
    }

    /**
     * Sets lsc022
     *
     * @param float $lsc022 Total number of leasing trades with a current scheduled amount due (excluding late payments & charges)
     *
     * @return $this
     */
    public function setLsc022($lsc022)
    {
        $this->container['lsc022'] = $lsc022;

        return $this;
    }

    /**
     * Gets lsc023
     *
     * @return float
     */
    public function getLsc023()
    {
        return $this->container['lsc023'];
    }

    /**
     * Sets lsc023
     *
     * @param float $lsc023 Total number of leasing trades with a current scheduled amount due (including late payments & charges)
     *
     * @return $this
     */
    public function setLsc023($lsc023)
    {
        $this->container['lsc023'] = $lsc023;

        return $this;
    }

    /**
     * Gets lsc024
     *
     * @return float
     */
    public function getLsc024()
    {
        return $this->container['lsc024'];
    }

    /**
     * Sets lsc024
     *
     * @param float $lsc024 Total number of leasing trades that have an amount outstanding which has exceeded the final due date by at least 1 day
     *
     * @return $this
     */
    public function setLsc024($lsc024)
    {
        $this->container['lsc024'] = $lsc024;

        return $this;
    }

    /**
     * Gets lsc025
     *
     * @return float
     */
    public function getLsc025()
    {
        return $this->container['lsc025'];
    }

    /**
     * Sets lsc025
     *
     * @param float $lsc025 Total number of leasing trades with a remaining balance due (including interest)
     *
     * @return $this
     */
    public function setLsc025($lsc025)
    {
        $this->container['lsc025'] = $lsc025;

        return $this;
    }

    /**
     * Gets lsc026
     *
     * @return float
     */
    public function getLsc026()
    {
        return $this->container['lsc026'];
    }

    /**
     * Sets lsc026
     *
     * @param float $lsc026 Total number of leasing trades with one or more payments that are current during the lease term to date
     *
     * @return $this
     */
    public function setLsc026($lsc026)
    {
        $this->container['lsc026'] = $lsc026;

        return $this;
    }

    /**
     * Gets lsc027
     *
     * @return float
     */
    public function getLsc027()
    {
        return $this->container['lsc027'];
    }

    /**
     * Sets lsc027
     *
     * @param float $lsc027 Total number of leasing trades with one or more payments made 1-30 days late during the lease term to date
     *
     * @return $this
     */
    public function setLsc027($lsc027)
    {
        $this->container['lsc027'] = $lsc027;

        return $this;
    }

    /**
     * Gets lsc028
     *
     * @return float
     */
    public function getLsc028()
    {
        return $this->container['lsc028'];
    }

    /**
     * Sets lsc028
     *
     * @param float $lsc028 Total number of leasing trades with one or more payments made 31-60 days late during the lease term to date
     *
     * @return $this
     */
    public function setLsc028($lsc028)
    {
        $this->container['lsc028'] = $lsc028;

        return $this;
    }

    /**
     * Gets lsc029
     *
     * @return float
     */
    public function getLsc029()
    {
        return $this->container['lsc029'];
    }

    /**
     * Sets lsc029
     *
     * @param float $lsc029 Total number of leasing trades with one or more payments made 61-90 days late during the lease term to date
     *
     * @return $this
     */
    public function setLsc029($lsc029)
    {
        $this->container['lsc029'] = $lsc029;

        return $this;
    }

    /**
     * Gets lsc030
     *
     * @return float
     */
    public function getLsc030()
    {
        return $this->container['lsc030'];
    }

    /**
     * Sets lsc030
     *
     * @param float $lsc030 Total number of leasing trades with one or more payments 91+ days late during the lease term to date
     *
     * @return $this
     */
    public function setLsc030($lsc030)
    {
        $this->container['lsc030'] = $lsc030;

        return $this;
    }

    /**
     * Gets lsc031
     *
     * @return float
     */
    public function getLsc031()
    {
        return $this->container['lsc031'];
    }

    /**
     * Sets lsc031
     *
     * @param float $lsc031 Total number of late payments for leasing trades extracted within the last 6 months of the profile date
     *
     * @return $this
     */
    public function setLsc031($lsc031)
    {
        $this->container['lsc031'] = $lsc031;

        return $this;
    }

    /**
     * Gets lsc032
     *
     * @return float
     */
    public function getLsc032()
    {
        return $this->container['lsc032'];
    }

    /**
     * Sets lsc032
     *
     * @param float $lsc032 Total number of current payments for leasing trades extracted within the last 6 months of the profile date
     *
     * @return $this
     */
    public function setLsc032($lsc032)
    {
        $this->container['lsc032'] = $lsc032;

        return $this;
    }

    /**
     * Gets lsc033
     *
     * @return float
     */
    public function getLsc033()
    {
        return $this->container['lsc033'];
    }

    /**
     * Sets lsc033
     *
     * @param float $lsc033 Total number of outstanding payments, overdue by at least one day, for leasing trades extracted within the last 6 months of the profile date
     *
     * @return $this
     */
    public function setLsc033($lsc033)
    {
        $this->container['lsc033'] = $lsc033;

        return $this;
    }

    /**
     * Gets lsp034
     *
     * @return float
     */
    public function getLsp034()
    {
        return $this->container['lsp034'];
    }

    /**
     * Sets lsp034
     *
     * @param float $lsp034 Percentage of Total Amount of Leasing trades to Total balance of trades
     *
     * @return $this
     */
    public function setLsp034($lsp034)
    {
        $this->container['lsp034'] = $lsp034;

        return $this;
    }

    /**
     * Gets lsp035
     *
     * @return float
     */
    public function getLsp035()
    {
        return $this->container['lsp035'];
    }

    /**
     * Sets lsp035
     *
     * @param float $lsp035 Percentage of Total number of Leasing trades to Total number of trades
     *
     * @return $this
     */
    public function setLsp035($lsp035)
    {
        $this->container['lsp035'] = $lsp035;

        return $this;
    }

    /**
     * Gets ntb001
     *
     * @return float
     */
    public function getNtb001()
    {
        return $this->container['ntb001'];
    }

    /**
     * Sets ntb001
     *
     * @param float $ntb001 Total balance of new trades
     *
     * @return $this
     */
    public function setNtb001($ntb001)
    {
        $this->container['ntb001'] = $ntb001;

        return $this;
    }

    /**
     * Gets ntb002
     *
     * @return float
     */
    public function getNtb002()
    {
        return $this->container['ntb002'];
    }

    /**
     * Sets ntb002
     *
     * @param float $ntb002 Total balance of new trades that is 1-30 days delinquent
     *
     * @return $this
     */
    public function setNtb002($ntb002)
    {
        $this->container['ntb002'] = $ntb002;

        return $this;
    }

    /**
     * Gets ntb003
     *
     * @return float
     */
    public function getNtb003()
    {
        return $this->container['ntb003'];
    }

    /**
     * Sets ntb003
     *
     * @param float $ntb003 Total balance of new trades that is 31-60 days delinquent
     *
     * @return $this
     */
    public function setNtb003($ntb003)
    {
        $this->container['ntb003'] = $ntb003;

        return $this;
    }

    /**
     * Gets ntb004
     *
     * @return float
     */
    public function getNtb004()
    {
        return $this->container['ntb004'];
    }

    /**
     * Sets ntb004
     *
     * @param float $ntb004 Total balance of new trades that is 61-90 days delinquent
     *
     * @return $this
     */
    public function setNtb004($ntb004)
    {
        $this->container['ntb004'] = $ntb004;

        return $this;
    }

    /**
     * Gets ntb005
     *
     * @return float
     */
    public function getNtb005()
    {
        return $this->container['ntb005'];
    }

    /**
     * Sets ntb005
     *
     * @param float $ntb005 Total balance of new trades that is 91+ days delinquent
     *
     * @return $this
     */
    public function setNtb005($ntb005)
    {
        $this->container['ntb005'] = $ntb005;

        return $this;
    }

    /**
     * Gets ntb006
     *
     * @return float
     */
    public function getNtb006()
    {
        return $this->container['ntb006'];
    }

    /**
     * Sets ntb006
     *
     * @param float $ntb006 Total balance of new trades that is current
     *
     * @return $this
     */
    public function setNtb006($ntb006)
    {
        $this->container['ntb006'] = $ntb006;

        return $this;
    }

    /**
     * Gets ntb007
     *
     * @return float
     */
    public function getNtb007()
    {
        return $this->container['ntb007'];
    }

    /**
     * Sets ntb007
     *
     * @param float $ntb007 Total balance of new trades where worst delinquency = current
     *
     * @return $this
     */
    public function setNtb007($ntb007)
    {
        $this->container['ntb007'] = $ntb007;

        return $this;
    }

    /**
     * Gets ntb008
     *
     * @return float
     */
    public function getNtb008()
    {
        return $this->container['ntb008'];
    }

    /**
     * Sets ntb008
     *
     * @param float $ntb008 Total balance of new trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setNtb008($ntb008)
    {
        $this->container['ntb008'] = $ntb008;

        return $this;
    }

    /**
     * Gets ntb009
     *
     * @return float
     */
    public function getNtb009()
    {
        return $this->container['ntb009'];
    }

    /**
     * Sets ntb009
     *
     * @param float $ntb009 Total balance of new trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setNtb009($ntb009)
    {
        $this->container['ntb009'] = $ntb009;

        return $this;
    }

    /**
     * Gets ntb010
     *
     * @return float
     */
    public function getNtb010()
    {
        return $this->container['ntb010'];
    }

    /**
     * Sets ntb010
     *
     * @param float $ntb010 Total balance of new trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setNtb010($ntb010)
    {
        $this->container['ntb010'] = $ntb010;

        return $this;
    }

    /**
     * Gets ntb011
     *
     * @return float
     */
    public function getNtb011()
    {
        return $this->container['ntb011'];
    }

    /**
     * Sets ntb011
     *
     * @param float $ntb011 Total balance of new trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setNtb011($ntb011)
    {
        $this->container['ntb011'] = $ntb011;

        return $this;
    }

    /**
     * Gets ntb012
     *
     * @return float
     */
    public function getNtb012()
    {
        return $this->container['ntb012'];
    }

    /**
     * Sets ntb012
     *
     * @param float $ntb012 Total balance of new trades where worst status = current
     *
     * @return $this
     */
    public function setNtb012($ntb012)
    {
        $this->container['ntb012'] = $ntb012;

        return $this;
    }

    /**
     * Gets ntb013
     *
     * @return float
     */
    public function getNtb013()
    {
        return $this->container['ntb013'];
    }

    /**
     * Sets ntb013
     *
     * @param float $ntb013 Total balance of new trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setNtb013($ntb013)
    {
        $this->container['ntb013'] = $ntb013;

        return $this;
    }

    /**
     * Gets ntb014
     *
     * @return float
     */
    public function getNtb014()
    {
        return $this->container['ntb014'];
    }

    /**
     * Sets ntb014
     *
     * @param float $ntb014 Total balance of new trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setNtb014($ntb014)
    {
        $this->container['ntb014'] = $ntb014;

        return $this;
    }

    /**
     * Gets ntb015
     *
     * @return float
     */
    public function getNtb015()
    {
        return $this->container['ntb015'];
    }

    /**
     * Sets ntb015
     *
     * @param float $ntb015 Total balance of new trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setNtb015($ntb015)
    {
        $this->container['ntb015'] = $ntb015;

        return $this;
    }

    /**
     * Gets ntb016
     *
     * @return float
     */
    public function getNtb016()
    {
        return $this->container['ntb016'];
    }

    /**
     * Sets ntb016
     *
     * @param float $ntb016 Total balance of new trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setNtb016($ntb016)
    {
        $this->container['ntb016'] = $ntb016;

        return $this;
    }

    /**
     * Gets ntb017
     *
     * @return float
     */
    public function getNtb017()
    {
        return $this->container['ntb017'];
    }

    /**
     * Sets ntb017
     *
     * @param float $ntb017 Total balance of new trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setNtb017($ntb017)
    {
        $this->container['ntb017'] = $ntb017;

        return $this;
    }

    /**
     * Gets ntb018
     *
     * @return float
     */
    public function getNtb018()
    {
        return $this->container['ntb018'];
    }

    /**
     * Sets ntb018
     *
     * @param float $ntb018 Total highest balance in past 12 months across all new trades (Note: for trades reported by new contributors, highest balance reported by contributor may go back 12 months)
     *
     * @return $this
     */
    public function setNtb018($ntb018)
    {
        $this->container['ntb018'] = $ntb018;

        return $this;
    }

    /**
     * Gets ntc020
     *
     * @return float
     */
    public function getNtc020()
    {
        return $this->container['ntc020'];
    }

    /**
     * Sets ntc020
     *
     * @param float $ntc020 Total number of new trades
     *
     * @return $this
     */
    public function setNtc020($ntc020)
    {
        $this->container['ntc020'] = $ntc020;

        return $this;
    }

    /**
     * Gets ntc021
     *
     * @return float
     */
    public function getNtc021()
    {
        return $this->container['ntc021'];
    }

    /**
     * Sets ntc021
     *
     * @param float $ntc021 Total number of new trades where worst delinquency = current
     *
     * @return $this
     */
    public function setNtc021($ntc021)
    {
        $this->container['ntc021'] = $ntc021;

        return $this;
    }

    /**
     * Gets ntc022
     *
     * @return float
     */
    public function getNtc022()
    {
        return $this->container['ntc022'];
    }

    /**
     * Sets ntc022
     *
     * @param float $ntc022 Total number of new trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setNtc022($ntc022)
    {
        $this->container['ntc022'] = $ntc022;

        return $this;
    }

    /**
     * Gets ntc023
     *
     * @return float
     */
    public function getNtc023()
    {
        return $this->container['ntc023'];
    }

    /**
     * Sets ntc023
     *
     * @param float $ntc023 Total number of new trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setNtc023($ntc023)
    {
        $this->container['ntc023'] = $ntc023;

        return $this;
    }

    /**
     * Gets ntc024
     *
     * @return float
     */
    public function getNtc024()
    {
        return $this->container['ntc024'];
    }

    /**
     * Sets ntc024
     *
     * @param float $ntc024 Total number of new trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setNtc024($ntc024)
    {
        $this->container['ntc024'] = $ntc024;

        return $this;
    }

    /**
     * Gets ntc025
     *
     * @return float
     */
    public function getNtc025()
    {
        return $this->container['ntc025'];
    }

    /**
     * Sets ntc025
     *
     * @param float $ntc025 Total number of new trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setNtc025($ntc025)
    {
        $this->container['ntc025'] = $ntc025;

        return $this;
    }

    /**
     * Gets ntc026
     *
     * @return float
     */
    public function getNtc026()
    {
        return $this->container['ntc026'];
    }

    /**
     * Sets ntc026
     *
     * @param float $ntc026 Total number of new trades where worst status = current
     *
     * @return $this
     */
    public function setNtc026($ntc026)
    {
        $this->container['ntc026'] = $ntc026;

        return $this;
    }

    /**
     * Gets ntc027
     *
     * @return float
     */
    public function getNtc027()
    {
        return $this->container['ntc027'];
    }

    /**
     * Sets ntc027
     *
     * @param float $ntc027 Total number of new trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setNtc027($ntc027)
    {
        $this->container['ntc027'] = $ntc027;

        return $this;
    }

    /**
     * Gets ntc028
     *
     * @return float
     */
    public function getNtc028()
    {
        return $this->container['ntc028'];
    }

    /**
     * Sets ntc028
     *
     * @param float $ntc028 Total number of new trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setNtc028($ntc028)
    {
        $this->container['ntc028'] = $ntc028;

        return $this;
    }

    /**
     * Gets ntc029
     *
     * @return float
     */
    public function getNtc029()
    {
        return $this->container['ntc029'];
    }

    /**
     * Sets ntc029
     *
     * @param float $ntc029 Total number of new trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setNtc029($ntc029)
    {
        $this->container['ntc029'] = $ntc029;

        return $this;
    }

    /**
     * Gets ntc030
     *
     * @return float
     */
    public function getNtc030()
    {
        return $this->container['ntc030'];
    }

    /**
     * Sets ntc030
     *
     * @param float $ntc030 Total number of new trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setNtc030($ntc030)
    {
        $this->container['ntc030'] = $ntc030;

        return $this;
    }

    /**
     * Gets ntc031
     *
     * @return float
     */
    public function getNtc031()
    {
        return $this->container['ntc031'];
    }

    /**
     * Sets ntc031
     *
     * @param float $ntc031 Total number of new trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setNtc031($ntc031)
    {
        $this->container['ntc031'] = $ntc031;

        return $this;
    }

    /**
     * Gets ntd034
     *
     * @return float
     */
    public function getNtd034()
    {
        return $this->container['ntd034'];
    }

    /**
     * Sets ntd034
     *
     * @param float $ntd034 DBT of new trades
     *
     * @return $this
     */
    public function setNtd034($ntd034)
    {
        $this->container['ntd034'] = $ntd034;

        return $this;
    }

    /**
     * Gets ntd035
     *
     * @return float
     */
    public function getNtd035()
    {
        return $this->container['ntd035'];
    }

    /**
     * Sets ntd035
     *
     * @param float $ntd035 Maximum DBT of any new trade
     *
     * @return $this
     */
    public function setNtd035($ntd035)
    {
        $this->container['ntd035'] = $ntd035;

        return $this;
    }

    /**
     * Gets ntp036
     *
     * @return float
     */
    public function getNtp036()
    {
        return $this->container['ntp036'];
    }

    /**
     * Sets ntp036
     *
     * @param float $ntp036 Percentage of the Total balance of new trades to the Total highest balance of new trades in the past 12 months  (Note: for trades reported by new contributors, highest balance reported by contributor may go back 12 months)
     *
     * @return $this
     */
    public function setNtp036($ntp036)
    {
        $this->container['ntp036'] = $ntp036;

        return $this;
    }

    /**
     * Gets ntp037
     *
     * @return float
     */
    public function getNtp037()
    {
        return $this->container['ntp037'];
    }

    /**
     * Sets ntp037
     *
     * @param float $ntp037 Percentage of Total balance of new trades to Total trade balance
     *
     * @return $this
     */
    public function setNtp037($ntp037)
    {
        $this->container['ntp037'] = $ntp037;

        return $this;
    }

    /**
     * Gets ntp038
     *
     * @return float
     */
    public function getNtp038()
    {
        return $this->container['ntp038'];
    }

    /**
     * Sets ntp038
     *
     * @param float $ntp038 Percentage of Total number of new trades to Total number of trades
     *
     * @return $this
     */
    public function setNtp038($ntp038)
    {
        $this->container['ntp038'] = $ntp038;

        return $this;
    }

    /**
     * Gets ntp039
     *
     * @return float
     */
    public function getNtp039()
    {
        return $this->container['ntp039'];
    }

    /**
     * Sets ntp039
     *
     * @param float $ntp039 Ratio of Total acct bal to Total highest acct bal prior 12 mos, new trades rptd within 6 mos of profile date
     *
     * @return $this
     */
    public function setNtp039($ntp039)
    {
        $this->container['ntp039'] = $ntp039;

        return $this;
    }

    /**
     * Gets otb002
     *
     * @return float
     */
    public function getOtb002()
    {
        return $this->container['otb002'];
    }

    /**
     * Sets otb002
     *
     * @param float $otb002 Total balance of other trades classified as Leasing
     *
     * @return $this
     */
    public function setOtb002($otb002)
    {
        $this->container['otb002'] = $otb002;

        return $this;
    }

    /**
     * Gets otb003
     *
     * @return float
     */
    public function getOtb003()
    {
        return $this->container['otb003'];
    }

    /**
     * Sets otb003
     *
     * @param float $otb003 Total balance of other trades classified as Supplemental
     *
     * @return $this
     */
    public function setOtb003($otb003)
    {
        $this->container['otb003'] = $otb003;

        return $this;
    }

    /**
     * Gets otb004
     *
     * @return float
     */
    public function getOtb004()
    {
        return $this->container['otb004'];
    }

    /**
     * Sets otb004
     *
     * @param float $otb004 Total balance of other trades classified as Telecom
     *
     * @return $this
     */
    public function setOtb004($otb004)
    {
        $this->container['otb004'] = $otb004;

        return $this;
    }

    /**
     * Gets otb005
     *
     * @return float
     */
    public function getOtb005()
    {
        return $this->container['otb005'];
    }

    /**
     * Sets otb005
     *
     * @param float $otb005 Total balance for additional trades (leasing, supplemental, telecomm and unknown, etc) reported within the last 4 months of the profile date
     *
     * @return $this
     */
    public function setOtb005($otb005)
    {
        $this->container['otb005'] = $otb005;

        return $this;
    }

    /**
     * Gets otc007
     *
     * @return float
     */
    public function getOtc007()
    {
        return $this->container['otc007'];
    }

    /**
     * Sets otc007
     *
     * @param float $otc007 Total number of other trades classified as Leasing
     *
     * @return $this
     */
    public function setOtc007($otc007)
    {
        $this->container['otc007'] = $otc007;

        return $this;
    }

    /**
     * Gets otc008
     *
     * @return float
     */
    public function getOtc008()
    {
        return $this->container['otc008'];
    }

    /**
     * Sets otc008
     *
     * @param float $otc008 Total number of other trades classified as Supplemental
     *
     * @return $this
     */
    public function setOtc008($otc008)
    {
        $this->container['otc008'] = $otc008;

        return $this;
    }

    /**
     * Gets otc009
     *
     * @return float
     */
    public function getOtc009()
    {
        return $this->container['otc009'];
    }

    /**
     * Sets otc009
     *
     * @param float $otc009 Total number of other trades classified as Telecom
     *
     * @return $this
     */
    public function setOtc009($otc009)
    {
        $this->container['otc009'] = $otc009;

        return $this;
    }

    /**
     * Gets otc010
     *
     * @return float
     */
    public function getOtc010()
    {
        return $this->container['otc010'];
    }

    /**
     * Sets otc010
     *
     * @param float $otc010 Total number of other trades (leasing, supplemental, telecomm and unknown)
     *
     * @return $this
     */
    public function setOtc010($otc010)
    {
        $this->container['otc010'] = $otc010;

        return $this;
    }

    /**
     * Gets otc011
     *
     * @return float
     */
    public function getOtc011()
    {
        return $this->container['otc011'];
    }

    /**
     * Sets otc011
     *
     * @param float $otc011 Total number of additional trades (leasing, supplemental, telecomm and unknown, etc) reported within 4 months of the profile date
     *
     * @return $this
     */
    public function setOtc011($otc011)
    {
        $this->container['otc011'] = $otc011;

        return $this;
    }

    /**
     * Gets otd012
     *
     * @return float
     */
    public function getOtd012()
    {
        return $this->container['otd012'];
    }

    /**
     * Sets otd012
     *
     * @param float $otd012 Weighted average DBT of additional trades (leasing, supplemental, telecomm and unknown, etc) reported within the last 4 months of the profile date
     *
     * @return $this
     */
    public function setOtd012($otd012)
    {
        $this->container['otd012'] = $otd012;

        return $this;
    }

    /**
     * Gets otd013
     *
     * @return float
     */
    public function getOtd013()
    {
        return $this->container['otd013'];
    }

    /**
     * Sets otd013
     *
     * @param float $otd013 Maximum DBT of additional trades (leasing, supplemental, telecomm and unknown, etc) reported within the last 4 months of the profile date
     *
     * @return $this
     */
    public function setOtd013($otd013)
    {
        $this->container['otd013'] = $otd013;

        return $this;
    }

    /**
     * Gets otp014
     *
     * @return float
     */
    public function getOtp014()
    {
        return $this->container['otp014'];
    }

    /**
     * Sets otp014
     *
     * @param float $otp014 Percentage of Total balance of other trades classified as Finance to Total balance of Total Trades
     *
     * @return $this
     */
    public function setOtp014($otp014)
    {
        $this->container['otp014'] = $otp014;

        return $this;
    }

    /**
     * Gets otp015
     *
     * @return float
     */
    public function getOtp015()
    {
        return $this->container['otp015'];
    }

    /**
     * Sets otp015
     *
     * @param float $otp015 Percentage of Total number of other trades classified as Finance to Total number of trades
     *
     * @return $this
     */
    public function setOtp015($otp015)
    {
        $this->container['otp015'] = $otp015;

        return $this;
    }

    /**
     * Gets otp016
     *
     * @return float
     */
    public function getOtp016()
    {
        return $this->container['otp016'];
    }

    /**
     * Sets otp016
     *
     * @param float $otp016 Percentage of Total balance of other trades classified as Leasing to Total balance of Total Trades
     *
     * @return $this
     */
    public function setOtp016($otp016)
    {
        $this->container['otp016'] = $otp016;

        return $this;
    }

    /**
     * Gets otp017
     *
     * @return float
     */
    public function getOtp017()
    {
        return $this->container['otp017'];
    }

    /**
     * Sets otp017
     *
     * @param float $otp017 Percentage of Total number of other trades classified as Leasing to Total number of trades
     *
     * @return $this
     */
    public function setOtp017($otp017)
    {
        $this->container['otp017'] = $otp017;

        return $this;
    }

    /**
     * Gets otp018
     *
     * @return float
     */
    public function getOtp018()
    {
        return $this->container['otp018'];
    }

    /**
     * Sets otp018
     *
     * @param float $otp018 Percentage of Total balance of other trades classified as Supplemental to Total balance of Total Trades
     *
     * @return $this
     */
    public function setOtp018($otp018)
    {
        $this->container['otp018'] = $otp018;

        return $this;
    }

    /**
     * Gets otp019
     *
     * @return float
     */
    public function getOtp019()
    {
        return $this->container['otp019'];
    }

    /**
     * Sets otp019
     *
     * @param float $otp019 Percentage of Total number of other trades classified as Supplemental to Total number of trades
     *
     * @return $this
     */
    public function setOtp019($otp019)
    {
        $this->container['otp019'] = $otp019;

        return $this;
    }

    /**
     * Gets otp020
     *
     * @return float
     */
    public function getOtp020()
    {
        return $this->container['otp020'];
    }

    /**
     * Sets otp020
     *
     * @param float $otp020 Percentage of Total balance of other trades classified as Telecom to Total balance of Total Trades
     *
     * @return $this
     */
    public function setOtp020($otp020)
    {
        $this->container['otp020'] = $otp020;

        return $this;
    }

    /**
     * Gets otp021
     *
     * @return float
     */
    public function getOtp021()
    {
        return $this->container['otp021'];
    }

    /**
     * Sets otp021
     *
     * @param float $otp021 Percentage of Total number of other trades classified as Telecom to Total number of trades
     *
     * @return $this
     */
    public function setOtp021($otp021)
    {
        $this->container['otp021'] = $otp021;

        return $this;
    }

    /**
     * Gets pro001
     *
     * @return float
     */
    public function getPro001()
    {
        return $this->container['pro001'];
    }

    /**
     * Sets pro001
     *
     * @param float $pro001 Age in months of most recent public record filed within the last 24 months of profile date
     *
     * @return $this
     */
    public function setPro001($pro001)
    {
        $this->container['pro001'] = $pro001;

        return $this;
    }

    /**
     * Gets pro002
     *
     * @return float
     */
    public function getPro002()
    {
        return $this->container['pro002'];
    }

    /**
     * Sets pro002
     *
     * @param float $pro002 Age in months of oldest public record filed with the last 24 months of profile date
     *
     * @return $this
     */
    public function setPro002($pro002)
    {
        $this->container['pro002'] = $pro002;

        return $this;
    }

    /**
     * Gets pro003
     *
     * @return float
     */
    public function getPro003()
    {
        return $this->container['pro003'];
    }

    /**
     * Sets pro003
     *
     * @param float $pro003 Average age in months of public records filed within the last 24 months of profile date
     *
     * @return $this
     */
    public function setPro003($pro003)
    {
        $this->container['pro003'] = $pro003;

        return $this;
    }

    /**
     * Gets rtb001
     *
     * @return float
     */
    public function getRtb001()
    {
        return $this->container['rtb001'];
    }

    /**
     * Sets rtb001
     *
     * @param float $rtb001 Total balance of continuous trades
     *
     * @return $this
     */
    public function setRtb001($rtb001)
    {
        $this->container['rtb001'] = $rtb001;

        return $this;
    }

    /**
     * Gets rtb002
     *
     * @return float
     */
    public function getRtb002()
    {
        return $this->container['rtb002'];
    }

    /**
     * Sets rtb002
     *
     * @param float $rtb002 Total balance of continuous trades that is 1-30 days delinquent
     *
     * @return $this
     */
    public function setRtb002($rtb002)
    {
        $this->container['rtb002'] = $rtb002;

        return $this;
    }

    /**
     * Gets rtb003
     *
     * @return float
     */
    public function getRtb003()
    {
        return $this->container['rtb003'];
    }

    /**
     * Sets rtb003
     *
     * @param float $rtb003 Total balance of continuous trades that is 31-60 days delinquent
     *
     * @return $this
     */
    public function setRtb003($rtb003)
    {
        $this->container['rtb003'] = $rtb003;

        return $this;
    }

    /**
     * Gets rtb004
     *
     * @return float
     */
    public function getRtb004()
    {
        return $this->container['rtb004'];
    }

    /**
     * Sets rtb004
     *
     * @param float $rtb004 Total balance of continuous trades that is 61-90 days delinquent
     *
     * @return $this
     */
    public function setRtb004($rtb004)
    {
        $this->container['rtb004'] = $rtb004;

        return $this;
    }

    /**
     * Gets rtb005
     *
     * @return float
     */
    public function getRtb005()
    {
        return $this->container['rtb005'];
    }

    /**
     * Sets rtb005
     *
     * @param float $rtb005 Total balance of continuous trades that is 91+ days delinquent
     *
     * @return $this
     */
    public function setRtb005($rtb005)
    {
        $this->container['rtb005'] = $rtb005;

        return $this;
    }

    /**
     * Gets rtb006
     *
     * @return float
     */
    public function getRtb006()
    {
        return $this->container['rtb006'];
    }

    /**
     * Sets rtb006
     *
     * @param float $rtb006 Total balance of continuous trades that is current
     *
     * @return $this
     */
    public function setRtb006($rtb006)
    {
        $this->container['rtb006'] = $rtb006;

        return $this;
    }

    /**
     * Gets rtb007
     *
     * @return float
     */
    public function getRtb007()
    {
        return $this->container['rtb007'];
    }

    /**
     * Sets rtb007
     *
     * @param float $rtb007 Total balance of continuous trades where worst delinquency = current
     *
     * @return $this
     */
    public function setRtb007($rtb007)
    {
        $this->container['rtb007'] = $rtb007;

        return $this;
    }

    /**
     * Gets rtb008
     *
     * @return float
     */
    public function getRtb008()
    {
        return $this->container['rtb008'];
    }

    /**
     * Sets rtb008
     *
     * @param float $rtb008 Total balance of continuous trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setRtb008($rtb008)
    {
        $this->container['rtb008'] = $rtb008;

        return $this;
    }

    /**
     * Gets rtb009
     *
     * @return float
     */
    public function getRtb009()
    {
        return $this->container['rtb009'];
    }

    /**
     * Sets rtb009
     *
     * @param float $rtb009 Total balance of continuous trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setRtb009($rtb009)
    {
        $this->container['rtb009'] = $rtb009;

        return $this;
    }

    /**
     * Gets rtb010
     *
     * @return float
     */
    public function getRtb010()
    {
        return $this->container['rtb010'];
    }

    /**
     * Sets rtb010
     *
     * @param float $rtb010 Total balance of continuous trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setRtb010($rtb010)
    {
        $this->container['rtb010'] = $rtb010;

        return $this;
    }

    /**
     * Gets rtb011
     *
     * @return float
     */
    public function getRtb011()
    {
        return $this->container['rtb011'];
    }

    /**
     * Sets rtb011
     *
     * @param float $rtb011 Total balance of continuous trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setRtb011($rtb011)
    {
        $this->container['rtb011'] = $rtb011;

        return $this;
    }

    /**
     * Gets rtb012
     *
     * @return float
     */
    public function getRtb012()
    {
        return $this->container['rtb012'];
    }

    /**
     * Sets rtb012
     *
     * @param float $rtb012 Total balance of continuous trades where worst status = current
     *
     * @return $this
     */
    public function setRtb012($rtb012)
    {
        $this->container['rtb012'] = $rtb012;

        return $this;
    }

    /**
     * Gets rtb013
     *
     * @return float
     */
    public function getRtb013()
    {
        return $this->container['rtb013'];
    }

    /**
     * Sets rtb013
     *
     * @param float $rtb013 Total balance of continuous trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setRtb013($rtb013)
    {
        $this->container['rtb013'] = $rtb013;

        return $this;
    }

    /**
     * Gets rtb014
     *
     * @return float
     */
    public function getRtb014()
    {
        return $this->container['rtb014'];
    }

    /**
     * Sets rtb014
     *
     * @param float $rtb014 Total balance of continuous trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setRtb014($rtb014)
    {
        $this->container['rtb014'] = $rtb014;

        return $this;
    }

    /**
     * Gets rtb015
     *
     * @return float
     */
    public function getRtb015()
    {
        return $this->container['rtb015'];
    }

    /**
     * Sets rtb015
     *
     * @param float $rtb015 Total balance of continuous trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setRtb015($rtb015)
    {
        $this->container['rtb015'] = $rtb015;

        return $this;
    }

    /**
     * Gets rtb016
     *
     * @return float
     */
    public function getRtb016()
    {
        return $this->container['rtb016'];
    }

    /**
     * Sets rtb016
     *
     * @param float $rtb016 Total balance of continuous trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setRtb016($rtb016)
    {
        $this->container['rtb016'] = $rtb016;

        return $this;
    }

    /**
     * Gets rtb017
     *
     * @return float
     */
    public function getRtb017()
    {
        return $this->container['rtb017'];
    }

    /**
     * Sets rtb017
     *
     * @param float $rtb017 Total balance of continuous trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setRtb017($rtb017)
    {
        $this->container['rtb017'] = $rtb017;

        return $this;
    }

    /**
     * Gets rtb018
     *
     * @return float
     */
    public function getRtb018()
    {
        return $this->container['rtb018'];
    }

    /**
     * Sets rtb018
     *
     * @param float $rtb018 Total highest balance in past 12 months across all continuous trades
     *
     * @return $this
     */
    public function setRtb018($rtb018)
    {
        $this->container['rtb018'] = $rtb018;

        return $this;
    }

    /**
     * Gets rtb020
     *
     * @return float
     */
    public function getRtb020()
    {
        return $this->container['rtb020'];
    }

    /**
     * Sets rtb020
     *
     * @param float $rtb020 Total balance for continuous trades, current month
     *
     * @return $this
     */
    public function setRtb020($rtb020)
    {
        $this->container['rtb020'] = $rtb020;

        return $this;
    }

    /**
     * Gets rtb021
     *
     * @return float
     */
    public function getRtb021()
    {
        return $this->container['rtb021'];
    }

    /**
     * Sets rtb021
     *
     * @param float $rtb021 Total balance for trades that were continuous 1 month prior to profile date
     *
     * @return $this
     */
    public function setRtb021($rtb021)
    {
        $this->container['rtb021'] = $rtb021;

        return $this;
    }

    /**
     * Gets rtb022
     *
     * @return float
     */
    public function getRtb022()
    {
        return $this->container['rtb022'];
    }

    /**
     * Sets rtb022
     *
     * @param float $rtb022 Total balance for trades that were continuous 2 months prior to profile date
     *
     * @return $this
     */
    public function setRtb022($rtb022)
    {
        $this->container['rtb022'] = $rtb022;

        return $this;
    }

    /**
     * Gets rtb023
     *
     * @return float
     */
    public function getRtb023()
    {
        return $this->container['rtb023'];
    }

    /**
     * Sets rtb023
     *
     * @param float $rtb023 Total balance for trades that were continuous 3 months prior to profile date
     *
     * @return $this
     */
    public function setRtb023($rtb023)
    {
        $this->container['rtb023'] = $rtb023;

        return $this;
    }

    /**
     * Gets rtb024
     *
     * @return float
     */
    public function getRtb024()
    {
        return $this->container['rtb024'];
    }

    /**
     * Sets rtb024
     *
     * @param float $rtb024 Total balance for trades that were continuous 4 months prior to profile date
     *
     * @return $this
     */
    public function setRtb024($rtb024)
    {
        $this->container['rtb024'] = $rtb024;

        return $this;
    }

    /**
     * Gets rtb025
     *
     * @return float
     */
    public function getRtb025()
    {
        return $this->container['rtb025'];
    }

    /**
     * Sets rtb025
     *
     * @param float $rtb025 Total balance for trades that were continuous 5 months prior to profile date
     *
     * @return $this
     */
    public function setRtb025($rtb025)
    {
        $this->container['rtb025'] = $rtb025;

        return $this;
    }

    /**
     * Gets rtb026
     *
     * @return float
     */
    public function getRtb026()
    {
        return $this->container['rtb026'];
    }

    /**
     * Sets rtb026
     *
     * @param float $rtb026 Average balance that is current over the past 6 months for continuous trades
     *
     * @return $this
     */
    public function setRtb026($rtb026)
    {
        $this->container['rtb026'] = $rtb026;

        return $this;
    }

    /**
     * Gets rtb027
     *
     * @return float
     */
    public function getRtb027()
    {
        return $this->container['rtb027'];
    }

    /**
     * Sets rtb027
     *
     * @param float $rtb027 Average balance that is 1-30 days delinquent over the past 6 months for continuous trades
     *
     * @return $this
     */
    public function setRtb027($rtb027)
    {
        $this->container['rtb027'] = $rtb027;

        return $this;
    }

    /**
     * Gets rtb028
     *
     * @return float
     */
    public function getRtb028()
    {
        return $this->container['rtb028'];
    }

    /**
     * Sets rtb028
     *
     * @param float $rtb028 Average balance that is 31-60 days delinquent over the past 6 months for continuous trades
     *
     * @return $this
     */
    public function setRtb028($rtb028)
    {
        $this->container['rtb028'] = $rtb028;

        return $this;
    }

    /**
     * Gets rtb029
     *
     * @return float
     */
    public function getRtb029()
    {
        return $this->container['rtb029'];
    }

    /**
     * Sets rtb029
     *
     * @param float $rtb029 Average balance that is 61-90 days delinquent over the past 6 months for continuous trades
     *
     * @return $this
     */
    public function setRtb029($rtb029)
    {
        $this->container['rtb029'] = $rtb029;

        return $this;
    }

    /**
     * Gets rtb030
     *
     * @return float
     */
    public function getRtb030()
    {
        return $this->container['rtb030'];
    }

    /**
     * Sets rtb030
     *
     * @param float $rtb030 Average balance that is 91+ days delinquent over the past 6 months for continuous trades
     *
     * @return $this
     */
    public function setRtb030($rtb030)
    {
        $this->container['rtb030'] = $rtb030;

        return $this;
    }

    /**
     * Gets rtb031
     *
     * @return float
     */
    public function getRtb031()
    {
        return $this->container['rtb031'];
    }

    /**
     * Sets rtb031
     *
     * @param float $rtb031 Total balance for continuous trades for current quarter
     *
     * @return $this
     */
    public function setRtb031($rtb031)
    {
        $this->container['rtb031'] = $rtb031;

        return $this;
    }

    /**
     * Gets rtb032
     *
     * @return float
     */
    public function getRtb032()
    {
        return $this->container['rtb032'];
    }

    /**
     * Sets rtb032
     *
     * @param float $rtb032 Total balance for trades that were continuous 1 quarter prior to profile date
     *
     * @return $this
     */
    public function setRtb032($rtb032)
    {
        $this->container['rtb032'] = $rtb032;

        return $this;
    }

    /**
     * Gets rtb033
     *
     * @return float
     */
    public function getRtb033()
    {
        return $this->container['rtb033'];
    }

    /**
     * Sets rtb033
     *
     * @param float $rtb033 Total balance for trades that were continuous 2 quarters prior to profile date
     *
     * @return $this
     */
    public function setRtb033($rtb033)
    {
        $this->container['rtb033'] = $rtb033;

        return $this;
    }

    /**
     * Gets rtb034
     *
     * @return float
     */
    public function getRtb034()
    {
        return $this->container['rtb034'];
    }

    /**
     * Sets rtb034
     *
     * @param float $rtb034 Total balance for trades that were continuous 3 quarters prior to profile date
     *
     * @return $this
     */
    public function setRtb034($rtb034)
    {
        $this->container['rtb034'] = $rtb034;

        return $this;
    }

    /**
     * Gets rtb035
     *
     * @return float
     */
    public function getRtb035()
    {
        return $this->container['rtb035'];
    }

    /**
     * Sets rtb035
     *
     * @param float $rtb035 Total balance for trades that were continuous 4 quarters prior to profile date
     *
     * @return $this
     */
    public function setRtb035($rtb035)
    {
        $this->container['rtb035'] = $rtb035;

        return $this;
    }

    /**
     * Gets rtc036
     *
     * @return float
     */
    public function getRtc036()
    {
        return $this->container['rtc036'];
    }

    /**
     * Sets rtc036
     *
     * @param float $rtc036 Total number of continuous trades
     *
     * @return $this
     */
    public function setRtc036($rtc036)
    {
        $this->container['rtc036'] = $rtc036;

        return $this;
    }

    /**
     * Gets rtc037
     *
     * @return float
     */
    public function getRtc037()
    {
        return $this->container['rtc037'];
    }

    /**
     * Sets rtc037
     *
     * @param float $rtc037 Total number of continuous trades where worst delinquency = current
     *
     * @return $this
     */
    public function setRtc037($rtc037)
    {
        $this->container['rtc037'] = $rtc037;

        return $this;
    }

    /**
     * Gets rtc038
     *
     * @return float
     */
    public function getRtc038()
    {
        return $this->container['rtc038'];
    }

    /**
     * Sets rtc038
     *
     * @param float $rtc038 Total number of continuous trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setRtc038($rtc038)
    {
        $this->container['rtc038'] = $rtc038;

        return $this;
    }

    /**
     * Gets rtc039
     *
     * @return float
     */
    public function getRtc039()
    {
        return $this->container['rtc039'];
    }

    /**
     * Sets rtc039
     *
     * @param float $rtc039 Total number of continuous trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setRtc039($rtc039)
    {
        $this->container['rtc039'] = $rtc039;

        return $this;
    }

    /**
     * Gets rtc040
     *
     * @return float
     */
    public function getRtc040()
    {
        return $this->container['rtc040'];
    }

    /**
     * Sets rtc040
     *
     * @param float $rtc040 Total number of continuous trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setRtc040($rtc040)
    {
        $this->container['rtc040'] = $rtc040;

        return $this;
    }

    /**
     * Gets rtc041
     *
     * @return float
     */
    public function getRtc041()
    {
        return $this->container['rtc041'];
    }

    /**
     * Sets rtc041
     *
     * @param float $rtc041 Total number of continuous trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setRtc041($rtc041)
    {
        $this->container['rtc041'] = $rtc041;

        return $this;
    }

    /**
     * Gets rtc042
     *
     * @return float
     */
    public function getRtc042()
    {
        return $this->container['rtc042'];
    }

    /**
     * Sets rtc042
     *
     * @param float $rtc042 Total number of continuous trades where worst status = current
     *
     * @return $this
     */
    public function setRtc042($rtc042)
    {
        $this->container['rtc042'] = $rtc042;

        return $this;
    }

    /**
     * Gets rtc043
     *
     * @return float
     */
    public function getRtc043()
    {
        return $this->container['rtc043'];
    }

    /**
     * Sets rtc043
     *
     * @param float $rtc043 Total number of continuous trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setRtc043($rtc043)
    {
        $this->container['rtc043'] = $rtc043;

        return $this;
    }

    /**
     * Gets rtc044
     *
     * @return float
     */
    public function getRtc044()
    {
        return $this->container['rtc044'];
    }

    /**
     * Sets rtc044
     *
     * @param float $rtc044 Total number of continuous trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setRtc044($rtc044)
    {
        $this->container['rtc044'] = $rtc044;

        return $this;
    }

    /**
     * Gets rtc045
     *
     * @return float
     */
    public function getRtc045()
    {
        return $this->container['rtc045'];
    }

    /**
     * Sets rtc045
     *
     * @param float $rtc045 Total number of continuous trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setRtc045($rtc045)
    {
        $this->container['rtc045'] = $rtc045;

        return $this;
    }

    /**
     * Gets rtc046
     *
     * @return float
     */
    public function getRtc046()
    {
        return $this->container['rtc046'];
    }

    /**
     * Sets rtc046
     *
     * @param float $rtc046 Total number of continuous trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setRtc046($rtc046)
    {
        $this->container['rtc046'] = $rtc046;

        return $this;
    }

    /**
     * Gets rtc047
     *
     * @return float
     */
    public function getRtc047()
    {
        return $this->container['rtc047'];
    }

    /**
     * Sets rtc047
     *
     * @param float $rtc047 Total number of continuous trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setRtc047($rtc047)
    {
        $this->container['rtc047'] = $rtc047;

        return $this;
    }

    /**
     * Gets rtc049
     *
     * @return float
     */
    public function getRtc049()
    {
        return $this->container['rtc049'];
    }

    /**
     * Sets rtc049
     *
     * @param float $rtc049 Total number of continuous trades with current DBT's
     *
     * @return $this
     */
    public function setRtc049($rtc049)
    {
        $this->container['rtc049'] = $rtc049;

        return $this;
    }

    /**
     * Gets rtc050
     *
     * @return float
     */
    public function getRtc050()
    {
        return $this->container['rtc050'];
    }

    /**
     * Sets rtc050
     *
     * @param float $rtc050 Total number of continuous trades with DBT's 1-30 days
     *
     * @return $this
     */
    public function setRtc050($rtc050)
    {
        $this->container['rtc050'] = $rtc050;

        return $this;
    }

    /**
     * Gets rtc051
     *
     * @return float
     */
    public function getRtc051()
    {
        return $this->container['rtc051'];
    }

    /**
     * Sets rtc051
     *
     * @param float $rtc051 Total number of continuous trades with DBT's 31-60 days
     *
     * @return $this
     */
    public function setRtc051($rtc051)
    {
        $this->container['rtc051'] = $rtc051;

        return $this;
    }

    /**
     * Gets rtc052
     *
     * @return float
     */
    public function getRtc052()
    {
        return $this->container['rtc052'];
    }

    /**
     * Sets rtc052
     *
     * @param float $rtc052 Total number of continuous trades with DBT's 61-90 days
     *
     * @return $this
     */
    public function setRtc052($rtc052)
    {
        $this->container['rtc052'] = $rtc052;

        return $this;
    }

    /**
     * Gets rtc053
     *
     * @return float
     */
    public function getRtc053()
    {
        return $this->container['rtc053'];
    }

    /**
     * Sets rtc053
     *
     * @param float $rtc053 Total number of continuous trades with DBT's 91+ days
     *
     * @return $this
     */
    public function setRtc053($rtc053)
    {
        $this->container['rtc053'] = $rtc053;

        return $this;
    }

    /**
     * Gets rtc054
     *
     * @return float
     */
    public function getRtc054()
    {
        return $this->container['rtc054'];
    }

    /**
     * Sets rtc054
     *
     * @param float $rtc054 Total number of continuous trades with derogatory comments
     *
     * @return $this
     */
    public function setRtc054($rtc054)
    {
        $this->container['rtc054'] = $rtc054;

        return $this;
    }

    /**
     * Gets rtd059
     *
     * @return float
     */
    public function getRtd059()
    {
        return $this->container['rtd059'];
    }

    /**
     * Sets rtd059
     *
     * @param float $rtd059 DBT of continuous trades
     *
     * @return $this
     */
    public function setRtd059($rtd059)
    {
        $this->container['rtd059'] = $rtd059;

        return $this;
    }

    /**
     * Gets rtd060
     *
     * @return float
     */
    public function getRtd060()
    {
        return $this->container['rtd060'];
    }

    /**
     * Sets rtd060
     *
     * @param float $rtd060 DBT of continuous trades, current month
     *
     * @return $this
     */
    public function setRtd060($rtd060)
    {
        $this->container['rtd060'] = $rtd060;

        return $this;
    }

    /**
     * Gets rtd061
     *
     * @return float
     */
    public function getRtd061()
    {
        return $this->container['rtd061'];
    }

    /**
     * Sets rtd061
     *
     * @param float $rtd061 DBT of trades that were continuous 1 month prior to profile date
     *
     * @return $this
     */
    public function setRtd061($rtd061)
    {
        $this->container['rtd061'] = $rtd061;

        return $this;
    }

    /**
     * Gets rtd062
     *
     * @return float
     */
    public function getRtd062()
    {
        return $this->container['rtd062'];
    }

    /**
     * Sets rtd062
     *
     * @param float $rtd062 DBT of trades that were continuous 2 months prior to profile date
     *
     * @return $this
     */
    public function setRtd062($rtd062)
    {
        $this->container['rtd062'] = $rtd062;

        return $this;
    }

    /**
     * Gets rtd063
     *
     * @return float
     */
    public function getRtd063()
    {
        return $this->container['rtd063'];
    }

    /**
     * Sets rtd063
     *
     * @param float $rtd063 DBT of trades that were continuous 3 months prior to profile date
     *
     * @return $this
     */
    public function setRtd063($rtd063)
    {
        $this->container['rtd063'] = $rtd063;

        return $this;
    }

    /**
     * Gets rtd064
     *
     * @return float
     */
    public function getRtd064()
    {
        return $this->container['rtd064'];
    }

    /**
     * Sets rtd064
     *
     * @param float $rtd064 DBT of trades that were continuous 4 months prior to profile date
     *
     * @return $this
     */
    public function setRtd064($rtd064)
    {
        $this->container['rtd064'] = $rtd064;

        return $this;
    }

    /**
     * Gets rtd065
     *
     * @return float
     */
    public function getRtd065()
    {
        return $this->container['rtd065'];
    }

    /**
     * Sets rtd065
     *
     * @param float $rtd065 DBT of trades that were continuous 5 months prior to profile date
     *
     * @return $this
     */
    public function setRtd065($rtd065)
    {
        $this->container['rtd065'] = $rtd065;

        return $this;
    }

    /**
     * Gets rtd067
     *
     * @return float
     */
    public function getRtd067()
    {
        return $this->container['rtd067'];
    }

    /**
     * Sets rtd067
     *
     * @param float $rtd067 Maximum DBT of any continuous trade
     *
     * @return $this
     */
    public function setRtd067($rtd067)
    {
        $this->container['rtd067'] = $rtd067;

        return $this;
    }

    /**
     * Gets rtd068
     *
     * @return float
     */
    public function getRtd068()
    {
        return $this->container['rtd068'];
    }

    /**
     * Sets rtd068
     *
     * @param float $rtd068 DBT of continuous trades, current quarter
     *
     * @return $this
     */
    public function setRtd068($rtd068)
    {
        $this->container['rtd068'] = $rtd068;

        return $this;
    }

    /**
     * Gets rtd069
     *
     * @return float
     */
    public function getRtd069()
    {
        return $this->container['rtd069'];
    }

    /**
     * Sets rtd069
     *
     * @param float $rtd069 DBT of trades that were continuous 1 quarter prior to profile date
     *
     * @return $this
     */
    public function setRtd069($rtd069)
    {
        $this->container['rtd069'] = $rtd069;

        return $this;
    }

    /**
     * Gets rtd070
     *
     * @return float
     */
    public function getRtd070()
    {
        return $this->container['rtd070'];
    }

    /**
     * Sets rtd070
     *
     * @param float $rtd070 DBT of trades that were continuous 2 quarters prior to profile date
     *
     * @return $this
     */
    public function setRtd070($rtd070)
    {
        $this->container['rtd070'] = $rtd070;

        return $this;
    }

    /**
     * Gets rtd071
     *
     * @return float
     */
    public function getRtd071()
    {
        return $this->container['rtd071'];
    }

    /**
     * Sets rtd071
     *
     * @param float $rtd071 DBT of trades that were continuous 3 quarters prior to profile date
     *
     * @return $this
     */
    public function setRtd071($rtd071)
    {
        $this->container['rtd071'] = $rtd071;

        return $this;
    }

    /**
     * Gets rtd072
     *
     * @return float
     */
    public function getRtd072()
    {
        return $this->container['rtd072'];
    }

    /**
     * Sets rtd072
     *
     * @param float $rtd072 DBT of trades that were continuous 4 quarters prior to profile date
     *
     * @return $this
     */
    public function setRtd072($rtd072)
    {
        $this->container['rtd072'] = $rtd072;

        return $this;
    }

    /**
     * Gets rto077
     *
     * @return float
     */
    public function getRto077()
    {
        return $this->container['rto077'];
    }

    /**
     * Sets rto077
     *
     * @param float $rto077 Average monthly change in DBT for continuous trades over the six months prior to the profile date
     *
     * @return $this
     */
    public function setRto077($rto077)
    {
        $this->container['rto077'] = $rto077;

        return $this;
    }

    /**
     * Gets rto079
     *
     * @return float
     */
    public function getRto079()
    {
        return $this->container['rto079'];
    }

    /**
     * Sets rto079
     *
     * @param float $rto079 Average quarterly change in DBT for continuous trades over the five quarters prior to the profile date
     *
     * @return $this
     */
    public function setRto079($rto079)
    {
        $this->container['rto079'] = $rto079;

        return $this;
    }

    /**
     * Gets rtp081
     *
     * @return float
     */
    public function getRtp081()
    {
        return $this->container['rtp081'];
    }

    /**
     * Sets rtp081
     *
     * @param float $rtp081 Percentage of Total continuous trades balance to continuous trades Total highest balance in past 12 months
     *
     * @return $this
     */
    public function setRtp081($rtp081)
    {
        $this->container['rtp081'] = $rtp081;

        return $this;
    }

    /**
     * Gets rtp082
     *
     * @return float
     */
    public function getRtp082()
    {
        return $this->container['rtp082'];
    }

    /**
     * Sets rtp082
     *
     * @param float $rtp082 Percentage of Total balance of continuous trades to Total trade balance
     *
     * @return $this
     */
    public function setRtp082($rtp082)
    {
        $this->container['rtp082'] = $rtp082;

        return $this;
    }

    /**
     * Gets rtp083
     *
     * @return float
     */
    public function getRtp083()
    {
        return $this->container['rtp083'];
    }

    /**
     * Sets rtp083
     *
     * @param float $rtp083 Percentage of Total number of continuous trades to Total number of trades
     *
     * @return $this
     */
    public function setRtp083($rtp083)
    {
        $this->container['rtp083'] = $rtp083;

        return $this;
    }

    /**
     * Gets rtp086
     *
     * @return float
     */
    public function getRtp086()
    {
        return $this->container['rtp086'];
    }

    /**
     * Sets rtp086
     *
     * @param float $rtp086 Ratio of Total account balance to Total highest account balance ever, for continuous trades that are newly reported within six months of the profile date
     *
     * @return $this
     */
    public function setRtp086($rtp086)
    {
        $this->container['rtp086'] = $rtp086;

        return $this;
    }

    /**
     * Gets ttb001
     *
     * @return float
     */
    public function getTtb001()
    {
        return $this->container['ttb001'];
    }

    /**
     * Sets ttb001
     *
     * @param float $ttb001 Total balance for bad trades
     *
     * @return $this
     */
    public function setTtb001($ttb001)
    {
        $this->container['ttb001'] = $ttb001;

        return $this;
    }

    /**
     * Gets ttb002
     *
     * @return float
     */
    public function getTtb002()
    {
        return $this->container['ttb002'];
    }

    /**
     * Sets ttb002
     *
     * @param float $ttb002 Total balance for good trades
     *
     * @return $this
     */
    public function setTtb002($ttb002)
    {
        $this->container['ttb002'] = $ttb002;

        return $this;
    }

    /**
     * Gets ttb003
     *
     * @return float
     */
    public function getTtb003()
    {
        return $this->container['ttb003'];
    }

    /**
     * Sets ttb003
     *
     * @param float $ttb003 Total balance of Total trades
     *
     * @return $this
     */
    public function setTtb003($ttb003)
    {
        $this->container['ttb003'] = $ttb003;

        return $this;
    }

    /**
     * Gets ttb004
     *
     * @return float
     */
    public function getTtb004()
    {
        return $this->container['ttb004'];
    }

    /**
     * Sets ttb004
     *
     * @param float $ttb004 Total balance of Total trades that is 1-30 days delinquent
     *
     * @return $this
     */
    public function setTtb004($ttb004)
    {
        $this->container['ttb004'] = $ttb004;

        return $this;
    }

    /**
     * Gets ttb005
     *
     * @return float
     */
    public function getTtb005()
    {
        return $this->container['ttb005'];
    }

    /**
     * Sets ttb005
     *
     * @param float $ttb005 Total balance of Total trades that is 31-60 days delinquent
     *
     * @return $this
     */
    public function setTtb005($ttb005)
    {
        $this->container['ttb005'] = $ttb005;

        return $this;
    }

    /**
     * Gets ttb006
     *
     * @return float
     */
    public function getTtb006()
    {
        return $this->container['ttb006'];
    }

    /**
     * Sets ttb006
     *
     * @param float $ttb006 Total balance of Total trades that is 61-90 days delinquent
     *
     * @return $this
     */
    public function setTtb006($ttb006)
    {
        $this->container['ttb006'] = $ttb006;

        return $this;
    }

    /**
     * Gets ttb007
     *
     * @return float
     */
    public function getTtb007()
    {
        return $this->container['ttb007'];
    }

    /**
     * Sets ttb007
     *
     * @param float $ttb007 Total balance of Total trades that is 91+ days delinquent
     *
     * @return $this
     */
    public function setTtb007($ttb007)
    {
        $this->container['ttb007'] = $ttb007;

        return $this;
    }

    /**
     * Gets ttb008
     *
     * @return float
     */
    public function getTtb008()
    {
        return $this->container['ttb008'];
    }

    /**
     * Sets ttb008
     *
     * @param float $ttb008 Total balance of Total trades that is current
     *
     * @return $this
     */
    public function setTtb008($ttb008)
    {
        $this->container['ttb008'] = $ttb008;

        return $this;
    }

    /**
     * Gets ttb009
     *
     * @return float
     */
    public function getTtb009()
    {
        return $this->container['ttb009'];
    }

    /**
     * Sets ttb009
     *
     * @param float $ttb009 Total balance of Total trades where worst delinquency = current
     *
     * @return $this
     */
    public function setTtb009($ttb009)
    {
        $this->container['ttb009'] = $ttb009;

        return $this;
    }

    /**
     * Gets ttb010
     *
     * @return float
     */
    public function getTtb010()
    {
        return $this->container['ttb010'];
    }

    /**
     * Sets ttb010
     *
     * @param float $ttb010 Total balance of Total trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setTtb010($ttb010)
    {
        $this->container['ttb010'] = $ttb010;

        return $this;
    }

    /**
     * Gets ttb011
     *
     * @return float
     */
    public function getTtb011()
    {
        return $this->container['ttb011'];
    }

    /**
     * Sets ttb011
     *
     * @param float $ttb011 Total balance of Total trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setTtb011($ttb011)
    {
        $this->container['ttb011'] = $ttb011;

        return $this;
    }

    /**
     * Gets ttb012
     *
     * @return float
     */
    public function getTtb012()
    {
        return $this->container['ttb012'];
    }

    /**
     * Sets ttb012
     *
     * @param float $ttb012 Total balance of Total trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setTtb012($ttb012)
    {
        $this->container['ttb012'] = $ttb012;

        return $this;
    }

    /**
     * Gets ttb013
     *
     * @return float
     */
    public function getTtb013()
    {
        return $this->container['ttb013'];
    }

    /**
     * Sets ttb013
     *
     * @param float $ttb013 Total balance of Total trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setTtb013($ttb013)
    {
        $this->container['ttb013'] = $ttb013;

        return $this;
    }

    /**
     * Gets ttb014
     *
     * @return float
     */
    public function getTtb014()
    {
        return $this->container['ttb014'];
    }

    /**
     * Sets ttb014
     *
     * @param float $ttb014 Total balance of Total trades where worst status = current
     *
     * @return $this
     */
    public function setTtb014($ttb014)
    {
        $this->container['ttb014'] = $ttb014;

        return $this;
    }

    /**
     * Gets ttb015
     *
     * @return float
     */
    public function getTtb015()
    {
        return $this->container['ttb015'];
    }

    /**
     * Sets ttb015
     *
     * @param float $ttb015 Total balance of Total trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setTtb015($ttb015)
    {
        $this->container['ttb015'] = $ttb015;

        return $this;
    }

    /**
     * Gets ttb016
     *
     * @return float
     */
    public function getTtb016()
    {
        return $this->container['ttb016'];
    }

    /**
     * Sets ttb016
     *
     * @param float $ttb016 Total balance of Total trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setTtb016($ttb016)
    {
        $this->container['ttb016'] = $ttb016;

        return $this;
    }

    /**
     * Gets ttb017
     *
     * @return float
     */
    public function getTtb017()
    {
        return $this->container['ttb017'];
    }

    /**
     * Sets ttb017
     *
     * @param float $ttb017 Total balance of Total trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setTtb017($ttb017)
    {
        $this->container['ttb017'] = $ttb017;

        return $this;
    }

    /**
     * Gets ttb018
     *
     * @return float
     */
    public function getTtb018()
    {
        return $this->container['ttb018'];
    }

    /**
     * Sets ttb018
     *
     * @param float $ttb018 Total balance of Total trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setTtb018($ttb018)
    {
        $this->container['ttb018'] = $ttb018;

        return $this;
    }

    /**
     * Gets ttb019
     *
     * @return float
     */
    public function getTtb019()
    {
        return $this->container['ttb019'];
    }

    /**
     * Sets ttb019
     *
     * @param float $ttb019 Total balance of Total trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setTtb019($ttb019)
    {
        $this->container['ttb019'] = $ttb019;

        return $this;
    }

    /**
     * Gets ttb020
     *
     * @return float
     */
    public function getTtb020()
    {
        return $this->container['ttb020'];
    }

    /**
     * Sets ttb020
     *
     * @param float $ttb020 Total highest balance in past 12 months across all Total Trades
     *
     * @return $this
     */
    public function setTtb020($ttb020)
    {
        $this->container['ttb020'] = $ttb020;

        return $this;
    }

    /**
     * Gets ttb023
     *
     * @return float
     */
    public function getTtb023()
    {
        return $this->container['ttb023'];
    }

    /**
     * Sets ttb023
     *
     * @param float $ttb023 Maximum account balance that is current across all trades
     *
     * @return $this
     */
    public function setTtb023($ttb023)
    {
        $this->container['ttb023'] = $ttb023;

        return $this;
    }

    /**
     * Gets ttb024
     *
     * @return float
     */
    public function getTtb024()
    {
        return $this->container['ttb024'];
    }

    /**
     * Sets ttb024
     *
     * @param float $ttb024 Maximum account balance that is 1-30 days delinquent across all trades
     *
     * @return $this
     */
    public function setTtb024($ttb024)
    {
        $this->container['ttb024'] = $ttb024;

        return $this;
    }

    /**
     * Gets ttb025
     *
     * @return float
     */
    public function getTtb025()
    {
        return $this->container['ttb025'];
    }

    /**
     * Sets ttb025
     *
     * @param float $ttb025 Maximum account balance that is 31-60 days delinquent across all trades
     *
     * @return $this
     */
    public function setTtb025($ttb025)
    {
        $this->container['ttb025'] = $ttb025;

        return $this;
    }

    /**
     * Gets ttb026
     *
     * @return float
     */
    public function getTtb026()
    {
        return $this->container['ttb026'];
    }

    /**
     * Sets ttb026
     *
     * @param float $ttb026 Maximum account balance that is 61-90 days delinquent across all trades
     *
     * @return $this
     */
    public function setTtb026($ttb026)
    {
        $this->container['ttb026'] = $ttb026;

        return $this;
    }

    /**
     * Gets ttb027
     *
     * @return float
     */
    public function getTtb027()
    {
        return $this->container['ttb027'];
    }

    /**
     * Sets ttb027
     *
     * @param float $ttb027 Maximum account balance that is 91+ days delinquent across all trades
     *
     * @return $this
     */
    public function setTtb027($ttb027)
    {
        $this->container['ttb027'] = $ttb027;

        return $this;
    }

    /**
     * Gets ttb033
     *
     * @return float
     */
    public function getTtb033()
    {
        return $this->container['ttb033'];
    }

    /**
     * Sets ttb033
     *
     * @param float $ttb033 Maximum balance of any account in the past 12 months
     *
     * @return $this
     */
    public function setTtb033($ttb033)
    {
        $this->container['ttb033'] = $ttb033;

        return $this;
    }

    /**
     * Gets ttc035
     *
     * @return float
     */
    public function getTtc035()
    {
        return $this->container['ttc035'];
    }

    /**
     * Sets ttc035
     *
     * @param float $ttc035 Total number of bad trades
     *
     * @return $this
     */
    public function setTtc035($ttc035)
    {
        $this->container['ttc035'] = $ttc035;

        return $this;
    }

    /**
     * Gets ttc036
     *
     * @return float
     */
    public function getTtc036()
    {
        return $this->container['ttc036'];
    }

    /**
     * Sets ttc036
     *
     * @param float $ttc036 Total number of good trades
     *
     * @return $this
     */
    public function setTtc036($ttc036)
    {
        $this->container['ttc036'] = $ttc036;

        return $this;
    }

    /**
     * Gets ttc037
     *
     * @return float
     */
    public function getTtc037()
    {
        return $this->container['ttc037'];
    }

    /**
     * Sets ttc037
     *
     * @param float $ttc037 Total number of indeterminate trades
     *
     * @return $this
     */
    public function setTtc037($ttc037)
    {
        $this->container['ttc037'] = $ttc037;

        return $this;
    }

    /**
     * Gets ttc038
     *
     * @return float
     */
    public function getTtc038()
    {
        return $this->container['ttc038'];
    }

    /**
     * Sets ttc038
     *
     * @param float $ttc038 Total number of Total Trades
     *
     * @return $this
     */
    public function setTtc038($ttc038)
    {
        $this->container['ttc038'] = $ttc038;

        return $this;
    }

    /**
     * Gets ttc039
     *
     * @return float
     */
    public function getTtc039()
    {
        return $this->container['ttc039'];
    }

    /**
     * Sets ttc039
     *
     * @param float $ttc039 Total number of Total trades where worst delinquency = current
     *
     * @return $this
     */
    public function setTtc039($ttc039)
    {
        $this->container['ttc039'] = $ttc039;

        return $this;
    }

    /**
     * Gets ttc040
     *
     * @return float
     */
    public function getTtc040()
    {
        return $this->container['ttc040'];
    }

    /**
     * Sets ttc040
     *
     * @param float $ttc040 Total number of Total trades where worst delinquency = 1-30 days
     *
     * @return $this
     */
    public function setTtc040($ttc040)
    {
        $this->container['ttc040'] = $ttc040;

        return $this;
    }

    /**
     * Gets ttc041
     *
     * @return float
     */
    public function getTtc041()
    {
        return $this->container['ttc041'];
    }

    /**
     * Sets ttc041
     *
     * @param float $ttc041 Total number of Total trades where worst delinquency = 31-60 days
     *
     * @return $this
     */
    public function setTtc041($ttc041)
    {
        $this->container['ttc041'] = $ttc041;

        return $this;
    }

    /**
     * Gets ttc042
     *
     * @return float
     */
    public function getTtc042()
    {
        return $this->container['ttc042'];
    }

    /**
     * Sets ttc042
     *
     * @param float $ttc042 Total number of Total trades where worst delinquency = 61-90 days
     *
     * @return $this
     */
    public function setTtc042($ttc042)
    {
        $this->container['ttc042'] = $ttc042;

        return $this;
    }

    /**
     * Gets ttc043
     *
     * @return float
     */
    public function getTtc043()
    {
        return $this->container['ttc043'];
    }

    /**
     * Sets ttc043
     *
     * @param float $ttc043 Total number of Total trades where worst delinquency = 91+ days
     *
     * @return $this
     */
    public function setTtc043($ttc043)
    {
        $this->container['ttc043'] = $ttc043;

        return $this;
    }

    /**
     * Gets ttc044
     *
     * @return float
     */
    public function getTtc044()
    {
        return $this->container['ttc044'];
    }

    /**
     * Sets ttc044
     *
     * @param float $ttc044 Total number of Total trades where worst status = current
     *
     * @return $this
     */
    public function setTtc044($ttc044)
    {
        $this->container['ttc044'] = $ttc044;

        return $this;
    }

    /**
     * Gets ttc045
     *
     * @return float
     */
    public function getTtc045()
    {
        return $this->container['ttc045'];
    }

    /**
     * Sets ttc045
     *
     * @param float $ttc045 Total number of Total trades where worst status = 1-30 days
     *
     * @return $this
     */
    public function setTtc045($ttc045)
    {
        $this->container['ttc045'] = $ttc045;

        return $this;
    }

    /**
     * Gets ttc046
     *
     * @return float
     */
    public function getTtc046()
    {
        return $this->container['ttc046'];
    }

    /**
     * Sets ttc046
     *
     * @param float $ttc046 Total number of Total trades where worst status is a derogatory comment (bankrupcy, judgment, lien etc)
     *
     * @return $this
     */
    public function setTtc046($ttc046)
    {
        $this->container['ttc046'] = $ttc046;

        return $this;
    }

    /**
     * Gets ttc047
     *
     * @return float
     */
    public function getTtc047()
    {
        return $this->container['ttc047'];
    }

    /**
     * Sets ttc047
     *
     * @param float $ttc047 Total number of Total trades where worst status = 31-60 days
     *
     * @return $this
     */
    public function setTtc047($ttc047)
    {
        $this->container['ttc047'] = $ttc047;

        return $this;
    }

    /**
     * Gets ttc048
     *
     * @return float
     */
    public function getTtc048()
    {
        return $this->container['ttc048'];
    }

    /**
     * Sets ttc048
     *
     * @param float $ttc048 Total number of Total trades where worst status = 61-90 days
     *
     * @return $this
     */
    public function setTtc048($ttc048)
    {
        $this->container['ttc048'] = $ttc048;

        return $this;
    }

    /**
     * Gets ttc049
     *
     * @return float
     */
    public function getTtc049()
    {
        return $this->container['ttc049'];
    }

    /**
     * Sets ttc049
     *
     * @param float $ttc049 Total number of Total trades where worst status = 91+ days
     *
     * @return $this
     */
    public function setTtc049($ttc049)
    {
        $this->container['ttc049'] = $ttc049;

        return $this;
    }

    /**
     * Gets ttc051
     *
     * @return float
     */
    public function getTtc051()
    {
        return $this->container['ttc051'];
    }

    /**
     * Sets ttc051
     *
     * @param float $ttc051 Total number of active trades
     *
     * @return $this
     */
    public function setTtc051($ttc051)
    {
        $this->container['ttc051'] = $ttc051;

        return $this;
    }

    /**
     * Gets ttc052
     *
     * @return float
     */
    public function getTtc052()
    {
        return $this->container['ttc052'];
    }

    /**
     * Sets ttc052
     *
     * @param float $ttc052 Total number of trades reported within 6 months of profile date with balance >=70 percent of highest balance in past 12 months
     *
     * @return $this
     */
    public function setTtc052($ttc052)
    {
        $this->container['ttc052'] = $ttc052;

        return $this;
    }

    /**
     * Gets ttc053
     *
     * @return float
     */
    public function getTtc053()
    {
        return $this->container['ttc053'];
    }

    /**
     * Sets ttc053
     *
     * @param float $ttc053 Total number of trades reported within 6 months of the profile date
     *
     * @return $this
     */
    public function setTtc053($ttc053)
    {
        $this->container['ttc053'] = $ttc053;

        return $this;
    }

    /**
     * Gets ttc054
     *
     * @return float
     */
    public function getTtc054()
    {
        return $this->container['ttc054'];
    }

    /**
     * Sets ttc054
     *
     * @param float $ttc054 Total number of trades reported within 12 months of the profile date
     *
     * @return $this
     */
    public function setTtc054($ttc054)
    {
        $this->container['ttc054'] = $ttc054;

        return $this;
    }

    /**
     * Gets ttc055
     *
     * @return float
     */
    public function getTtc055()
    {
        return $this->container['ttc055'];
    }

    /**
     * Sets ttc055
     *
     * @param float $ttc055 Total number of trades with last activity within 6 months of profile date
     *
     * @return $this
     */
    public function setTtc055($ttc055)
    {
        $this->container['ttc055'] = $ttc055;

        return $this;
    }

    /**
     * Gets ttc056
     *
     * @return float
     */
    public function getTtc056()
    {
        return $this->container['ttc056'];
    }

    /**
     * Sets ttc056
     *
     * @param float $ttc056 Total number of trades with last activity within 12 months of profile date
     *
     * @return $this
     */
    public function setTtc056($ttc056)
    {
        $this->container['ttc056'] = $ttc056;

        return $this;
    }

    /**
     * Gets ttc057
     *
     * @return float
     */
    public function getTtc057()
    {
        return $this->container['ttc057'];
    }

    /**
     * Sets ttc057
     *
     * @param float $ttc057 Total number of trades with DBT greater than 0
     *
     * @return $this
     */
    public function setTtc057($ttc057)
    {
        $this->container['ttc057'] = $ttc057;

        return $this;
    }

    /**
     * Gets ttc058
     *
     * @return float
     */
    public function getTtc058()
    {
        return $this->container['ttc058'];
    }

    /**
     * Sets ttc058
     *
     * @param float $ttc058 Total number of trades with DBT greater than 30
     *
     * @return $this
     */
    public function setTtc058($ttc058)
    {
        $this->container['ttc058'] = $ttc058;

        return $this;
    }

    /**
     * Gets ttc059
     *
     * @return float
     */
    public function getTtc059()
    {
        return $this->container['ttc059'];
    }

    /**
     * Sets ttc059
     *
     * @param float $ttc059 Total number of trades with DBT greater than 60
     *
     * @return $this
     */
    public function setTtc059($ttc059)
    {
        $this->container['ttc059'] = $ttc059;

        return $this;
    }

    /**
     * Gets ttc060
     *
     * @return float
     */
    public function getTtc060()
    {
        return $this->container['ttc060'];
    }

    /**
     * Sets ttc060
     *
     * @param float $ttc060 Total number of trades with DBT greater than 90
     *
     * @return $this
     */
    public function setTtc060($ttc060)
    {
        $this->container['ttc060'] = $ttc060;

        return $this;
    }

    /**
     * Gets ttc061
     *
     * @return float
     */
    public function getTtc061()
    {
        return $this->container['ttc061'];
    }

    /**
     * Sets ttc061
     *
     * @param float $ttc061 Total number of trades with trade balance equal to or greater than highest balance in past 12 months
     *
     * @return $this
     */
    public function setTtc061($ttc061)
    {
        $this->container['ttc061'] = $ttc061;

        return $this;
    }

    /**
     * Gets ttc063
     *
     * @return float
     */
    public function getTtc063()
    {
        return $this->container['ttc063'];
    }

    /**
     * Sets ttc063
     *
     * @param float $ttc063 Total number of trades with net 30 terms
     *
     * @return $this
     */
    public function setTtc063($ttc063)
    {
        $this->container['ttc063'] = $ttc063;

        return $this;
    }

    /**
     * Gets ttc064
     *
     * @return float
     */
    public function getTtc064()
    {
        return $this->container['ttc064'];
    }

    /**
     * Sets ttc064
     *
     * @param float $ttc064 Total number of trades with net 60 terms
     *
     * @return $this
     */
    public function setTtc064($ttc064)
    {
        $this->container['ttc064'] = $ttc064;

        return $this;
    }

    /**
     * Gets ttc065
     *
     * @return float
     */
    public function getTtc065()
    {
        return $this->container['ttc065'];
    }

    /**
     * Sets ttc065
     *
     * @param float $ttc065 Total number of trades with net 61+ terms
     *
     * @return $this
     */
    public function setTtc065($ttc065)
    {
        $this->container['ttc065'] = $ttc065;

        return $this;
    }

    /**
     * Gets ttc066
     *
     * @return float
     */
    public function getTtc066()
    {
        return $this->container['ttc066'];
    }

    /**
     * Sets ttc066
     *
     * @param float $ttc066 Total number of trades with cash terms
     *
     * @return $this
     */
    public function setTtc066($ttc066)
    {
        $this->container['ttc066'] = $ttc066;

        return $this;
    }

    /**
     * Gets ttc067
     *
     * @return float
     */
    public function getTtc067()
    {
        return $this->container['ttc067'];
    }

    /**
     * Sets ttc067
     *
     * @param float $ttc067 Total number of trades with contract terms
     *
     * @return $this
     */
    public function setTtc067($ttc067)
    {
        $this->container['ttc067'] = $ttc067;

        return $this;
    }

    /**
     * Gets ttc068
     *
     * @return float
     */
    public function getTtc068()
    {
        return $this->container['ttc068'];
    }

    /**
     * Sets ttc068
     *
     * @param float $ttc068 Total number of trades with revolving credit terms
     *
     * @return $this
     */
    public function setTtc068($ttc068)
    {
        $this->container['ttc068'] = $ttc068;

        return $this;
    }

    /**
     * Gets ttc069
     *
     * @return float
     */
    public function getTtc069()
    {
        return $this->container['ttc069'];
    }

    /**
     * Sets ttc069
     *
     * @param float $ttc069 Total number of trades with varied terms
     *
     * @return $this
     */
    public function setTtc069($ttc069)
    {
        $this->container['ttc069'] = $ttc069;

        return $this;
    }

    /**
     * Gets ttc070
     *
     * @return float
     */
    public function getTtc070()
    {
        return $this->container['ttc070'];
    }

    /**
     * Sets ttc070
     *
     * @param float $ttc070 Total number of trades with other terms
     *
     * @return $this
     */
    public function setTtc070($ttc070)
    {
        $this->container['ttc070'] = $ttc070;

        return $this;
    }

    /**
     * Gets tto074
     *
     * @return float
     */
    public function getTto074()
    {
        return $this->container['tto074'];
    }

    /**
     * Sets tto074
     *
     * @param float $tto074 Age in months of the most recently reported trade
     *
     * @return $this
     */
    public function setTto074($tto074)
    {
        $this->container['tto074'] = $tto074;

        return $this;
    }

    /**
     * Gets tto075
     *
     * @return float
     */
    public function getTto075()
    {
        return $this->container['tto075'];
    }

    /**
     * Sets tto075
     *
     * @param float $tto075 Age in months of oldest reported trade
     *
     * @return $this
     */
    public function setTto075($tto075)
    {
        $this->container['tto075'] = $tto075;

        return $this;
    }

    /**
     * Gets tto076
     *
     * @return float
     */
    public function getTto076()
    {
        return $this->container['tto076'];
    }

    /**
     * Sets tto076
     *
     * @param float $tto076 Average age in months of trades
     *
     * @return $this
     */
    public function setTto076($tto076)
    {
        $this->container['tto076'] = $tto076;

        return $this;
    }

    /**
     * Gets tto077
     *
     * @return float
     */
    public function getTto077()
    {
        return $this->container['tto077'];
    }

    /**
     * Sets tto077
     *
     * @param float $tto077 Age in months since business first added to Experian file
     *
     * @return $this
     */
    public function setTto077($tto077)
    {
        $this->container['tto077'] = $tto077;

        return $this;
    }

    /**
     * Gets ttp079
     *
     * @return float
     */
    public function getTtp079()
    {
        return $this->container['ttp079'];
    }

    /**
     * Sets ttp079
     *
     * @param float $ttp079 Ratio of Total account balance to Total highest account balance in prior 12 months, for additional trades (leasing, supplemental, telecomm and unknown, etc) reported with 4 months of the profile date
     *
     * @return $this
     */
    public function setTtp079($ttp079)
    {
        $this->container['ttp079'] = $ttp079;

        return $this;
    }

    /**
     * Gets ttp080
     *
     * @return float
     */
    public function getTtp080()
    {
        return $this->container['ttp080'];
    }

    /**
     * Sets ttp080
     *
     * @param float $ttp080 Ratio of Total account balance to Total highest account balance in prior 12 months, for continuous, new, and additional trades that are newly reported within six months of the profile date
     *
     * @return $this
     */
    public function setTtp080($ttp080)
    {
        $this->container['ttp080'] = $ttp080;

        return $this;
    }

    /**
     * Gets ttp084
     *
     * @return float
     */
    public function getTtp084()
    {
        return $this->container['ttp084'];
    }

    /**
     * Sets ttp084
     *
     * @param float $ttp084 Percentage of Total trades balance to Total trades Total highest balance in past 12 months
     *
     * @return $this
     */
    public function setTtp084($ttp084)
    {
        $this->container['ttp084'] = $ttp084;

        return $this;
    }

    /**
     * Gets txb001
     *
     * @return float
     */
    public function getTxb001()
    {
        return $this->container['txb001'];
    }

    /**
     * Sets txb001
     *
     * @param float $txb001 Total amount of tax lien filed within 12 months of profile date
     *
     * @return $this
     */
    public function setTxb001($txb001)
    {
        $this->container['txb001'] = $txb001;

        return $this;
    }

    /**
     * Gets txb002
     *
     * @return float
     */
    public function getTxb002()
    {
        return $this->container['txb002'];
    }

    /**
     * Sets txb002
     *
     * @param float $txb002 Total amount of tax lien filed within 24 months of profile date
     *
     * @return $this
     */
    public function setTxb002($txb002)
    {
        $this->container['txb002'] = $txb002;

        return $this;
    }

    /**
     * Gets txb003
     *
     * @return float
     */
    public function getTxb003()
    {
        return $this->container['txb003'];
    }

    /**
     * Sets txb003
     *
     * @param float $txb003 Total amount of tax lien filed within 6 months of profile date
     *
     * @return $this
     */
    public function setTxb003($txb003)
    {
        $this->container['txb003'] = $txb003;

        return $this;
    }

    /**
     * Gets txb004
     *
     * @return float
     */
    public function getTxb004()
    {
        return $this->container['txb004'];
    }

    /**
     * Sets txb004
     *
     * @param float $txb004 Total liability amount for original tax liens filed
     *
     * @return $this
     */
    public function setTxb004($txb004)
    {
        $this->container['txb004'] = $txb004;

        return $this;
    }

    /**
     * Gets txb006
     *
     * @return float
     */
    public function getTxb006()
    {
        return $this->container['txb006'];
    }

    /**
     * Sets txb006
     *
     * @param float $txb006 Total liability amount for original tax liens non-filed
     *
     * @return $this
     */
    public function setTxb006($txb006)
    {
        $this->container['txb006'] = $txb006;

        return $this;
    }

    /**
     * Gets txc007
     *
     * @return float
     */
    public function getTxc007()
    {
        return $this->container['txc007'];
    }

    /**
     * Sets txc007
     *
     * @param float $txc007 Total number of tax lien filed within 12 months of profile date
     *
     * @return $this
     */
    public function setTxc007($txc007)
    {
        $this->container['txc007'] = $txc007;

        return $this;
    }

    /**
     * Gets txc009
     *
     * @return float
     */
    public function getTxc009()
    {
        return $this->container['txc009'];
    }

    /**
     * Sets txc009
     *
     * @param float $txc009 Total number of tax lien filed within 6 months of profile date
     *
     * @return $this
     */
    public function setTxc009($txc009)
    {
        $this->container['txc009'] = $txc009;

        return $this;
    }

    /**
     * Gets txc010
     *
     * @return float
     */
    public function getTxc010()
    {
        return $this->container['txc010'];
    }

    /**
     * Sets txc010
     *
     * @param float $txc010 Total number of original tax liens filed
     *
     * @return $this
     */
    public function setTxc010($txc010)
    {
        $this->container['txc010'] = $txc010;

        return $this;
    }

    /**
     * Gets txc011
     *
     * @return float
     */
    public function getTxc011()
    {
        return $this->container['txc011'];
    }

    /**
     * Sets txc011
     *
     * @param float $txc011 Total number of tax liens filed within the last 24 months of profile date
     *
     * @return $this
     */
    public function setTxc011($txc011)
    {
        $this->container['txc011'] = $txc011;

        return $this;
    }

    /**
     * Gets txc012
     *
     * @return float
     */
    public function getTxc012()
    {
        return $this->container['txc012'];
    }

    /**
     * Sets txc012
     *
     * @param float $txc012 Total number of tax liens non-filed
     *
     * @return $this
     */
    public function setTxc012($txc012)
    {
        $this->container['txc012'] = $txc012;

        return $this;
    }

    /**
     * Gets txo013
     *
     * @return float
     */
    public function getTxo013()
    {
        return $this->container['txo013'];
    }

    /**
     * Sets txo013
     *
     * @param float $txo013 Age in months of most recent tax lien filed
     *
     * @return $this
     */
    public function setTxo013($txo013)
    {
        $this->container['txo013'] = $txo013;

        return $this;
    }

    /**
     * Gets txo014
     *
     * @return float
     */
    public function getTxo014()
    {
        return $this->container['txo014'];
    }

    /**
     * Sets txo014
     *
     * @param float $txo014 Age in months of most recent tax lien non-filed
     *
     * @return $this
     */
    public function setTxo014($txo014)
    {
        $this->container['txo014'] = $txo014;

        return $this;
    }

    /**
     * Gets txp015
     *
     * @return float
     */
    public function getTxp015()
    {
        return $this->container['txp015'];
    }

    /**
     * Sets txp015
     *
     * @param float $txp015 Percentage of Total tax lien amount filed with 12 months to Total balance
     *
     * @return $this
     */
    public function setTxp015($txp015)
    {
        $this->container['txp015'] = $txp015;

        return $this;
    }

    /**
     * Gets txp016
     *
     * @return float
     */
    public function getTxp016()
    {
        return $this->container['txp016'];
    }

    /**
     * Sets txp016
     *
     * @param float $txp016 Percentage of Total tax lien amount filed with 24 months to Total balance
     *
     * @return $this
     */
    public function setTxp016($txp016)
    {
        $this->container['txp016'] = $txp016;

        return $this;
    }

    /**
     * Gets txp017
     *
     * @return float
     */
    public function getTxp017()
    {
        return $this->container['txp017'];
    }

    /**
     * Sets txp017
     *
     * @param float $txp017 Percentage of Total tax lien amount filed with 6 months to Total balance
     *
     * @return $this
     */
    public function setTxp017($txp017)
    {
        $this->container['txp017'] = $txp017;

        return $this;
    }

    /**
     * Gets ucc001
     *
     * @return float
     */
    public function getUcc001()
    {
        return $this->container['ucc001'];
    }

    /**
     * Sets ucc001
     *
     * @param float $ucc001 Total number of UCC filings - detail
     *
     * @return $this
     */
    public function setUcc001($ucc001)
    {
        $this->container['ucc001'] = $ucc001;

        return $this;
    }

    /**
     * Gets ucc002
     *
     * @return float
     */
    public function getUcc002()
    {
        return $this->container['ucc002'];
    }

    /**
     * Sets ucc002
     *
     * @param float $ucc002 Total number of UCC filings - summary
     *
     * @return $this
     */
    public function setUcc002($ucc002)
    {
        $this->container['ucc002'] = $ucc002;

        return $this;
    }

    /**
     * Gets ucc003
     *
     * @return float
     */
    public function getUcc003()
    {
        return $this->container['ucc003'];
    }

    /**
     * Sets ucc003
     *
     * @param float $ucc003 Total number of unsatisfied UCC filings within the last 24 months of profile date
     *
     * @return $this
     */
    public function setUcc003($ucc003)
    {
        $this->container['ucc003'] = $ucc003;

        return $this;
    }

    /**
     * Gets ucc004
     *
     * @return float
     */
    public function getUcc004()
    {
        return $this->container['ucc004'];
    }

    /**
     * Sets ucc004
     *
     * @param float $ucc004 Total number of UCC original five-year filings within the last 24 months of profile date
     *
     * @return $this
     */
    public function setUcc004($ucc004)
    {
        $this->container['ucc004'] = $ucc004;

        return $this;
    }

    /**
     * Gets ucc005
     *
     * @return float
     */
    public function getUcc005()
    {
        return $this->container['ucc005'];
    }

    /**
     * Sets ucc005
     *
     * @param float $ucc005 Total number of UCC original filings
     *
     * @return $this
     */
    public function setUcc005($ucc005)
    {
        $this->container['ucc005'] = $ucc005;

        return $this;
    }

    /**
     * Gets ucc006
     *
     * @return float
     */
    public function getUcc006()
    {
        return $this->container['ucc006'];
    }

    /**
     * Sets ucc006
     *
     * @param float $ucc006 Total number of UCC original five-year filings
     *
     * @return $this
     */
    public function setUcc006($ucc006)
    {
        $this->container['ucc006'] = $ucc006;

        return $this;
    }

    /**
     * Gets ucc007
     *
     * @return float
     */
    public function getUcc007()
    {
        return $this->container['ucc007'];
    }

    /**
     * Sets ucc007
     *
     * @param float $ucc007 Total number of UCC amended filings
     *
     * @return $this
     */
    public function setUcc007($ucc007)
    {
        $this->container['ucc007'] = $ucc007;

        return $this;
    }

    /**
     * Gets ucc008
     *
     * @return float
     */
    public function getUcc008()
    {
        return $this->container['ucc008'];
    }

    /**
     * Sets ucc008
     *
     * @param float $ucc008 Total number of UCC assigned filings
     *
     * @return $this
     */
    public function setUcc008($ucc008)
    {
        $this->container['ucc008'] = $ucc008;

        return $this;
    }

    /**
     * Gets ucc009
     *
     * @return float
     */
    public function getUcc009()
    {
        return $this->container['ucc009'];
    }

    /**
     * Sets ucc009
     *
     * @param float $ucc009 Total number of UCC partial release filings
     *
     * @return $this
     */
    public function setUcc009($ucc009)
    {
        $this->container['ucc009'] = $ucc009;

        return $this;
    }

    /**
     * Gets ucc010
     *
     * @return float
     */
    public function getUcc010()
    {
        return $this->container['ucc010'];
    }

    /**
     * Sets ucc010
     *
     * @param float $ucc010 Total number of UCC full release filings
     *
     * @return $this
     */
    public function setUcc010($ucc010)
    {
        $this->container['ucc010'] = $ucc010;

        return $this;
    }

    /**
     * Gets ucc011
     *
     * @return float
     */
    public function getUcc011()
    {
        return $this->container['ucc011'];
    }

    /**
     * Sets ucc011
     *
     * @param float $ucc011 Total number of UCC released filings
     *
     * @return $this
     */
    public function setUcc011($ucc011)
    {
        $this->container['ucc011'] = $ucc011;

        return $this;
    }

    /**
     * Gets ucc012
     *
     * @return float
     */
    public function getUcc012()
    {
        return $this->container['ucc012'];
    }

    /**
     * Sets ucc012
     *
     * @param float $ucc012 Total number of UCC terminated filings
     *
     * @return $this
     */
    public function setUcc012($ucc012)
    {
        $this->container['ucc012'] = $ucc012;

        return $this;
    }

    /**
     * Gets ucc013
     *
     * @return float
     */
    public function getUcc013()
    {
        return $this->container['ucc013'];
    }

    /**
     * Sets ucc013
     *
     * @param float $ucc013 Total number of UCC continued filings
     *
     * @return $this
     */
    public function setUcc013($ucc013)
    {
        $this->container['ucc013'] = $ucc013;

        return $this;
    }

    /**
     * Gets ucc014
     *
     * @return float
     */
    public function getUcc014()
    {
        return $this->container['ucc014'];
    }

    /**
     * Sets ucc014
     *
     * @param float $ucc014 Total number of UCC original ten-year filings
     *
     * @return $this
     */
    public function setUcc014($ucc014)
    {
        $this->container['ucc014'] = $ucc014;

        return $this;
    }

    /**
     * Gets ucc015
     *
     * @return float
     */
    public function getUcc015()
    {
        return $this->container['ucc015'];
    }

    /**
     * Sets ucc015
     *
     * @param float $ucc015 Total number of original UCC filings pledging derogatory collateral
     *
     * @return $this
     */
    public function setUcc015($ucc015)
    {
        $this->container['ucc015'] = $ucc015;

        return $this;
    }

    /**
     * Gets ucc016
     *
     * @return float
     */
    public function getUcc016()
    {
        return $this->container['ucc016'];
    }

    /**
     * Sets ucc016
     *
     * @param float $ucc016 Total number of original UCC filings pledging derogatory collateral within 24 months of the profile date
     *
     * @return $this
     */
    public function setUcc016($ucc016)
    {
        $this->container['ucc016'] = $ucc016;

        return $this;
    }

    /**
     * Gets dmo004
     *
     * @return string
     */
    public function getDmo004()
    {
        return $this->container['dmo004'];
    }

    /**
     * Sets dmo004
     *
     * @param string $dmo004 Employee size code: A= 1-4, B = 5-9, C = 10-19, D = 20-49, E = 50- 99, F = 100-249, G = 250-499, H = 500-999, I = Over 1000
     *
     * @return $this
     */
    public function setDmo004($dmo004)
    {
        $this->container['dmo004'] = $dmo004;

        return $this;
    }

    /**
     * Gets dmo014
     *
     * @return string
     */
    public function getDmo014()
    {
        return $this->container['dmo014'];
    }

    /**
     * Sets dmo014
     *
     * @param string $dmo014 The type of ownership under which the business is operating. O = Unknown, 1 = Public, 2 = Private, 3 = Foreign, 4 = Non-Profit, 5 = Public Minority, 6 = Private Minority, 7 = Foreign Minority
     *
     * @return $this
     */
    public function setDmo014($dmo014)
    {
        if (!is_null($dmo014) && (mb_strlen($dmo014) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dmo014 when calling BizAggregates., must be smaller than or equal to 1.');
        }

        $this->container['dmo014'] = $dmo014;

        return $this;
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


