<?php
/**
 * MultiSegmentsResultRiskDashboard
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
 * MultiSegmentsResultRiskDashboard Class Doc Comment
 *
 * @category Class
 * @description Risk Dashboard information of the Business
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiSegmentsResultRiskDashboard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiSegmentsResult_riskDashboard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commercial_score' => 'float',
        'commercial_score_risk_class' => 'string',
        'fsr_score' => 'float',
        'fsr_score_risk_class' => 'string',
        'recommended_credit_limit_amount' => '\TheLogicStudio\ExperianBusinessesPHP\Model\RecommendedCreditLimit',
        'current_dbt' => 'float',
        'derogatory_legal_count' => 'float',
        'commercial_fraud_risk_indicator_count' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commercial_score' => null,
        'commercial_score_risk_class' => null,
        'fsr_score' => null,
        'fsr_score_risk_class' => null,
        'recommended_credit_limit_amount' => null,
        'current_dbt' => null,
        'derogatory_legal_count' => null,
        'commercial_fraud_risk_indicator_count' => null
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
        'commercial_score' => 'commercialScore',
        'commercial_score_risk_class' => 'commercialScoreRiskClass',
        'fsr_score' => 'fsrScore',
        'fsr_score_risk_class' => 'fsrScoreRiskClass',
        'recommended_credit_limit_amount' => 'recommendedCreditLimitAmount',
        'current_dbt' => 'currentDbt',
        'derogatory_legal_count' => 'derogatoryLegalCount',
        'commercial_fraud_risk_indicator_count' => 'commercialFraudRiskIndicatorCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commercial_score' => 'setCommercialScore',
        'commercial_score_risk_class' => 'setCommercialScoreRiskClass',
        'fsr_score' => 'setFsrScore',
        'fsr_score_risk_class' => 'setFsrScoreRiskClass',
        'recommended_credit_limit_amount' => 'setRecommendedCreditLimitAmount',
        'current_dbt' => 'setCurrentDbt',
        'derogatory_legal_count' => 'setDerogatoryLegalCount',
        'commercial_fraud_risk_indicator_count' => 'setCommercialFraudRiskIndicatorCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commercial_score' => 'getCommercialScore',
        'commercial_score_risk_class' => 'getCommercialScoreRiskClass',
        'fsr_score' => 'getFsrScore',
        'fsr_score_risk_class' => 'getFsrScoreRiskClass',
        'recommended_credit_limit_amount' => 'getRecommendedCreditLimitAmount',
        'current_dbt' => 'getCurrentDbt',
        'derogatory_legal_count' => 'getDerogatoryLegalCount',
        'commercial_fraud_risk_indicator_count' => 'getCommercialFraudRiskIndicatorCount'
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
        $this->container['commercial_score'] = isset($data['commercial_score']) ? $data['commercial_score'] : null;
        $this->container['commercial_score_risk_class'] = isset($data['commercial_score_risk_class']) ? $data['commercial_score_risk_class'] : null;
        $this->container['fsr_score'] = isset($data['fsr_score']) ? $data['fsr_score'] : null;
        $this->container['fsr_score_risk_class'] = isset($data['fsr_score_risk_class']) ? $data['fsr_score_risk_class'] : null;
        $this->container['recommended_credit_limit_amount'] = isset($data['recommended_credit_limit_amount']) ? $data['recommended_credit_limit_amount'] : null;
        $this->container['current_dbt'] = isset($data['current_dbt']) ? $data['current_dbt'] : null;
        $this->container['derogatory_legal_count'] = isset($data['derogatory_legal_count']) ? $data['derogatory_legal_count'] : null;
        $this->container['commercial_fraud_risk_indicator_count'] = isset($data['commercial_fraud_risk_indicator_count']) ? $data['commercial_fraud_risk_indicator_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['commercial_score_risk_class']) && (mb_strlen($this->container['commercial_score_risk_class']) > 10)) {
            $invalidProperties[] = "invalid value for 'commercial_score_risk_class', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['fsr_score_risk_class']) && (mb_strlen($this->container['fsr_score_risk_class']) > 20)) {
            $invalidProperties[] = "invalid value for 'fsr_score_risk_class', the character length must be smaller than or equal to 20.";
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
     * Gets commercial_score
     *
     * @return float
     */
    public function getCommercialScore()
    {
        return $this->container['commercial_score'];
    }

    /**
     * Sets commercial_score
     *
     * @param float $commercial_score Commercial score predicts the likelihood that a business will pay in seriously delinquent manner (91+ days) in the next 12 months. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business.
     *
     * @return $this
     */
    public function setCommercialScore($commercial_score)
    {
        $this->container['commercial_score'] = $commercial_score;

        return $this;
    }

    /**
     * Gets commercial_score_risk_class
     *
     * @return string
     */
    public function getCommercialScoreRiskClass()
    {
        return $this->container['commercial_score_risk_class'];
    }

    /**
     * Sets commercial_score_risk_class
     *
     * @param string $commercial_score_risk_class Commercial score risk class default values \"High Risk\", \"Medium to High Risk\", \"Medium Risk\", \"Low to Medium Risk\", \"Low Risk\", \"Recent Bankruptcy on file\", \"Insufficient data to score\"
     *
     * @return $this
     */
    public function setCommercialScoreRiskClass($commercial_score_risk_class)
    {
        if (!is_null($commercial_score_risk_class) && (mb_strlen($commercial_score_risk_class) > 10)) {
            throw new \InvalidArgumentException('invalid length for $commercial_score_risk_class when calling MultiSegmentsResultRiskDashboard., must be smaller than or equal to 10.');
        }

        $this->container['commercial_score_risk_class'] = $commercial_score_risk_class;

        return $this;
    }

    /**
     * Gets fsr_score
     *
     * @return float
     */
    public function getFsrScore()
    {
        return $this->container['fsr_score'];
    }

    /**
     * Sets fsr_score
     *
     * @param float $fsr_score FSR score predicts the likelihood of severe delinquency or bankruptcy within the next 12 months. 100 is the lowest risk, 1 is the highest risk. 998 displays when a bankruptcy is present in the last 2 years. 999 displays when there is not enough information on file to score the business
     *
     * @return $this
     */
    public function setFsrScore($fsr_score)
    {
        $this->container['fsr_score'] = $fsr_score;

        return $this;
    }

    /**
     * Gets fsr_score_risk_class
     *
     * @return string
     */
    public function getFsrScoreRiskClass()
    {
        return $this->container['fsr_score_risk_class'];
    }

    /**
     * Sets fsr_score_risk_class
     *
     * @param string $fsr_score_risk_class FSR score risk class default values: \"High Risk\", \"Medium to High Risk\", \"Medium Risk\", \"Low to Medium Risk\", \"Low Risk\", \"Recent Bankruptcy on file\", \"Insufficient data to score\"
     *
     * @return $this
     */
    public function setFsrScoreRiskClass($fsr_score_risk_class)
    {
        if (!is_null($fsr_score_risk_class) && (mb_strlen($fsr_score_risk_class) > 20)) {
            throw new \InvalidArgumentException('invalid length for $fsr_score_risk_class when calling MultiSegmentsResultRiskDashboard., must be smaller than or equal to 20.');
        }

        $this->container['fsr_score_risk_class'] = $fsr_score_risk_class;

        return $this;
    }

    /**
     * Gets recommended_credit_limit_amount
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\RecommendedCreditLimit
     */
    public function getRecommendedCreditLimitAmount()
    {
        return $this->container['recommended_credit_limit_amount'];
    }

    /**
     * Sets recommended_credit_limit_amount
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\RecommendedCreditLimit $recommended_credit_limit_amount Experian recommended credit limit amount that is based on trade information, industry, age of the business and the commercial score
     *
     * @return $this
     */
    public function setRecommendedCreditLimitAmount($recommended_credit_limit_amount)
    {
        $this->container['recommended_credit_limit_amount'] = $recommended_credit_limit_amount;

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
     * @param float $current_dbt Current Days-Beyond-Terms (DBT). The dollar-weighted average number of days beyond the invoice due date a business pays its bills
     *
     * @return $this
     */
    public function setCurrentDbt($current_dbt)
    {
        $this->container['current_dbt'] = $current_dbt;

        return $this;
    }

    /**
     * Gets derogatory_legal_count
     *
     * @return float
     */
    public function getDerogatoryLegalCount()
    {
        return $this->container['derogatory_legal_count'];
    }

    /**
     * Sets derogatory_legal_count
     *
     * @param float $derogatory_legal_count Total count of derogatory public records including bankruptcies, liens, and judgments
     *
     * @return $this
     */
    public function setDerogatoryLegalCount($derogatory_legal_count)
    {
        $this->container['derogatory_legal_count'] = $derogatory_legal_count;

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
     * @param float $commercial_fraud_risk_indicator_count Provides count of a number of checks done for indicators of potential fraudulent activity, including OFAC, business activity, business fraud victim indicator, and if there are potential inconsistencies with the business name, address, phone, and Tax ID number.
     *
     * @return $this
     */
    public function setCommercialFraudRiskIndicatorCount($commercial_fraud_risk_indicator_count)
    {
        $this->container['commercial_fraud_risk_indicator_count'] = $commercial_fraud_risk_indicator_count;

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


