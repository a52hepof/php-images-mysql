<?php

if(getimagesize($_FILES['image']['tmp_name'])) {

    $image = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $image = file_get_contents($image);
    $image = base64_encode($image);

    require "database.php";

    if(create($name, $image)) {

        echo "Saved successfully!";

    } else {

        echo "Failed save.";

    }

}

header("location: index.php");