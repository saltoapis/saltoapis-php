<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/electronickey/v1/electronic_key.proto

namespace Saltoapis\Nebula\ElectronicKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`GenerateFirmwareDownloadUri`][salto.nebula.electronickey.v1.ElectronicKeyService.GenerateFirmwareDownloadUri]
 *
 * Generated from protobuf message <code>salto.nebula.electronickey.v1.GenerateFirmwareDownloadUriRequest</code>
 */
class GenerateFirmwareDownloadUriRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the electronickey to get the firmware download URI.
     * For example: `installations/surelock-homes-hq/electronic-keys/main-key`.
     *
     * Generated from protobuf field <code>string electronic_key = 1;</code>
     */
    protected $electronic_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $electronic_key
     *           The resource name of the electronickey to get the firmware download URI.
     *           For example: `installations/surelock-homes-hq/electronic-keys/main-key`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the electronickey to get the firmware download URI.
     * For example: `installations/surelock-homes-hq/electronic-keys/main-key`.
     *
     * Generated from protobuf field <code>string electronic_key = 1;</code>
     * @return string
     */
    public function getElectronicKey()
    {
        return $this->electronic_key;
    }

    /**
     * The resource name of the electronickey to get the firmware download URI.
     * For example: `installations/surelock-homes-hq/electronic-keys/main-key`.
     *
     * Generated from protobuf field <code>string electronic_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setElectronicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->electronic_key = $var;

        return $this;
    }

}

