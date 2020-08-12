<?php

class DefaultController
{

    private $raviolesManager;

    public function __construct()
    {
        $this->raviolesManager = new RaviolesManager();
    }

    public function home(){
        $data = $this->raviolesManager->count();
        $color = $this->raviolesManager->getColor($data);
        $ravioles = $this->raviolesManager->selectAll();
        require ('view/home.php');
    }

    public function orderByNameAsc(){
        $data = $this->raviolesManager->count();
        $ravioles = $this->raviolesManager->orderBy();
        $color = $this->raviolesManager->getColor($data);
        require ('view/home.php');
    }

    public function orderByNameDesc(){
        $data = $this->raviolesManager->count();
        $color = $this->raviolesManager->getColor($data);
        $ravioles = $this->raviolesManager->orderByDesc();
        require ('view/home.php');
    }

    public function orderByIngredientAsc(){
        $data = $this->raviolesManager->count();
        $ravioles = $this->raviolesManager->orderByIngredientAsc();
        $color = $this->raviolesManager->getColor($data);
        require ('view/home.php');
    }

    public function orderByIngredientDesc(){
        $data = $this->raviolesManager->count();
        $color = $this->raviolesManager->getColor($data);
        $ravioles = $this->raviolesManager->orderByIngredientDesc();
        require ('view/home.php');
    }
}