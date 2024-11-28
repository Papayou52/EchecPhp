<?php 
    
    class Plateau {

        private  $plateau;


        function enregistrer(PieceEchec $piece){
           $this->plateau[] = $piece;
        }

        function testPlateau(int $y, int $x){
            if ($y < 1 || $y > 8 || $x < 1 || $x > 8)
            throw new PieceEchecsException("Les coordonées ne sont pas valide");
            foreach ($this->plateau as $piece) {
                echo get_class($piece).":". $piece;
                echo $piece->canGo($y,$x)? "OUI<br>" : "NON<br>";
            
            }

    }

}



?>