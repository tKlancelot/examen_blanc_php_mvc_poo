
<?php

include('stylesheet.html');

?>
<div class="d-flex justify-content-center">


    <div class="card m-5" style="width: 28rem;">
        <img style="width: 28rem;height:19rem" class="card-img-top" src="assets/<?=$raviole->getPicture()?>" alt="<?= $raviole->getTitle()?>">
        <div class="card-header text-uppercase">
            détails de <?=$raviole->getTitle();?>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fas fa-pen-alt"></i>&emsp;<?= $raviole->getTitle();?></li>
                <li class="list-group-item"><i class="fas fa-apple-alt"></i>&emsp;<?= $raviole->getIngredient();?></li>
                <li class="list-group-item"><i class="fas fa-comment-dots"></i>&emsp;<?= $raviole->getDescription();?></li>
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="index.php?controller=default&action=home">
                <button type='submit' class="btn btn-secondary mt-2 mb-2">retour</button>
            </a>
        </div>
    </div>
</div>
