<?php
// Includi il file di connessione al database
require_once('connetti.php');
// Verifica se sono stati inviati dati dal form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $new_username = $_POST['new_username'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];

    try {
        // Connessione al database
        $conn = connetti();
        // Preparazione e esecuzione della query per l'inserimento dei dati nel database
        $queryRegistrazione = $conn->prepare("INSERT INTO cliente (CODCLN,username, UserEmail, userpassword) VALUES (0,:username, :email, :password)");
        $queryRegistrazione->bindValue(':username', $new_username);
        $queryRegistrazione->bindValue(':email', $new_email);
        $queryRegistrazione->bindValue(':password', $new_password);
        if ($queryRegistrazione->execute()) {
            session_start();
            try {
                $queryRegistrazione = $conn->prepare("SELECT codcln FROM utenti WHERE username = :username;");
                $queryRegistrazione->bindValue(":username", $new_username);
                $queryRegistrazione->execute();
                $codcln = $queryRegistrazione ->fetch(PDO::FETCH_ASSOC);
            }catch(PDOException $e) {
                die;
            }
            $_SESSION['username'] = $new_username;
            $_SESSION['email'] = $new_email;
            $_SESSION['password'] = $new_password;
            $_SESSION['codcln'] = $codcln;
            var_dump($_SESSION['codcln']);
            header("Location: " . "../PagineWeb/index.php");
        } else {
            echo "Errore durante la registrazione.";
        }
    } catch (PDOException $e) {
        echo "Errore di connessione al database: " . $e->getMessage();
    }
}

