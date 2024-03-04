<?php
$productions = include 'Data/db.php';

foreach ($productions as $production) {
    echo "Titolo: " . $production->getTitle() . "<br>";
    echo "Lingua: " . $production->getLanguage() . "<br>";
    echo "Voto: " . $production->getRating() . "<br>";
    echo "Genere: " . $production->getGenre()->getName() . "<br><br>";
}
?>