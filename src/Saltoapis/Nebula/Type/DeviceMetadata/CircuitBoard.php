<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/type/device_metadata.proto

namespace Saltoapis\Nebula\Type\DeviceMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of a circuit board present on a device.
 *
 * Generated from protobuf message <code>salto.nebula.type.DeviceMetadata.CircuitBoard</code>
 */
class CircuitBoard extends \Google\Protobuf\Internal\Message
{
    /**
     * Date manufactured
     *
     * Generated from protobuf field <code>.salto.type.Date manufacture_date = 2;</code>
     */
    protected $manufacture_date = null;
    /**
     * Hardware serial number, for example, `2.000.0020`
     *
     * Generated from protobuf field <code>string serial_number = 3;</code>
     */
    protected $serial_number = '';
    /**
     * Firmwares present in this circuit board.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.type.DeviceMetadata.CircuitBoard.Firmware firmwares = 4;</code>
     */
    private $firmwares;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Type\Date $manufacture_date
     *           Date manufactured
     *     @type string $serial_number
     *           Hardware serial number, for example, `2.000.0020`
     *     @type array<\Saltoapis\Nebula\Type\DeviceMetadata\CircuitBoard\Firmware>|\Google\Protobuf\Internal\RepeatedField $firmwares
     *           Firmwares present in this circuit board.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Type\DeviceMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Date manufactured
     *
     * Generated from protobuf field <code>.salto.type.Date manufacture_date = 2;</code>
     * @return \Saltoapis\Type\Date|null
     */
    public function getManufactureDate()
    {
        return $this->manufacture_date;
    }

    public function hasManufactureDate()
    {
        return isset($this->manufacture_date);
    }

    public function clearManufactureDate()
    {
        unset($this->manufacture_date);
    }

    /**
     * Date manufactured
     *
     * Generated from protobuf field <code>.salto.type.Date manufacture_date = 2;</code>
     * @param \Saltoapis\Type\Date $var
     * @return $this
     */
    public function setManufactureDate($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Type\Date::class);
        $this->manufacture_date = $var;

        return $this;
    }

    /**
     * Hardware serial number, for example, `2.000.0020`
     *
     * Generated from protobuf field <code>string serial_number = 3;</code>
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * Hardware serial number, for example, `2.000.0020`
     *
     * Generated from protobuf field <code>string serial_number = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSerialNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->serial_number = $var;

        return $this;
    }

    /**
     * Firmwares present in this circuit board.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.type.DeviceMetadata.CircuitBoard.Firmware firmwares = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFirmwares()
    {
        return $this->firmwares;
    }

    /**
     * Firmwares present in this circuit board.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.type.DeviceMetadata.CircuitBoard.Firmware firmwares = 4;</code>
     * @param array<\Saltoapis\Nebula\Type\DeviceMetadata\CircuitBoard\Firmware>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFirmwares($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\Type\DeviceMetadata\CircuitBoard\Firmware::class);
        $this->firmwares = $arr;

        return $this;
    }

}

