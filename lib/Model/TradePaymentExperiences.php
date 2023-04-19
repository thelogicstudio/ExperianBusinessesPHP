<?php
/**
 * TradePaymentExperiences
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
 * TradePaymentExperiences Class Doc Comment
 *
 * @category Class
 * @description Array containing new and continuous trade payment experiences
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradePaymentExperiences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradePaymentExperiences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_category' => 'string',
        'date_reported' => '\DateTime',
        'date_last_activity' => '\DateTime',
        'terms' => 'string',
        'recent_high_credit' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier',
        'account_balance' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier',
        'current_percentage' => 'int',
        'dbt30' => 'float',
        'dbt60' => 'float',
        'dbt90' => 'int',
        'dbt91_plus' => 'int',
        'comments' => 'string',
        'newly_reported_indicator' => 'bool',
        'customer_dispute_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_category' => null,
        'date_reported' => 'date',
        'date_last_activity' => 'date',
        'terms' => null,
        'recent_high_credit' => null,
        'account_balance' => null,
        'current_percentage' => 'int64',
        'dbt30' => null,
        'dbt60' => null,
        'dbt90' => 'int64',
        'dbt91_plus' => 'int64',
        'comments' => null,
        'newly_reported_indicator' => null,
        'customer_dispute_indicator' => null
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
        'business_category' => 'businessCategory',
        'date_reported' => 'dateReported',
        'date_last_activity' => 'dateLastActivity',
        'terms' => 'terms',
        'recent_high_credit' => 'recentHighCredit',
        'account_balance' => 'accountBalance',
        'current_percentage' => 'currentPercentage',
        'dbt30' => 'dbt30',
        'dbt60' => 'dbt60',
        'dbt90' => 'dbt90',
        'dbt91_plus' => 'dbt91Plus',
        'comments' => 'comments',
        'newly_reported_indicator' => 'newlyReportedIndicator',
        'customer_dispute_indicator' => 'customerDisputeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_category' => 'setBusinessCategory',
        'date_reported' => 'setDateReported',
        'date_last_activity' => 'setDateLastActivity',
        'terms' => 'setTerms',
        'recent_high_credit' => 'setRecentHighCredit',
        'account_balance' => 'setAccountBalance',
        'current_percentage' => 'setCurrentPercentage',
        'dbt30' => 'setDbt30',
        'dbt60' => 'setDbt60',
        'dbt90' => 'setDbt90',
        'dbt91_plus' => 'setDbt91Plus',
        'comments' => 'setComments',
        'newly_reported_indicator' => 'setNewlyReportedIndicator',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_category' => 'getBusinessCategory',
        'date_reported' => 'getDateReported',
        'date_last_activity' => 'getDateLastActivity',
        'terms' => 'getTerms',
        'recent_high_credit' => 'getRecentHighCredit',
        'account_balance' => 'getAccountBalance',
        'current_percentage' => 'getCurrentPercentage',
        'dbt30' => 'getDbt30',
        'dbt60' => 'getDbt60',
        'dbt90' => 'getDbt90',
        'dbt91_plus' => 'getDbt91Plus',
        'comments' => 'getComments',
        'newly_reported_indicator' => 'getNewlyReportedIndicator',
        'customer_dispute_indicator' => 'getCustomerDisputeIndicator'
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
        $this->container['business_category'] = isset($data['business_category']) ? $data['business_category'] : null;
        $this->container['date_reported'] = isset($data['date_reported']) ? $data['date_reported'] : null;
        $this->container['date_last_activity'] = isset($data['date_last_activity']) ? $data['date_last_activity'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['recent_high_credit'] = isset($data['recent_high_credit']) ? $data['recent_high_credit'] : null;
        $this->container['account_balance'] = isset($data['account_balance']) ? $data['account_balance'] : null;
        $this->container['current_percentage'] = isset($data['current_percentage']) ? $data['current_percentage'] : null;
        $this->container['dbt30'] = isset($data['dbt30']) ? $data['dbt30'] : null;
        $this->container['dbt60'] = isset($data['dbt60']) ? $data['dbt60'] : null;
        $this->container['dbt90'] = isset($data['dbt90']) ? $data['dbt90'] : null;
        $this->container['dbt91_plus'] = isset($data['dbt91_plus']) ? $data['dbt91_plus'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['newly_reported_indicator'] = isset($data['newly_reported_indicator']) ? $data['newly_reported_indicator'] : null;
        $this->container['customer_dispute_indicator'] = isset($data['customer_dispute_indicator']) ? $data['customer_dispute_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['business_category']) && (mb_strlen($this->container['business_category']) > 10)) {
            $invalidProperties[] = "invalid value for 'business_category', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['terms']) && (mb_strlen($this->container['terms']) > 7)) {
            $invalidProperties[] = "invalid value for 'terms', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 10)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 10.";
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
     * Gets business_category
     *
     * @return string
     */
    public function getBusinessCategory()
    {
        return $this->container['business_category'];
    }

    /**
     * Sets business_category
     *
     * @param string $business_category Industry of the business
     *
     * @return $this
     */
    public function setBusinessCategory($business_category)
    {
        if (!is_null($business_category) && (mb_strlen($business_category) > 10)) {
            throw new \InvalidArgumentException('invalid length for $business_category when calling TradePaymentExperiences., must be smaller than or equal to 10.');
        }

        $this->container['business_category'] = $business_category;

        return $this;
    }

    /**
     * Gets date_reported
     *
     * @return \DateTime
     */
    public function getDateReported()
    {
        return $this->container['date_reported'];
    }

    /**
     * Sets date_reported
     *
     * @param \DateTime $date_reported Date reported to Experian. ISO 8601 Format = YYYY-MM-DD
     *
     * @return $this
     */
    public function setDateReported($date_reported)
    {
        $this->container['date_reported'] = $date_reported;

        return $this;
    }

    /**
     * Gets date_last_activity
     *
     * @return \DateTime
     */
    public function getDateLastActivity()
    {
        return $this->container['date_last_activity'];
    }

    /**
     * Sets date_last_activity
     *
     * @param \DateTime $date_last_activity Last activity date. ISO 8601 Format = YYYY-MM-DD
     *
     * @return $this
     */
    public function setDateLastActivity($date_last_activity)
    {
        $this->container['date_last_activity'] = $date_last_activity;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string $terms Payment terms. Example NET30, NET45, etc.
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        if (!is_null($terms) && (mb_strlen($terms) > 7)) {
            throw new \InvalidArgumentException('invalid length for $terms when calling TradePaymentExperiences., must be smaller than or equal to 7.');
        }

        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets recent_high_credit
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier
     */
    public function getRecentHighCredit()
    {
        return $this->container['recent_high_credit'];
    }

    /**
     * Sets recent_high_credit
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier $recent_high_credit recent_high_credit
     *
     * @return $this
     */
    public function setRecentHighCredit($recent_high_credit)
    {
        $this->container['recent_high_credit'] = $recent_high_credit;

        return $this;
    }

    /**
     * Gets account_balance
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier
     */
    public function getAccountBalance()
    {
        return $this->container['account_balance'];
    }

    /**
     * Sets account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\AmountModifier $account_balance account_balance
     *
     * @return $this
     */
    public function setAccountBalance($account_balance)
    {
        $this->container['account_balance'] = $account_balance;

        return $this;
    }

    /**
     * Gets current_percentage
     *
     * @return int
     */
    public function getCurrentPercentage()
    {
        return $this->container['current_percentage'];
    }

    /**
     * Sets current_percentage
     *
     * @param int $current_percentage Percentage of the account balance considered current relative to payment terms. \"999\" indicates that the creditor has not supplied account aging
     *
     * @return $this
     */
    public function setCurrentPercentage($current_percentage)
    {
        $this->container['current_percentage'] = $current_percentage;

        return $this;
    }

    /**
     * Gets dbt30
     *
     * @return float
     */
    public function getDbt30()
    {
        return $this->container['dbt30'];
    }

    /**
     * Sets dbt30
     *
     * @param float $dbt30 Percentage of the account balance that is beyond terms (late) in the 1-30 day range
     *
     * @return $this
     */
    public function setDbt30($dbt30)
    {
        $this->container['dbt30'] = $dbt30;

        return $this;
    }

    /**
     * Gets dbt60
     *
     * @return float
     */
    public function getDbt60()
    {
        return $this->container['dbt60'];
    }

    /**
     * Sets dbt60
     *
     * @param float $dbt60 Percentage of the account balance that is beyond terms (late) in the 31-60 day range
     *
     * @return $this
     */
    public function setDbt60($dbt60)
    {
        $this->container['dbt60'] = $dbt60;

        return $this;
    }

    /**
     * Gets dbt90
     *
     * @return int
     */
    public function getDbt90()
    {
        return $this->container['dbt90'];
    }

    /**
     * Sets dbt90
     *
     * @param int $dbt90 Percentage of the account balance that is beyond terms (late) in the 61-90 day range
     *
     * @return $this
     */
    public function setDbt90($dbt90)
    {
        $this->container['dbt90'] = $dbt90;

        return $this;
    }

    /**
     * Gets dbt91_plus
     *
     * @return int
     */
    public function getDbt91Plus()
    {
        return $this->container['dbt91_plus'];
    }

    /**
     * Sets dbt91_plus
     *
     * @param int $dbt91_plus Percentage of the account balance that is beyond terms (late) in the 91+ day range
     *
     * @return $this
     */
    public function setDbt91Plus($dbt91_plus)
    {
        $this->container['dbt91_plus'] = $dbt91_plus;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Supplied by the creditor/data contributor
     *
     * @return $this
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 10)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling TradePaymentExperiences., must be smaller than or equal to 10.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets newly_reported_indicator
     *
     * @return bool
     */
    public function getNewlyReportedIndicator()
    {
        return $this->container['newly_reported_indicator'];
    }

    /**
     * Sets newly_reported_indicator
     *
     * @param bool $newly_reported_indicator If true indicates this is a newly reported tradeline that has been added in the last 6 months but has not been updated. If false the tradeline is a continuously reported trade
     *
     * @return $this
     */
    public function setNewlyReportedIndicator($newly_reported_indicator)
    {
        $this->container['newly_reported_indicator'] = $newly_reported_indicator;

        return $this;
    }

    /**
     * Gets customer_dispute_indicator
     *
     * @return bool
     */
    public function getCustomerDisputeIndicator()
    {
        return $this->container['customer_dispute_indicator'];
    }

    /**
     * Sets customer_dispute_indicator
     *
     * @param bool $customer_dispute_indicator If true the business has disputed information in their profile
     *
     * @return $this
     */
    public function setCustomerDisputeIndicator($customer_dispute_indicator)
    {
        $this->container['customer_dispute_indicator'] = $customer_dispute_indicator;

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


