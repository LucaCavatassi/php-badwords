<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="GET">
        <div>
            <label for="word_to_ban">Word To Hide</label> <br>
            <input type="text" id="word_to_ban" name="hidden_word">
        </div>

        <div>
            <label for="original_text">Full Text</label> <br>
            <textarea name="full_text" id="original_text"></textarea>
        </div>
        <button type="submit">Invio</button>
    </form>
</body>
</html>