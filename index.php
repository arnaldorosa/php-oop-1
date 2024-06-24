<?php 

class Genere{
    public $tipo;
    public $associati;
}

class Movie{
    public $nome;
    public $genere;
    public $lingua;
    public $regista;

    function __construct($nome, $lingua, $genere)
    {
        $this -> nome = $nome;
        $this -> lingua = $lingua;
        if($lingua == 'italiano'){
            $this -> lingua .= ' = lingua non originale';
        }else{
            $this -> lingua .= ' = lingua originale';
        }
    }

    public function getDetails($genere, $regista){
        $this -> genere = $genere;
        $this -> regista = $regista;
    }
}

$star_wars = new Movie('Star Wars', 'italiano', new Genere('fantascienza'));
$star_wars -> getDetails('Fantascienza', 'George Lucas');

$twelve_monkeys = new Movie('Twelve Monkeys', 'inglese', new Genere('fantascienza'));
$twelve_monkeys -> getDetails('Fantascienza', 'Terry Gilliam');


?>
    <div class="container">
        <h1><?php echo $star_wars -> nome ?></h1>
        <p>Lingua: <?php echo $star_wars -> lingua ?></p>
        <p>Genere: <?php echo $star_wars -> genere ?></p>
        <p>Regista: <?php echo $star_wars -> regista ?></p>
    </div>

    <div class="container">
        <h1><?php echo $twelve_monkeys -> nome ?></h1>
        <p>Lingua: <?php echo $twelve_monkeys -> lingua ?></p>
        <p>Genere: <?php echo $twelve_monkeys -> genere ?></p>
        <p>Regista: <?php echo $twelve_monkeys -> regista ?></p>
    </div>