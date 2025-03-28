<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/unit/v1/unit.proto

namespace Saltoapis\Nebula\Unit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CleanOutUnit`][salto.nebula.unit.v1.UnitService.CleanOutUnit]
 *
 * Generated from protobuf message <code>salto.nebula.unit.v1.CleanOutUnitRequest</code>
 */
class CleanOutUnitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the unit to be cleaned out. For example:
     * `installations/salto-hq/units/101`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the unit to be cleaned out. For example:
     *           `installations/salto-hq/units/101`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Unit\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the unit to be cleaned out. For example:
     * `installations/salto-hq/units/101`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the unit to be cleaned out. For example:
     * `installations/salto-hq/units/101`.
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

}

