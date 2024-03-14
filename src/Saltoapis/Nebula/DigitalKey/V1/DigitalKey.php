<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/digitalkey/v1/digital_key.proto

namespace Saltoapis\Nebula\DigitalKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The digital key object
 *
 * Generated from protobuf message <code>salto.nebula.digitalkey.v1.DigitalKey</code>
 */
class DigitalKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the digital key. It must have the format of
     * `digital-keys/&#42;`. For example: `digital-keys/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the digital key. It must have the format of
     *           `digital-keys/&#42;`. For example: `digital-keys/baker-street-entrance`.
     *     @type \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\AppKey $app_key
     *           An app key.
     *     @type \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey $wallet_key
     *           A wallet key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\DigitalKey\V1\DigitalKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the digital key. It must have the format of
     * `digital-keys/&#42;`. For example: `digital-keys/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the digital key. It must have the format of
     * `digital-keys/&#42;`. For example: `digital-keys/baker-street-entrance`.
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
     * An app key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.AppKey app_key = 2;</code>
     * @return \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\AppKey|null
     */
    public function getAppKey()
    {
        return $this->readOneof(2);
    }

    public function hasAppKey()
    {
        return $this->hasOneof(2);
    }

    /**
     * An app key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.AppKey app_key = 2;</code>
     * @param \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\AppKey $var
     * @return $this
     */
    public function setAppKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\AppKey::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.WalletKey wallet_key = 3;</code>
     * @return \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey|null
     */
    public function getWalletKey()
    {
        return $this->readOneof(3);
    }

    public function hasWalletKey()
    {
        return $this->hasOneof(3);
    }

    /**
     * A wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.WalletKey wallet_key = 3;</code>
     * @param \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey $var
     * @return $this
     */
    public function setWalletKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

