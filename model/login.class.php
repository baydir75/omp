<?php require "../model/database.php" ?>
<?php

class LoginUser extends Database {

    //fonction pour connecter l'utilisateur
    function logUser ($email, $password) {
            $sql = "SELECT * FROM user WHERE email = ?";
            $query = $this->connect()->prepare($sql);
            $query->execute([$email]);
            $check = $query->fetch();
            $hashPassword = $check['password'];
            if (password_verify($password, $hashPassword)) {
                $sql = "SELECT * FROM user";
                $query = $this->connect()->prepare($sql);
                $query->execute();
                $result = $query->fetchAll();
                foreach ($result as $row=>$item) {
                        $_SESSION['nom'] = $item['lastName'];
                        $_SESSION['prenom'] = $item['firstName'];
                        $_SESSION['email'] = $item['email'];
                        $_SESSION['phone'] = $item['phone'];
                        $_SESSION['dob'] = $item['dob'];
                        $_SESSION['address'] = $item['userAddress'];
                        if ($item['isAdmin'] == 0) {
                            $_SESSION['admin'] = 'YES';
                        } else {
                            $_SESSION['admin'] = 'NO';
                        }
                        header('Location: ../view/UserPage.php');
                            exit;
                      }
                } else {
                echo "No";
                }
        }         
    }

?>