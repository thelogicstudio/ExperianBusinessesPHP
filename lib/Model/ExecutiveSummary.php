<?php
/**
 * ExecutiveSummary
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
 * ExecutiveSummary Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExecutiveSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'executiveSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lowest_total_account_balance' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryLowestTotalAccountBalance',
        'highest_total_account_balance' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryHighestTotalAccountBalance',
        'current_total_account_balance' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCurrentTotalAccountBalance',
        'high_credit_amount_extended' => 'float',
        'median_credit_amount_extended' => 'float',
        'industry_description' => 'string',
        'business_dbt' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryBusinessDbt',
        'predicted_dbt' => 'float',
        'predicted_dbt_date' => 'string',
        'industry_dbt' => 'float',
        'all_industry_dbt' => 'float',
        'industry_payment_comparison' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryIndustryPaymentComparison',
        'payment_trend_indicator' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryPaymentTrendIndicator',
        'common_terms' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCommonTerms'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lowest_total_account_balance' => null,
        'highest_total_account_balance' => null,
        'current_total_account_balance' => null,
        'high_credit_amount_extended' => null,
        'median_credit_amount_extended' => null,
        'industry_description' => null,
        'business_dbt' => null,
        'predicted_dbt' => null,
        'predicted_dbt_date' => null,
        'industry_dbt' => null,
        'all_industry_dbt' => null,
        'industry_payment_comparison' => null,
        'payment_trend_indicator' => null,
        'common_terms' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lowest_total_account_balance' => false,
        'highest_total_account_balance' => false,
        'current_total_account_balance' => false,
        'high_credit_amount_extended' => false,
        'median_credit_amount_extended' => false,
        'industry_description' => false,
        'business_dbt' => false,
        'predicted_dbt' => false,
        'predicted_dbt_date' => false,
        'industry_dbt' => false,
        'all_industry_dbt' => false,
        'industry_payment_comparison' => false,
        'payment_trend_indicator' => false,
        'common_terms' => false
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
        'lowest_total_account_balance' => 'lowestTotalAccountBalance',
        'highest_total_account_balance' => 'highestTotalAccountBalance',
        'current_total_account_balance' => 'currentTotalAccountBalance',
        'high_credit_amount_extended' => 'highCreditAmountExtended',
        'median_credit_amount_extended' => 'medianCreditAmountExtended',
        'industry_description' => 'industryDescription',
        'business_dbt' => 'businessDbt',
        'predicted_dbt' => 'predictedDbt',
        'predicted_dbt_date' => 'predictedDbtDate',
        'industry_dbt' => 'industryDbt',
        'all_industry_dbt' => 'allIndustryDbt',
        'industry_payment_comparison' => 'industryPaymentComparison',
        'payment_trend_indicator' => 'paymentTrendIndicator',
        'common_terms' => 'commonTerms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lowest_total_account_balance' => 'setLowestTotalAccountBalance',
        'highest_total_account_balance' => 'setHighestTotalAccountBalance',
        'current_total_account_balance' => 'setCurrentTotalAccountBalance',
        'high_credit_amount_extended' => 'setHighCreditAmountExtended',
        'median_credit_amount_extended' => 'setMedianCreditAmountExtended',
        'industry_description' => 'setIndustryDescription',
        'business_dbt' => 'setBusinessDbt',
        'predicted_dbt' => 'setPredictedDbt',
        'predicted_dbt_date' => 'setPredictedDbtDate',
        'industry_dbt' => 'setIndustryDbt',
        'all_industry_dbt' => 'setAllIndustryDbt',
        'industry_payment_comparison' => 'setIndustryPaymentComparison',
        'payment_trend_indicator' => 'setPaymentTrendIndicator',
        'common_terms' => 'setCommonTerms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lowest_total_account_balance' => 'getLowestTotalAccountBalance',
        'highest_total_account_balance' => 'getHighestTotalAccountBalance',
        'current_total_account_balance' => 'getCurrentTotalAccountBalance',
        'high_credit_amount_extended' => 'getHighCreditAmountExtended',
        'median_credit_amount_extended' => 'getMedianCreditAmountExtended',
        'industry_description' => 'getIndustryDescription',
        'business_dbt' => 'getBusinessDbt',
        'predicted_dbt' => 'getPredictedDbt',
        'predicted_dbt_date' => 'getPredictedDbtDate',
        'industry_dbt' => 'getIndustryDbt',
        'all_industry_dbt' => 'getAllIndustryDbt',
        'industry_payment_comparison' => 'getIndustryPaymentComparison',
        'payment_trend_indicator' => 'getPaymentTrendIndicator',
        'common_terms' => 'getCommonTerms'
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
        $this->setIfExists('lowest_total_account_balance', $data ?? [], null);
        $this->setIfExists('highest_total_account_balance', $data ?? [], null);
        $this->setIfExists('current_total_account_balance', $data ?? [], null);
        $this->setIfExists('high_credit_amount_extended', $data ?? [], null);
        $this->setIfExists('median_credit_amount_extended', $data ?? [], null);
        $this->setIfExists('industry_description', $data ?? [], null);
        $this->setIfExists('business_dbt', $data ?? [], null);
        $this->setIfExists('predicted_dbt', $data ?? [], null);
        $this->setIfExists('predicted_dbt_date', $data ?? [], null);
        $this->setIfExists('industry_dbt', $data ?? [], null);
        $this->setIfExists('all_industry_dbt', $data ?? [], null);
        $this->setIfExists('industry_payment_comparison', $data ?? [], null);
        $this->setIfExists('payment_trend_indicator', $data ?? [], null);
        $this->setIfExists('common_terms', $data ?? [], null);
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
     * Gets lowest_total_account_balance
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryLowestTotalAccountBalance|null
     */
    public function getLowestTotalAccountBalance()
    {
        return $this->container['lowest_total_account_balance'];
    }

    /**
     * Sets lowest_total_account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryLowestTotalAccountBalance|null $lowest_total_account_balance lowest_total_account_balance
     *
     * @return self
     */
    public function setLowestTotalAccountBalance($lowest_total_account_balance)
    {
        if (is_null($lowest_total_account_balance)) {
            throw new \InvalidArgumentException('non-nullable lowest_total_account_balance cannot be null');
        }
        $this->container['lowest_total_account_balance'] = $lowest_total_account_balance;

        return $this;
    }

    /**
     * Gets highest_total_account_balance
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryHighestTotalAccountBalance|null
     */
    public function getHighestTotalAccountBalance()
    {
        return $this->container['highest_total_account_balance'];
    }

    /**
     * Sets highest_total_account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryHighestTotalAccountBalance|null $highest_total_account_balance highest_total_account_balance
     *
     * @return self
     */
    public function setHighestTotalAccountBalance($highest_total_account_balance)
    {
        if (is_null($highest_total_account_balance)) {
            throw new \InvalidArgumentException('non-nullable highest_total_account_balance cannot be null');
        }
        $this->container['highest_total_account_balance'] = $highest_total_account_balance;

        return $this;
    }

    /**
     * Gets current_total_account_balance
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCurrentTotalAccountBalance|null
     */
    public function getCurrentTotalAccountBalance()
    {
        return $this->container['current_total_account_balance'];
    }

    /**
     * Sets current_total_account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCurrentTotalAccountBalance|null $current_total_account_balance current_total_account_balance
     *
     * @return self
     */
    public function setCurrentTotalAccountBalance($current_total_account_balance)
    {
        if (is_null($current_total_account_balance)) {
            throw new \InvalidArgumentException('non-nullable current_total_account_balance cannot be null');
        }
        $this->container['current_total_account_balance'] = $current_total_account_balance;

        return $this;
    }

    /**
     * Gets high_credit_amount_extended
     *
     * @return float|null
     */
    public function getHighCreditAmountExtended()
    {
        return $this->container['high_credit_amount_extended'];
    }

    /**
     * Sets high_credit_amount_extended
     *
     * @param float|null $high_credit_amount_extended High credit amount extended
     *
     * @return self
     */
    public function setHighCreditAmountExtended($high_credit_amount_extended)
    {
        if (is_null($high_credit_amount_extended)) {
            throw new \InvalidArgumentException('non-nullable high_credit_amount_extended cannot be null');
        }
        $this->container['high_credit_amount_extended'] = $high_credit_amount_extended;

        return $this;
    }

    /**
     * Gets median_credit_amount_extended
     *
     * @return float|null
     */
    public function getMedianCreditAmountExtended()
    {
        return $this->container['median_credit_amount_extended'];
    }

    /**
     * Sets median_credit_amount_extended
     *
     * @param float|null $median_credit_amount_extended Median credit amount extended
     *
     * @return self
     */
    public function setMedianCreditAmountExtended($median_credit_amount_extended)
    {
        if (is_null($median_credit_amount_extended)) {
            throw new \InvalidArgumentException('non-nullable median_credit_amount_extended cannot be null');
        }
        $this->container['median_credit_amount_extended'] = $median_credit_amount_extended;

        return $this;
    }

    /**
     * Gets industry_description
     *
     * @return string|null
     */
    public function getIndustryDescription()
    {
        return $this->container['industry_description'];
    }

    /**
     * Sets industry_description
     *
     * @param string|null $industry_description Industry description
     *
     * @return self
     */
    public function setIndustryDescription($industry_description)
    {
        if (is_null($industry_description)) {
            throw new \InvalidArgumentException('non-nullable industry_description cannot be null');
        }
        $this->container['industry_description'] = $industry_description;

        return $this;
    }

    /**
     * Gets business_dbt
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryBusinessDbt|null
     */
    public function getBusinessDbt()
    {
        return $this->container['business_dbt'];
    }

    /**
     * Sets business_dbt
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryBusinessDbt|null $business_dbt business_dbt
     *
     * @return self
     */
    public function setBusinessDbt($business_dbt)
    {
        if (is_null($business_dbt)) {
            throw new \InvalidArgumentException('non-nullable business_dbt cannot be null');
        }
        $this->container['business_dbt'] = $business_dbt;

        return $this;
    }

    /**
     * Gets predicted_dbt
     *
     * @return float|null
     */
    public function getPredictedDbt()
    {
        return $this->container['predicted_dbt'];
    }

    /**
     * Sets predicted_dbt
     *
     * @param float|null $predicted_dbt Predicted DBT based on Experian data and models
     *
     * @return self
     */
    public function setPredictedDbt($predicted_dbt)
    {
        if (is_null($predicted_dbt)) {
            throw new \InvalidArgumentException('non-nullable predicted_dbt cannot be null');
        }
        $this->container['predicted_dbt'] = $predicted_dbt;

        return $this;
    }

    /**
     * Gets predicted_dbt_date
     *
     * @return string|null
     */
    public function getPredictedDbtDate()
    {
        return $this->container['predicted_dbt_date'];
    }

    /**
     * Sets predicted_dbt_date
     *
     * @param string|null $predicted_dbt_date Date of last DBT prediction
     *
     * @return self
     */
    public function setPredictedDbtDate($predicted_dbt_date)
    {
        if (is_null($predicted_dbt_date)) {
            throw new \InvalidArgumentException('non-nullable predicted_dbt_date cannot be null');
        }
        $this->container['predicted_dbt_date'] = $predicted_dbt_date;

        return $this;
    }

    /**
     * Gets industry_dbt
     *
     * @return float|null
     */
    public function getIndustryDbt()
    {
        return $this->container['industry_dbt'];
    }

    /**
     * Sets industry_dbt
     *
     * @param float|null $industry_dbt Industry benchmark DBT
     *
     * @return self
     */
    public function setIndustryDbt($industry_dbt)
    {
        if (is_null($industry_dbt)) {
            throw new \InvalidArgumentException('non-nullable industry_dbt cannot be null');
        }
        $this->container['industry_dbt'] = $industry_dbt;

        return $this;
    }

    /**
     * Gets all_industry_dbt
     *
     * @return float|null
     */
    public function getAllIndustryDbt()
    {
        return $this->container['all_industry_dbt'];
    }

    /**
     * Sets all_industry_dbt
     *
     * @param float|null $all_industry_dbt Benchmark DBT of all industries
     *
     * @return self
     */
    public function setAllIndustryDbt($all_industry_dbt)
    {
        if (is_null($all_industry_dbt)) {
            throw new \InvalidArgumentException('non-nullable all_industry_dbt cannot be null');
        }
        $this->container['all_industry_dbt'] = $all_industry_dbt;

        return $this;
    }

    /**
     * Gets industry_payment_comparison
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryIndustryPaymentComparison|null
     */
    public function getIndustryPaymentComparison()
    {
        return $this->container['industry_payment_comparison'];
    }

    /**
     * Sets industry_payment_comparison
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryIndustryPaymentComparison|null $industry_payment_comparison industry_payment_comparison
     *
     * @return self
     */
    public function setIndustryPaymentComparison($industry_payment_comparison)
    {
        if (is_null($industry_payment_comparison)) {
            throw new \InvalidArgumentException('non-nullable industry_payment_comparison cannot be null');
        }
        $this->container['industry_payment_comparison'] = $industry_payment_comparison;

        return $this;
    }

    /**
     * Gets payment_trend_indicator
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryPaymentTrendIndicator|null
     */
    public function getPaymentTrendIndicator()
    {
        return $this->container['payment_trend_indicator'];
    }

    /**
     * Sets payment_trend_indicator
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryPaymentTrendIndicator|null $payment_trend_indicator payment_trend_indicator
     *
     * @return self
     */
    public function setPaymentTrendIndicator($payment_trend_indicator)
    {
        if (is_null($payment_trend_indicator)) {
            throw new \InvalidArgumentException('non-nullable payment_trend_indicator cannot be null');
        }
        $this->container['payment_trend_indicator'] = $payment_trend_indicator;

        return $this;
    }

    /**
     * Gets common_terms
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCommonTerms|null
     */
    public function getCommonTerms()
    {
        return $this->container['common_terms'];
    }

    /**
     * Sets common_terms
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCommonTerms|null $common_terms common_terms
     *
     * @return self
     */
    public function setCommonTerms($common_terms)
    {
        if (is_null($common_terms)) {
            throw new \InvalidArgumentException('non-nullable common_terms cannot be null');
        }
        $this->container['common_terms'] = $common_terms;

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


