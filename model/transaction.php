<?php
function get_transactions(){
    require "connexion_bdd.php";
    $requete = $db->prepare("SELECT transactions.id, amount, description, name AS category, pointed FROM transactions JOIN categories ON transactions.category_id = categories.id;");
    $requete->execute();
    $transactions = $requete->fetchAll();
    return $transactions;
}

function pointer_transaction($id){
    require "connexion_bdd.php";
    $requete = $db->prepare("UPDATE transactions SET pointed = 1 WHERE id = ?;");
    $requete->execute(array($id));
}

function ajouter_transaction($montant, $description, $categorie){
    require "connexion_bdd.php";
    $requete = $db->prepare("INSERT INTO transactions (amount, description, category_id) VALUES (?, ?, ?);");
    $requete->execute(array($montant, $description, $categorie));
}