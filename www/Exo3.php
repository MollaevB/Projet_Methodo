<html>

    <head>

        <style>
            .odd
            {

                background:#ddd;
            }

        </style>

    </head>

<body>
        

    <?php
            $n=20;

            if($n=20){

                echo"<table>";
                for($i=1; $i<$n; $i++)
                {

                    if ($i%2==0) {
                        $p="PAIR";
                        $s="even";
                    }
                    else{
                        $p="IMPAIR";
                        $s="odd";
                    }
                    echo "<tr class='$s'><td>$i</td><td>$p</td></tr>";


                }
                echo "</table>";





            }
            else{

                echo "<div>Aucune donnee a afficher</div>";
            }


        ?>
</body>

</html>