<?php
    $nume = $_POST['nume'];
    $parola = $_POST['parola'];
    $contor = 0;

    if($nume == "Hackerman" && $parola == "AmIntrat"){
        echo " Welcome,".$nume;
    }else{
        echo "Parola gresita, mai incearca ^_^";
        $contor++;
    }


?>