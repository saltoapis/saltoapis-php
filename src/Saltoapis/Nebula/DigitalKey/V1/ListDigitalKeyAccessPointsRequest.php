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
 * Generated from protobuf message <code>salto.nebula.digitalkey.v1.ListDigitalKeyAccessPointsRequest</code>
 */
class ListDigitalKeyAccessPointsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name. For example, `digital-keys/baker-street-key`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * A filter that chooses which access points to return.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * The `next_page_token` value returned from a previous `List` request, if
     * any.
     * Note: this field is not being used in the current implementation. It is being ignored.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource name. For example, `digital-keys/baker-street-key`.
     *     @type string $filter
     *           A filter that chooses which access points to return.
     *     @type int $page_size
     *           The maximum number of items to return.
     *     @type string $page_token
     *           The `next_page_token` value returned from a previous `List` request, if
     *           any.
     *           Note: this field is not being used in the current implementation. It is being ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\DigitalKey\V1\DigitalKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource name. For example, `digital-keys/baker-street-key`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource name. For example, `digital-keys/baker-street-key`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A filter that chooses which access points to return.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter that chooses which access points to return.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The `next_page_token` value returned from a previous `List` request, if
     * any.
     * Note: this field is not being used in the current implementation. It is being ignored.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The `next_page_token` value returned from a previous `List` request, if
     * any.
     * Note: this field is not being used in the current implementation. It is being ignored.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

