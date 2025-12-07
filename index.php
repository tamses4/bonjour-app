<!DOCTYPE html>
<html>
<head>
    <title>Bonjour App</title>
</head>
<body>

<h2>Formulaire Bonjour</h2>

<form action="traitement.php" method="POST">
    <label>Nom :</label>
    <input type="text" name="nom" required><br><br>

    <label>Sexe :</label>
    <select name="sexe" required>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select><br><br>

    <button type="submit">Envoyer</button>
</form>

</body>
</html>
