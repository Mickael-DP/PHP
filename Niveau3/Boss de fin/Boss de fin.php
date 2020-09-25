<?php

function show_error($key){
    global $errors;
    return !empty($errors[$key]) ? '<span class="error">' . $errors [$key] . '</span>' : '' ;
}

if (isset($_POST["submit"])) {

    if(!empty($_POST)){
        if(empty($_POST ["j1"])){
            $errors["j1"] = "Ce champs est obligatoire !";
        }
        if(empty($_POST ["j2"])){
            $errors["j2"] = "Ce champs est obligatoire !";
        }
        if(empty($_POST ["id_match"] && $_POST ["id_match"] > 0 && $_POST ["id_match"] <= 64)){
            $errors["id_match"] = "Ce champs est obligatoire & Choisir  un nombre allant de 1 à 64 !";
        }    
    }
                  
    if ($_FILES["screenshot"]["error"] === 0) {
        $file_name = $_FILES["screenshot"]["name"];
        $file_ext = explode(".", $file_name);
        $file_ext = end($file_ext);
        $file_ext = strtolower($file_ext);
        $allowed_ext = ["png", "jpg", "jpeg"];
        $file_size = $_FILES["screenshot"]["size"];
        $file_tmp = $_FILES["screenshot"]["tmp_name"];
        $file_new_name = $_POST["id_match"] . "_" . $_POST["j1"] . "_" . $_POST["j2"] . "_" . "Win" . $_POST["gg"] . "." . strtoupper($file_ext);
        
    }

    if ($success = !empty($_POST ["j1"]) && !empty($_POST ["j2"]) && !empty($_POST ["id_match"])) {
            move_uploaded_file($file_tmp, "image_uploads/" . $file_new_name);
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boss de fin Niveau 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-4 m-auto">
                <div class="bg-primary p-3">

                    <form action="Boss de fin.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="j1">Joueur 1</label>
                            <input type="text" class="form-control" id="j1" name="j1">
                            <?php echo show_error('j1') ?>
                        </div>

                        <div class="form-group">
                            <label for="j2">Joueur 2</label>
                            <input type="text" class="form-control" id="j2" name="j2">
                            <?php echo show_error('j2') ?>
                        </div>

                        <div class="form-group">
                            <label for="id_match">Identifiant du match</label>
                            <input type="text" class="form-control" id="id_match" name="id_match">
                            <?php echo show_error('id_match') ?>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="radio" name="gg" id="gg1" value="1" class="form-check-input" checked>
                                <label for="gg1" class="form-check-label">Joueur 1</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gg" id="gg2" value="2" class="form-check-input">
                                <label for="gg2" class="form-check-label">Joueur 2</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  id="screenshot" name="screenshot">
                                <label class="custom-file-label" for="screenshot">Uploader votre screenshot</label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-light">Envoyer</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    </div>

</body>
</html>