<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UnblockUser`][salto.nebula.user.v1.UserService.UnblockUser]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.UnblockUserRequest</code>
 */
class UnblockUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the user to be unblocked. For example:
     * `installations/surelock-homes-hq/users/john-watson`.
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
     *           The resource name of the user to be unblocked. For example:
     *           `installations/surelock-homes-hq/users/john-watson`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the user to be unblocked. For example:
     * `installations/surelock-homes-hq/users/john-watson`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the user to be unblocked. For example:
     * `installations/surelock-homes-hq/users/john-watson`.
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

