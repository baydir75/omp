<?php

/* Connexion à la base de données */
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pswrd = "";
    private $database = "onzemillepotes";

    protected function connect() {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
        $pdo = new PDO($dsn, $this->user, $this->pswrd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

?>