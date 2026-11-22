<?php
/**
 * GeoCode
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Businesses
 *
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> <li><strong>Cyber Risk Score and Attributes</strong> – Identifies employee cyber risk behaviors that indicate risk for a business</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
 *
 * The version of the OpenAPI document: 1.0.3
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.17.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GeoCode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeoCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'latitude_longitude_level' => false,
        'latitude' => false,
        'longitude' => false,
        'msa_code' => false,
        'census_blk_grp_code' => false,
        'census_tract_code' => false,
        'cottage_indicator' => false,
        'congressional_district_code' => false,
        'date_last_reported' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('latitude_longitude_level', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('msa_code', $data ?? [], null);
        $this->setIfExists('census_blk_grp_code', $data ?? [], null);
        $this->setIfExists('census_tract_code', $data ?? [], null);
        $this->setIfExists('cottage_indicator', $data ?? [], null);
        $this->setIfExists('congressional_district_code', $data ?? [], null);
        $this->setIfExists('date_last_reported', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['latitude_longitude_level']) && (mb_strlen($this->container['latitude_longitude_level']) > 14)) {
            $invalidProperties[] = "invalid value for 'latitude_longitude_level', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['msa_code']) && (mb_strlen($this->container['msa_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'msa_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['census_blk_grp_code']) && (mb_strlen($this->container['census_blk_grp_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'census_blk_grp_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['census_tract_code']) && (mb_strlen($this->container['census_tract_code']) > 6)) {
            $invalidProperties[] = "invalid value for 'census_tract_code', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['congressional_district_code']) && (mb_strlen($this->container['congressional_district_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'congressional_district_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['date_last_reported']) && (mb_strlen($this->container['date_last_reported']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_last_reported', the character length must be smaller than or equal to 10.";
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
     * Gets latitude_longitude_level
     *
     * @return string|null
     */
    public function getLatitudeLongitudeLevel()
    {
        return $this->container['latitude_longitude_level'];
    }

    /**
     * Sets latitude_longitude_level
     *
     * @param string|null $latitude_longitude_level Additional data about the specified location. \"Roof top level\" indicates a precise geocode. If roof level is unavailable, zip+4, block group, zip+2, census tract, and zip code levels will be returned, with zip code level being the least accurate
     *
     * @return self
     */
    public function setLatitudeLongitudeLevel($latitude_longitude_level)
    {
        if (is_null($latitude_longitude_level)) {
            throw new \InvalidArgumentException('non-nullable latitude_longitude_level cannot be null');
        }
        if ((mb_strlen($latitude_longitude_level) > 14)) {
            throw new \InvalidArgumentException('invalid length for $latitude_longitude_level when calling GeoCode., must be smaller than or equal to 14.');
        }

        $this->container['latitude_longitude_level'] = $latitude_longitude_level;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude Business location latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude Business location longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets msa_code
     *
     * @return string|null
     */
    public function getMsaCode()
    {
        return $this->container['msa_code'];
    }

    /**
     * Sets msa_code
     *
     * @param string|null $msa_code Metropolitan statistical area code
     *
     * @return self
     */
    public function setMsaCode($msa_code)
    {
        if (is_null($msa_code)) {
            throw new \InvalidArgumentException('non-nullable msa_code cannot be null');
        }
        if ((mb_strlen($msa_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $msa_code when calling GeoCode., must be smaller than or equal to 4.');
        }

        $this->container['msa_code'] = $msa_code;

        return $this;
    }

    /**
     * Gets census_blk_grp_code
     *
     * @return string|null
     */
    public function getCensusBlkGrpCode()
    {
        return $this->container['census_blk_grp_code'];
    }

    /**
     * Sets census_blk_grp_code
     *
     * @param string|null $census_blk_grp_code Census block group code
     *
     * @return self
     */
    public function setCensusBlkGrpCode($census_blk_grp_code)
    {
        if (is_null($census_blk_grp_code)) {
            throw new \InvalidArgumentException('non-nullable census_blk_grp_code cannot be null');
        }
        if ((mb_strlen($census_blk_grp_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $census_blk_grp_code when calling GeoCode., must be smaller than or equal to 1.');
        }

        $this->container['census_blk_grp_code'] = $census_blk_grp_code;

        return $this;
    }

    /**
     * Gets census_tract_code
     *
     * @return string|null
     */
    public function getCensusTractCode()
    {
        return $this->container['census_tract_code'];
    }

    /**
     * Sets census_tract_code
     *
     * @param string|null $census_tract_code Census tract code
     *
     * @return self
     */
    public function setCensusTractCode($census_tract_code)
    {
        if (is_null($census_tract_code)) {
            throw new \InvalidArgumentException('non-nullable census_tract_code cannot be null');
        }
        if ((mb_strlen($census_tract_code) > 6)) {
            throw new \InvalidArgumentException('invalid length for $census_tract_code when calling GeoCode., must be smaller than or equal to 6.');
        }

        $this->container['census_tract_code'] = $census_tract_code;

        return $this;
    }

    /**
     * Gets cottage_indicator
     *
     * @return bool|null
     */
    public function getCottageIndicator()
    {
        return $this->container['cottage_indicator'];
    }

    /**
     * Sets cottage_indicator
     *
     * @param bool|null $cottage_indicator Indicates a home-based business
     *
     * @return self
     */
    public function setCottageIndicator($cottage_indicator)
    {
        if (is_null($cottage_indicator)) {
            throw new \InvalidArgumentException('non-nullable cottage_indicator cannot be null');
        }
        $this->container['cottage_indicator'] = $cottage_indicator;

        return $this;
    }

    /**
     * Gets congressional_district_code
     *
     * @return string|null
     */
    public function getCongressionalDistrictCode()
    {
        return $this->container['congressional_district_code'];
    }

    /**
     * Sets congressional_district_code
     *
     * @param string|null $congressional_district_code United States Congressional District code
     *
     * @return self
     */
    public function setCongressionalDistrictCode($congressional_district_code)
    {
        if (is_null($congressional_district_code)) {
            throw new \InvalidArgumentException('non-nullable congressional_district_code cannot be null');
        }
        if ((mb_strlen($congressional_district_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $congressional_district_code when calling GeoCode., must be smaller than or equal to 2.');
        }

        $this->container['congressional_district_code'] = $congressional_district_code;

        return $this;
    }

    /**
     * Gets date_last_reported
     *
     * @return string|null
     */
    public function getDateLastReported()
    {
        return $this->container['date_last_reported'];
    }

    /**
     * Sets date_last_reported
     *
     * @param string|null $date_last_reported Format: MM/DD/YYYY
     *
     * @return self
     */
    public function setDateLastReported($date_last_reported)
    {
        if (is_null($date_last_reported)) {
            throw new \InvalidArgumentException('non-nullable date_last_reported cannot be null');
        }
        if ((mb_strlen($date_last_reported) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_last_reported when calling GeoCode., must be smaller than or equal to 10.');
        }

        $this->container['date_last_reported'] = $date_last_reported;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer|string $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer|string $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer|string $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


