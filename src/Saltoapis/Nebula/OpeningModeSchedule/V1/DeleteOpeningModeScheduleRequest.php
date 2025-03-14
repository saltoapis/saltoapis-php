<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/openingmodeschedule/v1/opening_mode_schedule.proto

namespace Saltoapis\Nebula\OpeningModeSchedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`DeleteOpeningModeSchedule`][salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService.DeleteOpeningModeSchedule]
 *
 * Generated from protobuf message <code>salto.nebula.openingmodeschedule.v1.DeleteOpeningModeScheduleRequest</code>
 */
class DeleteOpeningModeScheduleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the opening mode schedule to be deleted. For example:
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
     *           The resource name of the opening mode schedule to be deleted. For example:
     *           `installations/surelock-homes-hq/opening-mode-schedules/office-24-7`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the opening mode schedule to be deleted. For example:
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
     * The resource name of the opening mode schedule to be deleted. For example:
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

