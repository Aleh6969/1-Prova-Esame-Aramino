<?php
require_once "connetti.php";
function getServiceList(){
    $pdo = connetti();
    $query = $pdo->prepare("SELECT NOME, TARIFFA FROM servizio");
    if($query->execute()){
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
}