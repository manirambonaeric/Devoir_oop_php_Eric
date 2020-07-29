<?php

namespace oop\Boissons\fanta;
use oop\Boissons\limonades\Limonades;
use oop\Boissons\fanta\Fanta;
/* use oop\Boissons\limonades\Limonades; */


include 'Boissons/limonades.php';
include 'Boissons/fanta.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name=  new limonades ("Citron", "32 cl");


 $name->afficher();
echo "</br></br>";
 $fantas=  new Fanta("Citron", "32 cl");
$fantas->setSorte("coca_cola");
$fantas->setCategorie("alcolisee");
$fantas->Afficher();


?>    
</body>
</html>

fanta;

<?php





class fanta extends liomonades{

    private $sorte;
    private $categorie;

    public function __construct($name, $contenance)
    {
        brarudi:: __construct($name, $contanance);
        
    }



    /**
     * Get the value of pere
     */ 
    public function getSorte()
    {
        return $this->sorte;
    }

    /**
     * Set the value of pere
     *
     * @return  self
     */ 
    public function setSorte($sorte)
    {
        $this->sorte = $sorte;

        return $this;
    }

    /**
     * Get the value of mere
     */ 
    public function getCategorie()
    {
        return $this->categrie;
    }

    /**
     * Set the value of mere
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

     public function Afficher()
    {
        # code...
        echo " C est du limonade appelle ".$this->getSorte()." et sa categorie est ".$this->getCategorie();
    }
}



?>

limonades;

<?php

namespace oop\Boissons\limonades;

Class limonades{

    public $name, $contenance;

    public function __construct($name, $contenance)
{

    $this->name= $name;
    $this->contenance= $contenance;

}

// public function __destruct(){

// }

public function afficher(){

    echo " Le nom du boisson est ".$this->name." et sa contenance est ".$this->contenance;
}

}


?>