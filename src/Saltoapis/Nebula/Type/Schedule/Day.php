<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/type/schedule.proto

namespace Saltoapis\Nebula\Type\Schedule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Day of the week
 *
 * Generated from protobuf message <code>salto.nebula.type.Schedule.Day</code>
 */
class Day extends \Google\Protobuf\Internal\Message
{
    /**
     * Day type
     *
     * Generated from protobuf field <code>.salto.nebula.type.DayType day_type = 1;</code>
     */
    protected $day_type = 0;
    /**
     * In case `day_type` is `NORMAL`, the specific day of the week.
     *
     * Generated from protobuf field <code>.salto.type.DayOfWeek day_of_week = 2;</code>
     */
    protected $day_of_week = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $day_type
     *           Day type
     *     @type int $day_of_week
     *           In case `day_type` is `NORMAL`, the specific day of the week.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Type\Schedule::initOnce();
        parent::__construct($data);
    }

    /**
     * Day type
     *
     * Generated from protobuf field <code>.salto.nebula.type.DayType day_type = 1;</code>
     * @return int
     */
    public function getDayType()
    {
        return $this->day_type;
    }

    /**
     * Day type
     *
     * Generated from protobuf field <code>.salto.nebula.type.DayType day_type = 1;</code>
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
     * In case `day_type` is `NORMAL`, the specific day of the week.
     *
     * Generated from protobuf field <code>.salto.type.DayOfWeek day_of_week = 2;</code>
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * In case `day_type` is `NORMAL`, the specific day of the week.
     *
     * Generated from protobuf field <code>.salto.type.DayOfWeek day_of_week = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDayOfWeek($var)
    {
        GPBUtil::checkEnum($var, \Saltoapis\Type\DayOfWeek::class);
        $this->day_of_week = $var;

        return $this;
    }

}

