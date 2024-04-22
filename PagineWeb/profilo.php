<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../funzioniJS/script.js"></script>
    <title>Profilo Utente</title>
</head>
<body>
    <h1>Profilo Utente</h1>
    <form>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="button" onclick="updateProfile()">Aggiorna Profilo</button>
    </form>
</body>
</html>
