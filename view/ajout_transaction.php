<!DOCTYPE html>
<html>
<head>
    <title>Add a transaction</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>New transaction</h1>
    <form action="ajouter_transaction.php" method="POST">
        <label for="montant">Amount :</label>
        <input type="number" id="amount" name="amount" min="-100000000" max="100000000" step="0.01" required><br>

        <label for="description">Description :</label>
        <input type="textarea" id="description" name="description" maxlength="500" required><br>

        <label for="category">Category :</label>
        <select id="category" name="category" required>
            <?php if (empty($categories)){ ?>
                <option value="" disabled selected>No category</option>
            <?php }else{?>
                <option value="" disabled selected>Select a category</option>
            <?php } ?>
            <?php foreach ($categories as $categorie){ ?>
                <option value="<?= $categorie["id"] ?>"> <?= $categorie["name"] ?> </option>
            <?php } ?>
        </select>
        <br><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
