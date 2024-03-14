load('//scripts/composer-json:composer_json.bzl', 'composer_json')
load(':php_metadata.bzl', 'php_projects')


composer_json(
    name = 'composer_json',
    package = 'saltoapis/saltoapis-php',
    namespaces = php_projects,
    external_deps = {
        # we should be using GRPC_VERSION, but not all versions are released to PHP
        "grpc/grpc": "1.57.0",
        "google/protobuf": "3.25.3",
    },
)
