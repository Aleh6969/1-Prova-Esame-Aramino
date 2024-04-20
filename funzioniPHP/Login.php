<?php
require_once "connetti.php";
    function check_user($username,$password,$puntaPDO){
        $sql = "SELECT * FROM Studente WHERE Username=:username AND StPassword=:password";
        $result = $puntaPDO-> prepare($sql);
        $result -> bindValue(':username',$username); 
        $result -> bindValue(':password', $password);
        $result -> execute();
        $risultato=$result -> fetch(); //phpAlert($risultato['Username']);
        if ($risultato){return true;}
        else{ return false; }
    }
    session_start(); 
    $pdo = connetti();     
    $loggato=check_user($_POST['user'],$_POST['pass'],$pdo);
    if ($loggato==true) {
        $_SESSION['username']=$_POST['user'];
        $_SESSION['pass']=$_POST['pass'];
        $_SESSION['erroreLogin']=false;
        //phpAlert("Autenticato!");
        header("Location: " . "menu.php");
    }else $_SESSION['erroreLogin']=true;
