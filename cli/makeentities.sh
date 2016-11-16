#!/usr/bin/env bash
DST=module/Application/src
./vendor/bin/doctrine-module orm:generate-entities $DST
mv $DST/Application/Entity $DST
rm -rf $DST/Application