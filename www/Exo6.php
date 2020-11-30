<?php

$filename = '../../fichiers/liste6.txt';
$liste6 = file ($filename);

?>





<html>

    <body>

        <?php
            foreach ($liste6 as $ligne) {
                echo"<p><a href='$ligne'>$ligne</a></p>";
                
            }

        ?>

    </body>



</html>