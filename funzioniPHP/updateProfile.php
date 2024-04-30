<?php
require_once "alert.php";
session_start();
phpAlert($_POST);
$userid = $_SESSION["CODCLN"];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
require_once "connetti.php";
require_once "logout.php";
$pdo = connetti();
$sqlUsername = "UPDATE Cliente SET UserName = :username WHERE CODCLN = :userid";
$sqlPassword = "UPDATE Cliente SET UserPassword = :password WHERE CODCLN = :userid";
$sqlEmail = "UPDATE Cliente SET UserEmail = :email WHERE CODCLN = :userid";
try {
    if(!empty($username) && !empty(trim($username))) {
        phpAlert("USername");
        $stmt1 = $pdo->prepare($sqlUsername);
        $stmt1->bindParam(':username', $username);
        $stmt1->bindParam(':userid', $userid);
        if(!$stmt1->execute()) new Exception('errore username');
    }
    if(!empty($password) && !empty(trim($password))) {
        $stmt2 = $pdo->prepare($sqlPassword);
        $stmt2->bindParam(':password', $password);
        $stmt2->bindParam(':userid', $userid);
        if(!$stmt2->execute()) new Exception('errore password');
    }
    if(!empty($email) && !empty(trim($email))) {
        $stmt3 = $pdo->prepare($sqlEmail);
        $stmt3->bindParam(':email', $email);
        $stmt3->bindParam(':userid', $userid);
        if(!$stmt3->execute()) new Exception('errore email');
    }
    echo 'success';
    logoutBase();
} catch(PDOException $e) {
    echo '' . $e->getMessage();
}
catch(Exception $e) {
    echo ''. $e->getMessage();
}

