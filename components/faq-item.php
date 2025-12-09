<?php
$q  = $args['q'] ?? 'タイトル';
$a  = $args['a'] ?? 'テキスト';
?>
<div class="faq-item js-fade-up">
  <h3 class="faq-item__q accordion">
    <span class="faq-item__q-text"><?= $q; ?></span>
    <span class="faq-item__q-icon"></span>
  </h3>
  <div class="faq-item__a">
    <p class="faq-item__description"><?= $a; ?></p>
  </div>
</div>