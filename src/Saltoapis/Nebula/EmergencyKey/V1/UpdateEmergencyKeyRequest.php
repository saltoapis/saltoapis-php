<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/emergencykey/v1/emergency_key.proto

namespace Saltoapis\Nebula\EmergencyKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UpdateEmergencyKey`][salto.nebula.emergencykey.v1.EmergencyKeyService.UpdateEmergencyKey].
 *
 * Generated from protobuf message <code>salto.nebula.emergencykey.v1.UpdateEmergencyKeyRequest</code>
 */
class UpdateEmergencyKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The emergency key resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.emergencykey.v1.EmergencyKey emergency_key = 1;</code>
     */
    protected $emergency_key = null;
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
     *     @type \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey $emergency_key
     *           The emergency key resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The emergency key resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.emergencykey.v1.EmergencyKey emergency_key = 1;</code>
     * @return \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey|null
     */
    public function getEmergencyKey()
    {
        return $this->emergency_key;
    }

    public function hasEmergencyKey()
    {
        return isset($this->emergency_key);
    }

    public function clearEmergencyKey()
    {
        unset($this->emergency_key);
    }

    /**
     * The emergency key resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.emergencykey.v1.EmergencyKey emergency_key = 1;</code>
     * @param \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey $var
     * @return $this
     */
    public function setEmergencyKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey::class);
        $this->emergency_key = $var;

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

