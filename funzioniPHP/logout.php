<?php
function logoutBase() {
    $_SESSION = array();
    session_destroy();
    header('Location: '.'../PagineWeb/index.php');
}