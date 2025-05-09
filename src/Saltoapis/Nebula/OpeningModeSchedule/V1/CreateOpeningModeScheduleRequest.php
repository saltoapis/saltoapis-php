<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/openingmodeschedule/v1/opening_mode_schedule.proto

namespace Saltoapis\Nebula\OpeningModeSchedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CreateOpeningModeSchedule`][salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService.CreateOpeningModeSchedule]
 *
 * Generated from protobuf message <code>salto.nebula.openingmodeschedule.v1.CreateOpeningModeScheduleRequest</code>
 */
class CreateOpeningModeScheduleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where to create the opening mode
     * schedule. For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The opening mode schedule ID to use for this opening mode schedule. In
     * case it's empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>string opening_mode_schedule_id = 2;</code>
     */
    protected $opening_mode_schedule_id = '';
    /**
     * The opening mode schedule resource to be created. Client must not set the
     * `OpeningModeSchedule.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.openingmodeschedule.v1.OpeningModeSchedule opening_mode_schedule = 3;</code>
     */
    protected $opening_mode_schedule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where to create the opening mode
     *           schedule. For example: `installations/surelock-homes-hq`.
     *     @type string $opening_mode_schedule_id
     *           The opening mode schedule ID to use for this opening mode schedule. In
     *           case it's empty the server will autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule $opening_mode_schedule
     *           The opening mode schedule resource to be created. Client must not set the
     *           `OpeningModeSchedule.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where to create the opening mode
     * schedule. For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where to create the opening mode
     * schedule. For example: `installations/surelock-homes-hq`.
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
     * The opening mode schedule ID to use for this opening mode schedule. In
     * case it's empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>string opening_mode_schedule_id = 2;</code>
     * @return string
     */
    public function getOpeningModeScheduleId()
    {
        return $this->opening_mode_schedule_id;
    }

    /**
     * The opening mode schedule ID to use for this opening mode schedule. In
     * case it's empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>string opening_mode_schedule_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOpeningModeScheduleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->opening_mode_schedule_id = $var;

        return $this;
    }

    /**
     * The opening mode schedule resource to be created. Client must not set the
     * `OpeningModeSchedule.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.openingmodeschedule.v1.OpeningModeSchedule opening_mode_schedule = 3;</code>
     * @return \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule|null
     */
    public function getOpeningModeSchedule()
    {
        return $this->opening_mode_schedule;
    }

    public function hasOpeningModeSchedule()
    {
        return isset($this->opening_mode_schedule);
    }

    public function clearOpeningModeSchedule()
    {
        unset($this->opening_mode_schedule);
    }

    /**
     * The opening mode schedule resource to be created. Client must not set the
     * `OpeningModeSchedule.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.openingmodeschedule.v1.OpeningModeSchedule opening_mode_schedule = 3;</code>
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule $var
     * @return $this
     */
    public function setOpeningModeSchedule($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::class);
        $this->opening_mode_schedule = $var;

        return $this;
    }

}

