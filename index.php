
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['login']) && isset($_POST['password'])){
        $admin = isset($_POST['admin']) ? 1 : 0;
        print "<p>Valeur à enregistrer en base : " . $admin."</p>";

        }else{
            print "<p>Veuillez remplir tous les champs s'il vous plaît!</p>";

        }
    }
?>
