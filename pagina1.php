<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Declaração de variável
        $dia = 20;
        $mes = 12;

        if ($mes == 1 || $mes == 2 || $mes == 3) {
            if ($mes == 3 and $dia >= 20) {
                echo "<p> Outono </p>";
                echo "<img src='outono.jpg'>";
            } else {
                echo "<p> Verão </p>";
                echo "<img src='verao.jpg'>";
            }
        } else {
            if ($mes == 4 || $mes == 5 || $mes == 6) {
                if ($mes == 6 and $dia >= 20) {
                    echo "<p> Inverno </p>";
                    echo "<img src='inverno.jpg'>";
                } else {
                    echo "<p> Outono </p>";
                    echo "<img src='outono.jpg'>";
                }
            } else {
                if ($mes == 7 || $mes == 8 || $mes == 9) {
                    if ($mes == 9 and $dia >= 22) {
                        echo "<p> Primavera </p>";
                        echo "<img src='primavera.jpg'>";
                    } else {
                        echo("<p> Inverno </p>");
                        echo "<img src='inverno.jpg'>";
                    }
                } else {
                    if ($mes == 10 || $mes == 11 || $mes == 12) {
                        if ($mes == 12 and $dia >= 21) {
                            echo"<p> Verão </p>";
                            echo "<img src='verao.jpg'>";
                        } else {
                            echo"<p> Primavera </p>";
                            echo "<img src='primavera.jpg'>";
                        }
                    }
                }
            }
        }
        
        
    ?>
</body>
</html>

