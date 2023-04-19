<?php
/**
 * ScoreInformationFsrScore
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
 * ScoreInformationFsrScore Class Doc Comment
 *
 * @category Class
 * @description JSON object containing scoring information for the Financial Stability Risk (FSR) score
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScoreInformationFsrScore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'scoreInformation_fsrScore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'publicly_held_company' => 'bool',
        'limited_profile' => 'bool',
        'score' => 'float',
        'profile_number' => 'string',
        'model_code' => 'string',
        'model_title' => 'string',
        'percentile_ranking' => 'float',
        'probability' => 'float',
        'risk_class' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformationFsrScoreRiskClass',
        'customer_dispute_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'publicly_held_company' => null,
        'limited_profile' => null,
        'score' => null,
        'profile_number' => null,
        'model_code' => null,
        'model_title' => null,
        'percentile_ranking' => null,
        'probability' => null,
        'risk_class' => null,
        'customer_dispute_indicator' => null
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
        'publicly_held_company' => 'publiclyHeldCompany',
        'limited_profile' => 'limitedProfile',
        'score' => 'score',
        'profile_number' => 'profileNumber',
        'model_code' => 'modelCode',
        'model_title' => 'modelTitle',
        'percentile_ranking' => 'percentileRanking',
        'probability' => 'probability',
        'risk_class' => 'riskClass',
        'customer_dispute_indicator' => 'customerDisputeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'publicly_held_company' => 'setPubliclyHeldCompany',
        'limited_profile' => 'setLimitedProfile',
        'score' => 'setScore',
        'profile_number' => 'setProfileNumber',
        'model_code' => 'setModelCode',
        'model_title' => 'setModelTitle',
        'percentile_ranking' => 'setPercentileRanking',
        'probability' => 'setProbability',
        'risk_class' => 'setRiskClass',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'publicly_held_company' => 'getPubliclyHeldCompany',
        'limited_profile' => 'getLimitedProfile',
        'score' => 'getScore',
        'profile_number' => 'getProfileNumber',
        'model_code' => 'getModelCode',
        'model_title' => 'getModelTitle',
        'percentile_ranking' => 'getPercentileRanking',
        'probability' => 'getProbability',
        'risk_class' => 'getRiskClass',
        'customer_dispute_indicator' => 'getCustomerDisputeIndicator'
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
        $this->container['publicly_held_company'] = isset($data['publicly_held_company']) ? $data['publicly_held_company'] : null;
        $this->container['limited_profile'] = isset($data['limited_profile']) ? $data['limited_profile'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['profile_number'] = isset($data['profile_number']) ? $data['profile_number'] : null;
        $this->container['model_code'] = isset($data['model_code']) ? $data['model_code'] : null;
        $this->container['model_title'] = isset($data['model_title']) ? $data['model_title'] : null;
        $this->container['percentile_ranking'] = isset($data['percentile_ranking']) ? $data['percentile_ranking'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['risk_class'] = isset($data['risk_class']) ? $data['risk_class'] : null;
        $this->container['customer_dispute_indicator'] = isset($data['customer_dispute_indicator']) ? $data['customer_dispute_indicator'] : null;
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
     * Gets publicly_held_company
     *
     * @return bool
     */
    public function getPubliclyHeldCompany()
    {
        return $this->container['publicly_held_company'];
    }

    /**
     * Sets publicly_held_company
     *
     * @param bool $publicly_held_company If true indicates the business is a publicly held company
     *
     * @return $this
     */
    public function setPubliclyHeldCompany($publicly_held_company)
    {
        $this->container['publicly_held_company'] = $publicly_held_company;

        return $this;
    }

    /**
     * Gets limited_profile
     *
     * @return bool
     */
    public function getLimitedProfile()
    {
        return $this->container['limited_profile'];
    }

    /**
     * Sets limited_profile
     *
     * @param bool $limited_profile If true indicates a limited profile
     *
     * @return $this
     */
    public function setLimitedProfile($limited_profile)
    {
        $this->container['limited_profile'] = $limited_profile;

        return $this;
    }

    /**
     * Gets score
     *
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float $score FSR score predicts the likelihood of severe delinquency or bankruptcy within the next 12 months.
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets profile_number
     *
     * @return string
     */
    public function getProfileNumber()
    {
        return $this->container['profile_number'];
    }

    /**
     * Sets profile_number
     *
     * @param string $profile_number Profile number
     *
     * @return $this
     */
    public function setProfileNumber($profile_number)
    {
        $this->container['profile_number'] = $profile_number;

        return $this;
    }

    /**
     * Gets model_code
     *
     * @return string
     */
    public function getModelCode()
    {
        return $this->container['model_code'];
    }

    /**
     * Sets model_code
     *
     * @param string $model_code FSR score model code
     *
     * @return $this
     */
    public function setModelCode($model_code)
    {
        $this->container['model_code'] = $model_code;

        return $this;
    }

    /**
     * Gets model_title
     *
     * @return string
     */
    public function getModelTitle()
    {
        return $this->container['model_title'];
    }

    /**
     * Sets model_title
     *
     * @param string $model_title FSR score model title
     *
     * @return $this
     */
    public function setModelTitle($model_title)
    {
        $this->container['model_title'] = $model_title;

        return $this;
    }

    /**
     * Gets percentile_ranking
     *
     * @return float
     */
    public function getPercentileRanking()
    {
        return $this->container['percentile_ranking'];
    }

    /**
     * Sets percentile_ranking
     *
     * @param float $percentile_ranking Percentage of businesses that would score lower than this business. 998 displays when there is a recent bankruptcy; 999 displays when there is insufficient data to score
     *
     * @return $this
     */
    public function setPercentileRanking($percentile_ranking)
    {
        $this->container['percentile_ranking'] = $percentile_ranking;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param float $probability Probability percentage that the business will go bad
     *
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets risk_class
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformationFsrScoreRiskClass
     */
    public function getRiskClass()
    {
        return $this->container['risk_class'];
    }

    /**
     * Sets risk_class
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformationFsrScoreRiskClass $risk_class risk_class
     *
     * @return $this
     */
    public function setRiskClass($risk_class)
    {
        $this->container['risk_class'] = $risk_class;

        return $this;
    }

    /**
     * Gets customer_dispute_indicator
     *
     * @return bool
     */
    public function getCustomerDisputeIndicator()
    {
        return $this->container['customer_dispute_indicator'];
    }

    /**
     * Sets customer_dispute_indicator
     *
     * @param bool $customer_dispute_indicator If true, indicates that there is a customer dispute on file
     *
     * @return $this
     */
    public function setCustomerDisputeIndicator($customer_dispute_indicator)
    {
        $this->container['customer_dispute_indicator'] = $customer_dispute_indicator;

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


