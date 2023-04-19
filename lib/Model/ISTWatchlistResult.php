<?php
/**
 * ISTWatchlistResult
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
 * ISTWatchlistResult Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ISTWatchlistResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ISTWatchlistResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_num' => 'string',
        'add_remarks' => 'string',
        'name' => 'string',
        'name_search_key' => 'string',
        'street' => 'string',
        'state' => 'string',
        'city' => 'string',
        'postal_code' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'call_sign' => 'string',
        'date_entered' => 'string',
        'dup_id' => 'string',
        'effective_date' => 'string',
        'error_desc' => 'string',
        'expiration_date' => 'string',
        'id' => 'string',
        'memo' => 'string',
        'program' => 'string',
        'return_codes' => 'string',
        'score' => 'string',
        'searches_left' => 'string',
        'standard_order' => 'string',
        'title' => 'string',
        'tonnage' => 'string',
        'vess_flag' => 'string',
        'vess_owner' => 'string',
        'vess_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_num' => null,
        'add_remarks' => null,
        'name' => null,
        'name_search_key' => null,
        'street' => null,
        'state' => null,
        'city' => null,
        'postal_code' => null,
        'phone' => null,
        'country' => null,
        'call_sign' => null,
        'date_entered' => null,
        'dup_id' => null,
        'effective_date' => null,
        'error_desc' => null,
        'expiration_date' => null,
        'id' => null,
        'memo' => null,
        'program' => null,
        'return_codes' => null,
        'score' => null,
        'searches_left' => null,
        'standard_order' => null,
        'title' => null,
        'tonnage' => null,
        'vess_flag' => null,
        'vess_owner' => null,
        'vess_type' => null
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
        'add_num' => 'addNum',
        'add_remarks' => 'addRemarks',
        'name' => 'name',
        'name_search_key' => 'nameSearchKey',
        'street' => 'street',
        'state' => 'state',
        'city' => 'city',
        'postal_code' => 'postalCode',
        'phone' => 'phone',
        'country' => 'country',
        'call_sign' => 'callSign',
        'date_entered' => 'dateEntered',
        'dup_id' => 'dupId',
        'effective_date' => 'effectiveDate',
        'error_desc' => 'errorDesc',
        'expiration_date' => 'expirationDate',
        'id' => 'id',
        'memo' => 'memo',
        'program' => 'program',
        'return_codes' => 'returnCodes',
        'score' => 'score',
        'searches_left' => 'searchesLeft',
        'standard_order' => 'standardOrder',
        'title' => 'title',
        'tonnage' => 'tonnage',
        'vess_flag' => 'vessFlag',
        'vess_owner' => 'vessOwner',
        'vess_type' => 'vessType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_num' => 'setAddNum',
        'add_remarks' => 'setAddRemarks',
        'name' => 'setName',
        'name_search_key' => 'setNameSearchKey',
        'street' => 'setStreet',
        'state' => 'setState',
        'city' => 'setCity',
        'postal_code' => 'setPostalCode',
        'phone' => 'setPhone',
        'country' => 'setCountry',
        'call_sign' => 'setCallSign',
        'date_entered' => 'setDateEntered',
        'dup_id' => 'setDupId',
        'effective_date' => 'setEffectiveDate',
        'error_desc' => 'setErrorDesc',
        'expiration_date' => 'setExpirationDate',
        'id' => 'setId',
        'memo' => 'setMemo',
        'program' => 'setProgram',
        'return_codes' => 'setReturnCodes',
        'score' => 'setScore',
        'searches_left' => 'setSearchesLeft',
        'standard_order' => 'setStandardOrder',
        'title' => 'setTitle',
        'tonnage' => 'setTonnage',
        'vess_flag' => 'setVessFlag',
        'vess_owner' => 'setVessOwner',
        'vess_type' => 'setVessType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_num' => 'getAddNum',
        'add_remarks' => 'getAddRemarks',
        'name' => 'getName',
        'name_search_key' => 'getNameSearchKey',
        'street' => 'getStreet',
        'state' => 'getState',
        'city' => 'getCity',
        'postal_code' => 'getPostalCode',
        'phone' => 'getPhone',
        'country' => 'getCountry',
        'call_sign' => 'getCallSign',
        'date_entered' => 'getDateEntered',
        'dup_id' => 'getDupId',
        'effective_date' => 'getEffectiveDate',
        'error_desc' => 'getErrorDesc',
        'expiration_date' => 'getExpirationDate',
        'id' => 'getId',
        'memo' => 'getMemo',
        'program' => 'getProgram',
        'return_codes' => 'getReturnCodes',
        'score' => 'getScore',
        'searches_left' => 'getSearchesLeft',
        'standard_order' => 'getStandardOrder',
        'title' => 'getTitle',
        'tonnage' => 'getTonnage',
        'vess_flag' => 'getVessFlag',
        'vess_owner' => 'getVessOwner',
        'vess_type' => 'getVessType'
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
        $this->container['add_num'] = isset($data['add_num']) ? $data['add_num'] : null;
        $this->container['add_remarks'] = isset($data['add_remarks']) ? $data['add_remarks'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_search_key'] = isset($data['name_search_key']) ? $data['name_search_key'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['call_sign'] = isset($data['call_sign']) ? $data['call_sign'] : null;
        $this->container['date_entered'] = isset($data['date_entered']) ? $data['date_entered'] : null;
        $this->container['dup_id'] = isset($data['dup_id']) ? $data['dup_id'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['error_desc'] = isset($data['error_desc']) ? $data['error_desc'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['return_codes'] = isset($data['return_codes']) ? $data['return_codes'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['searches_left'] = isset($data['searches_left']) ? $data['searches_left'] : null;
        $this->container['standard_order'] = isset($data['standard_order']) ? $data['standard_order'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['tonnage'] = isset($data['tonnage']) ? $data['tonnage'] : null;
        $this->container['vess_flag'] = isset($data['vess_flag']) ? $data['vess_flag'] : null;
        $this->container['vess_owner'] = isset($data['vess_owner']) ? $data['vess_owner'] : null;
        $this->container['vess_type'] = isset($data['vess_type']) ? $data['vess_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['add_num']) && (mb_strlen($this->container['add_num']) > 50)) {
            $invalidProperties[] = "invalid value for 'add_num', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['add_remarks']) && (mb_strlen($this->container['add_remarks']) > 200)) {
            $invalidProperties[] = "invalid value for 'add_remarks', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 350)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 350.";
        }

        if (!is_null($this->container['name_search_key']) && (mb_strlen($this->container['name_search_key']) > 10)) {
            $invalidProperties[] = "invalid value for 'name_search_key', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 750)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 750.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 50)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 50)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['call_sign']) && (mb_strlen($this->container['call_sign']) > 8)) {
            $invalidProperties[] = "invalid value for 'call_sign', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['date_entered']) && (mb_strlen($this->container['date_entered']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_entered', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['dup_id']) && (mb_strlen($this->container['dup_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'dup_id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['effective_date']) && (mb_strlen($this->container['effective_date']) > 255)) {
            $invalidProperties[] = "invalid value for 'effective_date', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['error_desc']) && (mb_strlen($this->container['error_desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'error_desc', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['expiration_date']) && (mb_strlen($this->container['expiration_date']) > 255)) {
            $invalidProperties[] = "invalid value for 'expiration_date', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 4000)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['program']) && (mb_strlen($this->container['program']) > 50)) {
            $invalidProperties[] = "invalid value for 'program', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['return_codes']) && (mb_strlen($this->container['return_codes']) > 9)) {
            $invalidProperties[] = "invalid value for 'return_codes', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['score']) && (mb_strlen($this->container['score']) > 11)) {
            $invalidProperties[] = "invalid value for 'score', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['searches_left']) && (mb_strlen($this->container['searches_left']) > 9)) {
            $invalidProperties[] = "invalid value for 'searches_left', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['standard_order']) && (mb_strlen($this->container['standard_order']) > 255)) {
            $invalidProperties[] = "invalid value for 'standard_order', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 200)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['tonnage']) && (mb_strlen($this->container['tonnage']) > 14)) {
            $invalidProperties[] = "invalid value for 'tonnage', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['vess_flag']) && (mb_strlen($this->container['vess_flag']) > 40)) {
            $invalidProperties[] = "invalid value for 'vess_flag', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['vess_owner']) && (mb_strlen($this->container['vess_owner']) > 150)) {
            $invalidProperties[] = "invalid value for 'vess_owner', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['vess_type']) && (mb_strlen($this->container['vess_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'vess_type', the character length must be smaller than or equal to 25.";
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
     * Gets add_num
     *
     * @return string
     */
    public function getAddNum()
    {
        return $this->container['add_num'];
    }

    /**
     * Sets add_num
     *
     * @param string $add_num Tertiary list identification number
     *
     * @return $this
     */
    public function setAddNum($add_num)
    {
        if (!is_null($add_num) && (mb_strlen($add_num) > 50)) {
            throw new \InvalidArgumentException('invalid length for $add_num when calling ISTWatchlistResult., must be smaller than or equal to 50.');
        }

        $this->container['add_num'] = $add_num;

        return $this;
    }

    /**
     * Gets add_remarks
     *
     * @return string
     */
    public function getAddRemarks()
    {
        return $this->container['add_remarks'];
    }

    /**
     * Sets add_remarks
     *
     * @param string $add_remarks Additional remarks or aliases
     *
     * @return $this
     */
    public function setAddRemarks($add_remarks)
    {
        if (!is_null($add_remarks) && (mb_strlen($add_remarks) > 200)) {
            throw new \InvalidArgumentException('invalid length for $add_remarks when calling ISTWatchlistResult., must be smaller than or equal to 200.');
        }

        $this->container['add_remarks'] = $add_remarks;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of sanctioned entity
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 350)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ISTWatchlistResult., must be smaller than or equal to 350.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_search_key
     *
     * @return string
     */
    public function getNameSearchKey()
    {
        return $this->container['name_search_key'];
    }

    /**
     * Sets name_search_key
     *
     * @param string $name_search_key Record search key
     *
     * @return $this
     */
    public function setNameSearchKey($name_search_key)
    {
        if (!is_null($name_search_key) && (mb_strlen($name_search_key) > 10)) {
            throw new \InvalidArgumentException('invalid length for $name_search_key when calling ISTWatchlistResult., must be smaller than or equal to 10.');
        }

        $this->container['name_search_key'] = $name_search_key;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street address of sanctioned entity
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State or province of sanctioned entity
     *
     * @return $this
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 750)) {
            throw new \InvalidArgumentException('invalid length for $state when calling ISTWatchlistResult., must be smaller than or equal to 750.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City of sanctioned entity
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling ISTWatchlistResult., must be smaller than or equal to 50.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal code (Denied Persons List only)
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number of sanctioned entity
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling ISTWatchlistResult., must be smaller than or equal to 50.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country name/abbreviation of sanctioned entity
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 50)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ISTWatchlistResult., must be smaller than or equal to 50.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets call_sign
     *
     * @return string
     */
    public function getCallSign()
    {
        return $this->container['call_sign'];
    }

    /**
     * Sets call_sign
     *
     * @param string $call_sign Vessel call sign
     *
     * @return $this
     */
    public function setCallSign($call_sign)
    {
        if (!is_null($call_sign) && (mb_strlen($call_sign) > 8)) {
            throw new \InvalidArgumentException('invalid length for $call_sign when calling ISTWatchlistResult., must be smaller than or equal to 8.');
        }

        $this->container['call_sign'] = $call_sign;

        return $this;
    }

    /**
     * Gets date_entered
     *
     * @return string
     */
    public function getDateEntered()
    {
        return $this->container['date_entered'];
    }

    /**
     * Sets date_entered
     *
     * @param string $date_entered Sanctioned entity’s entered or last modified date
     *
     * @return $this
     */
    public function setDateEntered($date_entered)
    {
        if (!is_null($date_entered) && (mb_strlen($date_entered) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_entered when calling ISTWatchlistResult., must be smaller than or equal to 10.');
        }

        $this->container['date_entered'] = $date_entered;

        return $this;
    }

    /**
     * Gets dup_id
     *
     * @return string
     */
    public function getDupId()
    {
        return $this->container['dup_id'];
    }

    /**
     * Sets dup_id
     *
     * @param string $dup_id Secondary list identification number (alias number)
     *
     * @return $this
     */
    public function setDupId($dup_id)
    {
        if (!is_null($dup_id) && (mb_strlen($dup_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $dup_id when calling ISTWatchlistResult., must be smaller than or equal to 10.');
        }

        $this->container['dup_id'] = $dup_id;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param string $effective_date Sanction effective date (Denied Persons List only)
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        if (!is_null($effective_date) && (mb_strlen($effective_date) > 255)) {
            throw new \InvalidArgumentException('invalid length for $effective_date when calling ISTWatchlistResult., must be smaller than or equal to 255.');
        }

        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets error_desc
     *
     * @return string
     */
    public function getErrorDesc()
    {
        return $this->container['error_desc'];
    }

    /**
     * Sets error_desc
     *
     * @param string $error_desc Error description
     *
     * @return $this
     */
    public function setErrorDesc($error_desc)
    {
        if (!is_null($error_desc) && (mb_strlen($error_desc) > 255)) {
            throw new \InvalidArgumentException('invalid length for $error_desc when calling ISTWatchlistResult., must be smaller than or equal to 255.');
        }

        $this->container['error_desc'] = $error_desc;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string $expiration_date Sanction expiration date (Denied Persons List only)
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        if (!is_null($expiration_date) && (mb_strlen($expiration_date) > 255)) {
            throw new \InvalidArgumentException('invalid length for $expiration_date when calling ISTWatchlistResult., must be smaller than or equal to 255.');
        }

        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Any value except 0, 2, 4, 00, 02
     *
     * @return $this
     */
    public function setId($id)
    {
        if (!is_null($id) && (mb_strlen($id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ISTWatchlistResult., must be smaller than or equal to 10.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo Remarks (date/place of birth, nationality, passport number and other identifying information)
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        if (!is_null($memo) && (mb_strlen($memo) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling ISTWatchlistResult., must be smaller than or equal to 4000.');
        }

        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets program
     *
     * @return string
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param string $program Sanctions program name
     *
     * @return $this
     */
    public function setProgram($program)
    {
        if (!is_null($program) && (mb_strlen($program) > 50)) {
            throw new \InvalidArgumentException('invalid length for $program when calling ISTWatchlistResult., must be smaller than or equal to 50.');
        }

        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets return_codes
     *
     * @return string
     */
    public function getReturnCodes()
    {
        return $this->container['return_codes'];
    }

    /**
     * Sets return_codes
     *
     * @param string $return_codes Return codes
     *
     * @return $this
     */
    public function setReturnCodes($return_codes)
    {
        if (!is_null($return_codes) && (mb_strlen($return_codes) > 9)) {
            throw new \InvalidArgumentException('invalid length for $return_codes when calling ISTWatchlistResult., must be smaller than or equal to 9.');
        }

        $this->container['return_codes'] = $return_codes;

        return $this;
    }

    /**
     * Gets score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param string $score Cumulative score
     *
     * @return $this
     */
    public function setScore($score)
    {
        if (!is_null($score) && (mb_strlen($score) > 11)) {
            throw new \InvalidArgumentException('invalid length for $score when calling ISTWatchlistResult., must be smaller than or equal to 11.');
        }

        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets searches_left
     *
     * @return string
     */
    public function getSearchesLeft()
    {
        return $this->container['searches_left'];
    }

    /**
     * Sets searches_left
     *
     * @param string $searches_left Experian internal
     *
     * @return $this
     */
    public function setSearchesLeft($searches_left)
    {
        if (!is_null($searches_left) && (mb_strlen($searches_left) > 9)) {
            throw new \InvalidArgumentException('invalid length for $searches_left when calling ISTWatchlistResult., must be smaller than or equal to 9.');
        }

        $this->container['searches_left'] = $searches_left;

        return $this;
    }

    /**
     * Gets standard_order
     *
     * @return string
     */
    public function getStandardOrder()
    {
        return $this->container['standard_order'];
    }

    /**
     * Sets standard_order
     *
     * @param string $standard_order Order number (Denied Persons List only)
     *
     * @return $this
     */
    public function setStandardOrder($standard_order)
    {
        if (!is_null($standard_order) && (mb_strlen($standard_order) > 255)) {
            throw new \InvalidArgumentException('invalid length for $standard_order when calling ISTWatchlistResult., must be smaller than or equal to 255.');
        }

        $this->container['standard_order'] = $standard_order;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title or position
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (mb_strlen($title) > 200)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ISTWatchlistResult., must be smaller than or equal to 200.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets tonnage
     *
     * @return string
     */
    public function getTonnage()
    {
        return $this->container['tonnage'];
    }

    /**
     * Sets tonnage
     *
     * @param string $tonnage Vessel tonnage
     *
     * @return $this
     */
    public function setTonnage($tonnage)
    {
        if (!is_null($tonnage) && (mb_strlen($tonnage) > 14)) {
            throw new \InvalidArgumentException('invalid length for $tonnage when calling ISTWatchlistResult., must be smaller than or equal to 14.');
        }

        $this->container['tonnage'] = $tonnage;

        return $this;
    }

    /**
     * Gets vess_flag
     *
     * @return string
     */
    public function getVessFlag()
    {
        return $this->container['vess_flag'];
    }

    /**
     * Sets vess_flag
     *
     * @param string $vess_flag Vessel flag
     *
     * @return $this
     */
    public function setVessFlag($vess_flag)
    {
        if (!is_null($vess_flag) && (mb_strlen($vess_flag) > 40)) {
            throw new \InvalidArgumentException('invalid length for $vess_flag when calling ISTWatchlistResult., must be smaller than or equal to 40.');
        }

        $this->container['vess_flag'] = $vess_flag;

        return $this;
    }

    /**
     * Gets vess_owner
     *
     * @return string
     */
    public function getVessOwner()
    {
        return $this->container['vess_owner'];
    }

    /**
     * Sets vess_owner
     *
     * @param string $vess_owner Vessel owner
     *
     * @return $this
     */
    public function setVessOwner($vess_owner)
    {
        if (!is_null($vess_owner) && (mb_strlen($vess_owner) > 150)) {
            throw new \InvalidArgumentException('invalid length for $vess_owner when calling ISTWatchlistResult., must be smaller than or equal to 150.');
        }

        $this->container['vess_owner'] = $vess_owner;

        return $this;
    }

    /**
     * Gets vess_type
     *
     * @return string
     */
    public function getVessType()
    {
        return $this->container['vess_type'];
    }

    /**
     * Sets vess_type
     *
     * @param string $vess_type Vessel type
     *
     * @return $this
     */
    public function setVessType($vess_type)
    {
        if (!is_null($vess_type) && (mb_strlen($vess_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $vess_type when calling ISTWatchlistResult., must be smaller than or equal to 25.');
        }

        $this->container['vess_type'] = $vess_type;

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


