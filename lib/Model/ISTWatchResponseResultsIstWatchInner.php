<?php
/**
 * ISTWatchResponseResultsIstWatchInner
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
 * ISTWatchResponseResultsIstWatchInner Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ISTWatchResponseResultsIstWatchInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ISTWatchResponse_results_istWatch_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'string',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'dup_id' => 'string',
        'phone' => 'string',
        'date_entered' => 'string',
        'memo' => 'string',
        'balkans' => 'bool',
        'bpipa' => 'bool',
        'cuba' => 'bool',
        'dpl' => 'bool',
        'frym' => 'bool',
        'fto' => 'bool',
        'iran' => 'bool',
        'iraq' => 'bool',
        'libya' => 'bool',
        'n_korea' => 'bool',
        'sdgt' => 'bool',
        'sdnt' => 'bool',
        'sdntk' => 'bool',
        'sdt' => 'bool',
        'sudan' => 'bool',
        'taliban' => 'bool',
        'unita' => 'bool',
        'sdn_type' => 'string',
        'program' => 'string',
        'title' => 'string',
        'call_sign' => 'string',
        'vess_type' => 'string',
        'tonnage' => 'string',
        'grt' => 'string',
        'vess_flag' => 'string',
        'vess_owner' => 'string',
        'add_num' => 'string',
        'add_remarks' => 'string',
        'postal_code' => 'string',
        'effective_date' => 'string',
        'expiration_date' => 'string',
        'standard_order' => 'string',
        'name_search_key' => 'string',
        'score' => 'string',
        'return_codes' => 'string',
        'error_desc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'street' => null,
        'city' => null,
        'state' => null,
        'country' => null,
        'dup_id' => null,
        'phone' => null,
        'date_entered' => null,
        'memo' => null,
        'balkans' => null,
        'bpipa' => null,
        'cuba' => null,
        'dpl' => null,
        'frym' => null,
        'fto' => null,
        'iran' => null,
        'iraq' => null,
        'libya' => null,
        'n_korea' => null,
        'sdgt' => null,
        'sdnt' => null,
        'sdntk' => null,
        'sdt' => null,
        'sudan' => null,
        'taliban' => null,
        'unita' => null,
        'sdn_type' => null,
        'program' => null,
        'title' => null,
        'call_sign' => null,
        'vess_type' => null,
        'tonnage' => null,
        'grt' => null,
        'vess_flag' => null,
        'vess_owner' => null,
        'add_num' => null,
        'add_remarks' => null,
        'postal_code' => null,
        'effective_date' => null,
        'expiration_date' => null,
        'standard_order' => null,
        'name_search_key' => null,
        'score' => null,
        'return_codes' => null,
        'error_desc' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'id' => false,
        'street' => false,
        'city' => false,
        'state' => false,
        'country' => false,
        'dup_id' => false,
        'phone' => false,
        'date_entered' => false,
        'memo' => false,
        'balkans' => false,
        'bpipa' => false,
        'cuba' => false,
        'dpl' => false,
        'frym' => false,
        'fto' => false,
        'iran' => false,
        'iraq' => false,
        'libya' => false,
        'n_korea' => false,
        'sdgt' => false,
        'sdnt' => false,
        'sdntk' => false,
        'sdt' => false,
        'sudan' => false,
        'taliban' => false,
        'unita' => false,
        'sdn_type' => false,
        'program' => false,
        'title' => false,
        'call_sign' => false,
        'vess_type' => false,
        'tonnage' => false,
        'grt' => false,
        'vess_flag' => false,
        'vess_owner' => false,
        'add_num' => false,
        'add_remarks' => false,
        'postal_code' => false,
        'effective_date' => false,
        'expiration_date' => false,
        'standard_order' => false,
        'name_search_key' => false,
        'score' => false,
        'return_codes' => false,
        'error_desc' => false
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
        'name' => 'name',
        'id' => 'id',
        'street' => 'street',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'dup_id' => 'dupId',
        'phone' => 'phone',
        'date_entered' => 'dateEntered',
        'memo' => 'memo',
        'balkans' => 'balkans',
        'bpipa' => 'bpipa',
        'cuba' => 'cuba',
        'dpl' => 'dpl',
        'frym' => 'frym',
        'fto' => 'fto',
        'iran' => 'iran',
        'iraq' => 'iraq',
        'libya' => 'libya',
        'n_korea' => 'nKorea',
        'sdgt' => 'sdgt',
        'sdnt' => 'sdnt',
        'sdntk' => 'sdntk',
        'sdt' => 'sdt',
        'sudan' => 'sudan',
        'taliban' => 'taliban',
        'unita' => 'unita',
        'sdn_type' => 'sdnType',
        'program' => 'program',
        'title' => 'title',
        'call_sign' => 'callSign',
        'vess_type' => 'vessType',
        'tonnage' => 'tonnage',
        'grt' => 'grt',
        'vess_flag' => 'vessFlag',
        'vess_owner' => 'vessOwner',
        'add_num' => 'addNum',
        'add_remarks' => 'addRemarks',
        'postal_code' => 'postalCode',
        'effective_date' => 'effectiveDate',
        'expiration_date' => 'expirationDate',
        'standard_order' => 'standardOrder',
        'name_search_key' => 'nameSearchKey',
        'score' => 'score',
        'return_codes' => 'returnCodes',
        'error_desc' => 'errorDesc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry',
        'dup_id' => 'setDupId',
        'phone' => 'setPhone',
        'date_entered' => 'setDateEntered',
        'memo' => 'setMemo',
        'balkans' => 'setBalkans',
        'bpipa' => 'setBpipa',
        'cuba' => 'setCuba',
        'dpl' => 'setDpl',
        'frym' => 'setFrym',
        'fto' => 'setFto',
        'iran' => 'setIran',
        'iraq' => 'setIraq',
        'libya' => 'setLibya',
        'n_korea' => 'setNKorea',
        'sdgt' => 'setSdgt',
        'sdnt' => 'setSdnt',
        'sdntk' => 'setSdntk',
        'sdt' => 'setSdt',
        'sudan' => 'setSudan',
        'taliban' => 'setTaliban',
        'unita' => 'setUnita',
        'sdn_type' => 'setSdnType',
        'program' => 'setProgram',
        'title' => 'setTitle',
        'call_sign' => 'setCallSign',
        'vess_type' => 'setVessType',
        'tonnage' => 'setTonnage',
        'grt' => 'setGrt',
        'vess_flag' => 'setVessFlag',
        'vess_owner' => 'setVessOwner',
        'add_num' => 'setAddNum',
        'add_remarks' => 'setAddRemarks',
        'postal_code' => 'setPostalCode',
        'effective_date' => 'setEffectiveDate',
        'expiration_date' => 'setExpirationDate',
        'standard_order' => 'setStandardOrder',
        'name_search_key' => 'setNameSearchKey',
        'score' => 'setScore',
        'return_codes' => 'setReturnCodes',
        'error_desc' => 'setErrorDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry',
        'dup_id' => 'getDupId',
        'phone' => 'getPhone',
        'date_entered' => 'getDateEntered',
        'memo' => 'getMemo',
        'balkans' => 'getBalkans',
        'bpipa' => 'getBpipa',
        'cuba' => 'getCuba',
        'dpl' => 'getDpl',
        'frym' => 'getFrym',
        'fto' => 'getFto',
        'iran' => 'getIran',
        'iraq' => 'getIraq',
        'libya' => 'getLibya',
        'n_korea' => 'getNKorea',
        'sdgt' => 'getSdgt',
        'sdnt' => 'getSdnt',
        'sdntk' => 'getSdntk',
        'sdt' => 'getSdt',
        'sudan' => 'getSudan',
        'taliban' => 'getTaliban',
        'unita' => 'getUnita',
        'sdn_type' => 'getSdnType',
        'program' => 'getProgram',
        'title' => 'getTitle',
        'call_sign' => 'getCallSign',
        'vess_type' => 'getVessType',
        'tonnage' => 'getTonnage',
        'grt' => 'getGrt',
        'vess_flag' => 'getVessFlag',
        'vess_owner' => 'getVessOwner',
        'add_num' => 'getAddNum',
        'add_remarks' => 'getAddRemarks',
        'postal_code' => 'getPostalCode',
        'effective_date' => 'getEffectiveDate',
        'expiration_date' => 'getExpirationDate',
        'standard_order' => 'getStandardOrder',
        'name_search_key' => 'getNameSearchKey',
        'score' => 'getScore',
        'return_codes' => 'getReturnCodes',
        'error_desc' => 'getErrorDesc'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('dup_id', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('date_entered', $data ?? [], null);
        $this->setIfExists('memo', $data ?? [], null);
        $this->setIfExists('balkans', $data ?? [], null);
        $this->setIfExists('bpipa', $data ?? [], null);
        $this->setIfExists('cuba', $data ?? [], null);
        $this->setIfExists('dpl', $data ?? [], null);
        $this->setIfExists('frym', $data ?? [], null);
        $this->setIfExists('fto', $data ?? [], null);
        $this->setIfExists('iran', $data ?? [], null);
        $this->setIfExists('iraq', $data ?? [], null);
        $this->setIfExists('libya', $data ?? [], null);
        $this->setIfExists('n_korea', $data ?? [], null);
        $this->setIfExists('sdgt', $data ?? [], null);
        $this->setIfExists('sdnt', $data ?? [], null);
        $this->setIfExists('sdntk', $data ?? [], null);
        $this->setIfExists('sdt', $data ?? [], null);
        $this->setIfExists('sudan', $data ?? [], null);
        $this->setIfExists('taliban', $data ?? [], null);
        $this->setIfExists('unita', $data ?? [], null);
        $this->setIfExists('sdn_type', $data ?? [], null);
        $this->setIfExists('program', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('call_sign', $data ?? [], null);
        $this->setIfExists('vess_type', $data ?? [], null);
        $this->setIfExists('tonnage', $data ?? [], null);
        $this->setIfExists('grt', $data ?? [], null);
        $this->setIfExists('vess_flag', $data ?? [], null);
        $this->setIfExists('vess_owner', $data ?? [], null);
        $this->setIfExists('add_num', $data ?? [], null);
        $this->setIfExists('add_remarks', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('effective_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('standard_order', $data ?? [], null);
        $this->setIfExists('name_search_key', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('return_codes', $data ?? [], null);
        $this->setIfExists('error_desc', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of sanctioned entity
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Primary list identification number (0 indicates a DPV entry, 2 – OSFI entry, 4 – UK entry, 00 – PEP entry, 02 – EPLS entry, all others – OFAC entries)
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Street address of sanctioned entity
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City of sanctioned entity
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State or province of sanctioned entity
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country name/abbreviation of sanctioned entity
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets dup_id
     *
     * @return string|null
     */
    public function getDupId()
    {
        return $this->container['dup_id'];
    }

    /**
     * Sets dup_id
     *
     * @param string|null $dup_id Secondary list identification number (alias number)
     *
     * @return self
     */
    public function setDupId($dup_id)
    {
        if (is_null($dup_id)) {
            throw new \InvalidArgumentException('non-nullable dup_id cannot be null');
        }
        $this->container['dup_id'] = $dup_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone number of sanctioned entity
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets date_entered
     *
     * @return string|null
     */
    public function getDateEntered()
    {
        return $this->container['date_entered'];
    }

    /**
     * Sets date_entered
     *
     * @param string|null $date_entered Sanctioned entity’s entered or last modified date
     *
     * @return self
     */
    public function setDateEntered($date_entered)
    {
        if (is_null($date_entered)) {
            throw new \InvalidArgumentException('non-nullable date_entered cannot be null');
        }
        $this->container['date_entered'] = $date_entered;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo Remarks (date/place of birth, nationality, passport number and other identifying information)
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (is_null($memo)) {
            throw new \InvalidArgumentException('non-nullable memo cannot be null');
        }
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets balkans
     *
     * @return bool|null
     */
    public function getBalkans()
    {
        return $this->container['balkans'];
    }

    /**
     * Sets balkans
     *
     * @param bool|null $balkans Affiliation with the BALKANS sanctions program (true/false)
     *
     * @return self
     */
    public function setBalkans($balkans)
    {
        if (is_null($balkans)) {
            throw new \InvalidArgumentException('non-nullable balkans cannot be null');
        }
        $this->container['balkans'] = $balkans;

        return $this;
    }

    /**
     * Gets bpipa
     *
     * @return bool|null
     */
    public function getBpipa()
    {
        return $this->container['bpipa'];
    }

    /**
     * Sets bpipa
     *
     * @param bool|null $bpipa Affiliation with the BPI-PA sanctions program (true/false)
     *
     * @return self
     */
    public function setBpipa($bpipa)
    {
        if (is_null($bpipa)) {
            throw new \InvalidArgumentException('non-nullable bpipa cannot be null');
        }
        $this->container['bpipa'] = $bpipa;

        return $this;
    }

    /**
     * Gets cuba
     *
     * @return bool|null
     */
    public function getCuba()
    {
        return $this->container['cuba'];
    }

    /**
     * Sets cuba
     *
     * @param bool|null $cuba Affiliation with the CUBA sanctions program (true/false)
     *
     * @return self
     */
    public function setCuba($cuba)
    {
        if (is_null($cuba)) {
            throw new \InvalidArgumentException('non-nullable cuba cannot be null');
        }
        $this->container['cuba'] = $cuba;

        return $this;
    }

    /**
     * Gets dpl
     *
     * @return bool|null
     */
    public function getDpl()
    {
        return $this->container['dpl'];
    }

    /**
     * Sets dpl
     *
     * @param bool|null $dpl Listed on the denied persons list (true/false)
     *
     * @return self
     */
    public function setDpl($dpl)
    {
        if (is_null($dpl)) {
            throw new \InvalidArgumentException('non-nullable dpl cannot be null');
        }
        $this->container['dpl'] = $dpl;

        return $this;
    }

    /**
     * Gets frym
     *
     * @return bool|null
     */
    public function getFrym()
    {
        return $this->container['frym'];
    }

    /**
     * Sets frym
     *
     * @param bool|null $frym Affiliation with the FRYM sanctions program (true/false)
     *
     * @return self
     */
    public function setFrym($frym)
    {
        if (is_null($frym)) {
            throw new \InvalidArgumentException('non-nullable frym cannot be null');
        }
        $this->container['frym'] = $frym;

        return $this;
    }

    /**
     * Gets fto
     *
     * @return bool|null
     */
    public function getFto()
    {
        return $this->container['fto'];
    }

    /**
     * Sets fto
     *
     * @param bool|null $fto Affiliation with the FTO sanctions program (true/false)
     *
     * @return self
     */
    public function setFto($fto)
    {
        if (is_null($fto)) {
            throw new \InvalidArgumentException('non-nullable fto cannot be null');
        }
        $this->container['fto'] = $fto;

        return $this;
    }

    /**
     * Gets iran
     *
     * @return bool|null
     */
    public function getIran()
    {
        return $this->container['iran'];
    }

    /**
     * Sets iran
     *
     * @param bool|null $iran Affiliation with the IRAN sanctions program (true/false)
     *
     * @return self
     */
    public function setIran($iran)
    {
        if (is_null($iran)) {
            throw new \InvalidArgumentException('non-nullable iran cannot be null');
        }
        $this->container['iran'] = $iran;

        return $this;
    }

    /**
     * Gets iraq
     *
     * @return bool|null
     */
    public function getIraq()
    {
        return $this->container['iraq'];
    }

    /**
     * Sets iraq
     *
     * @param bool|null $iraq Affiliation with the IRAQ sanctions program (true/false)
     *
     * @return self
     */
    public function setIraq($iraq)
    {
        if (is_null($iraq)) {
            throw new \InvalidArgumentException('non-nullable iraq cannot be null');
        }
        $this->container['iraq'] = $iraq;

        return $this;
    }

    /**
     * Gets libya
     *
     * @return bool|null
     */
    public function getLibya()
    {
        return $this->container['libya'];
    }

    /**
     * Sets libya
     *
     * @param bool|null $libya Affiliation with the LIBYA sanctions program (true/false)
     *
     * @return self
     */
    public function setLibya($libya)
    {
        if (is_null($libya)) {
            throw new \InvalidArgumentException('non-nullable libya cannot be null');
        }
        $this->container['libya'] = $libya;

        return $this;
    }

    /**
     * Gets n_korea
     *
     * @return bool|null
     */
    public function getNKorea()
    {
        return $this->container['n_korea'];
    }

    /**
     * Sets n_korea
     *
     * @param bool|null $n_korea Affiliation with the NKOREA sanctions program (true/false)
     *
     * @return self
     */
    public function setNKorea($n_korea)
    {
        if (is_null($n_korea)) {
            throw new \InvalidArgumentException('non-nullable n_korea cannot be null');
        }
        $this->container['n_korea'] = $n_korea;

        return $this;
    }

    /**
     * Gets sdgt
     *
     * @return bool|null
     */
    public function getSdgt()
    {
        return $this->container['sdgt'];
    }

    /**
     * Sets sdgt
     *
     * @param bool|null $sdgt Listed as a specially designated global terrorist (true/false)
     *
     * @return self
     */
    public function setSdgt($sdgt)
    {
        if (is_null($sdgt)) {
            throw new \InvalidArgumentException('non-nullable sdgt cannot be null');
        }
        $this->container['sdgt'] = $sdgt;

        return $this;
    }

    /**
     * Gets sdnt
     *
     * @return bool|null
     */
    public function getSdnt()
    {
        return $this->container['sdnt'];
    }

    /**
     * Sets sdnt
     *
     * @param bool|null $sdnt Listed as a specially designated narcotics trafficker (true/false)
     *
     * @return self
     */
    public function setSdnt($sdnt)
    {
        if (is_null($sdnt)) {
            throw new \InvalidArgumentException('non-nullable sdnt cannot be null');
        }
        $this->container['sdnt'] = $sdnt;

        return $this;
    }

    /**
     * Gets sdntk
     *
     * @return bool|null
     */
    public function getSdntk()
    {
        return $this->container['sdntk'];
    }

    /**
     * Sets sdntk
     *
     * @param bool|null $sdntk Listed as a specially designated narcotics trafficker under Kingpin Act (true/false)
     *
     * @return self
     */
    public function setSdntk($sdntk)
    {
        if (is_null($sdntk)) {
            throw new \InvalidArgumentException('non-nullable sdntk cannot be null');
        }
        $this->container['sdntk'] = $sdntk;

        return $this;
    }

    /**
     * Gets sdt
     *
     * @return bool|null
     */
    public function getSdt()
    {
        return $this->container['sdt'];
    }

    /**
     * Sets sdt
     *
     * @param bool|null $sdt Listed as a specially designated terrorist (true/false)
     *
     * @return self
     */
    public function setSdt($sdt)
    {
        if (is_null($sdt)) {
            throw new \InvalidArgumentException('non-nullable sdt cannot be null');
        }
        $this->container['sdt'] = $sdt;

        return $this;
    }

    /**
     * Gets sudan
     *
     * @return bool|null
     */
    public function getSudan()
    {
        return $this->container['sudan'];
    }

    /**
     * Sets sudan
     *
     * @param bool|null $sudan Affiliation with the SUDAN sanctions program (true/false)
     *
     * @return self
     */
    public function setSudan($sudan)
    {
        if (is_null($sudan)) {
            throw new \InvalidArgumentException('non-nullable sudan cannot be null');
        }
        $this->container['sudan'] = $sudan;

        return $this;
    }

    /**
     * Gets taliban
     *
     * @return bool|null
     */
    public function getTaliban()
    {
        return $this->container['taliban'];
    }

    /**
     * Sets taliban
     *
     * @param bool|null $taliban Affiliation with the TALIBAN sanctions program (true/false)
     *
     * @return self
     */
    public function setTaliban($taliban)
    {
        if (is_null($taliban)) {
            throw new \InvalidArgumentException('non-nullable taliban cannot be null');
        }
        $this->container['taliban'] = $taliban;

        return $this;
    }

    /**
     * Gets unita
     *
     * @return bool|null
     */
    public function getUnita()
    {
        return $this->container['unita'];
    }

    /**
     * Sets unita
     *
     * @param bool|null $unita Affiliation with the UNITA sanctions program (true/false)
     *
     * @return self
     */
    public function setUnita($unita)
    {
        if (is_null($unita)) {
            throw new \InvalidArgumentException('non-nullable unita cannot be null');
        }
        $this->container['unita'] = $unita;

        return $this;
    }

    /**
     * Gets sdn_type
     *
     * @return string|null
     */
    public function getSdnType()
    {
        return $this->container['sdn_type'];
    }

    /**
     * Sets sdn_type
     *
     * @param string|null $sdn_type Type of specially designated national individual, organization or vessel.
     *
     * @return self
     */
    public function setSdnType($sdn_type)
    {
        if (is_null($sdn_type)) {
            throw new \InvalidArgumentException('non-nullable sdn_type cannot be null');
        }
        $this->container['sdn_type'] = $sdn_type;

        return $this;
    }

    /**
     * Gets program
     *
     * @return string|null
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param string|null $program Sanctions program name
     *
     * @return self
     */
    public function setProgram($program)
    {
        if (is_null($program)) {
            throw new \InvalidArgumentException('non-nullable program cannot be null');
        }
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title or position
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets call_sign
     *
     * @return string|null
     */
    public function getCallSign()
    {
        return $this->container['call_sign'];
    }

    /**
     * Sets call_sign
     *
     * @param string|null $call_sign Vessel call sign
     *
     * @return self
     */
    public function setCallSign($call_sign)
    {
        if (is_null($call_sign)) {
            throw new \InvalidArgumentException('non-nullable call_sign cannot be null');
        }
        $this->container['call_sign'] = $call_sign;

        return $this;
    }

    /**
     * Gets vess_type
     *
     * @return string|null
     */
    public function getVessType()
    {
        return $this->container['vess_type'];
    }

    /**
     * Sets vess_type
     *
     * @param string|null $vess_type Vessel type
     *
     * @return self
     */
    public function setVessType($vess_type)
    {
        if (is_null($vess_type)) {
            throw new \InvalidArgumentException('non-nullable vess_type cannot be null');
        }
        $this->container['vess_type'] = $vess_type;

        return $this;
    }

    /**
     * Gets tonnage
     *
     * @return string|null
     */
    public function getTonnage()
    {
        return $this->container['tonnage'];
    }

    /**
     * Sets tonnage
     *
     * @param string|null $tonnage Vessel tonnage
     *
     * @return self
     */
    public function setTonnage($tonnage)
    {
        if (is_null($tonnage)) {
            throw new \InvalidArgumentException('non-nullable tonnage cannot be null');
        }
        $this->container['tonnage'] = $tonnage;

        return $this;
    }

    /**
     * Gets grt
     *
     * @return string|null
     */
    public function getGrt()
    {
        return $this->container['grt'];
    }

    /**
     * Sets grt
     *
     * @param string|null $grt Vessel gross registered tonnage
     *
     * @return self
     */
    public function setGrt($grt)
    {
        if (is_null($grt)) {
            throw new \InvalidArgumentException('non-nullable grt cannot be null');
        }
        $this->container['grt'] = $grt;

        return $this;
    }

    /**
     * Gets vess_flag
     *
     * @return string|null
     */
    public function getVessFlag()
    {
        return $this->container['vess_flag'];
    }

    /**
     * Sets vess_flag
     *
     * @param string|null $vess_flag Vessel flag
     *
     * @return self
     */
    public function setVessFlag($vess_flag)
    {
        if (is_null($vess_flag)) {
            throw new \InvalidArgumentException('non-nullable vess_flag cannot be null');
        }
        $this->container['vess_flag'] = $vess_flag;

        return $this;
    }

    /**
     * Gets vess_owner
     *
     * @return string|null
     */
    public function getVessOwner()
    {
        return $this->container['vess_owner'];
    }

    /**
     * Sets vess_owner
     *
     * @param string|null $vess_owner Vessel owner
     *
     * @return self
     */
    public function setVessOwner($vess_owner)
    {
        if (is_null($vess_owner)) {
            throw new \InvalidArgumentException('non-nullable vess_owner cannot be null');
        }
        $this->container['vess_owner'] = $vess_owner;

        return $this;
    }

    /**
     * Gets add_num
     *
     * @return string|null
     */
    public function getAddNum()
    {
        return $this->container['add_num'];
    }

    /**
     * Sets add_num
     *
     * @param string|null $add_num Tertiary list identification number
     *
     * @return self
     */
    public function setAddNum($add_num)
    {
        if (is_null($add_num)) {
            throw new \InvalidArgumentException('non-nullable add_num cannot be null');
        }
        $this->container['add_num'] = $add_num;

        return $this;
    }

    /**
     * Gets add_remarks
     *
     * @return string|null
     */
    public function getAddRemarks()
    {
        return $this->container['add_remarks'];
    }

    /**
     * Sets add_remarks
     *
     * @param string|null $add_remarks Additional remarks or aliases
     *
     * @return self
     */
    public function setAddRemarks($add_remarks)
    {
        if (is_null($add_remarks)) {
            throw new \InvalidArgumentException('non-nullable add_remarks cannot be null');
        }
        $this->container['add_remarks'] = $add_remarks;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal code (Denied Persons List only)
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param string|null $effective_date Sanction effective date (Denied Persons List only)
     *
     * @return self
     */
    public function setEffectiveDate($effective_date)
    {
        if (is_null($effective_date)) {
            throw new \InvalidArgumentException('non-nullable effective_date cannot be null');
        }
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date Sanction expiration date (Denied Persons List only)
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets standard_order
     *
     * @return string|null
     */
    public function getStandardOrder()
    {
        return $this->container['standard_order'];
    }

    /**
     * Sets standard_order
     *
     * @param string|null $standard_order Order number (Denied Persons List only)
     *
     * @return self
     */
    public function setStandardOrder($standard_order)
    {
        if (is_null($standard_order)) {
            throw new \InvalidArgumentException('non-nullable standard_order cannot be null');
        }
        $this->container['standard_order'] = $standard_order;

        return $this;
    }

    /**
     * Gets name_search_key
     *
     * @return string|null
     */
    public function getNameSearchKey()
    {
        return $this->container['name_search_key'];
    }

    /**
     * Sets name_search_key
     *
     * @param string|null $name_search_key Record search key
     *
     * @return self
     */
    public function setNameSearchKey($name_search_key)
    {
        if (is_null($name_search_key)) {
            throw new \InvalidArgumentException('non-nullable name_search_key cannot be null');
        }
        $this->container['name_search_key'] = $name_search_key;

        return $this;
    }

    /**
     * Gets score
     *
     * @return string|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param string|null $score Cumulative score
     *
     * @return self
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            throw new \InvalidArgumentException('non-nullable score cannot be null');
        }
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets return_codes
     *
     * @return string|null
     */
    public function getReturnCodes()
    {
        return $this->container['return_codes'];
    }

    /**
     * Sets return_codes
     *
     * @param string|null $return_codes Return Codes
     *
     * @return self
     */
    public function setReturnCodes($return_codes)
    {
        if (is_null($return_codes)) {
            throw new \InvalidArgumentException('non-nullable return_codes cannot be null');
        }
        $this->container['return_codes'] = $return_codes;

        return $this;
    }

    /**
     * Gets error_desc
     *
     * @return string|null
     */
    public function getErrorDesc()
    {
        return $this->container['error_desc'];
    }

    /**
     * Sets error_desc
     *
     * @param string|null $error_desc Error Description
     *
     * @return self
     */
    public function setErrorDesc($error_desc)
    {
        if (is_null($error_desc)) {
            throw new \InvalidArgumentException('non-nullable error_desc cannot be null');
        }
        $this->container['error_desc'] = $error_desc;

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


