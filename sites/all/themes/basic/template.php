<?php

/**
 * Preprocess variables for page.tpl.php
 *
 * @see page.tpl.php
 */
function basic_preprocess_page(&$variables) {
  
  // added page--mycontenttype suggestion
  if (isset($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }

  if(function_exists('dpm')){
    dpm($variables);
  }

}
