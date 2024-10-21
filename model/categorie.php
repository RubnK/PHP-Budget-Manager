<?php
function get_categories(){
    require "connexion_bdd.php";
    $query = $db->prepare("SELECT * FROM categories");
    $query->execute();
    $categories = $query->fetchAll();
    return $categories;
}

function ajouter_categorie($nom){
    require "connexion_bdd.php";
    $query = $db->prepare("INSERT INTO categories (name) VALUES (?);");
    $query->execute(array($nom));
}