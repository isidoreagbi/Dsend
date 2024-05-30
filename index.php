<?php if (isset($_COOKIE["id"])) {
    header('Location:./pages/discussions.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>D-Send</title>
</head>

<body>
    <?php require_once("./includes/menubar.php") ?>

    <div class="auth-cover-form">
        <form action="/brief/processing/authentication.php" method="post">

            <h1 class="text-center">Se connecter</h1>

            <p class="text-center">Renseignez vos parametres de connexion dans les champs pour vous connecter à votre compte .</p>

            <?php if (isset($_GET['auth']) && $_GET['auth'] == "error") { ?>
                <div class="alert-error">
                    L'adresse e-mail ou le mot de passe que vous avez saisis ne sont pas valides.
                </div>
            <?php } ?>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Saisir l'e-mail ici ... " id="email" name="email" required minlength="6" maxlength="50" : /><br />

            <input type="hidden" name="source" value="login">

            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Saisir le mot de passe ici ... " id="password" name="password" required minlength="6" maxlength="50">
            <br /><br />

            <button class="button w-100">
                Se connecter
            </button>
            <p>
                Pas encore de compte, <a href="/brief/pages/register.php">inscrivez-vous .</a>

            </p>

        </form>
    </div>

</body>

</html>