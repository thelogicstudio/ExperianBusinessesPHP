<?php
/**
 * CorporateFinancialInformationBalanceSheets
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
 * CorporateFinancialInformationBalanceSheets Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CorporateFinancialInformationBalanceSheets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'corporateFinancialInformation_balanceSheets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'year_end' => 'float',
        'cash_and_equivalent' => 'float',
        'receivables_net' => 'float',
        'inventory' => 'float',
        'other_current_assets' => 'float',
        'total_current_assets' => 'float',
        'fixed_assets' => 'float',
        'investments' => 'float',
        'other_assets' => 'float',
        'total_assets' => 'float',
        'debt_due_in1_year' => 'float',
        'notes_payable' => 'float',
        'accounts_payable' => 'float',
        'taxes_payable' => 'float',
        'other_current_liabilities' => 'float',
        'total_current_liabilities' => 'float',
        'long_term_debt' => 'float',
        'other_liabilities' => 'float',
        'net_worth' => 'float',
        'total_liabilitiesand_net_worth' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'year_end' => null,
        'cash_and_equivalent' => null,
        'receivables_net' => null,
        'inventory' => null,
        'other_current_assets' => null,
        'total_current_assets' => null,
        'fixed_assets' => null,
        'investments' => null,
        'other_assets' => null,
        'total_assets' => null,
        'debt_due_in1_year' => null,
        'notes_payable' => null,
        'accounts_payable' => null,
        'taxes_payable' => null,
        'other_current_liabilities' => null,
        'total_current_liabilities' => null,
        'long_term_debt' => null,
        'other_liabilities' => null,
        'net_worth' => null,
        'total_liabilitiesand_net_worth' => null
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
        'year_end' => 'yearEnd',
        'cash_and_equivalent' => 'cashAndEquivalent',
        'receivables_net' => 'receivablesNet',
        'inventory' => 'inventory',
        'other_current_assets' => 'otherCurrentAssets',
        'total_current_assets' => 'totalCurrentAssets',
        'fixed_assets' => 'fixedAssets',
        'investments' => 'investments',
        'other_assets' => 'otherAssets',
        'total_assets' => 'totalAssets',
        'debt_due_in1_year' => 'debtDueIn1Year',
        'notes_payable' => 'notesPayable',
        'accounts_payable' => 'accountsPayable',
        'taxes_payable' => 'taxesPayable',
        'other_current_liabilities' => 'otherCurrentLiabilities',
        'total_current_liabilities' => 'totalCurrentLiabilities',
        'long_term_debt' => 'longTermDebt',
        'other_liabilities' => 'otherLiabilities',
        'net_worth' => 'netWorth',
        'total_liabilitiesand_net_worth' => 'totalLiabilitiesandNetWorth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year_end' => 'setYearEnd',
        'cash_and_equivalent' => 'setCashAndEquivalent',
        'receivables_net' => 'setReceivablesNet',
        'inventory' => 'setInventory',
        'other_current_assets' => 'setOtherCurrentAssets',
        'total_current_assets' => 'setTotalCurrentAssets',
        'fixed_assets' => 'setFixedAssets',
        'investments' => 'setInvestments',
        'other_assets' => 'setOtherAssets',
        'total_assets' => 'setTotalAssets',
        'debt_due_in1_year' => 'setDebtDueIn1Year',
        'notes_payable' => 'setNotesPayable',
        'accounts_payable' => 'setAccountsPayable',
        'taxes_payable' => 'setTaxesPayable',
        'other_current_liabilities' => 'setOtherCurrentLiabilities',
        'total_current_liabilities' => 'setTotalCurrentLiabilities',
        'long_term_debt' => 'setLongTermDebt',
        'other_liabilities' => 'setOtherLiabilities',
        'net_worth' => 'setNetWorth',
        'total_liabilitiesand_net_worth' => 'setTotalLiabilitiesandNetWorth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year_end' => 'getYearEnd',
        'cash_and_equivalent' => 'getCashAndEquivalent',
        'receivables_net' => 'getReceivablesNet',
        'inventory' => 'getInventory',
        'other_current_assets' => 'getOtherCurrentAssets',
        'total_current_assets' => 'getTotalCurrentAssets',
        'fixed_assets' => 'getFixedAssets',
        'investments' => 'getInvestments',
        'other_assets' => 'getOtherAssets',
        'total_assets' => 'getTotalAssets',
        'debt_due_in1_year' => 'getDebtDueIn1Year',
        'notes_payable' => 'getNotesPayable',
        'accounts_payable' => 'getAccountsPayable',
        'taxes_payable' => 'getTaxesPayable',
        'other_current_liabilities' => 'getOtherCurrentLiabilities',
        'total_current_liabilities' => 'getTotalCurrentLiabilities',
        'long_term_debt' => 'getLongTermDebt',
        'other_liabilities' => 'getOtherLiabilities',
        'net_worth' => 'getNetWorth',
        'total_liabilitiesand_net_worth' => 'getTotalLiabilitiesandNetWorth'
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
        $this->container['year_end'] = isset($data['year_end']) ? $data['year_end'] : null;
        $this->container['cash_and_equivalent'] = isset($data['cash_and_equivalent']) ? $data['cash_and_equivalent'] : null;
        $this->container['receivables_net'] = isset($data['receivables_net']) ? $data['receivables_net'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['other_current_assets'] = isset($data['other_current_assets']) ? $data['other_current_assets'] : null;
        $this->container['total_current_assets'] = isset($data['total_current_assets']) ? $data['total_current_assets'] : null;
        $this->container['fixed_assets'] = isset($data['fixed_assets']) ? $data['fixed_assets'] : null;
        $this->container['investments'] = isset($data['investments']) ? $data['investments'] : null;
        $this->container['other_assets'] = isset($data['other_assets']) ? $data['other_assets'] : null;
        $this->container['total_assets'] = isset($data['total_assets']) ? $data['total_assets'] : null;
        $this->container['debt_due_in1_year'] = isset($data['debt_due_in1_year']) ? $data['debt_due_in1_year'] : null;
        $this->container['notes_payable'] = isset($data['notes_payable']) ? $data['notes_payable'] : null;
        $this->container['accounts_payable'] = isset($data['accounts_payable']) ? $data['accounts_payable'] : null;
        $this->container['taxes_payable'] = isset($data['taxes_payable']) ? $data['taxes_payable'] : null;
        $this->container['other_current_liabilities'] = isset($data['other_current_liabilities']) ? $data['other_current_liabilities'] : null;
        $this->container['total_current_liabilities'] = isset($data['total_current_liabilities']) ? $data['total_current_liabilities'] : null;
        $this->container['long_term_debt'] = isset($data['long_term_debt']) ? $data['long_term_debt'] : null;
        $this->container['other_liabilities'] = isset($data['other_liabilities']) ? $data['other_liabilities'] : null;
        $this->container['net_worth'] = isset($data['net_worth']) ? $data['net_worth'] : null;
        $this->container['total_liabilitiesand_net_worth'] = isset($data['total_liabilitiesand_net_worth']) ? $data['total_liabilitiesand_net_worth'] : null;
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
     * Gets year_end
     *
     * @return float
     */
    public function getYearEnd()
    {
        return $this->container['year_end'];
    }

    /**
     * Sets year_end
     *
     * @param float $year_end Year end of the financial statement item
     *
     * @return $this
     */
    public function setYearEnd($year_end)
    {
        $this->container['year_end'] = $year_end;

        return $this;
    }

    /**
     * Gets cash_and_equivalent
     *
     * @return float
     */
    public function getCashAndEquivalent()
    {
        return $this->container['cash_and_equivalent'];
    }

    /**
     * Sets cash_and_equivalent
     *
     * @param float $cash_and_equivalent Total amount of cash and equivalent liquid assets
     *
     * @return $this
     */
    public function setCashAndEquivalent($cash_and_equivalent)
    {
        $this->container['cash_and_equivalent'] = $cash_and_equivalent;

        return $this;
    }

    /**
     * Gets receivables_net
     *
     * @return float
     */
    public function getReceivablesNet()
    {
        return $this->container['receivables_net'];
    }

    /**
     * Sets receivables_net
     *
     * @param float $receivables_net Total amount of net receivables
     *
     * @return $this
     */
    public function setReceivablesNet($receivables_net)
    {
        $this->container['receivables_net'] = $receivables_net;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return float
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param float $inventory Total amount of inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets other_current_assets
     *
     * @return float
     */
    public function getOtherCurrentAssets()
    {
        return $this->container['other_current_assets'];
    }

    /**
     * Sets other_current_assets
     *
     * @param float $other_current_assets Total of other current assets that are likely to be converted into cash in the next 12 months
     *
     * @return $this
     */
    public function setOtherCurrentAssets($other_current_assets)
    {
        $this->container['other_current_assets'] = $other_current_assets;

        return $this;
    }

    /**
     * Gets total_current_assets
     *
     * @return float
     */
    public function getTotalCurrentAssets()
    {
        return $this->container['total_current_assets'];
    }

    /**
     * Sets total_current_assets
     *
     * @param float $total_current_assets Total amount of all current assets
     *
     * @return $this
     */
    public function setTotalCurrentAssets($total_current_assets)
    {
        $this->container['total_current_assets'] = $total_current_assets;

        return $this;
    }

    /**
     * Gets fixed_assets
     *
     * @return float
     */
    public function getFixedAssets()
    {
        return $this->container['fixed_assets'];
    }

    /**
     * Sets fixed_assets
     *
     * @param float $fixed_assets Total amount of all fixed assets, such as plant, property, and equipment
     *
     * @return $this
     */
    public function setFixedAssets($fixed_assets)
    {
        $this->container['fixed_assets'] = $fixed_assets;

        return $this;
    }

    /**
     * Gets investments
     *
     * @return float
     */
    public function getInvestments()
    {
        return $this->container['investments'];
    }

    /**
     * Sets investments
     *
     * @param float $investments Total amount of assets classified as investments
     *
     * @return $this
     */
    public function setInvestments($investments)
    {
        $this->container['investments'] = $investments;

        return $this;
    }

    /**
     * Gets other_assets
     *
     * @return float
     */
    public function getOtherAssets()
    {
        return $this->container['other_assets'];
    }

    /**
     * Sets other_assets
     *
     * @param float $other_assets Total amount of other non-current assets that are not expected to be converted to cash in the next 12 months
     *
     * @return $this
     */
    public function setOtherAssets($other_assets)
    {
        $this->container['other_assets'] = $other_assets;

        return $this;
    }

    /**
     * Gets total_assets
     *
     * @return float
     */
    public function getTotalAssets()
    {
        return $this->container['total_assets'];
    }

    /**
     * Sets total_assets
     *
     * @param float $total_assets The total amount of all assets
     *
     * @return $this
     */
    public function setTotalAssets($total_assets)
    {
        $this->container['total_assets'] = $total_assets;

        return $this;
    }

    /**
     * Gets debt_due_in1_year
     *
     * @return float
     */
    public function getDebtDueIn1Year()
    {
        return $this->container['debt_due_in1_year'];
    }

    /**
     * Sets debt_due_in1_year
     *
     * @param float $debt_due_in1_year Total amount of current liabilities, or debts the company owes that are expected to be paid in the next 12 months
     *
     * @return $this
     */
    public function setDebtDueIn1Year($debt_due_in1_year)
    {
        $this->container['debt_due_in1_year'] = $debt_due_in1_year;

        return $this;
    }

    /**
     * Gets notes_payable
     *
     * @return float
     */
    public function getNotesPayable()
    {
        return $this->container['notes_payable'];
    }

    /**
     * Sets notes_payable
     *
     * @param float $notes_payable Total amount of notes payable
     *
     * @return $this
     */
    public function setNotesPayable($notes_payable)
    {
        $this->container['notes_payable'] = $notes_payable;

        return $this;
    }

    /**
     * Gets accounts_payable
     *
     * @return float
     */
    public function getAccountsPayable()
    {
        return $this->container['accounts_payable'];
    }

    /**
     * Sets accounts_payable
     *
     * @param float $accounts_payable Total amount of accounts payable
     *
     * @return $this
     */
    public function setAccountsPayable($accounts_payable)
    {
        $this->container['accounts_payable'] = $accounts_payable;

        return $this;
    }

    /**
     * Gets taxes_payable
     *
     * @return float
     */
    public function getTaxesPayable()
    {
        return $this->container['taxes_payable'];
    }

    /**
     * Sets taxes_payable
     *
     * @param float $taxes_payable Total amount of taxes payable
     *
     * @return $this
     */
    public function setTaxesPayable($taxes_payable)
    {
        $this->container['taxes_payable'] = $taxes_payable;

        return $this;
    }

    /**
     * Gets other_current_liabilities
     *
     * @return float
     */
    public function getOtherCurrentLiabilities()
    {
        return $this->container['other_current_liabilities'];
    }

    /**
     * Sets other_current_liabilities
     *
     * @param float $other_current_liabilities Total amount of other current liabilities
     *
     * @return $this
     */
    public function setOtherCurrentLiabilities($other_current_liabilities)
    {
        $this->container['other_current_liabilities'] = $other_current_liabilities;

        return $this;
    }

    /**
     * Gets total_current_liabilities
     *
     * @return float
     */
    public function getTotalCurrentLiabilities()
    {
        return $this->container['total_current_liabilities'];
    }

    /**
     * Sets total_current_liabilities
     *
     * @param float $total_current_liabilities Total amount of all current liabilities
     *
     * @return $this
     */
    public function setTotalCurrentLiabilities($total_current_liabilities)
    {
        $this->container['total_current_liabilities'] = $total_current_liabilities;

        return $this;
    }

    /**
     * Gets long_term_debt
     *
     * @return float
     */
    public function getLongTermDebt()
    {
        return $this->container['long_term_debt'];
    }

    /**
     * Sets long_term_debt
     *
     * @param float $long_term_debt Total long term debt that is due beyond the next 12 months, such as bank loans
     *
     * @return $this
     */
    public function setLongTermDebt($long_term_debt)
    {
        $this->container['long_term_debt'] = $long_term_debt;

        return $this;
    }

    /**
     * Gets other_liabilities
     *
     * @return float
     */
    public function getOtherLiabilities()
    {
        return $this->container['other_liabilities'];
    }

    /**
     * Sets other_liabilities
     *
     * @param float $other_liabilities Total other liabilities
     *
     * @return $this
     */
    public function setOtherLiabilities($other_liabilities)
    {
        $this->container['other_liabilities'] = $other_liabilities;

        return $this;
    }

    /**
     * Gets net_worth
     *
     * @return float
     */
    public function getNetWorth()
    {
        return $this->container['net_worth'];
    }

    /**
     * Sets net_worth
     *
     * @param float $net_worth Net worth is calculated by subtracting the company's total liabilities from its total assets
     *
     * @return $this
     */
    public function setNetWorth($net_worth)
    {
        $this->container['net_worth'] = $net_worth;

        return $this;
    }

    /**
     * Gets total_liabilitiesand_net_worth
     *
     * @return float
     */
    public function getTotalLiabilitiesandNetWorth()
    {
        return $this->container['total_liabilitiesand_net_worth'];
    }

    /**
     * Sets total_liabilitiesand_net_worth
     *
     * @param float $total_liabilitiesand_net_worth The sum of total liabilities and net worth. Will equal total assets
     *
     * @return $this
     */
    public function setTotalLiabilitiesandNetWorth($total_liabilitiesand_net_worth)
    {
        $this->container['total_liabilitiesand_net_worth'] = $total_liabilitiesand_net_worth;

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


