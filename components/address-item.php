<?php
$name     = $args['name'] ?? '宇治市公営企業上下水道部';
$zip      = $args['zip'] ?? '〒611-8501';
$address  = $args['address'] ?? '京都市南区上鳥羽鉾立町11番地3号';
?>
<div class="address-item">
  <h3 class="address-item__title"><?= $name; ?></h3>
  <span class="address-item__address"><?= $zip; ?><br><?= $address; ?></span>
</div>