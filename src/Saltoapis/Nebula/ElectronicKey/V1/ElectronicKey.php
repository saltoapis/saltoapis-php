<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/electronickey/v1/electronic_key.proto

namespace Saltoapis\Nebula\ElectronicKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The electronic key object
 *
 * Generated from protobuf message <code>salto.nebula.electronickey.v1.ElectronicKey</code>
 */
class ElectronicKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the electronic key. It must have the format of
     * `installations/{@*}electronic-keys/*`. For example:
     * `installations/surelock-homes-hq/electronic-keys/main-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Display name of the electronic key.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Indicates whether this electronic key has been initialized or not. This
     * field cannot be modified using a standard
     * [`UpdateElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.UpdateElectronicKey]
     * operation. To change the value of this field, you must call
     * [`InitializeElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.InitializeElectronicKey].
     * If the value is `false` also applies to the case where the
     * initialization process has been initiated but where it has not finished.
     *
     * Generated from protobuf field <code>bool initialized = 3;</code>
     */
    protected $initialized = false;
    /**
     * Globally unique identifier that is used across all devices manufactured
     * by SALTO, including gateways, extenders, electronic keys and so on.
     *
     * Generated from protobuf field <code>optional string device_id = 4;</code>
     */
    protected $device_id = null;
    /**
     * Indicates whether this electronic key has pending updates or not. This
     * could be because there was a pending configuration or a firmware update
     * and is conditionally set based on the current installation settings.
     *
     * Generated from protobuf field <code>bool outdated = 5;</code>
     */
    protected $outdated = false;
    /**
     * Device metadata contains information about a device hardware and firmware.
     *
     * Generated from protobuf field <code>.salto.nebula.type.DeviceMetadata device_metadata = 8;</code>
     */
    protected $device_metadata = null;
    /**
     * Indicates whether the battery of this electronic key is low, and needs
     * replacing, or is normal and doesn't need replacing.
     *
     * Generated from protobuf field <code>bool low_battery = 7;</code>
     */
    protected $low_battery = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the electronic key. It must have the format of
     *           `installations/{@*}electronic-keys/*`. For example:
     *           `installations/surelock-homes-hq/electronic-keys/main-key`.
     *     @type string $display_name
     *           Display name of the electronic key.
     *     @type bool $initialized
     *           Indicates whether this electronic key has been initialized or not. This
     *           field cannot be modified using a standard
     *           [`UpdateElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.UpdateElectronicKey]
     *           operation. To change the value of this field, you must call
     *           [`InitializeElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.InitializeElectronicKey].
     *           If the value is `false` also applies to the case where the
     *           initialization process has been initiated but where it has not finished.
     *     @type string $device_id
     *           Globally unique identifier that is used across all devices manufactured
     *           by SALTO, including gateways, extenders, electronic keys and so on.
     *     @type bool $outdated
     *           Indicates whether this electronic key has pending updates or not. This
     *           could be because there was a pending configuration or a firmware update
     *           and is conditionally set based on the current installation settings.
     *     @type \Saltoapis\Nebula\Type\DeviceMetadata $device_metadata
     *           Device metadata contains information about a device hardware and firmware.
     *     @type bool $low_battery
     *           Indicates whether the battery of this electronic key is low, and needs
     *           replacing, or is normal and doesn't need replacing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the electronic key. It must have the format of
     * `installations/{@*}electronic-keys/*`. For example:
     * `installations/surelock-homes-hq/electronic-keys/main-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the electronic key. It must have the format of
     * `installations/{@*}electronic-keys/*`. For example:
     * `installations/surelock-homes-hq/electronic-keys/main-key`.
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

    /**
     * Display name of the electronic key.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the electronic key.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Indicates whether this electronic key has been initialized or not. This
     * field cannot be modified using a standard
     * [`UpdateElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.UpdateElectronicKey]
     * operation. To change the value of this field, you must call
     * [`InitializeElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.InitializeElectronicKey].
     * If the value is `false` also applies to the case where the
     * initialization process has been initiated but where it has not finished.
     *
     * Generated from protobuf field <code>bool initialized = 3;</code>
     * @return bool
     */
    public function getInitialized()
    {
        return $this->initialized;
    }

    /**
     * Indicates whether this electronic key has been initialized or not. This
     * field cannot be modified using a standard
     * [`UpdateElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.UpdateElectronicKey]
     * operation. To change the value of this field, you must call
     * [`InitializeElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.InitializeElectronicKey].
     * If the value is `false` also applies to the case where the
     * initialization process has been initiated but where it has not finished.
     *
     * Generated from protobuf field <code>bool initialized = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setInitialized($var)
    {
        GPBUtil::checkBool($var);
        $this->initialized = $var;

        return $this;
    }

    /**
     * Globally unique identifier that is used across all devices manufactured
     * by SALTO, including gateways, extenders, electronic keys and so on.
     *
     * Generated from protobuf field <code>optional string device_id = 4;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return isset($this->device_id) ? $this->device_id : '';
    }

    public function hasDeviceId()
    {
        return isset($this->device_id);
    }

    public function clearDeviceId()
    {
        unset($this->device_id);
    }

    /**
     * Globally unique identifier that is used across all devices manufactured
     * by SALTO, including gateways, extenders, electronic keys and so on.
     *
     * Generated from protobuf field <code>optional string device_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

    /**
     * Indicates whether this electronic key has pending updates or not. This
     * could be because there was a pending configuration or a firmware update
     * and is conditionally set based on the current installation settings.
     *
     * Generated from protobuf field <code>bool outdated = 5;</code>
     * @return bool
     */
    public function getOutdated()
    {
        return $this->outdated;
    }

    /**
     * Indicates whether this electronic key has pending updates or not. This
     * could be because there was a pending configuration or a firmware update
     * and is conditionally set based on the current installation settings.
     *
     * Generated from protobuf field <code>bool outdated = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setOutdated($var)
    {
        GPBUtil::checkBool($var);
        $this->outdated = $var;

        return $this;
    }

    /**
     * Device metadata contains information about a device hardware and firmware.
     *
     * Generated from protobuf field <code>.salto.nebula.type.DeviceMetadata device_metadata = 8;</code>
     * @return \Saltoapis\Nebula\Type\DeviceMetadata|null
     */
    public function getDeviceMetadata()
    {
        return $this->device_metadata;
    }

    public function hasDeviceMetadata()
    {
        return isset($this->device_metadata);
    }

    public function clearDeviceMetadata()
    {
        unset($this->device_metadata);
    }

    /**
     * Device metadata contains information about a device hardware and firmware.
     *
     * Generated from protobuf field <code>.salto.nebula.type.DeviceMetadata device_metadata = 8;</code>
     * @param \Saltoapis\Nebula\Type\DeviceMetadata $var
     * @return $this
     */
    public function setDeviceMetadata($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Type\DeviceMetadata::class);
        $this->device_metadata = $var;

        return $this;
    }

    /**
     * Indicates whether the battery of this electronic key is low, and needs
     * replacing, or is normal and doesn't need replacing.
     *
     * Generated from protobuf field <code>bool low_battery = 7;</code>
     * @return bool
     */
    public function getLowBattery()
    {
        return $this->low_battery;
    }

    /**
     * Indicates whether the battery of this electronic key is low, and needs
     * replacing, or is normal and doesn't need replacing.
     *
     * Generated from protobuf field <code>bool low_battery = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setLowBattery($var)
    {
        GPBUtil::checkBool($var);
        $this->low_battery = $var;

        return $this;
    }

}

