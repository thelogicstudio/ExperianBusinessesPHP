<?php
/**
 * PremierProfilesResponseResults
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
 * PremierProfilesResponseResults Class Doc Comment
 *
 * @category Class
 * @description Results
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PremierProfilesResponseResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PremierProfilesResponse_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collections_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]',
        'trade_payment_experiences' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]',
        'additional_payment_experiences' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]',
        'payment_totals' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PaymentTotalsResult',
        'monthly_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]',
        'industry_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsIndustryPaymentTrends',
        'quarterly_payment_trends' => '\TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]',
        'bankruptcy_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BankruptcyDetail[]',
        'tax_lien_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]',
        'judgment_detail' => '\TheLogicStudio\ExperianBusinessesPHP\Model\JudgmentDetail[]',
        'ucc_filings_summary' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsUccFilingsSummary',
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
        'bond_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsBondDetails[]',
        'insurance_details' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsInsuranceDetails[]',
        'stocks' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsStocks',
        'commercial_bank_information' => '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsCommercialBankInformation[]',
        'aggregates' => '\TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
        $this->container['collections_detail'] = isset($data['collections_detail']) ? $data['collections_detail'] : null;
        $this->container['trade_payment_experiences'] = isset($data['trade_payment_experiences']) ? $data['trade_payment_experiences'] : null;
        $this->container['additional_payment_experiences'] = isset($data['additional_payment_experiences']) ? $data['additional_payment_experiences'] : null;
        $this->container['payment_totals'] = isset($data['payment_totals']) ? $data['payment_totals'] : null;
        $this->container['monthly_payment_trends'] = isset($data['monthly_payment_trends']) ? $data['monthly_payment_trends'] : null;
        $this->container['industry_payment_trends'] = isset($data['industry_payment_trends']) ? $data['industry_payment_trends'] : null;
        $this->container['quarterly_payment_trends'] = isset($data['quarterly_payment_trends']) ? $data['quarterly_payment_trends'] : null;
        $this->container['bankruptcy_detail'] = isset($data['bankruptcy_detail']) ? $data['bankruptcy_detail'] : null;
        $this->container['tax_lien_detail'] = isset($data['tax_lien_detail']) ? $data['tax_lien_detail'] : null;
        $this->container['judgment_detail'] = isset($data['judgment_detail']) ? $data['judgment_detail'] : null;
        $this->container['ucc_filings_summary'] = isset($data['ucc_filings_summary']) ? $data['ucc_filings_summary'] : null;
        $this->container['ucc_filings_detail'] = isset($data['ucc_filings_detail']) ? $data['ucc_filings_detail'] : null;
        $this->container['corporate_registration'] = isset($data['corporate_registration']) ? $data['corporate_registration'] : null;
        $this->container['executive_information'] = isset($data['executive_information']) ? $data['executive_information'] : null;
        $this->container['business_facts'] = isset($data['business_facts']) ? $data['business_facts'] : null;
        $this->container['corporate_linkage'] = isset($data['corporate_linkage']) ? $data['corporate_linkage'] : null;
        $this->container['commercial_fraud_shield_summary'] = isset($data['commercial_fraud_shield_summary']) ? $data['commercial_fraud_shield_summary'] : null;
        $this->container['expanded_credit_summary'] = isset($data['expanded_credit_summary']) ? $data['expanded_credit_summary'] : null;
        $this->container['executive_summary'] = isset($data['executive_summary']) ? $data['executive_summary'] : null;
        $this->container['inquiries'] = isset($data['inquiries']) ? $data['inquiries'] : null;
        $this->container['competitors'] = isset($data['competitors']) ? $data['competitors'] : null;
        $this->container['proprietor_name_and_address'] = isset($data['proprietor_name_and_address']) ? $data['proprietor_name_and_address'] : null;
        $this->container['ucc_co_debtors'] = isset($data['ucc_co_debtors']) ? $data['ucc_co_debtors'] : null;
        $this->container['sic_codes'] = isset($data['sic_codes']) ? $data['sic_codes'] : null;
        $this->container['naics_codes'] = isset($data['naics_codes']) ? $data['naics_codes'] : null;
        $this->container['score_information'] = isset($data['score_information']) ? $data['score_information'] : null;
        $this->container['stock_exchange'] = isset($data['stock_exchange']) ? $data['stock_exchange'] : null;
        $this->container['fortune1000'] = isset($data['fortune1000']) ? $data['fortune1000'] : null;
        $this->container['enhanced_business_description'] = isset($data['enhanced_business_description']) ? $data['enhanced_business_description'] : null;
        $this->container['corporate_financial_information'] = isset($data['corporate_financial_information']) ? $data['corporate_financial_information'] : null;
        $this->container['consumer_statement'] = isset($data['consumer_statement']) ? $data['consumer_statement'] : null;
        $this->container['commercial_government_entity_code'] = isset($data['commercial_government_entity_code']) ? $data['commercial_government_entity_code'] : null;
        $this->container['economic_diversity'] = isset($data['economic_diversity']) ? $data['economic_diversity'] : null;
        $this->container['government_activity'] = isset($data['government_activity']) ? $data['government_activity'] : null;
        $this->container['contract_spending_summary'] = isset($data['contract_spending_summary']) ? $data['contract_spending_summary'] : null;
        $this->container['contract_spending_detail'] = isset($data['contract_spending_detail']) ? $data['contract_spending_detail'] : null;
        $this->container['leasing_information'] = isset($data['leasing_information']) ? $data['leasing_information'] : null;
        $this->container['license_details'] = isset($data['license_details']) ? $data['license_details'] : null;
        $this->container['bond_details'] = isset($data['bond_details']) ? $data['bond_details'] : null;
        $this->container['insurance_details'] = isset($data['insurance_details']) ? $data['insurance_details'] : null;
        $this->container['stocks'] = isset($data['stocks']) ? $data['stocks'] : null;
        $this->container['commercial_bank_information'] = isset($data['commercial_bank_information']) ? $data['commercial_bank_information'] : null;
        $this->container['aggregates'] = isset($data['aggregates']) ? $data['aggregates'] : null;
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
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[]
     */
    public function getCollectionsDetail()
    {
        return $this->container['collections_detail'];
    }

    /**
     * Sets collections_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsDetailResult[] $collections_detail Array containing details of collections on file for business
     *
     * @return $this
     */
    public function setCollectionsDetail($collections_detail)
    {
        $this->container['collections_detail'] = $collections_detail;

        return $this;
    }

    /**
     * Gets trade_payment_experiences
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]
     */
    public function getTradePaymentExperiences()
    {
        return $this->container['trade_payment_experiences'];
    }

    /**
     * Sets trade_payment_experiences
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[] $trade_payment_experiences Array containing details of all trade payment experiences on file for the business
     *
     * @return $this
     */
    public function setTradePaymentExperiences($trade_payment_experiences)
    {
        $this->container['trade_payment_experiences'] = $trade_payment_experiences;

        return $this;
    }

    /**
     * Gets additional_payment_experiences
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[]
     */
    public function getAdditionalPaymentExperiences()
    {
        return $this->container['additional_payment_experiences'];
    }

    /**
     * Sets additional_payment_experiences
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentExperiencesResult[] $additional_payment_experiences Array containing additional trade payment experiences
     *
     * @return $this
     */
    public function setAdditionalPaymentExperiences($additional_payment_experiences)
    {
        $this->container['additional_payment_experiences'] = $additional_payment_experiences;

        return $this;
    }

    /**
     * Gets payment_totals
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PaymentTotalsResult
     */
    public function getPaymentTotals()
    {
        return $this->container['payment_totals'];
    }

    /**
     * Sets payment_totals
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PaymentTotalsResult $payment_totals Object that contains trade payment total counts for different types of trades
     *
     * @return $this
     */
    public function setPaymentTotals($payment_totals)
    {
        $this->container['payment_totals'] = $payment_totals;

        return $this;
    }

    /**
     * Gets monthly_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]
     */
    public function getMonthlyPaymentTrends()
    {
        return $this->container['monthly_payment_trends'];
    }

    /**
     * Sets monthly_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[] $monthly_payment_trends Snapshot of key performance metrics and trade balances for the last 6 months; current and 6 previous
     *
     * @return $this
     */
    public function setMonthlyPaymentTrends($monthly_payment_trends)
    {
        $this->container['monthly_payment_trends'] = $monthly_payment_trends;

        return $this;
    }

    /**
     * Gets industry_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsIndustryPaymentTrends
     */
    public function getIndustryPaymentTrends()
    {
        return $this->container['industry_payment_trends'];
    }

    /**
     * Sets industry_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsIndustryPaymentTrends $industry_payment_trends industry_payment_trends
     *
     * @return $this
     */
    public function setIndustryPaymentTrends($industry_payment_trends)
    {
        $this->container['industry_payment_trends'] = $industry_payment_trends;

        return $this;
    }

    /**
     * Gets quarterly_payment_trends
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[]
     */
    public function getQuarterlyPaymentTrends()
    {
        return $this->container['quarterly_payment_trends'];
    }

    /**
     * Sets quarterly_payment_trends
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\TradePaymentTrend[] $quarterly_payment_trends Snapshot of key performance metrics and trade balance for the last 5 quarters; current and 4 previous
     *
     * @return $this
     */
    public function setQuarterlyPaymentTrends($quarterly_payment_trends)
    {
        $this->container['quarterly_payment_trends'] = $quarterly_payment_trends;

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
     * Gets tax_lien_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[]
     */
    public function getTaxLienDetail()
    {
        return $this->container['tax_lien_detail'];
    }

    /**
     * Sets tax_lien_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LienDetail[] $tax_lien_detail Array containing details of tax liens filed by the business
     *
     * @return $this
     */
    public function setTaxLienDetail($tax_lien_detail)
    {
        $this->container['tax_lien_detail'] = $tax_lien_detail;

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
     * Gets ucc_filings_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsUccFilingsSummary
     */
    public function getUccFilingsSummary()
    {
        return $this->container['ucc_filings_summary'];
    }

    /**
     * Sets ucc_filings_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsUccFilingsSummary $ucc_filings_summary ucc_filings_summary
     *
     * @return $this
     */
    public function setUccFilingsSummary($ucc_filings_summary)
    {
        $this->container['ucc_filings_summary'] = $ucc_filings_summary;

        return $this;
    }

    /**
     * Gets ucc_filings_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[]
     */
    public function getUccFilingsDetail()
    {
        return $this->container['ucc_filings_detail'];
    }

    /**
     * Sets ucc_filings_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetail[] $ucc_filings_detail Array containing details of judgments filed by the business
     *
     * @return $this
     */
    public function setUccFilingsDetail($ucc_filings_detail)
    {
        $this->container['ucc_filings_detail'] = $ucc_filings_detail;

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
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResult $corporate_registration Object containing Corporate Registration information
     *
     * @return $this
     */
    public function setCorporateRegistration($corporate_registration)
    {
        $this->container['corporate_registration'] = $corporate_registration;

        return $this;
    }

    /**
     * Gets executive_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]
     */
    public function getExecutiveInformation()
    {
        return $this->container['executive_information'];
    }

    /**
     * Sets executive_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[] $executive_information Key company contacts including owners, officers, and directors
     *
     * @return $this
     */
    public function setExecutiveInformation($executive_information)
    {
        $this->container['executive_information'] = $executive_information;

        return $this;
    }

    /**
     * Gets business_facts
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts
     */
    public function getBusinessFacts()
    {
        return $this->container['business_facts'];
    }

    /**
     * Sets business_facts
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFacts $business_facts An in-depth look at the business, including how long the business has been in operation, other legal names under which the business operates, firmographics, and more information
     *
     * @return $this
     */
    public function setBusinessFacts($business_facts)
    {
        $this->container['business_facts'] = $business_facts;

        return $this;
    }

    /**
     * Gets corporate_linkage
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkage[]
     */
    public function getCorporateLinkage()
    {
        return $this->container['corporate_linkage'];
    }

    /**
     * Sets corporate_linkage
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkage[] $corporate_linkage Returns the Ultimate Parent, the immediate Parent/Headquarters, up to 10 Subsidiaries, and up to 10 branches. If additional data is available, the returnLimitExceeded indicator will be true
     *
     * @return $this
     */
    public function setCorporateLinkage($corporate_linkage)
    {
        $this->container['corporate_linkage'] = $corporate_linkage;

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
     * Gets expanded_credit_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummary
     */
    public function getExpandedCreditSummary()
    {
        return $this->container['expanded_credit_summary'];
    }

    /**
     * Sets expanded_credit_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExpandedCreditSummary $expanded_credit_summary Object containing Expanded Credit Summary
     *
     * @return $this
     */
    public function setExpandedCreditSummary($expanded_credit_summary)
    {
        $this->container['expanded_credit_summary'] = $expanded_credit_summary;

        return $this;
    }

    /**
     * Gets executive_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummary
     */
    public function getExecutiveSummary()
    {
        return $this->container['executive_summary'];
    }

    /**
     * Sets executive_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveSummary $executive_summary Object containing Expanded Credit Summary
     *
     * @return $this
     */
    public function setExecutiveSummary($executive_summary)
    {
        $this->container['executive_summary'] = $executive_summary;

        return $this;
    }

    /**
     * Gets inquiries
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Inquiries[]
     */
    public function getInquiries()
    {
        return $this->container['inquiries'];
    }

    /**
     * Sets inquiries
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Inquiries[] $inquiries Array containing inquiry information
     *
     * @return $this
     */
    public function setInquiries($inquiries)
    {
        $this->container['inquiries'] = $inquiries;

        return $this;
    }

    /**
     * Gets competitors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Competitors[]
     */
    public function getCompetitors()
    {
        return $this->container['competitors'];
    }

    /**
     * Sets competitors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Competitors[] $competitors Array containing Competitor information
     *
     * @return $this
     */
    public function setCompetitors($competitors)
    {
        $this->container['competitors'] = $competitors;

        return $this;
    }

    /**
     * Gets proprietor_name_and_address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ProprietorNameAndAddress[]
     */
    public function getProprietorNameAndAddress()
    {
        return $this->container['proprietor_name_and_address'];
    }

    /**
     * Sets proprietor_name_and_address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ProprietorNameAndAddress[] $proprietor_name_and_address Object containing Proprietor Information
     *
     * @return $this
     */
    public function setProprietorNameAndAddress($proprietor_name_and_address)
    {
        $this->container['proprietor_name_and_address'] = $proprietor_name_and_address;

        return $this;
    }

    /**
     * Gets ucc_co_debtors
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\UccCoDebtors[]
     */
    public function getUccCoDebtors()
    {
        return $this->container['ucc_co_debtors'];
    }

    /**
     * Sets ucc_co_debtors
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\UccCoDebtors[] $ucc_co_debtors Array containing UCCCoDebtor information
     *
     * @return $this
     */
    public function setUccCoDebtors($ucc_co_debtors)
    {
        $this->container['ucc_co_debtors'] = $ucc_co_debtors;

        return $this;
    }

    /**
     * Gets sic_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]
     */
    public function getSicCodes()
    {
        return $this->container['sic_codes'];
    }

    /**
     * Sets sic_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[] $sic_codes Array of objects representing SIC codes for the business each with a code and description
     *
     * @return $this
     */
    public function setSicCodes($sic_codes)
    {
        $this->container['sic_codes'] = $sic_codes;

        return $this;
    }

    /**
     * Gets naics_codes
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]
     */
    public function getNaicsCodes()
    {
        return $this->container['naics_codes'];
    }

    /**
     * Sets naics_codes
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[] $naics_codes Array of objects representing NAICS codes for the business each with a code and description
     *
     * @return $this
     */
    public function setNaicsCodes($naics_codes)
    {
        $this->container['naics_codes'] = $naics_codes;

        return $this;
    }

    /**
     * Gets score_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformation
     */
    public function getScoreInformation()
    {
        return $this->container['score_information'];
    }

    /**
     * Sets score_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ScoreInformation $score_information Object containing Score Information
     *
     * @return $this
     */
    public function setScoreInformation($score_information)
    {
        $this->container['score_information'] = $score_information;

        return $this;
    }

    /**
     * Gets stock_exchange
     *
     * @return string
     */
    public function getStockExchange()
    {
        return $this->container['stock_exchange'];
    }

    /**
     * Sets stock_exchange
     *
     * @param string $stock_exchange What stock exchange the stock is offered on (e.g. New York Stock Exchange)
     *
     * @return $this
     */
    public function setStockExchange($stock_exchange)
    {
        $this->container['stock_exchange'] = $stock_exchange;

        return $this;
    }

    /**
     * Gets fortune1000
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\Fortune1000[]
     */
    public function getFortune1000()
    {
        return $this->container['fortune1000'];
    }

    /**
     * Sets fortune1000
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\Fortune1000[] $fortune1000 Array representing if the business was listed on the fortune 1000 list in the past 3 years (if not ever listed the value will be null)
     *
     * @return $this
     */
    public function setFortune1000($fortune1000)
    {
        $this->container['fortune1000'] = $fortune1000;

        return $this;
    }

    /**
     * Gets enhanced_business_description
     *
     * @return string
     */
    public function getEnhancedBusinessDescription()
    {
        return $this->container['enhanced_business_description'];
    }

    /**
     * Sets enhanced_business_description
     *
     * @param string $enhanced_business_description Provides a detailed description of the business and its operations
     *
     * @return $this
     */
    public function setEnhancedBusinessDescription($enhanced_business_description)
    {
        $this->container['enhanced_business_description'] = $enhanced_business_description;

        return $this;
    }

    /**
     * Gets corporate_financial_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateFinancialInformation
     */
    public function getCorporateFinancialInformation()
    {
        return $this->container['corporate_financial_information'];
    }

    /**
     * Sets corporate_financial_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateFinancialInformation $corporate_financial_information Corporate Financial Information provides objective data on the financial health of the business if it is a publicly held company
     *
     * @return $this
     */
    public function setCorporateFinancialInformation($corporate_financial_information)
    {
        $this->container['corporate_financial_information'] = $corporate_financial_information;

        return $this;
    }

    /**
     * Gets consumer_statement
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ConsumerStatement[]
     */
    public function getConsumerStatement()
    {
        return $this->container['consumer_statement'];
    }

    /**
     * Sets consumer_statement
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ConsumerStatement[] $consumer_statement Array containing Consumer Statement information
     *
     * @return $this
     */
    public function setConsumerStatement($consumer_statement)
    {
        $this->container['consumer_statement'] = $consumer_statement;

        return $this;
    }

    /**
     * Gets commercial_government_entity_code
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialGovernmentEntityCode
     */
    public function getCommercialGovernmentEntityCode()
    {
        return $this->container['commercial_government_entity_code'];
    }

    /**
     * Sets commercial_government_entity_code
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\CommercialGovernmentEntityCode $commercial_government_entity_code Object containing Commercial Government Entity Code information
     *
     * @return $this
     */
    public function setCommercialGovernmentEntityCode($commercial_government_entity_code)
    {
        $this->container['commercial_government_entity_code'] = $commercial_government_entity_code;

        return $this;
    }

    /**
     * Gets economic_diversity
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\EconomicDiversity
     */
    public function getEconomicDiversity()
    {
        return $this->container['economic_diversity'];
    }

    /**
     * Sets economic_diversity
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\EconomicDiversity $economic_diversity Object containing Economic Diversity information
     *
     * @return $this
     */
    public function setEconomicDiversity($economic_diversity)
    {
        $this->container['economic_diversity'] = $economic_diversity;

        return $this;
    }

    /**
     * Gets government_activity
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentActivity
     */
    public function getGovernmentActivity()
    {
        return $this->container['government_activity'];
    }

    /**
     * Sets government_activity
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentActivity $government_activity Object containing Government Activity information
     *
     * @return $this
     */
    public function setGovernmentActivity($government_activity)
    {
        $this->container['government_activity'] = $government_activity;

        return $this;
    }

    /**
     * Gets contract_spending_summary
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingSummary
     */
    public function getContractSpendingSummary()
    {
        return $this->container['contract_spending_summary'];
    }

    /**
     * Sets contract_spending_summary
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingSummary $contract_spending_summary Object containing Contract Spending Summary information
     *
     * @return $this
     */
    public function setContractSpendingSummary($contract_spending_summary)
    {
        $this->container['contract_spending_summary'] = $contract_spending_summary;

        return $this;
    }

    /**
     * Gets contract_spending_detail
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingDetail[]
     */
    public function getContractSpendingDetail()
    {
        return $this->container['contract_spending_detail'];
    }

    /**
     * Sets contract_spending_detail
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\ContractSpendingDetail[] $contract_spending_detail Array containing Contract Spending Detail information
     *
     * @return $this
     */
    public function setContractSpendingDetail($contract_spending_detail)
    {
        $this->container['contract_spending_detail'] = $contract_spending_detail;

        return $this;
    }

    /**
     * Gets leasing_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResult[]
     */
    public function getLeasingInformation()
    {
        return $this->container['leasing_information'];
    }

    /**
     * Sets leasing_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResult[] $leasing_information Array containing Leasing information
     *
     * @return $this
     */
    public function setLeasingInformation($leasing_information)
    {
        $this->container['leasing_information'] = $leasing_information;

        return $this;
    }

    /**
     * Gets license_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LicenseDetailsResult[]
     */
    public function getLicenseDetails()
    {
        return $this->container['license_details'];
    }

    /**
     * Sets license_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LicenseDetailsResult[] $license_details Array containing license Details
     *
     * @return $this
     */
    public function setLicenseDetails($license_details)
    {
        $this->container['license_details'] = $license_details;

        return $this;
    }

    /**
     * Gets bond_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsBondDetails[]
     */
    public function getBondDetails()
    {
        return $this->container['bond_details'];
    }

    /**
     * Sets bond_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsBondDetails[] $bond_details Bond details
     *
     * @return $this
     */
    public function setBondDetails($bond_details)
    {
        $this->container['bond_details'] = $bond_details;

        return $this;
    }

    /**
     * Gets insurance_details
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsInsuranceDetails[]
     */
    public function getInsuranceDetails()
    {
        return $this->container['insurance_details'];
    }

    /**
     * Sets insurance_details
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsInsuranceDetails[] $insurance_details Insurance Details
     *
     * @return $this
     */
    public function setInsuranceDetails($insurance_details)
    {
        $this->container['insurance_details'] = $insurance_details;

        return $this;
    }

    /**
     * Gets stocks
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsStocks
     */
    public function getStocks()
    {
        return $this->container['stocks'];
    }

    /**
     * Sets stocks
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsStocks $stocks stocks
     *
     * @return $this
     */
    public function setStocks($stocks)
    {
        $this->container['stocks'] = $stocks;

        return $this;
    }

    /**
     * Gets commercial_bank_information
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsCommercialBankInformation[]
     */
    public function getCommercialBankInformation()
    {
        return $this->container['commercial_bank_information'];
    }

    /**
     * Sets commercial_bank_information
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponseResultsCommercialBankInformation[] $commercial_bank_information Commercial banking information
     *
     * @return $this
     */
    public function setCommercialBankInformation($commercial_bank_information)
    {
        $this->container['commercial_bank_information'] = $commercial_bank_information;

        return $this;
    }

    /**
     * Gets aggregates
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates
     */
    public function getAggregates()
    {
        return $this->container['aggregates'];
    }

    /**
     * Sets aggregates
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\BizAggregates $aggregates Object containing business aggregates (BizAggs)
     *
     * @return $this
     */
    public function setAggregates($aggregates)
    {
        $this->container['aggregates'] = $aggregates;

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


