<?php
/**
 * CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreAttributes
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
 * CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreAttributes Class Doc Comment
 *
 * @category Class
 * @description Object containing cyber score attributes
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CyberScoreResponseResultsCyberScoreScoreDetailsInnerScoreAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CyberScoreResponse_results_cyberScore_scoreDetails_inner_scoreAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_credit_report_parameter_1' => 'float',
        'business_credit_report_parameter_2' => 'float',
        'business_credit_report_parameter_3' => 'float',
        'business_credit_report_parameter_4' => 'float',
        'business_credit_report_parameter_5' => 'float',
        'business_credit_report_parameter_6' => 'float',
        'business_credit_report_parameter_7' => 'float',
        'email_cyber_exposure_1' => 'float',
        'email_cyber_exposure_2' => 'float',
        'email_cyber_exposure_3' => 'float',
        'email_cyber_exposure_4' => 'float',
        'email_cyber_exposure_company_1' => 'float',
        'email_cyber_exposure_company_2' => 'float',
        'email_cyber_exposure_company_3' => 'float',
        'email_cyber_exposure_company_4' => 'float',
        'email_cyber_password_risk_1' => 'float',
        'email_cyber_password_risk_2' => 'float',
        'email_cyber_repeat_exposure_1' => 'float',
        'email_cyber_repeat_exposure_2' => 'float',
        'email_cyber_repeat_exposure_3' => 'float',
        'email_cyber_repeat_exposure_4' => 'float',
        'email_cyber_repeat_exposure_5' => 'float',
        'email_cyber_repeat_exposure_6' => 'float',
        'email_cyber_repeat_exposure_7' => 'float',
        'email_cyber_repeat_exposure_8' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_credit_report_parameter_1' => null,
        'business_credit_report_parameter_2' => null,
        'business_credit_report_parameter_3' => null,
        'business_credit_report_parameter_4' => null,
        'business_credit_report_parameter_5' => null,
        'business_credit_report_parameter_6' => null,
        'business_credit_report_parameter_7' => null,
        'email_cyber_exposure_1' => null,
        'email_cyber_exposure_2' => null,
        'email_cyber_exposure_3' => null,
        'email_cyber_exposure_4' => null,
        'email_cyber_exposure_company_1' => null,
        'email_cyber_exposure_company_2' => null,
        'email_cyber_exposure_company_3' => null,
        'email_cyber_exposure_company_4' => null,
        'email_cyber_password_risk_1' => null,
        'email_cyber_password_risk_2' => null,
        'email_cyber_repeat_exposure_1' => null,
        'email_cyber_repeat_exposure_2' => null,
        'email_cyber_repeat_exposure_3' => null,
        'email_cyber_repeat_exposure_4' => null,
        'email_cyber_repeat_exposure_5' => null,
        'email_cyber_repeat_exposure_6' => null,
        'email_cyber_repeat_exposure_7' => null,
        'email_cyber_repeat_exposure_8' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_credit_report_parameter_1' => false,
        'business_credit_report_parameter_2' => false,
        'business_credit_report_parameter_3' => false,
        'business_credit_report_parameter_4' => false,
        'business_credit_report_parameter_5' => false,
        'business_credit_report_parameter_6' => false,
        'business_credit_report_parameter_7' => false,
        'email_cyber_exposure_1' => false,
        'email_cyber_exposure_2' => false,
        'email_cyber_exposure_3' => false,
        'email_cyber_exposure_4' => false,
        'email_cyber_exposure_company_1' => false,
        'email_cyber_exposure_company_2' => false,
        'email_cyber_exposure_company_3' => false,
        'email_cyber_exposure_company_4' => false,
        'email_cyber_password_risk_1' => false,
        'email_cyber_password_risk_2' => false,
        'email_cyber_repeat_exposure_1' => false,
        'email_cyber_repeat_exposure_2' => false,
        'email_cyber_repeat_exposure_3' => false,
        'email_cyber_repeat_exposure_4' => false,
        'email_cyber_repeat_exposure_5' => false,
        'email_cyber_repeat_exposure_6' => false,
        'email_cyber_repeat_exposure_7' => false,
        'email_cyber_repeat_exposure_8' => false
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
        'business_credit_report_parameter_1' => 'business_credit_report_parameter_1',
        'business_credit_report_parameter_2' => 'business_credit_report_parameter_2',
        'business_credit_report_parameter_3' => 'business_credit_report_parameter_3',
        'business_credit_report_parameter_4' => 'business_credit_report_parameter_4',
        'business_credit_report_parameter_5' => 'business_credit_report_parameter_5',
        'business_credit_report_parameter_6' => 'business_credit_report_parameter_6',
        'business_credit_report_parameter_7' => 'business_credit_report_parameter_7',
        'email_cyber_exposure_1' => 'email_cyber_exposure_1',
        'email_cyber_exposure_2' => 'email_cyber_exposure_2',
        'email_cyber_exposure_3' => 'email_cyber_exposure_3',
        'email_cyber_exposure_4' => 'email_cyber_exposure_4',
        'email_cyber_exposure_company_1' => 'email_cyber_exposure_company_1',
        'email_cyber_exposure_company_2' => 'email_cyber_exposure_company_2',
        'email_cyber_exposure_company_3' => 'email_cyber_exposure_company_3',
        'email_cyber_exposure_company_4' => 'email_cyber_exposure_company_4',
        'email_cyber_password_risk_1' => 'email_cyber_password_risk_1',
        'email_cyber_password_risk_2' => 'email_cyber_password_risk_2',
        'email_cyber_repeat_exposure_1' => 'email_cyber_repeat_exposure_1',
        'email_cyber_repeat_exposure_2' => 'email_cyber_repeat_exposure_2',
        'email_cyber_repeat_exposure_3' => 'email_cyber_repeat_exposure_3',
        'email_cyber_repeat_exposure_4' => 'email_cyber_repeat_exposure_4',
        'email_cyber_repeat_exposure_5' => 'email_cyber_repeat_exposure_5',
        'email_cyber_repeat_exposure_6' => 'email_cyber_repeat_exposure_6',
        'email_cyber_repeat_exposure_7' => 'email_cyber_repeat_exposure_7',
        'email_cyber_repeat_exposure_8' => 'email_cyber_repeat_exposure_8'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_credit_report_parameter_1' => 'setBusinessCreditReportParameter1',
        'business_credit_report_parameter_2' => 'setBusinessCreditReportParameter2',
        'business_credit_report_parameter_3' => 'setBusinessCreditReportParameter3',
        'business_credit_report_parameter_4' => 'setBusinessCreditReportParameter4',
        'business_credit_report_parameter_5' => 'setBusinessCreditReportParameter5',
        'business_credit_report_parameter_6' => 'setBusinessCreditReportParameter6',
        'business_credit_report_parameter_7' => 'setBusinessCreditReportParameter7',
        'email_cyber_exposure_1' => 'setEmailCyberExposure1',
        'email_cyber_exposure_2' => 'setEmailCyberExposure2',
        'email_cyber_exposure_3' => 'setEmailCyberExposure3',
        'email_cyber_exposure_4' => 'setEmailCyberExposure4',
        'email_cyber_exposure_company_1' => 'setEmailCyberExposureCompany1',
        'email_cyber_exposure_company_2' => 'setEmailCyberExposureCompany2',
        'email_cyber_exposure_company_3' => 'setEmailCyberExposureCompany3',
        'email_cyber_exposure_company_4' => 'setEmailCyberExposureCompany4',
        'email_cyber_password_risk_1' => 'setEmailCyberPasswordRisk1',
        'email_cyber_password_risk_2' => 'setEmailCyberPasswordRisk2',
        'email_cyber_repeat_exposure_1' => 'setEmailCyberRepeatExposure1',
        'email_cyber_repeat_exposure_2' => 'setEmailCyberRepeatExposure2',
        'email_cyber_repeat_exposure_3' => 'setEmailCyberRepeatExposure3',
        'email_cyber_repeat_exposure_4' => 'setEmailCyberRepeatExposure4',
        'email_cyber_repeat_exposure_5' => 'setEmailCyberRepeatExposure5',
        'email_cyber_repeat_exposure_6' => 'setEmailCyberRepeatExposure6',
        'email_cyber_repeat_exposure_7' => 'setEmailCyberRepeatExposure7',
        'email_cyber_repeat_exposure_8' => 'setEmailCyberRepeatExposure8'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_credit_report_parameter_1' => 'getBusinessCreditReportParameter1',
        'business_credit_report_parameter_2' => 'getBusinessCreditReportParameter2',
        'business_credit_report_parameter_3' => 'getBusinessCreditReportParameter3',
        'business_credit_report_parameter_4' => 'getBusinessCreditReportParameter4',
        'business_credit_report_parameter_5' => 'getBusinessCreditReportParameter5',
        'business_credit_report_parameter_6' => 'getBusinessCreditReportParameter6',
        'business_credit_report_parameter_7' => 'getBusinessCreditReportParameter7',
        'email_cyber_exposure_1' => 'getEmailCyberExposure1',
        'email_cyber_exposure_2' => 'getEmailCyberExposure2',
        'email_cyber_exposure_3' => 'getEmailCyberExposure3',
        'email_cyber_exposure_4' => 'getEmailCyberExposure4',
        'email_cyber_exposure_company_1' => 'getEmailCyberExposureCompany1',
        'email_cyber_exposure_company_2' => 'getEmailCyberExposureCompany2',
        'email_cyber_exposure_company_3' => 'getEmailCyberExposureCompany3',
        'email_cyber_exposure_company_4' => 'getEmailCyberExposureCompany4',
        'email_cyber_password_risk_1' => 'getEmailCyberPasswordRisk1',
        'email_cyber_password_risk_2' => 'getEmailCyberPasswordRisk2',
        'email_cyber_repeat_exposure_1' => 'getEmailCyberRepeatExposure1',
        'email_cyber_repeat_exposure_2' => 'getEmailCyberRepeatExposure2',
        'email_cyber_repeat_exposure_3' => 'getEmailCyberRepeatExposure3',
        'email_cyber_repeat_exposure_4' => 'getEmailCyberRepeatExposure4',
        'email_cyber_repeat_exposure_5' => 'getEmailCyberRepeatExposure5',
        'email_cyber_repeat_exposure_6' => 'getEmailCyberRepeatExposure6',
        'email_cyber_repeat_exposure_7' => 'getEmailCyberRepeatExposure7',
        'email_cyber_repeat_exposure_8' => 'getEmailCyberRepeatExposure8'
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
        $this->setIfExists('business_credit_report_parameter_1', $data ?? [], null);
        $this->setIfExists('business_credit_report_parameter_2', $data ?? [], null);
        $this->setIfExists('business_credit_report_parameter_3', $data ?? [], null);
        $this->setIfExists('business_credit_report_parameter_4', $data ?? [], null);
        $this->setIfExists('business_credit_report_parameter_5', $data ?? [], null);
        $this->setIfExists('business_credit_report_parameter_6', $data ?? [], null);
        $this->setIfExists('business_credit_report_parameter_7', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_1', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_2', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_3', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_4', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_company_1', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_company_2', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_company_3', $data ?? [], null);
        $this->setIfExists('email_cyber_exposure_company_4', $data ?? [], null);
        $this->setIfExists('email_cyber_password_risk_1', $data ?? [], null);
        $this->setIfExists('email_cyber_password_risk_2', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_1', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_2', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_3', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_4', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_5', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_6', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_7', $data ?? [], null);
        $this->setIfExists('email_cyber_repeat_exposure_8', $data ?? [], null);
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
     * Gets business_credit_report_parameter_1
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter1()
    {
        return $this->container['business_credit_report_parameter_1'];
    }

    /**
     * Sets business_credit_report_parameter_1
     *
     * @param float|null $business_credit_report_parameter_1 Percentage of trade lines reported recently (CTP041)
     *
     * @return self
     */
    public function setBusinessCreditReportParameter1($business_credit_report_parameter_1)
    {
        if (is_null($business_credit_report_parameter_1)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_1 cannot be null');
        }
        $this->container['business_credit_report_parameter_1'] = $business_credit_report_parameter_1;

        return $this;
    }

    /**
     * Gets business_credit_report_parameter_2
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter2()
    {
        return $this->container['business_credit_report_parameter_2'];
    }

    /**
     * Sets business_credit_report_parameter_2
     *
     * @param float|null $business_credit_report_parameter_2 Percentage of total trade balance to Total highest balance in past 12 months across all aged trades
     *
     * @return self
     */
    public function setBusinessCreditReportParameter2($business_credit_report_parameter_2)
    {
        if (is_null($business_credit_report_parameter_2)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_2 cannot be null');
        }
        $this->container['business_credit_report_parameter_2'] = $business_credit_report_parameter_2;

        return $this;
    }

    /**
     * Gets business_credit_report_parameter_3
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter3()
    {
        return $this->container['business_credit_report_parameter_3'];
    }

    /**
     * Sets business_credit_report_parameter_3
     *
     * @param float|null $business_credit_report_parameter_3 Percentage trade lines reported recently and they have been reported multiple times (RTP083)
     *
     * @return self
     */
    public function setBusinessCreditReportParameter3($business_credit_report_parameter_3)
    {
        if (is_null($business_credit_report_parameter_3)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_3 cannot be null');
        }
        $this->container['business_credit_report_parameter_3'] = $business_credit_report_parameter_3;

        return $this;
    }

    /**
     * Gets business_credit_report_parameter_4
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter4()
    {
        return $this->container['business_credit_report_parameter_4'];
    }

    /**
     * Sets business_credit_report_parameter_4
     *
     * @param float|null $business_credit_report_parameter_4 Age, in years, since record first added to Experian file
     *
     * @return self
     */
    public function setBusinessCreditReportParameter4($business_credit_report_parameter_4)
    {
        if (is_null($business_credit_report_parameter_4)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_4 cannot be null');
        }
        $this->container['business_credit_report_parameter_4'] = $business_credit_report_parameter_4;

        return $this;
    }

    /**
     * Gets business_credit_report_parameter_5
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter5()
    {
        return $this->container['business_credit_report_parameter_5'];
    }

    /**
     * Sets business_credit_report_parameter_5
     *
     * @param float|null $business_credit_report_parameter_5 Total number of trades (TTC038)
     *
     * @return self
     */
    public function setBusinessCreditReportParameter5($business_credit_report_parameter_5)
    {
        if (is_null($business_credit_report_parameter_5)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_5 cannot be null');
        }
        $this->container['business_credit_report_parameter_5'] = $business_credit_report_parameter_5;

        return $this;
    }

    /**
     * Gets business_credit_report_parameter_6
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter6()
    {
        return $this->container['business_credit_report_parameter_6'];
    }

    /**
     * Sets business_credit_report_parameter_6
     *
     * @param float|null $business_credit_report_parameter_6 Total number of combined trades (CTC021)
     *
     * @return self
     */
    public function setBusinessCreditReportParameter6($business_credit_report_parameter_6)
    {
        if (is_null($business_credit_report_parameter_6)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_6 cannot be null');
        }
        $this->container['business_credit_report_parameter_6'] = $business_credit_report_parameter_6;

        return $this;
    }

    /**
     * Gets business_credit_report_parameter_7
     *
     * @return float|null
     */
    public function getBusinessCreditReportParameter7()
    {
        return $this->container['business_credit_report_parameter_7'];
    }

    /**
     * Sets business_credit_report_parameter_7
     *
     * @param float|null $business_credit_report_parameter_7 Total number of active trades
     *
     * @return self
     */
    public function setBusinessCreditReportParameter7($business_credit_report_parameter_7)
    {
        if (is_null($business_credit_report_parameter_7)) {
            throw new \InvalidArgumentException('non-nullable business_credit_report_parameter_7 cannot be null');
        }
        $this->container['business_credit_report_parameter_7'] = $business_credit_report_parameter_7;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_1
     *
     * @return float|null
     */
    public function getEmailCyberExposure1()
    {
        return $this->container['email_cyber_exposure_1'];
    }

    /**
     * Sets email_cyber_exposure_1
     *
     * @param float|null $email_cyber_exposure_1 Number of emails with at least 2 exposures, excluding large scale breaches
     *
     * @return self
     */
    public function setEmailCyberExposure1($email_cyber_exposure_1)
    {
        if (is_null($email_cyber_exposure_1)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_1 cannot be null');
        }
        $this->container['email_cyber_exposure_1'] = $email_cyber_exposure_1;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_2
     *
     * @return float|null
     */
    public function getEmailCyberExposure2()
    {
        return $this->container['email_cyber_exposure_2'];
    }

    /**
     * Sets email_cyber_exposure_2
     *
     * @param float|null $email_cyber_exposure_2 Total time since first employee exposure was identified
     *
     * @return self
     */
    public function setEmailCyberExposure2($email_cyber_exposure_2)
    {
        if (is_null($email_cyber_exposure_2)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_2 cannot be null');
        }
        $this->container['email_cyber_exposure_2'] = $email_cyber_exposure_2;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_3
     *
     * @return float|null
     */
    public function getEmailCyberExposure3()
    {
        return $this->container['email_cyber_exposure_3'];
    }

    /**
     * Sets email_cyber_exposure_3
     *
     * @param float|null $email_cyber_exposure_3 Total time since first employee exposure was identified, excluding large scale breaches
     *
     * @return self
     */
    public function setEmailCyberExposure3($email_cyber_exposure_3)
    {
        if (is_null($email_cyber_exposure_3)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_3 cannot be null');
        }
        $this->container['email_cyber_exposure_3'] = $email_cyber_exposure_3;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_4
     *
     * @return float|null
     */
    public function getEmailCyberExposure4()
    {
        return $this->container['email_cyber_exposure_4'];
    }

    /**
     * Sets email_cyber_exposure_4
     *
     * @param float|null $email_cyber_exposure_4 Percentage of employee emails exposed over last 2 years, excluding large scale breaches
     *
     * @return self
     */
    public function setEmailCyberExposure4($email_cyber_exposure_4)
    {
        if (is_null($email_cyber_exposure_4)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_4 cannot be null');
        }
        $this->container['email_cyber_exposure_4'] = $email_cyber_exposure_4;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_company_1
     *
     * @return float|null
     */
    public function getEmailCyberExposureCompany1()
    {
        return $this->container['email_cyber_exposure_company_1'];
    }

    /**
     * Sets email_cyber_exposure_company_1
     *
     * @param float|null $email_cyber_exposure_company_1 Percentage of employee emails exposed over last 2 years
     *
     * @return self
     */
    public function setEmailCyberExposureCompany1($email_cyber_exposure_company_1)
    {
        if (is_null($email_cyber_exposure_company_1)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_company_1 cannot be null');
        }
        $this->container['email_cyber_exposure_company_1'] = $email_cyber_exposure_company_1;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_company_2
     *
     * @return float|null
     */
    public function getEmailCyberExposureCompany2()
    {
        return $this->container['email_cyber_exposure_company_2'];
    }

    /**
     * Sets email_cyber_exposure_company_2
     *
     * @param float|null $email_cyber_exposure_company_2 Dark web exposures for employees are from high risk sources
     *
     * @return self
     */
    public function setEmailCyberExposureCompany2($email_cyber_exposure_company_2)
    {
        if (is_null($email_cyber_exposure_company_2)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_company_2 cannot be null');
        }
        $this->container['email_cyber_exposure_company_2'] = $email_cyber_exposure_company_2;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_company_3
     *
     * @return float|null
     */
    public function getEmailCyberExposureCompany3()
    {
        return $this->container['email_cyber_exposure_company_3'];
    }

    /**
     * Sets email_cyber_exposure_company_3
     *
     * @param float|null $email_cyber_exposure_company_3 Percentage of total employee emails found for this company
     *
     * @return self
     */
    public function setEmailCyberExposureCompany3($email_cyber_exposure_company_3)
    {
        if (is_null($email_cyber_exposure_company_3)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_company_3 cannot be null');
        }
        $this->container['email_cyber_exposure_company_3'] = $email_cyber_exposure_company_3;

        return $this;
    }

    /**
     * Gets email_cyber_exposure_company_4
     *
     * @return float|null
     */
    public function getEmailCyberExposureCompany4()
    {
        return $this->container['email_cyber_exposure_company_4'];
    }

    /**
     * Sets email_cyber_exposure_company_4
     *
     * @param float|null $email_cyber_exposure_company_4 Ratio of work emails that were matched for employees to the total emails matched for the business
     *
     * @return self
     */
    public function setEmailCyberExposureCompany4($email_cyber_exposure_company_4)
    {
        if (is_null($email_cyber_exposure_company_4)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_exposure_company_4 cannot be null');
        }
        $this->container['email_cyber_exposure_company_4'] = $email_cyber_exposure_company_4;

        return $this;
    }

    /**
     * Gets email_cyber_password_risk_1
     *
     * @return float|null
     */
    public function getEmailCyberPasswordRisk1()
    {
        return $this->container['email_cyber_password_risk_1'];
    }

    /**
     * Sets email_cyber_password_risk_1
     *
     * @param float|null $email_cyber_password_risk_1 Total number of employees that have less than a 20 password score
     *
     * @return self
     */
    public function setEmailCyberPasswordRisk1($email_cyber_password_risk_1)
    {
        if (is_null($email_cyber_password_risk_1)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_password_risk_1 cannot be null');
        }
        $this->container['email_cyber_password_risk_1'] = $email_cyber_password_risk_1;

        return $this;
    }

    /**
     * Gets email_cyber_password_risk_2
     *
     * @return float|null
     */
    public function getEmailCyberPasswordRisk2()
    {
        return $this->container['email_cyber_password_risk_2'];
    }

    /**
     * Sets email_cyber_password_risk_2
     *
     * @param float|null $email_cyber_password_risk_2 Average password score for least complex passwords. Low score -> less complexity
     *
     * @return self
     */
    public function setEmailCyberPasswordRisk2($email_cyber_password_risk_2)
    {
        if (is_null($email_cyber_password_risk_2)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_password_risk_2 cannot be null');
        }
        $this->container['email_cyber_password_risk_2'] = $email_cyber_password_risk_2;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_1
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure1()
    {
        return $this->container['email_cyber_repeat_exposure_1'];
    }

    /**
     * Sets email_cyber_repeat_exposure_1
     *
     * @param float|null $email_cyber_repeat_exposure_1 Number of employees showing up more than once on dark web
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure1($email_cyber_repeat_exposure_1)
    {
        if (is_null($email_cyber_repeat_exposure_1)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_1 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_1'] = $email_cyber_repeat_exposure_1;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_2
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure2()
    {
        return $this->container['email_cyber_repeat_exposure_2'];
    }

    /**
     * Sets email_cyber_repeat_exposure_2
     *
     * @param float|null $email_cyber_repeat_exposure_2 Highest total occurences of dark web exposures for an employee at the company
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure2($email_cyber_repeat_exposure_2)
    {
        if (is_null($email_cyber_repeat_exposure_2)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_2 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_2'] = $email_cyber_repeat_exposure_2;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_3
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure3()
    {
        return $this->container['email_cyber_repeat_exposure_3'];
    }

    /**
     * Sets email_cyber_repeat_exposure_3
     *
     * @param float|null $email_cyber_repeat_exposure_3 Highest total occurences of dark web exposures for an employee's emails
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure3($email_cyber_repeat_exposure_3)
    {
        if (is_null($email_cyber_repeat_exposure_3)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_3 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_3'] = $email_cyber_repeat_exposure_3;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_4
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure4()
    {
        return $this->container['email_cyber_repeat_exposure_4'];
    }

    /**
     * Sets email_cyber_repeat_exposure_4
     *
     * @param float|null $email_cyber_repeat_exposure_4 Highest total occurences of dark web exposures for an employee's emails, excluding large scale breaches
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure4($email_cyber_repeat_exposure_4)
    {
        if (is_null($email_cyber_repeat_exposure_4)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_4 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_4'] = $email_cyber_repeat_exposure_4;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_5
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure5()
    {
        return $this->container['email_cyber_repeat_exposure_5'];
    }

    /**
     * Sets email_cyber_repeat_exposure_5
     *
     * @param float|null $email_cyber_repeat_exposure_5 Highest total occurrences of an individual employee's exposure on dark web, excluding large scale breaches
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure5($email_cyber_repeat_exposure_5)
    {
        if (is_null($email_cyber_repeat_exposure_5)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_5 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_5'] = $email_cyber_repeat_exposure_5;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_6
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure6()
    {
        return $this->container['email_cyber_repeat_exposure_6'];
    }

    /**
     * Sets email_cyber_repeat_exposure_6
     *
     * @param float|null $email_cyber_repeat_exposure_6 Total number of employee emails exposed more than once on dark web, excluding large scale breaches
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure6($email_cyber_repeat_exposure_6)
    {
        if (is_null($email_cyber_repeat_exposure_6)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_6 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_6'] = $email_cyber_repeat_exposure_6;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_7
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure7()
    {
        return $this->container['email_cyber_repeat_exposure_7'];
    }

    /**
     * Sets email_cyber_repeat_exposure_7
     *
     * @param float|null $email_cyber_repeat_exposure_7 Highest total occurrences of an individual employee's email exposure on dark web
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure7($email_cyber_repeat_exposure_7)
    {
        if (is_null($email_cyber_repeat_exposure_7)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_7 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_7'] = $email_cyber_repeat_exposure_7;

        return $this;
    }

    /**
     * Gets email_cyber_repeat_exposure_8
     *
     * @return float|null
     */
    public function getEmailCyberRepeatExposure8()
    {
        return $this->container['email_cyber_repeat_exposure_8'];
    }

    /**
     * Sets email_cyber_repeat_exposure_8
     *
     * @param float|null $email_cyber_repeat_exposure_8 Average password score for 20 least complex passwords. Low score -> less complexity
     *
     * @return self
     */
    public function setEmailCyberRepeatExposure8($email_cyber_repeat_exposure_8)
    {
        if (is_null($email_cyber_repeat_exposure_8)) {
            throw new \InvalidArgumentException('non-nullable email_cyber_repeat_exposure_8 cannot be null');
        }
        $this->container['email_cyber_repeat_exposure_8'] = $email_cyber_repeat_exposure_8;

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


