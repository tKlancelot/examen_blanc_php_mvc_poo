<?php

class Ravioles
{
    private $id;
    private $title;
    private $ingredient;
    private $description;
    private $picture;

    /**
     * Contact constructor.
     * @param $id
     * @param $title
     * @param $ingredient
     * @param $description
     * @param $picture
     */

    public function __construct($id, $title, $ingredient, $description, $picture)
    {
        $this->id = $id;
        $this->title = $title;
        $this->ingredient = $ingredient;
        $this->description = $description;
        $this->picture = $picture;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param mixed $ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

}




