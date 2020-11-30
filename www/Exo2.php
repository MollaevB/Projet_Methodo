<html>
    <body>

        <h1> Exo 2 </h1>

        <select>

            <?php 
                $n = rand(5,10);
                for ($i=1 ; $i<$n; $i++){
                echo "<option>$i<option> \n";
                }

            ?>

        </select>


    </body>
</html>