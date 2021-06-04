<?php require "database.php" ?>
<?php
session_start();
class ChangeUserInformation extends Database {

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $dob;
    private $phone;
    public $address;

    //fonction pour changer les informations utilisateurs

    public function intel($intel) {
        $intel = $_POST["id"];
    }

}

?>