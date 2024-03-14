<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Controller\V1;

/**
 * Controllers are mains-wired hardware devices that can be used to control access where
 * a standalone lock cannot be fitted. For example, on car park barriers, turnstiles or
 * sliding doors. They allow the management of multiple accesses from a single device.
 * For example, one single controller could control access to both the entrance and exit
 * of a building via a turnstile. This service is responsible for managing controllers
 * resources.
 */
class ControllerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a controller
     *
     * Creates a new controller
     * @param \Saltoapis\Nebula\Controller\V1\CreateControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateController(\Saltoapis\Nebula\Controller\V1\CreateControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/CreateController',
        $argument,
        ['\Saltoapis\Nebula\Controller\V1\Controller', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a controller
     *
     * Gets an existing controller.
     * @param \Saltoapis\Nebula\Controller\V1\GetControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetController(\Saltoapis\Nebula\Controller\V1\GetControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/GetController',
        $argument,
        ['\Saltoapis\Nebula\Controller\V1\Controller', 'decode'],
        $metadata, $options);
    }

    /**
     * List controllers
     *
     * Returns a list of controllers that have been previously created.
     * @param \Saltoapis\Nebula\Controller\V1\ListControllersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListControllers(\Saltoapis\Nebula\Controller\V1\ListControllersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/ListControllers',
        $argument,
        ['\Saltoapis\Nebula\Controller\V1\ListControllersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a controller
     *
     * Updates an existing controller.
     * @param \Saltoapis\Nebula\Controller\V1\UpdateControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateController(\Saltoapis\Nebula\Controller\V1\UpdateControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/UpdateController',
        $argument,
        ['\Saltoapis\Nebula\Controller\V1\Controller', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a controller
     *
     * Permanently deletes a controller. This cannot be undone.
     * @param \Saltoapis\Nebula\Controller\V1\DeleteControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteController(\Saltoapis\Nebula\Controller\V1\DeleteControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/DeleteController',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind a controller
     *
     * Binds a controller. Binding a controller assigns a device
     * identifier to the controller. After binding, the device can then be
     * initialized or configured.
     * @param \Saltoapis\Nebula\Controller\V1\BindControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindController(\Saltoapis\Nebula\Controller\V1\BindControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/BindController',
        $argument,
        ['\Saltoapis\Nebula\Controller\V1\BindControllerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind a controller
     *
     * Unbinds a controller. Unbinding a controller removes the
     * device identifier from the controller. This may be required in some
     * cases where the controller is not available anymore because, for
     * example, it's broken or damaged. Unbinding allows the initialization of
     * the replacement device without removing it from the installation. It also
     * means the device keeps all the information associated with it, such as
     * events.
     * @param \Saltoapis\Nebula\Controller\V1\UnbindControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindController(\Saltoapis\Nebula\Controller\V1\UnbindControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/UnbindController',
        $argument,
        ['\Saltoapis\Nebula\Controller\V1\UnbindControllerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Initialize a controller
     *
     * Initializes a controller. Controllers need to be initialized
     * before you can start to use them.
     * @param \Saltoapis\Nebula\Controller\V1\InitializeControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitializeController(\Saltoapis\Nebula\Controller\V1\InitializeControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/InitializeController',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Configure a controller
     *
     * Configures a controller. Configuring a controller implies
     * adding some information to the controller such as setting the time
     * zone.
     * @param \Saltoapis\Nebula\Controller\V1\ConfigureControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureController(\Saltoapis\Nebula\Controller\V1\ConfigureControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/ConfigureController',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Reset a controller
     *
     * Resetting a device such as a controller means returning it to its
     * factory settings. Resetting is the process of removing the identity as
     * well as all the associated information of an already configured device.
     * Once a device has been reset, you need to reconfigure it.
     * @param \Saltoapis\Nebula\Controller\V1\ResetControllerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetController(\Saltoapis\Nebula\Controller\V1\ResetControllerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/ResetController',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Update controller firmware
     *
     * Updates a controller's firmware. SALTO provides firmware updates
     * when new functionality is available or when we fix a bug.
     * @param \Saltoapis\Nebula\Controller\V1\UpdateControllerFirmwareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateControllerFirmware(\Saltoapis\Nebula\Controller\V1\UpdateControllerFirmwareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.controller.v1.ControllerService/UpdateControllerFirmware',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
