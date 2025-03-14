<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/electroniclock/v1/electronic_lock.proto

namespace Saltoapis\Nebula\ElectronicLock\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UpdateElectronicLockFirmware`][salto.nebula.electroniclock.v1.ElectronicLockService.UpdateElectronicLockFirmware]
 *
 * Generated from protobuf message <code>salto.nebula.electroniclock.v1.UpdateElectronicLockFirmwareRequest</code>
 */
class UpdateElectronicLockFirmwareRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the electronic lock whose firmware will be updated. For
     * example:
     * `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string electronic_lock = 1;</code>
     */
    protected $electronic_lock = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $electronic_lock
     *           The resource name of the electronic lock whose firmware will be updated. For
     *           example:
     *           `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicLock\V1\ElectronicLock::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the electronic lock whose firmware will be updated. For
     * example:
     * `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string electronic_lock = 1;</code>
     * @return string
     */
    public function getElectronicLock()
    {
        return $this->electronic_lock;
    }

    /**
     * The resource name of the electronic lock whose firmware will be updated. For
     * example:
     * `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string electronic_lock = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setElectronicLock($var)
    {
        GPBUtil::checkString($var, True);
        $this->electronic_lock = $var;

        return $this;
    }

}

