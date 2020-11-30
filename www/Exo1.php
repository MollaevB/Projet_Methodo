<html>
    <body>
        <h1>Exo 1</h1>
        <?php	

            $macondition= rand(5,10) ;


            if($macondition%2==0)	{	

        ?>

            <p> Condition Paire </p>

            <?php
                }else{
            ?>

                <div> Condition Impaire </div>	

            <?php
                }
            ?>

    </body>

</html>