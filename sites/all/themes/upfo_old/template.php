<?php

registry_rebuild();

/**
 * Implements template_preprocess_html().
 */
function upfo_preprocess_html(&$variables) {
	drupal_add_css('//fonts.googleapis.com/css?family=Roboto:300,500,400italic,700italic,700,500italic,400|Roboto+Slab:400,300,700', array('weight' => -100, 'type' => 'external'));
}

/**
 * Implements hook_form_alter().
 */
function upfo_form_alter(&$form, &$form_state, $form_id) {
  /*
   *if (isset($form['type']) && $form['type']['#value'] . '_node_settings' == $form_id) {
   *  $form['workflow']['upload_' . $form['type']['#value']] = array(
   *    '#type' => 'radios',
   *    '#title' => t('Attachments'),
   *    '#default_value' => variable_get('upload_' . $form['type']['#value'], 1),
   *    '#options' => array(t('Disabled'), t('Enabled')),
   * );
   *}
   */
  //dpm($form_id);
  global $user;
  switch ($form_id) {
  	case 'entry_node_form':
  		if($user->uid != 1) {
  			$form['field_entry_category']['#access'] = FALSE;
  			$form['field_entry_images']['und'][0]['#title_display'] = 'invisible';
        //dpm($form);
  		}
  		break;

    case 'user_profile_form':
      if($user->uid != 1) {
        $form['field_user_order_reference']['#access'] = FALSE;
      }
      //dpm($form);
      break;
  }

}

function upfo_preprocess_page(&$variables) {
    //dpm($variables);
    if ($account = menu_get_object('user')) {
      $variables['title'] = t('My account');
      unset($variables['tabs']);
    }
    if (!empty($variables['node']) && $variables['node']->type == 'entry') {
           $variables['title'] = "Edit entry";
    }
}