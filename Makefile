SHELL = /bin/bash

#
# Common methodology based targets
#
.PHONY: gen-files
gen-files:
	@scripts/gen-files.sh

prepare:

.PHONY: sanity-check
sanity-check:
	@scripts/sanity-check.sh

.PHONY: build
build:
	composer validate

.PHONY: test
test:

.PHONY: release
release:

.PHONY: clean
clean:
