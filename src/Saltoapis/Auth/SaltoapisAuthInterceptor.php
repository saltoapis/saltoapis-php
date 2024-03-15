<?php

namespace Saltoapis\Auth;

use Grpc\Interceptor;

class SaltoapisAuthInterceptor extends Interceptor {

    private OAuthClientCredentialsProvider $credentials_provider;

    public function __construct(OAuthClientCredentialsProvider $credentials_provider) {
        $this->credentials_provider = $credentials_provider;
    }

    public static function with_credentials(string $client_id, string $client_secret, array $scopes, string $discovery_host = null): SaltoapisAuthInterceptor {
        $credentials_provider = new SaltoapisOAuthClientCredentialsProvider($client_id, $client_secret, $scopes, $discovery_host);
        return new SaltoapisAuthInterceptor($credentials_provider);
    }

    public function invalidate_access_token() {
        $this->credentials_provider->invalidate_access_token();
    }

    private function get_access_token(): string {
        return $this->credentials_provider->get_access_token();
    }

    public function interceptUnaryUnary($method, $argument, $deserialize, $continuation, array $metadata = [], array $options = []) {
        $metadata['authorization'] = ['Bearer ' . $this->get_access_token()];
        return $continuation($method, $argument, $deserialize, $metadata, $options);
    }

    public function interceptStreamUnary($method, $deserialize, $continuation, array $metadata = [], array $options = []) {
        $metadata['authorization'] = ['Bearer ' . $this->get_access_token()];
        return $continuation($method, $deserialize, $metadata, $options);
    }

    public function interceptUnaryStream($method, $argument, $deserialize, $continuation, array $metadata = [], array $options = []) {
        $metadata['authorization'] = ['Bearer ' . $this->get_access_token()];
        return $continuation($method, $argument, $deserialize, $metadata, $options);
    }

    public function interceptStreamStream($method, $deserialize, $continuation, array $metadata = [], array $options = []) {
        $metadata['authorization'] = ['Bearer ' . $this->get_access_token()];
        return $continuation($method, $deserialize, $metadata, $options);
    }
}
