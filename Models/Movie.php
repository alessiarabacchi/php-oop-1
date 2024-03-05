<?php
require_once 'Production.php';

class Movie extends Production {
    private $profits;
    private $duration;

    public function __construct($title, $language, $rating, $genre, $profits, $duration) {
        parent::__construct($title, $language, $rating, $genre);
        $this->profits = $profits;
        $this->duration = $duration;
    }

    public function getProfits() {
        return $this->profits;
    }

    public function getDuration() {
        return $this->duration;
    }
}
?>
