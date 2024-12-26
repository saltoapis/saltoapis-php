<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\ElectronicKey\V1;

/**
 * An electronic key is battery-powered device used to interact with electronic locks.
 */
class ElectronicKeyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a new electronic key
     *
     * Creates a new electronic key
     * @param \Saltoapis\Nebula\ElectronicKey\V1\CreateElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\CreateElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/CreateElectronicKey',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an electronic key
     *
     * Gets an existing electronic key.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\GetElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\GetElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/GetElectronicKey',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey', 'decode'],
        $metadata, $options);
    }

    /**
     * List electronic keys
     *
     * Returns a list of electronic keys that have been previously created.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\ListElectronicKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListElectronicKeys(\Saltoapis\Nebula\ElectronicKey\V1\ListElectronicKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/ListElectronicKeys',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\ListElectronicKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an electronic key
     *
     * Updates an existing electronic key.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\UpdateElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\UpdateElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/UpdateElectronicKey',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\ElectronicKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an electronic key
     *
     * Permanently deletes an electronic key. This cannot be undone.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\DeleteElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\DeleteElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/DeleteElectronicKey',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind an electronic key
     *
     * Binds an electronic key. Binding an electronic key assigns a device
     * identifier to the electronic key. After binding, the device can then be
     * initialized or configured.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\BindElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\BindElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/BindElectronicKey',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\BindElectronicKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind an electronic key
     *
     * Unbinds an electronic key. Unbinding an electronic key removes the
     * device identifier from the electronic key. This may be required in some
     * cases where the electronic key is not available anymore because, for
     * example, it's broken or damaged. Unbinding allows the initialization of
     * the replacement device without removing it from the installation. It also
     * means the device keeps all the information associated with it, such as
     * events.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\UnbindElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\UnbindElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/UnbindElectronicKey',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\UnbindElectronicKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Initialize an electronic key
     *
     * Initializes an electronic key. Electronic keys need to be initialized
     * before you can start to use them.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\InitializeElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitializeElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\InitializeElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/InitializeElectronicKey',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Configure an electronic key
     *
     * Configures an electronic key. Configuring an electronic key implies
     * adding some information to the electronic key such as setting the time
     * zone.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\ConfigureElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\ConfigureElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/ConfigureElectronicKey',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Reset an electronic key
     *
     * Resetting a device such as an electronic key means returning it to its
     * factory settings. Resetting is the process of removing the identity as
     * well as all the associated information of an already configured device.
     * Once a device has been reset, you need to reconfigure it.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\ResetElectronicKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetElectronicKey(\Saltoapis\Nebula\ElectronicKey\V1\ResetElectronicKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/ResetElectronicKey',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Generate authorization token for an electronic key
     *
     * Generates an authorization token that allows to connect to, authenticate and
     * authorize an electronic key.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\GenerateAuthorizationTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateAuthorizationToken(\Saltoapis\Nebula\ElectronicKey\V1\GenerateAuthorizationTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/GenerateAuthorizationToken',
        $argument,
        ['\Saltoapis\Nebula\ElectronicKey\V1\GenerateAuthorizationTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generate electronic key firmware download URI
     *
     * Provides the download URI for the latest firmware bundle for the
     * electronic key. The returned URI can be used to bring the electronic key
     * firmwares up to latest.
     * @param \Saltoapis\Nebula\ElectronicKey\V1\GenerateFirmwareDownloadUriRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateFirmwareDownloadUri(\Saltoapis\Nebula\ElectronicKey\V1\GenerateFirmwareDownloadUriRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electronickey.v1.ElectronicKeyService/GenerateFirmwareDownloadUri',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
