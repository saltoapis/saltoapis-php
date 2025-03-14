<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/calendar/v1/calendar.proto

namespace Saltoapis\Nebula\Calendar\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The calendar object
 *
 * Generated from protobuf message <code>salto.nebula.calendar.v1.Calendar</code>
 */
class Calendar extends \Google\Protobuf\Internal\Message
{
    /**
     *  Resource name of the calendar. It must have the format of
     * `installations/{@*}calendars/*`. For example:
     * `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Display name of the calendar.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *            Resource name of the calendar. It must have the format of
     *           `installations/{@*}calendars/*`. For example:
     *           `installations/surelock-homes-hq/calendars/gmt`.
     *     @type string $display_name
     *           Display name of the calendar.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Calendar\V1\Calendar::initOnce();
        parent::__construct($data);
    }

    /**
     *  Resource name of the calendar. It must have the format of
     * `installations/{@*}calendars/*`. For example:
     * `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *  Resource name of the calendar. It must have the format of
     * `installations/{@*}calendars/*`. For example:
     * `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Display name of the calendar.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the calendar.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

