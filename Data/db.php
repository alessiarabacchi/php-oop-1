<?php
require_once '../Models/Genre.php';
require_once '../Models/Production.php';

$productions = [
    new Production("Film A", "Inglese", 8, new Genre("Azione", "Film d'azione pieni di avventura e adrenalina.")),
    new Production("Film B", "Italiano", 7, new Genre("Commedia", "Film comici per un pubblico che ama ridere."))
];

return $productions;
?>