<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CancelCardKey`][salto.nebula.user.v1.UserService.CancelCardKey]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.CancelCardKeyRequest</code>
 */
class CancelCardKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested user's card key to be canceled. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
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
     *           The name of the requested user's card key to be canceled. For example:
     *           `installations/surelock-homes-hq/users/john-watson/card-key`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested user's card key to be canceled. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the requested user's card key to be canceled. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
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

