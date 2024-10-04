<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks-2</title>
</head>
<body>
    <h1>accesso</h1>
    <form method="GET" action="process.php">
        <label for="name">nome</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        
        <label for="mail">mail</label>
        <input type="text" id="mail" name="mail" required>
        <br><br>
        
        <label for="age">età</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        
        <button type="submit">invia</button>
    </form>
</body>
</html>