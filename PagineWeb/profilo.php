<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo Utente</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../node_modules/creditcard.js/dist/creditcard.js"></script>
    <script src="../funzioniJS/script.js">
        window.onload = function() {
            if(checkLoginStatus() == true){
                loadProfile();
            }
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
        <label for="PFP.username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label><br>
        <input type="PFP.password" id="password" name="password"><br><br>
        <button type="button" onclick="updateProfile()">Aggiorna Profilo</button>
    </form>
</body>
</html>
