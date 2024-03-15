<?php

namespace Saltoapis\Auth;

class SaltoapisOAuthClientCredentialsProvider implements OAuthClientCredentialsProvider {

    private string $client_id;
    private string $client_secret;
    /** @var string[] $scopes */
    private array $scopes;
    private string $discovery_host;

    private string $access_token = '';
    private int $access_token_expiration_time = 0;

    public function __construct(string $client_id, string $client_secret, array $scopes, string $discovery_host = null) {
        if ($discovery_host == null) {
            // default to production
            $discovery_host = 'account.saltosystems.com';
        }
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->scopes = $scopes;
        $this->discovery_host = $discovery_host;
    }

    public function get_access_token(): string {
        if (time() < $this->access_token_expiration_time) {
            // token still valid
        } else {
            // token expired or null
            $this->refresh_token();
        }

        return $this->access_token;
    }

    function invalidate_access_token() {
        $this->access_token_expiration_time = 0;
    }

    private function refresh_token() {
        // get oidc config
        $oidc_config_uri = 'https://'. $this->discovery_host .'/.well-known/openid-configuration';
        $options = [
            'http' => [
                'ignore_errors' => true, // we are throwing our own exception
            ],
        ];
        $json = file_get_contents($oidc_config_uri, false, stream_context_create($options));
        if ($json === false) {
            throw new SaltoapisOAuthException('Could not get the oidc config. Is ' . $oidc_config_uri . ' accesible?');
        }

        $oidc_config = json_decode($json);
        if (!property_exists($oidc_config, 'token_endpoint')) {
            throw new SaltoapisOAuthException('The oidc config is missing the token_endpoint. Check that the JSON in ' . $oidc_config_uri . ' includes this field.');
        }

        $this->request_new_token($oidc_config->token_endpoint);
    }

    private function request_new_token(string $token_endpoint) {
        $post_data = [
            'grant_type'=> 'client_credentials',
            'client_id'=> $this->client_id,
            'client_secret'=> $this->client_secret,
            'scope'=> join(' ', $this->scopes)
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($post_data),
                'ignore_errors' => true, // we are throwing our own exception
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($token_endpoint, false, $context);
        if ($result === false) {
            throw new SaltoapisOAuthException('Error getting the access_token');
        }

        $token_response = json_decode($result);

        if (property_exists($token_response, 'error')) {
            throw new SaltoapisOAuthException("Error getting the access_token. Server returned error ( error = '$token_response->error', description = '$token_response->error_description')");
        }

        if (!property_exists($token_response, 'access_token')) {
            throw new SaltoapisOAuthException('access_token missing from token response');
        }

        // update token and 
        $this->access_token = $token_response->access_token;
        $this->access_token_expiration_time = time() + $token_response->expires_in;
    }
}
