<?php
include("../model/transaction.php");
ajouter_transaction($_POST["amount"], $_POST["description"], $_POST["category"]);
header("Location: afficher_accueil.php");