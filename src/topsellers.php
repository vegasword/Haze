<?php
$i = 0;
foreach ($topsellers as $t)
{
  if ($i%3==0) echo('<div class="top-sellers-row">');
?>
<a href="#" class="top-sellers-col">
  <img src="images/headers/<?=$t['gameAssetsFileName']?>.jpg" alt=""></img>
  <div class="top-sellers-meta">
    <h3><?=$t['gameTitle']?></h3>
    <div class="game-tags-container" style="overflow: hidden; justify-content: space-evenly;">
<?php
  $gameTags = explode(';', $t['gameTags']);
  foreach ($gameTags as $gt) echo('<div>'.$gt.'</div>');
?>
    </div>
  </div>
</a>
<?php
  if (($i+1)%3==0 || $i == count($topsellers) - 1) echo('</div>');
  $i++;
}
?>