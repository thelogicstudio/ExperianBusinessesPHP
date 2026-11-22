<?php
/**
 * CompanyOwnersAndPrincipalsResult
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
 * CompanyOwnersAndPrincipalsResult Class Doc Comment
 *
 * @category Class
 * @description Identifies any known company owners of the business
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyOwnersAndPrincipalsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyOwnersAndPrincipalsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_reported' => 'string',
        'current_owner_indicator' => 'bool',
        'business_name' => 'string',
        'tax_id' => 'string',
        'tax_id_type' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\AddressResult',
        'phone' => 'string',
        'percent_of_financial_obligation' => 'float',
        'name_address_change_indicator' => 'bool',
        'owner_is_guarantor_indicator' => 'bool'
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
        'business_name' => null,
        'tax_id' => null,
        'tax_id_type' => null,
        'address' => null,
        'phone' => null,
        'percent_of_financial_obligation' => null,
        'name_address_change_indicator' => null,
        'owner_is_guarantor_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_reported' => false,
        'current_owner_indicator' => false,
        'business_name' => false,
        'tax_id' => false,
        'tax_id_type' => false,
        'address' => false,
        'phone' => false,
        'percent_of_financial_obligation' => false,
        'name_address_change_indicator' => false,
        'owner_is_guarantor_indicator' => false
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
        'business_name' => 'businessName',
        'tax_id' => 'taxId',
        'tax_id_type' => 'taxIdType',
        'address' => 'address',
        'phone' => 'phone',
        'percent_of_financial_obligation' => 'percentOfFinancialObligation',
        'name_address_change_indicator' => 'nameAddressChangeIndicator',
        'owner_is_guarantor_indicator' => 'ownerIsGuarantorIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_reported' => 'setDateReported',
        'current_owner_indicator' => 'setCurrentOwnerIndicator',
        'business_name' => 'setBusinessName',
        'tax_id' => 'setTaxId',
        'tax_id_type' => 'setTaxIdType',
        'address' => 'setAddress',
        'phone' => 'setPhone',
        'percent_of_financial_obligation' => 'setPercentOfFinancialObligation',
        'name_address_change_indicator' => 'setNameAddressChangeIndicator',
        'owner_is_guarantor_indicator' => 'setOwnerIsGuarantorIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_reported' => 'getDateReported',
        'current_owner_indicator' => 'getCurrentOwnerIndicator',
        'business_name' => 'getBusinessName',
        'tax_id' => 'getTaxId',
        'tax_id_type' => 'getTaxIdType',
        'address' => 'getAddress',
        'phone' => 'getPhone',
        'percent_of_financial_obligation' => 'getPercentOfFinancialObligation',
        'name_address_change_indicator' => 'getNameAddressChangeIndicator',
        'owner_is_guarantor_indicator' => 'getOwnerIsGuarantorIndicator'
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
        $this->setIfExists('business_name', $data ?? [], null);
        $this->setIfExists('tax_id', $data ?? [], null);
        $this->setIfExists('tax_id_type', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('percent_of_financial_obligation', $data ?? [], null);
        $this->setIfExists('name_address_change_indicator', $data ?? [], null);
        $this->setIfExists('owner_is_guarantor_indicator', $data ?? [], null);
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

        if (!is_null($this->container['business_name']) && (mb_strlen($this->container['business_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'business_name', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['tax_id']) && (mb_strlen($this->container['tax_id']) > 9)) {
            $invalidProperties[] = "invalid value for 'tax_id', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 14)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 14.";
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
     * @param string|null $date_reported Date the company owner was reported to Experian. Format = \"YYYY-MM-DD\"
     *
     * @return self
     */
    public function setDateReported($date_reported)
    {
        if (is_null($date_reported)) {
            throw new \InvalidArgumentException('non-nullable date_reported cannot be null');
        }
        if ((mb_strlen($date_reported) > 8)) {
            throw new \InvalidArgumentException('invalid length for $date_reported when calling CompanyOwnersAndPrincipalsResult., must be smaller than or equal to 8.');
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
     * @param bool|null $current_owner_indicator If true indicates the company is a current owner of the business
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
     * Gets business_name
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string|null $business_name Business name
     *
     * @return self
     */
    public function setBusinessName($business_name)
    {
        if (is_null($business_name)) {
            throw new \InvalidArgumentException('non-nullable business_name cannot be null');
        }
        if ((mb_strlen($business_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $business_name when calling CompanyOwnersAndPrincipalsResult., must be smaller than or equal to 120.');
        }

        $this->container['business_name'] = $business_name;

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
     * @param string|null $tax_id Tax ID of the business
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        if ((mb_strlen($tax_id) > 9)) {
            throw new \InvalidArgumentException('invalid length for $tax_id when calling CompanyOwnersAndPrincipalsResult., must be smaller than or equal to 9.');
        }

        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets tax_id_type
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType|null
     */
    public function getTaxIdType()
    {
        return $this->container['tax_id_type'];
    }

    /**
     * Sets tax_id_type
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TaxIdType|null $tax_id_type tax_id_type
     *
     * @return self
     */
    public function setTaxIdType($tax_id_type)
    {
        if (is_null($tax_id_type)) {
            throw new \InvalidArgumentException('non-nullable tax_id_type cannot be null');
        }
        $this->container['tax_id_type'] = $tax_id_type;

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
     * @param string|null $phone Phone number
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        if ((mb_strlen($phone) > 14)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CompanyOwnersAndPrincipalsResult., must be smaller than or equal to 14.');
        }

        $this->container['phone'] = $phone;

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
     * @param bool|null $name_address_change_indicator If true indicates that there was an address or name change
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


