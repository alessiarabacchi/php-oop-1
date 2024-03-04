<?php
require_once 'Genre.php';

class Production {
    private $title;
    private $language;
    private $rating;
    private $genre;

    public function __construct($title, $language, $rating, Genre $genre) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getRating() {
        return $this->rating;
    }

    public function getGenre() {
        return $this->genre;
    }
}
?>