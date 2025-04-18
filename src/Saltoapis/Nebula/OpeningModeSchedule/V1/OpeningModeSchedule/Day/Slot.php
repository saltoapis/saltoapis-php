<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/openingmodeschedule/v1/opening_mode_schedule.proto

namespace Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule\Day;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The time period in which the opening mode will be valid
 *
 * Generated from protobuf message <code>salto.nebula.openingmodeschedule.v1.OpeningModeSchedule.Day.Slot</code>
 */
class Slot extends \Google\Protobuf\Internal\Message
{
    /**
     * The opening mode to be applied.
     *
     * Generated from protobuf field <code>.salto.nebula.type.OpeningMode opening_mode = 1;</code>
     */
    protected $opening_mode = 0;
    /**
     * Start time of day when schedule starts being valid.
     *
     * Generated from protobuf field <code>.salto.type.TimeOfDay start_time = 2;</code>
     */
    protected $start_time = null;
    /**
     * End time of day when schedule ends being valid.
     *
     * Generated from protobuf field <code>.salto.type.TimeOfDay end_time = 3;</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $opening_mode
     *           The opening mode to be applied.
     *     @type \Saltoapis\Type\TimeOfDay $start_time
     *           Start time of day when schedule starts being valid.
     *     @type \Saltoapis\Type\TimeOfDay $end_time
     *           End time of day when schedule ends being valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * The opening mode to be applied.
     *
     * Generated from protobuf field <code>.salto.nebula.type.OpeningMode opening_mode = 1;</code>
     * @return int
     */
    public function getOpeningMode()
    {
        return $this->opening_mode;
    }

    /**
     * The opening mode to be applied.
     *
     * Generated from protobuf field <code>.salto.nebula.type.OpeningMode opening_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOpeningMode($var)
    {
        GPBUtil::checkEnum($var, \Saltoapis\Nebula\Type\OpeningMode::class);
        $this->opening_mode = $var;

        return $this;
    }

    /**
     * Start time of day when schedule starts being valid.
     *
     * Generated from protobuf field <code>.salto.type.TimeOfDay start_time = 2;</code>
     * @return \Saltoapis\Type\TimeOfDay|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start time of day when schedule starts being valid.
     *
     * Generated from protobuf field <code>.salto.type.TimeOfDay start_time = 2;</code>
     * @param \Saltoapis\Type\TimeOfDay $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Type\TimeOfDay::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End time of day when schedule ends being valid.
     *
     * Generated from protobuf field <code>.salto.type.TimeOfDay end_time = 3;</code>
     * @return \Saltoapis\Type\TimeOfDay|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End time of day when schedule ends being valid.
     *
     * Generated from protobuf field <code>.salto.type.TimeOfDay end_time = 3;</code>
     * @param \Saltoapis\Type\TimeOfDay $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Type\TimeOfDay::class);
        $this->end_time = $var;

        return $this;
    }

}

