<?php 
class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;

    public function__construct($_title, $_genre, $_year, $_director) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;

    }

}

$killbill = new Movie('Kill Bill: Volume 1','Azione, grottesco, thriller', '2003', 'Quentin Tarantino');

$signoredeglianelli = new Movie('Il Signore degli Anelli - La Compagnia dell Anello', 'Fantasy', '2001', 'Peter Jackson');

$harrypotter = new Movie('Harry Potter e la pietra filosofale', 'Fantasy, avventura', '2001', 'Chris Columbus');

$residentevil = new Movie('Resident Evil', 'Azione, fantascienza, horror', '2002', 'Paul W. S. Anderson');

?>