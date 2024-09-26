<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/encoder/v1/encoder.proto

namespace Saltoapis\Nebula\Encoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`GenerateFirmwareDownloadUri`][salto.nebula.encoder.v1.EncoderService.GenerateFirmwareDownloadUri]
 *
 * Generated from protobuf message <code>salto.nebula.encoder.v1.GenerateFirmwareDownloadUriRequest</code>
 */
class GenerateFirmwareDownloadUriRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the encoder to get the firmware download URI.
     * For example: `installations/surelock-homes-hq/encoders/conan-doyle`.
     *
     * Generated from protobuf field <code>string encoder = 1;</code>
     */
    protected $encoder = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $encoder
     *           The resource name of the encoder to get the firmware download URI.
     *           For example: `installations/surelock-homes-hq/encoders/conan-doyle`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Encoder\V1\Encoder::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the encoder to get the firmware download URI.
     * For example: `installations/surelock-homes-hq/encoders/conan-doyle`.
     *
     * Generated from protobuf field <code>string encoder = 1;</code>
     * @return string
     */
    public function getEncoder()
    {
        return $this->encoder;
    }

    /**
     * The resource name of the encoder to get the firmware download URI.
     * For example: `installations/surelock-homes-hq/encoders/conan-doyle`.
     *
     * Generated from protobuf field <code>string encoder = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEncoder($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoder = $var;

        return $this;
    }

}

