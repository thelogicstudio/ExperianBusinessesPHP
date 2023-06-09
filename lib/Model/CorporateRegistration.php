<?php
/**
 * CorporateRegistration
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
 * CorporateRegistration Class Doc Comment
 *
 * @category Class
 * @description Object containing Corporate Registration information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CorporateRegistration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CorporateRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state_of_origin' => 'string',
        'original_filing_date' => 'string',
        'recent_filing_date' => 'string',
        'incorporated_date' => 'string',
        'business_type' => 'string',
        'status_description' => 'string',
        'profit_flag' => 'string',
        'charter_number' => 'string',
        'existence_term_years' => 'float',
        'existence_term_date' => 'string',
        'federal_tax_id' => 'string',
        'state_tax_id' => 'string',
        'domestic_foreign_indicator' => 'string',
        'agent_name' => 'string',
        'agent_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state_of_origin' => null,
        'original_filing_date' => null,
        'recent_filing_date' => null,
        'incorporated_date' => null,
        'business_type' => null,
        'status_description' => null,
        'profit_flag' => null,
        'charter_number' => null,
        'existence_term_years' => null,
        'existence_term_date' => null,
        'federal_tax_id' => null,
        'state_tax_id' => null,
        'domestic_foreign_indicator' => null,
        'agent_name' => null,
        'agent_address' => null
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
        'state_of_origin' => 'stateOfOrigin',
        'original_filing_date' => 'originalFilingDate',
        'recent_filing_date' => 'recentFilingDate',
        'incorporated_date' => 'incorporatedDate',
        'business_type' => 'businessType',
        'status_description' => 'statusDescription',
        'profit_flag' => 'profitFlag',
        'charter_number' => 'charterNumber',
        'existence_term_years' => 'existenceTermYears',
        'existence_term_date' => 'existenceTermDate',
        'federal_tax_id' => 'federalTaxId',
        'state_tax_id' => 'stateTaxId',
        'domestic_foreign_indicator' => 'domesticForeignIndicator',
        'agent_name' => 'agentName',
        'agent_address' => 'agentAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_of_origin' => 'setStateOfOrigin',
        'original_filing_date' => 'setOriginalFilingDate',
        'recent_filing_date' => 'setRecentFilingDate',
        'incorporated_date' => 'setIncorporatedDate',
        'business_type' => 'setBusinessType',
        'status_description' => 'setStatusDescription',
        'profit_flag' => 'setProfitFlag',
        'charter_number' => 'setCharterNumber',
        'existence_term_years' => 'setExistenceTermYears',
        'existence_term_date' => 'setExistenceTermDate',
        'federal_tax_id' => 'setFederalTaxId',
        'state_tax_id' => 'setStateTaxId',
        'domestic_foreign_indicator' => 'setDomesticForeignIndicator',
        'agent_name' => 'setAgentName',
        'agent_address' => 'setAgentAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_of_origin' => 'getStateOfOrigin',
        'original_filing_date' => 'getOriginalFilingDate',
        'recent_filing_date' => 'getRecentFilingDate',
        'incorporated_date' => 'getIncorporatedDate',
        'business_type' => 'getBusinessType',
        'status_description' => 'getStatusDescription',
        'profit_flag' => 'getProfitFlag',
        'charter_number' => 'getCharterNumber',
        'existence_term_years' => 'getExistenceTermYears',
        'existence_term_date' => 'getExistenceTermDate',
        'federal_tax_id' => 'getFederalTaxId',
        'state_tax_id' => 'getStateTaxId',
        'domestic_foreign_indicator' => 'getDomesticForeignIndicator',
        'agent_name' => 'getAgentName',
        'agent_address' => 'getAgentAddress'
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
        $this->container['state_of_origin'] = isset($data['state_of_origin']) ? $data['state_of_origin'] : null;
        $this->container['original_filing_date'] = isset($data['original_filing_date']) ? $data['original_filing_date'] : null;
        $this->container['recent_filing_date'] = isset($data['recent_filing_date']) ? $data['recent_filing_date'] : null;
        $this->container['incorporated_date'] = isset($data['incorporated_date']) ? $data['incorporated_date'] : null;
        $this->container['business_type'] = isset($data['business_type']) ? $data['business_type'] : null;
        $this->container['status_description'] = isset($data['status_description']) ? $data['status_description'] : null;
        $this->container['profit_flag'] = isset($data['profit_flag']) ? $data['profit_flag'] : null;
        $this->container['charter_number'] = isset($data['charter_number']) ? $data['charter_number'] : null;
        $this->container['existence_term_years'] = isset($data['existence_term_years']) ? $data['existence_term_years'] : null;
        $this->container['existence_term_date'] = isset($data['existence_term_date']) ? $data['existence_term_date'] : null;
        $this->container['federal_tax_id'] = isset($data['federal_tax_id']) ? $data['federal_tax_id'] : null;
        $this->container['state_tax_id'] = isset($data['state_tax_id']) ? $data['state_tax_id'] : null;
        $this->container['domestic_foreign_indicator'] = isset($data['domestic_foreign_indicator']) ? $data['domestic_foreign_indicator'] : null;
        $this->container['agent_name'] = isset($data['agent_name']) ? $data['agent_name'] : null;
        $this->container['agent_address'] = isset($data['agent_address']) ? $data['agent_address'] : null;
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
     * Gets state_of_origin
     *
     * @return string
     */
    public function getStateOfOrigin()
    {
        return $this->container['state_of_origin'];
    }

    /**
     * Sets state_of_origin
     *
     * @param string $state_of_origin Origin state of the corporate registration filing
     *
     * @return $this
     */
    public function setStateOfOrigin($state_of_origin)
    {
        $this->container['state_of_origin'] = $state_of_origin;

        return $this;
    }

    /**
     * Gets original_filing_date
     *
     * @return string
     */
    public function getOriginalFilingDate()
    {
        return $this->container['original_filing_date'];
    }

    /**
     * Sets original_filing_date
     *
     * @param string $original_filing_date Date the corporate registration was originally filed. Format = YYYY-MM-DD. Null if not available
     *
     * @return $this
     */
    public function setOriginalFilingDate($original_filing_date)
    {
        $this->container['original_filing_date'] = $original_filing_date;

        return $this;
    }

    /**
     * Gets recent_filing_date
     *
     * @return string
     */
    public function getRecentFilingDate()
    {
        return $this->container['recent_filing_date'];
    }

    /**
     * Sets recent_filing_date
     *
     * @param string $recent_filing_date Date of the most recent corporate registration filing. Format = YYYY-MM-DD. Null if not available
     *
     * @return $this
     */
    public function setRecentFilingDate($recent_filing_date)
    {
        $this->container['recent_filing_date'] = $recent_filing_date;

        return $this;
    }

    /**
     * Gets incorporated_date
     *
     * @return string
     */
    public function getIncorporatedDate()
    {
        return $this->container['incorporated_date'];
    }

    /**
     * Sets incorporated_date
     *
     * @param string $incorporated_date Date the business incorporated in the state. Format = YYYY-MM-DD. Null if not available
     *
     * @return $this
     */
    public function setIncorporatedDate($incorporated_date)
    {
        $this->container['incorporated_date'] = $incorporated_date;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string $business_type Business type, such as LLC, Corporation, etc. Null if not available
     *
     * @return $this
     */
    public function setBusinessType($business_type)
    {
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string $status_description Active businesses are classified as either \"Good standing\" or \"Reinstated\". A description for inactive businesses is also provided; \"Bankruptcy\", \"Terminated\", \"Revoked\", etc.
     *
     * @return $this
     */
    public function setStatusDescription($status_description)
    {
        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets profit_flag
     *
     * @return string
     */
    public function getProfitFlag()
    {
        return $this->container['profit_flag'];
    }

    /**
     * Sets profit_flag
     *
     * @param string $profit_flag \"Profit\", \"Non-profit\", or \"Unknown\". Null if not available
     *
     * @return $this
     */
    public function setProfitFlag($profit_flag)
    {
        $this->container['profit_flag'] = $profit_flag;

        return $this;
    }

    /**
     * Gets charter_number
     *
     * @return string
     */
    public function getCharterNumber()
    {
        return $this->container['charter_number'];
    }

    /**
     * Sets charter_number
     *
     * @param string $charter_number Number assigned to each business by the state. Null if not available
     *
     * @return $this
     */
    public function setCharterNumber($charter_number)
    {
        $this->container['charter_number'] = $charter_number;

        return $this;
    }

    /**
     * Gets existence_term_years
     *
     * @return float
     */
    public function getExistenceTermYears()
    {
        return $this->container['existence_term_years'];
    }

    /**
     * Sets existence_term_years
     *
     * @param float $existence_term_years Number of years the business charter is valid. Null if not available
     *
     * @return $this
     */
    public function setExistenceTermYears($existence_term_years)
    {
        $this->container['existence_term_years'] = $existence_term_years;

        return $this;
    }

    /**
     * Gets existence_term_date
     *
     * @return string
     */
    public function getExistenceTermDate()
    {
        return $this->container['existence_term_date'];
    }

    /**
     * Sets existence_term_date
     *
     * @param string $existence_term_date Date the business charter is valid through. Format = YYYY-MM-DD. Null if not available
     *
     * @return $this
     */
    public function setExistenceTermDate($existence_term_date)
    {
        $this->container['existence_term_date'] = $existence_term_date;

        return $this;
    }

    /**
     * Gets federal_tax_id
     *
     * @return string
     */
    public function getFederalTaxId()
    {
        return $this->container['federal_tax_id'];
    }

    /**
     * Sets federal_tax_id
     *
     * @param string $federal_tax_id Federal Tax Identification Number or Employer Identification Number (EIN) issued by the Federal government
     *
     * @return $this
     */
    public function setFederalTaxId($federal_tax_id)
    {
        $this->container['federal_tax_id'] = $federal_tax_id;

        return $this;
    }

    /**
     * Gets state_tax_id
     *
     * @return string
     */
    public function getStateTaxId()
    {
        return $this->container['state_tax_id'];
    }

    /**
     * Sets state_tax_id
     *
     * @param string $state_tax_id State Tax Identification Number issued by the state
     *
     * @return $this
     */
    public function setStateTaxId($state_tax_id)
    {
        $this->container['state_tax_id'] = $state_tax_id;

        return $this;
    }

    /**
     * Gets domestic_foreign_indicator
     *
     * @return string
     */
    public function getDomesticForeignIndicator()
    {
        return $this->container['domestic_foreign_indicator'];
    }

    /**
     * Sets domestic_foreign_indicator
     *
     * @param string $domestic_foreign_indicator \"Domestic filing state\" or \"Foreign filing state\"
     *
     * @return $this
     */
    public function setDomesticForeignIndicator($domestic_foreign_indicator)
    {
        $this->container['domestic_foreign_indicator'] = $domestic_foreign_indicator;

        return $this;
    }

    /**
     * Gets agent_name
     *
     * @return string
     */
    public function getAgentName()
    {
        return $this->container['agent_name'];
    }

    /**
     * Sets agent_name
     *
     * @param string $agent_name Name of the agent who filed the corporate registration on behalf of the business. Many states require a third-party agent, but sometimes the agent listed can be the business owner
     *
     * @return $this
     */
    public function setAgentName($agent_name)
    {
        $this->container['agent_name'] = $agent_name;

        return $this;
    }

    /**
     * Gets agent_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult
     */
    public function getAgentAddress()
    {
        return $this->container['agent_address'];
    }

    /**
     * Sets agent_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult $agent_address agent_address
     *
     * @return $this
     */
    public function setAgentAddress($agent_address)
    {
        $this->container['agent_address'] = $agent_address;

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


