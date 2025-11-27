<?php
  $h_tag = is_front_page() ? 'h1' : 'p';
?>

<header class="header">
  <div class="header__inner">
    <div class="header-title">
      <<?= $h_tag ?> class="header-title__text">{sitename}</<?= $h_tag ?>>
    </div>
    <button class="header-nav__btn js-header-nav" aria-label="ナビを開く">
      <div class="header-nav__btn-burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <?php wp_nav_menu([
      'menu'            => 'header-nav',
      'container'       => 'nav',
      'container_class' => 'header-nav',
      'menu_class'      => 'header-nav__list',
    ]); ?>
  </div>
</header>
