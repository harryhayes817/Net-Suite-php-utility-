<?php

namespace Fungku\NetSuite\Classes;

class CalendarEventAttendeeList {
	public $attendee;
	public $replaceAll;
	static $paramtypesmap = array(
		"attendee" => "CalendarEventAttendee[]",
		"replaceAll" => "boolean",
	);
}

