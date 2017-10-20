<?php
declare(strict_types=1);

class Clio {
  protected $portes;
  protected $couleur;
  protected $prix;

  const PORTES1 = 3;
  const PORTES2 = 5;
  const 213800058 = "bleu";
  const 213800059 = "noir";
  const 213800060 = "gris";


 //  public function __construct($portes,$couleur,$prix){
 // $this->setPortes($portes);
 // $this->setCouleur($couleur);
 // $this->setPrix($prix);
 //  }


  // SETTERS
public function setPortes(int $portes){
  $this->portes=$portes;
}

public function setCouleur($couleur){
  $this->couleur=$couleur;
}

public function setPrix(int $prix){
  $this->prix=$prix;
}

  // GETTERS
  public function getPortes(){
    return $this->portes;
  }

public function getCouleur(){
return $this->couleur;
}

public function getPrix(){
return $this->prix;
}

public function getClio(){
  echo $this->portes. " " .$this->couleur. " " .$this->prix. "<br>";
}


// METHODS

public function hydrate($data){
    var_dump($data);
    foreach ($data as $key => $value) {
      $method = "set" .ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function __construct($data) {
$this->hydrate($data);
  }

}

// $voiture1 =  new Clio(5, "grise", 3000);
// $voiture2 = new Clio(3, "noir", 1700);
// $voiture3 = new Clio(5, "doré", 2400);
//
// $voiture1->getClio();
// $voiture2->getClio();
// $voiture3->getClio();

//Instance of new Client
$data = [
  "portes"=>"3",
  "couleur"=>"grise",
  "prix"=>"3000"
];

$voiture1= new Clio($data);
 ?>
