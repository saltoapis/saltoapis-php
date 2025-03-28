<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/digitalkey/v1/digital_key.proto

namespace Saltoapis\Nebula\DigitalKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ListDigitalKeyAccessPoints`][salto.nebula.digitalkey.v1.DigitalKeyService.ListDigitalKeyAccessPoints]
 *
 * Generated from protobuf message <code>salto.nebula.digitalkey.v1.ListDigitalKeyAccessPointsResponse</code>
 */
class ListDigitalKeyAccessPointsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `digital_key_access_points` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.digitalkey.v1.DigitalKeyAccessPoint digital_key_access_points = 1;</code>
     */
    private $digital_key_access_points;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     * Note: this field is not being used in the current implementation. It always returns an empty string.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Saltoapis\Nebula\DigitalKey\V1\DigitalKeyAccessPoint>|\Google\Protobuf\Internal\RepeatedField $digital_key_access_points
     *           The field name should match the noun `digital_key_access_points` in the method name.
     *           There will be a maximum number of items returned based on the `page_size`
     *           field in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *           Note: this field is not being used in the current implementation. It always returns an empty string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\DigitalKey\V1\DigitalKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `digital_key_access_points` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.digitalkey.v1.DigitalKeyAccessPoint digital_key_access_points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDigitalKeyAccessPoints()
    {
        return $this->digital_key_access_points;
    }

    /**
     * The field name should match the noun `digital_key_access_points` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.digitalkey.v1.DigitalKeyAccessPoint digital_key_access_points = 1;</code>
     * @param array<\Saltoapis\Nebula\DigitalKey\V1\DigitalKeyAccessPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDigitalKeyAccessPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\DigitalKey\V1\DigitalKeyAccessPoint::class);
        $this->digital_key_access_points = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     * Note: this field is not being used in the current implementation. It always returns an empty string.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     * Note: this field is not being used in the current implementation. It always returns an empty string.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

