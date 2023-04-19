<?php
/**
 * PremierprofileshtmlResponseExample
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
 * PremierprofileshtmlResponseExample Class Doc Comment
 *
 * @category Class
 * @description &lt;div&gt;   &lt;p&gt;Example Premier Profile Response&lt;/p&gt;   &lt;pre&gt;     {       \&quot;requestId\&quot;: \&quot;rrt-0d69bc84d759ba941-c-ea-15097-33445686-1\&quot;,       \&quot;success\&quot;: true,       \&quot;comments\&quot;: \&quot;12345\&quot;,       \&quot;results\&quot;: \&quot;\\n&lt;html xmlns:prd&#x3D;\\\&quot;http://www.experian.com/BIS\\\&quot;&gt;\\n&lt;head&gt;\\n&lt;title&gt;Premier Profile&lt;/title&gt;\\n&lt;style type&#x3D;\\\&quot;text/css\\\&quot;&gt;\\n\\t\\t/_**\\n\\t\\t * Start css for new reports that works with iText\\n\\t\\t *_/\\n\\t\\t@media screen\\n\\t\\t{\\n\\t\\t\\t.report_container .print_only {display: none;}\\n\\t\\t\\t.report_container .hidden_on_screen {display:none}\\n\\n\\t\\t\\t.report_container div.pageBreak {\\n\\t\\t\\t\\tmargin: 0;\\n\\t\\t\\t\\tpadding: 0;\\n\\t\\t\\t\\theight: 12px;\\n\\t\\t\\t}\\n\\n\\t\\t}\\n\\n\\t\\t@media print\\n\\t\\t{\\n\\t\\t\\t.google_chart_print, .scoreGraphic {\\n\\t\\t\\t\\tpage-break-inside : avoid;\\n\\t\\t\\t\\t-fs-keep-with-inline : keep;\\n\\t\\t\\t\\t-fs-table-paginate: paginate;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .google_chart {display: none;}\\n\\t\\t\\t.report_container .show_on_print {display:block}\\n\\t\\t\\t.report_container .hidden_on_print {display:none;}\\n\\n\\t\\t\\t.report_container img[src$&#x3D;\\\&quot;spacer.gif\\\&quot;] {\\n\\t\\t\\t\\tvisibility:hidden;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container #report_footer_title {\\n\\t\\t\\t\\tdisplay: block;\\n\\t\\t\\t\\tposition: running(footertitle);\\n\\t\\t\\t\\tmargin-left: 6px;\\n\\t\\t\\t\\tfont-size: 10px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container #report_footer_counter {\\n\\t\\t\\t\\tdisplay: block;\\n\\t\\t\\t\\tposition: running(footercounter);\\n\\t\\t\\t\\tpadding:0;\\n\\t\\t\\t\\tmargin-right: -10px;\\n\\t\\t\\t\\tfont-size: 10px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container #page_number:before {\\n\\t\\t\\t\\tcontent: counter(page);\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container #page_count:before {\\n\\t\\t\\t\\tcontent: counter(pages);\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container tr.sbscTrendInfo td .valueBox .trend {\\n\\t\\t\\t\\theight: 18px;\\n\\t\\t\\t\\tpadding-bottom: 8px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container tr.sbscTrendInfo td .valueBox .value {\\n\\t\\t\\t\\tpadding-bottom: 8px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t/_*.report_container table.pageBreak,*_/\\n\\t\\t\\t.report_container div.pageBreak {\\n\\t\\t\\t\\tpage-break-before:always;\\n\\t\\t\\t}\\n\\n\\t\\t\\t/_*Below may cause FS out of memory*_/\\n\\t\\t\\t/_*.report_container .pageNobreak {\\n\\t\\t\\t\\tpage-break-inside : avoid;\\n\\t\\t\\t\\t-fs-keep-with-inline : keep;\\n\\t\\t\\t\\t-fs-table-paginate: paginate;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container table.section {\\n\\t\\t\\t\\tpage-break-inside : avoid;\\n\\t\\t\\t\\t-fs-keep-with-inline : keep;\\n\\t\\t\\t\\t-fs-table-paginate: paginate;\\n\\t\\t\\t}*_/\\n\\t\\t}\\n\\n\\t\\t@page {\\n\\t\\t\\t@bottom-left {\\n\\t\\t\\t \\tcontent: element(footertitle);\\n\\t\\t\\t}\\n\\t\\t\\t@bottom-right {\\n\\t\\t\\t\\tcontent: element(footercounter);\\n\\t\\t\\t}\\n\\n\\t\\t\\tsize: 8.5in 11in;\\n\\t\\t\\tmargin-right: 0in;\\n\\t\\t\\tmargin-left: 0.375in;\\n\\t\\t\\tmargin-top: 0.25in;\\n\\t\\t\\tmargin-bottom: 0.5in;\\n\\t\\t\\tborder: none;\\n\\t\\t\\tpadding: 0;\\n\\t\\t\\ttex-align: center;\\n\\t\\t}\\n\\n\\n\\t\\t@media all {\\n\\t\\t\\tbody .report_container,.report_container a,.report_container td,.report_container th {\\n\\t\\t\\t\\tcolor: #595959;\\n\\t\\t\\t\\tfont-size: 11px;\\n\\t\\t\\t\\tfont-family: roboto,arial,helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_body sup {\\n\\t\\t\\t\\tcolor\\t\\t\\t:\\tinherit;\\n\\t\\t\\t\\t#color\\t\\t\\t:\\t#595959;\\n\\t\\t\\t\\tfont-size\\t\\t:\\tsmaller;\\n\\t\\t\\t\\tvertical-align\\t:\\tsuper;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container div.pageBreak hr {\\n\\t\\t\\t\\tdisplay: none;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container li{\\n\\t\\t\\t\\tlist-style:none;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container a[href] {\\n\\t\\t\\t\\ttext-decoration: underline;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .bright {\\n\\t\\t\\t  color: #0193dc;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container {\\n\\t\\t\\t\\twidth: 715px;\\n\\t\\t\\t}\\n\\n\\t\\t    .report_container .alert {\\n\\t\\t      color: #ff3300;\\n\\t\\t    }\\n\\n\\t\\t\\t.report_container .product_title {\\n\\t\\t\\t\\tfont-size: 18px;\\n\\t\\t\\t\\tfont-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .product_title sup {\\n\\t\\t\\t\\tfont-size: 11px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .report_section_title {\\n\\t\\t\\t\\tfont-size: 16px;\\n\\t\\t\\t\\tfont-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .font_size_1_minus {\\n\\t\\t\\t  font-size: 9px;\\n\\t\\t\\t  font-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .font_size_1 {\\n\\t\\t\\t  font-size: 10px;\\n\\t\\t\\t  font-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .font_size_2 {\\n\\t\\t\\t\\tfont-size: 12px;\\n\\t\\t\\t\\tfont-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .font_size_3 {\\n\\t\\t\\t\\tfont-size: 16px;\\n\\t\\t\\t\\tfont-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .font_size_4 {\\n\\t\\t\\t\\tfont-size: 18px;\\n\\t\\t\\t\\tfont-family: roboto, arial, helvetica, sans-serif;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .divider {\\n\\t\\t\\t  border-bottom: 1px solid #015CAE;\\n\\t\\t\\t  height:1px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container ul.list {\\n\\t\\t\\t\\tpadding: 0;\\n\\t\\t\\t\\tmargin:0;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container .list li {\\n\\t\\t\\t\\tpadding: 0 0 0 10px;\\n\\t\\t\\t\\tmargin: 5px 0 0 0;\\n\\t\\t\\t\\tbackground: transparent url(resources/images/reports/sprites_icons.png) no-repeat -95px -244px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container table.section {\\n\\t\\t\\t\\tborder: 1px solid #015CAE;\\n\\t\\t\\t\\talign: left;\\n\\t\\t\\t\\tvalign: top;\\n\\t\\t\\t\\tmargin-top: 5px;\\n\\t\\t\\t\\tborder-collapse: separate;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container div.block {\\n\\t\\t\\t  display: inline-block;\\n\\n\\t\\t\\t  /_* IE7 bs - enables inline-block for div-elements*_/\\n\\t\\t\\t  *display: inline;\\n\\t\\t\\t  zoom: 1;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container table.inner {\\n\\t\\t\\t  padding:2px;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container table.section .box_padding {\\n\\t\\t\\t  padding: 5px;\\n\\t\\t\\t}\\n\\n\\t \\t\\t.report_container .tableheight {\\n\\t \\t\\t\\theight\\t\\t:\\t\\t18px;\\n\\t \\t\\t}\\n\\t\\t\\t.report_container table.subsection {\\n\\t\\t\\t\\tmargin-top: 0;\\n\\t\\t\\t}\\n\\n\\t\\t\\t.report_container table tr.even td, .report_container table tr td.even {\\n\\t\\t\\t\\t/_*background-color\\t:\\t#e5f5fa;*_/\\n\\t\\t\\t\\tborder-bottom\\t\\t:\\t1px solid #b3b3b3;\\n\\t\\t\\t}\\n\\t\\t\\t.report_container table tr.odd td, .report_container table tr td.odd {\\n\\t\\t\\t\\t/_*background-color\\t:\&quot;     }   &lt;/pre&gt; &lt;/div&gt;
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PremierprofileshtmlResponseExample implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'premierprofileshtml_response_example';

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


