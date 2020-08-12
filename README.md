# examen_blanc_php_mvc_poo

1 -

<?php

interface LoginRequired{
    public function login($user,$password);
}

class User implements LoginRequired{
    public function login($user,$password){}
}

?>

2 -
la méthode magique __construct :
public function __construct()
{
    echo 'je construis ma classe';
}

la méthode magique __destruct :
public function __destruct();
{
    echo 'je détruis ma classe';
}

la méthode magique __set :
public function __set($name){}

la méthode magique __get :
public function __get($name){}

la méthode magique __isset : //renvoit un boolean
public function __isset($name){}

la méthode magique __unset :
public function __unset($name){}

__construct : Les classes qui possèdent cette méthode appellent cette méthode à chaque création d'une
nouvelle instance de l'objet. On peut ou non passer des paramètres. Tout dépend de ce que l'on souhaite faire
à l'initialisation d'un objet de cette classe.

__destruct: cette méthode est appelée de base à la fin du script, et lorsqu'il n'y a plus de référence sur un objet donné.
Ne prend pas de paramètre.

__set est invoquée lorsqu'on cherche à définir un attribut privé ou inexistant. Elle prend en paramètre le
nom de l'attribut et la valeur qu'on tente de lui passer.

__get : est invoqué lorqu'on cherche à accéder à un attribut inexistant ou privé, prend en paramètre
le nom de l'attribut privé

__isset : on essaye d'appeler la fonction php isset() sur un attribut privé ou inexistant ;
Prend en paramètre le nom de l'attribut dont on cherche à connaître l'existence (avec la fonction php isset())

__unset : on essaye d'appeler la fonction php unset() sur un attribut privé ou inexistant ;
Prend en paramètre le nom de l'attribut que l'on cherche à unset().

3 -

comme on vient de l'évoquer, public function __destruct est appelée implicitement à la fin d'un script.

4 - Il s'agit d'une abstract class. On la déclare comme suit :

abstract class Manger{
    abstract manger(); //Une méthode abstraite
}

5 -
un attribut de type public peut être défini ou lu à l'intérieur comme à l'extérieur de la classe
d'ou il provient.

un attribut private ne peut être défini ou redéfini que dans sa classe et dans les méthodes de cette classe

On aura accès à l'attribut protected dans les objets instanciés et les objets qui en héritent

6 -
Une exception est une classe native à php. Elle possède donc des attributs et des méthodes natives
On peut étendre cette exception .
elle prend en paramètre un message d'erreur et un code d'erreur.
exemple :
$monException = new Exception('message erreur',404);

7 -
Le router est en fait un fichier index.php ou l'on va pouvoir définir des routes.
on parle en fait des données qui transitent par l'url. Notre 'route' est définie
dans l'url, après 'index.php?'
on passe alors par la variable super globale $_GET .

8 - réponse dans le fichier reponses_theo
9 - réponse dans le fichier reponses_theo
