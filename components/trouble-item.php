<?php
$title = $args['title'] ?? 'タイトル';
$img   = $args['img'] ?? '/assets/trouble-img-toilet.jpg';
$price = $args['price'] ?? '';
$list  = $args['list'];
?>
<div class="trouble-item js-fade-up">
  <h3 class="trouble-item__title"><?= $title; ?></h3>
  <figure class="trouble-item__figure">
    <img class="trouble-item__img" src="<?= $img; ?>" load="lazy" />
  </figure>
  <div class="trouble-item__price">
    <img src="<?= get_theme_file_uri('/assets/trouble-price-badge.svg') ?>" alt="作業料金" width="77" height="77" class="trouble-item__price-badge">
    <div class="trouble-item__price-text">
      <span class="trouble-item__price-text__tax">(税込)</span>
      <span class="trouble-item__price-text__price"><?= $price; ?></span>
    </div>
  </div>
  <div class="trouble-item__description">
    <?php if ($list): ?>
      <ul class="trouble-item__description-list">
        <?php foreach ($list as $item): ?>
          <li><?= $item; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</div>