<?php
require_once "alert.php";
//require_once "connetti.php";


function connetti() {
    $host = "localhost";$db_name = "dbStabilimentiBalneari";$port = 3306;$db_user = "root";
    try {
        // $file = fopen("txt.txt","a+");
        $pdo = new PDO("mysql:host={$host};dbname={$db_name};port={$port}", $db_user);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /* fwrite($file,"Connessione riuscita\n\r");
        fclose($file); */
        return $pdo;
    } catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    }
}
session_start();

if(isset($_SESSION["codcln"])) {
    $userid = $_SESSION["codcln"];
    /* $file = fopen("txt.txt","a+");
    fwrite($file,"utente loggato\n\r");
    fclose($file); */ 
} else {
    die("Error");
}
$dp = connetti();
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
function updateUsername($pdo, $userid, $username) {
    /* $file = fopen("txt.txt","a+");
    fwrite($file,"$username, $userid\n\r"); */
    $sqlUsername = "UPDATE Cliente SET UserName = '$username' WHERE CODCLN = $userid;";
    if(!empty(trim($username))) {
        $stmt1 = $pdo->prepare($sqlUsername);
        // fwrite($file,"preparazion query");
        //$stmt1->bindParam(':username', $username);
        //$stmt1->bindParam(':userid', $userid);
        if(!$stmt1->execute()) {
            throw new Exception('Error updating username');
        /* }else{
            fwrite($file,"query eseguita senza errori lanciati");
        } */
        }
    }
    // fclose($file);
}
function updatePassword($pdo, $userid, $password) {
    $sqlPassword = "UPDATE Cliente SET UserPassword = '$password' WHERE CODCLN = $userid;";
    if(!empty(trim($password))) {
        $stmt2 = $pdo->prepare($sqlPassword);
        //$stmt2->bindParam(':password', $password);
        //$stmt2->bindParam(':userid', $userid);
        if(!$stmt2->execute()) {
            throw new Exception('Error updating password');
        }
    }
}
function updateEmail($pdo, $userid, $email) {
    $sqlEmail = "UPDATE Cliente SET UserEmail = '$email' WHERE CODCLN = $userid;";
    if(!empty(trim($email))) {
        $stmt3 = $pdo->prepare($sqlEmail);
        //$stmt3->bindParam(':email', $email);
        //$stmt3->bindParam(':userid', $userid);
        if(!$stmt3->execute()) {
            throw new Exception('Error updating email');
        }
    }
}
/* $file = fopen("txt.txt","a+");
fwrite($file,"$username, $user");
fclose($file); */
try {
    if(isset($_POST["username"])) {
        /* $file = fopen("txt.txt","a+");
        fwrite($file,"username setted"); */
        updateUsername($dp, $userid, $username);
        // fclose($file);
    }
    if(isset($_POST["password"])) {
        updatePassword($dp, $userid, $password);
    }
    if(isset($_POST["email"])) {
        updateEmail($dp, $userid, $email);
    }
    echo 'ok';
    //require_once "logout.php";
} catch(PDOException $e) {
    error_log('Database error: ' . $e->getMessage()); // Log the error
    echo 'An error occurred. Please try again later.';
} catch(Exception $e) {
    error_log('Application error: ' . $e->getMessage()); // Log the error
    echo 'An error occurred. Please try again later.';
}
