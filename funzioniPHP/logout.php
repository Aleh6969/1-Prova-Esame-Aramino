<?php
function logoutBase() {
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location: '.'../PagineWeb/index.php');
}
logoutBase();