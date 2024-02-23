<?php

// var_dump($_GET);
if(isset($_GET['color'])){
  $newColor = $_GET['color'];
}
  
if(isset($newColor)){
  setcookie(
    name: "header_color",
    value: $newColor,
);  
}else{
  setcookie(
    name: "header_color",
    value: "#12373d"
);
}

$color = $_COOKIE["header_color"] ?? "#121f3d";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Platzi</title>
</head>
<body>

    <header
        style="
            background: <?= $color ?>
        "
    >
        <img src="logo.webp" alt="Platzi">
    </header>
    <form action="./">
      <label for="color">COLOR</label>
      <input type="text" name="color" >
    </form>

    
</body>
</html>