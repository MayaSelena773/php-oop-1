<?php 
class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;

    public function __construct($_title, $_genre, $_year, $_director) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function originalLanguage() {
        return 'english';
    }

}

$killbill = new Movie('Kill Bill: Volume 1','Azione, grottesco, thriller', '2003', 'Quentin Tarantino');

$signoredeglianelli = new Movie('Il Signore degli Anelli - La Compagnia dell Anello', 'Fantasy', '2001', 'Peter Jackson');

$harrypotter = new Movie('Harry Potter e la pietra filosofale', 'Fantasy, avventura', '2001', 'Chris Columbus');

$residentevil = new Movie('Resident Evil', 'Azione, fantascienza, horror', '2002', 'Paul W. S. Anderson');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 1</title>
</head>
<body>

<h1>Film in ordine di uscita:</h1>

<ul>
    <li><?php echo $harrypotter->title; ?> - <?php echo $harrypotter->year; ?></li>
    <li><?php echo $signoredeglianelli->title; ?> - <?php echo $signoredeglianelli->year; ?></li>
    <li><?php echo $residentevil->title; ?> - <?php echo $residentevil->year; ?></li>
    <li><?php echo $killbill->title; ?> - <?php echo $killbill->year; ?></li>
</ul>
    
</body>
</html>