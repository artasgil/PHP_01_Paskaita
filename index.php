<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-PHP-Paskaita</title>

    <style>
        body {
            background-color: green;
        }
    </style>
</head>

<body>

    <div class="<?php echo 'containeris' ?>" </div>



        <?php
        $kazkoksTekstas = "Kazkoks tekstas";
        echo '<div class = "container">';
        echo $kazkoksTekstas;
        echo "</div>";

        ?>


        <?php
        //Kintamieji

        $skaicius1 = 5;
        $skaicius2 = 10;
        $tekstas = "Tekstas";
        $sk = 5.5;
        $tiesa = true;  //Vizualiai nebus atvaziduojamas
        $melas = false; //Vizualiai nebus atvaizduojamas

        $suma = $skaicius1 + $skaicius2;

        echo "Hello";
        echo "<br>";
        echo "Hello dar karta";
        echo "<br>";
        echo $suma . " " . $tekstas; //Tarpas dedamas su tasku

        ?>



        <p>Labas, sitas dokumentas yra lokaliame serveryje</p>

        <script>
            "use strict";

            console.log("labas");
        </script>
</body>

</html>