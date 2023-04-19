<?php
/**
 * GeoCode
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
 * GeoCode Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeoCode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeoCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'latitude_longitude_level' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'msa_code' => 'string',
        'census_blk_grp_code' => 'string',
        'census_tract_code' => 'string',
        'cottage_indicator' => 'bool',
        'congressional_district_code' => 'string',
        'date_last_reported' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'latitude_longitude_level' => null,
        'latitude' => 'float',
        'longitude' => 'float',
        'msa_code' => null,
        'census_blk_grp_code' => null,
        'census_tract_code' => null,
        'cottage_indicator' => null,
        'congressional_district_code' => null,
        'date_last_reported' => null
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
        'latitude_longitude_level' => 'latitudeLongitudeLevel',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'msa_code' => 'msaCode',
        'census_blk_grp_code' => 'censusBlkGrpCode',
        'census_tract_code' => 'censusTractCode',
        'cottage_indicator' => 'cottageIndicator',
        'congressional_district_code' => 'congressionalDistrictCode',
        'date_last_reported' => 'dateLastReported'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'latitude_longitude_level' => 'setLatitudeLongitudeLevel',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'msa_code' => 'setMsaCode',
        'census_blk_grp_code' => 'setCensusBlkGrpCode',
        'census_tract_code' => 'setCensusTractCode',
        'cottage_indicator' => 'setCottageIndicator',
        'congressional_district_code' => 'setCongressionalDistrictCode',
        'date_last_reported' => 'setDateLastReported'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'latitude_longitude_level' => 'getLatitudeLongitudeLevel',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'msa_code' => 'getMsaCode',
        'census_blk_grp_code' => 'getCensusBlkGrpCode',
        'census_tract_code' => 'getCensusTractCode',
        'cottage_indicator' => 'getCottageIndicator',
        'congressional_district_code' => 'getCongressionalDistrictCode',
        'date_last_reported' => 'getDateLastReported'
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
        $this->container['latitude_longitude_level'] = isset($data['latitude_longitude_level']) ? $data['latitude_longitude_level'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['msa_code'] = isset($data['msa_code']) ? $data['msa_code'] : null;
        $this->container['census_blk_grp_code'] = isset($data['census_blk_grp_code']) ? $data['census_blk_grp_code'] : null;
        $this->container['census_tract_code'] = isset($data['census_tract_code']) ? $data['census_tract_code'] : null;
        $this->container['cottage_indicator'] = isset($data['cottage_indicator']) ? $data['cottage_indicator'] : null;
        $this->container['congressional_district_code'] = isset($data['congressional_district_code']) ? $data['congressional_district_code'] : null;
        $this->container['date_last_reported'] = isset($data['date_last_reported']) ? $data['date_last_reported'] : null;
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
     * Gets latitude_longitude_level
     *
     * @return string
     */
    public function getLatitudeLongitudeLevel()
    {
        return $this->container['latitude_longitude_level'];
    }

    /**
     * Sets latitude_longitude_level
     *
     * @param string $latitude_longitude_level Additional data about the specified location. \"Roof top level\" indicates a precise geocode. If roof level is unavailable, zip+4, block group, zip+2, census tract, and zip code levels will be returned, with zip code level being the least accurate
     *
     * @return $this
     */
    public function setLatitudeLongitudeLevel($latitude_longitude_level)
    {
        $this->container['latitude_longitude_level'] = $latitude_longitude_level;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude Business location latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude Business location longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets msa_code
     *
     * @return string
     */
    public function getMsaCode()
    {
        return $this->container['msa_code'];
    }

    /**
     * Sets msa_code
     *
     * @param string $msa_code Metropolitan statistical area code
     *
     * @return $this
     */
    public function setMsaCode($msa_code)
    {
        $this->container['msa_code'] = $msa_code;

        return $this;
    }

    /**
     * Gets census_blk_grp_code
     *
     * @return string
     */
    public function getCensusBlkGrpCode()
    {
        return $this->container['census_blk_grp_code'];
    }

    /**
     * Sets census_blk_grp_code
     *
     * @param string $census_blk_grp_code Census block group code
     *
     * @return $this
     */
    public function setCensusBlkGrpCode($census_blk_grp_code)
    {
        $this->container['census_blk_grp_code'] = $census_blk_grp_code;

        return $this;
    }

    /**
     * Gets census_tract_code
     *
     * @return string
     */
    public function getCensusTractCode()
    {
        return $this->container['census_tract_code'];
    }

    /**
     * Sets census_tract_code
     *
     * @param string $census_tract_code Census tract code
     *
     * @return $this
     */
    public function setCensusTractCode($census_tract_code)
    {
        $this->container['census_tract_code'] = $census_tract_code;

        return $this;
    }

    /**
     * Gets cottage_indicator
     *
     * @return bool
     */
    public function getCottageIndicator()
    {
        return $this->container['cottage_indicator'];
    }

    /**
     * Sets cottage_indicator
     *
     * @param bool $cottage_indicator Indicates a home-based business
     *
     * @return $this
     */
    public function setCottageIndicator($cottage_indicator)
    {
        $this->container['cottage_indicator'] = $cottage_indicator;

        return $this;
    }

    /**
     * Gets congressional_district_code
     *
     * @return string
     */
    public function getCongressionalDistrictCode()
    {
        return $this->container['congressional_district_code'];
    }

    /**
     * Sets congressional_district_code
     *
     * @param string $congressional_district_code United States Congressional District code
     *
     * @return $this
     */
    public function setCongressionalDistrictCode($congressional_district_code)
    {
        $this->container['congressional_district_code'] = $congressional_district_code;

        return $this;
    }

    /**
     * Gets date_last_reported
     *
     * @return string
     */
    public function getDateLastReported()
    {
        return $this->container['date_last_reported'];
    }

    /**
     * Sets date_last_reported
     *
     * @param string $date_last_reported Format: MM/DD/YYYY
     *
     * @return $this
     */
    public function setDateLastReported($date_last_reported)
    {
        $this->container['date_last_reported'] = $date_last_reported;

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


