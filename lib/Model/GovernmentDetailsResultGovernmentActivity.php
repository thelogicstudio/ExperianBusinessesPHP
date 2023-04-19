<?php
/**
 * GovernmentDetailsResultGovernmentActivity
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
 * GovernmentDetailsResultGovernmentActivity Class Doc Comment
 *
 * @category Class
 * @description Details the business’s activities with respect to federal contracting programs. This information may be helpful in determining if the business may have participated in federal contracts in the past or if it is currently debarred from doing business with the federal government
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GovernmentDetailsResultGovernmentActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GovernmentDetailsResult_governmentActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'congressional_district' => 'string',
        'contractor_indicator' => 'bool',
        'debarred_indicator' => 'bool',
        'agency' => '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResultGovernmentActivityAgency',
        'exclusion_type' => 'string',
        'active_date' => 'string',
        'termination_date' => 'string',
        'import_export_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'congressional_district' => null,
        'contractor_indicator' => null,
        'debarred_indicator' => null,
        'agency' => null,
        'exclusion_type' => null,
        'active_date' => null,
        'termination_date' => null,
        'import_export_code' => null
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
        'congressional_district' => 'congressionalDistrict',
        'contractor_indicator' => 'contractorIndicator',
        'debarred_indicator' => 'debarredIndicator',
        'agency' => 'agency',
        'exclusion_type' => 'exclusionType',
        'active_date' => 'activeDate',
        'termination_date' => 'terminationDate',
        'import_export_code' => 'importExportCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'congressional_district' => 'setCongressionalDistrict',
        'contractor_indicator' => 'setContractorIndicator',
        'debarred_indicator' => 'setDebarredIndicator',
        'agency' => 'setAgency',
        'exclusion_type' => 'setExclusionType',
        'active_date' => 'setActiveDate',
        'termination_date' => 'setTerminationDate',
        'import_export_code' => 'setImportExportCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'congressional_district' => 'getCongressionalDistrict',
        'contractor_indicator' => 'getContractorIndicator',
        'debarred_indicator' => 'getDebarredIndicator',
        'agency' => 'getAgency',
        'exclusion_type' => 'getExclusionType',
        'active_date' => 'getActiveDate',
        'termination_date' => 'getTerminationDate',
        'import_export_code' => 'getImportExportCode'
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
        $this->container['congressional_district'] = isset($data['congressional_district']) ? $data['congressional_district'] : null;
        $this->container['contractor_indicator'] = isset($data['contractor_indicator']) ? $data['contractor_indicator'] : null;
        $this->container['debarred_indicator'] = isset($data['debarred_indicator']) ? $data['debarred_indicator'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['exclusion_type'] = isset($data['exclusion_type']) ? $data['exclusion_type'] : null;
        $this->container['active_date'] = isset($data['active_date']) ? $data['active_date'] : null;
        $this->container['termination_date'] = isset($data['termination_date']) ? $data['termination_date'] : null;
        $this->container['import_export_code'] = isset($data['import_export_code']) ? $data['import_export_code'] : null;
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
     * Gets congressional_district
     *
     * @return string
     */
    public function getCongressionalDistrict()
    {
        return $this->container['congressional_district'];
    }

    /**
     * Sets congressional_district
     *
     * @param string $congressional_district The Congressional District wherein the business is located (within the state)
     *
     * @return $this
     */
    public function setCongressionalDistrict($congressional_district)
    {
        $this->container['congressional_district'] = $congressional_district;

        return $this;
    }

    /**
     * Gets contractor_indicator
     *
     * @return bool
     */
    public function getContractorIndicator()
    {
        return $this->container['contractor_indicator'];
    }

    /**
     * Sets contractor_indicator
     *
     * @param bool $contractor_indicator If true, indicates the business is registered with Central Contractor Registration (CCR)
     *
     * @return $this
     */
    public function setContractorIndicator($contractor_indicator)
    {
        $this->container['contractor_indicator'] = $contractor_indicator;

        return $this;
    }

    /**
     * Gets debarred_indicator
     *
     * @return bool
     */
    public function getDebarredIndicator()
    {
        return $this->container['debarred_indicator'];
    }

    /**
     * Sets debarred_indicator
     *
     * @param bool $debarred_indicator If true, indicates that the business is excluded from receiving Federal contracts, certain subcontracts, and certain types of Federal financial and non-financial assistance and benefits
     *
     * @return $this
     */
    public function setDebarredIndicator($debarred_indicator)
    {
        $this->container['debarred_indicator'] = $debarred_indicator;

        return $this;
    }

    /**
     * Gets agency
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResultGovernmentActivityAgency
     */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
     * Sets agency
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResultGovernmentActivityAgency $agency agency
     *
     * @return $this
     */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;

        return $this;
    }

    /**
     * Gets exclusion_type
     *
     * @return string
     */
    public function getExclusionType()
    {
        return $this->container['exclusion_type'];
    }

    /**
     * Sets exclusion_type
     *
     * @param string $exclusion_type Type of Exclusions: Preliminarily Ineligible (Proceedings Pending), Ineligible (Proceedings Completed), Prohibition/Restriction, Voluntary Exclusion, or Null if not available
     *
     * @return $this
     */
    public function setExclusionType($exclusion_type)
    {
        $this->container['exclusion_type'] = $exclusion_type;

        return $this;
    }

    /**
     * Gets active_date
     *
     * @return string
     */
    public function getActiveDate()
    {
        return $this->container['active_date'];
    }

    /**
     * Sets active_date
     *
     * @param string $active_date The date that the exclusion became active, when the entity is no longer able to do business with the Federal Government. Format YYYY-MM-DD
     *
     * @return $this
     */
    public function setActiveDate($active_date)
    {
        $this->container['active_date'] = $active_date;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return string
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param string $termination_date The date that the exclusion will be removed from the current list of active exclusions and placed in the inactive list. Format YYYY-MM-DD
     *
     * @return $this
     */
    public function setTerminationDate($termination_date)
    {
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets import_export_code
     *
     * @return string
     */
    public function getImportExportCode()
    {
        return $this->container['import_export_code'];
    }

    /**
     * Sets import_export_code
     *
     * @param string $import_export_code Identifies if a business is an Importer, Exporter, or Both. Future Field
     *
     * @return $this
     */
    public function setImportExportCode($import_export_code)
    {
        $this->container['import_export_code'] = $import_export_code;

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


