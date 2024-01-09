Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

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
