#!/bin/bash

rm -fR core
echo 'Removing core from composer build'
cp scripts/settings.php ../../../sites/default/
chmod 0666 ../../../sites/default/settings.php
cp scripts/development.services.yml ../../../sites/
cp scripts/example.settings.local.php ../../../sites/settings.local.php
npm install --prefix ./themes/contrib/patternlab

