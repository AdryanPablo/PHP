<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 14 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        function soma ($num1, $num2) {

            return $num1 + $num2;
            
        }

        $soma = soma (1, 2);

        echo "A soma vale $soma.";

    ?>
    
</body>
</html>