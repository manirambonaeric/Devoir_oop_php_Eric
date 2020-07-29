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

