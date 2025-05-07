<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1>📜 Formulaire de Connexion</h1>
    </header>
    <main>
     <figcaption>
                <h2>Tu es Développeur 💻</h2>
        </figcaption>
          <fieldset>
    <legend>Remplissez les champs</legend>
   <form method="post" action="">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" required><br><br>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required><br><br>

                <label>
                 <input type="checkbox" name="admin" value="1"> Vous êtes admin
                </label><br><br>

                <button type="submit">Envoyer</button>
     </form>
 <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['login']) && isset($_POST['password'])) {
                  $admin = isset($_POST['admin']) ? 1 : 0;
                print "<p>Valeur à enregistrer en base : " . $admin . "</p>";
                } else {

                    print "<p>Veuillez remplir tous les champs s'il vous plaît!</p>";
               }
            }
            ?>
        </fieldset>
    </main>
</body>
</html>
