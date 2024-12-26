<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/electronickey/v1/electronic_key.proto

namespace Saltoapis\Nebula\ElectronicKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [CreateElectronicKey][salto.nebula.electronickey.v1.ElectronicKeyService.CreateElectronicKey]
 *
 * Generated from protobuf message <code>salto.nebula.electronickey.v1.CreateElectronicKeyRequest</code>
 */
class CreateElectronicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where to create the electronic key. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The electronic key ID to use for this electronic key. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string electronic_key_id = 2;</code>
     */
    protected $electronic_key_id = null;
    /**
     * The electronic key resource to be created. Client must not set the
     * `ElectronicKey.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.electronickey.v1.ElectronicKey electronic_key = 3;</code>
     */
    protected $electronic_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where to create the electronic key. For
     *           example, `installations/surelock-homes-hq`.
     *     @type string $electronic_key_id
     *           The electronic key ID to use for this electronic key. In case it's empty the
     *           server will autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey $electronic_key
     *           The electronic key resource to be created. Client must not set the
     *           `ElectronicKey.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where to create the electronic key. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where to create the electronic key. For
     * example, `installations/surelock-homes-hq`.
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
     * The electronic key ID to use for this electronic key. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string electronic_key_id = 2;</code>
     * @return string
     */
    public function getElectronicKeyId()
    {
        return isset($this->electronic_key_id) ? $this->electronic_key_id : '';
    }

    public function hasElectronicKeyId()
    {
        return isset($this->electronic_key_id);
    }

    public function clearElectronicKeyId()
    {
        unset($this->electronic_key_id);
    }

    /**
     * The electronic key ID to use for this electronic key. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string electronic_key_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setElectronicKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->electronic_key_id = $var;

        return $this;
    }

    /**
     * The electronic key resource to be created. Client must not set the
     * `ElectronicKey.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.electronickey.v1.ElectronicKey electronic_key = 3;</code>
     * @return \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey|null
     */
    public function getElectronicKey()
    {
        return $this->electronic_key;
    }

    public function hasElectronicKey()
    {
        return isset($this->electronic_key);
    }

    public function clearElectronicKey()
    {
        unset($this->electronic_key);
    }

    /**
     * The electronic key resource to be created. Client must not set the
     * `ElectronicKey.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.electronickey.v1.ElectronicKey electronic_key = 3;</code>
     * @param \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey $var
     * @return $this
     */
    public function setElectronicKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::class);
        $this->electronic_key = $var;

        return $this;
    }

}
