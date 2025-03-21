<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/unit/v1/unit.proto

namespace Saltoapis\Nebula\Unit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CreateUnit`][salto.nebula.unit.v1.UnitService.CreateUnit]
 *
 * Generated from protobuf message <code>salto.nebula.unit.v1.CreateUnitRequest</code>
 */
class CreateUnitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource under which the unit is created. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The unit id to use for this unit. If it's empty the server will
     * autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string unit_id = 2;</code>
     */
    protected $unit_id = null;
    /**
     * The unit resource to be created. Client must not set the `Unit.name`
     * field.
     *
     * Generated from protobuf field <code>.salto.nebula.unit.v1.Unit unit = 3;</code>
     */
    protected $unit = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource under which the unit is created. For
     *           example, `installations/surelock-homes-hq`.
     *     @type string $unit_id
     *           The unit id to use for this unit. If it's empty the server will
     *           autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\Unit\V1\Unit $unit
     *           The unit resource to be created. Client must not set the `Unit.name`
     *           field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Unit\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource under which the unit is created. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource under which the unit is created. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The unit id to use for this unit. If it's empty the server will
     * autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string unit_id = 2;</code>
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
     * The unit id to use for this unit. If it's empty the server will
     * autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string unit_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit_id = $var;

        return $this;
    }

    /**
     * The unit resource to be created. Client must not set the `Unit.name`
     * field.
     *
     * Generated from protobuf field <code>.salto.nebula.unit.v1.Unit unit = 3;</code>
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
     * The unit resource to be created. Client must not set the `Unit.name`
     * field.
     *
     * Generated from protobuf field <code>.salto.nebula.unit.v1.Unit unit = 3;</code>
     * @param \Saltoapis\Nebula\Unit\V1\Unit $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Unit\V1\Unit::class);
        $this->unit = $var;

        return $this;
    }

}

