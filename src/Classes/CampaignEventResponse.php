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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class CampaignEventResponse {
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $dateSent;
    /**
     * @var float
     */
    public $sent;
    /**
     * @var float
     */
    public $opened;
    /**
     * @var float
     */
    public $openedRatio;
    /**
     * @var float
     */
    public $clickedThru;
    /**
     * @var float
     */
    public $clickedThruRatio;
    /**
     * @var integer
     */
    public $responded;
    /**
     * @var float
     */
    public $respondedRatio;
    /**
     * @var integer
     */
    public $unsubscribed;
    /**
     * @var float
     */
    public $unsubscribedRatio;
    /**
     * @var integer
     */
    public $bounced;
    /**
     * @var float
     */
    public $bouncedRatio;
    static $paramtypesmap = array(
        "name" => "string",
        "type" => "string",
        "dateSent" => "dateTime",
        "sent" => "float",
        "opened" => "float",
        "openedRatio" => "float",
        "clickedThru" => "float",
        "clickedThruRatio" => "float",
        "responded" => "integer",
        "respondedRatio" => "float",
        "unsubscribed" => "integer",
        "unsubscribedRatio" => "float",
        "bounced" => "integer",
        "bouncedRatio" => "float",
    );
}
