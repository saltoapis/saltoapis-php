<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\ServiceAccount\V1;

/**
 * A service account is a specialized account used by applications or services to
 * authenticate and interact with other applications or services, providing a secure
 * and controlled way to manage access to resources.
 */
class ServiceAccountServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a service account
     *
     * Creates a new service account.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\CreateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccount>
     */
    public function CreateServiceAccount(\Saltoapis\Nebula\ServiceAccount\V1\CreateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/CreateServiceAccount',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a service account
     *
     * Retrieves an existing service account.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\GetServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccount>
     */
    public function GetServiceAccount(\Saltoapis\Nebula\ServiceAccount\V1\GetServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/GetServiceAccount',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * List service accounts
     *
     * Returns a list of service accounts that have been previously created.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountsResponse>
     */
    public function ListServiceAccounts(\Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/ListServiceAccounts',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update the service account
     *
     * Updates the existing service account.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\UpdateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccount>
     */
    public function UpdateServiceAccount(\Saltoapis\Nebula\ServiceAccount\V1\UpdateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/UpdateServiceAccount',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a service account
     *
     * Permanently deletes a service account. This cannot be undone.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\DeleteServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteServiceAccount(\Saltoapis\Nebula\ServiceAccount\V1\DeleteServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/DeleteServiceAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a service account key
     *
     * Creates a new service account key.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\CreateServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccountKey>
     */
    public function CreateServiceAccountKey(\Saltoapis\Nebula\ServiceAccount\V1\CreateServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/CreateServiceAccountKey',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a service account key
     *
     * Retrieves a specific service account key by its resource name.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\GetServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccountKey>
     */
    public function GetServiceAccountKey(\Saltoapis\Nebula\ServiceAccount\V1\GetServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/GetServiceAccountKey',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * List service account keys
     *
     * Returns a list of keys for a service account.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountKeysResponse>
     */
    public function ListServiceAccountKeys(\Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/ListServiceAccountKeys',
        $argument,
        ['\Saltoapis\Nebula\ServiceAccount\V1\ListServiceAccountKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a service account key
     *
     * Permanently deletes a service account key.
     * @param \Saltoapis\Nebula\ServiceAccount\V1\DeleteServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteServiceAccountKey(\Saltoapis\Nebula\ServiceAccount\V1\DeleteServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.serviceaccount.v1.ServiceAccountService/DeleteServiceAccountKey',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
