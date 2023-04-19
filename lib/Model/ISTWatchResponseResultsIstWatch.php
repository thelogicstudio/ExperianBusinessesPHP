<?php
/**
 * ISTWatchResponseResultsIstWatch
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
 * ISTWatchResponseResultsIstWatch Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ISTWatchResponseResultsIstWatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ISTWatchResponse_results_istWatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['dup_id'] = isset($data['dup_id']) ? $data['dup_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['date_entered'] = isset($data['date_entered']) ? $data['date_entered'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['balkans'] = isset($data['balkans']) ? $data['balkans'] : null;
        $this->container['bpipa'] = isset($data['bpipa']) ? $data['bpipa'] : null;
        $this->container['cuba'] = isset($data['cuba']) ? $data['cuba'] : null;
        $this->container['dpl'] = isset($data['dpl']) ? $data['dpl'] : null;
        $this->container['frym'] = isset($data['frym']) ? $data['frym'] : null;
        $this->container['fto'] = isset($data['fto']) ? $data['fto'] : null;
        $this->container['iran'] = isset($data['iran']) ? $data['iran'] : null;
        $this->container['iraq'] = isset($data['iraq']) ? $data['iraq'] : null;
        $this->container['libya'] = isset($data['libya']) ? $data['libya'] : null;
        $this->container['n_korea'] = isset($data['n_korea']) ? $data['n_korea'] : null;
        $this->container['sdgt'] = isset($data['sdgt']) ? $data['sdgt'] : null;
        $this->container['sdnt'] = isset($data['sdnt']) ? $data['sdnt'] : null;
        $this->container['sdntk'] = isset($data['sdntk']) ? $data['sdntk'] : null;
        $this->container['sdt'] = isset($data['sdt']) ? $data['sdt'] : null;
        $this->container['sudan'] = isset($data['sudan']) ? $data['sudan'] : null;
        $this->container['taliban'] = isset($data['taliban']) ? $data['taliban'] : null;
        $this->container['unita'] = isset($data['unita']) ? $data['unita'] : null;
        $this->container['sdn_type'] = isset($data['sdn_type']) ? $data['sdn_type'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['call_sign'] = isset($data['call_sign']) ? $data['call_sign'] : null;
        $this->container['vess_type'] = isset($data['vess_type']) ? $data['vess_type'] : null;
        $this->container['tonnage'] = isset($data['tonnage']) ? $data['tonnage'] : null;
        $this->container['grt'] = isset($data['grt']) ? $data['grt'] : null;
        $this->container['vess_flag'] = isset($data['vess_flag']) ? $data['vess_flag'] : null;
        $this->container['vess_owner'] = isset($data['vess_owner']) ? $data['vess_owner'] : null;
        $this->container['add_num'] = isset($data['add_num']) ? $data['add_num'] : null;
        $this->container['add_remarks'] = isset($data['add_remarks']) ? $data['add_remarks'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['standard_order'] = isset($data['standard_order']) ? $data['standard_order'] : null;
        $this->container['name_search_key'] = isset($data['name_search_key']) ? $data['name_search_key'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['return_codes'] = isset($data['return_codes']) ? $data['return_codes'] : null;
        $this->container['error_desc'] = isset($data['error_desc']) ? $data['error_desc'] : null;
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
        $this->container['name'] = $name;

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
     * @param string $id Primary list identification number (0 indicates a DPV entry, 2 – OSFI entry, 4 – UK entry, 00 – PEP entry, 02 – EPLS entry, all others – OFAC entries)
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
        $this->container['city'] = $city;

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
        $this->container['state'] = $state;

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
        $this->container['country'] = $country;

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
        $this->container['dup_id'] = $dup_id;

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
        $this->container['phone'] = $phone;

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
        $this->container['date_entered'] = $date_entered;

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
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets balkans
     *
     * @return bool
     */
    public function getBalkans()
    {
        return $this->container['balkans'];
    }

    /**
     * Sets balkans
     *
     * @param bool $balkans Affiliation with the BALKANS sanctions program (true/false)
     *
     * @return $this
     */
    public function setBalkans($balkans)
    {
        $this->container['balkans'] = $balkans;

        return $this;
    }

    /**
     * Gets bpipa
     *
     * @return bool
     */
    public function getBpipa()
    {
        return $this->container['bpipa'];
    }

    /**
     * Sets bpipa
     *
     * @param bool $bpipa Affiliation with the BPI-PA sanctions program (true/false)
     *
     * @return $this
     */
    public function setBpipa($bpipa)
    {
        $this->container['bpipa'] = $bpipa;

        return $this;
    }

    /**
     * Gets cuba
     *
     * @return bool
     */
    public function getCuba()
    {
        return $this->container['cuba'];
    }

    /**
     * Sets cuba
     *
     * @param bool $cuba Affiliation with the CUBA sanctions program (true/false)
     *
     * @return $this
     */
    public function setCuba($cuba)
    {
        $this->container['cuba'] = $cuba;

        return $this;
    }

    /**
     * Gets dpl
     *
     * @return bool
     */
    public function getDpl()
    {
        return $this->container['dpl'];
    }

    /**
     * Sets dpl
     *
     * @param bool $dpl Listed on the denied persons list (true/false)
     *
     * @return $this
     */
    public function setDpl($dpl)
    {
        $this->container['dpl'] = $dpl;

        return $this;
    }

    /**
     * Gets frym
     *
     * @return bool
     */
    public function getFrym()
    {
        return $this->container['frym'];
    }

    /**
     * Sets frym
     *
     * @param bool $frym Affiliation with the FRYM sanctions program (true/false)
     *
     * @return $this
     */
    public function setFrym($frym)
    {
        $this->container['frym'] = $frym;

        return $this;
    }

    /**
     * Gets fto
     *
     * @return bool
     */
    public function getFto()
    {
        return $this->container['fto'];
    }

    /**
     * Sets fto
     *
     * @param bool $fto Affiliation with the FTO sanctions program (true/false)
     *
     * @return $this
     */
    public function setFto($fto)
    {
        $this->container['fto'] = $fto;

        return $this;
    }

    /**
     * Gets iran
     *
     * @return bool
     */
    public function getIran()
    {
        return $this->container['iran'];
    }

    /**
     * Sets iran
     *
     * @param bool $iran Affiliation with the IRAN sanctions program (true/false)
     *
     * @return $this
     */
    public function setIran($iran)
    {
        $this->container['iran'] = $iran;

        return $this;
    }

    /**
     * Gets iraq
     *
     * @return bool
     */
    public function getIraq()
    {
        return $this->container['iraq'];
    }

    /**
     * Sets iraq
     *
     * @param bool $iraq Affiliation with the IRAQ sanctions program (true/false)
     *
     * @return $this
     */
    public function setIraq($iraq)
    {
        $this->container['iraq'] = $iraq;

        return $this;
    }

    /**
     * Gets libya
     *
     * @return bool
     */
    public function getLibya()
    {
        return $this->container['libya'];
    }

    /**
     * Sets libya
     *
     * @param bool $libya Affiliation with the LIBYA sanctions program (true/false)
     *
     * @return $this
     */
    public function setLibya($libya)
    {
        $this->container['libya'] = $libya;

        return $this;
    }

    /**
     * Gets n_korea
     *
     * @return bool
     */
    public function getNKorea()
    {
        return $this->container['n_korea'];
    }

    /**
     * Sets n_korea
     *
     * @param bool $n_korea Affiliation with the NKOREA sanctions program (true/false)
     *
     * @return $this
     */
    public function setNKorea($n_korea)
    {
        $this->container['n_korea'] = $n_korea;

        return $this;
    }

    /**
     * Gets sdgt
     *
     * @return bool
     */
    public function getSdgt()
    {
        return $this->container['sdgt'];
    }

    /**
     * Sets sdgt
     *
     * @param bool $sdgt Listed as a specially designated global terrorist (true/false)
     *
     * @return $this
     */
    public function setSdgt($sdgt)
    {
        $this->container['sdgt'] = $sdgt;

        return $this;
    }

    /**
     * Gets sdnt
     *
     * @return bool
     */
    public function getSdnt()
    {
        return $this->container['sdnt'];
    }

    /**
     * Sets sdnt
     *
     * @param bool $sdnt Listed as a specially designated narcotics trafficker (true/false)
     *
     * @return $this
     */
    public function setSdnt($sdnt)
    {
        $this->container['sdnt'] = $sdnt;

        return $this;
    }

    /**
     * Gets sdntk
     *
     * @return bool
     */
    public function getSdntk()
    {
        return $this->container['sdntk'];
    }

    /**
     * Sets sdntk
     *
     * @param bool $sdntk Listed as a specially designated narcotics trafficker under Kingpin Act (true/false)
     *
     * @return $this
     */
    public function setSdntk($sdntk)
    {
        $this->container['sdntk'] = $sdntk;

        return $this;
    }

    /**
     * Gets sdt
     *
     * @return bool
     */
    public function getSdt()
    {
        return $this->container['sdt'];
    }

    /**
     * Sets sdt
     *
     * @param bool $sdt Listed as a specially designated terrorist (true/false)
     *
     * @return $this
     */
    public function setSdt($sdt)
    {
        $this->container['sdt'] = $sdt;

        return $this;
    }

    /**
     * Gets sudan
     *
     * @return bool
     */
    public function getSudan()
    {
        return $this->container['sudan'];
    }

    /**
     * Sets sudan
     *
     * @param bool $sudan Affiliation with the SUDAN sanctions program (true/false)
     *
     * @return $this
     */
    public function setSudan($sudan)
    {
        $this->container['sudan'] = $sudan;

        return $this;
    }

    /**
     * Gets taliban
     *
     * @return bool
     */
    public function getTaliban()
    {
        return $this->container['taliban'];
    }

    /**
     * Sets taliban
     *
     * @param bool $taliban Affiliation with the TALIBAN sanctions program (true/false)
     *
     * @return $this
     */
    public function setTaliban($taliban)
    {
        $this->container['taliban'] = $taliban;

        return $this;
    }

    /**
     * Gets unita
     *
     * @return bool
     */
    public function getUnita()
    {
        return $this->container['unita'];
    }

    /**
     * Sets unita
     *
     * @param bool $unita Affiliation with the UNITA sanctions program (true/false)
     *
     * @return $this
     */
    public function setUnita($unita)
    {
        $this->container['unita'] = $unita;

        return $this;
    }

    /**
     * Gets sdn_type
     *
     * @return string
     */
    public function getSdnType()
    {
        return $this->container['sdn_type'];
    }

    /**
     * Sets sdn_type
     *
     * @param string $sdn_type Type of specially designated national individual, organization or vessel.
     *
     * @return $this
     */
    public function setSdnType($sdn_type)
    {
        $this->container['sdn_type'] = $sdn_type;

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
        $this->container['program'] = $program;

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
        $this->container['title'] = $title;

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
        $this->container['call_sign'] = $call_sign;

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
        $this->container['vess_type'] = $vess_type;

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
        $this->container['tonnage'] = $tonnage;

        return $this;
    }

    /**
     * Gets grt
     *
     * @return string
     */
    public function getGrt()
    {
        return $this->container['grt'];
    }

    /**
     * Sets grt
     *
     * @param string $grt Vessel gross registered tonnage
     *
     * @return $this
     */
    public function setGrt($grt)
    {
        $this->container['grt'] = $grt;

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
        $this->container['vess_owner'] = $vess_owner;

        return $this;
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
        $this->container['add_remarks'] = $add_remarks;

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
        $this->container['effective_date'] = $effective_date;

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
        $this->container['expiration_date'] = $expiration_date;

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
        $this->container['standard_order'] = $standard_order;

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
        $this->container['name_search_key'] = $name_search_key;

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
        $this->container['score'] = $score;

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
     * @param string $return_codes Return Codes
     *
     * @return $this
     */
    public function setReturnCodes($return_codes)
    {
        $this->container['return_codes'] = $return_codes;

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
     * @param string $error_desc Error Description
     *
     * @return $this
     */
    public function setErrorDesc($error_desc)
    {
        $this->container['error_desc'] = $error_desc;

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


