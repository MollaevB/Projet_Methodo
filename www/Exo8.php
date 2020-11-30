<table>
<tr>
    <th>Cle</th><th>Valeur</th>
</tr>

<?php

    foreach ($_SERVER as $key => $value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }







?>