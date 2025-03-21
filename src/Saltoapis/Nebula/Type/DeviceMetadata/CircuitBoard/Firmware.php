<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/type/device_metadata.proto

namespace Saltoapis\Nebula\Type\DeviceMetadata\CircuitBoard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Firmware contains the firmware number and version.
 *
 * Generated from protobuf message <code>salto.nebula.type.DeviceMetadata.CircuitBoard.Firmware</code>
 */
class Firmware extends \Google\Protobuf\Internal\Message
{
    /**
     * Firmware number, for example '0180'.
     *
     * Generated from protobuf field <code>string number = 1;</code>
     */
    protected $number = '';
    /**
     * Firmware version of a specific firmware number.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $number
     *           Firmware number, for example '0180'.
     *     @type string $version
     *           Firmware version of a specific firmware number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Type\DeviceMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Firmware number, for example '0180'.
     *
     * Generated from protobuf field <code>string number = 1;</code>
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Firmware number, for example '0180'.
     *
     * Generated from protobuf field <code>string number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->number = $var;

        return $this;
    }

    /**
     * Firmware version of a specific firmware number.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Firmware version of a specific firmware number.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

