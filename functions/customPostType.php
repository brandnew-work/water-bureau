<?php

/*----------------------------------------------------------
  カスタム投稿の追加
----------------------------------------------------------*/

add_action('init', 'create_post_type');
function create_post_type()
{
  // register_post_type('treatment', [
  //   'labels' => [
  //     'name' => '診療メニュー',
  //     'singular_name' => 'treatment',
  //   ],
  //   'public' => true,
  //   'hierarchical' => true,
  //   'has_archive' => true,
  //   'menu_position' => 6,
  //   'show_in_rest' => true,
  //   'taxonomies' => ['treatment_type'],
  //   'supports' => [
  //     'title',
  //     'editor',
  //     'revisions',
  //     'thumbnail',
  //     'excerpt'
  //   ],
  // ]);
  // register_taxonomy(
  //   'treatment_type',
  //   ['treatment'],
  //   [
  //     'rewrite' => ['slug' => '/treatment'],
  //     'label' => '診療タイプ',
  //     'hierarchical' => true,
  //     'show_admin_column' => true,
  //     'show_ui' => true,
  //     'query_var' => true,
  //     'show_in_rest' => true,
  //   ]
  // );
}

?>
