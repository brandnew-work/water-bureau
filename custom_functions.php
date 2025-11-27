<?php
/*
  taxonomy-hogeにてarchive-fuga.phpを使用する
  */
// add_filter('taxonomy_template', function ($template) {
//   return is_tax('hoge') ? locate_template('archive-fuga.php') : $template;
// });


/*
  カスタム投稿タイプの一覧表示件数を制御
  */
// add_action('pre_get_posts', function ($q) {
//   if (is_admin() || !$q->is_main_query()) return;

//   $per_page = 9;
//   $tax = 'hoge';
//   $post_type = 'fuga';

//   if ($q->is_tax($tax)) {
//     $q->set('post_type', $post_type);
//     $q->set('posts_per_page', $per_page);
//     return;
//   }

//   if ($q->is_post_type_archive($post_type)) {
//     $q->set('posts_per_page', $per_page);
//     return;
//   }
// });

?>
