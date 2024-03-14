<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/intercomadaptor/v1/intercom_adaptor.proto

namespace Saltoapis\Nebula\IntercomAdaptor\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [ListIntercomAdaptors][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.ListIntercomAdaptors]
 *
 * Generated from protobuf message <code>salto.nebula.intercomadaptor.v1.ListIntercomAdaptorsResponse</code>
 */
class ListIntercomAdaptorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `intercom_adaptors` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.intercomadaptor.v1.IntercomAdaptor intercom_adaptors = 1;</code>
     */
    private $intercom_adaptors;
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
     *     @type array<\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor>|\Google\Protobuf\Internal\RepeatedField $intercom_adaptors
     *           The field name should match the noun `intercom_adaptors` in the method name. There
     *           will be a maximum number of items returned based on the `page_size` field
     *           in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `intercom_adaptors` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.intercomadaptor.v1.IntercomAdaptor intercom_adaptors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntercomAdaptors()
    {
        return $this->intercom_adaptors;
    }

    /**
     * The field name should match the noun `intercom_adaptors` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.intercomadaptor.v1.IntercomAdaptor intercom_adaptors = 1;</code>
     * @param array<\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntercomAdaptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor::class);
        $this->intercom_adaptors = $arr;

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

