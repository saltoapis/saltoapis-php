<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Iam\V1;

/**
 * Identity and Access Management (IAM) is a service that allows you to securely
 * control user access to specific resources. IAM gives you full control and
 * visibility to manage resources centrally. You grant roles to users by
 * creating an IAM policy which is a collection of permissions that define who
 * has what type of access.
 */
class IAMServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a role
     *
     * Gets an existing role.
     * @param \Saltoapis\Nebula\Iam\V1\GetRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRole(\Saltoapis\Nebula\Iam\V1\GetRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.iam.v1.IAMService/GetRole',
        $argument,
        ['\Saltoapis\Nebula\Iam\V1\Role', 'decode'],
        $metadata, $options);
    }

    /**
     * List roles
     *
     * Returns a list of roles that have been previously created.
     * @param \Saltoapis\Nebula\Iam\V1\ListRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListRoles(\Saltoapis\Nebula\Iam\V1\ListRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.iam.v1.IAMService/ListRoles',
        $argument,
        ['\Saltoapis\Nebula\Iam\V1\ListRolesResponse', 'decode'],
        $metadata, $options);
    }

}
