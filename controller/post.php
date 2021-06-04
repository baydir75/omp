<?php include "../autoloader.php" ?>
<?php
session_start();

if (isset($_POST["publishPost"])) {

$newPost = new Post;

$content = $_POST["content"];
$image = $_FILES["image"];
$title = $_POST["title"];
$date = date("y-m-d"); 
$author = $_SESSION["prenom"] ." ". $_SESSION["nom"];

$newPost->setContent($content);
$newPost->setImage($image);
$newPost->setTitle($title);
$newPost->setAuthor($author);
$newPost->setDate($date);
$newPost->uploadImage($image);
$newPost->createArticle();

} 
?>