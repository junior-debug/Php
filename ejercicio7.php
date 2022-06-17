<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $total = $valorA + $valorB;
    echo "$total" . "<br/>";

    $total = $valorA - $valorB;
    echo "$total" . "<br/>";

    $total = $valorA / $valorB;
    echo "$total" . "<br/>";

    $total = $valorA * $valorB;
    echo "$total" . "<br/>";
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
    <form action="ejercicio7.php" method="post">
        <input type="text" name="valorA" id="">
        <input type="text" name="valorB" id="">
        <input type="submit" value="enviar">
    </form>
</body>

</html>