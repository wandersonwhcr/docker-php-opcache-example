# docker-php-opcache

A Simple Example of Preload Files with OPcache

## Description

This repository shows that PHP OPcache can preload all source files during
container image build. After that you can empty files but you cannot remove
them.

OPcache speeds up PHP runtime but binaries are bigger than source files, so
container images size will be increased too.
