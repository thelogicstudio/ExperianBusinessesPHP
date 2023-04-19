<?php
/**
 * TradePaymentSummary
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
 * TradePaymentSummary Class Doc Comment
 *
 * @category Class
 * @description Object containing trade payment summary information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradePaymentSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradePaymentSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_dbt' => 'int',
        'monthly_average_dbt' => 'int',
        'highest_dbt6_months' => 'int',
        'highest_dbt5_quarters' => 'int',
        'all_tradeline_count' => 'int',
        'all_tradeline_balance' => 'int',
        'current_tradeline_count' => 'int',
        'current_account_balance' => 'int',
        'median_credit_amount_extended' => 'int',
        'single_high_credit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_dbt' => 'int64',
        'monthly_average_dbt' => 'int64',
        'highest_dbt6_months' => 'int64',
        'highest_dbt5_quarters' => 'int64',
        'all_tradeline_count' => 'int64',
        'all_tradeline_balance' => 'int64',
        'current_tradeline_count' => 'int64',
        'current_account_balance' => 'int64',
        'median_credit_amount_extended' => 'int64',
        'single_high_credit' => 'int64'
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
        'current_dbt' => 'currentDbt',
        'monthly_average_dbt' => 'monthlyAverageDbt',
        'highest_dbt6_months' => 'highestDbt6Months',
        'highest_dbt5_quarters' => 'highestDbt5Quarters',
        'all_tradeline_count' => 'allTradelineCount',
        'all_tradeline_balance' => 'allTradelineBalance',
        'current_tradeline_count' => 'currentTradelineCount',
        'current_account_balance' => 'currentAccountBalance',
        'median_credit_amount_extended' => 'medianCreditAmountExtended',
        'single_high_credit' => 'singleHighCredit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_dbt' => 'setCurrentDbt',
        'monthly_average_dbt' => 'setMonthlyAverageDbt',
        'highest_dbt6_months' => 'setHighestDbt6Months',
        'highest_dbt5_quarters' => 'setHighestDbt5Quarters',
        'all_tradeline_count' => 'setAllTradelineCount',
        'all_tradeline_balance' => 'setAllTradelineBalance',
        'current_tradeline_count' => 'setCurrentTradelineCount',
        'current_account_balance' => 'setCurrentAccountBalance',
        'median_credit_amount_extended' => 'setMedianCreditAmountExtended',
        'single_high_credit' => 'setSingleHighCredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_dbt' => 'getCurrentDbt',
        'monthly_average_dbt' => 'getMonthlyAverageDbt',
        'highest_dbt6_months' => 'getHighestDbt6Months',
        'highest_dbt5_quarters' => 'getHighestDbt5Quarters',
        'all_tradeline_count' => 'getAllTradelineCount',
        'all_tradeline_balance' => 'getAllTradelineBalance',
        'current_tradeline_count' => 'getCurrentTradelineCount',
        'current_account_balance' => 'getCurrentAccountBalance',
        'median_credit_amount_extended' => 'getMedianCreditAmountExtended',
        'single_high_credit' => 'getSingleHighCredit'
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
        $this->container['current_dbt'] = isset($data['current_dbt']) ? $data['current_dbt'] : null;
        $this->container['monthly_average_dbt'] = isset($data['monthly_average_dbt']) ? $data['monthly_average_dbt'] : null;
        $this->container['highest_dbt6_months'] = isset($data['highest_dbt6_months']) ? $data['highest_dbt6_months'] : null;
        $this->container['highest_dbt5_quarters'] = isset($data['highest_dbt5_quarters']) ? $data['highest_dbt5_quarters'] : null;
        $this->container['all_tradeline_count'] = isset($data['all_tradeline_count']) ? $data['all_tradeline_count'] : null;
        $this->container['all_tradeline_balance'] = isset($data['all_tradeline_balance']) ? $data['all_tradeline_balance'] : null;
        $this->container['current_tradeline_count'] = isset($data['current_tradeline_count']) ? $data['current_tradeline_count'] : null;
        $this->container['current_account_balance'] = isset($data['current_account_balance']) ? $data['current_account_balance'] : null;
        $this->container['median_credit_amount_extended'] = isset($data['median_credit_amount_extended']) ? $data['median_credit_amount_extended'] : null;
        $this->container['single_high_credit'] = isset($data['single_high_credit']) ? $data['single_high_credit'] : null;
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
     * Gets current_dbt
     *
     * @return int
     */
    public function getCurrentDbt()
    {
        return $this->container['current_dbt'];
    }

    /**
     * Sets current_dbt
     *
     * @param int $current_dbt Current Days-Beyond-Terms (DBT). The dollar-weighted average number of days beyond the invoice due date a business pays its bills
     *
     * @return $this
     */
    public function setCurrentDbt($current_dbt)
    {
        $this->container['current_dbt'] = $current_dbt;

        return $this;
    }

    /**
     * Gets monthly_average_dbt
     *
     * @return int
     */
    public function getMonthlyAverageDbt()
    {
        return $this->container['monthly_average_dbt'];
    }

    /**
     * Sets monthly_average_dbt
     *
     * @param int $monthly_average_dbt Average of the past 6 months balances and past due amounts to derive Days-Beyond-Terms (DBT)
     *
     * @return $this
     */
    public function setMonthlyAverageDbt($monthly_average_dbt)
    {
        $this->container['monthly_average_dbt'] = $monthly_average_dbt;

        return $this;
    }

    /**
     * Gets highest_dbt6_months
     *
     * @return int
     */
    public function getHighestDbt6Months()
    {
        return $this->container['highest_dbt6_months'];
    }

    /**
     * Sets highest_dbt6_months
     *
     * @param int $highest_dbt6_months The highest Days-Beyond-Terms (DBT) the business has experienced in the current month and the last 6 months
     *
     * @return $this
     */
    public function setHighestDbt6Months($highest_dbt6_months)
    {
        $this->container['highest_dbt6_months'] = $highest_dbt6_months;

        return $this;
    }

    /**
     * Gets highest_dbt5_quarters
     *
     * @return int
     */
    public function getHighestDbt5Quarters()
    {
        return $this->container['highest_dbt5_quarters'];
    }

    /**
     * Sets highest_dbt5_quarters
     *
     * @param int $highest_dbt5_quarters The highest Days-Beyond-Terms (DBT) the business has experience in the current month and the last 5 quarters
     *
     * @return $this
     */
    public function setHighestDbt5Quarters($highest_dbt5_quarters)
    {
        $this->container['highest_dbt5_quarters'] = $highest_dbt5_quarters;

        return $this;
    }

    /**
     * Gets all_tradeline_count
     *
     * @return int
     */
    public function getAllTradelineCount()
    {
        return $this->container['all_tradeline_count'];
    }

    /**
     * Sets all_tradeline_count
     *
     * @param int $all_tradeline_count Number of all newly reported, continuously reported, and additional trade payment experiences
     *
     * @return $this
     */
    public function setAllTradelineCount($all_tradeline_count)
    {
        $this->container['all_tradeline_count'] = $all_tradeline_count;

        return $this;
    }

    /**
     * Gets all_tradeline_balance
     *
     * @return int
     */
    public function getAllTradelineBalance()
    {
        return $this->container['all_tradeline_balance'];
    }

    /**
     * Sets all_tradeline_balance
     *
     * @param int $all_tradeline_balance Balance of all new, continuous, and additional trade payment experiences
     *
     * @return $this
     */
    public function setAllTradelineBalance($all_tradeline_balance)
    {
        $this->container['all_tradeline_balance'] = $all_tradeline_balance;

        return $this;
    }

    /**
     * Gets current_tradeline_count
     *
     * @return int
     */
    public function getCurrentTradelineCount()
    {
        return $this->container['current_tradeline_count'];
    }

    /**
     * Sets current_tradeline_count
     *
     * @param int $current_tradeline_count Total count of new and continuous tradelines
     *
     * @return $this
     */
    public function setCurrentTradelineCount($current_tradeline_count)
    {
        $this->container['current_tradeline_count'] = $current_tradeline_count;

        return $this;
    }

    /**
     * Gets current_account_balance
     *
     * @return int
     */
    public function getCurrentAccountBalance()
    {
        return $this->container['current_account_balance'];
    }

    /**
     * Sets current_account_balance
     *
     * @param int $current_account_balance Total account balance of continuous trades
     *
     * @return $this
     */
    public function setCurrentAccountBalance($current_account_balance)
    {
        $this->container['current_account_balance'] = $current_account_balance;

        return $this;
    }

    /**
     * Gets median_credit_amount_extended
     *
     * @return int
     */
    public function getMedianCreditAmountExtended()
    {
        return $this->container['median_credit_amount_extended'];
    }

    /**
     * Sets median_credit_amount_extended
     *
     * @param int $median_credit_amount_extended The median credit amount extended
     *
     * @return $this
     */
    public function setMedianCreditAmountExtended($median_credit_amount_extended)
    {
        $this->container['median_credit_amount_extended'] = $median_credit_amount_extended;

        return $this;
    }

    /**
     * Gets single_high_credit
     *
     * @return int
     */
    public function getSingleHighCredit()
    {
        return $this->container['single_high_credit'];
    }

    /**
     * Sets single_high_credit
     *
     * @param int $single_high_credit The single highest credit amount extended based on non-financial, new, or continuous tradelines
     *
     * @return $this
     */
    public function setSingleHighCredit($single_high_credit)
    {
        $this->container['single_high_credit'] = $single_high_credit;

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


