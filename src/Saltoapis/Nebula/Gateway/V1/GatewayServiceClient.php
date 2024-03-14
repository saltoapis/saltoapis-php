<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Gateway\V1;

/**
 * Gateways are hardware devices intended to be used with access points where
 * online connectivity is needed. This service is responsible for managing
 * gateway resources.
 */
class GatewayServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a gateway
     *
     * Creates a new gateway
     * @param \Saltoapis\Nebula\Gateway\V1\CreateGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateGateway(\Saltoapis\Nebula\Gateway\V1\CreateGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/CreateGateway',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\Gateway', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a gateway
     *
     * Gets an existing gateway.
     * @param \Saltoapis\Nebula\Gateway\V1\GetGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGateway(\Saltoapis\Nebula\Gateway\V1\GetGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/GetGateway',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\Gateway', 'decode'],
        $metadata, $options);
    }

    /**
     * List gateways
     *
     * Returns a list of gateways that have been previously created.
     * @param \Saltoapis\Nebula\Gateway\V1\ListGatewaysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListGateways(\Saltoapis\Nebula\Gateway\V1\ListGatewaysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/ListGateways',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\ListGatewaysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a gateway
     *
     * Updates an existing gateway.
     * @param \Saltoapis\Nebula\Gateway\V1\UpdateGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGateway(\Saltoapis\Nebula\Gateway\V1\UpdateGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/UpdateGateway',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\Gateway', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a gateway
     *
     * Permanently deletes a gateway. This cannot be undone.
     * @param \Saltoapis\Nebula\Gateway\V1\DeleteGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteGateway(\Saltoapis\Nebula\Gateway\V1\DeleteGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/DeleteGateway',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind a gateway
     *
     * Binds a gateway. Binding a gateway assigns a device
     * identifier to the gateway. After binding, the device can then be
     * initialized or configured.
     * @param \Saltoapis\Nebula\Gateway\V1\BindGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindGateway(\Saltoapis\Nebula\Gateway\V1\BindGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/BindGateway',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\BindGatewayResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind a gateway
     *
     * Unbinds a gateway. Unbinding a gateway removes the
     * device identifier from the gateway. This may be required in some
     * cases where the gateway is not available anymore because, for
     * example, it's broken or damaged. Unbinding allows the initialization of
     * the replacement device without removing it from the installation. It also
     * means the device keeps all the information associated with it, such as
     * events.
     * @param \Saltoapis\Nebula\Gateway\V1\UnbindGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindGateway(\Saltoapis\Nebula\Gateway\V1\UnbindGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/UnbindGateway',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\UnbindGatewayResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Initialize a gateway
     *
     * Initializes a gateway. Gateways need to be initialized before
     * you can start to use them.
     * @param \Saltoapis\Nebula\Gateway\V1\InitializeGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitializeGateway(\Saltoapis\Nebula\Gateway\V1\InitializeGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/InitializeGateway',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Configure a gateway
     *
     * Configures a gateway. Configuring a gateway implies adding some
     * information to the gateway such as setting the time zone.
     * @param \Saltoapis\Nebula\Gateway\V1\ConfigureGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureGateway(\Saltoapis\Nebula\Gateway\V1\ConfigureGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/ConfigureGateway',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Reset a gateway
     *
     * Resetting a device such as a gateway means returning it to its factory
     * settings. Resetting is the process of removing the identity as
     * well as all the associated information of an already configured device.
     * Once a device has been reset, you need to reconfigure it.
     * @param \Saltoapis\Nebula\Gateway\V1\ResetGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetGateway(\Saltoapis\Nebula\Gateway\V1\ResetGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/ResetGateway',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Update gateway firmware
     *
     * Updates a gateway's firmware. SALTO provides firmware updates when
     * new functionality is available or when we fix a bug.
     * @param \Saltoapis\Nebula\Gateway\V1\UpdateGatewayFirmwareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGatewayFirmware(\Saltoapis\Nebula\Gateway\V1\UpdateGatewayFirmwareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/UpdateGatewayFirmware',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates an authorization token for a gateway
     *
     * Generates an authorization token that allows to connect, authenticate and
     * authorize against a gateway.
     * @param \Saltoapis\Nebula\Gateway\V1\GenerateAuthorizationTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateAuthorizationToken(\Saltoapis\Nebula\Gateway\V1\GenerateAuthorizationTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.gateway.v1.GatewayService/GenerateAuthorizationToken',
        $argument,
        ['\Saltoapis\Nebula\Gateway\V1\GenerateAuthorizationTokenResponse', 'decode'],
        $metadata, $options);
    }

}
