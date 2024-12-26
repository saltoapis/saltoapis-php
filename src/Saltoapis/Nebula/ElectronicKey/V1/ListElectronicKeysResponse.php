<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/electronickey/v1/electronic_key.proto

namespace Saltoapis\Nebula\ElectronicKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [ListElectronicKeys][salto.nebula.electronickey.v1.ElectronicKeyService.ListElectronicKeys]
 *
 * Generated from protobuf message <code>salto.nebula.electronickey.v1.ListElectronicKeysResponse</code>
 */
class ListElectronicKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `electronic_keys` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.electronickey.v1.ElectronicKey electronic_keys = 1;</code>
     */
    private $electronic_keys;
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
     *     @type array<\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey>|\Google\Protobuf\Internal\RepeatedField $electronic_keys
     *           The field name should match the noun `electronic_keys` in the method name. There
     *           will be a maximum number of items returned based on the `page_size` field
     *           in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `electronic_keys` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.electronickey.v1.ElectronicKey electronic_keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElectronicKeys()
    {
        return $this->electronic_keys;
    }

    /**
     * The field name should match the noun `electronic_keys` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.electronickey.v1.ElectronicKey electronic_keys = 1;</code>
     * @param array<\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElectronicKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey::class);
        $this->electronic_keys = $arr;

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
