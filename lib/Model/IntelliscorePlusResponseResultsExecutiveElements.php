<?php
/**
 * IntelliscorePlusResponseResultsExecutiveElements
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
 * IntelliscorePlusResponseResultsExecutiveElements Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntelliscorePlusResponseResultsExecutiveElements implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntelliscorePlusResponse_results_executiveElements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bankruptcy_count' => 'float',
        'earliest_bankruptcy_date' => 'string',
        'most_recent_bankruptcy_date' => 'string',
        'tax_lien_count' => 'float',
        'earliest_tax_lien_date' => 'string',
        'most_recent_tax_lien_date' => 'string',
        'judgment_count' => 'float',
        'earliest_judgment_date' => 'string',
        'most_recent_judgment_date' => 'string',
        'collection_count' => 'float',
        'legal_balance' => 'float',
        'ucc_filings' => 'float',
        'ucc_derogatory_count' => 'float',
        'current_account_balance' => 'float',
        'current_tradeline_count' => 'float',
        'monthly_average_dbt' => 'float',
        'highest_dbt6_months' => 'float',
        'highest_dbt5_quarters' => 'float',
        'active_tradeline_count' => 'float',
        'all_tradeline_balance' => 'float',
        'all_tradeline_count' => 'float',
        'average_balance5_quarters' => 'float',
        'single_line_high_credit' => 'float',
        'low_balance6_months' => 'float',
        'high_balance6_months' => 'float',
        'earliest_collection_date' => 'string',
        'most_recent_collection_date' => 'string',
        'current_dbt' => 'float',
        'tax_id' => 'string',
        'earliest_ucc_date' => 'string',
        'most_recent_ucc_date' => 'string',
        'bankruptcy_indicator' => 'bool',
        'judgment_indicator' => 'bool',
        'tax_lien_indicator' => 'bool',
        'inquiries_previous9_months' => 'float',
        'lien_balance' => 'float',
        'judgment_balance' => 'float',
        'year_of_incorporation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bankruptcy_count' => null,
        'earliest_bankruptcy_date' => null,
        'most_recent_bankruptcy_date' => null,
        'tax_lien_count' => null,
        'earliest_tax_lien_date' => null,
        'most_recent_tax_lien_date' => null,
        'judgment_count' => null,
        'earliest_judgment_date' => null,
        'most_recent_judgment_date' => null,
        'collection_count' => null,
        'legal_balance' => null,
        'ucc_filings' => null,
        'ucc_derogatory_count' => null,
        'current_account_balance' => null,
        'current_tradeline_count' => null,
        'monthly_average_dbt' => null,
        'highest_dbt6_months' => null,
        'highest_dbt5_quarters' => null,
        'active_tradeline_count' => null,
        'all_tradeline_balance' => null,
        'all_tradeline_count' => null,
        'average_balance5_quarters' => null,
        'single_line_high_credit' => null,
        'low_balance6_months' => null,
        'high_balance6_months' => null,
        'earliest_collection_date' => null,
        'most_recent_collection_date' => null,
        'current_dbt' => null,
        'tax_id' => null,
        'earliest_ucc_date' => null,
        'most_recent_ucc_date' => null,
        'bankruptcy_indicator' => null,
        'judgment_indicator' => null,
        'tax_lien_indicator' => null,
        'inquiries_previous9_months' => null,
        'lien_balance' => null,
        'judgment_balance' => null,
        'year_of_incorporation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bankruptcy_count' => false,
        'earliest_bankruptcy_date' => false,
        'most_recent_bankruptcy_date' => false,
        'tax_lien_count' => false,
        'earliest_tax_lien_date' => false,
        'most_recent_tax_lien_date' => false,
        'judgment_count' => false,
        'earliest_judgment_date' => false,
        'most_recent_judgment_date' => false,
        'collection_count' => false,
        'legal_balance' => false,
        'ucc_filings' => false,
        'ucc_derogatory_count' => false,
        'current_account_balance' => false,
        'current_tradeline_count' => false,
        'monthly_average_dbt' => false,
        'highest_dbt6_months' => false,
        'highest_dbt5_quarters' => false,
        'active_tradeline_count' => false,
        'all_tradeline_balance' => false,
        'all_tradeline_count' => false,
        'average_balance5_quarters' => false,
        'single_line_high_credit' => false,
        'low_balance6_months' => false,
        'high_balance6_months' => false,
        'earliest_collection_date' => false,
        'most_recent_collection_date' => false,
        'current_dbt' => false,
        'tax_id' => false,
        'earliest_ucc_date' => false,
        'most_recent_ucc_date' => false,
        'bankruptcy_indicator' => false,
        'judgment_indicator' => false,
        'tax_lien_indicator' => false,
        'inquiries_previous9_months' => false,
        'lien_balance' => false,
        'judgment_balance' => false,
        'year_of_incorporation' => false
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
        'bankruptcy_count' => 'bankruptcyCount',
        'earliest_bankruptcy_date' => 'earliestBankruptcyDate',
        'most_recent_bankruptcy_date' => 'mostRecentBankruptcyDate',
        'tax_lien_count' => 'taxLienCount',
        'earliest_tax_lien_date' => 'earliestTaxLienDate',
        'most_recent_tax_lien_date' => 'mostRecentTaxLienDate',
        'judgment_count' => 'judgmentCount',
        'earliest_judgment_date' => 'earliestJudgmentDate',
        'most_recent_judgment_date' => 'mostRecentJudgmentDate',
        'collection_count' => 'collectionCount',
        'legal_balance' => 'legalBalance',
        'ucc_filings' => 'uccFilings',
        'ucc_derogatory_count' => 'uccDerogatoryCount',
        'current_account_balance' => 'currentAccountBalance',
        'current_tradeline_count' => 'currentTradelineCount',
        'monthly_average_dbt' => 'monthlyAverageDbt',
        'highest_dbt6_months' => 'highestDbt6Months',
        'highest_dbt5_quarters' => 'highestDbt5Quarters',
        'active_tradeline_count' => 'activeTradelineCount',
        'all_tradeline_balance' => 'allTradelineBalance',
        'all_tradeline_count' => 'allTradelineCount',
        'average_balance5_quarters' => 'averageBalance5Quarters',
        'single_line_high_credit' => 'singleLineHighCredit',
        'low_balance6_months' => 'lowBalance6Months',
        'high_balance6_months' => 'highBalance6Months',
        'earliest_collection_date' => 'earliestCollectionDate',
        'most_recent_collection_date' => 'mostRecentCollectionDate',
        'current_dbt' => 'currentDbt',
        'tax_id' => 'taxId',
        'earliest_ucc_date' => 'earliestUccDate',
        'most_recent_ucc_date' => 'mostRecentUccDate',
        'bankruptcy_indicator' => 'bankruptcyIndicator',
        'judgment_indicator' => 'judgmentIndicator',
        'tax_lien_indicator' => 'taxLienIndicator',
        'inquiries_previous9_months' => 'inquiriesPrevious9Months',
        'lien_balance' => 'lienBalance',
        'judgment_balance' => 'judgmentBalance',
        'year_of_incorporation' => 'yearOfIncorporation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankruptcy_count' => 'setBankruptcyCount',
        'earliest_bankruptcy_date' => 'setEarliestBankruptcyDate',
        'most_recent_bankruptcy_date' => 'setMostRecentBankruptcyDate',
        'tax_lien_count' => 'setTaxLienCount',
        'earliest_tax_lien_date' => 'setEarliestTaxLienDate',
        'most_recent_tax_lien_date' => 'setMostRecentTaxLienDate',
        'judgment_count' => 'setJudgmentCount',
        'earliest_judgment_date' => 'setEarliestJudgmentDate',
        'most_recent_judgment_date' => 'setMostRecentJudgmentDate',
        'collection_count' => 'setCollectionCount',
        'legal_balance' => 'setLegalBalance',
        'ucc_filings' => 'setUccFilings',
        'ucc_derogatory_count' => 'setUccDerogatoryCount',
        'current_account_balance' => 'setCurrentAccountBalance',
        'current_tradeline_count' => 'setCurrentTradelineCount',
        'monthly_average_dbt' => 'setMonthlyAverageDbt',
        'highest_dbt6_months' => 'setHighestDbt6Months',
        'highest_dbt5_quarters' => 'setHighestDbt5Quarters',
        'active_tradeline_count' => 'setActiveTradelineCount',
        'all_tradeline_balance' => 'setAllTradelineBalance',
        'all_tradeline_count' => 'setAllTradelineCount',
        'average_balance5_quarters' => 'setAverageBalance5Quarters',
        'single_line_high_credit' => 'setSingleLineHighCredit',
        'low_balance6_months' => 'setLowBalance6Months',
        'high_balance6_months' => 'setHighBalance6Months',
        'earliest_collection_date' => 'setEarliestCollectionDate',
        'most_recent_collection_date' => 'setMostRecentCollectionDate',
        'current_dbt' => 'setCurrentDbt',
        'tax_id' => 'setTaxId',
        'earliest_ucc_date' => 'setEarliestUccDate',
        'most_recent_ucc_date' => 'setMostRecentUccDate',
        'bankruptcy_indicator' => 'setBankruptcyIndicator',
        'judgment_indicator' => 'setJudgmentIndicator',
        'tax_lien_indicator' => 'setTaxLienIndicator',
        'inquiries_previous9_months' => 'setInquiriesPrevious9Months',
        'lien_balance' => 'setLienBalance',
        'judgment_balance' => 'setJudgmentBalance',
        'year_of_incorporation' => 'setYearOfIncorporation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankruptcy_count' => 'getBankruptcyCount',
        'earliest_bankruptcy_date' => 'getEarliestBankruptcyDate',
        'most_recent_bankruptcy_date' => 'getMostRecentBankruptcyDate',
        'tax_lien_count' => 'getTaxLienCount',
        'earliest_tax_lien_date' => 'getEarliestTaxLienDate',
        'most_recent_tax_lien_date' => 'getMostRecentTaxLienDate',
        'judgment_count' => 'getJudgmentCount',
        'earliest_judgment_date' => 'getEarliestJudgmentDate',
        'most_recent_judgment_date' => 'getMostRecentJudgmentDate',
        'collection_count' => 'getCollectionCount',
        'legal_balance' => 'getLegalBalance',
        'ucc_filings' => 'getUccFilings',
        'ucc_derogatory_count' => 'getUccDerogatoryCount',
        'current_account_balance' => 'getCurrentAccountBalance',
        'current_tradeline_count' => 'getCurrentTradelineCount',
        'monthly_average_dbt' => 'getMonthlyAverageDbt',
        'highest_dbt6_months' => 'getHighestDbt6Months',
        'highest_dbt5_quarters' => 'getHighestDbt5Quarters',
        'active_tradeline_count' => 'getActiveTradelineCount',
        'all_tradeline_balance' => 'getAllTradelineBalance',
        'all_tradeline_count' => 'getAllTradelineCount',
        'average_balance5_quarters' => 'getAverageBalance5Quarters',
        'single_line_high_credit' => 'getSingleLineHighCredit',
        'low_balance6_months' => 'getLowBalance6Months',
        'high_balance6_months' => 'getHighBalance6Months',
        'earliest_collection_date' => 'getEarliestCollectionDate',
        'most_recent_collection_date' => 'getMostRecentCollectionDate',
        'current_dbt' => 'getCurrentDbt',
        'tax_id' => 'getTaxId',
        'earliest_ucc_date' => 'getEarliestUccDate',
        'most_recent_ucc_date' => 'getMostRecentUccDate',
        'bankruptcy_indicator' => 'getBankruptcyIndicator',
        'judgment_indicator' => 'getJudgmentIndicator',
        'tax_lien_indicator' => 'getTaxLienIndicator',
        'inquiries_previous9_months' => 'getInquiriesPrevious9Months',
        'lien_balance' => 'getLienBalance',
        'judgment_balance' => 'getJudgmentBalance',
        'year_of_incorporation' => 'getYearOfIncorporation'
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
        $this->setIfExists('bankruptcy_count', $data ?? [], null);
        $this->setIfExists('earliest_bankruptcy_date', $data ?? [], null);
        $this->setIfExists('most_recent_bankruptcy_date', $data ?? [], null);
        $this->setIfExists('tax_lien_count', $data ?? [], null);
        $this->setIfExists('earliest_tax_lien_date', $data ?? [], null);
        $this->setIfExists('most_recent_tax_lien_date', $data ?? [], null);
        $this->setIfExists('judgment_count', $data ?? [], null);
        $this->setIfExists('earliest_judgment_date', $data ?? [], null);
        $this->setIfExists('most_recent_judgment_date', $data ?? [], null);
        $this->setIfExists('collection_count', $data ?? [], null);
        $this->setIfExists('legal_balance', $data ?? [], null);
        $this->setIfExists('ucc_filings', $data ?? [], null);
        $this->setIfExists('ucc_derogatory_count', $data ?? [], null);
        $this->setIfExists('current_account_balance', $data ?? [], null);
        $this->setIfExists('current_tradeline_count', $data ?? [], null);
        $this->setIfExists('monthly_average_dbt', $data ?? [], null);
        $this->setIfExists('highest_dbt6_months', $data ?? [], null);
        $this->setIfExists('highest_dbt5_quarters', $data ?? [], null);
        $this->setIfExists('active_tradeline_count', $data ?? [], null);
        $this->setIfExists('all_tradeline_balance', $data ?? [], null);
        $this->setIfExists('all_tradeline_count', $data ?? [], null);
        $this->setIfExists('average_balance5_quarters', $data ?? [], null);
        $this->setIfExists('single_line_high_credit', $data ?? [], null);
        $this->setIfExists('low_balance6_months', $data ?? [], null);
        $this->setIfExists('high_balance6_months', $data ?? [], null);
        $this->setIfExists('earliest_collection_date', $data ?? [], null);
        $this->setIfExists('most_recent_collection_date', $data ?? [], null);
        $this->setIfExists('current_dbt', $data ?? [], null);
        $this->setIfExists('tax_id', $data ?? [], null);
        $this->setIfExists('earliest_ucc_date', $data ?? [], null);
        $this->setIfExists('most_recent_ucc_date', $data ?? [], null);
        $this->setIfExists('bankruptcy_indicator', $data ?? [], null);
        $this->setIfExists('judgment_indicator', $data ?? [], null);
        $this->setIfExists('tax_lien_indicator', $data ?? [], null);
        $this->setIfExists('inquiries_previous9_months', $data ?? [], null);
        $this->setIfExists('lien_balance', $data ?? [], null);
        $this->setIfExists('judgment_balance', $data ?? [], null);
        $this->setIfExists('year_of_incorporation', $data ?? [], null);
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
     * Gets bankruptcy_count
     *
     * @return float|null
     */
    public function getBankruptcyCount()
    {
        return $this->container['bankruptcy_count'];
    }

    /**
     * Sets bankruptcy_count
     *
     * @param float|null $bankruptcy_count Bankruptcy count
     *
     * @return self
     */
    public function setBankruptcyCount($bankruptcy_count)
    {
        if (is_null($bankruptcy_count)) {
            throw new \InvalidArgumentException('non-nullable bankruptcy_count cannot be null');
        }
        $this->container['bankruptcy_count'] = $bankruptcy_count;

        return $this;
    }

    /**
     * Gets earliest_bankruptcy_date
     *
     * @return string|null
     */
    public function getEarliestBankruptcyDate()
    {
        return $this->container['earliest_bankruptcy_date'];
    }

    /**
     * Sets earliest_bankruptcy_date
     *
     * @param string|null $earliest_bankruptcy_date Earliest bankruptcy date on file
     *
     * @return self
     */
    public function setEarliestBankruptcyDate($earliest_bankruptcy_date)
    {
        if (is_null($earliest_bankruptcy_date)) {
            throw new \InvalidArgumentException('non-nullable earliest_bankruptcy_date cannot be null');
        }
        $this->container['earliest_bankruptcy_date'] = $earliest_bankruptcy_date;

        return $this;
    }

    /**
     * Gets most_recent_bankruptcy_date
     *
     * @return string|null
     */
    public function getMostRecentBankruptcyDate()
    {
        return $this->container['most_recent_bankruptcy_date'];
    }

    /**
     * Sets most_recent_bankruptcy_date
     *
     * @param string|null $most_recent_bankruptcy_date Most recent bankruptcy date on file
     *
     * @return self
     */
    public function setMostRecentBankruptcyDate($most_recent_bankruptcy_date)
    {
        if (is_null($most_recent_bankruptcy_date)) {
            throw new \InvalidArgumentException('non-nullable most_recent_bankruptcy_date cannot be null');
        }
        $this->container['most_recent_bankruptcy_date'] = $most_recent_bankruptcy_date;

        return $this;
    }

    /**
     * Gets tax_lien_count
     *
     * @return float|null
     */
    public function getTaxLienCount()
    {
        return $this->container['tax_lien_count'];
    }

    /**
     * Sets tax_lien_count
     *
     * @param float|null $tax_lien_count Tax lien count
     *
     * @return self
     */
    public function setTaxLienCount($tax_lien_count)
    {
        if (is_null($tax_lien_count)) {
            throw new \InvalidArgumentException('non-nullable tax_lien_count cannot be null');
        }
        $this->container['tax_lien_count'] = $tax_lien_count;

        return $this;
    }

    /**
     * Gets earliest_tax_lien_date
     *
     * @return string|null
     */
    public function getEarliestTaxLienDate()
    {
        return $this->container['earliest_tax_lien_date'];
    }

    /**
     * Sets earliest_tax_lien_date
     *
     * @param string|null $earliest_tax_lien_date earliest tax lien date on file
     *
     * @return self
     */
    public function setEarliestTaxLienDate($earliest_tax_lien_date)
    {
        if (is_null($earliest_tax_lien_date)) {
            throw new \InvalidArgumentException('non-nullable earliest_tax_lien_date cannot be null');
        }
        $this->container['earliest_tax_lien_date'] = $earliest_tax_lien_date;

        return $this;
    }

    /**
     * Gets most_recent_tax_lien_date
     *
     * @return string|null
     */
    public function getMostRecentTaxLienDate()
    {
        return $this->container['most_recent_tax_lien_date'];
    }

    /**
     * Sets most_recent_tax_lien_date
     *
     * @param string|null $most_recent_tax_lien_date Most recent tax lien date on file
     *
     * @return self
     */
    public function setMostRecentTaxLienDate($most_recent_tax_lien_date)
    {
        if (is_null($most_recent_tax_lien_date)) {
            throw new \InvalidArgumentException('non-nullable most_recent_tax_lien_date cannot be null');
        }
        $this->container['most_recent_tax_lien_date'] = $most_recent_tax_lien_date;

        return $this;
    }

    /**
     * Gets judgment_count
     *
     * @return float|null
     */
    public function getJudgmentCount()
    {
        return $this->container['judgment_count'];
    }

    /**
     * Sets judgment_count
     *
     * @param float|null $judgment_count Judgment count
     *
     * @return self
     */
    public function setJudgmentCount($judgment_count)
    {
        if (is_null($judgment_count)) {
            throw new \InvalidArgumentException('non-nullable judgment_count cannot be null');
        }
        $this->container['judgment_count'] = $judgment_count;

        return $this;
    }

    /**
     * Gets earliest_judgment_date
     *
     * @return string|null
     */
    public function getEarliestJudgmentDate()
    {
        return $this->container['earliest_judgment_date'];
    }

    /**
     * Sets earliest_judgment_date
     *
     * @param string|null $earliest_judgment_date earliest judgment date on file
     *
     * @return self
     */
    public function setEarliestJudgmentDate($earliest_judgment_date)
    {
        if (is_null($earliest_judgment_date)) {
            throw new \InvalidArgumentException('non-nullable earliest_judgment_date cannot be null');
        }
        $this->container['earliest_judgment_date'] = $earliest_judgment_date;

        return $this;
    }

    /**
     * Gets most_recent_judgment_date
     *
     * @return string|null
     */
    public function getMostRecentJudgmentDate()
    {
        return $this->container['most_recent_judgment_date'];
    }

    /**
     * Sets most_recent_judgment_date
     *
     * @param string|null $most_recent_judgment_date Most recent judgment date on file
     *
     * @return self
     */
    public function setMostRecentJudgmentDate($most_recent_judgment_date)
    {
        if (is_null($most_recent_judgment_date)) {
            throw new \InvalidArgumentException('non-nullable most_recent_judgment_date cannot be null');
        }
        $this->container['most_recent_judgment_date'] = $most_recent_judgment_date;

        return $this;
    }

    /**
     * Gets collection_count
     *
     * @return float|null
     */
    public function getCollectionCount()
    {
        return $this->container['collection_count'];
    }

    /**
     * Sets collection_count
     *
     * @param float|null $collection_count Collection count
     *
     * @return self
     */
    public function setCollectionCount($collection_count)
    {
        if (is_null($collection_count)) {
            throw new \InvalidArgumentException('non-nullable collection_count cannot be null');
        }
        $this->container['collection_count'] = $collection_count;

        return $this;
    }

    /**
     * Gets legal_balance
     *
     * @return float|null
     */
    public function getLegalBalance()
    {
        return $this->container['legal_balance'];
    }

    /**
     * Sets legal_balance
     *
     * @param float|null $legal_balance Total balance of bankruptcies, liens, judgments, and collections
     *
     * @return self
     */
    public function setLegalBalance($legal_balance)
    {
        if (is_null($legal_balance)) {
            throw new \InvalidArgumentException('non-nullable legal_balance cannot be null');
        }
        $this->container['legal_balance'] = $legal_balance;

        return $this;
    }

    /**
     * Gets ucc_filings
     *
     * @return float|null
     */
    public function getUccFilings()
    {
        return $this->container['ucc_filings'];
    }

    /**
     * Sets ucc_filings
     *
     * @param float|null $ucc_filings Count of Uniform Commercial Code (UCC) filings
     *
     * @return self
     */
    public function setUccFilings($ucc_filings)
    {
        if (is_null($ucc_filings)) {
            throw new \InvalidArgumentException('non-nullable ucc_filings cannot be null');
        }
        $this->container['ucc_filings'] = $ucc_filings;

        return $this;
    }

    /**
     * Gets ucc_derogatory_count
     *
     * @return float|null
     */
    public function getUccDerogatoryCount()
    {
        return $this->container['ucc_derogatory_count'];
    }

    /**
     * Sets ucc_derogatory_count
     *
     * @param float|null $ucc_derogatory_count Derogatory UCCs include one or more of the following as collateral-     accounts, accounts receivable, contracts, hereafter acquired inventory,   leases, notes receivable, or proceeds. When a business pledges these key   assets to secure financing it may indicate the business is under financial stress
     *
     * @return self
     */
    public function setUccDerogatoryCount($ucc_derogatory_count)
    {
        if (is_null($ucc_derogatory_count)) {
            throw new \InvalidArgumentException('non-nullable ucc_derogatory_count cannot be null');
        }
        $this->container['ucc_derogatory_count'] = $ucc_derogatory_count;

        return $this;
    }

    /**
     * Gets current_account_balance
     *
     * @return float|null
     */
    public function getCurrentAccountBalance()
    {
        return $this->container['current_account_balance'];
    }

    /**
     * Sets current_account_balance
     *
     * @param float|null $current_account_balance Current account balance
     *
     * @return self
     */
    public function setCurrentAccountBalance($current_account_balance)
    {
        if (is_null($current_account_balance)) {
            throw new \InvalidArgumentException('non-nullable current_account_balance cannot be null');
        }
        $this->container['current_account_balance'] = $current_account_balance;

        return $this;
    }

    /**
     * Gets current_tradeline_count
     *
     * @return float|null
     */
    public function getCurrentTradelineCount()
    {
        return $this->container['current_tradeline_count'];
    }

    /**
     * Sets current_tradeline_count
     *
     * @param float|null $current_tradeline_count Current tradeline count
     *
     * @return self
     */
    public function setCurrentTradelineCount($current_tradeline_count)
    {
        if (is_null($current_tradeline_count)) {
            throw new \InvalidArgumentException('non-nullable current_tradeline_count cannot be null');
        }
        $this->container['current_tradeline_count'] = $current_tradeline_count;

        return $this;
    }

    /**
     * Gets monthly_average_dbt
     *
     * @return float|null
     */
    public function getMonthlyAverageDbt()
    {
        return $this->container['monthly_average_dbt'];
    }

    /**
     * Sets monthly_average_dbt
     *
     * @param float|null $monthly_average_dbt Monthly average DBT
     *
     * @return self
     */
    public function setMonthlyAverageDbt($monthly_average_dbt)
    {
        if (is_null($monthly_average_dbt)) {
            throw new \InvalidArgumentException('non-nullable monthly_average_dbt cannot be null');
        }
        $this->container['monthly_average_dbt'] = $monthly_average_dbt;

        return $this;
    }

    /**
     * Gets highest_dbt6_months
     *
     * @return float|null
     */
    public function getHighestDbt6Months()
    {
        return $this->container['highest_dbt6_months'];
    }

    /**
     * Sets highest_dbt6_months
     *
     * @param float|null $highest_dbt6_months The highest DBT in the past 6 months
     *
     * @return self
     */
    public function setHighestDbt6Months($highest_dbt6_months)
    {
        if (is_null($highest_dbt6_months)) {
            throw new \InvalidArgumentException('non-nullable highest_dbt6_months cannot be null');
        }
        $this->container['highest_dbt6_months'] = $highest_dbt6_months;

        return $this;
    }

    /**
     * Gets highest_dbt5_quarters
     *
     * @return float|null
     */
    public function getHighestDbt5Quarters()
    {
        return $this->container['highest_dbt5_quarters'];
    }

    /**
     * Sets highest_dbt5_quarters
     *
     * @param float|null $highest_dbt5_quarters The highest DBT in the past 5 quarters
     *
     * @return self
     */
    public function setHighestDbt5Quarters($highest_dbt5_quarters)
    {
        if (is_null($highest_dbt5_quarters)) {
            throw new \InvalidArgumentException('non-nullable highest_dbt5_quarters cannot be null');
        }
        $this->container['highest_dbt5_quarters'] = $highest_dbt5_quarters;

        return $this;
    }

    /**
     * Gets active_tradeline_count
     *
     * @return float|null
     */
    public function getActiveTradelineCount()
    {
        return $this->container['active_tradeline_count'];
    }

    /**
     * Sets active_tradeline_count
     *
     * @param float|null $active_tradeline_count Active tradeline count
     *
     * @return self
     */
    public function setActiveTradelineCount($active_tradeline_count)
    {
        if (is_null($active_tradeline_count)) {
            throw new \InvalidArgumentException('non-nullable active_tradeline_count cannot be null');
        }
        $this->container['active_tradeline_count'] = $active_tradeline_count;

        return $this;
    }

    /**
     * Gets all_tradeline_balance
     *
     * @return float|null
     */
    public function getAllTradelineBalance()
    {
        return $this->container['all_tradeline_balance'];
    }

    /**
     * Sets all_tradeline_balance
     *
     * @param float|null $all_tradeline_balance Total balance of all tradelines
     *
     * @return self
     */
    public function setAllTradelineBalance($all_tradeline_balance)
    {
        if (is_null($all_tradeline_balance)) {
            throw new \InvalidArgumentException('non-nullable all_tradeline_balance cannot be null');
        }
        $this->container['all_tradeline_balance'] = $all_tradeline_balance;

        return $this;
    }

    /**
     * Gets all_tradeline_count
     *
     * @return float|null
     */
    public function getAllTradelineCount()
    {
        return $this->container['all_tradeline_count'];
    }

    /**
     * Sets all_tradeline_count
     *
     * @param float|null $all_tradeline_count Total count of all tradelines
     *
     * @return self
     */
    public function setAllTradelineCount($all_tradeline_count)
    {
        if (is_null($all_tradeline_count)) {
            throw new \InvalidArgumentException('non-nullable all_tradeline_count cannot be null');
        }
        $this->container['all_tradeline_count'] = $all_tradeline_count;

        return $this;
    }

    /**
     * Gets average_balance5_quarters
     *
     * @return float|null
     */
    public function getAverageBalance5Quarters()
    {
        return $this->container['average_balance5_quarters'];
    }

    /**
     * Sets average_balance5_quarters
     *
     * @param float|null $average_balance5_quarters Average balance over the past 5 quarters
     *
     * @return self
     */
    public function setAverageBalance5Quarters($average_balance5_quarters)
    {
        if (is_null($average_balance5_quarters)) {
            throw new \InvalidArgumentException('non-nullable average_balance5_quarters cannot be null');
        }
        $this->container['average_balance5_quarters'] = $average_balance5_quarters;

        return $this;
    }

    /**
     * Gets single_line_high_credit
     *
     * @return float|null
     */
    public function getSingleLineHighCredit()
    {
        return $this->container['single_line_high_credit'];
    }

    /**
     * Sets single_line_high_credit
     *
     * @param float|null $single_line_high_credit Single Line high credit in any one tradeline
     *
     * @return self
     */
    public function setSingleLineHighCredit($single_line_high_credit)
    {
        if (is_null($single_line_high_credit)) {
            throw new \InvalidArgumentException('non-nullable single_line_high_credit cannot be null');
        }
        $this->container['single_line_high_credit'] = $single_line_high_credit;

        return $this;
    }

    /**
     * Gets low_balance6_months
     *
     * @return float|null
     */
    public function getLowBalance6Months()
    {
        return $this->container['low_balance6_months'];
    }

    /**
     * Sets low_balance6_months
     *
     * @param float|null $low_balance6_months Lowest total balance in the past 6 months
     *
     * @return self
     */
    public function setLowBalance6Months($low_balance6_months)
    {
        if (is_null($low_balance6_months)) {
            throw new \InvalidArgumentException('non-nullable low_balance6_months cannot be null');
        }
        $this->container['low_balance6_months'] = $low_balance6_months;

        return $this;
    }

    /**
     * Gets high_balance6_months
     *
     * @return float|null
     */
    public function getHighBalance6Months()
    {
        return $this->container['high_balance6_months'];
    }

    /**
     * Sets high_balance6_months
     *
     * @param float|null $high_balance6_months Highest total balance in the past 6 months
     *
     * @return self
     */
    public function setHighBalance6Months($high_balance6_months)
    {
        if (is_null($high_balance6_months)) {
            throw new \InvalidArgumentException('non-nullable high_balance6_months cannot be null');
        }
        $this->container['high_balance6_months'] = $high_balance6_months;

        return $this;
    }

    /**
     * Gets earliest_collection_date
     *
     * @return string|null
     */
    public function getEarliestCollectionDate()
    {
        return $this->container['earliest_collection_date'];
    }

    /**
     * Sets earliest_collection_date
     *
     * @param string|null $earliest_collection_date earliest collection date
     *
     * @return self
     */
    public function setEarliestCollectionDate($earliest_collection_date)
    {
        if (is_null($earliest_collection_date)) {
            throw new \InvalidArgumentException('non-nullable earliest_collection_date cannot be null');
        }
        $this->container['earliest_collection_date'] = $earliest_collection_date;

        return $this;
    }

    /**
     * Gets most_recent_collection_date
     *
     * @return string|null
     */
    public function getMostRecentCollectionDate()
    {
        return $this->container['most_recent_collection_date'];
    }

    /**
     * Sets most_recent_collection_date
     *
     * @param string|null $most_recent_collection_date Most recent collection date
     *
     * @return self
     */
    public function setMostRecentCollectionDate($most_recent_collection_date)
    {
        if (is_null($most_recent_collection_date)) {
            throw new \InvalidArgumentException('non-nullable most_recent_collection_date cannot be null');
        }
        $this->container['most_recent_collection_date'] = $most_recent_collection_date;

        return $this;
    }

    /**
     * Gets current_dbt
     *
     * @return float|null
     */
    public function getCurrentDbt()
    {
        return $this->container['current_dbt'];
    }

    /**
     * Sets current_dbt
     *
     * @param float|null $current_dbt Current DBT
     *
     * @return self
     */
    public function setCurrentDbt($current_dbt)
    {
        if (is_null($current_dbt)) {
            throw new \InvalidArgumentException('non-nullable current_dbt cannot be null');
        }
        $this->container['current_dbt'] = $current_dbt;

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
     * @param string|null $tax_id taxId
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets earliest_ucc_date
     *
     * @return string|null
     */
    public function getEarliestUccDate()
    {
        return $this->container['earliest_ucc_date'];
    }

    /**
     * Sets earliest_ucc_date
     *
     * @param string|null $earliest_ucc_date earliest UCC filing date
     *
     * @return self
     */
    public function setEarliestUccDate($earliest_ucc_date)
    {
        if (is_null($earliest_ucc_date)) {
            throw new \InvalidArgumentException('non-nullable earliest_ucc_date cannot be null');
        }
        $this->container['earliest_ucc_date'] = $earliest_ucc_date;

        return $this;
    }

    /**
     * Gets most_recent_ucc_date
     *
     * @return string|null
     */
    public function getMostRecentUccDate()
    {
        return $this->container['most_recent_ucc_date'];
    }

    /**
     * Sets most_recent_ucc_date
     *
     * @param string|null $most_recent_ucc_date Most recent UCC filing date
     *
     * @return self
     */
    public function setMostRecentUccDate($most_recent_ucc_date)
    {
        if (is_null($most_recent_ucc_date)) {
            throw new \InvalidArgumentException('non-nullable most_recent_ucc_date cannot be null');
        }
        $this->container['most_recent_ucc_date'] = $most_recent_ucc_date;

        return $this;
    }

    /**
     * Gets bankruptcy_indicator
     *
     * @return bool|null
     */
    public function getBankruptcyIndicator()
    {
        return $this->container['bankruptcy_indicator'];
    }

    /**
     * Sets bankruptcy_indicator
     *
     * @param bool|null $bankruptcy_indicator True = Bankruptices on file have been Dismissed, Discharged or Completed
     *
     * @return self
     */
    public function setBankruptcyIndicator($bankruptcy_indicator)
    {
        if (is_null($bankruptcy_indicator)) {
            throw new \InvalidArgumentException('non-nullable bankruptcy_indicator cannot be null');
        }
        $this->container['bankruptcy_indicator'] = $bankruptcy_indicator;

        return $this;
    }

    /**
     * Gets judgment_indicator
     *
     * @return bool|null
     */
    public function getJudgmentIndicator()
    {
        return $this->container['judgment_indicator'];
    }

    /**
     * Sets judgment_indicator
     *
     * @param bool|null $judgment_indicator True = Judgments on file have been Satisfied
     *
     * @return self
     */
    public function setJudgmentIndicator($judgment_indicator)
    {
        if (is_null($judgment_indicator)) {
            throw new \InvalidArgumentException('non-nullable judgment_indicator cannot be null');
        }
        $this->container['judgment_indicator'] = $judgment_indicator;

        return $this;
    }

    /**
     * Gets tax_lien_indicator
     *
     * @return bool|null
     */
    public function getTaxLienIndicator()
    {
        return $this->container['tax_lien_indicator'];
    }

    /**
     * Sets tax_lien_indicator
     *
     * @param bool|null $tax_lien_indicator True = Liens on file have been Released
     *
     * @return self
     */
    public function setTaxLienIndicator($tax_lien_indicator)
    {
        if (is_null($tax_lien_indicator)) {
            throw new \InvalidArgumentException('non-nullable tax_lien_indicator cannot be null');
        }
        $this->container['tax_lien_indicator'] = $tax_lien_indicator;

        return $this;
    }

    /**
     * Gets inquiries_previous9_months
     *
     * @return float|null
     */
    public function getInquiriesPrevious9Months()
    {
        return $this->container['inquiries_previous9_months'];
    }

    /**
     * Sets inquiries_previous9_months
     *
     * @param float|null $inquiries_previous9_months Inquiries Previous 9 Months
     *
     * @return self
     */
    public function setInquiriesPrevious9Months($inquiries_previous9_months)
    {
        if (is_null($inquiries_previous9_months)) {
            throw new \InvalidArgumentException('non-nullable inquiries_previous9_months cannot be null');
        }
        $this->container['inquiries_previous9_months'] = $inquiries_previous9_months;

        return $this;
    }

    /**
     * Gets lien_balance
     *
     * @return float|null
     */
    public function getLienBalance()
    {
        return $this->container['lien_balance'];
    }

    /**
     * Sets lien_balance
     *
     * @param float|null $lien_balance Lien Balance
     *
     * @return self
     */
    public function setLienBalance($lien_balance)
    {
        if (is_null($lien_balance)) {
            throw new \InvalidArgumentException('non-nullable lien_balance cannot be null');
        }
        $this->container['lien_balance'] = $lien_balance;

        return $this;
    }

    /**
     * Gets judgment_balance
     *
     * @return float|null
     */
    public function getJudgmentBalance()
    {
        return $this->container['judgment_balance'];
    }

    /**
     * Sets judgment_balance
     *
     * @param float|null $judgment_balance Judgment Balance
     *
     * @return self
     */
    public function setJudgmentBalance($judgment_balance)
    {
        if (is_null($judgment_balance)) {
            throw new \InvalidArgumentException('non-nullable judgment_balance cannot be null');
        }
        $this->container['judgment_balance'] = $judgment_balance;

        return $this;
    }

    /**
     * Gets year_of_incorporation
     *
     * @return string|null
     */
    public function getYearOfIncorporation()
    {
        return $this->container['year_of_incorporation'];
    }

    /**
     * Sets year_of_incorporation
     *
     * @param string|null $year_of_incorporation year Of Incorporation
     *
     * @return self
     */
    public function setYearOfIncorporation($year_of_incorporation)
    {
        if (is_null($year_of_incorporation)) {
            throw new \InvalidArgumentException('non-nullable year_of_incorporation cannot be null');
        }
        $this->container['year_of_incorporation'] = $year_of_incorporation;

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


