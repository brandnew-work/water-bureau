<?php
$show_analytics = !is_user_logged_in();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php if ($show_analytics): ?>
  <?php endif; ?>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('body') ?>>
  <?php if ($show_analytics): ?>
  <?php endif; ?>

  <div class="header">
    <div class="header__logo">
      <img class="header__logo-img" src="<?= get_theme_file_uri('/assets/logo.svg'); ?>" width="22" height="23" />
      <span class="header__logo-text">水道局指定工事店受付センター</span>
    </div>
    <div class="header__cta">
      <div class="header__cta-line">
        <picture>
          <source srcset="<?= get_theme_file_uri('/assets/header-line-cta-pc.png'); ?>" media="(min-width: 1025px)">
          <img class="header__cta-line__img" src="<?= get_theme_file_uri('/assets/header-line-cta-sp.png'); ?>" width="52" height="52" />
        </picture>
      </div>
      <div class="header__cta-tel">
        <picture>
          <source srcset="<?= get_theme_file_uri('/assets/header-tel-cta-pc.png'); ?>" media="(min-width: 1025px)">
          <img class="header__cta-tel__img" src="<?= get_theme_file_uri('/assets/header-tel-cta-sp.png'); ?>" width="52" height="52" />
        </picture>
      </div>
    </div>
  </div>