
<?php

class RaviolesController
{
    public function addForm()
    {
        require('view/insertForm.php');
    }

    public function InsertOnSubmit()
    {
        $errors = [];
        $raviole = new Ravioles(null, $_POST['title'], $_POST['ingredient'], $_POST['description'], $_POST['picture']);
//        var_dump($_POST);
        if (empty($_POST['title'])) {
            $errors[] = 'erreur : le champ title est requis ! ';
        }
//        if (!ctype_alpha($_POST['title'])) {
//            $errors[] = 'erreur : le champ title ne doit contenir que des lettres';
//        }
        if (empty($_POST['ingredient'])) {
            $errors[] = 'erreur : le champ ingredient est requis ! ';
        }
        if(!ctype_alpha($_POST['ingredient'])){
            $errors[] = 'erreur : le champ ingredient ne doit contenir que des lettres';
        }
        if (count($errors) === 0) {
            $raviolesManager = new RaviolesManager();
            $raviolesManager->insert($raviole);
            header('Location: /exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=home');
        } else {
//            var_dump($errors);
            require('view/insertForm.php');
        }
    }

    public function delete($id)
    {
        $ravioleManager = new RaviolesManager();
        $ravioleManager->delete($id);
        header('Location: /exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=home');
    }

    public function getThisById($id){
        $ravioleManager = new RaviolesManager();
        $raviole = $ravioleManager->select($id);
        require ('view/details.php');
    }


    public function updateForm($id)
    {
        $ravioleManager = new RaviolesManager();
        $raviole = $ravioleManager->select($id);
        require ('view/updateForm.php');
    }

    public function updateRaviole($id)
    {
        $errors = [];
        $ravioleManager = new RaviolesManager();
        $raviole = $ravioleManager->select($id);
        $raviole = new Ravioles($id,$_POST['title'], $_POST['ingredient'], $_POST['description'], $_POST['picture']);

        if(empty($_POST['title'])){
            $errors[] = 'erreur : le champ title est requis ! ';
        }
//        if(!ctype_alpha($_POST['title'])){
//            $errors[] = 'erreur : le champ title ne doit contenir que des lettres';
//        }
        if(empty($_POST['ingredient'])){
            $errors[] = 'erreur : le champ ingredient est requis ! ';
        }
//        if(!ctype_alpha($_POST['mail'])){
//            $errors[] = 'erreur : le champ mail ne doit contenir que des lettres';
//        }
        if (count($errors) === 0) {
            $ravioleManager->update($raviole);
            header('Location: /exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=home');
        }
        else{
//            var_dump($errors);
            require('view/updateForm.php');
        }


    }


}