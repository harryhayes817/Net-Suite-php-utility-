<?php

namespace Fungku\NetSuite\Classes;

class SalesOrderItem {
	public $job;
	public $subscription;
	public $item;
	public $quantityAvailable;
	public $expandItemGroup;
	public $quantityOnHand;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $description;
	public $price;
	public $rate;
	public $serialNumbers;
	public $amount;
	public $isTaxable;
	public $commitInventory;
	public $orderPriority;
	public $licenseCode;
	public $options;
	public $department;
	public $class;
	public $location;
	public $createPo;
	public $createdPo;
	public $altSalesAmt;
	public $createWo;
	public $poVendor;
	public $poCurrency;
	public $poRate;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecTermInMonths;
	public $revRecEndDate;
	public $deferRevRec;
	public $isClosed;
	public $catchUpPeriod;
	public $billingSchedule;
	public $fromJob;
	public $grossAmt;
	public $excludeFromRateRequest;
	public $isEstimate;
	public $line;
	public $percentComplete;
	public $costEstimateType;
	public $costEstimate;
	public $quantityBackOrdered;
	public $quantityBilled;
	public $quantityCommitted;
	public $quantityFulfilled;
	public $quantityPacked;
	public $quantityPicked;
	public $tax1Amt;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $giftCertFrom;
	public $giftCertRecipientName;
	public $giftCertRecipientEmail;
	public $giftCertMessage;
	public $giftCertNumber;
	public $shipGroup;
	public $itemIsFulfilled;
	public $shipAddress;
	public $shipMethod;
	public $vsoeSopGroup;
	public $vsoeIsEstimate;
	public $vsoePrice;
	public $vsoeAmount;
	public $vsoeAllocation;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $expectedShipDate;
	public $chargeType;
	public $customFieldList;
	static $paramtypesmap = array(
		"job" => "RecordRef",
		"subscription" => "RecordRef",
		"item" => "RecordRef",
		"quantityAvailable" => "float",
		"expandItemGroup" => "boolean",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"serialNumbers" => "string",
		"amount" => "float",
		"isTaxable" => "boolean",
		"commitInventory" => "SalesOrderItemCommitInventory",
		"orderPriority" => "float",
		"licenseCode" => "string",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"createPo" => "SalesOrderItemCreatePo",
		"createdPo" => "RecordRef",
		"altSalesAmt" => "float",
		"createWo" => "boolean",
		"poVendor" => "RecordRef",
		"poCurrency" => "string",
		"poRate" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecTermInMonths" => "integer",
		"revRecEndDate" => "dateTime",
		"deferRevRec" => "boolean",
		"isClosed" => "boolean",
		"catchUpPeriod" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"fromJob" => "boolean",
		"grossAmt" => "float",
		"excludeFromRateRequest" => "boolean",
		"isEstimate" => "boolean",
		"line" => "integer",
		"percentComplete" => "float",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"quantityBackOrdered" => "float",
		"quantityBilled" => "float",
		"quantityCommitted" => "float",
		"quantityFulfilled" => "float",
		"quantityPacked" => "float",
		"quantityPicked" => "float",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"giftCertFrom" => "string",
		"giftCertRecipientName" => "string",
		"giftCertRecipientEmail" => "string",
		"giftCertMessage" => "string",
		"giftCertNumber" => "string",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeIsEstimate" => "boolean",
		"vsoePrice" => "float",
		"vsoeAmount" => "float",
		"vsoeAllocation" => "float",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"expectedShipDate" => "dateTime",
		"chargeType" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

