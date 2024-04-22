<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consorzio Stabilimenti Balneari</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../funzioniJS/script.js"></script>
    <script>
        // Funzione per controllare se l'utente è loggato
        function checkLoginStatus() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = xhr.responseText;
                    if (response === "ok") {
                        console.log("L'utente è loggato!");
                    } else {
                        console.log("L'utente non è loggato.");
                    }
                }
            };
            xhr.open("GET", "../funzioniPHP/check_login.php", true);
            xhr.send();
        }
        window.onload = function() {
            checkLoginStatus();
        };
        logout();
    </script>
</head>
<body>
    <header>
        <h1>Consorzio Stabilimenti Balneari</h1>
    </header>
    <nav>
        <div>
            <a href="index.php">Home</a>
            <a href="servizi.php">Servizi</a>
            <a href="truffe.php">Tariffe</a>
            <a href="contatti.php">Contatti</a>
        </div>
        <div>
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
