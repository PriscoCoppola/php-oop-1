<?php 

class Movie {
    public $titolo;
    public $durata;
    public $regista;
    public $data_di_uscita;

    function __construct($titolo, $durata, $regista, $data) {
        $this->titolo = $titolo;
        $this->durata = $durata;
        $this->regista = $regista;
        $this->data_di_uscita = $data;
    }

    public function getGenre($genere) {
        return $genere;
    }
}

// Instanza 1
$shrek = new Movie('Shrek', '104min', 'Vicky Jenson', '15 giugno 2001');
echo '<h1>Titolo: ' . $shrek->titolo . '</h1>';
echo '<h3>Regista: ' . $shrek->regista . '</h3>';
echo '<h3>Genere: ' . $shrek->getGenre('Animazione') . '</h3>';
echo '<small>Data Di Uscita: ' . $shrek->data_di_uscita . '</small><br>';
echo '<small>Durata: ' . $shrek->durata . '</small>';

// Instanza 2 
$scaryMovie = new Movie('Scary Movie', '118min', 'Keenen Ivory Wayans', '1 gennaio 2000');
echo '<h1>Titolo: ' . $scaryMovie->titolo . '</h1>';
echo '<h3>Regista: ' . $scaryMovie->regista . '</h3>';
echo '<h3>Genere: ' . $scaryMovie->getGenre('Parodia') . '</h3>';
echo '<small>Data Di Uscita: ' . $scaryMovie->data_di_uscita . '</small><br>';
echo '<small>Durata: ' . $scaryMovie->durata . '</small>';

?>