<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/unit/v1/unit.proto

namespace Saltoapis\Nebula\Unit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ListUnits`][salto.nebula.unit.v1.UnitService.ListUnits]
 *
 * Generated from protobuf message <code>salto.nebula.unit.v1.ListUnitsResponse</code>
 */
class ListUnitsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `units` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.unit.v1.Unit units = 1;</code>
     */
    private $units;
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
     *     @type array<\Saltoapis\Nebula\Unit\V1\Unit>|\Google\Protobuf\Internal\RepeatedField $units
     *           The field name should match the noun `units` in the method name. There
     *           will be a maximum number of items returned based on the `page_size` field
     *           in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Unit\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `units` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.unit.v1.Unit units = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * The field name should match the noun `units` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.unit.v1.Unit units = 1;</code>
     * @param array<\Saltoapis\Nebula\Unit\V1\Unit>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\Unit\V1\Unit::class);
        $this->units = $arr;

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

