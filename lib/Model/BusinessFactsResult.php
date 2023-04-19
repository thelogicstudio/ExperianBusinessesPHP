<?php
/**
 * BusinessFactsResult
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
 * BusinessFactsResult Class Doc Comment
 *
 * @category Class
 * @description An object business facts data
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessFactsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessFactsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['sic_codes'] = isset($data['sic_codes']) ? $data['sic_codes'] : null;
        $this->container['naics_codes'] = isset($data['naics_codes']) ? $data['naics_codes'] : null;
        $this->container['public_indicator'] = isset($data['public_indicator']) ? $data['public_indicator'] : null;
        $this->container['ticker_symbol'] = isset($data['ticker_symbol']) ? $data['ticker_symbol'] : null;
        $this->container['stock_exchange'] = isset($data['stock_exchange']) ? $data['stock_exchange'] : null;
        $this->container['non_profit_indicator'] = isset($data['non_profit_indicator']) ? $data['non_profit_indicator'] : null;
        $this->container['years_on_file'] = isset($data['years_on_file']) ? $data['years_on_file'] : null;
        $this->container['state_of_incorporation'] = isset($data['state_of_incorporation']) ? $data['state_of_incorporation'] : null;
        $this->container['date_of_incorporation'] = isset($data['date_of_incorporation']) ? $data['date_of_incorporation'] : null;
        $this->container['business_type'] = isset($data['business_type']) ? $data['business_type'] : null;
        $this->container['employee_size'] = isset($data['employee_size']) ? $data['employee_size'] : null;
        $this->container['employee_size_code'] = isset($data['employee_size_code']) ? $data['employee_size_code'] : null;
        $this->container['sales_revenue'] = isset($data['sales_revenue']) ? $data['sales_revenue'] : null;
        $this->container['sales_size_code'] = isset($data['sales_size_code']) ? $data['sales_size_code'] : null;
        $this->container['fortune1000'] = isset($data['fortune1000']) ? $data['fortune1000'] : null;
        $this->container['corporate_linkage_type'] = isset($data['corporate_linkage_type']) ? $data['corporate_linkage_type'] : null;
        $this->container['executive_information'] = isset($data['executive_information']) ? $data['executive_information'] : null;
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
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]
     */
    public function getSicCodes()
    {
        return $this->container['sic_codes'];
    }

    /**
     * Sets sic_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[] $sic_codes SIC codes
     *
     * @return $this
     */
    public function setSicCodes($sic_codes)
    {
        $this->container['sic_codes'] = $sic_codes;

        return $this;
    }

    /**
     * Gets naics_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]
     */
    public function getNaicsCodes()
    {
        return $this->container['naics_codes'];
    }

    /**
     * Sets naics_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[] $naics_codes NAICS code
     *
     * @return $this
     */
    public function setNaicsCodes($naics_codes)
    {
        $this->container['naics_codes'] = $naics_codes;

        return $this;
    }

    /**
     * Gets public_indicator
     *
     * @return bool
     */
    public function getPublicIndicator()
    {
        return $this->container['public_indicator'];
    }

    /**
     * Sets public_indicator
     *
     * @param bool $public_indicator If true indicates the business is publicly traded
     *
     * @return $this
     */
    public function setPublicIndicator($public_indicator)
    {
        $this->container['public_indicator'] = $public_indicator;

        return $this;
    }

    /**
     * Gets ticker_symbol
     *
     * @return string
     */
    public function getTickerSymbol()
    {
        return $this->container['ticker_symbol'];
    }

    /**
     * Sets ticker_symbol
     *
     * @param string $ticker_symbol Stock exchange ticket symbol
     *
     * @return $this
     */
    public function setTickerSymbol($ticker_symbol)
    {
        $this->container['ticker_symbol'] = $ticker_symbol;

        return $this;
    }

    /**
     * Gets stock_exchange
     *
     * @return string
     */
    public function getStockExchange()
    {
        return $this->container['stock_exchange'];
    }

    /**
     * Sets stock_exchange
     *
     * @param string $stock_exchange What stock exchange the stock is offered on (e.g. New York Stock Exchange)
     *
     * @return $this
     */
    public function setStockExchange($stock_exchange)
    {
        $this->container['stock_exchange'] = $stock_exchange;

        return $this;
    }

    /**
     * Gets non_profit_indicator
     *
     * @return bool
     */
    public function getNonProfitIndicator()
    {
        return $this->container['non_profit_indicator'];
    }

    /**
     * Sets non_profit_indicator
     *
     * @param bool $non_profit_indicator If true indicates the business is a non-profit entity
     *
     * @return $this
     */
    public function setNonProfitIndicator($non_profit_indicator)
    {
        $this->container['non_profit_indicator'] = $non_profit_indicator;

        return $this;
    }

    /**
     * Gets years_on_file
     *
     * @return float
     */
    public function getYearsOnFile()
    {
        return $this->container['years_on_file'];
    }

    /**
     * Sets years_on_file
     *
     * @param float $years_on_file Number of years the business has been in Experian's commercial database
     *
     * @return $this
     */
    public function setYearsOnFile($years_on_file)
    {
        $this->container['years_on_file'] = $years_on_file;

        return $this;
    }

    /**
     * Gets state_of_incorporation
     *
     * @return string
     */
    public function getStateOfIncorporation()
    {
        return $this->container['state_of_incorporation'];
    }

    /**
     * Sets state_of_incorporation
     *
     * @param string $state_of_incorporation US State in which the business is incorporated
     *
     * @return $this
     */
    public function setStateOfIncorporation($state_of_incorporation)
    {
        $this->container['state_of_incorporation'] = $state_of_incorporation;

        return $this;
    }

    /**
     * Gets date_of_incorporation
     *
     * @return string
     */
    public function getDateOfIncorporation()
    {
        return $this->container['date_of_incorporation'];
    }

    /**
     * Sets date_of_incorporation
     *
     * @param string $date_of_incorporation Date in which the business was incorporated (MM/DD/YYYY)
     *
     * @return $this
     */
    public function setDateOfIncorporation($date_of_incorporation)
    {
        $this->container['date_of_incorporation'] = $date_of_incorporation;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string $business_type Business type, such as LLC, Corporation, etc. (if not available will be a null value)
     *
     * @return $this
     */
    public function setBusinessType($business_type)
    {
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets employee_size
     *
     * @return float
     */
    public function getEmployeeSize()
    {
        return $this->container['employee_size'];
    }

    /**
     * Sets employee_size
     *
     * @param float $employee_size Estimated number of employees
     *
     * @return $this
     */
    public function setEmployeeSize($employee_size)
    {
        $this->container['employee_size'] = $employee_size;

        return $this;
    }

    /**
     * Gets employee_size_code
     *
     * @return string
     */
    public function getEmployeeSizeCode()
    {
        return $this->container['employee_size_code'];
    }

    /**
     * Sets employee_size_code
     *
     * @param string $employee_size_code A = 1-4, B = 5-9, C = 10-19, D = 20-49, E = 50-99, F = 100-249, G = 250-499, H = 500-999, I = 1000+
     *
     * @return $this
     */
    public function setEmployeeSizeCode($employee_size_code)
    {
        $this->container['employee_size_code'] = $employee_size_code;

        return $this;
    }

    /**
     * Gets sales_revenue
     *
     * @return float
     */
    public function getSalesRevenue()
    {
        return $this->container['sales_revenue'];
    }

    /**
     * Sets sales_revenue
     *
     * @param float $sales_revenue Estimated sales revenue for the business
     *
     * @return $this
     */
    public function setSalesRevenue($sales_revenue)
    {
        $this->container['sales_revenue'] = $sales_revenue;

        return $this;
    }

    /**
     * Gets sales_size_code
     *
     * @return string
     */
    public function getSalesSizeCode()
    {
        return $this->container['sales_size_code'];
    }

    /**
     * Sets sales_size_code
     *
     * @param string $sales_size_code A = Under $500K, B = $500K to $999.9K, C = $1M to $4.9M, D = $5M to $9.9M, F = $10M to $24.9M,  G = $25M to $74.9M, H = $75M to $199.9M, I = $200M to $499.9M, J = $500M to $999.9M , K = $1B+
     *
     * @return $this
     */
    public function setSalesSizeCode($sales_size_code)
    {
        $this->container['sales_size_code'] = $sales_size_code;

        return $this;
    }

    /**
     * Gets fortune1000
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResultFortune1000
     */
    public function getFortune1000()
    {
        return $this->container['fortune1000'];
    }

    /**
     * Sets fortune1000
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResultFortune1000 $fortune1000 fortune1000
     *
     * @return $this
     */
    public function setFortune1000($fortune1000)
    {
        $this->container['fortune1000'] = $fortune1000;

        return $this;
    }

    /**
     * Gets corporate_linkage_type
     *
     * @return string
     */
    public function getCorporateLinkageType()
    {
        return $this->container['corporate_linkage_type'];
    }

    /**
     * Sets corporate_linkage_type
     *
     * @param string $corporate_linkage_type 'Headquarters/Parent', 'Branch', 'Subsidiary', or 'Stand alone business'
     *
     * @return $this
     */
    public function setCorporateLinkageType($corporate_linkage_type)
    {
        $this->container['corporate_linkage_type'] = $corporate_linkage_type;

        return $this;
    }

    /**
     * Gets executive_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]
     */
    public function getExecutiveInformation()
    {
        return $this->container['executive_information'];
    }

    /**
     * Sets executive_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[] $executive_information Key company contacts including owners, officers, and directors
     *
     * @return $this
     */
    public function setExecutiveInformation($executive_information)
    {
        $this->container['executive_information'] = $executive_information;

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


