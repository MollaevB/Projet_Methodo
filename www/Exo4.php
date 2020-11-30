<html>

    <body>

        <?php
            $tab= array(

                'titre' => 'PHP "avancé" ' ,
                'vignette' => 'Z:\news\image\oreilly.png',
                'edition' => "O'Reilly",
                'prix' => '$US 15', 



            );
            //print_r($tab);
            echo"<table>";
            foreach($tab as $k=>$element){
                echo"<tr><td>$k</td><td>$element</td></tr>";
            }
            echo"</table>";


        ?>

    </body>

</html>