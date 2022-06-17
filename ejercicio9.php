<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if ($valorA != $valorB && $valorA > $valorB) {
        echo "El valor A es mayor que el valor B y tambien es diferente a B";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio9.php" method="post">
        <input type="text" name="valorA" id="">
        <input type="text" name="valorB" id="">
        <input type="submit" value="enviar">
    </form>
</body>

</html>