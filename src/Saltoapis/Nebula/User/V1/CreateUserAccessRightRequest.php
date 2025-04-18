<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CreateUserAccessRight`][salto.nebula.user.v1.UserService.CreateUserAccessRight]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.CreateUserAccessRightRequest</code>
 */
class CreateUserAccessRightRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where the users's access right
     * association is to be created. For example:
     * `installations/surelock-homes-hq/users/john-watson`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The user's access right association resource to be created. Client must
     * not set the `UserAccessRight.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.UserAccessRight user_access_right = 2;</code>
     */
    protected $user_access_right = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where the users's access right
     *           association is to be created. For example:
     *           `installations/surelock-homes-hq/users/john-watson`.
     *     @type \Saltoapis\Nebula\User\V1\UserAccessRight $user_access_right
     *           The user's access right association resource to be created. Client must
     *           not set the `UserAccessRight.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where the users's access right
     * association is to be created. For example:
     * `installations/surelock-homes-hq/users/john-watson`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where the users's access right
     * association is to be created. For example:
     * `installations/surelock-homes-hq/users/john-watson`.
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
     * The user's access right association resource to be created. Client must
     * not set the `UserAccessRight.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.UserAccessRight user_access_right = 2;</code>
     * @return \Saltoapis\Nebula\User\V1\UserAccessRight|null
     */
    public function getUserAccessRight()
    {
        return $this->user_access_right;
    }

    public function hasUserAccessRight()
    {
        return isset($this->user_access_right);
    }

    public function clearUserAccessRight()
    {
        unset($this->user_access_right);
    }

    /**
     * The user's access right association resource to be created. Client must
     * not set the `UserAccessRight.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.UserAccessRight user_access_right = 2;</code>
     * @param \Saltoapis\Nebula\User\V1\UserAccessRight $var
     * @return $this
     */
    public function setUserAccessRight($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\UserAccessRight::class);
        $this->user_access_right = $var;

        return $this;
    }

}

