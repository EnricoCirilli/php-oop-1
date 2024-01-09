<?php

class Movie {

    public $title;
    public $year;
    public $genre;

    public function __construct($title, $year, $genre) {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getYear() {
        return $this->year;
    }

    public function getGenre() {
        return $this->genre;
    }
}

$movie1 = new Movie("Il Padrino", 1972, "Gangster");
$movie2 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", 2001, "Fantasy");

echo "Il titolo del primo film è: " . $movie1->getTitle() . "<br>";
echo "L'anno di uscita del primo film è: " . $movie1->getYear() . "<br>";
echo "Il genere del primo film è: " . $movie1->getGenre() . "<br>";

echo "Il titolo del secondo film è: " . $movie2->getTitle() . "<br>";
echo "L'anno di uscita del secondo film è: " . $movie2->getYear() . "<br>";
echo "Il genere del secondo film è: " . $movie2->getGenre() . "<br>";
