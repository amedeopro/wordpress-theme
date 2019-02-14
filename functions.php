<?php

  if (!function_exists('importStyle')) {
    function importStyle(){

      wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
      wp_enqueue_style('boolean', get_template_directory_uri() . '/style.css');

    }

    add_action('wp_enqueue_scripts','importStyle');

  }


 ?>
