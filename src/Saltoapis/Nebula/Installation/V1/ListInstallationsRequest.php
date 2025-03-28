<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ListInstallations`][salto.nebula.installation.v1.InstallationService.ListInstallations]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.ListInstallationsRequest</code>
 */
class ListInstallationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     */
    protected $page_size = 0;
    /**
     * The `next_page_token` value returned from a previous `List` request, if
     * any.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';
    /**
     * A filter that chooses which installations to return.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    protected $filter = '';
    /**
     * How the results should be sorted.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    protected $order_by = '';
    /**
     * Show deleted installations.
     *
     * Generated from protobuf field <code>bool show_deleted = 5;</code>
     */
    protected $show_deleted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *           The maximum number of items to return.
     *     @type string $page_token
     *           The `next_page_token` value returned from a previous `List` request, if
     *           any.
     *     @type string $filter
     *           A filter that chooses which installations to return.
     *     @type string $order_by
     *           How the results should be sorted.
     *     @type bool $show_deleted
     *           Show deleted installations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
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
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The `next_page_token` value returned from a previous `List` request, if
     * any.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A filter that chooses which installations to return.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter that chooses which installations to return.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
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
     * How the results should be sorted.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * How the results should be sorted.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Show deleted installations.
     *
     * Generated from protobuf field <code>bool show_deleted = 5;</code>
     * @return bool
     */
    public function getShowDeleted()
    {
        return $this->show_deleted;
    }

    /**
     * Show deleted installations.
     *
     * Generated from protobuf field <code>bool show_deleted = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->show_deleted = $var;

        return $this;
    }

}

