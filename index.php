<?php

  class Movie {
    public $title;
    public $title_original;
    public $actors;
    public $duration;

    // definisco un costruttore
    function __construct($_title, $_title_original, $_actors, $_duration){
      $this->title = $_title;
      $this->title_original = $_title_original;
      $this->actors = $_actors;
      $this->duration = $_duration .' min';

    }

    public function getFullInfo(){
      return 'Titolo: ' . $this->title . ' - Titolo Originale: ' . $this->title_original . '  - Attori: ' . $this->actors. '  - Durata: ' . $this->duration . ' min';
    }


  }

  // istanzio 3 film
  $ilGladiatore = new Movie("Il Gladiatore", "Gladiator", "Russel Crowe", 140);
  $spiderman = new Movie("Spiderman", "Spiderman", "Tom Holland", 120);
  $theTransporter = new Movie("Il Trasportatore", "The Transporter", "Jason Statham", 110);

  // vardump semplice
  var_dump($ilGladiatore);
  var_dump($spiderman);
  var_dump($theTransporter);

  // vardump con methods
  var_dump($ilGladiatore->getFullInfo());
  var_dump($spiderman->getFullInfo());
  var_dump($theTransporter->getFullInfo());
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>PHP OOP 1</title>
</head>

<body>
    <main>

    </main>
</body>

</html>