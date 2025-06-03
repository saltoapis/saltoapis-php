<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\User\V1;

/**
 * A user can refer to both a holder of keys and a user with permissions to
 * manage other users. Users are eligible to access rights and may be assigned a
 * key. This service is responsible for managing user resources as well as
 * their associations with access rights.
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a user
     *
     * Creates a new user.
     * @param \Saltoapis\Nebula\User\V1\CreateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUser(\Saltoapis\Nebula\User\V1\CreateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/CreateUser',
        $argument,
        ['\Saltoapis\Nebula\User\V1\User', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a user
     *
     * Retrieves an existing user.
     * @param \Saltoapis\Nebula\User\V1\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUser(\Saltoapis\Nebula\User\V1\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/GetUser',
        $argument,
        ['\Saltoapis\Nebula\User\V1\User', 'decode'],
        $metadata, $options);
    }

    /**
     * List users
     *
     * Returns a list of users that have been previously created.
     * @param \Saltoapis\Nebula\User\V1\ListUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsers(\Saltoapis\Nebula\User\V1\ListUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/ListUsers',
        $argument,
        ['\Saltoapis\Nebula\User\V1\ListUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a user
     *
     * Updates an existing user.
     * @param \Saltoapis\Nebula\User\V1\UpdateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUser(\Saltoapis\Nebula\User\V1\UpdateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/UpdateUser',
        $argument,
        ['\Saltoapis\Nebula\User\V1\User', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a user
     *
     * Permanently deletes a user. This cannot be undone.
     * @param \Saltoapis\Nebula\User\V1\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUser(\Saltoapis\Nebula\User\V1\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/DeleteUser',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Block a user
     *
     * Temporarily blocks an existing user. While blocked, the user cannot
     * perform any admin actions, that is, they have no management role.
     * Neither can they unlock any access point with any type of key.
     * @param \Saltoapis\Nebula\User\V1\BlockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BlockUser(\Saltoapis\Nebula\User\V1\BlockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/BlockUser',
        $argument,
        ['\Saltoapis\Nebula\User\V1\BlockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unblock a user
     *
     * Unblocks an already blocked user. Once unblocked, the user can
     * perform the admin actions they could previously, that is,
     * they once again have a management role.
     * They can also once again unlock the access points they previously
     * had access to.
     * @param \Saltoapis\Nebula\User\V1\UnblockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnblockUser(\Saltoapis\Nebula\User\V1\UnblockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/UnblockUser',
        $argument,
        ['\Saltoapis\Nebula\User\V1\UnblockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a user access right
     *
     * Creates a user's access right association.
     * @param \Saltoapis\Nebula\User\V1\CreateUserAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUserAccessRight(\Saltoapis\Nebula\User\V1\CreateUserAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/CreateUserAccessRight',
        $argument,
        ['\Saltoapis\Nebula\User\V1\UserAccessRight', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a user access right
     *
     * Gets an existing user's access right association.
     * @param \Saltoapis\Nebula\User\V1\GetUserAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserAccessRight(\Saltoapis\Nebula\User\V1\GetUserAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/GetUserAccessRight',
        $argument,
        ['\Saltoapis\Nebula\User\V1\UserAccessRight', 'decode'],
        $metadata, $options);
    }

    /**
     * List user access rights
     *
     * Lists an existing user's access right associations.
     * @param \Saltoapis\Nebula\User\V1\ListUserAccessRightsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserAccessRights(\Saltoapis\Nebula\User\V1\ListUserAccessRightsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/ListUserAccessRights',
        $argument,
        ['\Saltoapis\Nebula\User\V1\ListUserAccessRightsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a user access right
     *
     * Updates an existing user's access right associations.
     * @param \Saltoapis\Nebula\User\V1\UpdateUserAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUserAccessRight(\Saltoapis\Nebula\User\V1\UpdateUserAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/UpdateUserAccessRight',
        $argument,
        ['\Saltoapis\Nebula\User\V1\UserAccessRight', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a user access right
     *
     * Deletes a user's access right association. This cannot be undone.
     * @param \Saltoapis\Nebula\User\V1\DeleteUserAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUserAccessRight(\Saltoapis\Nebula\User\V1\DeleteUserAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/DeleteUserAccessRight',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Assign a card key
     *
     * Assigns a card key to an existing user.
     * @param \Saltoapis\Nebula\User\V1\AssignCardKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AssignCardKey(\Saltoapis\Nebula\User\V1\AssignCardKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/AssignCardKey',
        $argument,
        ['\Saltoapis\Nebula\User\V1\CardKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancel a card key
     *
     * Cancels an existing user's card key.
     * @param \Saltoapis\Nebula\User\V1\CancelCardKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelCardKey(\Saltoapis\Nebula\User\V1\CancelCardKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/CancelCardKey',
        $argument,
        ['\Saltoapis\Nebula\User\V1\CardKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Encode a card key
     *
     * Encodes an existing user's card key.
     * @param \Saltoapis\Nebula\User\V1\EncodeCardKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EncodeCardKey(\Saltoapis\Nebula\User\V1\EncodeCardKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/EncodeCardKey',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Assign an app key
     *
     * Assigns an app key to an existing user.
     * @param \Saltoapis\Nebula\User\V1\AssignAppKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AssignAppKey(\Saltoapis\Nebula\User\V1\AssignAppKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/AssignAppKey',
        $argument,
        ['\Saltoapis\Nebula\User\V1\AppKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancel an app key
     *
     * Cancels an existing user's app key.
     * @param \Saltoapis\Nebula\User\V1\CancelAppKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelAppKey(\Saltoapis\Nebula\User\V1\CancelAppKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/CancelAppKey',
        $argument,
        ['\Saltoapis\Nebula\User\V1\AppKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Compute data of an app key
     *
     * Compute an existing user's app key data. Data contains encoded access
     * rights of the user.
     * (-- api-linter: core::0136::http-name-variable=disabled --)
     * @param \Saltoapis\Nebula\User\V1\ComputeAppKeyDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ComputeAppKeyData(\Saltoapis\Nebula\User\V1\ComputeAppKeyDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/ComputeAppKeyData',
        $argument,
        ['\Saltoapis\Nebula\User\V1\ComputeAppKeyDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Assign a wallet key
     *
     * Assigns a wallet key to an existing user.
     * @param \Saltoapis\Nebula\User\V1\AssignWalletKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AssignWalletKey(\Saltoapis\Nebula\User\V1\AssignWalletKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/AssignWalletKey',
        $argument,
        ['\Saltoapis\Nebula\User\V1\AssignWalletKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancel a wallet key
     *
     * Cancels an existing user's wallet key.
     * @param \Saltoapis\Nebula\User\V1\CancelWalletKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelWalletKey(\Saltoapis\Nebula\User\V1\CancelWalletKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/CancelWalletKey',
        $argument,
        ['\Saltoapis\Nebula\User\V1\CancelWalletKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Assign a passcode
     *
     * Assigns a passcode to an existing user.
     * @param \Saltoapis\Nebula\User\V1\AssignPasscodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AssignPasscode(\Saltoapis\Nebula\User\V1\AssignPasscodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/AssignPasscode',
        $argument,
        ['\Saltoapis\Nebula\User\V1\AssignPasscodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancel a passcode
     *
     * Cancels an existing user's passcode.
     * @param \Saltoapis\Nebula\User\V1\CancelPasscodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelPasscode(\Saltoapis\Nebula\User\V1\CancelPasscodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.user.v1.UserService/CancelPasscode',
        $argument,
        ['\Saltoapis\Nebula\User\V1\CancelPasscodeResponse', 'decode'],
        $metadata, $options);
    }

}
