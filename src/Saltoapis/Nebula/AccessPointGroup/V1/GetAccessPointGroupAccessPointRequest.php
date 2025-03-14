<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accesspointgroup/v1/access_point_group.proto

namespace Saltoapis\Nebula\AccessPointGroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`GetAccessPointGroupAccessPoint`][salto.nebula.accesspointgroup.v1.AccessPointGroupService.GetAccessPointGroupAccessPoint]
 *
 * Generated from protobuf message <code>salto.nebula.accesspointgroup.v1.GetAccessPointGroupAccessPointRequest</code>
 */
class GetAccessPointGroupAccessPointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested access point group's access point association
     * resource. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses/access-points/baker-street-entrance`.
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
     *           The name of the requested access point group's access point association
     *           resource. For example:
     *           `installations/surelock-homes-hq/access-point-groups/common-accesses/access-points/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested access point group's access point association
     * resource. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses/access-points/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the requested access point group's access point association
     * resource. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses/access-points/baker-street-entrance`.
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

