<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/digitalkey/v1/digital_key.proto

namespace Saltoapis\Nebula\DigitalKey\V1\DigitalKey;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App key.
 *
 * Generated from protobuf message <code>salto.nebula.digitalkey.v1.DigitalKey.AppKey</code>
 */
class AppKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata associated to this app key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.Metadata metadata = 1;</code>
     */
    protected $metadata = null;
    /**
     * An encrypted and authenticated data blob of the app key.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';
    /**
     * The resource name of the installation this app key belong to.
     * For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string installation = 5;</code>
     */
    protected $installation = '';
    /**
     * The resource name of the unit this app key belong to.
     * For example: `installations/surelock-homes-hq/units/101`.
     *
     * Generated from protobuf field <code>optional string unit = 6;</code>
     */
    protected $unit = null;
    /**
     * Installation identifier for low-level purposes.
     * WARNING: This is going to be removed after the initial nebula release
     * as its only purpose is to ease the installation picking mechanism in
     * mobile apps.
     *
     * Generated from protobuf field <code>string installation_id = 3;</code>
     */
    protected $installation_id = '';
    /**
     * Unit identifier for low-level purposes.
     * WARNING: This is going to be removed after the initial nebula release
     * as its only purpose is to ease the unit picking mechanism in mobile
     * apps.
     *
     * Generated from protobuf field <code>optional string unit_id = 4;</code>
     */
    protected $unit_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata $metadata
     *           Metadata associated to this app key.
     *     @type string $data
     *           An encrypted and authenticated data blob of the app key.
     *     @type string $installation
     *           The resource name of the installation this app key belong to.
     *           For example: `installations/surelock-homes-hq`.
     *     @type string $unit
     *           The resource name of the unit this app key belong to.
     *           For example: `installations/surelock-homes-hq/units/101`.
     *     @type string $installation_id
     *           Installation identifier for low-level purposes.
     *           WARNING: This is going to be removed after the initial nebula release
     *           as its only purpose is to ease the installation picking mechanism in
     *           mobile apps.
     *     @type string $unit_id
     *           Unit identifier for low-level purposes.
     *           WARNING: This is going to be removed after the initial nebula release
     *           as its only purpose is to ease the unit picking mechanism in mobile
     *           apps.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\DigitalKey\V1\DigitalKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata associated to this app key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.Metadata metadata = 1;</code>
     * @return \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Metadata associated to this app key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.Metadata metadata = 1;</code>
     * @param \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * An encrypted and authenticated data blob of the app key.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * An encrypted and authenticated data blob of the app key.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * The resource name of the installation this app key belong to.
     * For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string installation = 5;</code>
     * @return string
     */
    public function getInstallation()
    {
        return $this->installation;
    }

    /**
     * The resource name of the installation this app key belong to.
     * For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string installation = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInstallation($var)
    {
        GPBUtil::checkString($var, True);
        $this->installation = $var;

        return $this;
    }

    /**
     * The resource name of the unit this app key belong to.
     * For example: `installations/surelock-homes-hq/units/101`.
     *
     * Generated from protobuf field <code>optional string unit = 6;</code>
     * @return string
     */
    public function getUnit()
    {
        return isset($this->unit) ? $this->unit : '';
    }

    public function hasUnit()
    {
        return isset($this->unit);
    }

    public function clearUnit()
    {
        unset($this->unit);
    }

    /**
     * The resource name of the unit this app key belong to.
     * For example: `installations/surelock-homes-hq/units/101`.
     *
     * Generated from protobuf field <code>optional string unit = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit = $var;

        return $this;
    }

    /**
     * Installation identifier for low-level purposes.
     * WARNING: This is going to be removed after the initial nebula release
     * as its only purpose is to ease the installation picking mechanism in
     * mobile apps.
     *
     * Generated from protobuf field <code>string installation_id = 3;</code>
     * @return string
     */
    public function getInstallationId()
    {
        return $this->installation_id;
    }

    /**
     * Installation identifier for low-level purposes.
     * WARNING: This is going to be removed after the initial nebula release
     * as its only purpose is to ease the installation picking mechanism in
     * mobile apps.
     *
     * Generated from protobuf field <code>string installation_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInstallationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->installation_id = $var;

        return $this;
    }

    /**
     * Unit identifier for low-level purposes.
     * WARNING: This is going to be removed after the initial nebula release
     * as its only purpose is to ease the unit picking mechanism in mobile
     * apps.
     *
     * Generated from protobuf field <code>optional string unit_id = 4;</code>
     * @return string
     */
    public function getUnitId()
    {
        return isset($this->unit_id) ? $this->unit_id : '';
    }

    public function hasUnitId()
    {
        return isset($this->unit_id);
    }

    public function clearUnitId()
    {
        unset($this->unit_id);
    }

    /**
     * Unit identifier for low-level purposes.
     * WARNING: This is going to be removed after the initial nebula release
     * as its only purpose is to ease the unit picking mechanism in mobile
     * apps.
     *
     * Generated from protobuf field <code>optional string unit_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppKey::class, \Saltoapis\Nebula\DigitalKey\V1\DigitalKey_AppKey::class);

