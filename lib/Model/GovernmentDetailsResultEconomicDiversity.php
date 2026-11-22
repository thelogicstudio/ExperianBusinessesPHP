<?php
/**
 * GovernmentDetailsResultEconomicDiversity
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
 * GovernmentDetailsResultEconomicDiversity Class Doc Comment
 *
 * @category Class
 * @description Highlights details regarding whether the business is certified for participation in programs seeking to increase economic diversity in contracting
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GovernmentDetailsResultEconomicDiversity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GovernmentDetailsResult_economicDiversity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mbe' => false,
        'wbe' => false,
        'dbe' => false,
        'sba8a' => false,
        'hubzone' => false,
        'vet' => false,
        'dvet' => false,
        'hbcu' => false,
        'sdb' => false,
        'sba' => false,
        'lsa' => false
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
        $this->setIfExists('mbe', $data ?? [], null);
        $this->setIfExists('wbe', $data ?? [], null);
        $this->setIfExists('dbe', $data ?? [], null);
        $this->setIfExists('sba8a', $data ?? [], null);
        $this->setIfExists('hubzone', $data ?? [], null);
        $this->setIfExists('vet', $data ?? [], null);
        $this->setIfExists('dvet', $data ?? [], null);
        $this->setIfExists('hbcu', $data ?? [], null);
        $this->setIfExists('sdb', $data ?? [], null);
        $this->setIfExists('sba', $data ?? [], null);
        $this->setIfExists('lsa', $data ?? [], null);
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
     * @return bool|null
     */
    public function getMbe()
    {
        return $this->container['mbe'];
    }

    /**
     * Sets mbe
     *
     * @param bool|null $mbe Minority-Owned Business Enterprise
     *
     * @return self
     */
    public function setMbe($mbe)
    {
        if (is_null($mbe)) {
            throw new \InvalidArgumentException('non-nullable mbe cannot be null');
        }
        $this->container['mbe'] = $mbe;

        return $this;
    }

    /**
     * Gets wbe
     *
     * @return bool|null
     */
    public function getWbe()
    {
        return $this->container['wbe'];
    }

    /**
     * Sets wbe
     *
     * @param bool|null $wbe Woman-Owned Business Enterprise
     *
     * @return self
     */
    public function setWbe($wbe)
    {
        if (is_null($wbe)) {
            throw new \InvalidArgumentException('non-nullable wbe cannot be null');
        }
        $this->container['wbe'] = $wbe;

        return $this;
    }

    /**
     * Gets dbe
     *
     * @return bool|null
     */
    public function getDbe()
    {
        return $this->container['dbe'];
    }

    /**
     * Sets dbe
     *
     * @param bool|null $dbe Disadvantaged Business Enterprise
     *
     * @return self
     */
    public function setDbe($dbe)
    {
        if (is_null($dbe)) {
            throw new \InvalidArgumentException('non-nullable dbe cannot be null');
        }
        $this->container['dbe'] = $dbe;

        return $this;
    }

    /**
     * Gets sba8a
     *
     * @return bool|null
     */
    public function getSba8a()
    {
        return $this->container['sba8a'];
    }

    /**
     * Sets sba8a
     *
     * @param bool|null $sba8a Participant in SBA 8A program
     *
     * @return self
     */
    public function setSba8a($sba8a)
    {
        if (is_null($sba8a)) {
            throw new \InvalidArgumentException('non-nullable sba8a cannot be null');
        }
        $this->container['sba8a'] = $sba8a;

        return $this;
    }

    /**
     * Gets hubzone
     *
     * @return bool|null
     */
    public function getHubzone()
    {
        return $this->container['hubzone'];
    }

    /**
     * Sets hubzone
     *
     * @param bool|null $hubzone Historically Underutilized Business
     *
     * @return self
     */
    public function setHubzone($hubzone)
    {
        if (is_null($hubzone)) {
            throw new \InvalidArgumentException('non-nullable hubzone cannot be null');
        }
        $this->container['hubzone'] = $hubzone;

        return $this;
    }

    /**
     * Gets vet
     *
     * @return bool|null
     */
    public function getVet()
    {
        return $this->container['vet'];
    }

    /**
     * Sets vet
     *
     * @param bool|null $vet Veteran-Owned Business Enterprise
     *
     * @return self
     */
    public function setVet($vet)
    {
        if (is_null($vet)) {
            throw new \InvalidArgumentException('non-nullable vet cannot be null');
        }
        $this->container['vet'] = $vet;

        return $this;
    }

    /**
     * Gets dvet
     *
     * @return bool|null
     */
    public function getDvet()
    {
        return $this->container['dvet'];
    }

    /**
     * Sets dvet
     *
     * @param bool|null $dvet Service Disabled Veteran-Owned Business Enterprise
     *
     * @return self
     */
    public function setDvet($dvet)
    {
        if (is_null($dvet)) {
            throw new \InvalidArgumentException('non-nullable dvet cannot be null');
        }
        $this->container['dvet'] = $dvet;

        return $this;
    }

    /**
     * Gets hbcu
     *
     * @return bool|null
     */
    public function getHbcu()
    {
        return $this->container['hbcu'];
    }

    /**
     * Sets hbcu
     *
     * @param bool|null $hbcu Historical Black Colleges and Universities. Institutions of higher education in the United States that were established before 1964 with the intention of serving the black community
     *
     * @return self
     */
    public function setHbcu($hbcu)
    {
        if (is_null($hbcu)) {
            throw new \InvalidArgumentException('non-nullable hbcu cannot be null');
        }
        $this->container['hbcu'] = $hbcu;

        return $this;
    }

    /**
     * Gets sdb
     *
     * @return bool|null
     */
    public function getSdb()
    {
        return $this->container['sdb'];
    }

    /**
     * Sets sdb
     *
     * @param bool|null $sdb Small Disadvantage Business Enterprise
     *
     * @return self
     */
    public function setSdb($sdb)
    {
        if (is_null($sdb)) {
            throw new \InvalidArgumentException('non-nullable sdb cannot be null');
        }
        $this->container['sdb'] = $sdb;

        return $this;
    }

    /**
     * Gets sba
     *
     * @return bool|null
     */
    public function getSba()
    {
        return $this->container['sba'];
    }

    /**
     * Sets sba
     *
     * @param bool|null $sba Small Business Administration Enterprise
     *
     * @return self
     */
    public function setSba($sba)
    {
        if (is_null($sba)) {
            throw new \InvalidArgumentException('non-nullable sba cannot be null');
        }
        $this->container['sba'] = $sba;

        return $this;
    }

    /**
     * Gets lsa
     *
     * @return bool|null
     */
    public function getLsa()
    {
        return $this->container['lsa'];
    }

    /**
     * Sets lsa
     *
     * @param bool|null $lsa Labor Surplus Area
     *
     * @return self
     */
    public function setLsa($lsa)
    {
        if (is_null($lsa)) {
            throw new \InvalidArgumentException('non-nullable lsa cannot be null');
        }
        $this->container['lsa'] = $lsa;

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


