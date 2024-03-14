<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/event/v1/types.proto

namespace Saltoapis\Nebula\Event\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event representing the assignment of a user's card key.
 *
 * Generated from protobuf message <code>salto.nebula.event.v1.CardKeyAssigned</code>
 */
class CardKeyAssigned extends \Google\Protobuf\Internal\Message
{
    /**
     * Card key's user.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 1;</code>
     */
    protected $user = null;
    /**
     * Card key assigned.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey card_key = 2;</code>
     */
    protected $card_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\User\V1\User $user
     *           Card key's user.
     *     @type \Saltoapis\Nebula\User\V1\CardKey $card_key
     *           Card key assigned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Event\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Card key's user.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 1;</code>
     * @return \Saltoapis\Nebula\User\V1\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Card key's user.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 1;</code>
     * @param \Saltoapis\Nebula\User\V1\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Card key assigned.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey card_key = 2;</code>
     * @return \Saltoapis\Nebula\User\V1\CardKey|null
     */
    public function getCardKey()
    {
        return $this->card_key;
    }

    public function hasCardKey()
    {
        return isset($this->card_key);
    }

    public function clearCardKey()
    {
        unset($this->card_key);
    }

    /**
     * Card key assigned.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey card_key = 2;</code>
     * @param \Saltoapis\Nebula\User\V1\CardKey $var
     * @return $this
     */
    public function setCardKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\CardKey::class);
        $this->card_key = $var;

        return $this;
    }

}

