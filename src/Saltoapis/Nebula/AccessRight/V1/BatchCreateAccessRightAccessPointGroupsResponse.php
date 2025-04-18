<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`BatchCreateAccessRightAccessPointGroups`][salto.nebula.user.v1.AccessRightService.BatchCreateAccessRightAccessPointGroups]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.BatchCreateAccessRightAccessPointGroupsResponse</code>
 */
class BatchCreateAccessRightAccessPointGroupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Access right's access point groups created.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightAccessPointGroup access_right_access_point_groups = 1;</code>
     */
    private $access_right_access_point_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPointGroup>|\Google\Protobuf\Internal\RepeatedField $access_right_access_point_groups
     *           Access right's access point groups created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Access right's access point groups created.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightAccessPointGroup access_right_access_point_groups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessRightAccessPointGroups()
    {
        return $this->access_right_access_point_groups;
    }

    /**
     * Access right's access point groups created.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightAccessPointGroup access_right_access_point_groups = 1;</code>
     * @param array<\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPointGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessRightAccessPointGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPointGroup::class);
        $this->access_right_access_point_groups = $arr;

        return $this;
    }

}

