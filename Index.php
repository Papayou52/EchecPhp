<?php 
spl_autoload_register(function($classe)
    { include "classes/" . $classe . ".class.php"; 
    });
    // Pieces valides
    echo "<h1>Test de pieces valides</h1>";
    

    // $p4 = new PieceEchec(1,5,50);
    // $p4->getCouleur();
    // $p4->getCouleurCase();

    // -----Test CAVALIER------

    try {
        $cavalier1 = new Cavalier(5,5,1);
        echo $cavalier1;
        echo "<br>";
    }catch (PieceEchecsException $e) {
        echo $e->getMessage()."<br>";
    }
    

    echo "<h1>Test de pieces invalides</h1>";

    try {
        $cavalier10 = new Cavalier(80000,5,1);
        echo $cavalier10;
        echo "<br>";
    }catch (PieceEchecsException $e) {
        echo $e->getMessage()."<br>";
    }
    try {
        $cavalier11 = new Cavalier(5,800000,1);
        echo $cavalier11;
        echo "<br>";
    }catch (PieceEchecsException $e) {
        echo  $e->getMessage()."<br>";
    }
    try {
        $cavalier12 = new Cavalier(5,5,80);
        echo $cavalier12;
        echo "<br>";
    }catch (PieceEchecsException $e) {
        echo $e->getMessage()."<br>";
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
    }catch (PieceEchecsException $e) {
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
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $fou3 = new Fou(4,8,2);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $fou4 = new Fou(7,1,2);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $cavalier2 = new Cavalier(1,1,1);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $cavalier3 = new Cavalier(5,8,1);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $roi1 = new Roi(5,5,1);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $pion1 = new Pion(7,1,1);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $pion2 = new Pion(6,2,1);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }

    try {
        $pion3 = new Pion(2,1,2);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $pion4 = new Pion(3,2,2);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $pion5 = new Pion(5,5,2);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $tour1 = new Tour(5,5,2);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    try {
        $tour2 = new Tour(2,2,2);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }

    $plateauTour = new Plateau();
    $plateauTour -> enregistrer($tour1);
    $plateauTour -> enregistrer($tour2);
    $plateauPionNoirs = new Plateau();
    $plateauPionNoirs -> enregistrer($pion3);
    $plateauPionNoirs -> enregistrer($pion4);
    $plateauPionNoirs -> enregistrer($pion5);
    $plateauPionBlanc = new Plateau();
    $plateauPionBlanc -> enregistrer($pion1);
    $plateauPionBlanc -> enregistrer($pion2);
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
    $plateau1 -> enregistrer($roi1);



    try{
    $plateau1->testPlateau(4,4);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    echo "<br>";
    try{
        $plateauPionBlanc->testPlateau(5,1);
        } catch (PieceEchecsException $e) {
            echo "Erreur : ".$e->getMessage();
        }
echo "<br>";

        try{
        $plateauPionBlanc->testPlateau(6,2);
        } catch (PieceEchecsException $e) {
            echo "Erreur : ".$e->getMessage();
        }
echo "<br>";
    try{
        $plateauPionNoirs->testPlateau(4,1);
        } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
        }
echo "<br>";
    try{
        $plateauPionNoirs->testPlateau(3,1);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
                }
//var_dump($pion2);
echo "<br>";
    try{
        $plateauPionNoirs->testPlateau(4,2);
    } catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
                }
                echo "<br>";
    try{
    $plateauPionNoirs->testPlateau(8,3);
} catch (PieceEchecsException $e) {
    echo "Erreur : ".$e->getMessage();
            }
            echo "<br>";        
    try{
        $plateauTour->testPlateau(1,5);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    echo "<br>";
    try{
        $plateauTour->testPlateau(5,1);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
                }
                echo "<br>";
    try{
        $plateauTour->testPlateau(8,2);
    }catch (PieceEchecsException $e) {
        echo "Erreur : ".$e->getMessage();
    }
    echo "<br>";
   try{
    $plateauTour->testPlateau(2,8);
    }catch (PieceEchecsException $e) {
     echo "Erreur : ".$e->getMessage();
     }
     echo "<br>";
     try{
        $plateauTour->testPlateau(1,1);
        }catch (PieceEchecsException $e) {
         echo "Erreur : ".$e->getMessage();
         }
         echo "<br>";
         try{
            $plateauTour->testPlateau(5,5);
            }catch (PieceEchecsException $e) {
             echo "Erreur : ".$e->getMessage();
             }
             try {
                $tour10 = new Tour(5,5,2);
            } catch (PieceEchecsException $e) {
                echo "Erreur : ".$e->getMessage();
            }
            try {
                $tour11 = new Tour(4,5,2);
            } catch (PieceEchecsException $e) {
                echo "Erreur : ".$e->getMessage();
            }
        echo "<br>";
        try {
            $tour10->peutManger($tour11);
        } catch (PieceEchecsException $e) {
            echo "erreur : ".$e->getMessage();
        }
        
        echo "<br>";
        echo "<br>";
        echo "<br>";

        try {
            $pion50 = new pion(3,3,2);
        } catch (PieceEchecsException $e) {
            echo "Erreur : ".$e->getMessage();
        }

        try {
            $pion55 = new pion(2,2,1);
        } catch (PieceEchecsException $e) {
            echo "Erreur : ".$e->getMessage();
        }

        try {
            $pion55->peutManger($pion50);
        } catch (PieceEchecsException $e) {
            echo "erreur : ".$e->getMessage();
        }


    ?>

