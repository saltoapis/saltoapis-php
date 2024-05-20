<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Unit\V1;

/**
 * UnitService is the service responsible for managing unit resources.
 */
class UnitServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a unit
     *
     * Creates a new unit.
     * @param \Saltoapis\Nebula\Unit\V1\CreateUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUnit(\Saltoapis\Nebula\Unit\V1\CreateUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/CreateUnit',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\Unit', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an existing unit
     *
     * Retrieves an existing unit.
     * @param \Saltoapis\Nebula\Unit\V1\GetUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUnit(\Saltoapis\Nebula\Unit\V1\GetUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/GetUnit',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\Unit', 'decode'],
        $metadata, $options);
    }

    /**
     * List units
     *
     * Returns a list of units that have been previously created.
     * @param \Saltoapis\Nebula\Unit\V1\ListUnitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUnits(\Saltoapis\Nebula\Unit\V1\ListUnitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/ListUnits',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\ListUnitsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an existing unit
     *
     * Updates an existing unit.
     * @param \Saltoapis\Nebula\Unit\V1\UpdateUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUnit(\Saltoapis\Nebula\Unit\V1\UpdateUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/UpdateUnit',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\Unit', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a unit
     *
     * Permanently deletes a unit. This cannot be undone.
     * @param \Saltoapis\Nebula\Unit\V1\DeleteUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUnit(\Saltoapis\Nebula\Unit\V1\DeleteUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/DeleteUnit',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Clean out a unit
     *
     * Cleans out a unit by deleting all the users belonging to it. This process
     * implicitly entails the blocking of the keys that were active within the
     * unit. Cleaning out a unit will not delete the access rights and the
     * associated access points that belong to the unit.
     * (-- api-linter: core::0136::http-uri-suffix=disabled
     *     aip.dev/not-precedent: We need to do this because clean out is a
     *     phrasal verb and api-linter don't support using them. --)
     * @param \Saltoapis\Nebula\Unit\V1\CleanOutUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CleanOutUnit(\Saltoapis\Nebula\Unit\V1\CleanOutUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/CleanOutUnit',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\CleanOutUnitResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Move in a unit
     *
     * Moves in a unit by creating new occupants and associating them with the unit.
     * (-- api-linter: core::0136::http-uri-suffix=disabled
     *     aip.dev/not-precedent: We need to do this because "move in" is a phrasal
     *     verb and the api-linter doesn't support using them. --)
     * @param \Saltoapis\Nebula\Unit\V1\MoveInUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MoveInUnit(\Saltoapis\Nebula\Unit\V1\MoveInUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/MoveInUnit',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\MoveInUnitResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Move out a unit
     *
     * Moves out a unit by deleting all the occupants belonging to it. This process
     * implicitly entails the blocking of the keys that were active within the
     * unit. Moving out a unit will not delete the access rights and the
     * associated access points that belong to the unit.
     * (-- api-linter: core::0136::http-uri-suffix=disabled
     *     aip.dev/not-precedent: We need to do this because "move out" is a phrasal
     *     verb and the api-linter doesn't support using them. --)
     * @param \Saltoapis\Nebula\Unit\V1\MoveOutUnitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MoveOutUnit(\Saltoapis\Nebula\Unit\V1\MoveOutUnitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/MoveOutUnit',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\MoveOutUnitResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a policy
     *
     * Creates a new policy.
     * @param \Saltoapis\Nebula\Unit\V1\CreatePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePolicy(\Saltoapis\Nebula\Unit\V1\CreatePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/CreatePolicy',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an existing policy
     *
     * Retrieves an existing policy.
     * @param \Saltoapis\Nebula\Unit\V1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPolicy(\Saltoapis\Nebula\Unit\V1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/GetPolicy',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * List policies
     *
     * Returns a list of policies that have been previously created.
     * @param \Saltoapis\Nebula\Unit\V1\ListPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPolicies(\Saltoapis\Nebula\Unit\V1\ListPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/ListPolicies',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\ListPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an existing policy
     *
     * Updates an existing policy.
     * @param \Saltoapis\Nebula\Unit\V1\UpdatePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePolicy(\Saltoapis\Nebula\Unit\V1\UpdatePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/UpdatePolicy',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a policy
     *
     * Permanently deletes a policy. This cannot be undone.
     * @param \Saltoapis\Nebula\Unit\V1\DeletePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePolicy(\Saltoapis\Nebula\Unit\V1\DeletePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/DeletePolicy',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Test a permission
     *
     * Returns permissions that a caller has on the installation. If the
     * installation does not exist, this will return an empty set of
     * permissions, not a NOT_FOUND error.
     * @param \Saltoapis\Nebula\Unit\V1\TestPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestPermissions(\Saltoapis\Nebula\Unit\V1\TestPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.unit.v1.UnitService/TestPermissions',
        $argument,
        ['\Saltoapis\Nebula\Unit\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
