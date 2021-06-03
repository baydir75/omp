<?php require "../model/register.class.php" ?>
<?php

//Execution Code

if (isset($_POST['register'])) {

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

        $newUser = new RegisterNewUser;
        $newUser->setFirstName($firstName);
        $newUser->setLastName($lastName);
        $newUser->setEmail($email);
        $newUser->setPassword($password);
        $newUser->setAge($dob);
        $newUser->setPhone($phone);
        $newUser->address = $address;
        $newUser->registerUser();
    }

?>