<?php
class Articles{
    private $id_art;
    private $nom_art;
    private $content_art;

    public function __construct($nom, $content){
        $this->nom_art = $nom;
        $this->content_art = $content;
    }

    public function getId():int{
        return $this->id_art;
    }
    public function getNom():string{
        return $this->nom_art;
    }
    public function getContent():string{
        return $this->id_art;
    }

    public function setId($id):void{
        $this->id_art = $id;
    }
    public function setNom($nom):void{
        $this->nom_art  = $nom;
    }
    public function setContent($content):void{
        $this->content_art = $content;
    }

    public function showAllArticle($bdd):array{
        try{
            $req = $bdd->prepare('SELECT * FROM article');
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}

?>