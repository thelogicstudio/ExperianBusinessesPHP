<?php
/**
 * MultiSegmentsResult
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
 * MultiSegmentsResult Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MultiSegmentsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MultiSegmentsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_header' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult',
        'bankruptcy_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]',
        'bankruptcy_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary',
        'collections_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]',
        'collections_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsSummaryResult',
        'business_contacts' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult',
        'corporate_linkage_full' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageFull[]',
        'corporate_linkage_partial' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]',
        'corporate_registration' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult',
        'credit_status' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCreditStatus',
        'business_facts' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts',
        'fraud_shield' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult',
        'header' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult',
        'judgment_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]',
        'judgment_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary',
        'legal_filings_collections_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsCollectionsSummariesResult',
        'legal_filings_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsResult',
        'lien_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]',
        'lien_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary',
        'reverse_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]',
        'reverse_phone' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]',
        'reverse_tax_id' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]',
        'risk_dashboard' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultRiskDashboard',
        'commercial_score' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCommercialScore',
        'fsr_score' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultFsrScore',
        'trade_payment_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentSummary',
        'trade_payment_totals' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTotals',
        'trade_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultTradePaymentTrends',
        'trade_payment_experiences' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesObject',
        'ucc_filings_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]',
        'ucc_filings_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultUccFilingsSummary',
        'ist_watch' => '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatchInner[]',
        'government_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult',
        'commercial_score_factors' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreFactor[]',
        'commercial_score_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreTrends[]',
        'fsr_score_factors' => '\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]',
        'fsr_score_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_header' => null,
        'bankruptcy_detail' => null,
        'bankruptcy_summary' => null,
        'collections_detail' => null,
        'collections_summary' => null,
        'business_contacts' => null,
        'corporate_linkage_full' => null,
        'corporate_linkage_partial' => null,
        'corporate_registration' => null,
        'credit_status' => null,
        'business_facts' => null,
        'fraud_shield' => null,
        'header' => null,
        'judgment_detail' => null,
        'judgment_summary' => null,
        'legal_filings_collections_summary' => null,
        'legal_filings_summary' => null,
        'lien_detail' => null,
        'lien_summary' => null,
        'reverse_address' => null,
        'reverse_phone' => null,
        'reverse_tax_id' => null,
        'risk_dashboard' => null,
        'commercial_score' => null,
        'fsr_score' => null,
        'trade_payment_summary' => null,
        'trade_payment_totals' => null,
        'trade_payment_trends' => null,
        'trade_payment_experiences' => null,
        'ucc_filings_detail' => null,
        'ucc_filings_summary' => null,
        'ist_watch' => null,
        'government_details' => null,
        'commercial_score_factors' => null,
        'commercial_score_trends' => null,
        'fsr_score_factors' => null,
        'fsr_score_trends' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_header' => false,
        'bankruptcy_detail' => false,
        'bankruptcy_summary' => false,
        'collections_detail' => false,
        'collections_summary' => false,
        'business_contacts' => false,
        'corporate_linkage_full' => false,
        'corporate_linkage_partial' => false,
        'corporate_registration' => false,
        'credit_status' => false,
        'business_facts' => false,
        'fraud_shield' => false,
        'header' => false,
        'judgment_detail' => false,
        'judgment_summary' => false,
        'legal_filings_collections_summary' => false,
        'legal_filings_summary' => false,
        'lien_detail' => false,
        'lien_summary' => false,
        'reverse_address' => false,
        'reverse_phone' => false,
        'reverse_tax_id' => false,
        'risk_dashboard' => false,
        'commercial_score' => false,
        'fsr_score' => false,
        'trade_payment_summary' => false,
        'trade_payment_totals' => false,
        'trade_payment_trends' => false,
        'trade_payment_experiences' => false,
        'ucc_filings_detail' => false,
        'ucc_filings_summary' => false,
        'ist_watch' => false,
        'government_details' => false,
        'commercial_score_factors' => false,
        'commercial_score_trends' => false,
        'fsr_score_factors' => false,
        'fsr_score_trends' => false
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
        'business_header' => 'businessHeader',
        'bankruptcy_detail' => 'bankruptcyDetail',
        'bankruptcy_summary' => 'bankruptcySummary',
        'collections_detail' => 'collectionsDetail',
        'collections_summary' => 'collectionsSummary',
        'business_contacts' => 'businessContacts',
        'corporate_linkage_full' => 'corporateLinkageFull',
        'corporate_linkage_partial' => 'corporateLinkagePartial',
        'corporate_registration' => 'corporateRegistration',
        'credit_status' => 'creditStatus',
        'business_facts' => 'businessFacts',
        'fraud_shield' => 'fraudShield',
        'header' => 'header',
        'judgment_detail' => 'judgmentDetail',
        'judgment_summary' => 'judgmentSummary',
        'legal_filings_collections_summary' => 'legalFilingsCollectionsSummary',
        'legal_filings_summary' => 'legalFilingsSummary',
        'lien_detail' => 'lienDetail',
        'lien_summary' => 'lienSummary',
        'reverse_address' => 'reverseAddress',
        'reverse_phone' => 'reversePhone',
        'reverse_tax_id' => 'reverseTaxId',
        'risk_dashboard' => 'riskDashboard',
        'commercial_score' => 'commercialScore',
        'fsr_score' => 'fsrScore',
        'trade_payment_summary' => 'tradePaymentSummary',
        'trade_payment_totals' => 'tradePaymentTotals',
        'trade_payment_trends' => 'tradePaymentTrends',
        'trade_payment_experiences' => 'tradePaymentExperiences',
        'ucc_filings_detail' => 'uccFilingsDetail',
        'ucc_filings_summary' => 'uccFilingsSummary',
        'ist_watch' => 'istWatch',
        'government_details' => 'governmentDetails',
        'commercial_score_factors' => 'commercialScoreFactors',
        'commercial_score_trends' => 'commercialScoreTrends',
        'fsr_score_factors' => 'fsrScoreFactors',
        'fsr_score_trends' => 'fsrScoreTrends'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_header' => 'setBusinessHeader',
        'bankruptcy_detail' => 'setBankruptcyDetail',
        'bankruptcy_summary' => 'setBankruptcySummary',
        'collections_detail' => 'setCollectionsDetail',
        'collections_summary' => 'setCollectionsSummary',
        'business_contacts' => 'setBusinessContacts',
        'corporate_linkage_full' => 'setCorporateLinkageFull',
        'corporate_linkage_partial' => 'setCorporateLinkagePartial',
        'corporate_registration' => 'setCorporateRegistration',
        'credit_status' => 'setCreditStatus',
        'business_facts' => 'setBusinessFacts',
        'fraud_shield' => 'setFraudShield',
        'header' => 'setHeader',
        'judgment_detail' => 'setJudgmentDetail',
        'judgment_summary' => 'setJudgmentSummary',
        'legal_filings_collections_summary' => 'setLegalFilingsCollectionsSummary',
        'legal_filings_summary' => 'setLegalFilingsSummary',
        'lien_detail' => 'setLienDetail',
        'lien_summary' => 'setLienSummary',
        'reverse_address' => 'setReverseAddress',
        'reverse_phone' => 'setReversePhone',
        'reverse_tax_id' => 'setReverseTaxId',
        'risk_dashboard' => 'setRiskDashboard',
        'commercial_score' => 'setCommercialScore',
        'fsr_score' => 'setFsrScore',
        'trade_payment_summary' => 'setTradePaymentSummary',
        'trade_payment_totals' => 'setTradePaymentTotals',
        'trade_payment_trends' => 'setTradePaymentTrends',
        'trade_payment_experiences' => 'setTradePaymentExperiences',
        'ucc_filings_detail' => 'setUccFilingsDetail',
        'ucc_filings_summary' => 'setUccFilingsSummary',
        'ist_watch' => 'setIstWatch',
        'government_details' => 'setGovernmentDetails',
        'commercial_score_factors' => 'setCommercialScoreFactors',
        'commercial_score_trends' => 'setCommercialScoreTrends',
        'fsr_score_factors' => 'setFsrScoreFactors',
        'fsr_score_trends' => 'setFsrScoreTrends'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_header' => 'getBusinessHeader',
        'bankruptcy_detail' => 'getBankruptcyDetail',
        'bankruptcy_summary' => 'getBankruptcySummary',
        'collections_detail' => 'getCollectionsDetail',
        'collections_summary' => 'getCollectionsSummary',
        'business_contacts' => 'getBusinessContacts',
        'corporate_linkage_full' => 'getCorporateLinkageFull',
        'corporate_linkage_partial' => 'getCorporateLinkagePartial',
        'corporate_registration' => 'getCorporateRegistration',
        'credit_status' => 'getCreditStatus',
        'business_facts' => 'getBusinessFacts',
        'fraud_shield' => 'getFraudShield',
        'header' => 'getHeader',
        'judgment_detail' => 'getJudgmentDetail',
        'judgment_summary' => 'getJudgmentSummary',
        'legal_filings_collections_summary' => 'getLegalFilingsCollectionsSummary',
        'legal_filings_summary' => 'getLegalFilingsSummary',
        'lien_detail' => 'getLienDetail',
        'lien_summary' => 'getLienSummary',
        'reverse_address' => 'getReverseAddress',
        'reverse_phone' => 'getReversePhone',
        'reverse_tax_id' => 'getReverseTaxId',
        'risk_dashboard' => 'getRiskDashboard',
        'commercial_score' => 'getCommercialScore',
        'fsr_score' => 'getFsrScore',
        'trade_payment_summary' => 'getTradePaymentSummary',
        'trade_payment_totals' => 'getTradePaymentTotals',
        'trade_payment_trends' => 'getTradePaymentTrends',
        'trade_payment_experiences' => 'getTradePaymentExperiences',
        'ucc_filings_detail' => 'getUccFilingsDetail',
        'ucc_filings_summary' => 'getUccFilingsSummary',
        'ist_watch' => 'getIstWatch',
        'government_details' => 'getGovernmentDetails',
        'commercial_score_factors' => 'getCommercialScoreFactors',
        'commercial_score_trends' => 'getCommercialScoreTrends',
        'fsr_score_factors' => 'getFsrScoreFactors',
        'fsr_score_trends' => 'getFsrScoreTrends'
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
        $this->setIfExists('business_header', $data ?? [], null);
        $this->setIfExists('bankruptcy_detail', $data ?? [], null);
        $this->setIfExists('bankruptcy_summary', $data ?? [], null);
        $this->setIfExists('collections_detail', $data ?? [], null);
        $this->setIfExists('collections_summary', $data ?? [], null);
        $this->setIfExists('business_contacts', $data ?? [], null);
        $this->setIfExists('corporate_linkage_full', $data ?? [], null);
        $this->setIfExists('corporate_linkage_partial', $data ?? [], null);
        $this->setIfExists('corporate_registration', $data ?? [], null);
        $this->setIfExists('credit_status', $data ?? [], null);
        $this->setIfExists('business_facts', $data ?? [], null);
        $this->setIfExists('fraud_shield', $data ?? [], null);
        $this->setIfExists('header', $data ?? [], null);
        $this->setIfExists('judgment_detail', $data ?? [], null);
        $this->setIfExists('judgment_summary', $data ?? [], null);
        $this->setIfExists('legal_filings_collections_summary', $data ?? [], null);
        $this->setIfExists('legal_filings_summary', $data ?? [], null);
        $this->setIfExists('lien_detail', $data ?? [], null);
        $this->setIfExists('lien_summary', $data ?? [], null);
        $this->setIfExists('reverse_address', $data ?? [], null);
        $this->setIfExists('reverse_phone', $data ?? [], null);
        $this->setIfExists('reverse_tax_id', $data ?? [], null);
        $this->setIfExists('risk_dashboard', $data ?? [], null);
        $this->setIfExists('commercial_score', $data ?? [], null);
        $this->setIfExists('fsr_score', $data ?? [], null);
        $this->setIfExists('trade_payment_summary', $data ?? [], null);
        $this->setIfExists('trade_payment_totals', $data ?? [], null);
        $this->setIfExists('trade_payment_trends', $data ?? [], null);
        $this->setIfExists('trade_payment_experiences', $data ?? [], null);
        $this->setIfExists('ucc_filings_detail', $data ?? [], null);
        $this->setIfExists('ucc_filings_summary', $data ?? [], null);
        $this->setIfExists('ist_watch', $data ?? [], null);
        $this->setIfExists('government_details', $data ?? [], null);
        $this->setIfExists('commercial_score_factors', $data ?? [], null);
        $this->setIfExists('commercial_score_trends', $data ?? [], null);
        $this->setIfExists('fsr_score_factors', $data ?? [], null);
        $this->setIfExists('fsr_score_trends', $data ?? [], null);
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
     * Gets business_header
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult|null
     */
    public function getBusinessHeader()
    {
        return $this->container['business_header'];
    }

    /**
     * Sets business_header
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult|null $business_header business_header
     *
     * @return self
     */
    public function setBusinessHeader($business_header)
    {
        if (is_null($business_header)) {
            throw new \InvalidArgumentException('non-nullable business_header cannot be null');
        }
        $this->container['business_header'] = $business_header;

        return $this;
    }

    /**
     * Gets bankruptcy_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]|null
     */
    public function getBankruptcyDetail()
    {
        return $this->container['bankruptcy_detail'];
    }

    /**
     * Sets bankruptcy_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]|null $bankruptcy_detail Array containing details of bankruptcies filed by the business
     *
     * @return self
     */
    public function setBankruptcyDetail($bankruptcy_detail)
    {
        if (is_null($bankruptcy_detail)) {
            throw new \InvalidArgumentException('non-nullable bankruptcy_detail cannot be null');
        }
        $this->container['bankruptcy_detail'] = $bankruptcy_detail;

        return $this;
    }

    /**
     * Gets bankruptcy_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary|null
     */
    public function getBankruptcySummary()
    {
        return $this->container['bankruptcy_summary'];
    }

    /**
     * Sets bankruptcy_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcySummary|null $bankruptcy_summary bankruptcy_summary
     *
     * @return self
     */
    public function setBankruptcySummary($bankruptcy_summary)
    {
        if (is_null($bankruptcy_summary)) {
            throw new \InvalidArgumentException('non-nullable bankruptcy_summary cannot be null');
        }
        $this->container['bankruptcy_summary'] = $bankruptcy_summary;

        return $this;
    }

    /**
     * Gets collections_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]|null
     */
    public function getCollectionsDetail()
    {
        return $this->container['collections_detail'];
    }

    /**
     * Sets collections_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]|null $collections_detail If true receive object containing details of collections accounts on file for the business
     *
     * @return self
     */
    public function setCollectionsDetail($collections_detail)
    {
        if (is_null($collections_detail)) {
            throw new \InvalidArgumentException('non-nullable collections_detail cannot be null');
        }
        $this->container['collections_detail'] = $collections_detail;

        return $this;
    }

    /**
     * Gets collections_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsSummaryResult|null
     */
    public function getCollectionsSummary()
    {
        return $this->container['collections_summary'];
    }

    /**
     * Sets collections_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsSummaryResult|null $collections_summary collections_summary
     *
     * @return self
     */
    public function setCollectionsSummary($collections_summary)
    {
        if (is_null($collections_summary)) {
            throw new \InvalidArgumentException('non-nullable collections_summary cannot be null');
        }
        $this->container['collections_summary'] = $collections_summary;

        return $this;
    }

    /**
     * Gets business_contacts
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult|null
     */
    public function getBusinessContacts()
    {
        return $this->container['business_contacts'];
    }

    /**
     * Sets business_contacts
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResult|null $business_contacts business_contacts
     *
     * @return self
     */
    public function setBusinessContacts($business_contacts)
    {
        if (is_null($business_contacts)) {
            throw new \InvalidArgumentException('non-nullable business_contacts cannot be null');
        }
        $this->container['business_contacts'] = $business_contacts;

        return $this;
    }

    /**
     * Gets corporate_linkage_full
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageFull[]|null
     */
    public function getCorporateLinkageFull()
    {
        return $this->container['corporate_linkage_full'];
    }

    /**
     * Sets corporate_linkage_full
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageFull[]|null $corporate_linkage_full When linkage is present, corporateLinkageFull will return the full family tree, limited to 300 records. When there are more than 300 records, branches will not be returned (this occurs less than 1% of the time)
     *
     * @return self
     */
    public function setCorporateLinkageFull($corporate_linkage_full)
    {
        if (is_null($corporate_linkage_full)) {
            throw new \InvalidArgumentException('non-nullable corporate_linkage_full cannot be null');
        }
        $this->container['corporate_linkage_full'] = $corporate_linkage_full;

        return $this;
    }

    /**
     * Gets corporate_linkage_partial
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]|null
     */
    public function getCorporateLinkagePartial()
    {
        return $this->container['corporate_linkage_partial'];
    }

    /**
     * Sets corporate_linkage_partial
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkagePartial[]|null $corporate_linkage_partial When linkage is present, corporateLinkagePartial will return the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true
     *
     * @return self
     */
    public function setCorporateLinkagePartial($corporate_linkage_partial)
    {
        if (is_null($corporate_linkage_partial)) {
            throw new \InvalidArgumentException('non-nullable corporate_linkage_partial cannot be null');
        }
        $this->container['corporate_linkage_partial'] = $corporate_linkage_partial;

        return $this;
    }

    /**
     * Gets corporate_registration
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult|null
     */
    public function getCorporateRegistration()
    {
        return $this->container['corporate_registration'];
    }

    /**
     * Sets corporate_registration
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult|null $corporate_registration corporate_registration
     *
     * @return self
     */
    public function setCorporateRegistration($corporate_registration)
    {
        if (is_null($corporate_registration)) {
            throw new \InvalidArgumentException('non-nullable corporate_registration cannot be null');
        }
        $this->container['corporate_registration'] = $corporate_registration;

        return $this;
    }

    /**
     * Gets credit_status
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCreditStatus|null
     */
    public function getCreditStatus()
    {
        return $this->container['credit_status'];
    }

    /**
     * Sets credit_status
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCreditStatus|null $credit_status credit_status
     *
     * @return self
     */
    public function setCreditStatus($credit_status)
    {
        if (is_null($credit_status)) {
            throw new \InvalidArgumentException('non-nullable credit_status cannot be null');
        }
        $this->container['credit_status'] = $credit_status;

        return $this;
    }

    /**
     * Gets business_facts
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts|null
     */
    public function getBusinessFacts()
    {
        return $this->container['business_facts'];
    }

    /**
     * Sets business_facts
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts|null $business_facts business_facts
     *
     * @return self
     */
    public function setBusinessFacts($business_facts)
    {
        if (is_null($business_facts)) {
            throw new \InvalidArgumentException('non-nullable business_facts cannot be null');
        }
        $this->container['business_facts'] = $business_facts;

        return $this;
    }

    /**
     * Gets fraud_shield
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult|null
     */
    public function getFraudShield()
    {
        return $this->container['fraud_shield'];
    }

    /**
     * Sets fraud_shield
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResult|null $fraud_shield fraud_shield
     *
     * @return self
     */
    public function setFraudShield($fraud_shield)
    {
        if (is_null($fraud_shield)) {
            throw new \InvalidArgumentException('non-nullable fraud_shield cannot be null');
        }
        $this->container['fraud_shield'] = $fraud_shield;

        return $this;
    }

    /**
     * Gets header
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResult|null $header header
     *
     * @return self
     */
    public function setHeader($header)
    {
        if (is_null($header)) {
            throw new \InvalidArgumentException('non-nullable header cannot be null');
        }
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets judgment_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]|null
     */
    public function getJudgmentDetail()
    {
        return $this->container['judgment_detail'];
    }

    /**
     * Sets judgment_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]|null $judgment_detail Array containing details of judgments filed by the business
     *
     * @return self
     */
    public function setJudgmentDetail($judgment_detail)
    {
        if (is_null($judgment_detail)) {
            throw new \InvalidArgumentException('non-nullable judgment_detail cannot be null');
        }
        $this->container['judgment_detail'] = $judgment_detail;

        return $this;
    }

    /**
     * Gets judgment_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary|null
     */
    public function getJudgmentSummary()
    {
        return $this->container['judgment_summary'];
    }

    /**
     * Sets judgment_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultJudgmentSummary|null $judgment_summary judgment_summary
     *
     * @return self
     */
    public function setJudgmentSummary($judgment_summary)
    {
        if (is_null($judgment_summary)) {
            throw new \InvalidArgumentException('non-nullable judgment_summary cannot be null');
        }
        $this->container['judgment_summary'] = $judgment_summary;

        return $this;
    }

    /**
     * Gets legal_filings_collections_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsCollectionsSummariesResult|null
     */
    public function getLegalFilingsCollectionsSummary()
    {
        return $this->container['legal_filings_collections_summary'];
    }

    /**
     * Sets legal_filings_collections_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsCollectionsSummariesResult|null $legal_filings_collections_summary legal_filings_collections_summary
     *
     * @return self
     */
    public function setLegalFilingsCollectionsSummary($legal_filings_collections_summary)
    {
        if (is_null($legal_filings_collections_summary)) {
            throw new \InvalidArgumentException('non-nullable legal_filings_collections_summary cannot be null');
        }
        $this->container['legal_filings_collections_summary'] = $legal_filings_collections_summary;

        return $this;
    }

    /**
     * Gets legal_filings_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsResult|null
     */
    public function getLegalFilingsSummary()
    {
        return $this->container['legal_filings_summary'];
    }

    /**
     * Sets legal_filings_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalFilingsResult|null $legal_filings_summary legal_filings_summary
     *
     * @return self
     */
    public function setLegalFilingsSummary($legal_filings_summary)
    {
        if (is_null($legal_filings_summary)) {
            throw new \InvalidArgumentException('non-nullable legal_filings_summary cannot be null');
        }
        $this->container['legal_filings_summary'] = $legal_filings_summary;

        return $this;
    }

    /**
     * Gets lien_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]|null
     */
    public function getLienDetail()
    {
        return $this->container['lien_detail'];
    }

    /**
     * Sets lien_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]|null $lien_detail Object containing lien detail information
     *
     * @return self
     */
    public function setLienDetail($lien_detail)
    {
        if (is_null($lien_detail)) {
            throw new \InvalidArgumentException('non-nullable lien_detail cannot be null');
        }
        $this->container['lien_detail'] = $lien_detail;

        return $this;
    }

    /**
     * Gets lien_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary|null
     */
    public function getLienSummary()
    {
        return $this->container['lien_summary'];
    }

    /**
     * Sets lien_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LienSummary|null $lien_summary lien_summary
     *
     * @return self
     */
    public function setLienSummary($lien_summary)
    {
        if (is_null($lien_summary)) {
            throw new \InvalidArgumentException('non-nullable lien_summary cannot be null');
        }
        $this->container['lien_summary'] = $lien_summary;

        return $this;
    }

    /**
     * Gets reverse_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]|null
     */
    public function getReverseAddress()
    {
        return $this->container['reverse_address'];
    }

    /**
     * Sets reverse_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddresses[]|null $reverse_address Array containing businesses that match the address input on the request
     *
     * @return self
     */
    public function setReverseAddress($reverse_address)
    {
        if (is_null($reverse_address)) {
            throw new \InvalidArgumentException('non-nullable reverse_address cannot be null');
        }
        $this->container['reverse_address'] = $reverse_address;

        return $this;
    }

    /**
     * Gets reverse_phone
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]|null
     */
    public function getReversePhone()
    {
        return $this->container['reverse_phone'];
    }

    /**
     * Sets reverse_phone
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhones[]|null $reverse_phone Array containing businesses that match the phone input on the request
     *
     * @return self
     */
    public function setReversePhone($reverse_phone)
    {
        if (is_null($reverse_phone)) {
            throw new \InvalidArgumentException('non-nullable reverse_phone cannot be null');
        }
        $this->container['reverse_phone'] = $reverse_phone;

        return $this;
    }

    /**
     * Gets reverse_tax_id
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]|null
     */
    public function getReverseTaxId()
    {
        return $this->container['reverse_tax_id'];
    }

    /**
     * Sets reverse_tax_id
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIds[]|null $reverse_tax_id Array containing businesses that match the tax ID input on the request
     *
     * @return self
     */
    public function setReverseTaxId($reverse_tax_id)
    {
        if (is_null($reverse_tax_id)) {
            throw new \InvalidArgumentException('non-nullable reverse_tax_id cannot be null');
        }
        $this->container['reverse_tax_id'] = $reverse_tax_id;

        return $this;
    }

    /**
     * Gets risk_dashboard
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultRiskDashboard|null
     */
    public function getRiskDashboard()
    {
        return $this->container['risk_dashboard'];
    }

    /**
     * Sets risk_dashboard
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultRiskDashboard|null $risk_dashboard risk_dashboard
     *
     * @return self
     */
    public function setRiskDashboard($risk_dashboard)
    {
        if (is_null($risk_dashboard)) {
            throw new \InvalidArgumentException('non-nullable risk_dashboard cannot be null');
        }
        $this->container['risk_dashboard'] = $risk_dashboard;

        return $this;
    }

    /**
     * Gets commercial_score
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCommercialScore|null
     */
    public function getCommercialScore()
    {
        return $this->container['commercial_score'];
    }

    /**
     * Sets commercial_score
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultCommercialScore|null $commercial_score commercial_score
     *
     * @return self
     */
    public function setCommercialScore($commercial_score)
    {
        if (is_null($commercial_score)) {
            throw new \InvalidArgumentException('non-nullable commercial_score cannot be null');
        }
        $this->container['commercial_score'] = $commercial_score;

        return $this;
    }

    /**
     * Gets fsr_score
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultFsrScore|null
     */
    public function getFsrScore()
    {
        return $this->container['fsr_score'];
    }

    /**
     * Sets fsr_score
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultFsrScore|null $fsr_score fsr_score
     *
     * @return self
     */
    public function setFsrScore($fsr_score)
    {
        if (is_null($fsr_score)) {
            throw new \InvalidArgumentException('non-nullable fsr_score cannot be null');
        }
        $this->container['fsr_score'] = $fsr_score;

        return $this;
    }

    /**
     * Gets trade_payment_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentSummary|null
     */
    public function getTradePaymentSummary()
    {
        return $this->container['trade_payment_summary'];
    }

    /**
     * Sets trade_payment_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentSummary|null $trade_payment_summary trade_payment_summary
     *
     * @return self
     */
    public function setTradePaymentSummary($trade_payment_summary)
    {
        if (is_null($trade_payment_summary)) {
            throw new \InvalidArgumentException('non-nullable trade_payment_summary cannot be null');
        }
        $this->container['trade_payment_summary'] = $trade_payment_summary;

        return $this;
    }

    /**
     * Gets trade_payment_totals
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTotals|null
     */
    public function getTradePaymentTotals()
    {
        return $this->container['trade_payment_totals'];
    }

    /**
     * Sets trade_payment_totals
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTotals|null $trade_payment_totals trade_payment_totals
     *
     * @return self
     */
    public function setTradePaymentTotals($trade_payment_totals)
    {
        if (is_null($trade_payment_totals)) {
            throw new \InvalidArgumentException('non-nullable trade_payment_totals cannot be null');
        }
        $this->container['trade_payment_totals'] = $trade_payment_totals;

        return $this;
    }

    /**
     * Gets trade_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultTradePaymentTrends|null
     */
    public function getTradePaymentTrends()
    {
        return $this->container['trade_payment_trends'];
    }

    /**
     * Sets trade_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultTradePaymentTrends|null $trade_payment_trends trade_payment_trends
     *
     * @return self
     */
    public function setTradePaymentTrends($trade_payment_trends)
    {
        if (is_null($trade_payment_trends)) {
            throw new \InvalidArgumentException('non-nullable trade_payment_trends cannot be null');
        }
        $this->container['trade_payment_trends'] = $trade_payment_trends;

        return $this;
    }

    /**
     * Gets trade_payment_experiences
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesObject|null
     */
    public function getTradePaymentExperiences()
    {
        return $this->container['trade_payment_experiences'];
    }

    /**
     * Sets trade_payment_experiences
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesObject|null $trade_payment_experiences trade_payment_experiences
     *
     * @return self
     */
    public function setTradePaymentExperiences($trade_payment_experiences)
    {
        if (is_null($trade_payment_experiences)) {
            throw new \InvalidArgumentException('non-nullable trade_payment_experiences cannot be null');
        }
        $this->container['trade_payment_experiences'] = $trade_payment_experiences;

        return $this;
    }

    /**
     * Gets ucc_filings_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]|null
     */
    public function getUccFilingsDetail()
    {
        return $this->container['ucc_filings_detail'];
    }

    /**
     * Sets ucc_filings_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]|null $ucc_filings_detail Object containing judgment summary information
     *
     * @return self
     */
    public function setUccFilingsDetail($ucc_filings_detail)
    {
        if (is_null($ucc_filings_detail)) {
            throw new \InvalidArgumentException('non-nullable ucc_filings_detail cannot be null');
        }
        $this->container['ucc_filings_detail'] = $ucc_filings_detail;

        return $this;
    }

    /**
     * Gets ucc_filings_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultUccFilingsSummary|null
     */
    public function getUccFilingsSummary()
    {
        return $this->container['ucc_filings_summary'];
    }

    /**
     * Sets ucc_filings_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultUccFilingsSummary|null $ucc_filings_summary ucc_filings_summary
     *
     * @return self
     */
    public function setUccFilingsSummary($ucc_filings_summary)
    {
        if (is_null($ucc_filings_summary)) {
            throw new \InvalidArgumentException('non-nullable ucc_filings_summary cannot be null');
        }
        $this->container['ucc_filings_summary'] = $ucc_filings_summary;

        return $this;
    }

    /**
     * Gets ist_watch
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatchInner[]|null
     */
    public function getIstWatch()
    {
        return $this->container['ist_watch'];
    }

    /**
     * Sets ist_watch
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResultIstWatchInner[]|null $ist_watch IST Watch
     *
     * @return self
     */
    public function setIstWatch($ist_watch)
    {
        if (is_null($ist_watch)) {
            throw new \InvalidArgumentException('non-nullable ist_watch cannot be null');
        }
        $this->container['ist_watch'] = $ist_watch;

        return $this;
    }

    /**
     * Gets government_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult|null
     */
    public function getGovernmentDetails()
    {
        return $this->container['government_details'];
    }

    /**
     * Sets government_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResult|null $government_details government_details
     *
     * @return self
     */
    public function setGovernmentDetails($government_details)
    {
        if (is_null($government_details)) {
            throw new \InvalidArgumentException('non-nullable government_details cannot be null');
        }
        $this->container['government_details'] = $government_details;

        return $this;
    }

    /**
     * Gets commercial_score_factors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreFactor[]|null
     */
    public function getCommercialScoreFactors()
    {
        return $this->container['commercial_score_factors'];
    }

    /**
     * Sets commercial_score_factors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreFactor[]|null $commercial_score_factors Indicates the factors most influential in lowering the commercial score
     *
     * @return self
     */
    public function setCommercialScoreFactors($commercial_score_factors)
    {
        if (is_null($commercial_score_factors)) {
            throw new \InvalidArgumentException('non-nullable commercial_score_factors cannot be null');
        }
        $this->container['commercial_score_factors'] = $commercial_score_factors;

        return $this;
    }

    /**
     * Gets commercial_score_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreTrends[]|null
     */
    public function getCommercialScoreTrends()
    {
        return $this->container['commercial_score_trends'];
    }

    /**
     * Sets commercial_score_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialScoreTrends[]|null $commercial_score_trends JSON array of object containing the four most recent quarters of commercial score information
     *
     * @return self
     */
    public function setCommercialScoreTrends($commercial_score_trends)
    {
        if (is_null($commercial_score_trends)) {
            throw new \InvalidArgumentException('non-nullable commercial_score_trends cannot be null');
        }
        $this->container['commercial_score_trends'] = $commercial_score_trends;

        return $this;
    }

    /**
     * Gets fsr_score_factors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]|null
     */
    public function getFsrScoreFactors()
    {
        return $this->container['fsr_score_factors'];
    }

    /**
     * Sets fsr_score_factors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreFactor[]|null $fsr_score_factors Indicates the factors most influential in lowering the FSR score
     *
     * @return self
     */
    public function setFsrScoreFactors($fsr_score_factors)
    {
        if (is_null($fsr_score_factors)) {
            throw new \InvalidArgumentException('non-nullable fsr_score_factors cannot be null');
        }
        $this->container['fsr_score_factors'] = $fsr_score_factors;

        return $this;
    }

    /**
     * Gets fsr_score_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]|null
     */
    public function getFsrScoreTrends()
    {
        return $this->container['fsr_score_trends'];
    }

    /**
     * Sets fsr_score_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\FsrScoreTrend[]|null $fsr_score_trends JSON array of objects containing the four most recent quarters of FSR score information
     *
     * @return self
     */
    public function setFsrScoreTrends($fsr_score_trends)
    {
        if (is_null($fsr_score_trends)) {
            throw new \InvalidArgumentException('non-nullable fsr_score_trends cannot be null');
        }
        $this->container['fsr_score_trends'] = $fsr_score_trends;

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


