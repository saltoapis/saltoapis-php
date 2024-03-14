<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\AccessPointGroup\V1;

/**
 * Access point group is a collection of access points that can be managed as a
 * single entity. It is used to simplify the management of multiple access
 * points by grouping them together and applying settings to all of them at
 * once. It's also used to optimize the amount of data being used to store all
 * access point identifiers by using only an access point group identifier.
 */
class AccessPointGroupServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an access point group
     *
     * Creates an access point group.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccessPointGroup(\Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/CreateAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access point group
     *
     * Gets an existing access point group.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\GetAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccessPointGroup(\Saltoapis\Nebula\AccessPointGroup\V1\GetAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/GetAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * List access point groups
     *
     * Returns a list of access point groups that have been previously
     * created.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\ListAccessPointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAccessPointGroups(\Saltoapis\Nebula\AccessPointGroup\V1\ListAccessPointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/ListAccessPointGroups',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\ListAccessPointGroupsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an access point group
     *
     * Updates an existing access point group.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\UpdateAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccessPointGroup(\Saltoapis\Nebula\AccessPointGroup\V1\UpdateAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/UpdateAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an access point group
     *
     * Soft deletes an access point group.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\DeleteAccessPointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccessPointGroup(\Saltoapis\Nebula\AccessPointGroup\V1\DeleteAccessPointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/DeleteAccessPointGroup',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an access point
     *
     * Creates an access point group's access point association.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccessPointGroupAccessPoint(\Saltoapis\Nebula\AccessPointGroup\V1\CreateAccessPointGroupAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/CreateAccessPointGroupAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroupAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access point
     *
     * Retrieves an existing access point group's access point association.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\GetAccessPointGroupAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccessPointGroupAccessPoint(\Saltoapis\Nebula\AccessPointGroup\V1\GetAccessPointGroupAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/GetAccessPointGroupAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroupAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * List access points
     *
     * Lists an existing access point group's access point associations.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\ListAccessPointGroupAccessPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAccessPointGroupAccessPoints(\Saltoapis\Nebula\AccessPointGroup\V1\ListAccessPointGroupAccessPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/ListAccessPointGroupAccessPoints',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\ListAccessPointGroupAccessPointsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an access point
     *
     * Updates an existing access point group's access point association.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\UpdateAccessPointGroupAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccessPointGroupAccessPoint(\Saltoapis\Nebula\AccessPointGroup\V1\UpdateAccessPointGroupAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/UpdateAccessPointGroupAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessPointGroup\V1\AccessPointGroupAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an access point
     *
     * Deletes an access point group's access point association.
     * @param \Saltoapis\Nebula\AccessPointGroup\V1\DeleteAccessPointGroupAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccessPointGroupAccessPoint(\Saltoapis\Nebula\AccessPointGroup\V1\DeleteAccessPointGroupAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspointgroup.v1.AccessPointGroupService/DeleteAccessPointGroupAccessPoint',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
