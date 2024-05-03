<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/digitalkey/v1/digital_key.proto

namespace Saltoapis\Nebula\DigitalKey\V1\DigitalKey;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wallet key.
 *
 * Generated from protobuf message <code>salto.nebula.digitalkey.v1.DigitalKey.WalletKey</code>
 */
class WalletKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata associated to this wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.Metadata metadata = 1;</code>
     */
    protected $metadata = null;
    /**
     * Hydra credential of this user's wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.WalletKey.HydraCredential hydra_credential = 2;</code>
     */
    protected $hydra_credential = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata $metadata
     *           Metadata associated to this wallet key.
     *     @type \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey\HydraCredential $hydra_credential
     *           Hydra credential of this user's wallet key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\DigitalKey\V1\DigitalKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata associated to this wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.Metadata metadata = 1;</code>
     * @return \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Metadata associated to this wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.Metadata metadata = 1;</code>
     * @param \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Hydra credential of this user's wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.WalletKey.HydraCredential hydra_credential = 2;</code>
     * @return \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey\HydraCredential|null
     */
    public function getHydraCredential()
    {
        return $this->hydra_credential;
    }

    public function hasHydraCredential()
    {
        return isset($this->hydra_credential);
    }

    public function clearHydraCredential()
    {
        unset($this->hydra_credential);
    }

    /**
     * Hydra credential of this user's wallet key.
     *
     * Generated from protobuf field <code>.salto.nebula.digitalkey.v1.DigitalKey.WalletKey.HydraCredential hydra_credential = 2;</code>
     * @param \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey\HydraCredential $var
     * @return $this
     */
    public function setHydraCredential($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\DigitalKey\V1\DigitalKey\WalletKey\HydraCredential::class);
        $this->hydra_credential = $var;

        return $this;
    }

}

