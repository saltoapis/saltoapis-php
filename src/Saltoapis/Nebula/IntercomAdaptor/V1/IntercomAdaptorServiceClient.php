<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\IntercomAdaptor\V1;

/**
 * An intercom adaptor is a device that can be connected to an existing intercom
 * system close to the telephone handset, without affecting its proper
 * functioning. Its main function is to convert the intercom system to become
 * part of the access control system.
 */
class IntercomAdaptorServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an intercom adaptor
     *
     * Creates a new intercom adaptor
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\CreateIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\CreateIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/CreateIntercomAdaptor',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an intercom adaptor
     *
     * Gets an existing intercom adaptor.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\GetIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\GetIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/GetIntercomAdaptor',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor', 'decode'],
        $metadata, $options);
    }

    /**
     * List intercom adaptors
     *
     * Returns a list of intercom adaptors that have been previously created.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\ListIntercomAdaptorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIntercomAdaptors(\Saltoapis\Nebula\IntercomAdaptor\V1\ListIntercomAdaptorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/ListIntercomAdaptors',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\ListIntercomAdaptorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an intercom adaptor
     *
     * Updates an existing intercom adaptor.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\UpdateIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\UpdateIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/UpdateIntercomAdaptor',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an intercom adaptor
     *
     * Permanently deletes an intercom adaptor. This cannot be undone.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\DeleteIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\DeleteIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/DeleteIntercomAdaptor',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind an intercom adaptor
     *
     * Binds an intercom adaptor. Binding an intercom adaptor assigns a device
     * identifier to the intercom adaptor. After binding, the device can then be
     * initialized or configured.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\BindIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\BindIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/BindIntercomAdaptor',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\BindIntercomAdaptorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind an intercom adaptor
     *
     * Unbinds an intercom adaptor. Unbinding an intercom adaptor removes the
     * device identifier from the intercom adaptor. This may be required in some
     * cases where the intercom adaptor is not available anymore because, for
     * example, it's broken or damaged. Unbinding allows the initialization of
     * the replacement device without removing it from the installation. It also
     * means the device keeps all the information associated with it, such as
     * events.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\UnbindIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\UnbindIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/UnbindIntercomAdaptor',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\UnbindIntercomAdaptorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Initialize an intercom adaptor
     *
     * Initializes an intercom adaptor. Intercom adaptors need to be initialized
     * before you can start to use them.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\InitializeIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitializeIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\InitializeIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/InitializeIntercomAdaptor',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Configure an intercom adaptor
     *
     * Configures an intercom adaptor. Configuring an intercom adaptor implies
     * adding some information to the intercom adaptor such as setting the time
     * zone.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\ConfigureIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\ConfigureIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/ConfigureIntercomAdaptor',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Reset an intercom adaptor
     *
     * Resetting a device such as an intercom adaptor means returning it to its
     * factory settings. Resetting is the process of removing the identity as
     * well as all the associated information of an already configured device.
     * Once a device has been reset, you need to reconfigure it.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\ResetIntercomAdaptorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetIntercomAdaptor(\Saltoapis\Nebula\IntercomAdaptor\V1\ResetIntercomAdaptorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/ResetIntercomAdaptor',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Update intercom adaptor firmware
     *
     * Updates an intercom adaptor's firmware. SALTO provides firmware updates
     * when new functionality is available or when we fix a bug.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\UpdateIntercomAdaptorFirmwareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIntercomAdaptorFirmware(\Saltoapis\Nebula\IntercomAdaptor\V1\UpdateIntercomAdaptorFirmwareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/UpdateIntercomAdaptorFirmware',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates an authorization token for an intercom adaptor
     *
     * Generates an authorization token that allows to connect, authenticate and
     * authorize against an intercom adaptor.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\GenerateAuthorizationTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateAuthorizationToken(\Saltoapis\Nebula\IntercomAdaptor\V1\GenerateAuthorizationTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/GenerateAuthorizationToken',
        $argument,
        ['\Saltoapis\Nebula\IntercomAdaptor\V1\GenerateAuthorizationTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Generate intercom adaptor firmware download URI
     *
     * Provides the download URI for the latest firmware bundle for the
     * intercom adaptor. The returned URI can be used to bring the intercom
     * adaptor firmwares up to latest.
     * @param \Saltoapis\Nebula\IntercomAdaptor\V1\GenerateFirmwareDownloadUriRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateFirmwareDownloadUri(\Saltoapis\Nebula\IntercomAdaptor\V1\GenerateFirmwareDownloadUriRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.intercomadaptor.v1.IntercomAdaptorService/GenerateFirmwareDownloadUri',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
