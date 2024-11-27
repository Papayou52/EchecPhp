<?php 
    
    class Plateau {

        private static $plateau;


        function enregistrer(PieceEchec $piece){
           self ::$plateau[] = $piece;
        }

        function testPlateau(){

            foreach (self :: $plateau as $piece) {
                echo get_class($piece).":";
                echo $piece->canGo(5,5)? "OUI<br>" : "NON<br>";
            
            }

    }

}



?>