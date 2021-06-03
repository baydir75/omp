<?php require "../model/post.class.php" ?>
<?php

if (isset($_POST["publishPost"])) {

$content = $_POST["content"];
$image = $_FILES["image"];
$title = $_POST["title"];
$date = date("y-m-d"); 
$author = "Baydir";
//$author = $_SESSION["user"];

$newPost = new Post;
$newPost->setContent($content);
$newPost->setImage($image);
$newPost->setTitle($title);
$newPost->setAuthor($author);
$newPost->setDate($date);
$newPost->uploadImage($image);
$newPost->createArticle();

} 
?>