
<?php

class RaviolesManager extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $ravioles = [];
        $sql = 'SELECT * FROM ravioles';
        foreach ($this->bdd->query($sql) as $row) {
            $ravioles[] = new Ravioles($row['id'], $row['title'], $row['ingredient'], $row['description'], $row['picture']);
        }
        return $ravioles;
//        var_dump($ravioles);
    }

    public function insert(Ravioles $ravioles)
    {
        $title = $ravioles->getTitle();
        $ingredient = $ravioles->getIngredient();
        $description = $ravioles->getDescription();
        $picture = $ravioles->getPicture();
        $req = $this->bdd->prepare("INSERT INTO ravioles (title, ingredient, description, picture) VALUES (?,?,?,?)");
        $req->bindParam(1, $title);
        $req->bindParam(2, $ingredient);
        $req->bindParam(3, $description);
        $req->bindParam(4, $picture);
        $req->execute();
        $ravioles->setId($this->bdd->lastInsertId());
    }

    public function select($id)
    {
        $req = $this->bdd->prepare("SELECT * FROM ravioles WHERE id=?");
        $req->bindParam(1, $id);
        $req->execute();
        $res = $req->fetch();
        $raviole = new Ravioles($res['id'], $res['title'], $res['ingredient'], $res['description'],$res['picture']);
        return $raviole;
    }

    public function delete($id)
    {
        $req = $this->bdd->prepare("DELETE FROM ravioles where id = ?");
        $req->bindParam(1,$id);
        $req->execute();
    }

    public function update(Ravioles $raviole)
    {
        $title = $raviole->getTitle();
        $ingredient = $raviole->getIngredient();
        $description = $raviole->getDescription();
        $picture = $raviole->getPicture();
        $id = $raviole->getId();
        $req = $this->bdd->prepare("UPDATE ravioles SET title = ?, ingredient = ?, description = ?, picture = ? WHERE id = ?");
        $req->bindParam(1,$title);
        $req->bindParam(2,$ingredient);
        $req->bindParam(3,$description);
        $req->bindParam(4,$picture);
        $req->bindParam(5,$id);
        $req->execute();
    }



    public function count(){
        $count = $this->bdd->query('SELECT COUNT(*) AS nb FROM ravioles');
        $res = $count->fetch();
        $nb = $res['nb'];
        return $nb;
    }


    public function orderBy()
    {
        $ravioles = [];
        $sql = 'SELECT * FROM ravioles ORDER BY title';
        foreach ($this->bdd->query($sql) as $row) {
            $ravioles[] = new Ravioles($row['id'], $row['title'], $row['ingredient'], $row['description'], $row['picture']);
        }
        return $ravioles;
    }

    public function orderByDesc(){
        $ravioles = [];
        $sql = 'SELECT * FROM ravioles ORDER BY title DESC';
        foreach ($this->bdd->query($sql) as $row){
            $ravioles[] = new Ravioles($row['id'], $row['title'], $row['ingredient'], $row['description'], $row['picture']);
        }
        return $ravioles;
    }


    public function orderByIngredientAsc(){
        $ravioles = [];
        $sql = 'SELECT * FROM ravioles ORDER BY ingredient';
        foreach ($this->bdd->query($sql) as $row){
            $ravioles[] = new Ravioles($row['id'], $row['title'], $row['ingredient'], $row['description'], $row['picture']);
        }
        return $ravioles;
    }

    public function orderByIngredientDesc()
    {
        $ravioles = [];
        $sql = 'SELECT * FROM ravioles ORDER BY ingredient DESC';
        foreach ($this->bdd->query($sql) as $row) {
            $ravioles[] = new Ravioles($row['id'], $row['title'], $row['ingredient'], $row['description'], $row['picture']);
        }
        return $ravioles;
    }

    public function getColor($data){
        if ($data >= 0 && $data < 4){
            $color = 'orange';
        }
        else if ($data >= 4 && $data < 8){
            $color = 'red';
        }
        else if ($data >= 8 && $data < 12){
            $color = 'purple';
        }
        else if ($data >= 12 && $data < 16){
            $color = 'blue';
        }
        else if ($data >= 16){
            $color = 'limegreen';
        }
        return $color;
    }
}
