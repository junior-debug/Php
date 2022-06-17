<?php
$txtNombre = "";
$rdgLike = "";
$chkPhp = "";
$chkHtml = "";
$chkCss = "";
$comentario = "";

if ($_POST) {
    $chkPhp = (isset($_POST['chkPhp']) == "si") ? "checked" : "";
    $chkHtml = (isset($_POST['checkHtml']) == "si") ? "checked" : "";
    $chkCss = (isset($_POST['checkCss']) == "si") ? "checked" : "";
    $anime = (isset($_POST['anime'])) ? $_POST['anime'] : "";
    $comentario = (isset($_POST['comentario'])) ? $_POST['comentario'] : "";
    print_r($_POST);
}

if (isset($_POST['txtNombre'])) {
    $txtNombre = $_POST['txtNombre'];
} else {
    $txtNombre = "";
}

if (isset($_POST['rdgLike'])) {
    $rdgLike = $_POST['rdgLike'];
    echo $rdgLike;
} else {
    $rdgLike = "";
}

//instrucciones alterar//
//recibir valore de formularios//
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

    <form action="ejercicio33.php" method="post">
        <input type="text" name="txtNombre" placeholder="nombre" value="<?php echo $txtNombre; ?>">

        <p>te gusta?</p>
        <p>php:</p> <input type="radio" <?php echo ($rdgLike == "php") ? "checked" : "" ?> name="rdgLike" value="php" id="">
        <p>html:</p> <input type="radio" <?php echo ($rdgLike == "html") ? "checked" : "" ?> name="rdgLike" value="html" id="">
        <p>css:</p> <input type="radio" <?php echo ($rdgLike == "css") ? "checked" : "" ?> name="rdgLike" value="css" id="">
        <p>te gusta el lenguaje</p> <?php echo ($rdgLike != '') ? $rdgLike : $rdgLike = "" ?>

        <p>estas aprendiendo...</p>

        <br> php: <input type="checkbox" value="si" name="chkPhp" <?php echo $chkPhp; ?> id="">
        <br> html: <input type="checkbox" value="si" name="chkHtml" <?php echo $chkHtml; ?> id="">
        <br> css: <input type="checkbox" value="si" name="chkCss" <?php echo $chkCss; ?> id="">

        <p>que anime te gusta?...</p>

        <select name="anime" id="">
            <option value="">selecciona una opcion</option>
            <option value="naruto" <?php echo (isset($anime) == 'naruto') ? "selected" : ""; ?>>naruto</option>
            <option value="dragon" <?php echo (isset($anime) == 'dragon') ? "selected" : ""; ?>>dragon ball</option>
            <option value="onepiece" <?php echo (isset($anime) == 'onepiece') ? "selected" : ""; ?>>one piece</option>
        </select>

        <br> <textarea name="comentario" id="" cols="30" rows="10">
            <?php echo $comentario; ?>
        </textarea>

        <br> <input type="submit" value="Enviar">
    </form>
</body>

</html>