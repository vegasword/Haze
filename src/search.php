<?php
$query = $_POST['query'];
$queryTags = isset($_POST['gameTags']) ? $_POST['gameTags'] : [];

$results = [];
foreach ($queryTags as $qt) {
    $resultsStatement = $hazeDb->prepare('SELECT * FROM games WHERE FIND_IN_SET($qt, $gameTags)');
    $resultsStatement->execute();
    $results = $resultsStatement->fetchAll();
}

foreach ($results as $r) {
  $tags = explode(';', $r);
?>
<a href="#" class="browse-item">
  <img src="images/headers/<?=$r['gameAssetsFileName']?>.jpg"></img>
  <div class="browse-item-meta">
    <h3><?=$r['gameTitle']?></h3>
    <div class="game-tags-container">
<?php foreach ($tags as $t) { ?> 
      <div class="game-tags"><?=$gameTags[$t]?></div>
<?php } ?>
    </div>
  </div>
  <div class="browse-item-price"><?=$r['gamePrice']?></div>
</a>
<?php } ?>
