<?php
/**
 * BusinessFraudShieldResult
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
 * BusinessFraudShieldResult Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessFraudShieldResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessFraudShieldResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'matching_business_address' => 'string',
        'active_business_indicator' => 'bool',
        'ofac_match_warning' => '\TheLogicStudio\ExperianBusinessesPHP\Model\OFACMatchWarning',
        'business_victim_statement_indicator' => 'bool',
        'business_risk_triggers_indicator' => 'bool',
        'business_risk_triggers_statement' => 'string[]',
        'name_address_verification_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'matching_business_address' => null,
        'active_business_indicator' => null,
        'ofac_match_warning' => null,
        'business_victim_statement_indicator' => null,
        'business_risk_triggers_indicator' => null,
        'business_risk_triggers_statement' => null,
        'name_address_verification_indicator' => null
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
        'matching_business_address' => 'matchingBusinessAddress',
        'active_business_indicator' => 'activeBusinessIndicator',
        'ofac_match_warning' => 'ofacMatchWarning',
        'business_victim_statement_indicator' => 'businessVictimStatementIndicator',
        'business_risk_triggers_indicator' => 'businessRiskTriggersIndicator',
        'business_risk_triggers_statement' => 'businessRiskTriggersStatement',
        'name_address_verification_indicator' => 'nameAddressVerificationIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'matching_business_address' => 'setMatchingBusinessAddress',
        'active_business_indicator' => 'setActiveBusinessIndicator',
        'ofac_match_warning' => 'setOfacMatchWarning',
        'business_victim_statement_indicator' => 'setBusinessVictimStatementIndicator',
        'business_risk_triggers_indicator' => 'setBusinessRiskTriggersIndicator',
        'business_risk_triggers_statement' => 'setBusinessRiskTriggersStatement',
        'name_address_verification_indicator' => 'setNameAddressVerificationIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'matching_business_address' => 'getMatchingBusinessAddress',
        'active_business_indicator' => 'getActiveBusinessIndicator',
        'ofac_match_warning' => 'getOfacMatchWarning',
        'business_victim_statement_indicator' => 'getBusinessVictimStatementIndicator',
        'business_risk_triggers_indicator' => 'getBusinessRiskTriggersIndicator',
        'business_risk_triggers_statement' => 'getBusinessRiskTriggersStatement',
        'name_address_verification_indicator' => 'getNameAddressVerificationIndicator'
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
        $this->container['matching_business_address'] = isset($data['matching_business_address']) ? $data['matching_business_address'] : null;
        $this->container['active_business_indicator'] = isset($data['active_business_indicator']) ? $data['active_business_indicator'] : null;
        $this->container['ofac_match_warning'] = isset($data['ofac_match_warning']) ? $data['ofac_match_warning'] : null;
        $this->container['business_victim_statement_indicator'] = isset($data['business_victim_statement_indicator']) ? $data['business_victim_statement_indicator'] : null;
        $this->container['business_risk_triggers_indicator'] = isset($data['business_risk_triggers_indicator']) ? $data['business_risk_triggers_indicator'] : null;
        $this->container['business_risk_triggers_statement'] = isset($data['business_risk_triggers_statement']) ? $data['business_risk_triggers_statement'] : null;
        $this->container['name_address_verification_indicator'] = isset($data['name_address_verification_indicator']) ? $data['name_address_verification_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['matching_business_address']) && (mb_strlen($this->container['matching_business_address']) > 30)) {
            $invalidProperties[] = "invalid value for 'matching_business_address', the character length must be smaller than or equal to 30.";
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
     * Gets matching_business_address
     *
     * @return string
     */
    public function getMatchingBusinessAddress()
    {
        return $this->container['matching_business_address'];
    }

    /**
     * Sets matching_business_address
     *
     * @param string $matching_business_address A \"Primary Business\" is returned when the address inquired upon matches the businesses primary address. \"Branch Business\" is returned when the address matches a branch location. Null if not available
     *
     * @return $this
     */
    public function setMatchingBusinessAddress($matching_business_address)
    {
        if (!is_null($matching_business_address) && (mb_strlen($matching_business_address) > 30)) {
            throw new \InvalidArgumentException('invalid length for $matching_business_address when calling BusinessFraudShieldResult., must be smaller than or equal to 30.');
        }

        $this->container['matching_business_address'] = $matching_business_address;

        return $this;
    }

    /**
     * Gets active_business_indicator
     *
     * @return bool
     */
    public function getActiveBusinessIndicator()
    {
        return $this->container['active_business_indicator'];
    }

    /**
     * Sets active_business_indicator
     *
     * @param bool $active_business_indicator If false the business may be inactive. To determine active status, Experian looks at bankruptcies, corporate registrations, trades, collections, and recent credit inquiry activity
     *
     * @return $this
     */
    public function setActiveBusinessIndicator($active_business_indicator)
    {
        $this->container['active_business_indicator'] = $active_business_indicator;

        return $this;
    }

    /**
     * Gets ofac_match_warning
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\OFACMatchWarning
     */
    public function getOfacMatchWarning()
    {
        return $this->container['ofac_match_warning'];
    }

    /**
     * Sets ofac_match_warning
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\OFACMatchWarning $ofac_match_warning ofac_match_warning
     *
     * @return $this
     */
    public function setOfacMatchWarning($ofac_match_warning)
    {
        $this->container['ofac_match_warning'] = $ofac_match_warning;

        return $this;
    }

    /**
     * Gets business_victim_statement_indicator
     *
     * @return bool
     */
    public function getBusinessVictimStatementIndicator()
    {
        return $this->container['business_victim_statement_indicator'];
    }

    /**
     * Sets business_victim_statement_indicator
     *
     * @param bool $business_victim_statement_indicator If true the business has filed a statement with Experian indicating they were a victim of fraud or identity theft
     *
     * @return $this
     */
    public function setBusinessVictimStatementIndicator($business_victim_statement_indicator)
    {
        $this->container['business_victim_statement_indicator'] = $business_victim_statement_indicator;

        return $this;
    }

    /**
     * Gets business_risk_triggers_indicator
     *
     * @return bool
     */
    public function getBusinessRiskTriggersIndicator()
    {
        return $this->container['business_risk_triggers_indicator'];
    }

    /**
     * Sets business_risk_triggers_indicator
     *
     * @param bool $business_risk_triggers_indicator If true indicates high risk conditions associated with the business address
     *
     * @return $this
     */
    public function setBusinessRiskTriggersIndicator($business_risk_triggers_indicator)
    {
        $this->container['business_risk_triggers_indicator'] = $business_risk_triggers_indicator;

        return $this;
    }

    /**
     * Gets business_risk_triggers_statement
     *
     * @return string[]
     */
    public function getBusinessRiskTriggersStatement()
    {
        return $this->container['business_risk_triggers_statement'];
    }

    /**
     * Sets business_risk_triggers_statement
     *
     * @param string[] $business_risk_triggers_statement Only returned if businessRiskTriggersIndicator is true. Provides a description of the high risk conditions identified with the business address
     *
     * @return $this
     */
    public function setBusinessRiskTriggersStatement($business_risk_triggers_statement)
    {
        $this->container['business_risk_triggers_statement'] = $business_risk_triggers_statement;

        return $this;
    }

    /**
     * Gets name_address_verification_indicator
     *
     * @return bool
     */
    public function getNameAddressVerificationIndicator()
    {
        return $this->container['name_address_verification_indicator'];
    }

    /**
     * Sets name_address_verification_indicator
     *
     * @param bool $name_address_verification_indicator If true there are potential inconsistencies with the business name, address, phone and Tax ID Number
     *
     * @return $this
     */
    public function setNameAddressVerificationIndicator($name_address_verification_indicator)
    {
        $this->container['name_address_verification_indicator'] = $name_address_verification_indicator;

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


