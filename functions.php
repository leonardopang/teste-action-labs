<?php
if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {
  add_theme_support('block-templates');
  add_theme_support('editor-styles');
  add_theme_support('post-thumbnails');

  add_theme_support('custom-logo', [
    'height'      => 30,
    'width'       => 171,
    'flex-height' => true,
    'flex-width'  => true,
  ]);


  register_nav_menus([
    'primary' => __('Menu Principal', 'teste-action-labs'),
  ]);
});

add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');
  wp_enqueue_style('teste-action-labs-app', get_theme_file_uri('assets/css/app.css'), [], $ver);
  wp_enqueue_style(
    'google-fonts-roboto',
    'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
    [],
    null
  );
});

add_action('enqueue_block_editor_assets', function () {

  wp_enqueue_style(
    'google-fonts-roboto-editor',
    'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
    [],
    null
  );
});

add_action('init', function () {
  register_block_pattern_category('teste-action-labs', [
    'label' => __('Teste Action Labs', 'teste-action-labs'),
  ]);
});
