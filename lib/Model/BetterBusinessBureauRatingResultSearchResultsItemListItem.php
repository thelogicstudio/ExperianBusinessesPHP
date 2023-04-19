<?php
/**
 * BetterBusinessBureauRatingResultSearchResultsItemListItem
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
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code. A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the List of Similars product option to search for a business, or a Name/Address request for automated matching.</p> <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
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
 * BetterBusinessBureauRatingResultSearchResultsItemListItem Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BetterBusinessBureauRatingResultSearchResultsItemListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BetterBusinessBureauRatingResult_searchResults_itemList_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['business_id'] = isset($data['business_id']) ? $data['business_id'] : null;
        $this->container['organization_type'] = isset($data['organization_type']) ? $data['organization_type'] : null;
        $this->container['organization_name'] = isset($data['organization_name']) ? $data['organization_name'] : null;
        $this->container['is_bbb_accredited'] = isset($data['is_bbb_accredited']) ? $data['is_bbb_accredited'] : null;
        $this->container['rating_icons'] = isset($data['rating_icons']) ? $data['rating_icons'] : null;
        $this->container['is_reportable'] = isset($data['is_reportable']) ? $data['is_reportable'] : null;
        $this->container['primary_category'] = isset($data['primary_category']) ? $data['primary_category'] : null;
        $this->container['contact_first_name'] = isset($data['contact_first_name']) ? $data['contact_first_name'] : null;
        $this->container['contact_last_name'] = isset($data['contact_last_name']) ? $data['contact_last_name'] : null;
        $this->container['contact_title'] = isset($data['contact_title']) ? $data['contact_title'] : null;
        $this->container['contact_prefix'] = isset($data['contact_prefix']) ? $data['contact_prefix'] : null;
        $this->container['contact_email_address'] = isset($data['contact_email_address']) ? $data['contact_email_address'] : null;
        $this->container['date_business_started'] = isset($data['date_business_started']) ? $data['date_business_started'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state_province'] = isset($data['state_province']) ? $data['state_province'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['report_url'] = isset($data['report_url']) ? $data['report_url'] : null;
        $this->container['organization_last_changed'] = isset($data['organization_last_changed']) ? $data['organization_last_changed'] : null;
        $this->container['rating_last_changed'] = isset($data['rating_last_changed']) ? $data['rating_last_changed'] : null;
        $this->container['accreditation_status_last_changed'] = isset($data['accreditation_status_last_changed']) ? $data['accreditation_status_last_changed'] : null;
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
     * @return string
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param string $business_id Internal id of an organization. This is only unique across BBBs/Bureaus. The BusinessId plus the BBBID will make a unique record.
     *
     * @return $this
     */
    public function setBusinessId($business_id)
    {
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets organization_type
     *
     * @return string
     */
    public function getOrganizationType()
    {
        return $this->container['organization_type'];
    }

    /**
     * Sets organization_type
     *
     * @param string $organization_type Type of organization
     *
     * @return $this
     */
    public function setOrganizationType($organization_type)
    {
        $this->container['organization_type'] = $organization_type;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string $organization_name Organization Name
     *
     * @return $this
     */
    public function setOrganizationName($organization_name)
    {
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets is_bbb_accredited
     *
     * @return string
     */
    public function getIsBbbAccredited()
    {
        return $this->container['is_bbb_accredited'];
    }

    /**
     * Sets is_bbb_accredited
     *
     * @param string $is_bbb_accredited Is organization accredited?
     *
     * @return $this
     */
    public function setIsBbbAccredited($is_bbb_accredited)
    {
        $this->container['is_bbb_accredited'] = $is_bbb_accredited;

        return $this;
    }

    /**
     * Gets rating_icons
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons
     */
    public function getRatingIcons()
    {
        return $this->container['rating_icons'];
    }

    /**
     * Sets rating_icons
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResultSearchResultsItemListItemRatingIcons $rating_icons rating_icons
     *
     * @return $this
     */
    public function setRatingIcons($rating_icons)
    {
        $this->container['rating_icons'] = $rating_icons;

        return $this;
    }

    /**
     * Gets is_reportable
     *
     * @return string
     */
    public function getIsReportable()
    {
        return $this->container['is_reportable'];
    }

    /**
     * Sets is_reportable
     *
     * @param string $is_reportable Is organization reported on the public web site?
     *
     * @return $this
     */
    public function setIsReportable($is_reportable)
    {
        $this->container['is_reportable'] = $is_reportable;

        return $this;
    }

    /**
     * Gets primary_category
     *
     * @return string
     */
    public function getPrimaryCategory()
    {
        return $this->container['primary_category'];
    }

    /**
     * Sets primary_category
     *
     * @param string $primary_category Category designated as primary
     *
     * @return $this
     */
    public function setPrimaryCategory($primary_category)
    {
        $this->container['primary_category'] = $primary_category;

        return $this;
    }

    /**
     * Gets contact_first_name
     *
     * @return string
     */
    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    /**
     * Sets contact_first_name
     *
     * @param string $contact_first_name First name of primary contact
     *
     * @return $this
     */
    public function setContactFirstName($contact_first_name)
    {
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    /**
     * Gets contact_last_name
     *
     * @return string
     */
    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    /**
     * Sets contact_last_name
     *
     * @param string $contact_last_name Last name of primary contact
     *
     * @return $this
     */
    public function setContactLastName($contact_last_name)
    {
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    /**
     * Gets contact_title
     *
     * @return string
     */
    public function getContactTitle()
    {
        return $this->container['contact_title'];
    }

    /**
     * Sets contact_title
     *
     * @param string $contact_title Title of primary contact
     *
     * @return $this
     */
    public function setContactTitle($contact_title)
    {
        $this->container['contact_title'] = $contact_title;

        return $this;
    }

    /**
     * Gets contact_prefix
     *
     * @return string
     */
    public function getContactPrefix()
    {
        return $this->container['contact_prefix'];
    }

    /**
     * Sets contact_prefix
     *
     * @param string $contact_prefix contactPrefix
     *
     * @return $this
     */
    public function setContactPrefix($contact_prefix)
    {
        $this->container['contact_prefix'] = $contact_prefix;

        return $this;
    }

    /**
     * Gets contact_email_address
     *
     * @return string
     */
    public function getContactEmailAddress()
    {
        return $this->container['contact_email_address'];
    }

    /**
     * Sets contact_email_address
     *
     * @param string $contact_email_address Email address of the contact
     *
     * @return $this
     */
    public function setContactEmailAddress($contact_email_address)
    {
        $this->container['contact_email_address'] = $contact_email_address;

        return $this;
    }

    /**
     * Gets date_business_started
     *
     * @return string
     */
    public function getDateBusinessStarted()
    {
        return $this->container['date_business_started'];
    }

    /**
     * Sets date_business_started
     *
     * @param string $date_business_started Date business started
     *
     * @return $this
     */
    public function setDateBusinessStarted($date_business_started)
    {
        $this->container['date_business_started'] = $date_business_started;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_province
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->container['state_province'];
    }

    /**
     * Sets state_province
     *
     * @param string $state_province stateProvince
     *
     * @return $this
     */
    public function setStateProvince($state_province)
    {
        $this->container['state_province'] = $state_province;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postalCode
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets report_url
     *
     * @return string
     */
    public function getReportUrl()
    {
        return $this->container['report_url'];
    }

    /**
     * Sets report_url
     *
     * @param string $report_url reportURL
     *
     * @return $this
     */
    public function setReportUrl($report_url)
    {
        $this->container['report_url'] = $report_url;

        return $this;
    }

    /**
     * Gets organization_last_changed
     *
     * @return string
     */
    public function getOrganizationLastChanged()
    {
        return $this->container['organization_last_changed'];
    }

    /**
     * Sets organization_last_changed
     *
     * @param string $organization_last_changed organizationLastChanged
     *
     * @return $this
     */
    public function setOrganizationLastChanged($organization_last_changed)
    {
        $this->container['organization_last_changed'] = $organization_last_changed;

        return $this;
    }

    /**
     * Gets rating_last_changed
     *
     * @return string
     */
    public function getRatingLastChanged()
    {
        return $this->container['rating_last_changed'];
    }

    /**
     * Sets rating_last_changed
     *
     * @param string $rating_last_changed ratingLastChanged
     *
     * @return $this
     */
    public function setRatingLastChanged($rating_last_changed)
    {
        $this->container['rating_last_changed'] = $rating_last_changed;

        return $this;
    }

    /**
     * Gets accreditation_status_last_changed
     *
     * @return string
     */
    public function getAccreditationStatusLastChanged()
    {
        return $this->container['accreditation_status_last_changed'];
    }

    /**
     * Sets accreditation_status_last_changed
     *
     * @param string $accreditation_status_last_changed Date time stamp for last accredidation status change
     *
     * @return $this
     */
    public function setAccreditationStatusLastChanged($accreditation_status_last_changed)
    {
        $this->container['accreditation_status_last_changed'] = $accreditation_status_last_changed;

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


