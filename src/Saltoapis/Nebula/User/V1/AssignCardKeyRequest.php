<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`AssignCardkey`][salto.nebula.user.v1.UserService.AssignCardkey]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.AssignCardKeyRequest</code>
 */
class AssignCardKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested user's card key to be assigned. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    protected $card_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the requested user's card key to be assigned. For example:
     *           `installations/surelock-homes-hq/users/john-watson/card-key`.
     *     @type string $uid
     *           Unique identifier of the physical card. Length dependent of technology.
     *           Max length for ISO14443-3 is 10 bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested user's card key to be assigned. For example:
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
     * The name of the requested user's card key to be assigned. For example:
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

    /**
     * Unique identifier of the physical card. Length dependent of technology.
     * Max length for ISO14443-3 is 10 bytes.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->readOneof(2);
    }

    public function hasUid()
    {
        return $this->hasOneof(2);
    }

    /**
     * Unique identifier of the physical card. Length dependent of technology.
     * Max length for ISO14443-3 is 10 bytes.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCardId()
    {
        return $this->whichOneof("card_id");
    }

}

