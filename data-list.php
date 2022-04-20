<?php
$files = glob('data/*');

?>
<h1>作成データ</h1>
<ul>
  <?php foreach($files as $file): ?>
  <li><a href="<?= $file; ?>"><?= $file; ?></a></li>
  <?php endforeach; ?>
</ul>
