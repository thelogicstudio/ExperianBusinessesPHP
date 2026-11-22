<?php
/**
 * PremierProfilesResponseAllOfResults
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
 * PremierProfilesResponseAllOfResults Class Doc Comment
 *
 * @category Class
 * @description Results
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PremierProfilesResponseAllOfResults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PremierProfilesResponse_allOf_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collections_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]',
        'trade_payment_experiences' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]',
        'additional_payment_experiences' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]',
        'payment_totals' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PaymentTotalsResult',
        'monthly_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]',
        'industry_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsIndustryPaymentTrends',
        'quarterly_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]',
        'bankruptcy_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]',
        'tax_lien_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]',
        'judgment_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]',
        'ucc_filings_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsUccFilingsSummary',
        'ucc_filings_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]',
        'corporate_registration' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult',
        'executive_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]',
        'business_facts' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts',
        'corporate_linkage' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkage[]',
        'commercial_fraud_shield_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary',
        'expanded_credit_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummary',
        'executive_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummary',
        'inquiries' => '\TheLogicStudio\ExperianBusinessesPHP\Model\Inquiries[]',
        'competitors' => '\TheLogicStudio\ExperianBusinessesPHP\Model\Competitors[]',
        'proprietor_name_and_address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ProprietorNameAndAddress[]',
        'ucc_co_debtors' => '\TheLogicStudio\ExperianBusinessesPHP\Model\UccCoDebtors[]',
        'sic_codes' => '\TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]',
        'naics_codes' => '\TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]',
        'score_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformation',
        'stock_exchange' => 'string',
        'fortune1000' => '\TheLogicStudio\ExperianBusinessesPHP\Model\Fortune1000[]',
        'enhanced_business_description' => 'string',
        'corporate_financial_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateFinancialInformation',
        'consumer_statement' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ConsumerStatement[]',
        'commercial_government_entity_code' => '\TheLogicStudio\ExperianBusinessesPHP\Model\CommercialGovernmentEntityCode',
        'economic_diversity' => '\TheLogicStudio\ExperianBusinessesPHP\Model\EconomicDiversity',
        'government_activity' => '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentActivity',
        'contract_spending_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingSummary',
        'contract_spending_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingDetail[]',
        'leasing_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResult[]',
        'license_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LicenseDetailsResult[]',
        'bond_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsBondDetails[]',
        'insurance_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsInsuranceDetails[]',
        'stocks' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsStocks',
        'commercial_bank_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsCommercialBankInformation[]',
        'aggregates' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collections_detail' => null,
        'trade_payment_experiences' => null,
        'additional_payment_experiences' => null,
        'payment_totals' => null,
        'monthly_payment_trends' => null,
        'industry_payment_trends' => null,
        'quarterly_payment_trends' => null,
        'bankruptcy_detail' => null,
        'tax_lien_detail' => null,
        'judgment_detail' => null,
        'ucc_filings_summary' => null,
        'ucc_filings_detail' => null,
        'corporate_registration' => null,
        'executive_information' => null,
        'business_facts' => null,
        'corporate_linkage' => null,
        'commercial_fraud_shield_summary' => null,
        'expanded_credit_summary' => null,
        'executive_summary' => null,
        'inquiries' => null,
        'competitors' => null,
        'proprietor_name_and_address' => null,
        'ucc_co_debtors' => null,
        'sic_codes' => null,
        'naics_codes' => null,
        'score_information' => null,
        'stock_exchange' => null,
        'fortune1000' => null,
        'enhanced_business_description' => null,
        'corporate_financial_information' => null,
        'consumer_statement' => null,
        'commercial_government_entity_code' => null,
        'economic_diversity' => null,
        'government_activity' => null,
        'contract_spending_summary' => null,
        'contract_spending_detail' => null,
        'leasing_information' => null,
        'license_details' => null,
        'bond_details' => null,
        'insurance_details' => null,
        'stocks' => null,
        'commercial_bank_information' => null,
        'aggregates' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collections_detail' => false,
        'trade_payment_experiences' => false,
        'additional_payment_experiences' => false,
        'payment_totals' => false,
        'monthly_payment_trends' => false,
        'industry_payment_trends' => false,
        'quarterly_payment_trends' => false,
        'bankruptcy_detail' => false,
        'tax_lien_detail' => false,
        'judgment_detail' => false,
        'ucc_filings_summary' => false,
        'ucc_filings_detail' => false,
        'corporate_registration' => false,
        'executive_information' => false,
        'business_facts' => false,
        'corporate_linkage' => false,
        'commercial_fraud_shield_summary' => false,
        'expanded_credit_summary' => false,
        'executive_summary' => false,
        'inquiries' => false,
        'competitors' => false,
        'proprietor_name_and_address' => false,
        'ucc_co_debtors' => false,
        'sic_codes' => false,
        'naics_codes' => false,
        'score_information' => false,
        'stock_exchange' => false,
        'fortune1000' => false,
        'enhanced_business_description' => false,
        'corporate_financial_information' => false,
        'consumer_statement' => false,
        'commercial_government_entity_code' => false,
        'economic_diversity' => false,
        'government_activity' => false,
        'contract_spending_summary' => false,
        'contract_spending_detail' => false,
        'leasing_information' => false,
        'license_details' => false,
        'bond_details' => false,
        'insurance_details' => false,
        'stocks' => false,
        'commercial_bank_information' => false,
        'aggregates' => false
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
        'collections_detail' => 'collectionsDetail',
        'trade_payment_experiences' => 'tradePaymentExperiences',
        'additional_payment_experiences' => 'additionalPaymentExperiences',
        'payment_totals' => 'paymentTotals',
        'monthly_payment_trends' => 'monthlyPaymentTrends',
        'industry_payment_trends' => 'industryPaymentTrends',
        'quarterly_payment_trends' => 'quarterlyPaymentTrends',
        'bankruptcy_detail' => 'bankruptcyDetail',
        'tax_lien_detail' => 'taxLienDetail',
        'judgment_detail' => 'judgmentDetail',
        'ucc_filings_summary' => 'uccFilingsSummary',
        'ucc_filings_detail' => 'uccFilingsDetail',
        'corporate_registration' => 'corporateRegistration',
        'executive_information' => 'executiveInformation',
        'business_facts' => 'businessFacts',
        'corporate_linkage' => 'corporateLinkage',
        'commercial_fraud_shield_summary' => 'commercialFraudShieldSummary',
        'expanded_credit_summary' => 'expandedCreditSummary',
        'executive_summary' => 'executiveSummary',
        'inquiries' => 'inquiries',
        'competitors' => 'competitors',
        'proprietor_name_and_address' => 'proprietorNameAndAddress',
        'ucc_co_debtors' => 'uccCoDebtors',
        'sic_codes' => 'sicCodes',
        'naics_codes' => 'naicsCodes',
        'score_information' => 'scoreInformation',
        'stock_exchange' => 'stockExchange',
        'fortune1000' => 'fortune1000',
        'enhanced_business_description' => 'enhancedBusinessDescription',
        'corporate_financial_information' => 'corporateFinancialInformation',
        'consumer_statement' => 'consumerStatement',
        'commercial_government_entity_code' => 'commercialGovernmentEntityCode',
        'economic_diversity' => 'economicDiversity',
        'government_activity' => 'governmentActivity',
        'contract_spending_summary' => 'contractSpendingSummary',
        'contract_spending_detail' => 'contractSpendingDetail',
        'leasing_information' => 'leasingInformation',
        'license_details' => 'licenseDetails',
        'bond_details' => 'bondDetails',
        'insurance_details' => 'insuranceDetails',
        'stocks' => 'stocks',
        'commercial_bank_information' => 'commercialBankInformation',
        'aggregates' => 'aggregates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collections_detail' => 'setCollectionsDetail',
        'trade_payment_experiences' => 'setTradePaymentExperiences',
        'additional_payment_experiences' => 'setAdditionalPaymentExperiences',
        'payment_totals' => 'setPaymentTotals',
        'monthly_payment_trends' => 'setMonthlyPaymentTrends',
        'industry_payment_trends' => 'setIndustryPaymentTrends',
        'quarterly_payment_trends' => 'setQuarterlyPaymentTrends',
        'bankruptcy_detail' => 'setBankruptcyDetail',
        'tax_lien_detail' => 'setTaxLienDetail',
        'judgment_detail' => 'setJudgmentDetail',
        'ucc_filings_summary' => 'setUccFilingsSummary',
        'ucc_filings_detail' => 'setUccFilingsDetail',
        'corporate_registration' => 'setCorporateRegistration',
        'executive_information' => 'setExecutiveInformation',
        'business_facts' => 'setBusinessFacts',
        'corporate_linkage' => 'setCorporateLinkage',
        'commercial_fraud_shield_summary' => 'setCommercialFraudShieldSummary',
        'expanded_credit_summary' => 'setExpandedCreditSummary',
        'executive_summary' => 'setExecutiveSummary',
        'inquiries' => 'setInquiries',
        'competitors' => 'setCompetitors',
        'proprietor_name_and_address' => 'setProprietorNameAndAddress',
        'ucc_co_debtors' => 'setUccCoDebtors',
        'sic_codes' => 'setSicCodes',
        'naics_codes' => 'setNaicsCodes',
        'score_information' => 'setScoreInformation',
        'stock_exchange' => 'setStockExchange',
        'fortune1000' => 'setFortune1000',
        'enhanced_business_description' => 'setEnhancedBusinessDescription',
        'corporate_financial_information' => 'setCorporateFinancialInformation',
        'consumer_statement' => 'setConsumerStatement',
        'commercial_government_entity_code' => 'setCommercialGovernmentEntityCode',
        'economic_diversity' => 'setEconomicDiversity',
        'government_activity' => 'setGovernmentActivity',
        'contract_spending_summary' => 'setContractSpendingSummary',
        'contract_spending_detail' => 'setContractSpendingDetail',
        'leasing_information' => 'setLeasingInformation',
        'license_details' => 'setLicenseDetails',
        'bond_details' => 'setBondDetails',
        'insurance_details' => 'setInsuranceDetails',
        'stocks' => 'setStocks',
        'commercial_bank_information' => 'setCommercialBankInformation',
        'aggregates' => 'setAggregates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collections_detail' => 'getCollectionsDetail',
        'trade_payment_experiences' => 'getTradePaymentExperiences',
        'additional_payment_experiences' => 'getAdditionalPaymentExperiences',
        'payment_totals' => 'getPaymentTotals',
        'monthly_payment_trends' => 'getMonthlyPaymentTrends',
        'industry_payment_trends' => 'getIndustryPaymentTrends',
        'quarterly_payment_trends' => 'getQuarterlyPaymentTrends',
        'bankruptcy_detail' => 'getBankruptcyDetail',
        'tax_lien_detail' => 'getTaxLienDetail',
        'judgment_detail' => 'getJudgmentDetail',
        'ucc_filings_summary' => 'getUccFilingsSummary',
        'ucc_filings_detail' => 'getUccFilingsDetail',
        'corporate_registration' => 'getCorporateRegistration',
        'executive_information' => 'getExecutiveInformation',
        'business_facts' => 'getBusinessFacts',
        'corporate_linkage' => 'getCorporateLinkage',
        'commercial_fraud_shield_summary' => 'getCommercialFraudShieldSummary',
        'expanded_credit_summary' => 'getExpandedCreditSummary',
        'executive_summary' => 'getExecutiveSummary',
        'inquiries' => 'getInquiries',
        'competitors' => 'getCompetitors',
        'proprietor_name_and_address' => 'getProprietorNameAndAddress',
        'ucc_co_debtors' => 'getUccCoDebtors',
        'sic_codes' => 'getSicCodes',
        'naics_codes' => 'getNaicsCodes',
        'score_information' => 'getScoreInformation',
        'stock_exchange' => 'getStockExchange',
        'fortune1000' => 'getFortune1000',
        'enhanced_business_description' => 'getEnhancedBusinessDescription',
        'corporate_financial_information' => 'getCorporateFinancialInformation',
        'consumer_statement' => 'getConsumerStatement',
        'commercial_government_entity_code' => 'getCommercialGovernmentEntityCode',
        'economic_diversity' => 'getEconomicDiversity',
        'government_activity' => 'getGovernmentActivity',
        'contract_spending_summary' => 'getContractSpendingSummary',
        'contract_spending_detail' => 'getContractSpendingDetail',
        'leasing_information' => 'getLeasingInformation',
        'license_details' => 'getLicenseDetails',
        'bond_details' => 'getBondDetails',
        'insurance_details' => 'getInsuranceDetails',
        'stocks' => 'getStocks',
        'commercial_bank_information' => 'getCommercialBankInformation',
        'aggregates' => 'getAggregates'
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
        $this->setIfExists('collections_detail', $data ?? [], null);
        $this->setIfExists('trade_payment_experiences', $data ?? [], null);
        $this->setIfExists('additional_payment_experiences', $data ?? [], null);
        $this->setIfExists('payment_totals', $data ?? [], null);
        $this->setIfExists('monthly_payment_trends', $data ?? [], null);
        $this->setIfExists('industry_payment_trends', $data ?? [], null);
        $this->setIfExists('quarterly_payment_trends', $data ?? [], null);
        $this->setIfExists('bankruptcy_detail', $data ?? [], null);
        $this->setIfExists('tax_lien_detail', $data ?? [], null);
        $this->setIfExists('judgment_detail', $data ?? [], null);
        $this->setIfExists('ucc_filings_summary', $data ?? [], null);
        $this->setIfExists('ucc_filings_detail', $data ?? [], null);
        $this->setIfExists('corporate_registration', $data ?? [], null);
        $this->setIfExists('executive_information', $data ?? [], null);
        $this->setIfExists('business_facts', $data ?? [], null);
        $this->setIfExists('corporate_linkage', $data ?? [], null);
        $this->setIfExists('commercial_fraud_shield_summary', $data ?? [], null);
        $this->setIfExists('expanded_credit_summary', $data ?? [], null);
        $this->setIfExists('executive_summary', $data ?? [], null);
        $this->setIfExists('inquiries', $data ?? [], null);
        $this->setIfExists('competitors', $data ?? [], null);
        $this->setIfExists('proprietor_name_and_address', $data ?? [], null);
        $this->setIfExists('ucc_co_debtors', $data ?? [], null);
        $this->setIfExists('sic_codes', $data ?? [], null);
        $this->setIfExists('naics_codes', $data ?? [], null);
        $this->setIfExists('score_information', $data ?? [], null);
        $this->setIfExists('stock_exchange', $data ?? [], null);
        $this->setIfExists('fortune1000', $data ?? [], null);
        $this->setIfExists('enhanced_business_description', $data ?? [], null);
        $this->setIfExists('corporate_financial_information', $data ?? [], null);
        $this->setIfExists('consumer_statement', $data ?? [], null);
        $this->setIfExists('commercial_government_entity_code', $data ?? [], null);
        $this->setIfExists('economic_diversity', $data ?? [], null);
        $this->setIfExists('government_activity', $data ?? [], null);
        $this->setIfExists('contract_spending_summary', $data ?? [], null);
        $this->setIfExists('contract_spending_detail', $data ?? [], null);
        $this->setIfExists('leasing_information', $data ?? [], null);
        $this->setIfExists('license_details', $data ?? [], null);
        $this->setIfExists('bond_details', $data ?? [], null);
        $this->setIfExists('insurance_details', $data ?? [], null);
        $this->setIfExists('stocks', $data ?? [], null);
        $this->setIfExists('commercial_bank_information', $data ?? [], null);
        $this->setIfExists('aggregates', $data ?? [], null);
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
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]|null $collections_detail Array containing details of collections on file for business
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
     * Gets trade_payment_experiences
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]|null
     */
    public function getTradePaymentExperiences()
    {
        return $this->container['trade_payment_experiences'];
    }

    /**
     * Sets trade_payment_experiences
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]|null $trade_payment_experiences Array containing details of all trade payment experiences on file for the business
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
     * Gets additional_payment_experiences
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]|null
     */
    public function getAdditionalPaymentExperiences()
    {
        return $this->container['additional_payment_experiences'];
    }

    /**
     * Sets additional_payment_experiences
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]|null $additional_payment_experiences Array containing additional trade payment experiences
     *
     * @return self
     */
    public function setAdditionalPaymentExperiences($additional_payment_experiences)
    {
        if (is_null($additional_payment_experiences)) {
            throw new \InvalidArgumentException('non-nullable additional_payment_experiences cannot be null');
        }
        $this->container['additional_payment_experiences'] = $additional_payment_experiences;

        return $this;
    }

    /**
     * Gets payment_totals
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PaymentTotalsResult|null
     */
    public function getPaymentTotals()
    {
        return $this->container['payment_totals'];
    }

    /**
     * Sets payment_totals
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PaymentTotalsResult|null $payment_totals payment_totals
     *
     * @return self
     */
    public function setPaymentTotals($payment_totals)
    {
        if (is_null($payment_totals)) {
            throw new \InvalidArgumentException('non-nullable payment_totals cannot be null');
        }
        $this->container['payment_totals'] = $payment_totals;

        return $this;
    }

    /**
     * Gets monthly_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]|null
     */
    public function getMonthlyPaymentTrends()
    {
        return $this->container['monthly_payment_trends'];
    }

    /**
     * Sets monthly_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]|null $monthly_payment_trends Snapshot of key performance metrics and trade balances for the last 6 months; current and 6 previous
     *
     * @return self
     */
    public function setMonthlyPaymentTrends($monthly_payment_trends)
    {
        if (is_null($monthly_payment_trends)) {
            throw new \InvalidArgumentException('non-nullable monthly_payment_trends cannot be null');
        }
        $this->container['monthly_payment_trends'] = $monthly_payment_trends;

        return $this;
    }

    /**
     * Gets industry_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsIndustryPaymentTrends|null
     */
    public function getIndustryPaymentTrends()
    {
        return $this->container['industry_payment_trends'];
    }

    /**
     * Sets industry_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsIndustryPaymentTrends|null $industry_payment_trends industry_payment_trends
     *
     * @return self
     */
    public function setIndustryPaymentTrends($industry_payment_trends)
    {
        if (is_null($industry_payment_trends)) {
            throw new \InvalidArgumentException('non-nullable industry_payment_trends cannot be null');
        }
        $this->container['industry_payment_trends'] = $industry_payment_trends;

        return $this;
    }

    /**
     * Gets quarterly_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]|null
     */
    public function getQuarterlyPaymentTrends()
    {
        return $this->container['quarterly_payment_trends'];
    }

    /**
     * Sets quarterly_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]|null $quarterly_payment_trends Snapshot of key performance metrics and trade balance for the last 5 quarters; current and 4 previous
     *
     * @return self
     */
    public function setQuarterlyPaymentTrends($quarterly_payment_trends)
    {
        if (is_null($quarterly_payment_trends)) {
            throw new \InvalidArgumentException('non-nullable quarterly_payment_trends cannot be null');
        }
        $this->container['quarterly_payment_trends'] = $quarterly_payment_trends;

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
     * Gets tax_lien_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]|null
     */
    public function getTaxLienDetail()
    {
        return $this->container['tax_lien_detail'];
    }

    /**
     * Sets tax_lien_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]|null $tax_lien_detail Array containing details of tax liens filed by the business
     *
     * @return self
     */
    public function setTaxLienDetail($tax_lien_detail)
    {
        if (is_null($tax_lien_detail)) {
            throw new \InvalidArgumentException('non-nullable tax_lien_detail cannot be null');
        }
        $this->container['tax_lien_detail'] = $tax_lien_detail;

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
     * Gets ucc_filings_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsUccFilingsSummary|null
     */
    public function getUccFilingsSummary()
    {
        return $this->container['ucc_filings_summary'];
    }

    /**
     * Sets ucc_filings_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsUccFilingsSummary|null $ucc_filings_summary ucc_filings_summary
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
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]|null $ucc_filings_detail Array containing details of judgments filed by the business
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
     * Gets executive_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]|null
     */
    public function getExecutiveInformation()
    {
        return $this->container['executive_information'];
    }

    /**
     * Sets executive_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]|null $executive_information Key company contacts including owners, officers, and directors
     *
     * @return self
     */
    public function setExecutiveInformation($executive_information)
    {
        if (is_null($executive_information)) {
            throw new \InvalidArgumentException('non-nullable executive_information cannot be null');
        }
        $this->container['executive_information'] = $executive_information;

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
     * Gets corporate_linkage
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkage[]|null
     */
    public function getCorporateLinkage()
    {
        return $this->container['corporate_linkage'];
    }

    /**
     * Sets corporate_linkage
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkage[]|null $corporate_linkage Returns the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true
     *
     * @return self
     */
    public function setCorporateLinkage($corporate_linkage)
    {
        if (is_null($corporate_linkage)) {
            throw new \InvalidArgumentException('non-nullable corporate_linkage cannot be null');
        }
        $this->container['corporate_linkage'] = $corporate_linkage;

        return $this;
    }

    /**
     * Gets commercial_fraud_shield_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary|null
     */
    public function getCommercialFraudShieldSummary()
    {
        return $this->container['commercial_fraud_shield_summary'];
    }

    /**
     * Sets commercial_fraud_shield_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialFraudShieldSummary|null $commercial_fraud_shield_summary commercial_fraud_shield_summary
     *
     * @return self
     */
    public function setCommercialFraudShieldSummary($commercial_fraud_shield_summary)
    {
        if (is_null($commercial_fraud_shield_summary)) {
            throw new \InvalidArgumentException('non-nullable commercial_fraud_shield_summary cannot be null');
        }
        $this->container['commercial_fraud_shield_summary'] = $commercial_fraud_shield_summary;

        return $this;
    }

    /**
     * Gets expanded_credit_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummary|null
     */
    public function getExpandedCreditSummary()
    {
        return $this->container['expanded_credit_summary'];
    }

    /**
     * Sets expanded_credit_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummary|null $expanded_credit_summary expanded_credit_summary
     *
     * @return self
     */
    public function setExpandedCreditSummary($expanded_credit_summary)
    {
        if (is_null($expanded_credit_summary)) {
            throw new \InvalidArgumentException('non-nullable expanded_credit_summary cannot be null');
        }
        $this->container['expanded_credit_summary'] = $expanded_credit_summary;

        return $this;
    }

    /**
     * Gets executive_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummary|null
     */
    public function getExecutiveSummary()
    {
        return $this->container['executive_summary'];
    }

    /**
     * Sets executive_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummary|null $executive_summary executive_summary
     *
     * @return self
     */
    public function setExecutiveSummary($executive_summary)
    {
        if (is_null($executive_summary)) {
            throw new \InvalidArgumentException('non-nullable executive_summary cannot be null');
        }
        $this->container['executive_summary'] = $executive_summary;

        return $this;
    }

    /**
     * Gets inquiries
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Inquiries[]|null
     */
    public function getInquiries()
    {
        return $this->container['inquiries'];
    }

    /**
     * Sets inquiries
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Inquiries[]|null $inquiries Array containing inquiry information
     *
     * @return self
     */
    public function setInquiries($inquiries)
    {
        if (is_null($inquiries)) {
            throw new \InvalidArgumentException('non-nullable inquiries cannot be null');
        }
        $this->container['inquiries'] = $inquiries;

        return $this;
    }

    /**
     * Gets competitors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Competitors[]|null
     */
    public function getCompetitors()
    {
        return $this->container['competitors'];
    }

    /**
     * Sets competitors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Competitors[]|null $competitors Array containing Competitor information
     *
     * @return self
     */
    public function setCompetitors($competitors)
    {
        if (is_null($competitors)) {
            throw new \InvalidArgumentException('non-nullable competitors cannot be null');
        }
        $this->container['competitors'] = $competitors;

        return $this;
    }

    /**
     * Gets proprietor_name_and_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ProprietorNameAndAddress[]|null
     */
    public function getProprietorNameAndAddress()
    {
        return $this->container['proprietor_name_and_address'];
    }

    /**
     * Sets proprietor_name_and_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ProprietorNameAndAddress[]|null $proprietor_name_and_address Object containing Proprietor Information
     *
     * @return self
     */
    public function setProprietorNameAndAddress($proprietor_name_and_address)
    {
        if (is_null($proprietor_name_and_address)) {
            throw new \InvalidArgumentException('non-nullable proprietor_name_and_address cannot be null');
        }
        $this->container['proprietor_name_and_address'] = $proprietor_name_and_address;

        return $this;
    }

    /**
     * Gets ucc_co_debtors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\UccCoDebtors[]|null
     */
    public function getUccCoDebtors()
    {
        return $this->container['ucc_co_debtors'];
    }

    /**
     * Sets ucc_co_debtors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\UccCoDebtors[]|null $ucc_co_debtors Array containing UCCCoDebtor information
     *
     * @return self
     */
    public function setUccCoDebtors($ucc_co_debtors)
    {
        if (is_null($ucc_co_debtors)) {
            throw new \InvalidArgumentException('non-nullable ucc_co_debtors cannot be null');
        }
        $this->container['ucc_co_debtors'] = $ucc_co_debtors;

        return $this;
    }

    /**
     * Gets sic_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]|null
     */
    public function getSicCodes()
    {
        return $this->container['sic_codes'];
    }

    /**
     * Sets sic_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]|null $sic_codes Array of objects representing SIC codes for the business each with a code and description
     *
     * @return self
     */
    public function setSicCodes($sic_codes)
    {
        if (is_null($sic_codes)) {
            throw new \InvalidArgumentException('non-nullable sic_codes cannot be null');
        }
        $this->container['sic_codes'] = $sic_codes;

        return $this;
    }

    /**
     * Gets naics_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]|null
     */
    public function getNaicsCodes()
    {
        return $this->container['naics_codes'];
    }

    /**
     * Sets naics_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]|null $naics_codes Array of objects representing NAICS codes for the business each with a code and description
     *
     * @return self
     */
    public function setNaicsCodes($naics_codes)
    {
        if (is_null($naics_codes)) {
            throw new \InvalidArgumentException('non-nullable naics_codes cannot be null');
        }
        $this->container['naics_codes'] = $naics_codes;

        return $this;
    }

    /**
     * Gets score_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformation|null
     */
    public function getScoreInformation()
    {
        return $this->container['score_information'];
    }

    /**
     * Sets score_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformation|null $score_information score_information
     *
     * @return self
     */
    public function setScoreInformation($score_information)
    {
        if (is_null($score_information)) {
            throw new \InvalidArgumentException('non-nullable score_information cannot be null');
        }
        $this->container['score_information'] = $score_information;

        return $this;
    }

    /**
     * Gets stock_exchange
     *
     * @return string|null
     */
    public function getStockExchange()
    {
        return $this->container['stock_exchange'];
    }

    /**
     * Sets stock_exchange
     *
     * @param string|null $stock_exchange What stock exchange the stock is offered on (e.g. New York Stock Exchange)
     *
     * @return self
     */
    public function setStockExchange($stock_exchange)
    {
        if (is_null($stock_exchange)) {
            throw new \InvalidArgumentException('non-nullable stock_exchange cannot be null');
        }
        $this->container['stock_exchange'] = $stock_exchange;

        return $this;
    }

    /**
     * Gets fortune1000
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Fortune1000[]|null
     */
    public function getFortune1000()
    {
        return $this->container['fortune1000'];
    }

    /**
     * Sets fortune1000
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Fortune1000[]|null $fortune1000 Array representing if the business was listed on the fortune 1000 list in the past 3 years (if not ever listed the value will be null)
     *
     * @return self
     */
    public function setFortune1000($fortune1000)
    {
        if (is_null($fortune1000)) {
            throw new \InvalidArgumentException('non-nullable fortune1000 cannot be null');
        }
        $this->container['fortune1000'] = $fortune1000;

        return $this;
    }

    /**
     * Gets enhanced_business_description
     *
     * @return string|null
     */
    public function getEnhancedBusinessDescription()
    {
        return $this->container['enhanced_business_description'];
    }

    /**
     * Sets enhanced_business_description
     *
     * @param string|null $enhanced_business_description Provides a detailed description of the business and its operations
     *
     * @return self
     */
    public function setEnhancedBusinessDescription($enhanced_business_description)
    {
        if (is_null($enhanced_business_description)) {
            throw new \InvalidArgumentException('non-nullable enhanced_business_description cannot be null');
        }
        $this->container['enhanced_business_description'] = $enhanced_business_description;

        return $this;
    }

    /**
     * Gets corporate_financial_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateFinancialInformation|null
     */
    public function getCorporateFinancialInformation()
    {
        return $this->container['corporate_financial_information'];
    }

    /**
     * Sets corporate_financial_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateFinancialInformation|null $corporate_financial_information corporate_financial_information
     *
     * @return self
     */
    public function setCorporateFinancialInformation($corporate_financial_information)
    {
        if (is_null($corporate_financial_information)) {
            throw new \InvalidArgumentException('non-nullable corporate_financial_information cannot be null');
        }
        $this->container['corporate_financial_information'] = $corporate_financial_information;

        return $this;
    }

    /**
     * Gets consumer_statement
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ConsumerStatement[]|null
     */
    public function getConsumerStatement()
    {
        return $this->container['consumer_statement'];
    }

    /**
     * Sets consumer_statement
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ConsumerStatement[]|null $consumer_statement Array containing Consumer Statement information
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
     * Gets commercial_government_entity_code
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialGovernmentEntityCode|null
     */
    public function getCommercialGovernmentEntityCode()
    {
        return $this->container['commercial_government_entity_code'];
    }

    /**
     * Sets commercial_government_entity_code
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialGovernmentEntityCode|null $commercial_government_entity_code commercial_government_entity_code
     *
     * @return self
     */
    public function setCommercialGovernmentEntityCode($commercial_government_entity_code)
    {
        if (is_null($commercial_government_entity_code)) {
            throw new \InvalidArgumentException('non-nullable commercial_government_entity_code cannot be null');
        }
        $this->container['commercial_government_entity_code'] = $commercial_government_entity_code;

        return $this;
    }

    /**
     * Gets economic_diversity
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\EconomicDiversity|null
     */
    public function getEconomicDiversity()
    {
        return $this->container['economic_diversity'];
    }

    /**
     * Sets economic_diversity
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\EconomicDiversity|null $economic_diversity economic_diversity
     *
     * @return self
     */
    public function setEconomicDiversity($economic_diversity)
    {
        if (is_null($economic_diversity)) {
            throw new \InvalidArgumentException('non-nullable economic_diversity cannot be null');
        }
        $this->container['economic_diversity'] = $economic_diversity;

        return $this;
    }

    /**
     * Gets government_activity
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentActivity|null
     */
    public function getGovernmentActivity()
    {
        return $this->container['government_activity'];
    }

    /**
     * Sets government_activity
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentActivity|null $government_activity government_activity
     *
     * @return self
     */
    public function setGovernmentActivity($government_activity)
    {
        if (is_null($government_activity)) {
            throw new \InvalidArgumentException('non-nullable government_activity cannot be null');
        }
        $this->container['government_activity'] = $government_activity;

        return $this;
    }

    /**
     * Gets contract_spending_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingSummary|null
     */
    public function getContractSpendingSummary()
    {
        return $this->container['contract_spending_summary'];
    }

    /**
     * Sets contract_spending_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingSummary|null $contract_spending_summary contract_spending_summary
     *
     * @return self
     */
    public function setContractSpendingSummary($contract_spending_summary)
    {
        if (is_null($contract_spending_summary)) {
            throw new \InvalidArgumentException('non-nullable contract_spending_summary cannot be null');
        }
        $this->container['contract_spending_summary'] = $contract_spending_summary;

        return $this;
    }

    /**
     * Gets contract_spending_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingDetail[]|null
     */
    public function getContractSpendingDetail()
    {
        return $this->container['contract_spending_detail'];
    }

    /**
     * Sets contract_spending_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingDetail[]|null $contract_spending_detail Array containing Contract Spending Detail information
     *
     * @return self
     */
    public function setContractSpendingDetail($contract_spending_detail)
    {
        if (is_null($contract_spending_detail)) {
            throw new \InvalidArgumentException('non-nullable contract_spending_detail cannot be null');
        }
        $this->container['contract_spending_detail'] = $contract_spending_detail;

        return $this;
    }

    /**
     * Gets leasing_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResult[]|null
     */
    public function getLeasingInformation()
    {
        return $this->container['leasing_information'];
    }

    /**
     * Sets leasing_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResult[]|null $leasing_information Array containing Leasing information
     *
     * @return self
     */
    public function setLeasingInformation($leasing_information)
    {
        if (is_null($leasing_information)) {
            throw new \InvalidArgumentException('non-nullable leasing_information cannot be null');
        }
        $this->container['leasing_information'] = $leasing_information;

        return $this;
    }

    /**
     * Gets license_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LicenseDetailsResult[]|null
     */
    public function getLicenseDetails()
    {
        return $this->container['license_details'];
    }

    /**
     * Sets license_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LicenseDetailsResult[]|null $license_details Array containing license Details
     *
     * @return self
     */
    public function setLicenseDetails($license_details)
    {
        if (is_null($license_details)) {
            throw new \InvalidArgumentException('non-nullable license_details cannot be null');
        }
        $this->container['license_details'] = $license_details;

        return $this;
    }

    /**
     * Gets bond_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsBondDetails[]|null
     */
    public function getBondDetails()
    {
        return $this->container['bond_details'];
    }

    /**
     * Sets bond_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsBondDetails[]|null $bond_details Bond details
     *
     * @return self
     */
    public function setBondDetails($bond_details)
    {
        if (is_null($bond_details)) {
            throw new \InvalidArgumentException('non-nullable bond_details cannot be null');
        }
        $this->container['bond_details'] = $bond_details;

        return $this;
    }

    /**
     * Gets insurance_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsInsuranceDetails[]|null
     */
    public function getInsuranceDetails()
    {
        return $this->container['insurance_details'];
    }

    /**
     * Sets insurance_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsInsuranceDetails[]|null $insurance_details Insurance Details
     *
     * @return self
     */
    public function setInsuranceDetails($insurance_details)
    {
        if (is_null($insurance_details)) {
            throw new \InvalidArgumentException('non-nullable insurance_details cannot be null');
        }
        $this->container['insurance_details'] = $insurance_details;

        return $this;
    }

    /**
     * Gets stocks
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsStocks|null
     */
    public function getStocks()
    {
        return $this->container['stocks'];
    }

    /**
     * Sets stocks
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsStocks|null $stocks stocks
     *
     * @return self
     */
    public function setStocks($stocks)
    {
        if (is_null($stocks)) {
            throw new \InvalidArgumentException('non-nullable stocks cannot be null');
        }
        $this->container['stocks'] = $stocks;

        return $this;
    }

    /**
     * Gets commercial_bank_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsCommercialBankInformation[]|null
     */
    public function getCommercialBankInformation()
    {
        return $this->container['commercial_bank_information'];
    }

    /**
     * Sets commercial_bank_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseAllOfResultsCommercialBankInformation[]|null $commercial_bank_information Commercial banking information
     *
     * @return self
     */
    public function setCommercialBankInformation($commercial_bank_information)
    {
        if (is_null($commercial_bank_information)) {
            throw new \InvalidArgumentException('non-nullable commercial_bank_information cannot be null');
        }
        $this->container['commercial_bank_information'] = $commercial_bank_information;

        return $this;
    }

    /**
     * Gets aggregates
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates|null
     */
    public function getAggregates()
    {
        return $this->container['aggregates'];
    }

    /**
     * Sets aggregates
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates|null $aggregates aggregates
     *
     * @return self
     */
    public function setAggregates($aggregates)
    {
        if (is_null($aggregates)) {
            throw new \InvalidArgumentException('non-nullable aggregates cannot be null');
        }
        $this->container['aggregates'] = $aggregates;

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


