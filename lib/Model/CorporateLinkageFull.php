<?php
/**
 * CorporateLinkageFull
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
 * CorporateLinkageFull Class Doc Comment
 *
 * @category Class
 * @description Each Corporate Linkage Full Information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CorporateLinkageFull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CorporateLinkageFull';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'corporate_linkage_type' => 'string',
        'bin' => 'string',
        'business_name' => 'string',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessAddress',
        'ultimate_bin' => 'string',
        'parent_bin' => 'string',
        'ultimate_parent_indicator' => 'bool',
        'parent_indicator' => 'bool',
        'subsidiary_indicator' => 'bool',
        'linkage_level' => 'int',
        'branch_indicator' => 'bool',
        'activity_indicator' => 'bool',
        'commercial_risk_class' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'corporate_linkage_type' => null,
        'bin' => null,
        'business_name' => null,
        'address' => null,
        'ultimate_bin' => null,
        'parent_bin' => null,
        'ultimate_parent_indicator' => null,
        'parent_indicator' => null,
        'subsidiary_indicator' => null,
        'linkage_level' => 'int64',
        'branch_indicator' => null,
        'activity_indicator' => null,
        'commercial_risk_class' => null
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
        'corporate_linkage_type' => 'corporateLinkageType',
        'bin' => 'bin',
        'business_name' => 'businessName',
        'address' => 'address',
        'ultimate_bin' => 'ultimateBin',
        'parent_bin' => 'parentBin',
        'ultimate_parent_indicator' => 'ultimateParentIndicator',
        'parent_indicator' => 'parentIndicator',
        'subsidiary_indicator' => 'subsidiaryIndicator',
        'linkage_level' => 'linkageLevel',
        'branch_indicator' => 'branchIndicator',
        'activity_indicator' => 'activityIndicator',
        'commercial_risk_class' => 'commercialRiskClass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'corporate_linkage_type' => 'setCorporateLinkageType',
        'bin' => 'setBin',
        'business_name' => 'setBusinessName',
        'address' => 'setAddress',
        'ultimate_bin' => 'setUltimateBin',
        'parent_bin' => 'setParentBin',
        'ultimate_parent_indicator' => 'setUltimateParentIndicator',
        'parent_indicator' => 'setParentIndicator',
        'subsidiary_indicator' => 'setSubsidiaryIndicator',
        'linkage_level' => 'setLinkageLevel',
        'branch_indicator' => 'setBranchIndicator',
        'activity_indicator' => 'setActivityIndicator',
        'commercial_risk_class' => 'setCommercialRiskClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'corporate_linkage_type' => 'getCorporateLinkageType',
        'bin' => 'getBin',
        'business_name' => 'getBusinessName',
        'address' => 'getAddress',
        'ultimate_bin' => 'getUltimateBin',
        'parent_bin' => 'getParentBin',
        'ultimate_parent_indicator' => 'getUltimateParentIndicator',
        'parent_indicator' => 'getParentIndicator',
        'subsidiary_indicator' => 'getSubsidiaryIndicator',
        'linkage_level' => 'getLinkageLevel',
        'branch_indicator' => 'getBranchIndicator',
        'activity_indicator' => 'getActivityIndicator',
        'commercial_risk_class' => 'getCommercialRiskClass'
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
        $this->container['corporate_linkage_type'] = isset($data['corporate_linkage_type']) ? $data['corporate_linkage_type'] : null;
        $this->container['bin'] = isset($data['bin']) ? $data['bin'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['ultimate_bin'] = isset($data['ultimate_bin']) ? $data['ultimate_bin'] : null;
        $this->container['parent_bin'] = isset($data['parent_bin']) ? $data['parent_bin'] : null;
        $this->container['ultimate_parent_indicator'] = isset($data['ultimate_parent_indicator']) ? $data['ultimate_parent_indicator'] : null;
        $this->container['parent_indicator'] = isset($data['parent_indicator']) ? $data['parent_indicator'] : null;
        $this->container['subsidiary_indicator'] = isset($data['subsidiary_indicator']) ? $data['subsidiary_indicator'] : null;
        $this->container['linkage_level'] = isset($data['linkage_level']) ? $data['linkage_level'] : null;
        $this->container['branch_indicator'] = isset($data['branch_indicator']) ? $data['branch_indicator'] : null;
        $this->container['activity_indicator'] = isset($data['activity_indicator']) ? $data['activity_indicator'] : null;
        $this->container['commercial_risk_class'] = isset($data['commercial_risk_class']) ? $data['commercial_risk_class'] : null;
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
     * Gets corporate_linkage_type
     *
     * @return string
     */
    public function getCorporateLinkageType()
    {
        return $this->container['corporate_linkage_type'];
    }

    /**
     * Sets corporate_linkage_type
     *
     * @param string $corporate_linkage_type \"Ultimate Parent\", \"Headquarters/Parent\", \"Subsidiary\", or \"Branch\". The Ultimate Parent is the topmost responsible member of the family tree. Parent refers to a business with a subsidiary; the immediate parent is the parent company for the business that is the subject of your request. Subsidiary listings are those which the business in your request has at least a 50% ownership stake. Branch refers to additional locations or alternate addresses for the business in your request.
     *
     * @return $this
     */
    public function setCorporateLinkageType($corporate_linkage_type)
    {
        $this->container['corporate_linkage_type'] = $corporate_linkage_type;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string $bin 9-digit Business Identification Number (BIN). If this field is blank, this business is a non-US business and only the Name, City, and State may be available
     *
     * @return $this
     */
    public function setBin($bin)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name Name of the business
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageBusinessAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets ultimate_bin
     *
     * @return string
     */
    public function getUltimateBin()
    {
        return $this->container['ultimate_bin'];
    }

    /**
     * Sets ultimate_bin
     *
     * @param string $ultimate_bin 9-digit Business Identification Number (BIN) for the Ultimate Parent of the business
     *
     * @return $this
     */
    public function setUltimateBin($ultimate_bin)
    {
        $this->container['ultimate_bin'] = $ultimate_bin;

        return $this;
    }

    /**
     * Gets parent_bin
     *
     * @return string
     */
    public function getParentBin()
    {
        return $this->container['parent_bin'];
    }

    /**
     * Sets parent_bin
     *
     * @param string $parent_bin 9-digit Business Identification Number (BIN) for the immediate Parent of the business
     *
     * @return $this
     */
    public function setParentBin($parent_bin)
    {
        $this->container['parent_bin'] = $parent_bin;

        return $this;
    }

    /**
     * Gets ultimate_parent_indicator
     *
     * @return bool
     */
    public function getUltimateParentIndicator()
    {
        return $this->container['ultimate_parent_indicator'];
    }

    /**
     * Sets ultimate_parent_indicator
     *
     * @param bool $ultimate_parent_indicator If true this business is the Ultimate Parent
     *
     * @return $this
     */
    public function setUltimateParentIndicator($ultimate_parent_indicator)
    {
        $this->container['ultimate_parent_indicator'] = $ultimate_parent_indicator;

        return $this;
    }

    /**
     * Gets parent_indicator
     *
     * @return bool
     */
    public function getParentIndicator()
    {
        return $this->container['parent_indicator'];
    }

    /**
     * Sets parent_indicator
     *
     * @param bool $parent_indicator If true this business is the Parent of another business
     *
     * @return $this
     */
    public function setParentIndicator($parent_indicator)
    {
        $this->container['parent_indicator'] = $parent_indicator;

        return $this;
    }

    /**
     * Gets subsidiary_indicator
     *
     * @return bool
     */
    public function getSubsidiaryIndicator()
    {
        return $this->container['subsidiary_indicator'];
    }

    /**
     * Sets subsidiary_indicator
     *
     * @param bool $subsidiary_indicator If true this business is a subsidiary of another business
     *
     * @return $this
     */
    public function setSubsidiaryIndicator($subsidiary_indicator)
    {
        $this->container['subsidiary_indicator'] = $subsidiary_indicator;

        return $this;
    }

    /**
     * Gets linkage_level
     *
     * @return int
     */
    public function getLinkageLevel()
    {
        return $this->container['linkage_level'];
    }

    /**
     * Sets linkage_level
     *
     * @param int $linkage_level Indicates how many parent companies are above the business in the family tree. For example, an Ultimate Parent will return linkageLevel = 0. An Ultimate Parent's immediate subsidiaries will return linkageLevel = 1
     *
     * @return $this
     */
    public function setLinkageLevel($linkage_level)
    {
        $this->container['linkage_level'] = $linkage_level;

        return $this;
    }

    /**
     * Gets branch_indicator
     *
     * @return bool
     */
    public function getBranchIndicator()
    {
        return $this->container['branch_indicator'];
    }

    /**
     * Sets branch_indicator
     *
     * @param bool $branch_indicator If true this indicates that branches were returned in the family tree. If false branches were not returned since the number of records in the full family tree exceeded 300. Only returned for an Ultimate Parent record, when linkageLevel = 0
     *
     * @return $this
     */
    public function setBranchIndicator($branch_indicator)
    {
        $this->container['branch_indicator'] = $branch_indicator;

        return $this;
    }

    /**
     * Gets activity_indicator
     *
     * @return bool
     */
    public function getActivityIndicator()
    {
        return $this->container['activity_indicator'];
    }

    /**
     * Sets activity_indicator
     *
     * @param bool $activity_indicator If false the business may be inactive. To determine active status, Experian looks at bankruptcies, corporate registrations, trades, collections, and recent credit inquiry activity
     *
     * @return $this
     */
    public function setActivityIndicator($activity_indicator)
    {
        $this->container['activity_indicator'] = $activity_indicator;

        return $this;
    }

    /**
     * Gets commercial_risk_class
     *
     * @return string
     */
    public function getCommercialRiskClass()
    {
        return $this->container['commercial_risk_class'];
    }

    /**
     * Sets commercial_risk_class
     *
     * @param string $commercial_risk_class Commercial score risk class default values: \"High Risk\", \"Medium to High Risk\", \"Medium Risk\", \"Low to Medium Risk\", \"Low Risk\", \"Recent Bankruptcy on file\", \"Insufficient data to score\"
     *
     * @return $this
     */
    public function setCommercialRiskClass($commercial_risk_class)
    {
        $this->container['commercial_risk_class'] = $commercial_risk_class;

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


