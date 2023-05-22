<?php
$hazeDb = new PDO(
    'mysql:host=localhost;dbname=haze;charset=utf8',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
$gameTagsStatement = $hazeDb->prepare('SELECT * from gametags');
$gameTagsStatement->execute();
$gameTags = $gameTagsStatement->fetchAll();

$queryTags = isset($_POST['category']) ? $_POST['category'] : [];
if (!empty($queryTags)) {
    $results = [];
    foreach (array_values($queryTags) as $qt) {
        $resultsStatement = $hazeDb->prepare('SELECT * FROM games WHERE FIND_IN_SET(\'' . $qt . '\', REPLACE(gameTags, \';\', \',\'));');
        $resultsStatement->execute();
        $results = $resultsStatement->fetchAll();
    }
    if (isset($results) && !empty($results)) {
        foreach ($results as $r) {
?>
            <a href="#" class="browse-item">
                <img src="images/headers/<?= $r['gameAssetsFileName'] ?>.jpg"></img>
                <div class="browse-item-meta">
                    <h3><?= $r['gameTitle'] ?></h3>
                    <div class="game-tags-container">
                        <?php
                        $tags = explode(';', $r['gameTags']);
                        $tagsIndices = array_map('intval', $tags);
                        foreach (array_values($tagsIndices) as $t) {
                        ?>
                            <div class="game-tags"><?= $gameTags[$t - 1]['tags'] ?></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="browse-item-price"><?= $r['gamePrice'] ?>$</div>
            </a>
<?php
        }
    }
}
else {
    $gamesStatement = $hazeDb->prepare('SELECT * FROM games ORDER BY RAND() LIMIT 10');
    $gamesStatement->execute();
    $games = $gamesStatement->fetchAll();
    foreach ($games as $g) {
?>
        <a href="#" class="browse-item">
            <img src="images/headers/<?= $g['gameAssetsFileName'] ?>.jpg"></img>
            <div class="browse-item-meta">
                <h3><?= $g['gameTitle'] ?></h3>
                <div class="game-tags-container">
                    <?php
                    $tags = explode(';', $g['gameTags']);
                    $tagsIndices = array_map('intval', $tags);
                    foreach (array_values($tagsIndices) as $t) {
                    ?>
                        <div class="game-tags"><?= $gameTags[$t - 1]['tags'] ?></div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="browse-item-price"><?= $g['gamePrice'] ?>$</div>
        </a>
<?php
    }
}
?>