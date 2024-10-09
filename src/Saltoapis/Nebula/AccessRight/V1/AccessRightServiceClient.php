<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\AccessRight\V1;

/**
 * Access rights simplify the management of access permissions for large
 * sets of users with similar access profiles. An access right can contain
 * multiple access points. Access rights determine who can enter where, and
 * when. This service is responsible for managing access right resources as well
 * as their association with access points.
 */
class AccessRightServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an access right
     *
     * Creates a new access right.
     * @param \Saltoapis\Nebula\AccessRight\V1\CreateAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccessRight(\Saltoapis\Nebula\AccessRight\V1\CreateAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/CreateAccessRight',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRight', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access right
     *
     * Retrieves an existing access right.
     * @param \Saltoapis\Nebula\AccessRight\V1\GetAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccessRight(\Saltoapis\Nebula\AccessRight\V1\GetAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/GetAccessRight',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRight', 'decode'],
        $metadata, $options);
    }

    /**
     * List access rights
     *
     * Returns a list of access rights that have been previously created.
     * @param \Saltoapis\Nebula\AccessRight\V1\ListAccessRightsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAccessRights(\Saltoapis\Nebula\AccessRight\V1\ListAccessRightsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/ListAccessRights',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\ListAccessRightsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an access right
     *
     * Updates an existing access right.
     * @param \Saltoapis\Nebula\AccessRight\V1\UpdateAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccessRight(\Saltoapis\Nebula\AccessRight\V1\UpdateAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/UpdateAccessRight',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRight', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an access right
     *
     * Permanently deletes an access right. This cannot be undone.
     * @param \Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccessRight(\Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/DeleteAccessRight',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an access point
     *
     * Creates an access right's access point association.
     * @param \Saltoapis\Nebula\AccessRight\V1\CreateAccessRightAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccessRightAccessPoint(\Saltoapis\Nebula\AccessRight\V1\CreateAccessRightAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/CreateAccessRightAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a batch of access rights access points
     *
     * Creates a batch of access rights access points associations.
     * This method allows the creation of multiple access rights access points in a single operation.
     * Experimental feature. DO NOT USE
     * @param \Saltoapis\Nebula\AccessRight\V1\BatchCreateAccessRightAccessPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchCreateAccessRightAccessPoints(\Saltoapis\Nebula\AccessRight\V1\BatchCreateAccessRightAccessPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/BatchCreateAccessRightAccessPoints',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\BatchCreateAccessRightAccessPointsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access point
     *
     * Retrieves an existing access right's access point association.
     * @param \Saltoapis\Nebula\AccessRight\V1\GetAccessRightAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccessRightAccessPoint(\Saltoapis\Nebula\AccessRight\V1\GetAccessRightAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/GetAccessRightAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * List access points
     *
     * Lists an existing access right's access point associations.
     * @param \Saltoapis\Nebula\AccessRight\V1\ListAccessRightAccessPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAccessRightAccessPoints(\Saltoapis\Nebula\AccessRight\V1\ListAccessRightAccessPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/ListAccessRightAccessPoints',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\ListAccessRightAccessPointsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an access point
     *
     * Updates an existing access right's access point association.
     * @param \Saltoapis\Nebula\AccessRight\V1\UpdateAccessRightAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccessRightAccessPoint(\Saltoapis\Nebula\AccessRight\V1\UpdateAccessRightAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/UpdateAccessRightAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an access point
     *
     * Deletes an access right's access point association.
     * @param \Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccessRightAccessPoint(\Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/DeleteAccessRightAccessPoint',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a batch of access points
     *
     * Permanently deletes a batch of access right's access point associations.
     * This cannot be undone.
     * Experimental feature. DO NOT USE
     * @param \Saltoapis\Nebula\AccessRight\V1\BatchDeleteAccessRightAccessPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchDeleteAccessRightAccessPoints(\Saltoapis\Nebula\AccessRight\V1\BatchDeleteAccessRightAccessPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/BatchDeleteAccessRightAccessPoints',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\BatchDeleteAccessRightAccessPointsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an access point group
     *
     * Creates an access right's access point group association.
     * @param \Saltoapis\Nebula\AccessRight\V1\CreateAccessRightAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccessRightAccessPointGroup(\Saltoapis\Nebula\AccessRight\V1\CreateAccessRightAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/CreateAccessRightAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access point group
     *
     * Retrieves an existing access right's access point group association.
     * @param \Saltoapis\Nebula\AccessRight\V1\GetAccessRightAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccessRightAccessPointGroup(\Saltoapis\Nebula\AccessRight\V1\GetAccessRightAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/GetAccessRightAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * List access point groups
     *
     * Lists an existing access right's access point group associations.
     * @param \Saltoapis\Nebula\AccessRight\V1\ListAccessRightAccessPointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAccessRightAccessPointGroups(\Saltoapis\Nebula\AccessRight\V1\ListAccessRightAccessPointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/ListAccessRightAccessPointGroups',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\ListAccessRightAccessPointGroupsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an access point group
     *
     * Updates an existing access right's access point group association.
     * @param \Saltoapis\Nebula\AccessRight\V1\UpdateAccessRightAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccessRightAccessPointGroup(\Saltoapis\Nebula\AccessRight\V1\UpdateAccessRightAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/UpdateAccessRightAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an access point group
     *
     * Deletes an access right's access point group association.
     * @param \Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccessRightAccessPointGroup(\Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accessright.v1.AccessRightService/DeleteAccessRightAccessPointGroup',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
