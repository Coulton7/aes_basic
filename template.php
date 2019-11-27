<?php
/**
 * @file
 * template.php
 */

function aes_basic_preprocess_page(&$vars) {
  if(isset($vars['page']['content']['system_main']['no_content'])) {
    unset($vars['page']['content']['system_main']['no_content']);
  }
}

$requires = file_scan_directory(__DIR__ . '/includes/modules', '/\.inc$/');
foreach ($requires as $require) {
  if (module_exists($require->name)) {
    require_once $require->uri;
  }
}

function aes_basic_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  }
}