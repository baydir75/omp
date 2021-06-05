<?php require "database.php" ?>
<?php
class ChangeUserInformation extends Database {

    private $newIntel;
    private $oldIntel;
    private $changeInformation;

    //fonction pour changer les informations utilisateurs

    public function intel() {
        if ($this->changeInformation == "#changeEmail") {
            $sql = "UPDATE user SET email = ? WHERE email = ?";
            $query = $this->connect()->prepare($sql);
            $query->execute([$this->newIntel, $this->oldIntel]);
            echo $this->newIntel, $this->oldIntel;
        }            
    }

    public function setNewIntel($newIntel) {
        $this->newIntel = $newIntel;
    }

    public function setOldIntel($oldIntel) {
        $this->oldIntel = $oldIntel;
    }

    public function setCI($changeInformation) {
        $this->changeInformation = $changeInformation;
    }
}

    

?>