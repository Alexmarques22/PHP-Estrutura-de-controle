<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de controle</title>
</head>

<body>
    <h1>foreach</h1>Números pares até dez:
    <?php $n = array("dois", "quatro", "seis", "oito", 10);
    foreach ($n as $i) {
        echo $i . ",";
    } ?>

</body>

</html>