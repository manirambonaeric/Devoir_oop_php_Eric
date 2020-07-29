<?php

namespace POO\Boissons\Fanta;
use POO\Boissons\Limonades\Limonades;


class Fanta extends Liomonades{

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