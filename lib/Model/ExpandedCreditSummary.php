<?php
/**
 * ExpandedCreditSummary
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
 * ExpandedCreditSummary Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpandedCreditSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'expandedCreditSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bankruptcy_count' => 'float',
        'oldest_bankruptcy_date' => 'string',
        'most_recent_bankruptcy_date' => 'string',
        'tax_lien_count' => 'float',
        'oldest_tax_lien_date' => 'string',
        'most_recent_tax_lien_date' => 'string',
        'judgment_count' => 'float',
        'oldest_judgment_date' => 'string',
        'most_recent_judgment_date' => 'string',
        'collection_count' => 'float',
        'collection_balance' => 'float',
        'collection_count_past24_months' => 'float',
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
        'single_high_credit' => 'float',
        'low_balance6_months' => 'float',
        'high_balance6_months' => 'float',
        'oldest_collection_date' => 'string',
        'most_recent_collection_date' => 'string',
        'current_dbt' => 'float',
        'oldest_ucc_date' => 'string',
        'most_recent_ucc_date' => 'string',
        'bankruptcy_indicator' => 'bool',
        'judgment_indicator' => 'bool',
        'tax_lien_indicator' => 'bool',
        'trade_collection_count' => 'float',
        'trade_collection_balance' => 'float',
        'open_collection_count' => 'float',
        'open_collection_balance' => 'float',
        'ofac_match_warning' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummaryOfacMatchWarning',
        'victim_statement_indicator' => 'bool',
        'commercial_fraud_risk_indicator_count' => 'float',
        'unsummarized_tradeline_count' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bankruptcy_count' => null,
        'oldest_bankruptcy_date' => null,
        'most_recent_bankruptcy_date' => null,
        'tax_lien_count' => null,
        'oldest_tax_lien_date' => null,
        'most_recent_tax_lien_date' => null,
        'judgment_count' => null,
        'oldest_judgment_date' => null,
        'most_recent_judgment_date' => null,
        'collection_count' => null,
        'collection_balance' => null,
        'collection_count_past24_months' => null,
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
        'single_high_credit' => null,
        'low_balance6_months' => null,
        'high_balance6_months' => null,
        'oldest_collection_date' => null,
        'most_recent_collection_date' => null,
        'current_dbt' => null,
        'oldest_ucc_date' => null,
        'most_recent_ucc_date' => null,
        'bankruptcy_indicator' => null,
        'judgment_indicator' => null,
        'tax_lien_indicator' => null,
        'trade_collection_count' => null,
        'trade_collection_balance' => null,
        'open_collection_count' => null,
        'open_collection_balance' => null,
        'ofac_match_warning' => null,
        'victim_statement_indicator' => null,
        'commercial_fraud_risk_indicator_count' => null,
        'unsummarized_tradeline_count' => null
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
        'bankruptcy_count' => 'bankruptcyCount',
        'oldest_bankruptcy_date' => 'oldestBankruptcyDate',
        'most_recent_bankruptcy_date' => 'mostRecentBankruptcyDate',
        'tax_lien_count' => 'taxLienCount',
        'oldest_tax_lien_date' => 'oldestTaxLienDate',
        'most_recent_tax_lien_date' => 'mostRecentTaxLienDate',
        'judgment_count' => 'judgmentCount',
        'oldest_judgment_date' => 'oldestJudgmentDate',
        'most_recent_judgment_date' => 'mostRecentJudgmentDate',
        'collection_count' => 'collectionCount',
        'collection_balance' => 'collectionBalance',
        'collection_count_past24_months' => 'collectionCountPast24Months',
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
        'single_high_credit' => 'singleHighCredit',
        'low_balance6_months' => 'lowBalance6Months',
        'high_balance6_months' => 'highBalance6Months',
        'oldest_collection_date' => 'oldestCollectionDate',
        'most_recent_collection_date' => 'mostRecentCollectionDate',
        'current_dbt' => 'currentDbt',
        'oldest_ucc_date' => 'oldestUccDate',
        'most_recent_ucc_date' => 'mostRecentUccDate',
        'bankruptcy_indicator' => 'bankruptcyIndicator',
        'judgment_indicator' => 'judgmentIndicator',
        'tax_lien_indicator' => 'taxLienIndicator',
        'trade_collection_count' => 'tradeCollectionCount',
        'trade_collection_balance' => 'tradeCollectionBalance',
        'open_collection_count' => 'openCollectionCount',
        'open_collection_balance' => 'openCollectionBalance',
        'ofac_match_warning' => 'ofacMatchWarning',
        'victim_statement_indicator' => 'victimStatementIndicator',
        'commercial_fraud_risk_indicator_count' => 'commercialFraudRiskIndicatorCount',
        'unsummarized_tradeline_count' => 'unsummarizedTradelineCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankruptcy_count' => 'setBankruptcyCount',
        'oldest_bankruptcy_date' => 'setOldestBankruptcyDate',
        'most_recent_bankruptcy_date' => 'setMostRecentBankruptcyDate',
        'tax_lien_count' => 'setTaxLienCount',
        'oldest_tax_lien_date' => 'setOldestTaxLienDate',
        'most_recent_tax_lien_date' => 'setMostRecentTaxLienDate',
        'judgment_count' => 'setJudgmentCount',
        'oldest_judgment_date' => 'setOldestJudgmentDate',
        'most_recent_judgment_date' => 'setMostRecentJudgmentDate',
        'collection_count' => 'setCollectionCount',
        'collection_balance' => 'setCollectionBalance',
        'collection_count_past24_months' => 'setCollectionCountPast24Months',
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
        'single_high_credit' => 'setSingleHighCredit',
        'low_balance6_months' => 'setLowBalance6Months',
        'high_balance6_months' => 'setHighBalance6Months',
        'oldest_collection_date' => 'setOldestCollectionDate',
        'most_recent_collection_date' => 'setMostRecentCollectionDate',
        'current_dbt' => 'setCurrentDbt',
        'oldest_ucc_date' => 'setOldestUccDate',
        'most_recent_ucc_date' => 'setMostRecentUccDate',
        'bankruptcy_indicator' => 'setBankruptcyIndicator',
        'judgment_indicator' => 'setJudgmentIndicator',
        'tax_lien_indicator' => 'setTaxLienIndicator',
        'trade_collection_count' => 'setTradeCollectionCount',
        'trade_collection_balance' => 'setTradeCollectionBalance',
        'open_collection_count' => 'setOpenCollectionCount',
        'open_collection_balance' => 'setOpenCollectionBalance',
        'ofac_match_warning' => 'setOfacMatchWarning',
        'victim_statement_indicator' => 'setVictimStatementIndicator',
        'commercial_fraud_risk_indicator_count' => 'setCommercialFraudRiskIndicatorCount',
        'unsummarized_tradeline_count' => 'setUnsummarizedTradelineCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankruptcy_count' => 'getBankruptcyCount',
        'oldest_bankruptcy_date' => 'getOldestBankruptcyDate',
        'most_recent_bankruptcy_date' => 'getMostRecentBankruptcyDate',
        'tax_lien_count' => 'getTaxLienCount',
        'oldest_tax_lien_date' => 'getOldestTaxLienDate',
        'most_recent_tax_lien_date' => 'getMostRecentTaxLienDate',
        'judgment_count' => 'getJudgmentCount',
        'oldest_judgment_date' => 'getOldestJudgmentDate',
        'most_recent_judgment_date' => 'getMostRecentJudgmentDate',
        'collection_count' => 'getCollectionCount',
        'collection_balance' => 'getCollectionBalance',
        'collection_count_past24_months' => 'getCollectionCountPast24Months',
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
        'single_high_credit' => 'getSingleHighCredit',
        'low_balance6_months' => 'getLowBalance6Months',
        'high_balance6_months' => 'getHighBalance6Months',
        'oldest_collection_date' => 'getOldestCollectionDate',
        'most_recent_collection_date' => 'getMostRecentCollectionDate',
        'current_dbt' => 'getCurrentDbt',
        'oldest_ucc_date' => 'getOldestUccDate',
        'most_recent_ucc_date' => 'getMostRecentUccDate',
        'bankruptcy_indicator' => 'getBankruptcyIndicator',
        'judgment_indicator' => 'getJudgmentIndicator',
        'tax_lien_indicator' => 'getTaxLienIndicator',
        'trade_collection_count' => 'getTradeCollectionCount',
        'trade_collection_balance' => 'getTradeCollectionBalance',
        'open_collection_count' => 'getOpenCollectionCount',
        'open_collection_balance' => 'getOpenCollectionBalance',
        'ofac_match_warning' => 'getOfacMatchWarning',
        'victim_statement_indicator' => 'getVictimStatementIndicator',
        'commercial_fraud_risk_indicator_count' => 'getCommercialFraudRiskIndicatorCount',
        'unsummarized_tradeline_count' => 'getUnsummarizedTradelineCount'
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
        $this->container['bankruptcy_count'] = isset($data['bankruptcy_count']) ? $data['bankruptcy_count'] : null;
        $this->container['oldest_bankruptcy_date'] = isset($data['oldest_bankruptcy_date']) ? $data['oldest_bankruptcy_date'] : null;
        $this->container['most_recent_bankruptcy_date'] = isset($data['most_recent_bankruptcy_date']) ? $data['most_recent_bankruptcy_date'] : null;
        $this->container['tax_lien_count'] = isset($data['tax_lien_count']) ? $data['tax_lien_count'] : null;
        $this->container['oldest_tax_lien_date'] = isset($data['oldest_tax_lien_date']) ? $data['oldest_tax_lien_date'] : null;
        $this->container['most_recent_tax_lien_date'] = isset($data['most_recent_tax_lien_date']) ? $data['most_recent_tax_lien_date'] : null;
        $this->container['judgment_count'] = isset($data['judgment_count']) ? $data['judgment_count'] : null;
        $this->container['oldest_judgment_date'] = isset($data['oldest_judgment_date']) ? $data['oldest_judgment_date'] : null;
        $this->container['most_recent_judgment_date'] = isset($data['most_recent_judgment_date']) ? $data['most_recent_judgment_date'] : null;
        $this->container['collection_count'] = isset($data['collection_count']) ? $data['collection_count'] : null;
        $this->container['collection_balance'] = isset($data['collection_balance']) ? $data['collection_balance'] : null;
        $this->container['collection_count_past24_months'] = isset($data['collection_count_past24_months']) ? $data['collection_count_past24_months'] : null;
        $this->container['legal_balance'] = isset($data['legal_balance']) ? $data['legal_balance'] : null;
        $this->container['ucc_filings'] = isset($data['ucc_filings']) ? $data['ucc_filings'] : null;
        $this->container['ucc_derogatory_count'] = isset($data['ucc_derogatory_count']) ? $data['ucc_derogatory_count'] : null;
        $this->container['current_account_balance'] = isset($data['current_account_balance']) ? $data['current_account_balance'] : null;
        $this->container['current_tradeline_count'] = isset($data['current_tradeline_count']) ? $data['current_tradeline_count'] : null;
        $this->container['monthly_average_dbt'] = isset($data['monthly_average_dbt']) ? $data['monthly_average_dbt'] : null;
        $this->container['highest_dbt6_months'] = isset($data['highest_dbt6_months']) ? $data['highest_dbt6_months'] : null;
        $this->container['highest_dbt5_quarters'] = isset($data['highest_dbt5_quarters']) ? $data['highest_dbt5_quarters'] : null;
        $this->container['active_tradeline_count'] = isset($data['active_tradeline_count']) ? $data['active_tradeline_count'] : null;
        $this->container['all_tradeline_balance'] = isset($data['all_tradeline_balance']) ? $data['all_tradeline_balance'] : null;
        $this->container['all_tradeline_count'] = isset($data['all_tradeline_count']) ? $data['all_tradeline_count'] : null;
        $this->container['average_balance5_quarters'] = isset($data['average_balance5_quarters']) ? $data['average_balance5_quarters'] : null;
        $this->container['single_high_credit'] = isset($data['single_high_credit']) ? $data['single_high_credit'] : null;
        $this->container['low_balance6_months'] = isset($data['low_balance6_months']) ? $data['low_balance6_months'] : null;
        $this->container['high_balance6_months'] = isset($data['high_balance6_months']) ? $data['high_balance6_months'] : null;
        $this->container['oldest_collection_date'] = isset($data['oldest_collection_date']) ? $data['oldest_collection_date'] : null;
        $this->container['most_recent_collection_date'] = isset($data['most_recent_collection_date']) ? $data['most_recent_collection_date'] : null;
        $this->container['current_dbt'] = isset($data['current_dbt']) ? $data['current_dbt'] : null;
        $this->container['oldest_ucc_date'] = isset($data['oldest_ucc_date']) ? $data['oldest_ucc_date'] : null;
        $this->container['most_recent_ucc_date'] = isset($data['most_recent_ucc_date']) ? $data['most_recent_ucc_date'] : null;
        $this->container['bankruptcy_indicator'] = isset($data['bankruptcy_indicator']) ? $data['bankruptcy_indicator'] : null;
        $this->container['judgment_indicator'] = isset($data['judgment_indicator']) ? $data['judgment_indicator'] : null;
        $this->container['tax_lien_indicator'] = isset($data['tax_lien_indicator']) ? $data['tax_lien_indicator'] : null;
        $this->container['trade_collection_count'] = isset($data['trade_collection_count']) ? $data['trade_collection_count'] : null;
        $this->container['trade_collection_balance'] = isset($data['trade_collection_balance']) ? $data['trade_collection_balance'] : null;
        $this->container['open_collection_count'] = isset($data['open_collection_count']) ? $data['open_collection_count'] : null;
        $this->container['open_collection_balance'] = isset($data['open_collection_balance']) ? $data['open_collection_balance'] : null;
        $this->container['ofac_match_warning'] = isset($data['ofac_match_warning']) ? $data['ofac_match_warning'] : null;
        $this->container['victim_statement_indicator'] = isset($data['victim_statement_indicator']) ? $data['victim_statement_indicator'] : null;
        $this->container['commercial_fraud_risk_indicator_count'] = isset($data['commercial_fraud_risk_indicator_count']) ? $data['commercial_fraud_risk_indicator_count'] : null;
        $this->container['unsummarized_tradeline_count'] = isset($data['unsummarized_tradeline_count']) ? $data['unsummarized_tradeline_count'] : null;
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
     * @return float
     */
    public function getBankruptcyCount()
    {
        return $this->container['bankruptcy_count'];
    }

    /**
     * Sets bankruptcy_count
     *
     * @param float $bankruptcy_count Bankruptcy count
     *
     * @return $this
     */
    public function setBankruptcyCount($bankruptcy_count)
    {
        $this->container['bankruptcy_count'] = $bankruptcy_count;

        return $this;
    }

    /**
     * Gets oldest_bankruptcy_date
     *
     * @return string
     */
    public function getOldestBankruptcyDate()
    {
        return $this->container['oldest_bankruptcy_date'];
    }

    /**
     * Sets oldest_bankruptcy_date
     *
     * @param string $oldest_bankruptcy_date Oldest bankruptcy date on file
     *
     * @return $this
     */
    public function setOldestBankruptcyDate($oldest_bankruptcy_date)
    {
        $this->container['oldest_bankruptcy_date'] = $oldest_bankruptcy_date;

        return $this;
    }

    /**
     * Gets most_recent_bankruptcy_date
     *
     * @return string
     */
    public function getMostRecentBankruptcyDate()
    {
        return $this->container['most_recent_bankruptcy_date'];
    }

    /**
     * Sets most_recent_bankruptcy_date
     *
     * @param string $most_recent_bankruptcy_date Most recent bankruptcy date on file
     *
     * @return $this
     */
    public function setMostRecentBankruptcyDate($most_recent_bankruptcy_date)
    {
        $this->container['most_recent_bankruptcy_date'] = $most_recent_bankruptcy_date;

        return $this;
    }

    /**
     * Gets tax_lien_count
     *
     * @return float
     */
    public function getTaxLienCount()
    {
        return $this->container['tax_lien_count'];
    }

    /**
     * Sets tax_lien_count
     *
     * @param float $tax_lien_count Tax lien count
     *
     * @return $this
     */
    public function setTaxLienCount($tax_lien_count)
    {
        $this->container['tax_lien_count'] = $tax_lien_count;

        return $this;
    }

    /**
     * Gets oldest_tax_lien_date
     *
     * @return string
     */
    public function getOldestTaxLienDate()
    {
        return $this->container['oldest_tax_lien_date'];
    }

    /**
     * Sets oldest_tax_lien_date
     *
     * @param string $oldest_tax_lien_date Oldest tax lien date on file
     *
     * @return $this
     */
    public function setOldestTaxLienDate($oldest_tax_lien_date)
    {
        $this->container['oldest_tax_lien_date'] = $oldest_tax_lien_date;

        return $this;
    }

    /**
     * Gets most_recent_tax_lien_date
     *
     * @return string
     */
    public function getMostRecentTaxLienDate()
    {
        return $this->container['most_recent_tax_lien_date'];
    }

    /**
     * Sets most_recent_tax_lien_date
     *
     * @param string $most_recent_tax_lien_date Most recent tax lien date on file
     *
     * @return $this
     */
    public function setMostRecentTaxLienDate($most_recent_tax_lien_date)
    {
        $this->container['most_recent_tax_lien_date'] = $most_recent_tax_lien_date;

        return $this;
    }

    /**
     * Gets judgment_count
     *
     * @return float
     */
    public function getJudgmentCount()
    {
        return $this->container['judgment_count'];
    }

    /**
     * Sets judgment_count
     *
     * @param float $judgment_count Judgment count
     *
     * @return $this
     */
    public function setJudgmentCount($judgment_count)
    {
        $this->container['judgment_count'] = $judgment_count;

        return $this;
    }

    /**
     * Gets oldest_judgment_date
     *
     * @return string
     */
    public function getOldestJudgmentDate()
    {
        return $this->container['oldest_judgment_date'];
    }

    /**
     * Sets oldest_judgment_date
     *
     * @param string $oldest_judgment_date Oldest judgment date on file
     *
     * @return $this
     */
    public function setOldestJudgmentDate($oldest_judgment_date)
    {
        $this->container['oldest_judgment_date'] = $oldest_judgment_date;

        return $this;
    }

    /**
     * Gets most_recent_judgment_date
     *
     * @return string
     */
    public function getMostRecentJudgmentDate()
    {
        return $this->container['most_recent_judgment_date'];
    }

    /**
     * Sets most_recent_judgment_date
     *
     * @param string $most_recent_judgment_date Most recent judgment date on file
     *
     * @return $this
     */
    public function setMostRecentJudgmentDate($most_recent_judgment_date)
    {
        $this->container['most_recent_judgment_date'] = $most_recent_judgment_date;

        return $this;
    }

    /**
     * Gets collection_count
     *
     * @return float
     */
    public function getCollectionCount()
    {
        return $this->container['collection_count'];
    }

    /**
     * Sets collection_count
     *
     * @param float $collection_count Collection count
     *
     * @return $this
     */
    public function setCollectionCount($collection_count)
    {
        $this->container['collection_count'] = $collection_count;

        return $this;
    }

    /**
     * Gets collection_balance
     *
     * @return float
     */
    public function getCollectionBalance()
    {
        return $this->container['collection_balance'];
    }

    /**
     * Sets collection_balance
     *
     * @param float $collection_balance Collection balance
     *
     * @return $this
     */
    public function setCollectionBalance($collection_balance)
    {
        $this->container['collection_balance'] = $collection_balance;

        return $this;
    }

    /**
     * Gets collection_count_past24_months
     *
     * @return float
     */
    public function getCollectionCountPast24Months()
    {
        return $this->container['collection_count_past24_months'];
    }

    /**
     * Sets collection_count_past24_months
     *
     * @param float $collection_count_past24_months Collect count in the past 24 months
     *
     * @return $this
     */
    public function setCollectionCountPast24Months($collection_count_past24_months)
    {
        $this->container['collection_count_past24_months'] = $collection_count_past24_months;

        return $this;
    }

    /**
     * Gets legal_balance
     *
     * @return float
     */
    public function getLegalBalance()
    {
        return $this->container['legal_balance'];
    }

    /**
     * Sets legal_balance
     *
     * @param float $legal_balance Total balance of bankruptcies, liens, judgments, and collections
     *
     * @return $this
     */
    public function setLegalBalance($legal_balance)
    {
        $this->container['legal_balance'] = $legal_balance;

        return $this;
    }

    /**
     * Gets ucc_filings
     *
     * @return float
     */
    public function getUccFilings()
    {
        return $this->container['ucc_filings'];
    }

    /**
     * Sets ucc_filings
     *
     * @param float $ucc_filings Count of Uniform Commercial Code (UCC) filings
     *
     * @return $this
     */
    public function setUccFilings($ucc_filings)
    {
        $this->container['ucc_filings'] = $ucc_filings;

        return $this;
    }

    /**
     * Gets ucc_derogatory_count
     *
     * @return float
     */
    public function getUccDerogatoryCount()
    {
        return $this->container['ucc_derogatory_count'];
    }

    /**
     * Sets ucc_derogatory_count
     *
     * @param float $ucc_derogatory_count Derogatory UCCs include one or more of the following as collateral-  accounts, accounts receivable, contracts, hereafter acquired inventory,  leases, notes receivable, or proceeds. When a business pledges these key  assets to secure financing it may indicate the business is under financial stress
     *
     * @return $this
     */
    public function setUccDerogatoryCount($ucc_derogatory_count)
    {
        $this->container['ucc_derogatory_count'] = $ucc_derogatory_count;

        return $this;
    }

    /**
     * Gets current_account_balance
     *
     * @return float
     */
    public function getCurrentAccountBalance()
    {
        return $this->container['current_account_balance'];
    }

    /**
     * Sets current_account_balance
     *
     * @param float $current_account_balance Current account balance
     *
     * @return $this
     */
    public function setCurrentAccountBalance($current_account_balance)
    {
        $this->container['current_account_balance'] = $current_account_balance;

        return $this;
    }

    /**
     * Gets current_tradeline_count
     *
     * @return float
     */
    public function getCurrentTradelineCount()
    {
        return $this->container['current_tradeline_count'];
    }

    /**
     * Sets current_tradeline_count
     *
     * @param float $current_tradeline_count Current tradeline count
     *
     * @return $this
     */
    public function setCurrentTradelineCount($current_tradeline_count)
    {
        $this->container['current_tradeline_count'] = $current_tradeline_count;

        return $this;
    }

    /**
     * Gets monthly_average_dbt
     *
     * @return float
     */
    public function getMonthlyAverageDbt()
    {
        return $this->container['monthly_average_dbt'];
    }

    /**
     * Sets monthly_average_dbt
     *
     * @param float $monthly_average_dbt Monthly average DBT
     *
     * @return $this
     */
    public function setMonthlyAverageDbt($monthly_average_dbt)
    {
        $this->container['monthly_average_dbt'] = $monthly_average_dbt;

        return $this;
    }

    /**
     * Gets highest_dbt6_months
     *
     * @return float
     */
    public function getHighestDbt6Months()
    {
        return $this->container['highest_dbt6_months'];
    }

    /**
     * Sets highest_dbt6_months
     *
     * @param float $highest_dbt6_months The highest DBT in the past 6 months
     *
     * @return $this
     */
    public function setHighestDbt6Months($highest_dbt6_months)
    {
        $this->container['highest_dbt6_months'] = $highest_dbt6_months;

        return $this;
    }

    /**
     * Gets highest_dbt5_quarters
     *
     * @return float
     */
    public function getHighestDbt5Quarters()
    {
        return $this->container['highest_dbt5_quarters'];
    }

    /**
     * Sets highest_dbt5_quarters
     *
     * @param float $highest_dbt5_quarters The highest DBT in the past 5 quarters
     *
     * @return $this
     */
    public function setHighestDbt5Quarters($highest_dbt5_quarters)
    {
        $this->container['highest_dbt5_quarters'] = $highest_dbt5_quarters;

        return $this;
    }

    /**
     * Gets active_tradeline_count
     *
     * @return float
     */
    public function getActiveTradelineCount()
    {
        return $this->container['active_tradeline_count'];
    }

    /**
     * Sets active_tradeline_count
     *
     * @param float $active_tradeline_count Active tradeline count
     *
     * @return $this
     */
    public function setActiveTradelineCount($active_tradeline_count)
    {
        $this->container['active_tradeline_count'] = $active_tradeline_count;

        return $this;
    }

    /**
     * Gets all_tradeline_balance
     *
     * @return float
     */
    public function getAllTradelineBalance()
    {
        return $this->container['all_tradeline_balance'];
    }

    /**
     * Sets all_tradeline_balance
     *
     * @param float $all_tradeline_balance Total balance of all tradelines
     *
     * @return $this
     */
    public function setAllTradelineBalance($all_tradeline_balance)
    {
        $this->container['all_tradeline_balance'] = $all_tradeline_balance;

        return $this;
    }

    /**
     * Gets all_tradeline_count
     *
     * @return float
     */
    public function getAllTradelineCount()
    {
        return $this->container['all_tradeline_count'];
    }

    /**
     * Sets all_tradeline_count
     *
     * @param float $all_tradeline_count Total count of all tradelines
     *
     * @return $this
     */
    public function setAllTradelineCount($all_tradeline_count)
    {
        $this->container['all_tradeline_count'] = $all_tradeline_count;

        return $this;
    }

    /**
     * Gets average_balance5_quarters
     *
     * @return float
     */
    public function getAverageBalance5Quarters()
    {
        return $this->container['average_balance5_quarters'];
    }

    /**
     * Sets average_balance5_quarters
     *
     * @param float $average_balance5_quarters Average balance over the past 5 quarters
     *
     * @return $this
     */
    public function setAverageBalance5Quarters($average_balance5_quarters)
    {
        $this->container['average_balance5_quarters'] = $average_balance5_quarters;

        return $this;
    }

    /**
     * Gets single_high_credit
     *
     * @return float
     */
    public function getSingleHighCredit()
    {
        return $this->container['single_high_credit'];
    }

    /**
     * Sets single_high_credit
     *
     * @param float $single_high_credit Single high credit in any one tradeline
     *
     * @return $this
     */
    public function setSingleHighCredit($single_high_credit)
    {
        $this->container['single_high_credit'] = $single_high_credit;

        return $this;
    }

    /**
     * Gets low_balance6_months
     *
     * @return float
     */
    public function getLowBalance6Months()
    {
        return $this->container['low_balance6_months'];
    }

    /**
     * Sets low_balance6_months
     *
     * @param float $low_balance6_months Lowest total balance in the past 6 months
     *
     * @return $this
     */
    public function setLowBalance6Months($low_balance6_months)
    {
        $this->container['low_balance6_months'] = $low_balance6_months;

        return $this;
    }

    /**
     * Gets high_balance6_months
     *
     * @return float
     */
    public function getHighBalance6Months()
    {
        return $this->container['high_balance6_months'];
    }

    /**
     * Sets high_balance6_months
     *
     * @param float $high_balance6_months Highest total balance in the past 6 months
     *
     * @return $this
     */
    public function setHighBalance6Months($high_balance6_months)
    {
        $this->container['high_balance6_months'] = $high_balance6_months;

        return $this;
    }

    /**
     * Gets oldest_collection_date
     *
     * @return string
     */
    public function getOldestCollectionDate()
    {
        return $this->container['oldest_collection_date'];
    }

    /**
     * Sets oldest_collection_date
     *
     * @param string $oldest_collection_date Oldest collection date
     *
     * @return $this
     */
    public function setOldestCollectionDate($oldest_collection_date)
    {
        $this->container['oldest_collection_date'] = $oldest_collection_date;

        return $this;
    }

    /**
     * Gets most_recent_collection_date
     *
     * @return string
     */
    public function getMostRecentCollectionDate()
    {
        return $this->container['most_recent_collection_date'];
    }

    /**
     * Sets most_recent_collection_date
     *
     * @param string $most_recent_collection_date Most recent collection date
     *
     * @return $this
     */
    public function setMostRecentCollectionDate($most_recent_collection_date)
    {
        $this->container['most_recent_collection_date'] = $most_recent_collection_date;

        return $this;
    }

    /**
     * Gets current_dbt
     *
     * @return float
     */
    public function getCurrentDbt()
    {
        return $this->container['current_dbt'];
    }

    /**
     * Sets current_dbt
     *
     * @param float $current_dbt Current DBT
     *
     * @return $this
     */
    public function setCurrentDbt($current_dbt)
    {
        $this->container['current_dbt'] = $current_dbt;

        return $this;
    }

    /**
     * Gets oldest_ucc_date
     *
     * @return string
     */
    public function getOldestUccDate()
    {
        return $this->container['oldest_ucc_date'];
    }

    /**
     * Sets oldest_ucc_date
     *
     * @param string $oldest_ucc_date Oldest UCC filing date
     *
     * @return $this
     */
    public function setOldestUccDate($oldest_ucc_date)
    {
        $this->container['oldest_ucc_date'] = $oldest_ucc_date;

        return $this;
    }

    /**
     * Gets most_recent_ucc_date
     *
     * @return string
     */
    public function getMostRecentUccDate()
    {
        return $this->container['most_recent_ucc_date'];
    }

    /**
     * Sets most_recent_ucc_date
     *
     * @param string $most_recent_ucc_date Most recent UCC filing date
     *
     * @return $this
     */
    public function setMostRecentUccDate($most_recent_ucc_date)
    {
        $this->container['most_recent_ucc_date'] = $most_recent_ucc_date;

        return $this;
    }

    /**
     * Gets bankruptcy_indicator
     *
     * @return bool
     */
    public function getBankruptcyIndicator()
    {
        return $this->container['bankruptcy_indicator'];
    }

    /**
     * Sets bankruptcy_indicator
     *
     * @param bool $bankruptcy_indicator If true indicates a bankruptcy is on file
     *
     * @return $this
     */
    public function setBankruptcyIndicator($bankruptcy_indicator)
    {
        $this->container['bankruptcy_indicator'] = $bankruptcy_indicator;

        return $this;
    }

    /**
     * Gets judgment_indicator
     *
     * @return bool
     */
    public function getJudgmentIndicator()
    {
        return $this->container['judgment_indicator'];
    }

    /**
     * Sets judgment_indicator
     *
     * @param bool $judgment_indicator If true indicates a judgment is on file
     *
     * @return $this
     */
    public function setJudgmentIndicator($judgment_indicator)
    {
        $this->container['judgment_indicator'] = $judgment_indicator;

        return $this;
    }

    /**
     * Gets tax_lien_indicator
     *
     * @return bool
     */
    public function getTaxLienIndicator()
    {
        return $this->container['tax_lien_indicator'];
    }

    /**
     * Sets tax_lien_indicator
     *
     * @param bool $tax_lien_indicator If true indicates a tax lien is on file
     *
     * @return $this
     */
    public function setTaxLienIndicator($tax_lien_indicator)
    {
        $this->container['tax_lien_indicator'] = $tax_lien_indicator;

        return $this;
    }

    /**
     * Gets trade_collection_count
     *
     * @return float
     */
    public function getTradeCollectionCount()
    {
        return $this->container['trade_collection_count'];
    }

    /**
     * Sets trade_collection_count
     *
     * @param float $trade_collection_count Count of all collections on file
     *
     * @return $this
     */
    public function setTradeCollectionCount($trade_collection_count)
    {
        $this->container['trade_collection_count'] = $trade_collection_count;

        return $this;
    }

    /**
     * Gets trade_collection_balance
     *
     * @return float
     */
    public function getTradeCollectionBalance()
    {
        return $this->container['trade_collection_balance'];
    }

    /**
     * Sets trade_collection_balance
     *
     * @param float $trade_collection_balance Balance of all collections on file
     *
     * @return $this
     */
    public function setTradeCollectionBalance($trade_collection_balance)
    {
        $this->container['trade_collection_balance'] = $trade_collection_balance;

        return $this;
    }

    /**
     * Gets open_collection_count
     *
     * @return float
     */
    public function getOpenCollectionCount()
    {
        return $this->container['open_collection_count'];
    }

    /**
     * Sets open_collection_count
     *
     * @param float $open_collection_count Count of open collections
     *
     * @return $this
     */
    public function setOpenCollectionCount($open_collection_count)
    {
        $this->container['open_collection_count'] = $open_collection_count;

        return $this;
    }

    /**
     * Gets open_collection_balance
     *
     * @return float
     */
    public function getOpenCollectionBalance()
    {
        return $this->container['open_collection_balance'];
    }

    /**
     * Sets open_collection_balance
     *
     * @param float $open_collection_balance Balance of all open collections
     *
     * @return $this
     */
    public function setOpenCollectionBalance($open_collection_balance)
    {
        $this->container['open_collection_balance'] = $open_collection_balance;

        return $this;
    }

    /**
     * Gets ofac_match_warning
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummaryOfacMatchWarning
     */
    public function getOfacMatchWarning()
    {
        return $this->container['ofac_match_warning'];
    }

    /**
     * Sets ofac_match_warning
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummaryOfacMatchWarning $ofac_match_warning ofac_match_warning
     *
     * @return $this
     */
    public function setOfacMatchWarning($ofac_match_warning)
    {
        $this->container['ofac_match_warning'] = $ofac_match_warning;

        return $this;
    }

    /**
     * Gets victim_statement_indicator
     *
     * @return bool
     */
    public function getVictimStatementIndicator()
    {
        return $this->container['victim_statement_indicator'];
    }

    /**
     * Sets victim_statement_indicator
     *
     * @param bool $victim_statement_indicator If true the business has filed a statement with Experian indicating they were a victim of fraud or identity theft
     *
     * @return $this
     */
    public function setVictimStatementIndicator($victim_statement_indicator)
    {
        $this->container['victim_statement_indicator'] = $victim_statement_indicator;

        return $this;
    }

    /**
     * Gets commercial_fraud_risk_indicator_count
     *
     * @return float
     */
    public function getCommercialFraudRiskIndicatorCount()
    {
        return $this->container['commercial_fraud_risk_indicator_count'];
    }

    /**
     * Sets commercial_fraud_risk_indicator_count
     *
     * @param float $commercial_fraud_risk_indicator_count Count of high risk commercial fraud indicators present
     *
     * @return $this
     */
    public function setCommercialFraudRiskIndicatorCount($commercial_fraud_risk_indicator_count)
    {
        $this->container['commercial_fraud_risk_indicator_count'] = $commercial_fraud_risk_indicator_count;

        return $this;
    }

    /**
     * Gets unsummarized_tradeline_count
     *
     * @return float
     */
    public function getUnsummarizedTradelineCount()
    {
        return $this->container['unsummarized_tradeline_count'];
    }

    /**
     * Sets unsummarized_tradeline_count
     *
     * @param float $unsummarized_tradeline_count Total count of all unsummarized trades on file for the business
     *
     * @return $this
     */
    public function setUnsummarizedTradelineCount($unsummarized_tradeline_count)
    {
        $this->container['unsummarized_tradeline_count'] = $unsummarized_tradeline_count;

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


