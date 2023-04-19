<?php
/**
 * EconomicDiversity
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
 * EconomicDiversity Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EconomicDiversity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'economicDiversity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minority_owned_indicator' => 'bool',
        'women_owned_indicator' => 'bool',
        'disadvantaged_indicator' => 'bool',
        'sba_certified_indicator' => 'bool',
        'sba8a_indicator' => 'bool',
        'hub_zone_indicator' => 'bool',
        'veteran_owned_indicator' => 'bool',
        'disabled_veteran_owned_indicator' => 'bool',
        'historical_black_college_and_universities_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'minority_owned_indicator' => null,
        'women_owned_indicator' => null,
        'disadvantaged_indicator' => null,
        'sba_certified_indicator' => null,
        'sba8a_indicator' => null,
        'hub_zone_indicator' => null,
        'veteran_owned_indicator' => null,
        'disabled_veteran_owned_indicator' => null,
        'historical_black_college_and_universities_indicator' => null
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
        'minority_owned_indicator' => 'minorityOwnedIndicator',
        'women_owned_indicator' => 'womenOwnedIndicator',
        'disadvantaged_indicator' => 'disadvantagedIndicator',
        'sba_certified_indicator' => 'sbaCertifiedIndicator',
        'sba8a_indicator' => 'sba8aIndicator',
        'hub_zone_indicator' => 'hubZoneIndicator',
        'veteran_owned_indicator' => 'veteranOwnedIndicator',
        'disabled_veteran_owned_indicator' => 'disabledVeteranOwnedIndicator',
        'historical_black_college_and_universities_indicator' => 'historicalBlackCollegeAndUniversitiesIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minority_owned_indicator' => 'setMinorityOwnedIndicator',
        'women_owned_indicator' => 'setWomenOwnedIndicator',
        'disadvantaged_indicator' => 'setDisadvantagedIndicator',
        'sba_certified_indicator' => 'setSbaCertifiedIndicator',
        'sba8a_indicator' => 'setSba8aIndicator',
        'hub_zone_indicator' => 'setHubZoneIndicator',
        'veteran_owned_indicator' => 'setVeteranOwnedIndicator',
        'disabled_veteran_owned_indicator' => 'setDisabledVeteranOwnedIndicator',
        'historical_black_college_and_universities_indicator' => 'setHistoricalBlackCollegeAndUniversitiesIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minority_owned_indicator' => 'getMinorityOwnedIndicator',
        'women_owned_indicator' => 'getWomenOwnedIndicator',
        'disadvantaged_indicator' => 'getDisadvantagedIndicator',
        'sba_certified_indicator' => 'getSbaCertifiedIndicator',
        'sba8a_indicator' => 'getSba8aIndicator',
        'hub_zone_indicator' => 'getHubZoneIndicator',
        'veteran_owned_indicator' => 'getVeteranOwnedIndicator',
        'disabled_veteran_owned_indicator' => 'getDisabledVeteranOwnedIndicator',
        'historical_black_college_and_universities_indicator' => 'getHistoricalBlackCollegeAndUniversitiesIndicator'
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
        $this->container['minority_owned_indicator'] = isset($data['minority_owned_indicator']) ? $data['minority_owned_indicator'] : null;
        $this->container['women_owned_indicator'] = isset($data['women_owned_indicator']) ? $data['women_owned_indicator'] : null;
        $this->container['disadvantaged_indicator'] = isset($data['disadvantaged_indicator']) ? $data['disadvantaged_indicator'] : null;
        $this->container['sba_certified_indicator'] = isset($data['sba_certified_indicator']) ? $data['sba_certified_indicator'] : null;
        $this->container['sba8a_indicator'] = isset($data['sba8a_indicator']) ? $data['sba8a_indicator'] : null;
        $this->container['hub_zone_indicator'] = isset($data['hub_zone_indicator']) ? $data['hub_zone_indicator'] : null;
        $this->container['veteran_owned_indicator'] = isset($data['veteran_owned_indicator']) ? $data['veteran_owned_indicator'] : null;
        $this->container['disabled_veteran_owned_indicator'] = isset($data['disabled_veteran_owned_indicator']) ? $data['disabled_veteran_owned_indicator'] : null;
        $this->container['historical_black_college_and_universities_indicator'] = isset($data['historical_black_college_and_universities_indicator']) ? $data['historical_black_college_and_universities_indicator'] : null;
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
     * Gets minority_owned_indicator
     *
     * @return bool
     */
    public function getMinorityOwnedIndicator()
    {
        return $this->container['minority_owned_indicator'];
    }

    /**
     * Sets minority_owned_indicator
     *
     * @param bool $minority_owned_indicator If true, the Business establishment is self-certified according to the US Small Business Administration as minority-owned
     *
     * @return $this
     */
    public function setMinorityOwnedIndicator($minority_owned_indicator)
    {
        $this->container['minority_owned_indicator'] = $minority_owned_indicator;

        return $this;
    }

    /**
     * Gets women_owned_indicator
     *
     * @return bool
     */
    public function getWomenOwnedIndicator()
    {
        return $this->container['women_owned_indicator'];
    }

    /**
     * Sets women_owned_indicator
     *
     * @param bool $women_owned_indicator If true, the Business establishment is self-certified according to the US Small Business Administration as women-owned
     *
     * @return $this
     */
    public function setWomenOwnedIndicator($women_owned_indicator)
    {
        $this->container['women_owned_indicator'] = $women_owned_indicator;

        return $this;
    }

    /**
     * Gets disadvantaged_indicator
     *
     * @return bool
     */
    public function getDisadvantagedIndicator()
    {
        return $this->container['disadvantaged_indicator'];
    }

    /**
     * Sets disadvantaged_indicator
     *
     * @param bool $disadvantaged_indicator If true, the Business establishment is certified by the Department of Transportation according to the US Small Business Administration as disadvantaged
     *
     * @return $this
     */
    public function setDisadvantagedIndicator($disadvantaged_indicator)
    {
        $this->container['disadvantaged_indicator'] = $disadvantaged_indicator;

        return $this;
    }

    /**
     * Gets sba_certified_indicator
     *
     * @return bool
     */
    public function getSbaCertifiedIndicator()
    {
        return $this->container['sba_certified_indicator'];
    }

    /**
     * Sets sba_certified_indicator
     *
     * @param bool $sba_certified_indicator If true, the Business establishment is certified by the US Small Business Administration as a small-business. Small businesses that have not certified with the US government are not flagged
     *
     * @return $this
     */
    public function setSbaCertifiedIndicator($sba_certified_indicator)
    {
        $this->container['sba_certified_indicator'] = $sba_certified_indicator;

        return $this;
    }

    /**
     * Gets sba8a_indicator
     *
     * @return bool
     */
    public function getSba8aIndicator()
    {
        return $this->container['sba8a_indicator'];
    }

    /**
     * Sets sba8a_indicator
     *
     * @param bool $sba8a_indicator If true, the Business enterprise participates in the Small Business Administration’s 8(a) Business Development Program
     *
     * @return $this
     */
    public function setSba8aIndicator($sba8a_indicator)
    {
        $this->container['sba8a_indicator'] = $sba8a_indicator;

        return $this;
    }

    /**
     * Gets hub_zone_indicator
     *
     * @return bool
     */
    public function getHubZoneIndicator()
    {
        return $this->container['hub_zone_indicator'];
    }

    /**
     * Sets hub_zone_indicator
     *
     * @param bool $hub_zone_indicator If true, the Business enterprise is certified by the US Small Business Administration as doing business in an historically underutilized business zone
     *
     * @return $this
     */
    public function setHubZoneIndicator($hub_zone_indicator)
    {
        $this->container['hub_zone_indicator'] = $hub_zone_indicator;

        return $this;
    }

    /**
     * Gets veteran_owned_indicator
     *
     * @return bool
     */
    public function getVeteranOwnedIndicator()
    {
        return $this->container['veteran_owned_indicator'];
    }

    /**
     * Sets veteran_owned_indicator
     *
     * @param bool $veteran_owned_indicator If true, the Business establishment is self-certified as veteran-owned according to the US Small Business Administration
     *
     * @return $this
     */
    public function setVeteranOwnedIndicator($veteran_owned_indicator)
    {
        $this->container['veteran_owned_indicator'] = $veteran_owned_indicator;

        return $this;
    }

    /**
     * Gets disabled_veteran_owned_indicator
     *
     * @return bool
     */
    public function getDisabledVeteranOwnedIndicator()
    {
        return $this->container['disabled_veteran_owned_indicator'];
    }

    /**
     * Sets disabled_veteran_owned_indicator
     *
     * @param bool $disabled_veteran_owned_indicator If true, the Business establishment is self-certified according to the US Small Business Administration as service-disabled veteran-owned
     *
     * @return $this
     */
    public function setDisabledVeteranOwnedIndicator($disabled_veteran_owned_indicator)
    {
        $this->container['disabled_veteran_owned_indicator'] = $disabled_veteran_owned_indicator;

        return $this;
    }

    /**
     * Gets historical_black_college_and_universities_indicator
     *
     * @return bool
     */
    public function getHistoricalBlackCollegeAndUniversitiesIndicator()
    {
        return $this->container['historical_black_college_and_universities_indicator'];
    }

    /**
     * Sets historical_black_college_and_universities_indicator
     *
     * @param bool $historical_black_college_and_universities_indicator If true, the Entity is certified by the US Department of Education as an accredited historically black college or university, established prior to 1964, with the principal mission of educating black Americans
     *
     * @return $this
     */
    public function setHistoricalBlackCollegeAndUniversitiesIndicator($historical_black_college_and_universities_indicator)
    {
        $this->container['historical_black_college_and_universities_indicator'] = $historical_black_college_and_universities_indicator;

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


