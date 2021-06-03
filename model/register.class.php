<?php include "../model/database.php" ?>
<?php

class RegisterNewUser extends Database {

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $dob;
    private $phone;
    public $address;

    //fonction pour enregistrer le nouvel utilisateur dans la base de données
    public function registerUser() {
            $sql = "INSERT INTO user(firstName, lastName, email, password, dob, phone, userAddress) VALUES ( ?, ?, ?, ?, ?, ?, ?)";
            $query = $this->connect()->prepare($sql);
            $query->execute([$this->firstName, $this->lastName, $this->email, $this->password, $this->dob, $this->phone, $this->address]);
            //mettre un header ici !!!
            echo $this->firstName, $this->lastName, $this->email, $this->password, $this->dob, $this->phone, $this->address;
        }

    //fonction pour valider le nom user
    public function setFirstName ($string) {
        $test = $string;
        $test = preg_match("/^[a-zA-Z-' ]*$/",$string);
        if ($test == true) {
            $this->firstName = $string;
            return $this->firstName;
        } else {
            throw new Exception("Le prenom contient des caracteres invalides");
        }
    }

    //fonction pour valider le nom de famille
    public function setLastName ($string) {
        $test = $string;
        $test = preg_match("/^[a-zA-Z-' ]*$/",$string);
        if ($test == true) {
            return $this->lastName = $string;
        } else {
            throw new Exception("Le nom de famille contient des caracteres invalides");
        }
    }


    //fonction pour valider phone number
    public function setPhone($string) {
        $test = $string;
        if (strlen($string) == 10) {
            $test = is_numeric($string);
            if ($test == true) {
                return $this->phone = $string;
            } else {
                throw new Exception("Numero de téléphone invalide");
            }
        }
        else{
            throw new Exception("Numero de téléphone invalide : Le numero doit avoir 10 chiffres");
        }
    }


    //fonction pour valider age
    public function setAge($string) {
        $legalAge = strtotime("18 years ago");
        $userAge = strtotime($string);
        if ($userAge > $legalAge) {
            throw new Exception("Inscription autorisée seulement pour les personnes majeures");
        } else {
            return $this->dob = $string;
        }
    }

    //fonction pour verifier si lutilisateur existe deja
    public function setEmail($email) {

        $sql = "SELECT * FROM user WHERE email = ?";
        $query = $this->connect()->prepare($sql);
        $query->execute([$email]);
        $check = $query->fetch();
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($check['email'] == $email) {
                    throw new Exception("L'utilisateur existe deja");
                } else {
                    return $this->email = $email;
                }
        }
    }


    //fonction pour cryper mot de passe
    public function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);

        return $this->password = $password;

    }


}

?>