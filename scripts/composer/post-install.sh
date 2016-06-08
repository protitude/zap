#!/bin/bash

rm -fR core
echo 'Removing core from composer build'
cp scripts/settings.php ../../sites/default/
chmod 0666 ../../sites/default/settings.php

