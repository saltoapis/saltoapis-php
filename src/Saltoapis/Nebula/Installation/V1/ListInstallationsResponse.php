<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`ListInstallations`][salto.nebula.installation.v1.InstallationService.ListInstallations]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.ListInstallationsResponse</code>
 */
class ListInstallationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `installations` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.installation.v1.Installation installations = 1;</code>
     */
    private $installations;
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
     *     @type array<\Saltoapis\Nebula\Installation\V1\Installation>|\Google\Protobuf\Internal\RepeatedField $installations
     *           The field name should match the noun `installations` in the method name.
     *           There will be a maximum number of items returned based on the `page_size`
     *           field in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `installations` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.installation.v1.Installation installations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstallations()
    {
        return $this->installations;
    }

    /**
     * The field name should match the noun `installations` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.installation.v1.Installation installations = 1;</code>
     * @param array<\Saltoapis\Nebula\Installation\V1\Installation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstallations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\Installation\V1\Installation::class);
        $this->installations = $arr;

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

