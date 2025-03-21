<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/calendar/v1/calendar.proto

namespace Saltoapis\Nebula\Calendar\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CreateEvent`][salto.nebula.calendar.v1.CalendarService.CreateEvent]
 *
 * Generated from protobuf message <code>salto.nebula.calendar.v1.CreateEventRequest</code>
 */
class CreateEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where to create the calendar
     * event. For example: `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The event ID to use for this calendar event. In case it's
     * empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string event_id = 2;</code>
     */
    protected $event_id = null;
    /**
     * The calendar event resource to be created. Client must not set the
     * `Event.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.calendar.v1.Event event = 3;</code>
     */
    protected $event = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where to create the calendar
     *           event. For example: `installations/surelock-homes-hq/calendars/gmt`.
     *     @type string $event_id
     *           The event ID to use for this calendar event. In case it's
     *           empty the server will autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\Calendar\V1\Event $event
     *           The calendar event resource to be created. Client must not set the
     *           `Event.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Calendar\V1\Calendar::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where to create the calendar
     * event. For example: `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where to create the calendar
     * event. For example: `installations/surelock-homes-hq/calendars/gmt`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The event ID to use for this calendar event. In case it's
     * empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string event_id = 2;</code>
     * @return string
     */
    public function getEventId()
    {
        return isset($this->event_id) ? $this->event_id : '';
    }

    public function hasEventId()
    {
        return isset($this->event_id);
    }

    public function clearEventId()
    {
        unset($this->event_id);
    }

    /**
     * The event ID to use for this calendar event. In case it's
     * empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string event_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_id = $var;

        return $this;
    }

    /**
     * The calendar event resource to be created. Client must not set the
     * `Event.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.calendar.v1.Event event = 3;</code>
     * @return \Saltoapis\Nebula\Calendar\V1\Event|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function hasEvent()
    {
        return isset($this->event);
    }

    public function clearEvent()
    {
        unset($this->event);
    }

    /**
     * The calendar event resource to be created. Client must not set the
     * `Event.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.calendar.v1.Event event = 3;</code>
     * @param \Saltoapis\Nebula\Calendar\V1\Event $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Calendar\V1\Event::class);
        $this->event = $var;

        return $this;
    }

}

