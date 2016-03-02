<?php

namespace Fungku\NetSuite\Classes;

class BudgetExchangeRateFilter {
	public $period;
	public $fromSubsidiary;
	public $toSubsidiary;
	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
	);
}

