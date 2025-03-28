<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CreateAccessRight`][salto.nebula.accessright.v1.AccessRightService.CreateAccessRight]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.CreateAccessRightRequest</code>
 */
class CreateAccessRightRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where the access right is to be
     * created. For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The access right ID to use for this access right. In case it's
     * empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string access_right_id = 2;</code>
     */
    protected $access_right_id = null;
    /**
     * The access right resource to be created. Client must not set the
     * `AccessRight.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.accessright.v1.AccessRight access_right = 3;</code>
     */
    protected $access_right = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where the access right is to be
     *           created. For example: `installations/surelock-homes-hq`.
     *     @type string $access_right_id
     *           The access right ID to use for this access right. In case it's
     *           empty the server will autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\AccessRight\V1\AccessRight $access_right
     *           The access right resource to be created. Client must not set the
     *           `AccessRight.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where the access right is to be
     * created. For example: `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where the access right is to be
     * created. For example: `installations/surelock-homes-hq`.
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
     * The access right ID to use for this access right. In case it's
     * empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string access_right_id = 2;</code>
     * @return string
     */
    public function getAccessRightId()
    {
        return isset($this->access_right_id) ? $this->access_right_id : '';
    }

    public function hasAccessRightId()
    {
        return isset($this->access_right_id);
    }

    public function clearAccessRightId()
    {
        unset($this->access_right_id);
    }

    /**
     * The access right ID to use for this access right. In case it's
     * empty the server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string access_right_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessRightId($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_right_id = $var;

        return $this;
    }

    /**
     * The access right resource to be created. Client must not set the
     * `AccessRight.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.accessright.v1.AccessRight access_right = 3;</code>
     * @return \Saltoapis\Nebula\AccessRight\V1\AccessRight|null
     */
    public function getAccessRight()
    {
        return $this->access_right;
    }

    public function hasAccessRight()
    {
        return isset($this->access_right);
    }

    public function clearAccessRight()
    {
        unset($this->access_right);
    }

    /**
     * The access right resource to be created. Client must not set the
     * `AccessRight.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.accessright.v1.AccessRight access_right = 3;</code>
     * @param \Saltoapis\Nebula\AccessRight\V1\AccessRight $var
     * @return $this
     */
    public function setAccessRight($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\AccessRight\V1\AccessRight::class);
        $this->access_right = $var;

        return $this;
    }

}

