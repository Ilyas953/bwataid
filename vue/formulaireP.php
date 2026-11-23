<?php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une œuvre</title>
    <link rel="stylesheet" href="vue/stylef.css">
</head>
<body>

    <main class="container">

        <h1>Ajouter une œuvre</h1>

        <form action="traitement.php" method="POST">

            <div class="form-group">
                <label for="titre">Titre</label>
                <input
                    type="text"
                    id="titre"
                    name="titre"
                    maxlength="150"
                    required
                >
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    maxlength="1000"
                    required
                ></textarea>
            </div>

            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input
                    type="text"
                    id="pseudo"
                    name="pseudo"
                    maxlength="50"
                    required
                >
            </div>

            <button type="submit">Ajouter l'œuvre</button>

        </form>

    </main>

</body>
</html>