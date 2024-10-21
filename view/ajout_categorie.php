<!DOCTYPE html>
<html>
<head>
    <title>Add a category</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>New category</h1>
    <form action="ajouter_categorie.php" method="POST">
        <label for="nom">Montant :</label>
        <input type="text" id="nom" name="nom" maxlength="255" required>
        <br><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
