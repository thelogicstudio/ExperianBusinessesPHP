<?php
/**
 * BusinessHeaderResult
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
 * BusinessHeaderResult Class Doc Comment
 *
 * @category Class
 * @description Business Header
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessHeaderResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessHeaderResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bin' => 'string',
        'business_name' => 'string',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult',
        'phone' => 'string',
        'tax_id' => 'string',
        'website_url' => 'string',
        'legal_business_name' => 'string',
        'dba_names' => '\TheLogicStudio\ExperianBusinessesPHP\Model\DBAName[]',
        'customer_dispute_indicator' => 'bool',
        'foreign_country' => 'bool',
        'corporate_linkage_indicator' => 'bool',
        'matching_branch_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultMatchingBranchAddress',
        'branch_location' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultBranchLocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bin' => null,
        'business_name' => null,
        'address' => null,
        'phone' => null,
        'tax_id' => null,
        'website_url' => null,
        'legal_business_name' => null,
        'dba_names' => null,
        'customer_dispute_indicator' => null,
        'foreign_country' => null,
        'corporate_linkage_indicator' => null,
        'matching_branch_address' => null,
        'branch_location' => null
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
        'bin' => 'bin',
        'business_name' => 'businessName',
        'address' => 'address',
        'phone' => 'phone',
        'tax_id' => 'taxId',
        'website_url' => 'websiteUrl',
        'legal_business_name' => 'legalBusinessName',
        'dba_names' => 'dbaNames',
        'customer_dispute_indicator' => 'customerDisputeIndicator',
        'foreign_country' => 'foreignCountry',
        'corporate_linkage_indicator' => 'corporateLinkageIndicator',
        'matching_branch_address' => 'matchingBranchAddress',
        'branch_location' => 'branchLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bin' => 'setBin',
        'business_name' => 'setBusinessName',
        'address' => 'setAddress',
        'phone' => 'setPhone',
        'tax_id' => 'setTaxId',
        'website_url' => 'setWebsiteUrl',
        'legal_business_name' => 'setLegalBusinessName',
        'dba_names' => 'setDbaNames',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator',
        'foreign_country' => 'setForeignCountry',
        'corporate_linkage_indicator' => 'setCorporateLinkageIndicator',
        'matching_branch_address' => 'setMatchingBranchAddress',
        'branch_location' => 'setBranchLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bin' => 'getBin',
        'business_name' => 'getBusinessName',
        'address' => 'getAddress',
        'phone' => 'getPhone',
        'tax_id' => 'getTaxId',
        'website_url' => 'getWebsiteUrl',
        'legal_business_name' => 'getLegalBusinessName',
        'dba_names' => 'getDbaNames',
        'customer_dispute_indicator' => 'getCustomerDisputeIndicator',
        'foreign_country' => 'getForeignCountry',
        'corporate_linkage_indicator' => 'getCorporateLinkageIndicator',
        'matching_branch_address' => 'getMatchingBranchAddress',
        'branch_location' => 'getBranchLocation'
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
        $this->container['bin'] = isset($data['bin']) ? $data['bin'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['legal_business_name'] = isset($data['legal_business_name']) ? $data['legal_business_name'] : null;
        $this->container['dba_names'] = isset($data['dba_names']) ? $data['dba_names'] : null;
        $this->container['customer_dispute_indicator'] = isset($data['customer_dispute_indicator']) ? $data['customer_dispute_indicator'] : null;
        $this->container['foreign_country'] = isset($data['foreign_country']) ? $data['foreign_country'] : null;
        $this->container['corporate_linkage_indicator'] = isset($data['corporate_linkage_indicator']) ? $data['corporate_linkage_indicator'] : null;
        $this->container['matching_branch_address'] = isset($data['matching_branch_address']) ? $data['matching_branch_address'] : null;
        $this->container['branch_location'] = isset($data['branch_location']) ? $data['branch_location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['bin']) && (mb_strlen($this->container['bin']) > 9)) {
            $invalidProperties[] = "invalid value for 'bin', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['business_name']) && (mb_strlen($this->container['business_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'business_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 12)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['tax_id']) && (mb_strlen($this->container['tax_id']) > 9)) {
            $invalidProperties[] = "invalid value for 'tax_id', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['website_url']) && (mb_strlen($this->container['website_url']) > 100)) {
            $invalidProperties[] = "invalid value for 'website_url', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['legal_business_name']) && (mb_strlen($this->container['legal_business_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'legal_business_name', the character length must be smaller than or equal to 120.";
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
     * Gets bin
     *
     * @return string
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string $bin 9-digit Business Identification Number (BIN) assigned by Experian to each unique business entity
     *
     * @return $this
     */
    public function setBin($bin)
    {
        if (!is_null($bin) && (mb_strlen($bin) > 9)) {
            throw new \InvalidArgumentException('invalid length for $bin when calling BusinessHeaderResult., must be smaller than or equal to 9.');
        }

        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name Name of the business, headquarters, subsidiary, or owner/partner name based on the Business Association type
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        if (!is_null($business_name) && (mb_strlen($business_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $business_name when calling BusinessHeaderResult., must be smaller than or equal to 40.');
        }

        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult $address address
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
     * @param string $phone 10-digit business phone number
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 12)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling BusinessHeaderResult., must be smaller than or equal to 12.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string $tax_id 9-digit federal tax ID or Employer Identification Number
     *
     * @return $this
     */
    public function setTaxId($tax_id)
    {
        if (!is_null($tax_id) && (mb_strlen($tax_id) > 9)) {
            throw new \InvalidArgumentException('invalid length for $tax_id when calling BusinessHeaderResult., must be smaller than or equal to 9.');
        }

        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url Web address of the business
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        if (!is_null($website_url) && (mb_strlen($website_url) > 100)) {
            throw new \InvalidArgumentException('invalid length for $website_url when calling BusinessHeaderResult., must be smaller than or equal to 100.');
        }

        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets legal_business_name
     *
     * @return string
     */
    public function getLegalBusinessName()
    {
        return $this->container['legal_business_name'];
    }

    /**
     * Sets legal_business_name
     *
     * @param string $legal_business_name Verified legal name of the business
     *
     * @return $this
     */
    public function setLegalBusinessName($legal_business_name)
    {
        if (!is_null($legal_business_name) && (mb_strlen($legal_business_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $legal_business_name when calling BusinessHeaderResult., must be smaller than or equal to 120.');
        }

        $this->container['legal_business_name'] = $legal_business_name;

        return $this;
    }

    /**
     * Gets dba_names
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\DBAName[]
     */
    public function getDbaNames()
    {
        return $this->container['dba_names'];
    }

    /**
     * Sets dba_names
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\DBAName[] $dba_names Doing-business-as (DBA) names for the business
     *
     * @return $this
     */
    public function setDbaNames($dba_names)
    {
        $this->container['dba_names'] = $dba_names;

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
     * Gets foreign_country
     *
     * @return bool
     */
    public function getForeignCountry()
    {
        return $this->container['foreign_country'];
    }

    /**
     * Sets foreign_country
     *
     * @param bool $foreign_country Foreign Country
     *
     * @return $this
     */
    public function setForeignCountry($foreign_country)
    {
        $this->container['foreign_country'] = $foreign_country;

        return $this;
    }

    /**
     * Gets corporate_linkage_indicator
     *
     * @return bool
     */
    public function getCorporateLinkageIndicator()
    {
        return $this->container['corporate_linkage_indicator'];
    }

    /**
     * Sets corporate_linkage_indicator
     *
     * @param bool $corporate_linkage_indicator Corporate Linkage Indicator
     *
     * @return $this
     */
    public function setCorporateLinkageIndicator($corporate_linkage_indicator)
    {
        $this->container['corporate_linkage_indicator'] = $corporate_linkage_indicator;

        return $this;
    }

    /**
     * Gets matching_branch_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultMatchingBranchAddress
     */
    public function getMatchingBranchAddress()
    {
        return $this->container['matching_branch_address'];
    }

    /**
     * Sets matching_branch_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultMatchingBranchAddress $matching_branch_address matching_branch_address
     *
     * @return $this
     */
    public function setMatchingBranchAddress($matching_branch_address)
    {
        $this->container['matching_branch_address'] = $matching_branch_address;

        return $this;
    }

    /**
     * Gets branch_location
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultBranchLocation
     */
    public function getBranchLocation()
    {
        return $this->container['branch_location'];
    }

    /**
     * Sets branch_location
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResultBranchLocation $branch_location branch_location
     *
     * @return $this
     */
    public function setBranchLocation($branch_location)
    {
        $this->container['branch_location'] = $branch_location;

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


