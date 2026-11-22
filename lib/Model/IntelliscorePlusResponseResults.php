<?php
/**
 * IntelliscorePlusResponseResults
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
 * IntelliscorePlusResponseResults Class Doc Comment
 *
 * @category Class
 * @description Object containing alerts information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntelliscorePlusResponseResults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntelliscorePlusResponse_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_name_and_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsBusinessNameAndAddressInner[]',
        'intelliscore_score_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner[]',
        'intelliscore_factors' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreFactorsInner[]',
        'custom_header' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsCustomHeader',
        'custom_footer' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsCustomFooter',
        'executive_elements' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsExecutiveElements',
        'consumer_statement' => '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsConsumerStatement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_name_and_address' => null,
        'intelliscore_score_information' => null,
        'intelliscore_factors' => null,
        'custom_header' => null,
        'custom_footer' => null,
        'executive_elements' => null,
        'consumer_statement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_name_and_address' => false,
        'intelliscore_score_information' => false,
        'intelliscore_factors' => false,
        'custom_header' => false,
        'custom_footer' => false,
        'executive_elements' => false,
        'consumer_statement' => false
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
        'business_name_and_address' => 'businessNameAndAddress',
        'intelliscore_score_information' => 'intelliscoreScoreInformation',
        'intelliscore_factors' => 'intelliscoreFactors',
        'custom_header' => 'customHeader',
        'custom_footer' => 'customFooter',
        'executive_elements' => 'executiveElements',
        'consumer_statement' => 'consumerStatement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_name_and_address' => 'setBusinessNameAndAddress',
        'intelliscore_score_information' => 'setIntelliscoreScoreInformation',
        'intelliscore_factors' => 'setIntelliscoreFactors',
        'custom_header' => 'setCustomHeader',
        'custom_footer' => 'setCustomFooter',
        'executive_elements' => 'setExecutiveElements',
        'consumer_statement' => 'setConsumerStatement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_name_and_address' => 'getBusinessNameAndAddress',
        'intelliscore_score_information' => 'getIntelliscoreScoreInformation',
        'intelliscore_factors' => 'getIntelliscoreFactors',
        'custom_header' => 'getCustomHeader',
        'custom_footer' => 'getCustomFooter',
        'executive_elements' => 'getExecutiveElements',
        'consumer_statement' => 'getConsumerStatement'
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
        $this->setIfExists('business_name_and_address', $data ?? [], null);
        $this->setIfExists('intelliscore_score_information', $data ?? [], null);
        $this->setIfExists('intelliscore_factors', $data ?? [], null);
        $this->setIfExists('custom_header', $data ?? [], null);
        $this->setIfExists('custom_footer', $data ?? [], null);
        $this->setIfExists('executive_elements', $data ?? [], null);
        $this->setIfExists('consumer_statement', $data ?? [], null);
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
     * Gets business_name_and_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsBusinessNameAndAddressInner[]|null
     */
    public function getBusinessNameAndAddress()
    {
        return $this->container['business_name_and_address'];
    }

    /**
     * Sets business_name_and_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsBusinessNameAndAddressInner[]|null $business_name_and_address Business Name and address
     *
     * @return self
     */
    public function setBusinessNameAndAddress($business_name_and_address)
    {
        if (is_null($business_name_and_address)) {
            throw new \InvalidArgumentException('non-nullable business_name_and_address cannot be null');
        }
        $this->container['business_name_and_address'] = $business_name_and_address;

        return $this;
    }

    /**
     * Gets intelliscore_score_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner[]|null
     */
    public function getIntelliscoreScoreInformation()
    {
        return $this->container['intelliscore_score_information'];
    }

    /**
     * Sets intelliscore_score_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreScoreInformationInner[]|null $intelliscore_score_information Intelliscore Score Information
     *
     * @return self
     */
    public function setIntelliscoreScoreInformation($intelliscore_score_information)
    {
        if (is_null($intelliscore_score_information)) {
            throw new \InvalidArgumentException('non-nullable intelliscore_score_information cannot be null');
        }
        $this->container['intelliscore_score_information'] = $intelliscore_score_information;

        return $this;
    }

    /**
     * Gets intelliscore_factors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreFactorsInner[]|null
     */
    public function getIntelliscoreFactors()
    {
        return $this->container['intelliscore_factors'];
    }

    /**
     * Sets intelliscore_factors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsIntelliscoreFactorsInner[]|null $intelliscore_factors Intelliscore Factors
     *
     * @return self
     */
    public function setIntelliscoreFactors($intelliscore_factors)
    {
        if (is_null($intelliscore_factors)) {
            throw new \InvalidArgumentException('non-nullable intelliscore_factors cannot be null');
        }
        $this->container['intelliscore_factors'] = $intelliscore_factors;

        return $this;
    }

    /**
     * Gets custom_header
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsCustomHeader|null
     */
    public function getCustomHeader()
    {
        return $this->container['custom_header'];
    }

    /**
     * Sets custom_header
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsCustomHeader|null $custom_header custom_header
     *
     * @return self
     */
    public function setCustomHeader($custom_header)
    {
        if (is_null($custom_header)) {
            throw new \InvalidArgumentException('non-nullable custom_header cannot be null');
        }
        $this->container['custom_header'] = $custom_header;

        return $this;
    }

    /**
     * Gets custom_footer
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsCustomFooter|null
     */
    public function getCustomFooter()
    {
        return $this->container['custom_footer'];
    }

    /**
     * Sets custom_footer
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsCustomFooter|null $custom_footer custom_footer
     *
     * @return self
     */
    public function setCustomFooter($custom_footer)
    {
        if (is_null($custom_footer)) {
            throw new \InvalidArgumentException('non-nullable custom_footer cannot be null');
        }
        $this->container['custom_footer'] = $custom_footer;

        return $this;
    }

    /**
     * Gets executive_elements
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsExecutiveElements|null
     */
    public function getExecutiveElements()
    {
        return $this->container['executive_elements'];
    }

    /**
     * Sets executive_elements
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsExecutiveElements|null $executive_elements executive_elements
     *
     * @return self
     */
    public function setExecutiveElements($executive_elements)
    {
        if (is_null($executive_elements)) {
            throw new \InvalidArgumentException('non-nullable executive_elements cannot be null');
        }
        $this->container['executive_elements'] = $executive_elements;

        return $this;
    }

    /**
     * Gets consumer_statement
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsConsumerStatement|null
     */
    public function getConsumerStatement()
    {
        return $this->container['consumer_statement'];
    }

    /**
     * Sets consumer_statement
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponseResultsConsumerStatement|null $consumer_statement consumer_statement
     *
     * @return self
     */
    public function setConsumerStatement($consumer_statement)
    {
        if (is_null($consumer_statement)) {
            throw new \InvalidArgumentException('non-nullable consumer_statement cannot be null');
        }
        $this->container['consumer_statement'] = $consumer_statement;

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


