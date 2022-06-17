<?php
$txtNombre = "";
if (isset($_POST['txtNombre'])) {
    $txtNombre = $_POST['txtNombre'];
} else {
    $txtNombre = "";
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
    <?php
    if ($_POST) {
    ?>
        Hola: <?php echo $txtNombre; ?>
    <?php } ?>

    <form action="ejercicio32.php" method="post">
        <input type="text" name="txtNombre" placeholder="nombre" value="<?php echo $txtNombre; ?>">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>