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

class GiftCertificate extends Record {
    /**
     * @var string
     */
    public $giftCertCode;
    /**
     * @var string
     */
    public $sender;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var float
     */
    public $originalAmount;
    /**
     * @var float
     */
    public $amountRemaining;
    /**
     * @var string
     */
    public $internalId;
    static $paramtypesmap = array(
        "giftCertCode" => "string",
        "sender" => "string",
        "name" => "string",
        "email" => "string",
        "message" => "string",
        "expirationDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "originalAmount" => "float",
        "amountRemaining" => "float",
        "internalId" => "string",
    );
}
