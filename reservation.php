<?php
require 'conn.php';

class Reservation {
    public $id_reservation;
    public $id_u;
    public $immatriculation;
    public $date_deb;
    public $date_fin;
    public $status;
    
    function __construct($id_reservation, $id_u, $immatriculation, $date_deb, $date_fin, $status) {
        $this->id_reservation = $id_reservation;
        $this->id_u = $id_u;
        $this->immatriculation = $immatriculation;
        $this->date_deb = $date_deb;
        $this->date_fin = $date_fin;
        $this->status = $status;
    }
    
    function insertion($pdo) {
        try {
            $stmt = $pdo->prepare('INSERT INTO reservation (id_u, immatriculation, date_deb, date_fin, status) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute([$this->id_u, $this->immatriculation, $this->date_deb, $this->date_fin, $this->status]);
            return true;
        } catch(PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
            return false;
        }
    }
    

    function getAll($pdo)
    {
        $stmt = $pdo->query("SELECT * FROM reservation");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    function display($pdo)
{
    $res =$pdo->prepare("SELECT * FROM reservation");
    $res->execute();
    return $res;

    
}function getById($pdo, $id) {
    $res =$pdo->prepare("SELECT * FROM reservation where id_reservation =$id");
    $res->execute();
    return $res;
    
    }
}



