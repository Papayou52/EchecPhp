<?php 
spl_autoload_register(function($classe)
    { include "classes/" . $classe . ".class.php"; 
    });
    // Pieces valides
    echo "<h1>Test de pieces valides</h1>";
    try{
    $p1 = new PieceEchec(5,5,1);
    echo $p1;
    echo '<br>';
    } catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }


    try {
    $p2 = new PieceEchec(4,5,2);
    echo $p2;
    echo '<br>';
    } catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }


    try {
        $p3 = new PieceEchec(1,3,1);
        echo $p3;
        echo '<br>';
    } catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }





    // $p4 = new PieceEchec(1,5,50);
    // $p4->getCouleur();
    // $p4->getCouleurCase();

    // -----Test CAVALIER------

    try {
        $cavalier1 = new Cavalier(5,5,1);
        echo $cavalier1;
        echo "<br>";
    }catch (PieceEchecsExeption $e) {
        echo $e->getMessage();
    }
    

    echo "<h1>Test de pieces invalides</h1>";

    try {
        $cavalier10 = new Cavalier(8,5,1);
        echo $cavalier10;
        echo "<br>";
    }catch (PieceEchecsExeption $e) {
        echo $e->getMessage();
    }
    try {
        $cavalier11 = new Cavalier(5,8,1);
        echo $cavalier11;
        echo "<br>";
    }catch (PieceEchecsExeption $e) {
        echo $e->getMessage();
    }
    try {
        $cavalier12 = new Cavalier(5,5,80);
        echo $cavalier12;
        echo "<br>";
    }catch (PieceEchecsExeption $e) {
        echo $e->getMessage();
    }
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
    echo $cavalier1->canGo(9,5) ? "OUI<br>" : "NON<br>"; // invalide

    // -----Test FOU------
    try {
        $fou1 = new Fou(4,3,1);
    echo $fou1;
        echo "<br>";
    }catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }
    //var_dump($fou1);
    echo  $fou1 ->canGO(1,1) ? "OUI<br>" : "NON<br>"; 
    echo  $fou1 ->canGO(7,8) ? "OUI<br>" : "NON<br>"; 
    echo  $fou1 ->canGO(5,4) ? "OUI<br>" : "NON<br>"; 
    echo   $fou1 ->canGO(3,2) ? "OUI<br>" : "NON<br>"; 
    echo   $fou1 ->canGO(5,2) ? "OUI<br>" : "NON<br>"; 
    echo   $fou1 ->canGO(3,4) ? "OUI<br>" : "NON<br>"; 
    echo   $fou1 ->canGO(9,50) ? "OUI<br>" :"NON<br>"; // invalide
    echo   $fou1 ->canGO(2,1) ? "OUI<br>" : "NON<br>"; 
    echo "<br><br><br>";

    echo "<h1>Test du plateau</h1>";
    try {
        $fou2 = new Fou(3,3,2);
        echo "<br>";
    }catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $fou3 = new Fou(4,8,2);
    }catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $fou4 = new Fou(7,1,2);
    }catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $cavalier2 = new Cavalier(1,1,1);
    }catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $cavalier3 = new Cavalier(5,8,1);
    }catch (PieceEchecsExeption $e) {
        echo "Erreur : ".$e->getMessage();
    }
    
    
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