<?php

require "database.php";

$images = getAll();

$data = array();

if(count($images) > 0) {

    foreach($images as $image) {

        $format = "data:image;base64,{$image['image']}";

        array_push($data, $format);

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial</title>
</head>
<body>

    <form action="save.php" method="post" enctype="multipart/form-data">
    
        <input type="file" name="image" />

        <button type="submit"> Save </button>
    
    </form>

    <hr />

    <?php foreach($data as $image): ?>
        <img src="<?= $image; ?>" style="width:300px; height:200px" />
    <?php endforeach; ?>
</body>
</html>