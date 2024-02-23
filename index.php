<?php
require_once __DIR__ . '/oop/Movie.php';
require __DIR__ . '/istance/movies.php';
// Movie può guardare movies perchè ho importato il primo nel secondo (guarda riga 2 di movies)
// movies l'ho importato perchè senza non posso leggere l'array dichiarato a riga 13 del file movies 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($movies as $movie) : ?>
    <li>
        <strong><?= $movie->title?>:</strong>
         Regia di <span><?= $movie->directory?>,</span>
         con la partecipazione di <?= $movie->actor?>.
         Data di uscita <?= $movie->relase_date?>
    </li>
    <?php endforeach ?>
    </ul>
</body>
</html>