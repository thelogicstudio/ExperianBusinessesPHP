<?php
/**
 * IndividualOwnersAndPrincipalsResult
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
 * IndividualOwnersAndPrincipalsResult Class Doc Comment
 *
 * @category Class
 * @description Identifies a list of any known owners or principals at the business
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IndividualOwnersAndPrincipalsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IndividualOwnersAndPrincipalsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_reported' => 'string',
        'current_owner_indicator' => 'bool',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'generation_code' => 'string',
        'email_address' => 'string',
        'owner_is_guarantor_indicator' => 'bool',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult',
        'percent_of_financial_obligation' => 'float',
        'name_address_change_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_reported' => null,
        'current_owner_indicator' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'generation_code' => null,
        'email_address' => null,
        'owner_is_guarantor_indicator' => null,
        'address' => null,
        'percent_of_financial_obligation' => null,
        'name_address_change_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_reported' => false,
        'current_owner_indicator' => false,
        'first_name' => false,
        'middle_name' => false,
        'last_name' => false,
        'generation_code' => false,
        'email_address' => false,
        'owner_is_guarantor_indicator' => false,
        'address' => false,
        'percent_of_financial_obligation' => false,
        'name_address_change_indicator' => false
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
        'date_reported' => 'dateReported',
        'current_owner_indicator' => 'currentOwnerIndicator',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'generation_code' => 'generationCode',
        'email_address' => 'emailAddress',
        'owner_is_guarantor_indicator' => 'ownerIsGuarantorIndicator',
        'address' => 'address',
        'percent_of_financial_obligation' => 'percentOfFinancialObligation',
        'name_address_change_indicator' => 'nameAddressChangeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_reported' => 'setDateReported',
        'current_owner_indicator' => 'setCurrentOwnerIndicator',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'generation_code' => 'setGenerationCode',
        'email_address' => 'setEmailAddress',
        'owner_is_guarantor_indicator' => 'setOwnerIsGuarantorIndicator',
        'address' => 'setAddress',
        'percent_of_financial_obligation' => 'setPercentOfFinancialObligation',
        'name_address_change_indicator' => 'setNameAddressChangeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_reported' => 'getDateReported',
        'current_owner_indicator' => 'getCurrentOwnerIndicator',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'generation_code' => 'getGenerationCode',
        'email_address' => 'getEmailAddress',
        'owner_is_guarantor_indicator' => 'getOwnerIsGuarantorIndicator',
        'address' => 'getAddress',
        'percent_of_financial_obligation' => 'getPercentOfFinancialObligation',
        'name_address_change_indicator' => 'getNameAddressChangeIndicator'
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
        $this->setIfExists('date_reported', $data ?? [], null);
        $this->setIfExists('current_owner_indicator', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('generation_code', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('owner_is_guarantor_indicator', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('percent_of_financial_obligation', $data ?? [], null);
        $this->setIfExists('name_address_change_indicator', $data ?? [], null);
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

        if (!is_null($this->container['date_reported']) && (mb_strlen($this->container['date_reported']) > 8)) {
            $invalidProperties[] = "invalid value for 'date_reported', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 32)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) > 32)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['generation_code']) && (mb_strlen($this->container['generation_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'generation_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 75)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 75.";
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
     * Gets date_reported
     *
     * @return string|null
     */
    public function getDateReported()
    {
        return $this->container['date_reported'];
    }

    /**
     * Sets date_reported
     *
     * @param string|null $date_reported Date the owner was reported to Experian. Format = \"YYYY-MM-DD\"
     *
     * @return self
     */
    public function setDateReported($date_reported)
    {
        if (is_null($date_reported)) {
            throw new \InvalidArgumentException('non-nullable date_reported cannot be null');
        }
        if ((mb_strlen($date_reported) > 8)) {
            throw new \InvalidArgumentException('invalid length for $date_reported when calling IndividualOwnersAndPrincipalsResult., must be smaller than or equal to 8.');
        }

        $this->container['date_reported'] = $date_reported;

        return $this;
    }

    /**
     * Gets current_owner_indicator
     *
     * @return bool|null
     */
    public function getCurrentOwnerIndicator()
    {
        return $this->container['current_owner_indicator'];
    }

    /**
     * Sets current_owner_indicator
     *
     * @param bool|null $current_owner_indicator If true indicates the individual is a current owner of the business
     *
     * @return self
     */
    public function setCurrentOwnerIndicator($current_owner_indicator)
    {
        if (is_null($current_owner_indicator)) {
            throw new \InvalidArgumentException('non-nullable current_owner_indicator cannot be null');
        }
        $this->container['current_owner_indicator'] = $current_owner_indicator;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        if ((mb_strlen($first_name) > 32)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling IndividualOwnersAndPrincipalsResult., must be smaller than or equal to 32.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name Middle name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        if ((mb_strlen($middle_name) > 32)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling IndividualOwnersAndPrincipalsResult., must be smaller than or equal to 32.');
        }

        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        if ((mb_strlen($last_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling IndividualOwnersAndPrincipalsResult., must be smaller than or equal to 40.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets generation_code
     *
     * @return string|null
     */
    public function getGenerationCode()
    {
        return $this->container['generation_code'];
    }

    /**
     * Sets generation_code
     *
     * @param string|null $generation_code Generation code, Sr., Jr., etc.
     *
     * @return self
     */
    public function setGenerationCode($generation_code)
    {
        if (is_null($generation_code)) {
            throw new \InvalidArgumentException('non-nullable generation_code cannot be null');
        }
        if ((mb_strlen($generation_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $generation_code when calling IndividualOwnersAndPrincipalsResult., must be smaller than or equal to 1.');
        }

        $this->container['generation_code'] = $generation_code;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address Email address of the individual owner, if available
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        if ((mb_strlen($email_address) > 75)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling IndividualOwnersAndPrincipalsResult., must be smaller than or equal to 75.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets owner_is_guarantor_indicator
     *
     * @return bool|null
     */
    public function getOwnerIsGuarantorIndicator()
    {
        return $this->container['owner_is_guarantor_indicator'];
    }

    /**
     * Sets owner_is_guarantor_indicator
     *
     * @param bool|null $owner_is_guarantor_indicator If true indicates that the owner is also a guarantor of the business
     *
     * @return self
     */
    public function setOwnerIsGuarantorIndicator($owner_is_guarantor_indicator)
    {
        if (is_null($owner_is_guarantor_indicator)) {
            throw new \InvalidArgumentException('non-nullable owner_is_guarantor_indicator cannot be null');
        }
        $this->container['owner_is_guarantor_indicator'] = $owner_is_guarantor_indicator;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult|null $address address
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
     * Gets percent_of_financial_obligation
     *
     * @return float|null
     */
    public function getPercentOfFinancialObligation()
    {
        return $this->container['percent_of_financial_obligation'];
    }

    /**
     * Sets percent_of_financial_obligation
     *
     * @param float|null $percent_of_financial_obligation Returns the owners financial obligation, or percentage stake in the business. Null if not available
     *
     * @return self
     */
    public function setPercentOfFinancialObligation($percent_of_financial_obligation)
    {
        if (is_null($percent_of_financial_obligation)) {
            throw new \InvalidArgumentException('non-nullable percent_of_financial_obligation cannot be null');
        }
        $this->container['percent_of_financial_obligation'] = $percent_of_financial_obligation;

        return $this;
    }

    /**
     * Gets name_address_change_indicator
     *
     * @return bool|null
     */
    public function getNameAddressChangeIndicator()
    {
        return $this->container['name_address_change_indicator'];
    }

    /**
     * Sets name_address_change_indicator
     *
     * @param bool|null $name_address_change_indicator Identifies any known company owners of the business
     *
     * @return self
     */
    public function setNameAddressChangeIndicator($name_address_change_indicator)
    {
        if (is_null($name_address_change_indicator)) {
            throw new \InvalidArgumentException('non-nullable name_address_change_indicator cannot be null');
        }
        $this->container['name_address_change_indicator'] = $name_address_change_indicator;

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


