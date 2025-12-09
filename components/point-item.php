<?php
$title  = $args['title'] ?? 'タイトル';
$img_pc = $args['img_pc'] ?? '/assets/point-img-01-pc.jpg';
$img_sp = $args['img_sp'] ?? '/assets/point-img-01-sp.jpg';
$desc   = $args['desc'];
?>
<div class="point-item js-fade-up">
  <figure class="point-item__figure">
    <picture>
      <source srcset="<?= $img_pc; ?>" media="(min-width: 769px)">
      <img class="point-item__img" src="<?= $img_sp; ?>" width="330" height="200" />
    </picture>
  </figure>
  <div class="point-item__contents">
    <div class="point-item__title">
      <span class="point-item__title-label">Point</span>
      <h3 class="point-item__title-text"><span><?= $title; ?></span></h3>
    </div>
    <p class="point-item__description"><?= $desc; ?></p>
  </div>
</div>