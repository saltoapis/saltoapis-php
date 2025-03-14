<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/extender/v1/extender.proto

namespace Saltoapis\Nebula\Extender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [UpdateExtender][salto.nebula.extender.v1.ExtenderService.UpdateExtender]
 *
 * Generated from protobuf message <code>salto.nebula.extender.v1.UpdateExtenderRequest</code>
 */
class UpdateExtenderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The extender resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.extender.v1.Extender extender = 1;</code>
     */
    protected $extender = null;
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
     *     @type \Saltoapis\Nebula\Extender\V1\Extender $extender
     *           The extender resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Extender\V1\Extender::initOnce();
        parent::__construct($data);
    }

    /**
     * The extender resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.extender.v1.Extender extender = 1;</code>
     * @return \Saltoapis\Nebula\Extender\V1\Extender|null
     */
    public function getExtender()
    {
        return $this->extender;
    }

    public function hasExtender()
    {
        return isset($this->extender);
    }

    public function clearExtender()
    {
        unset($this->extender);
    }

    /**
     * The extender resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.extender.v1.Extender extender = 1;</code>
     * @param \Saltoapis\Nebula\Extender\V1\Extender $var
     * @return $this
     */
    public function setExtender($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Extender\V1\Extender::class);
        $this->extender = $var;

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

