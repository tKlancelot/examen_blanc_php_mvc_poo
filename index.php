<?php

require_once('include.php');

if (empty($_GET)) {
    header('Location: index.php?controller=default&action=home');
}
if ($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
    $myPage = new DefaultController();
    $myPage->home();
}
else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addForm'){
    $raviolesController = new RaviolesController();
    $raviolesController->addForm();
}
else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addRaviole'){
    $raviolesController = new RaviolesController();
    $raviolesController->InsertOnSubmit();
}

else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $raviolesController = new RaviolesController();
    $raviolesController->delete($_GET['id']);
}
else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'displayOne' && isset($_GET['id'])){
    $raviolesController = new RaviolesController();
    $raviolesController->getThisById($_GET['id']);
}
else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
    $raviolesController = new RaviolesController();
    $raviolesController->updateForm($_GET['id']);
}
else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'updateRaviole' && isset($_GET['id'])){
    $raviolesController = new RaviolesController();
    $raviolesController->updateRaviole($_GET['id']);
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderBy'){
    $defaultController = new DefaultController();
    $defaultController->orderByNameAsc();
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByDesc'){
    $defaultController = new DefaultController();
    $defaultController->orderByNameDesc();
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByIngredientAsc'){
    $defaultController = new DefaultController();
    $defaultController->orderByIngredientAsc();
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByIngredientDesc'){
    $defaultController = new DefaultController();
    $defaultController->orderByIngredientDesc();
}

else
{
    throw new Exception('la page demandée n\'existe pas', 404);
}

?>


