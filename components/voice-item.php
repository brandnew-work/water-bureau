<?php
$title  = $args['name'] ?? '京都市　匿名様';
$type   = $args['type'] ?? '1';
$survey = $args['survey'];
$desc   = $args['text'] ?? '蛇口の水が止まらなくなり、パニックになってしまいましたが、電話で元栓の閉め方を教えていただいたので助かりました。その場で交換もしてい...';

$img = match ($type) {
  '1' => get_theme_file_uri('/assets/voice-icon-f-1.png'),
  '2' => get_theme_file_uri('/assets/voice-icon-f-2.png'),
  '3' => get_theme_file_uri('/assets/voice-icon-m-1.png'),
  '4' => get_theme_file_uri('/assets/voice-icon-m-2.png'),
};
?>
<div class="voice-item js-fade-up">
  <div class="voice-item__contents">
    <div class="voice-item__img-wrap">
      <img class="voice-item__img" src="<?= $img; ?>" load="lazy" width="243" height="243" />
      <?php if ($survey): ?>
        <img class="voice-item__survey" src="<?= $survey; ?>" load="lazy" width="77" height="106" />
      <?php endif; ?>
    </div>
    <h3 class="voice-item__title"><?= $title; ?></h3>
    <p class="voice-item__description"><?= $desc; ?></p>
  </div>
  <?php if ($survey): ?>
    <a href="<?= $survey; ?>" class="voice-item__more js-voice-open">実際のアンケート用紙を見る ＋</a>
  <?php endif; ?>
</div>