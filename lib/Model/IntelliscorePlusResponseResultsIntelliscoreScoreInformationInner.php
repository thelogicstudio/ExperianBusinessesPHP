<?php
/**
 * IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner
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
 * IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntelliscorePlusResponse_results_intelliscoreScoreInformation_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'publicly_held_company' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerPubliclyHeldCompany',
        'limited_profile' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerLimitedProfile',
        'score_info' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerScoreInfo',
        'profile_number' => 'string',
        'model_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerModelInformation',
        'probability' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerProbability',
        'action' => 'string',
        'risk_class' => 'string',
        'customer_dispute_statement' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerCustomerDisputeStatement',
        'percentile_ranking' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'publicly_held_company' => null,
        'limited_profile' => null,
        'score_info' => null,
        'profile_number' => null,
        'model_information' => null,
        'probability' => null,
        'action' => null,
        'risk_class' => null,
        'customer_dispute_statement' => null,
        'percentile_ranking' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'publicly_held_company' => false,
        'limited_profile' => false,
        'score_info' => false,
        'profile_number' => false,
        'model_information' => false,
        'probability' => false,
        'action' => false,
        'risk_class' => false,
        'customer_dispute_statement' => false,
        'percentile_ranking' => false
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
        'publicly_held_company' => 'publiclyHeldCompany',
        'limited_profile' => 'limitedProfile',
        'score_info' => 'scoreInfo',
        'profile_number' => 'profileNumber',
        'model_information' => 'modelInformation',
        'probability' => 'probability',
        'action' => 'action',
        'risk_class' => 'riskClass',
        'customer_dispute_statement' => 'customerDisputeStatement',
        'percentile_ranking' => 'percentileRanking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'publicly_held_company' => 'setPubliclyHeldCompany',
        'limited_profile' => 'setLimitedProfile',
        'score_info' => 'setScoreInfo',
        'profile_number' => 'setProfileNumber',
        'model_information' => 'setModelInformation',
        'probability' => 'setProbability',
        'action' => 'setAction',
        'risk_class' => 'setRiskClass',
        'customer_dispute_statement' => 'setCustomerDisputeStatement',
        'percentile_ranking' => 'setPercentileRanking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'publicly_held_company' => 'getPubliclyHeldCompany',
        'limited_profile' => 'getLimitedProfile',
        'score_info' => 'getScoreInfo',
        'profile_number' => 'getProfileNumber',
        'model_information' => 'getModelInformation',
        'probability' => 'getProbability',
        'action' => 'getAction',
        'risk_class' => 'getRiskClass',
        'customer_dispute_statement' => 'getCustomerDisputeStatement',
        'percentile_ranking' => 'getPercentileRanking'
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
        $this->setIfExists('publicly_held_company', $data ?? [], null);
        $this->setIfExists('limited_profile', $data ?? [], null);
        $this->setIfExists('score_info', $data ?? [], null);
        $this->setIfExists('profile_number', $data ?? [], null);
        $this->setIfExists('model_information', $data ?? [], null);
        $this->setIfExists('probability', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('risk_class', $data ?? [], null);
        $this->setIfExists('customer_dispute_statement', $data ?? [], null);
        $this->setIfExists('percentile_ranking', $data ?? [], null);
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
     * Gets publicly_held_company
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerPubliclyHeldCompany|null
     */
    public function getPubliclyHeldCompany()
    {
        return $this->container['publicly_held_company'];
    }

    /**
     * Sets publicly_held_company
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerPubliclyHeldCompany|null $publicly_held_company publicly_held_company
     *
     * @return self
     */
    public function setPubliclyHeldCompany($publicly_held_company)
    {
        if (is_null($publicly_held_company)) {
            throw new \InvalidArgumentException('non-nullable publicly_held_company cannot be null');
        }
        $this->container['publicly_held_company'] = $publicly_held_company;

        return $this;
    }

    /**
     * Gets limited_profile
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerLimitedProfile|null
     */
    public function getLimitedProfile()
    {
        return $this->container['limited_profile'];
    }

    /**
     * Sets limited_profile
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerLimitedProfile|null $limited_profile limited_profile
     *
     * @return self
     */
    public function setLimitedProfile($limited_profile)
    {
        if (is_null($limited_profile)) {
            throw new \InvalidArgumentException('non-nullable limited_profile cannot be null');
        }
        $this->container['limited_profile'] = $limited_profile;

        return $this;
    }

    /**
     * Gets score_info
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerScoreInfo|null
     */
    public function getScoreInfo()
    {
        return $this->container['score_info'];
    }

    /**
     * Sets score_info
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerScoreInfo|null $score_info score_info
     *
     * @return self
     */
    public function setScoreInfo($score_info)
    {
        if (is_null($score_info)) {
            throw new \InvalidArgumentException('non-nullable score_info cannot be null');
        }
        $this->container['score_info'] = $score_info;

        return $this;
    }

    /**
     * Gets profile_number
     *
     * @return string|null
     */
    public function getProfileNumber()
    {
        return $this->container['profile_number'];
    }

    /**
     * Sets profile_number
     *
     * @param string|null $profile_number Profile number
     *
     * @return self
     */
    public function setProfileNumber($profile_number)
    {
        if (is_null($profile_number)) {
            throw new \InvalidArgumentException('non-nullable profile_number cannot be null');
        }
        $this->container['profile_number'] = $profile_number;

        return $this;
    }

    /**
     * Gets model_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerModelInformation|null
     */
    public function getModelInformation()
    {
        return $this->container['model_information'];
    }

    /**
     * Sets model_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerModelInformation|null $model_information model_information
     *
     * @return self
     */
    public function setModelInformation($model_information)
    {
        if (is_null($model_information)) {
            throw new \InvalidArgumentException('non-nullable model_information cannot be null');
        }
        $this->container['model_information'] = $model_information;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerProbability|null
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerProbability|null $probability probability
     *
     * @return self
     */
    public function setProbability($probability)
    {
        if (is_null($probability)) {
            throw new \InvalidArgumentException('non-nullable probability cannot be null');
        }
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets risk_class
     *
     * @return string|null
     */
    public function getRiskClass()
    {
        return $this->container['risk_class'];
    }

    /**
     * Sets risk_class
     *
     * @param string|null $risk_class Risk Class
     *
     * @return self
     */
    public function setRiskClass($risk_class)
    {
        if (is_null($risk_class)) {
            throw new \InvalidArgumentException('non-nullable risk_class cannot be null');
        }
        $this->container['risk_class'] = $risk_class;

        return $this;
    }

    /**
     * Gets customer_dispute_statement
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerCustomerDisputeStatement|null
     */
    public function getCustomerDisputeStatement()
    {
        return $this->container['customer_dispute_statement'];
    }

    /**
     * Sets customer_dispute_statement
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInnerCustomerDisputeStatement|null $customer_dispute_statement customer_dispute_statement
     *
     * @return self
     */
    public function setCustomerDisputeStatement($customer_dispute_statement)
    {
        if (is_null($customer_dispute_statement)) {
            throw new \InvalidArgumentException('non-nullable customer_dispute_statement cannot be null');
        }
        $this->container['customer_dispute_statement'] = $customer_dispute_statement;

        return $this;
    }

    /**
     * Gets percentile_ranking
     *
     * @return float|null
     */
    public function getPercentileRanking()
    {
        return $this->container['percentile_ranking'];
    }

    /**
     * Sets percentile_ranking
     *
     * @param float|null $percentile_ranking percentile Ranking
     *
     * @return self
     */
    public function setPercentileRanking($percentile_ranking)
    {
        if (is_null($percentile_ranking)) {
            throw new \InvalidArgumentException('non-nullable percentile_ranking cannot be null');
        }
        $this->container['percentile_ranking'] = $percentile_ranking;

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


