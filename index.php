<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<header>
    <h1>
    🧑🏾‍💻 Formulaire d'inscription
    </h1>

</header>

<body>
    <main>
    </fieldset>
    <legend>
        Remplir les champs ✍🏾
    </legend>

    <form method="post" action="index.php">
    
    <label for="login">Login</label>
    <input type="email" id="login"
    name="login" placeholder="Votre login"
    aria-required="true" required>

    <label for="password"> Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Votre mot de passe"
    aria-required="true" required>

    <label>
        <input type="checkbox" name="admin" value="1"> Vous êtes admin 🔒
    </label>
    <button type="submit">Envoyer 🚀</button>
</form>

</fieldset>
</main>

<?php

include_once __DIR__.'/controller/baseController.php';

print "<p>Valeur à enregistrer en base : " . $admin."</p>";


?>

<footer>
    <p>
        &copy; - PHP - 2025
</p>
</footer>   
    
</body>
</html>