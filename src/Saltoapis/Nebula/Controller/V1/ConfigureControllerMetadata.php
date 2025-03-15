<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata message for [`ConfigureController`][salto.nebula.controller.v1.ControllerService.ConfigureController]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.ConfigureControllerMetadata</code>
 */
class ConfigureControllerMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Progress of operation. Range: [0, 100].
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     */
    protected $progress_percent = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $progress_percent
     *           Progress of operation. Range: [0, 100].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * Progress of operation. Range: [0, 100].
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     * @return int
     */
    public function getProgressPercent()
    {
        return $this->progress_percent;
    }

    /**
     * Progress of operation. Range: [0, 100].
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProgressPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress_percent = $var;

        return $this;
    }

}

