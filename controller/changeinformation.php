<?php require "../autoloader.php" ?>
<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "Hello There";
    $connex = mysqli_connect('localhost', 'root', '', 'onzemillepotes');
    $oldIntel = $_SESSION['email'];
    $newIntel = $_POST['newIntel'];
    $changeInformation = $_POST['changeInformation'];
    $change = new ChangeUserInformation;
    $change->setNewIntel($newIntel);
    $change->setOldIntel($oldIntel);
    $change->setCI($changeInformation);
    $change->intel();

}

?>