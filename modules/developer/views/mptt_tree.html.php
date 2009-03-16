<?php defined("SYSPATH") or die("No direct script access.") ?>
<div id="gMPTTTree">
  <h2>
    <?= t("MPTT Tree Visuallizer") ?>
  </h2>
  <div id="gMPTT">
  <? if (empty($url)): ?>
    <p class="gWarning"><?= t("The package 'graphviz' is not installed, degrading to text view") ?></p>
    <pre><?= $tree ?></pre>
  <? else: ?>
    <object type="image/svg+xml" data="<?= $url ?>" ><pre><?= $tree ?></pre></object>
  <? endif ?>     
  </div>
</div>
