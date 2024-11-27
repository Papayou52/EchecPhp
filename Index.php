<?php 
spl_autoload_register(function($classe)
{ include "classes/" . $classe . ".class.php"; 
});
// Pieces valides
$p1 = new PieceEchec(5,5,1);
$p1->getCouleur();
$p1->getCouleurCase();
echo $p1;
echo '<br>';
$p2 = new PieceEchec(4,5,2);
$p2->getCouleur();
$p2->getCouleurCase();

echo $p2;
echo '<br>';
// Pieces invalides (coordonées incorrectes)
$p3 = new PieceEchec(1,3,1);
$p3->getCouleur();
$p3->getCouleurCase();
echo $p3;
echo '<br>';


// Pieces invalides (Couleur)
// $p4 = new PieceEchec(1,5,50);
// $p4->getCouleur();
// $p4->getCouleurCase();

// -----Test CAVALIER------
$cavalier1 = new Cavalier(5,5,1);
echo $cavalier1;
echo $cavalier1;
//var_dump($cavalier1);
echo $cavalier1->canGo(7,4) ? "OUI<br>" : "NON<br>"; 
echo $cavalier1->canGo(6,3) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(7,6) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(6,7) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(4,7) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(3,6) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(3,4) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(4,3) ? "OUI<br>" : "NON<br>";
echo $cavalier1->canGo(5,4) ? "OUI<br>" : "NON<br>"; // invalide
//echo $cavalier1->canGo(9,5) ? "OUI<br>" : "NON<br>"; // Plante le programme 

// -----Test FOU------
$fou1 = new Fou(4,3,1);
echo $fou1;
var_dump($fou1);
echo  $fou1 ->canGO(1,1) ? "OUI<br>" : "NON<br>"; 
echo  $fou1 ->canGO(7,8) ? "OUI<br>" : "NON<br>"; 
echo  $fou1 ->canGO(5,4) ? "OUI<br>" : "NON<br>"; 
echo   $fou1 ->canGO(3,2) ? "OUI<br>" : "NON<br>"; 
echo   $fou1 ->canGO(5,2) ? "OUI<br>" : "NON<br>"; 
echo   $fou1 ->canGO(3,4) ? "OUI<br>" : "NON<br>"; 
//echo   $fou1 ->canGO(9,50) ? "OUI<br>" :"NON<br>"; // Plante le programme
echo   $fou1 ->canGO(2,1) ? "OUI<br>" : "NON<br>"; 
echo "<br><br><br>";
echo "<h1>Test du plateau</h1>";
$fou2 = new Fou(3,3,2);
$fou3 = new Fou(4,8,2);
$fou4 = new Fou(7,1,2);
$cavalier2 = new Cavalier(1,1,1);
$cavalier3 = new Cavalier(5,8,1);
$plateau1 = new Plateau();
$plateau1->enregistrer($fou1);
$plateau1->enregistrer($fou2);
$plateau1->enregistrer($fou3);
$plateau1->enregistrer($fou4);
$plateau1->enregistrer($cavalier1);
$plateau1->enregistrer($cavalier2);
//var_dump($cavalier2);
$plateau1->enregistrer($cavalier3);
//var_dump($cavalier3);

$plateau1->testPlateau();



?>