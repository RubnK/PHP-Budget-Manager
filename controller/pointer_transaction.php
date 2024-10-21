<?php
if (!isset($_GET["id"])){
    header("Location: afficher_accueil.php");
}
$id = $_GET["id"];
include_once("../model/transaction.php");
pointer_transaction($id);
header("Location: afficher_accueil.php");