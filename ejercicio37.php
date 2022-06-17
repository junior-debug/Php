<?php

$url = 'https://api.dailymotion.com/videos?channel=sport&limit=10&search=baseball';

$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

$res = file_get_contents($url, false, stream_context_create($opciones));

$objRespuesta = json_decode($res);

// print_r($objRespuesta);

// foreach ($objRespuesta->list as $video) {
//     print_r($video->title) . '<br>';
// }

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
    <ul>
        <?php foreach ($objRespuesta->list as $video) { ?>
            <li>
                <?php echo $video->title . " " . $video->channel ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>