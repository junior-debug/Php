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

    if ($valorA == $valorB) {
        echo "El valor A es igual al valor B <br/>";

        if ($valorA == 4) {
            echo "El valor A es igual a 4 <br/>";
        }
        if ($valorB == 5) {
            echo "El valor B es igual a 5 <br/>";
        }
    }
    if ($valorA == $valorB && $valorA == 4) {
        echo "El valor A es mayor que el valor B y tambien es diferente a B <br/>";
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
    <form action="ejercicio10.php" method="post">
        <input type="text" name="valorA" id="">
        <input type="text" name="valorB" id="">
        <input type="submit" value="enviar">
    </form>
</body>

</html>