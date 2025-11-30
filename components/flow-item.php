<?php
$title     = $args['title'] ?? 'タイトル';
$img       = $args['img'] ?? '/assets/flow-img-01.jpg';
$desc      = $args['desc'];
?>
<div class="flow-item">
  <span class="flow-item__label"></span>
  <div class="flow-item__contents">
    <h3 class="flow-item__title"><span><?= $title; ?></span></h3>
    <figure class="flow-item__figure">
      <img class="flow-item__img" src="<?= $img; ?>" width="330" height="200" />
    </figure>
    <p class="flow-item__description"><?= $desc; ?></p>
  </div>
</div>