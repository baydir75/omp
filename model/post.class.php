<?php  "../model/database.php" ?>
<?php

class Post extends Database {
    private $content;
    private $title;
    private $author;
    private $date;
    private $image;
    public $imageURL;

    public function setContent($content) {
        if ($content) {
            return $this->content = $content;
        }
    }

    public function setTitle($title) {
        if ($title) {
            return $this->title = $title;
        }
    }

    public function setAuthor($author) {
        if ($author) {
            return $this->author = $author;
        }
    }

    public function setDate($date) {
        if ($date) {
            return $this->date = $date;
        }
    }

    public function setImage($image) {
        if ($image) {
            return $this->image = $image;
        }
    }

    public function setImageURL($imageURL) {
        if ($imageURL) {
            return $this->imageURL = $imageURL;
        }
    }

    public function uploadImage($image) {

        $fileName = $image["name"];
        $fileTmpName = $image["tmp_name"];
        $fileSize = $image["size"];
        $fileError = $image["error"];
        $fileType = $image["type"];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');
            
        
            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 500000) {
                        $filenameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = '../images/'.$filenameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        return $this->imageURL = $fileDestination;
                    } else {
                        echo "Fichier trop volumineux";
                    }
                } else {
                    echo "Probleme avec votre fichier";
                }
            } else {
                echo "Fichier non pris en compte";
            }
        
        }

    public function createArticle() {
        $sql = "INSERT INTO post(title, content, image, author, date) VALUES ( ?, ?, ?, ?, ?)";
        $query = $this->connect()->prepare($sql);
        $query->execute([$this->title, $this->content, $this->imageURL, $this->author, $this->date]);
        echo $this->title, $this->content, $this->imageURL, $this->author, $this->date;
    }

}

?>