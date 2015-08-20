<?php
/**
 * Implement this aliases in your aliases.local.php
 */
$aliases['prod'] = array(
  'uri' => 'http://www.wildlifeday.org',
  'remote-host' => 'www.cites.org',
  'root' => 'please-fill-in-local-aliases',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  )
);

// Add your local aliases.
if (file_exists(dirname(__FILE__) . '/aliases.local.php')) {
  include dirname(__FILE__) . '/aliases.local.php';
}
