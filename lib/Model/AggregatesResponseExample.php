<?php
/**
 * AggregatesResponseExample
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
 * AggregatesResponseExample Class Doc Comment
 *
 * @category Class
 * @description &lt;div&gt;   &lt;p&gt;Example Business Aggregates Response&lt;/p&gt;   &lt;pre&gt;       {         \&quot;requestId\&quot;: \&quot;rrt-0db7b48e0c1496ec0-d-ea-23420-10567904-1\&quot;,         \&quot;success\&quot;: true,         \&quot;bin\&quot;: \&quot;711641454\&quot;,         \&quot;results\&quot;: {             \&quot;ATC039\&quot;: 5,             \&quot;ATC031\&quot;: 0,             \&quot;ATC030\&quot;: 0,             \&quot;ATC032\&quot;: 6,             \&quot;RTB019\&quot;: 100,             \&quot;RTB018\&quot;: 4900,             \&quot;TTP084\&quot;: 6,             \&quot;TTP085\&quot;: 100,             \&quot;TTP080\&quot;: 0,             \&quot;RTB011\&quot;: 100,             \&quot;RTB010\&quot;: 0,             \&quot;RTB013\&quot;: 0,             \&quot;RTB012\&quot;: 0,             \&quot;RTB015\&quot;: 0,             \&quot;RTB014\&quot;: 0,             \&quot;RTB017\&quot;: 100,             \&quot;RTB016\&quot;: 0,             \&quot;TTC036\&quot;: 0,             \&quot;TTC037\&quot;: 4,             \&quot;TTC035\&quot;: 1,             \&quot;TTC038\&quot;: 8,             \&quot;TTC039\&quot;: 3,             \&quot;RTO077\&quot;: 20,             \&quot;RTO079\&quot;: 25,             \&quot;TTB031\&quot;: 0,             \&quot;TTB030\&quot;: 800,             \&quot;TTB033\&quot;: 36700,             \&quot;TTB032\&quot;: 100,             \&quot;TTP086\&quot;: 100,             \&quot;TTB012\&quot;: 0,             \&quot;CTP041\&quot;: 25,             \&quot;CTP040\&quot;: 1,             \&quot;JDC012\&quot;: 0,             \&quot;JDC010\&quot;: 0,             \&quot;JDC011\&quot;: 0,             \&quot;TXP017\&quot;: 0,             \&quot;DMO013\&quot;: \&quot;8733\&quot;,             \&quot;DMO014\&quot;: \&quot;\&quot;,             \&quot;CTB012\&quot;: 0,             \&quot;CTB013\&quot;: 0,             \&quot;CTB010\&quot;: 0,             \&quot;CTB011\&quot;: 100,             \&quot;CTB016\&quot;: 0,             \&quot;CTB017\&quot;: 100,             \&quot;CTB014\&quot;: 0,             \&quot;CTB015\&quot;: 0,             \&quot;CTB018\&quot;: 4900,             \&quot;CTB019\&quot;: 100,             \&quot;TTC052\&quot;: 0,             \&quot;CLP016\&quot;: 34,             \&quot;CLP017\&quot;: 0,             \&quot;CLP018\&quot;: 0,             \&quot;CLP019\&quot;: 100,             \&quot;ACC007\&quot;: 0,             \&quot;ACC006\&quot;: 0,             \&quot;RTD068\&quot;: 105,             \&quot;ACC004\&quot;: 0,             \&quot;ACC003\&quot;: 0,             \&quot;ACC002\&quot;: 0,             \&quot;ACC001\&quot;: 0,             \&quot;RTD062\&quot;: 105,             \&quot;RTD063\&quot;: 105,             \&quot;RTD060\&quot;: 105,             \&quot;RTD061\&quot;: 105,             \&quot;RTD067\&quot;: 105,             \&quot;RTD064\&quot;: 53,             \&quot;RTD065\&quot;: 5,             \&quot;RTC049\&quot;: 0,             \&quot;RTC048\&quot;: 2,             \&quot;BKO009\&quot;: 0,             \&quot;RTC045\&quot;: 0,             \&quot;RTC044\&quot;: 0,             \&quot;RTC047\&quot;: 1,             \&quot;RTC046\&quot;: 0,             \&quot;RTC041\&quot;: 1,             \&quot;RTC040\&quot;: 0,             \&quot;RTC043\&quot;: 0,             \&quot;RTC042\&quot;: 1,             \&quot;TXC010\&quot;: 2,             \&quot;TXC011\&quot;: 0,             \&quot;TXC012\&quot;: 0,             \&quot;TTC058\&quot;: 2,             \&quot;TTC059\&quot;: 1,             \&quot;BRP019\&quot;: 0,             \&quot;BRP018\&quot;: 0,             \&quot;OTC008\&quot;: 0,             \&quot;OTC009\&quot;: 0,             \&quot;OTC006\&quot;: 0,             \&quot;OTC007\&quot;: 1,             \&quot;UCC009\&quot;: 0,             \&quot;TTC053\&quot;: 0,             \&quot;UCC014\&quot;: 0,             \&quot;UCC015\&quot;: 0,             \&quot;UCC016\&quot;: 0,             \&quot;UCC010\&quot;: 0,             \&quot;UCC011\&quot;: 0,             \&quot;UCC012\&quot;: 0,             \&quot;UCC013\&quot;: 0,             \&quot;OTP021\&quot;: 0,             \&quot;OTP020\&quot;: 0,             \&quot;TTP079\&quot;: 0,             \&quot;BRC010\&quot;: 0,             \&quot;BRC011\&quot;: 0,             \&quot;RTB024\&quot;: 200,             \&quot;RTB025\&quot;: 400,             \&quot;RTB026\&quot;: 55,             \&quot;RTB027\&quot;: 21,             \&quot;RTB020\&quot;: 100,             \&quot;RTB021\&quot;: 100,             \&quot;RTB022\&quot;: 100,             \&quot;RTB023\&quot;: 100,             \&quot;RTB028\&quot;: 0,             \&quot;RTB029\&quot;: 23,             \&quot;OTP016\&quot;: 0,             \&quot;OTD013\&quot;: 0,             \&quot;LSC022\&quot;: 0,             \&quot;OTP019\&quot;: 0,             \&quot;TTB008\&quot;: 1750,             \&quot;TTB009\&quot;: 0,             \&quot;TTB001\&quot;: 100,             \&quot;TTB002\&quot;: 0,             \&quot;TTB003\&quot;: 5900,             \&quot;TTB004\&quot;: 3250,             \&quot;TTB005\&quot;: 800,             \&quot;TTB006\&quot;: 0,             \&quot;TTB007\&quot;: 100,             \&quot;JDC009\&quot;: 0,             \&quot;JDC008\&quot;: 0,             \&quot;CTP039\&quot;: 2,             \&quot;JDC007\&quot;: 0,             \&quot;TXP015\&quot;: 0,             \&quot;CTD038\&quot;: 105,             \&quot;TXP016\&quot;: 0,             \&quot;ATD034\&quot;: 15,             \&quot;ATD035\&quot;: 45,             \&quot;CLB001\&quot;: 2028,             \&quot;CLB003\&quot;: 0,             \&quot;CLB002\&quot;: 2028,             \&quot;CLB005\&quot;: 0,             \&quot;CLB004\&quot;: 0,             \&quot;CTC024\&quot;: 0,             \&quot;CTC025\&quot;: 0,             \&quot;CTC026\&quot;: 1,             \&quot;CTC027\&quot;: 1,             \&quot;CTC021\&quot;: 2,             \&quot;CTC022\&quot;: 1,             \&quot;CTC023\&quot;: 0,             \&quot;CTC028\&quot;: 0,             \&quot;CTC029\&quot;: 0,             \&quot;LSC013\&quot;: 0,             \&quot;LSC012\&quot;: 0,             \&quot;LSC011\&quot;: 0,             \&quot;LSC010\&quot;: 0,             \&quot;LSC017\&quot;: 0,             \&quot;LSC016\&quot;: 0,             \&quot;LSC015\&quot;: 0,             \&quot;LSC014\&quot;: 0,             \&quot;LSC019\&quot;: 0,             \&quot;LSC018\&quot;: 0,             \&quot;CTB001\&quot;: 100,             \&quot;CTB003\&quot;: 0,             \&quot;CTB002\&quot;: 0,             \&quot;CTB005\&quot;: 100,             \&quot;CTB004\&quot;: 0,             \&quot;CTB007\&quot;: 0,             \&quot;CTB006\&quot;: 0,             \&quot;CTB009\&quot;: 0,             \&quot;CTB008\&quot;: 0,             \&quot;TTC069\&quot;: 0,             \&quot;TTC068\&quot;: 1,             \&quot;ATP038\&quot;: 62,             \&quot;RTD071\&quot;: 8,             \&quot;RTD070\&quot;: 9,             \&quot;ATP036\&quot;: 13,             \&quot;ATP037\&quot;: 98,             \&quot;TTC049\&quot;: 1,             \&quot;TTC064\&quot;: 0,             \&quot;TTC067\&quot;: 2,             \&quot;TTC066\&quot;: 0,             \&quot;IQC001\&quot;: 0,             \&quot;BRB005\&quot;: 0,             \&quot;IQC003\&quot;: 0,             \&quot;LGC003\&quot;: 0,             \&quot;LGC004\&quot;: 2,             \&quot;BRB001\&quot;: 0,             \&quot;BRB002\&quot;: 0,             \&quot;BRB003\&quot;: 0,             \&quot;IQC002\&quot;: 0,             \&quot;TTO076\&quot;: 35,             \&quot;TTO077\&quot;: 158,             \&quot;TTO074\&quot;: 19,             \&quot;TTO075\&quot;: 51,             \&quot;BKO011\&quot;: 0,             \&quot;BKO010\&quot;: 0,             \&quot;TXC007\&quot;: 0,             \&quot;RTD072\&quot;: 3,             \&quot;TXC008\&quot;: 0,             \&quot;LGC002\&quot;: 0,             \&quot;BRP020\&quot;: 0,             \&quot;BRP021\&quot;: 0,             \&quot;BRP022\&quot;: 0,             \&quot;BRP023\&quot;: 0,             \&quot;OTC011\&quot;: 0,             \&quot;OTC010\&quot;: 1,             \&quot;BKC006\&quot;: 0,             \&quot;BKC007\&quot;: 0,             \&quot;TTB026\&quot;: 0,             \&quot;BKC004\&quot;: 0,             \&quot;TTB027\&quot;: 100,             \&quot;NTC030\&quot;: 0,             \&quot;NTC031\&quot;: 0,             \&quot;NTC032\&quot;: 0,             \&quot;UCC008\&quot;: 0,             \&quot;UCC003\&quot;: 0,             \&quot;UCC002\&quot;: 0,             \&quot;UCC001\&quot;: 0,             \&quot;UCC007\&quot;: 0,             \&quot;UCC006\&quot;: 0,             \&quot;UCC005\&quot;: 0,             \&quot;UCC004\&quot;: 0,             \&quot;LSC028\&quot;: 0,             \&quot;LSC029\&quot;: 0,             \&quot;OTP014\&quot;: 0,             \&quot;OTP015\&quot;: 0,             \&quot;OTD012\&quot;: 0,             \&quot;OTP017\&quot;: 12,             \&quot;OTP018\&quot;: 0,             \&quot;LSC023\&quot;: 0,             \&quot;LSC020\&quot;: 0,             \&quot;LSC021\&quot;: 0,             \&quot;LSC026\&quot;: 0,             \&quot;LSC027\&quot;: 0,             \&quot;LSC024\&quot;: 0,             \&quot;LSC025\&quot;: 0,             \&quot;BKB001\&quot;: 0,             \&quot;TTC061\&quot;: 1,             \&quot;BKB003\&quot;: 0,             \&quot;BKB002\&quot;: 0,             \&quot;TTC060\&quot;: 1,             \&quot;TTC063\&quot;: 2,             \&quot;RTB033\&quot;: 600,             \&quot;RTB032\&quot;: 200,             \&quot;RTB031\&quot;: 100,             \&quot;RTB030\&quot;: 66,             \&quot;RTB035\&quot;: 900,             \&quot;RTB034\&quot;: 800,             \&quot;TTC065\&quot;: 0,             \&quot;TXB001\&quot;: 0,             \&quot;JDB002\&quot;: 0,             \&quot;JDB003\&quot;: 0,             \&quot;JDB001\&quot;: 0,             \&quot;JDB006\&quot;: 0,             \&quot;TXB002\&quot;: 0,             \&quot;JDB004\&quot;: 0,             \&quot;JDB005\&quot;: 0,             \&quot;TXB003\&quot;: 0,             \&quot;BRB004\&quot;: 0,             \&quot;CLC006\&quot;: 1,             \&quot;CLC007\&quot;: 0,             \&quot;CLC008\&quot;: 0,             \&quot;CLC009\&quot;: 0,             \&quot;BRB006\&quot;: 0,             \&quot;BRB007\&quot;: 0,             \&quot;ATB018\&quot;: 44000,             \&quot;ATB019\&quot;: 5800,             \&quot;ATB014\&quot;: 0,             \&quot;ATB015\&quot;: 800,             \&quot;ATB016\&quot;: 0,             \&quot;ATB017\&quot;: 0,             \&quot;ATB010\&quot;: 0,             \&quot;ATB011\&quot;: 0,             \&quot;ATB012\&quot;: 0,             \&quot;ATB013\&quot;: 5000,             \&quot;CTC033\&quot;: 1,             \&quot;CTC032\&quot;: 1,             \&quot;CTC031\&quot;: 0,             \&quot;CTC030\&quot;: 0,             \&quot;RTC038\&quot;: 0,             \&quot;CTC036\&quot;: 1,             \&quot;CTC035\&quot;: 1,             \&quot;CTC034\&quot;: 1,             \&quot;RTC036\&quot;: 2,             \&quot;RTC037\&quot;: 1,             \&quot;TTB019\&quot;: 100,             \&quot;TTB018\&quot;: 0,             \&quot;ACC008\&quot;: 3,             \&quot;LSB009\&quot;: 0,             \&quot;LSB008\&quot;: 0,             \&quot;LSB003\&quot;: 0,             \&quot;LSB002\&quot;: 0,             \&quot;LSB001\&quot;: 0,             \&quot;LSB007\&quot;: 0,             \&quot;LSB006\&quot;: 0,             \&quot;LSB005\&quot;: 0,             \&quot;LSB004\&quot;: 0,             \&quot;TTC054\&quot;: 0,             \&quot;TTC055\&quot;: 0,             \&quot;TTC056\&quot;: 0,             \&quot;TTC057\&quot;: 5,             \&quot;TTC050\&quot;: 8,             \&quot;TTC051\&quot;: 5,             \&quot;NTB008\&quot;: 0,             \&quot;NTB009\&quot;: 0,             \&quot;NTB006\&quot;: 0,             \&quot;NTB007\&quot;: 0,             \&quot;NTB004\&quot;: 0,             \&quot;NTB005\&quot;: 0,             \&quot;NTB002\&quot;: 0,             \&quot;NTB003\&quot;: 0,             \&quot;NTB001\&quot;: 0,             \&quot;BRC014\&quot;: 0,             \&quot;NTP039\&quot;: 0,             \&quot;NTP038\&quot;: 0,             \&quot;BRC012\&quot;: 0,             \&quot;BRC013\&quot;: 0,             \&quot;NTP037\&quot;: 0,             \&quot;NTP036\&quot;: 0,             \&quot;ATC028\&quot;: 0,             \&quot;ATC029\&quot;: 1,             \&quot;ATC022\&quot;: 3,             \&quot;ATC023\&quot;: 1,             \&quot;ATC020\&quot;: 5,             \&quot;ATC021\&quot;: 1,             \&quot;ATC026\&quot;: 1,             \&quot;ATC027\&quot;: 3,             \&quot;ATC024\&quot;: 0,             \&quot;ATC025\&quot;: 0,             \&quot;RTB008\&quot;: 0,             \&quot;RTB009\&quot;: 0,             \&quot;RTB002\&quot;: 0,             \&quot;RTB003\&quot;: 0,             \&quot;RTB001\&quot;: 100,             \&quot;RTB006\&quot;: 0,             \&quot;RTB007\&quot;: 0,             \&quot;RTB004\&quot;: 0,             \&quot;RTB005\&quot;: 100,             \&quot;TTB028\&quot;: 1750,             \&quot;TTB029\&quot;: 3250,             \&quot;LSP034\&quot;: 0,             \&quot;LSP035\&quot;: 0,             \&quot;TTB024\&quot;: 1750,             \&quot;TTB025\&quot;: 800,             \&quot;TTB022\&quot;: 85600,             \&quot;TTB023\&quot;: 1750,             \&quot;TTB020\&quot;: 85600,             \&quot;TTB021\&quot;: 5900,             \&quot;TXO013\&quot;: 31,             \&quot;TXO014\&quot;: 0,             \&quot;OTB005\&quot;: 0,             \&quot;OTB004\&quot;: 0,             \&quot;OTB001\&quot;: 0,             \&quot;OTB003\&quot;: 0,             \&quot;OTB002\&quot;: 0,             \&quot;DMO003\&quot;: \&quot;C\&quot;,             \&quot;DMO004\&quot;: \&quot;\&quot;,             \&quot;NTC028\&quot;: 0,             \&quot;NTC027\&quot;: 0,             \&quot;NTC026\&quot;: 0,             \&quot;RTP086\&quot;: 0,             \&quot;DMO009\&quot;: \&quot;20041015\&quot;,             \&quot;NTC023\&quot;: 0,             \&quot;NTC022\&quot;: 0,             \&quot;RTP082\&quot;: 1,             \&quot;RTP083\&quot;: 25,             \&quot;LSC031\&quot;: 0,             \&quot;LSC030\&quot;: 0,             \&quot;LSC033\&quot;: 0,             \&quot;LSC032\&quot;: 0,             \&quot;TXB004\&quot;: 2404,             \&quot;ACC005\&quot;: 0,             \&quot;TXB005\&quot;: 0,             \&quot;RTD069\&quot;: 16,             \&quot;TTC043\&quot;: 1,             \&quot;TTC042\&quot;: 0,             \&quot;TXB006\&quot;: 0,             \&quot;TTC047\&quot;: 1,             \&quot;TTC070\&quot;: 3,             \&quot;TTC046\&quot;: 0,             \&quot;PRO001\&quot;: 0,             \&quot;PRO003\&quot;: 0,             \&quot;PRO002\&quot;: 0,             \&quot;BRO015\&quot;: 0,             \&quot;CLC011\&quot;: 0,             \&quot;CLC010\&quot;: 1,             \&quot;CLC013\&quot;: 0,             \&quot;CLC012\&quot;: 0,             \&quot;BRO016\&quot;: 0,             \&quot;BRO017\&quot;: 0,             \&quot;NTB017\&quot;: 0,             \&quot;TTB017\&quot;: 800,             \&quot;TTC048\&quot;: 0,             \&quot;TTB016\&quot;: 0,             \&quot;TTB015\&quot;: 5000,             \&quot;TTB014\&quot;: 0,             \&quot;NTD035\&quot;: 0,             \&quot;NTD034\&quot;: 0,             \&quot;TTB013\&quot;: 100,             \&quot;RTC039\&quot;: 0,             \&quot;TTB011\&quot;: 800,             \&quot;RTC054\&quot;: 0,             \&quot;TTB010\&quot;: 5000,             \&quot;RTC052\&quot;: 0,             \&quot;RTC053\&quot;: 1,             \&quot;RTC050\&quot;: 0,             \&quot;RTC051\&quot;: 0,             \&quot;BKC008\&quot;: 0,             \&quot;JDP017\&quot;: 0,             \&quot;JDP016\&quot;: 0,             \&quot;JDP015\&quot;: 0,             \&quot;BKC005\&quot;: 0,             \&quot;ATB009\&quot;: 800,             \&quot;ATB008\&quot;: 5000,             \&quot;ATB003\&quot;: 800,             \&quot;ATB002\&quot;: 3250,             \&quot;ATB001\&quot;: 5800,             \&quot;ATB007\&quot;: 0,             \&quot;ATB006\&quot;: 1750,             \&quot;ATB005\&quot;: 0,             \&quot;ATB004\&quot;: 0,             \&quot;TXC009\&quot;: 0,             \&quot;NTC029\&quot;: 0,             \&quot;NTC025\&quot;: 0,             \&quot;NTC024\&quot;: 0,             \&quot;RTP081\&quot;: 2,             \&quot;NTC021\&quot;: 0,             \&quot;NTC020\&quot;: 0,             \&quot;JDO014\&quot;: 0,             \&quot;JDO013\&quot;: 0,             \&quot;CLO015\&quot;: 0,             \&quot;CLO014\&quot;: 77,             \&quot;TTC041\&quot;: 1,             \&quot;TTC040\&quot;: 3,             \&quot;NTB019\&quot;: 0,             \&quot;NTB018\&quot;: 0,             \&quot;TTC045\&quot;: 3,             \&quot;TTC044\&quot;: 3,             \&quot;NTB015\&quot;: 0,             \&quot;NTB014\&quot;: 0,             \&quot;RTD059\&quot;: 105,             \&quot;NTB016\&quot;: 0,             \&quot;NTB011\&quot;: 0,             \&quot;NTB010\&quot;: 0,             \&quot;NTB013\&quot;: 0,             \&quot;NTB012\&quot;: 0,             \&quot;BRC009\&quot;: 0,             \&quot;BRC008\&quot;: 0         }     }
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatesResponseExample implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'aggregates_response_example';

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


