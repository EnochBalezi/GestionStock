<?php

require_once('Database.php');
$connexion = new DataBase();

if (isset($_POST['items'])) {
    $req = $connexion->getPdo()->prepare("SELECT Place from classes where Id=?");
    $req->execute([$_POST['items']]);
    $result = $req->fetch();
    echo $result['Place'];
}

if (isset($_POST['items_restant'])) {
    $id = $_POST['items_restant'];
    $query = query("CALL Place_Restant($id)");
    echo $query['places'];
} elseif (isset($_POST['items_occupe'])) {
    $id = $_POST['items_occupe'];
    $query = query("CALL Place_occupe($id)");
    echo $query['places'];
}


function query($statement)
{
    global $connexion;
    $req = $connexion->getPdo()->query($statement);
    $result = $req->fetch();
    return $result;
}
