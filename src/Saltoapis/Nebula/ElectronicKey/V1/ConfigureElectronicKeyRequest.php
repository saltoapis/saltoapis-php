<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/electronickey/v1/electronic_key.proto

namespace Saltoapis\Nebula\ElectronicKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ConfigureElectronicKey`][salto.nebula.electronickey.v1.ElectronicKeyService.ConfigureElectronicKey]
 *
 * Generated from protobuf message <code>salto.nebula.electronickey.v1.ConfigureElectronicKeyRequest</code>
 */
class ConfigureElectronicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the electronic key to be configured. For example:
     * `installations/surelock-homes-hq/electronic-keys/main-key`.
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
     *           The resource name of the electronic key to be configured. For example:
     *           `installations/surelock-homes-hq/electronic-keys/main-key`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the electronic key to be configured. For example:
     * `installations/surelock-homes-hq/electronic-keys/main-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the electronic key to be configured. For example:
     * `installations/surelock-homes-hq/electronic-keys/main-key`.
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

