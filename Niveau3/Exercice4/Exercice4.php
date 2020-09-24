<?php

function show_error($key){
    global $errors;
    return !empty($errors[$key]) ? '<span class="error">' . $errors [$key] . '</span>' : '' ;
}

if(!empty($_POST)){
    if(empty($_POST ["name"])){
        $errors["name"] = "Le nom ne peut être vide";
    }
    if(!preg_match('/@/', $_POST["mail"])){
        $errors["mail"] = "Le champs email doit contenir le caractère @" ;
    }
    if(!preg_match('/^(06|05)([ ][0-9]{2}){4}/', $_POST["tel"])){
        $errors["tel"] = "Le champs téléphone doit être sous la forme (06 ou 05) 00 00 00 00" ;
    }
    if(empty($_POST ["address"])){
        $errors["adress"] = "L'adresse ne peut être vide";
    }
    if(!strlen($_POST["postal"]) == 5){
        $errors["postal"] = "Le code postal doit contenir 5 chiffres seulement.";
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <title>Exercice4: Traitement de Formulaire</title>

    <style>
        
        form {
            margin: 0 auto;
           
            padding: 1em;
          
            border-radius: 1em;
        }

        form div + div {
            margin-top: 1em;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
        }

        input {
            font: 1em sans-serif;
            width: 168px;
            box-sizing: border-box;
            border: 1px solid #999;
        }

        button {
            margin-left: 11.5em;
        }
        
        .error{
            color: red;
        }

    </style>

    <body>

        <form method="post" action="" >
            <?php if(!empty($errors)): ?>
                <legend>Les erreurs ont été trouvées</legend>
            <?php endif; ?>
            <div>
                <label for="name">Nom du client:</label>
                <input type="text" id="name" name="name">
                <?php echo show_error('name') ?>
            </div>
            <div>
                <label for="mail">E-mail :</label>
                <input type="text" id="mail" name="mail">
                <?php echo show_error('mail') ?>
            </div>
            <div>
                <label for="number">Téléphone:</label>
                <input type ="text" id="tel" name="tel">
                <?php echo show_error('tel') ?>
            </div>
            <div>
                <label for="adress">Adresse:</label>
                <input type="text" id="adress" name="adress">
                <?php echo show_error('adress') ?>
            </div>
            <div>
                <label for="postal">Code postal:</label>
                <input type="text" id="postal" name="postal">
                <?php echo show_error('postal') ?>
            </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>
        </form>

    </body>

</html>