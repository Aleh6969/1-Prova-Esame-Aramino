<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consorzio Stabilimenti Balneari</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../node_modules/creditcard.js/dist/creditcard.js"></script>
    <script src="../funzioniJS/script.js"></script>
    <script>
        window.onload = function() {
            //window.location.reload();
            checkLoginStatus();
            caricaServizi();
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
            <a href="prenotaServizi.php" id="prenota" style="visibility: hidden;">Prenota Attività</a>
        </div>
        <div>
            <a class="UserProfile" id="UserProfile" href="profilo.php" onclick="" style="visibility: hidden;"></a>
            <a class="Register" id="LogRegOut" onclick="toggleRegLog()">Login/Registrati</a>
        </div>
    </nav>
    <div>
        <p>Scegli l'attivita da prenotare:&nbsp;<select id="select-attivita"></select></p>
    </div>
</body>