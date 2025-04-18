<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/openingmodeschedule/v1/opening_mode_schedule.proto

namespace Saltoapis\Nebula\OpeningModeSchedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`UpdateOpeningModeSchedule`][salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService.UpdateOpeningModeSchedule]
 *
 * Generated from protobuf message <code>salto.nebula.openingmodeschedule.v1.UpdateOpeningModeScheduleRequest</code>
 */
class UpdateOpeningModeScheduleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The opening mode schedule resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.openingmodeschedule.v1.OpeningModeSchedule opening_mode_schedule = 1;</code>
     */
    protected $opening_mode_schedule = null;
    /**
     * The update mask applied to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule $opening_mode_schedule
     *           The opening mode schedule resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * The opening mode schedule resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.openingmodeschedule.v1.OpeningModeSchedule opening_mode_schedule = 1;</code>
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
     * The opening mode schedule resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.openingmodeschedule.v1.OpeningModeSchedule opening_mode_schedule = 1;</code>
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule $var
     * @return $this
     */
    public function setOpeningModeSchedule($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::class);
        $this->opening_mode_schedule = $var;

        return $this;
    }

    /**
     * The update mask applied to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applied to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

