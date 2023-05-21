<?php
foreach ($topsellers as $t)
{
  if ($t['id'] == 1) echo('<div class="top-sellers-row">');
?>
<a href="#" class="top-sellers-col">
  <img src="images/headers/<?=$t['gameAssetsFileName']?>.jpg" alt=""></img>
  <div class="top-sellers-meta">
    <h3><?=$t['gameTitle']?></h3>
    <div class="game-tags-container" style="color: white; justify-content: center; text-decoration: none;">
<?php
  $gameTags = explode(';', $t['gameTags']);
  foreach ($gameTags as $gt) echo('<div class="game-tags">'.$gt.'</div>');
?>
    </div>
  </div>
</a>

<?php
  if ($t['id'] % 3 == 0) echo('</div><div class="top-sellers-row">');
  elseif ($t['id'] == count($topsellers)) echo('</div>');
}
?>