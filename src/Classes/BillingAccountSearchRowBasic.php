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
 * generated:  2020-04-10 09:56:55 PM UTC
 */

namespace NetSuite\Classes;

class BillingAccountSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $cashSaleForm;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $customerDefault;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $frequency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $idNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $inactive;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $invoiceForm;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastBillCycleDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastBillDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $nextBillCycleDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "billingSchedule" => "SearchColumnSelectField[]",
        "cashSaleForm" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "customerDefault" => "SearchColumnBooleanField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "frequency" => "SearchColumnEnumSelectField[]",
        "idNumber" => "SearchColumnStringField[]",
        "inactive" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "invoiceForm" => "SearchColumnSelectField[]",
        "lastBillCycleDate" => "SearchColumnDateField[]",
        "lastBillDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "nextBillCycleDate" => "SearchColumnDateField[]",
        "startDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
