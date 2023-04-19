<?php
/**
 * BCIResponseResults
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
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
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
 * BCIResponseResults Class Doc Comment
 *
 * @category Class
 * @description Results
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BCIResponseResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BCIResponse_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_header' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult',
        'business_facts' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResult',
        'business_contacts' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult',
        'corporate_registration' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult',
        'bankruptcy_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary',
        'bankruptcy_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]',
        'corporate_linkage_partial' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]',
        'corporate_linkage_full' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsCorporateLinkageFull',
        'fsr_score' => '\TheLogicStudio\ExperianBusinessesPHP\Model\FSRScore',
        'judgment_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary',
        'judgment_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]',
        'lien_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary',
        'lien_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]',
        'commercial_fraud_shield_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary',
        'government_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult',
        'fsr_score_factors' => '\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]',
        'fsr_score_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]',
        'department_of_justice_search' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsDepartmentOfJusticeSearch',
        'reverse_tax_id' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]',
        'reverse_phone' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]',
        'reverse_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]',
        'better_business_bureau_rating' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResult',
        'fraud_shield' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult',
        'ist_watch' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatch[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_header' => null,
        'business_facts' => null,
        'business_contacts' => null,
        'corporate_registration' => null,
        'bankruptcy_summary' => null,
        'bankruptcy_detail' => null,
        'corporate_linkage_partial' => null,
        'corporate_linkage_full' => null,
        'fsr_score' => null,
        'judgment_summary' => null,
        'judgment_detail' => null,
        'lien_summary' => null,
        'lien_detail' => null,
        'commercial_fraud_shield_summary' => null,
        'government_details' => null,
        'fsr_score_factors' => null,
        'fsr_score_trends' => null,
        'department_of_justice_search' => null,
        'reverse_tax_id' => null,
        'reverse_phone' => null,
        'reverse_address' => null,
        'better_business_bureau_rating' => null,
        'fraud_shield' => null,
        'ist_watch' => null
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
        'business_header' => 'businessHeader',
        'business_facts' => 'businessFacts',
        'business_contacts' => 'businessContacts',
        'corporate_registration' => 'corporateRegistration',
        'bankruptcy_summary' => 'bankruptcySummary',
        'bankruptcy_detail' => 'bankruptcyDetail',
        'corporate_linkage_partial' => 'corporateLinkagePartial',
        'corporate_linkage_full' => 'corporateLinkageFull',
        'fsr_score' => 'fsrScore',
        'judgment_summary' => 'judgmentSummary',
        'judgment_detail' => 'judgmentDetail',
        'lien_summary' => 'lienSummary',
        'lien_detail' => 'lienDetail',
        'commercial_fraud_shield_summary' => 'commercialFraudShieldSummary',
        'government_details' => 'governmentDetails',
        'fsr_score_factors' => 'fsrScoreFactors',
        'fsr_score_trends' => 'fsrScoreTrends',
        'department_of_justice_search' => 'departmentOfJusticeSearch',
        'reverse_tax_id' => 'reverseTaxId',
        'reverse_phone' => 'reversePhone',
        'reverse_address' => 'reverseAddress',
        'better_business_bureau_rating' => 'betterBusinessBureauRating',
        'fraud_shield' => 'fraudShield',
        'ist_watch' => 'istWatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_header' => 'setBusinessHeader',
        'business_facts' => 'setBusinessFacts',
        'business_contacts' => 'setBusinessContacts',
        'corporate_registration' => 'setCorporateRegistration',
        'bankruptcy_summary' => 'setBankruptcySummary',
        'bankruptcy_detail' => 'setBankruptcyDetail',
        'corporate_linkage_partial' => 'setCorporateLinkagePartial',
        'corporate_linkage_full' => 'setCorporateLinkageFull',
        'fsr_score' => 'setFsrScore',
        'judgment_summary' => 'setJudgmentSummary',
        'judgment_detail' => 'setJudgmentDetail',
        'lien_summary' => 'setLienSummary',
        'lien_detail' => 'setLienDetail',
        'commercial_fraud_shield_summary' => 'setCommercialFraudShieldSummary',
        'government_details' => 'setGovernmentDetails',
        'fsr_score_factors' => 'setFsrScoreFactors',
        'fsr_score_trends' => 'setFsrScoreTrends',
        'department_of_justice_search' => 'setDepartmentOfJusticeSearch',
        'reverse_tax_id' => 'setReverseTaxId',
        'reverse_phone' => 'setReversePhone',
        'reverse_address' => 'setReverseAddress',
        'better_business_bureau_rating' => 'setBetterBusinessBureauRating',
        'fraud_shield' => 'setFraudShield',
        'ist_watch' => 'setIstWatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_header' => 'getBusinessHeader',
        'business_facts' => 'getBusinessFacts',
        'business_contacts' => 'getBusinessContacts',
        'corporate_registration' => 'getCorporateRegistration',
        'bankruptcy_summary' => 'getBankruptcySummary',
        'bankruptcy_detail' => 'getBankruptcyDetail',
        'corporate_linkage_partial' => 'getCorporateLinkagePartial',
        'corporate_linkage_full' => 'getCorporateLinkageFull',
        'fsr_score' => 'getFsrScore',
        'judgment_summary' => 'getJudgmentSummary',
        'judgment_detail' => 'getJudgmentDetail',
        'lien_summary' => 'getLienSummary',
        'lien_detail' => 'getLienDetail',
        'commercial_fraud_shield_summary' => 'getCommercialFraudShieldSummary',
        'government_details' => 'getGovernmentDetails',
        'fsr_score_factors' => 'getFsrScoreFactors',
        'fsr_score_trends' => 'getFsrScoreTrends',
        'department_of_justice_search' => 'getDepartmentOfJusticeSearch',
        'reverse_tax_id' => 'getReverseTaxId',
        'reverse_phone' => 'getReversePhone',
        'reverse_address' => 'getReverseAddress',
        'better_business_bureau_rating' => 'getBetterBusinessBureauRating',
        'fraud_shield' => 'getFraudShield',
        'ist_watch' => 'getIstWatch'
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
        $this->container['business_header'] = isset($data['business_header']) ? $data['business_header'] : null;
        $this->container['business_facts'] = isset($data['business_facts']) ? $data['business_facts'] : null;
        $this->container['business_contacts'] = isset($data['business_contacts']) ? $data['business_contacts'] : null;
        $this->container['corporate_registration'] = isset($data['corporate_registration']) ? $data['corporate_registration'] : null;
        $this->container['bankruptcy_summary'] = isset($data['bankruptcy_summary']) ? $data['bankruptcy_summary'] : null;
        $this->container['bankruptcy_detail'] = isset($data['bankruptcy_detail']) ? $data['bankruptcy_detail'] : null;
        $this->container['corporate_linkage_partial'] = isset($data['corporate_linkage_partial']) ? $data['corporate_linkage_partial'] : null;
        $this->container['corporate_linkage_full'] = isset($data['corporate_linkage_full']) ? $data['corporate_linkage_full'] : null;
        $this->container['fsr_score'] = isset($data['fsr_score']) ? $data['fsr_score'] : null;
        $this->container['judgment_summary'] = isset($data['judgment_summary']) ? $data['judgment_summary'] : null;
        $this->container['judgment_detail'] = isset($data['judgment_detail']) ? $data['judgment_detail'] : null;
        $this->container['lien_summary'] = isset($data['lien_summary']) ? $data['lien_summary'] : null;
        $this->container['lien_detail'] = isset($data['lien_detail']) ? $data['lien_detail'] : null;
        $this->container['commercial_fraud_shield_summary'] = isset($data['commercial_fraud_shield_summary']) ? $data['commercial_fraud_shield_summary'] : null;
        $this->container['government_details'] = isset($data['government_details']) ? $data['government_details'] : null;
        $this->container['fsr_score_factors'] = isset($data['fsr_score_factors']) ? $data['fsr_score_factors'] : null;
        $this->container['fsr_score_trends'] = isset($data['fsr_score_trends']) ? $data['fsr_score_trends'] : null;
        $this->container['department_of_justice_search'] = isset($data['department_of_justice_search']) ? $data['department_of_justice_search'] : null;
        $this->container['reverse_tax_id'] = isset($data['reverse_tax_id']) ? $data['reverse_tax_id'] : null;
        $this->container['reverse_phone'] = isset($data['reverse_phone']) ? $data['reverse_phone'] : null;
        $this->container['reverse_address'] = isset($data['reverse_address']) ? $data['reverse_address'] : null;
        $this->container['better_business_bureau_rating'] = isset($data['better_business_bureau_rating']) ? $data['better_business_bureau_rating'] : null;
        $this->container['fraud_shield'] = isset($data['fraud_shield']) ? $data['fraud_shield'] : null;
        $this->container['ist_watch'] = isset($data['ist_watch']) ? $data['ist_watch'] : null;
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
     * Gets business_header
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult
     */
    public function getBusinessHeader()
    {
        return $this->container['business_header'];
    }

    /**
     * Sets business_header
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult $business_header business_header
     *
     * @return $this
     */
    public function setBusinessHeader($business_header)
    {
        $this->container['business_header'] = $business_header;

        return $this;
    }

    /**
     * Gets business_facts
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResult
     */
    public function getBusinessFacts()
    {
        return $this->container['business_facts'];
    }

    /**
     * Sets business_facts
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResult $business_facts business_facts
     *
     * @return $this
     */
    public function setBusinessFacts($business_facts)
    {
        $this->container['business_facts'] = $business_facts;

        return $this;
    }

    /**
     * Gets business_contacts
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult
     */
    public function getBusinessContacts()
    {
        return $this->container['business_contacts'];
    }

    /**
     * Sets business_contacts
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult $business_contacts business_contacts
     *
     * @return $this
     */
    public function setBusinessContacts($business_contacts)
    {
        $this->container['business_contacts'] = $business_contacts;

        return $this;
    }

    /**
     * Gets corporate_registration
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult
     */
    public function getCorporateRegistration()
    {
        return $this->container['corporate_registration'];
    }

    /**
     * Sets corporate_registration
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult $corporate_registration corporate_registration
     *
     * @return $this
     */
    public function setCorporateRegistration($corporate_registration)
    {
        $this->container['corporate_registration'] = $corporate_registration;

        return $this;
    }

    /**
     * Gets bankruptcy_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary
     */
    public function getBankruptcySummary()
    {
        return $this->container['bankruptcy_summary'];
    }

    /**
     * Sets bankruptcy_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary $bankruptcy_summary bankruptcy_summary
     *
     * @return $this
     */
    public function setBankruptcySummary($bankruptcy_summary)
    {
        $this->container['bankruptcy_summary'] = $bankruptcy_summary;

        return $this;
    }

    /**
     * Gets bankruptcy_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]
     */
    public function getBankruptcyDetail()
    {
        return $this->container['bankruptcy_detail'];
    }

    /**
     * Sets bankruptcy_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[] $bankruptcy_detail Array containing details of bankruptcies filed by the business
     *
     * @return $this
     */
    public function setBankruptcyDetail($bankruptcy_detail)
    {
        $this->container['bankruptcy_detail'] = $bankruptcy_detail;

        return $this;
    }

    /**
     * Gets corporate_linkage_partial
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]
     */
    public function getCorporateLinkagePartial()
    {
        return $this->container['corporate_linkage_partial'];
    }

    /**
     * Sets corporate_linkage_partial
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[] $corporate_linkage_partial When linkage is present, corporateLinkagePartial will return the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true
     *
     * @return $this
     */
    public function setCorporateLinkagePartial($corporate_linkage_partial)
    {
        $this->container['corporate_linkage_partial'] = $corporate_linkage_partial;

        return $this;
    }

    /**
     * Gets corporate_linkage_full
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsCorporateLinkageFull
     */
    public function getCorporateLinkageFull()
    {
        return $this->container['corporate_linkage_full'];
    }

    /**
     * Sets corporate_linkage_full
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsCorporateLinkageFull $corporate_linkage_full corporate_linkage_full
     *
     * @return $this
     */
    public function setCorporateLinkageFull($corporate_linkage_full)
    {
        $this->container['corporate_linkage_full'] = $corporate_linkage_full;

        return $this;
    }

    /**
     * Gets fsr_score
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\FSRScore
     */
    public function getFsrScore()
    {
        return $this->container['fsr_score'];
    }

    /**
     * Sets fsr_score
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\FSRScore $fsr_score fsr_score
     *
     * @return $this
     */
    public function setFsrScore($fsr_score)
    {
        $this->container['fsr_score'] = $fsr_score;

        return $this;
    }

    /**
     * Gets judgment_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary
     */
    public function getJudgmentSummary()
    {
        return $this->container['judgment_summary'];
    }

    /**
     * Sets judgment_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary $judgment_summary judgment_summary
     *
     * @return $this
     */
    public function setJudgmentSummary($judgment_summary)
    {
        $this->container['judgment_summary'] = $judgment_summary;

        return $this;
    }

    /**
     * Gets judgment_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]
     */
    public function getJudgmentDetail()
    {
        return $this->container['judgment_detail'];
    }

    /**
     * Sets judgment_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[] $judgment_detail Array containing details of judgments filed by the business
     *
     * @return $this
     */
    public function setJudgmentDetail($judgment_detail)
    {
        $this->container['judgment_detail'] = $judgment_detail;

        return $this;
    }

    /**
     * Gets lien_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary
     */
    public function getLienSummary()
    {
        return $this->container['lien_summary'];
    }

    /**
     * Sets lien_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary $lien_summary lien_summary
     *
     * @return $this
     */
    public function setLienSummary($lien_summary)
    {
        $this->container['lien_summary'] = $lien_summary;

        return $this;
    }

    /**
     * Gets lien_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]
     */
    public function getLienDetail()
    {
        return $this->container['lien_detail'];
    }

    /**
     * Sets lien_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[] $lien_detail Object containing lien detail information
     *
     * @return $this
     */
    public function setLienDetail($lien_detail)
    {
        $this->container['lien_detail'] = $lien_detail;

        return $this;
    }

    /**
     * Gets commercial_fraud_shield_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary
     */
    public function getCommercialFraudShieldSummary()
    {
        return $this->container['commercial_fraud_shield_summary'];
    }

    /**
     * Sets commercial_fraud_shield_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary $commercial_fraud_shield_summary Object containing Commercial Fraud Shield Summary information
     *
     * @return $this
     */
    public function setCommercialFraudShieldSummary($commercial_fraud_shield_summary)
    {
        $this->container['commercial_fraud_shield_summary'] = $commercial_fraud_shield_summary;

        return $this;
    }

    /**
     * Gets government_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult
     */
    public function getGovernmentDetails()
    {
        return $this->container['government_details'];
    }

    /**
     * Sets government_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult $government_details government_details
     *
     * @return $this
     */
    public function setGovernmentDetails($government_details)
    {
        $this->container['government_details'] = $government_details;

        return $this;
    }

    /**
     * Gets fsr_score_factors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]
     */
    public function getFsrScoreFactors()
    {
        return $this->container['fsr_score_factors'];
    }

    /**
     * Sets fsr_score_factors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[] $fsr_score_factors Indicates the factors most influential in lowering the FSR score
     *
     * @return $this
     */
    public function setFsrScoreFactors($fsr_score_factors)
    {
        $this->container['fsr_score_factors'] = $fsr_score_factors;

        return $this;
    }

    /**
     * Gets fsr_score_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]
     */
    public function getFsrScoreTrends()
    {
        return $this->container['fsr_score_trends'];
    }

    /**
     * Sets fsr_score_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[] $fsr_score_trends JSON array of objects containing the four most recent quarters of FSR score information
     *
     * @return $this
     */
    public function setFsrScoreTrends($fsr_score_trends)
    {
        $this->container['fsr_score_trends'] = $fsr_score_trends;

        return $this;
    }

    /**
     * Gets department_of_justice_search
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsDepartmentOfJusticeSearch
     */
    public function getDepartmentOfJusticeSearch()
    {
        return $this->container['department_of_justice_search'];
    }

    /**
     * Sets department_of_justice_search
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseResultsDepartmentOfJusticeSearch $department_of_justice_search department_of_justice_search
     *
     * @return $this
     */
    public function setDepartmentOfJusticeSearch($department_of_justice_search)
    {
        $this->container['department_of_justice_search'] = $department_of_justice_search;

        return $this;
    }

    /**
     * Gets reverse_tax_id
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]
     */
    public function getReverseTaxId()
    {
        return $this->container['reverse_tax_id'];
    }

    /**
     * Sets reverse_tax_id
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[] $reverse_tax_id Array containing businesses that match the tax ID input on the request
     *
     * @return $this
     */
    public function setReverseTaxId($reverse_tax_id)
    {
        $this->container['reverse_tax_id'] = $reverse_tax_id;

        return $this;
    }

    /**
     * Gets reverse_phone
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]
     */
    public function getReversePhone()
    {
        return $this->container['reverse_phone'];
    }

    /**
     * Sets reverse_phone
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[] $reverse_phone Array containing businesses that match the phone input on the request
     *
     * @return $this
     */
    public function setReversePhone($reverse_phone)
    {
        $this->container['reverse_phone'] = $reverse_phone;

        return $this;
    }

    /**
     * Gets reverse_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]
     */
    public function getReverseAddress()
    {
        return $this->container['reverse_address'];
    }

    /**
     * Sets reverse_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[] $reverse_address Array containing businesses that match the address input on the request
     *
     * @return $this
     */
    public function setReverseAddress($reverse_address)
    {
        $this->container['reverse_address'] = $reverse_address;

        return $this;
    }

    /**
     * Gets better_business_bureau_rating
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResult
     */
    public function getBetterBusinessBureauRating()
    {
        return $this->container['better_business_bureau_rating'];
    }

    /**
     * Sets better_business_bureau_rating
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BetterBusinessBureauRatingResult $better_business_bureau_rating better_business_bureau_rating
     *
     * @return $this
     */
    public function setBetterBusinessBureauRating($better_business_bureau_rating)
    {
        $this->container['better_business_bureau_rating'] = $better_business_bureau_rating;

        return $this;
    }

    /**
     * Gets fraud_shield
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult
     */
    public function getFraudShield()
    {
        return $this->container['fraud_shield'];
    }

    /**
     * Sets fraud_shield
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult $fraud_shield fraud_shield
     *
     * @return $this
     */
    public function setFraudShield($fraud_shield)
    {
        $this->container['fraud_shield'] = $fraud_shield;

        return $this;
    }

    /**
     * Gets ist_watch
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatch[]
     */
    public function getIstWatch()
    {
        return $this->container['ist_watch'];
    }

    /**
     * Sets ist_watch
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatch[] $ist_watch IST Watch
     *
     * @return $this
     */
    public function setIstWatch($ist_watch)
    {
        $this->container['ist_watch'] = $ist_watch;

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


