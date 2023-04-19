<?php
/**
 * SearchResult
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
 * SearchResult Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bin' => 'string',
        'reliability_code' => 'float',
        'business_name' => 'string',
        'phone' => 'string',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\Address',
        'number_of_tradelines' => 'float',
        'financial_statement_indicator' => 'bool',
        'key_facts_indicator' => 'bool',
        'inquiry_indicator' => 'bool',
        'bank_data_indicator' => 'bool',
        'government_data_indicator' => 'bool',
        'executive_summary_indicator' => 'bool',
        'ucc_indicator' => 'bool',
        'matching_name_and_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MatchingNameAndAddress',
        'business_geocode' => '\TheLogicStudio\ExperianBusinessesPHP\Model\GeoCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bin' => null,
        'reliability_code' => 'float',
        'business_name' => null,
        'phone' => null,
        'address' => null,
        'number_of_tradelines' => null,
        'financial_statement_indicator' => null,
        'key_facts_indicator' => null,
        'inquiry_indicator' => null,
        'bank_data_indicator' => null,
        'government_data_indicator' => null,
        'executive_summary_indicator' => null,
        'ucc_indicator' => null,
        'matching_name_and_address' => null,
        'business_geocode' => null
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
        'reliability_code' => 'reliabilityCode',
        'business_name' => 'businessName',
        'phone' => 'phone',
        'address' => 'address',
        'number_of_tradelines' => 'numberOfTradelines',
        'financial_statement_indicator' => 'financialStatementIndicator',
        'key_facts_indicator' => 'keyFactsIndicator',
        'inquiry_indicator' => 'inquiryIndicator',
        'bank_data_indicator' => 'bankDataIndicator',
        'government_data_indicator' => 'governmentDataIndicator',
        'executive_summary_indicator' => 'executiveSummaryIndicator',
        'ucc_indicator' => 'uccIndicator',
        'matching_name_and_address' => 'matchingNameAndAddress',
        'business_geocode' => 'businessGeocode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bin' => 'setBin',
        'reliability_code' => 'setReliabilityCode',
        'business_name' => 'setBusinessName',
        'phone' => 'setPhone',
        'address' => 'setAddress',
        'number_of_tradelines' => 'setNumberOfTradelines',
        'financial_statement_indicator' => 'setFinancialStatementIndicator',
        'key_facts_indicator' => 'setKeyFactsIndicator',
        'inquiry_indicator' => 'setInquiryIndicator',
        'bank_data_indicator' => 'setBankDataIndicator',
        'government_data_indicator' => 'setGovernmentDataIndicator',
        'executive_summary_indicator' => 'setExecutiveSummaryIndicator',
        'ucc_indicator' => 'setUccIndicator',
        'matching_name_and_address' => 'setMatchingNameAndAddress',
        'business_geocode' => 'setBusinessGeocode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bin' => 'getBin',
        'reliability_code' => 'getReliabilityCode',
        'business_name' => 'getBusinessName',
        'phone' => 'getPhone',
        'address' => 'getAddress',
        'number_of_tradelines' => 'getNumberOfTradelines',
        'financial_statement_indicator' => 'getFinancialStatementIndicator',
        'key_facts_indicator' => 'getKeyFactsIndicator',
        'inquiry_indicator' => 'getInquiryIndicator',
        'bank_data_indicator' => 'getBankDataIndicator',
        'government_data_indicator' => 'getGovernmentDataIndicator',
        'executive_summary_indicator' => 'getExecutiveSummaryIndicator',
        'ucc_indicator' => 'getUccIndicator',
        'matching_name_and_address' => 'getMatchingNameAndAddress',
        'business_geocode' => 'getBusinessGeocode'
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
        $this->container['reliability_code'] = isset($data['reliability_code']) ? $data['reliability_code'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['number_of_tradelines'] = isset($data['number_of_tradelines']) ? $data['number_of_tradelines'] : null;
        $this->container['financial_statement_indicator'] = isset($data['financial_statement_indicator']) ? $data['financial_statement_indicator'] : null;
        $this->container['key_facts_indicator'] = isset($data['key_facts_indicator']) ? $data['key_facts_indicator'] : null;
        $this->container['inquiry_indicator'] = isset($data['inquiry_indicator']) ? $data['inquiry_indicator'] : null;
        $this->container['bank_data_indicator'] = isset($data['bank_data_indicator']) ? $data['bank_data_indicator'] : null;
        $this->container['government_data_indicator'] = isset($data['government_data_indicator']) ? $data['government_data_indicator'] : null;
        $this->container['executive_summary_indicator'] = isset($data['executive_summary_indicator']) ? $data['executive_summary_indicator'] : null;
        $this->container['ucc_indicator'] = isset($data['ucc_indicator']) ? $data['ucc_indicator'] : null;
        $this->container['matching_name_and_address'] = isset($data['matching_name_and_address']) ? $data['matching_name_and_address'] : null;
        $this->container['business_geocode'] = isset($data['business_geocode']) ? $data['business_geocode'] : null;
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
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets reliability_code
     *
     * @return float
     */
    public function getReliabilityCode()
    {
        return $this->container['reliability_code'];
    }

    /**
     * Sets reliability_code
     *
     * @param float $reliability_code Experian Match Reliability Code. 90.75-100.40 high confidence match; 79.00-90.74 medium confidence match; 75.00 - 78.99 low confidence match
     *
     * @return $this
     */
    public function setReliabilityCode($reliability_code)
    {
        $this->container['reliability_code'] = $reliability_code;

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
        $this->container['business_name'] = $business_name;

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
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets number_of_tradelines
     *
     * @return float
     */
    public function getNumberOfTradelines()
    {
        return $this->container['number_of_tradelines'];
    }

    /**
     * Sets number_of_tradelines
     *
     * @param float $number_of_tradelines Total number of accounts reported by contributors, including trade payments, collections, and public record filings
     *
     * @return $this
     */
    public function setNumberOfTradelines($number_of_tradelines)
    {
        $this->container['number_of_tradelines'] = $number_of_tradelines;

        return $this;
    }

    /**
     * Gets financial_statement_indicator
     *
     * @return bool
     */
    public function getFinancialStatementIndicator()
    {
        return $this->container['financial_statement_indicator'];
    }

    /**
     * Sets financial_statement_indicator
     *
     * @param bool $financial_statement_indicator Indicates presence of financial statements
     *
     * @return $this
     */
    public function setFinancialStatementIndicator($financial_statement_indicator)
    {
        $this->container['financial_statement_indicator'] = $financial_statement_indicator;

        return $this;
    }

    /**
     * Gets key_facts_indicator
     *
     * @return bool
     */
    public function getKeyFactsIndicator()
    {
        return $this->container['key_facts_indicator'];
    }

    /**
     * Sets key_facts_indicator
     *
     * @param bool $key_facts_indicator Indicates presence of business firmographic information
     *
     * @return $this
     */
    public function setKeyFactsIndicator($key_facts_indicator)
    {
        $this->container['key_facts_indicator'] = $key_facts_indicator;

        return $this;
    }

    /**
     * Gets inquiry_indicator
     *
     * @return bool
     */
    public function getInquiryIndicator()
    {
        return $this->container['inquiry_indicator'];
    }

    /**
     * Sets inquiry_indicator
     *
     * @param bool $inquiry_indicator Indicates presence of recent credit inquiries on the business
     *
     * @return $this
     */
    public function setInquiryIndicator($inquiry_indicator)
    {
        $this->container['inquiry_indicator'] = $inquiry_indicator;

        return $this;
    }

    /**
     * Gets bank_data_indicator
     *
     * @return bool
     */
    public function getBankDataIndicator()
    {
        return $this->container['bank_data_indicator'];
    }

    /**
     * Sets bank_data_indicator
     *
     * @param bool $bank_data_indicator Indicates presence of commercial bank, leasing data, or insurance bonding data
     *
     * @return $this
     */
    public function setBankDataIndicator($bank_data_indicator)
    {
        $this->container['bank_data_indicator'] = $bank_data_indicator;

        return $this;
    }

    /**
     * Gets government_data_indicator
     *
     * @return bool
     */
    public function getGovernmentDataIndicator()
    {
        return $this->container['government_data_indicator'];
    }

    /**
     * Sets government_data_indicator
     *
     * @param bool $government_data_indicator Indicates presence of government contract and/or debarred data
     *
     * @return $this
     */
    public function setGovernmentDataIndicator($government_data_indicator)
    {
        $this->container['government_data_indicator'] = $government_data_indicator;

        return $this;
    }

    /**
     * Gets executive_summary_indicator
     *
     * @return bool
     */
    public function getExecutiveSummaryIndicator()
    {
        return $this->container['executive_summary_indicator'];
    }

    /**
     * Sets executive_summary_indicator
     *
     * @param bool $executive_summary_indicator Indicates presence of an executive summary on the business
     *
     * @return $this
     */
    public function setExecutiveSummaryIndicator($executive_summary_indicator)
    {
        $this->container['executive_summary_indicator'] = $executive_summary_indicator;

        return $this;
    }

    /**
     * Gets ucc_indicator
     *
     * @return bool
     */
    public function getUccIndicator()
    {
        return $this->container['ucc_indicator'];
    }

    /**
     * Sets ucc_indicator
     *
     * @param bool $ucc_indicator Indicates presence of UCC Filings on the business
     *
     * @return $this
     */
    public function setUccIndicator($ucc_indicator)
    {
        $this->container['ucc_indicator'] = $ucc_indicator;

        return $this;
    }

    /**
     * Gets matching_name_and_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MatchingNameAndAddress
     */
    public function getMatchingNameAndAddress()
    {
        return $this->container['matching_name_and_address'];
    }

    /**
     * Sets matching_name_and_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MatchingNameAndAddress $matching_name_and_address matching_name_and_address
     *
     * @return $this
     */
    public function setMatchingNameAndAddress($matching_name_and_address)
    {
        $this->container['matching_name_and_address'] = $matching_name_and_address;

        return $this;
    }

    /**
     * Gets business_geocode
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GeoCode
     */
    public function getBusinessGeocode()
    {
        return $this->container['business_geocode'];
    }

    /**
     * Sets business_geocode
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\GeoCode $business_geocode business_geocode
     *
     * @return $this
     */
    public function setBusinessGeocode($business_geocode)
    {
        $this->container['business_geocode'] = $business_geocode;

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


