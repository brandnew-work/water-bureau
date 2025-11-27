<?php
$title = get_the_title();
$link = get_the_permalink();
$date_format = get_option('date_format');
$time = get_the_date($date_format);
$datetime = get_the_date('Y-m-d');
?>

<a href="<?= $link ?>" class="post-item <?= $class ?>">
  <div class="post-item__time">
    <time date-time="<?= $datetime ?>"><?= $time ?></time>
  </div>
  <p class="post-item__title"><?= $title ?></p>
</a>
