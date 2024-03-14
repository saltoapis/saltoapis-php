#!/bin/bash

set +x

if [[ -f composer.json ]]; then
	bazel build :composer_json 2> /dev/null
	
    if ! diff -q bazel-bin/composer.json composer.json 1> /dev/null; then
        echo "composer.json file is outdated. Run 'make gen-files' to update it." >&2
        exit 1
    fi
else
	echo "composer.json file not found. Run 'make gen-files' to generate required files" >&2
    exit 2
fi
