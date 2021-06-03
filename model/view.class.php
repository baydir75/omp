<?php include "../model/database.php" ?>
<?php 

class ViewPost extends Database {
    private $author;
    private $content;
    private $title;
    private $image;
    private $date;
    private $id;

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