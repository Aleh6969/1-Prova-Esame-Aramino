<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo Utente</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../node_modules/creditcard.js/dist/creditcard.js"></script>
    <script src="../funzioniJS/script.js">
        window.onload = function() {
            checkLoginStatus();
            loadProfile();
        };
    </script>
</head>
<body>
    <h1>Profilo Utente</h1>
    <nav>
        <div>
            <a href="index.php">Home</a>
            <a href="attivita.php">Attività</a>
            <a href="Stabilimenti.php">Stabilimenti</a>
        </div>
        <div>
            <a class="UserProfile" id="UserProfile" href="profilo.php" onclick="" style="visibility: hidden;"></a>
            <a class="Register" id="LogRegOut" onclick="toggleRegLog()">Login/Registrati</a>
        </div>
    </nav>
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
