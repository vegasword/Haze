<?php
foreach ($topsellers as $t)
{
  if ($t['id'] == 1) echo('<div class="browse-games-row">');
  echo('<a href="#" class="browse-games-col"><img src="images/headers/'.$t['gameAssetsFileName'].'.jpg" alt=""></img><div class="browse-games-meta"><h3>'.$t['gameTitle'].'</h3><div class="game-tags-container" style="color: white; justify-content: center; text-decoration: none;">');
  $gameTags = explode(';', $t['gameTags']);
  foreach ($gameTags as $gt) echo('<div class="game-tags">'.$gt.'</div>');
  echo('</div></div></a>');
  if ($t['id'] % 3 == 0) echo('</div><div class="browse-games-row">');
  elseif ($t['id'] == count($topsellers)) echo('</div>');
}
?>