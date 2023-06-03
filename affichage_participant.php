<?php
header('Access-Control-Allow-Origin: *');
include 'header.php';

$req = $bdd->prepare("SELECT * FROM `participant` ORDER BY `id` DESC");
$req->execute();

$res = $req->fetchAll();

$retour["success"] = true;
$retour["message"] = "Liste des participants";
$retour["results"]["nbParticipant"] = count($res);

$retour["results"]["participant"] = $res;


echo json_encode($retour);
