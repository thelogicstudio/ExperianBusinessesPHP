<?php
/**
 * EvLinkageResultLinkageTreeRangeDataRecordListInner
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
 * EvLinkageResultLinkageTreeRangeDataRecordListInner Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EvLinkageResultLinkageTreeRangeDataRecordListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'evLinkageResult_linkageTreeRange_dataRecordList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'linkage' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageDetails',
        'business' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessDetails',
        'location' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetails',
        'model_score_list' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageModelScoreList',
        'naics_list' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageNAICSList',
        'sics_list' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageSICList',
        'corporate_registration' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageCorporateRegistration',
        'corporate_financial_data' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageCorporateFinancialData',
        'gdn_list' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageGDNDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'linkage' => null,
        'business' => null,
        'location' => null,
        'model_score_list' => null,
        'naics_list' => null,
        'sics_list' => null,
        'corporate_registration' => null,
        'corporate_financial_data' => null,
        'gdn_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'linkage' => false,
        'business' => false,
        'location' => false,
        'model_score_list' => false,
        'naics_list' => false,
        'sics_list' => false,
        'corporate_registration' => false,
        'corporate_financial_data' => false,
        'gdn_list' => false
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
        'linkage' => 'linkage',
        'business' => 'business',
        'location' => 'location',
        'model_score_list' => 'modelScoreList',
        'naics_list' => 'naicsList',
        'sics_list' => 'sicsList',
        'corporate_registration' => 'corporateRegistration',
        'corporate_financial_data' => 'corporateFinancialData',
        'gdn_list' => 'gdnList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linkage' => 'setLinkage',
        'business' => 'setBusiness',
        'location' => 'setLocation',
        'model_score_list' => 'setModelScoreList',
        'naics_list' => 'setNaicsList',
        'sics_list' => 'setSicsList',
        'corporate_registration' => 'setCorporateRegistration',
        'corporate_financial_data' => 'setCorporateFinancialData',
        'gdn_list' => 'setGdnList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linkage' => 'getLinkage',
        'business' => 'getBusiness',
        'location' => 'getLocation',
        'model_score_list' => 'getModelScoreList',
        'naics_list' => 'getNaicsList',
        'sics_list' => 'getSicsList',
        'corporate_registration' => 'getCorporateRegistration',
        'corporate_financial_data' => 'getCorporateFinancialData',
        'gdn_list' => 'getGdnList'
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
        $this->setIfExists('linkage', $data ?? [], null);
        $this->setIfExists('business', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('model_score_list', $data ?? [], null);
        $this->setIfExists('naics_list', $data ?? [], null);
        $this->setIfExists('sics_list', $data ?? [], null);
        $this->setIfExists('corporate_registration', $data ?? [], null);
        $this->setIfExists('corporate_financial_data', $data ?? [], null);
        $this->setIfExists('gdn_list', $data ?? [], null);
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
     * Gets linkage
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageDetails|null
     */
    public function getLinkage()
    {
        return $this->container['linkage'];
    }

    /**
     * Sets linkage
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageDetails|null $linkage linkage
     *
     * @return self
     */
    public function setLinkage($linkage)
    {
        if (is_null($linkage)) {
            throw new \InvalidArgumentException('non-nullable linkage cannot be null');
        }
        $this->container['linkage'] = $linkage;

        return $this;
    }

    /**
     * Gets business
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessDetails|null
     */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
     * Sets business
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessDetails|null $business business
     *
     * @return self
     */
    public function setBusiness($business)
    {
        if (is_null($business)) {
            throw new \InvalidArgumentException('non-nullable business cannot be null');
        }
        $this->container['business'] = $business;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetails|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageLocationDetails|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets model_score_list
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageModelScoreList|null
     */
    public function getModelScoreList()
    {
        return $this->container['model_score_list'];
    }

    /**
     * Sets model_score_list
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageModelScoreList|null $model_score_list model_score_list
     *
     * @return self
     */
    public function setModelScoreList($model_score_list)
    {
        if (is_null($model_score_list)) {
            throw new \InvalidArgumentException('non-nullable model_score_list cannot be null');
        }
        $this->container['model_score_list'] = $model_score_list;

        return $this;
    }

    /**
     * Gets naics_list
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageNAICSList|null
     */
    public function getNaicsList()
    {
        return $this->container['naics_list'];
    }

    /**
     * Sets naics_list
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageNAICSList|null $naics_list naics_list
     *
     * @return self
     */
    public function setNaicsList($naics_list)
    {
        if (is_null($naics_list)) {
            throw new \InvalidArgumentException('non-nullable naics_list cannot be null');
        }
        $this->container['naics_list'] = $naics_list;

        return $this;
    }

    /**
     * Gets sics_list
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageSICList|null
     */
    public function getSicsList()
    {
        return $this->container['sics_list'];
    }

    /**
     * Sets sics_list
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageSICList|null $sics_list sics_list
     *
     * @return self
     */
    public function setSicsList($sics_list)
    {
        if (is_null($sics_list)) {
            throw new \InvalidArgumentException('non-nullable sics_list cannot be null');
        }
        $this->container['sics_list'] = $sics_list;

        return $this;
    }

    /**
     * Gets corporate_registration
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageCorporateRegistration|null
     */
    public function getCorporateRegistration()
    {
        return $this->container['corporate_registration'];
    }

    /**
     * Sets corporate_registration
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageCorporateRegistration|null $corporate_registration corporate_registration
     *
     * @return self
     */
    public function setCorporateRegistration($corporate_registration)
    {
        if (is_null($corporate_registration)) {
            throw new \InvalidArgumentException('non-nullable corporate_registration cannot be null');
        }
        $this->container['corporate_registration'] = $corporate_registration;

        return $this;
    }

    /**
     * Gets corporate_financial_data
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageCorporateFinancialData|null
     */
    public function getCorporateFinancialData()
    {
        return $this->container['corporate_financial_data'];
    }

    /**
     * Sets corporate_financial_data
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageCorporateFinancialData|null $corporate_financial_data corporate_financial_data
     *
     * @return self
     */
    public function setCorporateFinancialData($corporate_financial_data)
    {
        if (is_null($corporate_financial_data)) {
            throw new \InvalidArgumentException('non-nullable corporate_financial_data cannot be null');
        }
        $this->container['corporate_financial_data'] = $corporate_financial_data;

        return $this;
    }

    /**
     * Gets gdn_list
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageGDNDetails|null
     */
    public function getGdnList()
    {
        return $this->container['gdn_list'];
    }

    /**
     * Sets gdn_list
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageGDNDetails|null $gdn_list gdn_list
     *
     * @return self
     */
    public function setGdnList($gdn_list)
    {
        if (is_null($gdn_list)) {
            throw new \InvalidArgumentException('non-nullable gdn_list cannot be null');
        }
        $this->container['gdn_list'] = $gdn_list;

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


