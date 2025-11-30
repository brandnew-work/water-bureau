<?php
$title = $args['title'] ?? 'タイトル';
$img   = $args['img'] ?? '/assets/about-img-01.jpg';
$desc  = $args['desc'];
?>
<div class="about-item">
  <h3 class="about-item__title"><?= $title; ?></h3>
  <figure class="about-item__figure">
    <img class="about-item__img" src="<?= $img; ?>" load="lazy" />
  </figure>
  <div class="about-item__contents">
    <p class="about-item__description"><?= $desc; ?></p>
  </div>
</div>