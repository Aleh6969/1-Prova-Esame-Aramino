<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    return false;
}
function logout() {
    $_SESSION = array();
    session_destroy();
    header('Location: '.'../PagineWeb/index.php');
}