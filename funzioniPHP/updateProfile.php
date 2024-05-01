<?php
require_once "alert.php";
require_once "connetti.php";

session_start();
$pdo = connetti();
if(isset($_SESSION["codcln"])) {
    $userid = $_SESSION["codcln"];
} else {
    die("Error");
}
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
function updateUsername($pdo, $userid, $username) {
    $sqlUsername = "UPDATE Cliente SET UserName = ':username' WHERE CODCLN = :userid";
    if(!empty(trim($username))) {
        $stmt1 = $pdo->prepare($sqlUsername);
        $stmt1->bindParam(':username', $username);
        $stmt1->bindParam(':userid', $userid);
        if(!$stmt1->execute()) {
            throw new Exception('Error updating username');
        }
    }
}
function updatePassword($pdo, $userid, $password) {
    $sqlPassword = "UPDATE Cliente SET UserPassword = ':password' WHERE CODCLN = :userid";
    if(!empty(trim($password))) {
        $stmt2 = $pdo->prepare($sqlPassword);
        $stmt2->bindParam(':password', $password);
        $stmt2->bindParam(':userid', $userid);
        if(!$stmt2->execute()) {
            throw new Exception('Error updating password');
        }
    }
}
function updateEmail($pdo, $userid, $email) {
    $sqlEmail = "UPDATE Cliente SET UserEmail = ':email' WHERE CODCLN = :userid";
    if(!empty(trim($email))) {
        $stmt3 = $pdo->prepare($sqlEmail);
        $stmt3->bindParam(':email', $email);
        $stmt3->bindParam(':userid', $userid);
        if(!$stmt3->execute()) {
            throw new Exception('Error updating email');
        }
    }
}
try {
    if(isset($_POST["username"])) {
        updateUsername($pdo, $userid, $username);
    }
    if(isset($_POST["password"])) {
        updatePassword($pdo, $userid, $password);
    }
    if(isset($_POST["email"])) {
        updateEmail($pdo, $userid, $email);
    }
    echo 'ok';
    require_once "logout.php";
} catch(PDOException $e) {
    error_log('Database error: ' . $e->getMessage()); // Log the error
    echo 'An error occurred. Please try again later.';
} catch(Exception $e) {
    error_log('Application error: ' . $e->getMessage()); // Log the error
    echo 'An error occurred. Please try again later.';
}
