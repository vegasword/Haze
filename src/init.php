<?php
$hazeDb = new PDO(
        'mysql:host=localhost;dbname=haze;charset=utf8',
        'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
$featuredStatement = $hazeDb->prepare('SELECT * from featured f JOIN games g ON (f.gameId=g.gameId)');
$featuredStatement->execute();
$featured = $featuredStatement->fetchAll();
$topsellersStatement = $hazeDb->prepare('SELECT * from topsellers t JOIN games g ON (t.gameId=g.gameId)');
$topsellersStatement->execute();
$topsellers = $topsellersStatement->fetchAll();
$gameTagsStatement = $hazeDb->prepare('SELECT * from gametags');
$gameTagsStatement->execute();
$gameTags = $gameTagsStatement->fetchAll();
?>