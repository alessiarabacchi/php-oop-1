<?php
require_once 'Production.php';

class TVSerie extends Production {
    private $seasons;

    public function __construct($title, $language, $rating, $genre, $seasons) {
        parent::__construct($title, $language, $rating, $genre);
        $this->seasons = $seasons;
    }

    public function getSeasons() {
        return $this->seasons;
    }
}
?>
