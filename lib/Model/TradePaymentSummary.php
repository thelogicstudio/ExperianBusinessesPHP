<?php
/**
 * TradePaymentSummary
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
 * TradePaymentSummary Class Doc Comment
 *
 * @category Class
 * @description Object containing trade payment summary information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TradePaymentSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TradePaymentSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_dbt' => 'int',
        'monthly_average_dbt' => 'int',
        'highest_dbt6_months' => 'int',
        'highest_dbt5_quarters' => 'int',
        'all_tradeline_count' => 'int',
        'all_tradeline_balance' => 'int',
        'current_tradeline_count' => 'int',
        'current_account_balance' => 'int',
        'median_credit_amount_extended' => 'int',
        'single_high_credit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_dbt' => 'int64',
        'monthly_average_dbt' => 'int64',
        'highest_dbt6_months' => 'int64',
        'highest_dbt5_quarters' => 'int64',
        'all_tradeline_count' => 'int64',
        'all_tradeline_balance' => 'int64',
        'current_tradeline_count' => 'int64',
        'current_account_balance' => 'int64',
        'median_credit_amount_extended' => 'int64',
        'single_high_credit' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_dbt' => false,
        'monthly_average_dbt' => false,
        'highest_dbt6_months' => false,
        'highest_dbt5_quarters' => false,
        'all_tradeline_count' => false,
        'all_tradeline_balance' => false,
        'current_tradeline_count' => false,
        'current_account_balance' => false,
        'median_credit_amount_extended' => false,
        'single_high_credit' => false
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
        'current_dbt' => 'currentDbt',
        'monthly_average_dbt' => 'monthlyAverageDbt',
        'highest_dbt6_months' => 'highestDbt6Months',
        'highest_dbt5_quarters' => 'highestDbt5Quarters',
        'all_tradeline_count' => 'allTradelineCount',
        'all_tradeline_balance' => 'allTradelineBalance',
        'current_tradeline_count' => 'currentTradelineCount',
        'current_account_balance' => 'currentAccountBalance',
        'median_credit_amount_extended' => 'medianCreditAmountExtended',
        'single_high_credit' => 'singleHighCredit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_dbt' => 'setCurrentDbt',
        'monthly_average_dbt' => 'setMonthlyAverageDbt',
        'highest_dbt6_months' => 'setHighestDbt6Months',
        'highest_dbt5_quarters' => 'setHighestDbt5Quarters',
        'all_tradeline_count' => 'setAllTradelineCount',
        'all_tradeline_balance' => 'setAllTradelineBalance',
        'current_tradeline_count' => 'setCurrentTradelineCount',
        'current_account_balance' => 'setCurrentAccountBalance',
        'median_credit_amount_extended' => 'setMedianCreditAmountExtended',
        'single_high_credit' => 'setSingleHighCredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_dbt' => 'getCurrentDbt',
        'monthly_average_dbt' => 'getMonthlyAverageDbt',
        'highest_dbt6_months' => 'getHighestDbt6Months',
        'highest_dbt5_quarters' => 'getHighestDbt5Quarters',
        'all_tradeline_count' => 'getAllTradelineCount',
        'all_tradeline_balance' => 'getAllTradelineBalance',
        'current_tradeline_count' => 'getCurrentTradelineCount',
        'current_account_balance' => 'getCurrentAccountBalance',
        'median_credit_amount_extended' => 'getMedianCreditAmountExtended',
        'single_high_credit' => 'getSingleHighCredit'
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
        $this->setIfExists('current_dbt', $data ?? [], null);
        $this->setIfExists('monthly_average_dbt', $data ?? [], null);
        $this->setIfExists('highest_dbt6_months', $data ?? [], null);
        $this->setIfExists('highest_dbt5_quarters', $data ?? [], null);
        $this->setIfExists('all_tradeline_count', $data ?? [], null);
        $this->setIfExists('all_tradeline_balance', $data ?? [], null);
        $this->setIfExists('current_tradeline_count', $data ?? [], null);
        $this->setIfExists('current_account_balance', $data ?? [], null);
        $this->setIfExists('median_credit_amount_extended', $data ?? [], null);
        $this->setIfExists('single_high_credit', $data ?? [], null);
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
     * Gets current_dbt
     *
     * @return int|null
     */
    public function getCurrentDbt()
    {
        return $this->container['current_dbt'];
    }

    /**
     * Sets current_dbt
     *
     * @param int|null $current_dbt Current Days-Beyond-Terms (DBT). The dollar-weighted average number of days beyond the invoice due date a business pays its bills
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
     * Gets monthly_average_dbt
     *
     * @return int|null
     */
    public function getMonthlyAverageDbt()
    {
        return $this->container['monthly_average_dbt'];
    }

    /**
     * Sets monthly_average_dbt
     *
     * @param int|null $monthly_average_dbt Average of the past 6 months balances and past due amounts to derive Days-Beyond-Terms (DBT)
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
     * @return int|null
     */
    public function getHighestDbt6Months()
    {
        return $this->container['highest_dbt6_months'];
    }

    /**
     * Sets highest_dbt6_months
     *
     * @param int|null $highest_dbt6_months The highest Days-Beyond-Terms (DBT) the business has experienced in the current month and the last 6 months
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
     * @return int|null
     */
    public function getHighestDbt5Quarters()
    {
        return $this->container['highest_dbt5_quarters'];
    }

    /**
     * Sets highest_dbt5_quarters
     *
     * @param int|null $highest_dbt5_quarters The highest Days-Beyond-Terms (DBT) the business has experience in the current month and the last 5 quarters
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
     * Gets all_tradeline_count
     *
     * @return int|null
     */
    public function getAllTradelineCount()
    {
        return $this->container['all_tradeline_count'];
    }

    /**
     * Sets all_tradeline_count
     *
     * @param int|null $all_tradeline_count Number of all newly reported, continuously reported, and additional trade payment experiences
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
     * Gets all_tradeline_balance
     *
     * @return int|null
     */
    public function getAllTradelineBalance()
    {
        return $this->container['all_tradeline_balance'];
    }

    /**
     * Sets all_tradeline_balance
     *
     * @param int|null $all_tradeline_balance Balance of all new, continuous, and additional trade payment experiences
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
     * Gets current_tradeline_count
     *
     * @return int|null
     */
    public function getCurrentTradelineCount()
    {
        return $this->container['current_tradeline_count'];
    }

    /**
     * Sets current_tradeline_count
     *
     * @param int|null $current_tradeline_count Total count of new and continuous tradelines
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
     * Gets current_account_balance
     *
     * @return int|null
     */
    public function getCurrentAccountBalance()
    {
        return $this->container['current_account_balance'];
    }

    /**
     * Sets current_account_balance
     *
     * @param int|null $current_account_balance Total account balance of continuous trades
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
     * Gets median_credit_amount_extended
     *
     * @return int|null
     */
    public function getMedianCreditAmountExtended()
    {
        return $this->container['median_credit_amount_extended'];
    }

    /**
     * Sets median_credit_amount_extended
     *
     * @param int|null $median_credit_amount_extended The median credit amount extended
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
     * Gets single_high_credit
     *
     * @return int|null
     */
    public function getSingleHighCredit()
    {
        return $this->container['single_high_credit'];
    }

    /**
     * Sets single_high_credit
     *
     * @param int|null $single_high_credit The single highest credit amount extended based on non-financial, new, or continuous tradelines
     *
     * @return self
     */
    public function setSingleHighCredit($single_high_credit)
    {
        if (is_null($single_high_credit)) {
            throw new \InvalidArgumentException('non-nullable single_high_credit cannot be null');
        }
        $this->container['single_high_credit'] = $single_high_credit;

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


