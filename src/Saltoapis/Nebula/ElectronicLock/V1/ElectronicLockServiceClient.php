<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\ElectronicLock\V1;

/**
 * An electronic lock is a physical electronic device such as an electronic
 * escutcheon or cylinder, or a door controller with an electric strike. It
 * differs from an access point in that, an electronic lock could be a
 * particular model of a device such as a SALTO Neo cylinder, a door controller
 * with an electric strike or a Danalock V3 smartlock, for example. An
 * electronic lock is a single device whereas an access point could be made up
 * of several devices. An access point could be composed of an electronic lock
 * plus a door detector, a door controller and a keypad, or an intercom adaptor
 * which is connected to multiple electronic locks. This service is responsible
 * for managing electronic lock resources.
 */
class ElectronicLockServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an electronic lock
     *
     * Creates a new electronic lock
     * @param \Saltoapis\Nebula\ElectronicLock\V1\CreateElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\CreateElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/CreateElectronicLock',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\ElectronicLock', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an electronic lock
     *
     * Gets an existing electronic lock.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\GetElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\GetElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/GetElectronicLock',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\ElectronicLock', 'decode'],
        $metadata, $options);
    }

    /**
     * List electronic locks
     *
     * Returns a list of electronic locks that have been previously created.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\ListElectronicLocksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListElectronicLocks(\Saltoapis\Nebula\ElectronicLock\V1\ListElectronicLocksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/ListElectronicLocks',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\ListElectronicLocksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an electronic lock
     *
     * Updates an existing electronic lock.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\UpdateElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\UpdateElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/UpdateElectronicLock',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\ElectronicLock', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an electronic lock
     *
     * Permanently deletes an electronic lock. This cannot be undone.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\DeleteElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\DeleteElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/DeleteElectronicLock',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind an electronic lock
     *
     * Binds an electronic lock. Binding an electronic lock assigns a device
     * identifier to the electronic lock. After binding, the device can then be
     * initialized or configured.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\BindElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\BindElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/BindElectronicLock',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\BindElectronicLockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind an electronic lock
     *
     * Unbinds an electronic lock. Unbinding an electronic lock removes the
     * device identifier from the electronic lock. This may be required in some
     * cases where the electronic lock is not available anymore because, for
     * example, it's broken or damaged. Unbinding allows the initialization of
     * the replacement device without removing it from the installation. It also
     * means the device keeps all the information associated with it, such as
     * events.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\UnbindElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\UnbindElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/UnbindElectronicLock',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\UnbindElectronicLockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Initialize an electronic lock
     *
     * Initializes an electronic lock. Electronic locks need to be initialized
     * before you can start to use them.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\InitializeElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitializeElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\InitializeElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/InitializeElectronicLock',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Configure an electronic lock
     *
     * Configures an electronic lock. Configuring an electronic lock implies
     * adding some information to the electronic lock such as setting the time
     * zone.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\ConfigureElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\ConfigureElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/ConfigureElectronicLock',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Reset an electronic lock
     *
     * Resetting a device such as an electronic lock means returning it to its
     * factory settings. Resetting is the process of removing the identity as
     * well as all the associated information of an already configured device.
     * Once a device has been reset, you need to reconfigure it.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\ResetElectronicLockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetElectronicLock(\Saltoapis\Nebula\ElectronicLock\V1\ResetElectronicLockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/ResetElectronicLock',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Update electronic lock firmware
     *
     * Updates an electronic lock's firmware. SALTO provides firmware updates
     * when new functionality is available or when we fix a bug.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\UpdateElectronicLockFirmwareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateElectronicLockFirmware(\Saltoapis\Nebula\ElectronicLock\V1\UpdateElectronicLockFirmwareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/UpdateElectronicLockFirmware',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Generate authorization token for an electronic lock
     *
     * Generates an authorization token that allows to connect to, authenticate and
     * authorize an electronic lock.
     * @param \Saltoapis\Nebula\ElectronicLock\V1\GenerateAuthorizationTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateAuthorizationToken(\Saltoapis\Nebula\ElectronicLock\V1\GenerateAuthorizationTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.electroniclock.v1.ElectronicLockService/GenerateAuthorizationToken',
        $argument,
        ['\Saltoapis\Nebula\ElectronicLock\V1\GenerateAuthorizationTokenResponse', 'decode'],
        $metadata, $options);
    }

}
