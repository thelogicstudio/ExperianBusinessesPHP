<?php
/**
 * EvSearchRequest
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
 * EvSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EvSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'evSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subcode' => 'string',
        'comments' => 'string',
        'bin' => 'string',
        'current_company_name' => 'string',
        'current_addr' => 'string',
        'current_city' => 'string',
        'current_state' => 'string',
        'current_zip5' => 'string',
        'current_zip_extension' => 'string',
        'current_phone' => 'string',
        'tax_id' => 'string',
        'alternate_company_name' => 'string',
        'alternate_addr' => 'string',
        'alternate_city' => 'string',
        'alternate_state' => 'string',
        'alternate_zip5' => 'string',
        'alternate_zip_extension' => 'string',
        'alternate_phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subcode' => null,
        'comments' => null,
        'bin' => null,
        'current_company_name' => null,
        'current_addr' => null,
        'current_city' => null,
        'current_state' => null,
        'current_zip5' => null,
        'current_zip_extension' => null,
        'current_phone' => null,
        'tax_id' => null,
        'alternate_company_name' => null,
        'alternate_addr' => null,
        'alternate_city' => null,
        'alternate_state' => null,
        'alternate_zip5' => null,
        'alternate_zip_extension' => null,
        'alternate_phone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'subcode' => false,
        'comments' => false,
        'bin' => false,
        'current_company_name' => false,
        'current_addr' => false,
        'current_city' => false,
        'current_state' => false,
        'current_zip5' => false,
        'current_zip_extension' => false,
        'current_phone' => false,
        'tax_id' => false,
        'alternate_company_name' => false,
        'alternate_addr' => false,
        'alternate_city' => false,
        'alternate_state' => false,
        'alternate_zip5' => false,
        'alternate_zip_extension' => false,
        'alternate_phone' => false
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
        'subcode' => 'subcode',
        'comments' => 'comments',
        'bin' => 'bin',
        'current_company_name' => 'currentCompanyName',
        'current_addr' => 'currentAddr',
        'current_city' => 'currentCity',
        'current_state' => 'currentState',
        'current_zip5' => 'currentZip5',
        'current_zip_extension' => 'currentZipExtension',
        'current_phone' => 'currentPhone',
        'tax_id' => 'taxId',
        'alternate_company_name' => 'alternateCompanyName',
        'alternate_addr' => 'alternateAddr',
        'alternate_city' => 'alternateCity',
        'alternate_state' => 'alternateState',
        'alternate_zip5' => 'alternateZip5',
        'alternate_zip_extension' => 'alternateZipExtension',
        'alternate_phone' => 'alternatePhone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subcode' => 'setSubcode',
        'comments' => 'setComments',
        'bin' => 'setBin',
        'current_company_name' => 'setCurrentCompanyName',
        'current_addr' => 'setCurrentAddr',
        'current_city' => 'setCurrentCity',
        'current_state' => 'setCurrentState',
        'current_zip5' => 'setCurrentZip5',
        'current_zip_extension' => 'setCurrentZipExtension',
        'current_phone' => 'setCurrentPhone',
        'tax_id' => 'setTaxId',
        'alternate_company_name' => 'setAlternateCompanyName',
        'alternate_addr' => 'setAlternateAddr',
        'alternate_city' => 'setAlternateCity',
        'alternate_state' => 'setAlternateState',
        'alternate_zip5' => 'setAlternateZip5',
        'alternate_zip_extension' => 'setAlternateZipExtension',
        'alternate_phone' => 'setAlternatePhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subcode' => 'getSubcode',
        'comments' => 'getComments',
        'bin' => 'getBin',
        'current_company_name' => 'getCurrentCompanyName',
        'current_addr' => 'getCurrentAddr',
        'current_city' => 'getCurrentCity',
        'current_state' => 'getCurrentState',
        'current_zip5' => 'getCurrentZip5',
        'current_zip_extension' => 'getCurrentZipExtension',
        'current_phone' => 'getCurrentPhone',
        'tax_id' => 'getTaxId',
        'alternate_company_name' => 'getAlternateCompanyName',
        'alternate_addr' => 'getAlternateAddr',
        'alternate_city' => 'getAlternateCity',
        'alternate_state' => 'getAlternateState',
        'alternate_zip5' => 'getAlternateZip5',
        'alternate_zip_extension' => 'getAlternateZipExtension',
        'alternate_phone' => 'getAlternatePhone'
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
        $this->setIfExists('subcode', $data ?? [], '0517614');
        $this->setIfExists('comments', $data ?? [], 'testing');
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('current_company_name', $data ?? [], 'Experian');
        $this->setIfExists('current_addr', $data ?? [], '475 ANTON BLVD');
        $this->setIfExists('current_city', $data ?? [], 'Costa Mesa');
        $this->setIfExists('current_state', $data ?? [], 'CA');
        $this->setIfExists('current_zip5', $data ?? [], '92626');
        $this->setIfExists('current_zip_extension', $data ?? [], '1111');
        $this->setIfExists('current_phone', $data ?? [], '9495673800');
        $this->setIfExists('tax_id', $data ?? [], '176970333');
        $this->setIfExists('alternate_company_name', $data ?? [], 'Experian');
        $this->setIfExists('alternate_addr', $data ?? [], '475 ANTON BLVD');
        $this->setIfExists('alternate_city', $data ?? [], 'Costa Mesa');
        $this->setIfExists('alternate_state', $data ?? [], 'CA');
        $this->setIfExists('alternate_zip5', $data ?? [], '92626');
        $this->setIfExists('alternate_zip_extension', $data ?? [], '1111');
        $this->setIfExists('alternate_phone', $data ?? [], '9495673800');
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

        if ($this->container['subcode'] === null) {
            $invalidProperties[] = "'subcode' can't be null";
        }
        if ((mb_strlen($this->container['subcode']) > 7)) {
            $invalidProperties[] = "invalid value for 'subcode', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 100)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['bin']) && (mb_strlen($this->container['bin']) > 9)) {
            $invalidProperties[] = "invalid value for 'bin', the character length must be smaller than or equal to 9.";
        }

        if ($this->container['current_company_name'] === null) {
            $invalidProperties[] = "'current_company_name' can't be null";
        }
        if ((mb_strlen($this->container['current_company_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'current_company_name', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['current_addr']) && (mb_strlen($this->container['current_addr']) > 60)) {
            $invalidProperties[] = "invalid value for 'current_addr', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['current_city']) && (mb_strlen($this->container['current_city']) > 40)) {
            $invalidProperties[] = "invalid value for 'current_city', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['current_state']) && (mb_strlen($this->container['current_state']) > 2)) {
            $invalidProperties[] = "invalid value for 'current_state', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['current_state']) && (mb_strlen($this->container['current_state']) < 2)) {
            $invalidProperties[] = "invalid value for 'current_state', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['current_zip5']) && (mb_strlen($this->container['current_zip5']) > 5)) {
            $invalidProperties[] = "invalid value for 'current_zip5', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['current_zip_extension']) && (mb_strlen($this->container['current_zip_extension']) > 5)) {
            $invalidProperties[] = "invalid value for 'current_zip_extension', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['current_phone']) && (mb_strlen($this->container['current_phone']) > 10)) {
            $invalidProperties[] = "invalid value for 'current_phone', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['tax_id']) && (mb_strlen($this->container['tax_id']) > 9)) {
            $invalidProperties[] = "invalid value for 'tax_id', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['alternate_company_name']) && (mb_strlen($this->container['alternate_company_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'alternate_company_name', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['alternate_addr']) && (mb_strlen($this->container['alternate_addr']) > 60)) {
            $invalidProperties[] = "invalid value for 'alternate_addr', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['alternate_city']) && (mb_strlen($this->container['alternate_city']) > 40)) {
            $invalidProperties[] = "invalid value for 'alternate_city', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['alternate_state']) && (mb_strlen($this->container['alternate_state']) > 2)) {
            $invalidProperties[] = "invalid value for 'alternate_state', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['alternate_state']) && (mb_strlen($this->container['alternate_state']) < 2)) {
            $invalidProperties[] = "invalid value for 'alternate_state', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['alternate_zip5']) && (mb_strlen($this->container['alternate_zip5']) > 5)) {
            $invalidProperties[] = "invalid value for 'alternate_zip5', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['alternate_zip_extension']) && (mb_strlen($this->container['alternate_zip_extension']) > 5)) {
            $invalidProperties[] = "invalid value for 'alternate_zip_extension', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['alternate_phone']) && (mb_strlen($this->container['alternate_phone']) > 10)) {
            $invalidProperties[] = "invalid value for 'alternate_phone', the character length must be smaller than or equal to 10.";
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
     * Gets subcode
     *
     * @return string
     */
    public function getSubcode()
    {
        return $this->container['subcode'];
    }

    /**
     * Sets subcode
     *
     * @param string $subcode Your Experian account subcode for billing purposes
     *
     * @return self
     */
    public function setSubcode($subcode)
    {
        if (is_null($subcode)) {
            throw new \InvalidArgumentException('non-nullable subcode cannot be null');
        }
        if ((mb_strlen($subcode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $subcode when calling EvSearchRequest., must be smaller than or equal to 7.');
        }

        $this->container['subcode'] = $subcode;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        if ((mb_strlen($comments) > 100)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling EvSearchRequest., must be smaller than or equal to 100.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin Experian Business Identification Number
     *
     * @return self
     */
    public function setBin($bin)
    {
        if (is_null($bin)) {
            throw new \InvalidArgumentException('non-nullable bin cannot be null');
        }
        if ((mb_strlen($bin) > 9)) {
            throw new \InvalidArgumentException('invalid length for $bin when calling EvSearchRequest., must be smaller than or equal to 9.');
        }

        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets current_company_name
     *
     * @return string
     */
    public function getCurrentCompanyName()
    {
        return $this->container['current_company_name'];
    }

    /**
     * Sets current_company_name
     *
     * @param string $current_company_name Business name (required)
     *
     * @return self
     */
    public function setCurrentCompanyName($current_company_name)
    {
        if (is_null($current_company_name)) {
            throw new \InvalidArgumentException('non-nullable current_company_name cannot be null');
        }
        if ((mb_strlen($current_company_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $current_company_name when calling EvSearchRequest., must be smaller than or equal to 120.');
        }

        $this->container['current_company_name'] = $current_company_name;

        return $this;
    }

    /**
     * Gets current_addr
     *
     * @return string|null
     */
    public function getCurrentAddr()
    {
        return $this->container['current_addr'];
    }

    /**
     * Sets current_addr
     *
     * @param string|null $current_addr Current street address of the business, include suite number if applicable
     *
     * @return self
     */
    public function setCurrentAddr($current_addr)
    {
        if (is_null($current_addr)) {
            throw new \InvalidArgumentException('non-nullable current_addr cannot be null');
        }
        if ((mb_strlen($current_addr) > 60)) {
            throw new \InvalidArgumentException('invalid length for $current_addr when calling EvSearchRequest., must be smaller than or equal to 60.');
        }

        $this->container['current_addr'] = $current_addr;

        return $this;
    }

    /**
     * Gets current_city
     *
     * @return string|null
     */
    public function getCurrentCity()
    {
        return $this->container['current_city'];
    }

    /**
     * Sets current_city
     *
     * @param string|null $current_city Business city
     *
     * @return self
     */
    public function setCurrentCity($current_city)
    {
        if (is_null($current_city)) {
            throw new \InvalidArgumentException('non-nullable current_city cannot be null');
        }
        if ((mb_strlen($current_city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $current_city when calling EvSearchRequest., must be smaller than or equal to 40.');
        }

        $this->container['current_city'] = $current_city;

        return $this;
    }

    /**
     * Gets current_state
     *
     * @return string|null
     */
    public function getCurrentState()
    {
        return $this->container['current_state'];
    }

    /**
     * Sets current_state
     *
     * @param string|null $current_state Business state code (e.g. CA)
     *
     * @return self
     */
    public function setCurrentState($current_state)
    {
        if (is_null($current_state)) {
            throw new \InvalidArgumentException('non-nullable current_state cannot be null');
        }
        if ((mb_strlen($current_state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $current_state when calling EvSearchRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($current_state) < 2)) {
            throw new \InvalidArgumentException('invalid length for $current_state when calling EvSearchRequest., must be bigger than or equal to 2.');
        }

        $this->container['current_state'] = $current_state;

        return $this;
    }

    /**
     * Gets current_zip5
     *
     * @return string|null
     */
    public function getCurrentZip5()
    {
        return $this->container['current_zip5'];
    }

    /**
     * Sets current_zip5
     *
     * @param string|null $current_zip5 5-digit zip code
     *
     * @return self
     */
    public function setCurrentZip5($current_zip5)
    {
        if (is_null($current_zip5)) {
            throw new \InvalidArgumentException('non-nullable current_zip5 cannot be null');
        }
        if ((mb_strlen($current_zip5) > 5)) {
            throw new \InvalidArgumentException('invalid length for $current_zip5 when calling EvSearchRequest., must be smaller than or equal to 5.');
        }

        $this->container['current_zip5'] = $current_zip5;

        return $this;
    }

    /**
     * Gets current_zip_extension
     *
     * @return string|null
     */
    public function getCurrentZipExtension()
    {
        return $this->container['current_zip_extension'];
    }

    /**
     * Sets current_zip_extension
     *
     * @param string|null $current_zip_extension 4-digit zip code extension
     *
     * @return self
     */
    public function setCurrentZipExtension($current_zip_extension)
    {
        if (is_null($current_zip_extension)) {
            throw new \InvalidArgumentException('non-nullable current_zip_extension cannot be null');
        }
        if ((mb_strlen($current_zip_extension) > 5)) {
            throw new \InvalidArgumentException('invalid length for $current_zip_extension when calling EvSearchRequest., must be smaller than or equal to 5.');
        }

        $this->container['current_zip_extension'] = $current_zip_extension;

        return $this;
    }

    /**
     * Gets current_phone
     *
     * @return string|null
     */
    public function getCurrentPhone()
    {
        return $this->container['current_phone'];
    }

    /**
     * Sets current_phone
     *
     * @param string|null $current_phone 10-digit phone number
     *
     * @return self
     */
    public function setCurrentPhone($current_phone)
    {
        if (is_null($current_phone)) {
            throw new \InvalidArgumentException('non-nullable current_phone cannot be null');
        }
        if ((mb_strlen($current_phone) > 10)) {
            throw new \InvalidArgumentException('invalid length for $current_phone when calling EvSearchRequest., must be smaller than or equal to 10.');
        }

        $this->container['current_phone'] = $current_phone;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id 9-digit federal tax ID or Employer Identification Number
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        if ((mb_strlen($tax_id) > 9)) {
            throw new \InvalidArgumentException('invalid length for $tax_id when calling EvSearchRequest., must be smaller than or equal to 9.');
        }

        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets alternate_company_name
     *
     * @return string|null
     */
    public function getAlternateCompanyName()
    {
        return $this->container['alternate_company_name'];
    }

    /**
     * Sets alternate_company_name
     *
     * @param string|null $alternate_company_name Business name (required)
     *
     * @return self
     */
    public function setAlternateCompanyName($alternate_company_name)
    {
        if (is_null($alternate_company_name)) {
            throw new \InvalidArgumentException('non-nullable alternate_company_name cannot be null');
        }
        if ((mb_strlen($alternate_company_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $alternate_company_name when calling EvSearchRequest., must be smaller than or equal to 120.');
        }

        $this->container['alternate_company_name'] = $alternate_company_name;

        return $this;
    }

    /**
     * Gets alternate_addr
     *
     * @return string|null
     */
    public function getAlternateAddr()
    {
        return $this->container['alternate_addr'];
    }

    /**
     * Sets alternate_addr
     *
     * @param string|null $alternate_addr Current street address of the business, include suite number if applicable
     *
     * @return self
     */
    public function setAlternateAddr($alternate_addr)
    {
        if (is_null($alternate_addr)) {
            throw new \InvalidArgumentException('non-nullable alternate_addr cannot be null');
        }
        if ((mb_strlen($alternate_addr) > 60)) {
            throw new \InvalidArgumentException('invalid length for $alternate_addr when calling EvSearchRequest., must be smaller than or equal to 60.');
        }

        $this->container['alternate_addr'] = $alternate_addr;

        return $this;
    }

    /**
     * Gets alternate_city
     *
     * @return string|null
     */
    public function getAlternateCity()
    {
        return $this->container['alternate_city'];
    }

    /**
     * Sets alternate_city
     *
     * @param string|null $alternate_city Business city
     *
     * @return self
     */
    public function setAlternateCity($alternate_city)
    {
        if (is_null($alternate_city)) {
            throw new \InvalidArgumentException('non-nullable alternate_city cannot be null');
        }
        if ((mb_strlen($alternate_city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $alternate_city when calling EvSearchRequest., must be smaller than or equal to 40.');
        }

        $this->container['alternate_city'] = $alternate_city;

        return $this;
    }

    /**
     * Gets alternate_state
     *
     * @return string|null
     */
    public function getAlternateState()
    {
        return $this->container['alternate_state'];
    }

    /**
     * Sets alternate_state
     *
     * @param string|null $alternate_state Business state code (e.g. CA)
     *
     * @return self
     */
    public function setAlternateState($alternate_state)
    {
        if (is_null($alternate_state)) {
            throw new \InvalidArgumentException('non-nullable alternate_state cannot be null');
        }
        if ((mb_strlen($alternate_state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $alternate_state when calling EvSearchRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($alternate_state) < 2)) {
            throw new \InvalidArgumentException('invalid length for $alternate_state when calling EvSearchRequest., must be bigger than or equal to 2.');
        }

        $this->container['alternate_state'] = $alternate_state;

        return $this;
    }

    /**
     * Gets alternate_zip5
     *
     * @return string|null
     */
    public function getAlternateZip5()
    {
        return $this->container['alternate_zip5'];
    }

    /**
     * Sets alternate_zip5
     *
     * @param string|null $alternate_zip5 5-digit zip code
     *
     * @return self
     */
    public function setAlternateZip5($alternate_zip5)
    {
        if (is_null($alternate_zip5)) {
            throw new \InvalidArgumentException('non-nullable alternate_zip5 cannot be null');
        }
        if ((mb_strlen($alternate_zip5) > 5)) {
            throw new \InvalidArgumentException('invalid length for $alternate_zip5 when calling EvSearchRequest., must be smaller than or equal to 5.');
        }

        $this->container['alternate_zip5'] = $alternate_zip5;

        return $this;
    }

    /**
     * Gets alternate_zip_extension
     *
     * @return string|null
     */
    public function getAlternateZipExtension()
    {
        return $this->container['alternate_zip_extension'];
    }

    /**
     * Sets alternate_zip_extension
     *
     * @param string|null $alternate_zip_extension 4-digit zip code extension
     *
     * @return self
     */
    public function setAlternateZipExtension($alternate_zip_extension)
    {
        if (is_null($alternate_zip_extension)) {
            throw new \InvalidArgumentException('non-nullable alternate_zip_extension cannot be null');
        }
        if ((mb_strlen($alternate_zip_extension) > 5)) {
            throw new \InvalidArgumentException('invalid length for $alternate_zip_extension when calling EvSearchRequest., must be smaller than or equal to 5.');
        }

        $this->container['alternate_zip_extension'] = $alternate_zip_extension;

        return $this;
    }

    /**
     * Gets alternate_phone
     *
     * @return string|null
     */
    public function getAlternatePhone()
    {
        return $this->container['alternate_phone'];
    }

    /**
     * Sets alternate_phone
     *
     * @param string|null $alternate_phone 10-digit phone number
     *
     * @return self
     */
    public function setAlternatePhone($alternate_phone)
    {
        if (is_null($alternate_phone)) {
            throw new \InvalidArgumentException('non-nullable alternate_phone cannot be null');
        }
        if ((mb_strlen($alternate_phone) > 10)) {
            throw new \InvalidArgumentException('invalid length for $alternate_phone when calling EvSearchRequest., must be smaller than or equal to 10.');
        }

        $this->container['alternate_phone'] = $alternate_phone;

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


