<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/electronickey/v1/electronic_key.proto

namespace Saltoapis\Nebula\ElectronicKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [UpdateElectronicKey][salto.nebula.electronickey.v1.ElectronicKeyService.UpdateElectronicKey]
 *
 * Generated from protobuf message <code>salto.nebula.electronickey.v1.UpdateElectronicKeyRequest</code>
 */
class UpdateElectronicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The electronic key resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.electronickey.v1.ElectronicKey electronic_key = 1;</code>
     */
    protected $electronic_key = null;
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
     *     @type \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey $electronic_key
     *           The electronic key resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The electronic key resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.electronickey.v1.ElectronicKey electronic_key = 1;</code>
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
     * The electronic key resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.electronickey.v1.ElectronicKey electronic_key = 1;</code>
     * @param \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey $var
     * @return $this
     */
    public function setElectronicKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::class);
        $this->electronic_key = $var;

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

