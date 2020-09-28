<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Exercice4 Niveau4</title>
  
</head>

<body>

<p>Fichier de test incluant le fichier précédent et qui creé un objet de type form. </p>
      
        <?php
            include('class_form.php');
            //***************************
                    $myform = new form("traitement.php","Accès au site","post");
                    $myform->settext("nom","Votre nom :  ");
                    $myform->settext("code","Votre code : ");
                    $myform->setsubmit();
                    $myform->getform();
        ?>

        <!-- <form action="traitement.php" method="post">
            <fieldset>
                <legend><span>Accès au site</span></legend>
                <span>Votre nom :  </span><input type="text" name="nom" /><br /><br />
                <span>Votre code : </span><input type="text" name="code" /><br /><br />
                <input type="submit" name="envoi" value="Envoyer"/><br />
            </fieldset>
        </form> -->

</body>
</html>