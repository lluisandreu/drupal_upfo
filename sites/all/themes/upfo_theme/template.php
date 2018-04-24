<?php

/**
 * Implements template_preprocess_html().
 */
/**
 * Implements template_preprocess_html().
 */
function upfo_theme_preprocess_html(&$variables) {
	drupal_add_js('//use.fontawesome.com/595dc80d9b.js', array('type' => 'external'));
	drupal_add_css('//fonts.googleapis.com/css?family=Karla:400,400i,700', array('type' => 'external'));
	if($variables['is_front']) {
		drupal_add_js(drupal_get_path('theme', 'upfo_theme') . '/vendor/owl.carousel/owl.carousel.min.js');
		drupal_add_css(drupal_get_path('theme', 'upfo_theme') . '/vendor/owl.carousel/assets/owl.carousel.min.css');
		drupal_add_css(drupal_get_path('theme', 'upfo_theme') . '/vendor/owl.carousel/assets/owl.theme.default.min.css');
		drupal_add_css(drupal_get_path('theme', 'upfo_theme') . '/vendor/animate/animate.min.css');
	}
}

/**
 * Implements template_preprocess_page.
 */

function upfo_theme_preprocess_page(&$variables) {

	$main_nav = menu_tree_output(menu_tree_all_data('main-menu'), 2);
	$variables['main_nav'] = $main_nav;

  $admin_menu = menu_tree_output(menu_tree_all_data('menu-administrator-menu'), 1);
  $variables['admin_menu'] = $admin_menu;

	 if ($account = menu_get_object('user')) {
      $variables['title'] = t('My account');
      unset($variables['tabs']);
    }
    if (!empty($variables['node']) && $variables['node']->type == 'entry') {
        $variables['title'] = "Edit entry";
    }

}

/**
 * Implements template_preprocess_node.
 */
function upfo_theme_preprocess_node(&$variables) {

}

/**
 * Implements hook_form_alter().
 */
function upfo_theme_form_alter(&$form, &$form_state, $form_id) {
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
  			//$form['field_entry_category']['#access'] = FALSE;
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
    case 'user_login':
      $form['title'] = array(
        '#type' => 'item',
        '#markup' => "<h2>Login to your account</h2>",
        '#weight' => -50,
      );
      $form['register_text'] = array(
        '#type' => 'item',
        '#markup' => "<h4 class='text-center'>Or create a <a href='/user/register'>new account</a></h4>",
        '#weight' => 120,
      ); 

      $form['#attributes']['class'][] = "panel large-8 large-centered column";
      unset($form['actions']['submit']['#attributes']['class'][0]);
      $form['actions']['submit']['#attributes']['class'][] = "success";

      break;
    case 'user_register_form':
      $form['title'] = array(
          '#type' => 'item',
          '#markup' => "<h2>Create a new account</h2>",
          '#weight' => -50,
      );
      unset($form['actions']['submit']['#attributes']['class'][0]);
      $form['#attributes']['class'][] = "panel large-8 large-centered column";
      $form['actions']['submit']['#attributes']['class'][] = "success";
      break;
    case 'user_pass':
      $form['title'] = array(
          '#type' => 'item',
          '#markup' => "<h2>Request new password</h2>",
          '#weight' => -50,
      );
      $form['#attributes']['class'][] = "panel large-8 large-centered column";
      break;
  }

}

function upfo_theme_preprocess_menu_link(&$variables) {
  global $user;
  if($variables['element']['#href'] == "user") {
    if($user->uid) {
      $variables['element']['#title'] = "My account";
    }
  } 
}


function block_render($module, $block_id) {
  $block = block_load($module, $block_id);
  $block_content = _block_render_blocks(array($block));
  $build = _block_get_renderable_array($block_content);
  $block_rendered = drupal_render($build);
  return $block_rendered;
}