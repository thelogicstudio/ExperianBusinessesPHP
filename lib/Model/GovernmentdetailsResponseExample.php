<?php
/**
 * GovernmentdetailsResponseExample
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
 * GovernmentdetailsResponseExample Class Doc Comment
 *
 * @category Class
 * @description &lt;div&gt;   &lt;p&gt;Example Government Details Response Error&lt;p&gt;   &lt;pre&gt;     {         \&quot;requestId\&quot;: \&quot;rrt-0e4b7e3f3125745e4-c-ea-9938-6060089-3\&quot;,         \&quot;success\&quot;: true,         \&quot;comments\&quot;: \&quot;3736\&quot;,         \&quot;results\&quot;: {             \&quot;businessHeader\&quot;: {                 \&quot;bin\&quot;: \&quot;400390201\&quot;,                 \&quot;businessName\&quot;: \&quot;ASI CONSTRUCTORS, INC\&quot;,                 \&quot;address\&quot;: {                     \&quot;street\&quot;: \&quot;1850 E PLATTEVILLE BLVD\&quot;,                     \&quot;city\&quot;: \&quot;PUEBLO WEST\&quot;,                     \&quot;state\&quot;: \&quot;CO\&quot;,                     \&quot;zip\&quot;: \&quot;81007\&quot;,                     \&quot;zipExtension\&quot;: \&quot;1030\&quot;                 },                 \&quot;phone\&quot;: \&quot;+17196472821\&quot;,                 \&quot;taxId\&quot;: \&quot;203978997\&quot;,                 \&quot;websiteUrl\&quot;: \&quot;www.asiconstructors.com\&quot;,                 \&quot;legalBusinessName\&quot;: \&quot;ASI CONSTRUCTORS, INC.\&quot;,                 \&quot;dbaNames\&quot;: [                     \&quot;ASI CONSTRUCTORS INC\&quot;                 ],                 \&quot;customerDisputeIndicator\&quot;: false             },             \&quot;commercialGovernmentEntityCode\&quot;: {                 \&quot;cageCode\&quot;: \&quot;49MH3\&quot;             },             \&quot;economicDiversity\&quot;: null,             \&quot;governmentActivity\&quot;: {                 \&quot;congressionalDistrict\&quot;: \&quot;03\&quot;,                 \&quot;contractorIndicator\&quot;: true,                 \&quot;debarredIndicator\&quot;: false,                 \&quot;agency\&quot;: \&quot; \&quot;,                 \&quot;activeDate\&quot;: null,                 \&quot;terminationDate\&quot;: null             },             \&quot;contractSpendingSummary\&quot;: {                 \&quot;totalDollarAmount\&quot;: 20321578,                 \&quot;totalNumberOfTransactions\&quot;: 59,                 \&quot;currentFiscalYear\&quot;: {                     \&quot;year\&quot;: 2017,                     \&quot;totalAmount\&quot;: 2657331,                     \&quot;singleHighestAmount\&quot;: 2000000                 },                 \&quot;priorFiscalYear\&quot;: [                     {                         \&quot;year\&quot;: 2016,                         \&quot;totalAmount\&quot;: 4979716,                         \&quot;singleHighestAmount\&quot;: 1651059                     },                     {                         \&quot;year\&quot;: 2015,                         \&quot;totalAmount\&quot;: 487825,                         \&quot;singleHighestAmount\&quot;: 430000                     },                     {                         \&quot;year\&quot;: 2014,                         \&quot;totalAmount\&quot;: 9543904,                         \&quot;singleHighestAmount\&quot;: 8222350                     },                     {                         \&quot;year\&quot;: 2013,                         \&quot;totalAmount\&quot;: 2652802,                         \&quot;singleHighestAmount\&quot;: 1833992                     }                 ]             },             \&quot;contractSpendingDetail\&quot;: [                 {                     \&quot;contractAction\&quot;: \&quot;DEFINITIVE CONTRACT\&quot;,                     \&quot;programSource\&quot;: \&quot;96-3123\&quot;,                     \&quot;departmentAgency\&quot;: \&quot;DEPT OF DEFENSE / NOT REPORTED\&quot;,                     \&quot;productService\&quot;: \&quot;Y211 / CONSTRUCTION OF DAMS\&quot;,                     \&quot;signedDate\&quot;: \&quot;2016-03-14\&quot;,                     \&quot;obligationAmount\&quot;: -12824,                     \&quot;reasonForModification\&quot;: \&quot;OTHER ADMINISTRATIVE ACTION\&quot;,                     \&quot;sequenceNumber\&quot;: 1                 },                 {                     \&quot;contractAction\&quot;: \&quot;DEFINITIVE CONTRACT\&quot;,                     \&quot;programSource\&quot;: \&quot;21-2050\&quot;,                     \&quot;departmentAgency\&quot;: \&quot;DEPT OF DEFENSE / NOT REPORTED\&quot;,                     \&quot;productService\&quot;: \&quot;Y1KA / CONSTRUCTION OF DAMS\&quot;,                     \&quot;signedDate\&quot;: \&quot;2016-03-13\&quot;,                     \&quot;obligationAmount\&quot;: 0,                     \&quot;reasonForModification\&quot;: \&quot;CHANGE ORDER\&quot;,                     \&quot;sequenceNumber\&quot;: 2                 },                 {                     \&quot;contractAction\&quot;: \&quot;DEFINITIVE CONTRACT\&quot;,                     \&quot;programSource\&quot;: \&quot;96-3125\&quot;,                     \&quot;departmentAgency\&quot;: \&quot;DEPT OF DEFENSE / NOT REPORTED\&quot;,                     \&quot;productService\&quot;: \&quot;Z2KA / REPAIR OR ALTERATION OF DAMS\&quot;,                     \&quot;signedDate\&quot;: \&quot;2015-11-30\&quot;,                     \&quot;obligationAmount\&quot;: 0,                     \&quot;reasonForModification\&quot;: \&quot;SUPPLEMENTAL AGREEMENT FOR WORK WITHIN SCOPE\&quot;,                     \&quot;sequenceNumber\&quot;: 3                 },                 {                     \&quot;contractAction\&quot;: \&quot;DEFINITIVE CONTRACT\&quot;,                     \&quot;programSource\&quot;: \&quot;96-3123\&quot;,                     \&quot;departmentAgency\&quot;: \&quot;DEPT OF DEFENSE / NOT REPORTED\&quot;,                     \&quot;productService\&quot;: \&quot;Y211 / CONSTRUCTION OF DAMS\&quot;,                     \&quot;signedDate\&quot;: \&quot;2015-09-28\&quot;,                     \&quot;obligationAmount\&quot;: 0,                     \&quot;reasonForModification\&quot;: \&quot;OTHER ADMINISTRATIVE ACTION\&quot;,                     \&quot;sequenceNumber\&quot;: 4                 },                 {                     \&quot;contractAction\&quot;: \&quot;DEFINITIVE CONTRACT\&quot;,                     \&quot;programSource\&quot;: \&quot;96-3123\&quot;,                     \&quot;departmentAgency\&quot;: \&quot;DEPT OF DEFENSE / NOT REPORTED\&quot;,                     \&quot;productService\&quot;: \&quot;Y211 / CONSTRUCTION OF DAMS\&quot;,                     \&quot;signedDate\&quot;: \&quot;2015-09-06\&quot;,                     \&quot;obligationAmount\&quot;: 430000,                     \&quot;reasonForModification\&quot;: \&quot;OTHER ADMINISTRATIVE ACTION\&quot;,                     \&quot;sequenceNumber\&quot;: 5                 }             ],             \&quot;contractAdditionalDescription\&quot;: [                 {                     \&quot;descriptionText\&quot;: \&quot;WEIR\&quot;,                     \&quot;sequenceNumber\&quot;: 1,                     \&quot;additionalDescriptionIndicator\&quot;: false                 },                 {                     \&quot;descriptionText\&quot;: \&quot;IGF::OT::IGF, QUANTICO - DAM SAFETY UPGRADES- MODIFICATION (M0001) A00001\&quot;,                     \&quot;sequenceNumber\&quot;: 2,                     \&quot;additionalDescriptionIndicator\&quot;: false                 },                 {                     \&quot;descriptionText\&quot;: \&quot;IGF::OT::IGF CD-BH-T MODIFICATION R00016, $0.00 ALL WORK TO INCLUDE REFERENCE SERIAL LETTER NO. 12-0090-211 DATED MARCH 16, 2015, REQUEST FOR EQUITABLE ADJUSTMENT FOR UNILATERAL MODIFICATION R0006. R0006 WAS DONE UNILATERALLY BASED ON LEGAL OPINION THAT ERROR IN ORIGINAL CONTRACT WAS A PATENT AMBIGUITY. AMENDMENT 3 ADDED REFERENCE 01 22 00.00 10, 1.1.1.1, PAYMENT, STATES IN PART, \\\&quot;...PAYMENT FOR ALL REMAINING WORK SHALL BE MADE ON A PROGRESSIVE BASIS, BASED ON THE PERCENTAGE OF WORK COMPLETED FOR BASE BID ITEM NO. 0002 THROUGH 0020.\\\&quot; THIS HAS CREATED A VERY LARGE CASH FLOW ISSUE THAT THE CONTRACTOR DID NOT ANTICIPATE. THIS AMENDMENT WHILE INTENDING TO PROTECT THE GOVERNMENT HAS UNJUSTLY BURDENED THE CONTRACTOR&#39;S CASH FLOW. SETTLEMENT OF THIS REQUEST FOR EQUITABLE ADJUSTMENT RESULTED IN THE CONTRACTOR AND THE GOVERNMENT AGREEING TO A NO COST ADJUSTMENT IN EXCHANGE FOR PAYING BID ITEM 0001 ACCORDING TO AN AGREED SCHEDULE OF VALUES IN LIEU\&quot;,                     \&quot;sequenceNumber\&quot;: 3,                     \&quot;additionalDescriptionIndicator\&quot;: true                 },                 {                     \&quot;descriptionText\&quot;: \&quot; OF A PERCENTAGE OF THE OTHER BASE BIDS. THIS REMOVES THE BURDENT OF HAVING TO DEFEND A CLAIM.\&quot;,                     \&quot;sequenceNumber\&quot;: 3,                     \&quot;additionalDescriptionIndicator\&quot;: false                 },                 {                     \&quot;descriptionText\&quot;: \&quot;WEIR\&quot;,                     \&quot;sequenceNumber\&quot;: 4,                     \&quot;additionalDescriptionIndicator\&quot;: false                 },                 {                     \&quot;descriptionText\&quot;: \&quot;WEIR\&quot;,                     \&quot;sequenceNumber\&quot;: 5,                     \&quot;additionalDescriptionIndicator\&quot;: false                 }             ]         }     }   &lt;/pre&gt; &lt;/div&gt;
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GovernmentdetailsResponseExample implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'governmentdetails_response_example';

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


