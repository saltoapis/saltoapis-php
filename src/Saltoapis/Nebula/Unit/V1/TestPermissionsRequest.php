<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/unit/v1/unit.proto

namespace Saltoapis\Nebula\Unit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`TestPermissions`][salto.nebula.unit.v1.UnitService.TestPermissions]
 *
 * Generated from protobuf message <code>salto.nebula.unit.v1.TestPermissionsRequest</code>
 */
class TestPermissionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name for which the policy detail is being requested, for
     * example: `installations/surelock-homes-hq/units/101`.
     *
     * Generated from protobuf field <code>string unit = 1;</code>
     */
    protected $unit = '';
    /**
     * The set of permissions to check for the `resource_name`. Permissions with
     * wildcards (such as '*' or 'nebula.access-point.*') are not allowed.
     *
     * Generated from protobuf field <code>repeated string permissions = 2;</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $unit
     *           The resource name for which the policy detail is being requested, for
     *           example: `installations/surelock-homes-hq/units/101`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $permissions
     *           The set of permissions to check for the `resource_name`. Permissions with
     *           wildcards (such as '*' or 'nebula.access-point.*') are not allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Unit\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name for which the policy detail is being requested, for
     * example: `installations/surelock-homes-hq/units/101`.
     *
     * Generated from protobuf field <code>string unit = 1;</code>
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * The resource name for which the policy detail is being requested, for
     * example: `installations/surelock-homes-hq/units/101`.
     *
     * Generated from protobuf field <code>string unit = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit = $var;

        return $this;
    }

    /**
     * The set of permissions to check for the `resource_name`. Permissions with
     * wildcards (such as '*' or 'nebula.access-point.*') are not allowed.
     *
     * Generated from protobuf field <code>repeated string permissions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * The set of permissions to check for the `resource_name`. Permissions with
     * wildcards (such as '*' or 'nebula.access-point.*') are not allowed.
     *
     * Generated from protobuf field <code>repeated string permissions = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->permissions = $arr;

        return $this;
    }

}

