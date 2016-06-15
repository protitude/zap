<?php

$databases = array();
$config_directories = array();
$settings['hash_salt'] = '';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = __DIR__ . '/services.yml';
$settings['trusted_host_patterns'] = array(
  '^cuww\.dev',
);
$settings['hash_salt'] = 'rXRqLDFU2Ls4oCohqGu9YX_SrbvT_2cjcCAKqOQqFps';
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\Core\Database\Driver\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'zap';
$config_directories['sync'] = 'sites/default/files/config_4eJmMXr6BeZgx7dcsXSb9SDTZ6HzGJnNpyJia3ymYnLKtS_xdLdg_f3A4GB2HNJDg3BWE2ODNQ/sync';
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}

