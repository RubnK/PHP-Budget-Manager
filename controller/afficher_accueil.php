<?php
$solde_actuel=0;
$solde_reel=0;
include_once("../model/transaction.php");
$transactions = get_transactions();
foreach($transactions as $transaction){
    if($transaction["pointed"] == 1){
        $solde_actuel += $transaction["amount"];
        $solde_reel += $transaction["amount"];
    }
    else{
        $solde_reel += $transaction["amount"];
    }
}
include_once("../view/accueil.php");