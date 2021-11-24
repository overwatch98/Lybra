<?php

class Database {

    private $db_name = 'lybra';
    private $db_user;
    private $db_pass;
    private $pdo;

    public function __construct( $db_user, $db_pass){
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        if ($this->pdo === null){
            $this->pdo = new PDO("mysql:host=localhost;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        return $this->pdo;        
    }

    public function query($statement){
        $req = $this->pdo->query($statement);
        return $req;
    }

    public function prepare($statement, $params){
        $req = $this->pdo->prepare($statement);
        $req->execute($params);
        return $req;
    }

    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
    
    public function getAll(string $table){
        $req = $this->query("SELECT * FROM $table");
        $data = $req->fetchAll();
        return $data;
    }

    public function find($table, $field, $params) {
        $recod = $this->prepare("SELECT * FROM {$table} WHERE {$field} = ?", [$params]);
        $recod =  $recod->fetch();
        return $recod;
    }

}