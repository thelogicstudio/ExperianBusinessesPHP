<?php
/**
 * CorporateFinancialInformationBalanceSheetsInner
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
 * CorporateFinancialInformationBalanceSheetsInner Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CorporateFinancialInformationBalanceSheetsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'corporateFinancialInformation_balanceSheets_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'year_end' => false,
        'cash_and_equivalent' => false,
        'receivables_net' => false,
        'inventory' => false,
        'other_current_assets' => false,
        'total_current_assets' => false,
        'fixed_assets' => false,
        'investments' => false,
        'other_assets' => false,
        'total_assets' => false,
        'debt_due_in1_year' => false,
        'notes_payable' => false,
        'accounts_payable' => false,
        'taxes_payable' => false,
        'other_current_liabilities' => false,
        'total_current_liabilities' => false,
        'long_term_debt' => false,
        'other_liabilities' => false,
        'net_worth' => false,
        'total_liabilitiesand_net_worth' => false
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
        $this->setIfExists('year_end', $data ?? [], null);
        $this->setIfExists('cash_and_equivalent', $data ?? [], null);
        $this->setIfExists('receivables_net', $data ?? [], null);
        $this->setIfExists('inventory', $data ?? [], null);
        $this->setIfExists('other_current_assets', $data ?? [], null);
        $this->setIfExists('total_current_assets', $data ?? [], null);
        $this->setIfExists('fixed_assets', $data ?? [], null);
        $this->setIfExists('investments', $data ?? [], null);
        $this->setIfExists('other_assets', $data ?? [], null);
        $this->setIfExists('total_assets', $data ?? [], null);
        $this->setIfExists('debt_due_in1_year', $data ?? [], null);
        $this->setIfExists('notes_payable', $data ?? [], null);
        $this->setIfExists('accounts_payable', $data ?? [], null);
        $this->setIfExists('taxes_payable', $data ?? [], null);
        $this->setIfExists('other_current_liabilities', $data ?? [], null);
        $this->setIfExists('total_current_liabilities', $data ?? [], null);
        $this->setIfExists('long_term_debt', $data ?? [], null);
        $this->setIfExists('other_liabilities', $data ?? [], null);
        $this->setIfExists('net_worth', $data ?? [], null);
        $this->setIfExists('total_liabilitiesand_net_worth', $data ?? [], null);
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
     * Gets year_end
     *
     * @return float|null
     */
    public function getYearEnd()
    {
        return $this->container['year_end'];
    }

    /**
     * Sets year_end
     *
     * @param float|null $year_end Year end of the financial statement item
     *
     * @return self
     */
    public function setYearEnd($year_end)
    {
        if (is_null($year_end)) {
            throw new \InvalidArgumentException('non-nullable year_end cannot be null');
        }
        $this->container['year_end'] = $year_end;

        return $this;
    }

    /**
     * Gets cash_and_equivalent
     *
     * @return float|null
     */
    public function getCashAndEquivalent()
    {
        return $this->container['cash_and_equivalent'];
    }

    /**
     * Sets cash_and_equivalent
     *
     * @param float|null $cash_and_equivalent Total amount of cash and equivalent liquid assets
     *
     * @return self
     */
    public function setCashAndEquivalent($cash_and_equivalent)
    {
        if (is_null($cash_and_equivalent)) {
            throw new \InvalidArgumentException('non-nullable cash_and_equivalent cannot be null');
        }
        $this->container['cash_and_equivalent'] = $cash_and_equivalent;

        return $this;
    }

    /**
     * Gets receivables_net
     *
     * @return float|null
     */
    public function getReceivablesNet()
    {
        return $this->container['receivables_net'];
    }

    /**
     * Sets receivables_net
     *
     * @param float|null $receivables_net Total amount of net receivables
     *
     * @return self
     */
    public function setReceivablesNet($receivables_net)
    {
        if (is_null($receivables_net)) {
            throw new \InvalidArgumentException('non-nullable receivables_net cannot be null');
        }
        $this->container['receivables_net'] = $receivables_net;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return float|null
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param float|null $inventory Total amount of inventory
     *
     * @return self
     */
    public function setInventory($inventory)
    {
        if (is_null($inventory)) {
            throw new \InvalidArgumentException('non-nullable inventory cannot be null');
        }
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets other_current_assets
     *
     * @return float|null
     */
    public function getOtherCurrentAssets()
    {
        return $this->container['other_current_assets'];
    }

    /**
     * Sets other_current_assets
     *
     * @param float|null $other_current_assets Total of other current assets that are likely to be converted into cash in the next 12 months
     *
     * @return self
     */
    public function setOtherCurrentAssets($other_current_assets)
    {
        if (is_null($other_current_assets)) {
            throw new \InvalidArgumentException('non-nullable other_current_assets cannot be null');
        }
        $this->container['other_current_assets'] = $other_current_assets;

        return $this;
    }

    /**
     * Gets total_current_assets
     *
     * @return float|null
     */
    public function getTotalCurrentAssets()
    {
        return $this->container['total_current_assets'];
    }

    /**
     * Sets total_current_assets
     *
     * @param float|null $total_current_assets Total amount of all current assets
     *
     * @return self
     */
    public function setTotalCurrentAssets($total_current_assets)
    {
        if (is_null($total_current_assets)) {
            throw new \InvalidArgumentException('non-nullable total_current_assets cannot be null');
        }
        $this->container['total_current_assets'] = $total_current_assets;

        return $this;
    }

    /**
     * Gets fixed_assets
     *
     * @return float|null
     */
    public function getFixedAssets()
    {
        return $this->container['fixed_assets'];
    }

    /**
     * Sets fixed_assets
     *
     * @param float|null $fixed_assets Total amount of all fixed assets, such as plant, property, and equipment
     *
     * @return self
     */
    public function setFixedAssets($fixed_assets)
    {
        if (is_null($fixed_assets)) {
            throw new \InvalidArgumentException('non-nullable fixed_assets cannot be null');
        }
        $this->container['fixed_assets'] = $fixed_assets;

        return $this;
    }

    /**
     * Gets investments
     *
     * @return float|null
     */
    public function getInvestments()
    {
        return $this->container['investments'];
    }

    /**
     * Sets investments
     *
     * @param float|null $investments Total amount of assets classified as investments
     *
     * @return self
     */
    public function setInvestments($investments)
    {
        if (is_null($investments)) {
            throw new \InvalidArgumentException('non-nullable investments cannot be null');
        }
        $this->container['investments'] = $investments;

        return $this;
    }

    /**
     * Gets other_assets
     *
     * @return float|null
     */
    public function getOtherAssets()
    {
        return $this->container['other_assets'];
    }

    /**
     * Sets other_assets
     *
     * @param float|null $other_assets Total amount of other non-current assets that are not expected to be converted to cash in the next 12 months
     *
     * @return self
     */
    public function setOtherAssets($other_assets)
    {
        if (is_null($other_assets)) {
            throw new \InvalidArgumentException('non-nullable other_assets cannot be null');
        }
        $this->container['other_assets'] = $other_assets;

        return $this;
    }

    /**
     * Gets total_assets
     *
     * @return float|null
     */
    public function getTotalAssets()
    {
        return $this->container['total_assets'];
    }

    /**
     * Sets total_assets
     *
     * @param float|null $total_assets The total amount of all assets
     *
     * @return self
     */
    public function setTotalAssets($total_assets)
    {
        if (is_null($total_assets)) {
            throw new \InvalidArgumentException('non-nullable total_assets cannot be null');
        }
        $this->container['total_assets'] = $total_assets;

        return $this;
    }

    /**
     * Gets debt_due_in1_year
     *
     * @return float|null
     */
    public function getDebtDueIn1Year()
    {
        return $this->container['debt_due_in1_year'];
    }

    /**
     * Sets debt_due_in1_year
     *
     * @param float|null $debt_due_in1_year Total amount of current liabilities, or debts the company owes that are expected to be paid in the next 12 months
     *
     * @return self
     */
    public function setDebtDueIn1Year($debt_due_in1_year)
    {
        if (is_null($debt_due_in1_year)) {
            throw new \InvalidArgumentException('non-nullable debt_due_in1_year cannot be null');
        }
        $this->container['debt_due_in1_year'] = $debt_due_in1_year;

        return $this;
    }

    /**
     * Gets notes_payable
     *
     * @return float|null
     */
    public function getNotesPayable()
    {
        return $this->container['notes_payable'];
    }

    /**
     * Sets notes_payable
     *
     * @param float|null $notes_payable Total amount of notes payable
     *
     * @return self
     */
    public function setNotesPayable($notes_payable)
    {
        if (is_null($notes_payable)) {
            throw new \InvalidArgumentException('non-nullable notes_payable cannot be null');
        }
        $this->container['notes_payable'] = $notes_payable;

        return $this;
    }

    /**
     * Gets accounts_payable
     *
     * @return float|null
     */
    public function getAccountsPayable()
    {
        return $this->container['accounts_payable'];
    }

    /**
     * Sets accounts_payable
     *
     * @param float|null $accounts_payable Total amount of accounts payable
     *
     * @return self
     */
    public function setAccountsPayable($accounts_payable)
    {
        if (is_null($accounts_payable)) {
            throw new \InvalidArgumentException('non-nullable accounts_payable cannot be null');
        }
        $this->container['accounts_payable'] = $accounts_payable;

        return $this;
    }

    /**
     * Gets taxes_payable
     *
     * @return float|null
     */
    public function getTaxesPayable()
    {
        return $this->container['taxes_payable'];
    }

    /**
     * Sets taxes_payable
     *
     * @param float|null $taxes_payable Total amount of taxes payable
     *
     * @return self
     */
    public function setTaxesPayable($taxes_payable)
    {
        if (is_null($taxes_payable)) {
            throw new \InvalidArgumentException('non-nullable taxes_payable cannot be null');
        }
        $this->container['taxes_payable'] = $taxes_payable;

        return $this;
    }

    /**
     * Gets other_current_liabilities
     *
     * @return float|null
     */
    public function getOtherCurrentLiabilities()
    {
        return $this->container['other_current_liabilities'];
    }

    /**
     * Sets other_current_liabilities
     *
     * @param float|null $other_current_liabilities Total amount of other current liabilities
     *
     * @return self
     */
    public function setOtherCurrentLiabilities($other_current_liabilities)
    {
        if (is_null($other_current_liabilities)) {
            throw new \InvalidArgumentException('non-nullable other_current_liabilities cannot be null');
        }
        $this->container['other_current_liabilities'] = $other_current_liabilities;

        return $this;
    }

    /**
     * Gets total_current_liabilities
     *
     * @return float|null
     */
    public function getTotalCurrentLiabilities()
    {
        return $this->container['total_current_liabilities'];
    }

    /**
     * Sets total_current_liabilities
     *
     * @param float|null $total_current_liabilities Total amount of all current liabilities
     *
     * @return self
     */
    public function setTotalCurrentLiabilities($total_current_liabilities)
    {
        if (is_null($total_current_liabilities)) {
            throw new \InvalidArgumentException('non-nullable total_current_liabilities cannot be null');
        }
        $this->container['total_current_liabilities'] = $total_current_liabilities;

        return $this;
    }

    /**
     * Gets long_term_debt
     *
     * @return float|null
     */
    public function getLongTermDebt()
    {
        return $this->container['long_term_debt'];
    }

    /**
     * Sets long_term_debt
     *
     * @param float|null $long_term_debt Total long term debt that is due beyond the next 12 months, such as bank loans
     *
     * @return self
     */
    public function setLongTermDebt($long_term_debt)
    {
        if (is_null($long_term_debt)) {
            throw new \InvalidArgumentException('non-nullable long_term_debt cannot be null');
        }
        $this->container['long_term_debt'] = $long_term_debt;

        return $this;
    }

    /**
     * Gets other_liabilities
     *
     * @return float|null
     */
    public function getOtherLiabilities()
    {
        return $this->container['other_liabilities'];
    }

    /**
     * Sets other_liabilities
     *
     * @param float|null $other_liabilities Total other liabilities
     *
     * @return self
     */
    public function setOtherLiabilities($other_liabilities)
    {
        if (is_null($other_liabilities)) {
            throw new \InvalidArgumentException('non-nullable other_liabilities cannot be null');
        }
        $this->container['other_liabilities'] = $other_liabilities;

        return $this;
    }

    /**
     * Gets net_worth
     *
     * @return float|null
     */
    public function getNetWorth()
    {
        return $this->container['net_worth'];
    }

    /**
     * Sets net_worth
     *
     * @param float|null $net_worth Net worth is calculated by subtracting the company's total liabilities from its total assets
     *
     * @return self
     */
    public function setNetWorth($net_worth)
    {
        if (is_null($net_worth)) {
            throw new \InvalidArgumentException('non-nullable net_worth cannot be null');
        }
        $this->container['net_worth'] = $net_worth;

        return $this;
    }

    /**
     * Gets total_liabilitiesand_net_worth
     *
     * @return float|null
     */
    public function getTotalLiabilitiesandNetWorth()
    {
        return $this->container['total_liabilitiesand_net_worth'];
    }

    /**
     * Sets total_liabilitiesand_net_worth
     *
     * @param float|null $total_liabilitiesand_net_worth The sum of total liabilities and net worth. Will equal total assets
     *
     * @return self
     */
    public function setTotalLiabilitiesandNetWorth($total_liabilitiesand_net_worth)
    {
        if (is_null($total_liabilitiesand_net_worth)) {
            throw new \InvalidArgumentException('non-nullable total_liabilitiesand_net_worth cannot be null');
        }
        $this->container['total_liabilitiesand_net_worth'] = $total_liabilitiesand_net_worth;

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


