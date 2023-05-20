<?php
foreach ($featured as $f)
{
  echo('<div class="featured-container fade"><img class="featured-cover" src="images/covers/'.$f['gameAssetsFileName'].'.jpg" alt="Featured game cover"></img><div class="featured-content"><h2 class="featured-title">'.$f['gameTitle'].'</h2><div class="game-tags-container">');
  $gameTags = explode(';', $f['gameTags']);
  foreach ($gameTags as $gt)
    echo('<div class="game-tags">'.$gt.'</div>');
  echo('</div><p>'.$f['gameDescription'].'</p><div class="featured-footer"><div class="featured-buy-button"><button href="#">BUY NOW</button><p>FOR '.$f['gamePrice'].'$</p></div></div></div></div>');
}
?>