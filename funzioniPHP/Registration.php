<?php
// Includi il file di connessione al database
require_once('connessione.php');
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
        $queryRegistrazione = $conn->prepare("INSERT INTO utenti (CODCLN,username, email, password) VALUES (0,:username, :email, :password)");
        $queryRegistrazione->bindValue(':username', $new_username);
        $queryRegistrazione->bindValue(':email', $new_email);
        $queryRegistrazione->bindValue(':password', $new_password);
        if ($queryRegistrazione->execute()) {
            echo "Registrazione avvenuta con successo!";
        } else {
            echo "Errore durante la registrazione.";
        }
    } catch (PDOException $e) {
        echo "Errore di connessione al database: " . $e->getMessage();
    }
}

