<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/openingmodeschedule/v1/opening_mode_schedule.proto

namespace Saltoapis\Nebula\OpeningModeSchedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`GetOpeningModeSchedule`][salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService.GetOpeningModeSchedule]
 *
 * Generated from protobuf message <code>salto.nebula.openingmodeschedule.v1.GetOpeningModeScheduleRequest</code>
 */
class GetOpeningModeScheduleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested opening mode schedule resource. For example:
     * `installations/surelock-homes-hq/opening-mode-schedules/office-24-7`.
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
     *           The name of the requested opening mode schedule resource. For example:
     *           `installations/surelock-homes-hq/opening-mode-schedules/office-24-7`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested opening mode schedule resource. For example:
     * `installations/surelock-homes-hq/opening-mode-schedules/office-24-7`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the requested opening mode schedule resource. For example:
     * `installations/surelock-homes-hq/opening-mode-schedules/office-24-7`.
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

