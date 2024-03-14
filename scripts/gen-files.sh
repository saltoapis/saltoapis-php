#!/bin/bash

set +x

bazel_out=$(bazel build //:composer_json 2>&1)
if bazel_out=$(bazel build //:composer_json 2>&1); then
    cp -f bazel-bin/composer.json ./composer.json
    echo "updated composer.json"
else
    echo "Error creating composer.json:" >&2
    echo "$bazel_out" >&2
fi
