<?php 
// PATTERN DA CAMBIARE
$hidden = $_GET["hidden_word"];

// INPUT
$full_text = $_GET["full_text"];

// REPLACEMENT
$replacement = "***"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Full text and length </h1>
    <span> This is the full text <strong><?php echo $full_text ?></strong> and the length is <strong> <?php echo strlen($full_text)?></strong> </span>

    <h1> Full text with hidden word.</h1>
    <span><?php echo str_ireplace($hidden, $replacement, $full_text)?></span>
</body>
</html>