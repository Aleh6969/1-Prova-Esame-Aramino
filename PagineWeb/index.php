<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consorzio Stabilimenti Balneari</title>
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
        <h1>Consorzio Stabilimenti Balneari</h1>
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
    <div class="container" id="divBase">
        <h2>Benvenuti nel Consorzio Stabilimenti Balneari!</h2>
        <p>Qui potrete trovare tutte le informazioni riguardanti i nostri stabilimenti balneari, i servizi offerti, le tariffe e come contattarci.</p>
        <p>Esplora le varie sezioni attraverso la barra di navigazione sopra.</p>
        <p>ADD SHIT HERE/********************/</p>
    </div>
</body>
</html>
