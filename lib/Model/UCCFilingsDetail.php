<?php
/**
 * UCCFilingsDetail
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
 * UCCFilingsDetail Class Doc Comment
 *
 * @category Class
 * @description Array containing details of UCC filings
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UCCFilingsDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UCCFilingsDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_filed' => '\DateTime',
        'legal_type' => 'string',
        'legal_action' => 'string',
        'document_number' => 'string',
        'filing_location' => 'string',
        'collateral_codes' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CollateralCode[]',
        'secured_party' => 'string',
        'assignee' => 'string',
        'owner' => 'string',
        'customer_dispute_indicator' => 'bool',
        'original_ucc_filings_info' => '\TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetailOriginalUCCFilingsInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_filed' => 'date',
        'legal_type' => null,
        'legal_action' => null,
        'document_number' => null,
        'filing_location' => null,
        'collateral_codes' => null,
        'secured_party' => null,
        'assignee' => null,
        'owner' => null,
        'customer_dispute_indicator' => null,
        'original_ucc_filings_info' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_filed' => false,
        'legal_type' => false,
        'legal_action' => false,
        'document_number' => false,
        'filing_location' => false,
        'collateral_codes' => false,
        'secured_party' => false,
        'assignee' => false,
        'owner' => false,
        'customer_dispute_indicator' => false,
        'original_ucc_filings_info' => false
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
        'date_filed' => 'dateFiled',
        'legal_type' => 'legalType',
        'legal_action' => 'legalAction',
        'document_number' => 'documentNumber',
        'filing_location' => 'filingLocation',
        'collateral_codes' => 'collateralCodes',
        'secured_party' => 'securedParty',
        'assignee' => 'assignee',
        'owner' => 'owner',
        'customer_dispute_indicator' => 'customerDisputeIndicator',
        'original_ucc_filings_info' => 'originalUCCFilingsInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_filed' => 'setDateFiled',
        'legal_type' => 'setLegalType',
        'legal_action' => 'setLegalAction',
        'document_number' => 'setDocumentNumber',
        'filing_location' => 'setFilingLocation',
        'collateral_codes' => 'setCollateralCodes',
        'secured_party' => 'setSecuredParty',
        'assignee' => 'setAssignee',
        'owner' => 'setOwner',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator',
        'original_ucc_filings_info' => 'setOriginalUccFilingsInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_filed' => 'getDateFiled',
        'legal_type' => 'getLegalType',
        'legal_action' => 'getLegalAction',
        'document_number' => 'getDocumentNumber',
        'filing_location' => 'getFilingLocation',
        'collateral_codes' => 'getCollateralCodes',
        'secured_party' => 'getSecuredParty',
        'assignee' => 'getAssignee',
        'owner' => 'getOwner',
        'customer_dispute_indicator' => 'getCustomerDisputeIndicator',
        'original_ucc_filings_info' => 'getOriginalUccFilingsInfo'
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
        $this->setIfExists('date_filed', $data ?? [], null);
        $this->setIfExists('legal_type', $data ?? [], null);
        $this->setIfExists('legal_action', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('filing_location', $data ?? [], null);
        $this->setIfExists('collateral_codes', $data ?? [], null);
        $this->setIfExists('secured_party', $data ?? [], null);
        $this->setIfExists('assignee', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('customer_dispute_indicator', $data ?? [], null);
        $this->setIfExists('original_ucc_filings_info', $data ?? [], null);
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

        if (!is_null($this->container['legal_type']) && (mb_strlen($this->container['legal_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'legal_type', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['legal_action']) && (mb_strlen($this->container['legal_action']) > 2)) {
            $invalidProperties[] = "invalid value for 'legal_action', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['document_number']) && (mb_strlen($this->container['document_number']) > 16)) {
            $invalidProperties[] = "invalid value for 'document_number', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['filing_location']) && (mb_strlen($this->container['filing_location']) > 20)) {
            $invalidProperties[] = "invalid value for 'filing_location', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['secured_party']) && (mb_strlen($this->container['secured_party']) > 7)) {
            $invalidProperties[] = "invalid value for 'secured_party', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) > 1)) {
            $invalidProperties[] = "invalid value for 'assignee', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 1)) {
            $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 1.";
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
     * Gets date_filed
     *
     * @return \DateTime|null
     */
    public function getDateFiled()
    {
        return $this->container['date_filed'];
    }

    /**
     * Sets date_filed
     *
     * @param \DateTime|null $date_filed Date of the UCC Filing. ISO 8601 Format = YYYY-MM-DD
     *
     * @return self
     */
    public function setDateFiled($date_filed)
    {
        if (is_null($date_filed)) {
            throw new \InvalidArgumentException('non-nullable date_filed cannot be null');
        }
        $this->container['date_filed'] = $date_filed;

        return $this;
    }

    /**
     * Gets legal_type
     *
     * @return string|null
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     *
     * @param string|null $legal_type \"UCC\"
     *
     * @return self
     */
    public function setLegalType($legal_type)
    {
        if (is_null($legal_type)) {
            throw new \InvalidArgumentException('non-nullable legal_type cannot be null');
        }
        if ((mb_strlen($legal_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $legal_type when calling UCCFilingsDetail., must be smaller than or equal to 2.');
        }

        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets legal_action
     *
     * @return string|null
     */
    public function getLegalAction()
    {
        return $this->container['legal_action'];
    }

    /**
     * Sets legal_action
     *
     * @param string|null $legal_action \"Original Filing\", \"Amended\", \"Assignment\", \"Partial Release\", \"Full Release\", \"Released\", \"Terminated\", \"Continuation\"
     *
     * @return self
     */
    public function setLegalAction($legal_action)
    {
        if (is_null($legal_action)) {
            throw new \InvalidArgumentException('non-nullable legal_action cannot be null');
        }
        if ((mb_strlen($legal_action) > 2)) {
            throw new \InvalidArgumentException('invalid length for $legal_action when calling UCCFilingsDetail., must be smaller than or equal to 2.');
        }

        $this->container['legal_action'] = $legal_action;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number Document number of the current action
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        if ((mb_strlen($document_number) > 16)) {
            throw new \InvalidArgumentException('invalid length for $document_number when calling UCCFilingsDetail., must be smaller than or equal to 16.');
        }

        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets filing_location
     *
     * @return string|null
     */
    public function getFilingLocation()
    {
        return $this->container['filing_location'];
    }

    /**
     * Sets filing_location
     *
     * @param string|null $filing_location State or court where the current action was filed
     *
     * @return self
     */
    public function setFilingLocation($filing_location)
    {
        if (is_null($filing_location)) {
            throw new \InvalidArgumentException('non-nullable filing_location cannot be null');
        }
        if ((mb_strlen($filing_location) > 20)) {
            throw new \InvalidArgumentException('invalid length for $filing_location when calling UCCFilingsDetail., must be smaller than or equal to 20.');
        }

        $this->container['filing_location'] = $filing_location;

        return $this;
    }

    /**
     * Gets collateral_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CollateralCode[]|null
     */
    public function getCollateralCodes()
    {
        return $this->container['collateral_codes'];
    }

    /**
     * Sets collateral_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CollateralCode[]|null $collateral_codes Array containing collateral codes and definitions. = Blanket Lien, 0 Other, 1 Accounts Receivable, 4 Machinery and Equipment, 5 Furniture and Fixtures, 9 Hereafter Acquired Property, 6 Inventory, H Real Estate, Q Vehicles, + Consumer Goods, E Proceeds, ! Intangibles, F Contract Rights, L Leases, C Crops, 7 Livestock
     *
     * @return self
     */
    public function setCollateralCodes($collateral_codes)
    {
        if (is_null($collateral_codes)) {
            throw new \InvalidArgumentException('non-nullable collateral_codes cannot be null');
        }
        $this->container['collateral_codes'] = $collateral_codes;

        return $this;
    }

    /**
     * Gets secured_party
     *
     * @return string|null
     */
    public function getSecuredParty()
    {
        return $this->container['secured_party'];
    }

    /**
     * Sets secured_party
     *
     * @param string|null $secured_party The party who has secured the interest of the pledged collateral by filing the UCC
     *
     * @return self
     */
    public function setSecuredParty($secured_party)
    {
        if (is_null($secured_party)) {
            throw new \InvalidArgumentException('non-nullable secured_party cannot be null');
        }
        if ((mb_strlen($secured_party) > 7)) {
            throw new \InvalidArgumentException('invalid length for $secured_party when calling UCCFilingsDetail., must be smaller than or equal to 7.');
        }

        $this->container['secured_party'] = $secured_party;

        return $this;
    }

    /**
     * Gets assignee
     *
     * @return string|null
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param string|null $assignee The party to whom the security agreement has been assigned to
     *
     * @return self
     */
    public function setAssignee($assignee)
    {
        if (is_null($assignee)) {
            throw new \InvalidArgumentException('non-nullable assignee cannot be null');
        }
        if ((mb_strlen($assignee) > 1)) {
            throw new \InvalidArgumentException('invalid length for $assignee when calling UCCFilingsDetail., must be smaller than or equal to 1.');
        }

        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner Owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        if ((mb_strlen($owner) > 1)) {
            throw new \InvalidArgumentException('invalid length for $owner when calling UCCFilingsDetail., must be smaller than or equal to 1.');
        }

        $this->container['owner'] = $owner;

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
     * @param bool|null $customer_dispute_indicator If true, indicates that there is a customer dispute on file
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
     * Gets original_ucc_filings_info
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetailOriginalUCCFilingsInfo|null
     */
    public function getOriginalUccFilingsInfo()
    {
        return $this->container['original_ucc_filings_info'];
    }

    /**
     * Sets original_ucc_filings_info
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetailOriginalUCCFilingsInfo|null $original_ucc_filings_info original_ucc_filings_info
     *
     * @return self
     */
    public function setOriginalUccFilingsInfo($original_ucc_filings_info)
    {
        if (is_null($original_ucc_filings_info)) {
            throw new \InvalidArgumentException('non-nullable original_ucc_filings_info cannot be null');
        }
        $this->container['original_ucc_filings_info'] = $original_ucc_filings_info;

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


