<?php

namespace POO\Boissons\Limonades;

Class Limonades{

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