<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
    <meta charset="utf-8">
</head>
<body>
    <p> Real balance : <?php echo $solde_reel; ?> </p>
    <p> Actual balance : <?php echo $solde_actuel; ?> </p>
    <table>
        <tr>
            <th>Amount</th>
            <th>Description</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php foreach ($transactions as $transaction){ ?>
            <tr>
            <td> <?=$transaction["amount"] ?> </td>
            <td> <?= $transaction["description"] ?> </td>
            <td> <?= $transaction["category"] ?> </td>
            <?php if ($transaction["pointed"] == "0"){ ?>
                <td><a href="pointer_transaction.php?id=<?= $transaction['id'] ?>">Pointer</a></td>
            <?php
            }
            else{ ?>
                <td><i>Already pointed</i></td>
            <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="afficher_ajout_transaction.php">Add a transaction</a>
    <br><br>
    <a href="afficher_ajout_categorie.php">Add a category</a>
    <style>
        table, tr, td, th  {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</body>
</html>
