<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/encoder/v1/encoder.proto

namespace Saltoapis\Nebula\Encoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [UpdateEncoder][salto.nebula.encoder.v1.EncoderService.UpdateEncoder]
 *
 * Generated from protobuf message <code>salto.nebula.encoder.v1.UpdateEncoderRequest</code>
 */
class UpdateEncoderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The encoder resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.encoder.v1.Encoder encoder = 1;</code>
     */
    protected $encoder = null;
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
     *     @type \Saltoapis\Nebula\Encoder\V1\Encoder $encoder
     *           The encoder resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Encoder\V1\Encoder::initOnce();
        parent::__construct($data);
    }

    /**
     * The encoder resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.encoder.v1.Encoder encoder = 1;</code>
     * @return \Saltoapis\Nebula\Encoder\V1\Encoder|null
     */
    public function getEncoder()
    {
        return $this->encoder;
    }

    public function hasEncoder()
    {
        return isset($this->encoder);
    }

    public function clearEncoder()
    {
        unset($this->encoder);
    }

    /**
     * The encoder resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.encoder.v1.Encoder encoder = 1;</code>
     * @param \Saltoapis\Nebula\Encoder\V1\Encoder $var
     * @return $this
     */
    public function setEncoder($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Encoder\V1\Encoder::class);
        $this->encoder = $var;

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

