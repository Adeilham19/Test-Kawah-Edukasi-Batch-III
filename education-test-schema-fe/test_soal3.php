<?php

     echo "Output 1:"."<br>"."<br>";
         $jml_bintang=6;
          for($a=$jml_bintang;$a>0;$a--){
               for($i=$jml_bintang;$i>=$a;$i--){
                    echo "*";
               }
          echo "<br>";
         }
  
     echo "<br>"."<br>"."<br>"; 

     echo "Output 2:"."<br>"."<br>";
          $jml_bintang=6;
               for($a=$jml_bintang;$a>0;$a--){
                    for($i=1; $i<=$a; $i++){
                         echo " &nbsp";
                    }
                    for($a1=$jml_bintang;$a1>=$a;$a1--){
                         echo"*";
                    }
              echo"<br>";
       }
?> 