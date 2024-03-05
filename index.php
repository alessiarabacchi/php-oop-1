<?php
require_once 'Models/Genre.php';
require_once 'Models/Movie.php';
require_once 'Models/TVSerie.php';

$genre = new Genre("Azione", "Film d'azione pieni di avventura e adrenalina.");

$movie = new Movie("Film A", "Inglese", 8, $genre, 1000000, 120);
$tvSerie = new TVSerie("Serie B", "Italiano", 7, $genre, 5);

// Stampa le informazioni
echo "Movie:<br>";
echo "Titolo: " . $movie->getTitle() . "<br>";
echo "Profitti: $" . $movie->getProfits() . "<br>";
echo "Durata: " . $movie->getDuration() . " minuti<br><br>";

echo "TV Serie:<br>";
echo "Titolo: " . $tvSerie->getTitle() . "<br>";
echo "Numero di stagioni: " . $tvSerie->getSeasons() . "<br>";
?>
