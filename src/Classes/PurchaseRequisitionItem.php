<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-03-03 09:44:33 AM CST
 */

namespace NetSuite\Classes;

class PurchaseRequisitionItem {
    /**
     * @var integer
     */
    public $line;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $poVendor;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $estimatedRate;
    /**
     * @var float
     */
    public $estimatedAmount;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var boolean
     */
    public $isBillable;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $linkedOrderList;
    /**
     * @var string
     */
    public $linkedOrderStatus;
    /**
     * @var string
     */
    public $expectedReceiptDate;
    /**
     * @var boolean
     */
    public $isClosed;
    /**
     * @var boolean
     */
    public $expandItemGroup;
    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "vendorName" => "string",
        "poVendor" => "RecordRef",
        "quantity" => "float",
        "units" => "RecordRef",
        "serialNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "estimatedRate" => "float",
        "estimatedAmount" => "float",
        "rate" => "string",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "linkedOrderList" => "RecordRefList",
        "linkedOrderStatus" => "string",
        "expectedReceiptDate" => "dateTime",
        "isClosed" => "boolean",
        "expandItemGroup" => "boolean",
    );
}
