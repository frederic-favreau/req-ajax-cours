<?php
try {
    $db = new PDO ('mysql:host=localhost;dbname=biblook_archive;charset=utf8','root');
}
catch(PDOException $e){
    echo "Erreur :" . $e->getMessage();
}

$req = $db->query("SELECT `work`.`title` FROM `work` INNER JOIN `work_genre` ON `work`.`id_work` = `work_genre`.`work_id` WHERE `work_genre`.`genre_id` = 1");


echo json_encode($req->fetchAll(PDO::FETCH_ASSOC));