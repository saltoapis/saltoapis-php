<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`TestPermissions`][salto.nebula.installation.v1.InstallationService.TestPermissions]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.TestPermissionsResponse</code>
 */
class TestPermissionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A subset of `TestPermissionsRequest.permissions` that the caller is
     * allowed.
     *
     * Generated from protobuf field <code>repeated string permissions = 1;</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $permissions
     *           A subset of `TestPermissionsRequest.permissions` that the caller is
     *           allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * A subset of `TestPermissionsRequest.permissions` that the caller is
     * allowed.
     *
     * Generated from protobuf field <code>repeated string permissions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * A subset of `TestPermissionsRequest.permissions` that the caller is
     * allowed.
     *
     * Generated from protobuf field <code>repeated string permissions = 1;</code>
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

