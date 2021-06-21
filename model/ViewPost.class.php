<?php require "database.php" ?>
<?php 

/* Fonction pour afficher les posts publiaient par les admins */

class ViewPost extends Database {
    private $author;
    private $content;
    private $title;
    private $image;
    private $date;
    private $id;

    /* Chercher les articles dans la base de données */
    public function getArticle() {
        
        $sql = "SELECT * FROM post";
        $query = $this->connect()->prepare($sql);
        $query->execute();

        $result = $query->fetchAll();

        foreach ($result as $row => $item) {
            foreach ($item as $key => $value) {
                if ($key == 'author') {
                    $author = $value;
                } elseif ($key == 'content') {
                    $content = $value;
                } elseif ($key == 'title') {
                    $title = $value;
                } elseif ($key == 'image') {
                    $image = $value;
                } elseif ($key == 'date') {
                    $date = $value;
                } elseif ($key == 'id') {
                    $id = $value;
                }
            }
        }

        /* Afficher l'article sur la page HTML */

        echo "<p>".$title."</p>";
        echo "<img src=".$image.">";
        echo "<p>".$content."</p>";
        echo "<p>".$author."</p>";
        echo "<p>".$id."</p>";
        echo "<p>".$date."</p>";

       /*  echo "<img src=".$result[0]['image'].">";
        echo "<p>".$result[0]['author']."</p>";
        echo "<p>".$result[0]['content']."</p>";

        var_dump($result); */
    }
}



?>