<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`ListUsers`][salto.nebula.user.v1.UserService.ListUsers]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.ListUsersResponse</code>
 */
class ListUsersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `users` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.user.v1.User users = 1;</code>
     */
    private $users;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * The total number of users in all pages, irrespective of any pagination.
     * This is an estimated number based on the requested filter, and it may change in
     * subsequent pages.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Saltoapis\Nebula\User\V1\User>|\Google\Protobuf\Internal\RepeatedField $users
     *           The field name should match the noun `users` in the method name. There
     *           will be a maximum number of items returned based on the `page_size` field
     *           in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type int $total_size
     *           The total number of users in all pages, irrespective of any pagination.
     *           This is an estimated number based on the requested filter, and it may change in
     *           subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `users` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.user.v1.User users = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * The field name should match the noun `users` in the method name. There
     * will be a maximum number of items returned based on the `page_size` field
     * in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.user.v1.User users = 1;</code>
     * @param array<\Saltoapis\Nebula\User\V1\User>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\User\V1\User::class);
        $this->users = $arr;

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

    /**
     * The total number of users in all pages, irrespective of any pagination.
     * This is an estimated number based on the requested filter, and it may change in
     * subsequent pages.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of users in all pages, irrespective of any pagination.
     * This is an estimated number based on the requested filter, and it may change in
     * subsequent pages.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

}

