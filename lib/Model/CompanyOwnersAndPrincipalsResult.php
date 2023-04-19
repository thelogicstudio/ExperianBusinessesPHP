<?php
/**
 * CompanyOwnersAndPrincipalsResult
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
 * CompanyOwnersAndPrincipalsResult Class Doc Comment
 *
 * @category Class
 * @description Identifies any known company owners of the business
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyOwnersAndPrincipalsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyOwnersAndPrincipalsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_reported' => 'string',
        'current_owner_indicator' => 'bool',
        'business_name' => 'string',
        'tax_id' => 'string',
        'tax_id_type' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult',
        'phone' => 'string',
        'percent_of_financial_obligation' => 'float',
        'name_address_change_indicator' => 'bool',
        'owner_is_guarantor_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_reported' => null,
        'current_owner_indicator' => null,
        'business_name' => null,
        'tax_id' => null,
        'tax_id_type' => null,
        'address' => null,
        'phone' => null,
        'percent_of_financial_obligation' => null,
        'name_address_change_indicator' => null,
        'owner_is_guarantor_indicator' => null
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
        'date_reported' => 'dateReported',
        'current_owner_indicator' => 'currentOwnerIndicator',
        'business_name' => 'businessName',
        'tax_id' => 'taxId',
        'tax_id_type' => 'taxIdType',
        'address' => 'address',
        'phone' => 'phone',
        'percent_of_financial_obligation' => 'percentOfFinancialObligation',
        'name_address_change_indicator' => 'nameAddressChangeIndicator',
        'owner_is_guarantor_indicator' => 'ownerIsGuarantorIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_reported' => 'setDateReported',
        'current_owner_indicator' => 'setCurrentOwnerIndicator',
        'business_name' => 'setBusinessName',
        'tax_id' => 'setTaxId',
        'tax_id_type' => 'setTaxIdType',
        'address' => 'setAddress',
        'phone' => 'setPhone',
        'percent_of_financial_obligation' => 'setPercentOfFinancialObligation',
        'name_address_change_indicator' => 'setNameAddressChangeIndicator',
        'owner_is_guarantor_indicator' => 'setOwnerIsGuarantorIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_reported' => 'getDateReported',
        'current_owner_indicator' => 'getCurrentOwnerIndicator',
        'business_name' => 'getBusinessName',
        'tax_id' => 'getTaxId',
        'tax_id_type' => 'getTaxIdType',
        'address' => 'getAddress',
        'phone' => 'getPhone',
        'percent_of_financial_obligation' => 'getPercentOfFinancialObligation',
        'name_address_change_indicator' => 'getNameAddressChangeIndicator',
        'owner_is_guarantor_indicator' => 'getOwnerIsGuarantorIndicator'
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
        $this->container['date_reported'] = isset($data['date_reported']) ? $data['date_reported'] : null;
        $this->container['current_owner_indicator'] = isset($data['current_owner_indicator']) ? $data['current_owner_indicator'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : null;
        $this->container['tax_id_type'] = isset($data['tax_id_type']) ? $data['tax_id_type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['percent_of_financial_obligation'] = isset($data['percent_of_financial_obligation']) ? $data['percent_of_financial_obligation'] : null;
        $this->container['name_address_change_indicator'] = isset($data['name_address_change_indicator']) ? $data['name_address_change_indicator'] : null;
        $this->container['owner_is_guarantor_indicator'] = isset($data['owner_is_guarantor_indicator']) ? $data['owner_is_guarantor_indicator'] : null;
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
     * Gets date_reported
     *
     * @return string
     */
    public function getDateReported()
    {
        return $this->container['date_reported'];
    }

    /**
     * Sets date_reported
     *
     * @param string $date_reported Date the company owner was reported to Experian. Format = \"YYYY-MM-DD\"
     *
     * @return $this
     */
    public function setDateReported($date_reported)
    {
        $this->container['date_reported'] = $date_reported;

        return $this;
    }

    /**
     * Gets current_owner_indicator
     *
     * @return bool
     */
    public function getCurrentOwnerIndicator()
    {
        return $this->container['current_owner_indicator'];
    }

    /**
     * Sets current_owner_indicator
     *
     * @param bool $current_owner_indicator If true indicates the company is a current owner of the business
     *
     * @return $this
     */
    public function setCurrentOwnerIndicator($current_owner_indicator)
    {
        $this->container['current_owner_indicator'] = $current_owner_indicator;

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
     * @param string $business_name Business name
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

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
     * @param string $tax_id Tax ID of the business
     *
     * @return $this
     */
    public function setTaxId($tax_id)
    {
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets tax_id_type
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType
     */
    public function getTaxIdType()
    {
        return $this->container['tax_id_type'];
    }

    /**
     * Sets tax_id_type
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType $tax_id_type Type of Tax ID, whether Federal or State
     *
     * @return $this
     */
    public function setTaxIdType($tax_id_type)
    {
        $this->container['tax_id_type'] = $tax_id_type;

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
     * @param string $phone Phone number
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets percent_of_financial_obligation
     *
     * @return float
     */
    public function getPercentOfFinancialObligation()
    {
        return $this->container['percent_of_financial_obligation'];
    }

    /**
     * Sets percent_of_financial_obligation
     *
     * @param float $percent_of_financial_obligation Returns the owners financial obligation, or percentage stake in the business. Null if not available
     *
     * @return $this
     */
    public function setPercentOfFinancialObligation($percent_of_financial_obligation)
    {
        $this->container['percent_of_financial_obligation'] = $percent_of_financial_obligation;

        return $this;
    }

    /**
     * Gets name_address_change_indicator
     *
     * @return bool
     */
    public function getNameAddressChangeIndicator()
    {
        return $this->container['name_address_change_indicator'];
    }

    /**
     * Sets name_address_change_indicator
     *
     * @param bool $name_address_change_indicator If true indicates that there was an address or name change
     *
     * @return $this
     */
    public function setNameAddressChangeIndicator($name_address_change_indicator)
    {
        $this->container['name_address_change_indicator'] = $name_address_change_indicator;

        return $this;
    }

    /**
     * Gets owner_is_guarantor_indicator
     *
     * @return bool
     */
    public function getOwnerIsGuarantorIndicator()
    {
        return $this->container['owner_is_guarantor_indicator'];
    }

    /**
     * Sets owner_is_guarantor_indicator
     *
     * @param bool $owner_is_guarantor_indicator If true indicates that the owner is also a guarantor of the business
     *
     * @return $this
     */
    public function setOwnerIsGuarantorIndicator($owner_is_guarantor_indicator)
    {
        $this->container['owner_is_guarantor_indicator'] = $owner_is_guarantor_indicator;

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


