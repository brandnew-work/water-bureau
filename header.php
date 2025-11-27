<?php
  $show_analytics = !is_user_logged_in();
  $show_page_title = !is_front_page();
  $page_title = get_the_title();
  $page_slug = $post->post_name;
  $parent_slug = $post->post_parent ? get_post_field( 'post_name', $post->post_parent ) : ''; // 親slug取得時に使用

  if ( is_archive() || is_single() || is_home() ) {
    $page_title = '新着情報';
    $page_slug = 'News';
  } else if (is_404()) {
    $page_title = 'ページが見つかりません';
    $page_slug = '404';
  }

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php if($show_analytics): ?>
  <?php endif; ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('body') ?>>
  <?php if($show_analytics): ?>
  <?php endif; ?>

  <?php get_template_part('components/header') ?>

  <?php if ( $show_page_title ): ?>
    <div class="page-title">
      <div class="page-title__inner">
        <h1 class="page-title__h1" en="<?= $page_slug ?>">
          <span class="page-title__h1-text"><?= $page_title ?></span>
        </h1>
      </div>
      <div class="page-title__line"></div>
    </div>
  <?php endif; ?>
