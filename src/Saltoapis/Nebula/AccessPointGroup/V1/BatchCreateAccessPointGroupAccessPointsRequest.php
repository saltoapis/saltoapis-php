<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/accesspointgroup/v1/access_point_group.proto

namespace Saltoapis\Nebula\AccessPointGroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`BatchCreateAccessPointGroupAccessPoints`][salto.nebula.accesspointgroup.v1.AccessPointGroupService.BatchCreateAccessPointGroupAccessPoints]
 *
 * Generated from protobuf message <code>salto.nebula.accesspointgroup.v1.BatchCreateAccessPointGroupAccessPointsRequest</code>
 */
class BatchCreateAccessPointGroupAccessPointsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where the access point group's
     * access point associations are to be created. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The request message specifying the resources to create.
     * A maximum of 100 access point group access points can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accesspointgroup.v1.CreateAccessPointGroupAccessPointRequest requests = 2;</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where the access point group's
     *           access point associations are to be created. For example:
     *           `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *     @type array<\Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupAccessPointRequest>|\Google\Protobuf\Internal\RepeatedField $requests
     *           The request message specifying the resources to create.
     *           A maximum of 100 access point group access points can be created in a batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where the access point group's
     * access point associations are to be created. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where the access point group's
     * access point associations are to be created. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses`.
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
     * The request message specifying the resources to create.
     * A maximum of 100 access point group access points can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accesspointgroup.v1.CreateAccessPointGroupAccessPointRequest requests = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * The request message specifying the resources to create.
     * A maximum of 100 access point group access points can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accesspointgroup.v1.CreateAccessPointGroupAccessPointRequest requests = 2;</code>
     * @param array<\Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupAccessPointRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupAccessPointRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

