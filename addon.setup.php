<?php
    
    
$extensionName = "GuitarSelfAssessment";
if (! defined('EXT_VERSION')) {
    define('EXT_VERSION', '0.0.1');
    define('EXT_NAME', $extensionName);
    define('EXT_SHORT_NAME', strtolower($extensionName));
    define('EXT_SETTINGS_PATH', 'addons/settings/'.EXT_SHORT_NAME);
}

return array(
      'author' => 'Antonio Moses',
      'author_url' => 'http://texasbluesalley.com',
      'description' => 'Guitar self-assessment module',
      'docs_url' => './README.md',
      'name' => EXT_NAME,
      'namespace' => EXT_NAME,
      'settings_exist' => true,
      'version' => EXT_VERSION,
    //   'models' => array(
    //         'EmailCachePlus' => 'Model\EmailCachePlus',
    //         "EmailQueue" => 'Model\EmailQueue'
    //   )
);
