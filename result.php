<?php 
$hidden = $_GET["hidden_word"];
$full_text = $_GET["full_text"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Full text and legth </h1>
    <h3> <?php echo $full_text ?> </h3>

    <h1> Full text with hidden word.</h1>
</body>
</html>