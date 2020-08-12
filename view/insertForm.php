<?php
include ('stylesheet.html');
//function stringRandom($length=5){
//    $chars = 'abcdefghijklmnopqrstuvwxyz';
//    $string = '';
//    for($i=0; $i<$length; $i++){
//        $string .= $chars[rand(0, strlen($chars)-1)];
//    }
//    return mb_convert_encoding($string, "UTF-8");
//}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire d'ajout</title>
</head>
<body>

<div class="d-flex justify-content-center">
    <div class="cadre col-9 bg-light">
        <a href="index.php?controller=default&&action=home">
            <button type='submit' class="btn btn-secondary mt-2 mb-2">retour</button>
        </a>
        <h4 class="text-uppercase border rounded">ajouter une recette</h4>
        <form class="form" method="post" action="index.php?controller=raviole&action=addRaviole">
            <div class="form-group">
                <label for="title"><i class="fas fa-pen-alt"></i>&emsp;titre</label>
                <input class='form-control' type="text" name="title" id="title" placeholder="titre de la recette"/>
            </div>
            <div class="form-group">
                <label for="ingredient"><i class="fas fa-apple-alt"></i>&emsp;ingrédient principal</label>
                <input class="form-control" type="text" name="ingredient" id="ingredient" maxlength="30" placeholder="ingrédient principal">
            </div>
            <div class="form-group">
                <label for="description"><i class="fas fa-comment-dots"></i>&emsp;description</label>
                <textarea class='form-control' name="description" id="description" placeholder="décrivez la recette ici..."></textarea>
            </div>
            <div class="form-group">
                <label for="picture"><i class="far fa-image"></i>&emsp;photo</label>
                <input class='form-control p-1' type="file" name="picture" id="picture">
            </div>
            <div class="form-group">
                <input class='btn btn-primary' type="submit" value="ajouter">
            </div>
        </form>
        <?php
        if (isset($errors)){
        ?>
        <div class="text-danger">
            <h4 class="text-uppercase border rounded p-1 small">liste des erreurs</h4>
            <ul>
                <?php
                foreach ($errors as $error){
                    echo '<li><div class="alert alert-danger" role="alert">'.$error.'</alert></div></li>';
                }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

