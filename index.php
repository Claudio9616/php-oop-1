<?php
class Movie {
    public $title;
    public $actor;
    public $relase_date;
    public $directory;
    public function __construct($title, $directory, $actor, $relase_date){
        $this->title = $title;
        $this->directory = $directory;
        $this->actor = $actor;
        $this->relase_date = $relase_date;
    }
    public function getHello(){
        return $this->title ;
    }
    public function introduce(Movie $movie){
        echo "Ciao {$movie->getHello()}, sono {$this->title}";
    }
}
$movie_1 = new Movie('Star-Wars', 'George Lucas', 'Harrison Ford', 1977);
$movie_2 = new Movie('Star-Trek', 'J.J. Abrams', 'Chris Pine', 2009);
$movie_2->introduce($movie_1);
// a riga 22 movie 2 chiama la funzione introduce e passa come argomento movie 1, a riga 16 mi accerto con il type hint che come argomento
// nel mio parametro mi arriva proprio un movie, adesso in riga 17 metto che movie ( che ha come argomento movie 1) chiama la funzione 
// getHello (che a sua volta mi ritorna il titolo di movie1 poichè è proprio lui che passo come argomento, vedi riga 22, "vedi riga 14");
// sempre a riga 17 poi dico che voglio recuperare il titolo di movie 2 perchè è lei che a riga 22 mi chiama la funzione introduce
var_dump($movie_1, $movie_2);
$movies = [$movie_1, $movie_2];
var_dump($movies);
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