<?php 
    function estAnneeBissextile($annee)
      {
         $estMultipleDeQuatreCent = ( ($annee % 400) == 0);
         $estMultipleDeQuatre = ( ($annee % 4) == 0);
         $estPasMultipleDeCent = ( ($annee % 100) != 0);      
         return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre && 
$estPasMultipleDeCent ) );
      }

      
      $nb_annees = 0;
      
      for ($y=1985; $y<=2021;$y++){
            if(estAnneeBissextile($y)){
                $nb_annees = $nb_annees +1;
                
            }
        }
        //echo $nb_annees;
        echo "Vous avez vécu $nb_annees années bissextiles: ";

        for ($y=1985; $y<=2021;$y++){
            if(estAnneeBissextile($y)){
                echo $y;
                echo " ";
            }
        }
        

      if(estAnneeBissextile($y))
            $message = $y." est une année bissextile !<br />";
      else  $message = $y." n'est pas une année bissextile !<br />";
      //echo $message;

     for ($y; $y<=date('Y');$y++){
         if(estAnneeBissextile($y)){
             //echo ("Vous avez vécu ces années bissextiles". "$y,");fggfgf
         }

     }
        
?>
