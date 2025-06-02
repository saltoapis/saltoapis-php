<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Installation\V1;

/**
 * An installation represents any entity such as a company, office or building
 * that contains all the access control objects (access points, access rights,
 * users, etc.) that comprise the access control system within a facility.
 */
class InstallationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an installation
     *
     * Creates a new installation.
     * @param \Saltoapis\Nebula\Installation\V1\CreateInstallationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateInstallation(\Saltoapis\Nebula\Installation\V1\CreateInstallationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/CreateInstallation',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Installation', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an installation
     *
     * Retrieves an existing installation.
     * @param \Saltoapis\Nebula\Installation\V1\GetInstallationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstallation(\Saltoapis\Nebula\Installation\V1\GetInstallationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/GetInstallation',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Installation', 'decode'],
        $metadata, $options);
    }

    /**
     * List installations
     *
     * Returns a list of installations that have been previously created.
     * @param \Saltoapis\Nebula\Installation\V1\ListInstallationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstallations(\Saltoapis\Nebula\Installation\V1\ListInstallationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/ListInstallations',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\ListInstallationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an installation
     *
     * Updates an existing installation.
     * @param \Saltoapis\Nebula\Installation\V1\UpdateInstallationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateInstallation(\Saltoapis\Nebula\Installation\V1\UpdateInstallationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UpdateInstallation',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Installation', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an installation
     *
     * Soft deletes an installation. This action can be reversed if required.
     * @param \Saltoapis\Nebula\Installation\V1\DeleteInstallationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteInstallation(\Saltoapis\Nebula\Installation\V1\DeleteInstallationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/DeleteInstallation',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Installation', 'decode'],
        $metadata, $options);
    }

    /**
     * Undelete an installation
     *
     * Undeletes an installation.
     * @param \Saltoapis\Nebula\Installation\V1\UndeleteInstallationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UndeleteInstallation(\Saltoapis\Nebula\Installation\V1\UndeleteInstallationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UndeleteInstallation',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Installation', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a policy
     *
     * Creates a policy for the installation. An IAM policy is a collection of
     * roles associated to users that define who has what type of access to manage
     * access control objects within the installation.
     * @param \Saltoapis\Nebula\Installation\V1\CreatePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePolicy(\Saltoapis\Nebula\Installation\V1\CreatePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/CreatePolicy',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a policy
     *
     * Retrieves an existing policy.
     * @param \Saltoapis\Nebula\Installation\V1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPolicy(\Saltoapis\Nebula\Installation\V1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/GetPolicy',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * List policies
     *
     * Returns a list of policies that have been previously created.
     * @param \Saltoapis\Nebula\Installation\V1\ListPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPolicies(\Saltoapis\Nebula\Installation\V1\ListPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/ListPolicies',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\ListPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a policy
     *
     * Updates an existing policy.
     * @param \Saltoapis\Nebula\Installation\V1\UpdatePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePolicy(\Saltoapis\Nebula\Installation\V1\UpdatePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UpdatePolicy',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a policy
     *
     * Permanently deletes a policy. This cannot be undone.
     * @param \Saltoapis\Nebula\Installation\V1\DeletePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePolicy(\Saltoapis\Nebula\Installation\V1\DeletePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/DeletePolicy',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Tests permissions
     *
     * Returns permissions that a caller has within the installation. If the
     * installation does not exist, this will return an empty set of
     * permissions, not a NOT_FOUND error.
     * @param \Saltoapis\Nebula\Installation\V1\TestPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestPermissions(\Saltoapis\Nebula\Installation\V1\TestPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/TestPermissions',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Transfer installation ownership
     *
     * Transfers the ownership of an installation.
     * @param \Saltoapis\Nebula\Installation\V1\TransferInstallationOwnershipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TransferInstallationOwnership(\Saltoapis\Nebula\Installation\V1\TransferInstallationOwnershipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/TransferInstallationOwnership',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\TransferInstallationOwnershipResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Accept installation ownership
     *
     * Accepts the ownership of an installation.
     * @param \Saltoapis\Nebula\Installation\V1\AcceptInstallationOwnershipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AcceptInstallationOwnership(\Saltoapis\Nebula\Installation\V1\AcceptInstallationOwnershipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/AcceptInstallationOwnership',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\AcceptInstallationOwnershipResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a subscription
     *
     * Gets an existing subscription
     * @param \Saltoapis\Nebula\Installation\V1\GetSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSubscription(\Saltoapis\Nebula\Installation\V1\GetSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/GetSubscription',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\Subscription', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a subscription's billing information
     *
     * Updates an existing subscription's billing information.
     * (-- api-linter: core::0134::method-signature=disabled
     *     aip.dev/not-precedent: We need to do this to simplify the update operation. --)
     * @param \Saltoapis\Nebula\Installation\V1\UpdateBillingInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateBillingInfo(\Saltoapis\Nebula\Installation\V1\UpdateBillingInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UpdateBillingInfo',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\BillingInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * Update subscription payment method
     *
     * Updates an existing subscription payment method. If there is a payment
     * method associated with the subscription, it will be deleted.
     * (-- api-linter: core::0134::method-signature=disabled
     *     aip.dev/not-precedent: We need to do this to simplify the update operation. --)
     * @param \Saltoapis\Nebula\Installation\V1\UpdatePaymentMethodRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePaymentMethod(\Saltoapis\Nebula\Installation\V1\UpdatePaymentMethodRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UpdatePaymentMethod',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\PaymentMethod', 'decode'],
        $metadata, $options);
    }

    /**
     * Update subscription payment method's card
     *
     * Updates subscription payment method's card. If there is a payment method
     * associated with the subscription, it will be deleted.
     * @param \Saltoapis\Nebula\Installation\V1\UpdateCardRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCard(\Saltoapis\Nebula\Installation\V1\UpdateCardRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UpdateCard',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\UpdateCardResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a payment authorization
     *
     * Creates a payment authorization for the subscription.
     * The payment authorization is a process that allows the customer to
     * authorize a payment card for future use. This is done by creating a payment
     * authorization request. The result of the request is a payment authorization
     * that must be authorized by the client in the client's UI.
     * @param \Saltoapis\Nebula\Installation\V1\CreatePaymentAuthorizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePaymentAuthorization(\Saltoapis\Nebula\Installation\V1\CreatePaymentAuthorizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/CreatePaymentAuthorization',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\PaymentAuthorization', 'decode'],
        $metadata, $options);
    }

    /**
     * List invoices
     *
     * Returns a list of invoices.
     * @param \Saltoapis\Nebula\Installation\V1\ListInvoicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInvoices(\Saltoapis\Nebula\Installation\V1\ListInvoicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/ListInvoices',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\ListInvoicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Apply a coupon
     *
     * Applies a coupon to the subscription.
     * @param \Saltoapis\Nebula\Installation\V1\ApplyCouponRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ApplyCoupon(\Saltoapis\Nebula\Installation\V1\ApplyCouponRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/ApplyCoupon',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\ApplyCouponResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unapply a coupon
     *
     * Unapplies a coupon to the subscription.
     * @param \Saltoapis\Nebula\Installation\V1\UnapplyCouponRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnapplyCoupon(\Saltoapis\Nebula\Installation\V1\UnapplyCouponRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.InstallationService/UnapplyCoupon',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\UnapplyCouponResponse', 'decode'],
        $metadata, $options);
    }

}
