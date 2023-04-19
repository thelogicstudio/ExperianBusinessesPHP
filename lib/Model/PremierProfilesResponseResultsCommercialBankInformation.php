<?php
/**
 * PremierProfilesResponseResultsCommercialBankInformation
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
 * PremierProfilesResponseResultsCommercialBankInformation Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PremierProfilesResponseResultsCommercialBankInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PremierProfilesResponse_results_commercialBankInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'institution_type' => 'string',
        'relationship' => 'string',
        'institution_name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'profile_date' => 'string',
        'open_date' => 'string',
        'close_date' => 'string',
        'account_rating' => 'string',
        'balance_range' => 'string',
        'figures_in_balance' => 'float',
        'balance_amount' => 'float',
        'customer_dispute_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'institution_type' => null,
        'relationship' => null,
        'institution_name' => null,
        'address' => null,
        'phone' => null,
        'profile_date' => null,
        'open_date' => null,
        'close_date' => null,
        'account_rating' => null,
        'balance_range' => null,
        'figures_in_balance' => null,
        'balance_amount' => null,
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
        'institution_type' => 'institutionType',
        'relationship' => 'relationship',
        'institution_name' => 'institutionName',
        'address' => 'address',
        'phone' => 'phone',
        'profile_date' => 'profileDate',
        'open_date' => 'openDate',
        'close_date' => 'closeDate',
        'account_rating' => 'accountRating',
        'balance_range' => 'balanceRange',
        'figures_in_balance' => 'figuresInBalance',
        'balance_amount' => 'balanceAmount',
        'customer_dispute_indicator' => 'customerDisputeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institution_type' => 'setInstitutionType',
        'relationship' => 'setRelationship',
        'institution_name' => 'setInstitutionName',
        'address' => 'setAddress',
        'phone' => 'setPhone',
        'profile_date' => 'setProfileDate',
        'open_date' => 'setOpenDate',
        'close_date' => 'setCloseDate',
        'account_rating' => 'setAccountRating',
        'balance_range' => 'setBalanceRange',
        'figures_in_balance' => 'setFiguresInBalance',
        'balance_amount' => 'setBalanceAmount',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institution_type' => 'getInstitutionType',
        'relationship' => 'getRelationship',
        'institution_name' => 'getInstitutionName',
        'address' => 'getAddress',
        'phone' => 'getPhone',
        'profile_date' => 'getProfileDate',
        'open_date' => 'getOpenDate',
        'close_date' => 'getCloseDate',
        'account_rating' => 'getAccountRating',
        'balance_range' => 'getBalanceRange',
        'figures_in_balance' => 'getFiguresInBalance',
        'balance_amount' => 'getBalanceAmount',
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
        $this->container['institution_type'] = isset($data['institution_type']) ? $data['institution_type'] : null;
        $this->container['relationship'] = isset($data['relationship']) ? $data['relationship'] : null;
        $this->container['institution_name'] = isset($data['institution_name']) ? $data['institution_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['profile_date'] = isset($data['profile_date']) ? $data['profile_date'] : null;
        $this->container['open_date'] = isset($data['open_date']) ? $data['open_date'] : null;
        $this->container['close_date'] = isset($data['close_date']) ? $data['close_date'] : null;
        $this->container['account_rating'] = isset($data['account_rating']) ? $data['account_rating'] : null;
        $this->container['balance_range'] = isset($data['balance_range']) ? $data['balance_range'] : null;
        $this->container['figures_in_balance'] = isset($data['figures_in_balance']) ? $data['figures_in_balance'] : null;
        $this->container['balance_amount'] = isset($data['balance_amount']) ? $data['balance_amount'] : null;
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
     * Gets institution_type
     *
     * @return string
     */
    public function getInstitutionType()
    {
        return $this->container['institution_type'];
    }

    /**
     * Sets institution_type
     *
     * @param string $institution_type Institution type
     *
     * @return $this
     */
    public function setInstitutionType($institution_type)
    {
        $this->container['institution_type'] = $institution_type;

        return $this;
    }

    /**
     * Gets relationship
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     *
     * @param string $relationship Relationship
     *
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets institution_name
     *
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->container['institution_name'];
    }

    /**
     * Sets institution_name
     *
     * @param string $institution_name Institution name
     *
     * @return $this
     */
    public function setInstitutionName($institution_name)
    {
        $this->container['institution_name'] = $institution_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets profile_date
     *
     * @return string
     */
    public function getProfileDate()
    {
        return $this->container['profile_date'];
    }

    /**
     * Sets profile_date
     *
     * @param string $profile_date Profile date
     *
     * @return $this
     */
    public function setProfileDate($profile_date)
    {
        $this->container['profile_date'] = $profile_date;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string $open_date Open date
     *
     * @return $this
     */
    public function setOpenDate($open_date)
    {
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets close_date
     *
     * @return string
     */
    public function getCloseDate()
    {
        return $this->container['close_date'];
    }

    /**
     * Sets close_date
     *
     * @param string $close_date Close date
     *
     * @return $this
     */
    public function setCloseDate($close_date)
    {
        $this->container['close_date'] = $close_date;

        return $this;
    }

    /**
     * Gets account_rating
     *
     * @return string
     */
    public function getAccountRating()
    {
        return $this->container['account_rating'];
    }

    /**
     * Sets account_rating
     *
     * @param string $account_rating Account rating
     *
     * @return $this
     */
    public function setAccountRating($account_rating)
    {
        $this->container['account_rating'] = $account_rating;

        return $this;
    }

    /**
     * Gets balance_range
     *
     * @return string
     */
    public function getBalanceRange()
    {
        return $this->container['balance_range'];
    }

    /**
     * Sets balance_range
     *
     * @param string $balance_range Balance range
     *
     * @return $this
     */
    public function setBalanceRange($balance_range)
    {
        $this->container['balance_range'] = $balance_range;

        return $this;
    }

    /**
     * Gets figures_in_balance
     *
     * @return float
     */
    public function getFiguresInBalance()
    {
        return $this->container['figures_in_balance'];
    }

    /**
     * Sets figures_in_balance
     *
     * @param float $figures_in_balance Figures in balance
     *
     * @return $this
     */
    public function setFiguresInBalance($figures_in_balance)
    {
        $this->container['figures_in_balance'] = $figures_in_balance;

        return $this;
    }

    /**
     * Gets balance_amount
     *
     * @return float
     */
    public function getBalanceAmount()
    {
        return $this->container['balance_amount'];
    }

    /**
     * Sets balance_amount
     *
     * @param float $balance_amount Balance amount
     *
     * @return $this
     */
    public function setBalanceAmount($balance_amount)
    {
        $this->container['balance_amount'] = $balance_amount;

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
     * @param bool $customer_dispute_indicator If true indicates a customer dispute is on file
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


