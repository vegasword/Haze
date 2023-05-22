<?php
$i = 0;
foreach ($topsellers as $ts)
{
  if ($i%3==0) echo('<div class="top-sellers-row">');
?>
<a href="#" class="top-sellers-col">
  <img src="images/headers/<?=$ts['gameAssetsFileName']?>.jpg" alt=""></img>
  <div class="top-sellers-meta">
    <h3><?=$ts['gameTitle']?></h3>
    <div class="game-tags-container" style="overflow: hidden; justify-content: space-evenly;">
<?php
  $tags = explode(';', $ts['gameTags']);
  $tagsIndices = array_map('intval', $tags);
  $tagsDisplayLimit = 4;
  $j = 0;
  foreach(array_values($tagsIndices) as $t) {
    if ($j >= $tagsDisplayLimit) break;
    $j++;
    echo('<div>'.$gameTags[$t-1]['tags'].'</div>');
  }  
?>
    </div>
  </div>
</a>
<?php
  if (($i+1)%3==0 || $i == count($topsellers) - 1) echo('</div>');
  $i++;
}
?>