<?php
/**
 * LinkageDetails
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
 * LinkageDetails Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LinkageDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LinkageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'record_key' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageKeys',
        'linkage_type' => 'string',
        'linkage_level' => 'float',
        'linkage_src' => 'string',
        'bin' => 'string',
        'parent_bin' => 'string',
        'ultimate_parent_bin' => 'string',
        'domestic_ult_parent_bin' => 'string',
        'hq_indicator' => 'bool',
        'hq_branch_code' => 'string',
        'activity_flag' => 'string',
        'parent_indicator' => 'bool',
        'ultimate_parent_indicator' => 'bool',
        'subsidiary_indicator' => 'bool',
        'branch_indicator' => 'bool',
        'version' => 'string',
        'create_date' => 'string',
        'updated_date' => 'string',
        'reported_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'record_key' => null,
        'linkage_type' => null,
        'linkage_level' => null,
        'linkage_src' => null,
        'bin' => null,
        'parent_bin' => null,
        'ultimate_parent_bin' => null,
        'domestic_ult_parent_bin' => null,
        'hq_indicator' => null,
        'hq_branch_code' => null,
        'activity_flag' => null,
        'parent_indicator' => null,
        'ultimate_parent_indicator' => null,
        'subsidiary_indicator' => null,
        'branch_indicator' => null,
        'version' => null,
        'create_date' => null,
        'updated_date' => null,
        'reported_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'record_key' => false,
        'linkage_type' => false,
        'linkage_level' => false,
        'linkage_src' => false,
        'bin' => false,
        'parent_bin' => false,
        'ultimate_parent_bin' => false,
        'domestic_ult_parent_bin' => false,
        'hq_indicator' => false,
        'hq_branch_code' => false,
        'activity_flag' => false,
        'parent_indicator' => false,
        'ultimate_parent_indicator' => false,
        'subsidiary_indicator' => false,
        'branch_indicator' => false,
        'version' => false,
        'create_date' => false,
        'updated_date' => false,
        'reported_date' => false
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
        'record_key' => 'recordKey',
        'linkage_type' => 'linkageType',
        'linkage_level' => 'linkageLevel',
        'linkage_src' => 'linkageSrc',
        'bin' => 'bin',
        'parent_bin' => 'parentBin',
        'ultimate_parent_bin' => 'ultimateParentBin',
        'domestic_ult_parent_bin' => 'domesticUltParentBin',
        'hq_indicator' => 'hqIndicator',
        'hq_branch_code' => 'hqBranchCode',
        'activity_flag' => 'activityFlag',
        'parent_indicator' => 'parentIndicator',
        'ultimate_parent_indicator' => 'ultimateParentIndicator',
        'subsidiary_indicator' => 'subsidiaryIndicator',
        'branch_indicator' => 'branchIndicator',
        'version' => 'version',
        'create_date' => 'createDate',
        'updated_date' => 'updatedDate',
        'reported_date' => 'reportedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'record_key' => 'setRecordKey',
        'linkage_type' => 'setLinkageType',
        'linkage_level' => 'setLinkageLevel',
        'linkage_src' => 'setLinkageSrc',
        'bin' => 'setBin',
        'parent_bin' => 'setParentBin',
        'ultimate_parent_bin' => 'setUltimateParentBin',
        'domestic_ult_parent_bin' => 'setDomesticUltParentBin',
        'hq_indicator' => 'setHqIndicator',
        'hq_branch_code' => 'setHqBranchCode',
        'activity_flag' => 'setActivityFlag',
        'parent_indicator' => 'setParentIndicator',
        'ultimate_parent_indicator' => 'setUltimateParentIndicator',
        'subsidiary_indicator' => 'setSubsidiaryIndicator',
        'branch_indicator' => 'setBranchIndicator',
        'version' => 'setVersion',
        'create_date' => 'setCreateDate',
        'updated_date' => 'setUpdatedDate',
        'reported_date' => 'setReportedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'record_key' => 'getRecordKey',
        'linkage_type' => 'getLinkageType',
        'linkage_level' => 'getLinkageLevel',
        'linkage_src' => 'getLinkageSrc',
        'bin' => 'getBin',
        'parent_bin' => 'getParentBin',
        'ultimate_parent_bin' => 'getUltimateParentBin',
        'domestic_ult_parent_bin' => 'getDomesticUltParentBin',
        'hq_indicator' => 'getHqIndicator',
        'hq_branch_code' => 'getHqBranchCode',
        'activity_flag' => 'getActivityFlag',
        'parent_indicator' => 'getParentIndicator',
        'ultimate_parent_indicator' => 'getUltimateParentIndicator',
        'subsidiary_indicator' => 'getSubsidiaryIndicator',
        'branch_indicator' => 'getBranchIndicator',
        'version' => 'getVersion',
        'create_date' => 'getCreateDate',
        'updated_date' => 'getUpdatedDate',
        'reported_date' => 'getReportedDate'
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
        $this->setIfExists('record_key', $data ?? [], null);
        $this->setIfExists('linkage_type', $data ?? [], null);
        $this->setIfExists('linkage_level', $data ?? [], null);
        $this->setIfExists('linkage_src', $data ?? [], null);
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('parent_bin', $data ?? [], null);
        $this->setIfExists('ultimate_parent_bin', $data ?? [], null);
        $this->setIfExists('domestic_ult_parent_bin', $data ?? [], null);
        $this->setIfExists('hq_indicator', $data ?? [], null);
        $this->setIfExists('hq_branch_code', $data ?? [], null);
        $this->setIfExists('activity_flag', $data ?? [], null);
        $this->setIfExists('parent_indicator', $data ?? [], null);
        $this->setIfExists('ultimate_parent_indicator', $data ?? [], null);
        $this->setIfExists('subsidiary_indicator', $data ?? [], null);
        $this->setIfExists('branch_indicator', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('updated_date', $data ?? [], null);
        $this->setIfExists('reported_date', $data ?? [], null);
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
     * Gets record_key
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageKeys|null
     */
    public function getRecordKey()
    {
        return $this->container['record_key'];
    }

    /**
     * Sets record_key
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LinkageKeys|null $record_key record_key
     *
     * @return self
     */
    public function setRecordKey($record_key)
    {
        if (is_null($record_key)) {
            throw new \InvalidArgumentException('non-nullable record_key cannot be null');
        }
        $this->container['record_key'] = $record_key;

        return $this;
    }

    /**
     * Gets linkage_type
     *
     * @return string|null
     */
    public function getLinkageType()
    {
        return $this->container['linkage_type'];
    }

    /**
     * Sets linkage_type
     *
     * @param string|null $linkage_type \"H\" = Headquarters, \"U\" = Ultimate Parent, \"B\" = Branch
     *
     * @return self
     */
    public function setLinkageType($linkage_type)
    {
        if (is_null($linkage_type)) {
            throw new \InvalidArgumentException('non-nullable linkage_type cannot be null');
        }
        $this->container['linkage_type'] = $linkage_type;

        return $this;
    }

    /**
     * Gets linkage_level
     *
     * @return float|null
     */
    public function getLinkageLevel()
    {
        return $this->container['linkage_level'];
    }

    /**
     * Sets linkage_level
     *
     * @param float|null $linkage_level Indicates how many parent companies are above the business in the family tree. For example, an Ultimate Parent will return linkageLevel = 0. An Ultimate Parent's immediate subsidiaries will return linkageLevel = 1
     *
     * @return self
     */
    public function setLinkageLevel($linkage_level)
    {
        if (is_null($linkage_level)) {
            throw new \InvalidArgumentException('non-nullable linkage_level cannot be null');
        }
        $this->container['linkage_level'] = $linkage_level;

        return $this;
    }

    /**
     * Gets linkage_src
     *
     * @return string|null
     */
    public function getLinkageSrc()
    {
        return $this->container['linkage_src'];
    }

    /**
     * Sets linkage_src
     *
     * @param string|null $linkage_src Linkage source code
     *
     * @return self
     */
    public function setLinkageSrc($linkage_src)
    {
        if (is_null($linkage_src)) {
            throw new \InvalidArgumentException('non-nullable linkage_src cannot be null');
        }
        $this->container['linkage_src'] = $linkage_src;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin 9-digit Business Identification Number (BIN)
     *
     * @return self
     */
    public function setBin($bin)
    {
        if (is_null($bin)) {
            throw new \InvalidArgumentException('non-nullable bin cannot be null');
        }
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets parent_bin
     *
     * @return string|null
     */
    public function getParentBin()
    {
        return $this->container['parent_bin'];
    }

    /**
     * Sets parent_bin
     *
     * @param string|null $parent_bin 9-digit Business Identification Number (BIN) for the immediate Parent of the business
     *
     * @return self
     */
    public function setParentBin($parent_bin)
    {
        if (is_null($parent_bin)) {
            throw new \InvalidArgumentException('non-nullable parent_bin cannot be null');
        }
        $this->container['parent_bin'] = $parent_bin;

        return $this;
    }

    /**
     * Gets ultimate_parent_bin
     *
     * @return string|null
     */
    public function getUltimateParentBin()
    {
        return $this->container['ultimate_parent_bin'];
    }

    /**
     * Sets ultimate_parent_bin
     *
     * @param string|null $ultimate_parent_bin 9-digit Business Identification Number (BIN) for the Ultimate Parent of the business
     *
     * @return self
     */
    public function setUltimateParentBin($ultimate_parent_bin)
    {
        if (is_null($ultimate_parent_bin)) {
            throw new \InvalidArgumentException('non-nullable ultimate_parent_bin cannot be null');
        }
        $this->container['ultimate_parent_bin'] = $ultimate_parent_bin;

        return $this;
    }

    /**
     * Gets domestic_ult_parent_bin
     *
     * @return string|null
     */
    public function getDomesticUltParentBin()
    {
        return $this->container['domestic_ult_parent_bin'];
    }

    /**
     * Sets domestic_ult_parent_bin
     *
     * @param string|null $domestic_ult_parent_bin 9-digit Business Identification Number (BIN) for the Domestic Ultimate Parent of the business
     *
     * @return self
     */
    public function setDomesticUltParentBin($domestic_ult_parent_bin)
    {
        if (is_null($domestic_ult_parent_bin)) {
            throw new \InvalidArgumentException('non-nullable domestic_ult_parent_bin cannot be null');
        }
        $this->container['domestic_ult_parent_bin'] = $domestic_ult_parent_bin;

        return $this;
    }

    /**
     * Gets hq_indicator
     *
     * @return bool|null
     */
    public function getHqIndicator()
    {
        return $this->container['hq_indicator'];
    }

    /**
     * Sets hq_indicator
     *
     * @param bool|null $hq_indicator If true indicates this BIN is a legal entity/headquarter BIN.  If hqIndicator is true, branchIndicator must be false
     *
     * @return self
     */
    public function setHqIndicator($hq_indicator)
    {
        if (is_null($hq_indicator)) {
            throw new \InvalidArgumentException('non-nullable hq_indicator cannot be null');
        }
        $this->container['hq_indicator'] = $hq_indicator;

        return $this;
    }

    /**
     * Gets hq_branch_code
     *
     * @return string|null
     */
    public function getHqBranchCode()
    {
        return $this->container['hq_branch_code'];
    }

    /**
     * Sets hq_branch_code
     *
     * @param string|null $hq_branch_code headquarter/branch code. Value \"H\" indicates Headquarter and \"B\" indicates Branch.
     *
     * @return self
     */
    public function setHqBranchCode($hq_branch_code)
    {
        if (is_null($hq_branch_code)) {
            throw new \InvalidArgumentException('non-nullable hq_branch_code cannot be null');
        }
        $this->container['hq_branch_code'] = $hq_branch_code;

        return $this;
    }

    /**
     * Gets activity_flag
     *
     * @return string|null
     */
    public function getActivityFlag()
    {
        return $this->container['activity_flag'];
    }

    /**
     * Sets activity_flag
     *
     * @param string|null $activity_flag Activity flag
     *
     * @return self
     */
    public function setActivityFlag($activity_flag)
    {
        if (is_null($activity_flag)) {
            throw new \InvalidArgumentException('non-nullable activity_flag cannot be null');
        }
        $this->container['activity_flag'] = $activity_flag;

        return $this;
    }

    /**
     * Gets parent_indicator
     *
     * @return bool|null
     */
    public function getParentIndicator()
    {
        return $this->container['parent_indicator'];
    }

    /**
     * Sets parent_indicator
     *
     * @param bool|null $parent_indicator If true indicates the BIN for this linkage record is the Parent of another entity
     *
     * @return self
     */
    public function setParentIndicator($parent_indicator)
    {
        if (is_null($parent_indicator)) {
            throw new \InvalidArgumentException('non-nullable parent_indicator cannot be null');
        }
        $this->container['parent_indicator'] = $parent_indicator;

        return $this;
    }

    /**
     * Gets ultimate_parent_indicator
     *
     * @return bool|null
     */
    public function getUltimateParentIndicator()
    {
        return $this->container['ultimate_parent_indicator'];
    }

    /**
     * Sets ultimate_parent_indicator
     *
     * @param bool|null $ultimate_parent_indicator If true indicates the BIN for this linkage record is an Ultimate Parent BIN
     *
     * @return self
     */
    public function setUltimateParentIndicator($ultimate_parent_indicator)
    {
        if (is_null($ultimate_parent_indicator)) {
            throw new \InvalidArgumentException('non-nullable ultimate_parent_indicator cannot be null');
        }
        $this->container['ultimate_parent_indicator'] = $ultimate_parent_indicator;

        return $this;
    }

    /**
     * Gets subsidiary_indicator
     *
     * @return bool|null
     */
    public function getSubsidiaryIndicator()
    {
        return $this->container['subsidiary_indicator'];
    }

    /**
     * Sets subsidiary_indicator
     *
     * @param bool|null $subsidiary_indicator If true indicates the BIN for this linkage record is a subsidiary of another entity
     *
     * @return self
     */
    public function setSubsidiaryIndicator($subsidiary_indicator)
    {
        if (is_null($subsidiary_indicator)) {
            throw new \InvalidArgumentException('non-nullable subsidiary_indicator cannot be null');
        }
        $this->container['subsidiary_indicator'] = $subsidiary_indicator;

        return $this;
    }

    /**
     * Gets branch_indicator
     *
     * @return bool|null
     */
    public function getBranchIndicator()
    {
        return $this->container['branch_indicator'];
    }

    /**
     * Sets branch_indicator
     *
     * @param bool|null $branch_indicator If true indicates the BIN for this linkage record is a \"branch\" located under a legal entity/headquarter BIN
     *
     * @return self
     */
    public function setBranchIndicator($branch_indicator)
    {
        if (is_null($branch_indicator)) {
            throw new \InvalidArgumentException('non-nullable branch_indicator cannot be null');
        }
        $this->container['branch_indicator'] = $branch_indicator;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Indicates if the linkage record is in the current version of the linkage database
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param string|null $create_date Linkage record create date
     *
     * @return self
     */
    public function setCreateDate($create_date)
    {
        if (is_null($create_date)) {
            throw new \InvalidArgumentException('non-nullable create_date cannot be null');
        }
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets updated_date
     *
     * @return string|null
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param string|null $updated_date Linkage updated date
     *
     * @return self
     */
    public function setUpdatedDate($updated_date)
    {
        if (is_null($updated_date)) {
            throw new \InvalidArgumentException('non-nullable updated_date cannot be null');
        }
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets reported_date
     *
     * @return string|null
     */
    public function getReportedDate()
    {
        return $this->container['reported_date'];
    }

    /**
     * Sets reported_date
     *
     * @param string|null $reported_date Linkage reported date
     *
     * @return self
     */
    public function setReportedDate($reported_date)
    {
        if (is_null($reported_date)) {
            throw new \InvalidArgumentException('non-nullable reported_date cannot be null');
        }
        $this->container['reported_date'] = $reported_date;

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


