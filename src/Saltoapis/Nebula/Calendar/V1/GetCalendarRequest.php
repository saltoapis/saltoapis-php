<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/calendar/v1/calendar.proto

namespace Saltoapis\Nebula\Calendar\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`GetCalendar`][salto.nebula.calendar.v1.CalendarService.GetCalendar]
 *
 * Generated from protobuf message <code>salto.nebula.calendar.v1.GetCalendarRequest</code>
 */
class GetCalendarRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested calendar resource. For example:
     * `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the requested calendar resource. For example:
     *           `installations/surelock-homes-hq/calendars/gmt`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Calendar\V1\Calendar::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested calendar resource. For example:
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
     * The name of the requested calendar resource. For example:
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

}

