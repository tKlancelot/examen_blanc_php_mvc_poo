<?php
include ('stylesheet.html');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire d'édition</title>
</head>
<body>
<div class="d-flex justify-content-center">

    <div class="cadre col-9 bg-light">
        <a href="index.php?controller=default&&action=home">
            <button class="btn btn-secondary p-1 mt-2 mb-2 text-uppercase">retour</button>
        </a>
        <h4 class="text-uppercase border rounded">modifier la recette de <?php echo $raviole->getTitle();?></h4>

        <form method="post" action="index.php?controller=raviole&action=updateRaviole&id=<?php echo $raviole->getId()?>">
            <div class="form-group">
                <label for="title"><i class="fas fa-pen-alt"></i>&emsp;titre de la recette</label>
                <input name="title" id="title" value="<?php echo $raviole->getTitle()?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="ingredient"><i class="fas fa-apple-alt"></i>&emsp;ingrédient principal</label>
                <input class="form-control" type="text" name="ingredient" id="ingredient" maxlength="30" value="<?php echo $raviole->getIngredient()?>">
            </div>
            <div class="form-group">
                <label for="description"><i class="fas fa-comment-dots"></i>&emsp;description</label>
                <textarea class='form-control' name="description" id="description"><?php echo $raviole->getDescription();?></textarea>
            </div>

            <div class="form-group">
                <label for="picture"><i class="far fa-image"></i>&emsp;photo</label>
                <input class='form-control mb-2' type="text" readonly value="<?php echo $raviole->getPicture()?>"/>
                <input type="file" name="picture" id="picture" class="form-control p-1"/>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" value="valider">
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
                    echo '<li><div class="alert alert-warning" role="alert">'.$error.'</alert></div></li>';
                }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>