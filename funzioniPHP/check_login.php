<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo 'ok';
    //echo "Benvenuto, $username!";//da modificare
} else {
    //echo "Devi effettuare il login per accedere a questa pagina.";
}
