<?php
try {
    $db = new PDO ('mysql:host=localhost;dbname=biblook;charset=utf8','root');
}
catch(PDOException $e){
    echo "Erreur :" . $e->getMessage();
}
$req= $db->query('SELECT * FROM `genre` LIMIT 1');

echo json_encode($req->fetch(PDO::FETCH_ASSOC));