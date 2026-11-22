<?php
/**
 * PremierProfilesResponseAllOfResultsCommercialBankInformation
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
 * PremierProfilesResponseAllOfResultsCommercialBankInformation Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PremierProfilesResponseAllOfResultsCommercialBankInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PremierProfilesResponse_allOf_results_commercialBankInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'institution_type' => 'string',
        'relationship' => 'string',
        'institution_name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'profile_date' => 'string',
        'open_date' => 'string',
        'close_date' => 'string',
        'account_rating' => 'string',
        'balance_range' => 'string',
        'figures_in_balance' => 'float',
        'balance_amount' => 'float',
        'customer_dispute_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'institution_type' => null,
        'relationship' => null,
        'institution_name' => null,
        'address' => null,
        'phone' => null,
        'profile_date' => null,
        'open_date' => null,
        'close_date' => null,
        'account_rating' => null,
        'balance_range' => null,
        'figures_in_balance' => null,
        'balance_amount' => null,
        'customer_dispute_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'institution_type' => false,
        'relationship' => false,
        'institution_name' => false,
        'address' => false,
        'phone' => false,
        'profile_date' => false,
        'open_date' => false,
        'close_date' => false,
        'account_rating' => false,
        'balance_range' => false,
        'figures_in_balance' => false,
        'balance_amount' => false,
        'customer_dispute_indicator' => false
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
        'institution_type' => 'institutionType',
        'relationship' => 'relationship',
        'institution_name' => 'institutionName',
        'address' => 'address',
        'phone' => 'phone',
        'profile_date' => 'profileDate',
        'open_date' => 'openDate',
        'close_date' => 'closeDate',
        'account_rating' => 'accountRating',
        'balance_range' => 'balanceRange',
        'figures_in_balance' => 'figuresInBalance',
        'balance_amount' => 'balanceAmount',
        'customer_dispute_indicator' => 'customerDisputeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institution_type' => 'setInstitutionType',
        'relationship' => 'setRelationship',
        'institution_name' => 'setInstitutionName',
        'address' => 'setAddress',
        'phone' => 'setPhone',
        'profile_date' => 'setProfileDate',
        'open_date' => 'setOpenDate',
        'close_date' => 'setCloseDate',
        'account_rating' => 'setAccountRating',
        'balance_range' => 'setBalanceRange',
        'figures_in_balance' => 'setFiguresInBalance',
        'balance_amount' => 'setBalanceAmount',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institution_type' => 'getInstitutionType',
        'relationship' => 'getRelationship',
        'institution_name' => 'getInstitutionName',
        'address' => 'getAddress',
        'phone' => 'getPhone',
        'profile_date' => 'getProfileDate',
        'open_date' => 'getOpenDate',
        'close_date' => 'getCloseDate',
        'account_rating' => 'getAccountRating',
        'balance_range' => 'getBalanceRange',
        'figures_in_balance' => 'getFiguresInBalance',
        'balance_amount' => 'getBalanceAmount',
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
        $this->setIfExists('institution_type', $data ?? [], null);
        $this->setIfExists('relationship', $data ?? [], null);
        $this->setIfExists('institution_name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('profile_date', $data ?? [], null);
        $this->setIfExists('open_date', $data ?? [], null);
        $this->setIfExists('close_date', $data ?? [], null);
        $this->setIfExists('account_rating', $data ?? [], null);
        $this->setIfExists('balance_range', $data ?? [], null);
        $this->setIfExists('figures_in_balance', $data ?? [], null);
        $this->setIfExists('balance_amount', $data ?? [], null);
        $this->setIfExists('customer_dispute_indicator', $data ?? [], null);
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
     * Gets institution_type
     *
     * @return string|null
     */
    public function getInstitutionType()
    {
        return $this->container['institution_type'];
    }

    /**
     * Sets institution_type
     *
     * @param string|null $institution_type Institution type
     *
     * @return self
     */
    public function setInstitutionType($institution_type)
    {
        if (is_null($institution_type)) {
            throw new \InvalidArgumentException('non-nullable institution_type cannot be null');
        }
        $this->container['institution_type'] = $institution_type;

        return $this;
    }

    /**
     * Gets relationship
     *
     * @return string|null
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     *
     * @param string|null $relationship Relationship
     *
     * @return self
     */
    public function setRelationship($relationship)
    {
        if (is_null($relationship)) {
            throw new \InvalidArgumentException('non-nullable relationship cannot be null');
        }
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets institution_name
     *
     * @return string|null
     */
    public function getInstitutionName()
    {
        return $this->container['institution_name'];
    }

    /**
     * Sets institution_name
     *
     * @param string|null $institution_name Institution name
     *
     * @return self
     */
    public function setInstitutionName($institution_name)
    {
        if (is_null($institution_name)) {
            throw new \InvalidArgumentException('non-nullable institution_name cannot be null');
        }
        $this->container['institution_name'] = $institution_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets profile_date
     *
     * @return string|null
     */
    public function getProfileDate()
    {
        return $this->container['profile_date'];
    }

    /**
     * Sets profile_date
     *
     * @param string|null $profile_date Profile date
     *
     * @return self
     */
    public function setProfileDate($profile_date)
    {
        if (is_null($profile_date)) {
            throw new \InvalidArgumentException('non-nullable profile_date cannot be null');
        }
        $this->container['profile_date'] = $profile_date;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string|null $open_date Open date
     *
     * @return self
     */
    public function setOpenDate($open_date)
    {
        if (is_null($open_date)) {
            throw new \InvalidArgumentException('non-nullable open_date cannot be null');
        }
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets close_date
     *
     * @return string|null
     */
    public function getCloseDate()
    {
        return $this->container['close_date'];
    }

    /**
     * Sets close_date
     *
     * @param string|null $close_date Close date
     *
     * @return self
     */
    public function setCloseDate($close_date)
    {
        if (is_null($close_date)) {
            throw new \InvalidArgumentException('non-nullable close_date cannot be null');
        }
        $this->container['close_date'] = $close_date;

        return $this;
    }

    /**
     * Gets account_rating
     *
     * @return string|null
     */
    public function getAccountRating()
    {
        return $this->container['account_rating'];
    }

    /**
     * Sets account_rating
     *
     * @param string|null $account_rating Account rating
     *
     * @return self
     */
    public function setAccountRating($account_rating)
    {
        if (is_null($account_rating)) {
            throw new \InvalidArgumentException('non-nullable account_rating cannot be null');
        }
        $this->container['account_rating'] = $account_rating;

        return $this;
    }

    /**
     * Gets balance_range
     *
     * @return string|null
     */
    public function getBalanceRange()
    {
        return $this->container['balance_range'];
    }

    /**
     * Sets balance_range
     *
     * @param string|null $balance_range Balance range
     *
     * @return self
     */
    public function setBalanceRange($balance_range)
    {
        if (is_null($balance_range)) {
            throw new \InvalidArgumentException('non-nullable balance_range cannot be null');
        }
        $this->container['balance_range'] = $balance_range;

        return $this;
    }

    /**
     * Gets figures_in_balance
     *
     * @return float|null
     */
    public function getFiguresInBalance()
    {
        return $this->container['figures_in_balance'];
    }

    /**
     * Sets figures_in_balance
     *
     * @param float|null $figures_in_balance Figures in balance
     *
     * @return self
     */
    public function setFiguresInBalance($figures_in_balance)
    {
        if (is_null($figures_in_balance)) {
            throw new \InvalidArgumentException('non-nullable figures_in_balance cannot be null');
        }
        $this->container['figures_in_balance'] = $figures_in_balance;

        return $this;
    }

    /**
     * Gets balance_amount
     *
     * @return float|null
     */
    public function getBalanceAmount()
    {
        return $this->container['balance_amount'];
    }

    /**
     * Sets balance_amount
     *
     * @param float|null $balance_amount Balance amount
     *
     * @return self
     */
    public function setBalanceAmount($balance_amount)
    {
        if (is_null($balance_amount)) {
            throw new \InvalidArgumentException('non-nullable balance_amount cannot be null');
        }
        $this->container['balance_amount'] = $balance_amount;

        return $this;
    }

    /**
     * Gets customer_dispute_indicator
     *
     * @return bool|null
     */
    public function getCustomerDisputeIndicator()
    {
        return $this->container['customer_dispute_indicator'];
    }

    /**
     * Sets customer_dispute_indicator
     *
     * @param bool|null $customer_dispute_indicator If true indicates a customer dispute is on file
     *
     * @return self
     */
    public function setCustomerDisputeIndicator($customer_dispute_indicator)
    {
        if (is_null($customer_dispute_indicator)) {
            throw new \InvalidArgumentException('non-nullable customer_dispute_indicator cannot be null');
        }
        $this->container['customer_dispute_indicator'] = $customer_dispute_indicator;

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


