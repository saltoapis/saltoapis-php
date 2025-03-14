<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/type/time_of_day.proto

namespace Saltoapis\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a time of day. The date and time zone are either not significant
 * or are specified elsewhere. An API may chose to allow leap seconds. Related
 * types are [`salto.type.Date`][salto.type.Date] and
 * `google.protobuf.Timestamp`.
 *
 * Generated from protobuf message <code>salto.type.TimeOfDay</code>
 */
class TimeOfDay extends \Google\Protobuf\Internal\Message
{
    /**
     * Hours of day in 24 hour format. Should be from 0 to 23.
     *
     * Generated from protobuf field <code>int32 hours = 1;</code>
     */
    protected $hours = 0;
    /**
     * Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 2;</code>
     */
    protected $minutes = 0;
    /**
     * Seconds of minutes of the time. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 seconds = 3;</code>
     */
    protected $seconds = 0;
    /**
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 4;</code>
     */
    protected $nanos = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hours
     *           Hours of day in 24 hour format. Should be from 0 to 23.
     *     @type int $minutes
     *           Minutes of hour of day. Must be from 0 to 59.
     *     @type int $seconds
     *           Seconds of minutes of the time. Must be from 0 to 59.
     *     @type int $nanos
     *           Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Type\TimeOfDay::initOnce();
        parent::__construct($data);
    }

    /**
     * Hours of day in 24 hour format. Should be from 0 to 23.
     *
     * Generated from protobuf field <code>int32 hours = 1;</code>
     * @return int
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Hours of day in 24 hour format. Should be from 0 to 23.
     *
     * Generated from protobuf field <code>int32 hours = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHours($var)
    {
        GPBUtil::checkInt32($var);
        $this->hours = $var;

        return $this;
    }

    /**
     * Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 2;</code>
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->minutes = $var;

        return $this;
    }

    /**
     * Seconds of minutes of the time. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 seconds = 3;</code>
     * @return int
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * Seconds of minutes of the time. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 seconds = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->seconds = $var;

        return $this;
    }

    /**
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 4;</code>
     * @return int
     */
    public function getNanos()
    {
        return $this->nanos;
    }

    /**
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNanos($var)
    {
        GPBUtil::checkInt32($var);
        $this->nanos = $var;

        return $this;
    }

}

