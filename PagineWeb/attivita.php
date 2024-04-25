<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attività</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../node_modules/creditcard.js/dist/creditcard.js"></script>
    <script src="../funzioniJS/script.js">
        window.onload = function() {
            checkLoginStatus();
        };
    </script>
</head>
<body>
    <header>
        <h1>Attività</h1>
    </header>
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
    <div>BANANA</div>
</body>
</html>