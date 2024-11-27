<?php 
spl_autoload_register(function($classe)
{ include "classes/" . $classe . ".class.php"; 
});
// Pieces valides
$p1 = new PieceEchec(5,5,1);
$p1->getCouleur();
$p1->getCouleurCase();
$p2 = new PieceEchec(4,5,2);
$p2->getCouleur();
$p2->getCouleurCase();

// Piece invalide (coordonées incorrectes)
$p3 = new PieceEchec(9,5,1);
$p3->getCouleur();
$p3->getCouleurCase();




?>