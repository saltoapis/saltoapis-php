<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/electroniclock/v1/electronic_lock.proto

namespace Saltoapis\Nebula\ElectronicLock\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ConfigureElectronicLock`][salto.nebula.electroniclock.v1.ElectronicLockService.ConfigureElectronicLock]
 *
 * Generated from protobuf message <code>salto.nebula.electroniclock.v1.ConfigureElectronicLockRequest</code>
 */
class ConfigureElectronicLockRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the electronic lock to be configured. For example:
     * `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
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
     *           The resource name of the electronic lock to be configured. For example:
     *           `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicLock\V1\ElectronicLock::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the electronic lock to be configured. For example:
     * `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the electronic lock to be configured. For example:
     * `installations/surelock-homes-hq/electronic-locks/baker-street-entrance`.
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

