# saltoapis-php

## Installation

To start using the Saltoapis library first you need to add this repository to your `composer.json`. You can do so by running the following command.
```sh
$ composer config repositories.saltoapis vcs https://github.com/saltoapis/saltoapis-php
```

Then you can run this to install the library and its dependencies:

```sh
$ composer require saltoapis/saltoapis-php:dev-main
```

### Installing gRPC

The Saltoapis PHP client uses gRPC and protobuf. To use gRPC in PHP, you must install the gRPC PHP extension on your server. While not required, it is also recommended that you install the protobuf extension whenever using gRPC in production.

```sh
$ pecl install grpc
$ pecl install protobuf
```

- [gRPC installation instructions](https://cloud.google.com/php/grpc)
- [protobuf installation instructions](https://cloud.google.com/php/grpc#installing_the_protobuf_runtime_library)

## Usage

The SDK provides a simple gRPC interceptor that will automatically get and refresh valid access tokens and include them in all gRPC requests.

> **Note**
> You should always request the following scopes when authenticating:
> ```
> openid, offline, profile, email, https://saltoapis.com/auth/nebula
> ```

1. Create a gRPC Channel
```php
$channel = new \Grpc\Channel('nebula.saltoapis.com', ['credentials' => ChannelCredentials::createSsl()]);
```

2. Create the saltoapis auth interceptor and intercept the created channel
```php
$saltoapis_interceptor = SaltoapisAuthInterceptor::with_credentials(
    $client_id,
    $client_secret,
    $scopes,
    // you can optionally override the auth server
    'account.saltosystems.com',
);

$saltoapis_channel = \Grpc\Interceptor::intercept($channel, saltoapis_interceptor);
```

3. Create a new service client using the intercepted channel
```php
$user_client = new UserServiceClient('nebula.saltoapis.com', [], $saltoapis_channel);
```

4. You can now call the saltoapis services using this client
```php
$request = new ListUsersRequest();
$request->setPageSize(10);
$request->setParent('<some_installation>');
list($users, $status) = $client->ListUsers($request)->wait();

if ($status->code != 0) {
    printf("An error occurred. %d: %s\n", $status->code, $status->details);
} else {
    var_dump($users);
}
```
