<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The access right's access point group association
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.AccessRightAccessPointGroup</code>
 */
class AccessRightAccessPointGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the access right's access point group association. It
     * must have the format of
     * `installations/{@*}access-rights/{@*}access-point-groups/*`. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The access point group resource name to bind as an association to the
     * parent access right. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string access_point_group = 2;</code>
     */
    protected $access_point_group = '';
    /**
     * Display name of the associated entity. In this case an access point group.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the access right's access point group association. It
     *           must have the format of
     *           `installations/{@*}access-rights/{@*}access-point-groups/*`. For example:
     *           `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
     *     @type string $access_point_group
     *           The access point group resource name to bind as an association to the
     *           parent access right. For example:
     *           `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *     @type string $display_name
     *           Display name of the associated entity. In this case an access point group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the access right's access point group association. It
     * must have the format of
     * `installations/{@*}access-rights/{@*}access-point-groups/*`. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the access right's access point group association. It
     * must have the format of
     * `installations/{@*}access-rights/{@*}access-point-groups/*`. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
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

    /**
     * The access point group resource name to bind as an association to the
     * parent access right. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string access_point_group = 2;</code>
     * @return string
     */
    public function getAccessPointGroup()
    {
        return $this->access_point_group;
    }

    /**
     * The access point group resource name to bind as an association to the
     * parent access right. For example:
     * `installations/surelock-homes-hq/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string access_point_group = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessPointGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_point_group = $var;

        return $this;
    }

    /**
     * Display name of the associated entity. In this case an access point group.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the associated entity. In this case an access point group.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

