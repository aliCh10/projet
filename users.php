<?php

require 'conn.php';

class users
{
    public $id_u;
    public $firstName;
    public $lastName;
    public $adresse;
    public $telephone;
    public $mail;
    public $password;
    public $type;
    public $connected;
//
    function __construct($id_u, $firstName, $lastName, $adresse, $telephone, $mail, $password, $type, $connected)
    {
        $this->id_u = $id_u;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->mail = $mail;
        $this->password = $password;
        $this->type = $type;
        $this->connected = $connected;
    }
    

    function insertion($pdo)
    {
        $uu = $pdo->prepare("INSERT INTO users VALUES (default,?,?,?,?,?,?,?,?)");
        $r = $uu->execute(array($this->firstName, $this->lastName, $this->adresse, $this->telephone, $this->mail, $this->password, $this->type, $this->connected));
        return $r;
    }
    
    
    function getAll($pdo)
    {
        $stmt = $pdo->query("SELECT * FROM users");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    function display($pdo)
{
    $res =$pdo->prepare("SELECT * FROM users");
    $res->execute();
    return $res;
}
function getById($pdo, $id) {
    $res =$pdo->prepare("SELECT * FROM users where id_u=$id");
    $res->execute();
    return $res;
}    
    public function delete ($pdo,$id){
        $st=$pdo->prepare("delete from users where id_u=$id");
        $st->execute();


        
    } 
    public function update ($pdo,$id){
        $st=$pdo->prepare("UPDATE users SET firstName =? ,lastName =?, adresse =?, telephone =?, mail =?,password =?, type =?,connected =? WHERE id_u = $id");
        $res=$st->execute(array($this->firstName,$this->lastName,$this->adresse,$this->telephone,$this->mail,$this->password,$this->type,$this->connected));
        return $res;
    }
}