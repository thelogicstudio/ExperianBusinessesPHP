<?php
/**
 * GovernmentDetailsResultEconomicDiversity
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
 * GovernmentDetailsResultEconomicDiversity Class Doc Comment
 *
 * @category Class
 * @description Highlights details regarding whether the business is certified for participation in programs seeking to increase economic diversity in contracting
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GovernmentDetailsResultEconomicDiversity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GovernmentDetailsResult_economicDiversity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mbe' => 'bool',
        'wbe' => 'bool',
        'dbe' => 'bool',
        'sba8a' => 'bool',
        'hubzone' => 'bool',
        'vet' => 'bool',
        'dvet' => 'bool',
        'hbcu' => 'bool',
        'sdb' => 'bool',
        'sba' => 'bool',
        'lsa' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mbe' => null,
        'wbe' => null,
        'dbe' => null,
        'sba8a' => null,
        'hubzone' => null,
        'vet' => null,
        'dvet' => null,
        'hbcu' => null,
        'sdb' => null,
        'sba' => null,
        'lsa' => null
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
        'mbe' => 'mbe',
        'wbe' => 'wbe',
        'dbe' => 'dbe',
        'sba8a' => 'sba8a',
        'hubzone' => 'hubzone',
        'vet' => 'vet',
        'dvet' => 'dvet',
        'hbcu' => 'hbcu',
        'sdb' => 'sdb',
        'sba' => 'sba',
        'lsa' => 'lsa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mbe' => 'setMbe',
        'wbe' => 'setWbe',
        'dbe' => 'setDbe',
        'sba8a' => 'setSba8a',
        'hubzone' => 'setHubzone',
        'vet' => 'setVet',
        'dvet' => 'setDvet',
        'hbcu' => 'setHbcu',
        'sdb' => 'setSdb',
        'sba' => 'setSba',
        'lsa' => 'setLsa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mbe' => 'getMbe',
        'wbe' => 'getWbe',
        'dbe' => 'getDbe',
        'sba8a' => 'getSba8a',
        'hubzone' => 'getHubzone',
        'vet' => 'getVet',
        'dvet' => 'getDvet',
        'hbcu' => 'getHbcu',
        'sdb' => 'getSdb',
        'sba' => 'getSba',
        'lsa' => 'getLsa'
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
        $this->container['mbe'] = isset($data['mbe']) ? $data['mbe'] : null;
        $this->container['wbe'] = isset($data['wbe']) ? $data['wbe'] : null;
        $this->container['dbe'] = isset($data['dbe']) ? $data['dbe'] : null;
        $this->container['sba8a'] = isset($data['sba8a']) ? $data['sba8a'] : null;
        $this->container['hubzone'] = isset($data['hubzone']) ? $data['hubzone'] : null;
        $this->container['vet'] = isset($data['vet']) ? $data['vet'] : null;
        $this->container['dvet'] = isset($data['dvet']) ? $data['dvet'] : null;
        $this->container['hbcu'] = isset($data['hbcu']) ? $data['hbcu'] : null;
        $this->container['sdb'] = isset($data['sdb']) ? $data['sdb'] : null;
        $this->container['sba'] = isset($data['sba']) ? $data['sba'] : null;
        $this->container['lsa'] = isset($data['lsa']) ? $data['lsa'] : null;
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
     * Gets mbe
     *
     * @return bool
     */
    public function getMbe()
    {
        return $this->container['mbe'];
    }

    /**
     * Sets mbe
     *
     * @param bool $mbe Minority-Owned Business Enterprise
     *
     * @return $this
     */
    public function setMbe($mbe)
    {
        $this->container['mbe'] = $mbe;

        return $this;
    }

    /**
     * Gets wbe
     *
     * @return bool
     */
    public function getWbe()
    {
        return $this->container['wbe'];
    }

    /**
     * Sets wbe
     *
     * @param bool $wbe Woman-Owned Business Enterprise
     *
     * @return $this
     */
    public function setWbe($wbe)
    {
        $this->container['wbe'] = $wbe;

        return $this;
    }

    /**
     * Gets dbe
     *
     * @return bool
     */
    public function getDbe()
    {
        return $this->container['dbe'];
    }

    /**
     * Sets dbe
     *
     * @param bool $dbe Disadvantaged Business Enterprise
     *
     * @return $this
     */
    public function setDbe($dbe)
    {
        $this->container['dbe'] = $dbe;

        return $this;
    }

    /**
     * Gets sba8a
     *
     * @return bool
     */
    public function getSba8a()
    {
        return $this->container['sba8a'];
    }

    /**
     * Sets sba8a
     *
     * @param bool $sba8a Participant in SBA 8A program
     *
     * @return $this
     */
    public function setSba8a($sba8a)
    {
        $this->container['sba8a'] = $sba8a;

        return $this;
    }

    /**
     * Gets hubzone
     *
     * @return bool
     */
    public function getHubzone()
    {
        return $this->container['hubzone'];
    }

    /**
     * Sets hubzone
     *
     * @param bool $hubzone Historically Underutilized Business
     *
     * @return $this
     */
    public function setHubzone($hubzone)
    {
        $this->container['hubzone'] = $hubzone;

        return $this;
    }

    /**
     * Gets vet
     *
     * @return bool
     */
    public function getVet()
    {
        return $this->container['vet'];
    }

    /**
     * Sets vet
     *
     * @param bool $vet Veteran-Owned Business Enterprise
     *
     * @return $this
     */
    public function setVet($vet)
    {
        $this->container['vet'] = $vet;

        return $this;
    }

    /**
     * Gets dvet
     *
     * @return bool
     */
    public function getDvet()
    {
        return $this->container['dvet'];
    }

    /**
     * Sets dvet
     *
     * @param bool $dvet Service Disabled Veteran-Owned Business Enterprise
     *
     * @return $this
     */
    public function setDvet($dvet)
    {
        $this->container['dvet'] = $dvet;

        return $this;
    }

    /**
     * Gets hbcu
     *
     * @return bool
     */
    public function getHbcu()
    {
        return $this->container['hbcu'];
    }

    /**
     * Sets hbcu
     *
     * @param bool $hbcu Historical Black Colleges and Universities. Institutions of higher education in the United States that were established before 1964 with the intention of serving the black community
     *
     * @return $this
     */
    public function setHbcu($hbcu)
    {
        $this->container['hbcu'] = $hbcu;

        return $this;
    }

    /**
     * Gets sdb
     *
     * @return bool
     */
    public function getSdb()
    {
        return $this->container['sdb'];
    }

    /**
     * Sets sdb
     *
     * @param bool $sdb Small Disadvantage Business Enterprise
     *
     * @return $this
     */
    public function setSdb($sdb)
    {
        $this->container['sdb'] = $sdb;

        return $this;
    }

    /**
     * Gets sba
     *
     * @return bool
     */
    public function getSba()
    {
        return $this->container['sba'];
    }

    /**
     * Sets sba
     *
     * @param bool $sba Small Business Administration Enterprise
     *
     * @return $this
     */
    public function setSba($sba)
    {
        $this->container['sba'] = $sba;

        return $this;
    }

    /**
     * Gets lsa
     *
     * @return bool
     */
    public function getLsa()
    {
        return $this->container['lsa'];
    }

    /**
     * Sets lsa
     *
     * @param bool $lsa Labor Surplus Area
     *
     * @return $this
     */
    public function setLsa($lsa)
    {
        $this->container['lsa'] = $lsa;

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


