<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/calendar/v1/calendar.proto

namespace Saltoapis\Nebula\Calendar\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>salto.nebula.calendar.v1.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the calendar event. It must have the
     * format of `installations/&#42;&#47;calendars/&#42;&#47;events/&#42;`. For example:
     * `installations/surelock-homes-hq/calendars/gmt/events/twelvetide`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Day type.
     *
     * Generated from protobuf field <code>.salto.nebula.type.DayType day_type = 2;</code>
     */
    protected $day_type = 0;
    /**
     * Start date.
     *
     * Generated from protobuf field <code>.salto.type.Date start_date = 3;</code>
     */
    protected $start_date = null;
    /**
     * End date.
     *
     * Generated from protobuf field <code>.salto.type.Date end_date = 4;</code>
     */
    protected $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the calendar event. It must have the
     *           format of `installations/&#42;&#47;calendars/&#42;&#47;events/&#42;`. For example:
     *           `installations/surelock-homes-hq/calendars/gmt/events/twelvetide`.
     *     @type int $day_type
     *           Day type.
     *     @type \Saltoapis\Type\Date $start_date
     *           Start date.
     *     @type \Saltoapis\Type\Date $end_date
     *           End date.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Calendar\V1\Calendar::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the calendar event. It must have the
     * format of `installations/&#42;&#47;calendars/&#42;&#47;events/&#42;`. For example:
     * `installations/surelock-homes-hq/calendars/gmt/events/twelvetide`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the calendar event. It must have the
     * format of `installations/&#42;&#47;calendars/&#42;&#47;events/&#42;`. For example:
     * `installations/surelock-homes-hq/calendars/gmt/events/twelvetide`.
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
     * Day type.
     *
     * Generated from protobuf field <code>.salto.nebula.type.DayType day_type = 2;</code>
     * @return int
     */
    public function getDayType()
    {
        return $this->day_type;
    }

    /**
     * Day type.
     *
     * Generated from protobuf field <code>.salto.nebula.type.DayType day_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDayType($var)
    {
        GPBUtil::checkEnum($var, \Saltoapis\Nebula\Type\DayType::class);
        $this->day_type = $var;

        return $this;
    }

    /**
     * Start date.
     *
     * Generated from protobuf field <code>.salto.type.Date start_date = 3;</code>
     * @return \Saltoapis\Type\Date|null
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Start date.
     *
     * Generated from protobuf field <code>.salto.type.Date start_date = 3;</code>
     * @param \Saltoapis\Type\Date $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Type\Date::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * End date.
     *
     * Generated from protobuf field <code>.salto.type.Date end_date = 4;</code>
     * @return \Saltoapis\Type\Date|null
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * End date.
     *
     * Generated from protobuf field <code>.salto.type.Date end_date = 4;</code>
     * @param \Saltoapis\Type\Date $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Type\Date::class);
        $this->end_date = $var;

        return $this;
    }

}

