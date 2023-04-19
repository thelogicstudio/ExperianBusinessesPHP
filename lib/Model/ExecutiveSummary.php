<?php
/**
 * ExecutiveSummary
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
 * ExecutiveSummary Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExecutiveSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'executiveSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['lowest_total_account_balance'] = isset($data['lowest_total_account_balance']) ? $data['lowest_total_account_balance'] : null;
        $this->container['highest_total_account_balance'] = isset($data['highest_total_account_balance']) ? $data['highest_total_account_balance'] : null;
        $this->container['current_total_account_balance'] = isset($data['current_total_account_balance']) ? $data['current_total_account_balance'] : null;
        $this->container['high_credit_amount_extended'] = isset($data['high_credit_amount_extended']) ? $data['high_credit_amount_extended'] : null;
        $this->container['median_credit_amount_extended'] = isset($data['median_credit_amount_extended']) ? $data['median_credit_amount_extended'] : null;
        $this->container['industry_description'] = isset($data['industry_description']) ? $data['industry_description'] : null;
        $this->container['business_dbt'] = isset($data['business_dbt']) ? $data['business_dbt'] : null;
        $this->container['predicted_dbt'] = isset($data['predicted_dbt']) ? $data['predicted_dbt'] : null;
        $this->container['predicted_dbt_date'] = isset($data['predicted_dbt_date']) ? $data['predicted_dbt_date'] : null;
        $this->container['industry_dbt'] = isset($data['industry_dbt']) ? $data['industry_dbt'] : null;
        $this->container['all_industry_dbt'] = isset($data['all_industry_dbt']) ? $data['all_industry_dbt'] : null;
        $this->container['industry_payment_comparison'] = isset($data['industry_payment_comparison']) ? $data['industry_payment_comparison'] : null;
        $this->container['payment_trend_indicator'] = isset($data['payment_trend_indicator']) ? $data['payment_trend_indicator'] : null;
        $this->container['common_terms'] = isset($data['common_terms']) ? $data['common_terms'] : null;
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
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryLowestTotalAccountBalance
     */
    public function getLowestTotalAccountBalance()
    {
        return $this->container['lowest_total_account_balance'];
    }

    /**
     * Sets lowest_total_account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryLowestTotalAccountBalance $lowest_total_account_balance lowest_total_account_balance
     *
     * @return $this
     */
    public function setLowestTotalAccountBalance($lowest_total_account_balance)
    {
        $this->container['lowest_total_account_balance'] = $lowest_total_account_balance;

        return $this;
    }

    /**
     * Gets highest_total_account_balance
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryHighestTotalAccountBalance
     */
    public function getHighestTotalAccountBalance()
    {
        return $this->container['highest_total_account_balance'];
    }

    /**
     * Sets highest_total_account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryHighestTotalAccountBalance $highest_total_account_balance highest_total_account_balance
     *
     * @return $this
     */
    public function setHighestTotalAccountBalance($highest_total_account_balance)
    {
        $this->container['highest_total_account_balance'] = $highest_total_account_balance;

        return $this;
    }

    /**
     * Gets current_total_account_balance
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCurrentTotalAccountBalance
     */
    public function getCurrentTotalAccountBalance()
    {
        return $this->container['current_total_account_balance'];
    }

    /**
     * Sets current_total_account_balance
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCurrentTotalAccountBalance $current_total_account_balance current_total_account_balance
     *
     * @return $this
     */
    public function setCurrentTotalAccountBalance($current_total_account_balance)
    {
        $this->container['current_total_account_balance'] = $current_total_account_balance;

        return $this;
    }

    /**
     * Gets high_credit_amount_extended
     *
     * @return float
     */
    public function getHighCreditAmountExtended()
    {
        return $this->container['high_credit_amount_extended'];
    }

    /**
     * Sets high_credit_amount_extended
     *
     * @param float $high_credit_amount_extended High credit amount extended
     *
     * @return $this
     */
    public function setHighCreditAmountExtended($high_credit_amount_extended)
    {
        $this->container['high_credit_amount_extended'] = $high_credit_amount_extended;

        return $this;
    }

    /**
     * Gets median_credit_amount_extended
     *
     * @return float
     */
    public function getMedianCreditAmountExtended()
    {
        return $this->container['median_credit_amount_extended'];
    }

    /**
     * Sets median_credit_amount_extended
     *
     * @param float $median_credit_amount_extended Median credit amount extended
     *
     * @return $this
     */
    public function setMedianCreditAmountExtended($median_credit_amount_extended)
    {
        $this->container['median_credit_amount_extended'] = $median_credit_amount_extended;

        return $this;
    }

    /**
     * Gets industry_description
     *
     * @return string
     */
    public function getIndustryDescription()
    {
        return $this->container['industry_description'];
    }

    /**
     * Sets industry_description
     *
     * @param string $industry_description Industry description
     *
     * @return $this
     */
    public function setIndustryDescription($industry_description)
    {
        $this->container['industry_description'] = $industry_description;

        return $this;
    }

    /**
     * Gets business_dbt
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryBusinessDbt
     */
    public function getBusinessDbt()
    {
        return $this->container['business_dbt'];
    }

    /**
     * Sets business_dbt
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryBusinessDbt $business_dbt business_dbt
     *
     * @return $this
     */
    public function setBusinessDbt($business_dbt)
    {
        $this->container['business_dbt'] = $business_dbt;

        return $this;
    }

    /**
     * Gets predicted_dbt
     *
     * @return float
     */
    public function getPredictedDbt()
    {
        return $this->container['predicted_dbt'];
    }

    /**
     * Sets predicted_dbt
     *
     * @param float $predicted_dbt Predicted DBT based on Experian data and models
     *
     * @return $this
     */
    public function setPredictedDbt($predicted_dbt)
    {
        $this->container['predicted_dbt'] = $predicted_dbt;

        return $this;
    }

    /**
     * Gets predicted_dbt_date
     *
     * @return string
     */
    public function getPredictedDbtDate()
    {
        return $this->container['predicted_dbt_date'];
    }

    /**
     * Sets predicted_dbt_date
     *
     * @param string $predicted_dbt_date Date of last DBT prediction
     *
     * @return $this
     */
    public function setPredictedDbtDate($predicted_dbt_date)
    {
        $this->container['predicted_dbt_date'] = $predicted_dbt_date;

        return $this;
    }

    /**
     * Gets industry_dbt
     *
     * @return float
     */
    public function getIndustryDbt()
    {
        return $this->container['industry_dbt'];
    }

    /**
     * Sets industry_dbt
     *
     * @param float $industry_dbt Industry benchmark DBT
     *
     * @return $this
     */
    public function setIndustryDbt($industry_dbt)
    {
        $this->container['industry_dbt'] = $industry_dbt;

        return $this;
    }

    /**
     * Gets all_industry_dbt
     *
     * @return float
     */
    public function getAllIndustryDbt()
    {
        return $this->container['all_industry_dbt'];
    }

    /**
     * Sets all_industry_dbt
     *
     * @param float $all_industry_dbt Benchmark DBT of all industries
     *
     * @return $this
     */
    public function setAllIndustryDbt($all_industry_dbt)
    {
        $this->container['all_industry_dbt'] = $all_industry_dbt;

        return $this;
    }

    /**
     * Gets industry_payment_comparison
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryIndustryPaymentComparison
     */
    public function getIndustryPaymentComparison()
    {
        return $this->container['industry_payment_comparison'];
    }

    /**
     * Sets industry_payment_comparison
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryIndustryPaymentComparison $industry_payment_comparison industry_payment_comparison
     *
     * @return $this
     */
    public function setIndustryPaymentComparison($industry_payment_comparison)
    {
        $this->container['industry_payment_comparison'] = $industry_payment_comparison;

        return $this;
    }

    /**
     * Gets payment_trend_indicator
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryPaymentTrendIndicator
     */
    public function getPaymentTrendIndicator()
    {
        return $this->container['payment_trend_indicator'];
    }

    /**
     * Sets payment_trend_indicator
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryPaymentTrendIndicator $payment_trend_indicator payment_trend_indicator
     *
     * @return $this
     */
    public function setPaymentTrendIndicator($payment_trend_indicator)
    {
        $this->container['payment_trend_indicator'] = $payment_trend_indicator;

        return $this;
    }

    /**
     * Gets common_terms
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCommonTerms
     */
    public function getCommonTerms()
    {
        return $this->container['common_terms'];
    }

    /**
     * Sets common_terms
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummaryCommonTerms $common_terms common_terms
     *
     * @return $this
     */
    public function setCommonTerms($common_terms)
    {
        $this->container['common_terms'] = $common_terms;

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


