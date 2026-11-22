<?php
/**
 * BetterBusinessBureauRatingResultSearchResultsItemListItem
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
 * BetterBusinessBureauRatingResultSearchResultsItemListItem Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BetterBusinessBureauRatingResultSearchResultsItemListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BetterBusinessBureauRatingResult_searchResults_itemList_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_id' => 'string',
        'organization_type' => 'string',
        'organization_name' => 'string',
        'is_bbb_accredited' => 'string',
        'rating_icons' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons',
        'is_reportable' => 'string',
        'primary_category' => 'string',
        'contact_first_name' => 'string',
        'contact_last_name' => 'string',
        'contact_title' => 'string',
        'contact_prefix' => 'string',
        'contact_email_address' => 'string',
        'date_business_started' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state_province' => 'string',
        'postal_code' => 'string',
        'report_url' => 'string',
        'organization_last_changed' => 'string',
        'rating_last_changed' => 'string',
        'accreditation_status_last_changed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_id' => null,
        'organization_type' => null,
        'organization_name' => null,
        'is_bbb_accredited' => null,
        'rating_icons' => null,
        'is_reportable' => null,
        'primary_category' => null,
        'contact_first_name' => null,
        'contact_last_name' => null,
        'contact_title' => null,
        'contact_prefix' => null,
        'contact_email_address' => null,
        'date_business_started' => null,
        'address' => null,
        'city' => null,
        'state_province' => null,
        'postal_code' => null,
        'report_url' => null,
        'organization_last_changed' => null,
        'rating_last_changed' => null,
        'accreditation_status_last_changed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_id' => false,
        'organization_type' => false,
        'organization_name' => false,
        'is_bbb_accredited' => false,
        'rating_icons' => false,
        'is_reportable' => false,
        'primary_category' => false,
        'contact_first_name' => false,
        'contact_last_name' => false,
        'contact_title' => false,
        'contact_prefix' => false,
        'contact_email_address' => false,
        'date_business_started' => false,
        'address' => false,
        'city' => false,
        'state_province' => false,
        'postal_code' => false,
        'report_url' => false,
        'organization_last_changed' => false,
        'rating_last_changed' => false,
        'accreditation_status_last_changed' => false
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
        'business_id' => 'businessId',
        'organization_type' => 'organizationType',
        'organization_name' => 'organizationName',
        'is_bbb_accredited' => 'isBBBAccredited',
        'rating_icons' => 'ratingIcons',
        'is_reportable' => 'isReportable',
        'primary_category' => 'primaryCategory',
        'contact_first_name' => 'contactFirstName',
        'contact_last_name' => 'contactLastName',
        'contact_title' => 'contactTitle',
        'contact_prefix' => 'contactPrefix',
        'contact_email_address' => 'contactEmailAddress',
        'date_business_started' => 'dateBusinessStarted',
        'address' => 'address',
        'city' => 'city',
        'state_province' => 'stateProvince',
        'postal_code' => 'postalCode',
        'report_url' => 'reportURL',
        'organization_last_changed' => 'organizationLastChanged',
        'rating_last_changed' => 'ratingLastChanged',
        'accreditation_status_last_changed' => 'accreditationStatusLastChanged'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_id' => 'setBusinessId',
        'organization_type' => 'setOrganizationType',
        'organization_name' => 'setOrganizationName',
        'is_bbb_accredited' => 'setIsBbbAccredited',
        'rating_icons' => 'setRatingIcons',
        'is_reportable' => 'setIsReportable',
        'primary_category' => 'setPrimaryCategory',
        'contact_first_name' => 'setContactFirstName',
        'contact_last_name' => 'setContactLastName',
        'contact_title' => 'setContactTitle',
        'contact_prefix' => 'setContactPrefix',
        'contact_email_address' => 'setContactEmailAddress',
        'date_business_started' => 'setDateBusinessStarted',
        'address' => 'setAddress',
        'city' => 'setCity',
        'state_province' => 'setStateProvince',
        'postal_code' => 'setPostalCode',
        'report_url' => 'setReportUrl',
        'organization_last_changed' => 'setOrganizationLastChanged',
        'rating_last_changed' => 'setRatingLastChanged',
        'accreditation_status_last_changed' => 'setAccreditationStatusLastChanged'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_id' => 'getBusinessId',
        'organization_type' => 'getOrganizationType',
        'organization_name' => 'getOrganizationName',
        'is_bbb_accredited' => 'getIsBbbAccredited',
        'rating_icons' => 'getRatingIcons',
        'is_reportable' => 'getIsReportable',
        'primary_category' => 'getPrimaryCategory',
        'contact_first_name' => 'getContactFirstName',
        'contact_last_name' => 'getContactLastName',
        'contact_title' => 'getContactTitle',
        'contact_prefix' => 'getContactPrefix',
        'contact_email_address' => 'getContactEmailAddress',
        'date_business_started' => 'getDateBusinessStarted',
        'address' => 'getAddress',
        'city' => 'getCity',
        'state_province' => 'getStateProvince',
        'postal_code' => 'getPostalCode',
        'report_url' => 'getReportUrl',
        'organization_last_changed' => 'getOrganizationLastChanged',
        'rating_last_changed' => 'getRatingLastChanged',
        'accreditation_status_last_changed' => 'getAccreditationStatusLastChanged'
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
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('organization_type', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('is_bbb_accredited', $data ?? [], null);
        $this->setIfExists('rating_icons', $data ?? [], null);
        $this->setIfExists('is_reportable', $data ?? [], null);
        $this->setIfExists('primary_category', $data ?? [], null);
        $this->setIfExists('contact_first_name', $data ?? [], null);
        $this->setIfExists('contact_last_name', $data ?? [], null);
        $this->setIfExists('contact_title', $data ?? [], null);
        $this->setIfExists('contact_prefix', $data ?? [], null);
        $this->setIfExists('contact_email_address', $data ?? [], null);
        $this->setIfExists('date_business_started', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state_province', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('report_url', $data ?? [], null);
        $this->setIfExists('organization_last_changed', $data ?? [], null);
        $this->setIfExists('rating_last_changed', $data ?? [], null);
        $this->setIfExists('accreditation_status_last_changed', $data ?? [], null);
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
     * Gets business_id
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param string|null $business_id Internal id of an organization. This is only unique across BBBs/Bureaus. The BusinessId plus the BBBID will make a unique record.
     *
     * @return self
     */
    public function setBusinessId($business_id)
    {
        if (is_null($business_id)) {
            throw new \InvalidArgumentException('non-nullable business_id cannot be null');
        }
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets organization_type
     *
     * @return string|null
     */
    public function getOrganizationType()
    {
        return $this->container['organization_type'];
    }

    /**
     * Sets organization_type
     *
     * @param string|null $organization_type Type of organization
     *
     * @return self
     */
    public function setOrganizationType($organization_type)
    {
        if (is_null($organization_type)) {
            throw new \InvalidArgumentException('non-nullable organization_type cannot be null');
        }
        $this->container['organization_type'] = $organization_type;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name Organization Name
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            throw new \InvalidArgumentException('non-nullable organization_name cannot be null');
        }
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets is_bbb_accredited
     *
     * @return string|null
     */
    public function getIsBbbAccredited()
    {
        return $this->container['is_bbb_accredited'];
    }

    /**
     * Sets is_bbb_accredited
     *
     * @param string|null $is_bbb_accredited Is organization accredited?
     *
     * @return self
     */
    public function setIsBbbAccredited($is_bbb_accredited)
    {
        if (is_null($is_bbb_accredited)) {
            throw new \InvalidArgumentException('non-nullable is_bbb_accredited cannot be null');
        }
        $this->container['is_bbb_accredited'] = $is_bbb_accredited;

        return $this;
    }

    /**
     * Gets rating_icons
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons|null
     */
    public function getRatingIcons()
    {
        return $this->container['rating_icons'];
    }

    /**
     * Sets rating_icons
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons|null $rating_icons rating_icons
     *
     * @return self
     */
    public function setRatingIcons($rating_icons)
    {
        if (is_null($rating_icons)) {
            throw new \InvalidArgumentException('non-nullable rating_icons cannot be null');
        }
        $this->container['rating_icons'] = $rating_icons;

        return $this;
    }

    /**
     * Gets is_reportable
     *
     * @return string|null
     */
    public function getIsReportable()
    {
        return $this->container['is_reportable'];
    }

    /**
     * Sets is_reportable
     *
     * @param string|null $is_reportable Is organization reported on the public web site?
     *
     * @return self
     */
    public function setIsReportable($is_reportable)
    {
        if (is_null($is_reportable)) {
            throw new \InvalidArgumentException('non-nullable is_reportable cannot be null');
        }
        $this->container['is_reportable'] = $is_reportable;

        return $this;
    }

    /**
     * Gets primary_category
     *
     * @return string|null
     */
    public function getPrimaryCategory()
    {
        return $this->container['primary_category'];
    }

    /**
     * Sets primary_category
     *
     * @param string|null $primary_category Category designated as primary
     *
     * @return self
     */
    public function setPrimaryCategory($primary_category)
    {
        if (is_null($primary_category)) {
            throw new \InvalidArgumentException('non-nullable primary_category cannot be null');
        }
        $this->container['primary_category'] = $primary_category;

        return $this;
    }

    /**
     * Gets contact_first_name
     *
     * @return string|null
     */
    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    /**
     * Sets contact_first_name
     *
     * @param string|null $contact_first_name First name of primary contact
     *
     * @return self
     */
    public function setContactFirstName($contact_first_name)
    {
        if (is_null($contact_first_name)) {
            throw new \InvalidArgumentException('non-nullable contact_first_name cannot be null');
        }
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    /**
     * Gets contact_last_name
     *
     * @return string|null
     */
    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    /**
     * Sets contact_last_name
     *
     * @param string|null $contact_last_name Last name of primary contact
     *
     * @return self
     */
    public function setContactLastName($contact_last_name)
    {
        if (is_null($contact_last_name)) {
            throw new \InvalidArgumentException('non-nullable contact_last_name cannot be null');
        }
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    /**
     * Gets contact_title
     *
     * @return string|null
     */
    public function getContactTitle()
    {
        return $this->container['contact_title'];
    }

    /**
     * Sets contact_title
     *
     * @param string|null $contact_title Title of primary contact
     *
     * @return self
     */
    public function setContactTitle($contact_title)
    {
        if (is_null($contact_title)) {
            throw new \InvalidArgumentException('non-nullable contact_title cannot be null');
        }
        $this->container['contact_title'] = $contact_title;

        return $this;
    }

    /**
     * Gets contact_prefix
     *
     * @return string|null
     */
    public function getContactPrefix()
    {
        return $this->container['contact_prefix'];
    }

    /**
     * Sets contact_prefix
     *
     * @param string|null $contact_prefix contactPrefix
     *
     * @return self
     */
    public function setContactPrefix($contact_prefix)
    {
        if (is_null($contact_prefix)) {
            throw new \InvalidArgumentException('non-nullable contact_prefix cannot be null');
        }
        $this->container['contact_prefix'] = $contact_prefix;

        return $this;
    }

    /**
     * Gets contact_email_address
     *
     * @return string|null
     */
    public function getContactEmailAddress()
    {
        return $this->container['contact_email_address'];
    }

    /**
     * Sets contact_email_address
     *
     * @param string|null $contact_email_address Email address of the contact
     *
     * @return self
     */
    public function setContactEmailAddress($contact_email_address)
    {
        if (is_null($contact_email_address)) {
            throw new \InvalidArgumentException('non-nullable contact_email_address cannot be null');
        }
        $this->container['contact_email_address'] = $contact_email_address;

        return $this;
    }

    /**
     * Gets date_business_started
     *
     * @return string|null
     */
    public function getDateBusinessStarted()
    {
        return $this->container['date_business_started'];
    }

    /**
     * Sets date_business_started
     *
     * @param string|null $date_business_started Date business started
     *
     * @return self
     */
    public function setDateBusinessStarted($date_business_started)
    {
        if (is_null($date_business_started)) {
            throw new \InvalidArgumentException('non-nullable date_business_started cannot be null');
        }
        $this->container['date_business_started'] = $date_business_started;

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
     * @param string|null $address address
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_province
     *
     * @return string|null
     */
    public function getStateProvince()
    {
        return $this->container['state_province'];
    }

    /**
     * Sets state_province
     *
     * @param string|null $state_province stateProvince
     *
     * @return self
     */
    public function setStateProvince($state_province)
    {
        if (is_null($state_province)) {
            throw new \InvalidArgumentException('non-nullable state_province cannot be null');
        }
        $this->container['state_province'] = $state_province;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postalCode
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets report_url
     *
     * @return string|null
     */
    public function getReportUrl()
    {
        return $this->container['report_url'];
    }

    /**
     * Sets report_url
     *
     * @param string|null $report_url reportURL
     *
     * @return self
     */
    public function setReportUrl($report_url)
    {
        if (is_null($report_url)) {
            throw new \InvalidArgumentException('non-nullable report_url cannot be null');
        }
        $this->container['report_url'] = $report_url;

        return $this;
    }

    /**
     * Gets organization_last_changed
     *
     * @return string|null
     */
    public function getOrganizationLastChanged()
    {
        return $this->container['organization_last_changed'];
    }

    /**
     * Sets organization_last_changed
     *
     * @param string|null $organization_last_changed organizationLastChanged
     *
     * @return self
     */
    public function setOrganizationLastChanged($organization_last_changed)
    {
        if (is_null($organization_last_changed)) {
            throw new \InvalidArgumentException('non-nullable organization_last_changed cannot be null');
        }
        $this->container['organization_last_changed'] = $organization_last_changed;

        return $this;
    }

    /**
     * Gets rating_last_changed
     *
     * @return string|null
     */
    public function getRatingLastChanged()
    {
        return $this->container['rating_last_changed'];
    }

    /**
     * Sets rating_last_changed
     *
     * @param string|null $rating_last_changed ratingLastChanged
     *
     * @return self
     */
    public function setRatingLastChanged($rating_last_changed)
    {
        if (is_null($rating_last_changed)) {
            throw new \InvalidArgumentException('non-nullable rating_last_changed cannot be null');
        }
        $this->container['rating_last_changed'] = $rating_last_changed;

        return $this;
    }

    /**
     * Gets accreditation_status_last_changed
     *
     * @return string|null
     */
    public function getAccreditationStatusLastChanged()
    {
        return $this->container['accreditation_status_last_changed'];
    }

    /**
     * Sets accreditation_status_last_changed
     *
     * @param string|null $accreditation_status_last_changed Date time stamp for last accredidation status change
     *
     * @return self
     */
    public function setAccreditationStatusLastChanged($accreditation_status_last_changed)
    {
        if (is_null($accreditation_status_last_changed)) {
            throw new \InvalidArgumentException('non-nullable accreditation_status_last_changed cannot be null');
        }
        $this->container['accreditation_status_last_changed'] = $accreditation_status_last_changed;

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


