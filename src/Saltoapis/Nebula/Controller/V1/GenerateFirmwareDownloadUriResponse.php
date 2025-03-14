<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`GenerateFirmwareDownloadUri`][salto.nebula.controller.v1.ControllerService.GenerateFirmwareDownloadUri]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.GenerateFirmwareDownloadUriResponse</code>
 */
class GenerateFirmwareDownloadUriResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI to download the firmware bundle. The URI will be valid for 15
     * minutes.
     *
     * Generated from protobuf field <code>string download_uri = 1;</code>
     */
    protected $download_uri = '';
    /**
     * Digest of the file to be download. This can be used to cache the file and
     * avoid downloading it multiple times.
     * The digest has the following format: `<algorithm>:<digest>`.
     * For example: `sha256:8ff2483f2fbaa6c8dfd4e3556dbde298eb5e342b5e46f84eabdccc8e1cbe2d5a`.
     *
     * Generated from protobuf field <code>string digest = 2;</code>
     */
    protected $digest = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $download_uri
     *           The URI to download the firmware bundle. The URI will be valid for 15
     *           minutes.
     *     @type string $digest
     *           Digest of the file to be download. This can be used to cache the file and
     *           avoid downloading it multiple times.
     *           The digest has the following format: `<algorithm>:<digest>`.
     *           For example: `sha256:8ff2483f2fbaa6c8dfd4e3556dbde298eb5e342b5e46f84eabdccc8e1cbe2d5a`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI to download the firmware bundle. The URI will be valid for 15
     * minutes.
     *
     * Generated from protobuf field <code>string download_uri = 1;</code>
     * @return string
     */
    public function getDownloadUri()
    {
        return $this->download_uri;
    }

    /**
     * The URI to download the firmware bundle. The URI will be valid for 15
     * minutes.
     *
     * Generated from protobuf field <code>string download_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->download_uri = $var;

        return $this;
    }

    /**
     * Digest of the file to be download. This can be used to cache the file and
     * avoid downloading it multiple times.
     * The digest has the following format: `<algorithm>:<digest>`.
     * For example: `sha256:8ff2483f2fbaa6c8dfd4e3556dbde298eb5e342b5e46f84eabdccc8e1cbe2d5a`.
     *
     * Generated from protobuf field <code>string digest = 2;</code>
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Digest of the file to be download. This can be used to cache the file and
     * avoid downloading it multiple times.
     * The digest has the following format: `<algorithm>:<digest>`.
     * For example: `sha256:8ff2483f2fbaa6c8dfd4e3556dbde298eb5e342b5e46f84eabdccc8e1cbe2d5a`.
     *
     * Generated from protobuf field <code>string digest = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDigest($var)
    {
        GPBUtil::checkString($var, True);
        $this->digest = $var;

        return $this;
    }

}

