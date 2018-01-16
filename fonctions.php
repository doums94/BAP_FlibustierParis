<?php

function appel_image(PDO $basededonnes){
    $sql = ' SELECT * FROM bracelet ORDER BY id ASC'
    ;
    $req = $basededonnes->prepare($sql);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}