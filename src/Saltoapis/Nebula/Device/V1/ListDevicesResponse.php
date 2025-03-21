<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/device/v1/device.proto

namespace Saltoapis\Nebula\Device\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [ListDevices][salto.nebula.device.v1.DeviceService.ListDevices]
 *
 * Generated from protobuf message <code>salto.nebula.device.v1.ListDevicesResponse</code>
 */
class ListDevicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `devices` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.device.v1.Device devices = 1;</code>
     */
    private $devices;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * The total number of devices in all pages, irrespective of any pagination.
     * This is an estimated number based on the requested filter, and it may change in
     * subsequent pages.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Saltoapis\Nebula\Device\V1\Device>|\Google\Protobuf\Internal\RepeatedField $devices
     *           The field name should match the noun `devices` in the method name. There
     *           will be a maximum number of items returned based on the `page_size` field
     *           in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type int $total_size
     *           The total number of devices in all pages, irrespective of any pagination.
     *           This is an estimated number based on the requested filter, and it may change in
     *           subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Device\V1\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `devices` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.device.v1.Device devices = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * The field name should match the noun `devices` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.device.v1.Device devices = 1;</code>
     * @param array<\Saltoapis\Nebula\Device\V1\Device>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\Device\V1\Device::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * The total number of devices in all pages, irrespective of any pagination.
     * This is an estimated number based on the requested filter, and it may change in
     * subsequent pages.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of devices in all pages, irrespective of any pagination.
     * This is an estimated number based on the requested filter, and it may change in
     * subsequent pages.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

}

