<?php
class Movie {

    public $nome;
    public $lingua;
    public $uscita;

    function __construct($nomeFilm, $linguaFilm, $uscitaFilm){
        $this->nome = $nomeFilm;
        $this->lingua = $linguaFilm;
        $this->uscita = $uscitaFilm;
    }

    public function getFullString(){
        var_dump('Il nome del film è' .' '.$this->nome. ' - '. 'La lingua disponibile è' .' '.$this->lingua. ' - '. 'La data di uscita del film è'.' '.$this->uscita);
    }
}

$avatar = new Movie('Avatar', 'Italiano', '12/05/2007');
//$avatar ->nome = "Avatar";
//$avatar ->lingua = "Italiano";
//$avatar ->uscita = "12/05/2007";
//var_dump($avatar);
//var_dump($avatar->getFullString());

$terminator = new Movie('Terminator', 'Italiano-Inglese', '11/02/1998');
//$terminator ->nome = "Terminator";
//$terminator ->lingua = "Italiano-Inglese";
//$terminator ->uscita = "11/02/1998";
//var_dump($terminator);
//var_dump($terminator->getFullString());


$hachiko = new Movie('Hachiko', 'Giapponese', '19/12/2002');
//$hachiko ->nome = "Hachiko";
//$hachiko ->uscita = "19/12/2002";
//var_dump($hachiko);
//var_dump($hachiko->getFullString());



$jamesBond = new Movie('James Bond', 'Inglese', '01/03/2000');
//$jamesBond ->nome = "James Bond";
//$jamesBond ->lingua = "Inglese";
//$jamesBond ->uscita = "01/03/2000";
//var_dump($jamesBond);
//var_dump($jamesBond->getFullString());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>

    <h2>MOVIE</h2>
        <hr>

    <div>
      <?php echo $avatar->getFullString();?>
      <hr>
    </div>

    <div>
        <?php echo $terminator->getFullString();?>
            <hr>
    </div>

    <div>
        <?php echo $hachiko->getFullString();?>
            <hr>
    </div>

    <div>
        <?php echo $jamesBond->getFullString();?>
            <hr>
    </div>
    
</body>
</html>