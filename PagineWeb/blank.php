<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consorzio Stabilimenti Balneari</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../funzioniJS/script.js"></script>
</head>
<body>
    <header>
        <h1>Consorzio Stabilimenti Balneari</h1>
    </header>
    <nav>
        <div>
            <a href="index.php">Home</a>
            <a href="servizi.php">Servizi</a>
            <a href="tariffe.php">Tariffe</a>
            <a href="contatti.php">Contatti</a>
        </div>
        <div>
            <a class="Register" onclick="CambiaTrasparenza()">Login/Registrati</a>
        </div>
    </nav>
    <div class="container2" id="divForm">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
        <h2>Registrazione</h2>
        <form name="form1" action="registrazione.php" method="POST">
            <label for="new_username">Username:</label><br>
            <input type="text" id="new_username" name="new_username" required><br>
            <label for="new_email">E-mail</label><br>
            <input type="email" id="new_email" name="new_email" onchange="emailValidation(this)"required></input><br>
            <label for="new_password">Password:</label><br>
            <input type="password" id="new_password" name="new_password"required><br><br>
            <input type="submit" value="Registrati">
        </form>
    </div>
</body>