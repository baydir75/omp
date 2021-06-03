<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/post.php" method="post" enctype="multipart/form-data">

        <label for="title">Titre</label>
        <input type="text" name="title">
        <label for="content">Contenu</label>
        <input type="text" name="content">
        <label for="image">Image</label>
        <input type="file" name="image" accept="image/*">
        <input type="submit" value="Ok" name="publishPost">
    
    </form>

    <?php require "../controller/viewpost.php" ?>
    <?php //$blogPost->getArticle(); ?>
</body>
</html>