<?php

$filename = '../../fichiers/liste7.txt';
$liste7 = file ($filename);

?>





<html>

    <body>

        <?php
            foreach ($liste7 as $i=>$ligne) {
                $tab = explode(" ", $ligne, 2);
                $class= ($i%2==0?'dark':'lite');
                echo"<p class='$class'><a href='$tab[0]'>$tab[1]</a></p>";
                
            }

            

        ?>

        <style>	
            .class{	background:	#FF3388}	
        </style>	


    </body>



</html>