<?php

require_once 'database.php';

class Learner{
    public $id;

    public $username;
    public $password;

    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

    function add_learner($username, $password, $firstname, $middlename, $lastname, $phone, $address, $age){
        $sql = "INSERT INTO learner (username, password, firstname, middlename, lastname, phone, address, age )VALUES (:username, :password, :firstname, :middlename, :lastname, :phone, :address, :age)";

        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':middlename', $middlename);
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':phone', $phone);
        $query->bindParam(':address', $address);
        $query->bindParam(':age', $age);

       
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM learner ; ";
        $query =  $this->db->connect()->prepare($sql);
        
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }
    
}

?>