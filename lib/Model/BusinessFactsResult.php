<?php
/**
 * BusinessFactsResult
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
 * BusinessFactsResult Class Doc Comment
 *
 * @category Class
 * @description An object business facts data
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BusinessFactsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BusinessFactsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sic_codes' => '\TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]',
        'naics_codes' => '\TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]',
        'public_indicator' => 'bool',
        'ticker_symbol' => 'string',
        'stock_exchange' => 'string',
        'non_profit_indicator' => 'bool',
        'years_on_file' => 'float',
        'state_of_incorporation' => 'string',
        'date_of_incorporation' => 'string',
        'business_type' => 'string',
        'employee_size' => 'float',
        'employee_size_code' => 'string',
        'sales_revenue' => 'float',
        'sales_size_code' => 'string',
        'fortune1000' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResultFortune1000',
        'corporate_linkage_type' => 'string',
        'executive_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sic_codes' => null,
        'naics_codes' => null,
        'public_indicator' => null,
        'ticker_symbol' => null,
        'stock_exchange' => null,
        'non_profit_indicator' => null,
        'years_on_file' => null,
        'state_of_incorporation' => null,
        'date_of_incorporation' => null,
        'business_type' => null,
        'employee_size' => null,
        'employee_size_code' => null,
        'sales_revenue' => null,
        'sales_size_code' => null,
        'fortune1000' => null,
        'corporate_linkage_type' => null,
        'executive_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sic_codes' => false,
        'naics_codes' => false,
        'public_indicator' => false,
        'ticker_symbol' => false,
        'stock_exchange' => false,
        'non_profit_indicator' => false,
        'years_on_file' => false,
        'state_of_incorporation' => false,
        'date_of_incorporation' => false,
        'business_type' => false,
        'employee_size' => false,
        'employee_size_code' => false,
        'sales_revenue' => false,
        'sales_size_code' => false,
        'fortune1000' => false,
        'corporate_linkage_type' => false,
        'executive_information' => false
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
        'sic_codes' => 'sicCodes',
        'naics_codes' => 'naicsCodes',
        'public_indicator' => 'publicIndicator',
        'ticker_symbol' => 'tickerSymbol',
        'stock_exchange' => 'stockExchange',
        'non_profit_indicator' => 'nonProfitIndicator',
        'years_on_file' => 'yearsOnFile',
        'state_of_incorporation' => 'stateOfIncorporation',
        'date_of_incorporation' => 'dateOfIncorporation',
        'business_type' => 'businessType',
        'employee_size' => 'employeeSize',
        'employee_size_code' => 'employeeSizeCode',
        'sales_revenue' => 'salesRevenue',
        'sales_size_code' => 'salesSizeCode',
        'fortune1000' => 'fortune1000',
        'corporate_linkage_type' => 'corporateLinkageType',
        'executive_information' => 'executiveInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sic_codes' => 'setSicCodes',
        'naics_codes' => 'setNaicsCodes',
        'public_indicator' => 'setPublicIndicator',
        'ticker_symbol' => 'setTickerSymbol',
        'stock_exchange' => 'setStockExchange',
        'non_profit_indicator' => 'setNonProfitIndicator',
        'years_on_file' => 'setYearsOnFile',
        'state_of_incorporation' => 'setStateOfIncorporation',
        'date_of_incorporation' => 'setDateOfIncorporation',
        'business_type' => 'setBusinessType',
        'employee_size' => 'setEmployeeSize',
        'employee_size_code' => 'setEmployeeSizeCode',
        'sales_revenue' => 'setSalesRevenue',
        'sales_size_code' => 'setSalesSizeCode',
        'fortune1000' => 'setFortune1000',
        'corporate_linkage_type' => 'setCorporateLinkageType',
        'executive_information' => 'setExecutiveInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sic_codes' => 'getSicCodes',
        'naics_codes' => 'getNaicsCodes',
        'public_indicator' => 'getPublicIndicator',
        'ticker_symbol' => 'getTickerSymbol',
        'stock_exchange' => 'getStockExchange',
        'non_profit_indicator' => 'getNonProfitIndicator',
        'years_on_file' => 'getYearsOnFile',
        'state_of_incorporation' => 'getStateOfIncorporation',
        'date_of_incorporation' => 'getDateOfIncorporation',
        'business_type' => 'getBusinessType',
        'employee_size' => 'getEmployeeSize',
        'employee_size_code' => 'getEmployeeSizeCode',
        'sales_revenue' => 'getSalesRevenue',
        'sales_size_code' => 'getSalesSizeCode',
        'fortune1000' => 'getFortune1000',
        'corporate_linkage_type' => 'getCorporateLinkageType',
        'executive_information' => 'getExecutiveInformation'
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
        $this->setIfExists('sic_codes', $data ?? [], null);
        $this->setIfExists('naics_codes', $data ?? [], null);
        $this->setIfExists('public_indicator', $data ?? [], null);
        $this->setIfExists('ticker_symbol', $data ?? [], null);
        $this->setIfExists('stock_exchange', $data ?? [], null);
        $this->setIfExists('non_profit_indicator', $data ?? [], null);
        $this->setIfExists('years_on_file', $data ?? [], null);
        $this->setIfExists('state_of_incorporation', $data ?? [], null);
        $this->setIfExists('date_of_incorporation', $data ?? [], null);
        $this->setIfExists('business_type', $data ?? [], null);
        $this->setIfExists('employee_size', $data ?? [], null);
        $this->setIfExists('employee_size_code', $data ?? [], null);
        $this->setIfExists('sales_revenue', $data ?? [], null);
        $this->setIfExists('sales_size_code', $data ?? [], null);
        $this->setIfExists('fortune1000', $data ?? [], null);
        $this->setIfExists('corporate_linkage_type', $data ?? [], null);
        $this->setIfExists('executive_information', $data ?? [], null);
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
     * Gets sic_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]|null
     */
    public function getSicCodes()
    {
        return $this->container['sic_codes'];
    }

    /**
     * Sets sic_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]|null $sic_codes SIC codes
     *
     * @return self
     */
    public function setSicCodes($sic_codes)
    {
        if (is_null($sic_codes)) {
            throw new \InvalidArgumentException('non-nullable sic_codes cannot be null');
        }
        $this->container['sic_codes'] = $sic_codes;

        return $this;
    }

    /**
     * Gets naics_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]|null
     */
    public function getNaicsCodes()
    {
        return $this->container['naics_codes'];
    }

    /**
     * Sets naics_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]|null $naics_codes NAICS code
     *
     * @return self
     */
    public function setNaicsCodes($naics_codes)
    {
        if (is_null($naics_codes)) {
            throw new \InvalidArgumentException('non-nullable naics_codes cannot be null');
        }
        $this->container['naics_codes'] = $naics_codes;

        return $this;
    }

    /**
     * Gets public_indicator
     *
     * @return bool|null
     */
    public function getPublicIndicator()
    {
        return $this->container['public_indicator'];
    }

    /**
     * Sets public_indicator
     *
     * @param bool|null $public_indicator If true indicates the business is publicly traded
     *
     * @return self
     */
    public function setPublicIndicator($public_indicator)
    {
        if (is_null($public_indicator)) {
            throw new \InvalidArgumentException('non-nullable public_indicator cannot be null');
        }
        $this->container['public_indicator'] = $public_indicator;

        return $this;
    }

    /**
     * Gets ticker_symbol
     *
     * @return string|null
     */
    public function getTickerSymbol()
    {
        return $this->container['ticker_symbol'];
    }

    /**
     * Sets ticker_symbol
     *
     * @param string|null $ticker_symbol Stock exchange ticket symbol
     *
     * @return self
     */
    public function setTickerSymbol($ticker_symbol)
    {
        if (is_null($ticker_symbol)) {
            throw new \InvalidArgumentException('non-nullable ticker_symbol cannot be null');
        }
        $this->container['ticker_symbol'] = $ticker_symbol;

        return $this;
    }

    /**
     * Gets stock_exchange
     *
     * @return string|null
     */
    public function getStockExchange()
    {
        return $this->container['stock_exchange'];
    }

    /**
     * Sets stock_exchange
     *
     * @param string|null $stock_exchange What stock exchange the stock is offered on (e.g. New York Stock Exchange)
     *
     * @return self
     */
    public function setStockExchange($stock_exchange)
    {
        if (is_null($stock_exchange)) {
            throw new \InvalidArgumentException('non-nullable stock_exchange cannot be null');
        }
        $this->container['stock_exchange'] = $stock_exchange;

        return $this;
    }

    /**
     * Gets non_profit_indicator
     *
     * @return bool|null
     */
    public function getNonProfitIndicator()
    {
        return $this->container['non_profit_indicator'];
    }

    /**
     * Sets non_profit_indicator
     *
     * @param bool|null $non_profit_indicator If true indicates the business is a non-profit entity
     *
     * @return self
     */
    public function setNonProfitIndicator($non_profit_indicator)
    {
        if (is_null($non_profit_indicator)) {
            throw new \InvalidArgumentException('non-nullable non_profit_indicator cannot be null');
        }
        $this->container['non_profit_indicator'] = $non_profit_indicator;

        return $this;
    }

    /**
     * Gets years_on_file
     *
     * @return float|null
     */
    public function getYearsOnFile()
    {
        return $this->container['years_on_file'];
    }

    /**
     * Sets years_on_file
     *
     * @param float|null $years_on_file Number of years the business has been in Experian's commercial database
     *
     * @return self
     */
    public function setYearsOnFile($years_on_file)
    {
        if (is_null($years_on_file)) {
            throw new \InvalidArgumentException('non-nullable years_on_file cannot be null');
        }
        $this->container['years_on_file'] = $years_on_file;

        return $this;
    }

    /**
     * Gets state_of_incorporation
     *
     * @return string|null
     */
    public function getStateOfIncorporation()
    {
        return $this->container['state_of_incorporation'];
    }

    /**
     * Sets state_of_incorporation
     *
     * @param string|null $state_of_incorporation US State in which the business is incorporated
     *
     * @return self
     */
    public function setStateOfIncorporation($state_of_incorporation)
    {
        if (is_null($state_of_incorporation)) {
            throw new \InvalidArgumentException('non-nullable state_of_incorporation cannot be null');
        }
        $this->container['state_of_incorporation'] = $state_of_incorporation;

        return $this;
    }

    /**
     * Gets date_of_incorporation
     *
     * @return string|null
     */
    public function getDateOfIncorporation()
    {
        return $this->container['date_of_incorporation'];
    }

    /**
     * Sets date_of_incorporation
     *
     * @param string|null $date_of_incorporation Date in which the business was incorporated (MM/DD/YYYY)
     *
     * @return self
     */
    public function setDateOfIncorporation($date_of_incorporation)
    {
        if (is_null($date_of_incorporation)) {
            throw new \InvalidArgumentException('non-nullable date_of_incorporation cannot be null');
        }
        $this->container['date_of_incorporation'] = $date_of_incorporation;

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
     * @param string|null $business_type Business type, such as LLC, Corporation, etc. (if not available will be a null value)
     *
     * @return self
     */
    public function setBusinessType($business_type)
    {
        if (is_null($business_type)) {
            throw new \InvalidArgumentException('non-nullable business_type cannot be null');
        }
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets employee_size
     *
     * @return float|null
     */
    public function getEmployeeSize()
    {
        return $this->container['employee_size'];
    }

    /**
     * Sets employee_size
     *
     * @param float|null $employee_size Estimated number of employees
     *
     * @return self
     */
    public function setEmployeeSize($employee_size)
    {
        if (is_null($employee_size)) {
            throw new \InvalidArgumentException('non-nullable employee_size cannot be null');
        }
        $this->container['employee_size'] = $employee_size;

        return $this;
    }

    /**
     * Gets employee_size_code
     *
     * @return string|null
     */
    public function getEmployeeSizeCode()
    {
        return $this->container['employee_size_code'];
    }

    /**
     * Sets employee_size_code
     *
     * @param string|null $employee_size_code A = 1-4, B = 5-9, C = 10-19, D = 20-49, E = 50-99, F = 100-249, G = 250-499, H = 500-999, I = 1000+
     *
     * @return self
     */
    public function setEmployeeSizeCode($employee_size_code)
    {
        if (is_null($employee_size_code)) {
            throw new \InvalidArgumentException('non-nullable employee_size_code cannot be null');
        }
        $this->container['employee_size_code'] = $employee_size_code;

        return $this;
    }

    /**
     * Gets sales_revenue
     *
     * @return float|null
     */
    public function getSalesRevenue()
    {
        return $this->container['sales_revenue'];
    }

    /**
     * Sets sales_revenue
     *
     * @param float|null $sales_revenue Estimated sales revenue for the business
     *
     * @return self
     */
    public function setSalesRevenue($sales_revenue)
    {
        if (is_null($sales_revenue)) {
            throw new \InvalidArgumentException('non-nullable sales_revenue cannot be null');
        }
        $this->container['sales_revenue'] = $sales_revenue;

        return $this;
    }

    /**
     * Gets sales_size_code
     *
     * @return string|null
     */
    public function getSalesSizeCode()
    {
        return $this->container['sales_size_code'];
    }

    /**
     * Sets sales_size_code
     *
     * @param string|null $sales_size_code A = Under $500K, B = $500K to $999.9K, C = $1M to $4.9M, D = $5M to $9.9M, F = $10M to $24.9M,  G = $25M to $74.9M, H = $75M to $199.9M, I = $200M to $499.9M, J = $500M to $999.9M , K = $1B+
     *
     * @return self
     */
    public function setSalesSizeCode($sales_size_code)
    {
        if (is_null($sales_size_code)) {
            throw new \InvalidArgumentException('non-nullable sales_size_code cannot be null');
        }
        $this->container['sales_size_code'] = $sales_size_code;

        return $this;
    }

    /**
     * Gets fortune1000
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResultFortune1000|null
     */
    public function getFortune1000()
    {
        return $this->container['fortune1000'];
    }

    /**
     * Sets fortune1000
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResultFortune1000|null $fortune1000 fortune1000
     *
     * @return self
     */
    public function setFortune1000($fortune1000)
    {
        if (is_null($fortune1000)) {
            throw new \InvalidArgumentException('non-nullable fortune1000 cannot be null');
        }
        $this->container['fortune1000'] = $fortune1000;

        return $this;
    }

    /**
     * Gets corporate_linkage_type
     *
     * @return string|null
     */
    public function getCorporateLinkageType()
    {
        return $this->container['corporate_linkage_type'];
    }

    /**
     * Sets corporate_linkage_type
     *
     * @param string|null $corporate_linkage_type 'Headquarters/Parent', 'Branch', 'Subsidiary', or 'Stand alone business'
     *
     * @return self
     */
    public function setCorporateLinkageType($corporate_linkage_type)
    {
        if (is_null($corporate_linkage_type)) {
            throw new \InvalidArgumentException('non-nullable corporate_linkage_type cannot be null');
        }
        $this->container['corporate_linkage_type'] = $corporate_linkage_type;

        return $this;
    }

    /**
     * Gets executive_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]|null
     */
    public function getExecutiveInformation()
    {
        return $this->container['executive_information'];
    }

    /**
     * Sets executive_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]|null $executive_information Key company contacts including owners, officers, and directors
     *
     * @return self
     */
    public function setExecutiveInformation($executive_information)
    {
        if (is_null($executive_information)) {
            throw new \InvalidArgumentException('non-nullable executive_information cannot be null');
        }
        $this->container['executive_information'] = $executive_information;

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


