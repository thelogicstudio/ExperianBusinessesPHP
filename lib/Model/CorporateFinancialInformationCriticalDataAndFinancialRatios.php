<?php
/**
 * CorporateFinancialInformationCriticalDataAndFinancialRatios
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
 * CorporateFinancialInformationCriticalDataAndFinancialRatios Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CorporateFinancialInformationCriticalDataAndFinancialRatios implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'corporateFinancialInformation_criticalDataAndFinancialRatios';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'year_end' => 'float',
        'tangible_net_worth' => 'float',
        'net_working_capital' => 'float',
        'current_ratio' => 'float',
        'total_debtto_tangible_net_worth' => 'float',
        'current_debt_to_tangible_net_worth' => 'float',
        'after_tax_income_to_tangible_net_worth' => 'float',
        'after_tax_income_to_net_sales' => 'float',
        'net_salesto_inventory' => 'float',
        'cost_of_goods_sold_to_inventory' => 'float',
        'average_days_sales_outstanding' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'year_end' => null,
        'tangible_net_worth' => null,
        'net_working_capital' => null,
        'current_ratio' => null,
        'total_debtto_tangible_net_worth' => null,
        'current_debt_to_tangible_net_worth' => null,
        'after_tax_income_to_tangible_net_worth' => null,
        'after_tax_income_to_net_sales' => null,
        'net_salesto_inventory' => null,
        'cost_of_goods_sold_to_inventory' => null,
        'average_days_sales_outstanding' => null
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
        'tangible_net_worth' => 'tangibleNetWorth',
        'net_working_capital' => 'netWorkingCapital',
        'current_ratio' => 'currentRatio',
        'total_debtto_tangible_net_worth' => 'totalDebttoTangibleNetWorth',
        'current_debt_to_tangible_net_worth' => 'currentDebtToTangibleNetWorth',
        'after_tax_income_to_tangible_net_worth' => 'afterTaxIncomeToTangibleNetWorth',
        'after_tax_income_to_net_sales' => 'afterTaxIncomeToNetSales',
        'net_salesto_inventory' => 'netSalestoInventory',
        'cost_of_goods_sold_to_inventory' => 'costOfGoodsSoldToInventory',
        'average_days_sales_outstanding' => 'averageDaysSalesOutstanding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year_end' => 'setYearEnd',
        'tangible_net_worth' => 'setTangibleNetWorth',
        'net_working_capital' => 'setNetWorkingCapital',
        'current_ratio' => 'setCurrentRatio',
        'total_debtto_tangible_net_worth' => 'setTotalDebttoTangibleNetWorth',
        'current_debt_to_tangible_net_worth' => 'setCurrentDebtToTangibleNetWorth',
        'after_tax_income_to_tangible_net_worth' => 'setAfterTaxIncomeToTangibleNetWorth',
        'after_tax_income_to_net_sales' => 'setAfterTaxIncomeToNetSales',
        'net_salesto_inventory' => 'setNetSalestoInventory',
        'cost_of_goods_sold_to_inventory' => 'setCostOfGoodsSoldToInventory',
        'average_days_sales_outstanding' => 'setAverageDaysSalesOutstanding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year_end' => 'getYearEnd',
        'tangible_net_worth' => 'getTangibleNetWorth',
        'net_working_capital' => 'getNetWorkingCapital',
        'current_ratio' => 'getCurrentRatio',
        'total_debtto_tangible_net_worth' => 'getTotalDebttoTangibleNetWorth',
        'current_debt_to_tangible_net_worth' => 'getCurrentDebtToTangibleNetWorth',
        'after_tax_income_to_tangible_net_worth' => 'getAfterTaxIncomeToTangibleNetWorth',
        'after_tax_income_to_net_sales' => 'getAfterTaxIncomeToNetSales',
        'net_salesto_inventory' => 'getNetSalestoInventory',
        'cost_of_goods_sold_to_inventory' => 'getCostOfGoodsSoldToInventory',
        'average_days_sales_outstanding' => 'getAverageDaysSalesOutstanding'
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
        $this->container['tangible_net_worth'] = isset($data['tangible_net_worth']) ? $data['tangible_net_worth'] : null;
        $this->container['net_working_capital'] = isset($data['net_working_capital']) ? $data['net_working_capital'] : null;
        $this->container['current_ratio'] = isset($data['current_ratio']) ? $data['current_ratio'] : null;
        $this->container['total_debtto_tangible_net_worth'] = isset($data['total_debtto_tangible_net_worth']) ? $data['total_debtto_tangible_net_worth'] : null;
        $this->container['current_debt_to_tangible_net_worth'] = isset($data['current_debt_to_tangible_net_worth']) ? $data['current_debt_to_tangible_net_worth'] : null;
        $this->container['after_tax_income_to_tangible_net_worth'] = isset($data['after_tax_income_to_tangible_net_worth']) ? $data['after_tax_income_to_tangible_net_worth'] : null;
        $this->container['after_tax_income_to_net_sales'] = isset($data['after_tax_income_to_net_sales']) ? $data['after_tax_income_to_net_sales'] : null;
        $this->container['net_salesto_inventory'] = isset($data['net_salesto_inventory']) ? $data['net_salesto_inventory'] : null;
        $this->container['cost_of_goods_sold_to_inventory'] = isset($data['cost_of_goods_sold_to_inventory']) ? $data['cost_of_goods_sold_to_inventory'] : null;
        $this->container['average_days_sales_outstanding'] = isset($data['average_days_sales_outstanding']) ? $data['average_days_sales_outstanding'] : null;
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
     * Gets tangible_net_worth
     *
     * @return float
     */
    public function getTangibleNetWorth()
    {
        return $this->container['tangible_net_worth'];
    }

    /**
     * Sets tangible_net_worth
     *
     * @param float $tangible_net_worth Total tangible assets minus total liabilities
     *
     * @return $this
     */
    public function setTangibleNetWorth($tangible_net_worth)
    {
        $this->container['tangible_net_worth'] = $tangible_net_worth;

        return $this;
    }

    /**
     * Gets net_working_capital
     *
     * @return float
     */
    public function getNetWorkingCapital()
    {
        return $this->container['net_working_capital'];
    }

    /**
     * Sets net_working_capital
     *
     * @param float $net_working_capital Current assets minus current liabilities. Indicates if the company has enough short term assets to cover short term debt
     *
     * @return $this
     */
    public function setNetWorkingCapital($net_working_capital)
    {
        $this->container['net_working_capital'] = $net_working_capital;

        return $this;
    }

    /**
     * Gets current_ratio
     *
     * @return float
     */
    public function getCurrentRatio()
    {
        return $this->container['current_ratio'];
    }

    /**
     * Sets current_ratio
     *
     * @param float $current_ratio The ratio of current assets to current liabilities. Helps to understand how much cash a company has or can expect to generate from selling inventory in relation to its obligations that are expected to be paid over the next 12 months
     *
     * @return $this
     */
    public function setCurrentRatio($current_ratio)
    {
        $this->container['current_ratio'] = $current_ratio;

        return $this;
    }

    /**
     * Gets total_debtto_tangible_net_worth
     *
     * @return float
     */
    public function getTotalDebttoTangibleNetWorth()
    {
        return $this->container['total_debtto_tangible_net_worth'];
    }

    /**
     * Sets total_debtto_tangible_net_worth
     *
     * @param float $total_debtto_tangible_net_worth The ratio of total debt to total tangible net worth. Indicates an approximate liquidation value of the company
     *
     * @return $this
     */
    public function setTotalDebttoTangibleNetWorth($total_debtto_tangible_net_worth)
    {
        $this->container['total_debtto_tangible_net_worth'] = $total_debtto_tangible_net_worth;

        return $this;
    }

    /**
     * Gets current_debt_to_tangible_net_worth
     *
     * @return float
     */
    public function getCurrentDebtToTangibleNetWorth()
    {
        return $this->container['current_debt_to_tangible_net_worth'];
    }

    /**
     * Sets current_debt_to_tangible_net_worth
     *
     * @param float $current_debt_to_tangible_net_worth The ratio of current liabilities to tangible net worth
     *
     * @return $this
     */
    public function setCurrentDebtToTangibleNetWorth($current_debt_to_tangible_net_worth)
    {
        $this->container['current_debt_to_tangible_net_worth'] = $current_debt_to_tangible_net_worth;

        return $this;
    }

    /**
     * Gets after_tax_income_to_tangible_net_worth
     *
     * @return float
     */
    public function getAfterTaxIncomeToTangibleNetWorth()
    {
        return $this->container['after_tax_income_to_tangible_net_worth'];
    }

    /**
     * Sets after_tax_income_to_tangible_net_worth
     *
     * @param float $after_tax_income_to_tangible_net_worth The ratio of after tax income to tangible net worth
     *
     * @return $this
     */
    public function setAfterTaxIncomeToTangibleNetWorth($after_tax_income_to_tangible_net_worth)
    {
        $this->container['after_tax_income_to_tangible_net_worth'] = $after_tax_income_to_tangible_net_worth;

        return $this;
    }

    /**
     * Gets after_tax_income_to_net_sales
     *
     * @return float
     */
    public function getAfterTaxIncomeToNetSales()
    {
        return $this->container['after_tax_income_to_net_sales'];
    }

    /**
     * Sets after_tax_income_to_net_sales
     *
     * @param float $after_tax_income_to_net_sales The raio of after tax income to net sales
     *
     * @return $this
     */
    public function setAfterTaxIncomeToNetSales($after_tax_income_to_net_sales)
    {
        $this->container['after_tax_income_to_net_sales'] = $after_tax_income_to_net_sales;

        return $this;
    }

    /**
     * Gets net_salesto_inventory
     *
     * @return float
     */
    public function getNetSalestoInventory()
    {
        return $this->container['net_salesto_inventory'];
    }

    /**
     * Sets net_salesto_inventory
     *
     * @param float $net_salesto_inventory Inventory turnover, the ratio of net sales to average inventory
     *
     * @return $this
     */
    public function setNetSalestoInventory($net_salesto_inventory)
    {
        $this->container['net_salesto_inventory'] = $net_salesto_inventory;

        return $this;
    }

    /**
     * Gets cost_of_goods_sold_to_inventory
     *
     * @return float
     */
    public function getCostOfGoodsSoldToInventory()
    {
        return $this->container['cost_of_goods_sold_to_inventory'];
    }

    /**
     * Sets cost_of_goods_sold_to_inventory
     *
     * @param float $cost_of_goods_sold_to_inventory Inventory turnover, the ratio of COGS to inventory
     *
     * @return $this
     */
    public function setCostOfGoodsSoldToInventory($cost_of_goods_sold_to_inventory)
    {
        $this->container['cost_of_goods_sold_to_inventory'] = $cost_of_goods_sold_to_inventory;

        return $this;
    }

    /**
     * Gets average_days_sales_outstanding
     *
     * @return float
     */
    public function getAverageDaysSalesOutstanding()
    {
        return $this->container['average_days_sales_outstanding'];
    }

    /**
     * Sets average_days_sales_outstanding
     *
     * @param float $average_days_sales_outstanding Average days sales outstanding, or DSO, measures a company's average collection period, or how well they manage their accounts receivables
     *
     * @return $this
     */
    public function setAverageDaysSalesOutstanding($average_days_sales_outstanding)
    {
        $this->container['average_days_sales_outstanding'] = $average_days_sales_outstanding;

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


