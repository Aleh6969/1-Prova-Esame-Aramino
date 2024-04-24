<?php
require_once "connetti.php";
function check_user($username, $password, $puntaPDO){
    $sql = "SELECT * FROM cliente WHERE Username=:username AND userpassword=:password";
    $result = $puntaPDO->prepare($sql);
    $result->bindValue(':username', $username); 
    $result->bindValue(':password', $password);
    $result->execute();
    $risultato = $result->fetch();
    if ($risultato){return $risultato['CODCLN'];}
    else { return -1; }
}
session_start(); 
$pdo = connetti();     
$loggato = check_user($_POST['username'], $_POST['password'], $pdo);
if ($loggato >= 1) {
    $_SESSION['username'] = $_POST['username']; $_SESSION['password'] = $_POST['password']; $_SESSION['codcln'] = $loggato; $_SESSION['erroreLogin'] = false;
    header("Location: " . "../PagineWeb/index.php");
} else {
    $_SESSION['erroreLogin'] = true;
}

