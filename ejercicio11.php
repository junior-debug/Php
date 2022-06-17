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

    if ($valorA > $valorB) {
        echo "a es mayor que b";
    } elseif ($valorA == $valorB) {
        echo "a es igual que b";
    } else {
        echo "a es menor que b";
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
    <form action="ejercicio11.php" method="post">
        <input type="text" name="valorA" id="">
        <input type="text" name="valorB" id="">
        <input type="submit" value="enviar">
    </form>
</body>

</html>