<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accesspoint/v1/access_point.proto

namespace Saltoapis\Nebula\AccessPoint\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UpdateAccessPoint`][salto.nebula.accesspoint.v1.AccessPointService.UpdateAccessPoint]
 *
 * Generated from protobuf message <code>salto.nebula.accesspoint.v1.UpdateAccessPointRequest</code>
 */
class UpdateAccessPointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The access point resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     */
    protected $access_point = null;
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
     *     @type \Saltoapis\Nebula\AccessPoint\V1\AccessPoint $access_point
     *           The access point resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessPoint\V1\AccessPoint::initOnce();
        parent::__construct($data);
    }

    /**
     * The access point resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     * @return \Saltoapis\Nebula\AccessPoint\V1\AccessPoint|null
     */
    public function getAccessPoint()
    {
        return $this->access_point;
    }

    public function hasAccessPoint()
    {
        return isset($this->access_point);
    }

    public function clearAccessPoint()
    {
        unset($this->access_point);
    }

    /**
     * The access point resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     * @param \Saltoapis\Nebula\AccessPoint\V1\AccessPoint $var
     * @return $this
     */
    public function setAccessPoint($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\AccessPoint\V1\AccessPoint::class);
        $this->access_point = $var;

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

