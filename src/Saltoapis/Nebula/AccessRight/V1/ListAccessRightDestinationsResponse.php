<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ListAccessRightDestinations`][salto.nebula.accessright.v1.AccessRightService.ListAccessRightDestinations]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.ListAccessRightDestinationsResponse</code>
 */
class ListAccessRightDestinationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `access_right_destinations` in the
     * method name. There will be a maximum number of items returned based on
     * the `page_size` field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightDestination access_right_destinations = 1;</code>
     */
    private $access_right_destinations;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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
     *     @type array<\Saltoapis\Nebula\AccessRight\V1\AccessRightDestination>|\Google\Protobuf\Internal\RepeatedField $access_right_destinations
     *           The field name should match the noun `access_right_destinations` in the
     *           method name. There will be a maximum number of items returned based on
     *           the `page_size` field in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `access_right_destinations` in the
     * method name. There will be a maximum number of items returned based on
     * the `page_size` field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightDestination access_right_destinations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessRightDestinations()
    {
        return $this->access_right_destinations;
    }

    /**
     * The field name should match the noun `access_right_destinations` in the
     * method name. There will be a maximum number of items returned based on
     * the `page_size` field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightDestination access_right_destinations = 1;</code>
     * @param array<\Saltoapis\Nebula\AccessRight\V1\AccessRightDestination>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessRightDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\AccessRight\V1\AccessRightDestination::class);
        $this->access_right_destinations = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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

