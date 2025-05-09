<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`CancelWalletKey`][salto.nebula.user.v1.UserService.CancelWalletKey]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.CancelWalletKeyResponse</code>
 */
class CancelWalletKeyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The canceled wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.WalletKey wallet_key = 1;</code>
     */
    protected $wallet_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\User\V1\WalletKey $wallet_key
     *           The canceled wallet key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * The canceled wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.WalletKey wallet_key = 1;</code>
     * @return \Saltoapis\Nebula\User\V1\WalletKey|null
     */
    public function getWalletKey()
    {
        return $this->wallet_key;
    }

    public function hasWalletKey()
    {
        return isset($this->wallet_key);
    }

    public function clearWalletKey()
    {
        unset($this->wallet_key);
    }

    /**
     * The canceled wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.WalletKey wallet_key = 1;</code>
     * @param \Saltoapis\Nebula\User\V1\WalletKey $var
     * @return $this
     */
    public function setWalletKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\WalletKey::class);
        $this->wallet_key = $var;

        return $this;
    }

}

