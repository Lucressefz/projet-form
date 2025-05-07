<?php

include_once __DIR__.'/controller/baseController.php';

$result = handleform();

?>
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
<?php if ($result): ?>
    <?php if($result['error']): ?>
        <p style="color:purple;">Veuillez remplir tous les champs!</p>
    <?php else: ?>
        <p>login : <?= $result['login'] ?></p>
        <p>mot de passe : <?= $result['password_masked'] ?></p>
        <p>valeur à enregistrer en base : <?= $result['admin'] ?></p>
    <?php endif; ?>

<?php endif; ?>


<footer>
    <p>
        &copy; - PHP - 2025
</p>
</footer>   
    
</body>
</html>