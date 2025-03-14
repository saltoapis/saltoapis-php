<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/unit/v1/unit.proto

namespace Saltoapis\Nebula\Unit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UpdateUnit`][salto.nebula.unit.v1.UnitService.UpdateUnit]
 *
 * Generated from protobuf message <code>salto.nebula.unit.v1.UpdateUnitRequest</code>
 */
class UpdateUnitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unit resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.unit.v1.Unit unit = 1;</code>
     */
    protected $unit = null;
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
     *     @type \Saltoapis\Nebula\Unit\V1\Unit $unit
     *           The unit resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Unit\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * The unit resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.unit.v1.Unit unit = 1;</code>
     * @return \Saltoapis\Nebula\Unit\V1\Unit|null
     */
    public function getUnit()
    {
        return $this->unit;
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
     * The unit resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.unit.v1.Unit unit = 1;</code>
     * @param \Saltoapis\Nebula\Unit\V1\Unit $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Unit\V1\Unit::class);
        $this->unit = $var;

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

