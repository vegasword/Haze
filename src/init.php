<?php
$hazeDb = new PDO(
        'mysql:host=localhost;dbname=haze;charset=utf8',
        'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
$featuredStatement = $hazeDb->prepare('SELECT * FROM games ORDER BY RAND() LIMIT 6');
$featuredStatement->execute();
$featured = $featuredStatement->fetchAll();
$topsellersStatement = $hazeDb->prepare('SELECT * FROM games ORDER BY RAND() LIMIT 9');
$topsellersStatement->execute();
$topsellers = $topsellersStatement->fetchAll();
$gameTagsStatement = $hazeDb->prepare('SELECT * FROM gametags');
$gameTagsStatement->execute();
$gameTags = $gameTagsStatement->fetchAll();
?>