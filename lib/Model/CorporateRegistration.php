<?php
/**
 * CorporateRegistration
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
 * CorporateRegistration Class Doc Comment
 *
 * @category Class
 * @description Object containing Corporate Registration information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CorporateRegistration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CorporateRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state_of_origin' => 'string',
        'original_filing_date' => 'string',
        'recent_filing_date' => 'string',
        'incorporated_date' => 'string',
        'business_type' => 'string',
        'status_flag' => 'string',
        'status_description' => 'string',
        'profit_flag' => 'string',
        'charter_number' => 'string',
        'existence_term_years' => 'float',
        'existence_term_date' => 'string',
        'federal_tax_id' => 'string',
        'state_tax_id' => 'string',
        'domestic_foreign_indicator' => 'string',
        'agent_name' => 'string',
        'agent_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state_of_origin' => null,
        'original_filing_date' => null,
        'recent_filing_date' => null,
        'incorporated_date' => null,
        'business_type' => null,
        'status_flag' => null,
        'status_description' => null,
        'profit_flag' => null,
        'charter_number' => null,
        'existence_term_years' => null,
        'existence_term_date' => null,
        'federal_tax_id' => null,
        'state_tax_id' => null,
        'domestic_foreign_indicator' => null,
        'agent_name' => null,
        'agent_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'state_of_origin' => false,
        'original_filing_date' => false,
        'recent_filing_date' => false,
        'incorporated_date' => false,
        'business_type' => false,
        'status_flag' => false,
        'status_description' => false,
        'profit_flag' => false,
        'charter_number' => false,
        'existence_term_years' => false,
        'existence_term_date' => false,
        'federal_tax_id' => false,
        'state_tax_id' => false,
        'domestic_foreign_indicator' => false,
        'agent_name' => false,
        'agent_address' => false
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
        'state_of_origin' => 'stateOfOrigin',
        'original_filing_date' => 'originalFilingDate',
        'recent_filing_date' => 'recentFilingDate',
        'incorporated_date' => 'incorporatedDate',
        'business_type' => 'businessType',
        'status_flag' => 'statusFlag',
        'status_description' => 'statusDescription',
        'profit_flag' => 'profitFlag',
        'charter_number' => 'charterNumber',
        'existence_term_years' => 'existenceTermYears',
        'existence_term_date' => 'existenceTermDate',
        'federal_tax_id' => 'federalTaxId',
        'state_tax_id' => 'stateTaxId',
        'domestic_foreign_indicator' => 'domesticForeignIndicator',
        'agent_name' => 'agentName',
        'agent_address' => 'agentAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_of_origin' => 'setStateOfOrigin',
        'original_filing_date' => 'setOriginalFilingDate',
        'recent_filing_date' => 'setRecentFilingDate',
        'incorporated_date' => 'setIncorporatedDate',
        'business_type' => 'setBusinessType',
        'status_flag' => 'setStatusFlag',
        'status_description' => 'setStatusDescription',
        'profit_flag' => 'setProfitFlag',
        'charter_number' => 'setCharterNumber',
        'existence_term_years' => 'setExistenceTermYears',
        'existence_term_date' => 'setExistenceTermDate',
        'federal_tax_id' => 'setFederalTaxId',
        'state_tax_id' => 'setStateTaxId',
        'domestic_foreign_indicator' => 'setDomesticForeignIndicator',
        'agent_name' => 'setAgentName',
        'agent_address' => 'setAgentAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_of_origin' => 'getStateOfOrigin',
        'original_filing_date' => 'getOriginalFilingDate',
        'recent_filing_date' => 'getRecentFilingDate',
        'incorporated_date' => 'getIncorporatedDate',
        'business_type' => 'getBusinessType',
        'status_flag' => 'getStatusFlag',
        'status_description' => 'getStatusDescription',
        'profit_flag' => 'getProfitFlag',
        'charter_number' => 'getCharterNumber',
        'existence_term_years' => 'getExistenceTermYears',
        'existence_term_date' => 'getExistenceTermDate',
        'federal_tax_id' => 'getFederalTaxId',
        'state_tax_id' => 'getStateTaxId',
        'domestic_foreign_indicator' => 'getDomesticForeignIndicator',
        'agent_name' => 'getAgentName',
        'agent_address' => 'getAgentAddress'
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
        $this->setIfExists('state_of_origin', $data ?? [], null);
        $this->setIfExists('original_filing_date', $data ?? [], null);
        $this->setIfExists('recent_filing_date', $data ?? [], null);
        $this->setIfExists('incorporated_date', $data ?? [], null);
        $this->setIfExists('business_type', $data ?? [], null);
        $this->setIfExists('status_flag', $data ?? [], null);
        $this->setIfExists('status_description', $data ?? [], null);
        $this->setIfExists('profit_flag', $data ?? [], null);
        $this->setIfExists('charter_number', $data ?? [], null);
        $this->setIfExists('existence_term_years', $data ?? [], null);
        $this->setIfExists('existence_term_date', $data ?? [], null);
        $this->setIfExists('federal_tax_id', $data ?? [], null);
        $this->setIfExists('state_tax_id', $data ?? [], null);
        $this->setIfExists('domestic_foreign_indicator', $data ?? [], null);
        $this->setIfExists('agent_name', $data ?? [], null);
        $this->setIfExists('agent_address', $data ?? [], null);
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

        if (!is_null($this->container['state_of_origin']) && (mb_strlen($this->container['state_of_origin']) > 2)) {
            $invalidProperties[] = "invalid value for 'state_of_origin', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['original_filing_date']) && (mb_strlen($this->container['original_filing_date']) > 12)) {
            $invalidProperties[] = "invalid value for 'original_filing_date', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['recent_filing_date']) && (mb_strlen($this->container['recent_filing_date']) > 12)) {
            $invalidProperties[] = "invalid value for 'recent_filing_date', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['incorporated_date']) && (mb_strlen($this->container['incorporated_date']) > 12)) {
            $invalidProperties[] = "invalid value for 'incorporated_date', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['business_type']) && (mb_strlen($this->container['business_type']) > 15)) {
            $invalidProperties[] = "invalid value for 'business_type', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['status_flag']) && (mb_strlen($this->container['status_flag']) > 10)) {
            $invalidProperties[] = "invalid value for 'status_flag', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['status_description']) && (mb_strlen($this->container['status_description']) > 50)) {
            $invalidProperties[] = "invalid value for 'status_description', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['profit_flag']) && (mb_strlen($this->container['profit_flag']) > 35)) {
            $invalidProperties[] = "invalid value for 'profit_flag', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['existence_term_date']) && (mb_strlen($this->container['existence_term_date']) > 12)) {
            $invalidProperties[] = "invalid value for 'existence_term_date', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['federal_tax_id']) && (mb_strlen($this->container['federal_tax_id']) > 9)) {
            $invalidProperties[] = "invalid value for 'federal_tax_id', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['state_tax_id']) && (mb_strlen($this->container['state_tax_id']) > 11)) {
            $invalidProperties[] = "invalid value for 'state_tax_id', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['domestic_foreign_indicator']) && (mb_strlen($this->container['domestic_foreign_indicator']) > 35)) {
            $invalidProperties[] = "invalid value for 'domestic_foreign_indicator', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['agent_name']) && (mb_strlen($this->container['agent_name']) > 35)) {
            $invalidProperties[] = "invalid value for 'agent_name', the character length must be smaller than or equal to 35.";
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
     * Gets state_of_origin
     *
     * @return string|null
     */
    public function getStateOfOrigin()
    {
        return $this->container['state_of_origin'];
    }

    /**
     * Sets state_of_origin
     *
     * @param string|null $state_of_origin Origin state of the corporate registration filing
     *
     * @return self
     */
    public function setStateOfOrigin($state_of_origin)
    {
        if (is_null($state_of_origin)) {
            throw new \InvalidArgumentException('non-nullable state_of_origin cannot be null');
        }
        if ((mb_strlen($state_of_origin) > 2)) {
            throw new \InvalidArgumentException('invalid length for $state_of_origin when calling CorporateRegistration., must be smaller than or equal to 2.');
        }

        $this->container['state_of_origin'] = $state_of_origin;

        return $this;
    }

    /**
     * Gets original_filing_date
     *
     * @return string|null
     */
    public function getOriginalFilingDate()
    {
        return $this->container['original_filing_date'];
    }

    /**
     * Sets original_filing_date
     *
     * @param string|null $original_filing_date Date the corporate registration was originally filed. Format = YYYY-MM-DD. Null if not available
     *
     * @return self
     */
    public function setOriginalFilingDate($original_filing_date)
    {
        if (is_null($original_filing_date)) {
            throw new \InvalidArgumentException('non-nullable original_filing_date cannot be null');
        }
        if ((mb_strlen($original_filing_date) > 12)) {
            throw new \InvalidArgumentException('invalid length for $original_filing_date when calling CorporateRegistration., must be smaller than or equal to 12.');
        }

        $this->container['original_filing_date'] = $original_filing_date;

        return $this;
    }

    /**
     * Gets recent_filing_date
     *
     * @return string|null
     */
    public function getRecentFilingDate()
    {
        return $this->container['recent_filing_date'];
    }

    /**
     * Sets recent_filing_date
     *
     * @param string|null $recent_filing_date Date of the most recent corporate registration filing. Format = YYYY-MM-DD. Null if not available
     *
     * @return self
     */
    public function setRecentFilingDate($recent_filing_date)
    {
        if (is_null($recent_filing_date)) {
            throw new \InvalidArgumentException('non-nullable recent_filing_date cannot be null');
        }
        if ((mb_strlen($recent_filing_date) > 12)) {
            throw new \InvalidArgumentException('invalid length for $recent_filing_date when calling CorporateRegistration., must be smaller than or equal to 12.');
        }

        $this->container['recent_filing_date'] = $recent_filing_date;

        return $this;
    }

    /**
     * Gets incorporated_date
     *
     * @return string|null
     */
    public function getIncorporatedDate()
    {
        return $this->container['incorporated_date'];
    }

    /**
     * Sets incorporated_date
     *
     * @param string|null $incorporated_date Date the business incorporated in the state. Format = YYYY-MM-DD. Null if not available
     *
     * @return self
     */
    public function setIncorporatedDate($incorporated_date)
    {
        if (is_null($incorporated_date)) {
            throw new \InvalidArgumentException('non-nullable incorporated_date cannot be null');
        }
        if ((mb_strlen($incorporated_date) > 12)) {
            throw new \InvalidArgumentException('invalid length for $incorporated_date when calling CorporateRegistration., must be smaller than or equal to 12.');
        }

        $this->container['incorporated_date'] = $incorporated_date;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string|null
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string|null $business_type Business type, such as LLC, Corporation, etc. Null if not available
     *
     * @return self
     */
    public function setBusinessType($business_type)
    {
        if (is_null($business_type)) {
            throw new \InvalidArgumentException('non-nullable business_type cannot be null');
        }
        if ((mb_strlen($business_type) > 15)) {
            throw new \InvalidArgumentException('invalid length for $business_type when calling CorporateRegistration., must be smaller than or equal to 15.');
        }

        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets status_flag
     *
     * @return string|null
     */
    public function getStatusFlag()
    {
        return $this->container['status_flag'];
    }

    /**
     * Sets status_flag
     *
     * @param string|null $status_flag A = Active. I = Inactive. Null if not available
     *
     * @return self
     */
    public function setStatusFlag($status_flag)
    {
        if (is_null($status_flag)) {
            throw new \InvalidArgumentException('non-nullable status_flag cannot be null');
        }
        if ((mb_strlen($status_flag) > 10)) {
            throw new \InvalidArgumentException('invalid length for $status_flag when calling CorporateRegistration., must be smaller than or equal to 10.');
        }

        $this->container['status_flag'] = $status_flag;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string|null $status_description Active businesses are classified as either \"Good standing\" or \"Reinstated\". A description for inactive businesses is also provided; \"Bankruptcy\", \"Terminated\", \"Revoked\", etc.
     *
     * @return self
     */
    public function setStatusDescription($status_description)
    {
        if (is_null($status_description)) {
            throw new \InvalidArgumentException('non-nullable status_description cannot be null');
        }
        if ((mb_strlen($status_description) > 50)) {
            throw new \InvalidArgumentException('invalid length for $status_description when calling CorporateRegistration., must be smaller than or equal to 50.');
        }

        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets profit_flag
     *
     * @return string|null
     */
    public function getProfitFlag()
    {
        return $this->container['profit_flag'];
    }

    /**
     * Sets profit_flag
     *
     * @param string|null $profit_flag \"Profit\", \"Non-profit\", or \"Unknown\". Null if not available
     *
     * @return self
     */
    public function setProfitFlag($profit_flag)
    {
        if (is_null($profit_flag)) {
            throw new \InvalidArgumentException('non-nullable profit_flag cannot be null');
        }
        if ((mb_strlen($profit_flag) > 35)) {
            throw new \InvalidArgumentException('invalid length for $profit_flag when calling CorporateRegistration., must be smaller than or equal to 35.');
        }

        $this->container['profit_flag'] = $profit_flag;

        return $this;
    }

    /**
     * Gets charter_number
     *
     * @return string|null
     */
    public function getCharterNumber()
    {
        return $this->container['charter_number'];
    }

    /**
     * Sets charter_number
     *
     * @param string|null $charter_number Number assigned to each business by the state. Null if not available
     *
     * @return self
     */
    public function setCharterNumber($charter_number)
    {
        if (is_null($charter_number)) {
            throw new \InvalidArgumentException('non-nullable charter_number cannot be null');
        }
        $this->container['charter_number'] = $charter_number;

        return $this;
    }

    /**
     * Gets existence_term_years
     *
     * @return float|null
     */
    public function getExistenceTermYears()
    {
        return $this->container['existence_term_years'];
    }

    /**
     * Sets existence_term_years
     *
     * @param float|null $existence_term_years Number of years the business charter is valid. Null if not available
     *
     * @return self
     */
    public function setExistenceTermYears($existence_term_years)
    {
        if (is_null($existence_term_years)) {
            throw new \InvalidArgumentException('non-nullable existence_term_years cannot be null');
        }
        $this->container['existence_term_years'] = $existence_term_years;

        return $this;
    }

    /**
     * Gets existence_term_date
     *
     * @return string|null
     */
    public function getExistenceTermDate()
    {
        return $this->container['existence_term_date'];
    }

    /**
     * Sets existence_term_date
     *
     * @param string|null $existence_term_date Date the business charter is valid through. Format = YYYY-MM-DD. Null if not available
     *
     * @return self
     */
    public function setExistenceTermDate($existence_term_date)
    {
        if (is_null($existence_term_date)) {
            throw new \InvalidArgumentException('non-nullable existence_term_date cannot be null');
        }
        if ((mb_strlen($existence_term_date) > 12)) {
            throw new \InvalidArgumentException('invalid length for $existence_term_date when calling CorporateRegistration., must be smaller than or equal to 12.');
        }

        $this->container['existence_term_date'] = $existence_term_date;

        return $this;
    }

    /**
     * Gets federal_tax_id
     *
     * @return string|null
     */
    public function getFederalTaxId()
    {
        return $this->container['federal_tax_id'];
    }

    /**
     * Sets federal_tax_id
     *
     * @param string|null $federal_tax_id Federal Tax Identification Number or Employer Identification Number (EIN) issued by the Federal government
     *
     * @return self
     */
    public function setFederalTaxId($federal_tax_id)
    {
        if (is_null($federal_tax_id)) {
            throw new \InvalidArgumentException('non-nullable federal_tax_id cannot be null');
        }
        if ((mb_strlen($federal_tax_id) > 9)) {
            throw new \InvalidArgumentException('invalid length for $federal_tax_id when calling CorporateRegistration., must be smaller than or equal to 9.');
        }

        $this->container['federal_tax_id'] = $federal_tax_id;

        return $this;
    }

    /**
     * Gets state_tax_id
     *
     * @return string|null
     */
    public function getStateTaxId()
    {
        return $this->container['state_tax_id'];
    }

    /**
     * Sets state_tax_id
     *
     * @param string|null $state_tax_id State Tax Identification Number issued by the state
     *
     * @return self
     */
    public function setStateTaxId($state_tax_id)
    {
        if (is_null($state_tax_id)) {
            throw new \InvalidArgumentException('non-nullable state_tax_id cannot be null');
        }
        if ((mb_strlen($state_tax_id) > 11)) {
            throw new \InvalidArgumentException('invalid length for $state_tax_id when calling CorporateRegistration., must be smaller than or equal to 11.');
        }

        $this->container['state_tax_id'] = $state_tax_id;

        return $this;
    }

    /**
     * Gets domestic_foreign_indicator
     *
     * @return string|null
     */
    public function getDomesticForeignIndicator()
    {
        return $this->container['domestic_foreign_indicator'];
    }

    /**
     * Sets domestic_foreign_indicator
     *
     * @param string|null $domestic_foreign_indicator \"Domestic filing state\" or \"Foreign filing state\"
     *
     * @return self
     */
    public function setDomesticForeignIndicator($domestic_foreign_indicator)
    {
        if (is_null($domestic_foreign_indicator)) {
            throw new \InvalidArgumentException('non-nullable domestic_foreign_indicator cannot be null');
        }
        if ((mb_strlen($domestic_foreign_indicator) > 35)) {
            throw new \InvalidArgumentException('invalid length for $domestic_foreign_indicator when calling CorporateRegistration., must be smaller than or equal to 35.');
        }

        $this->container['domestic_foreign_indicator'] = $domestic_foreign_indicator;

        return $this;
    }

    /**
     * Gets agent_name
     *
     * @return string|null
     */
    public function getAgentName()
    {
        return $this->container['agent_name'];
    }

    /**
     * Sets agent_name
     *
     * @param string|null $agent_name Name of the agent who filed the corporate registration on behalf of the business. Many states require a third-party agent, but sometimes the agent listed can be the business owner
     *
     * @return self
     */
    public function setAgentName($agent_name)
    {
        if (is_null($agent_name)) {
            throw new \InvalidArgumentException('non-nullable agent_name cannot be null');
        }
        if ((mb_strlen($agent_name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $agent_name when calling CorporateRegistration., must be smaller than or equal to 35.');
        }

        $this->container['agent_name'] = $agent_name;

        return $this;
    }

    /**
     * Gets agent_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult|null
     */
    public function getAgentAddress()
    {
        return $this->container['agent_address'];
    }

    /**
     * Sets agent_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult|null $agent_address agent_address
     *
     * @return self
     */
    public function setAgentAddress($agent_address)
    {
        if (is_null($agent_address)) {
            throw new \InvalidArgumentException('non-nullable agent_address cannot be null');
        }
        $this->container['agent_address'] = $agent_address;

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


