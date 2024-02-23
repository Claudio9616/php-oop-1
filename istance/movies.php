<?php
require_once __DIR__ . '/../oop/Movie.php';
$movie_1 = new Movie('Star-Wars', 'George Lucas', 'Harrison Ford', 1977);
$movie_2 = new Movie('Star-Trek', 'J.J. Abrams', 'Chris Pine', 2009);
$movie_2->introduce($movie_1);
// OVVIAMENTE GUARDA IL FILE Movie.php!!!!
// a riga 22 movie 2 chiama la funzione introduce e passa come argomento movie 1, a riga 16 mi accerto con il type hint che come argomento
// nel mio parametro mi arriva proprio un movie, adesso in riga 17 metto che movie ( che ha come argomento movie 1) chiama la funzione 
// getHello (che a sua volta mi ritorna il titolo di movie1 poichè è proprio lui che passo come argomento, vedi riga 22, "vedi riga 14");
// sempre a riga 17 poi dico che voglio recuperare il titolo di movie 2 perchè è lei che a riga 22 mi chiama la funzione introduce
var_dump($movie_1, $movie_2);
$movies = [$movie_1, $movie_2];
var_dump($movies);