<?php
include("../model/categorie.php");
ajouter_categorie($_POST["name"]);
header("Location: afficher_accueil.php");