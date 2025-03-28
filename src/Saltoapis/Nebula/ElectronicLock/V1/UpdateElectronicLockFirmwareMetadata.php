<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/electroniclock/v1/electronic_lock.proto

namespace Saltoapis\Nebula\ElectronicLock\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata message for [`UpdateElectronicLockFirmware`][salto.nebula.electroniclock.v1.ElectronicLockService.UpdateElectronicLockFirmware]
 *
 * Generated from protobuf message <code>salto.nebula.electroniclock.v1.UpdateElectronicLockFirmwareMetadata</code>
 */
class UpdateElectronicLockFirmwareMetadata extends \Google\Protobuf\Internal\Message
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
        \GPBMetadata\Saltoapis\Nebula\ElectronicLock\V1\ElectronicLock::initOnce();
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

