<html lang="en">
<head>
<meta charset="UTF-8">
<?php session_start() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../node_modules/creditcard.js/dist/creditcard.js"></script>
    <script src="../funzioniJS/script.js"></script>
    <script>
        window.onload = function() {
            //window.location.reload();
            checkLoginStatus();
            //loadProfile();
        };
    </script>
</head>
<body>
    <header>
        <h1>Profilo Utente</h1>
    </header>
    <nav>
        <div>
            <a href="index.php">Home</a>
            <a href="attivita.php">Attività</a>
            <a href="Stabilimenti.php">Stabilimenti</a>
            <a href="prenotaServizi.php" id="prenota" style="visibility: hidden;">Prenota Attività</a>
        </div>
        <div>
            <a class="UserProfile" id="UserProfile" href="profilo.php" onclick="" style="visibility: hidden;"></a>
            <a class="Register" id="LogRegOut" onclick="toggleRegLog()">Login/Registrati</a>
        </div>
    </nav>
    <form>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="<?php echo $_SESSION["username"]?>"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="<?php echo $_SESSION["email"]?>"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder=""><br><br>
        <button type="button" onclick="updateProfile()">Aggiorna Profilo</button>
    </form>
</body>
</html>
